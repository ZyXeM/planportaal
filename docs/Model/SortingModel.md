# SortingModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distributor** | **string** | Indicates which carrier&#39;s shipping options should appear at the top of the shipping options list.   You will find carrier codes available to you in your web app account under *Settings&gt;Account&gt;Overview of shipping options*.  The shipping options displayed following those of distributor will be displayed in order of ascending price.  **Note!** if &#x60;orderBy&#x60; has the value &#x60;\&quot;CARRIER\&quot;&#x60;, this element is required; if &#x60;orderBy&#x60; has the value &#x60;\&quot;PRICE\&quot;&#x60; or &#x60;\&quot;DATE\&quot;&#x60;, this element will be ignored.  Exmaple: &#x60;distributor:\&quot;SELEKTVRACHT\&quot;&#x60; | [optional] 
**order_by** | **string** | Indicates the field by which to sort the shipping options returned.  The default value is &#x60;\&quot;PRICE\&quot;&#x60;  Example: &#x60;orderBy:\&quot;DATE\&quot;&#x60; | [optional] 
**sort_order** | **string** | Indicates the order in which shipping options should be sorted.  The default value is &#x60;\&quot;ASC\&quot;&#x60;  **Note!** If &#x60;orderBy&#x60; has the value \&quot;CARRIER\&quot;, this element will be ignored.  Example: &#x60;sortOrder:\&quot;DESC\&quot;&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


