require(
    [
        'jquery',
        'Magento_Ui/js/modal/modal'
    ],
    function(
        $,
        modal
    ) {
        let options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            title: '',
            modalClass: 'custom-modal-horizon',
            buttons: []
        };

        let $myModal = $('#age_gate');
        let popup = modal(options, $myModal);
    
        //this opens the modal, you can use some click event or whatever you need to trigger the modal here


        function ageCalculate(dateString){

            var dob = new Date(dateString);

            //calculate month difference from current date in time
            var month_diff = Date.now() - dob.getTime();

            //convert the calculated difference in date format
            var age_dt = new Date(month_diff);

            //extract year from date
            var year = age_dt.getUTCFullYear();

            //now calculate the age of the user
            var age = Math.abs(year - 1970);

            return age;
        }


        var cookieValue = $.cookie('diageo-gateway');
        var cookieParse = $.parseJSON(cookieValue);

        var age_verify = 0;

        var nonMuslimArray = ['TJ','QA','MV','MY'];

        var mondayYearArray = ['ZW','US','FM'];

        var yearmonDayArray = ['TW','MN','LT','KR','KP','JP','HU','HK','CN','AF'];

        var diageoRemember = $.cookie('diageo-remember');


        if(diageoRemember == true)
        {
            $('#age_checkbox_remember_me').attr('checked');
        }

        if($.cookie('diageo-gateway') == null || cookieParse.pass == '' || cookieParse.pass != true)
        {
            $myModal.modal('openModal');
        }

        $('#age_select_country').change(function() {

            $('#age_verification_message').hide();
            $('#age_missing_message').hide();

            var countryVal = $(this).val();
            var labelCountry = $('#age_select_country option:selected').text();

            $("#show_selected_country").text(labelCountry);
            $('#show_selected_country').attr('data-country',countryVal);
            age_verify = $('#age_select_country option:selected').attr('data-age');
            $('#age-verify').val(age_verify);

            /*if(jQuery.inArray(countryVal, mondayYearArray) !== -1)
            {
                $('.age_gate_1').show();
                $('.age_gate_2').hide();
                $('.age_gate_3').hide();

            } else if(jQuery.inArray(countryVal, yearmonDayArray) !== -1){

                $('.age_gate_2').show();
                $('.age_gate_1').hide();
                $('.age_gate_3').hide();
            } else{
                $('.age_gate_3').show();
                $('.age_gate_1').hide();
                $('.age_gate_2').hide();
            }*/



            if(jQuery.inArray(countryVal, nonMuslimArray) !== -1)
            {
                $('#age_affirm_text_box').html('<input type="checkbox" name="age_affirm_non_muslim" id="age_checkbox_affirm_non_muslim"/>Yes, I am a non-Muslim and aged '+age_verify+' years and above');
                $('#age_confirm_non_muslim').show();
                $('#age_confirm_non_muslim').removeClass('nonmuslimhide');
                $('#age_confirm_non_muslim').removeClass('nonmuslimshow');

                $('#partial-verify').val(1);
            } else{
                $('#age_confirm_non_muslim').hide();
                $('#age_confirm_non_muslim').addClass('nonmuslimhide');
                $('#partial-verify').val(0);
            }
        });


        $('#age_confirm_btn').click(function(){
        
            if($('#age_select_day').val() == -1 || $('#age_select_month').val() == -1 || $('#age_select_year').val() == -1)
            {
                $('#age_missing_message').show();
                $('#age_age_group').addClass('age_missing');
            } else{

                var age_select_year = $('#age_select_year').val();
                var age_select_day = $('#age_select_day').val();
                var age_select_month = $('#age_select_month').val();
                var DOB = age_select_month+'/'+age_select_day+'/'+age_select_year;

                age_verify = ageCalculate(DOB);
                console.log(age_verify);
                var age_verification = $('#age-verify').val();
                console.log(age_verification);

                var affirmNonMuslim = $('#age_checkbox_affirm_non_muslim').prop('checked');

                console.log(affirmNonMuslim);

                var partial_age = $('#partial-verify').val();

                if(jQuery.inArray($('#show_selected_country').attr('data-country'), nonMuslimArray) !== -1 && age_verify >= age_verification && affirmNonMuslim != false)
                {
                    $('#age_verification_message').hide();
                    $('#age_missing_message').hide();

                    $myModal.modal("closeModal");

                    var rememberMe = $('#age_checkbox_remember_me').prop('checked');
                    $.cookie("diageo-remember", rememberMe);

                    var obj = {"pass":true,"country":"IN","language":"en","domain":"gwsuk.siteproofs.net","from_sso":false,"remembered":+rememberMe};
                    $.cookie("diageo-gateway", JSON.stringify(obj), { expires : 1, path: '/' });
                }
                if(age_verification != 0 && age_verify != 0 && age_verify >= age_verification && partial_age == 0)
                {
                    $('#age_verification_message').hide();
                    $('#age_missing_message').hide();

                    $myModal.modal("closeModal");

                    var rememberMe = $('#age_checkbox_remember_me').prop('checked');
                    $.cookie("diageo-remember", rememberMe);

                    var obj = {"pass":true,"country":"IN","language":"en","domain":"gwscom.siteproofs.net","from_sso":false,"remembered":+rememberMe};
                    $.cookie("diageo-gateway", JSON.stringify(obj), { expires : 1, path: '/' });

                } else{
                    $('#age_missing_message').hide();
                    $('#age_verification_message').show();
                    $('#age_age_group').addClass('age_missing');
                }
            }
        });
        
    }
);