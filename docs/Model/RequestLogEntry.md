# RequestLogEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status_code** | **int** |  | [optional] 
**status_description** | **string** |  | [optional] 
**http_method** | **string** |  | [optional] 
**absolute_uri** | **string** |  | [optional] 
**path_info** | **string** |  | [optional] 
**request_body** | **string** |  | [optional] 
**request_dto** | [**\Jiwa\JiwaModel\Object**](Object.md) |  | [optional] 
**user_auth_id** | **string** |  | [optional] 
**session_id** | **string** |  | [optional] 
**ip_address** | **string** |  | [optional] 
**forwarded_for** | **string** |  | [optional] 
**referer** | **string** |  | [optional] 
**headers** | [**\Jiwa\JiwaModel\DictionaryStringString_**](DictionaryStringString_.md) |  | [optional] 
**form_data** | [**\Jiwa\JiwaModel\DictionaryStringString_**](DictionaryStringString_.md) |  | [optional] 
**items** | [**\Jiwa\JiwaModel\DictionaryStringString_**](DictionaryStringString_.md) |  | [optional] 
**session** | [**\Jiwa\JiwaModel\Object**](Object.md) |  | [optional] 
**response_dto** | [**\Jiwa\JiwaModel\Object**](Object.md) |  | [optional] 
**error_response** | [**\Jiwa\JiwaModel\Object**](Object.md) |  | [optional] 
**exception_source** | **string** |  | [optional] 
**exception_data** | [**\Jiwa\JiwaModel\IDictionary**](IDictionary.md) |  | [optional] 
**request_duration** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


