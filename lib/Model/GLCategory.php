<?php
/**
 * GLCategory
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
 * GLCategory Class Doc Comment
 *
 * @category Class
 * @description GL_Category
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GLCategory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GL_Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gl_category_id' => 'string',
        'last_saved_date_time' => '\DateTime',
        'description' => 'string',
        'exp_sign' => 'int',
        'acc_type' => 'int',
        'group1' => 'string',
        'group2' => 'string',
        'group2_display_order' => 'int',
        'group1_display_order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gl_category_id' => null,
        'last_saved_date_time' => 'date-time',
        'description' => null,
        'exp_sign' => 'int32',
        'acc_type' => 'int32',
        'group1' => null,
        'group2' => null,
        'group2_display_order' => 'int32',
        'group1_display_order' => 'int32'
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
        'gl_category_id' => 'GLCategoryID',
        'last_saved_date_time' => 'LastSavedDateTime',
        'description' => 'Description',
        'exp_sign' => 'ExpSign',
        'acc_type' => 'AccType',
        'group1' => 'Group1',
        'group2' => 'Group2',
        'group2_display_order' => 'Group2DisplayOrder',
        'group1_display_order' => 'Group1DisplayOrder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gl_category_id' => 'setGlCategoryId',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'description' => 'setDescription',
        'exp_sign' => 'setExpSign',
        'acc_type' => 'setAccType',
        'group1' => 'setGroup1',
        'group2' => 'setGroup2',
        'group2_display_order' => 'setGroup2DisplayOrder',
        'group1_display_order' => 'setGroup1DisplayOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gl_category_id' => 'getGlCategoryId',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'description' => 'getDescription',
        'exp_sign' => 'getExpSign',
        'acc_type' => 'getAccType',
        'group1' => 'getGroup1',
        'group2' => 'getGroup2',
        'group2_display_order' => 'getGroup2DisplayOrder',
        'group1_display_order' => 'getGroup1DisplayOrder'
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
        $this->container['gl_category_id'] = isset($data['gl_category_id']) ? $data['gl_category_id'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exp_sign'] = isset($data['exp_sign']) ? $data['exp_sign'] : null;
        $this->container['acc_type'] = isset($data['acc_type']) ? $data['acc_type'] : null;
        $this->container['group1'] = isset($data['group1']) ? $data['group1'] : null;
        $this->container['group2'] = isset($data['group2']) ? $data['group2'] : null;
        $this->container['group2_display_order'] = isset($data['group2_display_order']) ? $data['group2_display_order'] : null;
        $this->container['group1_display_order'] = isset($data['group1_display_order']) ? $data['group1_display_order'] : null;
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
     * Gets gl_category_id
     *
     * @return string
     */
    public function getGlCategoryId()
    {
        return $this->container['gl_category_id'];
    }

    /**
     * Sets gl_category_id
     *
     * @param string $gl_category_id gl_category_id
     *
     * @return $this
     */
    public function setGlCategoryId($gl_category_id)
    {
        $this->container['gl_category_id'] = $gl_category_id;

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
     * Gets exp_sign
     *
     * @return int
     */
    public function getExpSign()
    {
        return $this->container['exp_sign'];
    }

    /**
     * Sets exp_sign
     *
     * @param int $exp_sign exp_sign
     *
     * @return $this
     */
    public function setExpSign($exp_sign)
    {
        $this->container['exp_sign'] = $exp_sign;

        return $this;
    }

    /**
     * Gets acc_type
     *
     * @return int
     */
    public function getAccType()
    {
        return $this->container['acc_type'];
    }

    /**
     * Sets acc_type
     *
     * @param int $acc_type acc_type
     *
     * @return $this
     */
    public function setAccType($acc_type)
    {
        $this->container['acc_type'] = $acc_type;

        return $this;
    }

    /**
     * Gets group1
     *
     * @return string
     */
    public function getGroup1()
    {
        return $this->container['group1'];
    }

    /**
     * Sets group1
     *
     * @param string $group1 group1
     *
     * @return $this
     */
    public function setGroup1($group1)
    {
        $this->container['group1'] = $group1;

        return $this;
    }

    /**
     * Gets group2
     *
     * @return string
     */
    public function getGroup2()
    {
        return $this->container['group2'];
    }

    /**
     * Sets group2
     *
     * @param string $group2 group2
     *
     * @return $this
     */
    public function setGroup2($group2)
    {
        $this->container['group2'] = $group2;

        return $this;
    }

    /**
     * Gets group2_display_order
     *
     * @return int
     */
    public function getGroup2DisplayOrder()
    {
        return $this->container['group2_display_order'];
    }

    /**
     * Sets group2_display_order
     *
     * @param int $group2_display_order group2_display_order
     *
     * @return $this
     */
    public function setGroup2DisplayOrder($group2_display_order)
    {
        $this->container['group2_display_order'] = $group2_display_order;

        return $this;
    }

    /**
     * Gets group1_display_order
     *
     * @return int
     */
    public function getGroup1DisplayOrder()
    {
        return $this->container['group1_display_order'];
    }

    /**
     * Sets group1_display_order
     *
     * @param int $group1_display_order group1_display_order
     *
     * @return $this
     */
    public function setGroup1DisplayOrder($group1_display_order)
    {
        $this->container['group1_display_order'] = $group1_display_order;

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


