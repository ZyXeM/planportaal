# OpenAPI\Client\ShippingOptionsApi

All URIs are relative to *https://api-acc.paazl.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPickupLocationsUsingPOST**](ShippingOptionsApi.md#getPickupLocationsUsingPOST) | **POST** /v1/pickuplocations | Gets the shipping options to a set of pickup locations for a specific checkout session.
[**shippingOptionsUsingPOST**](ShippingOptionsApi.md#shippingOptionsUsingPOST) | **POST** /v1/shippingoptions | Gets the shipping options for home delivery for a specific checkout session.


# **getPickupLocationsUsingPOST**
> \OpenAPI\Client\Model\PickupLocationResponse getPickupLocationsUsingPOST($pickup_location_request)

Gets the shipping options to a set of pickup locations for a specific checkout session.

Contains pickup locations for your checkout page, including their distance from your customer's home address, geographical coordinates, opening times and associated shipping options.  The information you request will be returned in JSON (default) or XML format.  The pickup locations returned are sorted by distance (price) in ascending order. The shipping options to a particular pickup location are sorted by price in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ShippingOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pickup_location_request = new \OpenAPI\Client\Model\PickupLocationRequest(); // \OpenAPI\Client\Model\PickupLocationRequest | 

try {
    $result = $apiInstance->getPickupLocationsUsingPOST($pickup_location_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingOptionsApi->getPickupLocationsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pickup_location_request** | [**\OpenAPI\Client\Model\PickupLocationRequest**](../Model/PickupLocationRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\PickupLocationResponse**](../Model/PickupLocationResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingOptionsUsingPOST**
> \OpenAPI\Client\Model\ShippingOptionResponse shippingOptionsUsingPOST($shipping_option_request)

Gets the shipping options for home delivery for a specific checkout session.

Contains shipping options for your checkout page, including delivery dates, shipping costs and carrier names - based on your customer's address, and your shipping rate engine configuration.  The information you request will be returned in JSON (default) or XML format.  By default, the shipping options returned are sorted by shipping rate (price) in ascending order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\ShippingOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipping_option_request = new \OpenAPI\Client\Model\ShippingOptionRequest(); // \OpenAPI\Client\Model\ShippingOptionRequest | 

try {
    $result = $apiInstance->shippingOptionsUsingPOST($shipping_option_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingOptionsApi->shippingOptionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipping_option_request** | [**\OpenAPI\Client\Model\ShippingOptionRequest**](../Model/ShippingOptionRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\ShippingOptionResponse**](../Model/ShippingOptionResponse.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

