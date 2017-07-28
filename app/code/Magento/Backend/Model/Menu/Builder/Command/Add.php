<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Backend\Model\Menu\Builder\Command;

/**
 * Builder command to add menu items
 * @api
 * @since 2.0.0
 */
class Add extends \Magento\Backend\Model\Menu\Builder\AbstractCommand
{
    /**
     * List of params that command requires for execution
     *
     * @var string[]
     * @since 2.0.0
     */
    protected $_requiredParams = ["id", "title", "module", "resource"];

    /**
     * Add command as last in the list of callbacks
     *
     * @param \Magento\Backend\Model\Menu\Builder\AbstractCommand $command
     * @return $this
     * @throws \InvalidArgumentException
     * @since 2.0.0
     */
    public function chain(\Magento\Backend\Model\Menu\Builder\AbstractCommand $command)
    {
        if ($command instanceof \Magento\Backend\Model\Menu\Builder\Command\Add) {
            throw new \InvalidArgumentException("Two 'add' commands cannot have equal id (" . $command->getId() . ")");
        }
        return parent::chain($command);
    }

    /**
     * Add missing data to item
     *
     * @param array $itemParams
     * @return array
     * @since 2.0.0
     */
    protected function _execute(array $itemParams)
    {
        foreach ($this->_data as $key => $value) {
            $itemParams[$key] = isset($itemParams[$key]) ? $itemParams[$key] : $value;
        }
        return $itemParams;
    }
}
