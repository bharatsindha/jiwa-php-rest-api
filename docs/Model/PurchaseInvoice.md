# PurchaseInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_invoice_id** | **string** |  | [optional] 
**creditor_id** | **string** |  | [optional] 
**creditor_account_no** | **string** |  | [optional] 
**creditor_name** | **string** |  | [optional] 
**last_saved_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**invoice_no** | **string** |  | [optional] 
**invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status** | **string** |  | [optional] 
**freight** | **double** |  | [optional] 
**duty** | **double** |  | [optional] 
**insurance** | **double** |  | [optional] 
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
**lines** | [**\Jiwa\JiwaModel\PurchaseInvoiceLine[]**](PurchaseInvoiceLine.md) |  | [optional] 
**goods_received_notes** | [**\Jiwa\JiwaModel\PurchaseInvoiceGoodsReceivedNoteInvoiced[]**](PurchaseInvoiceGoodsReceivedNoteInvoiced.md) |  | [optional] 
**total_gross** | **double** |  | [optional] 
**total_net** | **double** |  | [optional] 
**total_fx** | **double** |  | [optional] 
**freight_inc** | **double** |  | [optional] 
**duty_inc** | **double** |  | [optional] 
**insurance_inc** | **double** |  | [optional] 
**home_decimal_places** | **int** |  | [optional] 
**fx_decimal_places** | **int** |  | [optional] 
**tax_adjustment** | **double** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**currency_id** | **string** |  | [optional] 
**total_net_on_inventory_receivals** | **double** |  | [optional] 
**custom_field_values** | [**\Jiwa\JiwaModel\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional] 
**notes** | [**\Jiwa\JiwaModel\Note[]**](Note.md) |  | [optional] 
**documents** | [**\Jiwa\JiwaModel\Document[]**](Document.md) |  | [optional] 
**logical_warehouse_id** | **string** |  | [optional] 
**logical_warehouse_description** | **string** |  | [optional] 
**physical_warehouse_id** | **string** |  | [optional] 
**physical_warehouse_description** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

