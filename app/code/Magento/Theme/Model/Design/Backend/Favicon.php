<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Theme\Model\Design\Backend;

use Magento\Framework\Filesystem;

/**
 * Class \Magento\Theme\Model\Design\Backend\Favicon
 *
 * @since 2.1.0
 */
class Favicon extends Image
{
    /**
     * The tail part of directory path for uploading
     *
     */
    const UPLOAD_DIR = 'favicon';

    /**
     * Return path to directory for upload file
     *
     * @return string
     * @throw \Magento\Framework\Exception\LocalizedException
     * @since 2.1.0
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getRelativePath($this->_appendScopeInfo(self::UPLOAD_DIR));
    }

    /**
     * Makes a decision about whether to add info about the scope.
     *
     * @return boolean
     * @since 2.1.0
     */
    protected function _addWhetherScopeInfo()
    {
        return true;
    }

    /**
     * Getter for allowed extensions of uploaded files.
     *
     * @return string[]
     * @since 2.1.0
     */
    public function getAllowedExtensions()
    {
        return ['ico', 'png', 'gif', 'jpg', 'jpeg', 'apng'];
    }
}
