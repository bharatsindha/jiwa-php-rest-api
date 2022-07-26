# Jiwa\LoginApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginGetRequestCreate**](LoginApi.md#loginGetRequestCreate) | **PUT** /login | 
[**loginGetRequestDelete**](LoginApi.md#loginGetRequestDelete) | **DELETE** /login | 
[**loginGetRequestGet**](LoginApi.md#loginGetRequestGet) | **GET** /login | 
[**loginGetRequestPost**](LoginApi.md#loginGetRequestPost) | **POST** /login | 


# **loginGetRequestCreate**
> \Jiwa\Model\Object loginGetRequestCreate($accept, $jiwa_stateful, $redirect, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$redirect = "redirect_example"; // string | 
$body = new \Jiwa\Model\LoginGetRequest(); // \Jiwa\Model\LoginGetRequest | 

try {
    $result = $apiInstance->loginGetRequestCreate($accept, $jiwa_stateful, $redirect, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginGetRequestCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **redirect** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\LoginGetRequest**](../Model/LoginGetRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginGetRequestDelete**
> \Jiwa\Model\Object loginGetRequestDelete($accept, $jiwa_stateful, $redirect)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$redirect = "redirect_example"; // string | 

try {
    $result = $apiInstance->loginGetRequestDelete($accept, $jiwa_stateful, $redirect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginGetRequestDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **redirect** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginGetRequestGet**
> \Jiwa\Model\Object loginGetRequestGet($accept, $jiwa_stateful, $redirect)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$redirect = "redirect_example"; // string | 

try {
    $result = $apiInstance->loginGetRequestGet($accept, $jiwa_stateful, $redirect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginGetRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **redirect** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginGetRequestPost**
> \Jiwa\Model\Object loginGetRequestPost($accept, $jiwa_stateful, $redirect, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$redirect = "redirect_example"; // string | 
$body = new \Jiwa\Model\LoginGetRequest(); // \Jiwa\Model\LoginGetRequest | 

try {
    $result = $apiInstance->loginGetRequestPost($accept, $jiwa_stateful, $redirect, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginGetRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **redirect** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\LoginGetRequest**](../Model/LoginGetRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

