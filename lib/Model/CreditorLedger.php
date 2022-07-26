<?php
/**
 * CreditorLedger
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
 * CreditorLedger Class Doc Comment
 *
 * @category Class
 * @description CreditorLedger
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditorLedger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditorLedger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ledger_id' => 'string',
        'name' => 'string',
        'ledger_account_id' => 'string',
        'ledger_account_no' => 'string',
        'ledger_account_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ledger_id' => null,
        'name' => null,
        'ledger_account_id' => null,
        'ledger_account_no' => null,
        'ledger_account_description' => null
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
        'ledger_id' => 'LedgerID',
        'name' => 'Name',
        'ledger_account_id' => 'LedgerAccountID',
        'ledger_account_no' => 'LedgerAccountNo',
        'ledger_account_description' => 'LedgerAccountDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ledger_id' => 'setLedgerId',
        'name' => 'setName',
        'ledger_account_id' => 'setLedgerAccountId',
        'ledger_account_no' => 'setLedgerAccountNo',
        'ledger_account_description' => 'setLedgerAccountDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ledger_id' => 'getLedgerId',
        'name' => 'getName',
        'ledger_account_id' => 'getLedgerAccountId',
        'ledger_account_no' => 'getLedgerAccountNo',
        'ledger_account_description' => 'getLedgerAccountDescription'
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
        $this->container['ledger_id'] = isset($data['ledger_id']) ? $data['ledger_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ledger_account_id'] = isset($data['ledger_account_id']) ? $data['ledger_account_id'] : null;
        $this->container['ledger_account_no'] = isset($data['ledger_account_no']) ? $data['ledger_account_no'] : null;
        $this->container['ledger_account_description'] = isset($data['ledger_account_description']) ? $data['ledger_account_description'] : null;
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
     * Gets ledger_id
     *
     * @return string
     */
    public function getLedgerId()
    {
        return $this->container['ledger_id'];
    }

    /**
     * Sets ledger_id
     *
     * @param string $ledger_id ledger_id
     *
     * @return $this
     */
    public function setLedgerId($ledger_id)
    {
        $this->container['ledger_id'] = $ledger_id;

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
     * Gets ledger_account_id
     *
     * @return string
     */
    public function getLedgerAccountId()
    {
        return $this->container['ledger_account_id'];
    }

    /**
     * Sets ledger_account_id
     *
     * @param string $ledger_account_id ledger_account_id
     *
     * @return $this
     */
    public function setLedgerAccountId($ledger_account_id)
    {
        $this->container['ledger_account_id'] = $ledger_account_id;

        return $this;
    }

    /**
     * Gets ledger_account_no
     *
     * @return string
     */
    public function getLedgerAccountNo()
    {
        return $this->container['ledger_account_no'];
    }

    /**
     * Sets ledger_account_no
     *
     * @param string $ledger_account_no ledger_account_no
     *
     * @return $this
     */
    public function setLedgerAccountNo($ledger_account_no)
    {
        $this->container['ledger_account_no'] = $ledger_account_no;

        return $this;
    }

    /**
     * Gets ledger_account_description
     *
     * @return string
     */
    public function getLedgerAccountDescription()
    {
        return $this->container['ledger_account_description'];
    }

    /**
     * Sets ledger_account_description
     *
     * @param string $ledger_account_description ledger_account_description
     *
     * @return $this
     */
    public function setLedgerAccountDescription($ledger_account_description)
    {
        $this->container['ledger_account_description'] = $ledger_account_description;

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


