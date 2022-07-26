<?php
/**
 * DebtorDeliveryAddress
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
 * DebtorDeliveryAddress Class Doc Comment
 *
 * @category Class
 * @description DebtorDeliveryAddress
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebtorDeliveryAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DebtorDeliveryAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_default' => 'bool',
        'delivery_address_id' => 'string',
        'delivery_address_name' => 'string',
        'delivery_address_code' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'address4' => 'string',
        'postcode' => 'string',
        'country' => 'string',
        'notes' => 'string',
        'courier_details' => 'string',
        'edi_store_location_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_default' => null,
        'delivery_address_id' => null,
        'delivery_address_name' => null,
        'delivery_address_code' => null,
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'address4' => null,
        'postcode' => null,
        'country' => null,
        'notes' => null,
        'courier_details' => null,
        'edi_store_location_code' => null
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
        'is_default' => 'IsDefault',
        'delivery_address_id' => 'DeliveryAddressID',
        'delivery_address_name' => 'DeliveryAddressName',
        'delivery_address_code' => 'DeliveryAddressCode',
        'address1' => 'Address1',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address4' => 'Address4',
        'postcode' => 'Postcode',
        'country' => 'Country',
        'notes' => 'Notes',
        'courier_details' => 'CourierDetails',
        'edi_store_location_code' => 'EDIStoreLocationCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_default' => 'setIsDefault',
        'delivery_address_id' => 'setDeliveryAddressId',
        'delivery_address_name' => 'setDeliveryAddressName',
        'delivery_address_code' => 'setDeliveryAddressCode',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address4' => 'setAddress4',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'notes' => 'setNotes',
        'courier_details' => 'setCourierDetails',
        'edi_store_location_code' => 'setEdiStoreLocationCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_default' => 'getIsDefault',
        'delivery_address_id' => 'getDeliveryAddressId',
        'delivery_address_name' => 'getDeliveryAddressName',
        'delivery_address_code' => 'getDeliveryAddressCode',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address4' => 'getAddress4',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'notes' => 'getNotes',
        'courier_details' => 'getCourierDetails',
        'edi_store_location_code' => 'getEdiStoreLocationCode'
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
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['delivery_address_id'] = isset($data['delivery_address_id']) ? $data['delivery_address_id'] : null;
        $this->container['delivery_address_name'] = isset($data['delivery_address_name']) ? $data['delivery_address_name'] : null;
        $this->container['delivery_address_code'] = isset($data['delivery_address_code']) ? $data['delivery_address_code'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['address3'] = isset($data['address3']) ? $data['address3'] : null;
        $this->container['address4'] = isset($data['address4']) ? $data['address4'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['courier_details'] = isset($data['courier_details']) ? $data['courier_details'] : null;
        $this->container['edi_store_location_code'] = isset($data['edi_store_location_code']) ? $data['edi_store_location_code'] : null;
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
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default is_default
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets delivery_address_id
     *
     * @return string
     */
    public function getDeliveryAddressId()
    {
        return $this->container['delivery_address_id'];
    }

    /**
     * Sets delivery_address_id
     *
     * @param string $delivery_address_id delivery_address_id
     *
     * @return $this
     */
    public function setDeliveryAddressId($delivery_address_id)
    {
        $this->container['delivery_address_id'] = $delivery_address_id;

        return $this;
    }

    /**
     * Gets delivery_address_name
     *
     * @return string
     */
    public function getDeliveryAddressName()
    {
        return $this->container['delivery_address_name'];
    }

    /**
     * Sets delivery_address_name
     *
     * @param string $delivery_address_name delivery_address_name
     *
     * @return $this
     */
    public function setDeliveryAddressName($delivery_address_name)
    {
        $this->container['delivery_address_name'] = $delivery_address_name;

        return $this;
    }

    /**
     * Gets delivery_address_code
     *
     * @return string
     */
    public function getDeliveryAddressCode()
    {
        return $this->container['delivery_address_code'];
    }

    /**
     * Sets delivery_address_code
     *
     * @param string $delivery_address_code delivery_address_code
     *
     * @return $this
     */
    public function setDeliveryAddressCode($delivery_address_code)
    {
        $this->container['delivery_address_code'] = $delivery_address_code;

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
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

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
     * Gets edi_store_location_code
     *
     * @return string
     */
    public function getEdiStoreLocationCode()
    {
        return $this->container['edi_store_location_code'];
    }

    /**
     * Sets edi_store_location_code
     *
     * @param string $edi_store_location_code edi_store_location_code
     *
     * @return $this
     */
    public function setEdiStoreLocationCode($edi_store_location_code)
    {
        $this->container['edi_store_location_code'] = $edi_store_location_code;

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


