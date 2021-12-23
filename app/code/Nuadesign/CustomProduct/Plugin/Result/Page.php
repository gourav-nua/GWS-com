<?php 

namespace Nuadesign\CustomProduct\Plugin\Result;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\Page as ResultPage;

class Page
{
    protected $context;

    protected $registry;

    public function __construct(
    \Magento\Framework\View\Element\Context $context,
    \Magento\Framework\Registry $registry
    ) {
        $this->context = $context;
        $this->registry = $registry;
    }

    public function beforeRenderResult(
        \Magento\Framework\View\Result\Page $subject,
        ResponseInterface $response
    ){

        if($this->context->getRequest()->getFullActionName() == 'catalog_product_view'){
            $currentProduct = $this->registry->registry('current_product');
            if($currentProduct->getData('custom_product_description') != '')
            {
                $subject->getConfig()->addBodyClass('product-guinnessr-gravity');    
            }
            
        }

        if($this->context->getRequest()->getFullActionName() == 'catalog_category_view'){
            $currentCategory = $this->registry->registry('current_category');
            if($currentCategory->getId() == 499 || $currentCategory->getId() == 512)
            {
                $subject->getConfig()->addBodyClass('guinness-opengateberry-body');
            }   
        }

        return [$response];
    }
}