# Jiwa\SalesOrdersApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderABANDONRequestInvoiceIDAbandonDelete**](SalesOrdersApi.md#salesOrderABANDONRequestInvoiceIDAbandonDelete) | **DELETE** /SalesOrders/{InvoiceID}/Abandon | Abandons a stateful sales order.
[**salesOrderCustomFieldValueGETRequestInvoiceIDCustomFieldValuesSettingIDGet**](SalesOrdersApi.md#salesOrderCustomFieldValueGETRequestInvoiceIDCustomFieldValuesSettingIDGet) | **GET** /SalesOrders/{InvoiceID}/CustomFieldValues/{SettingID} | Retrieves a sales order custom field value.
[**salesOrderCustomFieldValuePATCHRequestInvoiceIDCustomFieldValuesSettingIDUpdate**](SalesOrdersApi.md#salesOrderCustomFieldValuePATCHRequestInvoiceIDCustomFieldValuesSettingIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/CustomFieldValues/{SettingID} | Updates a sales order custom field value.
[**salesOrderCustomFieldValuesGETManyRequestInvoiceIDCustomFieldValuesGet**](SalesOrdersApi.md#salesOrderCustomFieldValuesGETManyRequestInvoiceIDCustomFieldValuesGet) | **GET** /SalesOrders/{InvoiceID}/CustomFieldValues | Retrieves a list of custom field values for a sales order.
[**salesOrderCustomFieldsGETManyRequestCustomFieldsGet**](SalesOrdersApi.md#salesOrderCustomFieldsGETManyRequestCustomFieldsGet) | **GET** /SalesOrders/CustomFields | Retrieves a list of sales order custom fields.
[**salesOrderDocumentDELETERequestInvoiceIDDocumentsDocumentIDDelete**](SalesOrdersApi.md#salesOrderDocumentDELETERequestInvoiceIDDocumentsDocumentIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Documents/{DocumentID} | Deletes a sales order document.
[**salesOrderDocumentGETRequestInvoiceIDDocumentsDocumentIDGet**](SalesOrdersApi.md#salesOrderDocumentGETRequestInvoiceIDDocumentsDocumentIDGet) | **GET** /SalesOrders/{InvoiceID}/Documents/{DocumentID} | Retrieves a sales order document.
[**salesOrderDocumentPATCHRequestInvoiceIDDocumentsDocumentIDUpdate**](SalesOrdersApi.md#salesOrderDocumentPATCHRequestInvoiceIDDocumentsDocumentIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Documents/{DocumentID} | Updates a sales order document.
[**salesOrderDocumentPOSTRequestInvoiceIDDocumentsPost**](SalesOrdersApi.md#salesOrderDocumentPOSTRequestInvoiceIDDocumentsPost) | **POST** /SalesOrders/{InvoiceID}/Documents | Appends a document to a sales order.
[**salesOrderDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**](SalesOrdersApi.md#salesOrderDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete) | **DELETE** /SalesOrders/DocumentTypes/{DocumentTypeID} | Deletes a sales order document type.
[**salesOrderDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**](SalesOrdersApi.md#salesOrderDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet) | **GET** /SalesOrders/DocumentTypes/{DocumentTypeID} | Retrieves a sales order document type.
[**salesOrderDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**](SalesOrdersApi.md#salesOrderDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate) | **PATCH** /SalesOrders/DocumentTypes/{DocumentTypeID} | Updates a sales order document type.
[**salesOrderDocumentTypePOSTRequestDocumentTypesPost**](SalesOrdersApi.md#salesOrderDocumentTypePOSTRequestDocumentTypesPost) | **POST** /SalesOrders/DocumentTypes | Creates a new sales order document type.
[**salesOrderDocumentTypesGETManyRequestDocumentTypesGet**](SalesOrdersApi.md#salesOrderDocumentTypesGETManyRequestDocumentTypesGet) | **GET** /SalesOrders/DocumentTypes | Retrieves a list of sales order document types.
[**salesOrderDocumentsGETManyRequestInvoiceIDDocumentsGet**](SalesOrdersApi.md#salesOrderDocumentsGETManyRequestInvoiceIDDocumentsGet) | **GET** /SalesOrders/{InvoiceID}/Documents | Retrieves a list of sales order documents.
[**salesOrderGETRequestInvoiceIDGet**](SalesOrdersApi.md#salesOrderGETRequestInvoiceIDGet) | **GET** /SalesOrders/{InvoiceID} | Retrieves a sales order.
[**salesOrderHistoryConsignmentNotesDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDDelete**](SalesOrdersApi.md#salesOrderHistoryConsignmentNotesDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/ConsignmentNotes/{ConsignmentNoteID} | Deletes a consignment note from a sales order history
[**salesOrderHistoryConsignmentNotesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesGet**](SalesOrdersApi.md#salesOrderHistoryConsignmentNotesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/ConsignmentNotes | Retrieves consignment notes for a sales order history.
[**salesOrderHistoryConsignmentNotesGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDGet**](SalesOrdersApi.md#salesOrderHistoryConsignmentNotesGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/ConsignmentNotes/{ConsignmentNoteID} | Retrieves a consignment note for a sales order history
[**salesOrderHistoryConsignmentNotesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDUpdate**](SalesOrdersApi.md#salesOrderHistoryConsignmentNotesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/ConsignmentNotes/{ConsignmentNoteID} | Updates a consignment note for a sales order history
[**salesOrderHistoryConsignmentNotesPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesPost**](SalesOrdersApi.md#salesOrderHistoryConsignmentNotesPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesPost) | **POST** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/ConsignmentNotes | Adds a consignment note to a sales order history
[**salesOrderHistoryCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesGet**](SalesOrdersApi.md#salesOrderHistoryCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/CustomFieldValues | Retrieves a list of custom field values for a sales order history.
[**salesOrderHistoryCustomFieldValuesGETRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDGet**](SalesOrdersApi.md#salesOrderHistoryCustomFieldValuesGETRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/CustomFieldValues/{SettingID} | Retrieves a sales order history custom field value.
[**salesOrderHistoryCustomFieldValuesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDUpdate**](SalesOrdersApi.md#salesOrderHistoryCustomFieldValuesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/CustomFieldValues/{SettingID} | Updates a sales order history custom field value.
[**salesOrderHistoryCustomFieldsGETManyRequestHistorysCustomFieldsGet**](SalesOrdersApi.md#salesOrderHistoryCustomFieldsGETManyRequestHistorysCustomFieldsGet) | **GET** /SalesOrders/Historys/CustomFields | Retrieves a list of sales order history custom fields.
[**salesOrderHistoryFreightItemsDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDDelete**](SalesOrdersApi.md#salesOrderHistoryFreightItemsDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/FreightItems/{FreightItemID} | Deletes a freight item from a sales order history
[**salesOrderHistoryFreightItemsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsGet**](SalesOrdersApi.md#salesOrderHistoryFreightItemsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/FreightItems | Retrieves freight items for a sales order history.
[**salesOrderHistoryFreightItemsGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDGet**](SalesOrdersApi.md#salesOrderHistoryFreightItemsGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/FreightItems/{FreightItemID} | Retrieves a freight item for a sales order history
[**salesOrderHistoryFreightItemsPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDUpdate**](SalesOrdersApi.md#salesOrderHistoryFreightItemsPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/FreightItems/{FreightItemID} | Updates a freight item for a sales order history
[**salesOrderHistoryFreightItemsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsPost**](SalesOrdersApi.md#salesOrderHistoryFreightItemsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsPost) | **POST** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Carrier/FreightItems | Adds a freight item to a sales order history
[**salesOrderHistorysGETManyRequestInvoiceIDHistorysGet**](SalesOrdersApi.md#salesOrderHistorysGETManyRequestInvoiceIDHistorysGet) | **GET** /SalesOrders/{InvoiceID}/Historys | Retrieves a list of sales order histories.
[**salesOrderHistorysGETRequestInvoiceIDHistorysInvoiceHistoryIDGet**](SalesOrdersApi.md#salesOrderHistorysGETRequestInvoiceIDHistorysInvoiceHistoryIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID} | Retrieves a sales order history.
[**salesOrderHistorysPATCHRequestInvoiceIDHistorysInvoiceHistoryIDUpdate**](SalesOrdersApi.md#salesOrderHistorysPATCHRequestInvoiceIDHistorysInvoiceHistoryIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID} | Updates a sales order history.
[**salesOrderLineCustomFieldValueGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDGet**](SalesOrdersApi.md#salesOrderLineCustomFieldValueGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/CustomFieldValues/{SettingID} | Retrieves a sales order line custom field value.
[**salesOrderLineCustomFieldValuePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDUpdate**](SalesOrdersApi.md#salesOrderLineCustomFieldValuePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/CustomFieldValues/{SettingID} | Updates a sales order line custom field value.
[**salesOrderLineCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesGet**](SalesOrdersApi.md#salesOrderLineCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/CustomFieldValues | Retrieves a list of custom field values for a sales order line.
[**salesOrderLineCustomFieldsGETManyRequestLinesCustomFieldsGet**](SalesOrdersApi.md#salesOrderLineCustomFieldsGETManyRequestLinesCustomFieldsGet) | **GET** /SalesOrders/Lines/CustomFields | Retrieves a list of sales order line custom fields.
[**salesOrderLineDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDDelete**](SalesOrdersApi.md#salesOrderLineDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID} | Deletes a sales order line.
[**salesOrderLineDetailDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDDelete**](SalesOrdersApi.md#salesOrderLineDetailDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/LineDetails/{DetailsLineID} | Deletes a sales order line detail.
[**salesOrderLineDetailGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDGet**](SalesOrdersApi.md#salesOrderLineDetailGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/LineDetails/{DetailsLineID} | Retrieves a sales order line detail.
[**salesOrderLineDetailPATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDUpdate**](SalesOrdersApi.md#salesOrderLineDetailPATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/LineDetails/{DetailsLineID} | Updates a sales order line detail.
[**salesOrderLineDetailPOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsPost**](SalesOrdersApi.md#salesOrderLineDetailPOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsPost) | **POST** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/LineDetails | Appends a line detail to a sales order.
[**salesOrderLineDetailsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsGet**](SalesOrdersApi.md#salesOrderLineDetailsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID}/LineDetails | Retrieves a list of line details for a sales order line.
[**salesOrderLineGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDGet**](SalesOrdersApi.md#salesOrderLineGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID} | Retrieves a sales order line.
[**salesOrderLinePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDUpdate**](SalesOrdersApi.md#salesOrderLinePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines/{InvoiceLineID} | Updates a sales order line.
[**salesOrderLinePOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesPost**](SalesOrdersApi.md#salesOrderLinePOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesPost) | **POST** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines | Appends a line to a sales order.
[**salesOrderLinesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesGet**](SalesOrdersApi.md#salesOrderLinesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesGet) | **GET** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Lines | Retrieves a list of sales order lines.
[**salesOrderNoteDELETERequestInvoiceIDNotesNoteIDDelete**](SalesOrdersApi.md#salesOrderNoteDELETERequestInvoiceIDNotesNoteIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Notes/{NoteID} | Deletes a sales order note.
[**salesOrderNoteGETRequestInvoiceIDNotesNoteIDGet**](SalesOrdersApi.md#salesOrderNoteGETRequestInvoiceIDNotesNoteIDGet) | **GET** /SalesOrders/{InvoiceID}/Notes/{NoteID} | Retrieves a sales order note.
[**salesOrderNotePATCHRequestInvoiceIDNotesNoteIDUpdate**](SalesOrdersApi.md#salesOrderNotePATCHRequestInvoiceIDNotesNoteIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Notes/{NoteID} | Updates a sales order note.
[**salesOrderNotePOSTRequestInvoiceIDNotesPost**](SalesOrdersApi.md#salesOrderNotePOSTRequestInvoiceIDNotesPost) | **POST** /SalesOrders/{InvoiceID}/Notes | Appends a note to a sales order.
[**salesOrderNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**](SalesOrdersApi.md#salesOrderNoteTypeDELETERequestNoteTypesNoteTypeIDDelete) | **DELETE** /SalesOrders/NoteTypes/{NoteTypeID} | Deletes a sales order note type.
[**salesOrderNoteTypeGETRequestNoteTypesNoteTypeIDGet**](SalesOrdersApi.md#salesOrderNoteTypeGETRequestNoteTypesNoteTypeIDGet) | **GET** /SalesOrders/NoteTypes/{NoteTypeID} | Retrieves a sales order note type.
[**salesOrderNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**](SalesOrdersApi.md#salesOrderNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate) | **PATCH** /SalesOrders/NoteTypes/{NoteTypeID} | Updates a sales order note type.
[**salesOrderNoteTypePOSTRequestNoteTypesPost**](SalesOrdersApi.md#salesOrderNoteTypePOSTRequestNoteTypesPost) | **POST** /SalesOrders/NoteTypes | Creates a new sales order note type.
[**salesOrderNoteTypesGETManyRequestNoteTypesGet**](SalesOrdersApi.md#salesOrderNoteTypesGETManyRequestNoteTypesGet) | **GET** /SalesOrders/NoteTypes | Retrieves a list of sales order note types.
[**salesOrderNotesGETManyRequestInvoiceIDNotesGet**](SalesOrdersApi.md#salesOrderNotesGETManyRequestInvoiceIDNotesGet) | **GET** /SalesOrders/{InvoiceID}/Notes | Retrieves a list of sales order notes.
[**salesOrderPATCHRequestInvoiceIDUpdate**](SalesOrdersApi.md#salesOrderPATCHRequestInvoiceIDUpdate) | **PATCH** /SalesOrders/{InvoiceID} | Updates a sales order.
[**salesOrderPOSTRequestPost**](SalesOrdersApi.md#salesOrderPOSTRequestPost) | **POST** /SalesOrders | Creates a new sales order.
[**salesOrderPROCESSRequestInvoiceIDProcessGet**](SalesOrdersApi.md#salesOrderPROCESSRequestInvoiceIDProcessGet) | **GET** /SalesOrders/{InvoiceID}/Process | Processes a sales order.
[**salesOrderPaymentTypesDELETERequestPaymentTypesPaymentTypeIDDelete**](SalesOrdersApi.md#salesOrderPaymentTypesDELETERequestPaymentTypesPaymentTypeIDDelete) | **DELETE** /SalesOrders/PaymentTypes/{PaymentTypeID} | Deletes a payment type
[**salesOrderPaymentTypesGETManyRequestPaymentTypesGet**](SalesOrdersApi.md#salesOrderPaymentTypesGETManyRequestPaymentTypesGet) | **GET** /SalesOrders/PaymentTypes | Retrieves a list of payment types
[**salesOrderPaymentTypesGETRequestPaymentTypesPaymentTypeIDGet**](SalesOrdersApi.md#salesOrderPaymentTypesGETRequestPaymentTypesPaymentTypeIDGet) | **GET** /SalesOrders/PaymentTypes/{PaymentTypeID} | Retrieves a payment type
[**salesOrderPaymentTypesPATCHRequestPaymentTypesPaymentTypeIDUpdate**](SalesOrdersApi.md#salesOrderPaymentTypesPATCHRequestPaymentTypesPaymentTypeIDUpdate) | **PATCH** /SalesOrders/PaymentTypes/{PaymentTypeID} | Updates a payment type
[**salesOrderPaymentTypesPOSTRequestPaymentTypesPost**](SalesOrdersApi.md#salesOrderPaymentTypesPOSTRequestPaymentTypesPost) | **POST** /SalesOrders/PaymentTypes | Adds a payment type
[**salesOrderPaymentsDELETERequestInvoiceIDPaymentsPaymentIDDelete**](SalesOrdersApi.md#salesOrderPaymentsDELETERequestInvoiceIDPaymentsPaymentIDDelete) | **DELETE** /SalesOrders/{InvoiceID}/Payments/{PaymentID} | Deletes a payment for a sales order
[**salesOrderPaymentsGETManyRequestInvoiceIDPaymentsGet**](SalesOrdersApi.md#salesOrderPaymentsGETManyRequestInvoiceIDPaymentsGet) | **GET** /SalesOrders/{InvoiceID}/Payments | Retrieves a list of payments for a sales order
[**salesOrderPaymentsGETRequestInvoiceIDPaymentsPaymentIDGet**](SalesOrdersApi.md#salesOrderPaymentsGETRequestInvoiceIDPaymentsPaymentIDGet) | **GET** /SalesOrders/{InvoiceID}/Payments/{PaymentID} | Retrieves a payment for a sales order
[**salesOrderPaymentsPATCHRequestInvoiceIDPaymentsPaymentIDUpdate**](SalesOrdersApi.md#salesOrderPaymentsPATCHRequestInvoiceIDPaymentsPaymentIDUpdate) | **PATCH** /SalesOrders/{InvoiceID}/Payments/{PaymentID} | Updates a payment for a sales order
[**salesOrderPaymentsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDPaymentsPost**](SalesOrdersApi.md#salesOrderPaymentsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDPaymentsPost) | **POST** /SalesOrders/{InvoiceID}/Historys/{InvoiceHistoryID}/Payments | Adds a payment to a sales order
[**salesOrderSAVERequestInvoiceIDSaveGet**](SalesOrdersApi.md#salesOrderSAVERequestInvoiceIDSaveGet) | **GET** /SalesOrders/{InvoiceID}/Save | Saves a stateful sales order.


# **salesOrderABANDONRequestInvoiceIDAbandonDelete**
> \Jiwa\Model\Object salesOrderABANDONRequestInvoiceIDAbandonDelete($accept, $invoice_id, $jiwa_stateful)

Abandons a stateful sales order.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful sales order exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderABANDONRequestInvoiceIDAbandonDelete($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderABANDONRequestInvoiceIDAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCustomFieldValueGETRequestInvoiceIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue salesOrderCustomFieldValueGETRequestInvoiceIDCustomFieldValuesSettingIDGet($accept, $invoice_id, $setting_id, $jiwa_stateful)

Retrieves a sales order custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderCustomFieldValueGETRequestInvoiceIDCustomFieldValuesSettingIDGet($accept, $invoice_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderCustomFieldValueGETRequestInvoiceIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCustomFieldValuePATCHRequestInvoiceIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue salesOrderCustomFieldValuePATCHRequestInvoiceIDCustomFieldValuesSettingIDUpdate($accept, $invoice_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a sales order custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\SalesOrderCustomFieldValuePATCHRequest(); // \Jiwa\Model\SalesOrderCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->salesOrderCustomFieldValuePATCHRequestInvoiceIDCustomFieldValuesSettingIDUpdate($accept, $invoice_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderCustomFieldValuePATCHRequestInvoiceIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderCustomFieldValuePATCHRequest**](../Model/SalesOrderCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCustomFieldValuesGETManyRequestInvoiceIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] salesOrderCustomFieldValuesGETManyRequestInvoiceIDCustomFieldValuesGet($accept, $invoice_id, $jiwa_stateful)

Retrieves a list of custom field values for a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderCustomFieldValuesGETManyRequestInvoiceIDCustomFieldValuesGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderCustomFieldValuesGETManyRequestInvoiceIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderCustomFieldsGETManyRequestCustomFieldsGet**
> \Jiwa\Model\CustomField[] salesOrderCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of sales order custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderCustomFieldsGETManyRequestCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentDELETERequestInvoiceIDDocumentsDocumentIDDelete**
> \Jiwa\Model\Object salesOrderDocumentDELETERequestInvoiceIDDocumentsDocumentIDDelete($accept, $invoice_id, $document_id, $jiwa_stateful)

Deletes a sales order document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderDocumentDELETERequestInvoiceIDDocumentsDocumentIDDelete($accept, $invoice_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentDELETERequestInvoiceIDDocumentsDocumentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentGETRequestInvoiceIDDocumentsDocumentIDGet**
> \Jiwa\Model\Document salesOrderDocumentGETRequestInvoiceIDDocumentsDocumentIDGet($accept, $invoice_id, $document_id, $jiwa_stateful)

Retrieves a sales order document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderDocumentGETRequestInvoiceIDDocumentsDocumentIDGet($accept, $invoice_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentGETRequestInvoiceIDDocumentsDocumentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentPATCHRequestInvoiceIDDocumentsDocumentIDUpdate**
> \Jiwa\Model\Document salesOrderDocumentPATCHRequestInvoiceIDDocumentsDocumentIDUpdate($accept, $invoice_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Updates a sales order document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$document_type = "document_type_example"; // string | 
$file_id = "file_id_example"; // string | 
$physical_file_name = "physical_file_name_example"; // string | 
$full_physical_file_name = "full_physical_file_name_example"; // string | 
$description = "description_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$file_binary = "B"; // string | 
$body = new \Jiwa\Model\SalesOrderDocumentPATCHRequest(); // \Jiwa\Model\SalesOrderDocumentPATCHRequest | 

try {
    $result = $apiInstance->salesOrderDocumentPATCHRequestInvoiceIDDocumentsDocumentIDUpdate($accept, $invoice_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentPATCHRequestInvoiceIDDocumentsDocumentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **document_type** | **string**|  | [optional]
 **file_id** | **string**|  | [optional]
 **physical_file_name** | **string**|  | [optional]
 **full_physical_file_name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **file_binary** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderDocumentPATCHRequest**](../Model/SalesOrderDocumentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentPOSTRequestInvoiceIDDocumentsPost**
> \Jiwa\Model\Document salesOrderDocumentPOSTRequestInvoiceIDDocumentsPost($accept, $invoice_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Appends a document to a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$document_type = "document_type_example"; // string | 
$file_id = "file_id_example"; // string | 
$physical_file_name = "physical_file_name_example"; // string | 
$full_physical_file_name = "full_physical_file_name_example"; // string | 
$description = "description_example"; // string | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$file_binary = "B"; // string | 
$body = new \Jiwa\Model\SalesOrderDocumentPOSTRequest(); // \Jiwa\Model\SalesOrderDocumentPOSTRequest | 

try {
    $result = $apiInstance->salesOrderDocumentPOSTRequestInvoiceIDDocumentsPost($accept, $invoice_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentPOSTRequestInvoiceIDDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **document_type** | **string**|  | [optional]
 **file_id** | **string**|  | [optional]
 **physical_file_name** | **string**|  | [optional]
 **full_physical_file_name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **file_binary** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderDocumentPOSTRequest**](../Model/SalesOrderDocumentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**
> \Jiwa\Model\Object salesOrderDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful)

Deletes a sales order document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **document_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**
> \Jiwa\Model\DocumentType salesOrderDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful)

Retrieves a sales order document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **document_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**
> \Jiwa\Model\DocumentType salesOrderDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a sales order document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\SalesOrderDocumentTypePATCHRequest(); // \Jiwa\Model\SalesOrderDocumentTypePATCHRequest | 

try {
    $result = $apiInstance->salesOrderDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **document_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderDocumentTypePATCHRequest**](../Model/SalesOrderDocumentTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentTypePOSTRequestDocumentTypesPost**
> \Jiwa\Model\DocumentType salesOrderDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new sales order document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\SalesOrderDocumentTypePOSTRequest(); // \Jiwa\Model\SalesOrderDocumentTypePOSTRequest | 

try {
    $result = $apiInstance->salesOrderDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentTypePOSTRequestDocumentTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderDocumentTypePOSTRequest**](../Model/SalesOrderDocumentTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentTypesGETManyRequestDocumentTypesGet**
> \Jiwa\Model\DocumentType[] salesOrderDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful)

Retrieves a list of sales order document types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentTypesGETManyRequestDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\DocumentType[]**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderDocumentsGETManyRequestInvoiceIDDocumentsGet**
> \Jiwa\Model\Document[] salesOrderDocumentsGETManyRequestInvoiceIDDocumentsGet($accept, $invoice_id, $jiwa_stateful)

Retrieves a list of sales order documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderDocumentsGETManyRequestInvoiceIDDocumentsGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderDocumentsGETManyRequestInvoiceIDDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Document[]**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderGETRequestInvoiceIDGet**
> \Jiwa\Model\SalesOrder salesOrderGETRequestInvoiceIDGet($accept, $invoice_id, $jiwa_stateful)

Retrieves a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderGETRequestInvoiceIDGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderGETRequestInvoiceIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryConsignmentNotesDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDDelete**
> \Jiwa\Model\Object salesOrderHistoryConsignmentNotesDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDDelete($accept, $invoice_id, $invoice_history_id, $consignment_note_id, $jiwa_stateful)

Deletes a consignment note from a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$consignment_note_id = "consignment_note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryConsignmentNotesDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDDelete($accept, $invoice_id, $invoice_history_id, $consignment_note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryConsignmentNotesDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **consignment_note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryConsignmentNotesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesGet**
> \Jiwa\Model\SalesOrderConsignmentNote[] salesOrderHistoryConsignmentNotesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful)

Retrieves consignment notes for a sales order history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryConsignmentNotesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryConsignmentNotesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderConsignmentNote[]**](../Model/SalesOrderConsignmentNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryConsignmentNotesGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDGet**
> \Jiwa\Model\SalesOrderConsignmentNote salesOrderHistoryConsignmentNotesGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDGet($accept, $invoice_id, $invoice_history_id, $consignment_note_id, $jiwa_stateful)

Retrieves a consignment note for a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$consignment_note_id = "consignment_note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryConsignmentNotesGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDGet($accept, $invoice_id, $invoice_history_id, $consignment_note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryConsignmentNotesGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **consignment_note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderConsignmentNote**](../Model/SalesOrderConsignmentNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryConsignmentNotesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDUpdate**
> \Jiwa\Model\SalesOrderConsignmentNote salesOrderHistoryConsignmentNotesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDUpdate($accept, $invoice_id, $invoice_history_id, $consignment_note_id, $jiwa_stateful, $consignment_note_date, $ex_gst_amount, $gst_amount, $consignment_note_no, $body)

Updates a consignment note for a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$consignment_note_id = "consignment_note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$consignment_note_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$ex_gst_amount = 1.2; // double | 
$gst_amount = 1.2; // double | 
$consignment_note_no = "consignment_note_no_example"; // string | 
$body = new \Jiwa\Model\SalesOrderHistoryConsignmentNotesPATCHRequest(); // \Jiwa\Model\SalesOrderHistoryConsignmentNotesPATCHRequest | 

try {
    $result = $apiInstance->salesOrderHistoryConsignmentNotesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDUpdate($accept, $invoice_id, $invoice_history_id, $consignment_note_id, $jiwa_stateful, $consignment_note_date, $ex_gst_amount, $gst_amount, $consignment_note_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryConsignmentNotesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesConsignmentNoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **consignment_note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **consignment_note_date** | **\DateTime**|  | [optional]
 **ex_gst_amount** | **double**|  | [optional]
 **gst_amount** | **double**|  | [optional]
 **consignment_note_no** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderHistoryConsignmentNotesPATCHRequest**](../Model/SalesOrderHistoryConsignmentNotesPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderConsignmentNote**](../Model/SalesOrderConsignmentNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryConsignmentNotesPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesPost**
> \Jiwa\Model\SalesOrderConsignmentNote salesOrderHistoryConsignmentNotesPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $consignment_note_date, $ex_gst_amount, $gst_amount, $consignment_note_no, $body)

Adds a consignment note to a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$consignment_note_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$ex_gst_amount = 1.2; // double | 
$gst_amount = 1.2; // double | 
$consignment_note_no = "consignment_note_no_example"; // string | 
$body = new \Jiwa\Model\SalesOrderHistoryConsignmentNotesPOSTRequest(); // \Jiwa\Model\SalesOrderHistoryConsignmentNotesPOSTRequest | 

try {
    $result = $apiInstance->salesOrderHistoryConsignmentNotesPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $consignment_note_date, $ex_gst_amount, $gst_amount, $consignment_note_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryConsignmentNotesPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierConsignmentNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **consignment_note_date** | **\DateTime**|  | [optional]
 **ex_gst_amount** | **double**|  | [optional]
 **gst_amount** | **double**|  | [optional]
 **consignment_note_no** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderHistoryConsignmentNotesPOSTRequest**](../Model/SalesOrderHistoryConsignmentNotesPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderConsignmentNote**](../Model/SalesOrderConsignmentNote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] salesOrderHistoryCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful)

Retrieves a list of custom field values for a sales order history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryCustomFieldValuesGETRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue salesOrderHistoryCustomFieldValuesGETRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDGet($accept, $invoice_id, $invoice_history_id, $setting_id, $jiwa_stateful)

Retrieves a sales order history custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryCustomFieldValuesGETRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDGet($accept, $invoice_id, $invoice_history_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryCustomFieldValuesGETRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryCustomFieldValuesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue salesOrderHistoryCustomFieldValuesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDUpdate($accept, $invoice_id, $invoice_history_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a sales order history custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\SalesOrderHistoryCustomFieldValuesPATCHRequest(); // \Jiwa\Model\SalesOrderHistoryCustomFieldValuesPATCHRequest | 

try {
    $result = $apiInstance->salesOrderHistoryCustomFieldValuesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDUpdate($accept, $invoice_id, $invoice_history_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryCustomFieldValuesPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderHistoryCustomFieldValuesPATCHRequest**](../Model/SalesOrderHistoryCustomFieldValuesPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryCustomFieldsGETManyRequestHistorysCustomFieldsGet**
> \Jiwa\Model\CustomField[] salesOrderHistoryCustomFieldsGETManyRequestHistorysCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of sales order history custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryCustomFieldsGETManyRequestHistorysCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryCustomFieldsGETManyRequestHistorysCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryFreightItemsDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDDelete**
> \Jiwa\Model\Object salesOrderHistoryFreightItemsDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDDelete($accept, $invoice_id, $invoice_history_id, $freight_item_id, $jiwa_stateful)

Deletes a freight item from a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$freight_item_id = "freight_item_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryFreightItemsDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDDelete($accept, $invoice_id, $invoice_history_id, $freight_item_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryFreightItemsDELETERequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **freight_item_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryFreightItemsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsGet**
> \Jiwa\Model\SalesOrderFreightItem[] salesOrderHistoryFreightItemsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful)

Retrieves freight items for a sales order history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryFreightItemsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryFreightItemsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderFreightItem[]**](../Model/SalesOrderFreightItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryFreightItemsGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDGet**
> \Jiwa\Model\SalesOrderFreightItem salesOrderHistoryFreightItemsGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDGet($accept, $invoice_id, $invoice_history_id, $freight_item_id, $jiwa_stateful)

Retrieves a freight item for a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$freight_item_id = "freight_item_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistoryFreightItemsGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDGet($accept, $invoice_id, $invoice_history_id, $freight_item_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryFreightItemsGETRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **freight_item_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderFreightItem**](../Model/SalesOrderFreightItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryFreightItemsPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDUpdate**
> \Jiwa\Model\SalesOrderFreightItem salesOrderHistoryFreightItemsPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDUpdate($accept, $invoice_id, $invoice_history_id, $freight_item_id, $jiwa_stateful, $number_items, $item_weight, $item_cubic, $item_length, $item_width, $item_height, $reference, $freight_description, $consignment_note, $body)

Updates a freight item for a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$freight_item_id = "freight_item_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$number_items = 56; // int | 
$item_weight = 1.2; // double | 
$item_cubic = 1.2; // double | 
$item_length = 1.2; // double | 
$item_width = 1.2; // double | 
$item_height = 1.2; // double | 
$reference = "reference_example"; // string | 
$freight_description = "freight_description_example"; // string | 
$consignment_note = "consignment_note_example"; // string | 
$body = new \Jiwa\Model\SalesOrderHistoryFreightItemsPATCHRequest(); // \Jiwa\Model\SalesOrderHistoryFreightItemsPATCHRequest | 

try {
    $result = $apiInstance->salesOrderHistoryFreightItemsPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDUpdate($accept, $invoice_id, $invoice_history_id, $freight_item_id, $jiwa_stateful, $number_items, $item_weight, $item_cubic, $item_length, $item_width, $item_height, $reference, $freight_description, $consignment_note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryFreightItemsPATCHRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsFreightItemIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **freight_item_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **number_items** | **int**|  | [optional]
 **item_weight** | **double**|  | [optional]
 **item_cubic** | **double**|  | [optional]
 **item_length** | **double**|  | [optional]
 **item_width** | **double**|  | [optional]
 **item_height** | **double**|  | [optional]
 **reference** | **string**|  | [optional]
 **freight_description** | **string**|  | [optional]
 **consignment_note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderHistoryFreightItemsPATCHRequest**](../Model/SalesOrderHistoryFreightItemsPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderFreightItem**](../Model/SalesOrderFreightItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistoryFreightItemsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsPost**
> \Jiwa\Model\SalesOrderFreightItem salesOrderHistoryFreightItemsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $number_items, $item_weight, $item_cubic, $item_length, $item_width, $item_height, $reference, $freight_description, $consignment_note, $body)

Adds a freight item to a sales order history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$number_items = 56; // int | 
$item_weight = 1.2; // double | 
$item_cubic = 1.2; // double | 
$item_length = 1.2; // double | 
$item_width = 1.2; // double | 
$item_height = 1.2; // double | 
$reference = "reference_example"; // string | 
$freight_description = "freight_description_example"; // string | 
$consignment_note = "consignment_note_example"; // string | 
$body = new \Jiwa\Model\SalesOrderHistoryFreightItemsPOSTRequest(); // \Jiwa\Model\SalesOrderHistoryFreightItemsPOSTRequest | 

try {
    $result = $apiInstance->salesOrderHistoryFreightItemsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $number_items, $item_weight, $item_cubic, $item_length, $item_width, $item_height, $reference, $freight_description, $consignment_note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistoryFreightItemsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDCarrierFreightItemsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **number_items** | **int**|  | [optional]
 **item_weight** | **double**|  | [optional]
 **item_cubic** | **double**|  | [optional]
 **item_length** | **double**|  | [optional]
 **item_width** | **double**|  | [optional]
 **item_height** | **double**|  | [optional]
 **reference** | **string**|  | [optional]
 **freight_description** | **string**|  | [optional]
 **consignment_note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderHistoryFreightItemsPOSTRequest**](../Model/SalesOrderHistoryFreightItemsPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderFreightItem**](../Model/SalesOrderFreightItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistorysGETManyRequestInvoiceIDHistorysGet**
> \Jiwa\Model\SalesOrderHistory[] salesOrderHistorysGETManyRequestInvoiceIDHistorysGet($accept, $invoice_id, $jiwa_stateful)

Retrieves a list of sales order histories.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistorysGETManyRequestInvoiceIDHistorysGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistorysGETManyRequestInvoiceIDHistorysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderHistory[]**](../Model/SalesOrderHistory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistorysGETRequestInvoiceIDHistorysInvoiceHistoryIDGet**
> \Jiwa\Model\SalesOrderHistory salesOrderHistorysGETRequestInvoiceIDHistorysInvoiceHistoryIDGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful)

Retrieves a sales order history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderHistorysGETRequestInvoiceIDHistorysInvoiceHistoryIDGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistorysGETRequestInvoiceIDHistorysInvoiceHistoryIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderHistory**](../Model/SalesOrderHistory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderHistorysPATCHRequestInvoiceIDHistorysInvoiceHistoryIDUpdate**
> \Jiwa\Model\SalesOrderHistory salesOrderHistorysPATCHRequestInvoiceIDHistorysInvoiceHistoryIDUpdate($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $history_no, $status, $edi_pick_status, $db_trans_id, $ref, $last_modified_by, $history_total, $amount_paid, $total_quantity_delivered, $run_no, $delivered, $delivered_date, $record_date, $date_created, $date_last_saved, $date_posted, $date_processed, $invoice_printed, $docket_printed, $pack_slip_printed, $pick_sheet_printed, $other_printed, $invoice_emailed, $docket_emailed, $pack_slip_emailed, $pick_sheet_emailed, $other_emailed, $delivery_address_contact_name, $delivery_addressee, $delivery_address_email_address, $delivery_address1, $delivery_address2, $delivery_address3, $delivery_address4, $delivery_address_postcode, $delivery_address_country, $notes, $courier_details, $freight_forward_address1, $freight_forward_address2, $freight_forward_address3, $freight_forward_address4, $freight_forward_address_country, $freight_forward_address_notes, $consignment_note, $ediasn_number, $drop_shipment, $cartage_charge1, $cartage_charge2, $cartage_charge3, $carrier, $custom_field_values, $body)

Updates a sales order history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$history_no = 56; // int | 
$status = "status_example"; // string | 
$edi_pick_status = "edi_pick_status_example"; // string | 
$db_trans_id = "db_trans_id_example"; // string | 
$ref = "ref_example"; // string | 
$last_modified_by = "last_modified_by_example"; // string | 
$history_total = 1.2; // double | 
$amount_paid = 1.2; // double | 
$total_quantity_delivered = 1.2; // double | 
$run_no = "run_no_example"; // string | 
$delivered = true; // bool | 
$delivered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$record_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_last_saved = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_posted = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_processed = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_printed = true; // bool | 
$docket_printed = true; // bool | 
$pack_slip_printed = true; // bool | 
$pick_sheet_printed = true; // bool | 
$other_printed = true; // bool | 
$invoice_emailed = true; // bool | 
$docket_emailed = true; // bool | 
$pack_slip_emailed = true; // bool | 
$pick_sheet_emailed = true; // bool | 
$other_emailed = true; // bool | 
$delivery_address_contact_name = "delivery_address_contact_name_example"; // string | 
$delivery_addressee = "delivery_addressee_example"; // string | 
$delivery_address_email_address = "delivery_address_email_address_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_address3 = "delivery_address3_example"; // string | 
$delivery_address4 = "delivery_address4_example"; // string | 
$delivery_address_postcode = "delivery_address_postcode_example"; // string | 
$delivery_address_country = "delivery_address_country_example"; // string | 
$notes = "notes_example"; // string | 
$courier_details = "courier_details_example"; // string | 
$freight_forward_address1 = "freight_forward_address1_example"; // string | 
$freight_forward_address2 = "freight_forward_address2_example"; // string | 
$freight_forward_address3 = "freight_forward_address3_example"; // string | 
$freight_forward_address4 = "freight_forward_address4_example"; // string | 
$freight_forward_address_country = "freight_forward_address_country_example"; // string | 
$freight_forward_address_notes = "freight_forward_address_notes_example"; // string | 
$consignment_note = "consignment_note_example"; // string | 
$ediasn_number = "ediasn_number_example"; // string | 
$drop_shipment = true; // bool | 
$cartage_charge1 = "cartage_charge1_example"; // string | 
$cartage_charge2 = "cartage_charge2_example"; // string | 
$cartage_charge3 = "cartage_charge3_example"; // string | 
$carrier = "carrier_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\SalesOrderHistorysPATCHRequest(); // \Jiwa\Model\SalesOrderHistorysPATCHRequest | 

try {
    $result = $apiInstance->salesOrderHistorysPATCHRequestInvoiceIDHistorysInvoiceHistoryIDUpdate($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $history_no, $status, $edi_pick_status, $db_trans_id, $ref, $last_modified_by, $history_total, $amount_paid, $total_quantity_delivered, $run_no, $delivered, $delivered_date, $record_date, $date_created, $date_last_saved, $date_posted, $date_processed, $invoice_printed, $docket_printed, $pack_slip_printed, $pick_sheet_printed, $other_printed, $invoice_emailed, $docket_emailed, $pack_slip_emailed, $pick_sheet_emailed, $other_emailed, $delivery_address_contact_name, $delivery_addressee, $delivery_address_email_address, $delivery_address1, $delivery_address2, $delivery_address3, $delivery_address4, $delivery_address_postcode, $delivery_address_country, $notes, $courier_details, $freight_forward_address1, $freight_forward_address2, $freight_forward_address3, $freight_forward_address4, $freight_forward_address_country, $freight_forward_address_notes, $consignment_note, $ediasn_number, $drop_shipment, $cartage_charge1, $cartage_charge2, $cartage_charge3, $carrier, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderHistorysPATCHRequestInvoiceIDHistorysInvoiceHistoryIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **history_no** | **int**|  | [optional]
 **status** | **string**|  | [optional]
 **edi_pick_status** | **string**|  | [optional]
 **db_trans_id** | **string**|  | [optional]
 **ref** | **string**|  | [optional]
 **last_modified_by** | **string**|  | [optional]
 **history_total** | **double**|  | [optional]
 **amount_paid** | **double**|  | [optional]
 **total_quantity_delivered** | **double**|  | [optional]
 **run_no** | **string**|  | [optional]
 **delivered** | **bool**|  | [optional]
 **delivered_date** | **\DateTime**|  | [optional]
 **record_date** | **\DateTime**|  | [optional]
 **date_created** | **\DateTime**|  | [optional]
 **date_last_saved** | **\DateTime**|  | [optional]
 **date_posted** | **\DateTime**|  | [optional]
 **date_processed** | **\DateTime**|  | [optional]
 **invoice_printed** | **bool**|  | [optional]
 **docket_printed** | **bool**|  | [optional]
 **pack_slip_printed** | **bool**|  | [optional]
 **pick_sheet_printed** | **bool**|  | [optional]
 **other_printed** | **bool**|  | [optional]
 **invoice_emailed** | **bool**|  | [optional]
 **docket_emailed** | **bool**|  | [optional]
 **pack_slip_emailed** | **bool**|  | [optional]
 **pick_sheet_emailed** | **bool**|  | [optional]
 **other_emailed** | **bool**|  | [optional]
 **delivery_address_contact_name** | **string**|  | [optional]
 **delivery_addressee** | **string**|  | [optional]
 **delivery_address_email_address** | **string**|  | [optional]
 **delivery_address1** | **string**|  | [optional]
 **delivery_address2** | **string**|  | [optional]
 **delivery_address3** | **string**|  | [optional]
 **delivery_address4** | **string**|  | [optional]
 **delivery_address_postcode** | **string**|  | [optional]
 **delivery_address_country** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **courier_details** | **string**|  | [optional]
 **freight_forward_address1** | **string**|  | [optional]
 **freight_forward_address2** | **string**|  | [optional]
 **freight_forward_address3** | **string**|  | [optional]
 **freight_forward_address4** | **string**|  | [optional]
 **freight_forward_address_country** | **string**|  | [optional]
 **freight_forward_address_notes** | **string**|  | [optional]
 **consignment_note** | **string**|  | [optional]
 **ediasn_number** | **string**|  | [optional]
 **drop_shipment** | **bool**|  | [optional]
 **cartage_charge1** | **string**|  | [optional]
 **cartage_charge2** | **string**|  | [optional]
 **cartage_charge3** | **string**|  | [optional]
 **carrier** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderHistorysPATCHRequest**](../Model/SalesOrderHistorysPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderHistory**](../Model/SalesOrderHistory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineCustomFieldValueGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue salesOrderLineCustomFieldValueGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $setting_id, $jiwa_stateful)

Retrieves a sales order line custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineCustomFieldValueGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineCustomFieldValueGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineCustomFieldValuePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue salesOrderLineCustomFieldValuePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDUpdate($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a sales order line custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\SalesOrderLineCustomFieldValuePATCHRequest(); // \Jiwa\Model\SalesOrderLineCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->salesOrderLineCustomFieldValuePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDUpdate($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineCustomFieldValuePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderLineCustomFieldValuePATCHRequest**](../Model/SalesOrderLineCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] salesOrderLineCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful)

Retrieves a list of custom field values for a sales order line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineCustomFieldValuesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineCustomFieldsGETManyRequestLinesCustomFieldsGet**
> \Jiwa\Model\CustomField[] salesOrderLineCustomFieldsGETManyRequestLinesCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of sales order line custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineCustomFieldsGETManyRequestLinesCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineCustomFieldsGETManyRequestLinesCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDDelete**
> \Jiwa\Model\Object salesOrderLineDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDDelete($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful)

Deletes a sales order line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDDelete($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineDetailDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDDelete**
> \Jiwa\Model\Object salesOrderLineDetailDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDDelete($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $details_line_id, $jiwa_stateful)

Deletes a sales order line detail.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$details_line_id = "details_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineDetailDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDDelete($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $details_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineDetailDELETERequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **details_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineDetailGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDGet**
> \Jiwa\Model\SalesOrderLineDetail salesOrderLineDetailGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $details_line_id, $jiwa_stateful)

Retrieves a sales order line detail.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$details_line_id = "details_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineDetailGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $details_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineDetailGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **details_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLineDetail**](../Model/SalesOrderLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineDetailPATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDUpdate**
> \Jiwa\Model\SalesOrderLineDetail salesOrderLineDetailPATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDUpdate($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $details_line_id, $jiwa_stateful, $cost, $date_in, $expiry_date, $special_price, $quantity, $line_detail_id, $bin_location, $serial_no, $sohid, $in_logical_id, $body)

Updates a sales order line detail.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$details_line_id = "details_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$cost = 1.2; // double | 
$date_in = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expiry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$special_price = 1.2; // double | 
$quantity = 1.2; // double | 
$line_detail_id = "line_detail_id_example"; // string | 
$bin_location = "bin_location_example"; // string | 
$serial_no = "serial_no_example"; // string | 
$sohid = "sohid_example"; // string | 
$in_logical_id = "in_logical_id_example"; // string | 
$body = new \Jiwa\Model\SalesOrderLineDetailPATCHRequest(); // \Jiwa\Model\SalesOrderLineDetailPATCHRequest | 

try {
    $result = $apiInstance->salesOrderLineDetailPATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDUpdate($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $details_line_id, $jiwa_stateful, $cost, $date_in, $expiry_date, $special_price, $quantity, $line_detail_id, $bin_location, $serial_no, $sohid, $in_logical_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineDetailPATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsDetailsLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **details_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **cost** | **double**|  | [optional]
 **date_in** | **\DateTime**|  | [optional]
 **expiry_date** | **\DateTime**|  | [optional]
 **special_price** | **double**|  | [optional]
 **quantity** | **double**|  | [optional]
 **line_detail_id** | **string**|  | [optional]
 **bin_location** | **string**|  | [optional]
 **serial_no** | **string**|  | [optional]
 **sohid** | **string**|  | [optional]
 **in_logical_id** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderLineDetailPATCHRequest**](../Model/SalesOrderLineDetailPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLineDetail**](../Model/SalesOrderLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineDetailPOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsPost**
> \Jiwa\Model\SalesOrderLineDetail salesOrderLineDetailPOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsPost($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful, $cost, $date_in, $expiry_date, $special_price, $quantity, $bin_location, $serial_no, $sohid, $in_logical_id, $body)

Appends a line detail to a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$cost = 1.2; // double | 
$date_in = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expiry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$special_price = 1.2; // double | 
$quantity = 1.2; // double | 
$bin_location = "bin_location_example"; // string | 
$serial_no = "serial_no_example"; // string | 
$sohid = "sohid_example"; // string | 
$in_logical_id = "in_logical_id_example"; // string | 
$body = new \Jiwa\Model\SalesOrderLineDetailPOSTRequest(); // \Jiwa\Model\SalesOrderLineDetailPOSTRequest | 

try {
    $result = $apiInstance->salesOrderLineDetailPOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsPost($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful, $cost, $date_in, $expiry_date, $special_price, $quantity, $bin_location, $serial_no, $sohid, $in_logical_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineDetailPOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **cost** | **double**|  | [optional]
 **date_in** | **\DateTime**|  | [optional]
 **expiry_date** | **\DateTime**|  | [optional]
 **special_price** | **double**|  | [optional]
 **quantity** | **double**|  | [optional]
 **bin_location** | **string**|  | [optional]
 **serial_no** | **string**|  | [optional]
 **sohid** | **string**|  | [optional]
 **in_logical_id** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderLineDetailPOSTRequest**](../Model/SalesOrderLineDetailPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLineDetail**](../Model/SalesOrderLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineDetailsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsGet**
> \Jiwa\Model\SalesOrderLineDetail[] salesOrderLineDetailsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful)

Retrieves a list of line details for a sales order line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineDetailsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineDetailsGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDLineDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLineDetail[]**](../Model/SalesOrderLineDetail.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLineGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDGet**
> \Jiwa\Model\SalesOrderLine salesOrderLineGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful)

Retrieves a sales order line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLineGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDGet($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLineGETRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLine**](../Model/SalesOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLinePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDUpdate**
> \Jiwa\Model\SalesOrderLine salesOrderLinePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDUpdate($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful, $item_no, $comment_line, $quantity_ordered, $quantity_demand, $quantity_this_del, $quantity_back_ord, $picked, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $fix_sell_price, $fix_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $forward_order_date, $scheduled_date, $line_total, $weight, $cubic, $quoted_discounted_price, $quoted_discount_percentage, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $sales_order_serial_stock_selection_types, $non_inventory, $inventory_id, $part_no, $description, $comment_text, $aux2, $line_link_id, $edi_store_location_code, $edidc_location_code, $cost_center, $stage, $custom_field_values, $line_details, $shipping_labels, $unit_of_measure, $kit_line_type, $kit_units, $kit_header_line_id, $body)

Updates a sales order line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$invoice_line_id = "invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$comment_line = true; // bool | 
$quantity_ordered = 1.2; // double | 
$quantity_demand = 1.2; // double | 
$quantity_this_del = 1.2; // double | 
$quantity_back_ord = 1.2; // double | 
$picked = true; // bool | 
$price_ex_gst = 1.2; // double | 
$price_inc_gst = 1.2; // double | 
$discounted_price = 1.2; // double | 
$tax_to_charge = 1.2; // double | 
$tax_rate = "tax_rate_example"; // string | 
$unit_cost = 1.2; // double | 
$fix_sell_price = true; // bool | 
$fix_price = true; // bool | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$forward_order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$scheduled_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$line_total = 1.2; // double | 
$weight = 1.2; // double | 
$cubic = 1.2; // double | 
$quoted_discounted_price = 1.2; // double | 
$quoted_discount_percentage = 1.2; // double | 
$discounted_percentage = 1.2; // double | 
$discount_given = 1.2; // double | 
$quantity_decimal_places = 1.2; // double | 
$quantity_original_ordered = 1.2; // double | 
$sales_order_serial_stock_selection_types = "sales_order_serial_stock_selection_types_example"; // string | 
$non_inventory = true; // bool | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$comment_text = "comment_text_example"; // string | 
$aux2 = "aux2_example"; // string | 
$line_link_id = "line_link_id_example"; // string | 
$edi_store_location_code = "edi_store_location_code_example"; // string | 
$edidc_location_code = "edidc_location_code_example"; // string | 
$cost_center = "cost_center_example"; // string | 
$stage = "stage_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$line_details = "line_details_example"; // string | 
$shipping_labels = "shipping_labels_example"; // string | 
$unit_of_measure = "unit_of_measure_example"; // string | 
$kit_line_type = "kit_line_type_example"; // string | 
$kit_units = 1.2; // double | 
$kit_header_line_id = "kit_header_line_id_example"; // string | 
$body = new \Jiwa\Model\SalesOrderLinePATCHRequest(); // \Jiwa\Model\SalesOrderLinePATCHRequest | 

try {
    $result = $apiInstance->salesOrderLinePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDUpdate($accept, $invoice_id, $invoice_history_id, $invoice_line_id, $jiwa_stateful, $item_no, $comment_line, $quantity_ordered, $quantity_demand, $quantity_this_del, $quantity_back_ord, $picked, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $fix_sell_price, $fix_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $forward_order_date, $scheduled_date, $line_total, $weight, $cubic, $quoted_discounted_price, $quoted_discount_percentage, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $sales_order_serial_stock_selection_types, $non_inventory, $inventory_id, $part_no, $description, $comment_text, $aux2, $line_link_id, $edi_store_location_code, $edidc_location_code, $cost_center, $stage, $custom_field_values, $line_details, $shipping_labels, $unit_of_measure, $kit_line_type, $kit_units, $kit_header_line_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLinePATCHRequestInvoiceIDHistorysInvoiceHistoryIDLinesInvoiceLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **comment_line** | **bool**|  | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **quantity_demand** | **double**|  | [optional]
 **quantity_this_del** | **double**|  | [optional]
 **quantity_back_ord** | **double**|  | [optional]
 **picked** | **bool**|  | [optional]
 **price_ex_gst** | **double**|  | [optional]
 **price_inc_gst** | **double**|  | [optional]
 **discounted_price** | **double**|  | [optional]
 **tax_to_charge** | **double**|  | [optional]
 **tax_rate** | **string**|  | [optional]
 **unit_cost** | **double**|  | [optional]
 **fix_sell_price** | **bool**|  | [optional]
 **fix_price** | **bool**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **forward_order_date** | **\DateTime**|  | [optional]
 **scheduled_date** | **\DateTime**|  | [optional]
 **line_total** | **double**|  | [optional]
 **weight** | **double**|  | [optional]
 **cubic** | **double**|  | [optional]
 **quoted_discounted_price** | **double**|  | [optional]
 **quoted_discount_percentage** | **double**|  | [optional]
 **discounted_percentage** | **double**|  | [optional]
 **discount_given** | **double**|  | [optional]
 **quantity_decimal_places** | **double**|  | [optional]
 **quantity_original_ordered** | **double**|  | [optional]
 **sales_order_serial_stock_selection_types** | **string**|  | [optional]
 **non_inventory** | **bool**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **comment_text** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **line_link_id** | **string**|  | [optional]
 **edi_store_location_code** | **string**|  | [optional]
 **edidc_location_code** | **string**|  | [optional]
 **cost_center** | **string**|  | [optional]
 **stage** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **line_details** | **string**|  | [optional]
 **shipping_labels** | **string**|  | [optional]
 **unit_of_measure** | **string**|  | [optional]
 **kit_line_type** | **string**|  | [optional]
 **kit_units** | **double**|  | [optional]
 **kit_header_line_id** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderLinePATCHRequest**](../Model/SalesOrderLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLine**](../Model/SalesOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLinePOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesPost**
> \Jiwa\Model\SalesOrderLine salesOrderLinePOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $item_no, $comment_line, $quantity_ordered, $quantity_demand, $quantity_this_del, $quantity_back_ord, $picked, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $fix_sell_price, $fix_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $forward_order_date, $scheduled_date, $line_total, $weight, $cubic, $quoted_discounted_price, $quoted_discount_percentage, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $sales_order_serial_stock_selection_types, $non_inventory, $inventory_id, $part_no, $description, $comment_text, $aux2, $line_link_id, $edi_store_location_code, $edidc_location_code, $cost_center, $stage, $custom_field_values, $line_details, $shipping_labels, $unit_of_measure, $kit_line_type, $kit_units, $kit_header_line_id, $body)

Appends a line to a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$comment_line = true; // bool | 
$quantity_ordered = 1.2; // double | 
$quantity_demand = 1.2; // double | 
$quantity_this_del = 1.2; // double | 
$quantity_back_ord = 1.2; // double | 
$picked = true; // bool | 
$price_ex_gst = 1.2; // double | 
$price_inc_gst = 1.2; // double | 
$discounted_price = 1.2; // double | 
$tax_to_charge = 1.2; // double | 
$tax_rate = "tax_rate_example"; // string | 
$unit_cost = 1.2; // double | 
$fix_sell_price = true; // bool | 
$fix_price = true; // bool | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$forward_order_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$scheduled_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$line_total = 1.2; // double | 
$weight = 1.2; // double | 
$cubic = 1.2; // double | 
$quoted_discounted_price = 1.2; // double | 
$quoted_discount_percentage = 1.2; // double | 
$discounted_percentage = 1.2; // double | 
$discount_given = 1.2; // double | 
$quantity_decimal_places = 1.2; // double | 
$quantity_original_ordered = 1.2; // double | 
$sales_order_serial_stock_selection_types = "sales_order_serial_stock_selection_types_example"; // string | 
$non_inventory = true; // bool | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$comment_text = "comment_text_example"; // string | 
$aux2 = "aux2_example"; // string | 
$line_link_id = "line_link_id_example"; // string | 
$edi_store_location_code = "edi_store_location_code_example"; // string | 
$edidc_location_code = "edidc_location_code_example"; // string | 
$cost_center = "cost_center_example"; // string | 
$stage = "stage_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$line_details = "line_details_example"; // string | 
$shipping_labels = "shipping_labels_example"; // string | 
$unit_of_measure = "unit_of_measure_example"; // string | 
$kit_line_type = "kit_line_type_example"; // string | 
$kit_units = 1.2; // double | 
$kit_header_line_id = "kit_header_line_id_example"; // string | 
$body = new \Jiwa\Model\SalesOrderLinePOSTRequest(); // \Jiwa\Model\SalesOrderLinePOSTRequest | 

try {
    $result = $apiInstance->salesOrderLinePOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $item_no, $comment_line, $quantity_ordered, $quantity_demand, $quantity_this_del, $quantity_back_ord, $picked, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $fix_sell_price, $fix_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $forward_order_date, $scheduled_date, $line_total, $weight, $cubic, $quoted_discounted_price, $quoted_discount_percentage, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $sales_order_serial_stock_selection_types, $non_inventory, $inventory_id, $part_no, $description, $comment_text, $aux2, $line_link_id, $edi_store_location_code, $edidc_location_code, $cost_center, $stage, $custom_field_values, $line_details, $shipping_labels, $unit_of_measure, $kit_line_type, $kit_units, $kit_header_line_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLinePOSTRequestInvoiceIDHistorysInvoiceHistoryIDLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **comment_line** | **bool**|  | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **quantity_demand** | **double**|  | [optional]
 **quantity_this_del** | **double**|  | [optional]
 **quantity_back_ord** | **double**|  | [optional]
 **picked** | **bool**|  | [optional]
 **price_ex_gst** | **double**|  | [optional]
 **price_inc_gst** | **double**|  | [optional]
 **discounted_price** | **double**|  | [optional]
 **tax_to_charge** | **double**|  | [optional]
 **tax_rate** | **string**|  | [optional]
 **unit_cost** | **double**|  | [optional]
 **fix_sell_price** | **bool**|  | [optional]
 **fix_price** | **bool**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **forward_order_date** | **\DateTime**|  | [optional]
 **scheduled_date** | **\DateTime**|  | [optional]
 **line_total** | **double**|  | [optional]
 **weight** | **double**|  | [optional]
 **cubic** | **double**|  | [optional]
 **quoted_discounted_price** | **double**|  | [optional]
 **quoted_discount_percentage** | **double**|  | [optional]
 **discounted_percentage** | **double**|  | [optional]
 **discount_given** | **double**|  | [optional]
 **quantity_decimal_places** | **double**|  | [optional]
 **quantity_original_ordered** | **double**|  | [optional]
 **sales_order_serial_stock_selection_types** | **string**|  | [optional]
 **non_inventory** | **bool**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **comment_text** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **line_link_id** | **string**|  | [optional]
 **edi_store_location_code** | **string**|  | [optional]
 **edidc_location_code** | **string**|  | [optional]
 **cost_center** | **string**|  | [optional]
 **stage** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **line_details** | **string**|  | [optional]
 **shipping_labels** | **string**|  | [optional]
 **unit_of_measure** | **string**|  | [optional]
 **kit_line_type** | **string**|  | [optional]
 **kit_units** | **double**|  | [optional]
 **kit_header_line_id** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderLinePOSTRequest**](../Model/SalesOrderLinePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLine**](../Model/SalesOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderLinesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesGet**
> \Jiwa\Model\SalesOrderLine[] salesOrderLinesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful)

Retrieves a list of sales order lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderLinesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesGet($accept, $invoice_id, $invoice_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderLinesGETManyRequestInvoiceIDHistorysInvoiceHistoryIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderLine[]**](../Model/SalesOrderLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteDELETERequestInvoiceIDNotesNoteIDDelete**
> \Jiwa\Model\Object salesOrderNoteDELETERequestInvoiceIDNotesNoteIDDelete($accept, $invoice_id, $note_id, $jiwa_stateful)

Deletes a sales order note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderNoteDELETERequestInvoiceIDNotesNoteIDDelete($accept, $invoice_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteDELETERequestInvoiceIDNotesNoteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteGETRequestInvoiceIDNotesNoteIDGet**
> \Jiwa\Model\Note salesOrderNoteGETRequestInvoiceIDNotesNoteIDGet($accept, $invoice_id, $note_id, $jiwa_stateful)

Retrieves a sales order note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderNoteGETRequestInvoiceIDNotesNoteIDGet($accept, $invoice_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteGETRequestInvoiceIDNotesNoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNotePATCHRequestInvoiceIDNotesNoteIDUpdate**
> \Jiwa\Model\Note salesOrderNotePATCHRequestInvoiceIDNotesNoteIDUpdate($accept, $invoice_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Updates a sales order note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$note_type = "note_type_example"; // string | 
$line_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$note_text = "note_text_example"; // string | 
$body = new \Jiwa\Model\SalesOrderNotePATCHRequest(); // \Jiwa\Model\SalesOrderNotePATCHRequest | 

try {
    $result = $apiInstance->salesOrderNotePATCHRequestInvoiceIDNotesNoteIDUpdate($accept, $invoice_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNotePATCHRequestInvoiceIDNotesNoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **note_type** | **string**|  | [optional]
 **line_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **note_text** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderNotePATCHRequest**](../Model/SalesOrderNotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNotePOSTRequestInvoiceIDNotesPost**
> \Jiwa\Model\Note salesOrderNotePOSTRequestInvoiceIDNotesPost($accept, $invoice_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Appends a note to a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$note_type = "note_type_example"; // string | 
$line_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$note_text = "note_text_example"; // string | 
$body = new \Jiwa\Model\SalesOrderNotePOSTRequest(); // \Jiwa\Model\SalesOrderNotePOSTRequest | 

try {
    $result = $apiInstance->salesOrderNotePOSTRequestInvoiceIDNotesPost($accept, $invoice_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNotePOSTRequestInvoiceIDNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **note_type** | **string**|  | [optional]
 **line_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **note_text** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderNotePOSTRequest**](../Model/SalesOrderNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**
> \Jiwa\Model\Object salesOrderNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful)

Deletes a sales order note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteTypeDELETERequestNoteTypesNoteTypeIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **note_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteTypeGETRequestNoteTypesNoteTypeIDGet**
> \Jiwa\Model\NoteType salesOrderNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful)

Retrieves a sales order note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteTypeGETRequestNoteTypesNoteTypeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **note_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**
> \Jiwa\Model\NoteType salesOrderNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a sales order note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\SalesOrderNoteTypePATCHRequest(); // \Jiwa\Model\SalesOrderNoteTypePATCHRequest | 

try {
    $result = $apiInstance->salesOrderNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **note_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderNoteTypePATCHRequest**](../Model/SalesOrderNoteTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteTypePOSTRequestNoteTypesPost**
> \Jiwa\Model\NoteType salesOrderNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new sales order note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\SalesOrderNoteTypePOSTRequest(); // \Jiwa\Model\SalesOrderNoteTypePOSTRequest | 

try {
    $result = $apiInstance->salesOrderNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteTypePOSTRequestNoteTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderNoteTypePOSTRequest**](../Model/SalesOrderNoteTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNoteTypesGETManyRequestNoteTypesGet**
> \Jiwa\Model\NoteType[] salesOrderNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful)

Retrieves a list of sales order note types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNoteTypesGETManyRequestNoteTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\NoteType[]**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderNotesGETManyRequestInvoiceIDNotesGet**
> \Jiwa\Model\Note[] salesOrderNotesGETManyRequestInvoiceIDNotesGet($accept, $invoice_id, $jiwa_stateful)

Retrieves a list of sales order notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderNotesGETManyRequestInvoiceIDNotesGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderNotesGETManyRequestInvoiceIDNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Note[]**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPATCHRequestInvoiceIDUpdate**
> \Jiwa\Model\SalesOrder salesOrderPATCHRequestInvoiceIDUpdate($accept, $invoice_id, $jiwa_stateful, $type, $system_settings, $last_saved_date_time, $initiated_date, $invoice_init_date, $sales_order_type, $order_type, $status, $edi_status, $bill_type, $expected_delivery_date, $delivered_date, $delivered, $edi_pick_status, $edi_order_type, $edi_deliver_not_before_date, $edi_deliver_not_after_date, $cash_sales, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $rcti_amount, $rcti_date, $job_costing, $invoice_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $credit_note, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_description, $branch_name, $order_no, $so_reference, $sender_edi_address, $receiver_edi_address, $edi_vendor_number, $edi_buyer_number, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $ediasn, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $rcti_no, $custom_field_values, $notes, $documents, $payments, $lines, $histories, $as_ns, $body)

Updates a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$type = "type_example"; // string | 
$system_settings = "system_settings_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$initiated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_init_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sales_order_type = "sales_order_type_example"; // string | 
$order_type = "order_type_example"; // string | 
$status = "status_example"; // string | 
$edi_status = "edi_status_example"; // string | 
$bill_type = "bill_type_example"; // string | 
$expected_delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered = true; // bool | 
$edi_pick_status = "edi_pick_status_example"; // string | 
$edi_order_type = "edi_order_type_example"; // string | 
$edi_deliver_not_before_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$edi_deliver_not_after_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$cash_sales = "cash_sales_example"; // string | 
$drop_shipment = true; // bool | 
$cartage1_ex_gst = 1.2; // double | 
$cartage1_gst_rate = 1.2; // double | 
$cartage1_gst = 1.2; // double | 
$cartage2_ex_gst = 1.2; // double | 
$cartage2_gst_rate = 1.2; // double | 
$cartage2_gst = 1.2; // double | 
$cartage3_ex_gst = 1.2; // double | 
$cartage3_gst_rate = 1.2; // double | 
$cartage3_gst = 1.2; // double | 
$rcti_amount = 1.2; // double | 
$rcti_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$job_costing = "job_costing_example"; // string | 
$invoice_no = "invoice_no_example"; // string | 
$logical_id = "logical_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$credit_note = true; // bool | 
$staff_id = "staff_id_example"; // string | 
$staff_user_name = "staff_user_name_example"; // string | 
$staff_title = "staff_title_example"; // string | 
$staff_first_name = "staff_first_name_example"; // string | 
$staff_surname = "staff_surname_example"; // string | 
$branch_id = "branch_id_example"; // string | 
$branch_description = "branch_description_example"; // string | 
$branch_name = "branch_name_example"; // string | 
$order_no = "order_no_example"; // string | 
$so_reference = "so_reference_example"; // string | 
$sender_edi_address = "sender_edi_address_example"; // string | 
$receiver_edi_address = "receiver_edi_address_example"; // string | 
$edi_vendor_number = "edi_vendor_number_example"; // string | 
$edi_buyer_number = "edi_buyer_number_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$debtor_email_address = "debtor_email_address_example"; // string | 
$debtor_contact_name = "debtor_contact_name_example"; // string | 
$ediasn = "ediasn_example"; // string | 
$delivery_addressee = "delivery_addressee_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_address_suburb = "delivery_address_suburb_example"; // string | 
$delivery_address_state = "delivery_address_state_example"; // string | 
$delivery_address_contact_name = "delivery_address_contact_name_example"; // string | 
$delivery_address_postcode = "delivery_address_postcode_example"; // string | 
$delivery_address_country = "delivery_address_country_example"; // string | 
$delivery_address_notes = "delivery_address_notes_example"; // string | 
$delivery_address_courier_details = "delivery_address_courier_details_example"; // string | 
$rcti_no = "rcti_no_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$payments = "payments_example"; // string | 
$lines = "lines_example"; // string | 
$histories = "histories_example"; // string | 
$as_ns = "as_ns_example"; // string | 
$body = new \Jiwa\Model\SalesOrderPATCHRequest(); // \Jiwa\Model\SalesOrderPATCHRequest | 

try {
    $result = $apiInstance->salesOrderPATCHRequestInvoiceIDUpdate($accept, $invoice_id, $jiwa_stateful, $type, $system_settings, $last_saved_date_time, $initiated_date, $invoice_init_date, $sales_order_type, $order_type, $status, $edi_status, $bill_type, $expected_delivery_date, $delivered_date, $delivered, $edi_pick_status, $edi_order_type, $edi_deliver_not_before_date, $edi_deliver_not_after_date, $cash_sales, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $rcti_amount, $rcti_date, $job_costing, $invoice_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $credit_note, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_description, $branch_name, $order_no, $so_reference, $sender_edi_address, $receiver_edi_address, $edi_vendor_number, $edi_buyer_number, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $ediasn, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $rcti_no, $custom_field_values, $notes, $documents, $payments, $lines, $histories, $as_ns, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPATCHRequestInvoiceIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **type** | **string**|  | [optional]
 **system_settings** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **initiated_date** | **\DateTime**|  | [optional]
 **invoice_init_date** | **\DateTime**|  | [optional]
 **sales_order_type** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **edi_status** | **string**|  | [optional]
 **bill_type** | **string**|  | [optional]
 **expected_delivery_date** | **\DateTime**|  | [optional]
 **delivered_date** | **\DateTime**|  | [optional]
 **delivered** | **bool**|  | [optional]
 **edi_pick_status** | **string**|  | [optional]
 **edi_order_type** | **string**|  | [optional]
 **edi_deliver_not_before_date** | **\DateTime**|  | [optional]
 **edi_deliver_not_after_date** | **\DateTime**|  | [optional]
 **cash_sales** | **string**|  | [optional]
 **drop_shipment** | **bool**|  | [optional]
 **cartage1_ex_gst** | **double**|  | [optional]
 **cartage1_gst_rate** | **double**|  | [optional]
 **cartage1_gst** | **double**|  | [optional]
 **cartage2_ex_gst** | **double**|  | [optional]
 **cartage2_gst_rate** | **double**|  | [optional]
 **cartage2_gst** | **double**|  | [optional]
 **cartage3_ex_gst** | **double**|  | [optional]
 **cartage3_gst_rate** | **double**|  | [optional]
 **cartage3_gst** | **double**|  | [optional]
 **rcti_amount** | **double**|  | [optional]
 **rcti_date** | **\DateTime**|  | [optional]
 **job_costing** | **string**|  | [optional]
 **invoice_no** | **string**|  | [optional]
 **logical_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **credit_note** | **bool**|  | [optional]
 **staff_id** | **string**|  | [optional]
 **staff_user_name** | **string**|  | [optional]
 **staff_title** | **string**|  | [optional]
 **staff_first_name** | **string**|  | [optional]
 **staff_surname** | **string**|  | [optional]
 **branch_id** | **string**|  | [optional]
 **branch_description** | **string**|  | [optional]
 **branch_name** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **so_reference** | **string**|  | [optional]
 **sender_edi_address** | **string**|  | [optional]
 **receiver_edi_address** | **string**|  | [optional]
 **edi_vendor_number** | **string**|  | [optional]
 **edi_buyer_number** | **string**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **debtor_email_address** | **string**|  | [optional]
 **debtor_contact_name** | **string**|  | [optional]
 **ediasn** | **string**|  | [optional]
 **delivery_addressee** | **string**|  | [optional]
 **delivery_address1** | **string**|  | [optional]
 **delivery_address2** | **string**|  | [optional]
 **delivery_address_suburb** | **string**|  | [optional]
 **delivery_address_state** | **string**|  | [optional]
 **delivery_address_contact_name** | **string**|  | [optional]
 **delivery_address_postcode** | **string**|  | [optional]
 **delivery_address_country** | **string**|  | [optional]
 **delivery_address_notes** | **string**|  | [optional]
 **delivery_address_courier_details** | **string**|  | [optional]
 **rcti_no** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **payments** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **histories** | **string**|  | [optional]
 **as_ns** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderPATCHRequest**](../Model/SalesOrderPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPOSTRequestPost**
> \Jiwa\Model\SalesOrder salesOrderPOSTRequestPost($accept, $jiwa_stateful, $type, $system_settings, $initiated_date, $invoice_init_date, $sales_order_type, $order_type, $status, $edi_status, $bill_type, $expected_delivery_date, $delivered_date, $delivered, $edi_pick_status, $edi_order_type, $edi_deliver_not_before_date, $edi_deliver_not_after_date, $cash_sales, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $rcti_amount, $rcti_date, $job_costing, $invoice_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $credit_note, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_description, $branch_name, $order_no, $so_reference, $sender_edi_address, $receiver_edi_address, $edi_vendor_number, $edi_buyer_number, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $ediasn, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $rcti_no, $custom_field_values, $notes, $documents, $payments, $lines, $histories, $as_ns, $body)

Creates a new sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$type = "type_example"; // string | 
$system_settings = "system_settings_example"; // string | 
$initiated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_init_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sales_order_type = "sales_order_type_example"; // string | 
$order_type = "order_type_example"; // string | 
$status = "status_example"; // string | 
$edi_status = "edi_status_example"; // string | 
$bill_type = "bill_type_example"; // string | 
$expected_delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$delivered = true; // bool | 
$edi_pick_status = "edi_pick_status_example"; // string | 
$edi_order_type = "edi_order_type_example"; // string | 
$edi_deliver_not_before_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$edi_deliver_not_after_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$cash_sales = "cash_sales_example"; // string | 
$drop_shipment = true; // bool | 
$cartage1_ex_gst = 1.2; // double | 
$cartage1_gst_rate = 1.2; // double | 
$cartage1_gst = 1.2; // double | 
$cartage2_ex_gst = 1.2; // double | 
$cartage2_gst_rate = 1.2; // double | 
$cartage2_gst = 1.2; // double | 
$cartage3_ex_gst = 1.2; // double | 
$cartage3_gst_rate = 1.2; // double | 
$cartage3_gst = 1.2; // double | 
$rcti_amount = 1.2; // double | 
$rcti_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$job_costing = "job_costing_example"; // string | 
$invoice_no = "invoice_no_example"; // string | 
$logical_id = "logical_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$credit_note = true; // bool | 
$staff_id = "staff_id_example"; // string | 
$staff_user_name = "staff_user_name_example"; // string | 
$staff_title = "staff_title_example"; // string | 
$staff_first_name = "staff_first_name_example"; // string | 
$staff_surname = "staff_surname_example"; // string | 
$branch_id = "branch_id_example"; // string | 
$branch_description = "branch_description_example"; // string | 
$branch_name = "branch_name_example"; // string | 
$order_no = "order_no_example"; // string | 
$so_reference = "so_reference_example"; // string | 
$sender_edi_address = "sender_edi_address_example"; // string | 
$receiver_edi_address = "receiver_edi_address_example"; // string | 
$edi_vendor_number = "edi_vendor_number_example"; // string | 
$edi_buyer_number = "edi_buyer_number_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$debtor_email_address = "debtor_email_address_example"; // string | 
$debtor_contact_name = "debtor_contact_name_example"; // string | 
$ediasn = "ediasn_example"; // string | 
$delivery_addressee = "delivery_addressee_example"; // string | 
$delivery_address1 = "delivery_address1_example"; // string | 
$delivery_address2 = "delivery_address2_example"; // string | 
$delivery_address_suburb = "delivery_address_suburb_example"; // string | 
$delivery_address_state = "delivery_address_state_example"; // string | 
$delivery_address_contact_name = "delivery_address_contact_name_example"; // string | 
$delivery_address_postcode = "delivery_address_postcode_example"; // string | 
$delivery_address_country = "delivery_address_country_example"; // string | 
$delivery_address_notes = "delivery_address_notes_example"; // string | 
$delivery_address_courier_details = "delivery_address_courier_details_example"; // string | 
$rcti_no = "rcti_no_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$payments = "payments_example"; // string | 
$lines = "lines_example"; // string | 
$histories = "histories_example"; // string | 
$as_ns = "as_ns_example"; // string | 
$body = new \Jiwa\Model\SalesOrderPOSTRequest(); // \Jiwa\Model\SalesOrderPOSTRequest | 

try {
    $result = $apiInstance->salesOrderPOSTRequestPost($accept, $jiwa_stateful, $type, $system_settings, $initiated_date, $invoice_init_date, $sales_order_type, $order_type, $status, $edi_status, $bill_type, $expected_delivery_date, $delivered_date, $delivered, $edi_pick_status, $edi_order_type, $edi_deliver_not_before_date, $edi_deliver_not_after_date, $cash_sales, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $rcti_amount, $rcti_date, $job_costing, $invoice_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $credit_note, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_description, $branch_name, $order_no, $so_reference, $sender_edi_address, $receiver_edi_address, $edi_vendor_number, $edi_buyer_number, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $ediasn, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $rcti_no, $custom_field_values, $notes, $documents, $payments, $lines, $histories, $as_ns, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **type** | **string**|  | [optional]
 **system_settings** | **string**|  | [optional]
 **initiated_date** | **\DateTime**|  | [optional]
 **invoice_init_date** | **\DateTime**|  | [optional]
 **sales_order_type** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **edi_status** | **string**|  | [optional]
 **bill_type** | **string**|  | [optional]
 **expected_delivery_date** | **\DateTime**|  | [optional]
 **delivered_date** | **\DateTime**|  | [optional]
 **delivered** | **bool**|  | [optional]
 **edi_pick_status** | **string**|  | [optional]
 **edi_order_type** | **string**|  | [optional]
 **edi_deliver_not_before_date** | **\DateTime**|  | [optional]
 **edi_deliver_not_after_date** | **\DateTime**|  | [optional]
 **cash_sales** | **string**|  | [optional]
 **drop_shipment** | **bool**|  | [optional]
 **cartage1_ex_gst** | **double**|  | [optional]
 **cartage1_gst_rate** | **double**|  | [optional]
 **cartage1_gst** | **double**|  | [optional]
 **cartage2_ex_gst** | **double**|  | [optional]
 **cartage2_gst_rate** | **double**|  | [optional]
 **cartage2_gst** | **double**|  | [optional]
 **cartage3_ex_gst** | **double**|  | [optional]
 **cartage3_gst_rate** | **double**|  | [optional]
 **cartage3_gst** | **double**|  | [optional]
 **rcti_amount** | **double**|  | [optional]
 **rcti_date** | **\DateTime**|  | [optional]
 **job_costing** | **string**|  | [optional]
 **invoice_no** | **string**|  | [optional]
 **logical_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **credit_note** | **bool**|  | [optional]
 **staff_id** | **string**|  | [optional]
 **staff_user_name** | **string**|  | [optional]
 **staff_title** | **string**|  | [optional]
 **staff_first_name** | **string**|  | [optional]
 **staff_surname** | **string**|  | [optional]
 **branch_id** | **string**|  | [optional]
 **branch_description** | **string**|  | [optional]
 **branch_name** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **so_reference** | **string**|  | [optional]
 **sender_edi_address** | **string**|  | [optional]
 **receiver_edi_address** | **string**|  | [optional]
 **edi_vendor_number** | **string**|  | [optional]
 **edi_buyer_number** | **string**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **debtor_email_address** | **string**|  | [optional]
 **debtor_contact_name** | **string**|  | [optional]
 **ediasn** | **string**|  | [optional]
 **delivery_addressee** | **string**|  | [optional]
 **delivery_address1** | **string**|  | [optional]
 **delivery_address2** | **string**|  | [optional]
 **delivery_address_suburb** | **string**|  | [optional]
 **delivery_address_state** | **string**|  | [optional]
 **delivery_address_contact_name** | **string**|  | [optional]
 **delivery_address_postcode** | **string**|  | [optional]
 **delivery_address_country** | **string**|  | [optional]
 **delivery_address_notes** | **string**|  | [optional]
 **delivery_address_courier_details** | **string**|  | [optional]
 **rcti_no** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **payments** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **histories** | **string**|  | [optional]
 **as_ns** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderPOSTRequest**](../Model/SalesOrderPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPROCESSRequestInvoiceIDProcessGet**
> \Jiwa\Model\SalesOrder salesOrderPROCESSRequestInvoiceIDProcessGet($accept, $invoice_id, $jiwa_stateful)

Processes a sales order.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPROCESSRequestInvoiceIDProcessGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPROCESSRequestInvoiceIDProcessGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentTypesDELETERequestPaymentTypesPaymentTypeIDDelete**
> \Jiwa\Model\Object salesOrderPaymentTypesDELETERequestPaymentTypesPaymentTypeIDDelete($accept, $payment_type_id, $jiwa_stateful)

Deletes a payment type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$payment_type_id = "payment_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPaymentTypesDELETERequestPaymentTypesPaymentTypeIDDelete($accept, $payment_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentTypesDELETERequestPaymentTypesPaymentTypeIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **payment_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentTypesGETManyRequestPaymentTypesGet**
> \Jiwa\Model\PaymentType[] salesOrderPaymentTypesGETManyRequestPaymentTypesGet($accept, $jiwa_stateful)

Retrieves a list of payment types



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPaymentTypesGETManyRequestPaymentTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentTypesGETManyRequestPaymentTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PaymentType[]**](../Model/PaymentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentTypesGETRequestPaymentTypesPaymentTypeIDGet**
> \Jiwa\Model\PaymentType salesOrderPaymentTypesGETRequestPaymentTypesPaymentTypeIDGet($accept, $payment_type_id, $jiwa_stateful)

Retrieves a payment type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$payment_type_id = "payment_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPaymentTypesGETRequestPaymentTypesPaymentTypeIDGet($accept, $payment_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentTypesGETRequestPaymentTypesPaymentTypeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **payment_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PaymentType**](../Model/PaymentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentTypesPATCHRequestPaymentTypesPaymentTypeIDUpdate**
> \Jiwa\Model\PaymentType salesOrderPaymentTypesPATCHRequestPaymentTypesPaymentTypeIDUpdate($accept, $payment_type_id, $jiwa_stateful, $name, $code, $item_no, $is_enabled, $is_default, $is_credit_card, $is_pos, $general_ledger_account, $body)

Updates a payment type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$payment_type_id = "payment_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$code = "code_example"; // string | 
$item_no = 56; // int | 
$is_enabled = true; // bool | 
$is_default = true; // bool | 
$is_credit_card = true; // bool | 
$is_pos = true; // bool | 
$general_ledger_account = "general_ledger_account_example"; // string | 
$body = new \Jiwa\Model\SalesOrderPaymentTypesPATCHRequest(); // \Jiwa\Model\SalesOrderPaymentTypesPATCHRequest | 

try {
    $result = $apiInstance->salesOrderPaymentTypesPATCHRequestPaymentTypesPaymentTypeIDUpdate($accept, $payment_type_id, $jiwa_stateful, $name, $code, $item_no, $is_enabled, $is_default, $is_credit_card, $is_pos, $general_ledger_account, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentTypesPATCHRequestPaymentTypesPaymentTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **payment_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **item_no** | **int**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **is_credit_card** | **bool**|  | [optional]
 **is_pos** | **bool**|  | [optional]
 **general_ledger_account** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderPaymentTypesPATCHRequest**](../Model/SalesOrderPaymentTypesPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PaymentType**](../Model/PaymentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentTypesPOSTRequestPaymentTypesPost**
> \Jiwa\Model\PaymentType salesOrderPaymentTypesPOSTRequestPaymentTypesPost($accept, $jiwa_stateful, $name, $code, $item_no, $is_enabled, $is_default, $is_credit_card, $is_pos, $general_ledger_account, $body)

Adds a payment type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$code = "code_example"; // string | 
$item_no = 56; // int | 
$is_enabled = true; // bool | 
$is_default = true; // bool | 
$is_credit_card = true; // bool | 
$is_pos = true; // bool | 
$general_ledger_account = "general_ledger_account_example"; // string | 
$body = new \Jiwa\Model\SalesOrderPaymentTypesPOSTRequest(); // \Jiwa\Model\SalesOrderPaymentTypesPOSTRequest | 

try {
    $result = $apiInstance->salesOrderPaymentTypesPOSTRequestPaymentTypesPost($accept, $jiwa_stateful, $name, $code, $item_no, $is_enabled, $is_default, $is_credit_card, $is_pos, $general_ledger_account, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentTypesPOSTRequestPaymentTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **code** | **string**|  | [optional]
 **item_no** | **int**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **is_credit_card** | **bool**|  | [optional]
 **is_pos** | **bool**|  | [optional]
 **general_ledger_account** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderPaymentTypesPOSTRequest**](../Model/SalesOrderPaymentTypesPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PaymentType**](../Model/PaymentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentsDELETERequestInvoiceIDPaymentsPaymentIDDelete**
> \Jiwa\Model\Object salesOrderPaymentsDELETERequestInvoiceIDPaymentsPaymentIDDelete($accept, $invoice_id, $payment_id, $jiwa_stateful)

Deletes a payment for a sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPaymentsDELETERequestInvoiceIDPaymentsPaymentIDDelete($accept, $invoice_id, $payment_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentsDELETERequestInvoiceIDPaymentsPaymentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **payment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentsGETManyRequestInvoiceIDPaymentsGet**
> \Jiwa\Model\SalesOrderPayment[] salesOrderPaymentsGETManyRequestInvoiceIDPaymentsGet($accept, $invoice_id, $jiwa_stateful)

Retrieves a list of payments for a sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPaymentsGETManyRequestInvoiceIDPaymentsGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentsGETManyRequestInvoiceIDPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderPayment[]**](../Model/SalesOrderPayment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentsGETRequestInvoiceIDPaymentsPaymentIDGet**
> \Jiwa\Model\SalesOrderPayment salesOrderPaymentsGETRequestInvoiceIDPaymentsPaymentIDGet($accept, $invoice_id, $payment_id, $jiwa_stateful)

Retrieves a payment for a sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderPaymentsGETRequestInvoiceIDPaymentsPaymentIDGet($accept, $invoice_id, $payment_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentsGETRequestInvoiceIDPaymentsPaymentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **payment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrderPayment**](../Model/SalesOrderPayment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentsPATCHRequestInvoiceIDPaymentsPaymentIDUpdate**
> \Jiwa\Model\SalesOrderPayment salesOrderPaymentsPATCHRequestInvoiceIDPaymentsPaymentIDUpdate($accept, $invoice_id, $payment_id, $jiwa_stateful, $history_no, $payment_type, $amount_paid, $payment_date, $process_payment, $authorisation_status, $payment_gateway_return_code, $processed, $card_expiry, $payment_ref, $authorisation_number, $payment_gateway_return_message, $card_number, $card_holder, $bank_name, $bsbn, $bank_acc, $account_name, $body)

Updates a payment for a sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$payment_id = "payment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$history_no = 56; // int | 
$payment_type = "payment_type_example"; // string | 
$amount_paid = 1.2; // double | 
$payment_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$process_payment = true; // bool | 
$authorisation_status = "authorisation_status_example"; // string | 
$payment_gateway_return_code = 56; // int | 
$processed = true; // bool | 
$card_expiry = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payment_ref = "payment_ref_example"; // string | 
$authorisation_number = "authorisation_number_example"; // string | 
$payment_gateway_return_message = "payment_gateway_return_message_example"; // string | 
$card_number = "card_number_example"; // string | 
$card_holder = "card_holder_example"; // string | 
$bank_name = "bank_name_example"; // string | 
$bsbn = "bsbn_example"; // string | 
$bank_acc = "bank_acc_example"; // string | 
$account_name = "account_name_example"; // string | 
$body = new \Jiwa\Model\SalesOrderPaymentsPATCHRequest(); // \Jiwa\Model\SalesOrderPaymentsPATCHRequest | 

try {
    $result = $apiInstance->salesOrderPaymentsPATCHRequestInvoiceIDPaymentsPaymentIDUpdate($accept, $invoice_id, $payment_id, $jiwa_stateful, $history_no, $payment_type, $amount_paid, $payment_date, $process_payment, $authorisation_status, $payment_gateway_return_code, $processed, $card_expiry, $payment_ref, $authorisation_number, $payment_gateway_return_message, $card_number, $card_holder, $bank_name, $bsbn, $bank_acc, $account_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentsPATCHRequestInvoiceIDPaymentsPaymentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **payment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **history_no** | **int**|  | [optional]
 **payment_type** | **string**|  | [optional]
 **amount_paid** | **double**|  | [optional]
 **payment_date** | **\DateTime**|  | [optional]
 **process_payment** | **bool**|  | [optional]
 **authorisation_status** | **string**|  | [optional]
 **payment_gateway_return_code** | **int**|  | [optional]
 **processed** | **bool**|  | [optional]
 **card_expiry** | **\DateTime**|  | [optional]
 **payment_ref** | **string**|  | [optional]
 **authorisation_number** | **string**|  | [optional]
 **payment_gateway_return_message** | **string**|  | [optional]
 **card_number** | **string**|  | [optional]
 **card_holder** | **string**|  | [optional]
 **bank_name** | **string**|  | [optional]
 **bsbn** | **string**|  | [optional]
 **bank_acc** | **string**|  | [optional]
 **account_name** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderPaymentsPATCHRequest**](../Model/SalesOrderPaymentsPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderPayment**](../Model/SalesOrderPayment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderPaymentsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDPaymentsPost**
> \Jiwa\Model\SalesOrderPayment salesOrderPaymentsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDPaymentsPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $payment_type, $amount_paid, $payment_date, $process_payment, $authorisation_status, $payment_gateway_return_code, $processed, $card_expiry, $payment_ref, $authorisation_number, $payment_gateway_return_message, $card_number, $card_holder, $bank_name, $bsbn, $bank_acc, $account_name, $body)

Adds a payment to a sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$invoice_history_id = "invoice_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$payment_type = "payment_type_example"; // string | 
$amount_paid = 1.2; // double | 
$payment_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$process_payment = true; // bool | 
$authorisation_status = "authorisation_status_example"; // string | 
$payment_gateway_return_code = 56; // int | 
$processed = true; // bool | 
$card_expiry = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$payment_ref = "payment_ref_example"; // string | 
$authorisation_number = "authorisation_number_example"; // string | 
$payment_gateway_return_message = "payment_gateway_return_message_example"; // string | 
$card_number = "card_number_example"; // string | 
$card_holder = "card_holder_example"; // string | 
$bank_name = "bank_name_example"; // string | 
$bsbn = "bsbn_example"; // string | 
$bank_acc = "bank_acc_example"; // string | 
$account_name = "account_name_example"; // string | 
$body = new \Jiwa\Model\SalesOrderPaymentsPOSTRequest(); // \Jiwa\Model\SalesOrderPaymentsPOSTRequest | 

try {
    $result = $apiInstance->salesOrderPaymentsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDPaymentsPost($accept, $invoice_id, $invoice_history_id, $jiwa_stateful, $payment_type, $amount_paid, $payment_date, $process_payment, $authorisation_status, $payment_gateway_return_code, $processed, $card_expiry, $payment_ref, $authorisation_number, $payment_gateway_return_message, $card_number, $card_holder, $bank_name, $bsbn, $bank_acc, $account_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderPaymentsPOSTRequestInvoiceIDHistorysInvoiceHistoryIDPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **invoice_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **payment_type** | **string**|  | [optional]
 **amount_paid** | **double**|  | [optional]
 **payment_date** | **\DateTime**|  | [optional]
 **process_payment** | **bool**|  | [optional]
 **authorisation_status** | **string**|  | [optional]
 **payment_gateway_return_code** | **int**|  | [optional]
 **processed** | **bool**|  | [optional]
 **card_expiry** | **\DateTime**|  | [optional]
 **payment_ref** | **string**|  | [optional]
 **authorisation_number** | **string**|  | [optional]
 **payment_gateway_return_message** | **string**|  | [optional]
 **card_number** | **string**|  | [optional]
 **card_holder** | **string**|  | [optional]
 **bank_name** | **string**|  | [optional]
 **bsbn** | **string**|  | [optional]
 **bank_acc** | **string**|  | [optional]
 **account_name** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\SalesOrderPaymentsPOSTRequest**](../Model/SalesOrderPaymentsPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SalesOrderPayment**](../Model/SalesOrderPayment.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderSAVERequestInvoiceIDSaveGet**
> \Jiwa\Model\SalesOrder salesOrderSAVERequestInvoiceIDSaveGet($accept, $invoice_id, $jiwa_stateful)

Saves a stateful sales order.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful sales order exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$invoice_id = "invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesOrderSAVERequestInvoiceIDSaveGet($accept, $invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->salesOrderSAVERequestInvoiceIDSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

