# Jiwa\CarriersApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**carrierABANDONRequestAbandonDelete**](CarriersApi.md#carrierABANDONRequestAbandonDelete) | **DELETE** /Carriers/Abandon | Abandons a stateful carrier.
[**carrierDELETERequestCarrierIDDelete**](CarriersApi.md#carrierDELETERequestCarrierIDDelete) | **DELETE** /Carriers/{CarrierID} | Deletes a carrier.
[**carrierFreightDescriptionDELETERequestCarrierIDFreightDescriptionsFreightDescriptionIDDelete**](CarriersApi.md#carrierFreightDescriptionDELETERequestCarrierIDFreightDescriptionsFreightDescriptionIDDelete) | **DELETE** /Carriers/{CarrierID}/FreightDescriptions/{FreightDescriptionID} | Deletes a freight description from a carrier.
[**carrierFreightDescriptionGETRequestCarrierIDFreightDescriptionsFreightDescriptionIDGet**](CarriersApi.md#carrierFreightDescriptionGETRequestCarrierIDFreightDescriptionsFreightDescriptionIDGet) | **GET** /Carriers/{CarrierID}/FreightDescriptions/{FreightDescriptionID} | Retrieves a carrier freight description.
[**carrierFreightDescriptionPATCHRequestCarrierIDFreightDescriptionsFreightDescriptionIDUpdate**](CarriersApi.md#carrierFreightDescriptionPATCHRequestCarrierIDFreightDescriptionsFreightDescriptionIDUpdate) | **PATCH** /Carriers/{CarrierID}/FreightDescriptions/{FreightDescriptionID} | Updates a freight description for a carrier.
[**carrierFreightDescriptionPOSTRequestCarrierIDFreightDescriptionsPost**](CarriersApi.md#carrierFreightDescriptionPOSTRequestCarrierIDFreightDescriptionsPost) | **POST** /Carriers/{CarrierID}/FreightDescriptions | Appends a freight description to a carrier.
[**carrierFreightDescriptionsGETManyRequestCarrierIDFreightDescriptionsGet**](CarriersApi.md#carrierFreightDescriptionsGETManyRequestCarrierIDFreightDescriptionsGet) | **GET** /Carriers/{CarrierID}/FreightDescriptions | Retrieves a list of carrier freight descriptions.
[**carrierGETRequestCarrierIDGet**](CarriersApi.md#carrierGETRequestCarrierIDGet) | **GET** /Carriers/{CarrierID} | Retrieves a carrier.
[**carrierPATCHRequestCarrierIDUpdate**](CarriersApi.md#carrierPATCHRequestCarrierIDUpdate) | **PATCH** /Carriers/{CarrierID} | Updates a carrier.
[**carrierPOSTRequestPost**](CarriersApi.md#carrierPOSTRequestPost) | **POST** /Carriers | Creates a carrier.
[**carrierSAVERequestSaveGet**](CarriersApi.md#carrierSAVERequestSaveGet) | **GET** /Carriers/Save | Saves a stateful carrier.
[**carrierServiceDELETERequestCarrierIDServicesServiceIDDelete**](CarriersApi.md#carrierServiceDELETERequestCarrierIDServicesServiceIDDelete) | **DELETE** /Carriers/{CarrierID}/Services/{ServiceID} | Deletes a carrier service.
[**carrierServiceGETRequestCarrierIDServicesServiceIDGet**](CarriersApi.md#carrierServiceGETRequestCarrierIDServicesServiceIDGet) | **GET** /Carriers/{CarrierID}/Services/{ServiceID} | Retrieves a service from a carrier.
[**carrierServicePATCHRequestCarrierIDServicesServiceIDUpdate**](CarriersApi.md#carrierServicePATCHRequestCarrierIDServicesServiceIDUpdate) | **PATCH** /Carriers/{CarrierID}/Services/{ServiceID} | Updates a carrier service.
[**carrierServicePOSTRequestCarrierIDServicesPost**](CarriersApi.md#carrierServicePOSTRequestCarrierIDServicesPost) | **POST** /Carriers/{CarrierID}/Services | Appends a service to a carrier.
[**carrierServicesGETManyRequestCarrierIDServicesGet**](CarriersApi.md#carrierServicesGETManyRequestCarrierIDServicesGet) | **GET** /Carriers/{CarrierID}/Services | Retrieves a list of services for a carrier.


# **carrierABANDONRequestAbandonDelete**
> \Jiwa\JiwaModel\Object carrierABANDONRequestAbandonDelete($accept, $jiwa_stateful, $carrier_id)

Abandons a stateful carrier.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful carrier exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$carrier_id = "carrier_id_example"; // string | 

try {
    $result = $apiInstance->carrierABANDONRequestAbandonDelete($accept, $jiwa_stateful, $carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **carrier_id** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierDELETERequestCarrierIDDelete**
> \Jiwa\JiwaModel\Object carrierDELETERequestCarrierIDDelete($accept, $carrier_id, $jiwa_stateful)

Deletes a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->carrierDELETERequestCarrierIDDelete($accept, $carrier_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierDELETERequestCarrierIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierFreightDescriptionDELETERequestCarrierIDFreightDescriptionsFreightDescriptionIDDelete**
> \Jiwa\JiwaModel\Object carrierFreightDescriptionDELETERequestCarrierIDFreightDescriptionsFreightDescriptionIDDelete($accept, $carrier_id, $freight_description_id, $jiwa_stateful, $description, $default_item, $last_saved_date_time, $enabled)

Deletes a freight description from a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$freight_description_id = "freight_description_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_item = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$enabled = true; // bool | 

try {
    $result = $apiInstance->carrierFreightDescriptionDELETERequestCarrierIDFreightDescriptionsFreightDescriptionIDDelete($accept, $carrier_id, $freight_description_id, $jiwa_stateful, $description, $default_item, $last_saved_date_time, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierFreightDescriptionDELETERequestCarrierIDFreightDescriptionsFreightDescriptionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **freight_description_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_item** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **enabled** | **bool**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierFreightDescriptionGETRequestCarrierIDFreightDescriptionsFreightDescriptionIDGet**
> \Jiwa\JiwaModel\CarrierFreightDescription carrierFreightDescriptionGETRequestCarrierIDFreightDescriptionsFreightDescriptionIDGet($accept, $carrier_id, $freight_description_id, $jiwa_stateful)

Retrieves a carrier freight description.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$freight_description_id = "freight_description_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->carrierFreightDescriptionGETRequestCarrierIDFreightDescriptionsFreightDescriptionIDGet($accept, $carrier_id, $freight_description_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierFreightDescriptionGETRequestCarrierIDFreightDescriptionsFreightDescriptionIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **freight_description_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierFreightDescription**](../Model/CarrierFreightDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierFreightDescriptionPATCHRequestCarrierIDFreightDescriptionsFreightDescriptionIDUpdate**
> \Jiwa\JiwaModel\CarrierFreightDescription carrierFreightDescriptionPATCHRequestCarrierIDFreightDescriptionsFreightDescriptionIDUpdate($accept, $carrier_id, $freight_description_id, $jiwa_stateful, $description, $default_item, $last_saved_date_time, $enabled, $body)

Updates a freight description for a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$freight_description_id = "freight_description_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_item = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$enabled = true; // bool | 
$body = new \Jiwa\JiwaModel\CarrierFreightDescriptionPATCHRequest(); // \Jiwa\JiwaModel\CarrierFreightDescriptionPATCHRequest | 

try {
    $result = $apiInstance->carrierFreightDescriptionPATCHRequestCarrierIDFreightDescriptionsFreightDescriptionIDUpdate($accept, $carrier_id, $freight_description_id, $jiwa_stateful, $description, $default_item, $last_saved_date_time, $enabled, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierFreightDescriptionPATCHRequestCarrierIDFreightDescriptionsFreightDescriptionIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **freight_description_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_item** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **enabled** | **bool**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\CarrierFreightDescriptionPATCHRequest**](../Model/CarrierFreightDescriptionPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierFreightDescription**](../Model/CarrierFreightDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierFreightDescriptionPOSTRequestCarrierIDFreightDescriptionsPost**
> \Jiwa\JiwaModel\CarrierFreightDescription carrierFreightDescriptionPOSTRequestCarrierIDFreightDescriptionsPost($accept, $carrier_id, $jiwa_stateful, $description, $default_item, $last_saved_date_time, $enabled, $body)

Appends a freight description to a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_item = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$enabled = true; // bool | 
$body = new \Jiwa\JiwaModel\CarrierFreightDescriptionPOSTRequest(); // \Jiwa\JiwaModel\CarrierFreightDescriptionPOSTRequest | 

try {
    $result = $apiInstance->carrierFreightDescriptionPOSTRequestCarrierIDFreightDescriptionsPost($accept, $carrier_id, $jiwa_stateful, $description, $default_item, $last_saved_date_time, $enabled, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierFreightDescriptionPOSTRequestCarrierIDFreightDescriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_item** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **enabled** | **bool**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\CarrierFreightDescriptionPOSTRequest**](../Model/CarrierFreightDescriptionPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierFreightDescription**](../Model/CarrierFreightDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierFreightDescriptionsGETManyRequestCarrierIDFreightDescriptionsGet**
> \Jiwa\JiwaModel\CarrierFreightDescription[] carrierFreightDescriptionsGETManyRequestCarrierIDFreightDescriptionsGet($accept, $carrier_id, $jiwa_stateful)

Retrieves a list of carrier freight descriptions.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->carrierFreightDescriptionsGETManyRequestCarrierIDFreightDescriptionsGet($accept, $carrier_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierFreightDescriptionsGETManyRequestCarrierIDFreightDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierFreightDescription[]**](../Model/CarrierFreightDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierGETRequestCarrierIDGet**
> \Jiwa\JiwaModel\Carrier carrierGETRequestCarrierIDGet($accept, $carrier_id, $jiwa_stateful)

Retrieves a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->carrierGETRequestCarrierIDGet($accept, $carrier_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierGETRequestCarrierIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Carrier**](../Model/Carrier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierPATCHRequestCarrierIDUpdate**
> \Jiwa\JiwaModel\Carrier carrierPATCHRequestCarrierIDUpdate($accept, $carrier_id, $jiwa_stateful, $carrier_name, $account_no, $enabled, $notes, $last_saved_date_time, $services, $freight_descriptions, $body)

Updates a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$carrier_name = "carrier_name_example"; // string | 
$account_no = "account_no_example"; // string | 
$enabled = true; // bool | 
$notes = "notes_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$services = "services_example"; // string | 
$freight_descriptions = "freight_descriptions_example"; // string | 
$body = new \Jiwa\JiwaModel\CarrierPATCHRequest(); // \Jiwa\JiwaModel\CarrierPATCHRequest | 

try {
    $result = $apiInstance->carrierPATCHRequestCarrierIDUpdate($accept, $carrier_id, $jiwa_stateful, $carrier_name, $account_no, $enabled, $notes, $last_saved_date_time, $services, $freight_descriptions, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierPATCHRequestCarrierIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **carrier_name** | **string**|  | [optional]
 **account_no** | **string**|  | [optional]
 **enabled** | **bool**|  | [optional]
 **notes** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **services** | **string**|  | [optional]
 **freight_descriptions** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\CarrierPATCHRequest**](../Model/CarrierPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Carrier**](../Model/Carrier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierPOSTRequestPost**
> \Jiwa\JiwaModel\Carrier carrierPOSTRequestPost($accept, $jiwa_stateful, $carrier_name, $account_no, $enabled, $notes, $services, $freight_descriptions, $body)

Creates a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$carrier_name = "carrier_name_example"; // string | 
$account_no = "account_no_example"; // string | 
$enabled = true; // bool | 
$notes = "notes_example"; // string | 
$services = "services_example"; // string | 
$freight_descriptions = "freight_descriptions_example"; // string | 
$body = new \Jiwa\JiwaModel\CarrierPOSTRequest(); // \Jiwa\JiwaModel\CarrierPOSTRequest | 

try {
    $result = $apiInstance->carrierPOSTRequestPost($accept, $jiwa_stateful, $carrier_name, $account_no, $enabled, $notes, $services, $freight_descriptions, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **carrier_name** | **string**|  | [optional]
 **account_no** | **string**|  | [optional]
 **enabled** | **bool**|  | [optional]
 **notes** | **string**|  | [optional]
 **services** | **string**|  | [optional]
 **freight_descriptions** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\CarrierPOSTRequest**](../Model/CarrierPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Carrier**](../Model/Carrier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierSAVERequestSaveGet**
> \Jiwa\JiwaModel\Carrier carrierSAVERequestSaveGet($accept, $jiwa_stateful, $carrier_id)

Saves a stateful carrier.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful carrier exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$carrier_id = "carrier_id_example"; // string | 

try {
    $result = $apiInstance->carrierSAVERequestSaveGet($accept, $jiwa_stateful, $carrier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **carrier_id** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Carrier**](../Model/Carrier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierServiceDELETERequestCarrierIDServicesServiceIDDelete**
> \Jiwa\JiwaModel\Object carrierServiceDELETERequestCarrierIDServicesServiceIDDelete($accept, $carrier_id, $service_id, $jiwa_stateful, $service_name, $default_item, $last_saved_date_time, $enabled)

Deletes a carrier service.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$service_id = "service_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$service_name = "service_name_example"; // string | 
$default_item = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$enabled = true; // bool | 

try {
    $result = $apiInstance->carrierServiceDELETERequestCarrierIDServicesServiceIDDelete($accept, $carrier_id, $service_id, $jiwa_stateful, $service_name, $default_item, $last_saved_date_time, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierServiceDELETERequestCarrierIDServicesServiceIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **service_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **service_name** | **string**|  | [optional]
 **default_item** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **enabled** | **bool**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierServiceGETRequestCarrierIDServicesServiceIDGet**
> \Jiwa\JiwaModel\CarrierService carrierServiceGETRequestCarrierIDServicesServiceIDGet($accept, $carrier_id, $service_id, $jiwa_stateful)

Retrieves a service from a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$service_id = "service_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->carrierServiceGETRequestCarrierIDServicesServiceIDGet($accept, $carrier_id, $service_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierServiceGETRequestCarrierIDServicesServiceIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **service_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierService**](../Model/CarrierService.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierServicePATCHRequestCarrierIDServicesServiceIDUpdate**
> \Jiwa\JiwaModel\CarrierService carrierServicePATCHRequestCarrierIDServicesServiceIDUpdate($accept, $carrier_id, $service_id, $jiwa_stateful, $service_name, $default_item, $last_saved_date_time, $enabled, $body)

Updates a carrier service.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$service_id = "service_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$service_name = "service_name_example"; // string | 
$default_item = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$enabled = true; // bool | 
$body = new \Jiwa\JiwaModel\CarrierServicePATCHRequest(); // \Jiwa\JiwaModel\CarrierServicePATCHRequest | 

try {
    $result = $apiInstance->carrierServicePATCHRequestCarrierIDServicesServiceIDUpdate($accept, $carrier_id, $service_id, $jiwa_stateful, $service_name, $default_item, $last_saved_date_time, $enabled, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierServicePATCHRequestCarrierIDServicesServiceIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **service_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **service_name** | **string**|  | [optional]
 **default_item** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **enabled** | **bool**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\CarrierServicePATCHRequest**](../Model/CarrierServicePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierService**](../Model/CarrierService.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierServicePOSTRequestCarrierIDServicesPost**
> \Jiwa\JiwaModel\CarrierService carrierServicePOSTRequestCarrierIDServicesPost($accept, $carrier_id, $jiwa_stateful, $service_name, $default_item, $last_saved_date_time, $enabled, $body)

Appends a service to a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$service_name = "service_name_example"; // string | 
$default_item = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$enabled = true; // bool | 
$body = new \Jiwa\JiwaModel\CarrierServicePOSTRequest(); // \Jiwa\JiwaModel\CarrierServicePOSTRequest | 

try {
    $result = $apiInstance->carrierServicePOSTRequestCarrierIDServicesPost($accept, $carrier_id, $jiwa_stateful, $service_name, $default_item, $last_saved_date_time, $enabled, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierServicePOSTRequestCarrierIDServicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **service_name** | **string**|  | [optional]
 **default_item** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **enabled** | **bool**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\CarrierServicePOSTRequest**](../Model/CarrierServicePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierService**](../Model/CarrierService.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **carrierServicesGETManyRequestCarrierIDServicesGet**
> \Jiwa\JiwaModel\CarrierService[] carrierServicesGETManyRequestCarrierIDServicesGet($accept, $carrier_id, $jiwa_stateful)

Retrieves a list of services for a carrier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$carrier_id = "carrier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->carrierServicesGETManyRequestCarrierIDServicesGet($accept, $carrier_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carrierServicesGETManyRequestCarrierIDServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **carrier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CarrierService[]**](../Model/CarrierService.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

