<?php

/**
 * Product:       Xtento_ProductExport
 * ID:            6HAU7IQFKESv+XYDosZBt4qQdY1CGbt/s4/0BQ3nC5I=
 * Last Modified: 2016-04-17T13:03:00+00:00
 * File:          app/code/Xtento/ProductExport/Observer/CatalogCategorySaveAfterObserver.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\ProductExport\Observer;

use Xtento\ProductExport\Model\Export;

class CatalogCategorySaveAfterObserver extends AbstractEventObserver implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $this->handleEvent($observer, self::EVENT_CATALOG_CATEGORY_SAVE_AFTER, Export::ENTITY_CATEGORY);
    }
}