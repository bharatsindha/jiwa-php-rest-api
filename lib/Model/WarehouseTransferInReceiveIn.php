<?php
/**
 * WarehouseTransferInReceiveIn
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
 * WarehouseTransferInReceiveIn Class Doc Comment
 *
 * @category Class
 * @description WarehouseTransferInReceiveIn
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WarehouseTransferInReceiveIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WarehouseTransferInReceiveIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warehouse_transfer_in_receive_in_id' => 'string',
        'warehouse_transfer_in_id' => 'string',
        'warehouse_transfer_out_id' => 'string',
        'transfer_no' => 'string',
        'transfer_date' => '\DateTime',
        'received_by_staff_id' => 'string',
        'received_by_staff_user_name' => 'string',
        'received_by_staff_title' => 'string',
        'received_by_staff_first_name' => 'string',
        'received_by_staff_surname' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warehouse_transfer_in_receive_in_id' => null,
        'warehouse_transfer_in_id' => null,
        'warehouse_transfer_out_id' => null,
        'transfer_no' => null,
        'transfer_date' => 'date-time',
        'received_by_staff_id' => null,
        'received_by_staff_user_name' => null,
        'received_by_staff_title' => null,
        'received_by_staff_first_name' => null,
        'received_by_staff_surname' => null,
        'status' => null
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
        'warehouse_transfer_in_receive_in_id' => 'WarehouseTransferInReceiveInID',
        'warehouse_transfer_in_id' => 'WarehouseTransferInID',
        'warehouse_transfer_out_id' => 'WarehouseTransferOutID',
        'transfer_no' => 'TransferNo',
        'transfer_date' => 'TransferDate',
        'received_by_staff_id' => 'ReceivedByStaffID',
        'received_by_staff_user_name' => 'ReceivedByStaffUserName',
        'received_by_staff_title' => 'ReceivedByStaffTitle',
        'received_by_staff_first_name' => 'ReceivedByStaffFirstName',
        'received_by_staff_surname' => 'ReceivedByStaffSurname',
        'status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouse_transfer_in_receive_in_id' => 'setWarehouseTransferInReceiveInId',
        'warehouse_transfer_in_id' => 'setWarehouseTransferInId',
        'warehouse_transfer_out_id' => 'setWarehouseTransferOutId',
        'transfer_no' => 'setTransferNo',
        'transfer_date' => 'setTransferDate',
        'received_by_staff_id' => 'setReceivedByStaffId',
        'received_by_staff_user_name' => 'setReceivedByStaffUserName',
        'received_by_staff_title' => 'setReceivedByStaffTitle',
        'received_by_staff_first_name' => 'setReceivedByStaffFirstName',
        'received_by_staff_surname' => 'setReceivedByStaffSurname',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouse_transfer_in_receive_in_id' => 'getWarehouseTransferInReceiveInId',
        'warehouse_transfer_in_id' => 'getWarehouseTransferInId',
        'warehouse_transfer_out_id' => 'getWarehouseTransferOutId',
        'transfer_no' => 'getTransferNo',
        'transfer_date' => 'getTransferDate',
        'received_by_staff_id' => 'getReceivedByStaffId',
        'received_by_staff_user_name' => 'getReceivedByStaffUserName',
        'received_by_staff_title' => 'getReceivedByStaffTitle',
        'received_by_staff_first_name' => 'getReceivedByStaffFirstName',
        'received_by_staff_surname' => 'getReceivedByStaffSurname',
        'status' => 'getStatus'
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
        $this->container['warehouse_transfer_in_receive_in_id'] = isset($data['warehouse_transfer_in_receive_in_id']) ? $data['warehouse_transfer_in_receive_in_id'] : null;
        $this->container['warehouse_transfer_in_id'] = isset($data['warehouse_transfer_in_id']) ? $data['warehouse_transfer_in_id'] : null;
        $this->container['warehouse_transfer_out_id'] = isset($data['warehouse_transfer_out_id']) ? $data['warehouse_transfer_out_id'] : null;
        $this->container['transfer_no'] = isset($data['transfer_no']) ? $data['transfer_no'] : null;
        $this->container['transfer_date'] = isset($data['transfer_date']) ? $data['transfer_date'] : null;
        $this->container['received_by_staff_id'] = isset($data['received_by_staff_id']) ? $data['received_by_staff_id'] : null;
        $this->container['received_by_staff_user_name'] = isset($data['received_by_staff_user_name']) ? $data['received_by_staff_user_name'] : null;
        $this->container['received_by_staff_title'] = isset($data['received_by_staff_title']) ? $data['received_by_staff_title'] : null;
        $this->container['received_by_staff_first_name'] = isset($data['received_by_staff_first_name']) ? $data['received_by_staff_first_name'] : null;
        $this->container['received_by_staff_surname'] = isset($data['received_by_staff_surname']) ? $data['received_by_staff_surname'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets warehouse_transfer_in_receive_in_id
     *
     * @return string
     */
    public function getWarehouseTransferInReceiveInId()
    {
        return $this->container['warehouse_transfer_in_receive_in_id'];
    }

    /**
     * Sets warehouse_transfer_in_receive_in_id
     *
     * @param string $warehouse_transfer_in_receive_in_id warehouse_transfer_in_receive_in_id
     *
     * @return $this
     */
    public function setWarehouseTransferInReceiveInId($warehouse_transfer_in_receive_in_id)
    {
        $this->container['warehouse_transfer_in_receive_in_id'] = $warehouse_transfer_in_receive_in_id;

        return $this;
    }

    /**
     * Gets warehouse_transfer_in_id
     *
     * @return string
     */
    public function getWarehouseTransferInId()
    {
        return $this->container['warehouse_transfer_in_id'];
    }

    /**
     * Sets warehouse_transfer_in_id
     *
     * @param string $warehouse_transfer_in_id warehouse_transfer_in_id
     *
     * @return $this
     */
    public function setWarehouseTransferInId($warehouse_transfer_in_id)
    {
        $this->container['warehouse_transfer_in_id'] = $warehouse_transfer_in_id;

        return $this;
    }

    /**
     * Gets warehouse_transfer_out_id
     *
     * @return string
     */
    public function getWarehouseTransferOutId()
    {
        return $this->container['warehouse_transfer_out_id'];
    }

    /**
     * Sets warehouse_transfer_out_id
     *
     * @param string $warehouse_transfer_out_id warehouse_transfer_out_id
     *
     * @return $this
     */
    public function setWarehouseTransferOutId($warehouse_transfer_out_id)
    {
        $this->container['warehouse_transfer_out_id'] = $warehouse_transfer_out_id;

        return $this;
    }

    /**
     * Gets transfer_no
     *
     * @return string
     */
    public function getTransferNo()
    {
        return $this->container['transfer_no'];
    }

    /**
     * Sets transfer_no
     *
     * @param string $transfer_no transfer_no
     *
     * @return $this
     */
    public function setTransferNo($transfer_no)
    {
        $this->container['transfer_no'] = $transfer_no;

        return $this;
    }

    /**
     * Gets transfer_date
     *
     * @return \DateTime
     */
    public function getTransferDate()
    {
        return $this->container['transfer_date'];
    }

    /**
     * Sets transfer_date
     *
     * @param \DateTime $transfer_date transfer_date
     *
     * @return $this
     */
    public function setTransferDate($transfer_date)
    {
        $this->container['transfer_date'] = $transfer_date;

        return $this;
    }

    /**
     * Gets received_by_staff_id
     *
     * @return string
     */
    public function getReceivedByStaffId()
    {
        return $this->container['received_by_staff_id'];
    }

    /**
     * Sets received_by_staff_id
     *
     * @param string $received_by_staff_id received_by_staff_id
     *
     * @return $this
     */
    public function setReceivedByStaffId($received_by_staff_id)
    {
        $this->container['received_by_staff_id'] = $received_by_staff_id;

        return $this;
    }

    /**
     * Gets received_by_staff_user_name
     *
     * @return string
     */
    public function getReceivedByStaffUserName()
    {
        return $this->container['received_by_staff_user_name'];
    }

    /**
     * Sets received_by_staff_user_name
     *
     * @param string $received_by_staff_user_name received_by_staff_user_name
     *
     * @return $this
     */
    public function setReceivedByStaffUserName($received_by_staff_user_name)
    {
        $this->container['received_by_staff_user_name'] = $received_by_staff_user_name;

        return $this;
    }

    /**
     * Gets received_by_staff_title
     *
     * @return string
     */
    public function getReceivedByStaffTitle()
    {
        return $this->container['received_by_staff_title'];
    }

    /**
     * Sets received_by_staff_title
     *
     * @param string $received_by_staff_title received_by_staff_title
     *
     * @return $this
     */
    public function setReceivedByStaffTitle($received_by_staff_title)
    {
        $this->container['received_by_staff_title'] = $received_by_staff_title;

        return $this;
    }

    /**
     * Gets received_by_staff_first_name
     *
     * @return string
     */
    public function getReceivedByStaffFirstName()
    {
        return $this->container['received_by_staff_first_name'];
    }

    /**
     * Sets received_by_staff_first_name
     *
     * @param string $received_by_staff_first_name received_by_staff_first_name
     *
     * @return $this
     */
    public function setReceivedByStaffFirstName($received_by_staff_first_name)
    {
        $this->container['received_by_staff_first_name'] = $received_by_staff_first_name;

        return $this;
    }

    /**
     * Gets received_by_staff_surname
     *
     * @return string
     */
    public function getReceivedByStaffSurname()
    {
        return $this->container['received_by_staff_surname'];
    }

    /**
     * Sets received_by_staff_surname
     *
     * @param string $received_by_staff_surname received_by_staff_surname
     *
     * @return $this
     */
    public function setReceivedByStaffSurname($received_by_staff_surname)
    {
        $this->container['received_by_staff_surname'] = $received_by_staff_surname;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


