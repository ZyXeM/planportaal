# OpenAPI\Client\CheckoutApi

All URIs are relative to *https://api-acc.paazl.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTokenUsingPOST**](CheckoutApi.md#createTokenUsingPOST) | **POST** /v1/checkout/token | Returns access token.
[**getCheckoutUsingGET**](CheckoutApi.md#getCheckoutUsingGET) | **GET** /v1/checkout | Gets checkout session data.
[**saveCheckoutUsingPOST**](CheckoutApi.md#saveCheckoutUsingPOST) | **POST** /v1/checkout | Saves checkout session data.


# **createTokenUsingPOST**
> \OpenAPI\Client\Model\CheckoutToken createTokenUsingPOST($reference)

Returns access token.

Returns an access token for a checkout session. This enables the Paazl checkout widget to access Paazl resources.  See [Authentication and authorization](https://support.paazl.com/hc/en-us/articles/360007607413-Authentication-and-authorization) for an explanation of how Paazl authentication and authorization works.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = new \OpenAPI\Client\Model\Reference(); // \OpenAPI\Client\Model\Reference | 

try {
    $result = $apiInstance->createTokenUsingPOST($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->createTokenUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | [**\OpenAPI\Client\Model\Reference**](../Model/Reference.md)|  |

### Return type

[**\OpenAPI\Client\Model\CheckoutToken**](../Model/CheckoutToken.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckoutUsingGET**
> \OpenAPI\Client\Model\CheckoutInfo getCheckoutUsingGET($reference)

Gets checkout session data.

Gets your reference for a checkout session, along with the customer's preferred delivery date, country code, postal code, preferred shipping option or pickup location, and the order's shipping rate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Your reference for the checkout session whose details you want to retrieve.  **Note!** If the reference value provided already exists, the existing session will be replaced with a new session.  Example:`https://api.paazl.com/checkout?reference=AA01234`

try {
    $result = $apiInstance->getCheckoutUsingGET($reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->getCheckoutUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Your reference for the checkout session whose details you want to retrieve.  **Note!** If the reference value provided already exists, the existing session will be replaced with a new session.  Example:&#x60;https://api.paazl.com/checkout?reference&#x3D;AA01234&#x60; |

### Return type

[**\OpenAPI\Client\Model\CheckoutInfo**](../Model/CheckoutInfo.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json;charset=UTF-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveCheckoutUsingPOST**
> saveCheckoutUsingPOST($save_checkout)

Saves checkout session data.

Saves the most important information of a specific checkout session to the Paazl database. The information will be kept for 30 days.  If the checkout data is successfully saved, the call simply returns `HTTP Status 200 OK`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$save_checkout = new \OpenAPI\Client\Model\SaveCheckout(); // \OpenAPI\Client\Model\SaveCheckout | 

try {
    $apiInstance->saveCheckoutUsingPOST($save_checkout);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->saveCheckoutUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **save_checkout** | [**\OpenAPI\Client\Model\SaveCheckout**](../Model/SaveCheckout.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

