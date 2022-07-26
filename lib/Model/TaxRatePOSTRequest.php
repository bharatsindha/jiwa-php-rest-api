<?php
/**
 * TaxRatePOSTRequest
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
 * TaxRatePOSTRequest Class Doc Comment
 *
 * @category Class
 * @description TaxRatePOSTRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxRatePOSTRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxRatePOSTRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rec_id' => 'string',
        'description' => 'string',
        'gst_tax_group' => 'string',
        'rate' => 'double',
        'is_default_rate' => 'bool',
        'bas_code' => 'double',
        'is_default_rate_in_group' => 'bool',
        'is_enabled' => 'bool',
        'ledger_account' => '\Jiwa\JiwaModel\Account'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rec_id' => null,
        'description' => null,
        'gst_tax_group' => null,
        'rate' => 'double',
        'is_default_rate' => null,
        'bas_code' => 'double',
        'is_default_rate_in_group' => null,
        'is_enabled' => null,
        'ledger_account' => null
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
        'rec_id' => 'RecID',
        'description' => 'Description',
        'gst_tax_group' => 'GSTTaxGroup',
        'rate' => 'Rate',
        'is_default_rate' => 'IsDefaultRate',
        'bas_code' => 'BASCode',
        'is_default_rate_in_group' => 'IsDefaultRateInGroup',
        'is_enabled' => 'IsEnabled',
        'ledger_account' => 'LedgerAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rec_id' => 'setRecId',
        'description' => 'setDescription',
        'gst_tax_group' => 'setGstTaxGroup',
        'rate' => 'setRate',
        'is_default_rate' => 'setIsDefaultRate',
        'bas_code' => 'setBasCode',
        'is_default_rate_in_group' => 'setIsDefaultRateInGroup',
        'is_enabled' => 'setIsEnabled',
        'ledger_account' => 'setLedgerAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rec_id' => 'getRecId',
        'description' => 'getDescription',
        'gst_tax_group' => 'getGstTaxGroup',
        'rate' => 'getRate',
        'is_default_rate' => 'getIsDefaultRate',
        'bas_code' => 'getBasCode',
        'is_default_rate_in_group' => 'getIsDefaultRateInGroup',
        'is_enabled' => 'getIsEnabled',
        'ledger_account' => 'getLedgerAccount'
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
        $this->container['rec_id'] = isset($data['rec_id']) ? $data['rec_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gst_tax_group'] = isset($data['gst_tax_group']) ? $data['gst_tax_group'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['is_default_rate'] = isset($data['is_default_rate']) ? $data['is_default_rate'] : null;
        $this->container['bas_code'] = isset($data['bas_code']) ? $data['bas_code'] : null;
        $this->container['is_default_rate_in_group'] = isset($data['is_default_rate_in_group']) ? $data['is_default_rate_in_group'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['ledger_account'] = isset($data['ledger_account']) ? $data['ledger_account'] : null;
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
     * Gets rec_id
     *
     * @return string
     */
    public function getRecId()
    {
        return $this->container['rec_id'];
    }

    /**
     * Sets rec_id
     *
     * @param string $rec_id rec_id
     *
     * @return $this
     */
    public function setRecId($rec_id)
    {
        $this->container['rec_id'] = $rec_id;

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
     * Gets gst_tax_group
     *
     * @return string
     */
    public function getGstTaxGroup()
    {
        return $this->container['gst_tax_group'];
    }

    /**
     * Sets gst_tax_group
     *
     * @param string $gst_tax_group gst_tax_group
     *
     * @return $this
     */
    public function setGstTaxGroup($gst_tax_group)
    {
        $this->container['gst_tax_group'] = $gst_tax_group;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param double $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets is_default_rate
     *
     * @return bool
     */
    public function getIsDefaultRate()
    {
        return $this->container['is_default_rate'];
    }

    /**
     * Sets is_default_rate
     *
     * @param bool $is_default_rate is_default_rate
     *
     * @return $this
     */
    public function setIsDefaultRate($is_default_rate)
    {
        $this->container['is_default_rate'] = $is_default_rate;

        return $this;
    }

    /**
     * Gets bas_code
     *
     * @return double
     */
    public function getBasCode()
    {
        return $this->container['bas_code'];
    }

    /**
     * Sets bas_code
     *
     * @param double $bas_code bas_code
     *
     * @return $this
     */
    public function setBasCode($bas_code)
    {
        $this->container['bas_code'] = $bas_code;

        return $this;
    }

    /**
     * Gets is_default_rate_in_group
     *
     * @return bool
     */
    public function getIsDefaultRateInGroup()
    {
        return $this->container['is_default_rate_in_group'];
    }

    /**
     * Sets is_default_rate_in_group
     *
     * @param bool $is_default_rate_in_group is_default_rate_in_group
     *
     * @return $this
     */
    public function setIsDefaultRateInGroup($is_default_rate_in_group)
    {
        $this->container['is_default_rate_in_group'] = $is_default_rate_in_group;

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
     * Gets ledger_account
     *
     * @return \Jiwa\JiwaModel\Account
     */
    public function getLedgerAccount()
    {
        return $this->container['ledger_account'];
    }

    /**
     * Sets ledger_account
     *
     * @param \Jiwa\JiwaModel\Account $ledger_account ledger_account
     *
     * @return $this
     */
    public function setLedgerAccount($ledger_account)
    {
        $this->container['ledger_account'] = $ledger_account;

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


