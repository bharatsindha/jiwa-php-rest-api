# Jiwa\SystemInfoApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**systemInformationGETRequestGet**](SystemInfoApi.md#systemInformationGETRequestGet) | **GET** /SystemInfo/ | Retrieves system information.


# **systemInformationGETRequestGet**
> \Jiwa\JiwaModel\SystemInformationGETResponse systemInformationGETRequestGet($accept, $jiwa_stateful)

Retrieves system information.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SystemInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->systemInformationGETRequestGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemInfoApi->systemInformationGETRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SystemInformationGETResponse**](../Model/SystemInformationGETResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

