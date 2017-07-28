<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\UrlRewrite\Model;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\Serialize\Serializer\Json;

/**
 * @method int getEntityId()
 * @method string getEntityType()
 * @method int getRedirectType()
 * @method int getStoreId()
 * @method int getIsAutogenerated()
 * @method string getTargetPath()
 * @method UrlRewrite setEntityId(int $value)
 * @method UrlRewrite setEntityType(string $value)
 * @method UrlRewrite setRequestPath($value)
 * @method UrlRewrite setTargetPath($value)
 * @method UrlRewrite setRedirectType($value)
 * @method UrlRewrite setStoreId($value)
 * @method UrlRewrite setDescription($value)
 * @since 2.0.0
 */
class UrlRewrite extends \Magento\Framework\Model\AbstractModel
{
    /**
     * @var Json
     * @since 2.2.0
     */
    private $serializer;

    /**
     * UrlRewrite constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     * @param Json $serializer
     * @since 2.2.0
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = [],
        Json $serializer = null
    ) {
        $this->serializer = $serializer ?: ObjectManager::getInstance()->get(Json::class);
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize corresponding resource model
     *
     * @return void
     * @since 2.0.0
     */
    protected function _construct()
    {
        $this->_init(\Magento\UrlRewrite\Model\ResourceModel\UrlRewrite::class);
        $this->_collectionName = \Magento\UrlRewrite\Model\ResourceModel\UrlRewriteCollection::class;
    }

    /**
     * @return array
     * @api
     * @since 2.0.0
     */
    public function getMetadata()
    {
        $metadata = $this->getData(\Magento\UrlRewrite\Service\V1\Data\UrlRewrite::METADATA);
        return !empty($metadata) ? $this->serializer->unserialize($metadata) : [];
    }

    /**
     * Overwrite Metadata in the object.
     *
     * @param array|string $metadata
     *
     * @return $this
     * @since 2.2.0
     */
    public function setMetadata($metadata)
    {
        if (is_array($metadata)) {
            $metadata = $this->serializer->serialize($metadata);
        }
        return $this->setData(\Magento\UrlRewrite\Service\V1\Data\UrlRewrite::METADATA, $metadata);
    }
}
