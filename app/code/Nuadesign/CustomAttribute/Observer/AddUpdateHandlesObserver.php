<?php
namespace Nuadesign\CustomAttribute\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\Page\Config;
use Magento\Catalog\Helper\Data;

class AddUpdateHandlesObserver implements ObserverInterface
{      
    /**
     * @var \Magento\Framework\Registry $registry
     */
    protected $registry;

    /**
     * @param \Magento\Framework\Registry $registry
     */
    public function __construct(
    \Magento\Framework\Registry $registry,
    Config $config
    )
    {
        $this->registry = $registry;
        $this->config = $config;
    }
    
   
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $layout = $observer->getData('layout');

        $fullActionName = $observer->getData('full_action_name');

        if ($fullActionName == 'catalog_category_view') {
            $categoryData = [];
            if ($this->registry->registry('current_category')) {
                $categoryData = $this->registry->registry('current_category')->getData();
            }
            if(isset($categoryData['hide_page_title']) && $categoryData['hide_page_title'] == 1){
                $layout->getUpdate()->addHandle('customattribute_categorypage_removetitle');
            }
            if(isset($categoryData['custom_content_class']) && $categoryData['custom_content_class'] != ''){
                $this->config->addBodyClass($categoryData['custom_content_class']);  
            }
             
        }
        return $this;
    }
}