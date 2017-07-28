<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Filesystem\Directory;

use Magento\Framework\Exception\FileSystemException;

/**
 * Class \Magento\Framework\Filesystem\Directory\Write
 *
 * @since 2.0.0
 */
class Write extends Read implements WriteInterface
{
    /**
     * Permissions for new sub-directories
     *
     * @var int
     * @since 2.0.0
     */
    protected $permissions = 0777;

    /**
     * Constructor
     *
     * @param \Magento\Framework\Filesystem\File\WriteFactory $fileFactory
     * @param \Magento\Framework\Filesystem\DriverInterface $driver
     * @param string $path
     * @param int $createPermissions
     * @since 2.0.0
     */
    public function __construct(
        \Magento\Framework\Filesystem\File\WriteFactory $fileFactory,
        \Magento\Framework\Filesystem\DriverInterface $driver,
        $path,
        $createPermissions = null
    ) {
        $this->fileFactory = $fileFactory;
        $this->driver = $driver;
        $this->setPath($path);
        if (null !== $createPermissions) {
            $this->permissions = $createPermissions;
        }
    }

    /**
     * Check if directory or file is writable
     *
     * @param string $path
     * @return void
     * @throws \Magento\Framework\Exception\FileSystemException
     * @since 2.0.0
     */
    protected function assertWritable($path)
    {
        if ($this->isWritable($path) === false) {
            $path = (!$this->driver->isFile($path))
                ? $this->getAbsolutePath($this->path, $path)
                : $this->getAbsolutePath($path);
            throw new FileSystemException(new \Magento\Framework\Phrase('The path "%1" is not writable', [$path]));
        }
    }

    /**
     * Check if given path is exists and is file
     *
     * @param string $path
     * @return void
     * @throws \Magento\Framework\Exception\FileSystemException
     * @since 2.0.0
     */
    protected function assertIsFile($path)
    {
        clearstatcache();
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        if (!$this->driver->isFile($absolutePath)) {
            throw new FileSystemException(
                new \Magento\Framework\Phrase('The file "%1" doesn\'t exist or not a file', [$absolutePath])
            );
        }
    }

    /**
     * Create directory if it does not exist
     *
     * @param string $path
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function create($path = null)
    {
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        if ($this->driver->isDirectory($absolutePath)) {
            return true;
        }
        return $this->driver->createDirectory($absolutePath, $this->permissions);
    }

    /**
     * Rename a file
     *
     * @param string $path
     * @param string $newPath
     * @param WriteInterface $targetDirectory
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function renameFile($path, $newPath, WriteInterface $targetDirectory = null)
    {
        $this->assertIsFile($path);
        $targetDirectory = $targetDirectory ?: $this;
        if (!$targetDirectory->isExist($this->driver->getParentDirectory($newPath))) {
            $targetDirectory->create($this->driver->getParentDirectory($newPath));
        }
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        $absoluteNewPath = $targetDirectory->getAbsolutePath($newPath);
        return $this->driver->rename($absolutePath, $absoluteNewPath, $targetDirectory->driver);
    }

    /**
     * Copy a file
     *
     * @param string $path
     * @param string $destination
     * @param WriteInterface $targetDirectory
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function copyFile($path, $destination, WriteInterface $targetDirectory = null)
    {
        $this->assertIsFile($path);

        $targetDirectory = $targetDirectory ?: $this;
        if (!$targetDirectory->isExist($this->driver->getParentDirectory($destination))) {
            $targetDirectory->create($this->driver->getParentDirectory($destination));
        }
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        $absoluteDestination = $targetDirectory->getAbsolutePath($destination);

        return $this->driver->copy($absolutePath, $absoluteDestination, $targetDirectory->driver);
    }

    /**
     * Creates symlink on a file and places it to destination
     *
     * @param string $path
     * @param string $destination
     * @param WriteInterface $targetDirectory [optional]
     * @return bool
     * @throws \Magento\Framework\Exception\FileSystemException
     * @since 2.0.0
     */
    public function createSymlink($path, $destination, WriteInterface $targetDirectory = null)
    {
        $targetDirectory = $targetDirectory ?: $this;
        $parentDirectory = $this->driver->getParentDirectory($destination);
        if (!$targetDirectory->isExist($parentDirectory)) {
            $targetDirectory->create($parentDirectory);
        }
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        $absoluteDestination = $targetDirectory->getAbsolutePath($destination);

        return $this->driver->symlink($absolutePath, $absoluteDestination, $targetDirectory->driver);
    }

    /**
     * Delete given path
     *
     * @param string $path
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function delete($path = null)
    {
        if (!$this->isExist($path)) {
            return true;
        }
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        if ($this->driver->isFile($absolutePath)) {
            $this->driver->deleteFile($absolutePath);
        } else {
            $this->driver->deleteDirectory($absolutePath);
        }
        return true;
    }

    /**
     * Change permissions of given path
     *
     * @param string $path
     * @param int $permissions
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function changePermissions($path, $permissions)
    {
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        return $this->driver->changePermissions($absolutePath, $permissions);
    }

    /**
     * Recursively change permissions of given path
     *
     * @param string $path
     * @param int $dirPermissions
     * @param int $filePermissions
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function changePermissionsRecursively($path, $dirPermissions, $filePermissions)
    {
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        return $this->driver->changePermissionsRecursively($absolutePath, $dirPermissions, $filePermissions);
    }

    /**
     * Sets modification time of file, if file does not exist - creates file
     *
     * @param string $path
     * @param int|null $modificationTime
     * @return bool
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function touch($path, $modificationTime = null)
    {
        $folder = $this->driver->getParentDirectory($path);
        $this->create($folder);
        $this->assertWritable($folder);
        return $this->driver->touch($this->driver->getAbsolutePath($this->path, $path), $modificationTime);
    }

    /**
     * Check if given path is writable
     *
     * @param null $path
     * @return bool
     * @throws \Magento\Framework\Exception\FileSystemException
     * @since 2.0.0
     */
    public function isWritable($path = null)
    {
        return $this->driver->isWritable($this->driver->getAbsolutePath($this->path, $path));
    }

    /**
     * Open file in given mode
     *
     * @param string $path
     * @param string $mode
     * @return \Magento\Framework\Filesystem\File\WriteInterface
     * @throws \Magento\Framework\Exception\FileSystemException
     * @since 2.0.0
     */
    public function openFile($path, $mode = 'w')
    {
        $folder = dirname($path);
        $this->create($folder);
        $this->assertWritable($this->isExist($path) ? $path : $folder);
        $absolutePath = $this->driver->getAbsolutePath($this->path, $path);
        return $this->fileFactory->create($absolutePath, $this->driver, $mode);
    }

    /**
     * Write contents to file in given mode
     *
     * @param string $path
     * @param string $content
     * @param string|null $mode
     * @return int The number of bytes that were written.
     * @throws FileSystemException
     * @since 2.0.0
     */
    public function writeFile($path, $content, $mode = 'w+')
    {
        return $this->openFile($path, $mode)->write($content);
    }

    /**
     * Get driver
     *
     * @return \Magento\Framework\Filesystem\DriverInterface
     * @since 2.0.0
     */
    public function getDriver()
    {
        return $this->driver;
    }
}
