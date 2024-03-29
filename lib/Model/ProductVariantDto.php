<?php
/**
 * ProductVariantDto
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
 * ProductVariantDto Class Doc Comment
 *
 * @category Class
 * @description Dto class, containing information about a product variant.
 * @package  Aurigma\Storefront\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductVariantDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductVariantDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'product_version_id' => 'int',
        'product_id' => 'int',
        'tenant_id' => 'int',
        'is_available' => 'bool',
        'price' => 'double',
        'sort_index' => 'int',
        'storefront_product_variant_id' => 'string',
        'product_variant_options' => '\Aurigma\Storefront\Products\Model\ProductVariantOptionDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'product_version_id' => 'int32',
        'product_id' => 'int32',
        'tenant_id' => 'int32',
        'is_available' => null,
        'price' => 'double',
        'sort_index' => 'int32',
        'storefront_product_variant_id' => null,
        'product_variant_options' => null
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
        'id' => 'id',
        'product_version_id' => 'productVersionId',
        'product_id' => 'productId',
        'tenant_id' => 'tenantId',
        'is_available' => 'isAvailable',
        'price' => 'price',
        'sort_index' => 'sortIndex',
        'storefront_product_variant_id' => 'storefrontProductVariantId',
        'product_variant_options' => 'productVariantOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_version_id' => 'setProductVersionId',
        'product_id' => 'setProductId',
        'tenant_id' => 'setTenantId',
        'is_available' => 'setIsAvailable',
        'price' => 'setPrice',
        'sort_index' => 'setSortIndex',
        'storefront_product_variant_id' => 'setStorefrontProductVariantId',
        'product_variant_options' => 'setProductVariantOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_version_id' => 'getProductVersionId',
        'product_id' => 'getProductId',
        'tenant_id' => 'getTenantId',
        'is_available' => 'getIsAvailable',
        'price' => 'getPrice',
        'sort_index' => 'getSortIndex',
        'storefront_product_variant_id' => 'getStorefrontProductVariantId',
        'product_variant_options' => 'getProductVariantOptions'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['product_version_id'] = $data['product_version_id'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['is_available'] = $data['is_available'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['sort_index'] = $data['sort_index'] ?? null;
        $this->container['storefront_product_variant_id'] = $data['storefront_product_variant_id'] ?? null;
        $this->container['product_variant_options'] = $data['product_variant_options'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Product variant identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets price
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|null $price Product variant price.
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * @param string|null $storefront_product_variant_id Product variant identifier (usually SKU) in storefront / online store.
     *
     * @return self
     */
    public function setStorefrontProductVariantId($storefront_product_variant_id)
    {
        $this->container['storefront_product_variant_id'] = $storefront_product_variant_id;

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


