# Jiwa\SupplierReturnsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierReturnCreditACTIVATERequestCreditActivateCreditIDPost**](SupplierReturnsApi.md#supplierReturnCreditACTIVATERequestCreditActivateCreditIDPost) | **POST** /SupplierReturns/Credit/Activate/{CreditID} | Activates a supplier return credit.
[**supplierReturnCreditCreateFromShipmentsRequestCreditFromShipmentsPost**](SupplierReturnsApi.md#supplierReturnCreditCreateFromShipmentsRequestCreditFromShipmentsPost) | **POST** /SupplierReturns/Credit/FromShipments | Creates a supplier return credit from one or more shipments.
[**supplierReturnCreditGETRequestCreditCreditIDGet**](SupplierReturnsApi.md#supplierReturnCreditGETRequestCreditCreditIDGet) | **GET** /SupplierReturns/Credit/{CreditID} | Retrieves a supplier return credit.
[**supplierReturnShippingGETRequestShippingShippingIDGet**](SupplierReturnsApi.md#supplierReturnShippingGETRequestShippingShippingIDGet) | **GET** /SupplierReturns/Shipping/{ShippingID} | Retrieves a supplier return shipping.


# **supplierReturnCreditACTIVATERequestCreditActivateCreditIDPost**
> \Jiwa\JiwaModel\Credit supplierReturnCreditACTIVATERequestCreditActivateCreditIDPost($accept, $credit_id, $jiwa_stateful, $body)

Activates a supplier return credit.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SupplierReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$credit_id = "credit_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\SupplierReturnCreditACTIVATERequest(); // \Jiwa\JiwaModel\SupplierReturnCreditACTIVATERequest | 

try {
    $result = $apiInstance->supplierReturnCreditACTIVATERequestCreditActivateCreditIDPost($accept, $credit_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierReturnsApi->supplierReturnCreditACTIVATERequestCreditActivateCreditIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **credit_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\SupplierReturnCreditACTIVATERequest**](../Model/SupplierReturnCreditACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Credit**](../Model/Credit.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierReturnCreditCreateFromShipmentsRequestCreditFromShipmentsPost**
> \Jiwa\JiwaModel\Credit supplierReturnCreditCreateFromShipmentsRequestCreditFromShipmentsPost($accept, $jiwa_stateful, $shipment_i_ds, $shipment_nos, $body)

Creates a supplier return credit from one or more shipments.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SupplierReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$shipment_i_ds = "shipment_i_ds_example"; // string | 
$shipment_nos = "shipment_nos_example"; // string | 
$body = new \Jiwa\JiwaModel\SupplierReturnCreditCreateFromShipmentsRequest(); // \Jiwa\JiwaModel\SupplierReturnCreditCreateFromShipmentsRequest | 

try {
    $result = $apiInstance->supplierReturnCreditCreateFromShipmentsRequestCreditFromShipmentsPost($accept, $jiwa_stateful, $shipment_i_ds, $shipment_nos, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierReturnsApi->supplierReturnCreditCreateFromShipmentsRequestCreditFromShipmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **shipment_i_ds** | **string**|  | [optional]
 **shipment_nos** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SupplierReturnCreditCreateFromShipmentsRequest**](../Model/SupplierReturnCreditCreateFromShipmentsRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Credit**](../Model/Credit.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierReturnCreditGETRequestCreditCreditIDGet**
> \Jiwa\JiwaModel\Credit supplierReturnCreditGETRequestCreditCreditIDGet($accept, $credit_id, $jiwa_stateful)

Retrieves a supplier return credit.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SupplierReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$credit_id = "credit_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->supplierReturnCreditGETRequestCreditCreditIDGet($accept, $credit_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierReturnsApi->supplierReturnCreditGETRequestCreditCreditIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **credit_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Credit**](../Model/Credit.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierReturnShippingGETRequestShippingShippingIDGet**
> \Jiwa\JiwaModel\Shipping supplierReturnShippingGETRequestShippingShippingIDGet($accept, $shipping_id, $jiwa_stateful)

Retrieves a supplier return shipping.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SupplierReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipping_id = "shipping_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->supplierReturnShippingGETRequestShippingShippingIDGet($accept, $shipping_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierReturnsApi->supplierReturnShippingGETRequestShippingShippingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipping_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Shipping**](../Model/Shipping.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

