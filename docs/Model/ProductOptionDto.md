# # ProductOptionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Product option identifier. | [optional]
**product_version_id** | **int** | Product version identifier | [optional]
**product_id** | **int** | Product identifier. | [optional]
**tenant_id** | **int** | Tenant identifier. | [optional]
**type** | [**\Aurigma\Storefront\Products\Model\OptionType**](OptionType.md) |  | [optional]
**traits** | **string[]** | Option traits. | [optional]
**title** | **string** | Product option title. | [optional]
**sort_index** | **int** | Product option sort index. | [optional]
**tag** | **string** | Product option tag. | [optional]
**use_for_design_binding** | **bool** | Specifies if the option is used for design binding. | [optional]
**use_for_mockup_binding** | **bool** | Specifies if the option is used for mockup binding. | [optional]
**description** | **string** | Product option description. | [optional]
**tooltip** | **string** | Product option tooltip. | [optional]
**appearance_data** | [**\Aurigma\Storefront\Products\Model\AppearanceDataDto**](AppearanceDataDto.md) |  | [optional]
**image** | [**\Aurigma\Storefront\Products\Model\ImageInfo**](ImageInfo.md) |  | [optional]
**product_option_values** | [**\Aurigma\Storefront\Products\Model\ProductOptionValueDto[]**](ProductOptionValueDto.md) | A list of product option values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
