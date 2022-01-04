<?php
/**
 * Mirasvit
 *
 * This source file is subject to the Mirasvit Software License, which is available at https://mirasvit.com/license/.
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to http://www.magentocommerce.com for more information.
 *
 * @category  Mirasvit
 * @package   mirasvit/module-related
 * @version   1.0.18
 * @copyright Copyright (C) 2021 Mirasvit (https://mirasvit.com/)
 */



namespace Mirasvit\Related\Ui\Rule\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Mirasvit\Related\Api\Data\RuleInterface;

class SelectionSource implements OptionSourceInterface
{

    public function toOptionArray()
    {
        $options = [
            [
                'value' => RuleInterface::SOURCE_ALL,
                'label' => __('Whole Catalog'),
            ],
            [
                'value' => RuleInterface::SOURCE_BOUGHT_TOGETHER,
                'label' => __('Bought Together (the same Order)'),
            ],
            [
                'value' => RuleInterface::SOURCE_ALSO_BOUGHT,
                'label' => __('Also Bought (the same Customer)'),
            ],
            [
                'value' => RuleInterface::SOURCE_VIEWED_TOGETHER,
                'label' => __('Viewed Together'),
            ],
        ];


        return $options;
    }
}