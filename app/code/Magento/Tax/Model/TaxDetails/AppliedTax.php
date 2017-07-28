<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Tax\Model\TaxDetails;

use Magento\Framework\Model\AbstractExtensibleModel;
use Magento\Tax\Api\Data\AppliedTaxInterface;

/**
 * @codeCoverageIgnore
 * @since 2.0.0
 */
class AppliedTax extends AbstractExtensibleModel implements AppliedTaxInterface
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const KEY_TAX_RATE_KEY = 'tax_rate_key';
    const KEY_PERCENT      = 'percent';
    const KEY_AMOUNT       = 'amount';
    const KEY_RATES        = 'rates';
    /**#@-*/

    /**
     * {@inheritdoc}
     * @since 2.0.0
     */
    public function getTaxRateKey()
    {
        return $this->getData(self::KEY_TAX_RATE_KEY);
    }

    /**
     * {@inheritdoc}
     * @since 2.0.0
     */
    public function getPercent()
    {
        return $this->getData(self::KEY_PERCENT);
    }

    /**
     * {@inheritdoc}
     * @since 2.0.0
     */
    public function getAmount()
    {
        return $this->getData(self::KEY_AMOUNT);
    }

    /**
     * {@inheritdoc}
     * @since 2.0.0
     */
    public function getRates()
    {
        return $this->getData(self::KEY_RATES);
    }

    /**
     * Set tax rate key
     *
     * @param string $taxRateKey
     * @return $this
     * @since 2.0.0
     */
    public function setTaxRateKey($taxRateKey)
    {
        return $this->setData(self::KEY_TAX_RATE_KEY, $taxRateKey);
    }

    /**
     * Set percent
     *
     * @param float $percent
     * @return $this
     * @since 2.0.0
     */
    public function setPercent($percent)
    {
        return $this->setData(self::KEY_PERCENT, $percent);
    }

    /**
     * Get amount
     *
     * @param float $amount
     * @return $this
     * @since 2.0.0
     */
    public function setAmount($amount)
    {
        return $this->setData(self::KEY_AMOUNT, $amount);
    }

    /**
     * Set rates
     *
     * @param \Magento\Tax\Api\Data\AppliedTaxRateInterface[] $rates
     * @return $this
     * @since 2.0.0
     */
    public function setRates(array $rates = null)
    {
        return $this->setData(self::KEY_RATES, $rates);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Magento\Tax\Api\Data\AppliedTaxExtensionInterface|null
     * @since 2.0.0
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     *
     * @param \Magento\Tax\Api\Data\AppliedTaxExtensionInterface $extensionAttributes
     * @return $this
     * @since 2.0.0
     */
    public function setExtensionAttributes(\Magento\Tax\Api\Data\AppliedTaxExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
