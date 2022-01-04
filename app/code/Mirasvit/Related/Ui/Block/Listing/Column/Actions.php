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



namespace Mirasvit\Related\Ui\Block\Listing\Column;

use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Mirasvit\Related\Api\Data\BlockInterface;

class Actions extends Column
{
    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    public function __construct(
        UrlInterface $urlBuilder,
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        array $components = [],
        array $data = []
    ) {
        $this->urlBuilder = $urlBuilder;

        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as &$item) {
                $item[$this->getData('name')] = [
                    'edit'   => [
                        'href'  => $this->urlBuilder->getUrl('mst_related/block/edit', [
                            BlockInterface::ID => $item[BlockInterface::ID],
                        ]),
                        'label' => __('Edit'),
                    ],
                    'duplicate'   => [
                        'href'  => $this->urlBuilder->getUrl('mst_related/block/duplicate', [
                            BlockInterface::ID => $item[BlockInterface::ID],
                        ]),
                        'label' => __('Duplicate'),
                    ],
                    'delete' => [
                        'href'    => $this->urlBuilder->getUrl('mst_related/block/delete', [
                            BlockInterface::ID => $item[BlockInterface::ID],
                        ]),
                        'label'   => __('Delete'),
                        'confirm' => [
                            'title'   => __('Delete "%1"', $item['name']),
                            'message' => __('Are you sure you want to delete a "%1" record?', $item['name']),
                        ],
                    ],
                ];
            }
        }

        return $dataSource;
    }
}
