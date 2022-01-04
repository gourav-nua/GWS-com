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

use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Pricing\Helper\Data as PricingHelper;
use Mirasvit\Related\Api\Data\AnalyticsInterface;

class DataProvider
{
    private $resource;

    private $pricingHelper;

    public function __construct(
        ResourceConnection $resource,
        PricingHelper      $pricingHelper
    ) {
        $this->resource      = $resource;
        $this->pricingHelper = $pricingHelper;
    }

    public function getScalarValue(string $action, \DateTime $from, \DateTime $to): float
    {
        $columns = [
            'value' => new \Zend_Db_Expr('ABS(SUM(' . AnalyticsInterface::VALUE . '))'),
        ];

        $select = $this->resource->getConnection()
            ->select()
            ->from($this->resource->getTableName(AnalyticsInterface::TABLE_NAME), $columns)
            ->where(AnalyticsInterface::ACTION . '=?', $action)
            ->where(AnalyticsInterface::CREATED_AT . ' >= ?', $from)
            ->where(AnalyticsInterface::CREATED_AT . ' <= ?', $to);

        $value = $this->resource->getConnection()->fetchOne($select);

        return (float)$value;
    }

    public function getSparklineValues(string $action, \Zend_Db_Expr $dateExpr, \DateTime $from, \DateTime $to): array
    {
        $columns = array_merge([$dateExpr], [
            'value' => new \Zend_Db_Expr('ABS(SUM(' . AnalyticsInterface::VALUE . '))'),
        ]);

        $select = $this->resource->getConnection()
            ->select()
            ->from($this->resource->getTableName(AnalyticsInterface::TABLE_NAME), $columns)
            ->where(AnalyticsInterface::ACTION . '=?', $action)
            ->where(AnalyticsInterface::CREATED_AT . ' >= ?', $from)
            ->where(AnalyticsInterface::CREATED_AT . ' <= ?', $to)
            ->order(AnalyticsInterface::CREATED_AT)
            ->group($dateExpr);

        $result = [];
        foreach ($this->resource->getConnection()->fetchPairs($select) as $date => $value) {
            $result[$date] = (int)$value;
        }

        return $result;
    }

    public function currency(float $value): string
    {
        return (string)$this->pricingHelper->currency($value, true, false);
    }

    public function number(float $value): string
    {
        return number_format($value, 0, '.', ' ');
    }
}
