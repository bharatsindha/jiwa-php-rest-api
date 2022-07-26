<?php
/**
 * InventoryOrderLevelGETRequest
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
 * InventoryOrderLevelGETRequest Class Doc Comment
 *
 * @category Class
 * @description InventoryOrderLevelGETRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryOrderLevelGETRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryOrderLevelGETRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'logical_warehouse_id' => 'string',
        'inventory_id' => 'string',
        'period_no' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'logical_warehouse_id' => null,
        'inventory_id' => null,
        'period_no' => 'int32'
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
        'logical_warehouse_id' => 'LogicalWarehouseID',
        'inventory_id' => 'InventoryID',
        'period_no' => 'PeriodNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'logical_warehouse_id' => 'setLogicalWarehouseId',
        'inventory_id' => 'setInventoryId',
        'period_no' => 'setPeriodNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'logical_warehouse_id' => 'getLogicalWarehouseId',
        'inventory_id' => 'getInventoryId',
        'period_no' => 'getPeriodNo'
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
        $this->container['logical_warehouse_id'] = isset($data['logical_warehouse_id']) ? $data['logical_warehouse_id'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['period_no'] = isset($data['period_no']) ? $data['period_no'] : null;
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
     * Gets logical_warehouse_id
     *
     * @return string
     */
    public function getLogicalWarehouseId()
    {
        return $this->container['logical_warehouse_id'];
    }

    /**
     * Sets logical_warehouse_id
     *
     * @param string $logical_warehouse_id logical_warehouse_id
     *
     * @return $this
     */
    public function setLogicalWarehouseId($logical_warehouse_id)
    {
        $this->container['logical_warehouse_id'] = $logical_warehouse_id;

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
     * Gets period_no
     *
     * @return int
     */
    public function getPeriodNo()
    {
        return $this->container['period_no'];
    }

    /**
     * Sets period_no
     *
     * @param int $period_no period_no
     *
     * @return $this
     */
    public function setPeriodNo($period_no)
    {
        $this->container['period_no'] = $period_no;

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


