<?php
/**
 * WarehouseTransferOutLineDELETERequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JiwaAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Jiwa\JiwaModel;

use \ArrayAccess;
use \Jiwa\ObjectSerializer;

/**
 * WarehouseTransferOutLineDELETERequest Class Doc Comment
 *
 * @category Class
 * @description WarehouseTransferOutLineDELETERequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WarehouseTransferOutLineDELETERequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WarehouseTransferOutLineDELETERequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warehouse_transfer_out_id' => 'string',
        'warehouse_transfer_out_line_id' => 'string',
        'item_no' => 'int',
        'inventory_id' => 'string',
        'part_no' => 'string',
        'description' => 'string',
        'decimal_places' => 'int',
        'quantity_wanted' => 'double',
        'quantity_transferred' => 'double',
        'quantity_back_ordered' => 'double',
        'cost' => 'double',
        'ref' => 'string',
        'back_order_id' => 'string',
        'purchase_order_id' => 'string',
        'purchase_order_line_id' => 'string',
        'total_cost_transferred' => 'double',
        'total_cost_received' => 'double',
        'added_cost_ledger1_rec_id' => 'string',
        'added_cost_ledger1_account_no' => 'string',
        'added_cost_ledger1_description' => 'string',
        'added_cost_ledger2_rec_id' => 'string',
        'added_cost_ledger2_account_no' => 'string',
        'added_cost_ledger2_description' => 'string',
        'added_cost_ledger3_rec_id' => 'string',
        'added_cost_ledger3_account_no' => 'string',
        'added_cost_ledger3_description' => 'string',
        'line_details' => '\Jiwa\JiwaModel\WarehouseTransferOutLineDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warehouse_transfer_out_id' => null,
        'warehouse_transfer_out_line_id' => null,
        'item_no' => 'int32',
        'inventory_id' => null,
        'part_no' => null,
        'description' => null,
        'decimal_places' => 'int32',
        'quantity_wanted' => 'double',
        'quantity_transferred' => 'double',
        'quantity_back_ordered' => 'double',
        'cost' => 'double',
        'ref' => null,
        'back_order_id' => null,
        'purchase_order_id' => null,
        'purchase_order_line_id' => null,
        'total_cost_transferred' => 'double',
        'total_cost_received' => 'double',
        'added_cost_ledger1_rec_id' => null,
        'added_cost_ledger1_account_no' => null,
        'added_cost_ledger1_description' => null,
        'added_cost_ledger2_rec_id' => null,
        'added_cost_ledger2_account_no' => null,
        'added_cost_ledger2_description' => null,
        'added_cost_ledger3_rec_id' => null,
        'added_cost_ledger3_account_no' => null,
        'added_cost_ledger3_description' => null,
        'line_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'warehouse_transfer_out_id' => 'WarehouseTransferOutID',
        'warehouse_transfer_out_line_id' => 'WarehouseTransferOutLineID',
        'item_no' => 'ItemNo',
        'inventory_id' => 'InventoryID',
        'part_no' => 'PartNo',
        'description' => 'Description',
        'decimal_places' => 'DecimalPlaces',
        'quantity_wanted' => 'QuantityWanted',
        'quantity_transferred' => 'QuantityTransferred',
        'quantity_back_ordered' => 'QuantityBackOrdered',
        'cost' => 'Cost',
        'ref' => 'Ref',
        'back_order_id' => 'BackOrderID',
        'purchase_order_id' => 'PurchaseOrderID',
        'purchase_order_line_id' => 'PurchaseOrderLineID',
        'total_cost_transferred' => 'TotalCostTransferred',
        'total_cost_received' => 'TotalCostReceived',
        'added_cost_ledger1_rec_id' => 'AddedCostLedger1RecID',
        'added_cost_ledger1_account_no' => 'AddedCostLedger1AccountNo',
        'added_cost_ledger1_description' => 'AddedCostLedger1Description',
        'added_cost_ledger2_rec_id' => 'AddedCostLedger2RecID',
        'added_cost_ledger2_account_no' => 'AddedCostLedger2AccountNo',
        'added_cost_ledger2_description' => 'AddedCostLedger2Description',
        'added_cost_ledger3_rec_id' => 'AddedCostLedger3RecID',
        'added_cost_ledger3_account_no' => 'AddedCostLedger3AccountNo',
        'added_cost_ledger3_description' => 'AddedCostLedger3Description',
        'line_details' => 'LineDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouse_transfer_out_id' => 'setWarehouseTransferOutId',
        'warehouse_transfer_out_line_id' => 'setWarehouseTransferOutLineId',
        'item_no' => 'setItemNo',
        'inventory_id' => 'setInventoryId',
        'part_no' => 'setPartNo',
        'description' => 'setDescription',
        'decimal_places' => 'setDecimalPlaces',
        'quantity_wanted' => 'setQuantityWanted',
        'quantity_transferred' => 'setQuantityTransferred',
        'quantity_back_ordered' => 'setQuantityBackOrdered',
        'cost' => 'setCost',
        'ref' => 'setRef',
        'back_order_id' => 'setBackOrderId',
        'purchase_order_id' => 'setPurchaseOrderId',
        'purchase_order_line_id' => 'setPurchaseOrderLineId',
        'total_cost_transferred' => 'setTotalCostTransferred',
        'total_cost_received' => 'setTotalCostReceived',
        'added_cost_ledger1_rec_id' => 'setAddedCostLedger1RecId',
        'added_cost_ledger1_account_no' => 'setAddedCostLedger1AccountNo',
        'added_cost_ledger1_description' => 'setAddedCostLedger1Description',
        'added_cost_ledger2_rec_id' => 'setAddedCostLedger2RecId',
        'added_cost_ledger2_account_no' => 'setAddedCostLedger2AccountNo',
        'added_cost_ledger2_description' => 'setAddedCostLedger2Description',
        'added_cost_ledger3_rec_id' => 'setAddedCostLedger3RecId',
        'added_cost_ledger3_account_no' => 'setAddedCostLedger3AccountNo',
        'added_cost_ledger3_description' => 'setAddedCostLedger3Description',
        'line_details' => 'setLineDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse_transfer_out_id' => 'getWarehouseTransferOutId',
        'warehouse_transfer_out_line_id' => 'getWarehouseTransferOutLineId',
        'item_no' => 'getItemNo',
        'inventory_id' => 'getInventoryId',
        'part_no' => 'getPartNo',
        'description' => 'getDescription',
        'decimal_places' => 'getDecimalPlaces',
        'quantity_wanted' => 'getQuantityWanted',
        'quantity_transferred' => 'getQuantityTransferred',
        'quantity_back_ordered' => 'getQuantityBackOrdered',
        'cost' => 'getCost',
        'ref' => 'getRef',
        'back_order_id' => 'getBackOrderId',
        'purchase_order_id' => 'getPurchaseOrderId',
        'purchase_order_line_id' => 'getPurchaseOrderLineId',
        'total_cost_transferred' => 'getTotalCostTransferred',
        'total_cost_received' => 'getTotalCostReceived',
        'added_cost_ledger1_rec_id' => 'getAddedCostLedger1RecId',
        'added_cost_ledger1_account_no' => 'getAddedCostLedger1AccountNo',
        'added_cost_ledger1_description' => 'getAddedCostLedger1Description',
        'added_cost_ledger2_rec_id' => 'getAddedCostLedger2RecId',
        'added_cost_ledger2_account_no' => 'getAddedCostLedger2AccountNo',
        'added_cost_ledger2_description' => 'getAddedCostLedger2Description',
        'added_cost_ledger3_rec_id' => 'getAddedCostLedger3RecId',
        'added_cost_ledger3_account_no' => 'getAddedCostLedger3AccountNo',
        'added_cost_ledger3_description' => 'getAddedCostLedger3Description',
        'line_details' => 'getLineDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['warehouse_transfer_out_id'] = isset($data['warehouse_transfer_out_id']) ? $data['warehouse_transfer_out_id'] : null;
        $this->container['warehouse_transfer_out_line_id'] = isset($data['warehouse_transfer_out_line_id']) ? $data['warehouse_transfer_out_line_id'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['part_no'] = isset($data['part_no']) ? $data['part_no'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['decimal_places'] = isset($data['decimal_places']) ? $data['decimal_places'] : null;
        $this->container['quantity_wanted'] = isset($data['quantity_wanted']) ? $data['quantity_wanted'] : null;
        $this->container['quantity_transferred'] = isset($data['quantity_transferred']) ? $data['quantity_transferred'] : null;
        $this->container['quantity_back_ordered'] = isset($data['quantity_back_ordered']) ? $data['quantity_back_ordered'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['back_order_id'] = isset($data['back_order_id']) ? $data['back_order_id'] : null;
        $this->container['purchase_order_id'] = isset($data['purchase_order_id']) ? $data['purchase_order_id'] : null;
        $this->container['purchase_order_line_id'] = isset($data['purchase_order_line_id']) ? $data['purchase_order_line_id'] : null;
        $this->container['total_cost_transferred'] = isset($data['total_cost_transferred']) ? $data['total_cost_transferred'] : null;
        $this->container['total_cost_received'] = isset($data['total_cost_received']) ? $data['total_cost_received'] : null;
        $this->container['added_cost_ledger1_rec_id'] = isset($data['added_cost_ledger1_rec_id']) ? $data['added_cost_ledger1_rec_id'] : null;
        $this->container['added_cost_ledger1_account_no'] = isset($data['added_cost_ledger1_account_no']) ? $data['added_cost_ledger1_account_no'] : null;
        $this->container['added_cost_ledger1_description'] = isset($data['added_cost_ledger1_description']) ? $data['added_cost_ledger1_description'] : null;
        $this->container['added_cost_ledger2_rec_id'] = isset($data['added_cost_ledger2_rec_id']) ? $data['added_cost_ledger2_rec_id'] : null;
        $this->container['added_cost_ledger2_account_no'] = isset($data['added_cost_ledger2_account_no']) ? $data['added_cost_ledger2_account_no'] : null;
        $this->container['added_cost_ledger2_description'] = isset($data['added_cost_ledger2_description']) ? $data['added_cost_ledger2_description'] : null;
        $this->container['added_cost_ledger3_rec_id'] = isset($data['added_cost_ledger3_rec_id']) ? $data['added_cost_ledger3_rec_id'] : null;
        $this->container['added_cost_ledger3_account_no'] = isset($data['added_cost_ledger3_account_no']) ? $data['added_cost_ledger3_account_no'] : null;
        $this->container['added_cost_ledger3_description'] = isset($data['added_cost_ledger3_description']) ? $data['added_cost_ledger3_description'] : null;
        $this->container['line_details'] = isset($data['line_details']) ? $data['line_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets warehouse_transfer_out_id
     *
     * @return string
     */
    public function getWarehouseTransferOutId()
    {
        return $this->container['warehouse_transfer_out_id'];
    }

    /**
     * Sets warehouse_transfer_out_id
     *
     * @param string $warehouse_transfer_out_id warehouse_transfer_out_id
     *
     * @return $this
     */
    public function setWarehouseTransferOutId($warehouse_transfer_out_id)
    {
        $this->container['warehouse_transfer_out_id'] = $warehouse_transfer_out_id;

        return $this;
    }

    /**
     * Gets warehouse_transfer_out_line_id
     *
     * @return string
     */
    public function getWarehouseTransferOutLineId()
    {
        return $this->container['warehouse_transfer_out_line_id'];
    }

    /**
     * Sets warehouse_transfer_out_line_id
     *
     * @param string $warehouse_transfer_out_line_id warehouse_transfer_out_line_id
     *
     * @return $this
     */
    public function setWarehouseTransferOutLineId($warehouse_transfer_out_line_id)
    {
        $this->container['warehouse_transfer_out_line_id'] = $warehouse_transfer_out_line_id;

        return $this;
    }

    /**
     * Gets item_no
     *
     * @return int
     */
    public function getItemNo()
    {
        return $this->container['item_no'];
    }

    /**
     * Sets item_no
     *
     * @param int $item_no item_no
     *
     * @return $this
     */
    public function setItemNo($item_no)
    {
        $this->container['item_no'] = $item_no;

        return $this;
    }

    /**
     * Gets inventory_id
     *
     * @return string
     */
    public function getInventoryId()
    {
        return $this->container['inventory_id'];
    }

    /**
     * Sets inventory_id
     *
     * @param string $inventory_id inventory_id
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

        return $this;
    }

    /**
     * Gets part_no
     *
     * @return string
     */
    public function getPartNo()
    {
        return $this->container['part_no'];
    }

    /**
     * Sets part_no
     *
     * @param string $part_no part_no
     *
     * @return $this
     */
    public function setPartNo($part_no)
    {
        $this->container['part_no'] = $part_no;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets decimal_places
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->container['decimal_places'];
    }

    /**
     * Sets decimal_places
     *
     * @param int $decimal_places decimal_places
     *
     * @return $this
     */
    public function setDecimalPlaces($decimal_places)
    {
        $this->container['decimal_places'] = $decimal_places;

        return $this;
    }

    /**
     * Gets quantity_wanted
     *
     * @return double
     */
    public function getQuantityWanted()
    {
        return $this->container['quantity_wanted'];
    }

    /**
     * Sets quantity_wanted
     *
     * @param double $quantity_wanted quantity_wanted
     *
     * @return $this
     */
    public function setQuantityWanted($quantity_wanted)
    {
        $this->container['quantity_wanted'] = $quantity_wanted;

        return $this;
    }

    /**
     * Gets quantity_transferred
     *
     * @return double
     */
    public function getQuantityTransferred()
    {
        return $this->container['quantity_transferred'];
    }

    /**
     * Sets quantity_transferred
     *
     * @param double $quantity_transferred quantity_transferred
     *
     * @return $this
     */
    public function setQuantityTransferred($quantity_transferred)
    {
        $this->container['quantity_transferred'] = $quantity_transferred;

        return $this;
    }

    /**
     * Gets quantity_back_ordered
     *
     * @return double
     */
    public function getQuantityBackOrdered()
    {
        return $this->container['quantity_back_ordered'];
    }

    /**
     * Sets quantity_back_ordered
     *
     * @param double $quantity_back_ordered quantity_back_ordered
     *
     * @return $this
     */
    public function setQuantityBackOrdered($quantity_back_ordered)
    {
        $this->container['quantity_back_ordered'] = $quantity_back_ordered;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref ref
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets back_order_id
     *
     * @return string
     */
    public function getBackOrderId()
    {
        return $this->container['back_order_id'];
    }

    /**
     * Sets back_order_id
     *
     * @param string $back_order_id back_order_id
     *
     * @return $this
     */
    public function setBackOrderId($back_order_id)
    {
        $this->container['back_order_id'] = $back_order_id;

        return $this;
    }

    /**
     * Gets purchase_order_id
     *
     * @return string
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchase_order_id'];
    }

    /**
     * Sets purchase_order_id
     *
     * @param string $purchase_order_id purchase_order_id
     *
     * @return $this
     */
    public function setPurchaseOrderId($purchase_order_id)
    {
        $this->container['purchase_order_id'] = $purchase_order_id;

        return $this;
    }

    /**
     * Gets purchase_order_line_id
     *
     * @return string
     */
    public function getPurchaseOrderLineId()
    {
        return $this->container['purchase_order_line_id'];
    }

    /**
     * Sets purchase_order_line_id
     *
     * @param string $purchase_order_line_id purchase_order_line_id
     *
     * @return $this
     */
    public function setPurchaseOrderLineId($purchase_order_line_id)
    {
        $this->container['purchase_order_line_id'] = $purchase_order_line_id;

        return $this;
    }

    /**
     * Gets total_cost_transferred
     *
     * @return double
     */
    public function getTotalCostTransferred()
    {
        return $this->container['total_cost_transferred'];
    }

    /**
     * Sets total_cost_transferred
     *
     * @param double $total_cost_transferred total_cost_transferred
     *
     * @return $this
     */
    public function setTotalCostTransferred($total_cost_transferred)
    {
        $this->container['total_cost_transferred'] = $total_cost_transferred;

        return $this;
    }

    /**
     * Gets total_cost_received
     *
     * @return double
     */
    public function getTotalCostReceived()
    {
        return $this->container['total_cost_received'];
    }

    /**
     * Sets total_cost_received
     *
     * @param double $total_cost_received total_cost_received
     *
     * @return $this
     */
    public function setTotalCostReceived($total_cost_received)
    {
        $this->container['total_cost_received'] = $total_cost_received;

        return $this;
    }

    /**
     * Gets added_cost_ledger1_rec_id
     *
     * @return string
     */
    public function getAddedCostLedger1RecId()
    {
        return $this->container['added_cost_ledger1_rec_id'];
    }

    /**
     * Sets added_cost_ledger1_rec_id
     *
     * @param string $added_cost_ledger1_rec_id added_cost_ledger1_rec_id
     *
     * @return $this
     */
    public function setAddedCostLedger1RecId($added_cost_ledger1_rec_id)
    {
        $this->container['added_cost_ledger1_rec_id'] = $added_cost_ledger1_rec_id;

        return $this;
    }

    /**
     * Gets added_cost_ledger1_account_no
     *
     * @return string
     */
    public function getAddedCostLedger1AccountNo()
    {
        return $this->container['added_cost_ledger1_account_no'];
    }

    /**
     * Sets added_cost_ledger1_account_no
     *
     * @param string $added_cost_ledger1_account_no added_cost_ledger1_account_no
     *
     * @return $this
     */
    public function setAddedCostLedger1AccountNo($added_cost_ledger1_account_no)
    {
        $this->container['added_cost_ledger1_account_no'] = $added_cost_ledger1_account_no;

        return $this;
    }

    /**
     * Gets added_cost_ledger1_description
     *
     * @return string
     */
    public function getAddedCostLedger1Description()
    {
        return $this->container['added_cost_ledger1_description'];
    }

    /**
     * Sets added_cost_ledger1_description
     *
     * @param string $added_cost_ledger1_description added_cost_ledger1_description
     *
     * @return $this
     */
    public function setAddedCostLedger1Description($added_cost_ledger1_description)
    {
        $this->container['added_cost_ledger1_description'] = $added_cost_ledger1_description;

        return $this;
    }

    /**
     * Gets added_cost_ledger2_rec_id
     *
     * @return string
     */
    public function getAddedCostLedger2RecId()
    {
        return $this->container['added_cost_ledger2_rec_id'];
    }

    /**
     * Sets added_cost_ledger2_rec_id
     *
     * @param string $added_cost_ledger2_rec_id added_cost_ledger2_rec_id
     *
     * @return $this
     */
    public function setAddedCostLedger2RecId($added_cost_ledger2_rec_id)
    {
        $this->container['added_cost_ledger2_rec_id'] = $added_cost_ledger2_rec_id;

        return $this;
    }

    /**
     * Gets added_cost_ledger2_account_no
     *
     * @return string
     */
    public function getAddedCostLedger2AccountNo()
    {
        return $this->container['added_cost_ledger2_account_no'];
    }

    /**
     * Sets added_cost_ledger2_account_no
     *
     * @param string $added_cost_ledger2_account_no added_cost_ledger2_account_no
     *
     * @return $this
     */
    public function setAddedCostLedger2AccountNo($added_cost_ledger2_account_no)
    {
        $this->container['added_cost_ledger2_account_no'] = $added_cost_ledger2_account_no;

        return $this;
    }

    /**
     * Gets added_cost_ledger2_description
     *
     * @return string
     */
    public function getAddedCostLedger2Description()
    {
        return $this->container['added_cost_ledger2_description'];
    }

    /**
     * Sets added_cost_ledger2_description
     *
     * @param string $added_cost_ledger2_description added_cost_ledger2_description
     *
     * @return $this
     */
    public function setAddedCostLedger2Description($added_cost_ledger2_description)
    {
        $this->container['added_cost_ledger2_description'] = $added_cost_ledger2_description;

        return $this;
    }

    /**
     * Gets added_cost_ledger3_rec_id
     *
     * @return string
     */
    public function getAddedCostLedger3RecId()
    {
        return $this->container['added_cost_ledger3_rec_id'];
    }

    /**
     * Sets added_cost_ledger3_rec_id
     *
     * @param string $added_cost_ledger3_rec_id added_cost_ledger3_rec_id
     *
     * @return $this
     */
    public function setAddedCostLedger3RecId($added_cost_ledger3_rec_id)
    {
        $this->container['added_cost_ledger3_rec_id'] = $added_cost_ledger3_rec_id;

        return $this;
    }

    /**
     * Gets added_cost_ledger3_account_no
     *
     * @return string
     */
    public function getAddedCostLedger3AccountNo()
    {
        return $this->container['added_cost_ledger3_account_no'];
    }

    /**
     * Sets added_cost_ledger3_account_no
     *
     * @param string $added_cost_ledger3_account_no added_cost_ledger3_account_no
     *
     * @return $this
     */
    public function setAddedCostLedger3AccountNo($added_cost_ledger3_account_no)
    {
        $this->container['added_cost_ledger3_account_no'] = $added_cost_ledger3_account_no;

        return $this;
    }

    /**
     * Gets added_cost_ledger3_description
     *
     * @return string
     */
    public function getAddedCostLedger3Description()
    {
        return $this->container['added_cost_ledger3_description'];
    }

    /**
     * Sets added_cost_ledger3_description
     *
     * @param string $added_cost_ledger3_description added_cost_ledger3_description
     *
     * @return $this
     */
    public function setAddedCostLedger3Description($added_cost_ledger3_description)
    {
        $this->container['added_cost_ledger3_description'] = $added_cost_ledger3_description;

        return $this;
    }

    /**
     * Gets line_details
     *
     * @return \Jiwa\JiwaModel\WarehouseTransferOutLineDetail[]
     */
    public function getLineDetails()
    {
        return $this->container['line_details'];
    }

    /**
     * Sets line_details
     *
     * @param \Jiwa\JiwaModel\WarehouseTransferOutLineDetail[] $line_details line_details
     *
     * @return $this
     */
    public function setLineDetails($line_details)
    {
        $this->container['line_details'] = $line_details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


