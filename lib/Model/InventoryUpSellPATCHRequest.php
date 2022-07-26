<?php
/**
 * InventoryUpSellPATCHRequest
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
 * InventoryUpSellPATCHRequest Class Doc Comment
 *
 * @category Class
 * @description InventoryUpSellPATCHRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryUpSellPATCHRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryUpSellPATCHRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_id' => 'string',
        'up_sell_id' => 'string',
        'up_sell_quantity' => 'double',
        'up_sell_inventory_id' => 'string',
        'up_sell_inventory_part_no' => 'string',
        'up_sell_inventory_description' => 'string',
        'up_sell_description' => 'string',
        'primary_category_id' => 'string',
        'primary_category_description' => 'string',
        'primary_category_no' => 'int',
        'secondary_category_id' => 'string',
        'secondary_category_description' => 'string',
        'secondary_category_no' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_id' => null,
        'up_sell_id' => null,
        'up_sell_quantity' => 'double',
        'up_sell_inventory_id' => null,
        'up_sell_inventory_part_no' => null,
        'up_sell_inventory_description' => null,
        'up_sell_description' => null,
        'primary_category_id' => null,
        'primary_category_description' => null,
        'primary_category_no' => 'int32',
        'secondary_category_id' => null,
        'secondary_category_description' => null,
        'secondary_category_no' => 'int32'
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
        'inventory_id' => 'InventoryID',
        'up_sell_id' => 'UpSellID',
        'up_sell_quantity' => 'UpSellQuantity',
        'up_sell_inventory_id' => 'UpSellInventoryID',
        'up_sell_inventory_part_no' => 'UpSellInventoryPartNo',
        'up_sell_inventory_description' => 'UpSellInventoryDescription',
        'up_sell_description' => 'UpSellDescription',
        'primary_category_id' => 'PrimaryCategoryID',
        'primary_category_description' => 'PrimaryCategoryDescription',
        'primary_category_no' => 'PrimaryCategoryNo',
        'secondary_category_id' => 'SecondaryCategoryID',
        'secondary_category_description' => 'SecondaryCategoryDescription',
        'secondary_category_no' => 'SecondaryCategoryNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_id' => 'setInventoryId',
        'up_sell_id' => 'setUpSellId',
        'up_sell_quantity' => 'setUpSellQuantity',
        'up_sell_inventory_id' => 'setUpSellInventoryId',
        'up_sell_inventory_part_no' => 'setUpSellInventoryPartNo',
        'up_sell_inventory_description' => 'setUpSellInventoryDescription',
        'up_sell_description' => 'setUpSellDescription',
        'primary_category_id' => 'setPrimaryCategoryId',
        'primary_category_description' => 'setPrimaryCategoryDescription',
        'primary_category_no' => 'setPrimaryCategoryNo',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'secondary_category_description' => 'setSecondaryCategoryDescription',
        'secondary_category_no' => 'setSecondaryCategoryNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_id' => 'getInventoryId',
        'up_sell_id' => 'getUpSellId',
        'up_sell_quantity' => 'getUpSellQuantity',
        'up_sell_inventory_id' => 'getUpSellInventoryId',
        'up_sell_inventory_part_no' => 'getUpSellInventoryPartNo',
        'up_sell_inventory_description' => 'getUpSellInventoryDescription',
        'up_sell_description' => 'getUpSellDescription',
        'primary_category_id' => 'getPrimaryCategoryId',
        'primary_category_description' => 'getPrimaryCategoryDescription',
        'primary_category_no' => 'getPrimaryCategoryNo',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'secondary_category_description' => 'getSecondaryCategoryDescription',
        'secondary_category_no' => 'getSecondaryCategoryNo'
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
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['up_sell_id'] = isset($data['up_sell_id']) ? $data['up_sell_id'] : null;
        $this->container['up_sell_quantity'] = isset($data['up_sell_quantity']) ? $data['up_sell_quantity'] : null;
        $this->container['up_sell_inventory_id'] = isset($data['up_sell_inventory_id']) ? $data['up_sell_inventory_id'] : null;
        $this->container['up_sell_inventory_part_no'] = isset($data['up_sell_inventory_part_no']) ? $data['up_sell_inventory_part_no'] : null;
        $this->container['up_sell_inventory_description'] = isset($data['up_sell_inventory_description']) ? $data['up_sell_inventory_description'] : null;
        $this->container['up_sell_description'] = isset($data['up_sell_description']) ? $data['up_sell_description'] : null;
        $this->container['primary_category_id'] = isset($data['primary_category_id']) ? $data['primary_category_id'] : null;
        $this->container['primary_category_description'] = isset($data['primary_category_description']) ? $data['primary_category_description'] : null;
        $this->container['primary_category_no'] = isset($data['primary_category_no']) ? $data['primary_category_no'] : null;
        $this->container['secondary_category_id'] = isset($data['secondary_category_id']) ? $data['secondary_category_id'] : null;
        $this->container['secondary_category_description'] = isset($data['secondary_category_description']) ? $data['secondary_category_description'] : null;
        $this->container['secondary_category_no'] = isset($data['secondary_category_no']) ? $data['secondary_category_no'] : null;
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
     * Gets up_sell_id
     *
     * @return string
     */
    public function getUpSellId()
    {
        return $this->container['up_sell_id'];
    }

    /**
     * Sets up_sell_id
     *
     * @param string $up_sell_id up_sell_id
     *
     * @return $this
     */
    public function setUpSellId($up_sell_id)
    {
        $this->container['up_sell_id'] = $up_sell_id;

        return $this;
    }

    /**
     * Gets up_sell_quantity
     *
     * @return double
     */
    public function getUpSellQuantity()
    {
        return $this->container['up_sell_quantity'];
    }

    /**
     * Sets up_sell_quantity
     *
     * @param double $up_sell_quantity up_sell_quantity
     *
     * @return $this
     */
    public function setUpSellQuantity($up_sell_quantity)
    {
        $this->container['up_sell_quantity'] = $up_sell_quantity;

        return $this;
    }

    /**
     * Gets up_sell_inventory_id
     *
     * @return string
     */
    public function getUpSellInventoryId()
    {
        return $this->container['up_sell_inventory_id'];
    }

    /**
     * Sets up_sell_inventory_id
     *
     * @param string $up_sell_inventory_id up_sell_inventory_id
     *
     * @return $this
     */
    public function setUpSellInventoryId($up_sell_inventory_id)
    {
        $this->container['up_sell_inventory_id'] = $up_sell_inventory_id;

        return $this;
    }

    /**
     * Gets up_sell_inventory_part_no
     *
     * @return string
     */
    public function getUpSellInventoryPartNo()
    {
        return $this->container['up_sell_inventory_part_no'];
    }

    /**
     * Sets up_sell_inventory_part_no
     *
     * @param string $up_sell_inventory_part_no up_sell_inventory_part_no
     *
     * @return $this
     */
    public function setUpSellInventoryPartNo($up_sell_inventory_part_no)
    {
        $this->container['up_sell_inventory_part_no'] = $up_sell_inventory_part_no;

        return $this;
    }

    /**
     * Gets up_sell_inventory_description
     *
     * @return string
     */
    public function getUpSellInventoryDescription()
    {
        return $this->container['up_sell_inventory_description'];
    }

    /**
     * Sets up_sell_inventory_description
     *
     * @param string $up_sell_inventory_description up_sell_inventory_description
     *
     * @return $this
     */
    public function setUpSellInventoryDescription($up_sell_inventory_description)
    {
        $this->container['up_sell_inventory_description'] = $up_sell_inventory_description;

        return $this;
    }

    /**
     * Gets up_sell_description
     *
     * @return string
     */
    public function getUpSellDescription()
    {
        return $this->container['up_sell_description'];
    }

    /**
     * Sets up_sell_description
     *
     * @param string $up_sell_description up_sell_description
     *
     * @return $this
     */
    public function setUpSellDescription($up_sell_description)
    {
        $this->container['up_sell_description'] = $up_sell_description;

        return $this;
    }

    /**
     * Gets primary_category_id
     *
     * @return string
     */
    public function getPrimaryCategoryId()
    {
        return $this->container['primary_category_id'];
    }

    /**
     * Sets primary_category_id
     *
     * @param string $primary_category_id primary_category_id
     *
     * @return $this
     */
    public function setPrimaryCategoryId($primary_category_id)
    {
        $this->container['primary_category_id'] = $primary_category_id;

        return $this;
    }

    /**
     * Gets primary_category_description
     *
     * @return string
     */
    public function getPrimaryCategoryDescription()
    {
        return $this->container['primary_category_description'];
    }

    /**
     * Sets primary_category_description
     *
     * @param string $primary_category_description primary_category_description
     *
     * @return $this
     */
    public function setPrimaryCategoryDescription($primary_category_description)
    {
        $this->container['primary_category_description'] = $primary_category_description;

        return $this;
    }

    /**
     * Gets primary_category_no
     *
     * @return int
     */
    public function getPrimaryCategoryNo()
    {
        return $this->container['primary_category_no'];
    }

    /**
     * Sets primary_category_no
     *
     * @param int $primary_category_no primary_category_no
     *
     * @return $this
     */
    public function setPrimaryCategoryNo($primary_category_no)
    {
        $this->container['primary_category_no'] = $primary_category_no;

        return $this;
    }

    /**
     * Gets secondary_category_id
     *
     * @return string
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondary_category_id'];
    }

    /**
     * Sets secondary_category_id
     *
     * @param string $secondary_category_id secondary_category_id
     *
     * @return $this
     */
    public function setSecondaryCategoryId($secondary_category_id)
    {
        $this->container['secondary_category_id'] = $secondary_category_id;

        return $this;
    }

    /**
     * Gets secondary_category_description
     *
     * @return string
     */
    public function getSecondaryCategoryDescription()
    {
        return $this->container['secondary_category_description'];
    }

    /**
     * Sets secondary_category_description
     *
     * @param string $secondary_category_description secondary_category_description
     *
     * @return $this
     */
    public function setSecondaryCategoryDescription($secondary_category_description)
    {
        $this->container['secondary_category_description'] = $secondary_category_description;

        return $this;
    }

    /**
     * Gets secondary_category_no
     *
     * @return int
     */
    public function getSecondaryCategoryNo()
    {
        return $this->container['secondary_category_no'];
    }

    /**
     * Sets secondary_category_no
     *
     * @param int $secondary_category_no secondary_category_no
     *
     * @return $this
     */
    public function setSecondaryCategoryNo($secondary_category_no)
    {
        $this->container['secondary_category_no'] = $secondary_category_no;

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


