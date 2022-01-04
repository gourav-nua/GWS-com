<?php

/**
 * Product:       Xtento_ProductExport
 * ID:            6HAU7IQFKESv+XYDosZBt4qQdY1CGbt/s4/0BQ3nC5I=
 * Last Modified: 2016-05-30T12:34:15+00:00
 * File:          app/code/Xtento/ProductExport/Controller/Adminhtml/Profile/MassDelete.php
 * Copyright:     Copyright (c) XTENTO GmbH & Co. KG <info@xtento.com> / All rights reserved.
 */

namespace Xtento\ProductExport\Controller\Adminhtml\Profile;

class MassDelete extends \Xtento\ProductExport\Controller\Adminhtml\Profile
{
    /**
     * Mass delete action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);

        $ids = $this->getRequest()->getParam('profile');
        if (!is_array($ids)) {
            $this->messageManager->addErrorMessage(__('Please select profiles to delete.'));
            $resultRedirect->setPath('*/*/');
            return $resultRedirect;
        }
        try {
            foreach ($ids as $id) {
                $model = $this->profileFactory->create();
                $model->load($id);
                $model->delete();
            }
            $this->messageManager->addSuccessMessage(
                __('Total of %1 profile(s) were successfully deleted.', count($ids))
            );
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $resultRedirect->setPath('*/*/');
        return $resultRedirect;
    }
}