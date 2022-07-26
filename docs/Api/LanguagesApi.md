# Jiwa\LanguagesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**languageDELETERequestLanguageIDDelete**](LanguagesApi.md#languageDELETERequestLanguageIDDelete) | **DELETE** /Languages/{LanguageID} | Deletes a language.
[**languageGETRequestLanguageIDGet**](LanguagesApi.md#languageGETRequestLanguageIDGet) | **GET** /Languages/{LanguageID} | Retrieves a language.
[**languagePATCHRequestLanguageIDUpdate**](LanguagesApi.md#languagePATCHRequestLanguageIDUpdate) | **PATCH** /Languages/{LanguageID} | Updates a language.
[**languagePOSTRequestPost**](LanguagesApi.md#languagePOSTRequestPost) | **POST** /Languages | Creates a new language.
[**languagesGETManyRequestGet**](LanguagesApi.md#languagesGETManyRequestGet) | **GET** /Languages | Retrieves a list of languages.


# **languageDELETERequestLanguageIDDelete**
> \Jiwa\Model\Object languageDELETERequestLanguageIDDelete($accept, $language_id, $jiwa_stateful)

Deletes a language.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$language_id = "language_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->languageDELETERequestLanguageIDDelete($accept, $language_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languageDELETERequestLanguageIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **language_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languageGETRequestLanguageIDGet**
> \Jiwa\Model\Language languageGETRequestLanguageIDGet($accept, $language_id, $jiwa_stateful)

Retrieves a language.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$language_id = "language_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->languageGETRequestLanguageIDGet($accept, $language_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languageGETRequestLanguageIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **language_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Language**](../Model/Language.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languagePATCHRequestLanguageIDUpdate**
> \Jiwa\Model\Language languagePATCHRequestLanguageIDUpdate($accept, $language_id, $jiwa_stateful, $description, $language_code, $is_default, $body)

Updates a language.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$language_id = "language_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$language_code = "language_code_example"; // string | 
$is_default = true; // bool | 
$body = new \Jiwa\Model\LanguagePATCHRequest(); // \Jiwa\Model\LanguagePATCHRequest | 

try {
    $result = $apiInstance->languagePATCHRequestLanguageIDUpdate($accept, $language_id, $jiwa_stateful, $description, $language_code, $is_default, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagePATCHRequestLanguageIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **language_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **language_code** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\LanguagePATCHRequest**](../Model/LanguagePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Language**](../Model/Language.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languagePOSTRequestPost**
> \Jiwa\Model\Language languagePOSTRequestPost($accept, $jiwa_stateful, $description, $language_code, $is_default, $body)

Creates a new language.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$language_code = "language_code_example"; // string | 
$is_default = true; // bool | 
$body = new \Jiwa\Model\LanguagePOSTRequest(); // \Jiwa\Model\LanguagePOSTRequest | 

try {
    $result = $apiInstance->languagePOSTRequestPost($accept, $jiwa_stateful, $description, $language_code, $is_default, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagePOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **language_code** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\LanguagePOSTRequest**](../Model/LanguagePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Language**](../Model/Language.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **languagesGETManyRequestGet**
> \Jiwa\Model\Language[] languagesGETManyRequestGet($accept, $jiwa_stateful)

Retrieves a list of languages.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\LanguagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->languagesGETManyRequestGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LanguagesApi->languagesGETManyRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Language[]**](../Model/Language.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

