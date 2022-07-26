# Jiwa\WarehouseTransfersInApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**warehouseTransferInABANDONRequestAbandonDelete**](WarehouseTransfersInApi.md#warehouseTransferInABANDONRequestAbandonDelete) | **DELETE** /WarehouseTransfersIn/Abandon | Abandons a stateful warehouse transfer in.
[**warehouseTransferInACTIVATERequestActivateWarehouseTransferInIDPost**](WarehouseTransfersInApi.md#warehouseTransferInACTIVATERequestActivateWarehouseTransferInIDPost) | **POST** /WarehouseTransfersIn/Activate/{WarehouseTransferInID} | Activates a warehouse transfer in.
[**warehouseTransferInGETRequestWarehouseTransferInIDGet**](WarehouseTransfersInApi.md#warehouseTransferInGETRequestWarehouseTransferInIDGet) | **GET** /WarehouseTransfersIn/{WarehouseTransferInID} | Retrieves a warehouse transfer in.
[**warehouseTransferInLineGETRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDGet**](WarehouseTransfersInApi.md#warehouseTransferInLineGETRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDGet) | **GET** /WarehouseTransfersIn/{WarehouseTransferInID}/Lines/{WarehouseTransferInLineID} | Retrieves a warehouse transfer in line.
[**warehouseTransferInLinePATCHRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDUpdate**](WarehouseTransfersInApi.md#warehouseTransferInLinePATCHRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDUpdate) | **PATCH** /WarehouseTransfersIn/{WarehouseTransferInID}/Lines/{WarehouseTransferInLineID} | Updates a line for a warehouse transfer in.
[**warehouseTransferInLinesGETManyRequestWarehouseTransferInIDLinesGet**](WarehouseTransfersInApi.md#warehouseTransferInLinesGETManyRequestWarehouseTransferInIDLinesGet) | **GET** /WarehouseTransfersIn/{WarehouseTransferInID}/Lines | Retrieves a list of warehouse transfer in lines.
[**warehouseTransferInPATCHRequestWarehouseTransferInIDUpdate**](WarehouseTransfersInApi.md#warehouseTransferInPATCHRequestWarehouseTransferInIDUpdate) | **PATCH** /WarehouseTransfersIn/{WarehouseTransferInID} | Updates a warehouse transfer in.
[**warehouseTransferInPOSTRequestPost**](WarehouseTransfersInApi.md#warehouseTransferInPOSTRequestPost) | **POST** /WarehouseTransfersIn | Creates a warehouse transfer in.
[**warehouseTransferInReceiveInsGETManyRequestWarehouseTransferInIDReceiveInsGet**](WarehouseTransfersInApi.md#warehouseTransferInReceiveInsGETManyRequestWarehouseTransferInIDReceiveInsGet) | **GET** /WarehouseTransfersIn/{WarehouseTransferInID}/ReceiveIns | Retrieves a list of warehouse transfer in receive ins.
[**warehouseTransferInSAVERequestSaveGet**](WarehouseTransfersInApi.md#warehouseTransferInSAVERequestSaveGet) | **GET** /WarehouseTransfersIn/Save | Saves a stateful stateful warehouse transfer in.


# **warehouseTransferInABANDONRequestAbandonDelete**
> \Jiwa\JiwaModel\Object warehouseTransferInABANDONRequestAbandonDelete($accept, $jiwa_stateful, $warehouse_transfer_in_id)

Abandons a stateful warehouse transfer in.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful warehouse transfer in item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 

try {
    $result = $apiInstance->warehouseTransferInABANDONRequestAbandonDelete($accept, $jiwa_stateful, $warehouse_transfer_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **warehouse_transfer_in_id** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInACTIVATERequestActivateWarehouseTransferInIDPost**
> \Jiwa\JiwaModel\WarehouseTransferIn warehouseTransferInACTIVATERequestActivateWarehouseTransferInIDPost($accept, $warehouse_transfer_in_id, $jiwa_stateful, $body)

Activates a warehouse transfer in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\WarehouseTransferInACTIVATERequest(); // \Jiwa\JiwaModel\WarehouseTransferInACTIVATERequest | 

try {
    $result = $apiInstance->warehouseTransferInACTIVATERequestActivateWarehouseTransferInIDPost($accept, $warehouse_transfer_in_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInACTIVATERequestActivateWarehouseTransferInIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\WarehouseTransferInACTIVATERequest**](../Model/WarehouseTransferInACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferIn**](../Model/WarehouseTransferIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInGETRequestWarehouseTransferInIDGet**
> \Jiwa\JiwaModel\WarehouseTransferIn warehouseTransferInGETRequestWarehouseTransferInIDGet($accept, $warehouse_transfer_in_id, $jiwa_stateful)

Retrieves a warehouse transfer in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->warehouseTransferInGETRequestWarehouseTransferInIDGet($accept, $warehouse_transfer_in_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInGETRequestWarehouseTransferInIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferIn**](../Model/WarehouseTransferIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInLineGETRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDGet**
> \Jiwa\JiwaModel\WarehouseTransferInLine warehouseTransferInLineGETRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDGet($accept, $warehouse_transfer_in_id, $warehouse_transfer_in_line_id, $jiwa_stateful)

Retrieves a warehouse transfer in line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$warehouse_transfer_in_line_id = "warehouse_transfer_in_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->warehouseTransferInLineGETRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDGet($accept, $warehouse_transfer_in_id, $warehouse_transfer_in_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInLineGETRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **warehouse_transfer_in_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferInLine**](../Model/WarehouseTransferInLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInLinePATCHRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDUpdate**
> \Jiwa\JiwaModel\WarehouseTransferInLine warehouseTransferInLinePATCHRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDUpdate($accept, $warehouse_transfer_in_id, $warehouse_transfer_in_line_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $decimal_places, $quantity_wanted, $quantity_transferred, $quantity_back_ordered, $quantity_received, $cost, $ref, $back_order_id, $purchase_order_id, $purchase_order_line_id, $total_cost_transferred, $total_cost_received, $added_cost_ledger1_rec_id, $added_cost_ledger1_account_no, $added_cost_ledger1_description, $added_cost_ledger2_rec_id, $added_cost_ledger2_account_no, $added_cost_ledger2_description, $added_cost_ledger3_rec_id, $added_cost_ledger3_account_no, $added_cost_ledger3_description, $line_details, $body)

Updates a line for a warehouse transfer in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$warehouse_transfer_in_line_id = "warehouse_transfer_in_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$decimal_places = 56; // int | 
$quantity_wanted = 1.2; // double | 
$quantity_transferred = 1.2; // double | 
$quantity_back_ordered = 1.2; // double | 
$quantity_received = 1.2; // double | 
$cost = 1.2; // double | 
$ref = "ref_example"; // string | 
$back_order_id = "back_order_id_example"; // string | 
$purchase_order_id = "purchase_order_id_example"; // string | 
$purchase_order_line_id = "purchase_order_line_id_example"; // string | 
$total_cost_transferred = 1.2; // double | 
$total_cost_received = 1.2; // double | 
$added_cost_ledger1_rec_id = "added_cost_ledger1_rec_id_example"; // string | 
$added_cost_ledger1_account_no = "added_cost_ledger1_account_no_example"; // string | 
$added_cost_ledger1_description = "added_cost_ledger1_description_example"; // string | 
$added_cost_ledger2_rec_id = "added_cost_ledger2_rec_id_example"; // string | 
$added_cost_ledger2_account_no = "added_cost_ledger2_account_no_example"; // string | 
$added_cost_ledger2_description = "added_cost_ledger2_description_example"; // string | 
$added_cost_ledger3_rec_id = "added_cost_ledger3_rec_id_example"; // string | 
$added_cost_ledger3_account_no = "added_cost_ledger3_account_no_example"; // string | 
$added_cost_ledger3_description = "added_cost_ledger3_description_example"; // string | 
$line_details = "line_details_example"; // string | 
$body = new \Jiwa\JiwaModel\WarehouseTransferInLinePATCHRequest(); // \Jiwa\JiwaModel\WarehouseTransferInLinePATCHRequest | 

try {
    $result = $apiInstance->warehouseTransferInLinePATCHRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDUpdate($accept, $warehouse_transfer_in_id, $warehouse_transfer_in_line_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $decimal_places, $quantity_wanted, $quantity_transferred, $quantity_back_ordered, $quantity_received, $cost, $ref, $back_order_id, $purchase_order_id, $purchase_order_line_id, $total_cost_transferred, $total_cost_received, $added_cost_ledger1_rec_id, $added_cost_ledger1_account_no, $added_cost_ledger1_description, $added_cost_ledger2_rec_id, $added_cost_ledger2_account_no, $added_cost_ledger2_description, $added_cost_ledger3_rec_id, $added_cost_ledger3_account_no, $added_cost_ledger3_description, $line_details, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInLinePATCHRequestWarehouseTransferInIDLinesWarehouseTransferInLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **warehouse_transfer_in_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **decimal_places** | **int**|  | [optional]
 **quantity_wanted** | **double**|  | [optional]
 **quantity_transferred** | **double**|  | [optional]
 **quantity_back_ordered** | **double**|  | [optional]
 **quantity_received** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **ref** | **string**|  | [optional]
 **back_order_id** | **string**|  | [optional]
 **purchase_order_id** | **string**|  | [optional]
 **purchase_order_line_id** | **string**|  | [optional]
 **total_cost_transferred** | **double**|  | [optional]
 **total_cost_received** | **double**|  | [optional]
 **added_cost_ledger1_rec_id** | **string**|  | [optional]
 **added_cost_ledger1_account_no** | **string**|  | [optional]
 **added_cost_ledger1_description** | **string**|  | [optional]
 **added_cost_ledger2_rec_id** | **string**|  | [optional]
 **added_cost_ledger2_account_no** | **string**|  | [optional]
 **added_cost_ledger2_description** | **string**|  | [optional]
 **added_cost_ledger3_rec_id** | **string**|  | [optional]
 **added_cost_ledger3_account_no** | **string**|  | [optional]
 **added_cost_ledger3_description** | **string**|  | [optional]
 **line_details** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\WarehouseTransferInLinePATCHRequest**](../Model/WarehouseTransferInLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferInLine**](../Model/WarehouseTransferInLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInLinesGETManyRequestWarehouseTransferInIDLinesGet**
> \Jiwa\JiwaModel\WarehouseTransferInLine[] warehouseTransferInLinesGETManyRequestWarehouseTransferInIDLinesGet($accept, $warehouse_transfer_in_id, $jiwa_stateful)

Retrieves a list of warehouse transfer in lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->warehouseTransferInLinesGETManyRequestWarehouseTransferInIDLinesGet($accept, $warehouse_transfer_in_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInLinesGETManyRequestWarehouseTransferInIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferInLine[]**](../Model/WarehouseTransferInLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInPATCHRequestWarehouseTransferInIDUpdate**
> \Jiwa\JiwaModel\WarehouseTransferIn warehouseTransferInPATCHRequestWarehouseTransferInIDUpdate($accept, $warehouse_transfer_in_id, $jiwa_stateful, $warehouse_transfer_out_id, $last_saved_date_time, $transfer_date, $activated_date, $status, $created_by_staff_id, $created_by_staff_user_name, $created_by_staff_title, $created_by_staff_first_name, $created_by_staff_surname, $source, $source_type, $source_id, $source_no, $notes, $source_warehouse_id, $source_warehouse_logical_description, $source_warehouse_physical_description, $source_warehouse_mask, $destination_warehouse_id, $destination_warehouse_logical_description, $destination_warehouse_physical_description, $destination_warehouse_mask, $transfer_no, $use_in_transit, $transit_notes, $in_transit_warehouse_id, $in_transit_warehouse_logical_description, $in_transit_warehouse_physical_description, $in_transit_warehouse_mask, $added_cost1, $added_cost2, $added_cost3, $picked_by_staff_id, $picked_by_staff_user_name, $picked_by_staff_title, $picked_by_staff_first_name, $picked_by_staff_surname, $added_cost_method_name, $transferred_cost, $total_cost, $receive_ins, $lines, $body)

Updates a warehouse transfer in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$warehouse_transfer_out_id = "warehouse_transfer_out_id_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$transfer_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$activated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$created_by_staff_id = "created_by_staff_id_example"; // string | 
$created_by_staff_user_name = "created_by_staff_user_name_example"; // string | 
$created_by_staff_title = "created_by_staff_title_example"; // string | 
$created_by_staff_first_name = "created_by_staff_first_name_example"; // string | 
$created_by_staff_surname = "created_by_staff_surname_example"; // string | 
$source = "source_example"; // string | 
$source_type = "source_type_example"; // string | 
$source_id = "source_id_example"; // string | 
$source_no = "source_no_example"; // string | 
$notes = "notes_example"; // string | 
$source_warehouse_id = "source_warehouse_id_example"; // string | 
$source_warehouse_logical_description = "source_warehouse_logical_description_example"; // string | 
$source_warehouse_physical_description = "source_warehouse_physical_description_example"; // string | 
$source_warehouse_mask = "source_warehouse_mask_example"; // string | 
$destination_warehouse_id = "destination_warehouse_id_example"; // string | 
$destination_warehouse_logical_description = "destination_warehouse_logical_description_example"; // string | 
$destination_warehouse_physical_description = "destination_warehouse_physical_description_example"; // string | 
$destination_warehouse_mask = "destination_warehouse_mask_example"; // string | 
$transfer_no = "transfer_no_example"; // string | 
$use_in_transit = true; // bool | 
$transit_notes = "transit_notes_example"; // string | 
$in_transit_warehouse_id = "in_transit_warehouse_id_example"; // string | 
$in_transit_warehouse_logical_description = "in_transit_warehouse_logical_description_example"; // string | 
$in_transit_warehouse_physical_description = "in_transit_warehouse_physical_description_example"; // string | 
$in_transit_warehouse_mask = "in_transit_warehouse_mask_example"; // string | 
$added_cost1 = 1.2; // double | 
$added_cost2 = 1.2; // double | 
$added_cost3 = 1.2; // double | 
$picked_by_staff_id = "picked_by_staff_id_example"; // string | 
$picked_by_staff_user_name = "picked_by_staff_user_name_example"; // string | 
$picked_by_staff_title = "picked_by_staff_title_example"; // string | 
$picked_by_staff_first_name = "picked_by_staff_first_name_example"; // string | 
$picked_by_staff_surname = "picked_by_staff_surname_example"; // string | 
$added_cost_method_name = "added_cost_method_name_example"; // string | 
$transferred_cost = 1.2; // double | 
$total_cost = 1.2; // double | 
$receive_ins = "receive_ins_example"; // string | 
$lines = "lines_example"; // string | 
$body = new \Jiwa\JiwaModel\WarehouseTransferInPATCHRequest(); // \Jiwa\JiwaModel\WarehouseTransferInPATCHRequest | 

try {
    $result = $apiInstance->warehouseTransferInPATCHRequestWarehouseTransferInIDUpdate($accept, $warehouse_transfer_in_id, $jiwa_stateful, $warehouse_transfer_out_id, $last_saved_date_time, $transfer_date, $activated_date, $status, $created_by_staff_id, $created_by_staff_user_name, $created_by_staff_title, $created_by_staff_first_name, $created_by_staff_surname, $source, $source_type, $source_id, $source_no, $notes, $source_warehouse_id, $source_warehouse_logical_description, $source_warehouse_physical_description, $source_warehouse_mask, $destination_warehouse_id, $destination_warehouse_logical_description, $destination_warehouse_physical_description, $destination_warehouse_mask, $transfer_no, $use_in_transit, $transit_notes, $in_transit_warehouse_id, $in_transit_warehouse_logical_description, $in_transit_warehouse_physical_description, $in_transit_warehouse_mask, $added_cost1, $added_cost2, $added_cost3, $picked_by_staff_id, $picked_by_staff_user_name, $picked_by_staff_title, $picked_by_staff_first_name, $picked_by_staff_surname, $added_cost_method_name, $transferred_cost, $total_cost, $receive_ins, $lines, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInPATCHRequestWarehouseTransferInIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **warehouse_transfer_out_id** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **transfer_date** | **\DateTime**|  | [optional]
 **activated_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **created_by_staff_id** | **string**|  | [optional]
 **created_by_staff_user_name** | **string**|  | [optional]
 **created_by_staff_title** | **string**|  | [optional]
 **created_by_staff_first_name** | **string**|  | [optional]
 **created_by_staff_surname** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **source_type** | **string**|  | [optional]
 **source_id** | **string**|  | [optional]
 **source_no** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **source_warehouse_id** | **string**|  | [optional]
 **source_warehouse_logical_description** | **string**|  | [optional]
 **source_warehouse_physical_description** | **string**|  | [optional]
 **source_warehouse_mask** | **string**|  | [optional]
 **destination_warehouse_id** | **string**|  | [optional]
 **destination_warehouse_logical_description** | **string**|  | [optional]
 **destination_warehouse_physical_description** | **string**|  | [optional]
 **destination_warehouse_mask** | **string**|  | [optional]
 **transfer_no** | **string**|  | [optional]
 **use_in_transit** | **bool**|  | [optional]
 **transit_notes** | **string**|  | [optional]
 **in_transit_warehouse_id** | **string**|  | [optional]
 **in_transit_warehouse_logical_description** | **string**|  | [optional]
 **in_transit_warehouse_physical_description** | **string**|  | [optional]
 **in_transit_warehouse_mask** | **string**|  | [optional]
 **added_cost1** | **double**|  | [optional]
 **added_cost2** | **double**|  | [optional]
 **added_cost3** | **double**|  | [optional]
 **picked_by_staff_id** | **string**|  | [optional]
 **picked_by_staff_user_name** | **string**|  | [optional]
 **picked_by_staff_title** | **string**|  | [optional]
 **picked_by_staff_first_name** | **string**|  | [optional]
 **picked_by_staff_surname** | **string**|  | [optional]
 **added_cost_method_name** | **string**|  | [optional]
 **transferred_cost** | **double**|  | [optional]
 **total_cost** | **double**|  | [optional]
 **receive_ins** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\WarehouseTransferInPATCHRequest**](../Model/WarehouseTransferInPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferIn**](../Model/WarehouseTransferIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInPOSTRequestPost**
> \Jiwa\JiwaModel\WarehouseTransferIn warehouseTransferInPOSTRequestPost($accept, $jiwa_stateful, $warehouse_transfer_out_id, $last_saved_date_time, $transfer_date, $activated_date, $status, $created_by_staff_id, $created_by_staff_user_name, $created_by_staff_title, $created_by_staff_first_name, $created_by_staff_surname, $source, $source_type, $source_id, $source_no, $notes, $source_warehouse_id, $source_warehouse_logical_description, $source_warehouse_physical_description, $source_warehouse_mask, $destination_warehouse_id, $destination_warehouse_logical_description, $destination_warehouse_physical_description, $destination_warehouse_mask, $transfer_no, $use_in_transit, $transit_notes, $in_transit_warehouse_id, $in_transit_warehouse_logical_description, $in_transit_warehouse_physical_description, $in_transit_warehouse_mask, $added_cost1, $added_cost2, $added_cost3, $picked_by_staff_id, $picked_by_staff_user_name, $picked_by_staff_title, $picked_by_staff_first_name, $picked_by_staff_surname, $added_cost_method_name, $transferred_cost, $total_cost, $receive_ins, $lines, $body)

Creates a warehouse transfer in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$warehouse_transfer_out_id = "warehouse_transfer_out_id_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$transfer_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$activated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$created_by_staff_id = "created_by_staff_id_example"; // string | 
$created_by_staff_user_name = "created_by_staff_user_name_example"; // string | 
$created_by_staff_title = "created_by_staff_title_example"; // string | 
$created_by_staff_first_name = "created_by_staff_first_name_example"; // string | 
$created_by_staff_surname = "created_by_staff_surname_example"; // string | 
$source = "source_example"; // string | 
$source_type = "source_type_example"; // string | 
$source_id = "source_id_example"; // string | 
$source_no = "source_no_example"; // string | 
$notes = "notes_example"; // string | 
$source_warehouse_id = "source_warehouse_id_example"; // string | 
$source_warehouse_logical_description = "source_warehouse_logical_description_example"; // string | 
$source_warehouse_physical_description = "source_warehouse_physical_description_example"; // string | 
$source_warehouse_mask = "source_warehouse_mask_example"; // string | 
$destination_warehouse_id = "destination_warehouse_id_example"; // string | 
$destination_warehouse_logical_description = "destination_warehouse_logical_description_example"; // string | 
$destination_warehouse_physical_description = "destination_warehouse_physical_description_example"; // string | 
$destination_warehouse_mask = "destination_warehouse_mask_example"; // string | 
$transfer_no = "transfer_no_example"; // string | 
$use_in_transit = true; // bool | 
$transit_notes = "transit_notes_example"; // string | 
$in_transit_warehouse_id = "in_transit_warehouse_id_example"; // string | 
$in_transit_warehouse_logical_description = "in_transit_warehouse_logical_description_example"; // string | 
$in_transit_warehouse_physical_description = "in_transit_warehouse_physical_description_example"; // string | 
$in_transit_warehouse_mask = "in_transit_warehouse_mask_example"; // string | 
$added_cost1 = 1.2; // double | 
$added_cost2 = 1.2; // double | 
$added_cost3 = 1.2; // double | 
$picked_by_staff_id = "picked_by_staff_id_example"; // string | 
$picked_by_staff_user_name = "picked_by_staff_user_name_example"; // string | 
$picked_by_staff_title = "picked_by_staff_title_example"; // string | 
$picked_by_staff_first_name = "picked_by_staff_first_name_example"; // string | 
$picked_by_staff_surname = "picked_by_staff_surname_example"; // string | 
$added_cost_method_name = "added_cost_method_name_example"; // string | 
$transferred_cost = 1.2; // double | 
$total_cost = 1.2; // double | 
$receive_ins = "receive_ins_example"; // string | 
$lines = "lines_example"; // string | 
$body = new \Jiwa\JiwaModel\WarehouseTransferInPOSTRequest(); // \Jiwa\JiwaModel\WarehouseTransferInPOSTRequest | 

try {
    $result = $apiInstance->warehouseTransferInPOSTRequestPost($accept, $jiwa_stateful, $warehouse_transfer_out_id, $last_saved_date_time, $transfer_date, $activated_date, $status, $created_by_staff_id, $created_by_staff_user_name, $created_by_staff_title, $created_by_staff_first_name, $created_by_staff_surname, $source, $source_type, $source_id, $source_no, $notes, $source_warehouse_id, $source_warehouse_logical_description, $source_warehouse_physical_description, $source_warehouse_mask, $destination_warehouse_id, $destination_warehouse_logical_description, $destination_warehouse_physical_description, $destination_warehouse_mask, $transfer_no, $use_in_transit, $transit_notes, $in_transit_warehouse_id, $in_transit_warehouse_logical_description, $in_transit_warehouse_physical_description, $in_transit_warehouse_mask, $added_cost1, $added_cost2, $added_cost3, $picked_by_staff_id, $picked_by_staff_user_name, $picked_by_staff_title, $picked_by_staff_first_name, $picked_by_staff_surname, $added_cost_method_name, $transferred_cost, $total_cost, $receive_ins, $lines, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **warehouse_transfer_out_id** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **transfer_date** | **\DateTime**|  | [optional]
 **activated_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **created_by_staff_id** | **string**|  | [optional]
 **created_by_staff_user_name** | **string**|  | [optional]
 **created_by_staff_title** | **string**|  | [optional]
 **created_by_staff_first_name** | **string**|  | [optional]
 **created_by_staff_surname** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **source_type** | **string**|  | [optional]
 **source_id** | **string**|  | [optional]
 **source_no** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **source_warehouse_id** | **string**|  | [optional]
 **source_warehouse_logical_description** | **string**|  | [optional]
 **source_warehouse_physical_description** | **string**|  | [optional]
 **source_warehouse_mask** | **string**|  | [optional]
 **destination_warehouse_id** | **string**|  | [optional]
 **destination_warehouse_logical_description** | **string**|  | [optional]
 **destination_warehouse_physical_description** | **string**|  | [optional]
 **destination_warehouse_mask** | **string**|  | [optional]
 **transfer_no** | **string**|  | [optional]
 **use_in_transit** | **bool**|  | [optional]
 **transit_notes** | **string**|  | [optional]
 **in_transit_warehouse_id** | **string**|  | [optional]
 **in_transit_warehouse_logical_description** | **string**|  | [optional]
 **in_transit_warehouse_physical_description** | **string**|  | [optional]
 **in_transit_warehouse_mask** | **string**|  | [optional]
 **added_cost1** | **double**|  | [optional]
 **added_cost2** | **double**|  | [optional]
 **added_cost3** | **double**|  | [optional]
 **picked_by_staff_id** | **string**|  | [optional]
 **picked_by_staff_user_name** | **string**|  | [optional]
 **picked_by_staff_title** | **string**|  | [optional]
 **picked_by_staff_first_name** | **string**|  | [optional]
 **picked_by_staff_surname** | **string**|  | [optional]
 **added_cost_method_name** | **string**|  | [optional]
 **transferred_cost** | **double**|  | [optional]
 **total_cost** | **double**|  | [optional]
 **receive_ins** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\WarehouseTransferInPOSTRequest**](../Model/WarehouseTransferInPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferIn**](../Model/WarehouseTransferIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInReceiveInsGETManyRequestWarehouseTransferInIDReceiveInsGet**
> \Jiwa\JiwaModel\WarehouseTransferInReceiveIn[] warehouseTransferInReceiveInsGETManyRequestWarehouseTransferInIDReceiveInsGet($accept, $warehouse_transfer_in_id, $jiwa_stateful)

Retrieves a list of warehouse transfer in receive ins.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->warehouseTransferInReceiveInsGETManyRequestWarehouseTransferInIDReceiveInsGet($accept, $warehouse_transfer_in_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInReceiveInsGETManyRequestWarehouseTransferInIDReceiveInsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **warehouse_transfer_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferInReceiveIn[]**](../Model/WarehouseTransferInReceiveIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseTransferInSAVERequestSaveGet**
> \Jiwa\JiwaModel\WarehouseTransferIn warehouseTransferInSAVERequestSaveGet($accept, $jiwa_stateful, $warehouse_transfer_in_id)

Saves a stateful stateful warehouse transfer in.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful warehouse transfer in item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WarehouseTransfersInApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$warehouse_transfer_in_id = "warehouse_transfer_in_id_example"; // string | 

try {
    $result = $apiInstance->warehouseTransferInSAVERequestSaveGet($accept, $jiwa_stateful, $warehouse_transfer_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseTransfersInApi->warehouseTransferInSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **warehouse_transfer_in_id** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\WarehouseTransferIn**](../Model/WarehouseTransferIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

