# ShopOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_instruction** | **string** | Additional instructions concerning the delivery of an order.  Example: &#x60;additionalInstruction:\&quot;Call before delivery\&quot;&#x60; | [optional] 
**consignee** | [**\OpenAPI\Client\Model\Consignee**](Consignee.md) |  | 
**customs_value** | [**\OpenAPI\Client\Model\CustomsValue**](CustomsValue.md) |  | [optional] 
**cod_value** | [**\OpenAPI\Client\Model\CodValue**](CodValue.md) |  | [optional] 
**description** | **string** | A general description of the contents of a whole order.  Example: &#x60;description:\&quot;Socks\&quot;&#x60; | [optional] 
**requested_delivery_date** | [**\DateTime**](\DateTime.md) | The date on which a customer has requested that an order be delivered.  Format: \&quot;YYYY-MM-DD\&quot;  Example: &#x60;requestedDeliveryDate:2019-18-02&#x60; | [optional] 
**products** | [**\OpenAPI\Client\Model\Product[]**](Product.md) | Contains objects representing the products making up a order. | [optional] 
**reference** | **string** | Your own order reference for a purchase transaction.  **Note!** The order reference must be unique within the webshop concerned.  Example: &#x60;reference:\&quot;myOrderReference00123\&quot;&#x60; | 
**return** | [**\OpenAPI\Client\Model\ShopOrderReturn**](ShopOrderReturn.md) |  | [optional] 
**sender** | [**\OpenAPI\Client\Model\ShopOrderSender**](ShopOrderSender.md) |  | [optional] 
**shipping** | [**\OpenAPI\Client\Model\ShopOrderShipping**](ShopOrderShipping.md) |  | 
**weight** | **double** | The total weight in kilograms (kg) of an order, including packaging for shipping.  Example: &#x60;weight:10.12&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


