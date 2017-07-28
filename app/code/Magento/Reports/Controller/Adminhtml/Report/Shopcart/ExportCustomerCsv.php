<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Reports\Controller\Adminhtml\Report\Shopcart;

use Magento\Framework\App\ResponseInterface;

/**
 * Class \Magento\Reports\Controller\Adminhtml\Report\Shopcart\ExportCustomerCsv
 *
 * @since 2.0.0
 */
class ExportCustomerCsv extends \Magento\Reports\Controller\Adminhtml\Report\Shopcart
{
    /**
     * Export shopcart customer report to CSV format
     *
     * @return ResponseInterface
     * @since 2.0.0
     */
    public function execute()
    {
        $fileName = 'shopcart_customer.csv';
        $content = $this->_view->getLayout()->createBlock(
            \Magento\Reports\Block\Adminhtml\Shopcart\Customer\Grid::class
        )->getCsvFile();

        return $this->_fileFactory->create($fileName, $content);
    }
}
