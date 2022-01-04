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
use \Mirasvit\Related\Api\Data\RuleInterface;

class UpgradeSchema102 implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->getConnection()->addColumn(
            $setup->getTable(RuleInterface::TABLE_NAME),
            RuleInterface::INCLUDE_RELATED,
            [
                'type'     => Table::TYPE_INTEGER,
                'unsigned' => true,
                'nullable' => true,
                'comment' => RuleInterface::INCLUDE_RELATED,
            ]
        );

        $setup->getConnection()->addColumn(
            $setup->getTable(RuleInterface::TABLE_NAME),
            RuleInterface::INCLUDE_UP_SELLS,
            [
                'type'     => Table::TYPE_INTEGER,
                'unsigned' => true,
                'nullable' => true,
                'comment' => RuleInterface::INCLUDE_UP_SELLS,
            ]
        );

        $setup->getConnection()->addColumn(
            $setup->getTable(RuleInterface::TABLE_NAME),
            RuleInterface::INCLUDE_CROSS_SELLS,
            [
                'type'     => Table::TYPE_INTEGER,
                'unsigned' => true,
                'nullable' => true,
                'comment' => RuleInterface::INCLUDE_CROSS_SELLS,
            ]
        );
    }
}