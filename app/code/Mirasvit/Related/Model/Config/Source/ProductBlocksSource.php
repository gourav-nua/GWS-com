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



namespace Mirasvit\Related\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Mirasvit\Related\Model\ResourceModel\Block\CollectionFactory;

class ProductBlocksSource implements OptionSourceInterface
{
    private $collectionFactory;

    public function __construct(
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    public function toOptionArray()
    {
        $collection = $this->collectionFactory->create();

        $options = [];

        foreach ($collection as $block) {
            $options[] = [
                'label' => $block->getName(),
                'value' => $block->getBlockId(),
            ];
        }

        return $options;
    }
}