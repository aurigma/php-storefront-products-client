<?php
/**
 * SurfaceUsageType
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
use \Aurigma\Storefront\Products\ObjectSerializer;

/**
 * SurfaceUsageType Class Doc Comment
 *
 * @category Class
 * @description Available surface usage types.
 * @package  Aurigma\Storefront\Products
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SurfaceUsageType
{
    /**
     * Possible values of this enum
     */
    const INDIVIDUAL = 'Individual';
    const CUSTOM = 'Custom';
    const ALL = 'All';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INDIVIDUAL,
            self::CUSTOM,
            self::ALL,
        ];
    }
}


