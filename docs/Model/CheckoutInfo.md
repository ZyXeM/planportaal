# CheckoutInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consignee_country_code** | **string** | The [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2) code for the country the shipment is being sent to. | [optional] 
**consignee_postal_code** | **string** | The postal code of the address the shipment is being sent to. The code is used to get a more precise list of available shipping options. | [optional] 
**delivery_type** | **string** | A code used to filter the returned shipping option for display. | [optional] 
**notification_email_address** | **string** | The email address that track-and-trace status updates have to be sent to. | [optional] 
**notification_phone_number** | **string** | The SMS number that track-and-trace status updates have to be sent to. | [optional] 
**pickup_date** | [**\DateTime**](\DateTime.md) | The date on which a shipment has to be picked up from a warehouse by a carrier in order to meet the preferred delivery date. | [optional] 
**pickup_location** | [**\OpenAPI\Client\Model\SelectedPickupLocation**](SelectedPickupLocation.md) |  | [optional] 
**preferred_delivery_date** | [**\DateTime**](\DateTime.md) | The day of the week on which customers want their order delivered. | [optional] 
**reference** | **string** | Your reference for the checkout session whose details you have retrieved. | [optional] 
**shipping_option** | [**\OpenAPI\Client\Model\SelectedShippingOption**](SelectedShippingOption.md) |  | [optional] 
**token** | **string** | The access token returned by the &#x60;token&#x60; endpoint. | [optional] 
**webshop_id** | **int** | Paazl&#39;s internal code for your webshop. You will find this in your Paazl web app account under *Settings&gt;Account&gt;My account&gt;Webshop ID*. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


