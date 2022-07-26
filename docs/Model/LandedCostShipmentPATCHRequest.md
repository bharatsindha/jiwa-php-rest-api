# LandedCostShipmentPATCHRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** |  | [optional] 
**shipment_no** | **string** |  | [optional] 
**last_saved_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**initiated_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**departure_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expected_arrival_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**scheduled_arrival_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**receipt_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**delivery_notes** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**way_bill_no** | **string** |  | [optional] 
**vessel_name** | **string** |  | [optional] 
**container_no** | **string** |  | [optional] 
**use_voti** | **bool** |  | [optional] 
**shipping_agent_creditor_id** | **string** |  | [optional] 
**shipping_agent_creditor_account_no** | **string** |  | [optional] 
**shipping_agent_creditor_name** | **string** |  | [optional] 
**import_cost_clearing_account** | [**\Jiwa\Model\Account**](Account.md) |  | [optional] 
**lines** | [**\Jiwa\Model\ShipmentLine[]**](ShipmentLine.md) |  | [optional] 
**purchase_orders** | [**\Jiwa\Model\ShipmentPurchaseOrderReceived[]**](ShipmentPurchaseOrderReceived.md) |  | [optional] 
**import_costs** | [**\Jiwa\Model\ShipmentImportCost[]**](ShipmentImportCost.md) |  | [optional] 
**vot_is** | [**\Jiwa\Model\ShipmentVOTI[]**](ShipmentVOTI.md) |  | [optional] 
**invoices** | [**\Jiwa\Model\ShipmentInvoice[]**](ShipmentInvoice.md) |  | [optional] 
**custom_field_values** | [**\Jiwa\Model\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


