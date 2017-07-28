<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Checkout\Api\Data;

/**
 * Interface TotalsInformationInterface
 * @api
 * @since 2.0.0
 */
interface TotalsInformationInterface extends \Magento\Framework\Api\CustomAttributesDataInterface
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const ADDRESS = 'address';

    const SHIPPING_METHOD_CODE = 'shipping_method_code';

    const SHIPPING_CARRIER_CODE = 'shipping_carrier_code';

    /**#@-*/

    /**
     * Returns address
     *
     * @return \Magento\Quote\Api\Data\AddressInterface
     * @since 2.0.0
     */
    public function getAddress();

    /**
     * Set address
     *
     * @param \Magento\Quote\Api\Data\AddressInterface $address
     * @return $this
     * @since 2.0.0
     */
    public function setAddress(\Magento\Quote\Api\Data\AddressInterface $address);

    /**
     * Returns shipping method code
     *
     * @return string|null
     * @since 2.0.0
     */
    public function getShippingMethodCode();

    /**
     * Set shipping method code
     *
     * @param string $code
     * @return $this
     * @since 2.0.0
     */
    public function setShippingMethodCode($code);

    /**
     * Returns carrier code
     *
     * @return string|null
     * @since 2.0.0
     */
    public function getShippingCarrierCode();

    /**
     * Set carrier code
     *
     * @param string $code
     * @return $this
     * @since 2.0.0
     */
    public function setShippingCarrierCode($code);

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Checkout\Api\Data\TotalsInformationExtensionInterface|null
     * @since 2.0.0
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Checkout\Api\Data\TotalsInformationExtensionInterface $extensionAttributes
     * @return $this
     * @since 2.0.0
     */
    public function setExtensionAttributes(
        \Magento\Checkout\Api\Data\TotalsInformationExtensionInterface $extensionAttributes
    );
}
