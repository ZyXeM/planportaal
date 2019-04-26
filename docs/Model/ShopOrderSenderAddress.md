# ShopOrderSenderAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**city** | **string** | The city in which the party that shipped an order is located.  **Note!** If you provide a sender address, &#x60;city&#x60; is required.  Example: &#x60;city:\&quot;Bonn\&quot;&#x60; | [optional] 
**country** | **string** | The ISO 3166-2 code for the country in which the party that shipped an order is located.  The default value is \&quot;NL\&quot;.  Example: &#x60;country:\&quot;DE\&quot;&#x60; | [optional] 
**postal_code** | **string** | The postal code of the address of the party that shipped an order.  Example: &#x60;postalCode:\&quot;53111\&quot;&#x60; | [optional] 
**province** | **string** | The province or state in which the party that shipped an order is located.  Example: &#x60;province:\&quot;Nordrhein-Westfalen\&quot;&#x60; | [optional] 
**street** | **string** | The street name of the address of the party that shipped an order.  See the note in the general method description.  Example: &#x60;street:\&quot;John Plagis Avenue\&quot;&#x60; | [optional] 
**street_lines** | **string[]** | The street address of the party that shipped an order, specified as a series of strings.  See the note in the general method description.  **Note!** Paazl does not parse the string to perform validation with any values that may be provided for the other parameters of a sender address.  Example: &#x60;streetLines:\&quot;6 John Plagis Avenue\&quot;, \&quot;Around the corner\&quot;&#x60; | [optional] 
**house_number** | **int** | The house number of the address of the party that shipped an order.  See the note in general method description.  Example: &#x60;houseNumber:6&#x60; | [optional] 
**house_number_extension** | **string** | The house number extension (such as the \&quot;-A\&quot; in \&quot;12-A\&quot;) of the address of the party that shipped an order.  Example: &#x60;houseNumberExtension:\&quot;-A\&quot;&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


