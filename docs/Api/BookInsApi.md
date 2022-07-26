# Jiwa\BookInsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**landedCostBookInABANDONRequestAbandonDelete**](BookInsApi.md#landedCostBookInABANDONRequestAbandonDelete) | **DELETE** /BookIns/Abandon | Abandons a stateful book in.
[**landedCostBookInACTIVATERequestActivateBookInIDPost**](BookInsApi.md#landedCostBookInACTIVATERequestActivateBookInIDPost) | **POST** /BookIns/Activate/{BookInID} | Activates a book in.
[**landedCostBookInCREATEFromShipmentIDRequestFromShipmentIDShipmentIDPost**](BookInsApi.md#landedCostBookInCREATEFromShipmentIDRequestFromShipmentIDShipmentIDPost) | **POST** /BookIns/FromShipmentID/{ShipmentID} | Creates a book in from the supplied shipment id.
[**landedCostBookInCREATEFromShipmentNoRequestFromShipmentNoShipmentNoPost**](BookInsApi.md#landedCostBookInCREATEFromShipmentNoRequestFromShipmentNoShipmentNoPost) | **POST** /BookIns/FromShipmentNo/{ShipmentNo} | Creates a book in from the supplied shipment no.
[**landedCostBookInGETRequestBookInIDGet**](BookInsApi.md#landedCostBookInGETRequestBookInIDGet) | **GET** /BookIns/{BookInID} | Retrieves a book in.
[**landedCostBookInLineDELETERequestBookInIDLinesLineIDDelete**](BookInsApi.md#landedCostBookInLineDELETERequestBookInIDLinesLineIDDelete) | **DELETE** /BookIns/{BookInID}/Lines/{LineID} | Deletes a line from a book in.
[**landedCostBookInLineGETRequestBookInIDLinesLineIDGet**](BookInsApi.md#landedCostBookInLineGETRequestBookInIDLinesLineIDGet) | **GET** /BookIns/{BookInID}/Lines/{LineID} | Retrieves a book in line.
[**landedCostBookInLinePATCHRequestBookInIDLinesLineIDUpdate**](BookInsApi.md#landedCostBookInLinePATCHRequestBookInIDLinesLineIDUpdate) | **PATCH** /BookIns/{BookInID}/Lines/{LineID} | Updates a line for a book in.
[**landedCostBookInLinesGETManyRequestBookInIDLinesGet**](BookInsApi.md#landedCostBookInLinesGETManyRequestBookInIDLinesGet) | **GET** /BookIns/{BookInID}/Lines | Retrieves a list of book in lines.
[**landedCostBookInPATCHRequestBookInIDUpdate**](BookInsApi.md#landedCostBookInPATCHRequestBookInIDUpdate) | **PATCH** /BookIns/{BookInID} | Updates a book in.
[**landedCostBookInSAVERequestSaveGet**](BookInsApi.md#landedCostBookInSAVERequestSaveGet) | **GET** /BookIns/Save | Saves a stateful book in.


# **landedCostBookInABANDONRequestAbandonDelete**
> \Jiwa\JiwaModel\Object landedCostBookInABANDONRequestAbandonDelete($accept, $jiwa_stateful, $book_in_id)

Abandons a stateful book in.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful book in item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$book_in_id = "book_in_id_example"; // string | 

try {
    $result = $apiInstance->landedCostBookInABANDONRequestAbandonDelete($accept, $jiwa_stateful, $book_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **book_in_id** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInACTIVATERequestActivateBookInIDPost**
> \Jiwa\JiwaModel\BookIn landedCostBookInACTIVATERequestActivateBookInIDPost($accept, $book_in_id, $jiwa_stateful, $body)

Activates a book in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\LandedCostBookInACTIVATERequest(); // \Jiwa\JiwaModel\LandedCostBookInACTIVATERequest | 

try {
    $result = $apiInstance->landedCostBookInACTIVATERequestActivateBookInIDPost($accept, $book_in_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInACTIVATERequestActivateBookInIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\LandedCostBookInACTIVATERequest**](../Model/LandedCostBookInACTIVATERequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\BookIn**](../Model/BookIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInCREATEFromShipmentIDRequestFromShipmentIDShipmentIDPost**
> \Jiwa\JiwaModel\BookIn landedCostBookInCREATEFromShipmentIDRequestFromShipmentIDShipmentIDPost($accept, $shipment_id, $jiwa_stateful, $body)

Creates a book in from the supplied shipment id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_id = "shipment_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\LandedCostBookInCREATEFromShipmentIDRequest(); // \Jiwa\JiwaModel\LandedCostBookInCREATEFromShipmentIDRequest | 

try {
    $result = $apiInstance->landedCostBookInCREATEFromShipmentIDRequestFromShipmentIDShipmentIDPost($accept, $shipment_id, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInCREATEFromShipmentIDRequestFromShipmentIDShipmentIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\LandedCostBookInCREATEFromShipmentIDRequest**](../Model/LandedCostBookInCREATEFromShipmentIDRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\BookIn**](../Model/BookIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInCREATEFromShipmentNoRequestFromShipmentNoShipmentNoPost**
> \Jiwa\JiwaModel\BookIn landedCostBookInCREATEFromShipmentNoRequestFromShipmentNoShipmentNoPost($accept, $shipment_no, $jiwa_stateful, $body)

Creates a book in from the supplied shipment no.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$shipment_no = "shipment_no_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$body = new \Jiwa\JiwaModel\LandedCostBookInCREATEFromShipmentNoRequest(); // \Jiwa\JiwaModel\LandedCostBookInCREATEFromShipmentNoRequest | 

try {
    $result = $apiInstance->landedCostBookInCREATEFromShipmentNoRequestFromShipmentNoShipmentNoPost($accept, $shipment_no, $jiwa_stateful, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInCREATEFromShipmentNoRequestFromShipmentNoShipmentNoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **shipment_no** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | [**\Jiwa\JiwaModel\LandedCostBookInCREATEFromShipmentNoRequest**](../Model/LandedCostBookInCREATEFromShipmentNoRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\BookIn**](../Model/BookIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInGETRequestBookInIDGet**
> \Jiwa\JiwaModel\BookIn landedCostBookInGETRequestBookInIDGet($accept, $book_in_id, $jiwa_stateful)

Retrieves a book in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostBookInGETRequestBookInIDGet($accept, $book_in_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInGETRequestBookInIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\BookIn**](../Model/BookIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInLineDELETERequestBookInIDLinesLineIDDelete**
> \Jiwa\JiwaModel\Object landedCostBookInLineDELETERequestBookInIDLinesLineIDDelete($accept, $book_in_id, $line_id, $jiwa_stateful, $item_no, $quantity, $quantity_previously_booked_in, $quantity_outstanding, $shipment_line, $line_details, $custom_field_values)

Deletes a line from a book in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$quantity = 1.2; // double | 
$quantity_previously_booked_in = 1.2; // double | 
$quantity_outstanding = 1.2; // double | 
$shipment_line = "shipment_line_example"; // string | 
$line_details = "line_details_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 

try {
    $result = $apiInstance->landedCostBookInLineDELETERequestBookInIDLinesLineIDDelete($accept, $book_in_id, $line_id, $jiwa_stateful, $item_no, $quantity, $quantity_previously_booked_in, $quantity_outstanding, $shipment_line, $line_details, $custom_field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInLineDELETERequestBookInIDLinesLineIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **quantity** | **double**|  | [optional]
 **quantity_previously_booked_in** | **double**|  | [optional]
 **quantity_outstanding** | **double**|  | [optional]
 **shipment_line** | **string**|  | [optional]
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

# **landedCostBookInLineGETRequestBookInIDLinesLineIDGet**
> \Jiwa\JiwaModel\BookInLine landedCostBookInLineGETRequestBookInIDLinesLineIDGet($accept, $book_in_id, $line_id, $jiwa_stateful)

Retrieves a book in line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostBookInLineGETRequestBookInIDLinesLineIDGet($accept, $book_in_id, $line_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInLineGETRequestBookInIDLinesLineIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\BookInLine**](../Model/BookInLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInLinePATCHRequestBookInIDLinesLineIDUpdate**
> \Jiwa\JiwaModel\BookInLine landedCostBookInLinePATCHRequestBookInIDLinesLineIDUpdate($accept, $book_in_id, $line_id, $jiwa_stateful, $item_no, $quantity, $quantity_previously_booked_in, $quantity_outstanding, $shipment_line, $line_details, $custom_field_values, $body)

Updates a line for a book in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$line_id = "line_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$item_no = 56; // int | 
$quantity = 1.2; // double | 
$quantity_previously_booked_in = 1.2; // double | 
$quantity_outstanding = 1.2; // double | 
$shipment_line = "shipment_line_example"; // string | 
$line_details = "line_details_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\JiwaModel\LandedCostBookInLinePATCHRequest(); // \Jiwa\JiwaModel\LandedCostBookInLinePATCHRequest | 

try {
    $result = $apiInstance->landedCostBookInLinePATCHRequestBookInIDLinesLineIDUpdate($accept, $book_in_id, $line_id, $jiwa_stateful, $item_no, $quantity, $quantity_previously_booked_in, $quantity_outstanding, $shipment_line, $line_details, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInLinePATCHRequestBookInIDLinesLineIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **line_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **item_no** | **int**|  | [optional]
 **quantity** | **double**|  | [optional]
 **quantity_previously_booked_in** | **double**|  | [optional]
 **quantity_outstanding** | **double**|  | [optional]
 **shipment_line** | **string**|  | [optional]
 **line_details** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\LandedCostBookInLinePATCHRequest**](../Model/LandedCostBookInLinePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\BookInLine**](../Model/BookInLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInLinesGETManyRequestBookInIDLinesGet**
> \Jiwa\JiwaModel\BookInLine[] landedCostBookInLinesGETManyRequestBookInIDLinesGet($accept, $book_in_id, $jiwa_stateful)

Retrieves a list of book in lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->landedCostBookInLinesGETManyRequestBookInIDLinesGet($accept, $book_in_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInLinesGETManyRequestBookInIDLinesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\JiwaModel\BookInLine[]**](../Model/BookInLine.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInPATCHRequestBookInIDUpdate**
> \Jiwa\JiwaModel\BookIn landedCostBookInPATCHRequestBookInIDUpdate($accept, $book_in_id, $jiwa_stateful, $book_in_no, $shipment, $book_in_date, $activated, $gl_sets_rec_id, $last_saved_date_time, $lines, $other_book_ins_for_this_shipment, $body)

Updates a book in.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$book_in_id = "book_in_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$book_in_no = "book_in_no_example"; // string | 
$shipment = "shipment_example"; // string | 
$book_in_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$activated = true; // bool | 
$gl_sets_rec_id = "gl_sets_rec_id_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$lines = "lines_example"; // string | 
$other_book_ins_for_this_shipment = "other_book_ins_for_this_shipment_example"; // string | 
$body = new \Jiwa\JiwaModel\LandedCostBookInPATCHRequest(); // \Jiwa\JiwaModel\LandedCostBookInPATCHRequest | 

try {
    $result = $apiInstance->landedCostBookInPATCHRequestBookInIDUpdate($accept, $book_in_id, $jiwa_stateful, $book_in_no, $shipment, $book_in_date, $activated, $gl_sets_rec_id, $last_saved_date_time, $lines, $other_book_ins_for_this_shipment, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInPATCHRequestBookInIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **book_in_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **book_in_no** | **string**|  | [optional]
 **shipment** | **string**|  | [optional]
 **book_in_date** | **\DateTime**|  | [optional]
 **activated** | **bool**|  | [optional]
 **gl_sets_rec_id** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **lines** | **string**|  | [optional]
 **other_book_ins_for_this_shipment** | **string**|  | [optional]
 **body** | [**\Jiwa\JiwaModel\LandedCostBookInPATCHRequest**](../Model/LandedCostBookInPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\JiwaModel\BookIn**](../Model/BookIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **landedCostBookInSAVERequestSaveGet**
> \Jiwa\JiwaModel\BookIn landedCostBookInSAVERequestSaveGet($accept, $jiwa_stateful, $book_in_id)

Saves a stateful book in.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful book in item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\BookInsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$book_in_id = "book_in_id_example"; // string | 

try {
    $result = $apiInstance->landedCostBookInSAVERequestSaveGet($accept, $jiwa_stateful, $book_in_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookInsApi->landedCostBookInSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **book_in_id** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\BookIn**](../Model/BookIn.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

