# Jiwa\JournalSetsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**journalSetABANDONRequestAbandonDelete**](JournalSetsApi.md#journalSetABANDONRequestAbandonDelete) | **DELETE** /JournalSets/Abandon | Abandons a stateful journal set.
[**journalSetDELETERequestJournalSetIDDelete**](JournalSetsApi.md#journalSetDELETERequestJournalSetIDDelete) | **DELETE** /JournalSets/{JournalSetID} | Deletes a journal set.
[**journalSetDocumentDELETERequestJournalSetIDDocumentsDocumentIDDelete**](JournalSetsApi.md#journalSetDocumentDELETERequestJournalSetIDDocumentsDocumentIDDelete) | **DELETE** /JournalSets/{JournalSetID}/Documents/{DocumentID} | Deletes a journal set document.
[**journalSetDocumentGETRequestJournalSetIDDocumentsDocumentIDGet**](JournalSetsApi.md#journalSetDocumentGETRequestJournalSetIDDocumentsDocumentIDGet) | **GET** /JournalSets/{JournalSetID}/Documents/{DocumentID} | Retrieves a journal set document.
[**journalSetDocumentPATCHRequestJournalSetIDDocumentsDocumentIDUpdate**](JournalSetsApi.md#journalSetDocumentPATCHRequestJournalSetIDDocumentsDocumentIDUpdate) | **PATCH** /JournalSets/{JournalSetID}/Documents/{DocumentID} | Updates a journal set document.
[**journalSetDocumentPOSTRequestJournalSetIDDocumentsPost**](JournalSetsApi.md#journalSetDocumentPOSTRequestJournalSetIDDocumentsPost) | **POST** /JournalSets/{JournalSetID}/Documents | Appends a document to a journal set.
[**journalSetDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**](JournalSetsApi.md#journalSetDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete) | **DELETE** /JournalSets/DocumentTypes/{DocumentTypeID} | Deletes a journal set document type.
[**journalSetDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**](JournalSetsApi.md#journalSetDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet) | **GET** /JournalSets/DocumentTypes/{DocumentTypeID} | Retrieves a journal set document type.
[**journalSetDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**](JournalSetsApi.md#journalSetDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate) | **PATCH** /JournalSets/DocumentTypes/{DocumentTypeID} | Updates a journal set document type.
[**journalSetDocumentTypePOSTRequestDocumentTypesPost**](JournalSetsApi.md#journalSetDocumentTypePOSTRequestDocumentTypesPost) | **POST** /JournalSets/DocumentTypes | Creates a new journal set document type.
[**journalSetDocumentTypesGETManyRequestDocumentTypesGet**](JournalSetsApi.md#journalSetDocumentTypesGETManyRequestDocumentTypesGet) | **GET** /JournalSets/DocumentTypes | Retrieves a list of journal set document types.
[**journalSetDocumentsGETManyRequestJournalSetIDDocumentsGet**](JournalSetsApi.md#journalSetDocumentsGETManyRequestJournalSetIDDocumentsGet) | **GET** /JournalSets/{JournalSetID}/Documents | Retrieves a list of journal set documents.
[**journalSetGETRequestJournalSetIDGet**](JournalSetsApi.md#journalSetGETRequestJournalSetIDGet) | **GET** /JournalSets/{JournalSetID} | Retrieves a journal set.
[**journalSetLineDELETERequestJournalSetIDLinesJournalSetLineIDDelete**](JournalSetsApi.md#journalSetLineDELETERequestJournalSetIDLinesJournalSetLineIDDelete) | **DELETE** /JournalSets/{JournalSetID}/Lines/{JournalSetLineID} | Deletes a line from a journal set.
[**journalSetLineGETRequestJournalSetIDLinesJournalSetLineIDGet**](JournalSetsApi.md#journalSetLineGETRequestJournalSetIDLinesJournalSetLineIDGet) | **GET** /JournalSets/{JournalSetID}/Lines/{JournalSetLineID} | Retrieves a journal set line.
[**journalSetLinePATCHRequestJournalSetIDLinesJournalSetLineIDUpdate**](JournalSetsApi.md#journalSetLinePATCHRequestJournalSetIDLinesJournalSetLineIDUpdate) | **PATCH** /JournalSets/{JournalSetID}/Lines/{JournalSetLineID} | Updates a line for a journal set.
[**journalSetLinePOSTRequestJournalSetIDLinesPost**](JournalSetsApi.md#journalSetLinePOSTRequestJournalSetIDLinesPost) | **POST** /JournalSets/{JournalSetID}/Lines | Appends a line to a journal set.
[**journalSetLinesGETManyRequestJournalSetIDLinesGet**](JournalSetsApi.md#journalSetLinesGETManyRequestJournalSetIDLinesGet) | **GET** /JournalSets/{JournalSetID}/Lines | Retrieves a list of journal set lines.
[**journalSetNoteDELETERequestJournalSetIDNotesNoteIDDelete**](JournalSetsApi.md#journalSetNoteDELETERequestJournalSetIDNotesNoteIDDelete) | **DELETE** /JournalSets/{JournalSetID}/Notes/{NoteID} | Deletes a journal set note.
[**journalSetNoteGETRequestJournalSetIDNotesNoteIDGet**](JournalSetsApi.md#journalSetNoteGETRequestJournalSetIDNotesNoteIDGet) | **GET** /JournalSets/{JournalSetID}/Notes/{NoteID} | Retrieves a journal set note.
[**journalSetNotePATCHRequestJournalSetIDNotesNoteIDUpdate**](JournalSetsApi.md#journalSetNotePATCHRequestJournalSetIDNotesNoteIDUpdate) | **PATCH** /JournalSets/{JournalSetID}/Notes/{NoteID} | Updates a journal set note.
[**journalSetNotePOSTRequestJournalSetIDNotesPost**](JournalSetsApi.md#journalSetNotePOSTRequestJournalSetIDNotesPost) | **POST** /JournalSets/{JournalSetID}/Notes | Appends a note to a journal set.
[**journalSetNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**](JournalSetsApi.md#journalSetNoteTypeDELETERequestNoteTypesNoteTypeIDDelete) | **DELETE** /JournalSets/NoteTypes/{NoteTypeID} | Deletes a journal set note type.
[**journalSetNoteTypeGETRequestNoteTypesNoteTypeIDGet**](JournalSetsApi.md#journalSetNoteTypeGETRequestNoteTypesNoteTypeIDGet) | **GET** /JournalSets/NoteTypes/{NoteTypeID} | Retrieves a journal set note type.
[**journalSetNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**](JournalSetsApi.md#journalSetNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate) | **PATCH** /JournalSets/NoteTypes/{NoteTypeID} | Updates a journal set note type.
[**journalSetNoteTypePOSTRequestNoteTypesPost**](JournalSetsApi.md#journalSetNoteTypePOSTRequestNoteTypesPost) | **POST** /JournalSets/NoteTypes | Creates a new journal set note type.
[**journalSetNoteTypesGETManyRequestNoteTypesGet**](JournalSetsApi.md#journalSetNoteTypesGETManyRequestNoteTypesGet) | **GET** /JournalSets/NoteTypes | Retrieves a list of journal set note types.
[**journalSetNotesGETManyRequestJournalSetIDNotesGet**](JournalSetsApi.md#journalSetNotesGETManyRequestJournalSetIDNotesGet) | **GET** /JournalSets/{JournalSetID}/Notes | Retrieves a list of journal set notes.
[**journalSetPATCHRequestJournalSetIDUpdate**](JournalSetsApi.md#journalSetPATCHRequestJournalSetIDUpdate) | **PATCH** /JournalSets/{JournalSetID} | Updates a journal set.
[**journalSetPOSTRequestPost**](JournalSetsApi.md#journalSetPOSTRequestPost) | **POST** /JournalSets/ | Creates a journal set.
[**journalSetSAVERequestSaveGet**](JournalSetsApi.md#journalSetSAVERequestSaveGet) | **GET** /JournalSets/Save | Saves a stateful stateful journal set.


# **journalSetABANDONRequestAbandonDelete**
> \Jiwa\Model\Object journalSetABANDONRequestAbandonDelete($accept, $jiwa_stateful, $journal_set_id)

Abandons a stateful journal set.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful journal set item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$journal_set_id = "journal_set_id_example"; // string | 

try {
    $result = $apiInstance->journalSetABANDONRequestAbandonDelete($accept, $jiwa_stateful, $journal_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **journal_set_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetDELETERequestJournalSetIDDelete**
> \Jiwa\Model\Object journalSetDELETERequestJournalSetIDDelete($accept, $journal_set_id, $jiwa_stateful)

Deletes a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDELETERequestJournalSetIDDelete($accept, $journal_set_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDELETERequestJournalSetIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetDocumentDELETERequestJournalSetIDDocumentsDocumentIDDelete**
> \Jiwa\Model\Object journalSetDocumentDELETERequestJournalSetIDDocumentsDocumentIDDelete($accept, $journal_set_id, $document_id, $jiwa_stateful)

Deletes a journal set document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDocumentDELETERequestJournalSetIDDocumentsDocumentIDDelete($accept, $journal_set_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentDELETERequestJournalSetIDDocumentsDocumentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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

# **journalSetDocumentGETRequestJournalSetIDDocumentsDocumentIDGet**
> \Jiwa\Model\Document journalSetDocumentGETRequestJournalSetIDDocumentsDocumentIDGet($accept, $journal_set_id, $document_id, $jiwa_stateful)

Retrieves a journal set document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDocumentGETRequestJournalSetIDDocumentsDocumentIDGet($accept, $journal_set_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentGETRequestJournalSetIDDocumentsDocumentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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

# **journalSetDocumentPATCHRequestJournalSetIDDocumentsDocumentIDUpdate**
> \Jiwa\Model\Document journalSetDocumentPATCHRequestJournalSetIDDocumentsDocumentIDUpdate($accept, $journal_set_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Updates a journal set document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
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
$body = new \Jiwa\Model\JournalSetDocumentPATCHRequest(); // \Jiwa\Model\JournalSetDocumentPATCHRequest | 

try {
    $result = $apiInstance->journalSetDocumentPATCHRequestJournalSetIDDocumentsDocumentIDUpdate($accept, $journal_set_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentPATCHRequestJournalSetIDDocumentsDocumentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\JournalSetDocumentPATCHRequest**](../Model/JournalSetDocumentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetDocumentPOSTRequestJournalSetIDDocumentsPost**
> \Jiwa\Model\Document journalSetDocumentPOSTRequestJournalSetIDDocumentsPost($accept, $journal_set_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Appends a document to a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
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
$body = new \Jiwa\Model\JournalSetDocumentPOSTRequest(); // \Jiwa\Model\JournalSetDocumentPOSTRequest | 

try {
    $result = $apiInstance->journalSetDocumentPOSTRequestJournalSetIDDocumentsPost($accept, $journal_set_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentPOSTRequestJournalSetIDDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\JournalSetDocumentPOSTRequest**](../Model/JournalSetDocumentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**
> \Jiwa\Model\Object journalSetDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful)

Deletes a journal set document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete: ', $e->getMessage(), PHP_EOL;
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

# **journalSetDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**
> \Jiwa\Model\DocumentType journalSetDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful)

Retrieves a journal set document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet: ', $e->getMessage(), PHP_EOL;
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

# **journalSetDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**
> \Jiwa\Model\DocumentType journalSetDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a journal set document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
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
$body = new \Jiwa\Model\JournalSetDocumentTypePATCHRequest(); // \Jiwa\Model\JournalSetDocumentTypePATCHRequest | 

try {
    $result = $apiInstance->journalSetDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\JournalSetDocumentTypePATCHRequest**](../Model/JournalSetDocumentTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetDocumentTypePOSTRequestDocumentTypesPost**
> \Jiwa\Model\DocumentType journalSetDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new journal set document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
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
$body = new \Jiwa\Model\JournalSetDocumentTypePOSTRequest(); // \Jiwa\Model\JournalSetDocumentTypePOSTRequest | 

try {
    $result = $apiInstance->journalSetDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentTypePOSTRequestDocumentTypesPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\JournalSetDocumentTypePOSTRequest**](../Model/JournalSetDocumentTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetDocumentTypesGETManyRequestDocumentTypesGet**
> \Jiwa\Model\DocumentType[] journalSetDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful)

Retrieves a list of journal set document types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentTypesGETManyRequestDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
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

# **journalSetDocumentsGETManyRequestJournalSetIDDocumentsGet**
> \Jiwa\Model\Document[] journalSetDocumentsGETManyRequestJournalSetIDDocumentsGet($accept, $journal_set_id, $jiwa_stateful)

Retrieves a list of journal set documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetDocumentsGETManyRequestJournalSetIDDocumentsGet($accept, $journal_set_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetDocumentsGETManyRequestJournalSetIDDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Document[]**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetGETRequestJournalSetIDGet**
> \Jiwa\Model\JournalSet journalSetGETRequestJournalSetIDGet($accept, $journal_set_id, $jiwa_stateful)

Retrieves a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetGETRequestJournalSetIDGet($accept, $journal_set_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetGETRequestJournalSetIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\JournalSet**](../Model/JournalSet.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetLineDELETERequestJournalSetIDLinesJournalSetLineIDDelete**
> \Jiwa\Model\Object journalSetLineDELETERequestJournalSetIDLinesJournalSetLineIDDelete($accept, $journal_set_id, $journal_set_line_id, $jiwa_stateful, $item_no, $reference, $remark, $trans_code1_id, $trans_code1_description, $trans_code2_id, $trans_code2_description, $bas_code, $trans_post_date_time, $debit_amount, $credit_amount, $allow_group, $staff, $job_costing_stage_id, $job_costing_full_job_no, $general_ledger_account_rec_id, $general_ledger_account_account_no, $general_ledger_account_description)

Deletes a line from a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$journal_set_line_id = "journal_set_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$reference = "reference_example"; // string | 
$remark = "remark_example"; // string | 
$trans_code1_id = "trans_code1_id_example"; // string | 
$trans_code1_description = "trans_code1_description_example"; // string | 
$trans_code2_id = "trans_code2_id_example"; // string | 
$trans_code2_description = "trans_code2_description_example"; // string | 
$bas_code = "bas_code_example"; // string | 
$trans_post_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$debit_amount = 1.2; // double | 
$credit_amount = 1.2; // double | 
$allow_group = true; // bool | 
$staff = "staff_example"; // string | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_full_job_no = "job_costing_full_job_no_example"; // string | 
$general_ledger_account_rec_id = "general_ledger_account_rec_id_example"; // string | 
$general_ledger_account_account_no = "general_ledger_account_account_no_example"; // string | 
$general_ledger_account_description = "general_ledger_account_description_example"; // string | 

try {
    $result = $apiInstance->journalSetLineDELETERequestJournalSetIDLinesJournalSetLineIDDelete($accept, $journal_set_id, $journal_set_line_id, $jiwa_stateful, $item_no, $reference, $remark, $trans_code1_id, $trans_code1_description, $trans_code2_id, $trans_code2_description, $bas_code, $trans_post_date_time, $debit_amount, $credit_amount, $allow_group, $staff, $job_costing_stage_id, $job_costing_full_job_no, $general_ledger_account_rec_id, $general_ledger_account_account_no, $general_ledger_account_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetLineDELETERequestJournalSetIDLinesJournalSetLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **journal_set_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **reference** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **trans_code1_id** | **string**|  | [optional]
 **trans_code1_description** | **string**|  | [optional]
 **trans_code2_id** | **string**|  | [optional]
 **trans_code2_description** | **string**|  | [optional]
 **bas_code** | **string**|  | [optional]
 **trans_post_date_time** | **\DateTime**|  | [optional]
 **debit_amount** | **double**|  | [optional]
 **credit_amount** | **double**|  | [optional]
 **allow_group** | **bool**|  | [optional]
 **staff** | **string**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_full_job_no** | **string**|  | [optional]
 **general_ledger_account_rec_id** | **string**|  | [optional]
 **general_ledger_account_account_no** | **string**|  | [optional]
 **general_ledger_account_description** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetLineGETRequestJournalSetIDLinesJournalSetLineIDGet**
> \Jiwa\Model\JournalSetLine journalSetLineGETRequestJournalSetIDLinesJournalSetLineIDGet($accept, $journal_set_id, $journal_set_line_id, $jiwa_stateful)

Retrieves a journal set line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$journal_set_line_id = "journal_set_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetLineGETRequestJournalSetIDLinesJournalSetLineIDGet($accept, $journal_set_id, $journal_set_line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetLineGETRequestJournalSetIDLinesJournalSetLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **journal_set_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\JournalSetLine**](../Model/JournalSetLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetLinePATCHRequestJournalSetIDLinesJournalSetLineIDUpdate**
> \Jiwa\Model\JournalSetLine journalSetLinePATCHRequestJournalSetIDLinesJournalSetLineIDUpdate($accept, $journal_set_id, $journal_set_line_id, $jiwa_stateful, $item_no, $reference, $remark, $trans_code1_id, $trans_code1_description, $trans_code2_id, $trans_code2_description, $bas_code, $trans_post_date_time, $debit_amount, $credit_amount, $allow_group, $staff, $job_costing_stage_id, $job_costing_full_job_no, $general_ledger_account_rec_id, $general_ledger_account_account_no, $general_ledger_account_description, $body)

Updates a line for a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$journal_set_line_id = "journal_set_line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$reference = "reference_example"; // string | 
$remark = "remark_example"; // string | 
$trans_code1_id = "trans_code1_id_example"; // string | 
$trans_code1_description = "trans_code1_description_example"; // string | 
$trans_code2_id = "trans_code2_id_example"; // string | 
$trans_code2_description = "trans_code2_description_example"; // string | 
$bas_code = "bas_code_example"; // string | 
$trans_post_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$debit_amount = 1.2; // double | 
$credit_amount = 1.2; // double | 
$allow_group = true; // bool | 
$staff = "staff_example"; // string | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_full_job_no = "job_costing_full_job_no_example"; // string | 
$general_ledger_account_rec_id = "general_ledger_account_rec_id_example"; // string | 
$general_ledger_account_account_no = "general_ledger_account_account_no_example"; // string | 
$general_ledger_account_description = "general_ledger_account_description_example"; // string | 
$body = new \Jiwa\Model\JournalSetLinePATCHRequest(); // \Jiwa\Model\JournalSetLinePATCHRequest | 

try {
    $result = $apiInstance->journalSetLinePATCHRequestJournalSetIDLinesJournalSetLineIDUpdate($accept, $journal_set_id, $journal_set_line_id, $jiwa_stateful, $item_no, $reference, $remark, $trans_code1_id, $trans_code1_description, $trans_code2_id, $trans_code2_description, $bas_code, $trans_post_date_time, $debit_amount, $credit_amount, $allow_group, $staff, $job_costing_stage_id, $job_costing_full_job_no, $general_ledger_account_rec_id, $general_ledger_account_account_no, $general_ledger_account_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetLinePATCHRequestJournalSetIDLinesJournalSetLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **journal_set_line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **reference** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **trans_code1_id** | **string**|  | [optional]
 **trans_code1_description** | **string**|  | [optional]
 **trans_code2_id** | **string**|  | [optional]
 **trans_code2_description** | **string**|  | [optional]
 **bas_code** | **string**|  | [optional]
 **trans_post_date_time** | **\DateTime**|  | [optional]
 **debit_amount** | **double**|  | [optional]
 **credit_amount** | **double**|  | [optional]
 **allow_group** | **bool**|  | [optional]
 **staff** | **string**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_full_job_no** | **string**|  | [optional]
 **general_ledger_account_rec_id** | **string**|  | [optional]
 **general_ledger_account_account_no** | **string**|  | [optional]
 **general_ledger_account_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\JournalSetLinePATCHRequest**](../Model/JournalSetLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\JournalSetLine**](../Model/JournalSetLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetLinePOSTRequestJournalSetIDLinesPost**
> \Jiwa\Model\JournalSetLine journalSetLinePOSTRequestJournalSetIDLinesPost($accept, $journal_set_id, $jiwa_stateful, $item_no, $reference, $remark, $trans_code1_id, $trans_code1_description, $trans_code2_id, $trans_code2_description, $bas_code, $trans_post_date_time, $debit_amount, $credit_amount, $allow_group, $staff, $job_costing_stage_id, $job_costing_full_job_no, $general_ledger_account_rec_id, $general_ledger_account_account_no, $general_ledger_account_description, $body)

Appends a line to a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$reference = "reference_example"; // string | 
$remark = "remark_example"; // string | 
$trans_code1_id = "trans_code1_id_example"; // string | 
$trans_code1_description = "trans_code1_description_example"; // string | 
$trans_code2_id = "trans_code2_id_example"; // string | 
$trans_code2_description = "trans_code2_description_example"; // string | 
$bas_code = "bas_code_example"; // string | 
$trans_post_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$debit_amount = 1.2; // double | 
$credit_amount = 1.2; // double | 
$allow_group = true; // bool | 
$staff = "staff_example"; // string | 
$job_costing_stage_id = "job_costing_stage_id_example"; // string | 
$job_costing_full_job_no = "job_costing_full_job_no_example"; // string | 
$general_ledger_account_rec_id = "general_ledger_account_rec_id_example"; // string | 
$general_ledger_account_account_no = "general_ledger_account_account_no_example"; // string | 
$general_ledger_account_description = "general_ledger_account_description_example"; // string | 
$body = new \Jiwa\Model\JournalSetLinePOSTRequest(); // \Jiwa\Model\JournalSetLinePOSTRequest | 

try {
    $result = $apiInstance->journalSetLinePOSTRequestJournalSetIDLinesPost($accept, $journal_set_id, $jiwa_stateful, $item_no, $reference, $remark, $trans_code1_id, $trans_code1_description, $trans_code2_id, $trans_code2_description, $bas_code, $trans_post_date_time, $debit_amount, $credit_amount, $allow_group, $staff, $job_costing_stage_id, $job_costing_full_job_no, $general_ledger_account_rec_id, $general_ledger_account_account_no, $general_ledger_account_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetLinePOSTRequestJournalSetIDLinesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **reference** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **trans_code1_id** | **string**|  | [optional]
 **trans_code1_description** | **string**|  | [optional]
 **trans_code2_id** | **string**|  | [optional]
 **trans_code2_description** | **string**|  | [optional]
 **bas_code** | **string**|  | [optional]
 **trans_post_date_time** | **\DateTime**|  | [optional]
 **debit_amount** | **double**|  | [optional]
 **credit_amount** | **double**|  | [optional]
 **allow_group** | **bool**|  | [optional]
 **staff** | **string**|  | [optional]
 **job_costing_stage_id** | **string**|  | [optional]
 **job_costing_full_job_no** | **string**|  | [optional]
 **general_ledger_account_rec_id** | **string**|  | [optional]
 **general_ledger_account_account_no** | **string**|  | [optional]
 **general_ledger_account_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\JournalSetLinePOSTRequest**](../Model/JournalSetLinePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\JournalSetLine**](../Model/JournalSetLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetLinesGETManyRequestJournalSetIDLinesGet**
> \Jiwa\Model\JournalSetLine[] journalSetLinesGETManyRequestJournalSetIDLinesGet($accept, $journal_set_id, $jiwa_stateful)

Retrieves a list of journal set lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetLinesGETManyRequestJournalSetIDLinesGet($accept, $journal_set_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetLinesGETManyRequestJournalSetIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\JournalSetLine[]**](../Model/JournalSetLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetNoteDELETERequestJournalSetIDNotesNoteIDDelete**
> \Jiwa\Model\Object journalSetNoteDELETERequestJournalSetIDNotesNoteIDDelete($accept, $journal_set_id, $note_id, $jiwa_stateful)

Deletes a journal set note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetNoteDELETERequestJournalSetIDNotesNoteIDDelete($accept, $journal_set_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteDELETERequestJournalSetIDNotesNoteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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

# **journalSetNoteGETRequestJournalSetIDNotesNoteIDGet**
> \Jiwa\Model\Note journalSetNoteGETRequestJournalSetIDNotesNoteIDGet($accept, $journal_set_id, $note_id, $jiwa_stateful)

Retrieves a journal set note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetNoteGETRequestJournalSetIDNotesNoteIDGet($accept, $journal_set_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteGETRequestJournalSetIDNotesNoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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

# **journalSetNotePATCHRequestJournalSetIDNotesNoteIDUpdate**
> \Jiwa\Model\Note journalSetNotePATCHRequestJournalSetIDNotesNoteIDUpdate($accept, $journal_set_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Updates a journal set note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
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
$body = new \Jiwa\Model\JournalSetNotePATCHRequest(); // \Jiwa\Model\JournalSetNotePATCHRequest | 

try {
    $result = $apiInstance->journalSetNotePATCHRequestJournalSetIDNotesNoteIDUpdate($accept, $journal_set_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNotePATCHRequestJournalSetIDNotesNoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\JournalSetNotePATCHRequest**](../Model/JournalSetNotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetNotePOSTRequestJournalSetIDNotesPost**
> \Jiwa\Model\Note journalSetNotePOSTRequestJournalSetIDNotesPost($accept, $journal_set_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Appends a note to a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
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
$body = new \Jiwa\Model\JournalSetNotePOSTRequest(); // \Jiwa\Model\JournalSetNotePOSTRequest | 

try {
    $result = $apiInstance->journalSetNotePOSTRequestJournalSetIDNotesPost($accept, $journal_set_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNotePOSTRequestJournalSetIDNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\JournalSetNotePOSTRequest**](../Model/JournalSetNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**
> \Jiwa\Model\Object journalSetNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful)

Deletes a journal set note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteTypeDELETERequestNoteTypesNoteTypeIDDelete: ', $e->getMessage(), PHP_EOL;
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

# **journalSetNoteTypeGETRequestNoteTypesNoteTypeIDGet**
> \Jiwa\Model\NoteType journalSetNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful)

Retrieves a journal set note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteTypeGETRequestNoteTypesNoteTypeIDGet: ', $e->getMessage(), PHP_EOL;
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

# **journalSetNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**
> \Jiwa\Model\NoteType journalSetNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a journal set note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
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
$body = new \Jiwa\Model\JournalSetNoteTypePATCHRequest(); // \Jiwa\Model\JournalSetNoteTypePATCHRequest | 

try {
    $result = $apiInstance->journalSetNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\JournalSetNoteTypePATCHRequest**](../Model/JournalSetNoteTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetNoteTypePOSTRequestNoteTypesPost**
> \Jiwa\Model\NoteType journalSetNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new journal set note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
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
$body = new \Jiwa\Model\JournalSetNoteTypePOSTRequest(); // \Jiwa\Model\JournalSetNoteTypePOSTRequest | 

try {
    $result = $apiInstance->journalSetNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteTypePOSTRequestNoteTypesPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\JournalSetNoteTypePOSTRequest**](../Model/JournalSetNoteTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetNoteTypesGETManyRequestNoteTypesGet**
> \Jiwa\Model\NoteType[] journalSetNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful)

Retrieves a list of journal set note types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNoteTypesGETManyRequestNoteTypesGet: ', $e->getMessage(), PHP_EOL;
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

# **journalSetNotesGETManyRequestJournalSetIDNotesGet**
> \Jiwa\Model\Note[] journalSetNotesGETManyRequestJournalSetIDNotesGet($accept, $journal_set_id, $jiwa_stateful)

Retrieves a list of journal set notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->journalSetNotesGETManyRequestJournalSetIDNotesGet($accept, $journal_set_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetNotesGETManyRequestJournalSetIDNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Note[]**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetPATCHRequestJournalSetIDUpdate**
> \Jiwa\Model\JournalSet journalSetPATCHRequestJournalSetIDUpdate($accept, $journal_set_id, $jiwa_stateful, $set_no, $set_type, $description, $source, $source_id, $posted_date, $is_reversed, $reverse_type, $reverse_date, $repeating_units, $repeating_type, $next_repeating_date, $repeating_will_end, $repeating_end_date, $last_saved_date_time, $staff, $lines, $notes, $documents, $posted_to_period_no, $posted_to_period_name, $posted_to_year_type, $posted_to_year_no, $posted_to_period_no_is_globally_locked, $posted_to_period_no_is_externally_locked, $body)

Updates a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$journal_set_id = "journal_set_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$set_no = "set_no_example"; // string | 
$set_type = "set_type_example"; // string | 
$description = "description_example"; // string | 
$source = "source_example"; // string | 
$source_id = "source_id_example"; // string | 
$posted_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_reversed = true; // bool | 
$reverse_type = "reverse_type_example"; // string | 
$reverse_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$repeating_units = 56; // int | 
$repeating_type = "repeating_type_example"; // string | 
$next_repeating_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$repeating_will_end = true; // bool | 
$repeating_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$staff = "staff_example"; // string | 
$lines = "lines_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$posted_to_period_no = 56; // int | 
$posted_to_period_name = "posted_to_period_name_example"; // string | 
$posted_to_year_type = "posted_to_year_type_example"; // string | 
$posted_to_year_no = 56; // int | 
$posted_to_period_no_is_globally_locked = true; // bool | 
$posted_to_period_no_is_externally_locked = true; // bool | 
$body = new \Jiwa\Model\JournalSetPATCHRequest(); // \Jiwa\Model\JournalSetPATCHRequest | 

try {
    $result = $apiInstance->journalSetPATCHRequestJournalSetIDUpdate($accept, $journal_set_id, $jiwa_stateful, $set_no, $set_type, $description, $source, $source_id, $posted_date, $is_reversed, $reverse_type, $reverse_date, $repeating_units, $repeating_type, $next_repeating_date, $repeating_will_end, $repeating_end_date, $last_saved_date_time, $staff, $lines, $notes, $documents, $posted_to_period_no, $posted_to_period_name, $posted_to_year_type, $posted_to_year_no, $posted_to_period_no_is_globally_locked, $posted_to_period_no_is_externally_locked, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetPATCHRequestJournalSetIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **journal_set_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **set_no** | **string**|  | [optional]
 **set_type** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **source_id** | **string**|  | [optional]
 **posted_date** | **\DateTime**|  | [optional]
 **is_reversed** | **bool**|  | [optional]
 **reverse_type** | **string**|  | [optional]
 **reverse_date** | **\DateTime**|  | [optional]
 **repeating_units** | **int**|  | [optional]
 **repeating_type** | **string**|  | [optional]
 **next_repeating_date** | **\DateTime**|  | [optional]
 **repeating_will_end** | **bool**|  | [optional]
 **repeating_end_date** | **\DateTime**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **staff** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **posted_to_period_no** | **int**|  | [optional]
 **posted_to_period_name** | **string**|  | [optional]
 **posted_to_year_type** | **string**|  | [optional]
 **posted_to_year_no** | **int**|  | [optional]
 **posted_to_period_no_is_globally_locked** | **bool**|  | [optional]
 **posted_to_period_no_is_externally_locked** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\JournalSetPATCHRequest**](../Model/JournalSetPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\JournalSet**](../Model/JournalSet.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetPOSTRequestPost**
> \Jiwa\Model\JournalSet journalSetPOSTRequestPost($accept, $jiwa_stateful, $set_no, $set_type, $description, $source, $source_id, $posted_date, $is_reversed, $reverse_type, $reverse_date, $repeating_units, $repeating_type, $next_repeating_date, $repeating_will_end, $repeating_end_date, $last_saved_date_time, $staff, $lines, $notes, $documents, $posted_to_period_no, $posted_to_period_name, $posted_to_year_type, $posted_to_year_no, $posted_to_period_no_is_globally_locked, $posted_to_period_no_is_externally_locked, $body)

Creates a journal set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$set_no = "set_no_example"; // string | 
$set_type = "set_type_example"; // string | 
$description = "description_example"; // string | 
$source = "source_example"; // string | 
$source_id = "source_id_example"; // string | 
$posted_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$is_reversed = true; // bool | 
$reverse_type = "reverse_type_example"; // string | 
$reverse_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$repeating_units = 56; // int | 
$repeating_type = "repeating_type_example"; // string | 
$next_repeating_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$repeating_will_end = true; // bool | 
$repeating_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$staff = "staff_example"; // string | 
$lines = "lines_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$posted_to_period_no = 56; // int | 
$posted_to_period_name = "posted_to_period_name_example"; // string | 
$posted_to_year_type = "posted_to_year_type_example"; // string | 
$posted_to_year_no = 56; // int | 
$posted_to_period_no_is_globally_locked = true; // bool | 
$posted_to_period_no_is_externally_locked = true; // bool | 
$body = new \Jiwa\Model\JournalSetPOSTRequest(); // \Jiwa\Model\JournalSetPOSTRequest | 

try {
    $result = $apiInstance->journalSetPOSTRequestPost($accept, $jiwa_stateful, $set_no, $set_type, $description, $source, $source_id, $posted_date, $is_reversed, $reverse_type, $reverse_date, $repeating_units, $repeating_type, $next_repeating_date, $repeating_will_end, $repeating_end_date, $last_saved_date_time, $staff, $lines, $notes, $documents, $posted_to_period_no, $posted_to_period_name, $posted_to_year_type, $posted_to_year_no, $posted_to_period_no_is_globally_locked, $posted_to_period_no_is_externally_locked, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **set_no** | **string**|  | [optional]
 **set_type** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **source_id** | **string**|  | [optional]
 **posted_date** | **\DateTime**|  | [optional]
 **is_reversed** | **bool**|  | [optional]
 **reverse_type** | **string**|  | [optional]
 **reverse_date** | **\DateTime**|  | [optional]
 **repeating_units** | **int**|  | [optional]
 **repeating_type** | **string**|  | [optional]
 **next_repeating_date** | **\DateTime**|  | [optional]
 **repeating_will_end** | **bool**|  | [optional]
 **repeating_end_date** | **\DateTime**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **staff** | **string**|  | [optional]
 **lines** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **posted_to_period_no** | **int**|  | [optional]
 **posted_to_period_name** | **string**|  | [optional]
 **posted_to_year_type** | **string**|  | [optional]
 **posted_to_year_no** | **int**|  | [optional]
 **posted_to_period_no_is_globally_locked** | **bool**|  | [optional]
 **posted_to_period_no_is_externally_locked** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\JournalSetPOSTRequest**](../Model/JournalSetPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\JournalSet**](../Model/JournalSet.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **journalSetSAVERequestSaveGet**
> \Jiwa\Model\JournalSet journalSetSAVERequestSaveGet($accept, $jiwa_stateful, $journal_set_id)

Saves a stateful stateful journal set.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful stateful journal set item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\JournalSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$journal_set_id = "journal_set_id_example"; // string | 

try {
    $result = $apiInstance->journalSetSAVERequestSaveGet($accept, $jiwa_stateful, $journal_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalSetsApi->journalSetSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **journal_set_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\JournalSet**](../Model/JournalSet.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

