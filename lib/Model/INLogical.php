<?php
/**
 * INLogical
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
 * INLogical Class Doc Comment
 *
 * @category Class
 * @description IN_Logical
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class INLogical implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IN_Logical';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'in_logical_id' => 'string',
        'in_physical_id' => 'string',
        'last_saved_date_time' => '\DateTime',
        'description' => 'string',
        'ledger_mask' => 'string',
        'warehouse_code' => 'string',
        'in_transit' => 'bool',
        'default_in_transit' => 'bool',
        'in_region_rec_id' => 'string',
        'item_no' => 'int',
        'row_hash' => 'string',
        'colour' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'in_logical_id' => null,
        'in_physical_id' => null,
        'last_saved_date_time' => 'date-time',
        'description' => null,
        'ledger_mask' => null,
        'warehouse_code' => null,
        'in_transit' => null,
        'default_in_transit' => null,
        'in_region_rec_id' => null,
        'item_no' => 'int32',
        'row_hash' => 'binary',
        'colour' => 'int32'
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
        'in_logical_id' => 'IN_LogicalID',
        'in_physical_id' => 'IN_PhysicalID',
        'last_saved_date_time' => 'LastSavedDateTime',
        'description' => 'Description',
        'ledger_mask' => 'LedgerMask',
        'warehouse_code' => 'WarehouseCode',
        'in_transit' => 'InTransit',
        'default_in_transit' => 'DefaultInTransit',
        'in_region_rec_id' => 'IN_Region_RecID',
        'item_no' => 'ItemNo',
        'row_hash' => 'RowHash',
        'colour' => 'Colour'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'in_logical_id' => 'setInLogicalId',
        'in_physical_id' => 'setInPhysicalId',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'description' => 'setDescription',
        'ledger_mask' => 'setLedgerMask',
        'warehouse_code' => 'setWarehouseCode',
        'in_transit' => 'setInTransit',
        'default_in_transit' => 'setDefaultInTransit',
        'in_region_rec_id' => 'setInRegionRecId',
        'item_no' => 'setItemNo',
        'row_hash' => 'setRowHash',
        'colour' => 'setColour'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'in_logical_id' => 'getInLogicalId',
        'in_physical_id' => 'getInPhysicalId',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'description' => 'getDescription',
        'ledger_mask' => 'getLedgerMask',
        'warehouse_code' => 'getWarehouseCode',
        'in_transit' => 'getInTransit',
        'default_in_transit' => 'getDefaultInTransit',
        'in_region_rec_id' => 'getInRegionRecId',
        'item_no' => 'getItemNo',
        'row_hash' => 'getRowHash',
        'colour' => 'getColour'
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
        $this->container['in_logical_id'] = isset($data['in_logical_id']) ? $data['in_logical_id'] : null;
        $this->container['in_physical_id'] = isset($data['in_physical_id']) ? $data['in_physical_id'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ledger_mask'] = isset($data['ledger_mask']) ? $data['ledger_mask'] : null;
        $this->container['warehouse_code'] = isset($data['warehouse_code']) ? $data['warehouse_code'] : null;
        $this->container['in_transit'] = isset($data['in_transit']) ? $data['in_transit'] : null;
        $this->container['default_in_transit'] = isset($data['default_in_transit']) ? $data['default_in_transit'] : null;
        $this->container['in_region_rec_id'] = isset($data['in_region_rec_id']) ? $data['in_region_rec_id'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['row_hash'] = isset($data['row_hash']) ? $data['row_hash'] : null;
        $this->container['colour'] = isset($data['colour']) ? $data['colour'] : null;
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
     * Gets in_physical_id
     *
     * @return string
     */
    public function getInPhysicalId()
    {
        return $this->container['in_physical_id'];
    }

    /**
     * Sets in_physical_id
     *
     * @param string $in_physical_id in_physical_id
     *
     * @return $this
     */
    public function setInPhysicalId($in_physical_id)
    {
        $this->container['in_physical_id'] = $in_physical_id;

        return $this;
    }

    /**
     * Gets last_saved_date_time
     *
     * @return \DateTime
     */
    public function getLastSavedDateTime()
    {
        return $this->container['last_saved_date_time'];
    }

    /**
     * Sets last_saved_date_time
     *
     * @param \DateTime $last_saved_date_time last_saved_date_time
     *
     * @return $this
     */
    public function setLastSavedDateTime($last_saved_date_time)
    {
        $this->container['last_saved_date_time'] = $last_saved_date_time;

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
     * Gets ledger_mask
     *
     * @return string
     */
    public function getLedgerMask()
    {
        return $this->container['ledger_mask'];
    }

    /**
     * Sets ledger_mask
     *
     * @param string $ledger_mask ledger_mask
     *
     * @return $this
     */
    public function setLedgerMask($ledger_mask)
    {
        $this->container['ledger_mask'] = $ledger_mask;

        return $this;
    }

    /**
     * Gets warehouse_code
     *
     * @return string
     */
    public function getWarehouseCode()
    {
        return $this->container['warehouse_code'];
    }

    /**
     * Sets warehouse_code
     *
     * @param string $warehouse_code warehouse_code
     *
     * @return $this
     */
    public function setWarehouseCode($warehouse_code)
    {
        $this->container['warehouse_code'] = $warehouse_code;

        return $this;
    }

    /**
     * Gets in_transit
     *
     * @return bool
     */
    public function getInTransit()
    {
        return $this->container['in_transit'];
    }

    /**
     * Sets in_transit
     *
     * @param bool $in_transit in_transit
     *
     * @return $this
     */
    public function setInTransit($in_transit)
    {
        $this->container['in_transit'] = $in_transit;

        return $this;
    }

    /**
     * Gets default_in_transit
     *
     * @return bool
     */
    public function getDefaultInTransit()
    {
        return $this->container['default_in_transit'];
    }

    /**
     * Sets default_in_transit
     *
     * @param bool $default_in_transit default_in_transit
     *
     * @return $this
     */
    public function setDefaultInTransit($default_in_transit)
    {
        $this->container['default_in_transit'] = $default_in_transit;

        return $this;
    }

    /**
     * Gets in_region_rec_id
     *
     * @return string
     */
    public function getInRegionRecId()
    {
        return $this->container['in_region_rec_id'];
    }

    /**
     * Sets in_region_rec_id
     *
     * @param string $in_region_rec_id in_region_rec_id
     *
     * @return $this
     */
    public function setInRegionRecId($in_region_rec_id)
    {
        $this->container['in_region_rec_id'] = $in_region_rec_id;

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
     * Gets row_hash
     *
     * @return string
     */
    public function getRowHash()
    {
        return $this->container['row_hash'];
    }

    /**
     * Sets row_hash
     *
     * @param string $row_hash row_hash
     *
     * @return $this
     */
    public function setRowHash($row_hash)
    {
        $this->container['row_hash'] = $row_hash;

        return $this;
    }

    /**
     * Gets colour
     *
     * @return int
     */
    public function getColour()
    {
        return $this->container['colour'];
    }

    /**
     * Sets colour
     *
     * @param int $colour colour
     *
     * @return $this
     */
    public function setColour($colour)
    {
        $this->container['colour'] = $colour;

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


