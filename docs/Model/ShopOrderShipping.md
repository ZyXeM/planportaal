# ShopOrderShipping

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**option** | **string** | A shipping option&#39;s Paazl code. You will find a list of the identifiers of the shipping options available to your webshop in your webshop account under *Settings&gt;Account&gt;Overview of shipping options*.  Example: &#x60;option:\&quot;AVG\&quot;&#x60; | 
**pickup_location** | [**\OpenAPI\Client\Model\ShopOrderPickupLocation**](ShopOrderPickupLocation.md) |  | [optional] 
**contract** | **string** | The identification code of your carrier contract for an outbound shipment.  **Note!** If you don&#39;t have this code, contact [Paazl Customer Support](mailto:support@paazl.com).  Example: &#x60;contract:\&quot;XYZ123\&quot;&#x60; | [optional] 
**return_contract** | **string** | The identification code of your carrier contract for a return shipment.  **Note!** If you don&#39;t have this code, contact [Paazl Customer Support](mailto:support@paazl.com).  Example: &#x60;returnContract:\&quot;321ZYX\&quot;&#x60; | [optional] 
**package_count** | **int** | The number of packages in a shipment.  **Note!** If &#x60;multiPackageShipment&#x60; is set to &#x60;true&#x60;, the default value of &#x60;packageCount&#x60; will be &#x60;2&#x60;.  Example: &#x60;packageCount:3&#x60; | [optional] 
**multi_package_shipment** | **bool** | If &#x60;true&#x60;, Paazl will treat the shipment as consolidated.  This setting affects how the packages in the shipment are numbered on its labels. The number of packages in a shipment is indicated by &#x60;packageCount&#x60;. So, for example, if &#x60;multiPackageShipment&#x60; is &#x60;true&#x60; and &#x60;packageCount&#x60; is &#x60;3&#x60;, then the labels will be numbered 1/3, 2/3, 3/3.  **Note!** If &#x60;packageCount&#x60; &gt; &#x60;1&#x60;, then the default value of &#x60;multiPackageShipment&#x60; will be &#x60;true&#x60;. If you don&#39;t want Paazl to treat a multi-package shipment as consolidated, you have to set &#x60;multiPackageShipment&#x60; to &#x60;false&#x60;.  Example: &#x60;multiPackageShipment:false&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


