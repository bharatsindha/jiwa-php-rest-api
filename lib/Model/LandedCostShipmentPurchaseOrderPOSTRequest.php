<?php
/**
 * LandedCostShipmentPurchaseOrderPOSTRequest
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
 * LandedCostShipmentPurchaseOrderPOSTRequest Class Doc Comment
 *
 * @category Class
 * @description LandedCostShipmentPurchaseOrderPOSTRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandedCostShipmentPurchaseOrderPOSTRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LandedCostShipmentPurchaseOrderPOSTRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_id' => 'string',
        'order_id' => 'string',
        'purchase_order_received_id' => 'string',
        'order_no' => 'string',
        'ordered_date' => '\DateTime',
        'item_no' => 'int',
        'user_field1' => 'string',
        'user_field2' => 'string',
        'user_field3' => 'string',
        'user_field4' => 'string',
        'user_field5' => 'string',
        'user_field6' => 'string',
        'user_field7' => 'string',
        'user_field8' => 'string',
        'user_field9' => 'string',
        'user_field10' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_id' => null,
        'order_id' => null,
        'purchase_order_received_id' => null,
        'order_no' => null,
        'ordered_date' => 'date-time',
        'item_no' => 'int32',
        'user_field1' => null,
        'user_field2' => null,
        'user_field3' => null,
        'user_field4' => null,
        'user_field5' => null,
        'user_field6' => null,
        'user_field7' => null,
        'user_field8' => null,
        'user_field9' => null,
        'user_field10' => null
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
        'shipment_id' => 'ShipmentID',
        'order_id' => 'OrderID',
        'purchase_order_received_id' => 'PurchaseOrderReceivedID',
        'order_no' => 'OrderNo',
        'ordered_date' => 'OrderedDate',
        'item_no' => 'ItemNo',
        'user_field1' => 'UserField1',
        'user_field2' => 'UserField2',
        'user_field3' => 'UserField3',
        'user_field4' => 'UserField4',
        'user_field5' => 'UserField5',
        'user_field6' => 'UserField6',
        'user_field7' => 'UserField7',
        'user_field8' => 'UserField8',
        'user_field9' => 'UserField9',
        'user_field10' => 'UserField10'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
        'order_id' => 'setOrderId',
        'purchase_order_received_id' => 'setPurchaseOrderReceivedId',
        'order_no' => 'setOrderNo',
        'ordered_date' => 'setOrderedDate',
        'item_no' => 'setItemNo',
        'user_field1' => 'setUserField1',
        'user_field2' => 'setUserField2',
        'user_field3' => 'setUserField3',
        'user_field4' => 'setUserField4',
        'user_field5' => 'setUserField5',
        'user_field6' => 'setUserField6',
        'user_field7' => 'setUserField7',
        'user_field8' => 'setUserField8',
        'user_field9' => 'setUserField9',
        'user_field10' => 'setUserField10'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
        'order_id' => 'getOrderId',
        'purchase_order_received_id' => 'getPurchaseOrderReceivedId',
        'order_no' => 'getOrderNo',
        'ordered_date' => 'getOrderedDate',
        'item_no' => 'getItemNo',
        'user_field1' => 'getUserField1',
        'user_field2' => 'getUserField2',
        'user_field3' => 'getUserField3',
        'user_field4' => 'getUserField4',
        'user_field5' => 'getUserField5',
        'user_field6' => 'getUserField6',
        'user_field7' => 'getUserField7',
        'user_field8' => 'getUserField8',
        'user_field9' => 'getUserField9',
        'user_field10' => 'getUserField10'
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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['purchase_order_received_id'] = isset($data['purchase_order_received_id']) ? $data['purchase_order_received_id'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['ordered_date'] = isset($data['ordered_date']) ? $data['ordered_date'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['user_field1'] = isset($data['user_field1']) ? $data['user_field1'] : null;
        $this->container['user_field2'] = isset($data['user_field2']) ? $data['user_field2'] : null;
        $this->container['user_field3'] = isset($data['user_field3']) ? $data['user_field3'] : null;
        $this->container['user_field4'] = isset($data['user_field4']) ? $data['user_field4'] : null;
        $this->container['user_field5'] = isset($data['user_field5']) ? $data['user_field5'] : null;
        $this->container['user_field6'] = isset($data['user_field6']) ? $data['user_field6'] : null;
        $this->container['user_field7'] = isset($data['user_field7']) ? $data['user_field7'] : null;
        $this->container['user_field8'] = isset($data['user_field8']) ? $data['user_field8'] : null;
        $this->container['user_field9'] = isset($data['user_field9']) ? $data['user_field9'] : null;
        $this->container['user_field10'] = isset($data['user_field10']) ? $data['user_field10'] : null;
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
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets purchase_order_received_id
     *
     * @return string
     */
    public function getPurchaseOrderReceivedId()
    {
        return $this->container['purchase_order_received_id'];
    }

    /**
     * Sets purchase_order_received_id
     *
     * @param string $purchase_order_received_id purchase_order_received_id
     *
     * @return $this
     */
    public function setPurchaseOrderReceivedId($purchase_order_received_id)
    {
        $this->container['purchase_order_received_id'] = $purchase_order_received_id;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string $order_no order_no
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets ordered_date
     *
     * @return \DateTime
     */
    public function getOrderedDate()
    {
        return $this->container['ordered_date'];
    }

    /**
     * Sets ordered_date
     *
     * @param \DateTime $ordered_date ordered_date
     *
     * @return $this
     */
    public function setOrderedDate($ordered_date)
    {
        $this->container['ordered_date'] = $ordered_date;

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
     * Gets user_field1
     *
     * @return string
     */
    public function getUserField1()
    {
        return $this->container['user_field1'];
    }

    /**
     * Sets user_field1
     *
     * @param string $user_field1 user_field1
     *
     * @return $this
     */
    public function setUserField1($user_field1)
    {
        $this->container['user_field1'] = $user_field1;

        return $this;
    }

    /**
     * Gets user_field2
     *
     * @return string
     */
    public function getUserField2()
    {
        return $this->container['user_field2'];
    }

    /**
     * Sets user_field2
     *
     * @param string $user_field2 user_field2
     *
     * @return $this
     */
    public function setUserField2($user_field2)
    {
        $this->container['user_field2'] = $user_field2;

        return $this;
    }

    /**
     * Gets user_field3
     *
     * @return string
     */
    public function getUserField3()
    {
        return $this->container['user_field3'];
    }

    /**
     * Sets user_field3
     *
     * @param string $user_field3 user_field3
     *
     * @return $this
     */
    public function setUserField3($user_field3)
    {
        $this->container['user_field3'] = $user_field3;

        return $this;
    }

    /**
     * Gets user_field4
     *
     * @return string
     */
    public function getUserField4()
    {
        return $this->container['user_field4'];
    }

    /**
     * Sets user_field4
     *
     * @param string $user_field4 user_field4
     *
     * @return $this
     */
    public function setUserField4($user_field4)
    {
        $this->container['user_field4'] = $user_field4;

        return $this;
    }

    /**
     * Gets user_field5
     *
     * @return string
     */
    public function getUserField5()
    {
        return $this->container['user_field5'];
    }

    /**
     * Sets user_field5
     *
     * @param string $user_field5 user_field5
     *
     * @return $this
     */
    public function setUserField5($user_field5)
    {
        $this->container['user_field5'] = $user_field5;

        return $this;
    }

    /**
     * Gets user_field6
     *
     * @return string
     */
    public function getUserField6()
    {
        return $this->container['user_field6'];
    }

    /**
     * Sets user_field6
     *
     * @param string $user_field6 user_field6
     *
     * @return $this
     */
    public function setUserField6($user_field6)
    {
        $this->container['user_field6'] = $user_field6;

        return $this;
    }

    /**
     * Gets user_field7
     *
     * @return string
     */
    public function getUserField7()
    {
        return $this->container['user_field7'];
    }

    /**
     * Sets user_field7
     *
     * @param string $user_field7 user_field7
     *
     * @return $this
     */
    public function setUserField7($user_field7)
    {
        $this->container['user_field7'] = $user_field7;

        return $this;
    }

    /**
     * Gets user_field8
     *
     * @return string
     */
    public function getUserField8()
    {
        return $this->container['user_field8'];
    }

    /**
     * Sets user_field8
     *
     * @param string $user_field8 user_field8
     *
     * @return $this
     */
    public function setUserField8($user_field8)
    {
        $this->container['user_field8'] = $user_field8;

        return $this;
    }

    /**
     * Gets user_field9
     *
     * @return string
     */
    public function getUserField9()
    {
        return $this->container['user_field9'];
    }

    /**
     * Sets user_field9
     *
     * @param string $user_field9 user_field9
     *
     * @return $this
     */
    public function setUserField9($user_field9)
    {
        $this->container['user_field9'] = $user_field9;

        return $this;
    }

    /**
     * Gets user_field10
     *
     * @return string
     */
    public function getUserField10()
    {
        return $this->container['user_field10'];
    }

    /**
     * Sets user_field10
     *
     * @param string $user_field10 user_field10
     *
     * @return $this
     */
    public function setUserField10($user_field10)
    {
        $this->container['user_field10'] = $user_field10;

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


