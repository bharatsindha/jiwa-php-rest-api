# Jiwa\AuthApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateGet**](AuthApi.md#authenticateGet) | **GET** /auth | Logs in using Jiwa username and password
[**logoutGetRequestlogoutGet**](AuthApi.md#logoutGetRequestlogoutGet) | **GET** /auth/logout | Logs an authenticated user out.


# **authenticateGet**
> \Jiwa\Model\AuthenticateResponse authenticateGet($accept, $jiwa_stateful, $provider, $state, $oauth_token, $oauth_verifier, $user_name, $password, $remember_me, $continue, $nonce, $uri, $response, $qop, $nc, $cnonce, $use_token_cookie, $access_token, $access_token_secret, $meta)

Logs in using Jiwa username and password

Username and password must be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$provider = "provider_example"; // string | 
$state = "state_example"; // string | 
$oauth_token = "oauth_token_example"; // string | 
$oauth_verifier = "oauth_verifier_example"; // string | 
$user_name = "user_name_example"; // string | 
$password = "password_example"; // string | 
$remember_me = true; // bool | 
$continue = "continue_example"; // string | 
$nonce = "nonce_example"; // string | 
$uri = "uri_example"; // string | 
$response = "response_example"; // string | 
$qop = "qop_example"; // string | 
$nc = "nc_example"; // string | 
$cnonce = "cnonce_example"; // string | 
$use_token_cookie = true; // bool | 
$access_token = "access_token_example"; // string | 
$access_token_secret = "access_token_secret_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->authenticateGet($accept, $jiwa_stateful, $provider, $state, $oauth_token, $oauth_verifier, $user_name, $password, $remember_me, $continue, $nonce, $uri, $response, $qop, $nc, $cnonce, $use_token_cookie, $access_token, $access_token_secret, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authenticateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **provider** | **string**|  | [optional]
 **state** | **string**|  | [optional]
 **oauth_token** | **string**|  | [optional]
 **oauth_verifier** | **string**|  | [optional]
 **user_name** | **string**|  | [optional]
 **password** | **string**|  | [optional]
 **remember_me** | **bool**|  | [optional]
 **continue** | **string**|  | [optional]
 **nonce** | **string**|  | [optional]
 **uri** | **string**|  | [optional]
 **response** | **string**|  | [optional]
 **qop** | **string**|  | [optional]
 **nc** | **string**|  | [optional]
 **cnonce** | **string**|  | [optional]
 **use_token_cookie** | **bool**|  | [optional]
 **access_token** | **string**|  | [optional]
 **access_token_secret** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\AuthenticateResponse**](../Model/AuthenticateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logoutGetRequestlogoutGet**
> \Jiwa\Model\LogoutGetResponse logoutGetRequestlogoutGet($accept, $jiwa_stateful)

Logs an authenticated user out.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->logoutGetRequestlogoutGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->logoutGetRequestlogoutGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\LogoutGetResponse**](../Model/LogoutGetResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

