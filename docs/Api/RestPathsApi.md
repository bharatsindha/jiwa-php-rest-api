# Jiwa\RestPathsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**restPathsGETManyRequestGet**](RestPathsApi.md#restPathsGETManyRequestGet) | **GET** /RestPaths | Retrieves a list of routes.


# **restPathsGETManyRequestGet**
> \Jiwa\JiwaModel\RestPath[] restPathsGETManyRequestGet($accept, $jiwa_stateful)

Retrieves a list of routes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\RestPathsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->restPathsGETManyRequestGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestPathsApi->restPathsGETManyRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\RestPath[]**](../Model/RestPath.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

