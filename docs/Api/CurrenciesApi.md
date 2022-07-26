# Jiwa\CurrenciesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyABANDONRequestAbandonDelete**](CurrenciesApi.md#currencyABANDONRequestAbandonDelete) | **DELETE** /Currencies/Abandon | Abandons a stateful currency.
[**currencyDELETERequestCurrencyIDDelete**](CurrenciesApi.md#currencyDELETERequestCurrencyIDDelete) | **DELETE** /Currencies/{CurrencyID} | Deletes a currency.
[**currencyGETRequestCurrencyIDGet**](CurrenciesApi.md#currencyGETRequestCurrencyIDGet) | **GET** /Currencies/{CurrencyID} | Retrieves a currency.
[**currencyPATCHRequestCurrencyIDUpdate**](CurrenciesApi.md#currencyPATCHRequestCurrencyIDUpdate) | **PATCH** /Currencies/{CurrencyID} | Updates a currency.
[**currencyPOSTRequestPost**](CurrenciesApi.md#currencyPOSTRequestPost) | **POST** /Currencies | Creates a currency.
[**currencyRateDELETERequestCurrencyIDRatesRateIDDelete**](CurrenciesApi.md#currencyRateDELETERequestCurrencyIDRatesRateIDDelete) | **DELETE** /Currencies/{CurrencyID}/Rates/{RateID} | Deletes a rate from a currency.
[**currencyRateGETRequestCurrencyIDRatesRateIDGet**](CurrenciesApi.md#currencyRateGETRequestCurrencyIDRatesRateIDGet) | **GET** /Currencies/{CurrencyID}/Rates/{RateID} | Retrieves a currency rate.
[**currencyRatePATCHRequestCurrencyIDRatesRateIDUpdate**](CurrenciesApi.md#currencyRatePATCHRequestCurrencyIDRatesRateIDUpdate) | **PATCH** /Currencies/{CurrencyID}/Rates/{RateID} | Updates a rate for a currency.
[**currencyRatePOSTRequestCurrencyIDRatesPost**](CurrenciesApi.md#currencyRatePOSTRequestCurrencyIDRatesPost) | **POST** /Currencies/{CurrencyID}/Rates | Appends a rate to a currency.
[**currencySAVERequestSaveGet**](CurrenciesApi.md#currencySAVERequestSaveGet) | **GET** /Currencies/Save | Saves a stateful currency.


# **currencyABANDONRequestAbandonDelete**
> \Jiwa\Model\Object currencyABANDONRequestAbandonDelete($accept, $jiwa_stateful, $currency_id)

Abandons a stateful currency.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful currency exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$currency_id = "currency_id_example"; // string | 

try {
    $result = $apiInstance->currencyABANDONRequestAbandonDelete($accept, $jiwa_stateful, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **currency_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyDELETERequestCurrencyIDDelete**
> \Jiwa\Model\Object currencyDELETERequestCurrencyIDDelete($accept, $currency_id, $jiwa_stateful)

Deletes a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->currencyDELETERequestCurrencyIDDelete($accept, $currency_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyDELETERequestCurrencyIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyGETRequestCurrencyIDGet**
> \Jiwa\Model\Currency currencyGETRequestCurrencyIDGet($accept, $currency_id, $jiwa_stateful)

Retrieves a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->currencyGETRequestCurrencyIDGet($accept, $currency_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyGETRequestCurrencyIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Currency**](../Model/Currency.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyPATCHRequestCurrencyIDUpdate**
> \Jiwa\Model\Currency currencyPATCHRequestCurrencyIDUpdate($accept, $currency_id, $jiwa_stateful, $name, $short_name, $decimal_places, $is_enabled, $is_local, $last_saved_date_time, $rates, $body)

Updates a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$short_name = "short_name_example"; // string | 
$decimal_places = 56; // int | 
$is_enabled = true; // bool | 
$is_local = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rates = "rates_example"; // string | 
$body = new \Jiwa\Model\CurrencyPATCHRequest(); // \Jiwa\Model\CurrencyPATCHRequest | 

try {
    $result = $apiInstance->currencyPATCHRequestCurrencyIDUpdate($accept, $currency_id, $jiwa_stateful, $name, $short_name, $decimal_places, $is_enabled, $is_local, $last_saved_date_time, $rates, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyPATCHRequestCurrencyIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **short_name** | **string**|  | [optional]
 **decimal_places** | **int**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **is_local** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **rates** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\CurrencyPATCHRequest**](../Model/CurrencyPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Currency**](../Model/Currency.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyPOSTRequestPost**
> \Jiwa\Model\Currency currencyPOSTRequestPost($accept, $jiwa_stateful, $name, $short_name, $decimal_places, $is_enabled, $is_local, $rates, $body)

Creates a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$short_name = "short_name_example"; // string | 
$decimal_places = 56; // int | 
$is_enabled = true; // bool | 
$is_local = true; // bool | 
$rates = "rates_example"; // string | 
$body = new \Jiwa\Model\CurrencyPOSTRequest(); // \Jiwa\Model\CurrencyPOSTRequest | 

try {
    $result = $apiInstance->currencyPOSTRequestPost($accept, $jiwa_stateful, $name, $short_name, $decimal_places, $is_enabled, $is_local, $rates, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **short_name** | **string**|  | [optional]
 **decimal_places** | **int**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **is_local** | **bool**|  | [optional]
 **rates** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\CurrencyPOSTRequest**](../Model/CurrencyPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Currency**](../Model/Currency.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRateDELETERequestCurrencyIDRatesRateIDDelete**
> \Jiwa\Model\Object currencyRateDELETERequestCurrencyIDRatesRateIDDelete($accept, $currency_id, $rate_id, $jiwa_stateful, $date_entered, $effective_date, $effective_date_end, $transaction_rate)

Deletes a rate from a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$rate_id = "rate_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$date_entered = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$effective_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$transaction_rate = 1.2; // double | 

try {
    $result = $apiInstance->currencyRateDELETERequestCurrencyIDRatesRateIDDelete($accept, $currency_id, $rate_id, $jiwa_stateful, $date_entered, $effective_date, $effective_date_end, $transaction_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyRateDELETERequestCurrencyIDRatesRateIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **rate_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **date_entered** | **\DateTime**|  | [optional]
 **effective_date** | **\DateTime**|  | [optional]
 **effective_date_end** | **\DateTime**|  | [optional]
 **transaction_rate** | **double**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRateGETRequestCurrencyIDRatesRateIDGet**
> \Jiwa\Model\CurrencyRate currencyRateGETRequestCurrencyIDRatesRateIDGet($accept, $currency_id, $rate_id, $jiwa_stateful)

Retrieves a currency rate.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$rate_id = "rate_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->currencyRateGETRequestCurrencyIDRatesRateIDGet($accept, $currency_id, $rate_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyRateGETRequestCurrencyIDRatesRateIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **rate_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CurrencyRate**](../Model/CurrencyRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRatePATCHRequestCurrencyIDRatesRateIDUpdate**
> \Jiwa\Model\CurrencyRate currencyRatePATCHRequestCurrencyIDRatesRateIDUpdate($accept, $currency_id, $rate_id, $jiwa_stateful, $date_entered, $effective_date, $effective_date_end, $transaction_rate, $body)

Updates a rate for a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$rate_id = "rate_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$date_entered = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$effective_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$transaction_rate = 1.2; // double | 
$body = new \Jiwa\Model\CurrencyRatePATCHRequest(); // \Jiwa\Model\CurrencyRatePATCHRequest | 

try {
    $result = $apiInstance->currencyRatePATCHRequestCurrencyIDRatesRateIDUpdate($accept, $currency_id, $rate_id, $jiwa_stateful, $date_entered, $effective_date, $effective_date_end, $transaction_rate, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyRatePATCHRequestCurrencyIDRatesRateIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **rate_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **date_entered** | **\DateTime**|  | [optional]
 **effective_date** | **\DateTime**|  | [optional]
 **effective_date_end** | **\DateTime**|  | [optional]
 **transaction_rate** | **double**|  | [optional]
 **body** | [**\Jiwa\Model\CurrencyRatePATCHRequest**](../Model/CurrencyRatePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CurrencyRate**](../Model/CurrencyRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyRatePOSTRequestCurrencyIDRatesPost**
> \Jiwa\Model\CurrencyRate currencyRatePOSTRequestCurrencyIDRatesPost($accept, $currency_id, $jiwa_stateful, $date_entered, $effective_date, $effective_date_end, $transaction_rate, $body)

Appends a rate to a currency.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$currency_id = "currency_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$date_entered = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$effective_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$effective_date_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$transaction_rate = 1.2; // double | 
$body = new \Jiwa\Model\CurrencyRatePOSTRequest(); // \Jiwa\Model\CurrencyRatePOSTRequest | 

try {
    $result = $apiInstance->currencyRatePOSTRequestCurrencyIDRatesPost($accept, $currency_id, $jiwa_stateful, $date_entered, $effective_date, $effective_date_end, $transaction_rate, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencyRatePOSTRequestCurrencyIDRatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **currency_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **date_entered** | **\DateTime**|  | [optional]
 **effective_date** | **\DateTime**|  | [optional]
 **effective_date_end** | **\DateTime**|  | [optional]
 **transaction_rate** | **double**|  | [optional]
 **body** | [**\Jiwa\Model\CurrencyRatePOSTRequest**](../Model/CurrencyRatePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CurrencyRate**](../Model/CurrencyRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencySAVERequestSaveGet**
> \Jiwa\Model\Currency currencySAVERequestSaveGet($accept, $jiwa_stateful, $currency_id)

Saves a stateful currency.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful currency exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CurrenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$currency_id = "currency_id_example"; // string | 

try {
    $result = $apiInstance->currencySAVERequestSaveGet($accept, $jiwa_stateful, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->currencySAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **currency_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Currency**](../Model/Currency.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

