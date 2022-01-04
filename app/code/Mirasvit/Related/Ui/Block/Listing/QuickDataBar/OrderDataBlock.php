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


declare(strict_types=1);

namespace Mirasvit\Related\Ui\Block\Listing\QuickDataBar;

use Magento\Backend\Block\Template;
use Mirasvit\Core\Ui\QuickDataBar\SparklineDataBlock;
use Mirasvit\Related\Api\Data\AnalyticsInterface;

class OrderDataBlock extends SparklineDataBlock
{
    private $dataProvider;

    public function __construct(
        DataProvider     $dataProvider,
        Template\Context $context
    ) {
        $this->dataProvider = $dataProvider;

        parent::__construct($context);
    }

    public function getLabel(): string
    {
        return (string)__('Orders');
    }

    public function getScalarValue(): string
    {
        $value = $this->dataProvider->getScalarValue(AnalyticsInterface::ACTION_ORDER, $this->dateFrom, $this->dateTo);

        return $this->dataProvider->number($value);
    }

    public function getSparklineValues(): array
    {
        $dateExpr = $this->getDateIntervalExpr(AnalyticsInterface::CREATED_AT);

        return $this->dataProvider->getSparklineValues(
            AnalyticsInterface::ACTION_ORDER,
            $dateExpr,
            $this->dateFrom,
            $this->dateTo
        );
    }
}
