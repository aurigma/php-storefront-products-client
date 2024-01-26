# # ProductVariantDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product variant identifier. | [optional]
**product_version_id** | **int** | Product version identifier. | [optional]
**product_id** | **int** | Product identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**is_available** | **bool** | Product variant available. | [optional]
**price** | **double** | Product variant price. | [optional]
**sort_index** | **int** | Product variant sort index. | [optional]
**storefront_product_variant_id** | **string** | Product variant identifier (usually SKU) in storefront / online store. | [optional]
**product_variant_options** | [**\Aurigma\Storefront\Products\Model\ProductVariantOptionDto[]**](ProductVariantOptionDto.md) | A list of product variant options. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
