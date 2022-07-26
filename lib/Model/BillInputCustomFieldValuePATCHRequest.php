<?php
/**
 * BillInputCustomFieldValuePATCHRequest
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
 * BillInputCustomFieldValuePATCHRequest Class Doc Comment
 *
 * @category Class
 * @description BillInputCustomFieldValuePATCHRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillInputCustomFieldValuePATCHRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BillInputCustomFieldValuePATCHRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_id' => 'string',
        'stage_id' => 'string',
        'input_id' => 'string',
        'setting_id' => 'string',
        'contents' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_id' => null,
        'stage_id' => null,
        'input_id' => null,
        'setting_id' => null,
        'contents' => null
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
        'bill_id' => 'BillID',
        'stage_id' => 'StageID',
        'input_id' => 'InputID',
        'setting_id' => 'SettingID',
        'contents' => 'Contents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_id' => 'setBillId',
        'stage_id' => 'setStageId',
        'input_id' => 'setInputId',
        'setting_id' => 'setSettingId',
        'contents' => 'setContents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_id' => 'getBillId',
        'stage_id' => 'getStageId',
        'input_id' => 'getInputId',
        'setting_id' => 'getSettingId',
        'contents' => 'getContents'
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
        $this->container['bill_id'] = isset($data['bill_id']) ? $data['bill_id'] : null;
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['input_id'] = isset($data['input_id']) ? $data['input_id'] : null;
        $this->container['setting_id'] = isset($data['setting_id']) ? $data['setting_id'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
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
     * Gets bill_id
     *
     * @return string
     */
    public function getBillId()
    {
        return $this->container['bill_id'];
    }

    /**
     * Sets bill_id
     *
     * @param string $bill_id bill_id
     *
     * @return $this
     */
    public function setBillId($bill_id)
    {
        $this->container['bill_id'] = $bill_id;

        return $this;
    }

    /**
     * Gets stage_id
     *
     * @return string
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param string $stage_id stage_id
     *
     * @return $this
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets input_id
     *
     * @return string
     */
    public function getInputId()
    {
        return $this->container['input_id'];
    }

    /**
     * Sets input_id
     *
     * @param string $input_id input_id
     *
     * @return $this
     */
    public function setInputId($input_id)
    {
        $this->container['input_id'] = $input_id;

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
     * Gets contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string $contents contents
     *
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

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


