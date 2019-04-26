# PickupLocationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consignee_country_code** | **string** | The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) code for the country the shipment is being sent to.  Example: &#x60;consigneeCountryCode:\&quot;NL\&quot;&#x60; | 
**consignee_postal_code** | **string** | The postal code of the address the shipment is being sent to. The code is used to get a more precise list of available shipping options.  Example: &#x60;consigneePostalCode:\&quot;1020HD\&quot;&#x60; | [optional] 
**consignor_country_code** | **string** | The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) code for the country the shipment is being sent from.  If left empty, Paazl will use the default setting in your Paazl web app account under *Settings&gt;Account&gt;My address book&gt;Sender address&gt;Country.*  Example: &#x60;consignorCountryCode:\&quot;NL\&quot;&#x60; | [optional] 
**consignor_postal_code** | **string** | The postal code of the address the shipment is being sent from. The code is used to get delivery dates from carriers if they offer this service.  If left empty, Paazl will use the default setting in your Paazl web app account under *Settings&gt;Account&gt;My addres book&gt;Sender address&gt;Postal code*.  Example: &#x60;consignorPostalCode:\&quot;1019HD\&quot;&#x60; | [optional] 
**delivery_date_options** | [**\OpenAPI\Client\Model\DeliveryDateOptions**](DeliveryDateOptions.md) |  | [optional] 
**include_external_delivery_dates** | **bool** | Gets delivery dates directly from the carrier if the carrier supplies them.  The default value is &#x60;false&#x60;.  Example: &#x60;includeExternalDeliveryDates: true&#x60; | [optional] 
**limit** | **int** | The maximum number of shipping options that Paazl must return.  Minimum value: 1  Maximum value: 99  Example: &#x60;limit:10&#x60; | [optional] 
**locale** | **string** | Specifies the language in which the widget is displayed as well as the localized shipping option names you have configured in your web app account (under *Settings&gt;Paazl Perfect&gt;Shipping options*).  &#x60;locale&#x60; is specified using the format &#x60;{language}_{country}&#x60;, where &#x60;{language}&#x60; is an [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language code and &#x60;{country}&#x60; is an [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) country code.  Example: &#x60;locale:\&quot;fr_FR\&quot;&#x60; | [optional] 
**number_of_processing_days** | **int** | The number of days a warehouse needs to get an order ready for pick-up by a carrier.   The default value is &#x60;0&#x60;. However, if you have specified a value for processing days in your webshop&#39;s [delivery matrix](https://support.paazl.com/hc/en-us/articles/360007580074-Configuring-your-delivery-matrix-), that value will override &#x60;numberOfProcessingDays&#x60;.  Minimum value: &#x60;0&#x60;  Maximum value: &#x60;99&#x60;  Example: &#x60;numberOfProcessingDays:5&#x60; | [optional] 
**shipment_parameters** | [**\OpenAPI\Client\Model\ShipmentParameters**](ShipmentParameters.md) |  | [optional] 
**tags** | **string[]** | Codes that are used to filter returned shipping options for display.   Example: &#x60;tags:[\&quot;CASH_ON_DELIVERY\&quot;,\&quot;INSURANCE\&quot;]&#x60; | [optional] 
**token** | **string** | The access token returned by the &#x60;token&#x60; endpoint.  If you assign token a value, Paazl temporarily registers session details in its database in order to keep track of the choices made by webshop customers.  Example: &#x60;token:\&quot;4f7c7af4-a379-4d5e-8ccf-807f4ba97a52\&quot;&#x60; | [optional] 
**network** | **string** | Specifies what type(s) of pickup locations you want Paazl to send you:  &amp;#8226; \&quot;CARRIER\&quot;: carrier pickup location  &amp;#8226; \&quot;STORE\&quot;: click &amp;amp; collect pickup location  &amp;#8226; \&quot;ALL\&quot;: both types of pickup location  The default value is &#x60;\&quot;ALL\&quot;&#x60;.  Example: &#x60;network: \&quot;STORE\&quot;&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


