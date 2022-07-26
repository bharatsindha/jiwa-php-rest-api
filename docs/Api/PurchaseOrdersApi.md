# Jiwa\PurchaseOrdersApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseOrderABANDONRequestAbandonDelete**](PurchaseOrdersApi.md#purchaseOrderABANDONRequestAbandonDelete) | **DELETE** /PurchaseOrders/Abandon | Abandons a stateful purchase order.
[**purchaseOrderACTIVATERequestActivatePurchaseOrderIDPost**](PurchaseOrdersApi.md#purchaseOrderACTIVATERequestActivatePurchaseOrderIDPost) | **POST** /PurchaseOrders/Activate/{PurchaseOrderID} | Sets the status of a purchase order to &#39;Sent&#39;.
[**purchaseOrderDELETERequestPurchaseOrderIDDelete**](PurchaseOrdersApi.md#purchaseOrderDELETERequestPurchaseOrderIDDelete) | **DELETE** /PurchaseOrders/{PurchaseOrderID} | Deletes a purchase order.
[**purchaseOrderGETRequestPurchaseOrderIDGet**](PurchaseOrdersApi.md#purchaseOrderGETRequestPurchaseOrderIDGet) | **GET** /PurchaseOrders/{PurchaseOrderID} | Retrieves a purchase order.
[**purchaseOrderLineDELETERequestPurchaseOrderIDLinesPurchaseOrderLineIDDelete**](PurchaseOrdersApi.md#purchaseOrderLineDELETERequestPurchaseOrderIDLinesPurchaseOrderLineIDDelete) | **DELETE** /PurchaseOrders/{PurchaseOrderID}/Lines/{PurchaseOrderLineID} | Deletes a line from a purchase order.
[**purchaseOrderLineGETRequestPurchaseOrderIDLinesPurchaseOrderLineIDGet**](PurchaseOrdersApi.md#purchaseOrderLineGETRequestPurchaseOrderIDLinesPurchaseOrderLineIDGet) | **GET** /PurchaseOrders/{PurchaseOrderID}/Lines/{PurchaseOrderLineID} | Retrieves a purchase order line.
[**purchaseOrderLinePATCHRequestPurchaseOrderIDLinesPurchaseOrderLineIDUpdate**](PurchaseOrdersApi.md#purchaseOrderLinePATCHRequestPurchaseOrderIDLinesPurchaseOrderLineIDUpdate) | **PATCH** /PurchaseOrders/{PurchaseOrderID}/Lines/{PurchaseOrderLineID} | Updates a line for a purchase order.
[**purchaseOrderLinePOSTRequestPurchaseOrderIDLinesPost**](PurchaseOrdersApi.md#purchaseOrderLinePOSTRequestPurchaseOrderIDLinesPost) | **POST** /PurchaseOrders/{PurchaseOrderID}/Lines | Appends a line to a purchase order.
[**purchaseOrderLinesGETManyRequestPurchaseOrderIDLinesGet**](PurchaseOrdersApi.md#purchaseOrderLinesGETManyRequestPurchaseOrderIDLinesGet) | **GET** /PurchaseOrders/{PurchaseOrderID}/Lines | Retrieves a list of purchase order lines.
[**purchaseOrderPATCHRequestPurchaseOrderIDUpdate**](PurchaseOrdersApi.md#purchaseOrderPATCHRequestPurchaseOrderIDUpdate) | **PATCH** /PurchaseOrders/{PurchaseOrderID} | Updates a purchase order.
[**purchaseOrderPOSTRequestPost**](PurchaseOrdersApi.md#purchaseOrderPOSTRequestPost) | **POST** /PurchaseOrders/ | Creates a purchase order.
[**purchaseOrderReceiveStockCREATEFromPOLinesRequestFromPurchaseOrderLinesPost**](PurchaseOrdersApi.md#purchaseOrderReceiveStockCREATEFromPOLinesRequestFromPurchaseOrderLinesPost) | **POST** /PurchaseOrders/FromPurchaseOrderLines | Creates a landed cost book in if the purchase order is on a shipment, otherwise creates a goods received note from the supplied list of ReceivedPOLineQuantity.
[**purchaseOrderSAVERequestSaveGet**](PurchaseOrdersApi.md#purchaseOrderSAVERequestSaveGet) | **GET** /PurchaseOrders/Save | Saves a stateful stateful purchase order.


# **purchaseOrderABANDONRequestAbandonDelete**
> \Jiwa\Model\Object purchaseOrderABANDONRequestAbandonDelete($accept, $jiwa_stateful, $purchase_order_id)

Abandons a stateful purchase order.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful purchase order item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$purchase_order_id = "purchase_order_id_example"; // string | 

try {
    $result = $apiInstance->purchaseOrderABANDONRequestAbandonDelete($accept, $jiwa_stateful, $purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **purchase_order_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderACTIVATERequestActivatePurchaseOrderIDPost**
> \Jiwa\Model\PurchaseOrder purchaseOrderACTIVATERequestActivatePurchaseOrderIDPost($accept, $purchase_order_id, $jiwa_stateful, $body)

Sets the status of a purchase order to 'Sent'.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\Model\PurchaseOrderACTIVATERequest(); // \Jiwa\Model\PurchaseOrderACTIVATERequest | 

try {
    $result = $apiInstance->purchaseOrderACTIVATERequestActivatePurchaseOrderIDPost($accept, $purchase_order_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderACTIVATERequestActivatePurchaseOrderIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\Model\PurchaseOrderACTIVATERequest**](../Model/PurchaseOrderACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderDELETERequestPurchaseOrderIDDelete**
> \Jiwa\Model\Object purchaseOrderDELETERequestPurchaseOrderIDDelete($accept, $purchase_order_id, $jiwa_stateful)

Deletes a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseOrderDELETERequestPurchaseOrderIDDelete($accept, $purchase_order_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderDELETERequestPurchaseOrderIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderGETRequestPurchaseOrderIDGet**
> \Jiwa\Model\PurchaseOrder purchaseOrderGETRequestPurchaseOrderIDGet($accept, $purchase_order_id, $jiwa_stateful)

Retrieves a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseOrderGETRequestPurchaseOrderIDGet($accept, $purchase_order_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderGETRequestPurchaseOrderIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderLineDELETERequestPurchaseOrderIDLinesPurchaseOrderLineIDDelete**
> \Jiwa\Model\Object purchaseOrderLineDELETERequestPurchaseOrderIDLinesPurchaseOrderLineIDDelete($accept, $purchase_order_id, $purchase_order_line_id, $jiwa_stateful, $item_no, $inventory_id, $is_physical, $part_no, $description, $quantity_decimal_places, $make_supplier_the_new_default, $purchase_order_line_type, $quantity, $inc_price, $tax_amount, $line_total, $line_total_ex_tax, $fx_total, $currency_rate_used, $fx_decimal_places, $home_currency_decimal_places, $delivery_date, $delivered, $history_text_comment, $job_costing_stage_rec_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_stage_classification_rec_id, $job_costing_stage_classification_description, $job_costing_cost_centre_rec_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_rec_id, $job_costing_job_no, $job_costing_job_description, $in_on_back_order_orders_on_back_id, $in_on_back_order_quantity, $in_on_back_order_est_bo_value, $in_on_back_order_last_saved_date_time, $invoice_line_id, $user_defined_float1, $user_defined_float2, $user_defined_float3, $user_defined_date1, $user_defined_date2, $user_defined_date3, $user_defined_string1, $user_defined_string2, $user_defined_string3, $purchasing_classification_rec_id, $purchasing_classification_description, $purchasing_classification_ledger_account_rec_id, $purchasing_classification_ledger_account_account_no, $purchasing_classification_ledger_account_description, $service_manager_task_rec_id, $service_manager_task_no, $service_manager_task_description, $service_manager_job_rec_id, $service_manager_job_no, $service_manager_job_description, $in_creditor_rec_id, $supplier_part_no, $in_supplier_warehouse_rec_id, $order_units, $delivery_days, $fx_cost, $cost, $cost_original, $units, $tax_rate_rec_id, $tax_rate_description, $tax_rate, $tax_rate_bas_code, $inventory_expected_liability_ledger_account_rec_id, $inventory_expected_liability_ledger_account_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_rec_id, $inventory_expected_asset_ledger_account_account_no, $inventory_expected_asset_ledger_account_description, $classification_id, $classification_description, $custom_field_values)

Deletes a line from a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$purchase_order_line_id = "purchase_order_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$is_physical = true; // bool | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$quantity_decimal_places = 56; // int | 
$make_supplier_the_new_default = true; // bool | 
$purchase_order_line_type = "purchase_order_line_type_example"; // string | 
$quantity = 1.2; // double | 
$inc_price = 1.2; // double | 
$tax_amount = 1.2; // double | 
$line_total = 1.2; // double | 
$line_total_ex_tax = 1.2; // double | 
$fx_total = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_currency_decimal_places = 56; // int | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered = 1.2; // double | 
$history_text_comment = "history_text_comment_example"; // string | 
$job_costing_stage_rec_id = "job_costing_stage_rec_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_stage_classification_rec_id = "job_costing_stage_classification_rec_id_example"; // string | 
$job_costing_stage_classification_description = "job_costing_stage_classification_description_example"; // string | 
$job_costing_cost_centre_rec_id = "job_costing_cost_centre_rec_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_rec_id = "job_costing_job_rec_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$job_costing_job_description = "job_costing_job_description_example"; // string | 
$in_on_back_order_orders_on_back_id = "in_on_back_order_orders_on_back_id_example"; // string | 
$in_on_back_order_quantity = 1.2; // double | 
$in_on_back_order_est_bo_value = 1.2; // double | 
$in_on_back_order_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$user_defined_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_string1 = "user_defined_string1_example"; // string | 
$user_defined_string2 = "user_defined_string2_example"; // string | 
$user_defined_string3 = "user_defined_string3_example"; // string | 
$purchasing_classification_rec_id = "purchasing_classification_rec_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$purchasing_classification_ledger_account_rec_id = "purchasing_classification_ledger_account_rec_id_example"; // string | 
$purchasing_classification_ledger_account_account_no = "purchasing_classification_ledger_account_account_no_example"; // string | 
$purchasing_classification_ledger_account_description = "purchasing_classification_ledger_account_description_example"; // string | 
$service_manager_task_rec_id = "service_manager_task_rec_id_example"; // string | 
$service_manager_task_no = 56; // int | 
$service_manager_task_description = "service_manager_task_description_example"; // string | 
$service_manager_job_rec_id = "service_manager_job_rec_id_example"; // string | 
$service_manager_job_no = "service_manager_job_no_example"; // string | 
$service_manager_job_description = "service_manager_job_description_example"; // string | 
$in_creditor_rec_id = "in_creditor_rec_id_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$order_units = 1.2; // double | 
$delivery_days = 56; // int | 
$fx_cost = 1.2; // double | 
$cost = 1.2; // double | 
$cost_original = 1.2; // double | 
$units = "units_example"; // string | 
$tax_rate_rec_id = "tax_rate_rec_id_example"; // string | 
$tax_rate_description = "tax_rate_description_example"; // string | 
$tax_rate = 1.2; // double | 
$tax_rate_bas_code = 56; // int | 
$inventory_expected_liability_ledger_account_rec_id = "inventory_expected_liability_ledger_account_rec_id_example"; // string | 
$inventory_expected_liability_ledger_account_account_no = "inventory_expected_liability_ledger_account_account_no_example"; // string | 
$inventory_expected_liability_ledger_account_description = "inventory_expected_liability_ledger_account_description_example"; // string | 
$inventory_expected_asset_ledger_account_rec_id = "inventory_expected_asset_ledger_account_rec_id_example"; // string | 
$inventory_expected_asset_ledger_account_account_no = "inventory_expected_asset_ledger_account_account_no_example"; // string | 
$inventory_expected_asset_ledger_account_description = "inventory_expected_asset_ledger_account_description_example"; // string | 
$classification_id = "classification_id_example"; // string | 
$classification_description = "classification_description_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 

try {
    $result = $apiInstance->purchaseOrderLineDELETERequestPurchaseOrderIDLinesPurchaseOrderLineIDDelete($accept, $purchase_order_id, $purchase_order_line_id, $jiwa_stateful, $item_no, $inventory_id, $is_physical, $part_no, $description, $quantity_decimal_places, $make_supplier_the_new_default, $purchase_order_line_type, $quantity, $inc_price, $tax_amount, $line_total, $line_total_ex_tax, $fx_total, $currency_rate_used, $fx_decimal_places, $home_currency_decimal_places, $delivery_date, $delivered, $history_text_comment, $job_costing_stage_rec_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_stage_classification_rec_id, $job_costing_stage_classification_description, $job_costing_cost_centre_rec_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_rec_id, $job_costing_job_no, $job_costing_job_description, $in_on_back_order_orders_on_back_id, $in_on_back_order_quantity, $in_on_back_order_est_bo_value, $in_on_back_order_last_saved_date_time, $invoice_line_id, $user_defined_float1, $user_defined_float2, $user_defined_float3, $user_defined_date1, $user_defined_date2, $user_defined_date3, $user_defined_string1, $user_defined_string2, $user_defined_string3, $purchasing_classification_rec_id, $purchasing_classification_description, $purchasing_classification_ledger_account_rec_id, $purchasing_classification_ledger_account_account_no, $purchasing_classification_ledger_account_description, $service_manager_task_rec_id, $service_manager_task_no, $service_manager_task_description, $service_manager_job_rec_id, $service_manager_job_no, $service_manager_job_description, $in_creditor_rec_id, $supplier_part_no, $in_supplier_warehouse_rec_id, $order_units, $delivery_days, $fx_cost, $cost, $cost_original, $units, $tax_rate_rec_id, $tax_rate_description, $tax_rate, $tax_rate_bas_code, $inventory_expected_liability_ledger_account_rec_id, $inventory_expected_liability_ledger_account_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_rec_id, $inventory_expected_asset_ledger_account_account_no, $inventory_expected_asset_ledger_account_description, $classification_id, $classification_description, $custom_field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderLineDELETERequestPurchaseOrderIDLinesPurchaseOrderLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **purchase_order_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **is_physical** | **bool**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **make_supplier_the_new_default** | **bool**|  | [optional]
 **purchase_order_line_type** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **inc_price** | **double**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **line_total** | **double**|  | [optional]
 **line_total_ex_tax** | **double**|  | [optional]
 **fx_total** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_currency_decimal_places** | **int**|  | [optional]
 **delivery_date** | **\DateTime**|  | [optional]
 **delivered** | **double**|  | [optional]
 **history_text_comment** | **string**|  | [optional]
 **job_costing_stage_rec_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_stage_classification_rec_id** | **string**|  | [optional]
 **job_costing_stage_classification_description** | **string**|  | [optional]
 **job_costing_cost_centre_rec_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_rec_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **job_costing_job_description** | **string**|  | [optional]
 **in_on_back_order_orders_on_back_id** | **string**|  | [optional]
 **in_on_back_order_quantity** | **double**|  | [optional]
 **in_on_back_order_est_bo_value** | **double**|  | [optional]
 **in_on_back_order_last_saved_date_time** | **\DateTime**|  | [optional]
 **invoice_line_id** | **string**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **user_defined_date1** | **\DateTime**|  | [optional]
 **user_defined_date2** | **\DateTime**|  | [optional]
 **user_defined_date3** | **\DateTime**|  | [optional]
 **user_defined_string1** | **string**|  | [optional]
 **user_defined_string2** | **string**|  | [optional]
 **user_defined_string3** | **string**|  | [optional]
 **purchasing_classification_rec_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **purchasing_classification_ledger_account_rec_id** | **string**|  | [optional]
 **purchasing_classification_ledger_account_account_no** | **string**|  | [optional]
 **purchasing_classification_ledger_account_description** | **string**|  | [optional]
 **service_manager_task_rec_id** | **string**|  | [optional]
 **service_manager_task_no** | **int**|  | [optional]
 **service_manager_task_description** | **string**|  | [optional]
 **service_manager_job_rec_id** | **string**|  | [optional]
 **service_manager_job_no** | **string**|  | [optional]
 **service_manager_job_description** | **string**|  | [optional]
 **in_creditor_rec_id** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **order_units** | **double**|  | [optional]
 **delivery_days** | **int**|  | [optional]
 **fx_cost** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **cost_original** | **double**|  | [optional]
 **units** | **string**|  | [optional]
 **tax_rate_rec_id** | **string**|  | [optional]
 **tax_rate_description** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **tax_rate_bas_code** | **int**|  | [optional]
 **inventory_expected_liability_ledger_account_rec_id** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_account_no** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_rec_id** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_account_no** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_description** | **string**|  | [optional]
 **classification_id** | **string**|  | [optional]
 **classification_description** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderLineGETRequestPurchaseOrderIDLinesPurchaseOrderLineIDGet**
> \Jiwa\Model\PurchaseOrderLine purchaseOrderLineGETRequestPurchaseOrderIDLinesPurchaseOrderLineIDGet($accept, $purchase_order_id, $purchase_order_line_id, $jiwa_stateful)

Retrieves a purchase order line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$purchase_order_line_id = "purchase_order_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseOrderLineGETRequestPurchaseOrderIDLinesPurchaseOrderLineIDGet($accept, $purchase_order_id, $purchase_order_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderLineGETRequestPurchaseOrderIDLinesPurchaseOrderLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **purchase_order_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrderLine**](../Model/PurchaseOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderLinePATCHRequestPurchaseOrderIDLinesPurchaseOrderLineIDUpdate**
> \Jiwa\Model\PurchaseOrderLine purchaseOrderLinePATCHRequestPurchaseOrderIDLinesPurchaseOrderLineIDUpdate($accept, $purchase_order_id, $purchase_order_line_id, $jiwa_stateful, $item_no, $inventory_id, $is_physical, $part_no, $description, $quantity_decimal_places, $make_supplier_the_new_default, $purchase_order_line_type, $quantity, $inc_price, $tax_amount, $line_total, $line_total_ex_tax, $fx_total, $currency_rate_used, $fx_decimal_places, $home_currency_decimal_places, $delivery_date, $delivered, $history_text_comment, $job_costing_stage_rec_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_stage_classification_rec_id, $job_costing_stage_classification_description, $job_costing_cost_centre_rec_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_rec_id, $job_costing_job_no, $job_costing_job_description, $in_on_back_order_orders_on_back_id, $in_on_back_order_quantity, $in_on_back_order_est_bo_value, $in_on_back_order_last_saved_date_time, $invoice_line_id, $user_defined_float1, $user_defined_float2, $user_defined_float3, $user_defined_date1, $user_defined_date2, $user_defined_date3, $user_defined_string1, $user_defined_string2, $user_defined_string3, $purchasing_classification_rec_id, $purchasing_classification_description, $purchasing_classification_ledger_account_rec_id, $purchasing_classification_ledger_account_account_no, $purchasing_classification_ledger_account_description, $service_manager_task_rec_id, $service_manager_task_no, $service_manager_task_description, $service_manager_job_rec_id, $service_manager_job_no, $service_manager_job_description, $in_creditor_rec_id, $supplier_part_no, $in_supplier_warehouse_rec_id, $order_units, $delivery_days, $fx_cost, $cost, $cost_original, $units, $tax_rate_rec_id, $tax_rate_description, $tax_rate, $tax_rate_bas_code, $inventory_expected_liability_ledger_account_rec_id, $inventory_expected_liability_ledger_account_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_rec_id, $inventory_expected_asset_ledger_account_account_no, $inventory_expected_asset_ledger_account_description, $classification_id, $classification_description, $custom_field_values, $body)

Updates a line for a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$purchase_order_line_id = "purchase_order_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$is_physical = true; // bool | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$quantity_decimal_places = 56; // int | 
$make_supplier_the_new_default = true; // bool | 
$purchase_order_line_type = "purchase_order_line_type_example"; // string | 
$quantity = 1.2; // double | 
$inc_price = 1.2; // double | 
$tax_amount = 1.2; // double | 
$line_total = 1.2; // double | 
$line_total_ex_tax = 1.2; // double | 
$fx_total = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_currency_decimal_places = 56; // int | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered = 1.2; // double | 
$history_text_comment = "history_text_comment_example"; // string | 
$job_costing_stage_rec_id = "job_costing_stage_rec_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_stage_classification_rec_id = "job_costing_stage_classification_rec_id_example"; // string | 
$job_costing_stage_classification_description = "job_costing_stage_classification_description_example"; // string | 
$job_costing_cost_centre_rec_id = "job_costing_cost_centre_rec_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_rec_id = "job_costing_job_rec_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$job_costing_job_description = "job_costing_job_description_example"; // string | 
$in_on_back_order_orders_on_back_id = "in_on_back_order_orders_on_back_id_example"; // string | 
$in_on_back_order_quantity = 1.2; // double | 
$in_on_back_order_est_bo_value = 1.2; // double | 
$in_on_back_order_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$user_defined_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_string1 = "user_defined_string1_example"; // string | 
$user_defined_string2 = "user_defined_string2_example"; // string | 
$user_defined_string3 = "user_defined_string3_example"; // string | 
$purchasing_classification_rec_id = "purchasing_classification_rec_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$purchasing_classification_ledger_account_rec_id = "purchasing_classification_ledger_account_rec_id_example"; // string | 
$purchasing_classification_ledger_account_account_no = "purchasing_classification_ledger_account_account_no_example"; // string | 
$purchasing_classification_ledger_account_description = "purchasing_classification_ledger_account_description_example"; // string | 
$service_manager_task_rec_id = "service_manager_task_rec_id_example"; // string | 
$service_manager_task_no = 56; // int | 
$service_manager_task_description = "service_manager_task_description_example"; // string | 
$service_manager_job_rec_id = "service_manager_job_rec_id_example"; // string | 
$service_manager_job_no = "service_manager_job_no_example"; // string | 
$service_manager_job_description = "service_manager_job_description_example"; // string | 
$in_creditor_rec_id = "in_creditor_rec_id_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$order_units = 1.2; // double | 
$delivery_days = 56; // int | 
$fx_cost = 1.2; // double | 
$cost = 1.2; // double | 
$cost_original = 1.2; // double | 
$units = "units_example"; // string | 
$tax_rate_rec_id = "tax_rate_rec_id_example"; // string | 
$tax_rate_description = "tax_rate_description_example"; // string | 
$tax_rate = 1.2; // double | 
$tax_rate_bas_code = 56; // int | 
$inventory_expected_liability_ledger_account_rec_id = "inventory_expected_liability_ledger_account_rec_id_example"; // string | 
$inventory_expected_liability_ledger_account_account_no = "inventory_expected_liability_ledger_account_account_no_example"; // string | 
$inventory_expected_liability_ledger_account_description = "inventory_expected_liability_ledger_account_description_example"; // string | 
$inventory_expected_asset_ledger_account_rec_id = "inventory_expected_asset_ledger_account_rec_id_example"; // string | 
$inventory_expected_asset_ledger_account_account_no = "inventory_expected_asset_ledger_account_account_no_example"; // string | 
$inventory_expected_asset_ledger_account_description = "inventory_expected_asset_ledger_account_description_example"; // string | 
$classification_id = "classification_id_example"; // string | 
$classification_description = "classification_description_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\PurchaseOrderLinePATCHRequest(); // \Jiwa\Model\PurchaseOrderLinePATCHRequest | 

try {
    $result = $apiInstance->purchaseOrderLinePATCHRequestPurchaseOrderIDLinesPurchaseOrderLineIDUpdate($accept, $purchase_order_id, $purchase_order_line_id, $jiwa_stateful, $item_no, $inventory_id, $is_physical, $part_no, $description, $quantity_decimal_places, $make_supplier_the_new_default, $purchase_order_line_type, $quantity, $inc_price, $tax_amount, $line_total, $line_total_ex_tax, $fx_total, $currency_rate_used, $fx_decimal_places, $home_currency_decimal_places, $delivery_date, $delivered, $history_text_comment, $job_costing_stage_rec_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_stage_classification_rec_id, $job_costing_stage_classification_description, $job_costing_cost_centre_rec_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_rec_id, $job_costing_job_no, $job_costing_job_description, $in_on_back_order_orders_on_back_id, $in_on_back_order_quantity, $in_on_back_order_est_bo_value, $in_on_back_order_last_saved_date_time, $invoice_line_id, $user_defined_float1, $user_defined_float2, $user_defined_float3, $user_defined_date1, $user_defined_date2, $user_defined_date3, $user_defined_string1, $user_defined_string2, $user_defined_string3, $purchasing_classification_rec_id, $purchasing_classification_description, $purchasing_classification_ledger_account_rec_id, $purchasing_classification_ledger_account_account_no, $purchasing_classification_ledger_account_description, $service_manager_task_rec_id, $service_manager_task_no, $service_manager_task_description, $service_manager_job_rec_id, $service_manager_job_no, $service_manager_job_description, $in_creditor_rec_id, $supplier_part_no, $in_supplier_warehouse_rec_id, $order_units, $delivery_days, $fx_cost, $cost, $cost_original, $units, $tax_rate_rec_id, $tax_rate_description, $tax_rate, $tax_rate_bas_code, $inventory_expected_liability_ledger_account_rec_id, $inventory_expected_liability_ledger_account_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_rec_id, $inventory_expected_asset_ledger_account_account_no, $inventory_expected_asset_ledger_account_description, $classification_id, $classification_description, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderLinePATCHRequestPurchaseOrderIDLinesPurchaseOrderLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **purchase_order_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **is_physical** | **bool**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **make_supplier_the_new_default** | **bool**|  | [optional]
 **purchase_order_line_type** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **inc_price** | **double**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **line_total** | **double**|  | [optional]
 **line_total_ex_tax** | **double**|  | [optional]
 **fx_total** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_currency_decimal_places** | **int**|  | [optional]
 **delivery_date** | **\DateTime**|  | [optional]
 **delivered** | **double**|  | [optional]
 **history_text_comment** | **string**|  | [optional]
 **job_costing_stage_rec_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_stage_classification_rec_id** | **string**|  | [optional]
 **job_costing_stage_classification_description** | **string**|  | [optional]
 **job_costing_cost_centre_rec_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_rec_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **job_costing_job_description** | **string**|  | [optional]
 **in_on_back_order_orders_on_back_id** | **string**|  | [optional]
 **in_on_back_order_quantity** | **double**|  | [optional]
 **in_on_back_order_est_bo_value** | **double**|  | [optional]
 **in_on_back_order_last_saved_date_time** | **\DateTime**|  | [optional]
 **invoice_line_id** | **string**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **user_defined_date1** | **\DateTime**|  | [optional]
 **user_defined_date2** | **\DateTime**|  | [optional]
 **user_defined_date3** | **\DateTime**|  | [optional]
 **user_defined_string1** | **string**|  | [optional]
 **user_defined_string2** | **string**|  | [optional]
 **user_defined_string3** | **string**|  | [optional]
 **purchasing_classification_rec_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **purchasing_classification_ledger_account_rec_id** | **string**|  | [optional]
 **purchasing_classification_ledger_account_account_no** | **string**|  | [optional]
 **purchasing_classification_ledger_account_description** | **string**|  | [optional]
 **service_manager_task_rec_id** | **string**|  | [optional]
 **service_manager_task_no** | **int**|  | [optional]
 **service_manager_task_description** | **string**|  | [optional]
 **service_manager_job_rec_id** | **string**|  | [optional]
 **service_manager_job_no** | **string**|  | [optional]
 **service_manager_job_description** | **string**|  | [optional]
 **in_creditor_rec_id** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **order_units** | **double**|  | [optional]
 **delivery_days** | **int**|  | [optional]
 **fx_cost** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **cost_original** | **double**|  | [optional]
 **units** | **string**|  | [optional]
 **tax_rate_rec_id** | **string**|  | [optional]
 **tax_rate_description** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **tax_rate_bas_code** | **int**|  | [optional]
 **inventory_expected_liability_ledger_account_rec_id** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_account_no** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_rec_id** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_account_no** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_description** | **string**|  | [optional]
 **classification_id** | **string**|  | [optional]
 **classification_description** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseOrderLinePATCHRequest**](../Model/PurchaseOrderLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrderLine**](../Model/PurchaseOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderLinePOSTRequestPurchaseOrderIDLinesPost**
> \Jiwa\Model\PurchaseOrderLine purchaseOrderLinePOSTRequestPurchaseOrderIDLinesPost($accept, $purchase_order_id, $jiwa_stateful, $item_no, $inventory_id, $is_physical, $part_no, $description, $quantity_decimal_places, $make_supplier_the_new_default, $purchase_order_line_type, $quantity, $inc_price, $tax_amount, $line_total, $line_total_ex_tax, $fx_total, $currency_rate_used, $fx_decimal_places, $home_currency_decimal_places, $delivery_date, $delivered, $history_text_comment, $job_costing_stage_rec_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_stage_classification_rec_id, $job_costing_stage_classification_description, $job_costing_cost_centre_rec_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_rec_id, $job_costing_job_no, $job_costing_job_description, $in_on_back_order_orders_on_back_id, $in_on_back_order_quantity, $in_on_back_order_est_bo_value, $in_on_back_order_last_saved_date_time, $invoice_line_id, $user_defined_float1, $user_defined_float2, $user_defined_float3, $user_defined_date1, $user_defined_date2, $user_defined_date3, $user_defined_string1, $user_defined_string2, $user_defined_string3, $purchasing_classification_rec_id, $purchasing_classification_description, $purchasing_classification_ledger_account_rec_id, $purchasing_classification_ledger_account_account_no, $purchasing_classification_ledger_account_description, $service_manager_task_rec_id, $service_manager_task_no, $service_manager_task_description, $service_manager_job_rec_id, $service_manager_job_no, $service_manager_job_description, $in_creditor_rec_id, $supplier_part_no, $in_supplier_warehouse_rec_id, $order_units, $delivery_days, $fx_cost, $cost, $cost_original, $units, $tax_rate_rec_id, $tax_rate_description, $tax_rate, $tax_rate_bas_code, $inventory_expected_liability_ledger_account_rec_id, $inventory_expected_liability_ledger_account_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_rec_id, $inventory_expected_asset_ledger_account_account_no, $inventory_expected_asset_ledger_account_description, $classification_id, $classification_description, $custom_field_values, $body)

Appends a line to a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$is_physical = true; // bool | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$quantity_decimal_places = 56; // int | 
$make_supplier_the_new_default = true; // bool | 
$purchase_order_line_type = "purchase_order_line_type_example"; // string | 
$quantity = 1.2; // double | 
$inc_price = 1.2; // double | 
$tax_amount = 1.2; // double | 
$line_total = 1.2; // double | 
$line_total_ex_tax = 1.2; // double | 
$fx_total = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_currency_decimal_places = 56; // int | 
$delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered = 1.2; // double | 
$history_text_comment = "history_text_comment_example"; // string | 
$job_costing_stage_rec_id = "job_costing_stage_rec_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_stage_classification_rec_id = "job_costing_stage_classification_rec_id_example"; // string | 
$job_costing_stage_classification_description = "job_costing_stage_classification_description_example"; // string | 
$job_costing_cost_centre_rec_id = "job_costing_cost_centre_rec_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_rec_id = "job_costing_job_rec_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$job_costing_job_description = "job_costing_job_description_example"; // string | 
$in_on_back_order_orders_on_back_id = "in_on_back_order_orders_on_back_id_example"; // string | 
$in_on_back_order_quantity = 1.2; // double | 
$in_on_back_order_est_bo_value = 1.2; // double | 
$in_on_back_order_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$user_defined_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$user_defined_string1 = "user_defined_string1_example"; // string | 
$user_defined_string2 = "user_defined_string2_example"; // string | 
$user_defined_string3 = "user_defined_string3_example"; // string | 
$purchasing_classification_rec_id = "purchasing_classification_rec_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$purchasing_classification_ledger_account_rec_id = "purchasing_classification_ledger_account_rec_id_example"; // string | 
$purchasing_classification_ledger_account_account_no = "purchasing_classification_ledger_account_account_no_example"; // string | 
$purchasing_classification_ledger_account_description = "purchasing_classification_ledger_account_description_example"; // string | 
$service_manager_task_rec_id = "service_manager_task_rec_id_example"; // string | 
$service_manager_task_no = 56; // int | 
$service_manager_task_description = "service_manager_task_description_example"; // string | 
$service_manager_job_rec_id = "service_manager_job_rec_id_example"; // string | 
$service_manager_job_no = "service_manager_job_no_example"; // string | 
$service_manager_job_description = "service_manager_job_description_example"; // string | 
$in_creditor_rec_id = "in_creditor_rec_id_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$order_units = 1.2; // double | 
$delivery_days = 56; // int | 
$fx_cost = 1.2; // double | 
$cost = 1.2; // double | 
$cost_original = 1.2; // double | 
$units = "units_example"; // string | 
$tax_rate_rec_id = "tax_rate_rec_id_example"; // string | 
$tax_rate_description = "tax_rate_description_example"; // string | 
$tax_rate = 1.2; // double | 
$tax_rate_bas_code = 56; // int | 
$inventory_expected_liability_ledger_account_rec_id = "inventory_expected_liability_ledger_account_rec_id_example"; // string | 
$inventory_expected_liability_ledger_account_account_no = "inventory_expected_liability_ledger_account_account_no_example"; // string | 
$inventory_expected_liability_ledger_account_description = "inventory_expected_liability_ledger_account_description_example"; // string | 
$inventory_expected_asset_ledger_account_rec_id = "inventory_expected_asset_ledger_account_rec_id_example"; // string | 
$inventory_expected_asset_ledger_account_account_no = "inventory_expected_asset_ledger_account_account_no_example"; // string | 
$inventory_expected_asset_ledger_account_description = "inventory_expected_asset_ledger_account_description_example"; // string | 
$classification_id = "classification_id_example"; // string | 
$classification_description = "classification_description_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\PurchaseOrderLinePOSTRequest(); // \Jiwa\Model\PurchaseOrderLinePOSTRequest | 

try {
    $result = $apiInstance->purchaseOrderLinePOSTRequestPurchaseOrderIDLinesPost($accept, $purchase_order_id, $jiwa_stateful, $item_no, $inventory_id, $is_physical, $part_no, $description, $quantity_decimal_places, $make_supplier_the_new_default, $purchase_order_line_type, $quantity, $inc_price, $tax_amount, $line_total, $line_total_ex_tax, $fx_total, $currency_rate_used, $fx_decimal_places, $home_currency_decimal_places, $delivery_date, $delivered, $history_text_comment, $job_costing_stage_rec_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_stage_classification_rec_id, $job_costing_stage_classification_description, $job_costing_cost_centre_rec_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_rec_id, $job_costing_job_no, $job_costing_job_description, $in_on_back_order_orders_on_back_id, $in_on_back_order_quantity, $in_on_back_order_est_bo_value, $in_on_back_order_last_saved_date_time, $invoice_line_id, $user_defined_float1, $user_defined_float2, $user_defined_float3, $user_defined_date1, $user_defined_date2, $user_defined_date3, $user_defined_string1, $user_defined_string2, $user_defined_string3, $purchasing_classification_rec_id, $purchasing_classification_description, $purchasing_classification_ledger_account_rec_id, $purchasing_classification_ledger_account_account_no, $purchasing_classification_ledger_account_description, $service_manager_task_rec_id, $service_manager_task_no, $service_manager_task_description, $service_manager_job_rec_id, $service_manager_job_no, $service_manager_job_description, $in_creditor_rec_id, $supplier_part_no, $in_supplier_warehouse_rec_id, $order_units, $delivery_days, $fx_cost, $cost, $cost_original, $units, $tax_rate_rec_id, $tax_rate_description, $tax_rate, $tax_rate_bas_code, $inventory_expected_liability_ledger_account_rec_id, $inventory_expected_liability_ledger_account_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_rec_id, $inventory_expected_asset_ledger_account_account_no, $inventory_expected_asset_ledger_account_description, $classification_id, $classification_description, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderLinePOSTRequestPurchaseOrderIDLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **is_physical** | **bool**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **make_supplier_the_new_default** | **bool**|  | [optional]
 **purchase_order_line_type** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **inc_price** | **double**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **line_total** | **double**|  | [optional]
 **line_total_ex_tax** | **double**|  | [optional]
 **fx_total** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_currency_decimal_places** | **int**|  | [optional]
 **delivery_date** | **\DateTime**|  | [optional]
 **delivered** | **double**|  | [optional]
 **history_text_comment** | **string**|  | [optional]
 **job_costing_stage_rec_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_stage_classification_rec_id** | **string**|  | [optional]
 **job_costing_stage_classification_description** | **string**|  | [optional]
 **job_costing_cost_centre_rec_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_rec_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **job_costing_job_description** | **string**|  | [optional]
 **in_on_back_order_orders_on_back_id** | **string**|  | [optional]
 **in_on_back_order_quantity** | **double**|  | [optional]
 **in_on_back_order_est_bo_value** | **double**|  | [optional]
 **in_on_back_order_last_saved_date_time** | **\DateTime**|  | [optional]
 **invoice_line_id** | **string**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **user_defined_date1** | **\DateTime**|  | [optional]
 **user_defined_date2** | **\DateTime**|  | [optional]
 **user_defined_date3** | **\DateTime**|  | [optional]
 **user_defined_string1** | **string**|  | [optional]
 **user_defined_string2** | **string**|  | [optional]
 **user_defined_string3** | **string**|  | [optional]
 **purchasing_classification_rec_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **purchasing_classification_ledger_account_rec_id** | **string**|  | [optional]
 **purchasing_classification_ledger_account_account_no** | **string**|  | [optional]
 **purchasing_classification_ledger_account_description** | **string**|  | [optional]
 **service_manager_task_rec_id** | **string**|  | [optional]
 **service_manager_task_no** | **int**|  | [optional]
 **service_manager_task_description** | **string**|  | [optional]
 **service_manager_job_rec_id** | **string**|  | [optional]
 **service_manager_job_no** | **string**|  | [optional]
 **service_manager_job_description** | **string**|  | [optional]
 **in_creditor_rec_id** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **order_units** | **double**|  | [optional]
 **delivery_days** | **int**|  | [optional]
 **fx_cost** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **cost_original** | **double**|  | [optional]
 **units** | **string**|  | [optional]
 **tax_rate_rec_id** | **string**|  | [optional]
 **tax_rate_description** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **tax_rate_bas_code** | **int**|  | [optional]
 **inventory_expected_liability_ledger_account_rec_id** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_account_no** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_rec_id** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_account_no** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_description** | **string**|  | [optional]
 **classification_id** | **string**|  | [optional]
 **classification_description** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseOrderLinePOSTRequest**](../Model/PurchaseOrderLinePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrderLine**](../Model/PurchaseOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderLinesGETManyRequestPurchaseOrderIDLinesGet**
> \Jiwa\Model\PurchaseOrderLine[] purchaseOrderLinesGETManyRequestPurchaseOrderIDLinesGet($accept, $purchase_order_id, $jiwa_stateful)

Retrieves a list of purchase order lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseOrderLinesGETManyRequestPurchaseOrderIDLinesGet($accept, $purchase_order_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderLinesGETManyRequestPurchaseOrderIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrderLine[]**](../Model/PurchaseOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderPATCHRequestPurchaseOrderIDUpdate**
> \Jiwa\Model\PurchaseOrder purchaseOrderPATCHRequestPurchaseOrderIDUpdate($accept, $purchase_order_id, $jiwa_stateful, $creditor_rec_id, $creditor_account_no, $creditor_name, $creditor_warehouse_rec_id, $creditor_warehouse_description, $logical_warehouse_residing_in_rec_id, $logical_warehouse_residing_in_description, $physical_warehouse_residing_in_rec_id, $physical_warehouse_residing_in_description, $logical_warehouse_ordering_from_rec_id, $logical_warehouse_ordering_from_description, $physical_warehouse_ordering_from_rec_id, $physical_warehouse_ordering_from_description, $in_transit_logical_warehouse_rec_id, $in_transit_logical_warehouse_description, $in_transit_physical_warehouse_rec_id, $in_transit_physical_warehouse_description, $order_no, $order_date, $attention, $contact_by, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $order_status, $order_type, $order_supplier_type, $tax_total, $use_in_transit, $reference, $total_gross, $total_net, $total_fx, $notes, $documents, $custom_field_values, $lines, $shipping_address_address_line1, $shipping_address_address_line2, $shipping_address_address_line3, $shipping_address_address_line4, $shipping_address_address_line5, $shipping_address_country, $shipping_address_post_code, $shipping_address_contact_name, $shipping_address_phone, $shipping_address_fax, $shipping_address_spare1, $shipping_address_spare2, $shipping_address_spare3, $shipping_address_spare4, $shipping_address_spare5, $freight, $duty, $insurance, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $freight_inc, $duty_inc, $insurance_inc, $body)

Updates a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_order_id = "purchase_order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_rec_id = "creditor_rec_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$creditor_warehouse_rec_id = "creditor_warehouse_rec_id_example"; // string | 
$creditor_warehouse_description = "creditor_warehouse_description_example"; // string | 
$logical_warehouse_residing_in_rec_id = "logical_warehouse_residing_in_rec_id_example"; // string | 
$logical_warehouse_residing_in_description = "logical_warehouse_residing_in_description_example"; // string | 
$physical_warehouse_residing_in_rec_id = "physical_warehouse_residing_in_rec_id_example"; // string | 
$physical_warehouse_residing_in_description = "physical_warehouse_residing_in_description_example"; // string | 
$logical_warehouse_ordering_from_rec_id = "logical_warehouse_ordering_from_rec_id_example"; // string | 
$logical_warehouse_ordering_from_description = "logical_warehouse_ordering_from_description_example"; // string | 
$physical_warehouse_ordering_from_rec_id = "physical_warehouse_ordering_from_rec_id_example"; // string | 
$physical_warehouse_ordering_from_description = "physical_warehouse_ordering_from_description_example"; // string | 
$in_transit_logical_warehouse_rec_id = "in_transit_logical_warehouse_rec_id_example"; // string | 
$in_transit_logical_warehouse_description = "in_transit_logical_warehouse_description_example"; // string | 
$in_transit_physical_warehouse_rec_id = "in_transit_physical_warehouse_rec_id_example"; // string | 
$in_transit_physical_warehouse_description = "in_transit_physical_warehouse_description_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$attention = "attention_example"; // string | 
$contact_by = "contact_by_example"; // string | 
$staff_id = "staff_id_example"; // string | 
$staff_user_name = "staff_user_name_example"; // string | 
$staff_title = "staff_title_example"; // string | 
$staff_first_name = "staff_first_name_example"; // string | 
$staff_surname = "staff_surname_example"; // string | 
$order_status = "order_status_example"; // string | 
$order_type = "order_type_example"; // string | 
$order_supplier_type = "order_supplier_type_example"; // string | 
$tax_total = 1.2; // double | 
$use_in_transit = true; // bool | 
$reference = "reference_example"; // string | 
$total_gross = 1.2; // double | 
$total_net = 1.2; // double | 
$total_fx = 1.2; // double | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$lines = "lines_example"; // string | 
$shipping_address_address_line1 = "shipping_address_address_line1_example"; // string | 
$shipping_address_address_line2 = "shipping_address_address_line2_example"; // string | 
$shipping_address_address_line3 = "shipping_address_address_line3_example"; // string | 
$shipping_address_address_line4 = "shipping_address_address_line4_example"; // string | 
$shipping_address_address_line5 = "shipping_address_address_line5_example"; // string | 
$shipping_address_country = "shipping_address_country_example"; // string | 
$shipping_address_post_code = "shipping_address_post_code_example"; // string | 
$shipping_address_contact_name = "shipping_address_contact_name_example"; // string | 
$shipping_address_phone = "shipping_address_phone_example"; // string | 
$shipping_address_fax = "shipping_address_fax_example"; // string | 
$shipping_address_spare1 = "shipping_address_spare1_example"; // string | 
$shipping_address_spare2 = "shipping_address_spare2_example"; // string | 
$shipping_address_spare3 = "shipping_address_spare3_example"; // string | 
$shipping_address_spare4 = "shipping_address_spare4_example"; // string | 
$shipping_address_spare5 = "shipping_address_spare5_example"; // string | 
$freight = 1.2; // double | 
$duty = 1.2; // double | 
$insurance = 1.2; // double | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight_tax_rate = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty_tax_rate = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance_tax_rate = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$freight_inc = 1.2; // double | 
$duty_inc = 1.2; // double | 
$insurance_inc = 1.2; // double | 
$body = new \Jiwa\Model\PurchaseOrderPATCHRequest(); // \Jiwa\Model\PurchaseOrderPATCHRequest | 

try {
    $result = $apiInstance->purchaseOrderPATCHRequestPurchaseOrderIDUpdate($accept, $purchase_order_id, $jiwa_stateful, $creditor_rec_id, $creditor_account_no, $creditor_name, $creditor_warehouse_rec_id, $creditor_warehouse_description, $logical_warehouse_residing_in_rec_id, $logical_warehouse_residing_in_description, $physical_warehouse_residing_in_rec_id, $physical_warehouse_residing_in_description, $logical_warehouse_ordering_from_rec_id, $logical_warehouse_ordering_from_description, $physical_warehouse_ordering_from_rec_id, $physical_warehouse_ordering_from_description, $in_transit_logical_warehouse_rec_id, $in_transit_logical_warehouse_description, $in_transit_physical_warehouse_rec_id, $in_transit_physical_warehouse_description, $order_no, $order_date, $attention, $contact_by, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $order_status, $order_type, $order_supplier_type, $tax_total, $use_in_transit, $reference, $total_gross, $total_net, $total_fx, $notes, $documents, $custom_field_values, $lines, $shipping_address_address_line1, $shipping_address_address_line2, $shipping_address_address_line3, $shipping_address_address_line4, $shipping_address_address_line5, $shipping_address_country, $shipping_address_post_code, $shipping_address_contact_name, $shipping_address_phone, $shipping_address_fax, $shipping_address_spare1, $shipping_address_spare2, $shipping_address_spare3, $shipping_address_spare4, $shipping_address_spare5, $freight, $duty, $insurance, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $freight_inc, $duty_inc, $insurance_inc, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderPATCHRequestPurchaseOrderIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_rec_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **creditor_warehouse_rec_id** | **string**|  | [optional]
 **creditor_warehouse_description** | **string**|  | [optional]
 **logical_warehouse_residing_in_rec_id** | **string**|  | [optional]
 **logical_warehouse_residing_in_description** | **string**|  | [optional]
 **physical_warehouse_residing_in_rec_id** | **string**|  | [optional]
 **physical_warehouse_residing_in_description** | **string**|  | [optional]
 **logical_warehouse_ordering_from_rec_id** | **string**|  | [optional]
 **logical_warehouse_ordering_from_description** | **string**|  | [optional]
 **physical_warehouse_ordering_from_rec_id** | **string**|  | [optional]
 **physical_warehouse_ordering_from_description** | **string**|  | [optional]
 **in_transit_logical_warehouse_rec_id** | **string**|  | [optional]
 **in_transit_logical_warehouse_description** | **string**|  | [optional]
 **in_transit_physical_warehouse_rec_id** | **string**|  | [optional]
 **in_transit_physical_warehouse_description** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_date** | **\DateTime**|  | [optional]
 **attention** | **string**|  | [optional]
 **contact_by** | **string**|  | [optional]
 **staff_id** | **string**|  | [optional]
 **staff_user_name** | **string**|  | [optional]
 **staff_title** | **string**|  | [optional]
 **staff_first_name** | **string**|  | [optional]
 **staff_surname** | **string**|  | [optional]
 **order_status** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **order_supplier_type** | **string**|  | [optional]
 **tax_total** | **double**|  | [optional]
 **use_in_transit** | **bool**|  | [optional]
 **reference** | **string**|  | [optional]
 **total_gross** | **double**|  | [optional]
 **total_net** | **double**|  | [optional]
 **total_fx** | **double**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **shipping_address_address_line1** | **string**|  | [optional]
 **shipping_address_address_line2** | **string**|  | [optional]
 **shipping_address_address_line3** | **string**|  | [optional]
 **shipping_address_address_line4** | **string**|  | [optional]
 **shipping_address_address_line5** | **string**|  | [optional]
 **shipping_address_country** | **string**|  | [optional]
 **shipping_address_post_code** | **string**|  | [optional]
 **shipping_address_contact_name** | **string**|  | [optional]
 **shipping_address_phone** | **string**|  | [optional]
 **shipping_address_fax** | **string**|  | [optional]
 **shipping_address_spare1** | **string**|  | [optional]
 **shipping_address_spare2** | **string**|  | [optional]
 **shipping_address_spare3** | **string**|  | [optional]
 **shipping_address_spare4** | **string**|  | [optional]
 **shipping_address_spare5** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **duty** | **double**|  | [optional]
 **insurance** | **double**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight_tax_rate** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty_tax_rate** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance_tax_rate** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **freight_inc** | **double**|  | [optional]
 **duty_inc** | **double**|  | [optional]
 **insurance_inc** | **double**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseOrderPATCHRequest**](../Model/PurchaseOrderPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderPOSTRequestPost**
> \Jiwa\Model\PurchaseOrder purchaseOrderPOSTRequestPost($accept, $jiwa_stateful, $creditor_rec_id, $creditor_account_no, $creditor_name, $creditor_warehouse_rec_id, $creditor_warehouse_description, $logical_warehouse_residing_in_rec_id, $logical_warehouse_residing_in_description, $physical_warehouse_residing_in_rec_id, $physical_warehouse_residing_in_description, $logical_warehouse_ordering_from_rec_id, $logical_warehouse_ordering_from_description, $physical_warehouse_ordering_from_rec_id, $physical_warehouse_ordering_from_description, $in_transit_logical_warehouse_rec_id, $in_transit_logical_warehouse_description, $in_transit_physical_warehouse_rec_id, $in_transit_physical_warehouse_description, $order_no, $order_date, $attention, $contact_by, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $order_status, $order_type, $order_supplier_type, $tax_total, $use_in_transit, $reference, $total_gross, $total_net, $total_fx, $notes, $documents, $custom_field_values, $lines, $shipping_address_address_line1, $shipping_address_address_line2, $shipping_address_address_line3, $shipping_address_address_line4, $shipping_address_address_line5, $shipping_address_country, $shipping_address_post_code, $shipping_address_contact_name, $shipping_address_phone, $shipping_address_fax, $shipping_address_spare1, $shipping_address_spare2, $shipping_address_spare3, $shipping_address_spare4, $shipping_address_spare5, $freight, $duty, $insurance, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $freight_inc, $duty_inc, $insurance_inc, $body)

Creates a purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_rec_id = "creditor_rec_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$creditor_warehouse_rec_id = "creditor_warehouse_rec_id_example"; // string | 
$creditor_warehouse_description = "creditor_warehouse_description_example"; // string | 
$logical_warehouse_residing_in_rec_id = "logical_warehouse_residing_in_rec_id_example"; // string | 
$logical_warehouse_residing_in_description = "logical_warehouse_residing_in_description_example"; // string | 
$physical_warehouse_residing_in_rec_id = "physical_warehouse_residing_in_rec_id_example"; // string | 
$physical_warehouse_residing_in_description = "physical_warehouse_residing_in_description_example"; // string | 
$logical_warehouse_ordering_from_rec_id = "logical_warehouse_ordering_from_rec_id_example"; // string | 
$logical_warehouse_ordering_from_description = "logical_warehouse_ordering_from_description_example"; // string | 
$physical_warehouse_ordering_from_rec_id = "physical_warehouse_ordering_from_rec_id_example"; // string | 
$physical_warehouse_ordering_from_description = "physical_warehouse_ordering_from_description_example"; // string | 
$in_transit_logical_warehouse_rec_id = "in_transit_logical_warehouse_rec_id_example"; // string | 
$in_transit_logical_warehouse_description = "in_transit_logical_warehouse_description_example"; // string | 
$in_transit_physical_warehouse_rec_id = "in_transit_physical_warehouse_rec_id_example"; // string | 
$in_transit_physical_warehouse_description = "in_transit_physical_warehouse_description_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$attention = "attention_example"; // string | 
$contact_by = "contact_by_example"; // string | 
$staff_id = "staff_id_example"; // string | 
$staff_user_name = "staff_user_name_example"; // string | 
$staff_title = "staff_title_example"; // string | 
$staff_first_name = "staff_first_name_example"; // string | 
$staff_surname = "staff_surname_example"; // string | 
$order_status = "order_status_example"; // string | 
$order_type = "order_type_example"; // string | 
$order_supplier_type = "order_supplier_type_example"; // string | 
$tax_total = 1.2; // double | 
$use_in_transit = true; // bool | 
$reference = "reference_example"; // string | 
$total_gross = 1.2; // double | 
$total_net = 1.2; // double | 
$total_fx = 1.2; // double | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$lines = "lines_example"; // string | 
$shipping_address_address_line1 = "shipping_address_address_line1_example"; // string | 
$shipping_address_address_line2 = "shipping_address_address_line2_example"; // string | 
$shipping_address_address_line3 = "shipping_address_address_line3_example"; // string | 
$shipping_address_address_line4 = "shipping_address_address_line4_example"; // string | 
$shipping_address_address_line5 = "shipping_address_address_line5_example"; // string | 
$shipping_address_country = "shipping_address_country_example"; // string | 
$shipping_address_post_code = "shipping_address_post_code_example"; // string | 
$shipping_address_contact_name = "shipping_address_contact_name_example"; // string | 
$shipping_address_phone = "shipping_address_phone_example"; // string | 
$shipping_address_fax = "shipping_address_fax_example"; // string | 
$shipping_address_spare1 = "shipping_address_spare1_example"; // string | 
$shipping_address_spare2 = "shipping_address_spare2_example"; // string | 
$shipping_address_spare3 = "shipping_address_spare3_example"; // string | 
$shipping_address_spare4 = "shipping_address_spare4_example"; // string | 
$shipping_address_spare5 = "shipping_address_spare5_example"; // string | 
$freight = 1.2; // double | 
$duty = 1.2; // double | 
$insurance = 1.2; // double | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight_tax_rate = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty_tax_rate = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance_tax_rate = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$freight_inc = 1.2; // double | 
$duty_inc = 1.2; // double | 
$insurance_inc = 1.2; // double | 
$body = new \Jiwa\Model\PurchaseOrderPOSTRequest(); // \Jiwa\Model\PurchaseOrderPOSTRequest | 

try {
    $result = $apiInstance->purchaseOrderPOSTRequestPost($accept, $jiwa_stateful, $creditor_rec_id, $creditor_account_no, $creditor_name, $creditor_warehouse_rec_id, $creditor_warehouse_description, $logical_warehouse_residing_in_rec_id, $logical_warehouse_residing_in_description, $physical_warehouse_residing_in_rec_id, $physical_warehouse_residing_in_description, $logical_warehouse_ordering_from_rec_id, $logical_warehouse_ordering_from_description, $physical_warehouse_ordering_from_rec_id, $physical_warehouse_ordering_from_description, $in_transit_logical_warehouse_rec_id, $in_transit_logical_warehouse_description, $in_transit_physical_warehouse_rec_id, $in_transit_physical_warehouse_description, $order_no, $order_date, $attention, $contact_by, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $order_status, $order_type, $order_supplier_type, $tax_total, $use_in_transit, $reference, $total_gross, $total_net, $total_fx, $notes, $documents, $custom_field_values, $lines, $shipping_address_address_line1, $shipping_address_address_line2, $shipping_address_address_line3, $shipping_address_address_line4, $shipping_address_address_line5, $shipping_address_country, $shipping_address_post_code, $shipping_address_contact_name, $shipping_address_phone, $shipping_address_fax, $shipping_address_spare1, $shipping_address_spare2, $shipping_address_spare3, $shipping_address_spare4, $shipping_address_spare5, $freight, $duty, $insurance, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $freight_inc, $duty_inc, $insurance_inc, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_rec_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **creditor_warehouse_rec_id** | **string**|  | [optional]
 **creditor_warehouse_description** | **string**|  | [optional]
 **logical_warehouse_residing_in_rec_id** | **string**|  | [optional]
 **logical_warehouse_residing_in_description** | **string**|  | [optional]
 **physical_warehouse_residing_in_rec_id** | **string**|  | [optional]
 **physical_warehouse_residing_in_description** | **string**|  | [optional]
 **logical_warehouse_ordering_from_rec_id** | **string**|  | [optional]
 **logical_warehouse_ordering_from_description** | **string**|  | [optional]
 **physical_warehouse_ordering_from_rec_id** | **string**|  | [optional]
 **physical_warehouse_ordering_from_description** | **string**|  | [optional]
 **in_transit_logical_warehouse_rec_id** | **string**|  | [optional]
 **in_transit_logical_warehouse_description** | **string**|  | [optional]
 **in_transit_physical_warehouse_rec_id** | **string**|  | [optional]
 **in_transit_physical_warehouse_description** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_date** | **\DateTime**|  | [optional]
 **attention** | **string**|  | [optional]
 **contact_by** | **string**|  | [optional]
 **staff_id** | **string**|  | [optional]
 **staff_user_name** | **string**|  | [optional]
 **staff_title** | **string**|  | [optional]
 **staff_first_name** | **string**|  | [optional]
 **staff_surname** | **string**|  | [optional]
 **order_status** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **order_supplier_type** | **string**|  | [optional]
 **tax_total** | **double**|  | [optional]
 **use_in_transit** | **bool**|  | [optional]
 **reference** | **string**|  | [optional]
 **total_gross** | **double**|  | [optional]
 **total_net** | **double**|  | [optional]
 **total_fx** | **double**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **shipping_address_address_line1** | **string**|  | [optional]
 **shipping_address_address_line2** | **string**|  | [optional]
 **shipping_address_address_line3** | **string**|  | [optional]
 **shipping_address_address_line4** | **string**|  | [optional]
 **shipping_address_address_line5** | **string**|  | [optional]
 **shipping_address_country** | **string**|  | [optional]
 **shipping_address_post_code** | **string**|  | [optional]
 **shipping_address_contact_name** | **string**|  | [optional]
 **shipping_address_phone** | **string**|  | [optional]
 **shipping_address_fax** | **string**|  | [optional]
 **shipping_address_spare1** | **string**|  | [optional]
 **shipping_address_spare2** | **string**|  | [optional]
 **shipping_address_spare3** | **string**|  | [optional]
 **shipping_address_spare4** | **string**|  | [optional]
 **shipping_address_spare5** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **duty** | **double**|  | [optional]
 **insurance** | **double**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight_tax_rate** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty_tax_rate** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance_tax_rate** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **freight_inc** | **double**|  | [optional]
 **duty_inc** | **double**|  | [optional]
 **insurance_inc** | **double**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseOrderPOSTRequest**](../Model/PurchaseOrderPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderReceiveStockCREATEFromPOLinesRequestFromPurchaseOrderLinesPost**
> \Jiwa\Model\ReceivalDocument[] purchaseOrderReceiveStockCREATEFromPOLinesRequestFromPurchaseOrderLinesPost($accept, $jiwa_stateful, $received_po_line_quantities, $body)

Creates a landed cost book in if the purchase order is on a shipment, otherwise creates a goods received note from the supplied list of ReceivedPOLineQuantity.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$received_po_line_quantities = "received_po_line_quantities_example"; // string | 
$body = new \Jiwa\Model\PurchaseOrderReceiveStockCREATEFromPOLinesRequest(); // \Jiwa\Model\PurchaseOrderReceiveStockCREATEFromPOLinesRequest | 

try {
    $result = $apiInstance->purchaseOrderReceiveStockCREATEFromPOLinesRequestFromPurchaseOrderLinesPost($accept, $jiwa_stateful, $received_po_line_quantities, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderReceiveStockCREATEFromPOLinesRequestFromPurchaseOrderLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **received_po_line_quantities** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseOrderReceiveStockCREATEFromPOLinesRequest**](../Model/PurchaseOrderReceiveStockCREATEFromPOLinesRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\ReceivalDocument[]**](../Model/ReceivalDocument.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseOrderSAVERequestSaveGet**
> \Jiwa\Model\PurchaseOrder purchaseOrderSAVERequestSaveGet($accept, $jiwa_stateful, $purchase_order_id)

Saves a stateful stateful purchase order.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful purchase order item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$purchase_order_id = "purchase_order_id_example"; // string | 

try {
    $result = $apiInstance->purchaseOrderSAVERequestSaveGet($accept, $jiwa_stateful, $purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrderSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **purchase_order_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

