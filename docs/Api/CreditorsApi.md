# Jiwa\CreditorsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**creditorABANDONRequestAbandonDelete**](CreditorsApi.md#creditorABANDONRequestAbandonDelete) | **DELETE** /Creditors/Abandon | Abandons a stateful creditor.
[**creditorClassificationABANDONRequestClassificationsAbandonDelete**](CreditorsApi.md#creditorClassificationABANDONRequestClassificationsAbandonDelete) | **DELETE** /Creditors/Classifications/Abandon | Abandons a stateful creditor classification.
[**creditorClassificationDELETERequestClassificationsClassificationIDDelete**](CreditorsApi.md#creditorClassificationDELETERequestClassificationsClassificationIDDelete) | **DELETE** /Creditors/Classifications/{ClassificationID} | Deletes a creditor classification.
[**creditorClassificationGETRequestClassificationsClassificationIDGet**](CreditorsApi.md#creditorClassificationGETRequestClassificationsClassificationIDGet) | **GET** /Creditors/Classifications/{ClassificationID} | Retrieves a creditor classification.
[**creditorClassificationPATCHRequestClassificationsClassificationIDUpdate**](CreditorsApi.md#creditorClassificationPATCHRequestClassificationsClassificationIDUpdate) | **PATCH** /Creditors/Classifications/{ClassificationID} | Updates a creditor classification.
[**creditorClassificationPOSTRequestClassificationsPost**](CreditorsApi.md#creditorClassificationPOSTRequestClassificationsPost) | **POST** /Creditors/Classifications | Creates a creditor classification.
[**creditorClassificationSAVERequestClassificationsSaveGet**](CreditorsApi.md#creditorClassificationSAVERequestClassificationsSaveGet) | **GET** /Creditors/Classifications/Save | Saves a stateful creditor classification.
[**creditorDELETERequestCreditorIDDelete**](CreditorsApi.md#creditorDELETERequestCreditorIDDelete) | **DELETE** /Creditors/{CreditorID} | Deletes a creditor.
[**creditorGETRequestCreditorIDGet**](CreditorsApi.md#creditorGETRequestCreditorIDGet) | **GET** /Creditors/{CreditorID} | Retrieves a creditor.
[**creditorPATCHRequestCreditorIDUpdate**](CreditorsApi.md#creditorPATCHRequestCreditorIDUpdate) | **PATCH** /Creditors/{CreditorID} | Updates a creditor.
[**creditorPOSTRequestPost**](CreditorsApi.md#creditorPOSTRequestPost) | **POST** /Creditors | Creates a creditor.
[**creditorSAVERequestSaveGet**](CreditorsApi.md#creditorSAVERequestSaveGet) | **GET** /Creditors/Save | Saves a stateful creditor.
[**creditorWarehouseAddressDELETERequestCreditorIDWarehouseAddressWarehouseAddressIDDelete**](CreditorsApi.md#creditorWarehouseAddressDELETERequestCreditorIDWarehouseAddressWarehouseAddressIDDelete) | **DELETE** /Creditors/{CreditorID}/WarehouseAddress/{WarehouseAddressID} | Deletes a warehouse address from a creditor.
[**creditorWarehouseAddressGETRequestCreditorIDWarehouseAddressWarehouseAddressIDGet**](CreditorsApi.md#creditorWarehouseAddressGETRequestCreditorIDWarehouseAddressWarehouseAddressIDGet) | **GET** /Creditors/{CreditorID}/WarehouseAddress/{WarehouseAddressID} | Retrieves a creditor warehouse address.
[**creditorWarehouseAddressPATCHRequestCreditorIDWarehouseAddressWarehouseAddressIDUpdate**](CreditorsApi.md#creditorWarehouseAddressPATCHRequestCreditorIDWarehouseAddressWarehouseAddressIDUpdate) | **PATCH** /Creditors/{CreditorID}/WarehouseAddress/{WarehouseAddressID} | Updates a warehouse address for a creditor.
[**creditorWarehouseAddressPOSTRequestCreditorIDWarehouseAddressPost**](CreditorsApi.md#creditorWarehouseAddressPOSTRequestCreditorIDWarehouseAddressPost) | **POST** /Creditors/{CreditorID}/WarehouseAddress | Appends a warehouse to a creditor.
[**creditorWarehouseAddressesGETManyRequestCreditorIDWarehouseAddressesGet**](CreditorsApi.md#creditorWarehouseAddressesGETManyRequestCreditorIDWarehouseAddressesGet) | **GET** /Creditors/{CreditorID}/WarehouseAddresses | Retrieves a list of creditor warehouse addresses.


# **creditorABANDONRequestAbandonDelete**
> \Jiwa\Model\Object creditorABANDONRequestAbandonDelete($accept, $jiwa_stateful, $creditor_id)

Abandons a stateful creditor.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful creditor exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_id = "creditor_id_example"; // string | 

try {
    $result = $apiInstance->creditorABANDONRequestAbandonDelete($accept, $jiwa_stateful, $creditor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorClassificationABANDONRequestClassificationsAbandonDelete**
> \Jiwa\Model\Object creditorClassificationABANDONRequestClassificationsAbandonDelete($accept, $jiwa_stateful, $classification_id)

Abandons a stateful creditor classification.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful creditor classification exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$classification_id = "classification_id_example"; // string | 

try {
    $result = $apiInstance->creditorClassificationABANDONRequestClassificationsAbandonDelete($accept, $jiwa_stateful, $classification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorClassificationABANDONRequestClassificationsAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **classification_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorClassificationDELETERequestClassificationsClassificationIDDelete**
> \Jiwa\Model\Object creditorClassificationDELETERequestClassificationsClassificationIDDelete($accept, $classification_id, $jiwa_stateful)

Deletes a creditor classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$classification_id = "classification_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->creditorClassificationDELETERequestClassificationsClassificationIDDelete($accept, $classification_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorClassificationDELETERequestClassificationsClassificationIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **classification_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorClassificationGETRequestClassificationsClassificationIDGet**
> \Jiwa\Model\CreditorClassification creditorClassificationGETRequestClassificationsClassificationIDGet($accept, $classification_id, $jiwa_stateful)

Retrieves a creditor classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$classification_id = "classification_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->creditorClassificationGETRequestClassificationsClassificationIDGet($accept, $classification_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorClassificationGETRequestClassificationsClassificationIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **classification_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CreditorClassification**](../Model/CreditorClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorClassificationPATCHRequestClassificationsClassificationIDUpdate**
> \Jiwa\Model\CreditorClassification creditorClassificationPATCHRequestClassificationsClassificationIDUpdate($accept, $classification_id, $jiwa_stateful, $description, $last_saved_date_time, $is_default, $terms_days, $terms_type, $po_workflows_rec_id, $po_workflows_name, $po_workflows_description, $creditor_ledgers, $body)

Updates a creditor classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$classification_id = "classification_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_default = true; // bool | 
$terms_days = 56; // int | 
$terms_type = "terms_type_example"; // string | 
$po_workflows_rec_id = "po_workflows_rec_id_example"; // string | 
$po_workflows_name = "po_workflows_name_example"; // string | 
$po_workflows_description = "po_workflows_description_example"; // string | 
$creditor_ledgers = "creditor_ledgers_example"; // string | 
$body = new \Jiwa\Model\CreditorClassificationPATCHRequest(); // \Jiwa\Model\CreditorClassificationPATCHRequest | 

try {
    $result = $apiInstance->creditorClassificationPATCHRequestClassificationsClassificationIDUpdate($accept, $classification_id, $jiwa_stateful, $description, $last_saved_date_time, $is_default, $terms_days, $terms_type, $po_workflows_rec_id, $po_workflows_name, $po_workflows_description, $creditor_ledgers, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorClassificationPATCHRequestClassificationsClassificationIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **classification_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **terms_days** | **int**|  | [optional]
 **terms_type** | **string**|  | [optional]
 **po_workflows_rec_id** | **string**|  | [optional]
 **po_workflows_name** | **string**|  | [optional]
 **po_workflows_description** | **string**|  | [optional]
 **creditor_ledgers** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\CreditorClassificationPATCHRequest**](../Model/CreditorClassificationPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CreditorClassification**](../Model/CreditorClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorClassificationPOSTRequestClassificationsPost**
> \Jiwa\Model\CreditorClassification creditorClassificationPOSTRequestClassificationsPost($accept, $jiwa_stateful, $description, $is_default, $terms_days, $terms_type, $po_workflows_rec_id, $po_workflows_name, $po_workflows_description, $creditor_ledgers, $body)

Creates a creditor classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$is_default = true; // bool | 
$terms_days = 56; // int | 
$terms_type = "terms_type_example"; // string | 
$po_workflows_rec_id = "po_workflows_rec_id_example"; // string | 
$po_workflows_name = "po_workflows_name_example"; // string | 
$po_workflows_description = "po_workflows_description_example"; // string | 
$creditor_ledgers = "creditor_ledgers_example"; // string | 
$body = new \Jiwa\Model\CreditorClassificationPOSTRequest(); // \Jiwa\Model\CreditorClassificationPOSTRequest | 

try {
    $result = $apiInstance->creditorClassificationPOSTRequestClassificationsPost($accept, $jiwa_stateful, $description, $is_default, $terms_days, $terms_type, $po_workflows_rec_id, $po_workflows_name, $po_workflows_description, $creditor_ledgers, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorClassificationPOSTRequestClassificationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **terms_days** | **int**|  | [optional]
 **terms_type** | **string**|  | [optional]
 **po_workflows_rec_id** | **string**|  | [optional]
 **po_workflows_name** | **string**|  | [optional]
 **po_workflows_description** | **string**|  | [optional]
 **creditor_ledgers** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\CreditorClassificationPOSTRequest**](../Model/CreditorClassificationPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CreditorClassification**](../Model/CreditorClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorClassificationSAVERequestClassificationsSaveGet**
> \Jiwa\Model\CreditorClassification creditorClassificationSAVERequestClassificationsSaveGet($accept, $jiwa_stateful, $classification_id)

Saves a stateful creditor classification.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful creditor classification exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$classification_id = "classification_id_example"; // string | 

try {
    $result = $apiInstance->creditorClassificationSAVERequestClassificationsSaveGet($accept, $jiwa_stateful, $classification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorClassificationSAVERequestClassificationsSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **classification_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\CreditorClassification**](../Model/CreditorClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorDELETERequestCreditorIDDelete**
> \Jiwa\Model\Object creditorDELETERequestCreditorIDDelete($accept, $creditor_id, $jiwa_stateful)

Deletes a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->creditorDELETERequestCreditorIDDelete($accept, $creditor_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorDELETERequestCreditorIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorGETRequestCreditorIDGet**
> \Jiwa\Model\Creditor creditorGETRequestCreditorIDGet($accept, $creditor_id, $jiwa_stateful)

Retrieves a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->creditorGETRequestCreditorIDGet($accept, $creditor_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorGETRequestCreditorIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Creditor**](../Model/Creditor.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorPATCHRequestCreditorIDUpdate**
> \Jiwa\Model\Creditor creditorPATCHRequestCreditorIDUpdate($accept, $creditor_id, $jiwa_stateful, $account_no, $alt_account_no, $name, $warehouse_addresses, $last_saved_date_time, $body)

Updates a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$account_no = "account_no_example"; // string | 
$alt_account_no = "alt_account_no_example"; // string | 
$name = "name_example"; // string | 
$warehouse_addresses = "warehouse_addresses_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$body = new \Jiwa\Model\CreditorPATCHRequest(); // \Jiwa\Model\CreditorPATCHRequest | 

try {
    $result = $apiInstance->creditorPATCHRequestCreditorIDUpdate($accept, $creditor_id, $jiwa_stateful, $account_no, $alt_account_no, $name, $warehouse_addresses, $last_saved_date_time, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorPATCHRequestCreditorIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **account_no** | **string**|  | [optional]
 **alt_account_no** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **warehouse_addresses** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **body** | [**\Jiwa\Model\CreditorPATCHRequest**](../Model/CreditorPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Creditor**](../Model/Creditor.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorPOSTRequestPost**
> \Jiwa\Model\Creditor creditorPOSTRequestPost($accept, $jiwa_stateful, $account_no, $alt_account_no, $name, $warehouse_addresses, $body)

Creates a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$account_no = "account_no_example"; // string | 
$alt_account_no = "alt_account_no_example"; // string | 
$name = "name_example"; // string | 
$warehouse_addresses = "warehouse_addresses_example"; // string | 
$body = new \Jiwa\Model\CreditorPOSTRequest(); // \Jiwa\Model\CreditorPOSTRequest | 

try {
    $result = $apiInstance->creditorPOSTRequestPost($accept, $jiwa_stateful, $account_no, $alt_account_no, $name, $warehouse_addresses, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **account_no** | **string**|  | [optional]
 **alt_account_no** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **warehouse_addresses** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\CreditorPOSTRequest**](../Model/CreditorPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Creditor**](../Model/Creditor.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorSAVERequestSaveGet**
> \Jiwa\Model\Creditor creditorSAVERequestSaveGet($accept, $jiwa_stateful, $creditor_id)

Saves a stateful creditor.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful creditor exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_id = "creditor_id_example"; // string | 

try {
    $result = $apiInstance->creditorSAVERequestSaveGet($accept, $jiwa_stateful, $creditor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Creditor**](../Model/Creditor.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorWarehouseAddressDELETERequestCreditorIDWarehouseAddressWarehouseAddressIDDelete**
> \Jiwa\Model\Object creditorWarehouseAddressDELETERequestCreditorIDWarehouseAddressWarehouseAddressIDDelete($accept, $creditor_id, $warehouse_address_id, $jiwa_stateful, $description, $address1, $address2, $address3, $address4, $postcode, $country, $notes, $courier_details, $default_delivery_days, $is_default)

Deletes a warehouse address from a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$warehouse_address_id = "warehouse_address_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$address1 = "address1_example"; // string | 
$address2 = "address2_example"; // string | 
$address3 = "address3_example"; // string | 
$address4 = "address4_example"; // string | 
$postcode = "postcode_example"; // string | 
$country = "country_example"; // string | 
$notes = "notes_example"; // string | 
$courier_details = "courier_details_example"; // string | 
$default_delivery_days = 56; // int | 
$is_default = true; // bool | 

try {
    $result = $apiInstance->creditorWarehouseAddressDELETERequestCreditorIDWarehouseAddressWarehouseAddressIDDelete($accept, $creditor_id, $warehouse_address_id, $jiwa_stateful, $description, $address1, $address2, $address3, $address4, $postcode, $country, $notes, $courier_details, $default_delivery_days, $is_default);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorWarehouseAddressDELETERequestCreditorIDWarehouseAddressWarehouseAddressIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **warehouse_address_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **address1** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **address3** | **string**|  | [optional]
 **address4** | **string**|  | [optional]
 **postcode** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **courier_details** | **string**|  | [optional]
 **default_delivery_days** | **int**|  | [optional]
 **is_default** | **bool**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorWarehouseAddressGETRequestCreditorIDWarehouseAddressWarehouseAddressIDGet**
> \Jiwa\Model\CreditorWarehouseAddress creditorWarehouseAddressGETRequestCreditorIDWarehouseAddressWarehouseAddressIDGet($accept, $creditor_id, $warehouse_address_id, $jiwa_stateful)

Retrieves a creditor warehouse address.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$warehouse_address_id = "warehouse_address_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->creditorWarehouseAddressGETRequestCreditorIDWarehouseAddressWarehouseAddressIDGet($accept, $creditor_id, $warehouse_address_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorWarehouseAddressGETRequestCreditorIDWarehouseAddressWarehouseAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **warehouse_address_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CreditorWarehouseAddress**](../Model/CreditorWarehouseAddress.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorWarehouseAddressPATCHRequestCreditorIDWarehouseAddressWarehouseAddressIDUpdate**
> \Jiwa\Model\CreditorWarehouseAddress creditorWarehouseAddressPATCHRequestCreditorIDWarehouseAddressWarehouseAddressIDUpdate($accept, $creditor_id, $warehouse_address_id, $jiwa_stateful, $description, $address1, $address2, $address3, $address4, $postcode, $country, $notes, $courier_details, $default_delivery_days, $is_default, $body)

Updates a warehouse address for a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$warehouse_address_id = "warehouse_address_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$address1 = "address1_example"; // string | 
$address2 = "address2_example"; // string | 
$address3 = "address3_example"; // string | 
$address4 = "address4_example"; // string | 
$postcode = "postcode_example"; // string | 
$country = "country_example"; // string | 
$notes = "notes_example"; // string | 
$courier_details = "courier_details_example"; // string | 
$default_delivery_days = 56; // int | 
$is_default = true; // bool | 
$body = new \Jiwa\Model\CreditorWarehouseAddressPATCHRequest(); // \Jiwa\Model\CreditorWarehouseAddressPATCHRequest | 

try {
    $result = $apiInstance->creditorWarehouseAddressPATCHRequestCreditorIDWarehouseAddressWarehouseAddressIDUpdate($accept, $creditor_id, $warehouse_address_id, $jiwa_stateful, $description, $address1, $address2, $address3, $address4, $postcode, $country, $notes, $courier_details, $default_delivery_days, $is_default, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorWarehouseAddressPATCHRequestCreditorIDWarehouseAddressWarehouseAddressIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **warehouse_address_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **address1** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **address3** | **string**|  | [optional]
 **address4** | **string**|  | [optional]
 **postcode** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **courier_details** | **string**|  | [optional]
 **default_delivery_days** | **int**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\CreditorWarehouseAddressPATCHRequest**](../Model/CreditorWarehouseAddressPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CreditorWarehouseAddress**](../Model/CreditorWarehouseAddress.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorWarehouseAddressPOSTRequestCreditorIDWarehouseAddressPost**
> \Jiwa\Model\CreditorWarehouseAddress creditorWarehouseAddressPOSTRequestCreditorIDWarehouseAddressPost($accept, $creditor_id, $jiwa_stateful, $description, $address1, $address2, $address3, $address4, $postcode, $country, $notes, $courier_details, $default_delivery_days, $is_default, $body)

Appends a warehouse to a creditor.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$address1 = "address1_example"; // string | 
$address2 = "address2_example"; // string | 
$address3 = "address3_example"; // string | 
$address4 = "address4_example"; // string | 
$postcode = "postcode_example"; // string | 
$country = "country_example"; // string | 
$notes = "notes_example"; // string | 
$courier_details = "courier_details_example"; // string | 
$default_delivery_days = 56; // int | 
$is_default = true; // bool | 
$body = new \Jiwa\Model\CreditorWarehouseAddressPOSTRequest(); // \Jiwa\Model\CreditorWarehouseAddressPOSTRequest | 

try {
    $result = $apiInstance->creditorWarehouseAddressPOSTRequestCreditorIDWarehouseAddressPost($accept, $creditor_id, $jiwa_stateful, $description, $address1, $address2, $address3, $address4, $postcode, $country, $notes, $courier_details, $default_delivery_days, $is_default, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorWarehouseAddressPOSTRequestCreditorIDWarehouseAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **address1** | **string**|  | [optional]
 **address2** | **string**|  | [optional]
 **address3** | **string**|  | [optional]
 **address4** | **string**|  | [optional]
 **postcode** | **string**|  | [optional]
 **country** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **courier_details** | **string**|  | [optional]
 **default_delivery_days** | **int**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\CreditorWarehouseAddressPOSTRequest**](../Model/CreditorWarehouseAddressPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CreditorWarehouseAddress**](../Model/CreditorWarehouseAddress.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **creditorWarehouseAddressesGETManyRequestCreditorIDWarehouseAddressesGet**
> \Jiwa\Model\CreditorWarehouseAddress[] creditorWarehouseAddressesGETManyRequestCreditorIDWarehouseAddressesGet($accept, $creditor_id, $jiwa_stateful)

Retrieves a list of creditor warehouse addresses.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\CreditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$creditor_id = "creditor_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->creditorWarehouseAddressesGETManyRequestCreditorIDWarehouseAddressesGet($accept, $creditor_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditorsApi->creditorWarehouseAddressesGETManyRequestCreditorIDWarehouseAddressesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **creditor_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CreditorWarehouseAddress[]**](../Model/CreditorWarehouseAddress.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

