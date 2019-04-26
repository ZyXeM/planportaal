# DeliveryDateOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_days** | **int** | The length of time in days after startDate for which shipping options are supplied.  The default value is &#x60;7&#x60;.  Example: &#x60;numberOfDays:3&#x60; | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The starting point of a range of possible delivery dates.  Format: \&quot;YYYY-MM-DD\&quot;  The default value is today&#39;s date.  **Note!** When calculating the start date for a delivery date range, Paazl adds the number of delivery days and processing days you have configured in your webshop&#39;s [delivery matrix](https://support.paazl.com/hc/en-us/articles/360007580074-Configuring-your-delivery-matrix-).  Example: &#x60;startDate:\&quot;2018-08-27\&quot;&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


