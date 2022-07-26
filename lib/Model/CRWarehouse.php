<?php
/**
 * CRWarehouse
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
 * CRWarehouse Class Doc Comment
 *
 * @category Class
 * @description CR_Warehouse
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CRWarehouse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CR_Warehouse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warehouse_id' => 'string',
        'creditor_id' => 'string',
        'description' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'address4' => 'string',
        'post_code' => 'string',
        'notes' => 'string',
        'courier_details' => 'string',
        'default_item' => 'bool',
        'default_del_days' => 'int',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warehouse_id' => null,
        'creditor_id' => null,
        'description' => null,
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'address4' => null,
        'post_code' => null,
        'notes' => null,
        'courier_details' => null,
        'default_item' => null,
        'default_del_days' => 'int32',
        'country' => null
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
        'warehouse_id' => 'WarehouseID',
        'creditor_id' => 'CreditorID',
        'description' => 'Description',
        'address1' => 'Address1',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address4' => 'Address4',
        'post_code' => 'PostCode',
        'notes' => 'Notes',
        'courier_details' => 'CourierDetails',
        'default_item' => 'DefaultItem',
        'default_del_days' => 'DefaultDelDays',
        'country' => 'Country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouse_id' => 'setWarehouseId',
        'creditor_id' => 'setCreditorId',
        'description' => 'setDescription',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address4' => 'setAddress4',
        'post_code' => 'setPostCode',
        'notes' => 'setNotes',
        'courier_details' => 'setCourierDetails',
        'default_item' => 'setDefaultItem',
        'default_del_days' => 'setDefaultDelDays',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse_id' => 'getWarehouseId',
        'creditor_id' => 'getCreditorId',
        'description' => 'getDescription',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address4' => 'getAddress4',
        'post_code' => 'getPostCode',
        'notes' => 'getNotes',
        'courier_details' => 'getCourierDetails',
        'default_item' => 'getDefaultItem',
        'default_del_days' => 'getDefaultDelDays',
        'country' => 'getCountry'
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
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['creditor_id'] = isset($data['creditor_id']) ? $data['creditor_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['address3'] = isset($data['address3']) ? $data['address3'] : null;
        $this->container['address4'] = isset($data['address4']) ? $data['address4'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['courier_details'] = isset($data['courier_details']) ? $data['courier_details'] : null;
        $this->container['default_item'] = isset($data['default_item']) ? $data['default_item'] : null;
        $this->container['default_del_days'] = isset($data['default_del_days']) ? $data['default_del_days'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
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
     * Gets warehouse_id
     *
     * @return string
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string $warehouse_id warehouse_id
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets creditor_id
     *
     * @return string
     */
    public function getCreditorId()
    {
        return $this->container['creditor_id'];
    }

    /**
     * Sets creditor_id
     *
     * @param string $creditor_id creditor_id
     *
     * @return $this
     */
    public function setCreditorId($creditor_id)
    {
        $this->container['creditor_id'] = $creditor_id;

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
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     *
     * @param string $address3 address3
     *
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets address4
     *
     * @return string
     */
    public function getAddress4()
    {
        return $this->container['address4'];
    }

    /**
     * Sets address4
     *
     * @param string $address4 address4
     *
     * @return $this
     */
    public function setAddress4($address4)
    {
        $this->container['address4'] = $address4;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code post_code
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets courier_details
     *
     * @return string
     */
    public function getCourierDetails()
    {
        return $this->container['courier_details'];
    }

    /**
     * Sets courier_details
     *
     * @param string $courier_details courier_details
     *
     * @return $this
     */
    public function setCourierDetails($courier_details)
    {
        $this->container['courier_details'] = $courier_details;

        return $this;
    }

    /**
     * Gets default_item
     *
     * @return bool
     */
    public function getDefaultItem()
    {
        return $this->container['default_item'];
    }

    /**
     * Sets default_item
     *
     * @param bool $default_item default_item
     *
     * @return $this
     */
    public function setDefaultItem($default_item)
    {
        $this->container['default_item'] = $default_item;

        return $this;
    }

    /**
     * Gets default_del_days
     *
     * @return int
     */
    public function getDefaultDelDays()
    {
        return $this->container['default_del_days'];
    }

    /**
     * Sets default_del_days
     *
     * @param int $default_del_days default_del_days
     *
     * @return $this
     */
    public function setDefaultDelDays($default_del_days)
    {
        $this->container['default_del_days'] = $default_del_days;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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


