# Jiwa\ReportsApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsPDFGETRequestReportIDPDFDownloadGet**](ReportsApi.md#reportsPDFGETRequestReportIDPDFDownloadGet) | **GET** /Reports/{ReportID}/PDF/Download | Retrieves PDF of the selected report.


# **reportsPDFGETRequestReportIDPDFDownloadGet**
> \Jiwa\JiwaModel\IHttpResult reportsPDFGETRequestReportIDPDFDownloadGet($accept, $report_id, $jiwa_stateful, $report_parameters, $as_attachment)

Retrieves PDF of the selected report.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$report_id = "report_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$report_parameters = "report_parameters_example"; // string | 
$as_attachment = true; // bool | 

try {
    $result = $apiInstance->reportsPDFGETRequestReportIDPDFDownloadGet($accept, $report_id, $jiwa_stateful, $report_parameters, $as_attachment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsPDFGETRequestReportIDPDFDownloadGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **report_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **report_parameters** | **string**|  | [optional]
 **as_attachment** | **bool**|  | [optional]

### Return type

[**\Jiwa\JiwaModel\IHttpResult**](../Model/IHttpResult.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

