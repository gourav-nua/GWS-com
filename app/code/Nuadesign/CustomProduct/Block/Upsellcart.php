<?php
namespace Nuadesign\CustomProduct\Block;

class Upsellcart extends \Magento\Framework\View\Element\Template {

    /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @param \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory 
     */
    public function __construct(
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory,
        \Magento\Catalog\Model\ProductFactory $productFactory
    ) {
        $this->productFactory = $productFactory;
        $this->collectionFactory = $collectionFactory;
    }
    

    public function getProductCollection() {
        //$product = $this->productFactory->create();
        //$product->load($product->getIdBySku('GMD001-24'));
        // echo "hiiii<pre>";
        // print_r($product->getName()); exit;
        $collection = $this->collectionFactory->create();
        //$collection->loadByAttribute('sku', 'GMD001-24');
        $collection->addAttributeToSelect('*');
        $collection->addAttributeToFilter('status',\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED);
        $collection->addAttributeToFilter('add_cross_sell', 1);
        $collection->addAttributeToFilter('visibility', \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH);
        $collection->getSelect()->orderRand();
        $collection->setPageSize(10);
        //print_r($collection->getData()); exit;
        return $collection;
    }
}