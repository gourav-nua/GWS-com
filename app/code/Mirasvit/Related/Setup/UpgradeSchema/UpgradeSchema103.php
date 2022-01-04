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



namespace Mirasvit\Related\Setup\UpgradeSchema;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Mirasvit\Related\Api\Data\BlockInterface;

class UpgradeSchema103 implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->getConnection()->addColumn(
            $setup->getTable(BlockInterface::TABLE_NAME),
            BlockInterface::DISPLAY_IS_USE_SLIDER,
            [
                'type'     => Table::TYPE_INTEGER,
                'unsigned' => true,
                'nullable' => true,
                'default'  => 0,
                'comment' => BlockInterface::DISPLAY_IS_USE_SLIDER,
            ]
        );

        $setup->getConnection()->addColumn(
            $setup->getTable(BlockInterface::TABLE_NAME),
            BlockInterface::DISPLAY_PRODUCTS_PER_PAGE,
            [
                'type'     => Table::TYPE_INTEGER,
                'unsigned' => true,
                'nullable' => true,
                'comment' => BlockInterface::DISPLAY_PRODUCTS_PER_PAGE,
            ]
        );
    }
}