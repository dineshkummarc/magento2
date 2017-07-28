<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Product type price factory
 */
namespace Magento\Catalog\Model\Product\Type\Price;

/**
 * Class \Magento\Catalog\Model\Product\Type\Price\Factory
 *
 * @since 2.0.0
 */
class Factory
{
    /**
     * Object Manager
     *
     * @var \Magento\Framework\ObjectManagerInterface
     * @since 2.0.0
     */
    protected $_objectManager;

    /**
     * Construct
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @since 2.0.0
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Create price model for product of particular type
     *
     * @param string $className
     * @param array $data
     * @return \Magento\Catalog\Model\Product\Type\Price
     * @throws \Magento\Framework\Exception\LocalizedException
     * @since 2.0.0
     */
    public function create($className, array $data = [])
    {
        $price = $this->_objectManager->create($className, $data);

        if (!$price instanceof \Magento\Catalog\Model\Product\Type\Price) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('%1 doesn\'t extends \Magento\Catalog\Model\Product\Type\Price', $className)
            );
        }
        return $price;
    }
}
