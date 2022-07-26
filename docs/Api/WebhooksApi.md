# Jiwa\WebhooksApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksEventsGETRequestEventsGet**](WebhooksApi.md#webhooksEventsGETRequestEventsGet) | **GET** /Webhooks/Events/ | Lists available events
[**webhooksEventsPOSTRequestEvents2Post**](WebhooksApi.md#webhooksEventsPOSTRequestEvents2Post) | **POST** /Webhooks/Events/ | Adds an event occurance.  Used by Jiwa clients to cause webhooks to be sent to subscribers. Not intended to be invoked externally
[**webhooksMessageResponsesGETRequestSubscribersSubscriberIDMessagesResponsesGet**](WebhooksApi.md#webhooksMessageResponsesGETRequestSubscribersSubscriberIDMessagesResponsesGet) | **GET** /Webhooks/Subscribers/{SubscriberID}/Messages/Responses | Retrieves a list of all Webhook messages responses for a subscriber.
[**webhooksMessagesDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDMessagesMessageIDDelete**](WebhooksApi.md#webhooksMessagesDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDMessagesMessageIDDelete) | **DELETE** /Webhooks/Subscribers/{SubscriberID}/Subscriptions/{SubscriptionID}/Messages/{MessageID} | Removes a Webhook message for a subscription.
[**webhooksMessagesGETRequestSubscribersSubscriberIDMessagesGet**](WebhooksApi.md#webhooksMessagesGETRequestSubscribersSubscriberIDMessagesGet) | **GET** /Webhooks/Subscribers/{SubscriberID}/Messages | Retrieves a list of all Webhook messages for a subscriber.
[**webhooksSubscribersDELETERequestSubscribersSubscriberIDDelete**](WebhooksApi.md#webhooksSubscribersDELETERequestSubscribersSubscriberIDDelete) | **DELETE** /Webhooks/Subscribers/{SubscriberID}/ | Removes a Webhook subscriber.
[**webhooksSubscribersGETManyRequestSubscribersGet**](WebhooksApi.md#webhooksSubscribersGETManyRequestSubscribersGet) | **GET** /Webhooks/Subscribers/ | Retrieves a list of Webhook subscribers.
[**webhooksSubscribersGETRequestSubscribersSubscriberIDGet**](WebhooksApi.md#webhooksSubscribersGETRequestSubscribersSubscriberIDGet) | **GET** /Webhooks/Subscribers/{SubscriberID} | Retrieves a Webhook subscriber.
[**webhooksSubscribersPATCHRequestSubscribersSubscriberIDUpdate**](WebhooksApi.md#webhooksSubscribersPATCHRequestSubscribersSubscriberIDUpdate) | **PATCH** /Webhooks/Subscribers/{SubscriberID}/ | Updates a Webhook subscriber.
[**webhooksSubscribersPOSTRequestSubscribersPost**](WebhooksApi.md#webhooksSubscribersPOSTRequestSubscribersPost) | **POST** /Webhooks/Subscribers/ | Adds a Webhook subscriber.
[**webhooksSubscriptionsDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDDelete**](WebhooksApi.md#webhooksSubscriptionsDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDDelete) | **DELETE** /Webhooks/Subscribers/{SubscriberID}/Subscriptions/{SubscriptionID}/ | Removes a Webhook subscription for a subscriber.
[**webhooksSubscriptionsGETRequestSubscribersSubscriberIDSubscriptionsGet**](WebhooksApi.md#webhooksSubscriptionsGETRequestSubscribersSubscriberIDSubscriptionsGet) | **GET** /Webhooks/Subscribers/{SubscriberID}/Subscriptions/ | Retrieves a list of all Webhook subscriptions for a subscriber.
[**webhooksSubscriptionsPATCHRequestSubscribersSubscriberIDSubscriptionsUpdate**](WebhooksApi.md#webhooksSubscriptionsPATCHRequestSubscribersSubscriberIDSubscriptionsUpdate) | **PATCH** /Webhooks/Subscribers/{SubscriberID}/Subscriptions/ | Updates a Webhook subscription for a subscriber.
[**webhooksSubscriptionsPOSTRequestSubscribersSubscriberIDSubscriptionsPost**](WebhooksApi.md#webhooksSubscriptionsPOSTRequestSubscribersSubscriberIDSubscriptionsPost) | **POST** /Webhooks/Subscribers/{SubscriberID}/Subscriptions/ | Adds a Webhook subscription for a subscriber.
[**webhooksTestPOSTRequestTest2Post**](WebhooksApi.md#webhooksTestPOSTRequestTest2Post) | **POST** /Webhooks/Test/ | Test route for sending webhooks to. Use this as the URL to direct a webhook subscription to.


# **webhooksEventsGETRequestEventsGet**
> \Jiwa\Model\WebHookEvent[] webhooksEventsGETRequestEventsGet($accept, $jiwa_stateful)

Lists available events



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->webhooksEventsGETRequestEventsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksEventsGETRequestEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\WebHookEvent[]**](../Model/WebHookEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksEventsPOSTRequestEvents2Post**
> \Jiwa\Model\Object webhooksEventsPOSTRequestEvents2Post($accept, $jiwa_stateful, $event_name, $body, $body2)

Adds an event occurance.  Used by Jiwa clients to cause webhooks to be sent to subscribers. Not intended to be invoked externally



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$event_name = "event_name_example"; // string | 
$body = "body_example"; // string | 
$body2 = new \Jiwa\Model\WebhooksEventsPOSTRequest(); // \Jiwa\Model\WebhooksEventsPOSTRequest | 

try {
    $result = $apiInstance->webhooksEventsPOSTRequestEvents2Post($accept, $jiwa_stateful, $event_name, $body, $body2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksEventsPOSTRequestEvents2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **event_name** | **string**|  | [optional]
 **body** | **string**|  | [optional]
 **body2** | [**\Jiwa\Model\WebhooksEventsPOSTRequest**](../Model/WebhooksEventsPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksMessageResponsesGETRequestSubscribersSubscriberIDMessagesResponsesGet**
> \Jiwa\Model\QueryResponseVSYWebhookSubscriberMessageResponses_ webhooksMessageResponsesGETRequestSubscribersSubscriberIDMessagesResponsesGet($accept, $subscriber_id, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of all Webhook messages responses for a subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->webhooksMessageResponsesGETRequestSubscribersSubscriberIDMessagesResponsesGet($accept, $subscriber_id, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksMessageResponsesGETRequestSubscribersSubscriberIDMessagesResponsesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\QueryResponseVSYWebhookSubscriberMessageResponses_**](../Model/QueryResponseVSYWebhookSubscriberMessageResponses_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksMessagesDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDMessagesMessageIDDelete**
> \Jiwa\Model\Object webhooksMessagesDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDMessagesMessageIDDelete($accept, $subscriber_id, $subscription_id, $message_id, $jiwa_stateful)

Removes a Webhook message for a subscription.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$message_id = "message_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->webhooksMessagesDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDMessagesMessageIDDelete($accept, $subscriber_id, $subscription_id, $message_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksMessagesDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDMessagesMessageIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **subscription_id** | **string**|  |
 **message_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksMessagesGETRequestSubscribersSubscriberIDMessagesGet**
> \Jiwa\Model\QueryResponseVSYWebhookSubscriberMessages_ webhooksMessagesGETRequestSubscribersSubscriberIDMessagesGet($accept, $subscriber_id, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of all Webhook messages for a subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$skip = 56; // int | 
$take = 56; // int | 
$order_by = "order_by_example"; // string | 
$order_by_desc = "order_by_desc_example"; // string | 
$include = "include_example"; // string | 
$fields = "fields_example"; // string | 
$meta = "meta_example"; // string | 

try {
    $result = $apiInstance->webhooksMessagesGETRequestSubscribersSubscriberIDMessagesGet($accept, $subscriber_id, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksMessagesGETRequestSubscribersSubscriberIDMessagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **skip** | **int**|  | [optional]
 **take** | **int**|  | [optional]
 **order_by** | **string**|  | [optional]
 **order_by_desc** | **string**|  | [optional]
 **include** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **meta** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\QueryResponseVSYWebhookSubscriberMessages_**](../Model/QueryResponseVSYWebhookSubscriberMessages_.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscribersDELETERequestSubscribersSubscriberIDDelete**
> \Jiwa\Model\Object webhooksSubscribersDELETERequestSubscribersSubscriberIDDelete($accept, $subscriber_id, $jiwa_stateful)

Removes a Webhook subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->webhooksSubscribersDELETERequestSubscribersSubscriberIDDelete($accept, $subscriber_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscribersDELETERequestSubscribersSubscriberIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscribersGETManyRequestSubscribersGet**
> \Jiwa\Model\QueryResponseSYWebhookSubscriber_ webhooksSubscribersGETManyRequestSubscribersGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta)

Retrieves a list of Webhook subscribers.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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
    $result = $apiInstance->webhooksSubscribersGETManyRequestSubscribersGet($accept, $jiwa_stateful, $skip, $take, $order_by, $order_by_desc, $include, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscribersGETManyRequestSubscribersGet: ', $e->getMessage(), PHP_EOL;
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

[**\Jiwa\Model\QueryResponseSYWebhookSubscriber_**](../Model/QueryResponseSYWebhookSubscriber_.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscribersGETRequestSubscribersSubscriberIDGet**
> \Jiwa\Model\WebhookSubscriber webhooksSubscribersGETRequestSubscribersSubscriberIDGet($accept, $subscriber_id, $jiwa_stateful)

Retrieves a Webhook subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->webhooksSubscribersGETRequestSubscribersSubscriberIDGet($accept, $subscriber_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscribersGETRequestSubscribersSubscriberIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\WebhookSubscriber**](../Model/WebhookSubscriber.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscribersPATCHRequestSubscribersSubscriberIDUpdate**
> \Jiwa\Model\SYWebhookSubscriber webhooksSubscribersPATCHRequestSubscribersSubscriberIDUpdate($accept, $subscriber_id, $jiwa_stateful, $name, $is_enabled, $item_no, $body)

Updates a Webhook subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$is_enabled = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\WebhooksSubscribersPATCHRequest(); // \Jiwa\Model\WebhooksSubscribersPATCHRequest | 

try {
    $result = $apiInstance->webhooksSubscribersPATCHRequestSubscribersSubscriberIDUpdate($accept, $subscriber_id, $jiwa_stateful, $name, $is_enabled, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscribersPATCHRequestSubscribersSubscriberIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\WebhooksSubscribersPATCHRequest**](../Model/WebhooksSubscribersPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SYWebhookSubscriber**](../Model/SYWebhookSubscriber.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscribersPOSTRequestSubscribersPost**
> \Jiwa\Model\SYWebhookSubscriber webhooksSubscribersPOSTRequestSubscribersPost($accept, $jiwa_stateful, $name, $is_enabled, $body)

Adds a Webhook subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$is_enabled = true; // bool | 
$body = new \Jiwa\Model\WebhooksSubscribersPOSTRequest(); // \Jiwa\Model\WebhooksSubscribersPOSTRequest | 

try {
    $result = $apiInstance->webhooksSubscribersPOSTRequestSubscribersPost($accept, $jiwa_stateful, $name, $is_enabled, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscribersPOSTRequestSubscribersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\WebhooksSubscribersPOSTRequest**](../Model/WebhooksSubscribersPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SYWebhookSubscriber**](../Model/SYWebhookSubscriber.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscriptionsDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDDelete**
> \Jiwa\Model\Object webhooksSubscriptionsDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDDelete($accept, $subscriber_id, $subscription_id, $jiwa_stateful)

Removes a Webhook subscription for a subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$subscription_id = "subscription_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->webhooksSubscriptionsDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDDelete($accept, $subscriber_id, $subscription_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscriptionsDELETERequestSubscribersSubscriberIDSubscriptionsSubscriptionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **subscription_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscriptionsGETRequestSubscribersSubscriberIDSubscriptionsGet**
> \Jiwa\Model\SYWebhookSubscription[] webhooksSubscriptionsGETRequestSubscribersSubscriberIDSubscriptionsGet($accept, $subscriber_id, $jiwa_stateful)

Retrieves a list of all Webhook subscriptions for a subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->webhooksSubscriptionsGETRequestSubscribersSubscriberIDSubscriptionsGet($accept, $subscriber_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscriptionsGETRequestSubscribersSubscriberIDSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\SYWebhookSubscription[]**](../Model/SYWebhookSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscriptionsPATCHRequestSubscribersSubscriberIDSubscriptionsUpdate**
> \Jiwa\Model\SYWebhookSubscription webhooksSubscriptionsPATCHRequestSubscribersSubscriberIDSubscriptionsUpdate($accept, $subscriber_id, $jiwa_stateful, $subscription_id, $url, $event_name, $headers, $body)

Updates a Webhook subscription for a subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$subscription_id = "subscription_id_example"; // string | 
$url = "url_example"; // string | 
$event_name = "event_name_example"; // string | 
$headers = "headers_example"; // string | 
$body = new \Jiwa\Model\WebhooksSubscriptionsPATCHRequest(); // \Jiwa\Model\WebhooksSubscriptionsPATCHRequest | 

try {
    $result = $apiInstance->webhooksSubscriptionsPATCHRequestSubscribersSubscriberIDSubscriptionsUpdate($accept, $subscriber_id, $jiwa_stateful, $subscription_id, $url, $event_name, $headers, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscriptionsPATCHRequestSubscribersSubscriberIDSubscriptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **subscription_id** | **string**|  | [optional]
 **url** | **string**|  | [optional]
 **event_name** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\WebhooksSubscriptionsPATCHRequest**](../Model/WebhooksSubscriptionsPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SYWebhookSubscription**](../Model/SYWebhookSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksSubscriptionsPOSTRequestSubscribersSubscriberIDSubscriptionsPost**
> \Jiwa\Model\SYWebhookSubscription webhooksSubscriptionsPOSTRequestSubscribersSubscriberIDSubscriptionsPost($accept, $subscriber_id, $jiwa_stateful, $url, $event_name, $headers, $body)

Adds a Webhook subscription for a subscriber.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$subscriber_id = "subscriber_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$url = "url_example"; // string | 
$event_name = "event_name_example"; // string | 
$headers = "headers_example"; // string | 
$body = new \Jiwa\Model\WebhooksSubscriptionsPOSTRequest(); // \Jiwa\Model\WebhooksSubscriptionsPOSTRequest | 

try {
    $result = $apiInstance->webhooksSubscriptionsPOSTRequestSubscribersSubscriberIDSubscriptionsPost($accept, $subscriber_id, $jiwa_stateful, $url, $event_name, $headers, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksSubscriptionsPOSTRequestSubscribersSubscriberIDSubscriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **subscriber_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **url** | **string**|  | [optional]
 **event_name** | **string**|  | [optional]
 **headers** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\WebhooksSubscriptionsPOSTRequest**](../Model/WebhooksSubscriptionsPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\SYWebhookSubscription**](../Model/SYWebhookSubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksTestPOSTRequestTest2Post**
> \Jiwa\Model\Object webhooksTestPOSTRequestTest2Post($accept, $jiwa_stateful, $body, $body2)

Test route for sending webhooks to. Use this as the URL to direct a webhook subscription to.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Jiwa\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$body = "body_example"; // string | 
$body2 = new \Jiwa\Model\WebhooksTestPOSTRequest(); // \Jiwa\Model\WebhooksTestPOSTRequest | 

try {
    $result = $apiInstance->webhooksTestPOSTRequestTest2Post($accept, $jiwa_stateful, $body, $body2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksTestPOSTRequestTest2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **body** | **string**|  | [optional]
 **body2** | [**\Jiwa\Model\WebhooksTestPOSTRequest**](../Model/WebhooksTestPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

