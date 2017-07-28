<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Newsletter subscribers grid block
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace Magento\Newsletter\Block\Adminhtml\Subscriber;

/**
 * @api
 * @since 2.0.0
 */
class Grid extends \Magento\Backend\Block\Widget\Grid
{
    /**
     * @var \Magento\Newsletter\Model\QueueFactory
     * @since 2.0.0
     */
    protected $_queueFactory;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Magento\Newsletter\Model\QueueFactory $queueFactory
     * @param array $data
     * @since 2.0.0
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magento\Newsletter\Model\QueueFactory $queueFactory,
        array $data = []
    ) {
        $this->_queueFactory = $queueFactory;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * Prepare collection for grid
     *
     * @return \Magento\Backend\Block\Widget\Grid
     * @since 2.0.0
     */
    protected function _prepareCollection()
    {
        if ($this->getRequest()->getParam('queue', false)) {
            $this->getCollection()->useQueue(
                $this->_queueFactory->create()->load($this->getRequest()->getParam('queue'))
            );
        }

        return parent::_prepareCollection();
    }
}
