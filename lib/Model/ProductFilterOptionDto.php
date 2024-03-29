<?php
/**
 * ProductFilterOptionDto
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
 * ProductFilterOptionDto Class Doc Comment
 *
 * @category Class
 * @description Dto class, containing information about a product filter option.
 * @package  Aurigma\Storefront\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductFilterOptionDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductFilterOptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_option_id' => 'int',
        'product_option_value_id' => 'int',
        'product_option_type' => '\Aurigma\Storefront\Products\Model\OptionType',
        'product_option_traits' => 'string[]',
        'product_option_title' => 'string',
        'product_option_value_title' => 'string',
        'is_default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_option_id' => 'int32',
        'product_option_value_id' => 'int32',
        'product_option_type' => null,
        'product_option_traits' => null,
        'product_option_title' => null,
        'product_option_value_title' => null,
        'is_default' => null
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
        'product_option_id' => 'productOptionId',
        'product_option_value_id' => 'productOptionValueId',
        'product_option_type' => 'productOptionType',
        'product_option_traits' => 'productOptionTraits',
        'product_option_title' => 'productOptionTitle',
        'product_option_value_title' => 'productOptionValueTitle',
        'is_default' => 'isDefault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_option_id' => 'setProductOptionId',
        'product_option_value_id' => 'setProductOptionValueId',
        'product_option_type' => 'setProductOptionType',
        'product_option_traits' => 'setProductOptionTraits',
        'product_option_title' => 'setProductOptionTitle',
        'product_option_value_title' => 'setProductOptionValueTitle',
        'is_default' => 'setIsDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_option_id' => 'getProductOptionId',
        'product_option_value_id' => 'getProductOptionValueId',
        'product_option_type' => 'getProductOptionType',
        'product_option_traits' => 'getProductOptionTraits',
        'product_option_title' => 'getProductOptionTitle',
        'product_option_value_title' => 'getProductOptionValueTitle',
        'is_default' => 'getIsDefault'
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
        $this->container['product_option_id'] = $data['product_option_id'] ?? null;
        $this->container['product_option_value_id'] = $data['product_option_value_id'] ?? null;
        $this->container['product_option_type'] = $data['product_option_type'] ?? null;
        $this->container['product_option_traits'] = $data['product_option_traits'] ?? null;
        $this->container['product_option_title'] = $data['product_option_title'] ?? null;
        $this->container['product_option_value_title'] = $data['product_option_value_title'] ?? null;
        $this->container['is_default'] = $data['is_default'] ?? null;
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
     * Gets product_option_id
     *
     * @return int|null
     */
    public function getProductOptionId()
    {
        return $this->container['product_option_id'];
    }

    /**
     * Sets product_option_id
     *
     * @param int|null $product_option_id Product option identifier.
     *
     * @return self
     */
    public function setProductOptionId($product_option_id)
    {
        $this->container['product_option_id'] = $product_option_id;

        return $this;
    }

    /**
     * Gets product_option_value_id
     *
     * @return int|null
     */
    public function getProductOptionValueId()
    {
        return $this->container['product_option_value_id'];
    }

    /**
     * Sets product_option_value_id
     *
     * @param int|null $product_option_value_id Product option value identifier.
     *
     * @return self
     */
    public function setProductOptionValueId($product_option_value_id)
    {
        $this->container['product_option_value_id'] = $product_option_value_id;

        return $this;
    }

    /**
     * Gets product_option_type
     *
     * @return \Aurigma\Storefront\Products\Model\OptionType|null
     */
    public function getProductOptionType()
    {
        return $this->container['product_option_type'];
    }

    /**
     * Sets product_option_type
     *
     * @param \Aurigma\Storefront\Products\Model\OptionType|null $product_option_type product_option_type
     *
     * @return self
     */
    public function setProductOptionType($product_option_type)
    {
        $this->container['product_option_type'] = $product_option_type;

        return $this;
    }

    /**
     * Gets product_option_traits
     *
     * @return string[]|null
     */
    public function getProductOptionTraits()
    {
        return $this->container['product_option_traits'];
    }

    /**
     * Sets product_option_traits
     *
     * @param string[]|null $product_option_traits Product option traits.
     *
     * @return self
     */
    public function setProductOptionTraits($product_option_traits)
    {
        $this->container['product_option_traits'] = $product_option_traits;

        return $this;
    }

    /**
     * Gets product_option_title
     *
     * @return string|null
     */
    public function getProductOptionTitle()
    {
        return $this->container['product_option_title'];
    }

    /**
     * Sets product_option_title
     *
     * @param string|null $product_option_title Product option title.
     *
     * @return self
     */
    public function setProductOptionTitle($product_option_title)
    {
        $this->container['product_option_title'] = $product_option_title;

        return $this;
    }

    /**
     * Gets product_option_value_title
     *
     * @return string|null
     */
    public function getProductOptionValueTitle()
    {
        return $this->container['product_option_value_title'];
    }

    /**
     * Sets product_option_value_title
     *
     * @param string|null $product_option_value_title Product option value title.
     *
     * @return self
     */
    public function setProductOptionValueTitle($product_option_value_title)
    {
        $this->container['product_option_value_title'] = $product_option_value_title;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default Indicates if option value should be used as a default value for corresponding option.
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

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


