# GoodsReceivedNotePOSTRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creditor_id** | **string** |  | [optional] 
**creditor_account_no** | **string** |  | [optional] 
**creditor_name** | **string** |  | [optional] 
**slip_no** | **string** |  | [optional] 
**slip_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status** | **string** |  | [optional] 
**freight** | **double** |  | [optional] 
**duty** | **double** |  | [optional] 
**invoiced** | **bool** |  | [optional] 
**pi_main_id** | **string** |  | [optional] 
**insurance** | **double** |  | [optional] 
**logical_warehouse_id** | **string** |  | [optional] 
**logical_warehouse_description** | **string** |  | [optional] 
**physical_warehouse_id** | **string** |  | [optional] 
**physical_warehouse_description** | **string** |  | [optional] 
**tax_total** | **double** |  | [optional] 
**freight_tax_id** | **string** |  | [optional] 
**freight_tax_rate** | **double** |  | [optional] 
**freight_tax_amount** | **double** |  | [optional] 
**duty_tax_id** | **string** |  | [optional] 
**duty_tax_rate** | **double** |  | [optional] 
**duty_tax_amount** | **double** |  | [optional] 
**insurance_tax_id** | **string** |  | [optional] 
**insurance_tax_rate** | **double** |  | [optional] 
**insurance_tax_amount** | **double** |  | [optional] 
**reference** | **string** |  | [optional] 
**total_gross** | **double** |  | [optional] 
**total_net** | **double** |  | [optional] 
**total_fx** | **double** |  | [optional] 
**freight_inc** | **double** |  | [optional] 
**duty_inc** | **double** |  | [optional] 
**insurance_inc** | **double** |  | [optional] 
**inventory_total_quantity** | **double** |  | [optional] 
**inventory_total_quantity_decimal_places** | **double** |  | [optional] 
**lines** | [**\Jiwa\JiwaModel\GoodsReceivedNoteLine[]**](GoodsReceivedNoteLine.md) |  | [optional] 
**purchase_orders** | [**\Jiwa\JiwaModel\GoodsReceivedNotePurchaseOrderReceived[]**](GoodsReceivedNotePurchaseOrderReceived.md) |  | [optional] 
**custom_field_values** | [**\Jiwa\JiwaModel\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


