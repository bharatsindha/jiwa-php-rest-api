# Jiwa\SalesQuotesApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesQuoteABANDONRequestQuoteIDAbandonDelete**](SalesQuotesApi.md#salesQuoteABANDONRequestQuoteIDAbandonDelete) | **DELETE** /SalesQuotes/{QuoteID}/Abandon | Abandons a stateful sales Quote.
[**salesQuoteCustomFieldValueGETRequestQuoteIDCustomFieldValuesSettingIDGet**](SalesQuotesApi.md#salesQuoteCustomFieldValueGETRequestQuoteIDCustomFieldValuesSettingIDGet) | **GET** /SalesQuotes/{QuoteID}/CustomFieldValues/{SettingID} | Retrieves a sales Quote custom field value.
[**salesQuoteCustomFieldValuePATCHRequestQuoteIDCustomFieldValuesSettingIDUpdate**](SalesQuotesApi.md#salesQuoteCustomFieldValuePATCHRequestQuoteIDCustomFieldValuesSettingIDUpdate) | **PATCH** /SalesQuotes/{QuoteID}/CustomFieldValues/{SettingID} | Updates a sales Quote custom field value.
[**salesQuoteCustomFieldValuesGETManyRequestQuoteIDCustomFieldValuesGet**](SalesQuotesApi.md#salesQuoteCustomFieldValuesGETManyRequestQuoteIDCustomFieldValuesGet) | **GET** /SalesQuotes/{QuoteID}/CustomFieldValues | Retrieves a list of custom field values for a sales Quote.
[**salesQuoteCustomFieldsGETManyRequestCustomFieldsGet**](SalesQuotesApi.md#salesQuoteCustomFieldsGETManyRequestCustomFieldsGet) | **GET** /SalesQuotes/CustomFields | Retrieves a list of sales Quote custom fields.
[**salesQuoteDocumentDELETERequestQuoteIDDocumentsDocumentIDDelete**](SalesQuotesApi.md#salesQuoteDocumentDELETERequestQuoteIDDocumentsDocumentIDDelete) | **DELETE** /SalesQuotes/{QuoteID}/Documents/{DocumentID} | Deletes a sales Quote document.
[**salesQuoteDocumentGETRequestQuoteIDDocumentsDocumentIDGet**](SalesQuotesApi.md#salesQuoteDocumentGETRequestQuoteIDDocumentsDocumentIDGet) | **GET** /SalesQuotes/{QuoteID}/Documents/{DocumentID} | Retrieves a sales Quote document.
[**salesQuoteDocumentPATCHRequestQuoteIDDocumentsDocumentIDUpdate**](SalesQuotesApi.md#salesQuoteDocumentPATCHRequestQuoteIDDocumentsDocumentIDUpdate) | **PATCH** /SalesQuotes/{QuoteID}/Documents/{DocumentID} | Updates a sales Quote document.
[**salesQuoteDocumentPOSTRequestQuoteIDDocumentsPost**](SalesQuotesApi.md#salesQuoteDocumentPOSTRequestQuoteIDDocumentsPost) | **POST** /SalesQuotes/{QuoteID}/Documents | Appends a document to a sales Quote.
[**salesQuoteDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**](SalesQuotesApi.md#salesQuoteDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete) | **DELETE** /SalesQuotes/DocumentTypes/{DocumentTypeID} | Deletes a sales Quote document type.
[**salesQuoteDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**](SalesQuotesApi.md#salesQuoteDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet) | **GET** /SalesQuotes/DocumentTypes/{DocumentTypeID} | Retrieves a sales Quote document type.
[**salesQuoteDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**](SalesQuotesApi.md#salesQuoteDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate) | **PATCH** /SalesQuotes/DocumentTypes/{DocumentTypeID} | Updates a sales Quote document type.
[**salesQuoteDocumentTypePOSTRequestDocumentTypesPost**](SalesQuotesApi.md#salesQuoteDocumentTypePOSTRequestDocumentTypesPost) | **POST** /SalesQuotes/DocumentTypes | Creates a new sales Quote document type.
[**salesQuoteDocumentTypesGETManyRequestDocumentTypesGet**](SalesQuotesApi.md#salesQuoteDocumentTypesGETManyRequestDocumentTypesGet) | **GET** /SalesQuotes/DocumentTypes | Retrieves a list of sales Quote document types.
[**salesQuoteDocumentsGETManyRequestQuoteIDDocumentsGet**](SalesQuotesApi.md#salesQuoteDocumentsGETManyRequestQuoteIDDocumentsGet) | **GET** /SalesQuotes/{QuoteID}/Documents | Retrieves a list of sales Quote documents.
[**salesQuoteGETRequestQuoteIDGet**](SalesQuotesApi.md#salesQuoteGETRequestQuoteIDGet) | **GET** /SalesQuotes/{QuoteID} | Retrieves a sales Quote.
[**salesQuoteHistorysGETManyRequestQuoteIDHistorysGet**](SalesQuotesApi.md#salesQuoteHistorysGETManyRequestQuoteIDHistorysGet) | **GET** /SalesQuotes/{QuoteID}/Historys | Retrieves a list of sales Quote histories.
[**salesQuoteHistorysGETRequestQuoteIDHistorysQuoteHistoryIDGet**](SalesQuotesApi.md#salesQuoteHistorysGETRequestQuoteIDHistorysQuoteHistoryIDGet) | **GET** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID} | Retrieves a sales Quote history.
[**salesQuoteHistorysPATCHRequestQuoteIDHistorysQuoteHistoryIDUpdate**](SalesQuotesApi.md#salesQuoteHistorysPATCHRequestQuoteIDHistorysQuoteHistoryIDUpdate) | **PATCH** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID} | Updates a sales Quote history.
[**salesQuoteLineCustomFieldValueGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDGet**](SalesQuotesApi.md#salesQuoteLineCustomFieldValueGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDGet) | **GET** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines/{QuoteLineID}/CustomFieldValues/{SettingID} | Retrieves a sales Quote line custom field value.
[**salesQuoteLineCustomFieldValuePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDUpdate**](SalesQuotesApi.md#salesQuoteLineCustomFieldValuePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDUpdate) | **PATCH** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines/{QuoteLineID}/CustomFieldValues/{SettingID} | Updates a sales Quote line custom field value.
[**salesQuoteLineCustomFieldValuesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesGet**](SalesQuotesApi.md#salesQuoteLineCustomFieldValuesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesGet) | **GET** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines/{QuoteLineID}/CustomFieldValues | Retrieves a list of custom field values for a sales Quote line.
[**salesQuoteLineCustomFieldsGETManyRequestLinesCustomFieldsGet**](SalesQuotesApi.md#salesQuoteLineCustomFieldsGETManyRequestLinesCustomFieldsGet) | **GET** /SalesQuotes/Lines/CustomFields | Retrieves a list of sales Quote line custom fields.
[**salesQuoteLineDELETERequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDDelete**](SalesQuotesApi.md#salesQuoteLineDELETERequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDDelete) | **DELETE** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines/{QuoteLineID} | Deletes a sales Quote line.
[**salesQuoteLineGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDGet**](SalesQuotesApi.md#salesQuoteLineGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDGet) | **GET** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines/{QuoteLineID} | Retrieves a sales Quote line.
[**salesQuoteLinePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDUpdate**](SalesQuotesApi.md#salesQuoteLinePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDUpdate) | **PATCH** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines/{QuoteLineID} | Updates a sales Quote line.
[**salesQuoteLinePOSTRequestQuoteIDHistorysQuoteHistoryIDLinesPost**](SalesQuotesApi.md#salesQuoteLinePOSTRequestQuoteIDHistorysQuoteHistoryIDLinesPost) | **POST** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines | Appends a line to a sales Quote.
[**salesQuoteLinesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesGet**](SalesQuotesApi.md#salesQuoteLinesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesGet) | **GET** /SalesQuotes/{QuoteID}/Historys/{QuoteHistoryID}/Lines | Retrieves a list of sales Quote lines.
[**salesQuoteMAKEORDERB2BRequestQuoteIDMakeOrderB2BPost**](SalesQuotesApi.md#salesQuoteMAKEORDERB2BRequestQuoteIDMakeOrderB2BPost) | **POST** /SalesQuotes/{QuoteID}/MakeOrderB2B | Makes a back to back sales order from a quote.
[**salesQuoteMAKEORDERRequestQuoteIDMakeOrderPost**](SalesQuotesApi.md#salesQuoteMAKEORDERRequestQuoteIDMakeOrderPost) | **POST** /SalesQuotes/{QuoteID}/MakeOrder | Makes a sales order from a quote.
[**salesQuoteNoteDELETERequestQuoteIDNotesNoteIDDelete**](SalesQuotesApi.md#salesQuoteNoteDELETERequestQuoteIDNotesNoteIDDelete) | **DELETE** /SalesQuotes/{QuoteID}/Notes/{NoteID} | Deletes a sales Quote note.
[**salesQuoteNoteGETRequestQuoteIDNotesNoteIDGet**](SalesQuotesApi.md#salesQuoteNoteGETRequestQuoteIDNotesNoteIDGet) | **GET** /SalesQuotes/{QuoteID}/Notes/{NoteID} | Retrieves a sales Quote note.
[**salesQuoteNotePATCHRequestQuoteIDNotesNoteIDUpdate**](SalesQuotesApi.md#salesQuoteNotePATCHRequestQuoteIDNotesNoteIDUpdate) | **PATCH** /SalesQuotes/{QuoteID}/Notes/{NoteID} | Updates a sales Quote note.
[**salesQuoteNotePOSTRequestQuoteIDNotesPost**](SalesQuotesApi.md#salesQuoteNotePOSTRequestQuoteIDNotesPost) | **POST** /SalesQuotes/{QuoteID}/Notes | Appends a note to a sales Quote.
[**salesQuoteNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**](SalesQuotesApi.md#salesQuoteNoteTypeDELETERequestNoteTypesNoteTypeIDDelete) | **DELETE** /SalesQuotes/NoteTypes/{NoteTypeID} | Deletes a sales Quote note type.
[**salesQuoteNoteTypeGETRequestNoteTypesNoteTypeIDGet**](SalesQuotesApi.md#salesQuoteNoteTypeGETRequestNoteTypesNoteTypeIDGet) | **GET** /SalesQuotes/NoteTypes/{NoteTypeID} | Retrieves a sales Quote note type.
[**salesQuoteNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**](SalesQuotesApi.md#salesQuoteNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate) | **PATCH** /SalesQuotes/NoteTypes/{NoteTypeID} | Updates a sales Quote note type.
[**salesQuoteNoteTypePOSTRequestNoteTypesPost**](SalesQuotesApi.md#salesQuoteNoteTypePOSTRequestNoteTypesPost) | **POST** /SalesQuotes/NoteTypes | Creates a new sales Quote note type.
[**salesQuoteNoteTypesGETManyRequestNoteTypesGet**](SalesQuotesApi.md#salesQuoteNoteTypesGETManyRequestNoteTypesGet) | **GET** /SalesQuotes/NoteTypes | Retrieves a list of sales Quote note types.
[**salesQuoteNotesGETManyRequestQuoteIDNotesGet**](SalesQuotesApi.md#salesQuoteNotesGETManyRequestQuoteIDNotesGet) | **GET** /SalesQuotes/{QuoteID}/Notes | Retrieves a list of sales Quote notes.
[**salesQuotePATCHRequestQuoteIDUpdate**](SalesQuotesApi.md#salesQuotePATCHRequestQuoteIDUpdate) | **PATCH** /SalesQuotes/{QuoteID} | Updates a sales Quote.
[**salesQuotePOSTRequestPost**](SalesQuotesApi.md#salesQuotePOSTRequestPost) | **POST** /SalesQuotes | Creates a new sales Quote.
[**salesQuoteSAVERequestQuoteIDSaveGet**](SalesQuotesApi.md#salesQuoteSAVERequestQuoteIDSaveGet) | **GET** /SalesQuotes/{QuoteID}/Save | Saves a stateful sales Quote.


# **salesQuoteABANDONRequestQuoteIDAbandonDelete**
> \Jiwa\JiwaModel\Object salesQuoteABANDONRequestQuoteIDAbandonDelete($accept, $quote_id, $jiwa_stateful)

Abandons a stateful sales Quote.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful sales Quote exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteABANDONRequestQuoteIDAbandonDelete($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteABANDONRequestQuoteIDAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteCustomFieldValueGETRequestQuoteIDCustomFieldValuesSettingIDGet**
> \Jiwa\JiwaModel\CustomFieldValue salesQuoteCustomFieldValueGETRequestQuoteIDCustomFieldValuesSettingIDGet($accept, $quote_id, $setting_id, $jiwa_stateful)

Retrieves a sales Quote custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteCustomFieldValueGETRequestQuoteIDCustomFieldValuesSettingIDGet($accept, $quote_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteCustomFieldValueGETRequestQuoteIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteCustomFieldValuePATCHRequestQuoteIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\JiwaModel\CustomFieldValue salesQuoteCustomFieldValuePATCHRequestQuoteIDCustomFieldValuesSettingIDUpdate($accept, $quote_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a sales Quote custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuoteCustomFieldValuePATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->salesQuoteCustomFieldValuePATCHRequestQuoteIDCustomFieldValuesSettingIDUpdate($accept, $quote_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteCustomFieldValuePATCHRequestQuoteIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteCustomFieldValuePATCHRequest**](../Model/SalesQuoteCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteCustomFieldValuesGETManyRequestQuoteIDCustomFieldValuesGet**
> \Jiwa\JiwaModel\CustomFieldValue[] salesQuoteCustomFieldValuesGETManyRequestQuoteIDCustomFieldValuesGet($accept, $quote_id, $jiwa_stateful)

Retrieves a list of custom field values for a sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteCustomFieldValuesGETManyRequestQuoteIDCustomFieldValuesGet($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteCustomFieldValuesGETManyRequestQuoteIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteCustomFieldsGETManyRequestCustomFieldsGet**
> \Jiwa\JiwaModel\CustomField[] salesQuoteCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of sales Quote custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteCustomFieldsGETManyRequestCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomField[]**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentDELETERequestQuoteIDDocumentsDocumentIDDelete**
> \Jiwa\JiwaModel\Object salesQuoteDocumentDELETERequestQuoteIDDocumentsDocumentIDDelete($accept, $quote_id, $document_id, $jiwa_stateful)

Deletes a sales Quote document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteDocumentDELETERequestQuoteIDDocumentsDocumentIDDelete($accept, $quote_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentDELETERequestQuoteIDDocumentsDocumentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentGETRequestQuoteIDDocumentsDocumentIDGet**
> \Jiwa\JiwaModel\Document salesQuoteDocumentGETRequestQuoteIDDocumentsDocumentIDGet($accept, $quote_id, $document_id, $jiwa_stateful)

Retrieves a sales Quote document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteDocumentGETRequestQuoteIDDocumentsDocumentIDGet($accept, $quote_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentGETRequestQuoteIDDocumentsDocumentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentPATCHRequestQuoteIDDocumentsDocumentIDUpdate**
> \Jiwa\JiwaModel\Document salesQuoteDocumentPATCHRequestQuoteIDDocumentsDocumentIDUpdate($accept, $quote_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Updates a sales Quote document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
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
$body = new \Jiwa\JiwaModel\SalesQuoteDocumentPATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteDocumentPATCHRequest | 

try {
    $result = $apiInstance->salesQuoteDocumentPATCHRequestQuoteIDDocumentsDocumentIDUpdate($accept, $quote_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentPATCHRequestQuoteIDDocumentsDocumentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteDocumentPATCHRequest**](../Model/SalesQuoteDocumentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentPOSTRequestQuoteIDDocumentsPost**
> \Jiwa\JiwaModel\Document salesQuoteDocumentPOSTRequestQuoteIDDocumentsPost($accept, $quote_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Appends a document to a sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
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
$body = new \Jiwa\JiwaModel\SalesQuoteDocumentPOSTRequest(); // \Jiwa\JiwaModel\SalesQuoteDocumentPOSTRequest | 

try {
    $result = $apiInstance->salesQuoteDocumentPOSTRequestQuoteIDDocumentsPost($accept, $quote_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentPOSTRequestQuoteIDDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteDocumentPOSTRequest**](../Model/SalesQuoteDocumentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**
> \Jiwa\JiwaModel\Object salesQuoteDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful)

Deletes a sales Quote document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete: ', $e->getMessage(), PHP_EOL;
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

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**
> \Jiwa\JiwaModel\DocumentType salesQuoteDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful)

Retrieves a sales Quote document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet: ', $e->getMessage(), PHP_EOL;
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

[**\Jiwa\JiwaModel\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**
> \Jiwa\JiwaModel\DocumentType salesQuoteDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a sales Quote document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
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
$body = new \Jiwa\JiwaModel\SalesQuoteDocumentTypePATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteDocumentTypePATCHRequest | 

try {
    $result = $apiInstance->salesQuoteDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteDocumentTypePATCHRequest**](../Model/SalesQuoteDocumentTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentTypePOSTRequestDocumentTypesPost**
> \Jiwa\JiwaModel\DocumentType salesQuoteDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new sales Quote document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
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
$body = new \Jiwa\JiwaModel\SalesQuoteDocumentTypePOSTRequest(); // \Jiwa\JiwaModel\SalesQuoteDocumentTypePOSTRequest | 

try {
    $result = $apiInstance->salesQuoteDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentTypePOSTRequestDocumentTypesPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteDocumentTypePOSTRequest**](../Model/SalesQuoteDocumentTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentTypesGETManyRequestDocumentTypesGet**
> \Jiwa\JiwaModel\DocumentType[] salesQuoteDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful)

Retrieves a list of sales Quote document types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentTypesGETManyRequestDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\DocumentType[]**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteDocumentsGETManyRequestQuoteIDDocumentsGet**
> \Jiwa\JiwaModel\Document[] salesQuoteDocumentsGETManyRequestQuoteIDDocumentsGet($accept, $quote_id, $jiwa_stateful)

Retrieves a list of sales Quote documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteDocumentsGETManyRequestQuoteIDDocumentsGet($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteDocumentsGETManyRequestQuoteIDDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Document[]**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteGETRequestQuoteIDGet**
> \Jiwa\JiwaModel\SalesQuote salesQuoteGETRequestQuoteIDGet($accept, $quote_id, $jiwa_stateful)

Retrieves a sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteGETRequestQuoteIDGet($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteGETRequestQuoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuote**](../Model/SalesQuote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteHistorysGETManyRequestQuoteIDHistorysGet**
> \Jiwa\JiwaModel\SalesQuoteHistory[] salesQuoteHistorysGETManyRequestQuoteIDHistorysGet($accept, $quote_id, $jiwa_stateful)

Retrieves a list of sales Quote histories.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteHistorysGETManyRequestQuoteIDHistorysGet($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteHistorysGETManyRequestQuoteIDHistorysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteHistory[]**](../Model/SalesQuoteHistory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteHistorysGETRequestQuoteIDHistorysQuoteHistoryIDGet**
> \Jiwa\JiwaModel\SalesQuoteHistory salesQuoteHistorysGETRequestQuoteIDHistorysQuoteHistoryIDGet($accept, $quote_id, $quote_history_id, $jiwa_stateful)

Retrieves a sales Quote history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteHistorysGETRequestQuoteIDHistorysQuoteHistoryIDGet($accept, $quote_id, $quote_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteHistorysGETRequestQuoteIDHistorysQuoteHistoryIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteHistory**](../Model/SalesQuoteHistory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteHistorysPATCHRequestQuoteIDHistorysQuoteHistoryIDUpdate**
> \Jiwa\JiwaModel\SalesQuoteHistory salesQuoteHistorysPATCHRequestQuoteIDHistorysQuoteHistoryIDUpdate($accept, $quote_id, $quote_history_id, $jiwa_stateful, $history_no, $sales_stage, $cartage_charge1, $cartage_charge2, $cartage_charge3, $opportunity_status_reason, $ref, $last_modified_by, $history_total, $record_date, $expiry_date, $expiry_days, $docket_printed, $del_address1, $del_address2, $del_address3, $del_address4, $post_code, $delivery_address_country, $notes, $courier_details, $freight_forward_address1, $freight_forward_address2, $freight_forward_address3, $freight_forward_address4, $freight_forward_address_country, $freight_forward_notes, $invoice_printed, $del_contact_name, $expected_close_date, $opportunity_status, $opportunity_note, $invoice_emailed, $drop_shipment, $delivery_addressee, $body)

Updates a sales Quote history.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$history_no = 56; // int | 
$sales_stage = "sales_stage_example"; // string | 
$cartage_charge1 = "cartage_charge1_example"; // string | 
$cartage_charge2 = "cartage_charge2_example"; // string | 
$cartage_charge3 = "cartage_charge3_example"; // string | 
$opportunity_status_reason = "opportunity_status_reason_example"; // string | 
$ref = "ref_example"; // string | 
$last_modified_by = "last_modified_by_example"; // string | 
$history_total = 1.2; // double | 
$record_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expiry_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$expiry_days = 56; // int | 
$docket_printed = true; // bool | 
$del_address1 = "del_address1_example"; // string | 
$del_address2 = "del_address2_example"; // string | 
$del_address3 = "del_address3_example"; // string | 
$del_address4 = "del_address4_example"; // string | 
$post_code = "post_code_example"; // string | 
$delivery_address_country = "delivery_address_country_example"; // string | 
$notes = "notes_example"; // string | 
$courier_details = "courier_details_example"; // string | 
$freight_forward_address1 = "freight_forward_address1_example"; // string | 
$freight_forward_address2 = "freight_forward_address2_example"; // string | 
$freight_forward_address3 = "freight_forward_address3_example"; // string | 
$freight_forward_address4 = "freight_forward_address4_example"; // string | 
$freight_forward_address_country = "freight_forward_address_country_example"; // string | 
$freight_forward_notes = "freight_forward_notes_example"; // string | 
$invoice_printed = true; // bool | 
$del_contact_name = "del_contact_name_example"; // string | 
$expected_close_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$opportunity_status = "opportunity_status_example"; // string | 
$opportunity_note = "opportunity_note_example"; // string | 
$invoice_emailed = true; // bool | 
$drop_shipment = true; // bool | 
$delivery_addressee = "delivery_addressee_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuoteHistorysPATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteHistorysPATCHRequest | 

try {
    $result = $apiInstance->salesQuoteHistorysPATCHRequestQuoteIDHistorysQuoteHistoryIDUpdate($accept, $quote_id, $quote_history_id, $jiwa_stateful, $history_no, $sales_stage, $cartage_charge1, $cartage_charge2, $cartage_charge3, $opportunity_status_reason, $ref, $last_modified_by, $history_total, $record_date, $expiry_date, $expiry_days, $docket_printed, $del_address1, $del_address2, $del_address3, $del_address4, $post_code, $delivery_address_country, $notes, $courier_details, $freight_forward_address1, $freight_forward_address2, $freight_forward_address3, $freight_forward_address4, $freight_forward_address_country, $freight_forward_notes, $invoice_printed, $del_contact_name, $expected_close_date, $opportunity_status, $opportunity_note, $invoice_emailed, $drop_shipment, $delivery_addressee, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteHistorysPATCHRequestQuoteIDHistorysQuoteHistoryIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **history_no** | **int**|  | [optional]
 **sales_stage** | **string**|  | [optional]
 **cartage_charge1** | **string**|  | [optional]
 **cartage_charge2** | **string**|  | [optional]
 **cartage_charge3** | **string**|  | [optional]
 **opportunity_status_reason** | **string**|  | [optional]
 **ref** | **string**|  | [optional]
 **last_modified_by** | **string**|  | [optional]
 **history_total** | **double**|  | [optional]
 **record_date** | **\DateTime**|  | [optional]
 **expiry_date** | **\DateTime**|  | [optional]
 **expiry_days** | **int**|  | [optional]
 **docket_printed** | **bool**|  | [optional]
 **del_address1** | **string**|  | [optional]
 **del_address2** | **string**|  | [optional]
 **del_address3** | **string**|  | [optional]
 **del_address4** | **string**|  | [optional]
 **post_code** | **string**|  | [optional]
 **delivery_address_country** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **courier_details** | **string**|  | [optional]
 **freight_forward_address1** | **string**|  | [optional]
 **freight_forward_address2** | **string**|  | [optional]
 **freight_forward_address3** | **string**|  | [optional]
 **freight_forward_address4** | **string**|  | [optional]
 **freight_forward_address_country** | **string**|  | [optional]
 **freight_forward_notes** | **string**|  | [optional]
 **invoice_printed** | **bool**|  | [optional]
 **del_contact_name** | **string**|  | [optional]
 **expected_close_date** | **\DateTime**|  | [optional]
 **opportunity_status** | **string**|  | [optional]
 **opportunity_note** | **string**|  | [optional]
 **invoice_emailed** | **bool**|  | [optional]
 **drop_shipment** | **bool**|  | [optional]
 **delivery_addressee** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteHistorysPATCHRequest**](../Model/SalesQuoteHistorysPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteHistory**](../Model/SalesQuoteHistory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLineCustomFieldValueGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDGet**
> \Jiwa\JiwaModel\CustomFieldValue salesQuoteLineCustomFieldValueGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDGet($accept, $quote_id, $quote_history_id, $quote_line_id, $setting_id, $jiwa_stateful)

Retrieves a sales Quote line custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$quote_line_id = "quote_line_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteLineCustomFieldValueGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDGet($accept, $quote_id, $quote_history_id, $quote_line_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLineCustomFieldValueGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **quote_line_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLineCustomFieldValuePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\JiwaModel\CustomFieldValue salesQuoteLineCustomFieldValuePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDUpdate($accept, $quote_id, $quote_history_id, $quote_line_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a sales Quote line custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$quote_line_id = "quote_line_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuoteLineCustomFieldValuePATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteLineCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->salesQuoteLineCustomFieldValuePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDUpdate($accept, $quote_id, $quote_history_id, $quote_line_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLineCustomFieldValuePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **quote_line_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteLineCustomFieldValuePATCHRequest**](../Model/SalesQuoteLineCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLineCustomFieldValuesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesGet**
> \Jiwa\JiwaModel\CustomFieldValue[] salesQuoteLineCustomFieldValuesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesGet($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful)

Retrieves a list of custom field values for a sales Quote line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$quote_line_id = "quote_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteLineCustomFieldValuesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesGet($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLineCustomFieldValuesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **quote_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLineCustomFieldsGETManyRequestLinesCustomFieldsGet**
> \Jiwa\JiwaModel\CustomField[] salesQuoteLineCustomFieldsGETManyRequestLinesCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of sales Quote line custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteLineCustomFieldsGETManyRequestLinesCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLineCustomFieldsGETManyRequestLinesCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\CustomField[]**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLineDELETERequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDDelete**
> \Jiwa\JiwaModel\Object salesQuoteLineDELETERequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDDelete($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful)

Deletes a sales Quote line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$quote_line_id = "quote_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteLineDELETERequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDDelete($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLineDELETERequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **quote_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLineGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDGet**
> \Jiwa\JiwaModel\SalesQuoteLine salesQuoteLineGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDGet($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful)

Retrieves a sales Quote line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$quote_line_id = "quote_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteLineGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDGet($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLineGETRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **quote_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLinePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDUpdate**
> \Jiwa\JiwaModel\SalesQuoteLine salesQuoteLinePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDUpdate($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $comment_line, $comment_text, $quantity_ordered, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $line_link_id, $fix_sell_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $line_total, $weight, $cubic, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $non_inventory, $custom_field_values, $kit_line_type, $kit_units, $kit_header_line_id, $body)

Updates a sales Quote line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$quote_line_id = "quote_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$comment_line = true; // bool | 
$comment_text = "comment_text_example"; // string | 
$quantity_ordered = 1.2; // double | 
$price_ex_gst = 1.2; // double | 
$price_inc_gst = 1.2; // double | 
$discounted_price = 1.2; // double | 
$tax_to_charge = 1.2; // double | 
$tax_rate = 1.2; // double | 
$unit_cost = 1.2; // double | 
$line_link_id = "line_link_id_example"; // string | 
$fix_sell_price = true; // bool | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$line_total = 1.2; // double | 
$weight = 1.2; // double | 
$cubic = 1.2; // double | 
$discounted_percentage = 1.2; // double | 
$discount_given = 1.2; // double | 
$quantity_decimal_places = 1.2; // double | 
$quantity_original_ordered = 1.2; // double | 
$non_inventory = true; // bool | 
$custom_field_values = "custom_field_values_example"; // string | 
$kit_line_type = "kit_line_type_example"; // string | 
$kit_units = 1.2; // double | 
$kit_header_line_id = "kit_header_line_id_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuoteLinePATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteLinePATCHRequest | 

try {
    $result = $apiInstance->salesQuoteLinePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDUpdate($accept, $quote_id, $quote_history_id, $quote_line_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $comment_line, $comment_text, $quantity_ordered, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $line_link_id, $fix_sell_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $line_total, $weight, $cubic, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $non_inventory, $custom_field_values, $kit_line_type, $kit_units, $kit_header_line_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLinePATCHRequestQuoteIDHistorysQuoteHistoryIDLinesQuoteLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **quote_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **comment_line** | **bool**|  | [optional]
 **comment_text** | **string**|  | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **price_ex_gst** | **double**|  | [optional]
 **price_inc_gst** | **double**|  | [optional]
 **discounted_price** | **double**|  | [optional]
 **tax_to_charge** | **double**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **unit_cost** | **double**|  | [optional]
 **line_link_id** | **string**|  | [optional]
 **fix_sell_price** | **bool**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **line_total** | **double**|  | [optional]
 **weight** | **double**|  | [optional]
 **cubic** | **double**|  | [optional]
 **discounted_percentage** | **double**|  | [optional]
 **discount_given** | **double**|  | [optional]
 **quantity_decimal_places** | **double**|  | [optional]
 **quantity_original_ordered** | **double**|  | [optional]
 **non_inventory** | **bool**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **kit_line_type** | **string**|  | [optional]
 **kit_units** | **double**|  | [optional]
 **kit_header_line_id** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteLinePATCHRequest**](../Model/SalesQuoteLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLinePOSTRequestQuoteIDHistorysQuoteHistoryIDLinesPost**
> \Jiwa\JiwaModel\SalesQuoteLine salesQuoteLinePOSTRequestQuoteIDHistorysQuoteHistoryIDLinesPost($accept, $quote_id, $quote_history_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $comment_line, $comment_text, $quantity_ordered, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $line_link_id, $fix_sell_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $line_total, $weight, $cubic, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $non_inventory, $custom_field_values, $kit_line_type, $kit_units, $kit_header_line_id, $body)

Appends a line to a sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$comment_line = true; // bool | 
$comment_text = "comment_text_example"; // string | 
$quantity_ordered = 1.2; // double | 
$price_ex_gst = 1.2; // double | 
$price_inc_gst = 1.2; // double | 
$discounted_price = 1.2; // double | 
$tax_to_charge = 1.2; // double | 
$tax_rate = 1.2; // double | 
$unit_cost = 1.2; // double | 
$line_link_id = "line_link_id_example"; // string | 
$fix_sell_price = true; // bool | 
$user_defined_float1 = 1.2; // double | 
$user_defined_float2 = 1.2; // double | 
$user_defined_float3 = 1.2; // double | 
$line_total = 1.2; // double | 
$weight = 1.2; // double | 
$cubic = 1.2; // double | 
$discounted_percentage = 1.2; // double | 
$discount_given = 1.2; // double | 
$quantity_decimal_places = 1.2; // double | 
$quantity_original_ordered = 1.2; // double | 
$non_inventory = true; // bool | 
$custom_field_values = "custom_field_values_example"; // string | 
$kit_line_type = "kit_line_type_example"; // string | 
$kit_units = 1.2; // double | 
$kit_header_line_id = "kit_header_line_id_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuoteLinePOSTRequest(); // \Jiwa\JiwaModel\SalesQuoteLinePOSTRequest | 

try {
    $result = $apiInstance->salesQuoteLinePOSTRequestQuoteIDHistorysQuoteHistoryIDLinesPost($accept, $quote_id, $quote_history_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $comment_line, $comment_text, $quantity_ordered, $price_ex_gst, $price_inc_gst, $discounted_price, $tax_to_charge, $tax_rate, $unit_cost, $line_link_id, $fix_sell_price, $user_defined_float1, $user_defined_float2, $user_defined_float3, $line_total, $weight, $cubic, $discounted_percentage, $discount_given, $quantity_decimal_places, $quantity_original_ordered, $non_inventory, $custom_field_values, $kit_line_type, $kit_units, $kit_header_line_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLinePOSTRequestQuoteIDHistorysQuoteHistoryIDLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **comment_line** | **bool**|  | [optional]
 **comment_text** | **string**|  | [optional]
 **quantity_ordered** | **double**|  | [optional]
 **price_ex_gst** | **double**|  | [optional]
 **price_inc_gst** | **double**|  | [optional]
 **discounted_price** | **double**|  | [optional]
 **tax_to_charge** | **double**|  | [optional]
 **tax_rate** | **double**|  | [optional]
 **unit_cost** | **double**|  | [optional]
 **line_link_id** | **string**|  | [optional]
 **fix_sell_price** | **bool**|  | [optional]
 **user_defined_float1** | **double**|  | [optional]
 **user_defined_float2** | **double**|  | [optional]
 **user_defined_float3** | **double**|  | [optional]
 **line_total** | **double**|  | [optional]
 **weight** | **double**|  | [optional]
 **cubic** | **double**|  | [optional]
 **discounted_percentage** | **double**|  | [optional]
 **discount_given** | **double**|  | [optional]
 **quantity_decimal_places** | **double**|  | [optional]
 **quantity_original_ordered** | **double**|  | [optional]
 **non_inventory** | **bool**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **kit_line_type** | **string**|  | [optional]
 **kit_units** | **double**|  | [optional]
 **kit_header_line_id** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteLinePOSTRequest**](../Model/SalesQuoteLinePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteLine**](../Model/SalesQuoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteLinesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesGet**
> \Jiwa\JiwaModel\SalesQuoteLine[] salesQuoteLinesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesGet($accept, $quote_id, $quote_history_id, $jiwa_stateful)

Retrieves a list of sales Quote lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$quote_history_id = "quote_history_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteLinesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesGet($accept, $quote_id, $quote_history_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteLinesGETManyRequestQuoteIDHistorysQuoteHistoryIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **quote_history_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuoteLine[]**](../Model/SalesQuoteLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteMAKEORDERB2BRequestQuoteIDMakeOrderB2BPost**
> \Jiwa\JiwaModel\SalesQuote salesQuoteMAKEORDERB2BRequestQuoteIDMakeOrderB2BPost($accept, $quote_id, $jiwa_stateful, $body)

Makes a back to back sales order from a quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\SalesQuoteMAKEORDERB2BRequest(); // \Jiwa\JiwaModel\SalesQuoteMAKEORDERB2BRequest | 

try {
    $result = $apiInstance->salesQuoteMAKEORDERB2BRequestQuoteIDMakeOrderB2BPost($accept, $quote_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteMAKEORDERB2BRequestQuoteIDMakeOrderB2BPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteMAKEORDERB2BRequest**](../Model/SalesQuoteMAKEORDERB2BRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuote**](../Model/SalesQuote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteMAKEORDERRequestQuoteIDMakeOrderPost**
> \Jiwa\JiwaModel\SalesQuote salesQuoteMAKEORDERRequestQuoteIDMakeOrderPost($accept, $quote_id, $jiwa_stateful, $body)

Makes a sales order from a quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\SalesQuoteMAKEORDERRequest(); // \Jiwa\JiwaModel\SalesQuoteMAKEORDERRequest | 

try {
    $result = $apiInstance->salesQuoteMAKEORDERRequestQuoteIDMakeOrderPost($accept, $quote_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteMAKEORDERRequestQuoteIDMakeOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuoteMAKEORDERRequest**](../Model/SalesQuoteMAKEORDERRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuote**](../Model/SalesQuote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteDELETERequestQuoteIDNotesNoteIDDelete**
> \Jiwa\JiwaModel\Object salesQuoteNoteDELETERequestQuoteIDNotesNoteIDDelete($accept, $quote_id, $note_id, $jiwa_stateful)

Deletes a sales Quote note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteNoteDELETERequestQuoteIDNotesNoteIDDelete($accept, $quote_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteDELETERequestQuoteIDNotesNoteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteGETRequestQuoteIDNotesNoteIDGet**
> \Jiwa\JiwaModel\Note salesQuoteNoteGETRequestQuoteIDNotesNoteIDGet($accept, $quote_id, $note_id, $jiwa_stateful)

Retrieves a sales Quote note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteNoteGETRequestQuoteIDNotesNoteIDGet($accept, $quote_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteGETRequestQuoteIDNotesNoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNotePATCHRequestQuoteIDNotesNoteIDUpdate**
> \Jiwa\JiwaModel\Note salesQuoteNotePATCHRequestQuoteIDNotesNoteIDUpdate($accept, $quote_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Updates a sales Quote note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
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
$body = new \Jiwa\JiwaModel\SalesQuoteNotePATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteNotePATCHRequest | 

try {
    $result = $apiInstance->salesQuoteNotePATCHRequestQuoteIDNotesNoteIDUpdate($accept, $quote_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNotePATCHRequestQuoteIDNotesNoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteNotePATCHRequest**](../Model/SalesQuoteNotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNotePOSTRequestQuoteIDNotesPost**
> \Jiwa\JiwaModel\Note salesQuoteNotePOSTRequestQuoteIDNotesPost($accept, $quote_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Appends a note to a sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
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
$body = new \Jiwa\JiwaModel\SalesQuoteNotePOSTRequest(); // \Jiwa\JiwaModel\SalesQuoteNotePOSTRequest | 

try {
    $result = $apiInstance->salesQuoteNotePOSTRequestQuoteIDNotesPost($accept, $quote_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNotePOSTRequestQuoteIDNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteNotePOSTRequest**](../Model/SalesQuoteNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**
> \Jiwa\JiwaModel\Object salesQuoteNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful)

Deletes a sales Quote note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteTypeDELETERequestNoteTypesNoteTypeIDDelete: ', $e->getMessage(), PHP_EOL;
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

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteTypeGETRequestNoteTypesNoteTypeIDGet**
> \Jiwa\JiwaModel\NoteType salesQuoteNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful)

Retrieves a sales Quote note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteTypeGETRequestNoteTypesNoteTypeIDGet: ', $e->getMessage(), PHP_EOL;
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

[**\Jiwa\JiwaModel\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**
> \Jiwa\JiwaModel\NoteType salesQuoteNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a sales Quote note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
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
$body = new \Jiwa\JiwaModel\SalesQuoteNoteTypePATCHRequest(); // \Jiwa\JiwaModel\SalesQuoteNoteTypePATCHRequest | 

try {
    $result = $apiInstance->salesQuoteNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteNoteTypePATCHRequest**](../Model/SalesQuoteNoteTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteTypePOSTRequestNoteTypesPost**
> \Jiwa\JiwaModel\NoteType salesQuoteNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new sales Quote note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
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
$body = new \Jiwa\JiwaModel\SalesQuoteNoteTypePOSTRequest(); // \Jiwa\JiwaModel\SalesQuoteNoteTypePOSTRequest | 

try {
    $result = $apiInstance->salesQuoteNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteTypePOSTRequestNoteTypesPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\JiwaModel\SalesQuoteNoteTypePOSTRequest**](../Model/SalesQuoteNoteTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNoteTypesGETManyRequestNoteTypesGet**
> \Jiwa\JiwaModel\NoteType[] salesQuoteNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful)

Retrieves a list of sales Quote note types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNoteTypesGETManyRequestNoteTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\NoteType[]**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteNotesGETManyRequestQuoteIDNotesGet**
> \Jiwa\JiwaModel\Note[] salesQuoteNotesGETManyRequestQuoteIDNotesGet($accept, $quote_id, $jiwa_stateful)

Retrieves a list of sales Quote notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteNotesGETManyRequestQuoteIDNotesGet($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteNotesGETManyRequestQuoteIDNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\Note[]**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotePATCHRequestQuoteIDUpdate**
> \Jiwa\JiwaModel\SalesQuote salesQuotePATCHRequestQuoteIDUpdate($accept, $quote_id, $jiwa_stateful, $type, $system_settings, $last_saved_date_time, $quote_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_name, $branch_description, $initiated_date, $invoice_init_date, $order_no, $tax_exemption_no, $so_reference, $sales_quote_type, $order_type, $status, $bill_type, $expected_delivery_date, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $custom_field_values, $notes, $documents, $lines, $histories, $cash_sales, $job_costing, $body)

Updates a sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$type = "type_example"; // string | 
$system_settings = "system_settings_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$quote_no = "quote_no_example"; // string | 
$logical_id = "logical_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$staff_id = "staff_id_example"; // string | 
$staff_user_name = "staff_user_name_example"; // string | 
$staff_title = "staff_title_example"; // string | 
$staff_first_name = "staff_first_name_example"; // string | 
$staff_surname = "staff_surname_example"; // string | 
$branch_id = "branch_id_example"; // string | 
$branch_name = "branch_name_example"; // string | 
$branch_description = "branch_description_example"; // string | 
$initiated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_init_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$order_no = "order_no_example"; // string | 
$tax_exemption_no = "tax_exemption_no_example"; // string | 
$so_reference = "so_reference_example"; // string | 
$sales_quote_type = "sales_quote_type_example"; // string | 
$order_type = "order_type_example"; // string | 
$status = "status_example"; // string | 
$bill_type = "bill_type_example"; // string | 
$expected_delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$debtor_email_address = "debtor_email_address_example"; // string | 
$debtor_contact_name = "debtor_contact_name_example"; // string | 
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
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$lines = "lines_example"; // string | 
$histories = "histories_example"; // string | 
$cash_sales = "cash_sales_example"; // string | 
$job_costing = "job_costing_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuotePATCHRequest(); // \Jiwa\JiwaModel\SalesQuotePATCHRequest | 

try {
    $result = $apiInstance->salesQuotePATCHRequestQuoteIDUpdate($accept, $quote_id, $jiwa_stateful, $type, $system_settings, $last_saved_date_time, $quote_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_name, $branch_description, $initiated_date, $invoice_init_date, $order_no, $tax_exemption_no, $so_reference, $sales_quote_type, $order_type, $status, $bill_type, $expected_delivery_date, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $custom_field_values, $notes, $documents, $lines, $histories, $cash_sales, $job_costing, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuotePATCHRequestQuoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **type** | **string**|  | [optional]
 **system_settings** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **quote_no** | **string**|  | [optional]
 **logical_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **staff_id** | **string**|  | [optional]
 **staff_user_name** | **string**|  | [optional]
 **staff_title** | **string**|  | [optional]
 **staff_first_name** | **string**|  | [optional]
 **staff_surname** | **string**|  | [optional]
 **branch_id** | **string**|  | [optional]
 **branch_name** | **string**|  | [optional]
 **branch_description** | **string**|  | [optional]
 **initiated_date** | **\DateTime**|  | [optional]
 **invoice_init_date** | **\DateTime**|  | [optional]
 **order_no** | **string**|  | [optional]
 **tax_exemption_no** | **string**|  | [optional]
 **so_reference** | **string**|  | [optional]
 **sales_quote_type** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **bill_type** | **string**|  | [optional]
 **expected_delivery_date** | **\DateTime**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **debtor_email_address** | **string**|  | [optional]
 **debtor_contact_name** | **string**|  | [optional]
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
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **histories** | **string**|  | [optional]
 **cash_sales** | **string**|  | [optional]
 **job_costing** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuotePATCHRequest**](../Model/SalesQuotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuote**](../Model/SalesQuote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuotePOSTRequestPost**
> \Jiwa\JiwaModel\SalesQuote salesQuotePOSTRequestPost($accept, $jiwa_stateful, $type, $system_settings, $quote_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_name, $branch_description, $initiated_date, $invoice_init_date, $order_no, $tax_exemption_no, $so_reference, $sales_quote_type, $order_type, $status, $bill_type, $expected_delivery_date, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $custom_field_values, $notes, $documents, $lines, $histories, $cash_sales, $job_costing, $body)

Creates a new sales Quote.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$type = "type_example"; // string | 
$system_settings = "system_settings_example"; // string | 
$quote_no = "quote_no_example"; // string | 
$logical_id = "logical_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$staff_id = "staff_id_example"; // string | 
$staff_user_name = "staff_user_name_example"; // string | 
$staff_title = "staff_title_example"; // string | 
$staff_first_name = "staff_first_name_example"; // string | 
$staff_surname = "staff_surname_example"; // string | 
$branch_id = "branch_id_example"; // string | 
$branch_name = "branch_name_example"; // string | 
$branch_description = "branch_description_example"; // string | 
$initiated_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$invoice_init_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$order_no = "order_no_example"; // string | 
$tax_exemption_no = "tax_exemption_no_example"; // string | 
$so_reference = "so_reference_example"; // string | 
$sales_quote_type = "sales_quote_type_example"; // string | 
$order_type = "order_type_example"; // string | 
$status = "status_example"; // string | 
$bill_type = "bill_type_example"; // string | 
$expected_delivery_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$debtor_email_address = "debtor_email_address_example"; // string | 
$debtor_contact_name = "debtor_contact_name_example"; // string | 
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
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$lines = "lines_example"; // string | 
$histories = "histories_example"; // string | 
$cash_sales = "cash_sales_example"; // string | 
$job_costing = "job_costing_example"; // string | 
$body = new \Jiwa\JiwaModel\SalesQuotePOSTRequest(); // \Jiwa\JiwaModel\SalesQuotePOSTRequest | 

try {
    $result = $apiInstance->salesQuotePOSTRequestPost($accept, $jiwa_stateful, $type, $system_settings, $quote_no, $logical_id, $logical_warehouse_description, $physical_warehouse_description, $staff_id, $staff_user_name, $staff_title, $staff_first_name, $staff_surname, $branch_id, $branch_name, $branch_description, $initiated_date, $invoice_init_date, $order_no, $tax_exemption_no, $so_reference, $sales_quote_type, $order_type, $status, $bill_type, $expected_delivery_date, $debtor_id, $debtor_account_no, $debtor_name, $debtor_email_address, $debtor_contact_name, $delivery_addressee, $delivery_address1, $delivery_address2, $delivery_address_suburb, $delivery_address_state, $delivery_address_contact_name, $delivery_address_postcode, $delivery_address_country, $delivery_address_notes, $delivery_address_courier_details, $drop_shipment, $cartage1_ex_gst, $cartage1_gst_rate, $cartage1_gst, $cartage2_ex_gst, $cartage2_gst_rate, $cartage2_gst, $cartage3_ex_gst, $cartage3_gst_rate, $cartage3_gst, $custom_field_values, $notes, $documents, $lines, $histories, $cash_sales, $job_costing, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuotePOSTRequestPost: ', $e->getMessage(), PHP_EOL;
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
 **quote_no** | **string**|  | [optional]
 **logical_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **staff_id** | **string**|  | [optional]
 **staff_user_name** | **string**|  | [optional]
 **staff_title** | **string**|  | [optional]
 **staff_first_name** | **string**|  | [optional]
 **staff_surname** | **string**|  | [optional]
 **branch_id** | **string**|  | [optional]
 **branch_name** | **string**|  | [optional]
 **branch_description** | **string**|  | [optional]
 **initiated_date** | **\DateTime**|  | [optional]
 **invoice_init_date** | **\DateTime**|  | [optional]
 **order_no** | **string**|  | [optional]
 **tax_exemption_no** | **string**|  | [optional]
 **so_reference** | **string**|  | [optional]
 **sales_quote_type** | **string**|  | [optional]
 **order_type** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **bill_type** | **string**|  | [optional]
 **expected_delivery_date** | **\DateTime**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **debtor_email_address** | **string**|  | [optional]
 **debtor_contact_name** | **string**|  | [optional]
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
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **histories** | **string**|  | [optional]
 **cash_sales** | **string**|  | [optional]
 **job_costing** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\SalesQuotePOSTRequest**](../Model/SalesQuotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuote**](../Model/SalesQuote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesQuoteSAVERequestQuoteIDSaveGet**
> \Jiwa\JiwaModel\SalesQuote salesQuoteSAVERequestQuoteIDSaveGet($accept, $quote_id, $jiwa_stateful)

Saves a stateful sales Quote.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful sales Quote exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$quote_id = "quote_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->salesQuoteSAVERequestQuoteIDSaveGet($accept, $quote_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->salesQuoteSAVERequestQuoteIDSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **quote_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\SalesQuote**](../Model/SalesQuote.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

