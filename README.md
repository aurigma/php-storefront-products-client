# Aurigma Customer's Canvas SDK - Storefront Products API Client
======================================================

This module is a PHP API client for Storefront Products API service which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation. 


## Installation

```
composer require aurigma/php-storefront-products-client
```

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure API key authorization: bearerAuth
$config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2-clientCredentials
$config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-code
$config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth2-implicit
$config = Aurigma\Storefront\Products\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\Storefront\Products\Api\ProductReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Product reference - external reference to Customer's Canvas products, e.g online store product identifier.
$storefront_id = 56; // int | Storefront identifier.
$tenant_id = 56; // int | Tenant identifier.

try {
    $result = $apiInstance->productReferencesGet($reference, $storefront_id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReferencesApi->productReferencesGet: ', $e->getMessage(), PHP_EOL;
}

```

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

Aurigma Inc <info@aurigma.com> (https://customerscanvas.com)


## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProductReferencesApi* | [**productReferencesGet**](docs/Api/ProductReferencesApi.md#productreferencesget) | **GET** /api/storefront/v1/product-references/ext/{reference} | Returns a storefront product reference.
*ProductReferencesApi* | [**productReferencesGetAll**](docs/Api/ProductReferencesApi.md#productreferencesgetall) | **GET** /api/storefront/v1/product-references/ext | Returns all storefront product references relevant to the specified query parameters.
*ProductReferencesApi* | [**productReferencesGetAllProductLinks**](docs/Api/ProductReferencesApi.md#productreferencesgetallproductlinks) | **GET** /api/storefront/v1/product-references/ext/product-links | Returns a list of product links associated with storefront product references relevant to the specified query parameters.
*ProductReferencesApi* | [**productReferencesGetProduct**](docs/Api/ProductReferencesApi.md#productreferencesgetproduct) | **GET** /api/storefront/v1/product-references/ext/{reference}/product | Returns a product by storefront product reference.
*ProductReferencesApi* | [**productReferencesGetProductCostDetails**](docs/Api/ProductReferencesApi.md#productreferencesgetproductcostdetails) | **GET** /api/storefront/v1/product-references/ext/{reference}/product-cost-details | Returns a product cost details from ecommerce system.
*ProductReferencesApi* | [**productReferencesGetProductFilter**](docs/Api/ProductReferencesApi.md#productreferencesgetproductfilter) | **GET** /api/storefront/v1/product-references/ext/{reference}/product-filter | Returns a product filter by storefront product reference.
*ProductReferencesApi* | [**productReferencesGetProductLink**](docs/Api/ProductReferencesApi.md#productreferencesgetproductlink) | **GET** /api/storefront/v1/product-references/ext/{reference}/product-link | Returns a product link by storefront product reference.
*ProductReferencesApi* | [**productReferencesGetProductPersonalizationWorkflow**](docs/Api/ProductReferencesApi.md#productreferencesgetproductpersonalizationworkflow) | **GET** /api/storefront/v1/product-references/ext/{reference}/product-personalization-workflow | Returns a product personalization workflow configuration by storefront product reference.
*ProductReferencesApi* | [**productReferencesObsoleteGetProduct**](docs/Api/ProductReferencesApi.md#productreferencesobsoletegetproduct) | **GET** /api/storefront/v1/product-references/{reference}/product | Returns a product by storefront product reference.
*ProductReferencesApi* | [**productReferencesObsoleteGetProductFilter**](docs/Api/ProductReferencesApi.md#productreferencesobsoletegetproductfilter) | **GET** /api/storefront/v1/product-references/{reference}/product-filter | Returns a product filter by storefront product reference.
*ProductReferencesApi* | [**productReferencesObsoleteGetProductLink**](docs/Api/ProductReferencesApi.md#productreferencesobsoletegetproductlink) | **GET** /api/storefront/v1/product-references/{reference}/product-link | Returns a product link by storefront product reference.
*ProductReferencesApi* | [**productReferencesObsoleteGetProductPersonalizationWorkflow**](docs/Api/ProductReferencesApi.md#productreferencesobsoletegetproductpersonalizationworkflow) | **GET** /api/storefront/v1/product-references/{reference}/product-personalization-workflow | Returns a product personalization workflow configuration by storefront product reference.
*ProductsApi* | [**productsGetAllProductOptions**](docs/Api/ProductsApi.md#productsgetallproductoptions) | **GET** /api/storefront/v1/products/options | Returns a list of product options for all products.
*ProductsApi* | [**productsGetAllProducts**](docs/Api/ProductsApi.md#productsgetallproducts) | **GET** /api/storefront/v1/products | Returns all products, relevant to the specified query parameters.
*ProductsApi* | [**productsGetAvailableProductTags**](docs/Api/ProductsApi.md#productsgetavailableproducttags) | **GET** /api/storefront/v1/products/available-tags | Returns a list of all available product tags.
*ProductsApi* | [**productsGetProduct**](docs/Api/ProductsApi.md#productsgetproduct) | **GET** /api/storefront/v1/products/{id} | Returns a product by identifier.
*ProductsApi* | [**productsGetProductFilter**](docs/Api/ProductsApi.md#productsgetproductfilter) | **GET** /api/storefront/v1/products/{id}/filters/{productFilterId} | Returns a product filter.
*ProductsApi* | [**productsGetProductFilters**](docs/Api/ProductsApi.md#productsgetproductfilters) | **GET** /api/storefront/v1/products/{id}/filters | Returns a list of product filters.
*ProductsApi* | [**productsGetProductLink**](docs/Api/ProductsApi.md#productsgetproductlink) | **GET** /api/storefront/v1/products/{id}/links/{productLinkId} | Returns a product link.
*ProductsApi* | [**productsGetProductLinks**](docs/Api/ProductsApi.md#productsgetproductlinks) | **GET** /api/storefront/v1/products/{id}/links | Returns a list of product links.
*ProductsApi* | [**productsGetProductOptions**](docs/Api/ProductsApi.md#productsgetproductoptions) | **GET** /api/storefront/v1/products/{id}/options | Returns a list of product options.
*ProductsApi* | [**productsGetProductVariant**](docs/Api/ProductsApi.md#productsgetproductvariant) | **GET** /api/storefront/v1/products/{id}/variants/{productVariantId} | Returns a product variant.
*ProductsApi* | [**productsGetProductVariantDesigns**](docs/Api/ProductsApi.md#productsgetproductvariantdesigns) | **GET** /api/storefront/v1/products/{id}/variant-designs | Returns a list of product variant designs.
*ProductsApi* | [**productsGetProductVariantMockups**](docs/Api/ProductsApi.md#productsgetproductvariantmockups) | **GET** /api/storefront/v1/products/{id}/variant-mockups | Returns a list of product variant mockups.
*ProductsApi* | [**productsGetProductVariants**](docs/Api/ProductsApi.md#productsgetproductvariants) | **GET** /api/storefront/v1/products/{id}/variants | Returns a list of product variants.
*ProductsApi* | [**productsSetProductVariantPrice**](docs/Api/ProductsApi.md#productssetproductvariantprice) | **POST** /api/storefront/v1/products/{id}/set-variant-price | Set product variant price.
*ProductsApi* | [**productsUpdateProductVariantResources**](docs/Api/ProductsApi.md#productsupdateproductvariantresources) | **POST** /api/storefront/v1/products/{id}/update-variant-resources | Updates product variant resources.

## Models

- [AppearanceDataDto](docs/Model/AppearanceDataDto.md)
- [AppearanceDataItemDto](docs/Model/AppearanceDataItemDto.md)
- [AppearanceDataType](docs/Model/AppearanceDataType.md)
- [ImageInfo](docs/Model/ImageInfo.md)
- [MicrosoftAspNetCoreMvcProblemDetails](docs/Model/MicrosoftAspNetCoreMvcProblemDetails.md)
- [OptionType](docs/Model/OptionType.md)
- [PagedOfProductDto](docs/Model/PagedOfProductDto.md)
- [PagedOfProductFilterDto](docs/Model/PagedOfProductFilterDto.md)
- [PagedOfProductLinkDto](docs/Model/PagedOfProductLinkDto.md)
- [PagedOfProductOptionDto](docs/Model/PagedOfProductOptionDto.md)
- [PagedOfProductReferenceDto](docs/Model/PagedOfProductReferenceDto.md)
- [PagedOfProductVariantDesignDto](docs/Model/PagedOfProductVariantDesignDto.md)
- [PagedOfProductVariantDto](docs/Model/PagedOfProductVariantDto.md)
- [PagedOfProductVariantMockupDto](docs/Model/PagedOfProductVariantMockupDto.md)
- [ProductCostDetailsDto](docs/Model/ProductCostDetailsDto.md)
- [ProductDto](docs/Model/ProductDto.md)
- [ProductFilterDto](docs/Model/ProductFilterDto.md)
- [ProductFilterOptionDto](docs/Model/ProductFilterOptionDto.md)
- [ProductFilterType](docs/Model/ProductFilterType.md)
- [ProductLinkDto](docs/Model/ProductLinkDto.md)
- [ProductOptionDto](docs/Model/ProductOptionDto.md)
- [ProductOptionValueDto](docs/Model/ProductOptionValueDto.md)
- [ProductReferenceDto](docs/Model/ProductReferenceDto.md)
- [ProductVariantDesignDto](docs/Model/ProductVariantDesignDto.md)
- [ProductVariantDto](docs/Model/ProductVariantDto.md)
- [ProductVariantMockupDto](docs/Model/ProductVariantMockupDto.md)
- [ProductVariantMockupType](docs/Model/ProductVariantMockupType.md)
- [ProductVariantOptionDto](docs/Model/ProductVariantOptionDto.md)
- [ProductVariantResourceDto](docs/Model/ProductVariantResourceDto.md)
- [ProductVariantResourcePreview](docs/Model/ProductVariantResourcePreview.md)
- [ProductVariantResourceType](docs/Model/ProductVariantResourceType.md)
- [SetProductVariantPriceDto](docs/Model/SetProductVariantPriceDto.md)
- [SimpleOptionValue](docs/Model/SimpleOptionValue.md)
- [SurfaceUsageType](docs/Model/SurfaceUsageType.md)