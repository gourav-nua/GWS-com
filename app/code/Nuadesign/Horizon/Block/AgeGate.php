<?php
namespace Nuadesign\Horizon\Block;

class AgeGate extends \Magento\Framework\View\Element\Template
{
    

    public function _getAgeSelectDay()
    {
        $htmlDay = '<select id="age_select_day">
                    <option value="-1">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>';

        return $htmlDay;
    }

    public function _getAgeSelectMonth()
    {
        $htmlMonth = '<select id="age_select_month">
                <option value="-1">Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>';
        return $htmlMonth;
    }

    public function _getAgeSelectYear()
    {

        $htmlYear = '<select id="age_select_year">
            <option value="-1">Year</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option></select>';

        return $htmlYear;
    }

    public function _getAgeSelectCountry()
    {
        $htmlCountry = '<select id="age_select_country" class="select_drop_menu_default_style" tabindex="-1">
                <option value="-1" disabled="">-----Select Country Or Region-----</option>
                <option value="GB" data-age="18">United Kingdom</option>
                <option value="US" data-age="21">United States</option>
                <option value="-1" disabled="">--------</option>
                <option value="AX" data-age="18">Åland Islands</option>
                <option value="AF" data-age="0">Afghanistan</option>
                <option value="AL" data-age="18">Albania</option>
                <option value="DZ" data-age="18">Algeria</option>
                <option value="AS" data-age="21">American Samoa</option>
                <option value="AD" data-age="18">Andorra</option>
                <option value="AO" data-age="18">Angola</option>
                <option value="AI" data-age="18">Anguilla</option>
                <option value="AQ" data-age="18">Antarctica</option>
                <option value="AG" data-age="18">Antigua And Barbuda</option>
                <option value="AR" data-age="18">Argentina</option>
                <option value="AM" data-age="18">Armenia</option>
                <option value="AW" data-age="0">Aruba</option>
                <option value="AU" data-age="18">Australia</option>
                <option value="AT" data-age="18">Austria</option>
                <option value="AZ" data-age="0">Azerbaijan</option>
                <option value="BS" data-age="18">Bahamas</option>
                <option value="BH" data-age="21">Bahrain</option>
                <option value="BD" data-age="0">Bangladesh</option>
                <option value="BB" data-age="18">Barbados</option>
                <option value="BY" data-age="18">Belarus</option>
                <option value="BE" data-age="18">Belgium</option>
                <option value="BZ" data-age="18">Belize</option>
                <option value="BJ" data-age="18">Benin</option>
                <option value="BM" data-age="18">Bermuda</option>
                <option value="BT" data-age="18">Bhutan</option>
                <option value="BO" data-age="18">Bolivia</option>
                <option value="BQ" data-age="18">Bonaire, Sint Eustatius and Saba</option>
                <option value="BA" data-age="18">Bosnia And Herzegovina</option>
                <option value="BW" data-age="18">Botswana</option>
                <option value="BR" data-age="18">Brazil</option>
                <option value="BN" data-age="0">Brunei</option>
                <option value="BG" data-age="18">Bulgaria</option>
                <option value="BF" data-age="18">Burkina Faso</option>
                <option value="BI" data-age="18">Burundi</option>
                <option value="KH" data-age="18">Cambodia</option>
                <option value="CM" data-age="21">Cameroon</option>
                <option value="CA" data-age="19">Canada</option>
                <option value="CV" data-age="18">Cape Verde</option>
                <option value="KY" data-age="18">Cayman Islands</option>
                <option value="CF" data-age="18">Central Africa</option>
                <option value="TD" data-age="18">Chad</option>
                <option value="CL" data-age="18">Chile</option>
                <option value="CN" data-age="18">China</option>
                <option value="CX" data-age="18">Christmas Island</option>
                <option value="CC" data-age="18">Cocos Islands</option>
                <option value="CO" data-age="18">Colombia</option>
                <option value="KM" data-age="18">Comoros</option>
                <option value="CD" data-age="18">Congo, Democratic Republic of the</option>
                <option value="CG" data-age="18">Congo, Republic of the</option>
                <option value="CK" data-age="18">Cook Islands</option>
                <option value="CR" data-age="18">Costa Rica</option>
                <option value="CI" data-age="18">Cote D\'ivoire</option>
                <option value="HR" data-age="18">Croatia</option>
                <option value="CU" data-age="18">Cuba</option>
                <option value="CW" data-age="18">Curaçao</option>
                <option value="CY" data-age="18">Cyprus</option>
                <option value="CZ" data-age="18">Czech Republic</option>
                <option value="DK" data-age="18">Denmark</option>
                <option value="DJ" data-age="18">Djibouti</option>
                <option value="DM" data-age="18">Dominica</option>
                <option value="DO" data-age="18">Dominican Republic</option>
                <option value="EC" data-age="18">Ecuador</option>
                <option value="EG" data-age="0">Egypt</option>
                <option value="SV" data-age="18">El Salvador</option>
                <option value="GQ" data-age="18">Equatorial Guinea</option>
                <option value="ER" data-age="18">Eritrea</option>
                <option value="EE" data-age="18">Estonia</option>
                <option value="ET" data-age="18">Ethiopia</option>
                <option value="FK" data-age="18">Falkland Islands</option>
                <option value="FO" data-age="18">Faroe Islands</option>
                <option value="FJ" data-age="18">Fiji</option>
                <option value="FI" data-age="18">Finland</option>
                <option value="FR" data-age="0">France</option>
                <option value="GF" data-age="18">French Guiana</option>
                <option value="PF" data-age="18">French Polynesia</option>
                <option value="TF" data-age="18">French Southern Territories</option>
                <option value="GA" data-age="18">Gabon</option>
                <option value="GE" data-age="21">Georgia</option>
                <option value="DE" data-age="18">Germany</option>
                <option value="GH" data-age="18">Ghana</option>
                <option value="GI" data-age="18">Gibraltar</option>
                <option value="GR" data-age="18">Greece</option>
                <option value="GL" data-age="18">Greenland</option>
                <option value="GD" data-age="18">Grenada</option>
                <option value="GP" data-age="18">Guadaloupe</option>
                <option value="GU" data-age="18">Guam</option>
                <option value="GT" data-age="18">Guatemala</option>
                <option value="GG" data-age="18">Guernsey</option>
                <option value="GN" data-age="18">Guinea</option>
                <option value="GW" data-age="18">Guinea-Bissau</option>
                <option value="GY" data-age="18">Guyana</option>
                <option value="HT" data-age="18">Haiti</option>
                <option value="HM" data-age="18">Heard Island &amp; McDonald Islands</option>
                <option value="VA" data-age="18">Holy See</option>
                <option value="HN" data-age="18">Honduras</option>
                <option value="HK" data-age="18">Hong Kong S.A.R. China</option>
                <option value="HU" data-age="18">Hungary</option>
                <option value="IS" data-age="20">Iceland</option>
                <option value="IN" data-age="26">India</option>
                <option value="IO" data-age="18">Indian Ocean Territory</option>
                <option value="ID" data-age="21">Indonesia</option>
                <option value="IR" data-age="0">Iran</option>
                <option value="IQ" data-age="0">Iraq</option>
                <option value="IE" data-age="18">Ireland</option>
                <option value="IM" data-age="18">Isle Of Man</option>
                <option value="IL" data-age="18">Israel</option>
                <option value="IT" data-age="18">Italy</option>
                <option value="JM" data-age="18">Jamaica</option>
                <option value="JP" data-age="20">Japan</option>
                <option value="JE" data-age="18">Jersey</option>
                <option value="JO" data-age="0">Jordan</option>
                <option value="KZ" data-age="0">Kazakhstan</option>
                <option value="KE" data-age="18">Kenya</option>
                <option value="KI" data-age="18">Kiribati</option>
                <option value="KP" data-age="0">Korea, Democratic People\'s Republic of</option>
                <option value="KR" data-age="19">Korea, Republic of</option>
                <option value="KW" data-age="0">Kuwait</option>
                <option value="KG" data-age="18">Kyrgyzstan</option>
                <option value="LA" data-age="18">Lao People\'s Democratic Republic</option>
                <option value="LV" data-age="18">Latvia</option>
                <option value="LB" data-age="18">Lebanon</option>
                <option value="LS" data-age="18">Lesotho</option>
                <option value="LR" data-age="18">Liberia</option>
                <option value="LY" data-age="18">Libya</option>
                <option value="LI" data-age="18">Liechtenstein</option>
                <option value="LT" data-age="18">Lithuania</option>
                <option value="LU" data-age="18">Luxembourg</option>
                <option value="MO" data-age="18">Macau S.A.R. China</option>
                <option value="MK" data-age="18">Macedonia</option>
                <option value="MG" data-age="18">Madagascar</option>
                <option value="MW" data-age="18">Malawi</option>
                <option value="MY" data-age="21">Malaysia</option>
                <option value="MV" data-age="18">Maldives</option>
                <option value="ML" data-age="18">Mali</option>
                <option value="MT" data-age="18">Malta</option>
                <option value="MH" data-age="18">Marshall Islands</option>
                <option value="MQ" data-age="18">Martinique</option>
                <option value="MR" data-age="18">Mauritania</option>
                <option value="MU" data-age="18">Mauritius</option>
                <option value="YT" data-age="18">Mayotte</option>
                <option value="MX" data-age="18">Mexico</option>
                <option value="FM" data-age="21">Micronesia</option>
                <option value="MD" data-age="18">Moldova</option>
                <option value="MC" data-age="18">Monaco</option>
                <option value="MN" data-age="18">Mongolia</option>
                <option value="ME" data-age="18">Montenegro</option>
                <option value="MS" data-age="18">Montserrat</option>
                <option value="MA" data-age="18">Morocco</option>
                <option value="MZ" data-age="18">Mozambique</option>
                <option value="MM" data-age="18">Myanmar</option>
                <option value="NA" data-age="18">Namibia</option>
                <option value="NR" data-age="18">Nauru</option>
                <option value="NP" data-age="18">Nepal</option>
                <option value="NL" data-age="18">Netherlands</option>
                <option value="NC" data-age="18">New Caledonia</option>
                <option value="NZ" data-age="18">New Zealand</option>
                <option value="NI" data-age="18">Nicaragua</option>
                <option value="NE" data-age="18">Niger</option>
                <option value="NG" data-age="18">Nigeria</option>
                <option value="NU" data-age="18">Niue</option>
                <option value="NF" data-age="18">Norfolk Island</option>
                <option value="MP" data-age="18">Northern Mariana Islands</option>
                <option value="NO" data-age="20">Norway</option>
                <option value="OM" data-age="21">Oman</option>
                <option value="PK" data-age="0">Pakistan</option>
                <option value="PW" data-age="21">Palau</option>
                <option value="PS" data-age="18">Palestine, State of</option>
                <option value="PA" data-age="18">Panama</option>
                <option value="PG" data-age="18">Papua New Guinea</option>
                <option value="PY" data-age="20">Paraguay</option>
                <option value="PE" data-age="18">Peru</option>
                <option value="PH" data-age="18">Philippines</option>
                <option value="PN" data-age="18">Pitcairn Islands</option>
                <option value="PL" data-age="0">Poland</option>
                <option value="PT" data-age="18">Portugal</option>
                <option value="PR" data-age="18">Puerto Rico</option>
                <option value="QA" data-age="18">Qatar</option>
                <option value="RE" data-age="18">Reunion</option>
                <option value="RO" data-age="18">Romania</option>
                <option value="RU" data-age="18">Russian Federation</option>
                <option value="RW" data-age="18">Rwanda</option>
                <option value="BL" data-age="18">Saint Barthélemy</option>
                <option value="SH" data-age="18">Saint Helena</option>
                <option value="KN" data-age="18">Saint Kitts And Nevis</option>
                <option value="LC" data-age="18">Saint Lucia</option>
                <option value="MF" data-age="18">Saint Martin</option>
                <option value="VC" data-age="18">Saint Vincent And The Grenadines</option>
                <option value="PM" data-age="18">Saint-Pierre Et Miquelon</option>
                <option value="WS" data-age="21">Samoa</option>
                <option value="SM" data-age="18">San Marino</option>
                <option value="ST" data-age="18">Sao Tome and Principe</option>
                <option value="SA" data-age="0">Saudi Arabia</option>
                <option value="SN" data-age="18">Senegal</option>
                <option value="RS" data-age="18">Serbia, Republic of</option>
                <option value="SC" data-age="18">Seychelles</option>
                <option value="SL" data-age="18">Sierra Leone</option>
                <option value="SG" data-age="18">Singapore</option>
                <option value="SX" data-age="18">Sint Maarten</option>
                <option value="SK" data-age="18">Slovakia</option>
                <option value="SI" data-age="18">Slovenia</option>
                <option value="SB" data-age="21">Solomon Islands</option>
                <option value="SO" data-age="18">Somalia</option>
                <option value="ZA" data-age="18">South Africa</option>
                <option value="GS" data-age="18">South Georgia &amp; S. Sandwich Islands</option>
                <option value="SS" data-age="18">South Sudan</option>
                <option value="ES" data-age="18">Spain</option>
                <option value="LK" data-age="25">Sri Lanka</option>
                <option value="SD" data-age="0">Sudan</option>
                <option value="SR" data-age="18">Suriname</option>
                <option value="SJ" data-age="18">Svalbard and Jan Mayen</option>
                <option value="SZ" data-age="18">Swaziland</option>
                <option value="SE" data-age="20">Sweden</option>
                <option value="CH" data-age="18">Switzerland</option>
                <option value="SY" data-age="0">Syria</option>
                <option value="TW" data-age="18">Taiwan</option>
                <option value="TJ" data-age="18">Tajikistan</option>
                <option value="TZ" data-age="18">Tanzania, United Republic of</option>
                <option value="TH" data-age="20">Thailand</option>
                <option value="GM" data-age="18">The Gambia</option>
                <option value="TL" data-age="18">Timor-Leste</option>
                <option value="TG" data-age="18">Togo</option>
                <option value="TK" data-age="18">Tokelau</option>
                <option value="TO" data-age="21">Tonga</option>
                <option value="TT" data-age="18">Trinidad And Tobago</option>
                <option value="TN" data-age="18">Tunisia</option>
                <option value="TR" data-age="0">Turkey</option>
                <option value="TM" data-age="0">Turkmenistan</option>
                <option value="TC" data-age="18">Turks And Caicos Islands</option>
                <option value="TV" data-age="18">Tuvalu</option>
                <option value="UG" data-age="18">Uganda</option>
                <option value="VG" data-age="18">UK Virgin Islands</option>
                <option value="UA" data-age="18">Ukraine</option>
                <option value="AE" data-age="21">United Arab Emirates</option>
                <option value="GB" data-age="18">United Kingdom</option>
                <option value="US" data-age="21">United States</option>
                <option value="UM" data-age="21">United States Minor Outlying Islands</option>
                <option value="UY" data-age="18">Uruguay</option>
                <option value="VI" data-age="18">US Virgin Islands</option>
                <option value="UZ" data-age="18">Uzbekistan</option>
                <option value="VU" data-age="18">Vanuatu</option>
                <option value="VE" data-age="18">Venezuela</option>
                <option value="VN" data-age="18">Vietnam</option>
                <option value="WF" data-age="18">Wallis and Futuna</option>
                <option value="EH" data-age="18">Western Sahara</option>
                <option value="YE" data-age="0">Yemen</option>
                <option value="ZM" data-age="18">Zambia</option>
                <option value="ZW" data-age="18">Zimbabwe</option>
            </select>';



        return $htmlCountry;
    }


