<?php

namespace Nuadesign\CustomAttribute\Setup;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

/**
 * Upgrade Data script
 * @codeCoverageIgnore
 */
class UpgradeData implements UpgradeDataInterface
{
    private $eavSetupFactory;
 
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
 
        if ($context->getVersion() && version_compare($context->getVersion(), '1.0.2') < 0) {
 
            $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
 
            /* For Remove Attribute */
            $eavSetup->removeAttribute(\Magento\Catalog\Model\Category::ENTITY, 'custom_content_class');
 
            /* For Create New Attribute */
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Category::ENTITY,
                'custom_content_class',
                [
                    'type' => 'varchar',
                    'label' => 'Custom Content Class',
                    'input' => 'text',
                    'required' => false,
                    'sort_order' => 35,
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
                    'group' => 'content',
                ]
            );
        }
        $setup->endSetup();
    }
}