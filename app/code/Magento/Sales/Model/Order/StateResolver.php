<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Model\Order;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\Order;

/**
 * Class OrderStateResolver
 * @since 2.2.0
 */
class StateResolver implements OrderStateResolverInterface
{
    /**
     * Check if order should be in complete state
     *
     * @param OrderInterface $order
     * @return bool
     * @since 2.2.0
     */
    private function isOrderComplete(OrderInterface $order)
    {
        /** @var $order Order|OrderInterface */
        if (0 == $order->getBaseGrandTotal() || $order->canCreditmemo()) {
            return true;
        }
        return false;
    }

    /**
     * Check if order should be in closed state
     *
     * @param OrderInterface $order
     * @param array $arguments
     * @return bool
     * @since 2.2.0
     */
    private function isOrderClosed(OrderInterface $order, $arguments)
    {
        /** @var $order Order|OrderInterface */
        $forceCreditmemo = in_array(self::FORCED_CREDITMEMO, $arguments);
        if (floatval($order->getTotalRefunded()) || !$order->getTotalRefunded() && $forceCreditmemo) {
            return true;
        }
        return false;
    }

    /**
     * Check if order is processing
     *
     * @param OrderInterface $order
     * @param array $arguments
     * @return bool
     * @since 2.2.0
     */
    private function isOrderProcessing(OrderInterface $order, $arguments)
    {
        /** @var $order Order|OrderInterface */
        if ($order->getState() == Order::STATE_NEW && in_array(self::IN_PROGRESS, $arguments)) {
            return true;
        }
        return false;
    }

    /**
     * Returns initial state for order
     *
     * @param OrderInterface $order
     * @return string
     * @since 2.2.0
     */
    private function getInitialOrderState(OrderInterface $order)
    {
        return $order->getState() === Order::STATE_PROCESSING ? Order::STATE_PROCESSING : Order::STATE_NEW;
    }

    /**
     * @param OrderInterface $order
     * @param array $arguments
     * @return string
     * @since 2.2.0
     */
    public function getStateForOrder(OrderInterface $order, array $arguments = [])
    {
        /** @var $order Order|OrderInterface */
        $orderState = $this->getInitialOrderState($order);
        if (!$order->isCanceled() && !$order->canUnhold() && !$order->canInvoice() && !$order->canShip()) {
            if ($this->isOrderComplete($order)) {
                $orderState = Order::STATE_COMPLETE;
            } elseif ($this->isOrderClosed($order, $arguments)) {
                $orderState = Order::STATE_CLOSED;
            }
        }
        if ($this->isOrderProcessing($order, $arguments)) {
            $orderState = Order::STATE_PROCESSING;
        }
        return $orderState;
    }
}
