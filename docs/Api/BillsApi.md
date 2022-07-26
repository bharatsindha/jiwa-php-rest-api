# Jiwa\BillsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**billABANDONRequestBillIDAbandonDelete**](BillsApi.md#billABANDONRequestBillIDAbandonDelete) | **DELETE** /Bills/{BillID}/Abandon | Abandons a stateful bill record.
[**billCustomFieldGETRequestCustomFieldsSettingIDGet**](BillsApi.md#billCustomFieldGETRequestCustomFieldsSettingIDGet) | **GET** /Bills/CustomFields/{SettingID} | Retrieves a bill custom field.
[**billCustomFieldValueGETRequestBillIDCustomFieldValuesSettingIDGet**](BillsApi.md#billCustomFieldValueGETRequestBillIDCustomFieldValuesSettingIDGet) | **GET** /Bills/{BillID}/CustomFieldValues/{SettingID} | Retrieves a bill record custom field value.
[**billCustomFieldValuePATCHRequestBillIDCustomFieldValuesSettingIDUpdate**](BillsApi.md#billCustomFieldValuePATCHRequestBillIDCustomFieldValuesSettingIDUpdate) | **PATCH** /Bills/{BillID}/CustomFieldValues/{SettingID} | Updates a bill record custom field value.
[**billCustomFieldValuesGETManyRequestBillIDCustomFieldValuesGet**](BillsApi.md#billCustomFieldValuesGETManyRequestBillIDCustomFieldValuesGet) | **GET** /Bills/{BillID}/CustomFieldValues | Retrieves a list of custom field values for a bill record.
[**billCustomFieldsGETManyRequestCustomFieldsGet**](BillsApi.md#billCustomFieldsGETManyRequestCustomFieldsGet) | **GET** /Bills/CustomFields | Retrieves a list of bill custom fields.
[**billDELETERequestBillIDDelete**](BillsApi.md#billDELETERequestBillIDDelete) | **DELETE** /Bills/{BillID} | Deletes a bill record.
[**billDocumentDELETERequestBillIDDocumentsDocumentIDDelete**](BillsApi.md#billDocumentDELETERequestBillIDDocumentsDocumentIDDelete) | **DELETE** /Bills/{BillID}/Documents/{DocumentID} | Deletes a bill record document.
[**billDocumentGETRequestBillIDDocumentsDocumentIDGet**](BillsApi.md#billDocumentGETRequestBillIDDocumentsDocumentIDGet) | **GET** /Bills/{BillID}/Documents/{DocumentID} | Retrieves a bill record document.
[**billDocumentPATCHRequestBillIDDocumentsDocumentIDUpdate**](BillsApi.md#billDocumentPATCHRequestBillIDDocumentsDocumentIDUpdate) | **PATCH** /Bills/{BillID}/Documents/{DocumentID} | Updates a bill record document.
[**billDocumentPOSTRequestBillIDDocumentsPost**](BillsApi.md#billDocumentPOSTRequestBillIDDocumentsPost) | **POST** /Bills/{BillID}/Documents | Appends a document to a bill record.
[**billDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**](BillsApi.md#billDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete) | **DELETE** /Bills/DocumentTypes/{DocumentTypeID} | Deletes a bill document type.
[**billDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**](BillsApi.md#billDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet) | **GET** /Bills/DocumentTypes/{DocumentTypeID} | Retrieves a bill document type.
[**billDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**](BillsApi.md#billDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate) | **PATCH** /Bills/DocumentTypes/{DocumentTypeID} | Updates a bill document type.
[**billDocumentTypePOSTRequestDocumentTypesPost**](BillsApi.md#billDocumentTypePOSTRequestDocumentTypesPost) | **POST** /Bills/DocumentTypes | Creates a new bill document type.
[**billDocumentTypesGETManyRequestDocumentTypesGet**](BillsApi.md#billDocumentTypesGETManyRequestDocumentTypesGet) | **GET** /Bills/DocumentTypes | Retrieves a list of bill document types.
[**billDocumentsGETManyRequestBillIDDocumentsGet**](BillsApi.md#billDocumentsGETManyRequestBillIDDocumentsGet) | **GET** /Bills/{BillID}/Documents | Retrieves a list of bill record documents.
[**billGETRequestBillIDGet**](BillsApi.md#billGETRequestBillIDGet) | **GET** /Bills/{BillID} | Retrieves a bill record.
[**billInputCustomFieldGETRequestInputsCustomFieldsSettingIDGet**](BillsApi.md#billInputCustomFieldGETRequestInputsCustomFieldsSettingIDGet) | **GET** /Bills/Inputs/CustomFields/{SettingID} | Retrieves a bill input custom field.
[**billInputCustomFieldValueGETRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDGet**](BillsApi.md#billInputCustomFieldValueGETRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Inputs/{InputID}/CustomFieldValues/{SettingID} | Retrieves a bill input custom field value.
[**billInputCustomFieldValuePATCHRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDUpdate**](BillsApi.md#billInputCustomFieldValuePATCHRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDUpdate) | **PATCH** /Bills/{BillID}/Stages/{StageID}/Inputs/{InputID}/CustomFieldValues/{SettingID} | Updates a bill input custom field value.
[**billInputCustomFieldValuesGETManyRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesGet**](BillsApi.md#billInputCustomFieldValuesGETManyRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Inputs/{InputID}/CustomFieldValues | Retrieves a list of custom field values for a bill input.
[**billInputCustomFieldsGETManyRequestInputsCustomFieldsGet**](BillsApi.md#billInputCustomFieldsGETManyRequestInputsCustomFieldsGet) | **GET** /Bills/Inputs/CustomFields | Retrieves a list of bill input custom fields.
[**billInputDELETERequestBillIDStagesStageIDInputsInputIDDelete**](BillsApi.md#billInputDELETERequestBillIDStagesStageIDInputsInputIDDelete) | **DELETE** /Bills/{BillID}/Stages/{StageID}/Inputs/{InputID} | Deletes an input from a bill stage
[**billInputGETRequestBillIDStagesStageIDInputsInputIDGet**](BillsApi.md#billInputGETRequestBillIDStagesStageIDInputsInputIDGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Inputs/{InputID} | Retrieves an input for a bill stage
[**billInputPATCHRequestBillIDStagesStageIDInputsInputIDUpdate**](BillsApi.md#billInputPATCHRequestBillIDStagesStageIDInputsInputIDUpdate) | **PATCH** /Bills/{BillID}/Stages/{StageID}/Inputs/{InputID} | Updates an input for a bill stage
[**billInputPOSTRequestBillIDStagesStageIDInputsPost**](BillsApi.md#billInputPOSTRequestBillIDStagesStageIDInputsPost) | **POST** /Bills/{BillID}/Stages/{StageID}/Inputs | Adds an input to a bill stage
[**billInputsGETManyRequestBillIDStagesStageIDInputsGet**](BillsApi.md#billInputsGETManyRequestBillIDStagesStageIDInputsGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Inputs | Retrieves inputs for a bill stage.
[**billInstructionCustomFieldGETRequestInstructionsCustomFieldsSettingIDGet**](BillsApi.md#billInstructionCustomFieldGETRequestInstructionsCustomFieldsSettingIDGet) | **GET** /Bills/Instructions/CustomFields/{SettingID} | Retrieves a bill instruction custom field.
[**billInstructionCustomFieldValueGETRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDGet**](BillsApi.md#billInstructionCustomFieldValueGETRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Instructions/{InstructionID}/CustomFieldValues/{SettingID} | Retrieves a bill instruction custom field value.
[**billInstructionCustomFieldValuePATCHRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDUpdate**](BillsApi.md#billInstructionCustomFieldValuePATCHRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDUpdate) | **PATCH** /Bills/{BillID}/Stages/{StageID}/Instructions/{InstructionID}/CustomFieldValues/{SettingID} | Updates a bill instruction custom field value.
[**billInstructionCustomFieldValuesGETManyRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesGet**](BillsApi.md#billInstructionCustomFieldValuesGETManyRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Instructions/{InstructionID}/CustomFieldValues | Retrieves a list of custom field values for a bill instruction.
[**billInstructionCustomFieldsGETManyRequestInstructionsCustomFieldsGet**](BillsApi.md#billInstructionCustomFieldsGETManyRequestInstructionsCustomFieldsGet) | **GET** /Bills/Instructions/CustomFields | Retrieves a list of bill instruction custom fields.
[**billInstructionDELETERequestBillIDStagesStageIDInstructionsInstructionIDDelete**](BillsApi.md#billInstructionDELETERequestBillIDStagesStageIDInstructionsInstructionIDDelete) | **DELETE** /Bills/{BillID}/Stages/{StageID}/Instructions/{InstructionID} | Deletes an instruction from a bill stage.
[**billInstructionGETRequestBillIDStagesStageIDInstructionsInstructionIDGet**](BillsApi.md#billInstructionGETRequestBillIDStagesStageIDInstructionsInstructionIDGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Instructions/{InstructionID} | Retrieves an instruction for a bill stage.
[**billInstructionPATCHRequestBillIDStagesStageIDInstructionsInstructionIDUpdate**](BillsApi.md#billInstructionPATCHRequestBillIDStagesStageIDInstructionsInstructionIDUpdate) | **PATCH** /Bills/{BillID}/Stages/{StageID}/Instructions/{InstructionID} | Updates an instruction for a bill stage.
[**billInstructionPOSTRequestBillIDStagesStageIDInstructionsPost**](BillsApi.md#billInstructionPOSTRequestBillIDStagesStageIDInstructionsPost) | **POST** /Bills/{BillID}/Stages/{StageID}/Instructions | Adds an instruction to a bill stage.
[**billInstructionsGETManyRequestBillIDStagesStageIDInstructionsGet**](BillsApi.md#billInstructionsGETManyRequestBillIDStagesStageIDInstructionsGet) | **GET** /Bills/{BillID}/Stages/{StageID}/Instructions | Retrieves a list of instructions for a bill stage.
[**billNoteDELETERequestBillIDNotesNoteIDDelete**](BillsApi.md#billNoteDELETERequestBillIDNotesNoteIDDelete) | **DELETE** /Bills/{BillID}/Notes/{NoteID} | Deletes a bill record note.
[**billNoteGETRequestBillIDNotesNoteIDGet**](BillsApi.md#billNoteGETRequestBillIDNotesNoteIDGet) | **GET** /Bills/{BillID}/Notes/{NoteID} | Retrieves a bill record note.
[**billNotePATCHRequestBillIDNotesNoteIDUpdate**](BillsApi.md#billNotePATCHRequestBillIDNotesNoteIDUpdate) | **PATCH** /Bills/{BillID}/Notes/{NoteID} | Updates a bill record note.
[**billNotePOSTRequestBillIDNotesPost**](BillsApi.md#billNotePOSTRequestBillIDNotesPost) | **POST** /Bills/{BillID}/Notes | Appends a note to a bill record.
[**billNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**](BillsApi.md#billNoteTypeDELETERequestNoteTypesNoteTypeIDDelete) | **DELETE** /Bills/NoteTypes/{NoteTypeID} | Deletes a bill note type.
[**billNoteTypeGETRequestNoteTypesNoteTypeIDGet**](BillsApi.md#billNoteTypeGETRequestNoteTypesNoteTypeIDGet) | **GET** /Bills/NoteTypes/{NoteTypeID} | Retrieves a bill note type.
[**billNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**](BillsApi.md#billNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate) | **PATCH** /Bills/NoteTypes/{NoteTypeID} | Updates a bill note type.
[**billNoteTypePOSTRequestNoteTypesPost**](BillsApi.md#billNoteTypePOSTRequestNoteTypesPost) | **POST** /Bills/NoteTypes | Creates a new bill note type.
[**billNoteTypesGETManyRequestNoteTypesGet**](BillsApi.md#billNoteTypesGETManyRequestNoteTypesGet) | **GET** /Bills/NoteTypes | Retrieves a list of bill note types.
[**billNotesGETManyRequestBillIDNotesGet**](BillsApi.md#billNotesGETManyRequestBillIDNotesGet) | **GET** /Bills/{BillID}/Notes | Retrieves a list of bill record notes.
[**billOutputCustomFieldGETRequestOutputsCustomFieldsSettingIDGet**](BillsApi.md#billOutputCustomFieldGETRequestOutputsCustomFieldsSettingIDGet) | **GET** /Bills/Outputs/CustomFields/{SettingID} | Retrieves a bill output custom field.
[**billOutputCustomFieldValueGETRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDGet**](BillsApi.md#billOutputCustomFieldValueGETRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDGet) | **GET** /Bills/{BillID}/Outputs/{OutputID}/CustomFieldValues/{SettingID} | Retrieves a bill output custom field value.
[**billOutputCustomFieldValuePATCHRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDUpdate**](BillsApi.md#billOutputCustomFieldValuePATCHRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDUpdate) | **PATCH** /Bills/{BillID}/Outputs/{OutputID}/CustomFieldValues/{SettingID} | Updates a bill output custom field value.
[**billOutputCustomFieldValuesGETManyRequestBillIDOutputsOutputIDCustomFieldValuesGet**](BillsApi.md#billOutputCustomFieldValuesGETManyRequestBillIDOutputsOutputIDCustomFieldValuesGet) | **GET** /Bills/{BillID}/Outputs/{OutputID}/CustomFieldValues | Retrieves a list of custom field values for a bill output.
[**billOutputCustomFieldsGETManyRequestOutputsCustomFieldsGet**](BillsApi.md#billOutputCustomFieldsGETManyRequestOutputsCustomFieldsGet) | **GET** /Bills/Outputs/CustomFields | Retrieves a list of bill output custom fields.
[**billOutputDELETERequestBillIDOutputsOutputIDDelete**](BillsApi.md#billOutputDELETERequestBillIDOutputsOutputIDDelete) | **DELETE** /Bills/{BillID}/Outputs/{OutputID} | Deletes a bill output.
[**billOutputGETRequestBillIDOutputsOutputIDGet**](BillsApi.md#billOutputGETRequestBillIDOutputsOutputIDGet) | **GET** /Bills/{BillID}/Outputs/{OutputID} | Retrieves a bill output.
[**billOutputPATCHRequestBillIDOutputsOutputIDUpdate**](BillsApi.md#billOutputPATCHRequestBillIDOutputsOutputIDUpdate) | **PATCH** /Bills/{BillID}/Outputs/{OutputID} | Updates a bill output.
[**billOutputPOSTRequestBillIDOutputsPost**](BillsApi.md#billOutputPOSTRequestBillIDOutputsPost) | **POST** /Bills/{BillID}/Outputs | Appends a output to a bill record.
[**billOutputsGETManyRequestBillIDOutputsGet**](BillsApi.md#billOutputsGETManyRequestBillIDOutputsGet) | **GET** /Bills/{BillID}/Outputs | Retrieves a list of bill outputs.
[**billPATCHRequestBillIDUpdate**](BillsApi.md#billPATCHRequestBillIDUpdate) | **PATCH** /Bills/{BillID} | Updates a bill record.
[**billPOSTRequestPost**](BillsApi.md#billPOSTRequestPost) | **POST** /Bills | Creates a new bill record.
[**billSAVERequestBillIDSaveGet**](BillsApi.md#billSAVERequestBillIDSaveGet) | **GET** /Bills/{BillID}/Save | Saves a stateful bill record.
[**billStageCustomFieldGETRequestStagesCustomFieldsSettingIDGet**](BillsApi.md#billStageCustomFieldGETRequestStagesCustomFieldsSettingIDGet) | **GET** /Bills/Stages/CustomFields/{SettingID} | Retrieves a bill stage custom field.
[**billStageCustomFieldValueGETRequestBillIDStagesStageIDCustomFieldValuesSettingIDGet**](BillsApi.md#billStageCustomFieldValueGETRequestBillIDStagesStageIDCustomFieldValuesSettingIDGet) | **GET** /Bills/{BillID}/Stages/{StageID}/CustomFieldValues/{SettingID} | Retrieves a bill stage custom field value.
[**billStageCustomFieldValuePATCHRequestBillIDStagesStageIDCustomFieldValuesSettingIDUpdate**](BillsApi.md#billStageCustomFieldValuePATCHRequestBillIDStagesStageIDCustomFieldValuesSettingIDUpdate) | **PATCH** /Bills/{BillID}/Stages/{StageID}/CustomFieldValues/{SettingID} | Updates a bill stage custom field value.
[**billStageCustomFieldValuesGETManyRequestBillIDStagesStageIDCustomFieldValuesGet**](BillsApi.md#billStageCustomFieldValuesGETManyRequestBillIDStagesStageIDCustomFieldValuesGet) | **GET** /Bills/{BillID}/Stages/{StageID}/CustomFieldValues | Retrieves a list of custom field values for a bill stage.
[**billStageCustomFieldsGETManyRequestStagesCustomFieldsGet**](BillsApi.md#billStageCustomFieldsGETManyRequestStagesCustomFieldsGet) | **GET** /Bills/Stages/CustomFields | Retrieves a list of bill stage custom fields.
[**billStageDELETERequestBillIDStagesStageIDDelete**](BillsApi.md#billStageDELETERequestBillIDStagesStageIDDelete) | **DELETE** /Bills/{BillID}/Stages/{StageID} | Deletes a bill record stage.
[**billStageGETRequestBillIDStagesStageIDGet**](BillsApi.md#billStageGETRequestBillIDStagesStageIDGet) | **GET** /Bills/{BillID}/Stages/{StageID} | Retrieves a bill stage.
[**billStagePATCHRequestBillIDStagesStageIDUpdate**](BillsApi.md#billStagePATCHRequestBillIDStagesStageIDUpdate) | **PATCH** /Bills/{BillID}/Stages/{StageID} | Updates a bill stage.
[**billStagePOSTRequestBillIDStagesPost**](BillsApi.md#billStagePOSTRequestBillIDStagesPost) | **POST** /Bills/{BillID}/Stages | Appends a stage to a bill record.
[**billStagesGETManyRequestBillIDStagesGet**](BillsApi.md#billStagesGETManyRequestBillIDStagesGet) | **GET** /Bills/{BillID}/Stages | Retrieves a list of bill stages.


# **billABANDONRequestBillIDAbandonDelete**
> \Jiwa\Model\Object billABANDONRequestBillIDAbandonDelete($accept, $bill_id, $jiwa_stateful)

Abandons a stateful bill record.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful bill record exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billABANDONRequestBillIDAbandonDelete($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billABANDONRequestBillIDAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billCustomFieldGETRequestCustomFieldsSettingIDGet**
> \Jiwa\Model\CustomField billCustomFieldGETRequestCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful)

Retrieves a bill custom field.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billCustomFieldGETRequestCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billCustomFieldGETRequestCustomFieldsSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billCustomFieldValueGETRequestBillIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue billCustomFieldValueGETRequestBillIDCustomFieldValuesSettingIDGet($accept, $bill_id, $setting_id, $jiwa_stateful)

Retrieves a bill record custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billCustomFieldValueGETRequestBillIDCustomFieldValuesSettingIDGet($accept, $bill_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billCustomFieldValueGETRequestBillIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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

# **billCustomFieldValuePATCHRequestBillIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue billCustomFieldValuePATCHRequestBillIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a bill record custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\BillCustomFieldValuePATCHRequest(); // \Jiwa\Model\BillCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->billCustomFieldValuePATCHRequestBillIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billCustomFieldValuePATCHRequestBillIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillCustomFieldValuePATCHRequest**](../Model/BillCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billCustomFieldValuesGETManyRequestBillIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] billCustomFieldValuesGETManyRequestBillIDCustomFieldValuesGet($accept, $bill_id, $jiwa_stateful)

Retrieves a list of custom field values for a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billCustomFieldValuesGETManyRequestBillIDCustomFieldValuesGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billCustomFieldValuesGETManyRequestBillIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billCustomFieldsGETManyRequestCustomFieldsGet**
> \Jiwa\Model\CustomField[] billCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of bill custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billCustomFieldsGETManyRequestCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **billDELETERequestBillIDDelete**
> \Jiwa\Model\Object billDELETERequestBillIDDelete($accept, $bill_id, $jiwa_stateful)

Deletes a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDELETERequestBillIDDelete($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDELETERequestBillIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billDocumentDELETERequestBillIDDocumentsDocumentIDDelete**
> \Jiwa\Model\Object billDocumentDELETERequestBillIDDocumentsDocumentIDDelete($accept, $bill_id, $document_id, $jiwa_stateful)

Deletes a bill record document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDocumentDELETERequestBillIDDocumentsDocumentIDDelete($accept, $bill_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentDELETERequestBillIDDocumentsDocumentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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

# **billDocumentGETRequestBillIDDocumentsDocumentIDGet**
> \Jiwa\Model\Document billDocumentGETRequestBillIDDocumentsDocumentIDGet($accept, $bill_id, $document_id, $jiwa_stateful)

Retrieves a bill record document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDocumentGETRequestBillIDDocumentsDocumentIDGet($accept, $bill_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentGETRequestBillIDDocumentsDocumentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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

# **billDocumentPATCHRequestBillIDDocumentsDocumentIDUpdate**
> \Jiwa\Model\Document billDocumentPATCHRequestBillIDDocumentsDocumentIDUpdate($accept, $bill_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Updates a bill record document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
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
$body = new \Jiwa\Model\BillDocumentPATCHRequest(); // \Jiwa\Model\BillDocumentPATCHRequest | 

try {
    $result = $apiInstance->billDocumentPATCHRequestBillIDDocumentsDocumentIDUpdate($accept, $bill_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentPATCHRequestBillIDDocumentsDocumentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\BillDocumentPATCHRequest**](../Model/BillDocumentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billDocumentPOSTRequestBillIDDocumentsPost**
> \Jiwa\Model\Document billDocumentPOSTRequestBillIDDocumentsPost($accept, $bill_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Appends a document to a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
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
$body = new \Jiwa\Model\BillDocumentPOSTRequest(); // \Jiwa\Model\BillDocumentPOSTRequest | 

try {
    $result = $apiInstance->billDocumentPOSTRequestBillIDDocumentsPost($accept, $bill_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentPOSTRequestBillIDDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\BillDocumentPOSTRequest**](../Model/BillDocumentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**
> \Jiwa\Model\Object billDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful)

Deletes a bill document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete: ', $e->getMessage(), PHP_EOL;
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

# **billDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**
> \Jiwa\Model\DocumentType billDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful)

Retrieves a bill document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet: ', $e->getMessage(), PHP_EOL;
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

# **billDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**
> \Jiwa\Model\DocumentType billDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a bill document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
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
$body = new \Jiwa\Model\BillDocumentTypePATCHRequest(); // \Jiwa\Model\BillDocumentTypePATCHRequest | 

try {
    $result = $apiInstance->billDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\BillDocumentTypePATCHRequest**](../Model/BillDocumentTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billDocumentTypePOSTRequestDocumentTypesPost**
> \Jiwa\Model\DocumentType billDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new bill document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
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
$body = new \Jiwa\Model\BillDocumentTypePOSTRequest(); // \Jiwa\Model\BillDocumentTypePOSTRequest | 

try {
    $result = $apiInstance->billDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentTypePOSTRequestDocumentTypesPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\BillDocumentTypePOSTRequest**](../Model/BillDocumentTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billDocumentTypesGETManyRequestDocumentTypesGet**
> \Jiwa\Model\DocumentType[] billDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful)

Retrieves a list of bill document types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentTypesGETManyRequestDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
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

# **billDocumentsGETManyRequestBillIDDocumentsGet**
> \Jiwa\Model\Document[] billDocumentsGETManyRequestBillIDDocumentsGet($accept, $bill_id, $jiwa_stateful)

Retrieves a list of bill record documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billDocumentsGETManyRequestBillIDDocumentsGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billDocumentsGETManyRequestBillIDDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Document[]**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billGETRequestBillIDGet**
> \Jiwa\Model\Bill billGETRequestBillIDGet($accept, $bill_id, $jiwa_stateful)

Retrieves a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billGETRequestBillIDGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billGETRequestBillIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Bill**](../Model/Bill.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputCustomFieldGETRequestInputsCustomFieldsSettingIDGet**
> \Jiwa\Model\CustomField billInputCustomFieldGETRequestInputsCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful)

Retrieves a bill input custom field.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputCustomFieldGETRequestInputsCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputCustomFieldGETRequestInputsCustomFieldsSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputCustomFieldValueGETRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue billInputCustomFieldValueGETRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDGet($accept, $bill_id, $stage_id, $input_id, $setting_id, $jiwa_stateful)

Retrieves a bill input custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$input_id = "input_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputCustomFieldValueGETRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDGet($accept, $bill_id, $stage_id, $input_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputCustomFieldValueGETRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **input_id** | **string**|  |
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

# **billInputCustomFieldValuePATCHRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue billInputCustomFieldValuePATCHRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $stage_id, $input_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a bill input custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$input_id = "input_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\BillInputCustomFieldValuePATCHRequest(); // \Jiwa\Model\BillInputCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->billInputCustomFieldValuePATCHRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $stage_id, $input_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputCustomFieldValuePATCHRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **input_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillInputCustomFieldValuePATCHRequest**](../Model/BillInputCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputCustomFieldValuesGETManyRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] billInputCustomFieldValuesGETManyRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesGet($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful)

Retrieves a list of custom field values for a bill input.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$input_id = "input_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputCustomFieldValuesGETManyRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesGet($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputCustomFieldValuesGETManyRequestBillIDStagesStageIDInputsInputIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **input_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputCustomFieldsGETManyRequestInputsCustomFieldsGet**
> \Jiwa\Model\CustomField[] billInputCustomFieldsGETManyRequestInputsCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of bill input custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputCustomFieldsGETManyRequestInputsCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputCustomFieldsGETManyRequestInputsCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **billInputDELETERequestBillIDStagesStageIDInputsInputIDDelete**
> \Jiwa\Model\Object billInputDELETERequestBillIDStagesStageIDInputsInputIDDelete($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful)

Deletes an input from a bill stage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$input_id = "input_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputDELETERequestBillIDStagesStageIDInputsInputIDDelete($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputDELETERequestBillIDStagesStageIDInputsInputIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **input_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputGETRequestBillIDStagesStageIDInputsInputIDGet**
> \Jiwa\Model\Input billInputGETRequestBillIDStagesStageIDInputsInputIDGet($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful)

Retrieves an input for a bill stage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$input_id = "input_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputGETRequestBillIDStagesStageIDInputsInputIDGet($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputGETRequestBillIDStagesStageIDInputsInputIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **input_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Input**](../Model/Input.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputPATCHRequestBillIDStagesStageIDInputsInputIDUpdate**
> \Jiwa\Model\Input billInputPATCHRequestBillIDStagesStageIDInputsInputIDUpdate($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_bo_m_item, $sub_assembly_bill_id, $sub_assembly_explode_policy, $custom_field_values, $total_line_cost, $last_cost, $unit_measure, $body)

Updates an input for a bill stage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$input_id = "input_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$is_ratio = true; // bool | 
$quantity = 1.2; // double | 
$note = "note_example"; // string | 
$is_bo_m_item = true; // bool | 
$sub_assembly_bill_id = "sub_assembly_bill_id_example"; // string | 
$sub_assembly_explode_policy = "sub_assembly_explode_policy_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$total_line_cost = 1.2; // double | 
$last_cost = 1.2; // double | 
$unit_measure = "unit_measure_example"; // string | 
$body = new \Jiwa\Model\BillInputPATCHRequest(); // \Jiwa\Model\BillInputPATCHRequest | 

try {
    $result = $apiInstance->billInputPATCHRequestBillIDStagesStageIDInputsInputIDUpdate($accept, $bill_id, $stage_id, $input_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_bo_m_item, $sub_assembly_bill_id, $sub_assembly_explode_policy, $custom_field_values, $total_line_cost, $last_cost, $unit_measure, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputPATCHRequestBillIDStagesStageIDInputsInputIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **input_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **is_ratio** | **bool**|  | [optional]
 **quantity** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **is_bo_m_item** | **bool**|  | [optional]
 **sub_assembly_bill_id** | **string**|  | [optional]
 **sub_assembly_explode_policy** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **total_line_cost** | **double**|  | [optional]
 **last_cost** | **double**|  | [optional]
 **unit_measure** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillInputPATCHRequest**](../Model/BillInputPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Input**](../Model/Input.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputPOSTRequestBillIDStagesStageIDInputsPost**
> \Jiwa\Model\Input billInputPOSTRequestBillIDStagesStageIDInputsPost($accept, $bill_id, $stage_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_bo_m_item, $sub_assembly_bill_id, $sub_assembly_explode_policy, $custom_field_values, $total_line_cost, $last_cost, $unit_measure, $body)

Adds an input to a bill stage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$is_ratio = true; // bool | 
$quantity = 1.2; // double | 
$note = "note_example"; // string | 
$is_bo_m_item = true; // bool | 
$sub_assembly_bill_id = "sub_assembly_bill_id_example"; // string | 
$sub_assembly_explode_policy = "sub_assembly_explode_policy_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$total_line_cost = 1.2; // double | 
$last_cost = 1.2; // double | 
$unit_measure = "unit_measure_example"; // string | 
$body = new \Jiwa\Model\BillInputPOSTRequest(); // \Jiwa\Model\BillInputPOSTRequest | 

try {
    $result = $apiInstance->billInputPOSTRequestBillIDStagesStageIDInputsPost($accept, $bill_id, $stage_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_bo_m_item, $sub_assembly_bill_id, $sub_assembly_explode_policy, $custom_field_values, $total_line_cost, $last_cost, $unit_measure, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputPOSTRequestBillIDStagesStageIDInputsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **is_ratio** | **bool**|  | [optional]
 **quantity** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **is_bo_m_item** | **bool**|  | [optional]
 **sub_assembly_bill_id** | **string**|  | [optional]
 **sub_assembly_explode_policy** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **total_line_cost** | **double**|  | [optional]
 **last_cost** | **double**|  | [optional]
 **unit_measure** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillInputPOSTRequest**](../Model/BillInputPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Input**](../Model/Input.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInputsGETManyRequestBillIDStagesStageIDInputsGet**
> \Jiwa\Model\Input[] billInputsGETManyRequestBillIDStagesStageIDInputsGet($accept, $bill_id, $stage_id, $jiwa_stateful)

Retrieves inputs for a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInputsGETManyRequestBillIDStagesStageIDInputsGet($accept, $bill_id, $stage_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInputsGETManyRequestBillIDStagesStageIDInputsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Input[]**](../Model/Input.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionCustomFieldGETRequestInstructionsCustomFieldsSettingIDGet**
> \Jiwa\Model\CustomField billInstructionCustomFieldGETRequestInstructionsCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful)

Retrieves a bill instruction custom field.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionCustomFieldGETRequestInstructionsCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionCustomFieldGETRequestInstructionsCustomFieldsSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionCustomFieldValueGETRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue billInstructionCustomFieldValueGETRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDGet($accept, $bill_id, $stage_id, $instruction_id, $setting_id, $jiwa_stateful)

Retrieves a bill instruction custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$instruction_id = "instruction_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionCustomFieldValueGETRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDGet($accept, $bill_id, $stage_id, $instruction_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionCustomFieldValueGETRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **instruction_id** | **string**|  |
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

# **billInstructionCustomFieldValuePATCHRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue billInstructionCustomFieldValuePATCHRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $stage_id, $instruction_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a bill instruction custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$instruction_id = "instruction_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\BillInstructionCustomFieldValuePATCHRequest(); // \Jiwa\Model\BillInstructionCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->billInstructionCustomFieldValuePATCHRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $stage_id, $instruction_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionCustomFieldValuePATCHRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **instruction_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillInstructionCustomFieldValuePATCHRequest**](../Model/BillInstructionCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionCustomFieldValuesGETManyRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] billInstructionCustomFieldValuesGETManyRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesGet($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful)

Retrieves a list of custom field values for a bill instruction.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$instruction_id = "instruction_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionCustomFieldValuesGETManyRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesGet($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionCustomFieldValuesGETManyRequestBillIDStagesStageIDInstructionsInstructionIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **instruction_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionCustomFieldsGETManyRequestInstructionsCustomFieldsGet**
> \Jiwa\Model\CustomField[] billInstructionCustomFieldsGETManyRequestInstructionsCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of bill instruction custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionCustomFieldsGETManyRequestInstructionsCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionCustomFieldsGETManyRequestInstructionsCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **billInstructionDELETERequestBillIDStagesStageIDInstructionsInstructionIDDelete**
> \Jiwa\Model\Object billInstructionDELETERequestBillIDStagesStageIDInstructionsInstructionIDDelete($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful)

Deletes an instruction from a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$instruction_id = "instruction_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionDELETERequestBillIDStagesStageIDInstructionsInstructionIDDelete($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionDELETERequestBillIDStagesStageIDInstructionsInstructionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **instruction_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionGETRequestBillIDStagesStageIDInstructionsInstructionIDGet**
> \Jiwa\Model\Instruction billInstructionGETRequestBillIDStagesStageIDInstructionsInstructionIDGet($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful)

Retrieves an instruction for a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$instruction_id = "instruction_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionGETRequestBillIDStagesStageIDInstructionsInstructionIDGet($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionGETRequestBillIDStagesStageIDInstructionsInstructionIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **instruction_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Instruction**](../Model/Instruction.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionPATCHRequestBillIDStagesStageIDInstructionsInstructionIDUpdate**
> \Jiwa\Model\Instruction billInstructionPATCHRequestBillIDStagesStageIDInstructionsInstructionIDUpdate($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful, $item_no, $instruction_text, $custom_field_values, $body)

Updates an instruction for a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$instruction_id = "instruction_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$instruction_text = "instruction_text_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\BillInstructionPATCHRequest(); // \Jiwa\Model\BillInstructionPATCHRequest | 

try {
    $result = $apiInstance->billInstructionPATCHRequestBillIDStagesStageIDInstructionsInstructionIDUpdate($accept, $bill_id, $stage_id, $instruction_id, $jiwa_stateful, $item_no, $instruction_text, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionPATCHRequestBillIDStagesStageIDInstructionsInstructionIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **instruction_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **instruction_text** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillInstructionPATCHRequest**](../Model/BillInstructionPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Instruction**](../Model/Instruction.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionPOSTRequestBillIDStagesStageIDInstructionsPost**
> \Jiwa\Model\Instruction billInstructionPOSTRequestBillIDStagesStageIDInstructionsPost($accept, $bill_id, $stage_id, $jiwa_stateful, $item_no, $instruction_text, $custom_field_values, $body)

Adds an instruction to a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$instruction_text = "instruction_text_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\BillInstructionPOSTRequest(); // \Jiwa\Model\BillInstructionPOSTRequest | 

try {
    $result = $apiInstance->billInstructionPOSTRequestBillIDStagesStageIDInstructionsPost($accept, $bill_id, $stage_id, $jiwa_stateful, $item_no, $instruction_text, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionPOSTRequestBillIDStagesStageIDInstructionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **instruction_text** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillInstructionPOSTRequest**](../Model/BillInstructionPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Instruction**](../Model/Instruction.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billInstructionsGETManyRequestBillIDStagesStageIDInstructionsGet**
> \Jiwa\Model\Instruction[] billInstructionsGETManyRequestBillIDStagesStageIDInstructionsGet($accept, $bill_id, $stage_id, $jiwa_stateful)

Retrieves a list of instructions for a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billInstructionsGETManyRequestBillIDStagesStageIDInstructionsGet($accept, $bill_id, $stage_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billInstructionsGETManyRequestBillIDStagesStageIDInstructionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Instruction[]**](../Model/Instruction.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billNoteDELETERequestBillIDNotesNoteIDDelete**
> \Jiwa\Model\Object billNoteDELETERequestBillIDNotesNoteIDDelete($accept, $bill_id, $note_id, $jiwa_stateful)

Deletes a bill record note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billNoteDELETERequestBillIDNotesNoteIDDelete($accept, $bill_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteDELETERequestBillIDNotesNoteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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

# **billNoteGETRequestBillIDNotesNoteIDGet**
> \Jiwa\Model\Note billNoteGETRequestBillIDNotesNoteIDGet($accept, $bill_id, $note_id, $jiwa_stateful)

Retrieves a bill record note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billNoteGETRequestBillIDNotesNoteIDGet($accept, $bill_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteGETRequestBillIDNotesNoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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

# **billNotePATCHRequestBillIDNotesNoteIDUpdate**
> \Jiwa\Model\Note billNotePATCHRequestBillIDNotesNoteIDUpdate($accept, $bill_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Updates a bill record note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
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
$body = new \Jiwa\Model\BillNotePATCHRequest(); // \Jiwa\Model\BillNotePATCHRequest | 

try {
    $result = $apiInstance->billNotePATCHRequestBillIDNotesNoteIDUpdate($accept, $bill_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNotePATCHRequestBillIDNotesNoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
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
 **body** | [**\Jiwa\Model\BillNotePATCHRequest**](../Model/BillNotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billNotePOSTRequestBillIDNotesPost**
> \Jiwa\Model\Note billNotePOSTRequestBillIDNotesPost($accept, $bill_id, $jiwa_stateful, $note_type, $line_no, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Appends a note to a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$note_type = "note_type_example"; // string | 
$line_no = 56; // int | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$note_text = "note_text_example"; // string | 
$body = new \Jiwa\Model\BillNotePOSTRequest(); // \Jiwa\Model\BillNotePOSTRequest | 

try {
    $result = $apiInstance->billNotePOSTRequestBillIDNotesPost($accept, $bill_id, $jiwa_stateful, $note_type, $line_no, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNotePOSTRequestBillIDNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **note_type** | **string**|  | [optional]
 **line_no** | **int**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **note_text** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillNotePOSTRequest**](../Model/BillNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**
> \Jiwa\Model\Object billNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful)

Deletes a bill note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteTypeDELETERequestNoteTypesNoteTypeIDDelete: ', $e->getMessage(), PHP_EOL;
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

# **billNoteTypeGETRequestNoteTypesNoteTypeIDGet**
> \Jiwa\Model\NoteType billNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful)

Retrieves a bill note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteTypeGETRequestNoteTypesNoteTypeIDGet: ', $e->getMessage(), PHP_EOL;
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

# **billNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**
> \Jiwa\Model\NoteType billNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates a bill note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
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
$body = new \Jiwa\Model\BillNoteTypePATCHRequest(); // \Jiwa\Model\BillNoteTypePATCHRequest | 

try {
    $result = $apiInstance->billNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\BillNoteTypePATCHRequest**](../Model/BillNoteTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billNoteTypePOSTRequestNoteTypesPost**
> \Jiwa\Model\NoteType billNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new bill note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
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
$body = new \Jiwa\Model\BillNoteTypePOSTRequest(); // \Jiwa\Model\BillNoteTypePOSTRequest | 

try {
    $result = $apiInstance->billNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteTypePOSTRequestNoteTypesPost: ', $e->getMessage(), PHP_EOL;
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
 **body** | [**\Jiwa\Model\BillNoteTypePOSTRequest**](../Model/BillNoteTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billNoteTypesGETManyRequestNoteTypesGet**
> \Jiwa\Model\NoteType[] billNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful)

Retrieves a list of bill note types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNoteTypesGETManyRequestNoteTypesGet: ', $e->getMessage(), PHP_EOL;
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

# **billNotesGETManyRequestBillIDNotesGet**
> \Jiwa\Model\Note[] billNotesGETManyRequestBillIDNotesGet($accept, $bill_id, $jiwa_stateful)

Retrieves a list of bill record notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billNotesGETManyRequestBillIDNotesGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billNotesGETManyRequestBillIDNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Note[]**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputCustomFieldGETRequestOutputsCustomFieldsSettingIDGet**
> \Jiwa\Model\CustomField billOutputCustomFieldGETRequestOutputsCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful)

Retrieves a bill output custom field.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputCustomFieldGETRequestOutputsCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputCustomFieldGETRequestOutputsCustomFieldsSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputCustomFieldValueGETRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue billOutputCustomFieldValueGETRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDGet($accept, $bill_id, $output_id, $setting_id, $jiwa_stateful)

Retrieves a bill output custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$output_id = "output_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputCustomFieldValueGETRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDGet($accept, $bill_id, $output_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputCustomFieldValueGETRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **output_id** | **string**|  |
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

# **billOutputCustomFieldValuePATCHRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue billOutputCustomFieldValuePATCHRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $output_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a bill output custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$output_id = "output_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\BillOutputCustomFieldValuePATCHRequest(); // \Jiwa\Model\BillOutputCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->billOutputCustomFieldValuePATCHRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $output_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputCustomFieldValuePATCHRequestBillIDOutputsOutputIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **output_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillOutputCustomFieldValuePATCHRequest**](../Model/BillOutputCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputCustomFieldValuesGETManyRequestBillIDOutputsOutputIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] billOutputCustomFieldValuesGETManyRequestBillIDOutputsOutputIDCustomFieldValuesGet($accept, $bill_id, $output_id, $jiwa_stateful)

Retrieves a list of custom field values for a bill output.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$output_id = "output_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputCustomFieldValuesGETManyRequestBillIDOutputsOutputIDCustomFieldValuesGet($accept, $bill_id, $output_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputCustomFieldValuesGETManyRequestBillIDOutputsOutputIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **output_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputCustomFieldsGETManyRequestOutputsCustomFieldsGet**
> \Jiwa\Model\CustomField[] billOutputCustomFieldsGETManyRequestOutputsCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of bill output custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputCustomFieldsGETManyRequestOutputsCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputCustomFieldsGETManyRequestOutputsCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **billOutputDELETERequestBillIDOutputsOutputIDDelete**
> \Jiwa\Model\Object billOutputDELETERequestBillIDOutputsOutputIDDelete($accept, $bill_id, $output_id, $jiwa_stateful)

Deletes a bill output.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$output_id = "output_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputDELETERequestBillIDOutputsOutputIDDelete($accept, $bill_id, $output_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputDELETERequestBillIDOutputsOutputIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **output_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputGETRequestBillIDOutputsOutputIDGet**
> \Jiwa\Model\Output billOutputGETRequestBillIDOutputsOutputIDGet($accept, $bill_id, $output_id, $jiwa_stateful)

Retrieves a bill output.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$output_id = "output_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputGETRequestBillIDOutputsOutputIDGet($accept, $bill_id, $output_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputGETRequestBillIDOutputsOutputIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **output_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Output**](../Model/Output.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputPATCHRequestBillIDOutputsOutputIDUpdate**
> \Jiwa\Model\Output billOutputPATCHRequestBillIDOutputsOutputIDUpdate($accept, $bill_id, $output_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_primary, $cost_percentage, $cost, $last_cost, $custom_field_values, $body)

Updates a bill output.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$output_id = "output_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$is_ratio = true; // bool | 
$quantity = 1.2; // double | 
$note = "note_example"; // string | 
$is_primary = true; // bool | 
$cost_percentage = 1.2; // double | 
$cost = 1.2; // double | 
$last_cost = 1.2; // double | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\BillOutputPATCHRequest(); // \Jiwa\Model\BillOutputPATCHRequest | 

try {
    $result = $apiInstance->billOutputPATCHRequestBillIDOutputsOutputIDUpdate($accept, $bill_id, $output_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_primary, $cost_percentage, $cost, $last_cost, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputPATCHRequestBillIDOutputsOutputIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **output_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **is_ratio** | **bool**|  | [optional]
 **quantity** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **is_primary** | **bool**|  | [optional]
 **cost_percentage** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **last_cost** | **double**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillOutputPATCHRequest**](../Model/BillOutputPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Output**](../Model/Output.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputPOSTRequestBillIDOutputsPost**
> \Jiwa\Model\Output billOutputPOSTRequestBillIDOutputsPost($accept, $bill_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_primary, $cost_percentage, $cost, $last_cost, $custom_field_values, $body)

Appends a output to a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$inventory_id = "inventory_id_example"; // string | 
$part_no = "part_no_example"; // string | 
$description = "description_example"; // string | 
$is_ratio = true; // bool | 
$quantity = 1.2; // double | 
$note = "note_example"; // string | 
$is_primary = true; // bool | 
$cost_percentage = 1.2; // double | 
$cost = 1.2; // double | 
$last_cost = 1.2; // double | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\BillOutputPOSTRequest(); // \Jiwa\Model\BillOutputPOSTRequest | 

try {
    $result = $apiInstance->billOutputPOSTRequestBillIDOutputsPost($accept, $bill_id, $jiwa_stateful, $item_no, $inventory_id, $part_no, $description, $is_ratio, $quantity, $note, $is_primary, $cost_percentage, $cost, $last_cost, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputPOSTRequestBillIDOutputsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **inventory_id** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **is_ratio** | **bool**|  | [optional]
 **quantity** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **is_primary** | **bool**|  | [optional]
 **cost_percentage** | **double**|  | [optional]
 **cost** | **double**|  | [optional]
 **last_cost** | **double**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillOutputPOSTRequest**](../Model/BillOutputPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Output**](../Model/Output.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billOutputsGETManyRequestBillIDOutputsGet**
> \Jiwa\Model\Output[] billOutputsGETManyRequestBillIDOutputsGet($accept, $bill_id, $jiwa_stateful)

Retrieves a list of bill outputs.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billOutputsGETManyRequestBillIDOutputsGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billOutputsGETManyRequestBillIDOutputsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Output[]**](../Model/Output.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billPATCHRequestBillIDUpdate**
> \Jiwa\Model\Bill billPATCHRequestBillIDUpdate($accept, $bill_id, $jiwa_stateful, $bill_no, $description, $is_enabled, $maximum_production_capability, $last_saved_date_time, $row_hash, $stages, $outputs, $documents, $custom_field_values, $notes, $production_line, $bill_parents, $body)

Updates a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$bill_no = "bill_no_example"; // string | 
$description = "description_example"; // string | 
$is_enabled = true; // bool | 
$maximum_production_capability = 1.2; // double | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$row_hash = "B"; // string | 
$stages = "stages_example"; // string | 
$outputs = "outputs_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$production_line = "production_line_example"; // string | 
$bill_parents = "bill_parents_example"; // string | 
$body = new \Jiwa\Model\BillPATCHRequest(); // \Jiwa\Model\BillPATCHRequest | 

try {
    $result = $apiInstance->billPATCHRequestBillIDUpdate($accept, $bill_id, $jiwa_stateful, $bill_no, $description, $is_enabled, $maximum_production_capability, $last_saved_date_time, $row_hash, $stages, $outputs, $documents, $custom_field_values, $notes, $production_line, $bill_parents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billPATCHRequestBillIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **bill_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **maximum_production_capability** | **double**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **row_hash** | **string**|  | [optional]
 **stages** | **string**|  | [optional]
 **outputs** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **production_line** | **string**|  | [optional]
 **bill_parents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillPATCHRequest**](../Model/BillPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Bill**](../Model/Bill.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billPOSTRequestPost**
> \Jiwa\Model\Bill billPOSTRequestPost($accept, $jiwa_stateful, $bill_no, $description, $is_enabled, $maximum_production_capability, $last_saved_date_time, $row_hash, $stages, $outputs, $documents, $custom_field_values, $notes, $production_line, $bill_parents, $body)

Creates a new bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$bill_no = "bill_no_example"; // string | 
$description = "description_example"; // string | 
$is_enabled = true; // bool | 
$maximum_production_capability = 1.2; // double | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$row_hash = "B"; // string | 
$stages = "stages_example"; // string | 
$outputs = "outputs_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$notes = "notes_example"; // string | 
$production_line = "production_line_example"; // string | 
$bill_parents = "bill_parents_example"; // string | 
$body = new \Jiwa\Model\BillPOSTRequest(); // \Jiwa\Model\BillPOSTRequest | 

try {
    $result = $apiInstance->billPOSTRequestPost($accept, $jiwa_stateful, $bill_no, $description, $is_enabled, $maximum_production_capability, $last_saved_date_time, $row_hash, $stages, $outputs, $documents, $custom_field_values, $notes, $production_line, $bill_parents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **bill_no** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **maximum_production_capability** | **double**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **row_hash** | **string**|  | [optional]
 **stages** | **string**|  | [optional]
 **outputs** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **production_line** | **string**|  | [optional]
 **bill_parents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillPOSTRequest**](../Model/BillPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Bill**](../Model/Bill.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billSAVERequestBillIDSaveGet**
> \Jiwa\Model\Bill billSAVERequestBillIDSaveGet($accept, $bill_id, $jiwa_stateful)

Saves a stateful bill record.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful bill record exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billSAVERequestBillIDSaveGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billSAVERequestBillIDSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Bill**](../Model/Bill.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStageCustomFieldGETRequestStagesCustomFieldsSettingIDGet**
> \Jiwa\Model\CustomField billStageCustomFieldGETRequestStagesCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful)

Retrieves a bill stage custom field.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStageCustomFieldGETRequestStagesCustomFieldsSettingIDGet($accept, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageCustomFieldGETRequestStagesCustomFieldsSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStageCustomFieldValueGETRequestBillIDStagesStageIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue billStageCustomFieldValueGETRequestBillIDStagesStageIDCustomFieldValuesSettingIDGet($accept, $bill_id, $stage_id, $setting_id, $jiwa_stateful)

Retrieves a bill stage custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStageCustomFieldValueGETRequestBillIDStagesStageIDCustomFieldValuesSettingIDGet($accept, $bill_id, $stage_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageCustomFieldValueGETRequestBillIDStagesStageIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
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

# **billStageCustomFieldValuePATCHRequestBillIDStagesStageIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue billStageCustomFieldValuePATCHRequestBillIDStagesStageIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $stage_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates a bill stage custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\BillStageCustomFieldValuePATCHRequest(); // \Jiwa\Model\BillStageCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->billStageCustomFieldValuePATCHRequestBillIDStagesStageIDCustomFieldValuesSettingIDUpdate($accept, $bill_id, $stage_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageCustomFieldValuePATCHRequestBillIDStagesStageIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillStageCustomFieldValuePATCHRequest**](../Model/BillStageCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStageCustomFieldValuesGETManyRequestBillIDStagesStageIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] billStageCustomFieldValuesGETManyRequestBillIDStagesStageIDCustomFieldValuesGet($accept, $bill_id, $stage_id, $jiwa_stateful)

Retrieves a list of custom field values for a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStageCustomFieldValuesGETManyRequestBillIDStagesStageIDCustomFieldValuesGet($accept, $bill_id, $stage_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageCustomFieldValuesGETManyRequestBillIDStagesStageIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStageCustomFieldsGETManyRequestStagesCustomFieldsGet**
> \Jiwa\Model\CustomField[] billStageCustomFieldsGETManyRequestStagesCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of bill stage custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStageCustomFieldsGETManyRequestStagesCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageCustomFieldsGETManyRequestStagesCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
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

# **billStageDELETERequestBillIDStagesStageIDDelete**
> \Jiwa\Model\Object billStageDELETERequestBillIDStagesStageIDDelete($accept, $bill_id, $stage_id, $jiwa_stateful)

Deletes a bill record stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStageDELETERequestBillIDStagesStageIDDelete($accept, $bill_id, $stage_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageDELETERequestBillIDStagesStageIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStageGETRequestBillIDStagesStageIDGet**
> \Jiwa\Model\Stage billStageGETRequestBillIDStagesStageIDGet($accept, $bill_id, $stage_id, $jiwa_stateful)

Retrieves a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStageGETRequestBillIDStagesStageIDGet($accept, $bill_id, $stage_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStageGETRequestBillIDStagesStageIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Stage**](../Model/Stage.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStagePATCHRequestBillIDStagesStageIDUpdate**
> \Jiwa\Model\Stage billStagePATCHRequestBillIDStagesStageIDUpdate($accept, $bill_id, $stage_id, $jiwa_stateful, $item_no, $name, $required_capacity, $production_line_work_centre, $inputs, $instructions, $custom_field_values, $body)

Updates a bill stage.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$stage_id = "stage_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$name = "name_example"; // string | 
$required_capacity = 1.2; // double | 
$production_line_work_centre = "production_line_work_centre_example"; // string | 
$inputs = "inputs_example"; // string | 
$instructions = "instructions_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\BillStagePATCHRequest(); // \Jiwa\Model\BillStagePATCHRequest | 

try {
    $result = $apiInstance->billStagePATCHRequestBillIDStagesStageIDUpdate($accept, $bill_id, $stage_id, $jiwa_stateful, $item_no, $name, $required_capacity, $production_line_work_centre, $inputs, $instructions, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStagePATCHRequestBillIDStagesStageIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **stage_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **required_capacity** | **double**|  | [optional]
 **production_line_work_centre** | **string**|  | [optional]
 **inputs** | **string**|  | [optional]
 **instructions** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillStagePATCHRequest**](../Model/BillStagePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Stage**](../Model/Stage.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStagePOSTRequestBillIDStagesPost**
> \Jiwa\Model\Stage billStagePOSTRequestBillIDStagesPost($accept, $bill_id, $jiwa_stateful, $item_no, $name, $required_capacity, $production_line_work_centre, $inputs, $instructions, $custom_field_values, $body)

Appends a stage to a bill record.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$name = "name_example"; // string | 
$required_capacity = 1.2; // double | 
$production_line_work_centre = "production_line_work_centre_example"; // string | 
$inputs = "inputs_example"; // string | 
$instructions = "instructions_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\BillStagePOSTRequest(); // \Jiwa\Model\BillStagePOSTRequest | 

try {
    $result = $apiInstance->billStagePOSTRequestBillIDStagesPost($accept, $bill_id, $jiwa_stateful, $item_no, $name, $required_capacity, $production_line_work_centre, $inputs, $instructions, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStagePOSTRequestBillIDStagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **required_capacity** | **double**|  | [optional]
 **production_line_work_centre** | **string**|  | [optional]
 **inputs** | **string**|  | [optional]
 **instructions** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\BillStagePOSTRequest**](../Model/BillStagePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Stage**](../Model/Stage.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **billStagesGETManyRequestBillIDStagesGet**
> \Jiwa\Model\Stage[] billStagesGETManyRequestBillIDStagesGet($accept, $bill_id, $jiwa_stateful)

Retrieves a list of bill stages.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$bill_id = "bill_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->billStagesGETManyRequestBillIDStagesGet($accept, $bill_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillsApi->billStagesGETManyRequestBillIDStagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **bill_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Stage[]**](../Model/Stage.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

