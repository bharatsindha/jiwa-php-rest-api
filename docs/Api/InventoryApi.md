# Jiwa\InventoryApi

All URIs are relative to *https://api.jiwa.com.au*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryABANDONRequestAbandonDelete**](InventoryApi.md#inventoryABANDONRequestAbandonDelete) | **DELETE** /Inventory/Abandon | Abandons a stateful inventory item.
[**inventoryAlternateChildDELETERequestInventoryIDAlternateChildrenAlternateChildIDDelete**](InventoryApi.md#inventoryAlternateChildDELETERequestInventoryIDAlternateChildrenAlternateChildIDDelete) | **DELETE** /Inventory/{InventoryID}/AlternateChildren/{AlternateChildID} | Deletes a inventory alternate child.
[**inventoryAlternateChildGETRequestInventoryIDAlternateChildrenAlternateChildIDGet**](InventoryApi.md#inventoryAlternateChildGETRequestInventoryIDAlternateChildrenAlternateChildIDGet) | **GET** /Inventory/{InventoryID}/AlternateChildren/{AlternateChildID} | Retrieves an inventory alternate child.
[**inventoryAlternateChildPATCHRequestInventoryIDAlternateChildrenAlternateChildIDUpdate**](InventoryApi.md#inventoryAlternateChildPATCHRequestInventoryIDAlternateChildrenAlternateChildIDUpdate) | **PATCH** /Inventory/{InventoryID}/AlternateChildren/{AlternateChildID} | Updates a inventory alternate child.
[**inventoryAlternateChildPOSTRequestInventoryIDAlternateChildrenPost**](InventoryApi.md#inventoryAlternateChildPOSTRequestInventoryIDAlternateChildrenPost) | **POST** /Inventory/{InventoryID}/AlternateChildren | Appends an alternate child to an inventory item.
[**inventoryAlternateChildrenGETManyRequestInventoryIDAlternateChildrenGet**](InventoryApi.md#inventoryAlternateChildrenGETManyRequestInventoryIDAlternateChildrenGet) | **GET** /Inventory/{InventoryID}/AlternateChildren | Retrieves a list of inventory alternate children.
[**inventoryAlternateParentGETRequestInventoryIDAlternateParentsLinkedInventoryIDGet**](InventoryApi.md#inventoryAlternateParentGETRequestInventoryIDAlternateParentsLinkedInventoryIDGet) | **GET** /Inventory/{InventoryID}/AlternateParents/{LinkedInventoryID} | Retrieves an inventory alternate parent.
[**inventoryAlternateParentsGETManyRequestInventoryIDAlternateParentsGet**](InventoryApi.md#inventoryAlternateParentsGETManyRequestInventoryIDAlternateParentsGet) | **GET** /Inventory/{InventoryID}/AlternateParents | Retrieves a list of inventory alternate parents.
[**inventoryAttributeGroupDELETERequestInventoryIDAttributeGroupsAttributeGroupIDDelete**](InventoryApi.md#inventoryAttributeGroupDELETERequestInventoryIDAttributeGroupsAttributeGroupIDDelete) | **DELETE** /Inventory/{InventoryID}/AttributeGroups/{AttributeGroupID} | Deletes a inventory attribute group.
[**inventoryAttributeGroupGETRequestInventoryIDAttributeGroupsAttributeGroupIDGet**](InventoryApi.md#inventoryAttributeGroupGETRequestInventoryIDAttributeGroupsAttributeGroupIDGet) | **GET** /Inventory/{InventoryID}/AttributeGroups/{AttributeGroupID} | Retrieves an inventory attribute group.
[**inventoryAttributeGroupPATCHRequestInventoryIDAttributeGroupsAttributeGroupIDUpdate**](InventoryApi.md#inventoryAttributeGroupPATCHRequestInventoryIDAttributeGroupsAttributeGroupIDUpdate) | **PATCH** /Inventory/{InventoryID}/AttributeGroups/{AttributeGroupID} | Updates a inventory attribute group.
[**inventoryAttributeGroupPOSTRequestInventoryIDAttributeGroupsPost**](InventoryApi.md#inventoryAttributeGroupPOSTRequestInventoryIDAttributeGroupsPost) | **POST** /Inventory/{InventoryID}/AttributeGroups | Appends an attribute group to an inventory item.
[**inventoryAttributeGroupTemplateABANDONRequestAttributeGroupTemplatesAbandonDelete**](InventoryApi.md#inventoryAttributeGroupTemplateABANDONRequestAttributeGroupTemplatesAbandonDelete) | **DELETE** /Inventory/AttributeGroupTemplates/Abandon | Abandons a stateful inventory attribute group template.
[**inventoryAttributeGroupTemplateAttributeDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDDelete**](InventoryApi.md#inventoryAttributeGroupTemplateAttributeDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDDelete) | **DELETE** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID}/Attributes/{TemplateAttributeID} | Deletes an inventory attribute group template attribute.
[**inventoryAttributeGroupTemplateAttributeGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDGet**](InventoryApi.md#inventoryAttributeGroupTemplateAttributeGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDGet) | **GET** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID}/Attributes/{TemplateAttributeID} | Retrieves an inventory attribute group template attribute.
[**inventoryAttributeGroupTemplateAttributePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDUpdate**](InventoryApi.md#inventoryAttributeGroupTemplateAttributePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDUpdate) | **PATCH** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID}/Attributes/{TemplateAttributeID} | Updates an inventory attribute group template attribute.
[**inventoryAttributeGroupTemplateAttributePOSTRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributePost**](InventoryApi.md#inventoryAttributeGroupTemplateAttributePOSTRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributePost) | **POST** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID}/Attribute | Appends an inventory attribute group template attribute to an inventory attribute group template.
[**inventoryAttributeGroupTemplateAttributesGETManyRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesGet**](InventoryApi.md#inventoryAttributeGroupTemplateAttributesGETManyRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesGet) | **GET** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID}/Attributes | Retrieves a list of inventory attribute group template attributes.
[**inventoryAttributeGroupTemplateDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDDelete**](InventoryApi.md#inventoryAttributeGroupTemplateDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDDelete) | **DELETE** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID} | Deletes an inventory attribute group template.
[**inventoryAttributeGroupTemplateGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDGet**](InventoryApi.md#inventoryAttributeGroupTemplateGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDGet) | **GET** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID} | Retrieves an inventory attribute group template.
[**inventoryAttributeGroupTemplatePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDUpdate**](InventoryApi.md#inventoryAttributeGroupTemplatePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDUpdate) | **PATCH** /Inventory/AttributeGroupTemplates/{AttributeGroupTemplateID} | Updates an inventory attribute group template.
[**inventoryAttributeGroupTemplatePOSTRequestAttributeGroupTemplatesPost**](InventoryApi.md#inventoryAttributeGroupTemplatePOSTRequestAttributeGroupTemplatesPost) | **POST** /Inventory/AttributeGroupTemplates | Creates a new inventory attribute group template.
[**inventoryAttributeGroupTemplateSAVERequestAttributeGroupTemplatesSaveGet**](InventoryApi.md#inventoryAttributeGroupTemplateSAVERequestAttributeGroupTemplatesSaveGet) | **GET** /Inventory/AttributeGroupTemplates/Save | Saves a stateful inventory attribute group template.
[**inventoryAttributeGroupsGETManyRequestInventoryIDAttributeGroupsGet**](InventoryApi.md#inventoryAttributeGroupsGETManyRequestInventoryIDAttributeGroupsGet) | **GET** /Inventory/{InventoryID}/AttributeGroups | Retrieves a list of inventory attribute groups.
[**inventoryAttributeValueGETRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDGet**](InventoryApi.md#inventoryAttributeValueGETRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDGet) | **GET** /Inventory/{InventoryID}/AttributeGroups/{AttributeGroupID}/AttributeValues/{AttributeID} | Retrieves an inventory attribute value.
[**inventoryAttributeValuePATCHRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDUpdate**](InventoryApi.md#inventoryAttributeValuePATCHRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDUpdate) | **PATCH** /Inventory/{InventoryID}/AttributeGroups/{AttributeGroupID}/AttributeValues/{AttributeID} | Updates an inventory attribute value.
[**inventoryBudgetGETRequestInventoryIDBudgetsLogicalWarehouseIDGet**](InventoryApi.md#inventoryBudgetGETRequestInventoryIDBudgetsLogicalWarehouseIDGet) | **GET** /Inventory/{InventoryID}/Budgets/{LogicalWarehouseID} | Retrieves a budget from an inventory item.
[**inventoryBudgetPATCHRequestInventoryIDBudgetsLogicalWarehouseIDUpdate**](InventoryApi.md#inventoryBudgetPATCHRequestInventoryIDBudgetsLogicalWarehouseIDUpdate) | **PATCH** /Inventory/{InventoryID}/Budgets/{LogicalWarehouseID} | Updates a budget.
[**inventoryBudgetsGETManyRequestInventoryIDBudgetsGet**](InventoryApi.md#inventoryBudgetsGETManyRequestInventoryIDBudgetsGet) | **GET** /Inventory/{InventoryID}/Budgets | Retrieves a list of budgets for an inventory item.
[**inventoryCategoriesABANDONRequestCategoriesAbandonDelete**](InventoryApi.md#inventoryCategoriesABANDONRequestCategoriesAbandonDelete) | **DELETE** /Inventory/Categories/Abandon | Abandons a stateful inventory categories collection.
[**inventoryCategoriesSAVERequestCategoriesSaveGet**](InventoryApi.md#inventoryCategoriesSAVERequestCategoriesSaveGet) | **GET** /Inventory/Categories/Save | Saves a stateful inventory categories collection.
[**inventoryCategoryDELETERequestCategoriesCategoryIDDelete**](InventoryApi.md#inventoryCategoryDELETERequestCategoriesCategoryIDDelete) | **DELETE** /Inventory/Categories/{CategoryID} | Deletes an inventory category.
[**inventoryCategoryGETRequestCategoriesCategoryIDGet**](InventoryApi.md#inventoryCategoryGETRequestCategoriesCategoryIDGet) | **GET** /Inventory/Categories/{CategoryID} | Retrieves an inventory category.
[**inventoryCategoryPATCHRequestCategoriesCategoryIDUpdate**](InventoryApi.md#inventoryCategoryPATCHRequestCategoriesCategoryIDUpdate) | **PATCH** /Inventory/Categories/{CategoryID} | Updates an inventory category.
[**inventoryCategoryPOSTRequestCategoriesPost**](InventoryApi.md#inventoryCategoryPOSTRequestCategoriesPost) | **POST** /Inventory/Categories | Creates an inventory category.
[**inventoryClassificationABANDONRequestClassificationsAbandonDelete**](InventoryApi.md#inventoryClassificationABANDONRequestClassificationsAbandonDelete) | **DELETE** /Inventory/Classifications/Abandon | Abandons a stateful inventory classification.
[**inventoryClassificationDELETERequestClassificationsClassificationIDDelete**](InventoryApi.md#inventoryClassificationDELETERequestClassificationsClassificationIDDelete) | **DELETE** /Inventory/Classifications/{ClassificationID} | Deletes an inventory classification.
[**inventoryClassificationGETRequestClassificationsClassificationIDGet**](InventoryApi.md#inventoryClassificationGETRequestClassificationsClassificationIDGet) | **GET** /Inventory/Classifications/{ClassificationID} | Retrieves an inventory classification.
[**inventoryClassificationPATCHRequestClassificationsClassificationIDUpdate**](InventoryApi.md#inventoryClassificationPATCHRequestClassificationsClassificationIDUpdate) | **PATCH** /Inventory/Classifications/{ClassificationID} | Updates an inventory classification.
[**inventoryClassificationPOSTRequestClassificationsPost**](InventoryApi.md#inventoryClassificationPOSTRequestClassificationsPost) | **POST** /Inventory/Classifications | Creates an inventory classification.
[**inventoryClassificationSAVERequestClassificationsSaveGet**](InventoryApi.md#inventoryClassificationSAVERequestClassificationsSaveGet) | **GET** /Inventory/Classifications/Save | Saves a stateful inventory classification.
[**inventoryComponentDELETERequestInventoryIDComponentsComponentIDDelete**](InventoryApi.md#inventoryComponentDELETERequestInventoryIDComponentsComponentIDDelete) | **DELETE** /Inventory/{InventoryID}/Components/{ComponentID} | Deletes a component.
[**inventoryComponentGETRequestInventoryIDComponentsComponentIDGet**](InventoryApi.md#inventoryComponentGETRequestInventoryIDComponentsComponentIDGet) | **GET** /Inventory/{InventoryID}/Components/{ComponentID} | Retrieves a component from an inventory item.
[**inventoryComponentPATCHRequestInventoryIDComponentsComponentIDUpdate**](InventoryApi.md#inventoryComponentPATCHRequestInventoryIDComponentsComponentIDUpdate) | **PATCH** /Inventory/{InventoryID}/Components/{ComponentID} | Updates a component.
[**inventoryComponentPOSTRequestInventoryIDComponentsPost**](InventoryApi.md#inventoryComponentPOSTRequestInventoryIDComponentsPost) | **POST** /Inventory/{InventoryID}/Components | Appends a component to an inventory item.
[**inventoryComponentsGETManyRequestInventoryIDComponentsGet**](InventoryApi.md#inventoryComponentsGETManyRequestInventoryIDComponentsGet) | **GET** /Inventory/{InventoryID}/Components | Retrieves a list of components for an inventory item.
[**inventoryCustomFieldValueGETRequestInventoryIDCustomFieldValuesSettingIDGet**](InventoryApi.md#inventoryCustomFieldValueGETRequestInventoryIDCustomFieldValuesSettingIDGet) | **GET** /Inventory/{InventoryID}/CustomFieldValues/{SettingID} | Retrieves an inventory custom field value.
[**inventoryCustomFieldValuePATCHRequestInventoryIDCustomFieldValuesSettingIDUpdate**](InventoryApi.md#inventoryCustomFieldValuePATCHRequestInventoryIDCustomFieldValuesSettingIDUpdate) | **PATCH** /Inventory/{InventoryID}/CustomFieldValues/{SettingID} | Updates an inventory custom field value.
[**inventoryCustomFieldValuesGETManyRequestInventoryIDCustomFieldValuesGet**](InventoryApi.md#inventoryCustomFieldValuesGETManyRequestInventoryIDCustomFieldValuesGet) | **GET** /Inventory/{InventoryID}/CustomFieldValues | Retrieves a list of custom field values for an inventory item.
[**inventoryCustomFieldsGETManyRequestCustomFieldsGet**](InventoryApi.md#inventoryCustomFieldsGETManyRequestCustomFieldsGet) | **GET** /Inventory/CustomFields | Retrieves a list of inventory custom fields.
[**inventoryDELETERequestInventoryIDDelete**](InventoryApi.md#inventoryDELETERequestInventoryIDDelete) | **DELETE** /Inventory/{InventoryID} | Deletes an inventory item.
[**inventoryDebtorClassificationPriceDELETERequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDDelete**](InventoryApi.md#inventoryDebtorClassificationPriceDELETERequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDDelete) | **DELETE** /Inventory/{InventoryID}/DebtorClassificationPrices/{DebtorClassificationPriceID} | Deletes a debtor classification price.
[**inventoryDebtorClassificationPriceGETRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDGet**](InventoryApi.md#inventoryDebtorClassificationPriceGETRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDGet) | **GET** /Inventory/{InventoryID}/DebtorClassificationPrices/{DebtorClassificationPriceID} | Retrieves a debtor classification price from an inventory item.
[**inventoryDebtorClassificationPricePATCHRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDUpdate**](InventoryApi.md#inventoryDebtorClassificationPricePATCHRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDUpdate) | **PATCH** /Inventory/{InventoryID}/DebtorClassificationPrices/{DebtorClassificationPriceID} | Updates a debtor classification price.
[**inventoryDebtorClassificationPricePOSTRequestInventoryIDDebtorClassificationPricesPost**](InventoryApi.md#inventoryDebtorClassificationPricePOSTRequestInventoryIDDebtorClassificationPricesPost) | **POST** /Inventory/{InventoryID}/DebtorClassificationPrices | Adds a debtor classification price to an inventory item.
[**inventoryDebtorClassificationPricesGETManyRequestInventoryIDDebtorClassificationPricesGet**](InventoryApi.md#inventoryDebtorClassificationPricesGETManyRequestInventoryIDDebtorClassificationPricesGet) | **GET** /Inventory/{InventoryID}/DebtorClassificationPrices | Retrieves a list of debtor classification prices for an inventory item.
[**inventoryDebtorPriceGroupPriceDELETERequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDDelete**](InventoryApi.md#inventoryDebtorPriceGroupPriceDELETERequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDDelete) | **DELETE** /Inventory/{InventoryID}/DebtorPriceGroupPrices/{DebtorPriceGroupInventorySpecificID} | Deletes a debtor price group price.
[**inventoryDebtorPriceGroupPriceGETRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDGet**](InventoryApi.md#inventoryDebtorPriceGroupPriceGETRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDGet) | **GET** /Inventory/{InventoryID}/DebtorPriceGroupPrices/{DebtorPriceGroupInventorySpecificID} | Retrieves a debtor price group price from an inventory item.
[**inventoryDebtorPriceGroupPricePATCHRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDUpdate**](InventoryApi.md#inventoryDebtorPriceGroupPricePATCHRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDUpdate) | **PATCH** /Inventory/{InventoryID}/DebtorPriceGroupPrices/{DebtorPriceGroupInventorySpecificID} | Updates a debtor price group price.
[**inventoryDebtorPriceGroupPricePOSTRequestInventoryIDDebtorPriceGroupPricesPost**](InventoryApi.md#inventoryDebtorPriceGroupPricePOSTRequestInventoryIDDebtorPriceGroupPricesPost) | **POST** /Inventory/{InventoryID}/DebtorPriceGroupPrices | Adds a debtor price group price to an inventory item.
[**inventoryDebtorPriceGroupPricesGETManyRequestInventoryIDDebtorPriceGroupPricesGet**](InventoryApi.md#inventoryDebtorPriceGroupPricesGETManyRequestInventoryIDDebtorPriceGroupPricesGet) | **GET** /Inventory/{InventoryID}/DebtorPriceGroupPrices | Retrieves a list of debtor price group prices for an inventory item.
[**inventoryDebtorSpecificPriceDELETERequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDDelete**](InventoryApi.md#inventoryDebtorSpecificPriceDELETERequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDDelete) | **DELETE** /Inventory/{InventoryID}/DebtorSpecificPrices/{DebtorSpecificPriceID} | Deletes a debtor specific price.
[**inventoryDebtorSpecificPriceGETRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDGet**](InventoryApi.md#inventoryDebtorSpecificPriceGETRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDGet) | **GET** /Inventory/{InventoryID}/DebtorSpecificPrices/{DebtorSpecificPriceID} | Retrieves a debtor specific price from an inventory item.
[**inventoryDebtorSpecificPricePATCHRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDUpdate**](InventoryApi.md#inventoryDebtorSpecificPricePATCHRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDUpdate) | **PATCH** /Inventory/{InventoryID}/DebtorSpecificPrices/{DebtorSpecificPriceID} | Updates a debtor specific price.
[**inventoryDebtorSpecificPricePOSTRequestInventoryIDDebtorSpecificPricesPost**](InventoryApi.md#inventoryDebtorSpecificPricePOSTRequestInventoryIDDebtorSpecificPricesPost) | **POST** /Inventory/{InventoryID}/DebtorSpecificPrices | Adds a debtor specific price to an inventory item.
[**inventoryDebtorSpecificPricesGETManyRequestInventoryIDDebtorSpecificPricesGet**](InventoryApi.md#inventoryDebtorSpecificPricesGETManyRequestInventoryIDDebtorSpecificPricesGet) | **GET** /Inventory/{InventoryID}/DebtorSpecificPrices | Retrieves a list of debtor specific prices for an inventory item.
[**inventoryDocumentDELETERequestInventoryIDDocumentsDocumentIDDelete**](InventoryApi.md#inventoryDocumentDELETERequestInventoryIDDocumentsDocumentIDDelete) | **DELETE** /Inventory/{InventoryID}/Documents/{DocumentID} | Deletes an inventory document.
[**inventoryDocumentGETRequestInventoryIDDocumentsDocumentIDGet**](InventoryApi.md#inventoryDocumentGETRequestInventoryIDDocumentsDocumentIDGet) | **GET** /Inventory/{InventoryID}/Documents/{DocumentID} | Retrieves an inventory document.
[**inventoryDocumentPATCHRequestInventoryIDDocumentsDocumentIDUpdate**](InventoryApi.md#inventoryDocumentPATCHRequestInventoryIDDocumentsDocumentIDUpdate) | **PATCH** /Inventory/{InventoryID}/Documents/{DocumentID} | Updates an inventory document.
[**inventoryDocumentPOSTRequestInventoryIDDocumentsPost**](InventoryApi.md#inventoryDocumentPOSTRequestInventoryIDDocumentsPost) | **POST** /Inventory/{InventoryID}/Documents | Appends a document to an inventory item.
[**inventoryDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**](InventoryApi.md#inventoryDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete) | **DELETE** /Inventory/DocumentTypes/{DocumentTypeID} | Deletes an inventory document type.
[**inventoryDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**](InventoryApi.md#inventoryDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet) | **GET** /Inventory/DocumentTypes/{DocumentTypeID} | Retrieves an inventory document type.
[**inventoryDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**](InventoryApi.md#inventoryDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate) | **PATCH** /Inventory/DocumentTypes/{DocumentTypeID} | Updates an inventory document type.
[**inventoryDocumentTypePOSTRequestDocumentTypesPost**](InventoryApi.md#inventoryDocumentTypePOSTRequestDocumentTypesPost) | **POST** /Inventory/DocumentTypes | Creates a new inventory document type.
[**inventoryDocumentTypesGETManyRequestDocumentTypesGet**](InventoryApi.md#inventoryDocumentTypesGETManyRequestDocumentTypesGet) | **GET** /Inventory/DocumentTypes | Retrieves a list of inventory document types.
[**inventoryDocumentsGETManyRequestInventoryIDDocumentsGet**](InventoryApi.md#inventoryDocumentsGETManyRequestInventoryIDDocumentsGet) | **GET** /Inventory/{InventoryID}/Documents | Retrieves a list of inventory documents.
[**inventoryGETRequestInventoryIDGet**](InventoryApi.md#inventoryGETRequestInventoryIDGet) | **GET** /Inventory/{InventoryID} | Retrieves an inventory item.
[**inventoryLedgerGETRequestInventoryIDLedgersNameGet**](InventoryApi.md#inventoryLedgerGETRequestInventoryIDLedgersNameGet) | **GET** /Inventory/{InventoryID}/Ledgers/{Name} | Retrieves an inventory ledger.
[**inventoryLedgerPATCHRequestInventoryIDLedgersNameUpdate**](InventoryApi.md#inventoryLedgerPATCHRequestInventoryIDLedgersNameUpdate) | **PATCH** /Inventory/{InventoryID}/Ledgers/{Name} | Updates a inventory ledger.
[**inventoryLedgersGETManyRequestInventoryIDLedgersGet**](InventoryApi.md#inventoryLedgersGETManyRequestInventoryIDLedgersGet) | **GET** /Inventory/{InventoryID}/Ledgers | Retrieves a list of inventory ledgers.
[**inventoryNoteDELETERequestInventoryIDNotesNoteIDDelete**](InventoryApi.md#inventoryNoteDELETERequestInventoryIDNotesNoteIDDelete) | **DELETE** /Inventory/{InventoryID}/Notes/{NoteID} | Deletes an inventory note.
[**inventoryNoteGETRequestInventoryIDNotesNoteIDGet**](InventoryApi.md#inventoryNoteGETRequestInventoryIDNotesNoteIDGet) | **GET** /Inventory/{InventoryID}/Notes/{NoteID} | Retrieves an inventory note.
[**inventoryNotePATCHRequestInventoryIDNotesNoteIDUpdate**](InventoryApi.md#inventoryNotePATCHRequestInventoryIDNotesNoteIDUpdate) | **PATCH** /Inventory/{InventoryID}/Notes/{NoteID} | Updates an inventory note.
[**inventoryNotePOSTRequestInventoryIDNotesPost**](InventoryApi.md#inventoryNotePOSTRequestInventoryIDNotesPost) | **POST** /Inventory/{InventoryID}/Notes | Appends a note to an inventory item.
[**inventoryNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**](InventoryApi.md#inventoryNoteTypeDELETERequestNoteTypesNoteTypeIDDelete) | **DELETE** /Inventory/NoteTypes/{NoteTypeID} | Deletes an inventory note type.
[**inventoryNoteTypeGETRequestNoteTypesNoteTypeIDGet**](InventoryApi.md#inventoryNoteTypeGETRequestNoteTypesNoteTypeIDGet) | **GET** /Inventory/NoteTypes/{NoteTypeID} | Retrieves an inventory note type.
[**inventoryNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**](InventoryApi.md#inventoryNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate) | **PATCH** /Inventory/NoteTypes/{NoteTypeID} | Updates an inventory note type.
[**inventoryNoteTypePOSTRequestNoteTypesPost**](InventoryApi.md#inventoryNoteTypePOSTRequestNoteTypesPost) | **POST** /Inventory/NoteTypes | Creates a new inventory note type.
[**inventoryNoteTypesGETManyRequestNoteTypesGet**](InventoryApi.md#inventoryNoteTypesGETManyRequestNoteTypesGet) | **GET** /Inventory/NoteTypes | Retrieves a list of inventory note types.
[**inventoryNotesGETManyRequestInventoryIDNotesGet**](InventoryApi.md#inventoryNotesGETManyRequestInventoryIDNotesGet) | **GET** /Inventory/{InventoryID}/Notes | Retrieves a list of inventory notes.
[**inventoryOrderLevelGETRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoGet**](InventoryApi.md#inventoryOrderLevelGETRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoGet) | **GET** /Inventory/{InventoryID}/OrderLevels/{LogicalWarehouseID}/Periods/{PeriodNo} | Retrieves a order level from an inventory item for a particular logical warehouse.
[**inventoryOrderLevelPATCHRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoUpdate**](InventoryApi.md#inventoryOrderLevelPATCHRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoUpdate) | **PATCH** /Inventory/{InventoryID}/OrderLevels/{LogicalWarehouseID}/Periods/{PeriodNo} | Updates an order level.
[**inventoryOrderLevelsGETManyRequestInventoryIDOrderLevelsGet**](InventoryApi.md#inventoryOrderLevelsGETManyRequestInventoryIDOrderLevelsGet) | **GET** /Inventory/{InventoryID}/OrderLevels | Retrieves a list of order levels for an inventory item.
[**inventoryOtherDescriptionDELETERequestInventoryIDOtherDescriptionsOtherDescriptionIDDelete**](InventoryApi.md#inventoryOtherDescriptionDELETERequestInventoryIDOtherDescriptionsOtherDescriptionIDDelete) | **DELETE** /Inventory/{InventoryID}/OtherDescriptions/{OtherDescriptionID} | Deletes an inventory other description.
[**inventoryOtherDescriptionGETRequestInventoryIDOtherDescriptionsOtherDescriptionIDGet**](InventoryApi.md#inventoryOtherDescriptionGETRequestInventoryIDOtherDescriptionsOtherDescriptionIDGet) | **GET** /Inventory/{InventoryID}/OtherDescriptions/{OtherDescriptionID} | Retrieves an inventory other description.
[**inventoryOtherDescriptionPATCHRequestInventoryIDOtherDescriptionsOtherDescriptionIDUpdate**](InventoryApi.md#inventoryOtherDescriptionPATCHRequestInventoryIDOtherDescriptionsOtherDescriptionIDUpdate) | **PATCH** /Inventory/{InventoryID}/OtherDescriptions/{OtherDescriptionID} | Updates an inventory other description.
[**inventoryOtherDescriptionPOSTRequestInventoryIDOtherDescriptionsPost**](InventoryApi.md#inventoryOtherDescriptionPOSTRequestInventoryIDOtherDescriptionsPost) | **POST** /Inventory/{InventoryID}/OtherDescriptions | Appends an other description to an inventory item.
[**inventoryOtherDescriptionsGETManyRequestInventoryIDOtherDescriptionsGet**](InventoryApi.md#inventoryOtherDescriptionsGETManyRequestInventoryIDOtherDescriptionsGet) | **GET** /Inventory/{InventoryID}/OtherDescriptions | Retrieves a list of inventory other descriptions.
[**inventoryPATCHRequestInventoryIDUpdate**](InventoryApi.md#inventoryPATCHRequestInventoryIDUpdate) | **PATCH** /Inventory/{InventoryID} | Updates an inventory item.
[**inventoryPOSTRequestPost**](InventoryApi.md#inventoryPOSTRequestPost) | **POST** /Inventory | Creates an inventory item.
[**inventoryPriceGETRequestInventoryIDPricingDebtorIDINLogicalIDDateQuantityGet**](InventoryApi.md#inventoryPriceGETRequestInventoryIDPricingDebtorIDINLogicalIDDateQuantityGet) | **GET** /Inventory/{InventoryID}/Pricing/{DebtorID}/{IN_LogicalID}/{Date}/{Quantity} | Retrieves a price for a product, for a debtor, warehouse, date and quantity
[**inventoryPricingGroupDELETERequestPricingGroupsPricingGroupIDDelete**](InventoryApi.md#inventoryPricingGroupDELETERequestPricingGroupsPricingGroupIDDelete) | **DELETE** /Inventory/PricingGroups/{PricingGroupID} | Deletes an inventory pricing group.
[**inventoryPricingGroupGETRequestPricingGroupsPricingGroupIDGet**](InventoryApi.md#inventoryPricingGroupGETRequestPricingGroupsPricingGroupIDGet) | **GET** /Inventory/PricingGroups/{PricingGroupID} | Retrieves an inventory pricing group.
[**inventoryPricingGroupPATCHRequestPricingGroupsPricingGroupIDUpdate**](InventoryApi.md#inventoryPricingGroupPATCHRequestPricingGroupsPricingGroupIDUpdate) | **PATCH** /Inventory/PricingGroups/{PricingGroupID} | Updates an inventory pricing group.
[**inventoryPricingGroupPOSTRequestPricingGroupsPost**](InventoryApi.md#inventoryPricingGroupPOSTRequestPricingGroupsPost) | **POST** /Inventory/PricingGroups | Creates a new inventory pricing group.
[**inventoryPricingGroupsGETManyRequestPricingGroupsGet**](InventoryApi.md#inventoryPricingGroupsGETManyRequestPricingGroupsGet) | **GET** /Inventory/PricingGroups | Retrieves a list of inventory pricing groups.
[**inventoryProductAvailabilitiesGETManyRequestInventoryIDProductAvailabilitiesGet**](InventoryApi.md#inventoryProductAvailabilitiesGETManyRequestInventoryIDProductAvailabilitiesGet) | **GET** /Inventory/{InventoryID}/ProductAvailabilities | Retrieves a list of product availabilities for an inventory item.
[**inventoryProductAvailabilityGETRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDGet**](InventoryApi.md#inventoryProductAvailabilityGETRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDGet) | **GET** /Inventory/{InventoryID}/ProductAvailabilities/{LogicalWarehouseID} | Retrieves a product availability from an inventory item.
[**inventoryProductAvailabilityPATCHRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDUpdate**](InventoryApi.md#inventoryProductAvailabilityPATCHRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDUpdate) | **PATCH** /Inventory/{InventoryID}/ProductAvailabilities/{LogicalWarehouseID} | Updates a product availability.
[**inventoryRegionGETRequestInventoryIDRegionsRegionNameGet**](InventoryApi.md#inventoryRegionGETRequestInventoryIDRegionsRegionNameGet) | **GET** /Inventory/{InventoryID}/Regions/{RegionName} | Retrieves an inventory region.
[**inventoryRegionPATCHRequestInventoryIDRegionsRegionNameUpdate**](InventoryApi.md#inventoryRegionPATCHRequestInventoryIDRegionsRegionNameUpdate) | **PATCH** /Inventory/{InventoryID}/Regions/{RegionName} | Updates a inventory region.
[**inventoryRegionsGETManyRequestInventoryIDRegionsGet**](InventoryApi.md#inventoryRegionsGETManyRequestInventoryIDRegionsGet) | **GET** /Inventory/{InventoryID}/Regions | Retrieves a list of inventory regions.
[**inventorySAVERequestSaveGet**](InventoryApi.md#inventorySAVERequestSaveGet) | **GET** /Inventory/Save | Saves a stateful inventory item.
[**inventorySellingPriceGETRequestInventoryIDSellingPricesGet**](InventoryApi.md#inventorySellingPriceGETRequestInventoryIDSellingPricesGet) | **GET** /Inventory/{InventoryID}/SellingPrices | Retrieves the selling prices for an inventory item.
[**inventorySellingPricePATCHRequestInventoryIDSellingPricesUpdate**](InventoryApi.md#inventorySellingPricePATCHRequestInventoryIDSellingPricesUpdate) | **PATCH** /Inventory/{InventoryID}/SellingPrices | Updates the selling prices.
[**inventorySupplierDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDDelete**](InventoryApi.md#inventorySupplierDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDDelete) | **DELETE** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID} | Deletes an inventory item supplier.
[**inventorySupplierGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDGet**](InventoryApi.md#inventorySupplierGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDGet) | **GET** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID} | Retrieves an inventory item supplier.
[**inventorySupplierPATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDUpdate**](InventoryApi.md#inventorySupplierPATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDUpdate) | **PATCH** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID} | Updates an inventory item supplier.
[**inventorySupplierPOSTRequestInventoryIDRegionsRegionNameSuppliersPost**](InventoryApi.md#inventorySupplierPOSTRequestInventoryIDRegionsRegionNameSuppliersPost) | **POST** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers | Appends a supplier to an inventory item.
[**inventorySupplierWarehouseDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDDelete**](InventoryApi.md#inventorySupplierWarehouseDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDDelete) | **DELETE** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID}/SupplierWarehouses/{SupplierWarehouseID} | Deletes a supplier warehouse from an inventory item.
[**inventorySupplierWarehouseGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDGet**](InventoryApi.md#inventorySupplierWarehouseGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDGet) | **GET** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID}/SupplierWarehouses/{SupplierWarehouseID} | Retrieves an inventory item supplier warehouse.
[**inventorySupplierWarehousePATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDUpdate**](InventoryApi.md#inventorySupplierWarehousePATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDUpdate) | **PATCH** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID}/SupplierWarehouses/{SupplierWarehouseID} | Updates a supplier warehouse for an inventory item.
[**inventorySupplierWarehousePOSTRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesPost**](InventoryApi.md#inventorySupplierWarehousePOSTRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesPost) | **POST** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID}/SupplierWarehouses | Appends a supplier warehouse to an inventory item.
[**inventorySupplierWarehousesGETManyRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesGet**](InventoryApi.md#inventorySupplierWarehousesGETManyRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesGet) | **GET** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers/{SupplierID}/SupplierWarehouses | Retrieves a list of inventory supplier warehouses.
[**inventorySuppliersGETManyRequestInventoryIDRegionsRegionNameSuppliersGet**](InventoryApi.md#inventorySuppliersGETManyRequestInventoryIDRegionsRegionNameSuppliersGet) | **GET** /Inventory/{InventoryID}/Regions/{RegionName}/Suppliers | Retrieves a list of suppliers for a given inventory item in a particular region.
[**inventoryUnitOfMeasureDELETERequestInventoryIDUnitOfMeasuresUnitOfMeasureIDDelete**](InventoryApi.md#inventoryUnitOfMeasureDELETERequestInventoryIDUnitOfMeasuresUnitOfMeasureIDDelete) | **DELETE** /Inventory/{InventoryID}/UnitOfMeasures/{UnitOfMeasureID} | Deletes a inventory unit of measure.
[**inventoryUnitOfMeasureGETRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDGet**](InventoryApi.md#inventoryUnitOfMeasureGETRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDGet) | **GET** /Inventory/{InventoryID}/UnitOfMeasures/{UnitOfMeasureID} | Retrieves an inventory unit of measure.
[**inventoryUnitOfMeasurePATCHRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDUpdate**](InventoryApi.md#inventoryUnitOfMeasurePATCHRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDUpdate) | **PATCH** /Inventory/{InventoryID}/UnitOfMeasures/{UnitOfMeasureID} | Updates a inventory unit of measure.
[**inventoryUnitOfMeasurePOSTRequestInventoryIDUnitOfMeasuresPost**](InventoryApi.md#inventoryUnitOfMeasurePOSTRequestInventoryIDUnitOfMeasuresPost) | **POST** /Inventory/{InventoryID}/UnitOfMeasures | Appends an alternate child to an inventory item.
[**inventoryUnitOfMeasuresGETManyRequestInventoryIDUnitOfMeasuresGet**](InventoryApi.md#inventoryUnitOfMeasuresGETManyRequestInventoryIDUnitOfMeasuresGet) | **GET** /Inventory/{InventoryID}/UnitOfMeasures | Retrieves a list of inventory unit of measures.
[**inventoryUpSellDELETERequestInventoryIDUpSellsUpSellIDDelete**](InventoryApi.md#inventoryUpSellDELETERequestInventoryIDUpSellsUpSellIDDelete) | **DELETE** /Inventory/{InventoryID}/UpSells/{UpSellID} | Deletes a inventory up sell.
[**inventoryUpSellGETRequestInventoryIDUpSellsUpSellIDGet**](InventoryApi.md#inventoryUpSellGETRequestInventoryIDUpSellsUpSellIDGet) | **GET** /Inventory/{InventoryID}/UpSells/{UpSellID} | Retrieves an inventory up sell.
[**inventoryUpSellPATCHRequestInventoryIDUpSellsUpSellIDUpdate**](InventoryApi.md#inventoryUpSellPATCHRequestInventoryIDUpSellsUpSellIDUpdate) | **PATCH** /Inventory/{InventoryID}/UpSells/{UpSellID} | Updates a inventory up sell.
[**inventoryUpSellPOSTRequestInventoryIDUpSellsPost**](InventoryApi.md#inventoryUpSellPOSTRequestInventoryIDUpSellsPost) | **POST** /Inventory/{InventoryID}/UpSells | Appends an up sell to an inventory item.
[**inventoryUpSellsGETManyRequestInventoryIDUpSellsGet**](InventoryApi.md#inventoryUpSellsGETManyRequestInventoryIDUpSellsGet) | **GET** /Inventory/{InventoryID}/UpSells | Retrieves a list of inventory up sells.


# **inventoryABANDONRequestAbandonDelete**
> \Jiwa\Model\Object inventoryABANDONRequestAbandonDelete($accept, $jiwa_stateful, $inventory_id)

Abandons a stateful inventory item.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$inventory_id = "inventory_id_example"; // string | 

try {
    $result = $apiInstance->inventoryABANDONRequestAbandonDelete($accept, $jiwa_stateful, $inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryABANDONRequestAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **inventory_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateChildDELETERequestInventoryIDAlternateChildrenAlternateChildIDDelete**
> \Jiwa\Model\Object inventoryAlternateChildDELETERequestInventoryIDAlternateChildrenAlternateChildIDDelete($accept, $inventory_id, $alternate_child_id, $jiwa_stateful, $linked_inventory_id, $linked_inventory_part_no, $linked_inventory_description, $notes)

Deletes a inventory alternate child.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$alternate_child_id = "alternate_child_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$linked_inventory_id = "linked_inventory_id_example"; // string | 
$linked_inventory_part_no = "linked_inventory_part_no_example"; // string | 
$linked_inventory_description = "linked_inventory_description_example"; // string | 
$notes = "notes_example"; // string | 

try {
    $result = $apiInstance->inventoryAlternateChildDELETERequestInventoryIDAlternateChildrenAlternateChildIDDelete($accept, $inventory_id, $alternate_child_id, $jiwa_stateful, $linked_inventory_id, $linked_inventory_part_no, $linked_inventory_description, $notes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateChildDELETERequestInventoryIDAlternateChildrenAlternateChildIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **alternate_child_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **linked_inventory_id** | **string**|  | [optional]
 **linked_inventory_part_no** | **string**|  | [optional]
 **linked_inventory_description** | **string**|  | [optional]
 **notes** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateChildGETRequestInventoryIDAlternateChildrenAlternateChildIDGet**
> \Jiwa\Model\InventoryAlternateChild inventoryAlternateChildGETRequestInventoryIDAlternateChildrenAlternateChildIDGet($accept, $inventory_id, $alternate_child_id, $jiwa_stateful)

Retrieves an inventory alternate child.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$alternate_child_id = "alternate_child_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAlternateChildGETRequestInventoryIDAlternateChildrenAlternateChildIDGet($accept, $inventory_id, $alternate_child_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateChildGETRequestInventoryIDAlternateChildrenAlternateChildIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **alternate_child_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAlternateChild**](../Model/InventoryAlternateChild.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateChildPATCHRequestInventoryIDAlternateChildrenAlternateChildIDUpdate**
> \Jiwa\Model\InventoryAlternateChild inventoryAlternateChildPATCHRequestInventoryIDAlternateChildrenAlternateChildIDUpdate($accept, $inventory_id, $alternate_child_id, $jiwa_stateful, $linked_inventory_id, $linked_inventory_part_no, $linked_inventory_description, $notes, $body)

Updates a inventory alternate child.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$alternate_child_id = "alternate_child_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$linked_inventory_id = "linked_inventory_id_example"; // string | 
$linked_inventory_part_no = "linked_inventory_part_no_example"; // string | 
$linked_inventory_description = "linked_inventory_description_example"; // string | 
$notes = "notes_example"; // string | 
$body = new \Jiwa\Model\InventoryAlternateChildPATCHRequest(); // \Jiwa\Model\InventoryAlternateChildPATCHRequest | 

try {
    $result = $apiInstance->inventoryAlternateChildPATCHRequestInventoryIDAlternateChildrenAlternateChildIDUpdate($accept, $inventory_id, $alternate_child_id, $jiwa_stateful, $linked_inventory_id, $linked_inventory_part_no, $linked_inventory_description, $notes, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateChildPATCHRequestInventoryIDAlternateChildrenAlternateChildIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **alternate_child_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **linked_inventory_id** | **string**|  | [optional]
 **linked_inventory_part_no** | **string**|  | [optional]
 **linked_inventory_description** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAlternateChildPATCHRequest**](../Model/InventoryAlternateChildPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAlternateChild**](../Model/InventoryAlternateChild.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateChildPOSTRequestInventoryIDAlternateChildrenPost**
> \Jiwa\Model\InventoryAlternateChild inventoryAlternateChildPOSTRequestInventoryIDAlternateChildrenPost($accept, $inventory_id, $jiwa_stateful, $linked_inventory_id, $linked_inventory_part_no, $linked_inventory_description, $notes, $body)

Appends an alternate child to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$linked_inventory_id = "linked_inventory_id_example"; // string | 
$linked_inventory_part_no = "linked_inventory_part_no_example"; // string | 
$linked_inventory_description = "linked_inventory_description_example"; // string | 
$notes = "notes_example"; // string | 
$body = new \Jiwa\Model\InventoryAlternateChildPOSTRequest(); // \Jiwa\Model\InventoryAlternateChildPOSTRequest | 

try {
    $result = $apiInstance->inventoryAlternateChildPOSTRequestInventoryIDAlternateChildrenPost($accept, $inventory_id, $jiwa_stateful, $linked_inventory_id, $linked_inventory_part_no, $linked_inventory_description, $notes, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateChildPOSTRequestInventoryIDAlternateChildrenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **linked_inventory_id** | **string**|  | [optional]
 **linked_inventory_part_no** | **string**|  | [optional]
 **linked_inventory_description** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAlternateChildPOSTRequest**](../Model/InventoryAlternateChildPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAlternateChild**](../Model/InventoryAlternateChild.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateChildrenGETManyRequestInventoryIDAlternateChildrenGet**
> \Jiwa\Model\InventoryAlternateChild[] inventoryAlternateChildrenGETManyRequestInventoryIDAlternateChildrenGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory alternate children.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAlternateChildrenGETManyRequestInventoryIDAlternateChildrenGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateChildrenGETManyRequestInventoryIDAlternateChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAlternateChild[]**](../Model/InventoryAlternateChild.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateParentGETRequestInventoryIDAlternateParentsLinkedInventoryIDGet**
> \Jiwa\Model\InventoryAlternateParent inventoryAlternateParentGETRequestInventoryIDAlternateParentsLinkedInventoryIDGet($accept, $inventory_id, $linked_inventory_id, $jiwa_stateful)

Retrieves an inventory alternate parent.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$linked_inventory_id = "linked_inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAlternateParentGETRequestInventoryIDAlternateParentsLinkedInventoryIDGet($accept, $inventory_id, $linked_inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateParentGETRequestInventoryIDAlternateParentsLinkedInventoryIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **linked_inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAlternateParent**](../Model/InventoryAlternateParent.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAlternateParentsGETManyRequestInventoryIDAlternateParentsGet**
> \Jiwa\Model\InventoryAlternateParent[] inventoryAlternateParentsGETManyRequestInventoryIDAlternateParentsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory alternate parents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAlternateParentsGETManyRequestInventoryIDAlternateParentsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAlternateParentsGETManyRequestInventoryIDAlternateParentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAlternateParent[]**](../Model/InventoryAlternateParent.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupDELETERequestInventoryIDAttributeGroupsAttributeGroupIDDelete**
> \Jiwa\Model\Object inventoryAttributeGroupDELETERequestInventoryIDAttributeGroupsAttributeGroupIDDelete($accept, $inventory_id, $attribute_group_id, $jiwa_stateful, $template, $last_saved_date_time, $description, $attributes)

Deletes a inventory attribute group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$attribute_group_id = "attribute_group_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$template = "template_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$description = "description_example"; // string | 
$attributes = "attributes_example"; // string | 

try {
    $result = $apiInstance->inventoryAttributeGroupDELETERequestInventoryIDAttributeGroupsAttributeGroupIDDelete($accept, $inventory_id, $attribute_group_id, $jiwa_stateful, $template, $last_saved_date_time, $description, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupDELETERequestInventoryIDAttributeGroupsAttributeGroupIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **attribute_group_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **template** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **description** | **string**|  | [optional]
 **attributes** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupGETRequestInventoryIDAttributeGroupsAttributeGroupIDGet**
> \Jiwa\Model\InventoryAttributeGroup inventoryAttributeGroupGETRequestInventoryIDAttributeGroupsAttributeGroupIDGet($accept, $inventory_id, $attribute_group_id, $jiwa_stateful)

Retrieves an inventory attribute group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$attribute_group_id = "attribute_group_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeGroupGETRequestInventoryIDAttributeGroupsAttributeGroupIDGet($accept, $inventory_id, $attribute_group_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupGETRequestInventoryIDAttributeGroupsAttributeGroupIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **attribute_group_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroup**](../Model/InventoryAttributeGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupPATCHRequestInventoryIDAttributeGroupsAttributeGroupIDUpdate**
> \Jiwa\Model\InventoryAttributeGroup inventoryAttributeGroupPATCHRequestInventoryIDAttributeGroupsAttributeGroupIDUpdate($accept, $inventory_id, $attribute_group_id, $jiwa_stateful, $template, $last_saved_date_time, $description, $attributes, $body)

Updates a inventory attribute group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$attribute_group_id = "attribute_group_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$template = "template_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$description = "description_example"; // string | 
$attributes = "attributes_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeGroupPATCHRequest(); // \Jiwa\Model\InventoryAttributeGroupPATCHRequest | 

try {
    $result = $apiInstance->inventoryAttributeGroupPATCHRequestInventoryIDAttributeGroupsAttributeGroupIDUpdate($accept, $inventory_id, $attribute_group_id, $jiwa_stateful, $template, $last_saved_date_time, $description, $attributes, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupPATCHRequestInventoryIDAttributeGroupsAttributeGroupIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **attribute_group_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **template** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **description** | **string**|  | [optional]
 **attributes** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeGroupPATCHRequest**](../Model/InventoryAttributeGroupPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroup**](../Model/InventoryAttributeGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupPOSTRequestInventoryIDAttributeGroupsPost**
> \Jiwa\Model\InventoryAttributeGroup inventoryAttributeGroupPOSTRequestInventoryIDAttributeGroupsPost($accept, $inventory_id, $jiwa_stateful, $template, $last_saved_date_time, $description, $attributes, $body)

Appends an attribute group to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$template = "template_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$description = "description_example"; // string | 
$attributes = "attributes_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeGroupPOSTRequest(); // \Jiwa\Model\InventoryAttributeGroupPOSTRequest | 

try {
    $result = $apiInstance->inventoryAttributeGroupPOSTRequestInventoryIDAttributeGroupsPost($accept, $inventory_id, $jiwa_stateful, $template, $last_saved_date_time, $description, $attributes, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupPOSTRequestInventoryIDAttributeGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **template** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **description** | **string**|  | [optional]
 **attributes** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeGroupPOSTRequest**](../Model/InventoryAttributeGroupPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroup**](../Model/InventoryAttributeGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateABANDONRequestAttributeGroupTemplatesAbandonDelete**
> \Jiwa\Model\Object inventoryAttributeGroupTemplateABANDONRequestAttributeGroupTemplatesAbandonDelete($accept, $jiwa_stateful, $attribute_group_template_id)

Abandons a stateful inventory attribute group template.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory attribute group template exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateABANDONRequestAttributeGroupTemplatesAbandonDelete($accept, $jiwa_stateful, $attribute_group_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateABANDONRequestAttributeGroupTemplatesAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **attribute_group_template_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateAttributeDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDDelete**
> \Jiwa\Model\Object inventoryAttributeGroupTemplateAttributeDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDDelete($accept, $template_attribute_id, $attribute_group_template_id, $jiwa_stateful, $attribute_type, $item_no, $name)

Deletes an inventory attribute group template attribute.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$template_attribute_id = "template_attribute_id_example"; // string | 
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$attribute_type = 56; // int | 
$item_no = 56; // int | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateAttributeDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDDelete($accept, $template_attribute_id, $attribute_group_template_id, $jiwa_stateful, $attribute_type, $item_no, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateAttributeDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **template_attribute_id** | **string**|  |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **attribute_type** | **int**|  | [optional]
 **item_no** | **int**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateAttributeGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDGet**
> \Jiwa\Model\InventoryAttributeGroupTemplateAttribute inventoryAttributeGroupTemplateAttributeGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDGet($accept, $attribute_group_template_id, $template_attribute_id, $jiwa_stateful)

Retrieves an inventory attribute group template attribute.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$template_attribute_id = "template_attribute_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateAttributeGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDGet($accept, $attribute_group_template_id, $template_attribute_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateAttributeGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **attribute_group_template_id** | **string**|  |
 **template_attribute_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplateAttribute**](../Model/InventoryAttributeGroupTemplateAttribute.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateAttributePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDUpdate**
> \Jiwa\Model\InventoryAttributeGroupTemplateAttribute inventoryAttributeGroupTemplateAttributePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDUpdate($accept, $template_attribute_id, $attribute_group_template_id, $jiwa_stateful, $attribute_type, $item_no, $name, $body)

Updates an inventory attribute group template attribute.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$template_attribute_id = "template_attribute_id_example"; // string | 
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$attribute_type = 56; // int | 
$item_no = 56; // int | 
$name = "name_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeGroupTemplateAttributePATCHRequest(); // \Jiwa\Model\InventoryAttributeGroupTemplateAttributePATCHRequest | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateAttributePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDUpdate($accept, $template_attribute_id, $attribute_group_template_id, $jiwa_stateful, $attribute_type, $item_no, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateAttributePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesTemplateAttributeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **template_attribute_id** | **string**|  |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **attribute_type** | **int**|  | [optional]
 **item_no** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeGroupTemplateAttributePATCHRequest**](../Model/InventoryAttributeGroupTemplateAttributePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplateAttribute**](../Model/InventoryAttributeGroupTemplateAttribute.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateAttributePOSTRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributePost**
> \Jiwa\Model\InventoryAttributeGroupTemplateAttribute inventoryAttributeGroupTemplateAttributePOSTRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributePost($accept, $attribute_group_template_id, $jiwa_stateful, $template_attribute_id, $attribute_type, $item_no, $name, $body)

Appends an inventory attribute group template attribute to an inventory attribute group template.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$template_attribute_id = "template_attribute_id_example"; // string | 
$attribute_type = 56; // int | 
$item_no = 56; // int | 
$name = "name_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeGroupTemplateAttributePOSTRequest(); // \Jiwa\Model\InventoryAttributeGroupTemplateAttributePOSTRequest | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateAttributePOSTRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributePost($accept, $attribute_group_template_id, $jiwa_stateful, $template_attribute_id, $attribute_type, $item_no, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateAttributePOSTRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **template_attribute_id** | **string**|  | [optional]
 **attribute_type** | **int**|  | [optional]
 **item_no** | **int**|  | [optional]
 **name** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeGroupTemplateAttributePOSTRequest**](../Model/InventoryAttributeGroupTemplateAttributePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplateAttribute**](../Model/InventoryAttributeGroupTemplateAttribute.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateAttributesGETManyRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesGet**
> \Jiwa\Model\InventoryAttributeGroupTemplateAttribute[] inventoryAttributeGroupTemplateAttributesGETManyRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesGet($accept, $attribute_group_template_id, $jiwa_stateful)

Retrieves a list of inventory attribute group template attributes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateAttributesGETManyRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesGet($accept, $attribute_group_template_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateAttributesGETManyRequestAttributeGroupTemplatesAttributeGroupTemplateIDAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplateAttribute[]**](../Model/InventoryAttributeGroupTemplateAttribute.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDDelete**
> \Jiwa\Model\Object inventoryAttributeGroupTemplateDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDDelete($accept, $attribute_group_template_id, $jiwa_stateful)

Deletes an inventory attribute group template.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDDelete($accept, $attribute_group_template_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateDELETERequestAttributeGroupTemplatesAttributeGroupTemplateIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDGet**
> \Jiwa\Model\InventoryAttributeGroupTemplate inventoryAttributeGroupTemplateGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDGet($accept, $attribute_group_template_id, $jiwa_stateful)

Retrieves an inventory attribute group template.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDGet($accept, $attribute_group_template_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateGETRequestAttributeGroupTemplatesAttributeGroupTemplateIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplate**](../Model/InventoryAttributeGroupTemplate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplatePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDUpdate**
> \Jiwa\Model\InventoryAttributeGroupTemplate inventoryAttributeGroupTemplatePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDUpdate($accept, $attribute_group_template_id, $jiwa_stateful, $name, $is_enabled, $template_attributes, $body)

Updates an inventory attribute group template.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$is_enabled = true; // bool | 
$template_attributes = "template_attributes_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeGroupTemplatePATCHRequest(); // \Jiwa\Model\InventoryAttributeGroupTemplatePATCHRequest | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplatePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDUpdate($accept, $attribute_group_template_id, $jiwa_stateful, $name, $is_enabled, $template_attributes, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplatePATCHRequestAttributeGroupTemplatesAttributeGroupTemplateIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **attribute_group_template_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **template_attributes** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeGroupTemplatePATCHRequest**](../Model/InventoryAttributeGroupTemplatePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplate**](../Model/InventoryAttributeGroupTemplate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplatePOSTRequestAttributeGroupTemplatesPost**
> \Jiwa\Model\InventoryAttributeGroupTemplate inventoryAttributeGroupTemplatePOSTRequestAttributeGroupTemplatesPost($accept, $jiwa_stateful, $name, $is_enabled, $template_attributes, $body)

Creates a new inventory attribute group template.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$name = "name_example"; // string | 
$is_enabled = true; // bool | 
$template_attributes = "template_attributes_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeGroupTemplatePOSTRequest(); // \Jiwa\Model\InventoryAttributeGroupTemplatePOSTRequest | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplatePOSTRequestAttributeGroupTemplatesPost($accept, $jiwa_stateful, $name, $is_enabled, $template_attributes, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplatePOSTRequestAttributeGroupTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **name** | **string**|  | [optional]
 **is_enabled** | **bool**|  | [optional]
 **template_attributes** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeGroupTemplatePOSTRequest**](../Model/InventoryAttributeGroupTemplatePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplate**](../Model/InventoryAttributeGroupTemplate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupTemplateSAVERequestAttributeGroupTemplatesSaveGet**
> \Jiwa\Model\InventoryAttributeGroupTemplate inventoryAttributeGroupTemplateSAVERequestAttributeGroupTemplatesSaveGet($accept, $jiwa_stateful, $attribute_group_template_id)

Saves a stateful inventory attribute group template.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory attribute group template exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$attribute_group_template_id = "attribute_group_template_id_example"; // string | 

try {
    $result = $apiInstance->inventoryAttributeGroupTemplateSAVERequestAttributeGroupTemplatesSaveGet($accept, $jiwa_stateful, $attribute_group_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupTemplateSAVERequestAttributeGroupTemplatesSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **attribute_group_template_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupTemplate**](../Model/InventoryAttributeGroupTemplate.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeGroupsGETManyRequestInventoryIDAttributeGroupsGet**
> \Jiwa\Model\InventoryAttributeGroup[] inventoryAttributeGroupsGETManyRequestInventoryIDAttributeGroupsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory attribute groups.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeGroupsGETManyRequestInventoryIDAttributeGroupsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeGroupsGETManyRequestInventoryIDAttributeGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroup[]**](../Model/InventoryAttributeGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeValueGETRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDGet**
> \Jiwa\Model\InventoryAttributeGroupAttribute inventoryAttributeValueGETRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDGet($accept, $inventory_id, $attribute_group_id, $attribute_id, $jiwa_stateful)

Retrieves an inventory attribute value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$attribute_group_id = "attribute_group_id_example"; // string | 
$attribute_id = "attribute_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryAttributeValueGETRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDGet($accept, $inventory_id, $attribute_group_id, $attribute_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeValueGETRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **attribute_group_id** | **string**|  |
 **attribute_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupAttribute**](../Model/InventoryAttributeGroupAttribute.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryAttributeValuePATCHRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDUpdate**
> \Jiwa\Model\InventoryAttributeGroupAttribute inventoryAttributeValuePATCHRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDUpdate($accept, $inventory_id, $attribute_group_id, $attribute_id, $jiwa_stateful, $template_attribute, $last_saved_date_time, $contents, $body)

Updates an inventory attribute value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$attribute_group_id = "attribute_group_id_example"; // string | 
$attribute_id = "attribute_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$template_attribute = "template_attribute_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\InventoryAttributeValuePATCHRequest(); // \Jiwa\Model\InventoryAttributeValuePATCHRequest | 

try {
    $result = $apiInstance->inventoryAttributeValuePATCHRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDUpdate($accept, $inventory_id, $attribute_group_id, $attribute_id, $jiwa_stateful, $template_attribute, $last_saved_date_time, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryAttributeValuePATCHRequestInventoryIDAttributeGroupsAttributeGroupIDAttributeValuesAttributeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **attribute_group_id** | **string**|  |
 **attribute_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **template_attribute** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryAttributeValuePATCHRequest**](../Model/InventoryAttributeValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryAttributeGroupAttribute**](../Model/InventoryAttributeGroupAttribute.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryBudgetGETRequestInventoryIDBudgetsLogicalWarehouseIDGet**
> \Jiwa\Model\InventoryBudget inventoryBudgetGETRequestInventoryIDBudgetsLogicalWarehouseIDGet($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful, $month_index)

Retrieves a budget from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$month_index = 56; // int | 

try {
    $result = $apiInstance->inventoryBudgetGETRequestInventoryIDBudgetsLogicalWarehouseIDGet($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful, $month_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryBudgetGETRequestInventoryIDBudgetsLogicalWarehouseIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **logical_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **month_index** | **int**|  | [optional]

### Return type

[**\Jiwa\Model\InventoryBudget**](../Model/InventoryBudget.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryBudgetPATCHRequestInventoryIDBudgetsLogicalWarehouseIDUpdate**
> \Jiwa\Model\InventoryBudget inventoryBudgetPATCHRequestInventoryIDBudgetsLogicalWarehouseIDUpdate($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful, $month_index, $month_start_date, $month_end_date, $budget_units, $budget_value, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body)

Updates a budget.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$month_index = 56; // int | 
$month_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$month_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$budget_units = 1.2; // double | 
$budget_value = 1.2; // double | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$body = new \Jiwa\Model\InventoryBudgetPATCHRequest(); // \Jiwa\Model\InventoryBudgetPATCHRequest | 

try {
    $result = $apiInstance->inventoryBudgetPATCHRequestInventoryIDBudgetsLogicalWarehouseIDUpdate($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful, $month_index, $month_start_date, $month_end_date, $budget_units, $budget_value, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryBudgetPATCHRequestInventoryIDBudgetsLogicalWarehouseIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **logical_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **month_index** | **int**|  | [optional]
 **month_start_date** | **\DateTime**|  | [optional]
 **month_end_date** | **\DateTime**|  | [optional]
 **budget_units** | **double**|  | [optional]
 **budget_value** | **double**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryBudgetPATCHRequest**](../Model/InventoryBudgetPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryBudget**](../Model/InventoryBudget.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryBudgetsGETManyRequestInventoryIDBudgetsGet**
> \Jiwa\Model\InventoryBudget[] inventoryBudgetsGETManyRequestInventoryIDBudgetsGet($accept, $inventory_id, $jiwa_stateful, $logical_warehouse_id)

Retrieves a list of budgets for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 

try {
    $result = $apiInstance->inventoryBudgetsGETManyRequestInventoryIDBudgetsGet($accept, $inventory_id, $jiwa_stateful, $logical_warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryBudgetsGETManyRequestInventoryIDBudgetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **logical_warehouse_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\InventoryBudget[]**](../Model/InventoryBudget.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCategoriesABANDONRequestCategoriesAbandonDelete**
> \Jiwa\Model\Object inventoryCategoriesABANDONRequestCategoriesAbandonDelete($accept, $jiwa_stateful)

Abandons a stateful inventory categories collection.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory categories collection exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCategoriesABANDONRequestCategoriesAbandonDelete($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCategoriesABANDONRequestCategoriesAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCategoriesSAVERequestCategoriesSaveGet**
> \Jiwa\Model\InventoryCategory[] inventoryCategoriesSAVERequestCategoriesSaveGet($accept, $jiwa_stateful)

Saves a stateful inventory categories collection.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory categories collection exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCategoriesSAVERequestCategoriesSaveGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCategoriesSAVERequestCategoriesSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryCategory[]**](../Model/InventoryCategory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCategoryDELETERequestCategoriesCategoryIDDelete**
> \Jiwa\Model\Object inventoryCategoryDELETERequestCategoriesCategoryIDDelete($accept, $category_id, $jiwa_stateful)

Deletes an inventory category.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$category_id = "category_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCategoryDELETERequestCategoriesCategoryIDDelete($accept, $category_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCategoryDELETERequestCategoriesCategoryIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **category_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCategoryGETRequestCategoriesCategoryIDGet**
> \Jiwa\Model\InventoryCategory inventoryCategoryGETRequestCategoriesCategoryIDGet($accept, $category_id, $jiwa_stateful)

Retrieves an inventory category.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$category_id = "category_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCategoryGETRequestCategoriesCategoryIDGet($accept, $category_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCategoryGETRequestCategoriesCategoryIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **category_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryCategory**](../Model/InventoryCategory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCategoryPATCHRequestCategoriesCategoryIDUpdate**
> \Jiwa\Model\InventoryCategory inventoryCategoryPATCHRequestCategoriesCategoryIDUpdate($accept, $category_id, $jiwa_stateful, $category_no, $description, $is_default, $last_saved_date_time, $picture, $custom_field_values, $body)

Updates an inventory category.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$category_id = "category_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$category_no = 56; // int | 
$description = "description_example"; // string | 
$is_default = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$picture = "B"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\InventoryCategoryPATCHRequest(); // \Jiwa\Model\InventoryCategoryPATCHRequest | 

try {
    $result = $apiInstance->inventoryCategoryPATCHRequestCategoriesCategoryIDUpdate($accept, $category_id, $jiwa_stateful, $category_no, $description, $is_default, $last_saved_date_time, $picture, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCategoryPATCHRequestCategoriesCategoryIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **category_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **category_no** | **int**|  | [optional]
 **description** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **picture** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryCategoryPATCHRequest**](../Model/InventoryCategoryPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryCategory**](../Model/InventoryCategory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCategoryPOSTRequestCategoriesPost**
> \Jiwa\Model\InventoryCategory inventoryCategoryPOSTRequestCategoriesPost($accept, $jiwa_stateful, $category_no, $description, $is_default, $picture, $custom_field_values, $body)

Creates an inventory category.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$category_no = 56; // int | 
$description = "description_example"; // string | 
$is_default = true; // bool | 
$picture = "B"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$body = new \Jiwa\Model\InventoryCategoryPOSTRequest(); // \Jiwa\Model\InventoryCategoryPOSTRequest | 

try {
    $result = $apiInstance->inventoryCategoryPOSTRequestCategoriesPost($accept, $jiwa_stateful, $category_no, $description, $is_default, $picture, $custom_field_values, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCategoryPOSTRequestCategoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **category_no** | **int**|  | [optional]
 **description** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **picture** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryCategoryPOSTRequest**](../Model/InventoryCategoryPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryCategory**](../Model/InventoryCategory.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryClassificationABANDONRequestClassificationsAbandonDelete**
> \Jiwa\Model\Object inventoryClassificationABANDONRequestClassificationsAbandonDelete($accept, $jiwa_stateful, $rec_id)

Abandons a stateful inventory classification.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory classification exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 

try {
    $result = $apiInstance->inventoryClassificationABANDONRequestClassificationsAbandonDelete($accept, $jiwa_stateful, $rec_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryClassificationABANDONRequestClassificationsAbandonDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryClassificationDELETERequestClassificationsClassificationIDDelete**
> \Jiwa\Model\Object inventoryClassificationDELETERequestClassificationsClassificationIDDelete($accept, $classification_id, $jiwa_stateful)

Deletes an inventory classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$classification_id = "classification_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryClassificationDELETERequestClassificationsClassificationIDDelete($accept, $classification_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryClassificationDELETERequestClassificationsClassificationIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **classification_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryClassificationGETRequestClassificationsClassificationIDGet**
> \Jiwa\Model\InventoryClassification inventoryClassificationGETRequestClassificationsClassificationIDGet($accept, $classification_id, $jiwa_stateful)

Retrieves an inventory classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$classification_id = "classification_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryClassificationGETRequestClassificationsClassificationIDGet($accept, $classification_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryClassificationGETRequestClassificationsClassificationIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **classification_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryClassification**](../Model/InventoryClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryClassificationPATCHRequestClassificationsClassificationIDUpdate**
> \Jiwa\Model\InventoryClassification inventoryClassificationPATCHRequestClassificationsClassificationIDUpdate($accept, $classification_id, $jiwa_stateful, $description, $last_saved_date_time, $web_enabled, $is_default, $gst_inwards_tax_rate_id, $gst_inwards_tax_rate_description, $gst_inwards_tax_rate, $gst_outwards_tax_rate_id, $gst_outwards_tax_rate_description, $gst_outwards_tax_rate, $gst_adjustments_in_tax_rate_id, $gst_adjustments_in_tax_rate_description, $gst_adjustments_in_tax_rate, $gst_adjustments_out_tax_rate_id, $gst_adjustments_out_tax_rate_description, $gst_adjustments_out_tax_rate, $inventory_ledgers, $pricing_group_id, $pricing_group_description, $custom_fields, $body)

Updates an inventory classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$classification_id = "classification_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$web_enabled = true; // bool | 
$is_default = true; // bool | 
$gst_inwards_tax_rate_id = "gst_inwards_tax_rate_id_example"; // string | 
$gst_inwards_tax_rate_description = "gst_inwards_tax_rate_description_example"; // string | 
$gst_inwards_tax_rate = 1.2; // double | 
$gst_outwards_tax_rate_id = "gst_outwards_tax_rate_id_example"; // string | 
$gst_outwards_tax_rate_description = "gst_outwards_tax_rate_description_example"; // string | 
$gst_outwards_tax_rate = 1.2; // double | 
$gst_adjustments_in_tax_rate_id = "gst_adjustments_in_tax_rate_id_example"; // string | 
$gst_adjustments_in_tax_rate_description = "gst_adjustments_in_tax_rate_description_example"; // string | 
$gst_adjustments_in_tax_rate = 1.2; // double | 
$gst_adjustments_out_tax_rate_id = "gst_adjustments_out_tax_rate_id_example"; // string | 
$gst_adjustments_out_tax_rate_description = "gst_adjustments_out_tax_rate_description_example"; // string | 
$gst_adjustments_out_tax_rate = 1.2; // double | 
$inventory_ledgers = "inventory_ledgers_example"; // string | 
$pricing_group_id = "pricing_group_id_example"; // string | 
$pricing_group_description = "pricing_group_description_example"; // string | 
$custom_fields = "custom_fields_example"; // string | 
$body = new \Jiwa\Model\InventoryClassificationPATCHRequest(); // \Jiwa\Model\InventoryClassificationPATCHRequest | 

try {
    $result = $apiInstance->inventoryClassificationPATCHRequestClassificationsClassificationIDUpdate($accept, $classification_id, $jiwa_stateful, $description, $last_saved_date_time, $web_enabled, $is_default, $gst_inwards_tax_rate_id, $gst_inwards_tax_rate_description, $gst_inwards_tax_rate, $gst_outwards_tax_rate_id, $gst_outwards_tax_rate_description, $gst_outwards_tax_rate, $gst_adjustments_in_tax_rate_id, $gst_adjustments_in_tax_rate_description, $gst_adjustments_in_tax_rate, $gst_adjustments_out_tax_rate_id, $gst_adjustments_out_tax_rate_description, $gst_adjustments_out_tax_rate, $inventory_ledgers, $pricing_group_id, $pricing_group_description, $custom_fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryClassificationPATCHRequestClassificationsClassificationIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **classification_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **web_enabled** | **bool**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **gst_inwards_tax_rate_id** | **string**|  | [optional]
 **gst_inwards_tax_rate_description** | **string**|  | [optional]
 **gst_inwards_tax_rate** | **double**|  | [optional]
 **gst_outwards_tax_rate_id** | **string**|  | [optional]
 **gst_outwards_tax_rate_description** | **string**|  | [optional]
 **gst_outwards_tax_rate** | **double**|  | [optional]
 **gst_adjustments_in_tax_rate_id** | **string**|  | [optional]
 **gst_adjustments_in_tax_rate_description** | **string**|  | [optional]
 **gst_adjustments_in_tax_rate** | **double**|  | [optional]
 **gst_adjustments_out_tax_rate_id** | **string**|  | [optional]
 **gst_adjustments_out_tax_rate_description** | **string**|  | [optional]
 **gst_adjustments_out_tax_rate** | **double**|  | [optional]
 **inventory_ledgers** | **string**|  | [optional]
 **pricing_group_id** | **string**|  | [optional]
 **pricing_group_description** | **string**|  | [optional]
 **custom_fields** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryClassificationPATCHRequest**](../Model/InventoryClassificationPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryClassification**](../Model/InventoryClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryClassificationPOSTRequestClassificationsPost**
> \Jiwa\Model\InventoryClassification inventoryClassificationPOSTRequestClassificationsPost($accept, $jiwa_stateful, $description, $web_enabled, $is_default, $gst_inwards_tax_rate_id, $gst_inwards_tax_rate_description, $gst_inwards_tax_rate, $gst_outwards_tax_rate_id, $gst_outwards_tax_rate_description, $gst_outwards_tax_rate, $gst_adjustments_in_tax_rate_id, $gst_adjustments_in_tax_rate_description, $gst_adjustments_in_tax_rate, $gst_adjustments_out_tax_rate_id, $gst_adjustments_out_tax_rate_description, $gst_adjustments_out_tax_rate, $inventory_ledgers, $pricing_group_id, $pricing_group_description, $custom_fields, $body)

Creates an inventory classification.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$web_enabled = true; // bool | 
$is_default = true; // bool | 
$gst_inwards_tax_rate_id = "gst_inwards_tax_rate_id_example"; // string | 
$gst_inwards_tax_rate_description = "gst_inwards_tax_rate_description_example"; // string | 
$gst_inwards_tax_rate = 1.2; // double | 
$gst_outwards_tax_rate_id = "gst_outwards_tax_rate_id_example"; // string | 
$gst_outwards_tax_rate_description = "gst_outwards_tax_rate_description_example"; // string | 
$gst_outwards_tax_rate = 1.2; // double | 
$gst_adjustments_in_tax_rate_id = "gst_adjustments_in_tax_rate_id_example"; // string | 
$gst_adjustments_in_tax_rate_description = "gst_adjustments_in_tax_rate_description_example"; // string | 
$gst_adjustments_in_tax_rate = 1.2; // double | 
$gst_adjustments_out_tax_rate_id = "gst_adjustments_out_tax_rate_id_example"; // string | 
$gst_adjustments_out_tax_rate_description = "gst_adjustments_out_tax_rate_description_example"; // string | 
$gst_adjustments_out_tax_rate = 1.2; // double | 
$inventory_ledgers = "inventory_ledgers_example"; // string | 
$pricing_group_id = "pricing_group_id_example"; // string | 
$pricing_group_description = "pricing_group_description_example"; // string | 
$custom_fields = "custom_fields_example"; // string | 
$body = new \Jiwa\Model\InventoryClassificationPOSTRequest(); // \Jiwa\Model\InventoryClassificationPOSTRequest | 

try {
    $result = $apiInstance->inventoryClassificationPOSTRequestClassificationsPost($accept, $jiwa_stateful, $description, $web_enabled, $is_default, $gst_inwards_tax_rate_id, $gst_inwards_tax_rate_description, $gst_inwards_tax_rate, $gst_outwards_tax_rate_id, $gst_outwards_tax_rate_description, $gst_outwards_tax_rate, $gst_adjustments_in_tax_rate_id, $gst_adjustments_in_tax_rate_description, $gst_adjustments_in_tax_rate, $gst_adjustments_out_tax_rate_id, $gst_adjustments_out_tax_rate_description, $gst_adjustments_out_tax_rate, $inventory_ledgers, $pricing_group_id, $pricing_group_description, $custom_fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryClassificationPOSTRequestClassificationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **web_enabled** | **bool**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **gst_inwards_tax_rate_id** | **string**|  | [optional]
 **gst_inwards_tax_rate_description** | **string**|  | [optional]
 **gst_inwards_tax_rate** | **double**|  | [optional]
 **gst_outwards_tax_rate_id** | **string**|  | [optional]
 **gst_outwards_tax_rate_description** | **string**|  | [optional]
 **gst_outwards_tax_rate** | **double**|  | [optional]
 **gst_adjustments_in_tax_rate_id** | **string**|  | [optional]
 **gst_adjustments_in_tax_rate_description** | **string**|  | [optional]
 **gst_adjustments_in_tax_rate** | **double**|  | [optional]
 **gst_adjustments_out_tax_rate_id** | **string**|  | [optional]
 **gst_adjustments_out_tax_rate_description** | **string**|  | [optional]
 **gst_adjustments_out_tax_rate** | **double**|  | [optional]
 **inventory_ledgers** | **string**|  | [optional]
 **pricing_group_id** | **string**|  | [optional]
 **pricing_group_description** | **string**|  | [optional]
 **custom_fields** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryClassificationPOSTRequest**](../Model/InventoryClassificationPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryClassification**](../Model/InventoryClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryClassificationSAVERequestClassificationsSaveGet**
> \Jiwa\Model\InventoryClassification inventoryClassificationSAVERequestClassificationsSaveGet($accept, $jiwa_stateful, $rec_id)

Saves a stateful inventory classification.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory classification exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 

try {
    $result = $apiInstance->inventoryClassificationSAVERequestClassificationsSaveGet($accept, $jiwa_stateful, $rec_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryClassificationSAVERequestClassificationsSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\InventoryClassification**](../Model/InventoryClassification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryComponentDELETERequestInventoryIDComponentsComponentIDDelete**
> \Jiwa\Model\Object inventoryComponentDELETERequestInventoryIDComponentsComponentIDDelete($accept, $inventory_id, $component_id, $jiwa_stateful, $component_quantity, $item_no, $component_inventory_id, $component_inventory_part_no, $component_inventory_description)

Deletes a component.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$component_id = "component_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$component_quantity = 1.2; // double | 
$item_no = 56; // int | 
$component_inventory_id = "component_inventory_id_example"; // string | 
$component_inventory_part_no = "component_inventory_part_no_example"; // string | 
$component_inventory_description = "component_inventory_description_example"; // string | 

try {
    $result = $apiInstance->inventoryComponentDELETERequestInventoryIDComponentsComponentIDDelete($accept, $inventory_id, $component_id, $jiwa_stateful, $component_quantity, $item_no, $component_inventory_id, $component_inventory_part_no, $component_inventory_description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryComponentDELETERequestInventoryIDComponentsComponentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **component_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **component_quantity** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **component_inventory_id** | **string**|  | [optional]
 **component_inventory_part_no** | **string**|  | [optional]
 **component_inventory_description** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryComponentGETRequestInventoryIDComponentsComponentIDGet**
> \Jiwa\Model\InventoryComponent inventoryComponentGETRequestInventoryIDComponentsComponentIDGet($accept, $inventory_id, $component_id, $jiwa_stateful)

Retrieves a component from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$component_id = "component_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryComponentGETRequestInventoryIDComponentsComponentIDGet($accept, $inventory_id, $component_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryComponentGETRequestInventoryIDComponentsComponentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **component_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryComponent**](../Model/InventoryComponent.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryComponentPATCHRequestInventoryIDComponentsComponentIDUpdate**
> \Jiwa\Model\InventoryComponent inventoryComponentPATCHRequestInventoryIDComponentsComponentIDUpdate($accept, $inventory_id, $component_id, $jiwa_stateful, $component_quantity, $item_no, $component_inventory_id, $component_inventory_part_no, $component_inventory_description, $body)

Updates a component.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$component_id = "component_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$component_quantity = 1.2; // double | 
$item_no = 56; // int | 
$component_inventory_id = "component_inventory_id_example"; // string | 
$component_inventory_part_no = "component_inventory_part_no_example"; // string | 
$component_inventory_description = "component_inventory_description_example"; // string | 
$body = new \Jiwa\Model\InventoryComponentPATCHRequest(); // \Jiwa\Model\InventoryComponentPATCHRequest | 

try {
    $result = $apiInstance->inventoryComponentPATCHRequestInventoryIDComponentsComponentIDUpdate($accept, $inventory_id, $component_id, $jiwa_stateful, $component_quantity, $item_no, $component_inventory_id, $component_inventory_part_no, $component_inventory_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryComponentPATCHRequestInventoryIDComponentsComponentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **component_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **component_quantity** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **component_inventory_id** | **string**|  | [optional]
 **component_inventory_part_no** | **string**|  | [optional]
 **component_inventory_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryComponentPATCHRequest**](../Model/InventoryComponentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryComponent**](../Model/InventoryComponent.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryComponentPOSTRequestInventoryIDComponentsPost**
> \Jiwa\Model\InventoryComponent inventoryComponentPOSTRequestInventoryIDComponentsPost($accept, $inventory_id, $jiwa_stateful, $component_quantity, $item_no, $component_inventory_id, $component_inventory_part_no, $component_inventory_description, $body)

Appends a component to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$component_quantity = 1.2; // double | 
$item_no = 56; // int | 
$component_inventory_id = "component_inventory_id_example"; // string | 
$component_inventory_part_no = "component_inventory_part_no_example"; // string | 
$component_inventory_description = "component_inventory_description_example"; // string | 
$body = new \Jiwa\Model\InventoryComponentPOSTRequest(); // \Jiwa\Model\InventoryComponentPOSTRequest | 

try {
    $result = $apiInstance->inventoryComponentPOSTRequestInventoryIDComponentsPost($accept, $inventory_id, $jiwa_stateful, $component_quantity, $item_no, $component_inventory_id, $component_inventory_part_no, $component_inventory_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryComponentPOSTRequestInventoryIDComponentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **component_quantity** | **double**|  | [optional]
 **item_no** | **int**|  | [optional]
 **component_inventory_id** | **string**|  | [optional]
 **component_inventory_part_no** | **string**|  | [optional]
 **component_inventory_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryComponentPOSTRequest**](../Model/InventoryComponentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryComponent**](../Model/InventoryComponent.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryComponentsGETManyRequestInventoryIDComponentsGet**
> \Jiwa\Model\InventoryComponent[] inventoryComponentsGETManyRequestInventoryIDComponentsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of components for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryComponentsGETManyRequestInventoryIDComponentsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryComponentsGETManyRequestInventoryIDComponentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryComponent[]**](../Model/InventoryComponent.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCustomFieldValueGETRequestInventoryIDCustomFieldValuesSettingIDGet**
> \Jiwa\Model\CustomFieldValue inventoryCustomFieldValueGETRequestInventoryIDCustomFieldValuesSettingIDGet($accept, $inventory_id, $setting_id, $jiwa_stateful)

Retrieves an inventory custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCustomFieldValueGETRequestInventoryIDCustomFieldValuesSettingIDGet($accept, $inventory_id, $setting_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCustomFieldValueGETRequestInventoryIDCustomFieldValuesSettingIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCustomFieldValuePATCHRequestInventoryIDCustomFieldValuesSettingIDUpdate**
> \Jiwa\Model\CustomFieldValue inventoryCustomFieldValuePATCHRequestInventoryIDCustomFieldValuesSettingIDUpdate($accept, $inventory_id, $setting_id, $jiwa_stateful, $contents, $body)

Updates an inventory custom field value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$contents = "contents_example"; // string | 
$body = new \Jiwa\Model\InventoryCustomFieldValuePATCHRequest(); // \Jiwa\Model\InventoryCustomFieldValuePATCHRequest | 

try {
    $result = $apiInstance->inventoryCustomFieldValuePATCHRequestInventoryIDCustomFieldValuesSettingIDUpdate($accept, $inventory_id, $setting_id, $jiwa_stateful, $contents, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCustomFieldValuePATCHRequestInventoryIDCustomFieldValuesSettingIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **setting_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **contents** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryCustomFieldValuePATCHRequest**](../Model/InventoryCustomFieldValuePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCustomFieldValuesGETManyRequestInventoryIDCustomFieldValuesGet**
> \Jiwa\Model\CustomFieldValue[] inventoryCustomFieldValuesGETManyRequestInventoryIDCustomFieldValuesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of custom field values for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCustomFieldValuesGETManyRequestInventoryIDCustomFieldValuesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCustomFieldValuesGETManyRequestInventoryIDCustomFieldValuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomFieldValue[]**](../Model/CustomFieldValue.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryCustomFieldsGETManyRequestCustomFieldsGet**
> \Jiwa\Model\CustomField[] inventoryCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful)

Retrieves a list of inventory custom fields.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryCustomFieldsGETManyRequestCustomFieldsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryCustomFieldsGETManyRequestCustomFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\CustomField[]**](../Model/CustomField.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDELETERequestInventoryIDDelete**
> \Jiwa\Model\Object inventoryDELETERequestInventoryIDDelete($accept, $inventory_id, $jiwa_stateful)

Deletes an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDELETERequestInventoryIDDelete($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDELETERequestInventoryIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorClassificationPriceDELETERequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDDelete**
> \Jiwa\Model\Object inventoryDebtorClassificationPriceDELETERequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDDelete($accept, $inventory_id, $debtor_classification_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_classification_id, $debtor_classification_description, $price, $note)

Deletes a debtor classification price.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_classification_price_id = "debtor_classification_price_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_classification_id = "debtor_classification_id_example"; // string | 
$debtor_classification_description = "debtor_classification_description_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 

try {
    $result = $apiInstance->inventoryDebtorClassificationPriceDELETERequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDDelete($accept, $inventory_id, $debtor_classification_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_classification_id, $debtor_classification_description, $price, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorClassificationPriceDELETERequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_classification_price_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_classification_id** | **string**|  | [optional]
 **debtor_classification_description** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorClassificationPriceGETRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDGet**
> \Jiwa\Model\InventoryDebtorClassificationPrice inventoryDebtorClassificationPriceGETRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDGet($accept, $inventory_id, $debtor_classification_price_id, $jiwa_stateful)

Retrieves a debtor classification price from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_classification_price_id = "debtor_classification_price_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDebtorClassificationPriceGETRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDGet($accept, $inventory_id, $debtor_classification_price_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorClassificationPriceGETRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_classification_price_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorClassificationPrice**](../Model/InventoryDebtorClassificationPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorClassificationPricePATCHRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDUpdate**
> \Jiwa\Model\InventoryDebtorClassificationPrice inventoryDebtorClassificationPricePATCHRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDUpdate($accept, $inventory_id, $debtor_classification_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_classification_id, $debtor_classification_description, $price, $note, $body)

Updates a debtor classification price.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_classification_price_id = "debtor_classification_price_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_classification_id = "debtor_classification_id_example"; // string | 
$debtor_classification_description = "debtor_classification_description_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 
$body = new \Jiwa\Model\InventoryDebtorClassificationPricePATCHRequest(); // \Jiwa\Model\InventoryDebtorClassificationPricePATCHRequest | 

try {
    $result = $apiInstance->inventoryDebtorClassificationPricePATCHRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDUpdate($accept, $inventory_id, $debtor_classification_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_classification_id, $debtor_classification_description, $price, $note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorClassificationPricePATCHRequestInventoryIDDebtorClassificationPricesDebtorClassificationPriceIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_classification_price_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_classification_id** | **string**|  | [optional]
 **debtor_classification_description** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDebtorClassificationPricePATCHRequest**](../Model/InventoryDebtorClassificationPricePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorClassificationPrice**](../Model/InventoryDebtorClassificationPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorClassificationPricePOSTRequestInventoryIDDebtorClassificationPricesPost**
> \Jiwa\Model\InventoryDebtorClassificationPrice inventoryDebtorClassificationPricePOSTRequestInventoryIDDebtorClassificationPricesPost($accept, $inventory_id, $jiwa_stateful, $debtor_classification_price_id, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_classification_id, $debtor_classification_description, $price, $note, $body)

Adds a debtor classification price to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$debtor_classification_price_id = "debtor_classification_price_id_example"; // string | 
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_classification_id = "debtor_classification_id_example"; // string | 
$debtor_classification_description = "debtor_classification_description_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 
$body = new \Jiwa\Model\InventoryDebtorClassificationPricePOSTRequest(); // \Jiwa\Model\InventoryDebtorClassificationPricePOSTRequest | 

try {
    $result = $apiInstance->inventoryDebtorClassificationPricePOSTRequestInventoryIDDebtorClassificationPricesPost($accept, $inventory_id, $jiwa_stateful, $debtor_classification_price_id, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_classification_id, $debtor_classification_description, $price, $note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorClassificationPricePOSTRequestInventoryIDDebtorClassificationPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **debtor_classification_price_id** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_classification_id** | **string**|  | [optional]
 **debtor_classification_description** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDebtorClassificationPricePOSTRequest**](../Model/InventoryDebtorClassificationPricePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorClassificationPrice**](../Model/InventoryDebtorClassificationPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorClassificationPricesGETManyRequestInventoryIDDebtorClassificationPricesGet**
> \Jiwa\Model\InventoryDebtorClassificationPrice[] inventoryDebtorClassificationPricesGETManyRequestInventoryIDDebtorClassificationPricesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of debtor classification prices for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDebtorClassificationPricesGETManyRequestInventoryIDDebtorClassificationPricesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorClassificationPricesGETManyRequestInventoryIDDebtorClassificationPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorClassificationPrice[]**](../Model/InventoryDebtorClassificationPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorPriceGroupPriceDELETERequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDDelete**
> \Jiwa\Model\Object inventoryDebtorPriceGroupPriceDELETERequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDDelete($accept, $inventory_id, $debtor_price_group_inventory_specific_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_price_group_id, $debtor_price_group_description, $price, $note)

Deletes a debtor price group price.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_price_group_inventory_specific_id = "debtor_price_group_inventory_specific_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_price_group_id = "debtor_price_group_id_example"; // string | 
$debtor_price_group_description = "debtor_price_group_description_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 

try {
    $result = $apiInstance->inventoryDebtorPriceGroupPriceDELETERequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDDelete($accept, $inventory_id, $debtor_price_group_inventory_specific_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_price_group_id, $debtor_price_group_description, $price, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorPriceGroupPriceDELETERequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_price_group_inventory_specific_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_price_group_id** | **string**|  | [optional]
 **debtor_price_group_description** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorPriceGroupPriceGETRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDGet**
> \Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific inventoryDebtorPriceGroupPriceGETRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDGet($accept, $inventory_id, $debtor_price_group_inventory_specific_id, $jiwa_stateful)

Retrieves a debtor price group price from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_price_group_inventory_specific_id = "debtor_price_group_inventory_specific_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDebtorPriceGroupPriceGETRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDGet($accept, $inventory_id, $debtor_price_group_inventory_specific_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorPriceGroupPriceGETRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_price_group_inventory_specific_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific**](../Model/InventoryDebtorPriceGroupInventorySpecific.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorPriceGroupPricePATCHRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDUpdate**
> \Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific inventoryDebtorPriceGroupPricePATCHRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDUpdate($accept, $inventory_id, $debtor_price_group_inventory_specific_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_price_group_id, $debtor_price_group_description, $price, $note, $body)

Updates a debtor price group price.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_price_group_inventory_specific_id = "debtor_price_group_inventory_specific_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_price_group_id = "debtor_price_group_id_example"; // string | 
$debtor_price_group_description = "debtor_price_group_description_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 
$body = new \Jiwa\Model\InventoryDebtorPriceGroupPricePATCHRequest(); // \Jiwa\Model\InventoryDebtorPriceGroupPricePATCHRequest | 

try {
    $result = $apiInstance->inventoryDebtorPriceGroupPricePATCHRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDUpdate($accept, $inventory_id, $debtor_price_group_inventory_specific_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_price_group_id, $debtor_price_group_description, $price, $note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorPriceGroupPricePATCHRequestInventoryIDDebtorPriceGroupPricesDebtorPriceGroupInventorySpecificIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_price_group_inventory_specific_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_price_group_id** | **string**|  | [optional]
 **debtor_price_group_description** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDebtorPriceGroupPricePATCHRequest**](../Model/InventoryDebtorPriceGroupPricePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific**](../Model/InventoryDebtorPriceGroupInventorySpecific.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorPriceGroupPricePOSTRequestInventoryIDDebtorPriceGroupPricesPost**
> \Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific inventoryDebtorPriceGroupPricePOSTRequestInventoryIDDebtorPriceGroupPricesPost($accept, $inventory_id, $jiwa_stateful, $debtor_price_group_inventory_specific_id, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_price_group_id, $debtor_price_group_description, $price, $note, $body)

Adds a debtor price group price to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$debtor_price_group_inventory_specific_id = "debtor_price_group_inventory_specific_id_example"; // string | 
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_price_group_id = "debtor_price_group_id_example"; // string | 
$debtor_price_group_description = "debtor_price_group_description_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 
$body = new \Jiwa\Model\InventoryDebtorPriceGroupPricePOSTRequest(); // \Jiwa\Model\InventoryDebtorPriceGroupPricePOSTRequest | 

try {
    $result = $apiInstance->inventoryDebtorPriceGroupPricePOSTRequestInventoryIDDebtorPriceGroupPricesPost($accept, $inventory_id, $jiwa_stateful, $debtor_price_group_inventory_specific_id, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_price_group_id, $debtor_price_group_description, $price, $note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorPriceGroupPricePOSTRequestInventoryIDDebtorPriceGroupPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **debtor_price_group_inventory_specific_id** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_price_group_id** | **string**|  | [optional]
 **debtor_price_group_description** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDebtorPriceGroupPricePOSTRequest**](../Model/InventoryDebtorPriceGroupPricePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific**](../Model/InventoryDebtorPriceGroupInventorySpecific.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorPriceGroupPricesGETManyRequestInventoryIDDebtorPriceGroupPricesGet**
> \Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific[] inventoryDebtorPriceGroupPricesGETManyRequestInventoryIDDebtorPriceGroupPricesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of debtor price group prices for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDebtorPriceGroupPricesGETManyRequestInventoryIDDebtorPriceGroupPricesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorPriceGroupPricesGETManyRequestInventoryIDDebtorPriceGroupPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPriceGroupInventorySpecific[]**](../Model/InventoryDebtorPriceGroupInventorySpecific.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorSpecificPriceDELETERequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDDelete**
> \Jiwa\Model\Object inventoryDebtorSpecificPriceDELETERequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDDelete($accept, $inventory_id, $debtor_specific_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_id, $debtor_account_no, $debtor_name, $price, $note)

Deletes a debtor specific price.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_specific_price_id = "debtor_specific_price_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 

try {
    $result = $apiInstance->inventoryDebtorSpecificPriceDELETERequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDDelete($accept, $inventory_id, $debtor_specific_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_id, $debtor_account_no, $debtor_name, $price, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorSpecificPriceDELETERequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_specific_price_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorSpecificPriceGETRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDGet**
> \Jiwa\Model\InventoryDebtorPrice inventoryDebtorSpecificPriceGETRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDGet($accept, $inventory_id, $debtor_specific_price_id, $jiwa_stateful)

Retrieves a debtor specific price from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_specific_price_id = "debtor_specific_price_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDebtorSpecificPriceGETRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDGet($accept, $inventory_id, $debtor_specific_price_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorSpecificPriceGETRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_specific_price_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPrice**](../Model/InventoryDebtorPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorSpecificPricePATCHRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDUpdate**
> \Jiwa\Model\InventoryDebtorPrice inventoryDebtorSpecificPricePATCHRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDUpdate($accept, $inventory_id, $debtor_specific_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_id, $debtor_account_no, $debtor_name, $price, $note, $body)

Updates a debtor specific price.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_specific_price_id = "debtor_specific_price_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 
$body = new \Jiwa\Model\InventoryDebtorSpecificPricePATCHRequest(); // \Jiwa\Model\InventoryDebtorSpecificPricePATCHRequest | 

try {
    $result = $apiInstance->inventoryDebtorSpecificPricePATCHRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDUpdate($accept, $inventory_id, $debtor_specific_price_id, $jiwa_stateful, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_id, $debtor_account_no, $debtor_name, $price, $note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorSpecificPricePATCHRequestInventoryIDDebtorSpecificPricesDebtorSpecificPriceIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_specific_price_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDebtorSpecificPricePATCHRequest**](../Model/InventoryDebtorSpecificPricePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPrice**](../Model/InventoryDebtorPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorSpecificPricePOSTRequestInventoryIDDebtorSpecificPricesPost**
> \Jiwa\Model\InventoryDebtorPrice inventoryDebtorSpecificPricePOSTRequestInventoryIDDebtorSpecificPricesPost($accept, $inventory_id, $jiwa_stateful, $debtor_id, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_specific_price_id, $debtor_account_no, $debtor_name, $price, $note, $body)

Adds a debtor specific price to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$debtor_id = "debtor_id_example"; // string | 
$source = "source_example"; // string | 
$mode = "mode_example"; // string | 
$amount = 1.2; // double | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$use_quantity_price_break = true; // bool | 
$quantity_price_break = 1.2; // double | 
$debtor_specific_price_id = "debtor_specific_price_id_example"; // string | 
$debtor_account_no = "debtor_account_no_example"; // string | 
$debtor_name = "debtor_name_example"; // string | 
$price = 1.2; // double | 
$note = "note_example"; // string | 
$body = new \Jiwa\Model\InventoryDebtorSpecificPricePOSTRequest(); // \Jiwa\Model\InventoryDebtorSpecificPricePOSTRequest | 

try {
    $result = $apiInstance->inventoryDebtorSpecificPricePOSTRequestInventoryIDDebtorSpecificPricesPost($accept, $inventory_id, $jiwa_stateful, $debtor_id, $source, $mode, $amount, $start_date, $end_date, $use_quantity_price_break, $quantity_price_break, $debtor_specific_price_id, $debtor_account_no, $debtor_name, $price, $note, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorSpecificPricePOSTRequestInventoryIDDebtorSpecificPricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **debtor_id** | **string**|  | [optional]
 **source** | **string**|  | [optional]
 **mode** | **string**|  | [optional]
 **amount** | **double**|  | [optional]
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **use_quantity_price_break** | **bool**|  | [optional]
 **quantity_price_break** | **double**|  | [optional]
 **debtor_specific_price_id** | **string**|  | [optional]
 **debtor_account_no** | **string**|  | [optional]
 **debtor_name** | **string**|  | [optional]
 **price** | **double**|  | [optional]
 **note** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDebtorSpecificPricePOSTRequest**](../Model/InventoryDebtorSpecificPricePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPrice**](../Model/InventoryDebtorPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDebtorSpecificPricesGETManyRequestInventoryIDDebtorSpecificPricesGet**
> \Jiwa\Model\InventoryDebtorPrice[] inventoryDebtorSpecificPricesGETManyRequestInventoryIDDebtorSpecificPricesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of debtor specific prices for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDebtorSpecificPricesGETManyRequestInventoryIDDebtorSpecificPricesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDebtorSpecificPricesGETManyRequestInventoryIDDebtorSpecificPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryDebtorPrice[]**](../Model/InventoryDebtorPrice.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentDELETERequestInventoryIDDocumentsDocumentIDDelete**
> \Jiwa\Model\Object inventoryDocumentDELETERequestInventoryIDDocumentsDocumentIDDelete($accept, $inventory_id, $document_id, $jiwa_stateful)

Deletes an inventory document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDocumentDELETERequestInventoryIDDocumentsDocumentIDDelete($accept, $inventory_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentDELETERequestInventoryIDDocumentsDocumentIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentGETRequestInventoryIDDocumentsDocumentIDGet**
> \Jiwa\Model\Document inventoryDocumentGETRequestInventoryIDDocumentsDocumentIDGet($accept, $inventory_id, $document_id, $jiwa_stateful)

Retrieves an inventory document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDocumentGETRequestInventoryIDDocumentsDocumentIDGet($accept, $inventory_id, $document_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentGETRequestInventoryIDDocumentsDocumentIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentPATCHRequestInventoryIDDocumentsDocumentIDUpdate**
> \Jiwa\Model\Document inventoryDocumentPATCHRequestInventoryIDDocumentsDocumentIDUpdate($accept, $inventory_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Updates an inventory document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$document_id = "document_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$document_type = "document_type_example"; // string | 
$file_id = "file_id_example"; // string | 
$physical_file_name = "physical_file_name_example"; // string | 
$full_physical_file_name = "full_physical_file_name_example"; // string | 
$description = "description_example"; // string | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$file_binary = "B"; // string | 
$body = new \Jiwa\Model\InventoryDocumentPATCHRequest(); // \Jiwa\Model\InventoryDocumentPATCHRequest | 

try {
    $result = $apiInstance->inventoryDocumentPATCHRequestInventoryIDDocumentsDocumentIDUpdate($accept, $inventory_id, $document_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentPATCHRequestInventoryIDDocumentsDocumentIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **document_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **document_type** | **string**|  | [optional]
 **file_id** | **string**|  | [optional]
 **physical_file_name** | **string**|  | [optional]
 **full_physical_file_name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **file_binary** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDocumentPATCHRequest**](../Model/InventoryDocumentPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentPOSTRequestInventoryIDDocumentsPost**
> \Jiwa\Model\Document inventoryDocumentPOSTRequestInventoryIDDocumentsPost($accept, $inventory_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body)

Appends a document to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$document_type = "document_type_example"; // string | 
$file_id = "file_id_example"; // string | 
$physical_file_name = "physical_file_name_example"; // string | 
$full_physical_file_name = "full_physical_file_name_example"; // string | 
$description = "description_example"; // string | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$file_binary = "B"; // string | 
$body = new \Jiwa\Model\InventoryDocumentPOSTRequest(); // \Jiwa\Model\InventoryDocumentPOSTRequest | 

try {
    $result = $apiInstance->inventoryDocumentPOSTRequestInventoryIDDocumentsPost($accept, $inventory_id, $jiwa_stateful, $document_type, $file_id, $physical_file_name, $full_physical_file_name, $description, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $file_binary, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentPOSTRequestInventoryIDDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **document_type** | **string**|  | [optional]
 **file_id** | **string**|  | [optional]
 **physical_file_name** | **string**|  | [optional]
 **full_physical_file_name** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **file_binary** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDocumentPOSTRequest**](../Model/InventoryDocumentPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Document**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete**
> \Jiwa\Model\Object inventoryDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful)

Deletes an inventory document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentTypeDELETERequestDocumentTypesDocumentTypeIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **document_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet**
> \Jiwa\Model\DocumentType inventoryDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful)

Retrieves an inventory document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet($accept, $document_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentTypeGETRequestDocumentTypesDocumentTypeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **document_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate**
> \Jiwa\Model\DocumentType inventoryDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates an inventory document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$document_type_id = "document_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\InventoryDocumentTypePATCHRequest(); // \Jiwa\Model\InventoryDocumentTypePATCHRequest | 

try {
    $result = $apiInstance->inventoryDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate($accept, $document_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentTypePATCHRequestDocumentTypesDocumentTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **document_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDocumentTypePATCHRequest**](../Model/InventoryDocumentTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentTypePOSTRequestDocumentTypesPost**
> \Jiwa\Model\DocumentType inventoryDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new inventory document type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\InventoryDocumentTypePOSTRequest(); // \Jiwa\Model\InventoryDocumentTypePOSTRequest | 

try {
    $result = $apiInstance->inventoryDocumentTypePOSTRequestDocumentTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentTypePOSTRequestDocumentTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryDocumentTypePOSTRequest**](../Model/InventoryDocumentTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\DocumentType**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentTypesGETManyRequestDocumentTypesGet**
> \Jiwa\Model\DocumentType[] inventoryDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful)

Retrieves a list of inventory document types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDocumentTypesGETManyRequestDocumentTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentTypesGETManyRequestDocumentTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\DocumentType[]**](../Model/DocumentType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryDocumentsGETManyRequestInventoryIDDocumentsGet**
> \Jiwa\Model\Document[] inventoryDocumentsGETManyRequestInventoryIDDocumentsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryDocumentsGETManyRequestInventoryIDDocumentsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryDocumentsGETManyRequestInventoryIDDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Document[]**](../Model/Document.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryGETRequestInventoryIDGet**
> \Jiwa\Model\InventoryItem inventoryGETRequestInventoryIDGet($accept, $inventory_id, $jiwa_stateful)

Retrieves an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryGETRequestInventoryIDGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGETRequestInventoryIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLedgerGETRequestInventoryIDLedgersNameGet**
> \Jiwa\Model\InventoryLedger inventoryLedgerGETRequestInventoryIDLedgersNameGet($accept, $inventory_id, $name, $jiwa_stateful)

Retrieves an inventory ledger.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$name = "name_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryLedgerGETRequestInventoryIDLedgersNameGet($accept, $inventory_id, $name, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryLedgerGETRequestInventoryIDLedgersNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **name** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryLedger**](../Model/InventoryLedger.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLedgerPATCHRequestInventoryIDLedgersNameUpdate**
> \Jiwa\Model\InventoryLedger inventoryLedgerPATCHRequestInventoryIDLedgersNameUpdate($accept, $inventory_id, $name, $jiwa_stateful, $ledger_id, $ledger_account_id, $ledger_account_no, $ledger_account_description, $body)

Updates a inventory ledger.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$name = "name_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$ledger_id = "ledger_id_example"; // string | 
$ledger_account_id = "ledger_account_id_example"; // string | 
$ledger_account_no = "ledger_account_no_example"; // string | 
$ledger_account_description = "ledger_account_description_example"; // string | 
$body = new \Jiwa\Model\InventoryLedgerPATCHRequest(); // \Jiwa\Model\InventoryLedgerPATCHRequest | 

try {
    $result = $apiInstance->inventoryLedgerPATCHRequestInventoryIDLedgersNameUpdate($accept, $inventory_id, $name, $jiwa_stateful, $ledger_id, $ledger_account_id, $ledger_account_no, $ledger_account_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryLedgerPATCHRequestInventoryIDLedgersNameUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **name** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **ledger_id** | **string**|  | [optional]
 **ledger_account_id** | **string**|  | [optional]
 **ledger_account_no** | **string**|  | [optional]
 **ledger_account_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryLedgerPATCHRequest**](../Model/InventoryLedgerPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryLedger**](../Model/InventoryLedger.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryLedgersGETManyRequestInventoryIDLedgersGet**
> \Jiwa\Model\InventoryLedger[] inventoryLedgersGETManyRequestInventoryIDLedgersGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory ledgers.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryLedgersGETManyRequestInventoryIDLedgersGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryLedgersGETManyRequestInventoryIDLedgersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryLedger[]**](../Model/InventoryLedger.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteDELETERequestInventoryIDNotesNoteIDDelete**
> \Jiwa\Model\Object inventoryNoteDELETERequestInventoryIDNotesNoteIDDelete($accept, $inventory_id, $note_id, $jiwa_stateful)

Deletes an inventory note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryNoteDELETERequestInventoryIDNotesNoteIDDelete($accept, $inventory_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteDELETERequestInventoryIDNotesNoteIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteGETRequestInventoryIDNotesNoteIDGet**
> \Jiwa\Model\Note inventoryNoteGETRequestInventoryIDNotesNoteIDGet($accept, $inventory_id, $note_id, $jiwa_stateful)

Retrieves an inventory note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryNoteGETRequestInventoryIDNotesNoteIDGet($accept, $inventory_id, $note_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteGETRequestInventoryIDNotesNoteIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNotePATCHRequestInventoryIDNotesNoteIDUpdate**
> \Jiwa\Model\Note inventoryNotePATCHRequestInventoryIDNotesNoteIDUpdate($accept, $inventory_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Updates an inventory note.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$note_id = "note_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$note_type = "note_type_example"; // string | 
$line_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$note_text = "note_text_example"; // string | 
$body = new \Jiwa\Model\InventoryNotePATCHRequest(); // \Jiwa\Model\InventoryNotePATCHRequest | 

try {
    $result = $apiInstance->inventoryNotePATCHRequestInventoryIDNotesNoteIDUpdate($accept, $inventory_id, $note_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNotePATCHRequestInventoryIDNotesNoteIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **note_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **note_type** | **string**|  | [optional]
 **line_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **note_text** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryNotePATCHRequest**](../Model/InventoryNotePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNotePOSTRequestInventoryIDNotesPost**
> \Jiwa\Model\Note inventoryNotePOSTRequestInventoryIDNotesPost($accept, $inventory_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body)

Appends a note to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$note_type = "note_type_example"; // string | 
$line_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$last_modified_by_staff_id = "last_modified_by_staff_id_example"; // string | 
$last_modified_by_staff_username = "last_modified_by_staff_username_example"; // string | 
$last_modified_by_staff_title = "last_modified_by_staff_title_example"; // string | 
$last_modified_by_staff_first_name = "last_modified_by_staff_first_name_example"; // string | 
$last_modified_by_staff_surname = "last_modified_by_staff_surname_example"; // string | 
$note_text = "note_text_example"; // string | 
$body = new \Jiwa\Model\InventoryNotePOSTRequest(); // \Jiwa\Model\InventoryNotePOSTRequest | 

try {
    $result = $apiInstance->inventoryNotePOSTRequestInventoryIDNotesPost($accept, $inventory_id, $jiwa_stateful, $note_type, $line_no, $last_saved_date_time, $last_modified_by_staff_id, $last_modified_by_staff_username, $last_modified_by_staff_title, $last_modified_by_staff_first_name, $last_modified_by_staff_surname, $note_text, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNotePOSTRequestInventoryIDNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **note_type** | **string**|  | [optional]
 **line_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **last_modified_by_staff_id** | **string**|  | [optional]
 **last_modified_by_staff_username** | **string**|  | [optional]
 **last_modified_by_staff_title** | **string**|  | [optional]
 **last_modified_by_staff_first_name** | **string**|  | [optional]
 **last_modified_by_staff_surname** | **string**|  | [optional]
 **note_text** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryNotePOSTRequest**](../Model/InventoryNotePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\Note**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteTypeDELETERequestNoteTypesNoteTypeIDDelete**
> \Jiwa\Model\Object inventoryNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful)

Deletes an inventory note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryNoteTypeDELETERequestNoteTypesNoteTypeIDDelete($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteTypeDELETERequestNoteTypesNoteTypeIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **note_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteTypeGETRequestNoteTypesNoteTypeIDGet**
> \Jiwa\Model\NoteType inventoryNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful)

Retrieves an inventory note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryNoteTypeGETRequestNoteTypesNoteTypeIDGet($accept, $note_type_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteTypeGETRequestNoteTypesNoteTypeIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **note_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate**
> \Jiwa\Model\NoteType inventoryNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body)

Updates an inventory note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$note_type_id = "note_type_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\InventoryNoteTypePATCHRequest(); // \Jiwa\Model\InventoryNoteTypePATCHRequest | 

try {
    $result = $apiInstance->inventoryNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate($accept, $note_type_id, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteTypePATCHRequestNoteTypesNoteTypeIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **note_type_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryNoteTypePATCHRequest**](../Model/InventoryNoteTypePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteTypePOSTRequestNoteTypesPost**
> \Jiwa\Model\NoteType inventoryNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body)

Creates a new inventory note type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$default_type = true; // bool | 
$item_no = 56; // int | 
$body = new \Jiwa\Model\InventoryNoteTypePOSTRequest(); // \Jiwa\Model\InventoryNoteTypePOSTRequest | 

try {
    $result = $apiInstance->inventoryNoteTypePOSTRequestNoteTypesPost($accept, $jiwa_stateful, $description, $default_type, $item_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteTypePOSTRequestNoteTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **default_type** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryNoteTypePOSTRequest**](../Model/InventoryNoteTypePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\NoteType**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNoteTypesGETManyRequestNoteTypesGet**
> \Jiwa\Model\NoteType[] inventoryNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful)

Retrieves a list of inventory note types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryNoteTypesGETManyRequestNoteTypesGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNoteTypesGETManyRequestNoteTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\NoteType[]**](../Model/NoteType.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryNotesGETManyRequestInventoryIDNotesGet**
> \Jiwa\Model\Note[] inventoryNotesGETManyRequestInventoryIDNotesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory notes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryNotesGETManyRequestInventoryIDNotesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryNotesGETManyRequestInventoryIDNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Note[]**](../Model/Note.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOrderLevelGETRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoGet**
> \Jiwa\Model\InventoryOrderLevel inventoryOrderLevelGETRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoGet($accept, $logical_warehouse_id, $inventory_id, $period_no, $jiwa_stateful)

Retrieves a order level from an inventory item for a particular logical warehouse.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$inventory_id = "inventory_id_example"; // string | 
$period_no = 56; // int | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryOrderLevelGETRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoGet($accept, $logical_warehouse_id, $inventory_id, $period_no, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOrderLevelGETRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **logical_warehouse_id** | **string**|  |
 **inventory_id** | **string**|  |
 **period_no** | **int**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryOrderLevel**](../Model/InventoryOrderLevel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOrderLevelPATCHRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoUpdate**
> \Jiwa\Model\InventoryOrderLevel inventoryOrderLevelPATCHRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoUpdate($accept, $logical_warehouse_id, $inventory_id, $period_no, $jiwa_stateful, $month_start_date, $month_end_date, $min_soh_units, $min_safety_soh_units, $max_safety_soh_units, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body)

Updates an order level.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$inventory_id = "inventory_id_example"; // string | 
$period_no = 56; // int | 
$jiwa_stateful = true; // bool | Stateful indicator
$month_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$month_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$min_soh_units = 1.2; // double | 
$min_safety_soh_units = 1.2; // double | 
$max_safety_soh_units = 1.2; // double | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$body = new \Jiwa\Model\InventoryOrderLevelPATCHRequest(); // \Jiwa\Model\InventoryOrderLevelPATCHRequest | 

try {
    $result = $apiInstance->inventoryOrderLevelPATCHRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoUpdate($accept, $logical_warehouse_id, $inventory_id, $period_no, $jiwa_stateful, $month_start_date, $month_end_date, $min_soh_units, $min_safety_soh_units, $max_safety_soh_units, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOrderLevelPATCHRequestInventoryIDOrderLevelsLogicalWarehouseIDPeriodsPeriodNoUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **logical_warehouse_id** | **string**|  |
 **inventory_id** | **string**|  |
 **period_no** | **int**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **month_start_date** | **\DateTime**|  | [optional]
 **month_end_date** | **\DateTime**|  | [optional]
 **min_soh_units** | **double**|  | [optional]
 **min_safety_soh_units** | **double**|  | [optional]
 **max_safety_soh_units** | **double**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryOrderLevelPATCHRequest**](../Model/InventoryOrderLevelPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryOrderLevel**](../Model/InventoryOrderLevel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOrderLevelsGETManyRequestInventoryIDOrderLevelsGet**
> \Jiwa\Model\InventoryOrderLevel[] inventoryOrderLevelsGETManyRequestInventoryIDOrderLevelsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of order levels for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryOrderLevelsGETManyRequestInventoryIDOrderLevelsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOrderLevelsGETManyRequestInventoryIDOrderLevelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryOrderLevel[]**](../Model/InventoryOrderLevel.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOtherDescriptionDELETERequestInventoryIDOtherDescriptionsOtherDescriptionIDDelete**
> \Jiwa\Model\Object inventoryOtherDescriptionDELETERequestInventoryIDOtherDescriptionsOtherDescriptionIDDelete($accept, $inventory_id, $other_description_id, $jiwa_stateful, $description)

Deletes an inventory other description.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$other_description_id = "other_description_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 

try {
    $result = $apiInstance->inventoryOtherDescriptionDELETERequestInventoryIDOtherDescriptionsOtherDescriptionIDDelete($accept, $inventory_id, $other_description_id, $jiwa_stateful, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOtherDescriptionDELETERequestInventoryIDOtherDescriptionsOtherDescriptionIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **other_description_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOtherDescriptionGETRequestInventoryIDOtherDescriptionsOtherDescriptionIDGet**
> \Jiwa\Model\InventoryOtherDescription inventoryOtherDescriptionGETRequestInventoryIDOtherDescriptionsOtherDescriptionIDGet($accept, $inventory_id, $other_description_id, $jiwa_stateful)

Retrieves an inventory other description.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$other_description_id = "other_description_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryOtherDescriptionGETRequestInventoryIDOtherDescriptionsOtherDescriptionIDGet($accept, $inventory_id, $other_description_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOtherDescriptionGETRequestInventoryIDOtherDescriptionsOtherDescriptionIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **other_description_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryOtherDescription**](../Model/InventoryOtherDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOtherDescriptionPATCHRequestInventoryIDOtherDescriptionsOtherDescriptionIDUpdate**
> \Jiwa\Model\InventoryOtherDescription inventoryOtherDescriptionPATCHRequestInventoryIDOtherDescriptionsOtherDescriptionIDUpdate($accept, $inventory_id, $other_description_id, $jiwa_stateful, $description, $body)

Updates an inventory other description.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$other_description_id = "other_description_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$body = new \Jiwa\Model\InventoryOtherDescriptionPATCHRequest(); // \Jiwa\Model\InventoryOtherDescriptionPATCHRequest | 

try {
    $result = $apiInstance->inventoryOtherDescriptionPATCHRequestInventoryIDOtherDescriptionsOtherDescriptionIDUpdate($accept, $inventory_id, $other_description_id, $jiwa_stateful, $description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOtherDescriptionPATCHRequestInventoryIDOtherDescriptionsOtherDescriptionIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **other_description_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryOtherDescriptionPATCHRequest**](../Model/InventoryOtherDescriptionPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryOtherDescription**](../Model/InventoryOtherDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOtherDescriptionPOSTRequestInventoryIDOtherDescriptionsPost**
> \Jiwa\Model\InventoryOtherDescription inventoryOtherDescriptionPOSTRequestInventoryIDOtherDescriptionsPost($accept, $inventory_id, $jiwa_stateful, $description, $body)

Appends an other description to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$body = new \Jiwa\Model\InventoryOtherDescriptionPOSTRequest(); // \Jiwa\Model\InventoryOtherDescriptionPOSTRequest | 

try {
    $result = $apiInstance->inventoryOtherDescriptionPOSTRequestInventoryIDOtherDescriptionsPost($accept, $inventory_id, $jiwa_stateful, $description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOtherDescriptionPOSTRequestInventoryIDOtherDescriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryOtherDescriptionPOSTRequest**](../Model/InventoryOtherDescriptionPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryOtherDescription**](../Model/InventoryOtherDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryOtherDescriptionsGETManyRequestInventoryIDOtherDescriptionsGet**
> \Jiwa\Model\InventoryOtherDescription[] inventoryOtherDescriptionsGETManyRequestInventoryIDOtherDescriptionsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory other descriptions.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryOtherDescriptionsGETManyRequestInventoryIDOtherDescriptionsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryOtherDescriptionsGETManyRequestInventoryIDOtherDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryOtherDescription[]**](../Model/InventoryOtherDescription.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPATCHRequestInventoryIDUpdate**
> \Jiwa\Model\InventoryItem inventoryPATCHRequestInventoryIDUpdate($accept, $inventory_id, $jiwa_stateful, $physical_item, $ship_with_physical_item, $discountable, $last_saved_date_time, $direct_tax, $status, $default_price, $rrp_price, $l_cost, $s_cost, $decimal_places, $minimum_gp, $weight, $cubic, $use_serial_no, $back_orderable, $sales_man_cost, $secondary_cost, $bom_object, $use_expiry_date, $use_standard_cost, $standard_cost, $web_enabled, $sell_price_inc_tax, $style, $colour, $size, $part_encode_order, $part_no, $picture, $description, $unit_measure, $classification, $category1, $category2, $category3, $category4, $category5, $aux1, $aux2, $aux3, $aux4, $aux5, $gst_inwards_id, $gst_inwards_description, $gst_inwards_rate, $gst_outwards_id, $gst_outwards_description, $gst_outwards_rate, $gst_adjustments_inid, $gst_adjustments_in_description, $gst_adjustments_in_rate, $gst_adjustments_outid, $gst_adjustments_out_description, $gst_adjustments_out_rate, $matrix_description, $pricing_group_id, $pricing_group_description, $inventory_ledgers, $notes, $documents, $custom_field_values, $regions, $debtor_prices, $debtor_class_prices, $debtor_price_group_inventory_specific_prices, $alternate_children, $alternate_parents, $components, $warehouse_so_hs, $debtor_part_numbers, $group_memberships, $other_descriptions, $order_levels, $budgets, $logical_orders, $default_bin_locations, $product_availabilities, $selling_prices, $up_sells, $attribute_groups, $unit_of_measures, $body)

Updates an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$physical_item = true; // bool | 
$ship_with_physical_item = true; // bool | 
$discountable = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$direct_tax = 1.2; // double | 
$status = "status_example"; // string | 
$default_price = 1.2; // double | 
$rrp_price = 1.2; // double | 
$l_cost = 1.2; // double | 
$s_cost = 1.2; // double | 
$decimal_places = 56; // int | 
$minimum_gp = 1.2; // double | 
$weight = 1.2; // double | 
$cubic = 1.2; // double | 
$use_serial_no = true; // bool | 
$back_orderable = true; // bool | 
$sales_man_cost = 1.2; // double | 
$secondary_cost = 1.2; // double | 
$bom_object = "bom_object_example"; // string | 
$use_expiry_date = true; // bool | 
$use_standard_cost = true; // bool | 
$standard_cost = 1.2; // double | 
$web_enabled = true; // bool | 
$sell_price_inc_tax = true; // bool | 
$style = "style_example"; // string | 
$colour = "colour_example"; // string | 
$size = "size_example"; // string | 
$part_encode_order = 56; // int | 
$part_no = "part_no_example"; // string | 
$picture = "B"; // string | 
$description = "description_example"; // string | 
$unit_measure = "unit_measure_example"; // string | 
$classification = "classification_example"; // string | 
$category1 = "category1_example"; // string | 
$category2 = "category2_example"; // string | 
$category3 = "category3_example"; // string | 
$category4 = "category4_example"; // string | 
$category5 = "category5_example"; // string | 
$aux1 = "aux1_example"; // string | 
$aux2 = "aux2_example"; // string | 
$aux3 = "aux3_example"; // string | 
$aux4 = "aux4_example"; // string | 
$aux5 = "aux5_example"; // string | 
$gst_inwards_id = "gst_inwards_id_example"; // string | 
$gst_inwards_description = "gst_inwards_description_example"; // string | 
$gst_inwards_rate = 1.2; // double | 
$gst_outwards_id = "gst_outwards_id_example"; // string | 
$gst_outwards_description = "gst_outwards_description_example"; // string | 
$gst_outwards_rate = 1.2; // double | 
$gst_adjustments_inid = "gst_adjustments_inid_example"; // string | 
$gst_adjustments_in_description = "gst_adjustments_in_description_example"; // string | 
$gst_adjustments_in_rate = 1.2; // double | 
$gst_adjustments_outid = "gst_adjustments_outid_example"; // string | 
$gst_adjustments_out_description = "gst_adjustments_out_description_example"; // string | 
$gst_adjustments_out_rate = 1.2; // double | 
$matrix_description = "matrix_description_example"; // string | 
$pricing_group_id = "pricing_group_id_example"; // string | 
$pricing_group_description = "pricing_group_description_example"; // string | 
$inventory_ledgers = "inventory_ledgers_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$regions = "regions_example"; // string | 
$debtor_prices = "debtor_prices_example"; // string | 
$debtor_class_prices = "debtor_class_prices_example"; // string | 
$debtor_price_group_inventory_specific_prices = "debtor_price_group_inventory_specific_prices_example"; // string | 
$alternate_children = "alternate_children_example"; // string | 
$alternate_parents = "alternate_parents_example"; // string | 
$components = "components_example"; // string | 
$warehouse_so_hs = "warehouse_so_hs_example"; // string | 
$debtor_part_numbers = "debtor_part_numbers_example"; // string | 
$group_memberships = "group_memberships_example"; // string | 
$other_descriptions = "other_descriptions_example"; // string | 
$order_levels = "order_levels_example"; // string | 
$budgets = "budgets_example"; // string | 
$logical_orders = "logical_orders_example"; // string | 
$default_bin_locations = "default_bin_locations_example"; // string | 
$product_availabilities = "product_availabilities_example"; // string | 
$selling_prices = "selling_prices_example"; // string | 
$up_sells = "up_sells_example"; // string | 
$attribute_groups = "attribute_groups_example"; // string | 
$unit_of_measures = "unit_of_measures_example"; // string | 
$body = new \Jiwa\Model\InventoryPATCHRequest(); // \Jiwa\Model\InventoryPATCHRequest | 

try {
    $result = $apiInstance->inventoryPATCHRequestInventoryIDUpdate($accept, $inventory_id, $jiwa_stateful, $physical_item, $ship_with_physical_item, $discountable, $last_saved_date_time, $direct_tax, $status, $default_price, $rrp_price, $l_cost, $s_cost, $decimal_places, $minimum_gp, $weight, $cubic, $use_serial_no, $back_orderable, $sales_man_cost, $secondary_cost, $bom_object, $use_expiry_date, $use_standard_cost, $standard_cost, $web_enabled, $sell_price_inc_tax, $style, $colour, $size, $part_encode_order, $part_no, $picture, $description, $unit_measure, $classification, $category1, $category2, $category3, $category4, $category5, $aux1, $aux2, $aux3, $aux4, $aux5, $gst_inwards_id, $gst_inwards_description, $gst_inwards_rate, $gst_outwards_id, $gst_outwards_description, $gst_outwards_rate, $gst_adjustments_inid, $gst_adjustments_in_description, $gst_adjustments_in_rate, $gst_adjustments_outid, $gst_adjustments_out_description, $gst_adjustments_out_rate, $matrix_description, $pricing_group_id, $pricing_group_description, $inventory_ledgers, $notes, $documents, $custom_field_values, $regions, $debtor_prices, $debtor_class_prices, $debtor_price_group_inventory_specific_prices, $alternate_children, $alternate_parents, $components, $warehouse_so_hs, $debtor_part_numbers, $group_memberships, $other_descriptions, $order_levels, $budgets, $logical_orders, $default_bin_locations, $product_availabilities, $selling_prices, $up_sells, $attribute_groups, $unit_of_measures, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPATCHRequestInventoryIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **physical_item** | **bool**|  | [optional]
 **ship_with_physical_item** | **bool**|  | [optional]
 **discountable** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **direct_tax** | **double**|  | [optional]
 **status** | **string**|  | [optional]
 **default_price** | **double**|  | [optional]
 **rrp_price** | **double**|  | [optional]
 **l_cost** | **double**|  | [optional]
 **s_cost** | **double**|  | [optional]
 **decimal_places** | **int**|  | [optional]
 **minimum_gp** | **double**|  | [optional]
 **weight** | **double**|  | [optional]
 **cubic** | **double**|  | [optional]
 **use_serial_no** | **bool**|  | [optional]
 **back_orderable** | **bool**|  | [optional]
 **sales_man_cost** | **double**|  | [optional]
 **secondary_cost** | **double**|  | [optional]
 **bom_object** | **string**|  | [optional]
 **use_expiry_date** | **bool**|  | [optional]
 **use_standard_cost** | **bool**|  | [optional]
 **standard_cost** | **double**|  | [optional]
 **web_enabled** | **bool**|  | [optional]
 **sell_price_inc_tax** | **bool**|  | [optional]
 **style** | **string**|  | [optional]
 **colour** | **string**|  | [optional]
 **size** | **string**|  | [optional]
 **part_encode_order** | **int**|  | [optional]
 **part_no** | **string**|  | [optional]
 **picture** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **unit_measure** | **string**|  | [optional]
 **classification** | **string**|  | [optional]
 **category1** | **string**|  | [optional]
 **category2** | **string**|  | [optional]
 **category3** | **string**|  | [optional]
 **category4** | **string**|  | [optional]
 **category5** | **string**|  | [optional]
 **aux1** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **aux3** | **string**|  | [optional]
 **aux4** | **string**|  | [optional]
 **aux5** | **string**|  | [optional]
 **gst_inwards_id** | **string**|  | [optional]
 **gst_inwards_description** | **string**|  | [optional]
 **gst_inwards_rate** | **double**|  | [optional]
 **gst_outwards_id** | **string**|  | [optional]
 **gst_outwards_description** | **string**|  | [optional]
 **gst_outwards_rate** | **double**|  | [optional]
 **gst_adjustments_inid** | **string**|  | [optional]
 **gst_adjustments_in_description** | **string**|  | [optional]
 **gst_adjustments_in_rate** | **double**|  | [optional]
 **gst_adjustments_outid** | **string**|  | [optional]
 **gst_adjustments_out_description** | **string**|  | [optional]
 **gst_adjustments_out_rate** | **double**|  | [optional]
 **matrix_description** | **string**|  | [optional]
 **pricing_group_id** | **string**|  | [optional]
 **pricing_group_description** | **string**|  | [optional]
 **inventory_ledgers** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **regions** | **string**|  | [optional]
 **debtor_prices** | **string**|  | [optional]
 **debtor_class_prices** | **string**|  | [optional]
 **debtor_price_group_inventory_specific_prices** | **string**|  | [optional]
 **alternate_children** | **string**|  | [optional]
 **alternate_parents** | **string**|  | [optional]
 **components** | **string**|  | [optional]
 **warehouse_so_hs** | **string**|  | [optional]
 **debtor_part_numbers** | **string**|  | [optional]
 **group_memberships** | **string**|  | [optional]
 **other_descriptions** | **string**|  | [optional]
 **order_levels** | **string**|  | [optional]
 **budgets** | **string**|  | [optional]
 **logical_orders** | **string**|  | [optional]
 **default_bin_locations** | **string**|  | [optional]
 **product_availabilities** | **string**|  | [optional]
 **selling_prices** | **string**|  | [optional]
 **up_sells** | **string**|  | [optional]
 **attribute_groups** | **string**|  | [optional]
 **unit_of_measures** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryPATCHRequest**](../Model/InventoryPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPOSTRequestPost**
> \Jiwa\Model\InventoryItem inventoryPOSTRequestPost($accept, $jiwa_stateful, $physical_item, $ship_with_physical_item, $discountable, $direct_tax, $status, $default_price, $rrp_price, $l_cost, $s_cost, $decimal_places, $minimum_gp, $weight, $cubic, $use_serial_no, $back_orderable, $sales_man_cost, $secondary_cost, $bom_object, $use_expiry_date, $use_standard_cost, $standard_cost, $web_enabled, $sell_price_inc_tax, $style, $colour, $size, $part_encode_order, $part_no, $picture, $description, $unit_measure, $classification, $category1, $category2, $category3, $category4, $category5, $aux1, $aux2, $aux3, $aux4, $aux5, $gst_inwards_id, $gst_inwards_description, $gst_inwards_rate, $gst_outwards_id, $gst_outwards_description, $gst_outwards_rate, $gst_adjustments_inid, $gst_adjustments_in_description, $gst_adjustments_in_rate, $gst_adjustments_outid, $gst_adjustments_out_description, $gst_adjustments_out_rate, $matrix_description, $pricing_group_id, $pricing_group_description, $inventory_ledgers, $notes, $documents, $custom_field_values, $regions, $debtor_prices, $debtor_class_prices, $debtor_price_group_inventory_specific_prices, $alternate_children, $alternate_parents, $components, $warehouse_so_hs, $debtor_part_numbers, $group_memberships, $other_descriptions, $order_levels, $budgets, $logical_orders, $default_bin_locations, $product_availabilities, $selling_prices, $up_sells, $attribute_groups, $unit_of_measures, $body)

Creates an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$physical_item = true; // bool | 
$ship_with_physical_item = true; // bool | 
$discountable = true; // bool | 
$direct_tax = 1.2; // double | 
$status = "status_example"; // string | 
$default_price = 1.2; // double | 
$rrp_price = 1.2; // double | 
$l_cost = 1.2; // double | 
$s_cost = 1.2; // double | 
$decimal_places = 56; // int | 
$minimum_gp = 1.2; // double | 
$weight = 1.2; // double | 
$cubic = 1.2; // double | 
$use_serial_no = true; // bool | 
$back_orderable = true; // bool | 
$sales_man_cost = 1.2; // double | 
$secondary_cost = 1.2; // double | 
$bom_object = "bom_object_example"; // string | 
$use_expiry_date = true; // bool | 
$use_standard_cost = true; // bool | 
$standard_cost = 1.2; // double | 
$web_enabled = true; // bool | 
$sell_price_inc_tax = true; // bool | 
$style = "style_example"; // string | 
$colour = "colour_example"; // string | 
$size = "size_example"; // string | 
$part_encode_order = 56; // int | 
$part_no = "part_no_example"; // string | 
$picture = "B"; // string | 
$description = "description_example"; // string | 
$unit_measure = "unit_measure_example"; // string | 
$classification = "classification_example"; // string | 
$category1 = "category1_example"; // string | 
$category2 = "category2_example"; // string | 
$category3 = "category3_example"; // string | 
$category4 = "category4_example"; // string | 
$category5 = "category5_example"; // string | 
$aux1 = "aux1_example"; // string | 
$aux2 = "aux2_example"; // string | 
$aux3 = "aux3_example"; // string | 
$aux4 = "aux4_example"; // string | 
$aux5 = "aux5_example"; // string | 
$gst_inwards_id = "gst_inwards_id_example"; // string | 
$gst_inwards_description = "gst_inwards_description_example"; // string | 
$gst_inwards_rate = 1.2; // double | 
$gst_outwards_id = "gst_outwards_id_example"; // string | 
$gst_outwards_description = "gst_outwards_description_example"; // string | 
$gst_outwards_rate = 1.2; // double | 
$gst_adjustments_inid = "gst_adjustments_inid_example"; // string | 
$gst_adjustments_in_description = "gst_adjustments_in_description_example"; // string | 
$gst_adjustments_in_rate = 1.2; // double | 
$gst_adjustments_outid = "gst_adjustments_outid_example"; // string | 
$gst_adjustments_out_description = "gst_adjustments_out_description_example"; // string | 
$gst_adjustments_out_rate = 1.2; // double | 
$matrix_description = "matrix_description_example"; // string | 
$pricing_group_id = "pricing_group_id_example"; // string | 
$pricing_group_description = "pricing_group_description_example"; // string | 
$inventory_ledgers = "inventory_ledgers_example"; // string | 
$notes = "notes_example"; // string | 
$documents = "documents_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$regions = "regions_example"; // string | 
$debtor_prices = "debtor_prices_example"; // string | 
$debtor_class_prices = "debtor_class_prices_example"; // string | 
$debtor_price_group_inventory_specific_prices = "debtor_price_group_inventory_specific_prices_example"; // string | 
$alternate_children = "alternate_children_example"; // string | 
$alternate_parents = "alternate_parents_example"; // string | 
$components = "components_example"; // string | 
$warehouse_so_hs = "warehouse_so_hs_example"; // string | 
$debtor_part_numbers = "debtor_part_numbers_example"; // string | 
$group_memberships = "group_memberships_example"; // string | 
$other_descriptions = "other_descriptions_example"; // string | 
$order_levels = "order_levels_example"; // string | 
$budgets = "budgets_example"; // string | 
$logical_orders = "logical_orders_example"; // string | 
$default_bin_locations = "default_bin_locations_example"; // string | 
$product_availabilities = "product_availabilities_example"; // string | 
$selling_prices = "selling_prices_example"; // string | 
$up_sells = "up_sells_example"; // string | 
$attribute_groups = "attribute_groups_example"; // string | 
$unit_of_measures = "unit_of_measures_example"; // string | 
$body = new \Jiwa\Model\InventoryPOSTRequest(); // \Jiwa\Model\InventoryPOSTRequest | 

try {
    $result = $apiInstance->inventoryPOSTRequestPost($accept, $jiwa_stateful, $physical_item, $ship_with_physical_item, $discountable, $direct_tax, $status, $default_price, $rrp_price, $l_cost, $s_cost, $decimal_places, $minimum_gp, $weight, $cubic, $use_serial_no, $back_orderable, $sales_man_cost, $secondary_cost, $bom_object, $use_expiry_date, $use_standard_cost, $standard_cost, $web_enabled, $sell_price_inc_tax, $style, $colour, $size, $part_encode_order, $part_no, $picture, $description, $unit_measure, $classification, $category1, $category2, $category3, $category4, $category5, $aux1, $aux2, $aux3, $aux4, $aux5, $gst_inwards_id, $gst_inwards_description, $gst_inwards_rate, $gst_outwards_id, $gst_outwards_description, $gst_outwards_rate, $gst_adjustments_inid, $gst_adjustments_in_description, $gst_adjustments_in_rate, $gst_adjustments_outid, $gst_adjustments_out_description, $gst_adjustments_out_rate, $matrix_description, $pricing_group_id, $pricing_group_description, $inventory_ledgers, $notes, $documents, $custom_field_values, $regions, $debtor_prices, $debtor_class_prices, $debtor_price_group_inventory_specific_prices, $alternate_children, $alternate_parents, $components, $warehouse_so_hs, $debtor_part_numbers, $group_memberships, $other_descriptions, $order_levels, $budgets, $logical_orders, $default_bin_locations, $product_availabilities, $selling_prices, $up_sells, $attribute_groups, $unit_of_measures, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPOSTRequestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **physical_item** | **bool**|  | [optional]
 **ship_with_physical_item** | **bool**|  | [optional]
 **discountable** | **bool**|  | [optional]
 **direct_tax** | **double**|  | [optional]
 **status** | **string**|  | [optional]
 **default_price** | **double**|  | [optional]
 **rrp_price** | **double**|  | [optional]
 **l_cost** | **double**|  | [optional]
 **s_cost** | **double**|  | [optional]
 **decimal_places** | **int**|  | [optional]
 **minimum_gp** | **double**|  | [optional]
 **weight** | **double**|  | [optional]
 **cubic** | **double**|  | [optional]
 **use_serial_no** | **bool**|  | [optional]
 **back_orderable** | **bool**|  | [optional]
 **sales_man_cost** | **double**|  | [optional]
 **secondary_cost** | **double**|  | [optional]
 **bom_object** | **string**|  | [optional]
 **use_expiry_date** | **bool**|  | [optional]
 **use_standard_cost** | **bool**|  | [optional]
 **standard_cost** | **double**|  | [optional]
 **web_enabled** | **bool**|  | [optional]
 **sell_price_inc_tax** | **bool**|  | [optional]
 **style** | **string**|  | [optional]
 **colour** | **string**|  | [optional]
 **size** | **string**|  | [optional]
 **part_encode_order** | **int**|  | [optional]
 **part_no** | **string**|  | [optional]
 **picture** | **string**|  | [optional]
 **description** | **string**|  | [optional]
 **unit_measure** | **string**|  | [optional]
 **classification** | **string**|  | [optional]
 **category1** | **string**|  | [optional]
 **category2** | **string**|  | [optional]
 **category3** | **string**|  | [optional]
 **category4** | **string**|  | [optional]
 **category5** | **string**|  | [optional]
 **aux1** | **string**|  | [optional]
 **aux2** | **string**|  | [optional]
 **aux3** | **string**|  | [optional]
 **aux4** | **string**|  | [optional]
 **aux5** | **string**|  | [optional]
 **gst_inwards_id** | **string**|  | [optional]
 **gst_inwards_description** | **string**|  | [optional]
 **gst_inwards_rate** | **double**|  | [optional]
 **gst_outwards_id** | **string**|  | [optional]
 **gst_outwards_description** | **string**|  | [optional]
 **gst_outwards_rate** | **double**|  | [optional]
 **gst_adjustments_inid** | **string**|  | [optional]
 **gst_adjustments_in_description** | **string**|  | [optional]
 **gst_adjustments_in_rate** | **double**|  | [optional]
 **gst_adjustments_outid** | **string**|  | [optional]
 **gst_adjustments_out_description** | **string**|  | [optional]
 **gst_adjustments_out_rate** | **double**|  | [optional]
 **matrix_description** | **string**|  | [optional]
 **pricing_group_id** | **string**|  | [optional]
 **pricing_group_description** | **string**|  | [optional]
 **inventory_ledgers** | **string**|  | [optional]
 **notes** | **string**|  | [optional]
 **documents** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **regions** | **string**|  | [optional]
 **debtor_prices** | **string**|  | [optional]
 **debtor_class_prices** | **string**|  | [optional]
 **debtor_price_group_inventory_specific_prices** | **string**|  | [optional]
 **alternate_children** | **string**|  | [optional]
 **alternate_parents** | **string**|  | [optional]
 **components** | **string**|  | [optional]
 **warehouse_so_hs** | **string**|  | [optional]
 **debtor_part_numbers** | **string**|  | [optional]
 **group_memberships** | **string**|  | [optional]
 **other_descriptions** | **string**|  | [optional]
 **order_levels** | **string**|  | [optional]
 **budgets** | **string**|  | [optional]
 **logical_orders** | **string**|  | [optional]
 **default_bin_locations** | **string**|  | [optional]
 **product_availabilities** | **string**|  | [optional]
 **selling_prices** | **string**|  | [optional]
 **up_sells** | **string**|  | [optional]
 **attribute_groups** | **string**|  | [optional]
 **unit_of_measures** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryPOSTRequest**](../Model/InventoryPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPriceGETRequestInventoryIDPricingDebtorIDINLogicalIDDateQuantityGet**
> \Jiwa\Model\InventoryPriceGETResponse inventoryPriceGETRequestInventoryIDPricingDebtorIDINLogicalIDDateQuantityGet($accept, $inventory_id, $debtor_id, $in_logical_id, $date, $quantity, $jiwa_stateful)

Retrieves a price for a product, for a debtor, warehouse, date and quantity



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 
$in_logical_id = "in_logical_id_example"; // string | 
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$quantity = 1.2; // double | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryPriceGETRequestInventoryIDPricingDebtorIDINLogicalIDDateQuantityGet($accept, $inventory_id, $debtor_id, $in_logical_id, $date, $quantity, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPriceGETRequestInventoryIDPricingDebtorIDINLogicalIDDateQuantityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **debtor_id** | **string**|  |
 **in_logical_id** | **string**|  |
 **date** | **\DateTime**|  |
 **quantity** | **double**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryPriceGETResponse**](../Model/InventoryPriceGETResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPricingGroupDELETERequestPricingGroupsPricingGroupIDDelete**
> \Jiwa\Model\Object inventoryPricingGroupDELETERequestPricingGroupsPricingGroupIDDelete($accept, $pricing_group_id, $jiwa_stateful)

Deletes an inventory pricing group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$pricing_group_id = "pricing_group_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryPricingGroupDELETERequestPricingGroupsPricingGroupIDDelete($accept, $pricing_group_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPricingGroupDELETERequestPricingGroupsPricingGroupIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **pricing_group_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPricingGroupGETRequestPricingGroupsPricingGroupIDGet**
> \Jiwa\Model\InventoryPricingGroup inventoryPricingGroupGETRequestPricingGroupsPricingGroupIDGet($accept, $pricing_group_id, $jiwa_stateful)

Retrieves an inventory pricing group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$pricing_group_id = "pricing_group_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryPricingGroupGETRequestPricingGroupsPricingGroupIDGet($accept, $pricing_group_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPricingGroupGETRequestPricingGroupsPricingGroupIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **pricing_group_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryPricingGroup**](../Model/InventoryPricingGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPricingGroupPATCHRequestPricingGroupsPricingGroupIDUpdate**
> \Jiwa\Model\InventoryPricingGroup inventoryPricingGroupPATCHRequestPricingGroupsPricingGroupIDUpdate($accept, $pricing_group_id, $jiwa_stateful, $description, $is_default, $last_saved_date_time, $body)

Updates an inventory pricing group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$pricing_group_id = "pricing_group_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$is_default = true; // bool | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$body = new \Jiwa\Model\InventoryPricingGroupPATCHRequest(); // \Jiwa\Model\InventoryPricingGroupPATCHRequest | 

try {
    $result = $apiInstance->inventoryPricingGroupPATCHRequestPricingGroupsPricingGroupIDUpdate($accept, $pricing_group_id, $jiwa_stateful, $description, $is_default, $last_saved_date_time, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPricingGroupPATCHRequestPricingGroupsPricingGroupIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **pricing_group_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryPricingGroupPATCHRequest**](../Model/InventoryPricingGroupPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryPricingGroup**](../Model/InventoryPricingGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPricingGroupPOSTRequestPricingGroupsPost**
> \Jiwa\Model\InventoryPricingGroup inventoryPricingGroupPOSTRequestPricingGroupsPost($accept, $jiwa_stateful, $description, $is_default, $body)

Creates a new inventory pricing group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$description = "description_example"; // string | 
$is_default = true; // bool | 
$body = new \Jiwa\Model\InventoryPricingGroupPOSTRequest(); // \Jiwa\Model\InventoryPricingGroupPOSTRequest | 

try {
    $result = $apiInstance->inventoryPricingGroupPOSTRequestPricingGroupsPost($accept, $jiwa_stateful, $description, $is_default, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPricingGroupPOSTRequestPricingGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **description** | **string**|  | [optional]
 **is_default** | **bool**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryPricingGroupPOSTRequest**](../Model/InventoryPricingGroupPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryPricingGroup**](../Model/InventoryPricingGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPricingGroupsGETManyRequestPricingGroupsGet**
> \Jiwa\Model\InventoryPricingGroup[] inventoryPricingGroupsGETManyRequestPricingGroupsGet($accept, $jiwa_stateful)

Retrieves a list of inventory pricing groups.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryPricingGroupsGETManyRequestPricingGroupsGet($accept, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPricingGroupsGETManyRequestPricingGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryPricingGroup[]**](../Model/InventoryPricingGroup.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryProductAvailabilitiesGETManyRequestInventoryIDProductAvailabilitiesGet**
> \Jiwa\Model\InventoryProductAvailability[] inventoryProductAvailabilitiesGETManyRequestInventoryIDProductAvailabilitiesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of product availabilities for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryProductAvailabilitiesGETManyRequestInventoryIDProductAvailabilitiesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryProductAvailabilitiesGETManyRequestInventoryIDProductAvailabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryProductAvailability[]**](../Model/InventoryProductAvailability.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryProductAvailabilityGETRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDGet**
> \Jiwa\Model\InventoryProductAvailability inventoryProductAvailabilityGETRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDGet($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful)

Retrieves a product availability from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryProductAvailabilityGETRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDGet($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryProductAvailabilityGETRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **logical_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryProductAvailability**](../Model/InventoryProductAvailability.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryProductAvailabilityPATCHRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDUpdate**
> \Jiwa\Model\InventoryProductAvailability inventoryProductAvailabilityPATCHRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDUpdate($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful, $available, $product_availability_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body)

Updates a product availability.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$logical_warehouse_id = "logical_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$available = true; // bool | 
$product_availability_id = "product_availability_id_example"; // string | 
$logical_warehouse_description = "logical_warehouse_description_example"; // string | 
$physical_warehouse_id = "physical_warehouse_id_example"; // string | 
$physical_warehouse_description = "physical_warehouse_description_example"; // string | 
$body = new \Jiwa\Model\InventoryProductAvailabilityPATCHRequest(); // \Jiwa\Model\InventoryProductAvailabilityPATCHRequest | 

try {
    $result = $apiInstance->inventoryProductAvailabilityPATCHRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDUpdate($accept, $inventory_id, $logical_warehouse_id, $jiwa_stateful, $available, $product_availability_id, $logical_warehouse_description, $physical_warehouse_id, $physical_warehouse_description, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryProductAvailabilityPATCHRequestInventoryIDProductAvailabilitiesLogicalWarehouseIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **logical_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **available** | **bool**|  | [optional]
 **product_availability_id** | **string**|  | [optional]
 **logical_warehouse_description** | **string**|  | [optional]
 **physical_warehouse_id** | **string**|  | [optional]
 **physical_warehouse_description** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryProductAvailabilityPATCHRequest**](../Model/InventoryProductAvailabilityPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryProductAvailability**](../Model/InventoryProductAvailability.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryRegionGETRequestInventoryIDRegionsRegionNameGet**
> \Jiwa\Model\InventoryRegion inventoryRegionGETRequestInventoryIDRegionsRegionNameGet($accept, $inventory_id, $region_name, $jiwa_stateful)

Retrieves an inventory region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryRegionGETRequestInventoryIDRegionsRegionNameGet($accept, $inventory_id, $region_name, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryRegionGETRequestInventoryIDRegionsRegionNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryRegion**](../Model/InventoryRegion.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryRegionPATCHRequestInventoryIDRegionsRegionNameUpdate**
> \Jiwa\Model\InventoryRegion inventoryRegionPATCHRequestInventoryIDRegionsRegionNameUpdate($accept, $inventory_id, $region_name, $jiwa_stateful, $region_supplier_ordering_id, $order_enabled, $region_id, $suppliers, $body)

Updates a inventory region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$region_supplier_ordering_id = "region_supplier_ordering_id_example"; // string | 
$order_enabled = true; // bool | 
$region_id = "region_id_example"; // string | 
$suppliers = "suppliers_example"; // string | 
$body = new \Jiwa\Model\InventoryRegionPATCHRequest(); // \Jiwa\Model\InventoryRegionPATCHRequest | 

try {
    $result = $apiInstance->inventoryRegionPATCHRequestInventoryIDRegionsRegionNameUpdate($accept, $inventory_id, $region_name, $jiwa_stateful, $region_supplier_ordering_id, $order_enabled, $region_id, $suppliers, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryRegionPATCHRequestInventoryIDRegionsRegionNameUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **region_supplier_ordering_id** | **string**|  | [optional]
 **order_enabled** | **bool**|  | [optional]
 **region_id** | **string**|  | [optional]
 **suppliers** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryRegionPATCHRequest**](../Model/InventoryRegionPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryRegion**](../Model/InventoryRegion.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryRegionsGETManyRequestInventoryIDRegionsGet**
> \Jiwa\Model\InventoryRegion[] inventoryRegionsGETManyRequestInventoryIDRegionsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory regions.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryRegionsGETManyRequestInventoryIDRegionsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryRegionsGETManyRequestInventoryIDRegionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryRegion[]**](../Model/InventoryRegion.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySAVERequestSaveGet**
> \Jiwa\Model\InventoryItem inventorySAVERequestSaveGet($accept, $jiwa_stateful, $inventory_id)

Saves a stateful inventory item.

Requires a request header of 'jiwa-stateful' be set to 'true', and also that a stateful inventory item exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$jiwa_stateful = true; // bool | Stateful indicator
$inventory_id = "inventory_id_example"; // string | 

try {
    $result = $apiInstance->inventorySAVERequestSaveGet($accept, $jiwa_stateful, $inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySAVERequestSaveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **inventory_id** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\InventoryItem**](../Model/InventoryItem.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySellingPriceGETRequestInventoryIDSellingPricesGet**
> \Jiwa\Model\InventorySellingPrices inventorySellingPriceGETRequestInventoryIDSellingPricesGet($accept, $inventory_id, $jiwa_stateful)

Retrieves the selling prices for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventorySellingPriceGETRequestInventoryIDSellingPricesGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySellingPriceGETRequestInventoryIDSellingPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventorySellingPrices**](../Model/InventorySellingPrices.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySellingPricePATCHRequestInventoryIDSellingPricesUpdate**
> \Jiwa\Model\InventorySellingPrices inventorySellingPricePATCHRequestInventoryIDSellingPricesUpdate($accept, $inventory_id, $jiwa_stateful, $sell_prices, $current_price_date, $forward_price_date, $body)

Updates the selling prices.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$sell_prices = "sell_prices_example"; // string | 
$current_price_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$forward_price_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$body = new \Jiwa\Model\InventorySellingPricePATCHRequest(); // \Jiwa\Model\InventorySellingPricePATCHRequest | 

try {
    $result = $apiInstance->inventorySellingPricePATCHRequestInventoryIDSellingPricesUpdate($accept, $inventory_id, $jiwa_stateful, $sell_prices, $current_price_date, $forward_price_date, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySellingPricePATCHRequestInventoryIDSellingPricesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **sell_prices** | **string**|  | [optional]
 **current_price_date** | **\DateTime**|  | [optional]
 **forward_price_date** | **\DateTime**|  | [optional]
 **body** | [**\Jiwa\Model\InventorySellingPricePATCHRequest**](../Model/InventorySellingPricePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventorySellingPrices**](../Model/InventorySellingPrices.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDDelete**
> \Jiwa\Model\Object inventorySupplierDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDDelete($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful, $fx_rate, $default_supplier, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_id, $creditor_account_no, $creditor_name, $supplier_part_no, $supplier_upc, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $supplier_warehouses, $supplier_quantity_price_breaks)

Deletes an inventory item supplier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$fx_rate = 1.2; // double | 
$default_supplier = true; // bool | 
$spare_float1 = 1.2; // double | 
$spare_float2 = 1.2; // double | 
$spare_float3 = 1.2; // double | 
$spare_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$supplier_upc = "supplier_upc_example"; // string | 
$spare_string1 = "spare_string1_example"; // string | 
$spare_string2 = "spare_string2_example"; // string | 
$spare_string3 = "spare_string3_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$supplier_warehouses = "supplier_warehouses_example"; // string | 
$supplier_quantity_price_breaks = "supplier_quantity_price_breaks_example"; // string | 

try {
    $result = $apiInstance->inventorySupplierDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDDelete($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful, $fx_rate, $default_supplier, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_id, $creditor_account_no, $creditor_name, $supplier_part_no, $supplier_upc, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $supplier_warehouses, $supplier_quantity_price_breaks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **fx_rate** | **double**|  | [optional]
 **default_supplier** | **bool**|  | [optional]
 **spare_float1** | **double**|  | [optional]
 **spare_float2** | **double**|  | [optional]
 **spare_float3** | **double**|  | [optional]
 **spare_date1** | **\DateTime**|  | [optional]
 **spare_date2** | **\DateTime**|  | [optional]
 **spare_date3** | **\DateTime**|  | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **supplier_upc** | **string**|  | [optional]
 **spare_string1** | **string**|  | [optional]
 **spare_string2** | **string**|  | [optional]
 **spare_string3** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **supplier_warehouses** | **string**|  | [optional]
 **supplier_quantity_price_breaks** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDGet**
> \Jiwa\Model\InventorySupplier inventorySupplierGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDGet($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful)

Retrieves an inventory item supplier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventorySupplierGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDGet($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventorySupplier**](../Model/InventorySupplier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierPATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDUpdate**
> \Jiwa\Model\InventorySupplier inventorySupplierPATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDUpdate($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful, $fx_rate, $default_supplier, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_id, $creditor_account_no, $creditor_name, $supplier_part_no, $supplier_upc, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $supplier_warehouses, $supplier_quantity_price_breaks, $body)

Updates an inventory item supplier.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$fx_rate = 1.2; // double | 
$default_supplier = true; // bool | 
$spare_float1 = 1.2; // double | 
$spare_float2 = 1.2; // double | 
$spare_float3 = 1.2; // double | 
$spare_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$supplier_upc = "supplier_upc_example"; // string | 
$spare_string1 = "spare_string1_example"; // string | 
$spare_string2 = "spare_string2_example"; // string | 
$spare_string3 = "spare_string3_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$supplier_warehouses = "supplier_warehouses_example"; // string | 
$supplier_quantity_price_breaks = "supplier_quantity_price_breaks_example"; // string | 
$body = new \Jiwa\Model\InventorySupplierPATCHRequest(); // \Jiwa\Model\InventorySupplierPATCHRequest | 

try {
    $result = $apiInstance->inventorySupplierPATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDUpdate($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful, $fx_rate, $default_supplier, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_id, $creditor_account_no, $creditor_name, $supplier_part_no, $supplier_upc, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $supplier_warehouses, $supplier_quantity_price_breaks, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierPATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **fx_rate** | **double**|  | [optional]
 **default_supplier** | **bool**|  | [optional]
 **spare_float1** | **double**|  | [optional]
 **spare_float2** | **double**|  | [optional]
 **spare_float3** | **double**|  | [optional]
 **spare_date1** | **\DateTime**|  | [optional]
 **spare_date2** | **\DateTime**|  | [optional]
 **spare_date3** | **\DateTime**|  | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **supplier_upc** | **string**|  | [optional]
 **spare_string1** | **string**|  | [optional]
 **spare_string2** | **string**|  | [optional]
 **spare_string3** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **supplier_warehouses** | **string**|  | [optional]
 **supplier_quantity_price_breaks** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventorySupplierPATCHRequest**](../Model/InventorySupplierPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventorySupplier**](../Model/InventorySupplier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierPOSTRequestInventoryIDRegionsRegionNameSuppliersPost**
> \Jiwa\Model\InventorySupplier inventorySupplierPOSTRequestInventoryIDRegionsRegionNameSuppliersPost($accept, $inventory_id, $region_name, $jiwa_stateful, $fx_rate, $default_supplier, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_id, $creditor_account_no, $creditor_name, $supplier_part_no, $supplier_upc, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $supplier_warehouses, $supplier_quantity_price_breaks, $body)

Appends a supplier to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$fx_rate = 1.2; // double | 
$default_supplier = true; // bool | 
$spare_float1 = 1.2; // double | 
$spare_float2 = 1.2; // double | 
$spare_float3 = 1.2; // double | 
$spare_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$creditor_id = "creditor_id_example"; // string | 
$creditor_account_no = "creditor_account_no_example"; // string | 
$creditor_name = "creditor_name_example"; // string | 
$supplier_part_no = "supplier_part_no_example"; // string | 
$supplier_upc = "supplier_upc_example"; // string | 
$spare_string1 = "spare_string1_example"; // string | 
$spare_string2 = "spare_string2_example"; // string | 
$spare_string3 = "spare_string3_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$supplier_warehouses = "supplier_warehouses_example"; // string | 
$supplier_quantity_price_breaks = "supplier_quantity_price_breaks_example"; // string | 
$body = new \Jiwa\Model\InventorySupplierPOSTRequest(); // \Jiwa\Model\InventorySupplierPOSTRequest | 

try {
    $result = $apiInstance->inventorySupplierPOSTRequestInventoryIDRegionsRegionNameSuppliersPost($accept, $inventory_id, $region_name, $jiwa_stateful, $fx_rate, $default_supplier, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_id, $creditor_account_no, $creditor_name, $supplier_part_no, $supplier_upc, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $supplier_warehouses, $supplier_quantity_price_breaks, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierPOSTRequestInventoryIDRegionsRegionNameSuppliersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **fx_rate** | **double**|  | [optional]
 **default_supplier** | **bool**|  | [optional]
 **spare_float1** | **double**|  | [optional]
 **spare_float2** | **double**|  | [optional]
 **spare_float3** | **double**|  | [optional]
 **spare_date1** | **\DateTime**|  | [optional]
 **spare_date2** | **\DateTime**|  | [optional]
 **spare_date3** | **\DateTime**|  | [optional]
 **creditor_id** | **string**|  | [optional]
 **creditor_account_no** | **string**|  | [optional]
 **creditor_name** | **string**|  | [optional]
 **supplier_part_no** | **string**|  | [optional]
 **supplier_upc** | **string**|  | [optional]
 **spare_string1** | **string**|  | [optional]
 **spare_string2** | **string**|  | [optional]
 **spare_string3** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **supplier_warehouses** | **string**|  | [optional]
 **supplier_quantity_price_breaks** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventorySupplierPOSTRequest**](../Model/InventorySupplierPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventorySupplier**](../Model/InventorySupplier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierWarehouseDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDDelete**
> \Jiwa\Model\Object inventorySupplierWarehouseDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDDelete($accept, $inventory_id, $region_name, $supplier_id, $supplier_warehouse_id, $jiwa_stateful, $default_warehouse, $home_suppliers_cost, $suppliers_cost, $suppliers_cost2, $home_suppliers_cost2, $supplier_soh, $delivery_days, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_warehouse_id, $creditor_warehouse_description, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $unit_of_measure)

Deletes a supplier warehouse from an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$supplier_warehouse_id = "supplier_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$default_warehouse = true; // bool | 
$home_suppliers_cost = 1.2; // double | 
$suppliers_cost = 1.2; // double | 
$suppliers_cost2 = 1.2; // double | 
$home_suppliers_cost2 = 1.2; // double | 
$supplier_soh = 1.2; // double | 
$delivery_days = 56; // int | 
$spare_float1 = 1.2; // double | 
$spare_float2 = 1.2; // double | 
$spare_float3 = 1.2; // double | 
$spare_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$creditor_warehouse_id = "creditor_warehouse_id_example"; // string | 
$creditor_warehouse_description = "creditor_warehouse_description_example"; // string | 
$spare_string1 = "spare_string1_example"; // string | 
$spare_string2 = "spare_string2_example"; // string | 
$spare_string3 = "spare_string3_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$unit_of_measure = "unit_of_measure_example"; // string | 

try {
    $result = $apiInstance->inventorySupplierWarehouseDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDDelete($accept, $inventory_id, $region_name, $supplier_id, $supplier_warehouse_id, $jiwa_stateful, $default_warehouse, $home_suppliers_cost, $suppliers_cost, $suppliers_cost2, $home_suppliers_cost2, $supplier_soh, $delivery_days, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_warehouse_id, $creditor_warehouse_description, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $unit_of_measure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierWarehouseDELETERequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **supplier_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **default_warehouse** | **bool**|  | [optional]
 **home_suppliers_cost** | **double**|  | [optional]
 **suppliers_cost** | **double**|  | [optional]
 **suppliers_cost2** | **double**|  | [optional]
 **home_suppliers_cost2** | **double**|  | [optional]
 **supplier_soh** | **double**|  | [optional]
 **delivery_days** | **int**|  | [optional]
 **spare_float1** | **double**|  | [optional]
 **spare_float2** | **double**|  | [optional]
 **spare_float3** | **double**|  | [optional]
 **spare_date1** | **\DateTime**|  | [optional]
 **spare_date2** | **\DateTime**|  | [optional]
 **spare_date3** | **\DateTime**|  | [optional]
 **creditor_warehouse_id** | **string**|  | [optional]
 **creditor_warehouse_description** | **string**|  | [optional]
 **spare_string1** | **string**|  | [optional]
 **spare_string2** | **string**|  | [optional]
 **spare_string3** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **unit_of_measure** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierWarehouseGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDGet**
> \Jiwa\Model\InventorySupplierWarehouse inventorySupplierWarehouseGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDGet($accept, $inventory_id, $region_name, $supplier_id, $supplier_warehouse_id, $jiwa_stateful)

Retrieves an inventory item supplier warehouse.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$supplier_warehouse_id = "supplier_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventorySupplierWarehouseGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDGet($accept, $inventory_id, $region_name, $supplier_id, $supplier_warehouse_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierWarehouseGETRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **supplier_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventorySupplierWarehouse**](../Model/InventorySupplierWarehouse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierWarehousePATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDUpdate**
> \Jiwa\Model\InventorySupplierWarehouse inventorySupplierWarehousePATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDUpdate($accept, $inventory_id, $region_name, $supplier_id, $supplier_warehouse_id, $jiwa_stateful, $default_warehouse, $home_suppliers_cost, $suppliers_cost, $suppliers_cost2, $home_suppliers_cost2, $supplier_soh, $delivery_days, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_warehouse_id, $creditor_warehouse_description, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $unit_of_measure, $body)

Updates a supplier warehouse for an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$supplier_warehouse_id = "supplier_warehouse_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$default_warehouse = true; // bool | 
$home_suppliers_cost = 1.2; // double | 
$suppliers_cost = 1.2; // double | 
$suppliers_cost2 = 1.2; // double | 
$home_suppliers_cost2 = 1.2; // double | 
$supplier_soh = 1.2; // double | 
$delivery_days = 56; // int | 
$spare_float1 = 1.2; // double | 
$spare_float2 = 1.2; // double | 
$spare_float3 = 1.2; // double | 
$spare_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$creditor_warehouse_id = "creditor_warehouse_id_example"; // string | 
$creditor_warehouse_description = "creditor_warehouse_description_example"; // string | 
$spare_string1 = "spare_string1_example"; // string | 
$spare_string2 = "spare_string2_example"; // string | 
$spare_string3 = "spare_string3_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$unit_of_measure = "unit_of_measure_example"; // string | 
$body = new \Jiwa\Model\InventorySupplierWarehousePATCHRequest(); // \Jiwa\Model\InventorySupplierWarehousePATCHRequest | 

try {
    $result = $apiInstance->inventorySupplierWarehousePATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDUpdate($accept, $inventory_id, $region_name, $supplier_id, $supplier_warehouse_id, $jiwa_stateful, $default_warehouse, $home_suppliers_cost, $suppliers_cost, $suppliers_cost2, $home_suppliers_cost2, $supplier_soh, $delivery_days, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_warehouse_id, $creditor_warehouse_description, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $unit_of_measure, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierWarehousePATCHRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesSupplierWarehouseIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **supplier_warehouse_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **default_warehouse** | **bool**|  | [optional]
 **home_suppliers_cost** | **double**|  | [optional]
 **suppliers_cost** | **double**|  | [optional]
 **suppliers_cost2** | **double**|  | [optional]
 **home_suppliers_cost2** | **double**|  | [optional]
 **supplier_soh** | **double**|  | [optional]
 **delivery_days** | **int**|  | [optional]
 **spare_float1** | **double**|  | [optional]
 **spare_float2** | **double**|  | [optional]
 **spare_float3** | **double**|  | [optional]
 **spare_date1** | **\DateTime**|  | [optional]
 **spare_date2** | **\DateTime**|  | [optional]
 **spare_date3** | **\DateTime**|  | [optional]
 **creditor_warehouse_id** | **string**|  | [optional]
 **creditor_warehouse_description** | **string**|  | [optional]
 **spare_string1** | **string**|  | [optional]
 **spare_string2** | **string**|  | [optional]
 **spare_string3** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **unit_of_measure** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventorySupplierWarehousePATCHRequest**](../Model/InventorySupplierWarehousePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventorySupplierWarehouse**](../Model/InventorySupplierWarehouse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierWarehousePOSTRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesPost**
> \Jiwa\Model\InventorySupplierWarehouse inventorySupplierWarehousePOSTRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesPost($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful, $default_warehouse, $home_suppliers_cost, $suppliers_cost, $suppliers_cost2, $home_suppliers_cost2, $supplier_soh, $delivery_days, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_warehouse_id, $creditor_warehouse_description, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $unit_of_measure, $body)

Appends a supplier warehouse to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$default_warehouse = true; // bool | 
$home_suppliers_cost = 1.2; // double | 
$suppliers_cost = 1.2; // double | 
$suppliers_cost2 = 1.2; // double | 
$home_suppliers_cost2 = 1.2; // double | 
$supplier_soh = 1.2; // double | 
$delivery_days = 56; // int | 
$spare_float1 = 1.2; // double | 
$spare_float2 = 1.2; // double | 
$spare_float3 = 1.2; // double | 
$spare_date1 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date2 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$spare_date3 = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$creditor_warehouse_id = "creditor_warehouse_id_example"; // string | 
$creditor_warehouse_description = "creditor_warehouse_description_example"; // string | 
$spare_string1 = "spare_string1_example"; // string | 
$spare_string2 = "spare_string2_example"; // string | 
$spare_string3 = "spare_string3_example"; // string | 
$custom_field_values = "custom_field_values_example"; // string | 
$unit_of_measure = "unit_of_measure_example"; // string | 
$body = new \Jiwa\Model\InventorySupplierWarehousePOSTRequest(); // \Jiwa\Model\InventorySupplierWarehousePOSTRequest | 

try {
    $result = $apiInstance->inventorySupplierWarehousePOSTRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesPost($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful, $default_warehouse, $home_suppliers_cost, $suppliers_cost, $suppliers_cost2, $home_suppliers_cost2, $supplier_soh, $delivery_days, $spare_float1, $spare_float2, $spare_float3, $spare_date1, $spare_date2, $spare_date3, $creditor_warehouse_id, $creditor_warehouse_description, $spare_string1, $spare_string2, $spare_string3, $custom_field_values, $unit_of_measure, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierWarehousePOSTRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **default_warehouse** | **bool**|  | [optional]
 **home_suppliers_cost** | **double**|  | [optional]
 **suppliers_cost** | **double**|  | [optional]
 **suppliers_cost2** | **double**|  | [optional]
 **home_suppliers_cost2** | **double**|  | [optional]
 **supplier_soh** | **double**|  | [optional]
 **delivery_days** | **int**|  | [optional]
 **spare_float1** | **double**|  | [optional]
 **spare_float2** | **double**|  | [optional]
 **spare_float3** | **double**|  | [optional]
 **spare_date1** | **\DateTime**|  | [optional]
 **spare_date2** | **\DateTime**|  | [optional]
 **spare_date3** | **\DateTime**|  | [optional]
 **creditor_warehouse_id** | **string**|  | [optional]
 **creditor_warehouse_description** | **string**|  | [optional]
 **spare_string1** | **string**|  | [optional]
 **spare_string2** | **string**|  | [optional]
 **spare_string3** | **string**|  | [optional]
 **custom_field_values** | **string**|  | [optional]
 **unit_of_measure** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventorySupplierWarehousePOSTRequest**](../Model/InventorySupplierWarehousePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventorySupplierWarehouse**](../Model/InventorySupplierWarehouse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySupplierWarehousesGETManyRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesGet**
> \Jiwa\Model\InventorySupplierWarehouse[] inventorySupplierWarehousesGETManyRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesGet($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful)

Retrieves a list of inventory supplier warehouses.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$supplier_id = "supplier_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventorySupplierWarehousesGETManyRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesGet($accept, $inventory_id, $region_name, $supplier_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySupplierWarehousesGETManyRequestInventoryIDRegionsRegionNameSuppliersSupplierIDSupplierWarehousesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **supplier_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventorySupplierWarehouse[]**](../Model/InventorySupplierWarehouse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySuppliersGETManyRequestInventoryIDRegionsRegionNameSuppliersGet**
> \Jiwa\Model\InventorySupplier[] inventorySuppliersGETManyRequestInventoryIDRegionsRegionNameSuppliersGet($accept, $inventory_id, $region_name, $jiwa_stateful)

Retrieves a list of suppliers for a given inventory item in a particular region.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$region_name = "region_name_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventorySuppliersGETManyRequestInventoryIDRegionsRegionNameSuppliersGet($accept, $inventory_id, $region_name, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySuppliersGETManyRequestInventoryIDRegionsRegionNameSuppliersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **region_name** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventorySupplier[]**](../Model/InventorySupplier.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUnitOfMeasureDELETERequestInventoryIDUnitOfMeasuresUnitOfMeasureIDDelete**
> \Jiwa\Model\Object inventoryUnitOfMeasureDELETERequestInventoryIDUnitOfMeasuresUnitOfMeasureIDDelete($accept, $inventory_id, $unit_of_measure_id, $jiwa_stateful, $rec_id, $inner_unit_of_measure, $quantity_inners_per_unit_of_measure, $is_sell, $is_purchase, $item_no, $last_saved_date_time, $name, $part_no, $barcode)

Deletes a inventory unit of measure.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$unit_of_measure_id = "unit_of_measure_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 
$inner_unit_of_measure = "inner_unit_of_measure_example"; // string | 
$quantity_inners_per_unit_of_measure = 1.2; // double | 
$is_sell = true; // bool | 
$is_purchase = true; // bool | 
$item_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$name = "name_example"; // string | 
$part_no = "part_no_example"; // string | 
$barcode = "barcode_example"; // string | 

try {
    $result = $apiInstance->inventoryUnitOfMeasureDELETERequestInventoryIDUnitOfMeasuresUnitOfMeasureIDDelete($accept, $inventory_id, $unit_of_measure_id, $jiwa_stateful, $rec_id, $inner_unit_of_measure, $quantity_inners_per_unit_of_measure, $is_sell, $is_purchase, $item_no, $last_saved_date_time, $name, $part_no, $barcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUnitOfMeasureDELETERequestInventoryIDUnitOfMeasuresUnitOfMeasureIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **unit_of_measure_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]
 **inner_unit_of_measure** | **string**|  | [optional]
 **quantity_inners_per_unit_of_measure** | **double**|  | [optional]
 **is_sell** | **bool**|  | [optional]
 **is_purchase** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **name** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **barcode** | **string**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUnitOfMeasureGETRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDGet**
> \Jiwa\Model\InventoryUnitOfMeasure inventoryUnitOfMeasureGETRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDGet($accept, $inventory_id, $unit_of_measure_id, $jiwa_stateful)

Retrieves an inventory unit of measure.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$unit_of_measure_id = "unit_of_measure_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryUnitOfMeasureGETRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDGet($accept, $inventory_id, $unit_of_measure_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUnitOfMeasureGETRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **unit_of_measure_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryUnitOfMeasure**](../Model/InventoryUnitOfMeasure.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUnitOfMeasurePATCHRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDUpdate**
> \Jiwa\Model\InventoryUnitOfMeasure inventoryUnitOfMeasurePATCHRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDUpdate($accept, $inventory_id, $unit_of_measure_id, $jiwa_stateful, $rec_id, $inner_unit_of_measure, $quantity_inners_per_unit_of_measure, $is_sell, $is_purchase, $item_no, $last_saved_date_time, $name, $part_no, $barcode, $body)

Updates a inventory unit of measure.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$unit_of_measure_id = "unit_of_measure_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 
$inner_unit_of_measure = "inner_unit_of_measure_example"; // string | 
$quantity_inners_per_unit_of_measure = 1.2; // double | 
$is_sell = true; // bool | 
$is_purchase = true; // bool | 
$item_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$name = "name_example"; // string | 
$part_no = "part_no_example"; // string | 
$barcode = "barcode_example"; // string | 
$body = new \Jiwa\Model\InventoryUnitOfMeasurePATCHRequest(); // \Jiwa\Model\InventoryUnitOfMeasurePATCHRequest | 

try {
    $result = $apiInstance->inventoryUnitOfMeasurePATCHRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDUpdate($accept, $inventory_id, $unit_of_measure_id, $jiwa_stateful, $rec_id, $inner_unit_of_measure, $quantity_inners_per_unit_of_measure, $is_sell, $is_purchase, $item_no, $last_saved_date_time, $name, $part_no, $barcode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUnitOfMeasurePATCHRequestInventoryIDUnitOfMeasuresUnitOfMeasureIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **unit_of_measure_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]
 **inner_unit_of_measure** | **string**|  | [optional]
 **quantity_inners_per_unit_of_measure** | **double**|  | [optional]
 **is_sell** | **bool**|  | [optional]
 **is_purchase** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **name** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **barcode** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryUnitOfMeasurePATCHRequest**](../Model/InventoryUnitOfMeasurePATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryUnitOfMeasure**](../Model/InventoryUnitOfMeasure.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUnitOfMeasurePOSTRequestInventoryIDUnitOfMeasuresPost**
> \Jiwa\Model\InventoryUnitOfMeasure inventoryUnitOfMeasurePOSTRequestInventoryIDUnitOfMeasuresPost($accept, $inventory_id, $jiwa_stateful, $rec_id, $inner_unit_of_measure, $quantity_inners_per_unit_of_measure, $is_sell, $is_purchase, $item_no, $last_saved_date_time, $name, $part_no, $barcode, $body)

Appends an alternate child to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$rec_id = "rec_id_example"; // string | 
$inner_unit_of_measure = "inner_unit_of_measure_example"; // string | 
$quantity_inners_per_unit_of_measure = 1.2; // double | 
$is_sell = true; // bool | 
$is_purchase = true; // bool | 
$item_no = 56; // int | 
$last_saved_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$name = "name_example"; // string | 
$part_no = "part_no_example"; // string | 
$barcode = "barcode_example"; // string | 
$body = new \Jiwa\Model\InventoryUnitOfMeasurePOSTRequest(); // \Jiwa\Model\InventoryUnitOfMeasurePOSTRequest | 

try {
    $result = $apiInstance->inventoryUnitOfMeasurePOSTRequestInventoryIDUnitOfMeasuresPost($accept, $inventory_id, $jiwa_stateful, $rec_id, $inner_unit_of_measure, $quantity_inners_per_unit_of_measure, $is_sell, $is_purchase, $item_no, $last_saved_date_time, $name, $part_no, $barcode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUnitOfMeasurePOSTRequestInventoryIDUnitOfMeasuresPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **rec_id** | **string**|  | [optional]
 **inner_unit_of_measure** | **string**|  | [optional]
 **quantity_inners_per_unit_of_measure** | **double**|  | [optional]
 **is_sell** | **bool**|  | [optional]
 **is_purchase** | **bool**|  | [optional]
 **item_no** | **int**|  | [optional]
 **last_saved_date_time** | **\DateTime**|  | [optional]
 **name** | **string**|  | [optional]
 **part_no** | **string**|  | [optional]
 **barcode** | **string**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryUnitOfMeasurePOSTRequest**](../Model/InventoryUnitOfMeasurePOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryUnitOfMeasure**](../Model/InventoryUnitOfMeasure.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUnitOfMeasuresGETManyRequestInventoryIDUnitOfMeasuresGet**
> \Jiwa\Model\InventoryUnitOfMeasure[] inventoryUnitOfMeasuresGETManyRequestInventoryIDUnitOfMeasuresGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory unit of measures.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryUnitOfMeasuresGETManyRequestInventoryIDUnitOfMeasuresGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUnitOfMeasuresGETManyRequestInventoryIDUnitOfMeasuresGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryUnitOfMeasure[]**](../Model/InventoryUnitOfMeasure.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpSellDELETERequestInventoryIDUpSellsUpSellIDDelete**
> \Jiwa\Model\Object inventoryUpSellDELETERequestInventoryIDUpSellsUpSellIDDelete($accept, $inventory_id, $up_sell_id, $jiwa_stateful, $up_sell_quantity, $up_sell_inventory_id, $up_sell_inventory_part_no, $up_sell_inventory_description, $up_sell_description, $primary_category_id, $primary_category_description, $primary_category_no, $secondary_category_id, $secondary_category_description, $secondary_category_no)

Deletes a inventory up sell.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$up_sell_id = "up_sell_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$up_sell_quantity = 1.2; // double | 
$up_sell_inventory_id = "up_sell_inventory_id_example"; // string | 
$up_sell_inventory_part_no = "up_sell_inventory_part_no_example"; // string | 
$up_sell_inventory_description = "up_sell_inventory_description_example"; // string | 
$up_sell_description = "up_sell_description_example"; // string | 
$primary_category_id = "primary_category_id_example"; // string | 
$primary_category_description = "primary_category_description_example"; // string | 
$primary_category_no = 56; // int | 
$secondary_category_id = "secondary_category_id_example"; // string | 
$secondary_category_description = "secondary_category_description_example"; // string | 
$secondary_category_no = 56; // int | 

try {
    $result = $apiInstance->inventoryUpSellDELETERequestInventoryIDUpSellsUpSellIDDelete($accept, $inventory_id, $up_sell_id, $jiwa_stateful, $up_sell_quantity, $up_sell_inventory_id, $up_sell_inventory_part_no, $up_sell_inventory_description, $up_sell_description, $primary_category_id, $primary_category_description, $primary_category_no, $secondary_category_id, $secondary_category_description, $secondary_category_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpSellDELETERequestInventoryIDUpSellsUpSellIDDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **up_sell_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **up_sell_quantity** | **double**|  | [optional]
 **up_sell_inventory_id** | **string**|  | [optional]
 **up_sell_inventory_part_no** | **string**|  | [optional]
 **up_sell_inventory_description** | **string**|  | [optional]
 **up_sell_description** | **string**|  | [optional]
 **primary_category_id** | **string**|  | [optional]
 **primary_category_description** | **string**|  | [optional]
 **primary_category_no** | **int**|  | [optional]
 **secondary_category_id** | **string**|  | [optional]
 **secondary_category_description** | **string**|  | [optional]
 **secondary_category_no** | **int**|  | [optional]

### Return type

[**\Jiwa\Model\Object**](../Model/Object.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpSellGETRequestInventoryIDUpSellsUpSellIDGet**
> \Jiwa\Model\InventoryUpSell inventoryUpSellGETRequestInventoryIDUpSellsUpSellIDGet($accept, $inventory_id, $up_sell_id, $jiwa_stateful)

Retrieves an inventory up sell.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$up_sell_id = "up_sell_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryUpSellGETRequestInventoryIDUpSellsUpSellIDGet($accept, $inventory_id, $up_sell_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpSellGETRequestInventoryIDUpSellsUpSellIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **up_sell_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryUpSell**](../Model/InventoryUpSell.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpSellPATCHRequestInventoryIDUpSellsUpSellIDUpdate**
> \Jiwa\Model\InventoryUpSell inventoryUpSellPATCHRequestInventoryIDUpSellsUpSellIDUpdate($accept, $inventory_id, $up_sell_id, $jiwa_stateful, $up_sell_quantity, $up_sell_inventory_id, $up_sell_inventory_part_no, $up_sell_inventory_description, $up_sell_description, $primary_category_id, $primary_category_description, $primary_category_no, $secondary_category_id, $secondary_category_description, $secondary_category_no, $body)

Updates a inventory up sell.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$up_sell_id = "up_sell_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$up_sell_quantity = 1.2; // double | 
$up_sell_inventory_id = "up_sell_inventory_id_example"; // string | 
$up_sell_inventory_part_no = "up_sell_inventory_part_no_example"; // string | 
$up_sell_inventory_description = "up_sell_inventory_description_example"; // string | 
$up_sell_description = "up_sell_description_example"; // string | 
$primary_category_id = "primary_category_id_example"; // string | 
$primary_category_description = "primary_category_description_example"; // string | 
$primary_category_no = 56; // int | 
$secondary_category_id = "secondary_category_id_example"; // string | 
$secondary_category_description = "secondary_category_description_example"; // string | 
$secondary_category_no = 56; // int | 
$body = new \Jiwa\Model\InventoryUpSellPATCHRequest(); // \Jiwa\Model\InventoryUpSellPATCHRequest | 

try {
    $result = $apiInstance->inventoryUpSellPATCHRequestInventoryIDUpSellsUpSellIDUpdate($accept, $inventory_id, $up_sell_id, $jiwa_stateful, $up_sell_quantity, $up_sell_inventory_id, $up_sell_inventory_part_no, $up_sell_inventory_description, $up_sell_description, $primary_category_id, $primary_category_description, $primary_category_no, $secondary_category_id, $secondary_category_description, $secondary_category_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpSellPATCHRequestInventoryIDUpSellsUpSellIDUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **up_sell_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **up_sell_quantity** | **double**|  | [optional]
 **up_sell_inventory_id** | **string**|  | [optional]
 **up_sell_inventory_part_no** | **string**|  | [optional]
 **up_sell_inventory_description** | **string**|  | [optional]
 **up_sell_description** | **string**|  | [optional]
 **primary_category_id** | **string**|  | [optional]
 **primary_category_description** | **string**|  | [optional]
 **primary_category_no** | **int**|  | [optional]
 **secondary_category_id** | **string**|  | [optional]
 **secondary_category_description** | **string**|  | [optional]
 **secondary_category_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryUpSellPATCHRequest**](../Model/InventoryUpSellPATCHRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryUpSell**](../Model/InventoryUpSell.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpSellPOSTRequestInventoryIDUpSellsPost**
> \Jiwa\Model\InventoryUpSell inventoryUpSellPOSTRequestInventoryIDUpSellsPost($accept, $inventory_id, $jiwa_stateful, $up_sell_quantity, $up_sell_inventory_id, $up_sell_inventory_part_no, $up_sell_inventory_description, $up_sell_description, $primary_category_id, $primary_category_description, $primary_category_no, $secondary_category_id, $secondary_category_description, $secondary_category_no, $body)

Appends an up sell to an inventory item.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator
$up_sell_quantity = 1.2; // double | 
$up_sell_inventory_id = "up_sell_inventory_id_example"; // string | 
$up_sell_inventory_part_no = "up_sell_inventory_part_no_example"; // string | 
$up_sell_inventory_description = "up_sell_inventory_description_example"; // string | 
$up_sell_description = "up_sell_description_example"; // string | 
$primary_category_id = "primary_category_id_example"; // string | 
$primary_category_description = "primary_category_description_example"; // string | 
$primary_category_no = 56; // int | 
$secondary_category_id = "secondary_category_id_example"; // string | 
$secondary_category_description = "secondary_category_description_example"; // string | 
$secondary_category_no = 56; // int | 
$body = new \Jiwa\Model\InventoryUpSellPOSTRequest(); // \Jiwa\Model\InventoryUpSellPOSTRequest | 

try {
    $result = $apiInstance->inventoryUpSellPOSTRequestInventoryIDUpSellsPost($accept, $inventory_id, $jiwa_stateful, $up_sell_quantity, $up_sell_inventory_id, $up_sell_inventory_part_no, $up_sell_inventory_description, $up_sell_description, $primary_category_id, $primary_category_description, $primary_category_no, $secondary_category_id, $secondary_category_description, $secondary_category_no, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpSellPOSTRequestInventoryIDUpSellsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]
 **up_sell_quantity** | **double**|  | [optional]
 **up_sell_inventory_id** | **string**|  | [optional]
 **up_sell_inventory_part_no** | **string**|  | [optional]
 **up_sell_inventory_description** | **string**|  | [optional]
 **up_sell_description** | **string**|  | [optional]
 **primary_category_id** | **string**|  | [optional]
 **primary_category_description** | **string**|  | [optional]
 **primary_category_no** | **int**|  | [optional]
 **secondary_category_id** | **string**|  | [optional]
 **secondary_category_description** | **string**|  | [optional]
 **secondary_category_no** | **int**|  | [optional]
 **body** | [**\Jiwa\Model\InventoryUpSellPOSTRequest**](../Model/InventoryUpSellPOSTRequest.md)|  | [optional]

### Return type

[**\Jiwa\Model\InventoryUpSell**](../Model/InventoryUpSell.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryUpSellsGETManyRequestInventoryIDUpSellsGet**
> \Jiwa\Model\InventoryUpSell[] inventoryUpSellsGETManyRequestInventoryIDUpSellsGet($accept, $inventory_id, $jiwa_stateful)

Retrieves a list of inventory up sells.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = Jiwa\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Jiwa\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | Accept Header
$inventory_id = "inventory_id_example"; // string | 
$jiwa_stateful = true; // bool | Stateful indicator

try {
    $result = $apiInstance->inventoryUpSellsGETManyRequestInventoryIDUpSellsGet($accept, $inventory_id, $jiwa_stateful);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryUpSellsGETManyRequestInventoryIDUpSellsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**| Accept Header |
 **inventory_id** | **string**|  |
 **jiwa_stateful** | **bool**| Stateful indicator | [optional]

### Return type

[**\Jiwa\Model\InventoryUpSell[]**](../Model/InventoryUpSell.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

