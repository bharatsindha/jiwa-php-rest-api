<?php
/**
 * INWarehouseSOH
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

namespace Jiwa\Model;

use \ArrayAccess;
use \Jiwa\ObjectSerializer;

/**
 * INWarehouseSOH Class Doc Comment
 *
 * @category Class
 * @description IN_WarehouseSOH
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class INWarehouseSOH implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IN_WarehouseSOH';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'in_warehouse_sohid' => 'string',
        'inventory_id' => 'string',
        'in_logical_id' => 'string',
        'quantity_left' => 'double',
        'quantity_allocated' => 'double',
        'pick_allocated' => 'double',
        'ship_allocated' => 'double',
        'forward_requirements' => 'double',
        'transfer_allocated' => 'double',
        'bom_allocated' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'in_warehouse_sohid' => null,
        'inventory_id' => null,
        'in_logical_id' => null,
        'quantity_left' => 'double',
        'quantity_allocated' => 'double',
        'pick_allocated' => 'double',
        'ship_allocated' => 'double',
        'forward_requirements' => 'double',
        'transfer_allocated' => 'double',
        'bom_allocated' => 'double'
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
        'in_warehouse_sohid' => 'IN_WarehouseSOHID',
        'inventory_id' => 'InventoryID',
        'in_logical_id' => 'IN_LogicalID',
        'quantity_left' => 'QuantityLeft',
        'quantity_allocated' => 'QuantityAllocated',
        'pick_allocated' => 'PickAllocated',
        'ship_allocated' => 'ShipAllocated',
        'forward_requirements' => 'ForwardRequirements',
        'transfer_allocated' => 'TransferAllocated',
        'bom_allocated' => 'BOMAllocated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'in_warehouse_sohid' => 'setInWarehouseSohid',
        'inventory_id' => 'setInventoryId',
        'in_logical_id' => 'setInLogicalId',
        'quantity_left' => 'setQuantityLeft',
        'quantity_allocated' => 'setQuantityAllocated',
        'pick_allocated' => 'setPickAllocated',
        'ship_allocated' => 'setShipAllocated',
        'forward_requirements' => 'setForwardRequirements',
        'transfer_allocated' => 'setTransferAllocated',
        'bom_allocated' => 'setBomAllocated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'in_warehouse_sohid' => 'getInWarehouseSohid',
        'inventory_id' => 'getInventoryId',
        'in_logical_id' => 'getInLogicalId',
        'quantity_left' => 'getQuantityLeft',
        'quantity_allocated' => 'getQuantityAllocated',
        'pick_allocated' => 'getPickAllocated',
        'ship_allocated' => 'getShipAllocated',
        'forward_requirements' => 'getForwardRequirements',
        'transfer_allocated' => 'getTransferAllocated',
        'bom_allocated' => 'getBomAllocated'
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
        $this->container['in_warehouse_sohid'] = isset($data['in_warehouse_sohid']) ? $data['in_warehouse_sohid'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['in_logical_id'] = isset($data['in_logical_id']) ? $data['in_logical_id'] : null;
        $this->container['quantity_left'] = isset($data['quantity_left']) ? $data['quantity_left'] : null;
        $this->container['quantity_allocated'] = isset($data['quantity_allocated']) ? $data['quantity_allocated'] : null;
        $this->container['pick_allocated'] = isset($data['pick_allocated']) ? $data['pick_allocated'] : null;
        $this->container['ship_allocated'] = isset($data['ship_allocated']) ? $data['ship_allocated'] : null;
        $this->container['forward_requirements'] = isset($data['forward_requirements']) ? $data['forward_requirements'] : null;
        $this->container['transfer_allocated'] = isset($data['transfer_allocated']) ? $data['transfer_allocated'] : null;
        $this->container['bom_allocated'] = isset($data['bom_allocated']) ? $data['bom_allocated'] : null;
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
     * Gets in_warehouse_sohid
     *
     * @return string
     */
    public function getInWarehouseSohid()
    {
        return $this->container['in_warehouse_sohid'];
    }

    /**
     * Sets in_warehouse_sohid
     *
     * @param string $in_warehouse_sohid in_warehouse_sohid
     *
     * @return $this
     */
    public function setInWarehouseSohid($in_warehouse_sohid)
    {
        $this->container['in_warehouse_sohid'] = $in_warehouse_sohid;

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
     * Gets in_logical_id
     *
     * @return string
     */
    public function getInLogicalId()
    {
        return $this->container['in_logical_id'];
    }

    /**
     * Sets in_logical_id
     *
     * @param string $in_logical_id in_logical_id
     *
     * @return $this
     */
    public function setInLogicalId($in_logical_id)
    {
        $this->container['in_logical_id'] = $in_logical_id;

        return $this;
    }

    /**
     * Gets quantity_left
     *
     * @return double
     */
    public function getQuantityLeft()
    {
        return $this->container['quantity_left'];
    }

    /**
     * Sets quantity_left
     *
     * @param double $quantity_left quantity_left
     *
     * @return $this
     */
    public function setQuantityLeft($quantity_left)
    {
        $this->container['quantity_left'] = $quantity_left;

        return $this;
    }

    /**
     * Gets quantity_allocated
     *
     * @return double
     */
    public function getQuantityAllocated()
    {
        return $this->container['quantity_allocated'];
    }

    /**
     * Sets quantity_allocated
     *
     * @param double $quantity_allocated quantity_allocated
     *
     * @return $this
     */
    public function setQuantityAllocated($quantity_allocated)
    {
        $this->container['quantity_allocated'] = $quantity_allocated;

        return $this;
    }

    /**
     * Gets pick_allocated
     *
     * @return double
     */
    public function getPickAllocated()
    {
        return $this->container['pick_allocated'];
    }

    /**
     * Sets pick_allocated
     *
     * @param double $pick_allocated pick_allocated
     *
     * @return $this
     */
    public function setPickAllocated($pick_allocated)
    {
        $this->container['pick_allocated'] = $pick_allocated;

        return $this;
    }

    /**
     * Gets ship_allocated
     *
     * @return double
     */
    public function getShipAllocated()
    {
        return $this->container['ship_allocated'];
    }

    /**
     * Sets ship_allocated
     *
     * @param double $ship_allocated ship_allocated
     *
     * @return $this
     */
    public function setShipAllocated($ship_allocated)
    {
        $this->container['ship_allocated'] = $ship_allocated;

        return $this;
    }

    /**
     * Gets forward_requirements
     *
     * @return double
     */
    public function getForwardRequirements()
    {
        return $this->container['forward_requirements'];
    }

    /**
     * Sets forward_requirements
     *
     * @param double $forward_requirements forward_requirements
     *
     * @return $this
     */
    public function setForwardRequirements($forward_requirements)
    {
        $this->container['forward_requirements'] = $forward_requirements;

        return $this;
    }

    /**
     * Gets transfer_allocated
     *
     * @return double
     */
    public function getTransferAllocated()
    {
        return $this->container['transfer_allocated'];
    }

    /**
     * Sets transfer_allocated
     *
     * @param double $transfer_allocated transfer_allocated
     *
     * @return $this
     */
    public function setTransferAllocated($transfer_allocated)
    {
        $this->container['transfer_allocated'] = $transfer_allocated;

        return $this;
    }

    /**
     * Gets bom_allocated
     *
     * @return double
     */
    public function getBomAllocated()
    {
        return $this->container['bom_allocated'];
    }

    /**
     * Sets bom_allocated
     *
     * @param double $bom_allocated bom_allocated
     *
     * @return $this
     */
    public function setBomAllocated($bom_allocated)
    {
        $this->container['bom_allocated'] = $bom_allocated;

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


