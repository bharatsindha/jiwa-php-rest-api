# Jiwa\UserSettingsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userSettingPOSTRequestPost**](UserSettingsApi.md#userSettingPOSTRequestPost) | **POST** /UserSettings | Creates or updates a user setting for the currently logged in user.
[**userSettingsGETManyRequestGet**](UserSettingsApi.md#userSettingsGETManyRequestGet) | **GET** /UserSettings | Retreives a list of user settings for the currently logged in user.


# **userSettingPOSTRequestPost**
> \Jiwa\JiwaModel\Object userSettingPOSTRequestPost($accept, $jiwa_stateful, $section, $id_key, $contents, $body)

Creates or updates a user setting for the currently logged in user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$section = "section_example"; // string | 
$id_key = "id_key_example"; // string | 
$contents = "contents_example"; // string | 
$body = new \Jiwa\JiwaModel\UserSettingPOSTRequest(); // \Jiwa\JiwaModel\UserSettingPOSTRequest | 

try {
    $result = $apiInstance->userSettingPOSTRequestPost($accept, $jiwa_stateful, $section, $id_key, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->userSettingPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **section** | **string**|  | [optional]
 **id_key** | **string**|  | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\UserSettingPOSTRequest**](../Model/UserSettingPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSettingsGETManyRequestGet**
> \Jiwa\JiwaModel\QueryResponseSYUserProfile_ userSettingsGETManyRequestGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retreives a list of user settings for the currently logged in user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\UserSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->userSettingsGETManyRequestGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSettingsApi->userSettingsGETManyRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseSYUserProfile_**](../Model/QueryResponseSYUserProfile_.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

