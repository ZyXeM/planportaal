# PickupShippingOption

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier** | [**\OpenAPI\Client\Model\Carrier**](Carrier.md) |  | [optional] 
**delivery_dates** | [**\OpenAPI\Client\Model\DeliveryDate[]**](DeliveryDate.md) | Contains delivery date objects. | [optional] 
**delivery_window** | [**\OpenAPI\Client\Model\DeliveryWindow**](DeliveryWindow.md) |  | [optional] 
**description** | **string** | The contents of the &#x60;details&#x60; field for localized shipping option names you have configured in your Paazl web app account under *Settings&gt;Paazl Perfect&gt;Shipping options*. | [optional] 
**estimated_delivery_range** | [**\OpenAPI\Client\Model\EstimatedDeliveryRange**](EstimatedDeliveryRange.md) |  | [optional] 
**identifier** | **string** | A shipping option&#39;s Paazl code. You will find a list of the identifiers of the shipping options available to your webshop in your webshop account under *Settings&gt;Account&gt;Overview of shipping options*. | [optional] 
**name** | **string** | The name of the shipping option as it appears in the Paazl Sell widget. This can have one of three values, in order of ascending priority:  1.  The Paazl \&quot;default description\&quot; for a shipping option (hard-coded in Paazl)  2.  The (customized) \&quot;description\&quot; of a shipping option (configured by [Paazl Customer Support](mailto:support@paazl.com))  3.  The localized name of a shipping option (you can configure this in the Paazl web app under *Settings&gt;Paazl Perfect&gt;Shipping options*.) | [optional] 
**rate** | **float** | The shipping rate defined for the shipping option concerned in you webshop&#39;s delivery matrix. | [optional] 
**tags** | **string[]** | Codes that are used to filter returned shipping options for display. | [optional] 
**network** | **string** | Specifies what type(s) of pickup locations you want Paazl to send you:  &amp;#8226; \&quot;CARRIER\&quot;: carrier pickup location  &amp;#8226; \&quot;STORE\&quot;: click &amp;amp; collect pickup location  &amp;#8226; \&quot;ALL\&quot;: both types of pickup location | [optional] 
**needs_customer_number** | **bool** | If the shipping option concerned delivers to a DHL PackStation, this element will be set to &#x60;true&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


