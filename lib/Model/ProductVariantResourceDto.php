<?php
/**
 * ProductVariantResourceDto
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
 * ProductVariantResourceDto Class Doc Comment
 *
 * @category Class
 * @description Dto class, containing information about a product variant resource.
 * @package  Aurigma\Storefront\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductVariantResourceDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductVariantResourceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resource_id' => 'string',
        'name' => 'string',
        'url' => 'string',
        'type' => '\Aurigma\Storefront\Products\Model\ProductVariantResourceType',
        'resource_preview' => '\Aurigma\Storefront\Products\Model\ProductVariantResourcePreview'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'resource_id' => null,
        'name' => null,
        'url' => null,
        'type' => null,
        'resource_preview' => null
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
        'resource_id' => 'resourceId',
        'name' => 'name',
        'url' => 'url',
        'type' => 'type',
        'resource_preview' => 'resourcePreview'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resource_id' => 'setResourceId',
        'name' => 'setName',
        'url' => 'setUrl',
        'type' => 'setType',
        'resource_preview' => 'setResourcePreview'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resource_id' => 'getResourceId',
        'name' => 'getName',
        'url' => 'getUrl',
        'type' => 'getType',
        'resource_preview' => 'getResourcePreview'
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
        $this->container['resource_id'] = $data['resource_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['resource_preview'] = $data['resource_preview'] ?? null;
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
     * Gets resource_id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string|null $resource_id Resource identifier.
     *
     * @return self
     */
    public function setResourceId($resource_id)
    {
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Resource name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Resource url.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Aurigma\Storefront\Products\Model\ProductVariantResourceType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Aurigma\Storefront\Products\Model\ProductVariantResourceType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets resource_preview
     *
     * @return \Aurigma\Storefront\Products\Model\ProductVariantResourcePreview|null
     */
    public function getResourcePreview()
    {
        return $this->container['resource_preview'];
    }

    /**
     * Sets resource_preview
     *
     * @param \Aurigma\Storefront\Products\Model\ProductVariantResourcePreview|null $resource_preview resource_preview
     *
     * @return self
     */
    public function setResourcePreview($resource_preview)
    {
        $this->container['resource_preview'] = $resource_preview;

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


