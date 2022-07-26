<?php
/**
 * SalesOrderShippingLabel
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
 * SalesOrderShippingLabel Class Doc Comment
 *
 * @category Class
 * @description SalesOrderShippingLabel
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderShippingLabel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesOrderShippingLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'double',
        'use_by_date' => '\DateTime',
        'label_number' => 'int',
        'spare_numeric1' => 'double',
        'spare_numeric2' => 'double',
        'spare_numeric3' => 'double',
        'spare_date1' => '\DateTime',
        'spare_date2' => '\DateTime',
        'spare_date3' => '\DateTime',
        'shipping_label_id' => 'string',
        'sscc_number' => 'string',
        'batch_no' => 'string',
        'reference' => 'string',
        'spare_string1' => 'string',
        'spare_string2' => 'string',
        'spare_string3' => 'string',
        'last_saved_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => 'double',
        'use_by_date' => 'date-time',
        'label_number' => 'int32',
        'spare_numeric1' => 'double',
        'spare_numeric2' => 'double',
        'spare_numeric3' => 'double',
        'spare_date1' => 'date-time',
        'spare_date2' => 'date-time',
        'spare_date3' => 'date-time',
        'shipping_label_id' => null,
        'sscc_number' => null,
        'batch_no' => null,
        'reference' => null,
        'spare_string1' => null,
        'spare_string2' => null,
        'spare_string3' => null,
        'last_saved_date_time' => 'date-time'
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
        'quantity' => 'Quantity',
        'use_by_date' => 'UseByDate',
        'label_number' => 'LabelNumber',
        'spare_numeric1' => 'SpareNumeric1',
        'spare_numeric2' => 'SpareNumeric2',
        'spare_numeric3' => 'SpareNumeric3',
        'spare_date1' => 'SpareDate1',
        'spare_date2' => 'SpareDate2',
        'spare_date3' => 'SpareDate3',
        'shipping_label_id' => 'ShippingLabelID',
        'sscc_number' => 'SSCCNumber',
        'batch_no' => 'BatchNo',
        'reference' => 'Reference',
        'spare_string1' => 'SpareString1',
        'spare_string2' => 'SpareString2',
        'spare_string3' => 'SpareString3',
        'last_saved_date_time' => 'LastSavedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'use_by_date' => 'setUseByDate',
        'label_number' => 'setLabelNumber',
        'spare_numeric1' => 'setSpareNumeric1',
        'spare_numeric2' => 'setSpareNumeric2',
        'spare_numeric3' => 'setSpareNumeric3',
        'spare_date1' => 'setSpareDate1',
        'spare_date2' => 'setSpareDate2',
        'spare_date3' => 'setSpareDate3',
        'shipping_label_id' => 'setShippingLabelId',
        'sscc_number' => 'setSsccNumber',
        'batch_no' => 'setBatchNo',
        'reference' => 'setReference',
        'spare_string1' => 'setSpareString1',
        'spare_string2' => 'setSpareString2',
        'spare_string3' => 'setSpareString3',
        'last_saved_date_time' => 'setLastSavedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'use_by_date' => 'getUseByDate',
        'label_number' => 'getLabelNumber',
        'spare_numeric1' => 'getSpareNumeric1',
        'spare_numeric2' => 'getSpareNumeric2',
        'spare_numeric3' => 'getSpareNumeric3',
        'spare_date1' => 'getSpareDate1',
        'spare_date2' => 'getSpareDate2',
        'spare_date3' => 'getSpareDate3',
        'shipping_label_id' => 'getShippingLabelId',
        'sscc_number' => 'getSsccNumber',
        'batch_no' => 'getBatchNo',
        'reference' => 'getReference',
        'spare_string1' => 'getSpareString1',
        'spare_string2' => 'getSpareString2',
        'spare_string3' => 'getSpareString3',
        'last_saved_date_time' => 'getLastSavedDateTime'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['use_by_date'] = isset($data['use_by_date']) ? $data['use_by_date'] : null;
        $this->container['label_number'] = isset($data['label_number']) ? $data['label_number'] : null;
        $this->container['spare_numeric1'] = isset($data['spare_numeric1']) ? $data['spare_numeric1'] : null;
        $this->container['spare_numeric2'] = isset($data['spare_numeric2']) ? $data['spare_numeric2'] : null;
        $this->container['spare_numeric3'] = isset($data['spare_numeric3']) ? $data['spare_numeric3'] : null;
        $this->container['spare_date1'] = isset($data['spare_date1']) ? $data['spare_date1'] : null;
        $this->container['spare_date2'] = isset($data['spare_date2']) ? $data['spare_date2'] : null;
        $this->container['spare_date3'] = isset($data['spare_date3']) ? $data['spare_date3'] : null;
        $this->container['shipping_label_id'] = isset($data['shipping_label_id']) ? $data['shipping_label_id'] : null;
        $this->container['sscc_number'] = isset($data['sscc_number']) ? $data['sscc_number'] : null;
        $this->container['batch_no'] = isset($data['batch_no']) ? $data['batch_no'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['spare_string1'] = isset($data['spare_string1']) ? $data['spare_string1'] : null;
        $this->container['spare_string2'] = isset($data['spare_string2']) ? $data['spare_string2'] : null;
        $this->container['spare_string3'] = isset($data['spare_string3']) ? $data['spare_string3'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
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
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets use_by_date
     *
     * @return \DateTime
     */
    public function getUseByDate()
    {
        return $this->container['use_by_date'];
    }

    /**
     * Sets use_by_date
     *
     * @param \DateTime $use_by_date use_by_date
     *
     * @return $this
     */
    public function setUseByDate($use_by_date)
    {
        $this->container['use_by_date'] = $use_by_date;

        return $this;
    }

    /**
     * Gets label_number
     *
     * @return int
     */
    public function getLabelNumber()
    {
        return $this->container['label_number'];
    }

    /**
     * Sets label_number
     *
     * @param int $label_number label_number
     *
     * @return $this
     */
    public function setLabelNumber($label_number)
    {
        $this->container['label_number'] = $label_number;

        return $this;
    }

    /**
     * Gets spare_numeric1
     *
     * @return double
     */
    public function getSpareNumeric1()
    {
        return $this->container['spare_numeric1'];
    }

    /**
     * Sets spare_numeric1
     *
     * @param double $spare_numeric1 spare_numeric1
     *
     * @return $this
     */
    public function setSpareNumeric1($spare_numeric1)
    {
        $this->container['spare_numeric1'] = $spare_numeric1;

        return $this;
    }

    /**
     * Gets spare_numeric2
     *
     * @return double
     */
    public function getSpareNumeric2()
    {
        return $this->container['spare_numeric2'];
    }

    /**
     * Sets spare_numeric2
     *
     * @param double $spare_numeric2 spare_numeric2
     *
     * @return $this
     */
    public function setSpareNumeric2($spare_numeric2)
    {
        $this->container['spare_numeric2'] = $spare_numeric2;

        return $this;
    }

    /**
     * Gets spare_numeric3
     *
     * @return double
     */
    public function getSpareNumeric3()
    {
        return $this->container['spare_numeric3'];
    }

    /**
     * Sets spare_numeric3
     *
     * @param double $spare_numeric3 spare_numeric3
     *
     * @return $this
     */
    public function setSpareNumeric3($spare_numeric3)
    {
        $this->container['spare_numeric3'] = $spare_numeric3;

        return $this;
    }

    /**
     * Gets spare_date1
     *
     * @return \DateTime
     */
    public function getSpareDate1()
    {
        return $this->container['spare_date1'];
    }

    /**
     * Sets spare_date1
     *
     * @param \DateTime $spare_date1 spare_date1
     *
     * @return $this
     */
    public function setSpareDate1($spare_date1)
    {
        $this->container['spare_date1'] = $spare_date1;

        return $this;
    }

    /**
     * Gets spare_date2
     *
     * @return \DateTime
     */
    public function getSpareDate2()
    {
        return $this->container['spare_date2'];
    }

    /**
     * Sets spare_date2
     *
     * @param \DateTime $spare_date2 spare_date2
     *
     * @return $this
     */
    public function setSpareDate2($spare_date2)
    {
        $this->container['spare_date2'] = $spare_date2;

        return $this;
    }

    /**
     * Gets spare_date3
     *
     * @return \DateTime
     */
    public function getSpareDate3()
    {
        return $this->container['spare_date3'];
    }

    /**
     * Sets spare_date3
     *
     * @param \DateTime $spare_date3 spare_date3
     *
     * @return $this
     */
    public function setSpareDate3($spare_date3)
    {
        $this->container['spare_date3'] = $spare_date3;

        return $this;
    }

    /**
     * Gets shipping_label_id
     *
     * @return string
     */
    public function getShippingLabelId()
    {
        return $this->container['shipping_label_id'];
    }

    /**
     * Sets shipping_label_id
     *
     * @param string $shipping_label_id shipping_label_id
     *
     * @return $this
     */
    public function setShippingLabelId($shipping_label_id)
    {
        $this->container['shipping_label_id'] = $shipping_label_id;

        return $this;
    }

    /**
     * Gets sscc_number
     *
     * @return string
     */
    public function getSsccNumber()
    {
        return $this->container['sscc_number'];
    }

    /**
     * Sets sscc_number
     *
     * @param string $sscc_number sscc_number
     *
     * @return $this
     */
    public function setSsccNumber($sscc_number)
    {
        $this->container['sscc_number'] = $sscc_number;

        return $this;
    }

    /**
     * Gets batch_no
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->container['batch_no'];
    }

    /**
     * Sets batch_no
     *
     * @param string $batch_no batch_no
     *
     * @return $this
     */
    public function setBatchNo($batch_no)
    {
        $this->container['batch_no'] = $batch_no;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets spare_string1
     *
     * @return string
     */
    public function getSpareString1()
    {
        return $this->container['spare_string1'];
    }

    /**
     * Sets spare_string1
     *
     * @param string $spare_string1 spare_string1
     *
     * @return $this
     */
    public function setSpareString1($spare_string1)
    {
        $this->container['spare_string1'] = $spare_string1;

        return $this;
    }

    /**
     * Gets spare_string2
     *
     * @return string
     */
    public function getSpareString2()
    {
        return $this->container['spare_string2'];
    }

    /**
     * Sets spare_string2
     *
     * @param string $spare_string2 spare_string2
     *
     * @return $this
     */
    public function setSpareString2($spare_string2)
    {
        $this->container['spare_string2'] = $spare_string2;

        return $this;
    }

    /**
     * Gets spare_string3
     *
     * @return string
     */
    public function getSpareString3()
    {
        return $this->container['spare_string3'];
    }

    /**
     * Sets spare_string3
     *
     * @param string $spare_string3 spare_string3
     *
     * @return $this
     */
    public function setSpareString3($spare_string3)
    {
        $this->container['spare_string3'] = $spare_string3;

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


