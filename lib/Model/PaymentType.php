<?php
/**
 * PaymentType
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
 * PaymentType Class Doc Comment
 *
 * @category Class
 * @description PaymentType
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_type_id' => 'string',
        'name' => 'string',
        'code' => 'string',
        'item_no' => 'int',
        'is_enabled' => 'bool',
        'is_default' => 'bool',
        'is_credit_card' => 'bool',
        'is_pos' => 'bool',
        'general_ledger_account' => '\Jiwa\JiwaModel\Account'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_type_id' => null,
        'name' => null,
        'code' => null,
        'item_no' => 'int32',
        'is_enabled' => null,
        'is_default' => null,
        'is_credit_card' => null,
        'is_pos' => null,
        'general_ledger_account' => null
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
        'payment_type_id' => 'PaymentTypeID',
        'name' => 'Name',
        'code' => 'Code',
        'item_no' => 'ItemNo',
        'is_enabled' => 'IsEnabled',
        'is_default' => 'IsDefault',
        'is_credit_card' => 'IsCreditCard',
        'is_pos' => 'IsPOS',
        'general_ledger_account' => 'GeneralLedgerAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_type_id' => 'setPaymentTypeId',
        'name' => 'setName',
        'code' => 'setCode',
        'item_no' => 'setItemNo',
        'is_enabled' => 'setIsEnabled',
        'is_default' => 'setIsDefault',
        'is_credit_card' => 'setIsCreditCard',
        'is_pos' => 'setIsPos',
        'general_ledger_account' => 'setGeneralLedgerAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_type_id' => 'getPaymentTypeId',
        'name' => 'getName',
        'code' => 'getCode',
        'item_no' => 'getItemNo',
        'is_enabled' => 'getIsEnabled',
        'is_default' => 'getIsDefault',
        'is_credit_card' => 'getIsCreditCard',
        'is_pos' => 'getIsPos',
        'general_ledger_account' => 'getGeneralLedgerAccount'
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
        $this->container['payment_type_id'] = isset($data['payment_type_id']) ? $data['payment_type_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['is_credit_card'] = isset($data['is_credit_card']) ? $data['is_credit_card'] : null;
        $this->container['is_pos'] = isset($data['is_pos']) ? $data['is_pos'] : null;
        $this->container['general_ledger_account'] = isset($data['general_ledger_account']) ? $data['general_ledger_account'] : null;
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
     * Gets payment_type_id
     *
     * @return string
     */
    public function getPaymentTypeId()
    {
        return $this->container['payment_type_id'];
    }

    /**
     * Sets payment_type_id
     *
     * @param string $payment_type_id payment_type_id
     *
     * @return $this
     */
    public function setPaymentTypeId($payment_type_id)
    {
        $this->container['payment_type_id'] = $payment_type_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled is_enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
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
     * Gets is_credit_card
     *
     * @return bool
     */
    public function getIsCreditCard()
    {
        return $this->container['is_credit_card'];
    }

    /**
     * Sets is_credit_card
     *
     * @param bool $is_credit_card is_credit_card
     *
     * @return $this
     */
    public function setIsCreditCard($is_credit_card)
    {
        $this->container['is_credit_card'] = $is_credit_card;

        return $this;
    }

    /**
     * Gets is_pos
     *
     * @return bool
     */
    public function getIsPos()
    {
        return $this->container['is_pos'];
    }

    /**
     * Sets is_pos
     *
     * @param bool $is_pos is_pos
     *
     * @return $this
     */
    public function setIsPos($is_pos)
    {
        $this->container['is_pos'] = $is_pos;

        return $this;
    }

    /**
     * Gets general_ledger_account
     *
     * @return \Jiwa\JiwaModel\Account
     */
    public function getGeneralLedgerAccount()
    {
        return $this->container['general_ledger_account'];
    }

    /**
     * Sets general_ledger_account
     *
     * @param \Jiwa\JiwaModel\Account $general_ledger_account general_ledger_account
     *
     * @return $this
     */
    public function setGeneralLedgerAccount($general_ledger_account)
    {
        $this->container['general_ledger_account'] = $general_ledger_account;

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

