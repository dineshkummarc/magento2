<?php
/**
 * Adminhtml AdminNotification inbox grid
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\AdminNotification\Block;

/**
 * @api
 * @since 2.0.0
 */
class Inbox extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     * @since 2.0.0
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml';
        $this->_blockGroup = 'Magento_AdminNotification';
        $this->_headerText = __('Messages Inbox');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}
