# Jiwa\PurchaseInvoicesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**purchaseInvoiceABANDONRequestAbandonDelete**](PurchaseInvoicesApi.md#purchaseInvoiceABANDONRequestAbandonDelete) | **DELETE** /PurchaseInvoices/Abandon | Abandons a stateful purchase invoice.
[**purchaseInvoiceACTIVATERequestActivatePurchaseInvoiceIDPost**](PurchaseInvoicesApi.md#purchaseInvoiceACTIVATERequestActivatePurchaseInvoiceIDPost) | **POST** /PurchaseInvoices/Activate/{PurchaseInvoiceID} | Activates a purchase invoice.
[**purchaseInvoiceCREATEFromGRNRequestFromGoodsReceivedNotesGRNNosPost**](PurchaseInvoicesApi.md#purchaseInvoiceCREATEFromGRNRequestFromGoodsReceivedNotesGRNNosPost) | **POST** /PurchaseInvoices/FromGoodsReceivedNotes/{GRNNos} | Creates a purchase invoice from the supplied goods received notes.
[**purchaseInvoiceDELETERequestPurchaseInvoiceIDDelete**](PurchaseInvoicesApi.md#purchaseInvoiceDELETERequestPurchaseInvoiceIDDelete) | **DELETE** /PurchaseInvoices/{PurchaseInvoiceID} | Deletes a purchase invoice.
[**purchaseInvoiceGETRequestPurchaseInvoiceIDGet**](PurchaseInvoicesApi.md#purchaseInvoiceGETRequestPurchaseInvoiceIDGet) | **GET** /PurchaseInvoices/{PurchaseInvoiceID} | Retrieves a purchase invoice.
[**purchaseInvoiceGoodsReceivedNoteDELETERequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDDelete**](PurchaseInvoicesApi.md#purchaseInvoiceGoodsReceivedNoteDELETERequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDDelete) | **DELETE** /PurchaseInvoices/{PurchaseInvoiceID}/GoodsReceivedNotes/{GRNID} | Deletes a goods received note from a purchase invoice.
[**purchaseInvoiceGoodsReceivedNoteGETRequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDGet**](PurchaseInvoicesApi.md#purchaseInvoiceGoodsReceivedNoteGETRequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDGet) | **GET** /PurchaseInvoices/{PurchaseInvoiceID}/GoodsReceivedNotes/{GRNID} | Retrieves a purchase invoice goods received note.
[**purchaseInvoiceGoodsReceivedNotePOSTRequestPurchaseInvoiceIDGoodsReceivedNotesPost**](PurchaseInvoicesApi.md#purchaseInvoiceGoodsReceivedNotePOSTRequestPurchaseInvoiceIDGoodsReceivedNotesPost) | **POST** /PurchaseInvoices/{PurchaseInvoiceID}/GoodsReceivedNotes | Appends a goods received note to a purchase invoice.
[**purchaseInvoiceGoodsReceivedNotesGETManyRequestPurchaseInvoiceIDGoodsReceivedNotesGet**](PurchaseInvoicesApi.md#purchaseInvoiceGoodsReceivedNotesGETManyRequestPurchaseInvoiceIDGoodsReceivedNotesGet) | **GET** /PurchaseInvoices/{PurchaseInvoiceID}/GoodsReceivedNotes | Retrieves a list of purchase invoice goods received notes.
[**purchaseInvoiceLineGETRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDGet**](PurchaseInvoicesApi.md#purchaseInvoiceLineGETRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDGet) | **GET** /PurchaseInvoices/{PurchaseInvoiceID}/Lines/{PurchaseInvoiceLineID} | Retrieves a purchase invoice line.
[**purchaseInvoiceLinePATCHRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDUpdate**](PurchaseInvoicesApi.md#purchaseInvoiceLinePATCHRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDUpdate) | **PATCH** /PurchaseInvoices/{PurchaseInvoiceID}/Lines/{PurchaseInvoiceLineID} | Updates a line for a purchase invoice.
[**purchaseInvoiceLinesGETManyRequestPurchaseInvoiceIDPurchaseInvoiceLineIDGet**](PurchaseInvoicesApi.md#purchaseInvoiceLinesGETManyRequestPurchaseInvoiceIDPurchaseInvoiceLineIDGet) | **GET** /PurchaseInvoices/{PurchaseInvoiceID}/PurchaseInvoiceLineID | Retrieves a list of purchase invoice lines.
[**purchaseInvoicePATCHRequestPurchaseInvoiceIDUpdate**](PurchaseInvoicesApi.md#purchaseInvoicePATCHRequestPurchaseInvoiceIDUpdate) | **PATCH** /PurchaseInvoices/{PurchaseInvoiceID} | Updates a purchase invoice.
[**purchaseInvoicePOSTRequestPost**](PurchaseInvoicesApi.md#purchaseInvoicePOSTRequestPost) | **POST** /PurchaseInvoices | Creates a purchase invoice.
[**purchaseInvoiceSAVERequestSaveGet**](PurchaseInvoicesApi.md#purchaseInvoiceSAVERequestSaveGet) | **GET** /PurchaseInvoices/Save | Saves a stateful stateful purchase invoice.


# **purchaseInvoiceABANDONRequestAbandonDelete**
> \Jiwa\Model\Object purchaseInvoiceABANDONRequestAbandonDelete($accept, $jiwa_stateful, $purchase_invoice_id)

Abandons a stateful purchase invoice.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful purchase invoice item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 

try {
    $result = $apiInstance->purchaseInvoiceABANDONRequestAbandonDelete($accept, $jiwa_stateful, $purchase_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **purchase_invoice_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceACTIVATERequestActivatePurchaseInvoiceIDPost**
> \Jiwa\Model\PurchaseInvoice purchaseInvoiceACTIVATERequestActivatePurchaseInvoiceIDPost($accept, $purchase_invoice_id, $jiwa_stateful, $body)

Activates a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\Model\PurchaseInvoiceACTIVATERequest(); // \Jiwa\Model\PurchaseInvoiceACTIVATERequest | 

try {
    $result = $apiInstance->purchaseInvoiceACTIVATERequestActivatePurchaseInvoiceIDPost($accept, $purchase_invoice_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceACTIVATERequestActivatePurchaseInvoiceIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\Model\PurchaseInvoiceACTIVATERequest**](../Model/PurchaseInvoiceACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceCREATEFromGRNRequestFromGoodsReceivedNotesGRNNosPost**
> \Jiwa\Model\PurchaseInvoice purchaseInvoiceCREATEFromGRNRequestFromGoodsReceivedNotesGRNNosPost($accept, $grn_nos, $jiwa_stateful, $body)

Creates a purchase invoice from the supplied goods received notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$grn_nos = "grn_nos_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\Model\PurchaseInvoiceCREATEFromGRNRequest(); // \Jiwa\Model\PurchaseInvoiceCREATEFromGRNRequest | 

try {
    $result = $apiInstance->purchaseInvoiceCREATEFromGRNRequestFromGoodsReceivedNotesGRNNosPost($accept, $grn_nos, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceCREATEFromGRNRequestFromGoodsReceivedNotesGRNNosPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **grn_nos** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\Model\PurchaseInvoiceCREATEFromGRNRequest**](../Model/PurchaseInvoiceCREATEFromGRNRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceDELETERequestPurchaseInvoiceIDDelete**
> \Jiwa\Model\Object purchaseInvoiceDELETERequestPurchaseInvoiceIDDelete($accept, $purchase_invoice_id, $jiwa_stateful)

Deletes a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseInvoiceDELETERequestPurchaseInvoiceIDDelete($accept, $purchase_invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceDELETERequestPurchaseInvoiceIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceGETRequestPurchaseInvoiceIDGet**
> \Jiwa\Model\PurchaseInvoice purchaseInvoiceGETRequestPurchaseInvoiceIDGet($accept, $purchase_invoice_id, $jiwa_stateful)

Retrieves a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseInvoiceGETRequestPurchaseInvoiceIDGet($accept, $purchase_invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceGETRequestPurchaseInvoiceIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceGoodsReceivedNoteDELETERequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDDelete**
> \Jiwa\Model\Object purchaseInvoiceGoodsReceivedNoteDELETERequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDDelete($accept, $purchase_invoice_id, $grnid, $jiwa_stateful, $goods_received_note_invoiced_id, $slip_no, $received_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount, $re_main_last_saved_date_time)

Deletes a goods received note from a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$goods_received_note_invoiced_id = "goods_received_note_invoiced_id_example"; // string | 
$slip_no = "slip_no_example"; // string | 
$received_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$re_main_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->purchaseInvoiceGoodsReceivedNoteDELETERequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDDelete($accept, $purchase_invoice_id, $grnid, $jiwa_stateful, $goods_received_note_invoiced_id, $slip_no, $received_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount, $re_main_last_saved_date_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceGoodsReceivedNoteDELETERequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **goods_received_note_invoiced_id** | **string**|  | [optional]
 **slip_no** | **string**|  | [optional]
 **received_date** | **\DateTime**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **re_main_last_saved_date_time** | **\DateTime**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceGoodsReceivedNoteGETRequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDGet**
> \Jiwa\Model\PurchaseInvoiceGoodsReceivedNoteInvoiced purchaseInvoiceGoodsReceivedNoteGETRequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDGet($accept, $purchase_invoice_id, $grnid, $jiwa_stateful)

Retrieves a purchase invoice goods received note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$grnid = "grnid_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseInvoiceGoodsReceivedNoteGETRequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDGet($accept, $purchase_invoice_id, $grnid, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceGoodsReceivedNoteGETRequestPurchaseInvoiceIDGoodsReceivedNotesGRNIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **grnid** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoiceGoodsReceivedNoteInvoiced**](../Model/PurchaseInvoiceGoodsReceivedNoteInvoiced.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceGoodsReceivedNotePOSTRequestPurchaseInvoiceIDGoodsReceivedNotesPost**
> \Jiwa\Model\PurchaseInvoiceGoodsReceivedNoteInvoiced purchaseInvoiceGoodsReceivedNotePOSTRequestPurchaseInvoiceIDGoodsReceivedNotesPost($accept, $purchase_invoice_id, $jiwa_stateful, $grnid, $goods_received_note_invoiced_id, $slip_no, $received_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount, $re_main_last_saved_date_time, $body)

Appends a goods received note to a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$grnid = "grnid_example"; // string | 
$goods_received_note_invoiced_id = "goods_received_note_invoiced_id_example"; // string | 
$slip_no = "slip_no_example"; // string | 
$received_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$freight_tax_id = "freight_tax_id_example"; // string | 
$freight = 1.2; // double | 
$freight_tax_amount = 1.2; // double | 
$duty_tax_id = "duty_tax_id_example"; // string | 
$duty = 1.2; // double | 
$duty_tax_amount = 1.2; // double | 
$insurance_tax_id = "insurance_tax_id_example"; // string | 
$insurance = 1.2; // double | 
$insurance_tax_amount = 1.2; // double | 
$re_main_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$body = new \Jiwa\Model\PurchaseInvoiceGoodsReceivedNotePOSTRequest(); // \Jiwa\Model\PurchaseInvoiceGoodsReceivedNotePOSTRequest | 

try {
    $result = $apiInstance->purchaseInvoiceGoodsReceivedNotePOSTRequestPurchaseInvoiceIDGoodsReceivedNotesPost($accept, $purchase_invoice_id, $jiwa_stateful, $grnid, $goods_received_note_invoiced_id, $slip_no, $received_date, $freight_tax_id, $freight, $freight_tax_amount, $duty_tax_id, $duty, $duty_tax_amount, $insurance_tax_id, $insurance, $insurance_tax_amount, $re_main_last_saved_date_time, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceGoodsReceivedNotePOSTRequestPurchaseInvoiceIDGoodsReceivedNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **grnid** | **string**|  | [optional]
 **goods_received_note_invoiced_id** | **string**|  | [optional]
 **slip_no** | **string**|  | [optional]
 **received_date** | **\DateTime**|  | [optional]
 **freight_tax_id** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **freight_tax_amount** | **double**|  | [optional]
 **duty_tax_id** | **string**|  | [optional]
 **duty** | **double**|  | [optional]
 **duty_tax_amount** | **double**|  | [optional]
 **insurance_tax_id** | **string**|  | [optional]
 **insurance** | **double**|  | [optional]
 **insurance_tax_amount** | **double**|  | [optional]
 **re_main_last_saved_date_time** | **\DateTime**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseInvoiceGoodsReceivedNotePOSTRequest**](../Model/PurchaseInvoiceGoodsReceivedNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoiceGoodsReceivedNoteInvoiced**](../Model/PurchaseInvoiceGoodsReceivedNoteInvoiced.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceGoodsReceivedNotesGETManyRequestPurchaseInvoiceIDGoodsReceivedNotesGet**
> \Jiwa\Model\PurchaseInvoiceGoodsReceivedNoteInvoiced[] purchaseInvoiceGoodsReceivedNotesGETManyRequestPurchaseInvoiceIDGoodsReceivedNotesGet($accept, $purchase_invoice_id, $jiwa_stateful)

Retrieves a list of purchase invoice goods received notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseInvoiceGoodsReceivedNotesGETManyRequestPurchaseInvoiceIDGoodsReceivedNotesGet($accept, $purchase_invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceGoodsReceivedNotesGETManyRequestPurchaseInvoiceIDGoodsReceivedNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoiceGoodsReceivedNoteInvoiced[]**](../Model/PurchaseInvoiceGoodsReceivedNoteInvoiced.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceLineGETRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDGet**
> \Jiwa\Model\PurchaseInvoiceLine purchaseInvoiceLineGETRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDGet($accept, $purchase_invoice_id, $purchase_invoice_line_id, $jiwa_stateful)

Retrieves a purchase invoice line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$purchase_invoice_line_id = "purchase_invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseInvoiceLineGETRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDGet($accept, $purchase_invoice_id, $purchase_invoice_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceLineGETRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **purchase_invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceLinePATCHRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDUpdate**
> \Jiwa\Model\PurchaseInvoiceLine purchaseInvoiceLinePATCHRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDUpdate($accept, $purchase_invoice_id, $purchase_invoice_line_id, $jiwa_stateful, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $purchase_invoice_line_type, $quantity_decimal_places, $last_saved_date_time, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $line_details, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_creditor_purchases_ledger_account_id, $inventory_creditor_purchases_ledger_account_no, $inventory_creditor_purchases_ledger_account_description, $inventory_cost_of_goods_variance_ledger_account_id, $inventory_cost_of_goods_variance_ledger_account_no, $inventory_cost_of_goods_variance_ledger_account_description, $inventory_stock_movement_ledger_account_id, $inventory_stock_movement_ledger_account_no, $inventory_stock_movement_ledger_account_description, $inventory_last_saved_date_time, $order_units, $item_no, $in_supplier_warehouse_rec_id, $inc_price, $line_total, $fx_total, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $posted_to_wip, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $order_no, $order_id, $purchase_order_line_no, $purchase_order_type, $custom_field_values, $line_total_ex_tax, $re_lines_source_id, $body)

Updates a line for a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$purchase_invoice_line_id = "purchase_invoice_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$quantity = 1.2; // double | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$aux2 = "aux2_example"; // string | 
$description = "description_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$purchase_invoice_line_type = "purchase_invoice_line_type_example"; // string | 
$quantity_decimal_places = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$tax_amount = 1.2; // double | 
$tax_id = "tax_id_example"; // string | 
$tax_rate = 1.2; // double | 
$cost = 1.2; // double | 
$currency_rate_used = 1.2; // double | 
$purchasing_classification_id = "purchasing_classification_id_example"; // string | 
$purchasing_classification_description = "purchasing_classification_description_example"; // string | 
$line_details = "line_details_example"; // string | 
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
$inventory_creditor_purchases_ledger_account_id = "inventory_creditor_purchases_ledger_account_id_example"; // string | 
$inventory_creditor_purchases_ledger_account_no = "inventory_creditor_purchases_ledger_account_no_example"; // string | 
$inventory_creditor_purchases_ledger_account_description = "inventory_creditor_purchases_ledger_account_description_example"; // string | 
$inventory_cost_of_goods_variance_ledger_account_id = "inventory_cost_of_goods_variance_ledger_account_id_example"; // string | 
$inventory_cost_of_goods_variance_ledger_account_no = "inventory_cost_of_goods_variance_ledger_account_no_example"; // string | 
$inventory_cost_of_goods_variance_ledger_account_description = "inventory_cost_of_goods_variance_ledger_account_description_example"; // string | 
$inventory_stock_movement_ledger_account_id = "inventory_stock_movement_ledger_account_id_example"; // string | 
$inventory_stock_movement_ledger_account_no = "inventory_stock_movement_ledger_account_no_example"; // string | 
$inventory_stock_movement_ledger_account_description = "inventory_stock_movement_ledger_account_description_example"; // string | 
$inventory_last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$order_units = 1.2; // double | 
$item_no = 56; // int | 
$in_supplier_warehouse_rec_id = "in_supplier_warehouse_rec_id_example"; // string | 
$inc_price = 1.2; // double | 
$line_total = 1.2; // double | 
$fx_total = 1.2; // double | 
$fx_decimal_places = 56; // int | 
$home_decimal_places = 56; // int | 
$use_expiry_date = true; // bool | 
$posted_to_wip = true; // bool | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_stage_no = "job_costing_stage_no_example"; // string | 
$job_costing_stage_name = "job_costing_stage_name_example"; // string | 
$job_costing_cost_centre_id = "job_costing_cost_centre_id_example"; // string | 
$job_costing_cost_centre_no = "job_costing_cost_centre_no_example"; // string | 
$job_costing_cost_centre_name = "job_costing_cost_centre_name_example"; // string | 
$job_costing_job_id = "job_costing_job_id_example"; // string | 
$job_costing_job_no = "job_costing_job_no_example"; // string | 
$order_no = "order_no_example"; // string | 
$order_id = "order_id_example"; // string | 
$purchase_order_line_no = 56; // int | 
$purchase_order_type = "purchase_order_type_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$line_total_ex_tax = 56; // int | 
$re_lines_source_id = "re_lines_source_id_example"; // string | 
$body = new \Jiwa\Model\PurchaseInvoiceLinePATCHRequest(); // \Jiwa\Model\PurchaseInvoiceLinePATCHRequest | 

try {
    $result = $apiInstance->purchaseInvoiceLinePATCHRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDUpdate($accept, $purchase_invoice_id, $purchase_invoice_line_id, $jiwa_stateful, $quantity, $inventory_id, $part_no, $aux2, $description, $supplier_part_no, $purchase_invoice_line_type, $quantity_decimal_places, $last_saved_date_time, $tax_amount, $tax_id, $tax_rate, $cost, $currency_rate_used, $purchasing_classification_id, $purchasing_classification_description, $line_details, $use_serial_no, $fx_cost, $physical_item, $inventory_expected_liability_ledger_account_id, $inventory_expected_liability_ledger_account_no, $inventory_expected_liability_ledger_account_description, $inventory_expected_asset_ledger_account_id, $inventory_expected_asset_ledger_account_no, $inventory_expected_asset_ledger_account_description, $inventory_delivered_asset_ledger_account_id, $inventory_delivered_asset_ledger_account_no, $inventory_delivered_asset_ledger_account_description, $inventory_value_ledger_account_id, $inventory_value_ledger_account_no, $inventory_value_ledger_account_description, $inventory_delivered_liability_ledger_account_id, $inventory_delivered_liability_ledger_account_no, $inventory_delivered_liability_ledger_account_description, $inventory_creditor_purchases_ledger_account_id, $inventory_creditor_purchases_ledger_account_no, $inventory_creditor_purchases_ledger_account_description, $inventory_cost_of_goods_variance_ledger_account_id, $inventory_cost_of_goods_variance_ledger_account_no, $inventory_cost_of_goods_variance_ledger_account_description, $inventory_stock_movement_ledger_account_id, $inventory_stock_movement_ledger_account_no, $inventory_stock_movement_ledger_account_description, $inventory_last_saved_date_time, $order_units, $item_no, $in_supplier_warehouse_rec_id, $inc_price, $line_total, $fx_total, $fx_decimal_places, $home_decimal_places, $use_expiry_date, $posted_to_wip, $job_costing_stage_id, $job_costing_stage_no, $job_costing_stage_name, $job_costing_cost_centre_id, $job_costing_cost_centre_no, $job_costing_cost_centre_name, $job_costing_job_id, $job_costing_job_no, $order_no, $order_id, $purchase_order_line_no, $purchase_order_type, $custom_field_values, $line_total_ex_tax, $re_lines_source_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceLinePATCHRequestPurchaseInvoiceIDLinesPurchaseInvoiceLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **purchase_invoice_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **quantity** | **double**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **purchase_invoice_line_type** | **string**|  | [optional]
 **quantity_decimal_places** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **tax_amount** | **double**|  | [optional]
 **tax_id** | **string**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **currency_rate_used** | **double**|  | [optional]
 **purchasing_classification_id** | **string**|  | [optional]
 **purchasing_classification_description** | **string**|  | [optional]
 **line_details** | **string**|  | [optional]
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
 **inventory_creditor_purchases_ledger_account_id** | **string**|  | [optional]
 **inventory_creditor_purchases_ledger_account_no** | **string**|  | [optional]
 **inventory_creditor_purchases_ledger_account_description** | **string**|  | [optional]
 **inventory_cost_of_goods_variance_ledger_account_id** | **string**|  | [optional]
 **inventory_cost_of_goods_variance_ledger_account_no** | **string**|  | [optional]
 **inventory_cost_of_goods_variance_ledger_account_description** | **string**|  | [optional]
 **inventory_stock_movement_ledger_account_id** | **string**|  | [optional]
 **inventory_stock_movement_ledger_account_no** | **string**|  | [optional]
 **inventory_stock_movement_ledger_account_description** | **string**|  | [optional]
 **inventory_last_saved_date_time** | **\DateTime**|  | [optional]
 **order_units** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **in_supplier_warehouse_rec_id** | **string**|  | [optional]
 **inc_price** | **double**|  | [optional]
 **line_total** | **double**|  | [optional]
 **fx_total** | **double**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **home_decimal_places** | **int**|  | [optional]
 **use_expiry_date** | **bool**|  | [optional]
 **posted_to_wip** | **bool**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_stage_no** | **string**|  | [optional]
 **job_costing_stage_name** | **string**|  | [optional]
 **job_costing_cost_centre_id** | **string**|  | [optional]
 **job_costing_cost_centre_no** | **string**|  | [optional]
 **job_costing_cost_centre_name** | **string**|  | [optional]
 **job_costing_job_id** | **string**|  | [optional]
 **job_costing_job_no** | **string**|  | [optional]
 **order_no** | **string**|  | [optional]
 **order_id** | **string**|  | [optional]
 **purchase_order_line_no** | **int**|  | [optional]
 **purchase_order_type** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **line_total_ex_tax** | **int**|  | [optional]
 **re_lines_source_id** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseInvoiceLinePATCHRequest**](../Model/PurchaseInvoiceLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoiceLine**](../Model/PurchaseInvoiceLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceLinesGETManyRequestPurchaseInvoiceIDPurchaseInvoiceLineIDGet**
> \Jiwa\Model\PurchaseInvoiceLine[] purchaseInvoiceLinesGETManyRequestPurchaseInvoiceIDPurchaseInvoiceLineIDGet($accept, $purchase_invoice_id, $jiwa_stateful)

Retrieves a list of purchase invoice lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->purchaseInvoiceLinesGETManyRequestPurchaseInvoiceIDPurchaseInvoiceLineIDGet($accept, $purchase_invoice_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceLinesGETManyRequestPurchaseInvoiceIDPurchaseInvoiceLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoiceLine[]**](../Model/PurchaseInvoiceLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoicePATCHRequestPurchaseInvoiceIDUpdate**
> \Jiwa\Model\PurchaseInvoice purchaseInvoicePATCHRequestPurchaseInvoiceIDUpdate($accept, $purchase_invoice_id, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $last_saved_date_time, $invoice_no, $invoice_date, $status, $freight, $duty, $insurance, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $lines, $goods_received_notes, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $home_decimal_places, $fx_decimal_places, $tax_adjustment, $due_date, $currency_id, $total_net_on_inventory_receivals, $custom_field_values, $notes, $documents, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body)

Updates a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_no = "invoice_no_example"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$freight = 1.2; // double | 
$duty = 1.2; // double | 
$insurance = 1.2; // double | 
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
$lines = "lines_example"; // string | 
$goods_received_notes = "goods_received_notes_example"; // string | 
$total_gross = 1.2; // double | 
$total_net = 1.2; // double | 
$total_fx = 1.2; // double | 
$freight_inc = 1.2; // double | 
$duty_inc = 1.2; // double | 
$insurance_inc = 1.2; // double | 
$home_decimal_places = 56; // int | 
$fx_decimal_places = 56; // int | 
$tax_adjustment = 1.2; // double | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$currency_id = "currency_id_example"; // string | 
$total_net_on_inventory_receivals = 1.2; // double | 
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$body = new \Jiwa\Model\PurchaseInvoicePATCHRequest(); // \Jiwa\Model\PurchaseInvoicePATCHRequest | 

try {
    $result = $apiInstance->purchaseInvoicePATCHRequestPurchaseInvoiceIDUpdate($accept, $purchase_invoice_id, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $last_saved_date_time, $invoice_no, $invoice_date, $status, $freight, $duty, $insurance, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $lines, $goods_received_notes, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $home_decimal_places, $fx_decimal_places, $tax_adjustment, $due_date, $currency_id, $total_net_on_inventory_receivals, $custom_field_values, $notes, $documents, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoicePATCHRequestPurchaseInvoiceIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **purchase_invoice_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **invoice_no** | **string**|  | [optional]
 **invoice_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **duty** | **double**|  | [optional]
 **insurance** | **double**|  | [optional]
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
 **lines** | **string**|  | [optional]
 **goods_received_notes** | **string**|  | [optional]
 **total_gross** | **double**|  | [optional]
 **total_net** | **double**|  | [optional]
 **total_fx** | **double**|  | [optional]
 **freight_inc** | **double**|  | [optional]
 **duty_inc** | **double**|  | [optional]
 **insurance_inc** | **double**|  | [optional]
 **home_decimal_places** | **int**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **tax_adjustment** | **double**|  | [optional]
 **due_date** | **\DateTime**|  | [optional]
 **currency_id** | **string**|  | [optional]
 **total_net_on_inventory_receivals** | **double**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **logical_warehouse_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseInvoicePATCHRequest**](../Model/PurchaseInvoicePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoicePOSTRequestPost**
> \Jiwa\Model\PurchaseInvoice purchaseInvoicePOSTRequestPost($accept, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $invoice_no, $invoice_date, $status, $freight, $duty, $insurance, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $lines, $goods_received_notes, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $home_decimal_places, $fx_decimal_places, $tax_adjustment, $due_date, $currency_id, $total_net_on_inventory_receivals, $custom_field_values, $notes, $documents, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body)

Creates a purchase invoice.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
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
$invoice_no = "invoice_no_example"; // string | 
$invoice_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$status = "status_example"; // string | 
$freight = 1.2; // double | 
$duty = 1.2; // double | 
$insurance = 1.2; // double | 
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
$lines = "lines_example"; // string | 
$goods_received_notes = "goods_received_notes_example"; // string | 
$total_gross = 1.2; // double | 
$total_net = 1.2; // double | 
$total_fx = 1.2; // double | 
$freight_inc = 1.2; // double | 
$duty_inc = 1.2; // double | 
$insurance_inc = 1.2; // double | 
$home_decimal_places = 56; // int | 
$fx_decimal_places = 56; // int | 
$tax_adjustment = 1.2; // double | 
$due_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$currency_id = "currency_id_example"; // string | 
$total_net_on_inventory_receivals = 1.2; // double | 
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$body = new \Jiwa\Model\PurchaseInvoicePOSTRequest(); // \Jiwa\Model\PurchaseInvoicePOSTRequest | 

try {
    $result = $apiInstance->purchaseInvoicePOSTRequestPost($accept, $jiwa_stateful, $creditor_id, $creditor_account_no, $creditor_name, $invoice_no, $invoice_date, $status, $freight, $duty, $insurance, $tax_total, $freight_tax_id, $freight_tax_rate, $freight_tax_amount, $duty_tax_id, $duty_tax_rate, $duty_tax_amount, $insurance_tax_id, $insurance_tax_rate, $insurance_tax_amount, $lines, $goods_received_notes, $total_gross, $total_net, $total_fx, $freight_inc, $duty_inc, $insurance_inc, $home_decimal_places, $fx_decimal_places, $tax_adjustment, $due_date, $currency_id, $total_net_on_inventory_receivals, $custom_field_values, $notes, $documents, $logical_warehouse_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoicePOSTRequestPost: ', $e->getMessage(), PHP_EOL;
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
 **invoice_no** | **string**|  | [optional]
 **invoice_date** | **\DateTime**|  | [optional]
 **status** | **string**|  | [optional]
 **freight** | **double**|  | [optional]
 **duty** | **double**|  | [optional]
 **insurance** | **double**|  | [optional]
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
 **lines** | **string**|  | [optional]
 **goods_received_notes** | **string**|  | [optional]
 **total_gross** | **double**|  | [optional]
 **total_net** | **double**|  | [optional]
 **total_fx** | **double**|  | [optional]
 **freight_inc** | **double**|  | [optional]
 **duty_inc** | **double**|  | [optional]
 **insurance_inc** | **double**|  | [optional]
 **home_decimal_places** | **int**|  | [optional]
 **fx_decimal_places** | **int**|  | [optional]
 **tax_adjustment** | **double**|  | [optional]
 **due_date** | **\DateTime**|  | [optional]
 **currency_id** | **string**|  | [optional]
 **total_net_on_inventory_receivals** | **double**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **logical_warehouse_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\PurchaseInvoicePOSTRequest**](../Model/PurchaseInvoicePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseInvoiceSAVERequestSaveGet**
> \Jiwa\Model\PurchaseInvoice purchaseInvoiceSAVERequestSaveGet($accept, $jiwa_stateful, $purchase_invoice_id)

Saves a stateful stateful purchase invoice.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful purchase invoice item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$purchase_invoice_id = "purchase_invoice_id_example"; // string | 

try {
    $result = $apiInstance->purchaseInvoiceSAVERequestSaveGet($accept, $jiwa_stateful, $purchase_invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->purchaseInvoiceSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **purchase_invoice_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

