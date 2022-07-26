# Jiwa\TaxRatesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxRateABANDONRequestAbandonDelete**](TaxRatesApi.md#taxRateABANDONRequestAbandonDelete) | **DELETE** /TaxRates/Abandon | Abandons a stateful TaxRate collection.
[**taxRateDELETERequestTaxIDDelete**](TaxRatesApi.md#taxRateDELETERequestTaxIDDelete) | **DELETE** /TaxRates/{TaxID} | Deletes a tax rate.
[**taxRateGETRequestTaxIDGet**](TaxRatesApi.md#taxRateGETRequestTaxIDGet) | **GET** /TaxRates/{TaxID} | Retrieves a tax rate.
[**taxRatePATCHRequestTaxIDUpdate**](TaxRatesApi.md#taxRatePATCHRequestTaxIDUpdate) | **PATCH** /TaxRates/{TaxID} | Updates a tax rate.
[**taxRatePOSTRequestPost**](TaxRatesApi.md#taxRatePOSTRequestPost) | **POST** /TaxRates | Creates a tax rate.
[**taxRateSAVERequestSaveGet**](TaxRatesApi.md#taxRateSAVERequestSaveGet) | **GET** /TaxRates/Save | Saves a stateful TaxRate collection.


# **taxRateABANDONRequestAbandonDelete**
> \Jiwa\JiwaModel\Object taxRateABANDONRequestAbandonDelete($accept, $jiwa_stateful)

Abandons a stateful TaxRate collection.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful TaxRate collection exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->taxRateABANDONRequestAbandonDelete($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->taxRateABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRateDELETERequestTaxIDDelete**
> \Jiwa\JiwaModel\Object taxRateDELETERequestTaxIDDelete($accept, $tax_id, $jiwa_stateful)

Deletes a tax rate.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$tax_id = "tax_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->taxRateDELETERequestTaxIDDelete($accept, $tax_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->taxRateDELETERequestTaxIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **tax_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRateGETRequestTaxIDGet**
> \Jiwa\JiwaModel\TaxRate taxRateGETRequestTaxIDGet($accept, $tax_id, $jiwa_stateful)

Retrieves a tax rate.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$tax_id = "tax_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->taxRateGETRequestTaxIDGet($accept, $tax_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->taxRateGETRequestTaxIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **tax_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\TaxRate**](../Model/TaxRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRatePATCHRequestTaxIDUpdate**
> \Jiwa\JiwaModel\TaxRate taxRatePATCHRequestTaxIDUpdate($accept, $tax_id, $jiwa_stateful, $rec_id, $description, $gst_tax_group, $rate, $is_default_rate, $bas_code, $is_default_rate_in_group, $is_enabled, $ledger_account, $body)

Updates a tax rate.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$tax_id = "tax_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 
$description = "description_example"; // string | 
$gst_tax_group = "gst_tax_group_example"; // string | 
$rate = 1.2; // double | 
$is_default_rate = true; // bool | 
$bas_code = 1.2; // double | 
$is_default_rate_in_group = true; // bool | 
$is_enabled = true; // bool | 
$ledger_account = "ledger_account_example"; // string | 
$body = new \Jiwa\JiwaModel\TaxRatePATCHRequest(); // \Jiwa\JiwaModel\TaxRatePATCHRequest | 

try {
    $result = $apiInstance->taxRatePATCHRequestTaxIDUpdate($accept, $tax_id, $jiwa_stateful, $rec_id, $description, $gst_tax_group, $rate, $is_default_rate, $bas_code, $is_default_rate_in_group, $is_enabled, $ledger_account, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->taxRatePATCHRequestTaxIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **tax_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **gst_tax_group** | **string**|  | [optional]
 **rate** | **double**|  | [optional]
 **is_default_rate** | **bool**|  | [optional]
 **bas_code** | **double**|  | [optional]
 **is_default_rate_in_group** | **bool**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **ledger_account** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\TaxRatePATCHRequest**](../Model/TaxRatePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\TaxRate**](../Model/TaxRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRatePOSTRequestPost**
> \Jiwa\JiwaModel\TaxRate taxRatePOSTRequestPost($accept, $jiwa_stateful, $rec_id, $description, $gst_tax_group, $rate, $is_default_rate, $bas_code, $is_default_rate_in_group, $is_enabled, $ledger_account, $body)

Creates a tax rate.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 
$description = "description_example"; // string | 
$gst_tax_group = "gst_tax_group_example"; // string | 
$rate = 1.2; // double | 
$is_default_rate = true; // bool | 
$bas_code = 1.2; // double | 
$is_default_rate_in_group = true; // bool | 
$is_enabled = true; // bool | 
$ledger_account = "ledger_account_example"; // string | 
$body = new \Jiwa\JiwaModel\TaxRatePOSTRequest(); // \Jiwa\JiwaModel\TaxRatePOSTRequest | 

try {
    $result = $apiInstance->taxRatePOSTRequestPost($accept, $jiwa_stateful, $rec_id, $description, $gst_tax_group, $rate, $is_default_rate, $bas_code, $is_default_rate_in_group, $is_enabled, $ledger_account, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->taxRatePOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **gst_tax_group** | **string**|  | [optional]
 **rate** | **double**|  | [optional]
 **is_default_rate** | **bool**|  | [optional]
 **bas_code** | **double**|  | [optional]
 **is_default_rate_in_group** | **bool**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **ledger_account** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\TaxRatePOSTRequest**](../Model/TaxRatePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\TaxRate**](../Model/TaxRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxRateSAVERequestSaveGet**
> \Jiwa\JiwaModel\TaxRate[] taxRateSAVERequestSaveGet($accept, $jiwa_stateful)

Saves a stateful TaxRate collection.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful TaxRate collection exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->taxRateSAVERequestSaveGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->taxRateSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\TaxRate[]**](../Model/TaxRate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

