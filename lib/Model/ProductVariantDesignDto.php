<?php
/**
 * ProductVariantDesignDto
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\Storefront\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Storefront API - Products
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: storefront-v1-products
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\Storefront\Products\Model;

use \ArrayAccess;
use \Aurigma\Storefront\Products\ObjectSerializer;

/**
 * ProductVariantDesignDto Class Doc Comment
 *
 * @category Class
 * @description Dto class, containing information about a product variant design.
 * @package  Aurigma\Storefront\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductVariantDesignDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductVariantDesignDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_variant_id' => 'int',
        'product_version_id' => 'int',
        'product_id' => 'int',
        'tenant_id' => 'int',
        'is_available' => 'bool',
        'sort_index' => 'int',
        'storefront_product_variant_id' => 'string',
        'design_id' => 'string',
        'design_name' => 'string',
        'design_group' => 'string',
        'product_variant_options' => '\Aurigma\Storefront\Products\Model\ProductVariantOptionDto[]',
        'product_variant_resources' => '\Aurigma\Storefront\Products\Model\ProductVariantResourceDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_variant_id' => 'int32',
        'product_version_id' => 'int32',
        'product_id' => 'int32',
        'tenant_id' => 'int32',
        'is_available' => null,
        'sort_index' => 'int32',
        'storefront_product_variant_id' => null,
        'design_id' => null,
        'design_name' => null,
        'design_group' => null,
        'product_variant_options' => null,
        'product_variant_resources' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_variant_id' => 'productVariantId',
        'product_version_id' => 'productVersionId',
        'product_id' => 'productId',
        'tenant_id' => 'tenantId',
        'is_available' => 'isAvailable',
        'sort_index' => 'sortIndex',
        'storefront_product_variant_id' => 'storefrontProductVariantId',
        'design_id' => 'designId',
        'design_name' => 'designName',
        'design_group' => 'designGroup',
        'product_variant_options' => 'productVariantOptions',
        'product_variant_resources' => 'productVariantResources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_variant_id' => 'setProductVariantId',
        'product_version_id' => 'setProductVersionId',
        'product_id' => 'setProductId',
        'tenant_id' => 'setTenantId',
        'is_available' => 'setIsAvailable',
        'sort_index' => 'setSortIndex',
        'storefront_product_variant_id' => 'setStorefrontProductVariantId',
        'design_id' => 'setDesignId',
        'design_name' => 'setDesignName',
        'design_group' => 'setDesignGroup',
        'product_variant_options' => 'setProductVariantOptions',
        'product_variant_resources' => 'setProductVariantResources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_variant_id' => 'getProductVariantId',
        'product_version_id' => 'getProductVersionId',
        'product_id' => 'getProductId',
        'tenant_id' => 'getTenantId',
        'is_available' => 'getIsAvailable',
        'sort_index' => 'getSortIndex',
        'storefront_product_variant_id' => 'getStorefrontProductVariantId',
        'design_id' => 'getDesignId',
        'design_name' => 'getDesignName',
        'design_group' => 'getDesignGroup',
        'product_variant_options' => 'getProductVariantOptions',
        'product_variant_resources' => 'getProductVariantResources'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['product_variant_id'] = $data['product_variant_id'] ?? null;
        $this->container['product_version_id'] = $data['product_version_id'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['is_available'] = $data['is_available'] ?? null;
        $this->container['sort_index'] = $data['sort_index'] ?? null;
        $this->container['storefront_product_variant_id'] = $data['storefront_product_variant_id'] ?? null;
        $this->container['design_id'] = $data['design_id'] ?? null;
        $this->container['design_name'] = $data['design_name'] ?? null;
        $this->container['design_group'] = $data['design_group'] ?? null;
        $this->container['product_variant_options'] = $data['product_variant_options'] ?? null;
        $this->container['product_variant_resources'] = $data['product_variant_resources'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets product_variant_id
     *
     * @return int|null
     */
    public function getProductVariantId()
    {
        return $this->container['product_variant_id'];
    }

    /**
     * Sets product_variant_id
     *
     * @param int|null $product_variant_id Product variant identifier.
     *
     * @return self
     */
    public function setProductVariantId($product_variant_id)
    {
        $this->container['product_variant_id'] = $product_variant_id;

        return $this;
    }

    /**
     * Gets product_version_id
     *
     * @return int|null
     */
    public function getProductVersionId()
    {
        return $this->container['product_version_id'];
    }

    /**
     * Sets product_version_id
     *
     * @param int|null $product_version_id Product version identifier.
     *
     * @return self
     */
    public function setProductVersionId($product_version_id)
    {
        $this->container['product_version_id'] = $product_version_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int|null $product_id Product identifier.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int|null $tenant_id Tenant identifier.
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available Product variant available.
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets sort_index
     *
     * @return int|null
     */
    public function getSortIndex()
    {
        return $this->container['sort_index'];
    }

    /**
     * Sets sort_index
     *
     * @param int|null $sort_index Product variant sort index.
     *
     * @return self
     */
    public function setSortIndex($sort_index)
    {
        $this->container['sort_index'] = $sort_index;

        return $this;
    }

    /**
     * Gets storefront_product_variant_id
     *
     * @return string|null
     */
    public function getStorefrontProductVariantId()
    {
        return $this->container['storefront_product_variant_id'];
    }

    /**
     * Sets storefront_product_variant_id
     *
     * @param string|null $storefront_product_variant_id Product variant identifier in online store (usually SKU).
     *
     * @return self
     */
    public function setStorefrontProductVariantId($storefront_product_variant_id)
    {
        $this->container['storefront_product_variant_id'] = $storefront_product_variant_id;

        return $this;
    }

    /**
     * Gets design_id
     *
     * @return string|null
     */
    public function getDesignId()
    {
        return $this->container['design_id'];
    }

    /**
     * Sets design_id
     *
     * @param string|null $design_id Design identifier.
     *
     * @return self
     */
    public function setDesignId($design_id)
    {
        $this->container['design_id'] = $design_id;

        return $this;
    }

    /**
     * Gets design_name
     *
     * @return string|null
     */
    public function getDesignName()
    {
        return $this->container['design_name'];
    }

    /**
     * Sets design_name
     *
     * @param string|null $design_name Design name.
     *
     * @return self
     */
    public function setDesignName($design_name)
    {
        $this->container['design_name'] = $design_name;

        return $this;
    }

    /**
     * Gets design_group
     *
     * @return string|null
     */
    public function getDesignGroup()
    {
        return $this->container['design_group'];
    }

    /**
     * Sets design_group
     *
     * @param string|null $design_group Design grouping tag.
     *
     * @return self
     */
    public function setDesignGroup($design_group)
    {
        $this->container['design_group'] = $design_group;

        return $this;
    }

    /**
     * Gets product_variant_options
     *
     * @return \Aurigma\Storefront\Products\Model\ProductVariantOptionDto[]|null
     */
    public function getProductVariantOptions()
    {
        return $this->container['product_variant_options'];
    }

    /**
     * Sets product_variant_options
     *
     * @param \Aurigma\Storefront\Products\Model\ProductVariantOptionDto[]|null $product_variant_options A list of product variant options.
     *
     * @return self
     */
    public function setProductVariantOptions($product_variant_options)
    {
        $this->container['product_variant_options'] = $product_variant_options;

        return $this;
    }

    /**
     * Gets product_variant_resources
     *
     * @return \Aurigma\Storefront\Products\Model\ProductVariantResourceDto[]|null
     */
    public function getProductVariantResources()
    {
        return $this->container['product_variant_resources'];
    }

    /**
     * Sets product_variant_resources
     *
     * @param \Aurigma\Storefront\Products\Model\ProductVariantResourceDto[]|null $product_variant_resources A list of product variant resources.
     *
     * @return self
     */
    public function setProductVariantResources($product_variant_resources)
    {
        $this->container['product_variant_resources'] = $product_variant_resources;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


