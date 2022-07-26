<?php
/**
 * SalesOrderHistoryFreightItemsPOSTRequest
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
 * SalesOrderHistoryFreightItemsPOSTRequest Class Doc Comment
 *
 * @category Class
 * @description SalesOrderHistoryFreightItemsPOSTRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrderHistoryFreightItemsPOSTRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesOrderHistoryFreightItemsPOSTRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_id' => 'string',
        'invoice_history_id' => 'string',
        'number_items' => 'int',
        'item_weight' => 'double',
        'item_cubic' => 'double',
        'item_length' => 'double',
        'item_width' => 'double',
        'item_height' => 'double',
        'reference' => 'string',
        'freight_description' => '\Jiwa\JiwaModel\SalesOrderCarrierFreightDescription',
        'consignment_note' => '\Jiwa\JiwaModel\SalesOrderConsignmentNote'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_id' => null,
        'invoice_history_id' => null,
        'number_items' => 'int32',
        'item_weight' => 'double',
        'item_cubic' => 'double',
        'item_length' => 'double',
        'item_width' => 'double',
        'item_height' => 'double',
        'reference' => null,
        'freight_description' => null,
        'consignment_note' => null
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
        'invoice_id' => 'InvoiceID',
        'invoice_history_id' => 'InvoiceHistoryID',
        'number_items' => 'NumberItems',
        'item_weight' => 'ItemWeight',
        'item_cubic' => 'ItemCubic',
        'item_length' => 'ItemLength',
        'item_width' => 'ItemWidth',
        'item_height' => 'ItemHeight',
        'reference' => 'Reference',
        'freight_description' => 'FreightDescription',
        'consignment_note' => 'ConsignmentNote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'invoice_history_id' => 'setInvoiceHistoryId',
        'number_items' => 'setNumberItems',
        'item_weight' => 'setItemWeight',
        'item_cubic' => 'setItemCubic',
        'item_length' => 'setItemLength',
        'item_width' => 'setItemWidth',
        'item_height' => 'setItemHeight',
        'reference' => 'setReference',
        'freight_description' => 'setFreightDescription',
        'consignment_note' => 'setConsignmentNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'invoice_history_id' => 'getInvoiceHistoryId',
        'number_items' => 'getNumberItems',
        'item_weight' => 'getItemWeight',
        'item_cubic' => 'getItemCubic',
        'item_length' => 'getItemLength',
        'item_width' => 'getItemWidth',
        'item_height' => 'getItemHeight',
        'reference' => 'getReference',
        'freight_description' => 'getFreightDescription',
        'consignment_note' => 'getConsignmentNote'
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
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['invoice_history_id'] = isset($data['invoice_history_id']) ? $data['invoice_history_id'] : null;
        $this->container['number_items'] = isset($data['number_items']) ? $data['number_items'] : null;
        $this->container['item_weight'] = isset($data['item_weight']) ? $data['item_weight'] : null;
        $this->container['item_cubic'] = isset($data['item_cubic']) ? $data['item_cubic'] : null;
        $this->container['item_length'] = isset($data['item_length']) ? $data['item_length'] : null;
        $this->container['item_width'] = isset($data['item_width']) ? $data['item_width'] : null;
        $this->container['item_height'] = isset($data['item_height']) ? $data['item_height'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['freight_description'] = isset($data['freight_description']) ? $data['freight_description'] : null;
        $this->container['consignment_note'] = isset($data['consignment_note']) ? $data['consignment_note'] : null;
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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets invoice_history_id
     *
     * @return string
     */
    public function getInvoiceHistoryId()
    {
        return $this->container['invoice_history_id'];
    }

    /**
     * Sets invoice_history_id
     *
     * @param string $invoice_history_id invoice_history_id
     *
     * @return $this
     */
    public function setInvoiceHistoryId($invoice_history_id)
    {
        $this->container['invoice_history_id'] = $invoice_history_id;

        return $this;
    }

    /**
     * Gets number_items
     *
     * @return int
     */
    public function getNumberItems()
    {
        return $this->container['number_items'];
    }

    /**
     * Sets number_items
     *
     * @param int $number_items number_items
     *
     * @return $this
     */
    public function setNumberItems($number_items)
    {
        $this->container['number_items'] = $number_items;

        return $this;
    }

    /**
     * Gets item_weight
     *
     * @return double
     */
    public function getItemWeight()
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight
     *
     * @param double $item_weight item_weight
     *
     * @return $this
     */
    public function setItemWeight($item_weight)
    {
        $this->container['item_weight'] = $item_weight;

        return $this;
    }

    /**
     * Gets item_cubic
     *
     * @return double
     */
    public function getItemCubic()
    {
        return $this->container['item_cubic'];
    }

    /**
     * Sets item_cubic
     *
     * @param double $item_cubic item_cubic
     *
     * @return $this
     */
    public function setItemCubic($item_cubic)
    {
        $this->container['item_cubic'] = $item_cubic;

        return $this;
    }

    /**
     * Gets item_length
     *
     * @return double
     */
    public function getItemLength()
    {
        return $this->container['item_length'];
    }

    /**
     * Sets item_length
     *
     * @param double $item_length item_length
     *
     * @return $this
     */
    public function setItemLength($item_length)
    {
        $this->container['item_length'] = $item_length;

        return $this;
    }

    /**
     * Gets item_width
     *
     * @return double
     */
    public function getItemWidth()
    {
        return $this->container['item_width'];
    }

    /**
     * Sets item_width
     *
     * @param double $item_width item_width
     *
     * @return $this
     */
    public function setItemWidth($item_width)
    {
        $this->container['item_width'] = $item_width;

        return $this;
    }

    /**
     * Gets item_height
     *
     * @return double
     */
    public function getItemHeight()
    {
        return $this->container['item_height'];
    }

    /**
     * Sets item_height
     *
     * @param double $item_height item_height
     *
     * @return $this
     */
    public function setItemHeight($item_height)
    {
        $this->container['item_height'] = $item_height;

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
     * Gets freight_description
     *
     * @return \Jiwa\JiwaModel\SalesOrderCarrierFreightDescription
     */
    public function getFreightDescription()
    {
        return $this->container['freight_description'];
    }

    /**
     * Sets freight_description
     *
     * @param \Jiwa\JiwaModel\SalesOrderCarrierFreightDescription $freight_description freight_description
     *
     * @return $this
     */
    public function setFreightDescription($freight_description)
    {
        $this->container['freight_description'] = $freight_description;

        return $this;
    }

    /**
     * Gets consignment_note
     *
     * @return \Jiwa\JiwaModel\SalesOrderConsignmentNote
     */
    public function getConsignmentNote()
    {
        return $this->container['consignment_note'];
    }

    /**
     * Sets consignment_note
     *
     * @param \Jiwa\JiwaModel\SalesOrderConsignmentNote $consignment_note consignment_note
     *
     * @return $this
     */
    public function setConsignmentNote($consignment_note)
    {
        $this->container['consignment_note'] = $consignment_note;

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


