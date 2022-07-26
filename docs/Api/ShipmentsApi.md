# Jiwa\ShipmentsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**landedCostShipmentABANDONRequestAbandonDelete**](ShipmentsApi.md#landedCostShipmentABANDONRequestAbandonDelete) | **DELETE** /Shipments/Abandon | Abandons a stateful shipment.
[**landedCostShipmentACTIVATERequestActivateShipmentIDPost**](ShipmentsApi.md#landedCostShipmentACTIVATERequestActivateShipmentIDPost) | **POST** /Shipments/Activate/{ShipmentID} | Activates a shipment.
[**landedCostShipmentCREATEFromPORequestFromPurchaseOrdersOrderNosPost**](ShipmentsApi.md#landedCostShipmentCREATEFromPORequestFromPurchaseOrdersOrderNosPost) | **POST** /Shipments/FromPurchaseOrders/{OrderNos} | Creates a shipment from the supplied purchase orders.
[**landedCostShipmentDELETERequestShipmentIDDelete**](ShipmentsApi.md#landedCostShipmentDELETERequestShipmentIDDelete) | **DELETE** /Shipments/{ShipmentID} | Deletes a shipment.
[**landedCostShipmentGETRequestShipmentIDGet**](ShipmentsApi.md#landedCostShipmentGETRequestShipmentIDGet) | **GET** /Shipments/{ShipmentID} | Retrieves a shipment.
[**landedCostShipmentLineGETRequestShipmentIDLinesLineIDGet**](ShipmentsApi.md#landedCostShipmentLineGETRequestShipmentIDLinesLineIDGet) | **GET** /Shipments/{ShipmentID}/Lines/{LineID} | Retrieves a shipment line.
[**landedCostShipmentLinePATCHRequestShipmentIDLinesLineIDUpdate**](ShipmentsApi.md#landedCostShipmentLinePATCHRequestShipmentIDLinesLineIDUpdate) | **PATCH** /Shipments/{ShipmentID}/Lines/{LineID} | Updates a line for a shipment.
[**landedCostShipmentLinesGETManyRequestShipmentIDLinesGet**](ShipmentsApi.md#landedCostShipmentLinesGETManyRequestShipmentIDLinesGet) | **GET** /Shipments/{ShipmentID}/Lines | Retrieves a list of shipment lines.
[**landedCostShipmentPATCHRequestShipmentIDUpdate**](ShipmentsApi.md#landedCostShipmentPATCHRequestShipmentIDUpdate) | **PATCH** /Shipments/{ShipmentID} | Updates a shipment.
[**landedCostShipmentPOSTRequestPost**](ShipmentsApi.md#landedCostShipmentPOSTRequestPost) | **POST** /Shipments | Creates a shipment.
[**landedCostShipmentPurchaseOrderDELETERequestShipmentIDPurchaseOrdersOrderIDDelete**](ShipmentsApi.md#landedCostShipmentPurchaseOrderDELETERequestShipmentIDPurchaseOrdersOrderIDDelete) | **DELETE** /Shipments/{ShipmentID}/PurchaseOrders/{OrderID} | Deletes a purchase order from a shipment.
[**landedCostShipmentPurchaseOrderGETRequestShipmentIDPurchaseOrdersOrderIDGet**](ShipmentsApi.md#landedCostShipmentPurchaseOrderGETRequestShipmentIDPurchaseOrdersOrderIDGet) | **GET** /Shipments/{ShipmentID}/PurchaseOrders/{OrderID} | Retrieves a shipment purchase order.
[**landedCostShipmentPurchaseOrderPOSTRequestShipmentIDPurchaseOrdersPost**](ShipmentsApi.md#landedCostShipmentPurchaseOrderPOSTRequestShipmentIDPurchaseOrdersPost) | **POST** /Shipments/{ShipmentID}/PurchaseOrders | Appends a purchase order to a shipment.
[**landedCostShipmentPurchaseOrdersGETManyRequestShipmentIDPurchaseOrdersGet**](ShipmentsApi.md#landedCostShipmentPurchaseOrdersGETManyRequestShipmentIDPurchaseOrdersGet) | **GET** /Shipments/{ShipmentID}/PurchaseOrders | Retrieves a list of shipment purchase orders.
[**landedCostShipmentSAVERequestSaveGet**](ShipmentsApi.md#landedCostShipmentSAVERequestSaveGet) | **GET** /Shipments/Save | Saves a stateful stateful shipment.


# **landedCostShipmentABANDONRequestAbandonDelete**
> \Jiwa\Model\Object landedCostShipmentABANDONRequestAbandonDelete($accept, $jiwa_stateful, $shipment_id)

Abandons a stateful shipment.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful shipment item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->landedCostShipmentABANDONRequestAbandonDelete($accept, $jiwa_stateful, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **shipment_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentACTIVATERequestActivateShipmentIDPost**
> \Jiwa\Model\Shipment landedCostShipmentACTIVATERequestActivateShipmentIDPost($accept, $shipment_id, $jiwa_stateful, $body)

Activates a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\Model\LandedCostShipmentACTIVATERequest(); // \Jiwa\Model\LandedCostShipmentACTIVATERequest | 

try {
    $result = $apiInstance->landedCostShipmentACTIVATERequestActivateShipmentIDPost($accept, $shipment_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentACTIVATERequestActivateShipmentIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\Model\LandedCostShipmentACTIVATERequest**](../Model/LandedCostShipmentACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Shipment**](../Model/Shipment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentCREATEFromPORequestFromPurchaseOrdersOrderNosPost**
> \Jiwa\Model\Shipment landedCostShipmentCREATEFromPORequestFromPurchaseOrdersOrderNosPost($accept, $order_nos, $jiwa_stateful, $body)

Creates a shipment from the supplied purchase orders.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$order_nos = "order_nos_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\Model\LandedCostShipmentCREATEFromPORequest(); // \Jiwa\Model\LandedCostShipmentCREATEFromPORequest | 

try {
    $result = $apiInstance->landedCostShipmentCREATEFromPORequestFromPurchaseOrdersOrderNosPost($accept, $order_nos, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentCREATEFromPORequestFromPurchaseOrdersOrderNosPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **order_nos** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\Model\LandedCostShipmentCREATEFromPORequest**](../Model/LandedCostShipmentCREATEFromPORequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Shipment**](../Model/Shipment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentDELETERequestShipmentIDDelete**
> \Jiwa\Model\Object landedCostShipmentDELETERequestShipmentIDDelete($accept, $shipment_id, $jiwa_stateful)

Deletes a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostShipmentDELETERequestShipmentIDDelete($accept, $shipment_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentDELETERequestShipmentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentGETRequestShipmentIDGet**
> \Jiwa\Model\Shipment landedCostShipmentGETRequestShipmentIDGet($accept, $shipment_id, $jiwa_stateful)

Retrieves a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostShipmentGETRequestShipmentIDGet($accept, $shipment_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentGETRequestShipmentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Shipment**](../Model/Shipment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentLineGETRequestShipmentIDLinesLineIDGet**
> \Jiwa\Model\ShipmentLine landedCostShipmentLineGETRequestShipmentIDLinesLineIDGet($accept, $shipment_id, $line_id, $jiwa_stateful)

Retrieves a shipment line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostShipmentLineGETRequestShipmentIDLinesLineIDGet($accept, $shipment_id, $line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentLineGETRequestShipmentIDLinesLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\ShipmentLine**](../Model/ShipmentLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentLinePATCHRequestShipmentIDLinesLineIDUpdate**
> \Jiwa\Model\ShipmentLine landedCostShipmentLinePATCHRequestShipmentIDLinesLineIDUpdate($accept, $shipment_id, $line_id, $jiwa_stateful, $item_no, $inventory_id, $inventory_part_no, $inventory_description, $creditor_id, $creditor_account_no, $creditor_name, $sh_invoices_rec_id, $sh_invoices_invoice_no, $purchase_order_line_id, $purchase_order_line_order_line_no, $purchase_order_line_order_id, $purchase_order_line_order_no, $purchase_order_line_quantity, $purchase_order_line_quantity_delivered, $quantity_ordered, $quantity_this_shipment, $ordered_cost, $fx_ordered_cost, $unit_cost_ex_tax, $fx_rate, $fx_unit_cost_ex_tax, $tax_rate, $tax_amount, $unit_cost_inc_tax, $line_total_ex_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $landed_cost_line_total, $landed_cost, $body)

Updates a line for a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$inventory_part_no = "inventory_part_no_example"; // string | 
$inventory_description = "inventory_description_example"; // string | 
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$sh_invoices_rec_id = "sh_invoices_rec_id_example"; // string | 
$sh_invoices_invoice_no = "sh_invoices_invoice_no_example"; // string | 
$purchase_order_line_id = "purchase_order_line_id_example"; // string | 
$purchase_order_line_order_line_no = "purchase_order_line_order_line_no_example"; // string | 
$purchase_order_line_order_id = "purchase_order_line_order_id_example"; // string | 
$purchase_order_line_order_no = "purchase_order_line_order_no_example"; // string | 
$purchase_order_line_quantity = "purchase_order_line_quantity_example"; // string | 
$purchase_order_line_quantity_delivered = "purchase_order_line_quantity_delivered_example"; // string | 
$quantity_ordered = 1.2; // double | 
$quantity_this_shipment = 1.2; // double | 
$ordered_cost = 1.2; // double | 
$fx_ordered_cost = 1.2; // double | 
$unit_cost_ex_tax = 1.2; // double | 
$fx_rate = 1.2; // double | 
$fx_unit_cost_ex_tax = 1.2; // double | 
$tax_rate = "tax_rate_example"; // string | 
$tax_amount = 1.2; // double | 
$unit_cost_inc_tax = 1.2; // double | 
$line_total_ex_tax = 1.2; // double | 
$line_total_inc_tax = 1.2; // double | 
$fx_line_total_ex_tax = 1.2; // double | 
$landed_cost_line_total = 1.2; // double | 
$landed_cost = 1.2; // double | 
$body = new \Jiwa\Model\LandedCostShipmentLinePATCHRequest(); // \Jiwa\Model\LandedCostShipmentLinePATCHRequest | 

try {
    $result = $apiInstance->landedCostShipmentLinePATCHRequestShipmentIDLinesLineIDUpdate($accept, $shipment_id, $line_id, $jiwa_stateful, $item_no, $inventory_id, $inventory_part_no, $inventory_description, $creditor_id, $creditor_account_no, $creditor_name, $sh_invoices_rec_id, $sh_invoices_invoice_no, $purchase_order_line_id, $purchase_order_line_order_line_no, $purchase_order_line_order_id, $purchase_order_line_order_no, $purchase_order_line_quantity, $purchase_order_line_quantity_delivered, $quantity_ordered, $quantity_this_shipment, $ordered_cost, $fx_ordered_cost, $unit_cost_ex_tax, $fx_rate, $fx_unit_cost_ex_tax, $tax_rate, $tax_amount, $unit_cost_inc_tax, $line_total_ex_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $landed_cost_line_total, $landed_cost, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentLinePATCHRequestShipmentIDLinesLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **inventory_part_no** | **string**|  | [optional]
 **inventory_description** | **string**|  | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **sh_invoices_rec_id** | **string**|  | [optional]
 **sh_invoices_invoice_no** | **string**|  | [optional]
 **purchase_order_line_id** | **string**|  | [optional]
 **purchase_order_line_order_line_no** | **string**|  | [optional]
 **purchase_order_line_order_id** | **string**|  | [optional]
 **purchase_order_line_order_no** | **string**|  | [optional]
 **purchase_order_line_quantity** | **string**|  | [optional]
 **purchase_order_line_quantity_delivered** | **string**|  | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **quantity_this_shipment** | **double**|  | [optional]
 **ordered_cost** | **double**|  | [optional]
 **fx_ordered_cost** | **double**|  | [optional]
 **unit_cost_ex_tax** | **double**|  | [optional]
 **fx_rate** | **double**|  | [optional]
 **fx_unit_cost_ex_tax** | **double**|  | [optional]
 **tax_rate** | **string**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **unit_cost_inc_tax** | **double**|  | [optional]
 **line_total_ex_tax** | **double**|  | [optional]
 **line_total_inc_tax** | **double**|  | [optional]
 **fx_line_total_ex_tax** | **double**|  | [optional]
 **landed_cost_line_total** | **double**|  | [optional]
 **landed_cost** | **double**|  | [optional]
 **body** | [**\Jiwa\Model\LandedCostShipmentLinePATCHRequest**](../Model/LandedCostShipmentLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\ShipmentLine**](../Model/ShipmentLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentLinesGETManyRequestShipmentIDLinesGet**
> \Jiwa\Model\ShipmentLine[] landedCostShipmentLinesGETManyRequestShipmentIDLinesGet($accept, $shipment_id, $jiwa_stateful)

Retrieves a list of shipment lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostShipmentLinesGETManyRequestShipmentIDLinesGet($accept, $shipment_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentLinesGETManyRequestShipmentIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\ShipmentLine[]**](../Model/ShipmentLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentPATCHRequestShipmentIDUpdate**
> \Jiwa\Model\Shipment landedCostShipmentPATCHRequestShipmentIDUpdate($accept, $shipment_id, $jiwa_stateful, $shipment_no, $last_saved_date_time, $initiated_date, $departure_date, $expected_arrival_date, $scheduled_arrival_date, $receipt_date, $delivery_notes, $status, $way_bill_no, $vessel_name, $container_no, $use_voti, $shipping_agent_creditor_id, $shipping_agent_creditor_account_no, $shipping_agent_creditor_name, $import_cost_clearing_account, $lines, $purchase_orders, $import_costs, $vot_is, $invoices, $custom_field_values, $body)

Updates a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$shipment_no = "shipment_no_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$initiated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$departure_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expected_arrival_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$scheduled_arrival_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$receipt_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_notes = "delivery_notes_example"; // string | 
$status = "status_example"; // string | 
$way_bill_no = "way_bill_no_example"; // string | 
$vessel_name = "vessel_name_example"; // string | 
$container_no = "container_no_example"; // string | 
$use_voti = true; // bool | 
$shipping_agent_creditor_id = "shipping_agent_creditor_id_example"; // string | 
$shipping_agent_creditor_account_no = "shipping_agent_creditor_account_no_example"; // string | 
$shipping_agent_creditor_name = "shipping_agent_creditor_name_example"; // string | 
$import_cost_clearing_account = "import_cost_clearing_account_example"; // string | 
$lines = "lines_example"; // string | 
$purchase_orders = "purchase_orders_example"; // string | 
$import_costs = "import_costs_example"; // string | 
$vot_is = "vot_is_example"; // string | 
$invoices = "invoices_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\LandedCostShipmentPATCHRequest(); // \Jiwa\Model\LandedCostShipmentPATCHRequest | 

try {
    $result = $apiInstance->landedCostShipmentPATCHRequestShipmentIDUpdate($accept, $shipment_id, $jiwa_stateful, $shipment_no, $last_saved_date_time, $initiated_date, $departure_date, $expected_arrival_date, $scheduled_arrival_date, $receipt_date, $delivery_notes, $status, $way_bill_no, $vessel_name, $container_no, $use_voti, $shipping_agent_creditor_id, $shipping_agent_creditor_account_no, $shipping_agent_creditor_name, $import_cost_clearing_account, $lines, $purchase_orders, $import_costs, $vot_is, $invoices, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentPATCHRequestShipmentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **shipment_no** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **initiated_date** | **\DateTime**|  | [optional]
 **departure_date** | **\DateTime**|  | [optional]
 **expected_arrival_date** | **\DateTime**|  | [optional]
 **scheduled_arrival_date** | **\DateTime**|  | [optional]
 **receipt_date** | **\DateTime**|  | [optional]
 **delivery_notes** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **way_bill_no** | **string**|  | [optional]
 **vessel_name** | **string**|  | [optional]
 **container_no** | **string**|  | [optional]
 **use_voti** | **bool**|  | [optional]
 **shipping_agent_creditor_id** | **string**|  | [optional]
 **shipping_agent_creditor_account_no** | **string**|  | [optional]
 **shipping_agent_creditor_name** | **string**|  | [optional]
 **import_cost_clearing_account** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **purchase_orders** | **string**|  | [optional]
 **import_costs** | **string**|  | [optional]
 **vot_is** | **string**|  | [optional]
 **invoices** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\LandedCostShipmentPATCHRequest**](../Model/LandedCostShipmentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Shipment**](../Model/Shipment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentPOSTRequestPost**
> \Jiwa\Model\Shipment landedCostShipmentPOSTRequestPost($accept, $jiwa_stateful, $shipment_no, $last_saved_date_time, $initiated_date, $departure_date, $expected_arrival_date, $scheduled_arrival_date, $receipt_date, $delivery_notes, $status, $way_bill_no, $vessel_name, $container_no, $use_voti, $shipping_agent_creditor_id, $shipping_agent_creditor_account_no, $shipping_agent_creditor_name, $import_cost_clearing_account, $lines, $purchase_orders, $import_costs, $vot_is, $invoices, $custom_field_values, $body)

Creates a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$shipment_no = "shipment_no_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$initiated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$departure_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expected_arrival_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$scheduled_arrival_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$receipt_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivery_notes = "delivery_notes_example"; // string | 
$status = "status_example"; // string | 
$way_bill_no = "way_bill_no_example"; // string | 
$vessel_name = "vessel_name_example"; // string | 
$container_no = "container_no_example"; // string | 
$use_voti = true; // bool | 
$shipping_agent_creditor_id = "shipping_agent_creditor_id_example"; // string | 
$shipping_agent_creditor_account_no = "shipping_agent_creditor_account_no_example"; // string | 
$shipping_agent_creditor_name = "shipping_agent_creditor_name_example"; // string | 
$import_cost_clearing_account = "import_cost_clearing_account_example"; // string | 
$lines = "lines_example"; // string | 
$purchase_orders = "purchase_orders_example"; // string | 
$import_costs = "import_costs_example"; // string | 
$vot_is = "vot_is_example"; // string | 
$invoices = "invoices_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\LandedCostShipmentPOSTRequest(); // \Jiwa\Model\LandedCostShipmentPOSTRequest | 

try {
    $result = $apiInstance->landedCostShipmentPOSTRequestPost($accept, $jiwa_stateful, $shipment_no, $last_saved_date_time, $initiated_date, $departure_date, $expected_arrival_date, $scheduled_arrival_date, $receipt_date, $delivery_notes, $status, $way_bill_no, $vessel_name, $container_no, $use_voti, $shipping_agent_creditor_id, $shipping_agent_creditor_account_no, $shipping_agent_creditor_name, $import_cost_clearing_account, $lines, $purchase_orders, $import_costs, $vot_is, $invoices, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **shipment_no** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **initiated_date** | **\DateTime**|  | [optional]
 **departure_date** | **\DateTime**|  | [optional]
 **expected_arrival_date** | **\DateTime**|  | [optional]
 **scheduled_arrival_date** | **\DateTime**|  | [optional]
 **receipt_date** | **\DateTime**|  | [optional]
 **delivery_notes** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **way_bill_no** | **string**|  | [optional]
 **vessel_name** | **string**|  | [optional]
 **container_no** | **string**|  | [optional]
 **use_voti** | **bool**|  | [optional]
 **shipping_agent_creditor_id** | **string**|  | [optional]
 **shipping_agent_creditor_account_no** | **string**|  | [optional]
 **shipping_agent_creditor_name** | **string**|  | [optional]
 **import_cost_clearing_account** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **purchase_orders** | **string**|  | [optional]
 **import_costs** | **string**|  | [optional]
 **vot_is** | **string**|  | [optional]
 **invoices** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\LandedCostShipmentPOSTRequest**](../Model/LandedCostShipmentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Shipment**](../Model/Shipment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentPurchaseOrderDELETERequestShipmentIDPurchaseOrdersOrderIDDelete**
> \Jiwa\Model\Object landedCostShipmentPurchaseOrderDELETERequestShipmentIDPurchaseOrdersOrderIDDelete($accept, $shipment_id, $order_id, $jiwa_stateful, $purchase_order_received_id, $order_no, $ordered_date, $item_no, $user_field1, $user_field2, $user_field3, $user_field4, $user_field5, $user_field6, $user_field7, $user_field8, $user_field9, $user_field10)

Deletes a purchase order from a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$order_id = "order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$purchase_order_received_id = "purchase_order_received_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$ordered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$item_no = 56; // int | 
$user_field1 = "user_field1_example"; // string | 
$user_field2 = "user_field2_example"; // string | 
$user_field3 = "user_field3_example"; // string | 
$user_field4 = "user_field4_example"; // string | 
$user_field5 = "user_field5_example"; // string | 
$user_field6 = "user_field6_example"; // string | 
$user_field7 = "user_field7_example"; // string | 
$user_field8 = "user_field8_example"; // string | 
$user_field9 = "user_field9_example"; // string | 
$user_field10 = "user_field10_example"; // string | 

try {
    $result = $apiInstance->landedCostShipmentPurchaseOrderDELETERequestShipmentIDPurchaseOrdersOrderIDDelete($accept, $shipment_id, $order_id, $jiwa_stateful, $purchase_order_received_id, $order_no, $ordered_date, $item_no, $user_field1, $user_field2, $user_field3, $user_field4, $user_field5, $user_field6, $user_field7, $user_field8, $user_field9, $user_field10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentPurchaseOrderDELETERequestShipmentIDPurchaseOrdersOrderIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **purchase_order_received_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **ordered_date** | **\DateTime**|  | [optional]
 **item_no** | **int**|  | [optional]
 **user_field1** | **string**|  | [optional]
 **user_field2** | **string**|  | [optional]
 **user_field3** | **string**|  | [optional]
 **user_field4** | **string**|  | [optional]
 **user_field5** | **string**|  | [optional]
 **user_field6** | **string**|  | [optional]
 **user_field7** | **string**|  | [optional]
 **user_field8** | **string**|  | [optional]
 **user_field9** | **string**|  | [optional]
 **user_field10** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentPurchaseOrderGETRequestShipmentIDPurchaseOrdersOrderIDGet**
> \Jiwa\Model\ShipmentPurchaseOrderReceived landedCostShipmentPurchaseOrderGETRequestShipmentIDPurchaseOrdersOrderIDGet($accept, $shipment_id, $order_id, $jiwa_stateful)

Retrieves a shipment purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$order_id = "order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostShipmentPurchaseOrderGETRequestShipmentIDPurchaseOrdersOrderIDGet($accept, $shipment_id, $order_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentPurchaseOrderGETRequestShipmentIDPurchaseOrdersOrderIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\ShipmentPurchaseOrderReceived**](../Model/ShipmentPurchaseOrderReceived.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentPurchaseOrderPOSTRequestShipmentIDPurchaseOrdersPost**
> \Jiwa\Model\ShipmentPurchaseOrderReceived landedCostShipmentPurchaseOrderPOSTRequestShipmentIDPurchaseOrdersPost($accept, $shipment_id, $jiwa_stateful, $order_id, $purchase_order_received_id, $order_no, $ordered_date, $item_no, $user_field1, $user_field2, $user_field3, $user_field4, $user_field5, $user_field6, $user_field7, $user_field8, $user_field9, $user_field10, $body)

Appends a purchase order to a shipment.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$order_id = "order_id_example"; // string | 
$purchase_order_received_id = "purchase_order_received_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$ordered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$item_no = 56; // int | 
$user_field1 = "user_field1_example"; // string | 
$user_field2 = "user_field2_example"; // string | 
$user_field3 = "user_field3_example"; // string | 
$user_field4 = "user_field4_example"; // string | 
$user_field5 = "user_field5_example"; // string | 
$user_field6 = "user_field6_example"; // string | 
$user_field7 = "user_field7_example"; // string | 
$user_field8 = "user_field8_example"; // string | 
$user_field9 = "user_field9_example"; // string | 
$user_field10 = "user_field10_example"; // string | 
$body = new \Jiwa\Model\LandedCostShipmentPurchaseOrderPOSTRequest(); // \Jiwa\Model\LandedCostShipmentPurchaseOrderPOSTRequest | 

try {
    $result = $apiInstance->landedCostShipmentPurchaseOrderPOSTRequestShipmentIDPurchaseOrdersPost($accept, $shipment_id, $jiwa_stateful, $order_id, $purchase_order_received_id, $order_no, $ordered_date, $item_no, $user_field1, $user_field2, $user_field3, $user_field4, $user_field5, $user_field6, $user_field7, $user_field8, $user_field9, $user_field10, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentPurchaseOrderPOSTRequestShipmentIDPurchaseOrdersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **order_id** | **string**|  | [optional]
 **purchase_order_received_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **ordered_date** | **\DateTime**|  | [optional]
 **item_no** | **int**|  | [optional]
 **user_field1** | **string**|  | [optional]
 **user_field2** | **string**|  | [optional]
 **user_field3** | **string**|  | [optional]
 **user_field4** | **string**|  | [optional]
 **user_field5** | **string**|  | [optional]
 **user_field6** | **string**|  | [optional]
 **user_field7** | **string**|  | [optional]
 **user_field8** | **string**|  | [optional]
 **user_field9** | **string**|  | [optional]
 **user_field10** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\LandedCostShipmentPurchaseOrderPOSTRequest**](../Model/LandedCostShipmentPurchaseOrderPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\ShipmentPurchaseOrderReceived**](../Model/ShipmentPurchaseOrderReceived.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentPurchaseOrdersGETManyRequestShipmentIDPurchaseOrdersGet**
> \Jiwa\Model\ShipmentPurchaseOrderReceived[] landedCostShipmentPurchaseOrdersGETManyRequestShipmentIDPurchaseOrdersGet($accept, $shipment_id, $jiwa_stateful)

Retrieves a list of shipment purchase orders.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostShipmentPurchaseOrdersGETManyRequestShipmentIDPurchaseOrdersGet($accept, $shipment_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentPurchaseOrdersGETManyRequestShipmentIDPurchaseOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\ShipmentPurchaseOrderReceived[]**](../Model/ShipmentPurchaseOrderReceived.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostShipmentSAVERequestSaveGet**
> \Jiwa\Model\Shipment landedCostShipmentSAVERequestSaveGet($accept, $jiwa_stateful, $shipment_id)

Saves a stateful stateful shipment.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful shipment item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->landedCostShipmentSAVERequestSaveGet($accept, $jiwa_stateful, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->landedCostShipmentSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **shipment_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Shipment**](../Model/Shipment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

