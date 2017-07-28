<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Paypal\Model\Billing;

/**
 * Billing Agreement abstaract class
 * @since 2.0.0
 */
abstract class AbstractAgreement extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Payment method instance
     *
     * @var \Magento\Payment\Model\MethodInterface
     * @since 2.0.0
     */
    protected $_paymentMethodInstance = null;

    /**
     * Billing Agreement Errors
     *
     * @var array
     * @since 2.0.0
     */
    protected $_errors = [];

    /**
     * Init billing agreement
     *
     * @return string
     * @since 2.0.0
     */
    abstract public function initToken();

    /**
     * Verify billing agreement details
     *
     * @return $this
     * @since 2.0.0
     */
    abstract public function verifyToken();

    /**
     * Create billing agreement
     *
     * @return $this
     * @since 2.0.0
     */
    abstract public function place();

    /**
     * Cancel billing agreement
     *
     * @return $this
     * @since 2.0.0
     */
    abstract public function cancel();

    /**
     * Payment data
     *
     * @var \Magento\Payment\Helper\Data
     * @since 2.0.0
     */
    protected $_paymentData = null;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Payment\Helper\Data $paymentData
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     * @since 2.0.0
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Payment\Helper\Data $paymentData,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->_paymentData = $paymentData;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve payment method instance
     *
     * @return \Magento\Payment\Model\MethodInterface
     * @since 2.0.0
     */
    public function getPaymentMethodInstance()
    {
        if ($this->_paymentMethodInstance === null) {
            $this->_paymentMethodInstance = $this->_paymentData->getMethodInstance($this->getMethodCode());
            $this->_paymentMethodInstance->setStore($this->getStoreId());
        }
        return $this->_paymentMethodInstance;
    }

    /**
     * Validate data before save
     *
     * @return bool
     * @since 2.0.0
     */
    public function isValid()
    {
        $this->_errors = [];
        if ($this->getPaymentMethodInstance() === null || !$this->getPaymentMethodInstance()->getCode()) {
            $this->_errors[] = __('The payment method code is not set.');
        }
        if (!$this->getReferenceId()) {
            $this->_errors[] = __('The reference ID is not set.');
        }
        return empty($this->_errors);
    }

    /**
     * Before save, it's overridden just to make data validation on before save event
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return \Magento\Framework\Model\AbstractModel
     * @since 2.0.0
     */
    public function beforeSave()
    {
        if ($this->isValid()) {
            return parent::beforeSave();
        }
        array_unshift($this->_errors, __('Unable to save Billing Agreement:'));
        throw new \Magento\Framework\Exception\LocalizedException(__(implode(' ', $this->_errors)));
    }
}
