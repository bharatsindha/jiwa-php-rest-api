# Jiwa\StockTransfersApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stockTransferDELETERequestTransferIDDelete**](StockTransfersApi.md#stockTransferDELETERequestTransferIDDelete) | **DELETE** /StockTransfers/{TransferID} | Deletes a stock transfer.
[**stockTransferGETRequestTransferIDGet**](StockTransfersApi.md#stockTransferGETRequestTransferIDGet) | **GET** /StockTransfers/{TransferID} | Retrieves a stock transfer.
[**stockTransferPOSTRequestPost**](StockTransfersApi.md#stockTransferPOSTRequestPost) | **POST** /StockTransfers/ | Creates a stock transfer.


# **stockTransferDELETERequestTransferIDDelete**
> \Jiwa\JiwaModel\Object stockTransferDELETERequestTransferIDDelete($accept, $transfer_id, $jiwa_stateful)

Deletes a stock transfer.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$transfer_id = "transfer_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->stockTransferDELETERequestTransferIDDelete($accept, $transfer_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->stockTransferDELETERequestTransferIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **transfer_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stockTransferGETRequestTransferIDGet**
> \Jiwa\JiwaModel\StockTransfer stockTransferGETRequestTransferIDGet($accept, $transfer_id, $jiwa_stateful)

Retrieves a stock transfer.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$transfer_id = "transfer_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->stockTransferGETRequestTransferIDGet($accept, $transfer_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->stockTransferGETRequestTransferIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **transfer_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\StockTransfer**](../Model/StockTransfer.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stockTransferPOSTRequestPost**
> \Jiwa\JiwaModel\StockTransfer stockTransferPOSTRequestPost($accept, $jiwa_stateful, $transfer_no, $status, $transfer_date, $reference, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $last_saved_by_staff_id, $last_saved_by_staff_user_name, $last_saved_by_staff_title, $last_saved_by_staff_first_name, $last_saved_by_staff_surname, $last_saved_date_time, $created_by_staff_id, $created_by_staff_user_name, $created_by_staff_title, $created_by_staff_first_name, $created_by_staff_surname, $created_date_time, $lines, $notes, $documents, $custom_field_values, $stock_transfer_reason_rec_id, $stock_transfer_reason_name, $stock_transfer_reason_is_default, $stock_transfer_reason_write_off_ledger_account_override, $stock_transfer_reason_write_off_ledger_account_rec_id, $stock_transfer_reason_write_off_ledger_account_no, $stock_transfer_reason_write_off_ledger_account_description, $stock_transfer_reason_write_on_ledger_account_override, $stock_transfer_reason_write_on_ledger_account_rec_id, $stock_transfer_reason_write_on_ledger_account_no, $stock_transfer_reason_write_on_ledger_account_description, $body)

Creates a stock transfer.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\StockTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$transfer_no = "transfer_no_example"; // string | 
$status = "status_example"; // string | 
$transfer_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$reference = "reference_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$last_saved_by_staff_id = "last_saved_by_staff_id_example"; // string | 
$last_saved_by_staff_user_name = "last_saved_by_staff_user_name_example"; // string | 
$last_saved_by_staff_title = "last_saved_by_staff_title_example"; // string | 
$last_saved_by_staff_first_name = "last_saved_by_staff_first_name_example"; // string | 
$last_saved_by_staff_surname = "last_saved_by_staff_surname_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_by_staff_id = "created_by_staff_id_example"; // string | 
$created_by_staff_user_name = "created_by_staff_user_name_example"; // string | 
$created_by_staff_title = "created_by_staff_title_example"; // string | 
$created_by_staff_first_name = "created_by_staff_first_name_example"; // string | 
$created_by_staff_surname = "created_by_staff_surname_example"; // string | 
$created_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$lines = "lines_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$stock_transfer_reason_rec_id = "stock_transfer_reason_rec_id_example"; // string | 
$stock_transfer_reason_name = "stock_transfer_reason_name_example"; // string | 
$stock_transfer_reason_is_default = true; // bool | 
$stock_transfer_reason_write_off_ledger_account_override = true; // bool | 
$stock_transfer_reason_write_off_ledger_account_rec_id = "stock_transfer_reason_write_off_ledger_account_rec_id_example"; // string | 
$stock_transfer_reason_write_off_ledger_account_no = "stock_transfer_reason_write_off_ledger_account_no_example"; // string | 
$stock_transfer_reason_write_off_ledger_account_description = "stock_transfer_reason_write_off_ledger_account_description_example"; // string | 
$stock_transfer_reason_write_on_ledger_account_override = true; // bool | 
$stock_transfer_reason_write_on_ledger_account_rec_id = "stock_transfer_reason_write_on_ledger_account_rec_id_example"; // string | 
$stock_transfer_reason_write_on_ledger_account_no = "stock_transfer_reason_write_on_ledger_account_no_example"; // string | 
$stock_transfer_reason_write_on_ledger_account_description = "stock_transfer_reason_write_on_ledger_account_description_example"; // string | 
$body = new \Jiwa\JiwaModel\StockTransferPOSTRequest(); // \Jiwa\JiwaModel\StockTransferPOSTRequest | 

try {
    $result = $apiInstance->stockTransferPOSTRequestPost($accept, $jiwa_stateful, $transfer_no, $status, $transfer_date, $reference, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $last_saved_by_staff_id, $last_saved_by_staff_user_name, $last_saved_by_staff_title, $last_saved_by_staff_first_name, $last_saved_by_staff_surname, $last_saved_date_time, $created_by_staff_id, $created_by_staff_user_name, $created_by_staff_title, $created_by_staff_first_name, $created_by_staff_surname, $created_date_time, $lines, $notes, $documents, $custom_field_values, $stock_transfer_reason_rec_id, $stock_transfer_reason_name, $stock_transfer_reason_is_default, $stock_transfer_reason_write_off_ledger_account_override, $stock_transfer_reason_write_off_ledger_account_rec_id, $stock_transfer_reason_write_off_ledger_account_no, $stock_transfer_reason_write_off_ledger_account_description, $stock_transfer_reason_write_on_ledger_account_override, $stock_transfer_reason_write_on_ledger_account_rec_id, $stock_transfer_reason_write_on_ledger_account_no, $stock_transfer_reason_write_on_ledger_account_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockTransfersApi->stockTransferPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **transfer_no** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **transfer_date** | **\DateTime**|  | [optional]
 **reference** | **string**|  | [optional]
 **logical_warehouse_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **last_saved_by_staff_id** | **string**|  | [optional]
 **last_saved_by_staff_user_name** | **string**|  | [optional]
 **last_saved_by_staff_title** | **string**|  | [optional]
 **last_saved_by_staff_first_name** | **string**|  | [optional]
 **last_saved_by_staff_surname** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **created_by_staff_id** | **string**|  | [optional]
 **created_by_staff_user_name** | **string**|  | [optional]
 **created_by_staff_title** | **string**|  | [optional]
 **created_by_staff_first_name** | **string**|  | [optional]
 **created_by_staff_surname** | **string**|  | [optional]
 **created_date_time** | **\DateTime**|  | [optional]
 **lines** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **stock_transfer_reason_rec_id** | **string**|  | [optional]
 **stock_transfer_reason_name** | **string**|  | [optional]
 **stock_transfer_reason_is_default** | **bool**|  | [optional]
 **stock_transfer_reason_write_off_ledger_account_override** | **bool**|  | [optional]
 **stock_transfer_reason_write_off_ledger_account_rec_id** | **string**|  | [optional]
 **stock_transfer_reason_write_off_ledger_account_no** | **string**|  | [optional]
 **stock_transfer_reason_write_off_ledger_account_description** | **string**|  | [optional]
 **stock_transfer_reason_write_on_ledger_account_override** | **bool**|  | [optional]
 **stock_transfer_reason_write_on_ledger_account_rec_id** | **string**|  | [optional]
 **stock_transfer_reason_write_on_ledger_account_no** | **string**|  | [optional]
 **stock_transfer_reason_write_on_ledger_account_description** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\StockTransferPOSTRequest**](../Model/StockTransferPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\StockTransfer**](../Model/StockTransfer.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

