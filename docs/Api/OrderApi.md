# OpenAPI\Client\OrderApi

All URIs are relative to *https://api-acc.paazl.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrderUsingDELETE**](OrderApi.md#deleteOrderUsingDELETE) | **DELETE** /v1/order/{reference} | Deletes order.
[**editOrderParticularlyUsingPATCH**](OrderApi.md#editOrderParticularlyUsingPATCH) | **PATCH** /v1/order | Patch order
[**editOrderUsingPUT**](OrderApi.md#editOrderUsingPUT) | **PUT** /v1/order | Modifies order information.
[**saveOrderUsingPOST**](OrderApi.md#saveOrderUsingPOST) | **POST** /v1/order | Saves order information.


# **deleteOrderUsingDELETE**
> deleteOrderUsingDELETE($reference)

Deletes order.

Deletes an order in the Paazl database along with all its details.  If the order is successfully deleted, the call simply returns `HTTP Status 200 OK`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = 'reference_example'; // string | Your reference for the order you want to delete.  Example: `https://api.paazl.com/order/order0010`

try {
    $apiInstance->deleteOrderUsingDELETE($reference);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrderUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Your reference for the order you want to delete.  Example: &#x60;https://api.paazl.com/order/order0010&#x60; |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editOrderParticularlyUsingPATCH**
> editOrderParticularlyUsingPATCH($shop_order)

Patch order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_order = new \OpenAPI\Client\Model\ShopOrder(); // \OpenAPI\Client\Model\ShopOrder | 

try {
    $apiInstance->editOrderParticularlyUsingPATCH($shop_order);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->editOrderParticularlyUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_order** | [**\OpenAPI\Client\Model\ShopOrder**](../Model/ShopOrder.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editOrderUsingPUT**
> editOrderUsingPUT($shop_order)

Modifies order information.

Modifies the information of an order with a specific reference in the Paazl database. The method overwrites the whole order so the same attribute restrictions apply as for the `POST order` method.  If the order data is successfully modified, the call simply returns `HTTP Status 200 OK`.  **Note!**  The `PUT order` method lets you to save shipping address information (required), as well as sender address and return address information (optional). Whenever you specify an address, you can either fill `street` and `streetNumber` separately or you can specify both as a single string using `streetAddressLine`. Whether you use one or the other depends on the requirements of the carrier concerned. Paazl applies the following logic to these attributes:  &#8226; If you fill `street` and `streetNumber`, they take priority over a filled `streetAddressLine`  &#8226; If you fill `street` or `streetNumber` but not both, then a filled `streetAddressLine` takes priority  &#8226; If you fill `street` or `streetNumber` but not both, and `streetAddresssLine` is empty, an error will be thrown

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_order = new \OpenAPI\Client\Model\ShopOrder(); // \OpenAPI\Client\Model\ShopOrder | 

try {
    $apiInstance->editOrderUsingPUT($shop_order);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->editOrderUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_order** | [**\OpenAPI\Client\Model\ShopOrder**](../Model/ShopOrder.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveOrderUsingPOST**
> saveOrderUsingPOST($shop_order)

Saves order information.

Saves an order's most important information to the Paazl database once a customer has paid for his/her purchase. You commonly implement POST order when you want to make use of Paazl's [label printing](https://support.paazl.com/hc/en-us/articles/360015545993-About-label-printing) and [track & trace notification](https://support.paazl.com/hc/en-us/articles/360008210773-Customizing-email-notification-templates) functionality. You can also use it with an OMS or WMS.  If the order information is successfully saved, the call simply returns `HTTP Status 200 OK`.  *** **Note!**  The `POST order` method lets you to save shipping address information (required), as well as sender address and return address information (optional). Whenever you specify an address, you can either fill `street` and `streetNumber` separately or you can specify both as a single string using `streetAddressLine`. Whether you use one or the other depends on the requirements of the carrier concerned. Paazl applies the following logic to these attributes:  &#8226; If you fill `street` and `streetNumber`, they take priority over a filled `streetAddressLine`  &#8226; If you fill `street` or `streetNumber` but not both, then a filled `streetAddressLine` takes priority  &#8226; If you fill `street` or `streetNumber` but not both, and `streetAddresssLine` is empty, an error will be thrown

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shop_order = new \OpenAPI\Client\Model\ShopOrder(); // \OpenAPI\Client\Model\ShopOrder | 

try {
    $apiInstance->saveOrderUsingPOST($shop_order);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->saveOrderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_order** | [**\OpenAPI\Client\Model\ShopOrder**](../Model/ShopOrder.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/xml, application/json;charset=UTF-8
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