    public function __getcountryCode()
    {
        $countryAgeCheck = array('GB' => 18,'US' => 21,'IN' => 26,'AF' => 0,'AL' => 18,'DZ' => 18,'AS' => 21,'AD' => 18,'AO' => 18,'AI' => 18,'AG' => 18,'AR' => 18,'AM' => 18,'AU' => 18,'AT' => 18,'AZ' => 0,'BS' => 18,'BH' => 21,'BD' => 0,'BB' => 18,'BY' => 18,'BE' => 18,'BZ' => 18,'BJ' => 18,'BM' => 18,'BT' => 18,'BO' => 18,'BA' => 18,'BW' => 18,'BR' => 18,'BN' => 0,'BG' => 18,'BF' => 18,'BI' => 18,'KH' => 18,'CM' => 21,'CA' => 19,'KY' => 18,'CF' => 18,'TD' => 18,'CL' => 18,'CN' => 18,'CO' => 18,'KM' => 0,'CG' => 18,'CR' => 18,'HR' => 18,'CU' => 18,'CY' => 18,'DK' => 18,'DJ' => 18,'DM' => 18,'DO' => 18,'EC' => 18,'EG' => 0,'SV' => 18,'ER' => 18,'EE' => 18,'ET' => 18,'FJ' => 18,'FI' => 18,'FR' => 0,'GA' => 18,'GE' => 21,'DE' => 18,'GH' => 18,'GR' => 18,'GD' => 18,'GT' => 18,'GN' => 18,'GW' => 18,'GY' => 18,'HT' => 18,'HN' => 18,'HU' => 18,'IS' => 20,'ID' => 21,'IR' => 0,'IQ' => 0,'IE' => 18,'IL' => 18,'IT' => 18,'JM' => 18,'JP' => 20,'JO' => 0,'KZ' => 0,'KE' => 18,'KI' => 18,'KR' => 19,'KW' => 0,'KG' => 18,'LA' => 18,'LV' => 18,'LB' => 18,'LS' => 18,'LR' => 18,'LY' => 18,'LI' => 18,'LT' => 18,'LU' => 18,'MK' => 18,'MW' => 18,'MY' => 21,'MV' => 18,'ML' => 18,'MT' => 18,'MH' => 18,'MR' => 18,'MU' => 18,'MX' => 18,'MD' => 18,'MC' => 18,'MN' => 18,'ME' => 18,'MA' => 18,'MZ' => 18,'MM' => 18,'NA' => 18,'NR' => 18,'NP' => 18,'NL' =>18,'NZ' => 18,'NI' => 18,'NE' => 18,'NG' => 18,'NU' => 18,'NO' => 20,'OM' => 21,'PK' => 0,'PW' => 21,'PA' => 18,'PG' => 18,'PY' => 20,'PE' => 18,'PH' => 18,'PL' => 0,'PT' => 18,'PR' => 18,'QA' => 18,'RO' => 18,'RW' => 18,'KN' => 18,'LC' => 18,'VC' => 18,'WS' => 21,'SM' => 18,'ST' => 18,'SA' => 0,'SN' => 18,'RS' => 18,'SC' => 18,'SL' => 18,'SG' => 18,'SK' => 18,'SI' => 18,'SO' => 18,'ZA' => 18,'SS' => 18,'ES' => 18,'LK' => 25,'SD' => 0,'SR' => 18,'SE' => 20,'CH' => 18,'SY' => 0,'TJ' => 18,'TZ' => 18,'TH' => 20,'TL' => 18,'TG' => 18,'TO' => 21,'TT' => 18,'TR' => 0,'TM' => 0,'UG' => 18,'UA' => 18,'AE' => 21,'UY' => 18,'UZ' => 18,'VU' => 18,'VE' => 18,'VN' => 18,'YE' => 0,'ZM' => 18,'ZW' => 18,'EH' => 18,'WF' => 18,'VI' => 18,'UM' => 21,'VG' =>18,'TV' => 18,'TC' => 18,'TN' => 18,'TK' => 18,'GM' => 18,'TW' => 18,'AQ' => 18,'SZ' => 20,'SJ' => 18,'GS' => 18,'SB' => 21,'SX' => 18,'PM' => 18,'MF' => 18,'SH' => 18,'BL' => 18,'RU' => 18,'RE' => 18,'PN' => 18,'PS' => 18,'MP' => 18,'NF' => 18,'NC' => 18,'MS' => 18,'FM' => 21,'YT' => 18,'MQ' => 18,'MG' => 18,'MO' => 18,'KP' => 0,'JE' => 18,'IM' => 18,'IO' => 18,'HK' => 18,'VA' => 18,'HM' => 18,'GG' => 18,'GU' => 18,'GP' => 18,'GL' => 18,'GI' => 18,'TF' => 18,'PF' => 18,'GF' => 18,'FO' => 18,'FK' => 18,'GQ' => 18,'CZ' => 18,'CW' => 18,'CI' => 18,'CK' => 18,'CD' => 18,'CC' => 18,'CX' => 18,'CV' => 18,'BQ' => 18);

        return $countryAgeCheck;
    }


    public function __nonMuslim()
    {
        $nonMuslimArray = array('TJ','QA','MV','MY');

        return $nonMuslimArray;
    }


    public function _getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


    public function __getCountryFromIP()
    {
        $ip = $this->_getRealIpAddr();
        $xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);

        return $xml;
    }
}