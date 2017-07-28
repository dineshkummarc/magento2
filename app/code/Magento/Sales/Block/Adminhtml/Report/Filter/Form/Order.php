<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Block\Adminhtml\Report\Filter\Form;

/**
 * Sales Adminhtml report filter form order
 *
 * @api
 * @author     Magento Core Team <core@magentocommerce.com>
 * @SuppressWarnings(PHPMD.DepthOfInheritance)
 * @since 2.0.0
 */
class Order extends \Magento\Sales\Block\Adminhtml\Report\Filter\Form
{
    /**
     * Preparing form
     *
     * @return $this
     * @SuppressWarnings(PHPMD.UnusedLocalVariable)
     * @since 2.0.0
     */
    protected function _prepareForm()
    {
        parent::_prepareForm();
        $form = $this->getForm();
        $htmlIdPrefix = $form->getHtmlIdPrefix();
        /** @var \Magento\Framework\Data\Form\Element\Fieldset $fieldset */
        $fieldset = $this->getForm()->getElement('base_fieldset');

        if (is_object($fieldset) && $fieldset instanceof \Magento\Framework\Data\Form\Element\Fieldset) {
            $fieldset->addField(
                'show_actual_columns',
                'select',
                [
                    'name' => 'show_actual_columns',
                    'options' => ['1' => __('Yes'), '0' => __('No')],
                    'label' => __('Show Actual Values')
                ]
            );
        }

        return $this;
    }
}
