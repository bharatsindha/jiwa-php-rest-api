# Jiwa\LogicalWarehousesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**logicalWarehousesCurrentGETRequestCurrentGet**](LogicalWarehousesApi.md#logicalWarehousesCurrentGETRequestCurrentGet) | **GET** /LogicalWarehouses/Current | Retrieves the current logical warehouse.
[**logicalWarehousesCurrentPATCHRequestCurrentUpdate**](LogicalWarehousesApi.md#logicalWarehousesCurrentPATCHRequestCurrentUpdate) | **PATCH** /LogicalWarehouses/Current | Sets the current logical warehouse.


# **logicalWarehousesCurrentGETRequestCurrentGet**
> \Jiwa\Model\INLogical logicalWarehousesCurrentGETRequestCurrentGet($accept, $jiwa_stateful)

Retrieves the current logical warehouse.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LogicalWarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->logicalWarehousesCurrentGETRequestCurrentGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogicalWarehousesApi->logicalWarehousesCurrentGETRequestCurrentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\INLogical**](../Model/INLogical.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logicalWarehousesCurrentPATCHRequestCurrentUpdate**
> \Jiwa\Model\INLogical logicalWarehousesCurrentPATCHRequestCurrentUpdate($accept, $jiwa_stateful, $in_logical_id, $body)

Sets the current logical warehouse.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LogicalWarehousesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$in_logical_id = "in_logical_id_example"; // string | 
$body = new \Jiwa\Model\LogicalWarehousesCurrentPATCHRequest(); // \Jiwa\Model\LogicalWarehousesCurrentPATCHRequest | 

try {
    $result = $apiInstance->logicalWarehousesCurrentPATCHRequestCurrentUpdate($accept, $jiwa_stateful, $in_logical_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogicalWarehousesApi->logicalWarehousesCurrentPATCHRequestCurrentUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **in_logical_id** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\LogicalWarehousesCurrentPATCHRequest**](../Model/LogicalWarehousesCurrentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\INLogical**](../Model/INLogical.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

