<?php
/**
 * YesterdayErrorLogsGETManyRequest
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
 * YesterdayErrorLogsGETManyRequest Class Doc Comment
 *
 * @category Class
 * @description YesterdayErrorLogsGETManyRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YesterdayErrorLogsGETManyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YesterdayErrorLogsGETManyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'skip' => 'int',
        'take' => 'int',
        'order_by' => 'string',
        'order_by_desc' => 'string',
        'include' => 'string',
        'fields' => 'string',
        'meta' => '\Jiwa\JiwaModel\DictionaryStringString_'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'skip' => 'int32',
        'take' => 'int32',
        'order_by' => null,
        'order_by_desc' => null,
        'include' => null,
        'fields' => null,
        'meta' => null
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
        'skip' => 'Skip',
        'take' => 'Take',
        'order_by' => 'OrderBy',
        'order_by_desc' => 'OrderByDesc',
        'include' => 'Include',
        'fields' => 'Fields',
        'meta' => 'Meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'skip' => 'setSkip',
        'take' => 'setTake',
        'order_by' => 'setOrderBy',
        'order_by_desc' => 'setOrderByDesc',
        'include' => 'setInclude',
        'fields' => 'setFields',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'skip' => 'getSkip',
        'take' => 'getTake',
        'order_by' => 'getOrderBy',
        'order_by_desc' => 'getOrderByDesc',
        'include' => 'getInclude',
        'fields' => 'getFields',
        'meta' => 'getMeta'
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
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['take'] = isset($data['take']) ? $data['take'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['order_by_desc'] = isset($data['order_by_desc']) ? $data['order_by_desc'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
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
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip skip
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets take
     *
     * @return int
     */
    public function getTake()
    {
        return $this->container['take'];
    }

    /**
     * Sets take
     *
     * @param int $take take
     *
     * @return $this
     */
    public function setTake($take)
    {
        $this->container['take'] = $take;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param string $order_by order_by
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets order_by_desc
     *
     * @return string
     */
    public function getOrderByDesc()
    {
        return $this->container['order_by_desc'];
    }

    /**
     * Sets order_by_desc
     *
     * @param string $order_by_desc order_by_desc
     *
     * @return $this
     */
    public function setOrderByDesc($order_by_desc)
    {
        $this->container['order_by_desc'] = $order_by_desc;

        return $this;
    }

    /**
     * Gets include
     *
     * @return string
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param string $include include
     *
     * @return $this
     */
    public function setInclude($include)
    {
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \Jiwa\JiwaModel\DictionaryStringString_
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Jiwa\JiwaModel\DictionaryStringString_ $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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


