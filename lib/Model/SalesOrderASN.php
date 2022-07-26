<?php
/**
 * SalesOrderASN
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
 * SalesOrderASN Class Doc Comment
 *
 * @category Class
 * @description SalesOrderASN
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderASN implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesOrderASN';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'asn_no' => 'string',
        'purchase_order_no' => 'string',
        'receipt_no' => 'string',
        'gross_amount' => 'double',
        'total_gst_amount' => 'double',
        'receipt_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'asn_no' => null,
        'purchase_order_no' => null,
        'receipt_no' => null,
        'gross_amount' => 'double',
        'total_gst_amount' => 'double',
        'receipt_date' => 'date-time'
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
        'asn_no' => 'ASNNo',
        'purchase_order_no' => 'PurchaseOrderNo',
        'receipt_no' => 'ReceiptNo',
        'gross_amount' => 'GrossAmount',
        'total_gst_amount' => 'TotalGSTAmount',
        'receipt_date' => 'ReceiptDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asn_no' => 'setAsnNo',
        'purchase_order_no' => 'setPurchaseOrderNo',
        'receipt_no' => 'setReceiptNo',
        'gross_amount' => 'setGrossAmount',
        'total_gst_amount' => 'setTotalGstAmount',
        'receipt_date' => 'setReceiptDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asn_no' => 'getAsnNo',
        'purchase_order_no' => 'getPurchaseOrderNo',
        'receipt_no' => 'getReceiptNo',
        'gross_amount' => 'getGrossAmount',
        'total_gst_amount' => 'getTotalGstAmount',
        'receipt_date' => 'getReceiptDate'
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
        $this->container['asn_no'] = isset($data['asn_no']) ? $data['asn_no'] : null;
        $this->container['purchase_order_no'] = isset($data['purchase_order_no']) ? $data['purchase_order_no'] : null;
        $this->container['receipt_no'] = isset($data['receipt_no']) ? $data['receipt_no'] : null;
        $this->container['gross_amount'] = isset($data['gross_amount']) ? $data['gross_amount'] : null;
        $this->container['total_gst_amount'] = isset($data['total_gst_amount']) ? $data['total_gst_amount'] : null;
        $this->container['receipt_date'] = isset($data['receipt_date']) ? $data['receipt_date'] : null;
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
     * Gets asn_no
     *
     * @return string
     */
    public function getAsnNo()
    {
        return $this->container['asn_no'];
    }

    /**
     * Sets asn_no
     *
     * @param string $asn_no asn_no
     *
     * @return $this
     */
    public function setAsnNo($asn_no)
    {
        $this->container['asn_no'] = $asn_no;

        return $this;
    }

    /**
     * Gets purchase_order_no
     *
     * @return string
     */
    public function getPurchaseOrderNo()
    {
        return $this->container['purchase_order_no'];
    }

    /**
     * Sets purchase_order_no
     *
     * @param string $purchase_order_no purchase_order_no
     *
     * @return $this
     */
    public function setPurchaseOrderNo($purchase_order_no)
    {
        $this->container['purchase_order_no'] = $purchase_order_no;

        return $this;
    }

    /**
     * Gets receipt_no
     *
     * @return string
     */
    public function getReceiptNo()
    {
        return $this->container['receipt_no'];
    }

    /**
     * Sets receipt_no
     *
     * @param string $receipt_no receipt_no
     *
     * @return $this
     */
    public function setReceiptNo($receipt_no)
    {
        $this->container['receipt_no'] = $receipt_no;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return double
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param double $gross_amount gross_amount
     *
     * @return $this
     */
    public function setGrossAmount($gross_amount)
    {
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets total_gst_amount
     *
     * @return double
     */
    public function getTotalGstAmount()
    {
        return $this->container['total_gst_amount'];
    }

    /**
     * Sets total_gst_amount
     *
     * @param double $total_gst_amount total_gst_amount
     *
     * @return $this
     */
    public function setTotalGstAmount($total_gst_amount)
    {
        $this->container['total_gst_amount'] = $total_gst_amount;

        return $this;
    }

    /**
     * Gets receipt_date
     *
     * @return \DateTime
     */
    public function getReceiptDate()
    {
        return $this->container['receipt_date'];
    }

    /**
     * Sets receipt_date
     *
     * @param \DateTime $receipt_date receipt_date
     *
     * @return $this
     */
    public function setReceiptDate($receipt_date)
    {
        $this->container['receipt_date'] = $receipt_date;

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


