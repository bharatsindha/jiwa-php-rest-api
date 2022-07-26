# Jiwa\GoodsReceivedNotesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**goodsReceivedNoteABANDONRequestAbandonDelete**](GoodsReceivedNotesApi.md#goodsReceivedNoteABANDONRequestAbandonDelete) | **DELETE** /GoodsReceivedNotes/Abandon | Abandons a stateful goods received note.
[**goodsReceivedNoteACTIVATERequestActivateGRNIDPost**](GoodsReceivedNotesApi.md#goodsReceivedNoteACTIVATERequestActivateGRNIDPost) | **POST** /GoodsReceivedNotes/Activate/{GRNID} | Activates a GRN.
[**goodsReceivedNoteCREATEFromPOLinesRequestFromPurchaseOrderLinesPost**](GoodsReceivedNotesApi.md#goodsReceivedNoteCREATEFromPOLinesRequestFromPurchaseOrderLinesPost) | **POST** /GoodsReceivedNotes/FromPurchaseOrderLines | Creates a GRN from the supplied list of ReceivedPOLineQuantity.
[**goodsReceivedNoteCREATEFromPORequestFromPurchaseOrdersOrderNosPost**](GoodsReceivedNotesApi.md#goodsReceivedNoteCREATEFromPORequestFromPurchaseOrdersOrderNosPost) | **POST** /GoodsReceivedNotes/FromPurchaseOrders/{OrderNos} | Creates a GRN from the supplied purchase orders.
[**goodsReceivedNoteDELETERequestGRNIDDelete**](GoodsReceivedNotesApi.md#goodsReceivedNoteDELETERequestGRNIDDelete) | **DELETE** /GoodsReceivedNotes/{GRNID} | Deletes a GRN.
[**goodsReceivedNoteGETRequestGRNIDGet**](GoodsReceivedNotesApi.md#goodsReceivedNoteGETRequestGRNIDGet) | **GET** /GoodsReceivedNotes/{GRNID} | Retrieves a GRN.
[**goodsReceivedNoteLineDELETERequestGRNIDLinesLineIDDelete**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDELETERequestGRNIDLinesLineIDDelete) | **DELETE** /GoodsReceivedNotes/{GRNID}/Lines/{LineID} | Deletes a line from a goods received note.
[**goodsReceivedNoteLineDetailDELETERequestGRNIDLinesLineIDLineDetailsLineDetailIDDelete**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDetailDELETERequestGRNIDLinesLineIDLineDetailsLineDetailIDDelete) | **DELETE** /GoodsReceivedNotes/{GRNID}/Lines/{LineID}/LineDetails/{LineDetailID} | Deletes a goods received note line detail.
[**goodsReceivedNoteLineDetailGETRequestGRNIDLinesLineIDLineDetailsLineDetailIDGet**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDetailGETRequestGRNIDLinesLineIDLineDetailsLineDetailIDGet) | **GET** /GoodsReceivedNotes/{GRNID}/Lines/{LineID}/LineDetails/{LineDetailID} | Retrieves a goods received note line detail.
[**goodsReceivedNoteLineDetailPATCHRequestGRNIDLinesLineIDLineDetailsLineDetailIDUpdate**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDetailPATCHRequestGRNIDLinesLineIDLineDetailsLineDetailIDUpdate) | **PATCH** /GoodsReceivedNotes/{GRNID}/Lines/{LineID}/LineDetails/{LineDetailID} | Updates a goods received note line detail.
[**goodsReceivedNoteLineDetailPOSTRequestGRNIDLinesLineIDLineDetailsPost**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDetailPOSTRequestGRNIDLinesLineIDLineDetailsPost) | **POST** /GoodsReceivedNotes/{GRNID}/Lines/{LineID}/LineDetails | Appends a line detail to a goods received note line.
[**goodsReceivedNoteLineDetailPUTRequestGRNIDLinesLineIDLineDetailsCreate**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDetailPUTRequestGRNIDLinesLineIDLineDetailsCreate) | **PUT** /GoodsReceivedNotes/{GRNID}/Lines/{LineID}/LineDetails | Sets the line details for a goods received note line. Existing line details for that line will be replaced.
[**goodsReceivedNoteLineDetailsGETManyRequestGRNIDLinesLineIDLineDetailsGet**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineDetailsGETManyRequestGRNIDLinesLineIDLineDetailsGet) | **GET** /GoodsReceivedNotes/{GRNID}/Lines/{LineID}/LineDetails | Retrieves a list of line details for a goods received note line.
[**goodsReceivedNoteLineGETRequestGRNIDLinesLineIDGet**](GoodsReceivedNotesApi.md#goodsReceivedNoteLineGETRequestGRNIDLinesLineIDGet) | **GET** /GoodsReceivedNotes/{GRNID}/Lines/{LineID} | Retrieves a goods received note line.
[**goodsReceivedNoteLinePATCHRequestGRNIDLinesLineIDUpdate**](GoodsReceivedNotesApi.md#goodsReceivedNoteLinePATCHRequestGRNIDLinesLineIDUpdate) | **PATCH** /GoodsReceivedNotes/{GRNID}/Lines/{LineID} | Updates a line for a goods received note.
[**goodsReceivedNoteLinePOSTRequestGRNIDLinesPost**](GoodsReceivedNotesApi.md#goodsReceivedNoteLinePOSTRequestGRNIDLinesPost) | **POST** /GoodsReceivedNotes/{GRNID}/Lines | Appends a line to a goods received note.
[**goodsReceivedNoteLinesGETManyRequestGRNIDLinesGet**](GoodsReceivedNotesApi.md#goodsReceivedNoteLinesGETManyRequestGRNIDLinesGet) | **GET** /GoodsReceivedNotes/{GRNID}/Lines | Retrieves a list of goods received note lines.
[**goodsReceivedNotePATCHRequestGRNIDUpdate**](GoodsReceivedNotesApi.md#goodsReceivedNotePATCHRequestGRNIDUpdate) | **PATCH** /GoodsReceivedNotes/{GRNID} | Updates a GRN.
[**goodsReceivedNotePOSTRequestPost**](GoodsReceivedNotesApi.md#goodsReceivedNotePOSTRequestPost) | **POST** /GoodsReceivedNotes | Creates a GRN.
[**goodsReceivedNotePurchaseOrderDELETERequestGRNIDPurchaseOrdersOrderIDDelete**](GoodsReceivedNotesApi.md#goodsReceivedNotePurchaseOrderDELETERequestGRNIDPurchaseOrdersOrderIDDelete) | **DELETE** /GoodsReceivedNotes/{GRNID}/PurchaseOrders/{OrderID} | Deletes a purchase order from a goods received note.
[**goodsReceivedNotePurchaseOrderGETRequestGRNIDPurchaseOrdersOrderIDGet**](GoodsReceivedNotesApi.md#goodsReceivedNotePurchaseOrderGETRequestGRNIDPurchaseOrdersOrderIDGet) | **GET** /GoodsReceivedNotes/{GRNID}/PurchaseOrders/{OrderID} | Retrieves a goods received note purchase order.
[**goodsReceivedNotePurchaseOrderPOSTRequestGRNIDPurchaseOrdersPost**](GoodsReceivedNotesApi.md#goodsReceivedNotePurchaseOrderPOSTRequestGRNIDPurchaseOrdersPost) | **POST** /GoodsReceivedNotes/{GRNID}/PurchaseOrders | Appends a purchase order to a goods received note.
[**goodsReceivedNotePurchaseOrdersGETManyRequestGRNIDPurchaseOrdersGet**](GoodsReceivedNotesApi.md#goodsReceivedNotePurchaseOrdersGETManyRequestGRNIDPurchaseOrdersGet) | **GET** /GoodsReceivedNotes/{GRNID}/PurchaseOrders | Retrieves a list of goods received note purchase orders.
[**goodsReceivedNoteSAVERequestSaveGet**](GoodsReceivedNotesApi.md#goodsReceivedNoteSAVERequestSaveGet) | **GET** /GoodsReceivedNotes/Save | Saves a stateful stateful goods received note.


# **goodsReceivedNoteABANDONRequestAbandonDelete**
> \Jiwa\JiwaModel\Object goodsReceivedNoteABANDONRequestAbandonDelete($accept, $jiwa_stateful, $grnid)

Abandons a stateful goods received note.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful goods received note item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$grnid = "grnid_example"; // string | 

try {
    $result = $apiInstance->goodsReceivedNoteABANDONRequestAbandonDelete($accept, $jiwa_stateful, $grnid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **grnid** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteACTIVATERequestActivateGRNIDPost**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNoteACTIVATERequestActivateGRNIDPost($accept, $grnid, $jiwa_stateful, $body)

Activates a GRN.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteACTIVATERequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteACTIVATERequest | 

try {
    $result = $apiInstance->goodsReceivedNoteACTIVATERequestActivateGRNIDPost($accept, $grnid, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteACTIVATERequestActivateGRNIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteACTIVATERequest**](../Model/GoodsReceivedNoteACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteCREATEFromPOLinesRequestFromPurchaseOrderLinesPost**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNoteCREATEFromPOLinesRequestFromPurchaseOrderLinesPost($accept, $jiwa_stateful, $received_po_line_quantities, $body)

Creates a GRN from the supplied list of ReceivedPOLineQuantity.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$received_po_line_quantities = "received_po_line_quantities_example"; // string | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteCREATEFromPOLinesRequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteCREATEFromPOLinesRequest | 

try {
    $result = $apiInstance->goodsReceivedNoteCREATEFromPOLinesRequestFromPurchaseOrderLinesPost($accept, $jiwa_stateful, $received_po_line_quantities, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteCREATEFromPOLinesRequestFromPurchaseOrderLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **received_po_line_quantities** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteCREATEFromPOLinesRequest**](../Model/GoodsReceivedNoteCREATEFromPOLinesRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteCREATEFromPORequestFromPurchaseOrdersOrderNosPost**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNoteCREATEFromPORequestFromPurchaseOrdersOrderNosPost($accept, $order_nos, $jiwa_stateful, $body)

Creates a GRN from the supplied purchase orders.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$order_nos = "order_nos_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteCREATEFromPORequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteCREATEFromPORequest | 

try {
    $result = $apiInstance->goodsReceivedNoteCREATEFromPORequestFromPurchaseOrdersOrderNosPost($accept, $order_nos, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteCREATEFromPORequestFromPurchaseOrdersOrderNosPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **order_nos** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteCREATEFromPORequest**](../Model/GoodsReceivedNoteCREATEFromPORequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteDELETERequestGRNIDDelete**
> \Jiwa\JiwaModel\Object goodsReceivedNoteDELETERequestGRNIDDelete($accept, $grnid, $jiwa_stateful)

Deletes a GRN.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteDELETERequestGRNIDDelete($accept, $grnid, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteDELETERequestGRNIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteGETRequestGRNIDGet**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNoteGETRequestGRNIDGet($accept, $grnid, $jiwa_stateful)

Retrieves a GRN.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteGETRequestGRNIDGet($accept, $grnid, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteGETRequestGRNIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDELETERequestGRNIDLinesLineIDDelete**
> \Jiwa\JiwaModel\Object goodsReceivedNoteLineDELETERequestGRNIDLinesLineIDDelete($accept, $grnid, $line_id, $jiwa_stateful, $quantity_ordered, $quantity_delivered, $order_id, $order_no, $order_line_id, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $grn_line_type, $quantity_decimal_places, $last_saved_date_time, $classification_id, $classification_description, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $posted_to_wip, $job_charge, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_wip_ledger_account_id, $inventory_wip_ledger_account_no, $inventory_wip_ledger_account_description, $po_line_last_saved_date_time, $order_units, $item_no, $in_creditor_rec_id, $in_supplier_warehouse_rec_id, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $unit_inc_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $line_details, $custom_field_values)

Deletes a line from a goods received note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$quantity_ordered = 1.2; // double | 
$quantity_delivered = 1.2; // double | 
$order_id = "order_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_line_id = "order_line_id_example"; // string | 
$quantity = 1.2; // double | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$aux2 = "aux2_example"; // string | 
$description = "description_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$grn_line_type = "grn_line_type_example"; // string | 
$quantity_decimal_places = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$classification_id = "classification_id_example"; // string | 
$classification_description = "classification_description_example"; // string | 
$tax_amount = 1.2; // double | 
$tax_id = "tax_id_example"; // string | 
$tax_rate = 1.2; // double | 
$cost = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$purchasing_classification_id = "purchasing_classification_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$posted_to_wip = true; // bool | 
$job_charge = 1.2; // double | 
$use_serial_no = true; // bool | 
$fx_cost = 1.2; // double | 
$physical_item = true; // bool | 
$inventory_expected_liability_ledger_account_id = "inventory_expected_liability_ledger_account_id_example"; // string | 
$inventory_expected_liability_ledger_account_no = "inventory_expected_liability_ledger_account_no_example"; // string | 
$inventory_expected_liability_ledger_account_description = "inventory_expected_liability_ledger_account_description_example"; // string | 
$inventory_expected_asset_ledger_account_id = "inventory_expected_asset_ledger_account_id_example"; // string | 
$inventory_expected_asset_ledger_account_no = "inventory_expected_asset_ledger_account_no_example"; // string | 
$inventory_expected_asset_ledger_account_description = "inventory_expected_asset_ledger_account_description_example"; // string | 
$inventory_delivered_asset_ledger_account_id = "inventory_delivered_asset_ledger_account_id_example"; // string | 
$inventory_delivered_asset_ledger_account_no = "inventory_delivered_asset_ledger_account_no_example"; // string | 
$inventory_delivered_asset_ledger_account_description = "inventory_delivered_asset_ledger_account_description_example"; // string | 
$inventory_value_ledger_account_id = "inventory_value_ledger_account_id_example"; // string | 
$inventory_value_ledger_account_no = "inventory_value_ledger_account_no_example"; // string | 
$inventory_value_ledger_account_description = "inventory_value_ledger_account_description_example"; // string | 
$inventory_delivered_liability_ledger_account_id = "inventory_delivered_liability_ledger_account_id_example"; // string | 
$inventory_delivered_liability_ledger_account_no = "inventory_delivered_liability_ledger_account_no_example"; // string | 
$inventory_delivered_liability_ledger_account_description = "inventory_delivered_liability_ledger_account_description_example"; // string | 
$inventory_wip_ledger_account_id = "inventory_wip_ledger_account_id_example"; // string | 
$inventory_wip_ledger_account_no = "inventory_wip_ledger_account_no_example"; // string | 
$inventory_wip_ledger_account_description = "inventory_wip_ledger_account_description_example"; // string | 
$po_line_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$order_units = 1.2; // double | 
$item_no = 56; // int | 
$in_creditor_rec_id = "in_creditor_rec_id_example"; // string | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_cost_centre_id = "job_costing_cost_centre_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_id = "job_costing_job_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$unit_inc_tax = 1.2; // double | 
$line_total_inc_tax = 1.2; // double | 
$fx_line_total_ex_tax = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_decimal_places = 56; // int | 
$use_expiry_date = true; // bool | 
$line_details = "line_details_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 

try {
    $result = $apiInstance->goodsReceivedNoteLineDELETERequestGRNIDLinesLineIDDelete($accept, $grnid, $line_id, $jiwa_stateful, $quantity_ordered, $quantity_delivered, $order_id, $order_no, $order_line_id, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $grn_line_type, $quantity_decimal_places, $last_saved_date_time, $classification_id, $classification_description, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $posted_to_wip, $job_charge, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_wip_ledger_account_id, $inventory_wip_ledger_account_no, $inventory_wip_ledger_account_description, $po_line_last_saved_date_time, $order_units, $item_no, $in_creditor_rec_id, $in_supplier_warehouse_rec_id, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $unit_inc_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $line_details, $custom_field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDELETERequestGRNIDLinesLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **quantity_delivered** | **double**|  | [optional]
 **order_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_line_id** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **grn_line_type** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **classification_id** | **string**|  | [optional]
 **classification_description** | **string**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **tax_id** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **purchasing_classification_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **posted_to_wip** | **bool**|  | [optional]
 **job_charge** | **double**|  | [optional]
 **use_serial_no** | **bool**|  | [optional]
 **fx_cost** | **double**|  | [optional]
 **physical_item** | **bool**|  | [optional]
 **inventory_expected_liability_ledger_account_id** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_no** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_id** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_no** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_description** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_id** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_no** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_description** | **string**|  | [optional]
 **inventory_value_ledger_account_id** | **string**|  | [optional]
 **inventory_value_ledger_account_no** | **string**|  | [optional]
 **inventory_value_ledger_account_description** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_id** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_no** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_wip_ledger_account_id** | **string**|  | [optional]
 **inventory_wip_ledger_account_no** | **string**|  | [optional]
 **inventory_wip_ledger_account_description** | **string**|  | [optional]
 **po_line_last_saved_date_time** | **\DateTime**|  | [optional]
 **order_units** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **in_creditor_rec_id** | **string**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_cost_centre_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **unit_inc_tax** | **double**|  | [optional]
 **line_total_inc_tax** | **double**|  | [optional]
 **fx_line_total_ex_tax** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_decimal_places** | **int**|  | [optional]
 **use_expiry_date** | **bool**|  | [optional]
 **line_details** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDetailDELETERequestGRNIDLinesLineIDLineDetailsLineDetailIDDelete**
> \Jiwa\JiwaModel\Object goodsReceivedNoteLineDetailDELETERequestGRNIDLinesLineIDLineDetailsLineDetailIDDelete($accept, $grnid, $line_id, $line_detail_id, $jiwa_stateful)

Deletes a goods received note line detail.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$line_detail_id = "line_detail_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteLineDetailDELETERequestGRNIDLinesLineIDLineDetailsLineDetailIDDelete($accept, $grnid, $line_id, $line_detail_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDetailDELETERequestGRNIDLinesLineIDLineDetailsLineDetailIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **line_detail_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDetailGETRequestGRNIDLinesLineIDLineDetailsLineDetailIDGet**
> \Jiwa\JiwaModel\GoodsReceivedNoteLineDetail goodsReceivedNoteLineDetailGETRequestGRNIDLinesLineIDLineDetailsLineDetailIDGet($accept, $grnid, $line_id, $line_detail_id, $jiwa_stateful)

Retrieves a goods received note line detail.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$line_detail_id = "line_detail_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteLineDetailGETRequestGRNIDLinesLineIDLineDetailsLineDetailIDGet($accept, $grnid, $line_id, $line_detail_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDetailGETRequestGRNIDLinesLineIDLineDetailsLineDetailIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **line_detail_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetail**](../Model/GoodsReceivedNoteLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDetailPATCHRequestGRNIDLinesLineIDLineDetailsLineDetailIDUpdate**
> \Jiwa\JiwaModel\GoodsReceivedNoteLineDetail goodsReceivedNoteLineDetailPATCHRequestGRNIDLinesLineIDLineDetailsLineDetailIDUpdate($accept, $grnid, $line_id, $line_detail_id, $jiwa_stateful, $link_id, $quantity, $last_saved_date_time, $serial_no, $bin_location_id, $bin_location_description, $expiry_date, $body)

Updates a goods received note line detail.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$line_detail_id = "line_detail_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$link_id = "link_id_example"; // string | 
$quantity = 1.2; // double | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$serial_no = "serial_no_example"; // string | 
$bin_location_id = "bin_location_id_example"; // string | 
$bin_location_description = "bin_location_description_example"; // string | 
$expiry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPATCHRequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPATCHRequest | 

try {
    $result = $apiInstance->goodsReceivedNoteLineDetailPATCHRequestGRNIDLinesLineIDLineDetailsLineDetailIDUpdate($accept, $grnid, $line_id, $line_detail_id, $jiwa_stateful, $link_id, $quantity, $last_saved_date_time, $serial_no, $bin_location_id, $bin_location_description, $expiry_date, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDetailPATCHRequestGRNIDLinesLineIDLineDetailsLineDetailIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **line_detail_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **link_id** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **serial_no** | **string**|  | [optional]
 **bin_location_id** | **string**|  | [optional]
 **bin_location_description** | **string**|  | [optional]
 **expiry_date** | **\DateTime**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPATCHRequest**](../Model/GoodsReceivedNoteLineDetailPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetail**](../Model/GoodsReceivedNoteLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDetailPOSTRequestGRNIDLinesLineIDLineDetailsPost**
> \Jiwa\JiwaModel\GoodsReceivedNoteLineDetail goodsReceivedNoteLineDetailPOSTRequestGRNIDLinesLineIDLineDetailsPost($accept, $grnid, $line_id, $jiwa_stateful, $link_id, $quantity, $last_saved_date_time, $serial_no, $bin_location_id, $bin_location_description, $expiry_date, $body)

Appends a line detail to a goods received note line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$link_id = "link_id_example"; // string | 
$quantity = 1.2; // double | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$serial_no = "serial_no_example"; // string | 
$bin_location_id = "bin_location_id_example"; // string | 
$bin_location_description = "bin_location_description_example"; // string | 
$expiry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPOSTRequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPOSTRequest | 

try {
    $result = $apiInstance->goodsReceivedNoteLineDetailPOSTRequestGRNIDLinesLineIDLineDetailsPost($accept, $grnid, $line_id, $jiwa_stateful, $link_id, $quantity, $last_saved_date_time, $serial_no, $bin_location_id, $bin_location_description, $expiry_date, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDetailPOSTRequestGRNIDLinesLineIDLineDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **link_id** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **serial_no** | **string**|  | [optional]
 **bin_location_id** | **string**|  | [optional]
 **bin_location_description** | **string**|  | [optional]
 **expiry_date** | **\DateTime**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPOSTRequest**](../Model/GoodsReceivedNoteLineDetailPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetail**](../Model/GoodsReceivedNoteLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDetailPUTRequestGRNIDLinesLineIDLineDetailsCreate**
> \Jiwa\JiwaModel\GoodsReceivedNoteLineDetail[] goodsReceivedNoteLineDetailPUTRequestGRNIDLinesLineIDLineDetailsCreate($accept, $grnid, $line_id, $jiwa_stateful, $capacity, $count, $item, $body)

Sets the line details for a goods received note line. Existing line details for that line will be replaced.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$capacity = 56; // int | 
$count = 56; // int | 
$item = "item_example"; // string | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPUTRequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPUTRequest | 

try {
    $result = $apiInstance->goodsReceivedNoteLineDetailPUTRequestGRNIDLinesLineIDLineDetailsCreate($accept, $grnid, $line_id, $jiwa_stateful, $capacity, $count, $item, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDetailPUTRequestGRNIDLinesLineIDLineDetailsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **capacity** | **int**|  | [optional]
 **count** | **int**|  | [optional]
 **item** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetailPUTRequest**](../Model/GoodsReceivedNoteLineDetailPUTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetail[]**](../Model/GoodsReceivedNoteLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineDetailsGETManyRequestGRNIDLinesLineIDLineDetailsGet**
> \Jiwa\JiwaModel\GoodsReceivedNoteLineDetail[] goodsReceivedNoteLineDetailsGETManyRequestGRNIDLinesLineIDLineDetailsGet($accept, $grnid, $line_id, $jiwa_stateful)

Retrieves a list of line details for a goods received note line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteLineDetailsGETManyRequestGRNIDLinesLineIDLineDetailsGet($accept, $grnid, $line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineDetailsGETManyRequestGRNIDLinesLineIDLineDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLineDetail[]**](../Model/GoodsReceivedNoteLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLineGETRequestGRNIDLinesLineIDGet**
> \Jiwa\JiwaModel\GoodsReceivedNoteLine goodsReceivedNoteLineGETRequestGRNIDLinesLineIDGet($accept, $grnid, $line_id, $jiwa_stateful)

Retrieves a goods received note line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteLineGETRequestGRNIDLinesLineIDGet($accept, $grnid, $line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLineGETRequestGRNIDLinesLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLine**](../Model/GoodsReceivedNoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLinePATCHRequestGRNIDLinesLineIDUpdate**
> \Jiwa\JiwaModel\GoodsReceivedNoteLine goodsReceivedNoteLinePATCHRequestGRNIDLinesLineIDUpdate($accept, $grnid, $line_id, $jiwa_stateful, $quantity_ordered, $quantity_delivered, $order_id, $order_no, $order_line_id, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $grn_line_type, $quantity_decimal_places, $last_saved_date_time, $classification_id, $classification_description, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $posted_to_wip, $job_charge, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_wip_ledger_account_id, $inventory_wip_ledger_account_no, $inventory_wip_ledger_account_description, $po_line_last_saved_date_time, $order_units, $item_no, $in_creditor_rec_id, $in_supplier_warehouse_rec_id, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $unit_inc_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $line_details, $custom_field_values, $body)

Updates a line for a goods received note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$quantity_ordered = 1.2; // double | 
$quantity_delivered = 1.2; // double | 
$order_id = "order_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_line_id = "order_line_id_example"; // string | 
$quantity = 1.2; // double | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$aux2 = "aux2_example"; // string | 
$description = "description_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$grn_line_type = "grn_line_type_example"; // string | 
$quantity_decimal_places = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$classification_id = "classification_id_example"; // string | 
$classification_description = "classification_description_example"; // string | 
$tax_amount = 1.2; // double | 
$tax_id = "tax_id_example"; // string | 
$tax_rate = 1.2; // double | 
$cost = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$purchasing_classification_id = "purchasing_classification_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$posted_to_wip = true; // bool | 
$job_charge = 1.2; // double | 
$use_serial_no = true; // bool | 
$fx_cost = 1.2; // double | 
$physical_item = true; // bool | 
$inventory_expected_liability_ledger_account_id = "inventory_expected_liability_ledger_account_id_example"; // string | 
$inventory_expected_liability_ledger_account_no = "inventory_expected_liability_ledger_account_no_example"; // string | 
$inventory_expected_liability_ledger_account_description = "inventory_expected_liability_ledger_account_description_example"; // string | 
$inventory_expected_asset_ledger_account_id = "inventory_expected_asset_ledger_account_id_example"; // string | 
$inventory_expected_asset_ledger_account_no = "inventory_expected_asset_ledger_account_no_example"; // string | 
$inventory_expected_asset_ledger_account_description = "inventory_expected_asset_ledger_account_description_example"; // string | 
$inventory_delivered_asset_ledger_account_id = "inventory_delivered_asset_ledger_account_id_example"; // string | 
$inventory_delivered_asset_ledger_account_no = "inventory_delivered_asset_ledger_account_no_example"; // string | 
$inventory_delivered_asset_ledger_account_description = "inventory_delivered_asset_ledger_account_description_example"; // string | 
$inventory_value_ledger_account_id = "inventory_value_ledger_account_id_example"; // string | 
$inventory_value_ledger_account_no = "inventory_value_ledger_account_no_example"; // string | 
$inventory_value_ledger_account_description = "inventory_value_ledger_account_description_example"; // string | 
$inventory_delivered_liability_ledger_account_id = "inventory_delivered_liability_ledger_account_id_example"; // string | 
$inventory_delivered_liability_ledger_account_no = "inventory_delivered_liability_ledger_account_no_example"; // string | 
$inventory_delivered_liability_ledger_account_description = "inventory_delivered_liability_ledger_account_description_example"; // string | 
$inventory_wip_ledger_account_id = "inventory_wip_ledger_account_id_example"; // string | 
$inventory_wip_ledger_account_no = "inventory_wip_ledger_account_no_example"; // string | 
$inventory_wip_ledger_account_description = "inventory_wip_ledger_account_description_example"; // string | 
$po_line_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$order_units = 1.2; // double | 
$item_no = 56; // int | 
$in_creditor_rec_id = "in_creditor_rec_id_example"; // string | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_cost_centre_id = "job_costing_cost_centre_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_id = "job_costing_job_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$unit_inc_tax = 1.2; // double | 
$line_total_inc_tax = 1.2; // double | 
$fx_line_total_ex_tax = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_decimal_places = 56; // int | 
$use_expiry_date = true; // bool | 
$line_details = "line_details_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteLinePATCHRequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteLinePATCHRequest | 

try {
    $result = $apiInstance->goodsReceivedNoteLinePATCHRequestGRNIDLinesLineIDUpdate($accept, $grnid, $line_id, $jiwa_stateful, $quantity_ordered, $quantity_delivered, $order_id, $order_no, $order_line_id, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $grn_line_type, $quantity_decimal_places, $last_saved_date_time, $classification_id, $classification_description, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $posted_to_wip, $job_charge, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_wip_ledger_account_id, $inventory_wip_ledger_account_no, $inventory_wip_ledger_account_description, $po_line_last_saved_date_time, $order_units, $item_no, $in_creditor_rec_id, $in_supplier_warehouse_rec_id, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $unit_inc_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $line_details, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLinePATCHRequestGRNIDLinesLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **quantity_delivered** | **double**|  | [optional]
 **order_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_line_id** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **grn_line_type** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **classification_id** | **string**|  | [optional]
 **classification_description** | **string**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **tax_id** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **purchasing_classification_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **posted_to_wip** | **bool**|  | [optional]
 **job_charge** | **double**|  | [optional]
 **use_serial_no** | **bool**|  | [optional]
 **fx_cost** | **double**|  | [optional]
 **physical_item** | **bool**|  | [optional]
 **inventory_expected_liability_ledger_account_id** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_no** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_id** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_no** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_description** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_id** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_no** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_description** | **string**|  | [optional]
 **inventory_value_ledger_account_id** | **string**|  | [optional]
 **inventory_value_ledger_account_no** | **string**|  | [optional]
 **inventory_value_ledger_account_description** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_id** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_no** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_wip_ledger_account_id** | **string**|  | [optional]
 **inventory_wip_ledger_account_no** | **string**|  | [optional]
 **inventory_wip_ledger_account_description** | **string**|  | [optional]
 **po_line_last_saved_date_time** | **\DateTime**|  | [optional]
 **order_units** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **in_creditor_rec_id** | **string**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_cost_centre_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **unit_inc_tax** | **double**|  | [optional]
 **line_total_inc_tax** | **double**|  | [optional]
 **fx_line_total_ex_tax** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_decimal_places** | **int**|  | [optional]
 **use_expiry_date** | **bool**|  | [optional]
 **line_details** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteLinePATCHRequest**](../Model/GoodsReceivedNoteLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLine**](../Model/GoodsReceivedNoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLinePOSTRequestGRNIDLinesPost**
> \Jiwa\JiwaModel\GoodsReceivedNoteLine goodsReceivedNoteLinePOSTRequestGRNIDLinesPost($accept, $grnid, $jiwa_stateful, $quantity_ordered, $quantity_delivered, $order_id, $order_no, $order_line_id, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $grn_line_type, $quantity_decimal_places, $last_saved_date_time, $classification_id, $classification_description, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $posted_to_wip, $job_charge, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_wip_ledger_account_id, $inventory_wip_ledger_account_no, $inventory_wip_ledger_account_description, $po_line_last_saved_date_time, $order_units, $item_no, $in_creditor_rec_id, $in_supplier_warehouse_rec_id, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $unit_inc_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $line_details, $custom_field_values, $body)

Appends a line to a goods received note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$quantity_ordered = 1.2; // double | 
$quantity_delivered = 1.2; // double | 
$order_id = "order_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_line_id = "order_line_id_example"; // string | 
$quantity = 1.2; // double | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$aux2 = "aux2_example"; // string | 
$description = "description_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$grn_line_type = "grn_line_type_example"; // string | 
$quantity_decimal_places = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$classification_id = "classification_id_example"; // string | 
$classification_description = "classification_description_example"; // string | 
$tax_amount = 1.2; // double | 
$tax_id = "tax_id_example"; // string | 
$tax_rate = 1.2; // double | 
$cost = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$purchasing_classification_id = "purchasing_classification_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$posted_to_wip = true; // bool | 
$job_charge = 1.2; // double | 
$use_serial_no = true; // bool | 
$fx_cost = 1.2; // double | 
$physical_item = true; // bool | 
$inventory_expected_liability_ledger_account_id = "inventory_expected_liability_ledger_account_id_example"; // string | 
$inventory_expected_liability_ledger_account_no = "inventory_expected_liability_ledger_account_no_example"; // string | 
$inventory_expected_liability_ledger_account_description = "inventory_expected_liability_ledger_account_description_example"; // string | 
$inventory_expected_asset_ledger_account_id = "inventory_expected_asset_ledger_account_id_example"; // string | 
$inventory_expected_asset_ledger_account_no = "inventory_expected_asset_ledger_account_no_example"; // string | 
$inventory_expected_asset_ledger_account_description = "inventory_expected_asset_ledger_account_description_example"; // string | 
$inventory_delivered_asset_ledger_account_id = "inventory_delivered_asset_ledger_account_id_example"; // string | 
$inventory_delivered_asset_ledger_account_no = "inventory_delivered_asset_ledger_account_no_example"; // string | 
$inventory_delivered_asset_ledger_account_description = "inventory_delivered_asset_ledger_account_description_example"; // string | 
$inventory_value_ledger_account_id = "inventory_value_ledger_account_id_example"; // string | 
$inventory_value_ledger_account_no = "inventory_value_ledger_account_no_example"; // string | 
$inventory_value_ledger_account_description = "inventory_value_ledger_account_description_example"; // string | 
$inventory_delivered_liability_ledger_account_id = "inventory_delivered_liability_ledger_account_id_example"; // string | 
$inventory_delivered_liability_ledger_account_no = "inventory_delivered_liability_ledger_account_no_example"; // string | 
$inventory_delivered_liability_ledger_account_description = "inventory_delivered_liability_ledger_account_description_example"; // string | 
$inventory_wip_ledger_account_id = "inventory_wip_ledger_account_id_example"; // string | 
$inventory_wip_ledger_account_no = "inventory_wip_ledger_account_no_example"; // string | 
$inventory_wip_ledger_account_description = "inventory_wip_ledger_account_description_example"; // string | 
$po_line_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$order_units = 1.2; // double | 
$item_no = 56; // int | 
$in_creditor_rec_id = "in_creditor_rec_id_example"; // string | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_cost_centre_id = "job_costing_cost_centre_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_id = "job_costing_job_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$unit_inc_tax = 1.2; // double | 
$line_total_inc_tax = 1.2; // double | 
$fx_line_total_ex_tax = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_decimal_places = 56; // int | 
$use_expiry_date = true; // bool | 
$line_details = "line_details_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNoteLinePOSTRequest(); // \Jiwa\JiwaModel\GoodsReceivedNoteLinePOSTRequest | 

try {
    $result = $apiInstance->goodsReceivedNoteLinePOSTRequestGRNIDLinesPost($accept, $grnid, $jiwa_stateful, $quantity_ordered, $quantity_delivered, $order_id, $order_no, $order_line_id, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $grn_line_type, $quantity_decimal_places, $last_saved_date_time, $classification_id, $classification_description, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $posted_to_wip, $job_charge, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_wip_ledger_account_id, $inventory_wip_ledger_account_no, $inventory_wip_ledger_account_description, $po_line_last_saved_date_time, $order_units, $item_no, $in_creditor_rec_id, $in_supplier_warehouse_rec_id, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $unit_inc_tax, $line_total_inc_tax, $fx_line_total_ex_tax, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $line_details, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLinePOSTRequestGRNIDLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **quantity_delivered** | **double**|  | [optional]
 **order_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_line_id** | **string**|  | [optional]
 **quantity** | **double**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **grn_line_type** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **classification_id** | **string**|  | [optional]
 **classification_description** | **string**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **tax_id** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **purchasing_classification_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **posted_to_wip** | **bool**|  | [optional]
 **job_charge** | **double**|  | [optional]
 **use_serial_no** | **bool**|  | [optional]
 **fx_cost** | **double**|  | [optional]
 **physical_item** | **bool**|  | [optional]
 **inventory_expected_liability_ledger_account_id** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_no** | **string**|  | [optional]
 **inventory_expected_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_id** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_no** | **string**|  | [optional]
 **inventory_expected_asset_ledger_account_description** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_id** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_no** | **string**|  | [optional]
 **inventory_delivered_asset_ledger_account_description** | **string**|  | [optional]
 **inventory_value_ledger_account_id** | **string**|  | [optional]
 **inventory_value_ledger_account_no** | **string**|  | [optional]
 **inventory_value_ledger_account_description** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_id** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_no** | **string**|  | [optional]
 **inventory_delivered_liability_ledger_account_description** | **string**|  | [optional]
 **inventory_wip_ledger_account_id** | **string**|  | [optional]
 **inventory_wip_ledger_account_no** | **string**|  | [optional]
 **inventory_wip_ledger_account_description** | **string**|  | [optional]
 **po_line_last_saved_date_time** | **\DateTime**|  | [optional]
 **order_units** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **in_creditor_rec_id** | **string**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_cost_centre_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **unit_inc_tax** | **double**|  | [optional]
 **line_total_inc_tax** | **double**|  | [optional]
 **fx_line_total_ex_tax** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_decimal_places** | **int**|  | [optional]
 **use_expiry_date** | **bool**|  | [optional]
 **line_details** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNoteLinePOSTRequest**](../Model/GoodsReceivedNoteLinePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLine**](../Model/GoodsReceivedNoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteLinesGETManyRequestGRNIDLinesGet**
> \Jiwa\JiwaModel\GoodsReceivedNoteLine[] goodsReceivedNoteLinesGETManyRequestGRNIDLinesGet($accept, $grnid, $jiwa_stateful)

Retrieves a list of goods received note lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNoteLinesGETManyRequestGRNIDLinesGet($accept, $grnid, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteLinesGETManyRequestGRNIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNoteLine[]**](../Model/GoodsReceivedNoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNotePATCHRequestGRNIDUpdate**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNotePATCHRequestGRNIDUpdate($accept, $grnid, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $last_saved_date_time, $slip_no, $slip_date, $status, $freight, $duty, $invoiced, $pi_main_id, $insurance, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $reference, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $inventory_total_quantity, $inventory_total_quantity_decimal_places, $lines, $purchase_orders, $custom_field_values, $body)

Updates a GRN.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$slip_no = "slip_no_example"; // string | 
$slip_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$freight = 1.2; // double | 
$duty = 1.2; // double | 
$invoiced = true; // bool | 
$pi_main_id = "pi_main_id_example"; // string | 
$insurance = 1.2; // double | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$tax_total = 1.2; // double | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight_tax_rate = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty_tax_rate = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance_tax_rate = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$reference = "reference_example"; // string | 
$total_gross = 1.2; // double | 
$total_net = 1.2; // double | 
$total_fx = 1.2; // double | 
$freight_inc = 1.2; // double | 
$duty_inc = 1.2; // double | 
$insurance_inc = 1.2; // double | 
$inventory_total_quantity = 1.2; // double | 
$inventory_total_quantity_decimal_places = 1.2; // double | 
$lines = "lines_example"; // string | 
$purchase_orders = "purchase_orders_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNotePATCHRequest(); // \Jiwa\JiwaModel\GoodsReceivedNotePATCHRequest | 

try {
    $result = $apiInstance->goodsReceivedNotePATCHRequestGRNIDUpdate($accept, $grnid, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $last_saved_date_time, $slip_no, $slip_date, $status, $freight, $duty, $invoiced, $pi_main_id, $insurance, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $reference, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $inventory_total_quantity, $inventory_total_quantity_decimal_places, $lines, $purchase_orders, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNotePATCHRequestGRNIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **slip_no** | **string**|  | [optional]
 **slip_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **duty** | **double**|  | [optional]
 **invoiced** | **bool**|  | [optional]
 **pi_main_id** | **string**|  | [optional]
 **insurance** | **double**|  | [optional]
 **logical_warehouse_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **tax_total** | **double**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight_tax_rate** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty_tax_rate** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance_tax_rate** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **reference** | **string**|  | [optional]
 **total_gross** | **double**|  | [optional]
 **total_net** | **double**|  | [optional]
 **total_fx** | **double**|  | [optional]
 **freight_inc** | **double**|  | [optional]
 **duty_inc** | **double**|  | [optional]
 **insurance_inc** | **double**|  | [optional]
 **inventory_total_quantity** | **double**|  | [optional]
 **inventory_total_quantity_decimal_places** | **double**|  | [optional]
 **lines** | **string**|  | [optional]
 **purchase_orders** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNotePATCHRequest**](../Model/GoodsReceivedNotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNotePOSTRequestPost**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNotePOSTRequestPost($accept, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $slip_no, $slip_date, $status, $freight, $duty, $invoiced, $pi_main_id, $insurance, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $reference, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $inventory_total_quantity, $inventory_total_quantity_decimal_places, $lines, $purchase_orders, $custom_field_values, $body)

Creates a GRN.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$slip_no = "slip_no_example"; // string | 
$slip_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$freight = 1.2; // double | 
$duty = 1.2; // double | 
$invoiced = true; // bool | 
$pi_main_id = "pi_main_id_example"; // string | 
$insurance = 1.2; // double | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$tax_total = 1.2; // double | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight_tax_rate = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty_tax_rate = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance_tax_rate = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$reference = "reference_example"; // string | 
$total_gross = 1.2; // double | 
$total_net = 1.2; // double | 
$total_fx = 1.2; // double | 
$freight_inc = 1.2; // double | 
$duty_inc = 1.2; // double | 
$insurance_inc = 1.2; // double | 
$inventory_total_quantity = 1.2; // double | 
$inventory_total_quantity_decimal_places = 1.2; // double | 
$lines = "lines_example"; // string | 
$purchase_orders = "purchase_orders_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNotePOSTRequest(); // \Jiwa\JiwaModel\GoodsReceivedNotePOSTRequest | 

try {
    $result = $apiInstance->goodsReceivedNotePOSTRequestPost($accept, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $slip_no, $slip_date, $status, $freight, $duty, $invoiced, $pi_main_id, $insurance, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $reference, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $inventory_total_quantity, $inventory_total_quantity_decimal_places, $lines, $purchase_orders, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNotePOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **slip_no** | **string**|  | [optional]
 **slip_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **duty** | **double**|  | [optional]
 **invoiced** | **bool**|  | [optional]
 **pi_main_id** | **string**|  | [optional]
 **insurance** | **double**|  | [optional]
 **logical_warehouse_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **tax_total** | **double**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight_tax_rate** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty_tax_rate** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance_tax_rate** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **reference** | **string**|  | [optional]
 **total_gross** | **double**|  | [optional]
 **total_net** | **double**|  | [optional]
 **total_fx** | **double**|  | [optional]
 **freight_inc** | **double**|  | [optional]
 **duty_inc** | **double**|  | [optional]
 **insurance_inc** | **double**|  | [optional]
 **inventory_total_quantity** | **double**|  | [optional]
 **inventory_total_quantity_decimal_places** | **double**|  | [optional]
 **lines** | **string**|  | [optional]
 **purchase_orders** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNotePOSTRequest**](../Model/GoodsReceivedNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNotePurchaseOrderDELETERequestGRNIDPurchaseOrdersOrderIDDelete**
> \Jiwa\JiwaModel\Object goodsReceivedNotePurchaseOrderDELETERequestGRNIDPurchaseOrdersOrderIDDelete($accept, $grnid, $order_id, $jiwa_stateful, $purchase_order_received_id, $order_no, $order_type, $ordered_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount)

Deletes a purchase order from a goods received note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$order_id = "order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$purchase_order_received_id = "purchase_order_received_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_type = "order_type_example"; // string | 
$ordered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 

try {
    $result = $apiInstance->goodsReceivedNotePurchaseOrderDELETERequestGRNIDPurchaseOrdersOrderIDDelete($accept, $grnid, $order_id, $jiwa_stateful, $purchase_order_received_id, $order_no, $order_type, $ordered_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNotePurchaseOrderDELETERequestGRNIDPurchaseOrdersOrderIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **purchase_order_received_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **ordered_date** | **\DateTime**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNotePurchaseOrderGETRequestGRNIDPurchaseOrdersOrderIDGet**
> \Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived goodsReceivedNotePurchaseOrderGETRequestGRNIDPurchaseOrdersOrderIDGet($accept, $grnid, $order_id, $jiwa_stateful)

Retrieves a goods received note purchase order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$order_id = "order_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNotePurchaseOrderGETRequestGRNIDPurchaseOrdersOrderIDGet($accept, $grnid, $order_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNotePurchaseOrderGETRequestGRNIDPurchaseOrdersOrderIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **order_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived**](../Model/GoodsReceivedNotePurchaseOrderReceived.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNotePurchaseOrderPOSTRequestGRNIDPurchaseOrdersPost**
> \Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived goodsReceivedNotePurchaseOrderPOSTRequestGRNIDPurchaseOrdersPost($accept, $grnid, $jiwa_stateful, $order_id, $purchase_order_received_id, $order_no, $order_type, $ordered_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount, $body)

Appends a purchase order to a goods received note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$order_id = "order_id_example"; // string | 
$purchase_order_received_id = "purchase_order_received_id_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_type = "order_type_example"; // string | 
$ordered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$body = new \Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderPOSTRequest(); // \Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderPOSTRequest | 

try {
    $result = $apiInstance->goodsReceivedNotePurchaseOrderPOSTRequestGRNIDPurchaseOrdersPost($accept, $grnid, $jiwa_stateful, $order_id, $purchase_order_received_id, $order_no, $order_type, $ordered_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNotePurchaseOrderPOSTRequestGRNIDPurchaseOrdersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **order_id** | **string**|  | [optional]
 **purchase_order_received_id** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **ordered_date** | **\DateTime**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderPOSTRequest**](../Model/GoodsReceivedNotePurchaseOrderPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived**](../Model/GoodsReceivedNotePurchaseOrderReceived.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNotePurchaseOrdersGETManyRequestGRNIDPurchaseOrdersGet**
> \Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived[] goodsReceivedNotePurchaseOrdersGETManyRequestGRNIDPurchaseOrdersGet($accept, $grnid, $jiwa_stateful)

Retrieves a list of goods received note purchase orders.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->goodsReceivedNotePurchaseOrdersGETManyRequestGRNIDPurchaseOrdersGet($accept, $grnid, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNotePurchaseOrdersGETManyRequestGRNIDPurchaseOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived[]**](../Model/GoodsReceivedNotePurchaseOrderReceived.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **goodsReceivedNoteSAVERequestSaveGet**
> \Jiwa\JiwaModel\GoodsReceivedNote goodsReceivedNoteSAVERequestSaveGet($accept, $jiwa_stateful, $grnid)

Saves a stateful stateful goods received note.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful goods received note item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\GoodsReceivedNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$grnid = "grnid_example"; // string | 

try {
    $result = $apiInstance->goodsReceivedNoteSAVERequestSaveGet($accept, $jiwa_stateful, $grnid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GoodsReceivedNotesApi->goodsReceivedNoteSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **grnid** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\GoodsReceivedNote**](../Model/GoodsReceivedNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

