<?php
/**
 * InventoryUnitOfMeasure
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
 * InventoryUnitOfMeasure Class Doc Comment
 *
 * @category Class
 * @description InventoryUnitOfMeasure
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryUnitOfMeasure implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryUnitOfMeasure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rec_id' => 'string',
        'inner_unit_of_measure' => '\Jiwa\JiwaModel\InventoryUnitOfMeasure',
        'quantity_inners_per_unit_of_measure' => 'double',
        'is_sell' => 'bool',
        'is_purchase' => 'bool',
        'item_no' => 'int',
        'last_saved_date_time' => '\DateTime',
        'unit_of_measure_id' => 'string',
        'name' => 'string',
        'part_no' => 'string',
        'barcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rec_id' => null,
        'inner_unit_of_measure' => null,
        'quantity_inners_per_unit_of_measure' => 'double',
        'is_sell' => null,
        'is_purchase' => null,
        'item_no' => 'int32',
        'last_saved_date_time' => 'date-time',
        'unit_of_measure_id' => null,
        'name' => null,
        'part_no' => null,
        'barcode' => null
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
        'rec_id' => 'RecID',
        'inner_unit_of_measure' => 'InnerUnitOfMeasure',
        'quantity_inners_per_unit_of_measure' => 'QuantityInnersPerUnitOfMeasure',
        'is_sell' => 'IsSell',
        'is_purchase' => 'IsPurchase',
        'item_no' => 'ItemNo',
        'last_saved_date_time' => 'LastSavedDateTime',
        'unit_of_measure_id' => 'UnitOfMeasureID',
        'name' => 'Name',
        'part_no' => 'PartNo',
        'barcode' => 'Barcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rec_id' => 'setRecId',
        'inner_unit_of_measure' => 'setInnerUnitOfMeasure',
        'quantity_inners_per_unit_of_measure' => 'setQuantityInnersPerUnitOfMeasure',
        'is_sell' => 'setIsSell',
        'is_purchase' => 'setIsPurchase',
        'item_no' => 'setItemNo',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'unit_of_measure_id' => 'setUnitOfMeasureId',
        'name' => 'setName',
        'part_no' => 'setPartNo',
        'barcode' => 'setBarcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rec_id' => 'getRecId',
        'inner_unit_of_measure' => 'getInnerUnitOfMeasure',
        'quantity_inners_per_unit_of_measure' => 'getQuantityInnersPerUnitOfMeasure',
        'is_sell' => 'getIsSell',
        'is_purchase' => 'getIsPurchase',
        'item_no' => 'getItemNo',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'unit_of_measure_id' => 'getUnitOfMeasureId',
        'name' => 'getName',
        'part_no' => 'getPartNo',
        'barcode' => 'getBarcode'
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
        $this->container['rec_id'] = isset($data['rec_id']) ? $data['rec_id'] : null;
        $this->container['inner_unit_of_measure'] = isset($data['inner_unit_of_measure']) ? $data['inner_unit_of_measure'] : null;
        $this->container['quantity_inners_per_unit_of_measure'] = isset($data['quantity_inners_per_unit_of_measure']) ? $data['quantity_inners_per_unit_of_measure'] : null;
        $this->container['is_sell'] = isset($data['is_sell']) ? $data['is_sell'] : null;
        $this->container['is_purchase'] = isset($data['is_purchase']) ? $data['is_purchase'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['unit_of_measure_id'] = isset($data['unit_of_measure_id']) ? $data['unit_of_measure_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['part_no'] = isset($data['part_no']) ? $data['part_no'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
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
     * Gets rec_id
     *
     * @return string
     */
    public function getRecId()
    {
        return $this->container['rec_id'];
    }

    /**
     * Sets rec_id
     *
     * @param string $rec_id rec_id
     *
     * @return $this
     */
    public function setRecId($rec_id)
    {
        $this->container['rec_id'] = $rec_id;

        return $this;
    }

    /**
     * Gets inner_unit_of_measure
     *
     * @return \Jiwa\JiwaModel\InventoryUnitOfMeasure
     */
    public function getInnerUnitOfMeasure()
    {
        return $this->container['inner_unit_of_measure'];
    }

    /**
     * Sets inner_unit_of_measure
     *
     * @param \Jiwa\JiwaModel\InventoryUnitOfMeasure $inner_unit_of_measure inner_unit_of_measure
     *
     * @return $this
     */
    public function setInnerUnitOfMeasure($inner_unit_of_measure)
    {
        $this->container['inner_unit_of_measure'] = $inner_unit_of_measure;

        return $this;
    }

    /**
     * Gets quantity_inners_per_unit_of_measure
     *
     * @return double
     */
    public function getQuantityInnersPerUnitOfMeasure()
    {
        return $this->container['quantity_inners_per_unit_of_measure'];
    }

    /**
     * Sets quantity_inners_per_unit_of_measure
     *
     * @param double $quantity_inners_per_unit_of_measure quantity_inners_per_unit_of_measure
     *
     * @return $this
     */
    public function setQuantityInnersPerUnitOfMeasure($quantity_inners_per_unit_of_measure)
    {
        $this->container['quantity_inners_per_unit_of_measure'] = $quantity_inners_per_unit_of_measure;

        return $this;
    }

    /**
     * Gets is_sell
     *
     * @return bool
     */
    public function getIsSell()
    {
        return $this->container['is_sell'];
    }

    /**
     * Sets is_sell
     *
     * @param bool $is_sell is_sell
     *
     * @return $this
     */
    public function setIsSell($is_sell)
    {
        $this->container['is_sell'] = $is_sell;

        return $this;
    }

    /**
     * Gets is_purchase
     *
     * @return bool
     */
    public function getIsPurchase()
    {
        return $this->container['is_purchase'];
    }

    /**
     * Sets is_purchase
     *
     * @param bool $is_purchase is_purchase
     *
     * @return $this
     */
    public function setIsPurchase($is_purchase)
    {
        $this->container['is_purchase'] = $is_purchase;

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
     * Gets unit_of_measure_id
     *
     * @return string
     */
    public function getUnitOfMeasureId()
    {
        return $this->container['unit_of_measure_id'];
    }

    /**
     * Sets unit_of_measure_id
     *
     * @param string $unit_of_measure_id unit_of_measure_id
     *
     * @return $this
     */
    public function setUnitOfMeasureId($unit_of_measure_id)
    {
        $this->container['unit_of_measure_id'] = $unit_of_measure_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

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

