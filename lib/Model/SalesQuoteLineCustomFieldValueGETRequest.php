<?php
/**
 * SalesQuoteLineCustomFieldValueGETRequest
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
 * SalesQuoteLineCustomFieldValueGETRequest Class Doc Comment
 *
 * @category Class
 * @description SalesQuoteLineCustomFieldValueGETRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesQuoteLineCustomFieldValueGETRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesQuoteLineCustomFieldValueGETRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quote_id' => 'string',
        'quote_history_id' => 'string',
        'quote_line_id' => 'string',
        'setting_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quote_id' => null,
        'quote_history_id' => null,
        'quote_line_id' => null,
        'setting_id' => null
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
        'quote_id' => 'QuoteID',
        'quote_history_id' => 'QuoteHistoryID',
        'quote_line_id' => 'QuoteLineID',
        'setting_id' => 'SettingID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_id' => 'setQuoteId',
        'quote_history_id' => 'setQuoteHistoryId',
        'quote_line_id' => 'setQuoteLineId',
        'setting_id' => 'setSettingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_id' => 'getQuoteId',
        'quote_history_id' => 'getQuoteHistoryId',
        'quote_line_id' => 'getQuoteLineId',
        'setting_id' => 'getSettingId'
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
        $this->container['quote_id'] = isset($data['quote_id']) ? $data['quote_id'] : null;
        $this->container['quote_history_id'] = isset($data['quote_history_id']) ? $data['quote_history_id'] : null;
        $this->container['quote_line_id'] = isset($data['quote_line_id']) ? $data['quote_line_id'] : null;
        $this->container['setting_id'] = isset($data['setting_id']) ? $data['setting_id'] : null;
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
     * Gets quote_id
     *
     * @return string
     */
    public function getQuoteId()
    {
        return $this->container['quote_id'];
    }

    /**
     * Sets quote_id
     *
     * @param string $quote_id quote_id
     *
     * @return $this
     */
    public function setQuoteId($quote_id)
    {
        $this->container['quote_id'] = $quote_id;

        return $this;
    }

    /**
     * Gets quote_history_id
     *
     * @return string
     */
    public function getQuoteHistoryId()
    {
        return $this->container['quote_history_id'];
    }

    /**
     * Sets quote_history_id
     *
     * @param string $quote_history_id quote_history_id
     *
     * @return $this
     */
    public function setQuoteHistoryId($quote_history_id)
    {
        $this->container['quote_history_id'] = $quote_history_id;

        return $this;
    }

    /**
     * Gets quote_line_id
     *
     * @return string
     */
    public function getQuoteLineId()
    {
        return $this->container['quote_line_id'];
    }

    /**
     * Sets quote_line_id
     *
     * @param string $quote_line_id quote_line_id
     *
     * @return $this
     */
    public function setQuoteLineId($quote_line_id)
    {
        $this->container['quote_line_id'] = $quote_line_id;

        return $this;
    }

    /**
     * Gets setting_id
     *
     * @return string
     */
    public function getSettingId()
    {
        return $this->container['setting_id'];
    }

    /**
     * Sets setting_id
     *
     * @param string $setting_id setting_id
     *
     * @return $this
     */
    public function setSettingId($setting_id)
    {
        $this->container['setting_id'] = $setting_id;

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


