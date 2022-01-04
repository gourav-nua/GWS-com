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



namespace Mirasvit\Related\Block;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\View\Element\Template;
use Mirasvit\Core\Service\SerializeService;
use Mirasvit\Related\Api\Data\AnalyticsInterface;

class AnalyticsJs extends Template
{
    private $urlBuilder;

    public function __construct(
        Context $context
    ) {
        $this->urlBuilder = $context->getUrlBuilder();

        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     * @return string
     */
    public function _toHtml()
    {
        $callbackUrl = $this->urlBuilder->getUrl('mstRelated/analytics/track');

        $initObject = [
            'Mirasvit_Related/js/track' => [
                'callbackUrl' => $callbackUrl,
                'cookieName'  => AnalyticsInterface::SESSION_COOKIE,
            ],
        ];

        return '<div data-mage-init=\'' . SerializeService::encode($initObject) . '\'></div>';
    }
}
