<?php
/**
 * InventoryDebtorClassificationPriceDELETERequest
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
 * InventoryDebtorClassificationPriceDELETERequest Class Doc Comment
 *
 * @category Class
 * @description InventoryDebtorClassificationPriceDELETERequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryDebtorClassificationPriceDELETERequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryDebtorClassificationPriceDELETERequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_id' => 'string',
        'debtor_classification_price_id' => 'string',
        'source' => 'string',
        'mode' => 'string',
        'amount' => 'double',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'use_quantity_price_break' => 'bool',
        'quantity_price_break' => 'double',
        'debtor_classification_id' => 'string',
        'debtor_classification_description' => 'string',
        'price' => 'double',
        'note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_id' => null,
        'debtor_classification_price_id' => null,
        'source' => null,
        'mode' => null,
        'amount' => 'double',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'use_quantity_price_break' => null,
        'quantity_price_break' => 'double',
        'debtor_classification_id' => null,
        'debtor_classification_description' => null,
        'price' => 'double',
        'note' => null
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
        'debtor_classification_price_id' => 'DebtorClassificationPriceID',
        'source' => 'Source',
        'mode' => 'Mode',
        'amount' => 'Amount',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'use_quantity_price_break' => 'UseQuantityPriceBreak',
        'quantity_price_break' => 'QuantityPriceBreak',
        'debtor_classification_id' => 'DebtorClassificationID',
        'debtor_classification_description' => 'DebtorClassificationDescription',
        'price' => 'Price',
        'note' => 'Note'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_id' => 'setInventoryId',
        'debtor_classification_price_id' => 'setDebtorClassificationPriceId',
        'source' => 'setSource',
        'mode' => 'setMode',
        'amount' => 'setAmount',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'use_quantity_price_break' => 'setUseQuantityPriceBreak',
        'quantity_price_break' => 'setQuantityPriceBreak',
        'debtor_classification_id' => 'setDebtorClassificationId',
        'debtor_classification_description' => 'setDebtorClassificationDescription',
        'price' => 'setPrice',
        'note' => 'setNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_id' => 'getInventoryId',
        'debtor_classification_price_id' => 'getDebtorClassificationPriceId',
        'source' => 'getSource',
        'mode' => 'getMode',
        'amount' => 'getAmount',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'use_quantity_price_break' => 'getUseQuantityPriceBreak',
        'quantity_price_break' => 'getQuantityPriceBreak',
        'debtor_classification_id' => 'getDebtorClassificationId',
        'debtor_classification_description' => 'getDebtorClassificationDescription',
        'price' => 'getPrice',
        'note' => 'getNote'
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
        $this->container['debtor_classification_price_id'] = isset($data['debtor_classification_price_id']) ? $data['debtor_classification_price_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['use_quantity_price_break'] = isset($data['use_quantity_price_break']) ? $data['use_quantity_price_break'] : null;
        $this->container['quantity_price_break'] = isset($data['quantity_price_break']) ? $data['quantity_price_break'] : null;
        $this->container['debtor_classification_id'] = isset($data['debtor_classification_id']) ? $data['debtor_classification_id'] : null;
        $this->container['debtor_classification_description'] = isset($data['debtor_classification_description']) ? $data['debtor_classification_description'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
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
     * Gets debtor_classification_price_id
     *
     * @return string
     */
    public function getDebtorClassificationPriceId()
    {
        return $this->container['debtor_classification_price_id'];
    }

    /**
     * Sets debtor_classification_price_id
     *
     * @param string $debtor_classification_price_id debtor_classification_price_id
     *
     * @return $this
     */
    public function setDebtorClassificationPriceId($debtor_classification_price_id)
    {
        $this->container['debtor_classification_price_id'] = $debtor_classification_price_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string $mode mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets use_quantity_price_break
     *
     * @return bool
     */
    public function getUseQuantityPriceBreak()
    {
        return $this->container['use_quantity_price_break'];
    }

    /**
     * Sets use_quantity_price_break
     *
     * @param bool $use_quantity_price_break use_quantity_price_break
     *
     * @return $this
     */
    public function setUseQuantityPriceBreak($use_quantity_price_break)
    {
        $this->container['use_quantity_price_break'] = $use_quantity_price_break;

        return $this;
    }

    /**
     * Gets quantity_price_break
     *
     * @return double
     */
    public function getQuantityPriceBreak()
    {
        return $this->container['quantity_price_break'];
    }

    /**
     * Sets quantity_price_break
     *
     * @param double $quantity_price_break quantity_price_break
     *
     * @return $this
     */
    public function setQuantityPriceBreak($quantity_price_break)
    {
        $this->container['quantity_price_break'] = $quantity_price_break;

        return $this;
    }

    /**
     * Gets debtor_classification_id
     *
     * @return string
     */
    public function getDebtorClassificationId()
    {
        return $this->container['debtor_classification_id'];
    }

    /**
     * Sets debtor_classification_id
     *
     * @param string $debtor_classification_id debtor_classification_id
     *
     * @return $this
     */
    public function setDebtorClassificationId($debtor_classification_id)
    {
        $this->container['debtor_classification_id'] = $debtor_classification_id;

        return $this;
    }

    /**
     * Gets debtor_classification_description
     *
     * @return string
     */
    public function getDebtorClassificationDescription()
    {
        return $this->container['debtor_classification_description'];
    }

    /**
     * Sets debtor_classification_description
     *
     * @param string $debtor_classification_description debtor_classification_description
     *
     * @return $this
     */
    public function setDebtorClassificationDescription($debtor_classification_description)
    {
        $this->container['debtor_classification_description'] = $debtor_classification_description;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


