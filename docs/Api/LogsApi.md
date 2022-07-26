# Jiwa\LogsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryRequestLogsGETManyRequestDateGet**](LogsApi.md#queryRequestLogsGETManyRequestDateGet) | **GET** /Logs/{Date} | Retrieves a list of log entries for a given date.
[**queryRequestLogsGETManyRequestGet**](LogsApi.md#queryRequestLogsGETManyRequestGet) | **GET** /Logs | Retrieves a list of log entries.
[**todayErrorLogsGETManyRequestTodayErrorsGet**](LogsApi.md#todayErrorLogsGETManyRequestTodayErrorsGet) | **GET** /Logs/Today/Errors | Retrieves a list of error log entries for today.
[**todayLogsGETManyRequestTodayGet**](LogsApi.md#todayLogsGETManyRequestTodayGet) | **GET** /Logs/Today | Retrieves a list of log entries for today.
[**yesterdayErrorLogsGETManyRequestYesterdayErrorsGet**](LogsApi.md#yesterdayErrorLogsGETManyRequestYesterdayErrorsGet) | **GET** /Logs/Yesterday/Errors | Retrieves a list of error log entries for yesterday.
[**yesterdayLogsGETManyRequestYesterdayGet**](LogsApi.md#yesterdayLogsGETManyRequestYesterdayGet) | **GET** /Logs/Yesterday | Retrieves a list of log entries for yesterday.


# **queryRequestLogsGETManyRequestDateGet**
> \Jiwa\JiwaModel\QueryResponseRequestLogEntry_ queryRequestLogsGETManyRequestDateGet($accept, $date, $jiwa_stateful, $view_errors, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of log entries for a given date.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$jiwa_stateful = true; // bool | Stateful indicator
$view_errors = true; // bool | 
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->queryRequestLogsGETManyRequestDateGet($accept, $date, $jiwa_stateful, $view_errors, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->queryRequestLogsGETManyRequestDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **date** | **\DateTime**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **view_errors** | **bool**|  | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseRequestLogEntry_**](../Model/QueryResponseRequestLogEntry_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryRequestLogsGETManyRequestGet**
> \Jiwa\JiwaModel\QueryResponseRequestLogEntry_ queryRequestLogsGETManyRequestGet($accept, $jiwa_stateful, $date, $view_errors, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of log entries.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$view_errors = true; // bool | 
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->queryRequestLogsGETManyRequestGet($accept, $jiwa_stateful, $date, $view_errors, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->queryRequestLogsGETManyRequestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **date** | **\DateTime**|  | [optional]
 **view_errors** | **bool**|  | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseRequestLogEntry_**](../Model/QueryResponseRequestLogEntry_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **todayErrorLogsGETManyRequestTodayErrorsGet**
> \Jiwa\JiwaModel\QueryResponseRequestLogEntry_ todayErrorLogsGETManyRequestTodayErrorsGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of error log entries for today.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->todayErrorLogsGETManyRequestTodayErrorsGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->todayErrorLogsGETManyRequestTodayErrorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseRequestLogEntry_**](../Model/QueryResponseRequestLogEntry_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **todayLogsGETManyRequestTodayGet**
> \Jiwa\JiwaModel\QueryResponseRequestLogEntry_ todayLogsGETManyRequestTodayGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of log entries for today.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->todayLogsGETManyRequestTodayGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->todayLogsGETManyRequestTodayGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseRequestLogEntry_**](../Model/QueryResponseRequestLogEntry_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **yesterdayErrorLogsGETManyRequestYesterdayErrorsGet**
> \Jiwa\JiwaModel\QueryResponseRequestLogEntry_ yesterdayErrorLogsGETManyRequestYesterdayErrorsGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of error log entries for yesterday.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->yesterdayErrorLogsGETManyRequestYesterdayErrorsGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->yesterdayErrorLogsGETManyRequestYesterdayErrorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseRequestLogEntry_**](../Model/QueryResponseRequestLogEntry_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **yesterdayLogsGETManyRequestYesterdayGet**
> \Jiwa\JiwaModel\QueryResponseRequestLogEntry_ yesterdayLogsGETManyRequestYesterdayGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of log entries for yesterday.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->yesterdayLogsGETManyRequestYesterdayGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->yesterdayLogsGETManyRequestYesterdayGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\QueryResponseRequestLogEntry_**](../Model/QueryResponseRequestLogEntry_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

