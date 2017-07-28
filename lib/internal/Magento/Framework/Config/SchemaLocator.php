<?php
/**
 * Menu configuration schema locator
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Config;

use Magento\Framework\Config\Dom\UrnResolver;

/**
 * Class SchemaLocator provides the information about xsd schema to be used for a configuration validation
 * Current class can be configured through di.xml
 * The default value of realPath variable contains information about view.xsd to keep the backward compatibility.
 * @since 2.0.0
 */
class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface
{
    /**
     * Path to corresponding XSD file with validation rules for merged config
     *
     * @var string
     * @since 2.0.0
     */
    protected $schema = null;

    /**
     * SchemaLocator constructor.
     *
     * @param UrnResolver $urnResolver
     * @param string $realPath
     * @since 2.0.0
     */
    public function __construct(
        UrnResolver $urnResolver,
        $realPath = 'urn:magento:framework:Config/etc/view.xsd'
    ) {
        $this->schema = $urnResolver->getRealPath($realPath);
    }

    /**
     * Get path to merged config schema
     *
     * @return string|null
     * @since 2.0.0
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * Get path to pre file validation schema
     *
     * @return string|null
     * @since 2.0.0
     */
    public function getPerFileSchema()
    {
        return $this->getSchema();
    }
}
