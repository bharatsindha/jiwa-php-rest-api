# Jiwa\RegionsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**regionABANDONRequestAbandonDelete**](RegionsApi.md#regionABANDONRequestAbandonDelete) | **DELETE** /Regions/Abandon | Abandons a stateful region.
[**regionDELETERequestRegionIDDelete**](RegionsApi.md#regionDELETERequestRegionIDDelete) | **DELETE** /Regions/{RegionID} | Deletes a region.
[**regionGETRequestRegionIDGet**](RegionsApi.md#regionGETRequestRegionIDGet) | **GET** /Regions/{RegionID} | Retrieves a region.
[**regionPATCHRequestRegionIDUpdate**](RegionsApi.md#regionPATCHRequestRegionIDUpdate) | **PATCH** /Regions/{RegionID} | Updates a region.
[**regionPOSTRequestPost**](RegionsApi.md#regionPOSTRequestPost) | **POST** /Regions | Creates a region.
[**regionSAVERequestSaveGet**](RegionsApi.md#regionSAVERequestSaveGet) | **GET** /Regions/Save | Saves a stateful region.


# **regionABANDONRequestAbandonDelete**
> \Jiwa\Model\Object regionABANDONRequestAbandonDelete($accept, $jiwa_stateful, $region_id)

Abandons a stateful region.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful region exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$region_id = "region_id_example"; // string | 

try {
    $result = $apiInstance->regionABANDONRequestAbandonDelete($accept, $jiwa_stateful, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->regionABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **region_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionDELETERequestRegionIDDelete**
> \Jiwa\Model\Object regionDELETERequestRegionIDDelete($accept, $region_id, $jiwa_stateful)

Deletes a region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$region_id = "region_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->regionDELETERequestRegionIDDelete($accept, $region_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->regionDELETERequestRegionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **region_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionGETRequestRegionIDGet**
> \Jiwa\Model\Region regionGETRequestRegionIDGet($accept, $region_id, $jiwa_stateful)

Retrieves a region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$region_id = "region_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->regionGETRequestRegionIDGet($accept, $region_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->regionGETRequestRegionIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **region_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Region**](../Model/Region.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionPATCHRequestRegionIDUpdate**
> \Jiwa\Model\Region regionPATCHRequestRegionIDUpdate($accept, $region_id, $jiwa_stateful, $name, $is_default, $description, $created_date_time, $last_saved_date_time, $created_by_staff, $last_saved_by_staff, $body)

Updates a region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$region_id = "region_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$is_default = true; // bool | 
$description = "description_example"; // string | 
$created_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_by_staff = "created_by_staff_example"; // string | 
$last_saved_by_staff = "last_saved_by_staff_example"; // string | 
$body = new \Jiwa\Model\RegionPATCHRequest(); // \Jiwa\Model\RegionPATCHRequest | 

try {
    $result = $apiInstance->regionPATCHRequestRegionIDUpdate($accept, $region_id, $jiwa_stateful, $name, $is_default, $description, $created_date_time, $last_saved_date_time, $created_by_staff, $last_saved_by_staff, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->regionPATCHRequestRegionIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **region_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **description** | **string**|  | [optional]
 **created_date_time** | **\DateTime**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **created_by_staff** | **string**|  | [optional]
 **last_saved_by_staff** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\RegionPATCHRequest**](../Model/RegionPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Region**](../Model/Region.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionPOSTRequestPost**
> \Jiwa\Model\Region regionPOSTRequestPost($accept, $jiwa_stateful, $name, $is_default, $description, $created_date_time, $created_by_staff, $last_saved_by_staff, $body)

Creates a region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$is_default = true; // bool | 
$description = "description_example"; // string | 
$created_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$created_by_staff = "created_by_staff_example"; // string | 
$last_saved_by_staff = "last_saved_by_staff_example"; // string | 
$body = new \Jiwa\Model\RegionPOSTRequest(); // \Jiwa\Model\RegionPOSTRequest | 

try {
    $result = $apiInstance->regionPOSTRequestPost($accept, $jiwa_stateful, $name, $is_default, $description, $created_date_time, $created_by_staff, $last_saved_by_staff, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->regionPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **description** | **string**|  | [optional]
 **created_date_time** | **\DateTime**|  | [optional]
 **created_by_staff** | **string**|  | [optional]
 **last_saved_by_staff** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\RegionPOSTRequest**](../Model/RegionPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Region**](../Model/Region.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionSAVERequestSaveGet**
> \Jiwa\Model\Region regionSAVERequestSaveGet($accept, $jiwa_stateful, $region_id)

Saves a stateful region.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful region exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$region_id = "region_id_example"; // string | 

try {
    $result = $apiInstance->regionSAVERequestSaveGet($accept, $jiwa_stateful, $region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->regionSAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **region_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Region**](../Model/Region.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

