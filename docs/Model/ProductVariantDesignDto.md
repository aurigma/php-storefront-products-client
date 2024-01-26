# # ProductVariantDesignDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_variant_id** | **int** | Product variant identifier. | [optional]
**product_version_id** | **int** | Product version identifier. | [optional]
**product_id** | **int** | Product identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**is_available** | **bool** | Product variant available. | [optional]
**sort_index** | **int** | Product variant sort index. | [optional]
**storefront_product_variant_id** | **string** | Product variant identifier in online store (usually SKU). | [optional]
**design_id** | **string** | Design identifier. | [optional]
**design_name** | **string** | Design name. | [optional]
**design_group** | **string** | Design grouping tag. | [optional]
**product_variant_options** | [**\Aurigma\Storefront\Products\Model\ProductVariantOptionDto[]**](ProductVariantOptionDto.md) | A list of product variant options. | [optional]
**product_variant_resources** | [**\Aurigma\Storefront\Products\Model\ProductVariantResourceDto[]**](ProductVariantResourceDto.md) | A list of product variant resources. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
