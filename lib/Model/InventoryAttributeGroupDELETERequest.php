<?php
/**
 * InventoryAttributeGroupDELETERequest
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
 * InventoryAttributeGroupDELETERequest Class Doc Comment
 *
 * @category Class
 * @description InventoryAttributeGroupDELETERequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryAttributeGroupDELETERequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryAttributeGroupDELETERequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_id' => 'string',
        'attribute_group_id' => 'string',
        'template' => '\Jiwa\JiwaModel\InventoryAttributeGroupTemplate',
        'last_saved_date_time' => '\DateTime',
        'description' => 'string',
        'attributes' => '\Jiwa\JiwaModel\InventoryAttributeGroupAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_id' => null,
        'attribute_group_id' => null,
        'template' => null,
        'last_saved_date_time' => 'date-time',
        'description' => null,
        'attributes' => null
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
        'attribute_group_id' => 'AttributeGroupID',
        'template' => 'Template',
        'last_saved_date_time' => 'LastSavedDateTime',
        'description' => 'Description',
        'attributes' => 'Attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_id' => 'setInventoryId',
        'attribute_group_id' => 'setAttributeGroupId',
        'template' => 'setTemplate',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'description' => 'setDescription',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_id' => 'getInventoryId',
        'attribute_group_id' => 'getAttributeGroupId',
        'template' => 'getTemplate',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'description' => 'getDescription',
        'attributes' => 'getAttributes'
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
        $this->container['attribute_group_id'] = isset($data['attribute_group_id']) ? $data['attribute_group_id'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
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
     * Gets attribute_group_id
     *
     * @return string
     */
    public function getAttributeGroupId()
    {
        return $this->container['attribute_group_id'];
    }

    /**
     * Sets attribute_group_id
     *
     * @param string $attribute_group_id attribute_group_id
     *
     * @return $this
     */
    public function setAttributeGroupId($attribute_group_id)
    {
        $this->container['attribute_group_id'] = $attribute_group_id;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \Jiwa\JiwaModel\InventoryAttributeGroupTemplate
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \Jiwa\JiwaModel\InventoryAttributeGroupTemplate $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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
     * Gets attributes
     *
     * @return \Jiwa\JiwaModel\InventoryAttributeGroupAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Jiwa\JiwaModel\InventoryAttributeGroupAttribute[] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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


