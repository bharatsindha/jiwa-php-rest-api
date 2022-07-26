<?php
/**
 * ForwardCoverContract
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
 * ForwardCoverContract Class Doc Comment
 *
 * @category Class
 * @description ForwardCoverContract
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForwardCoverContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ForwardCoverContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'forward_cover_contract_id' => 'string',
        'contract_no' => 'string',
        'description' => 'string',
        'reference' => 'string',
        'currency' => '\Jiwa\JiwaModel\Currency',
        'fx_rate' => 'double',
        'fx_contract_amount' => 'double',
        'fx_used_amount' => 'double',
        'home_contract_amount' => 'double',
        'home_used_amount' => 'double',
        'initiated_date' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'status' => 'string',
        'last_saved_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'forward_cover_contract_id' => null,
        'contract_no' => null,
        'description' => null,
        'reference' => null,
        'currency' => null,
        'fx_rate' => 'double',
        'fx_contract_amount' => 'double',
        'fx_used_amount' => 'double',
        'home_contract_amount' => 'double',
        'home_used_amount' => 'double',
        'initiated_date' => 'date-time',
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'status' => null,
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
        'forward_cover_contract_id' => 'ForwardCoverContractID',
        'contract_no' => 'ContractNo',
        'description' => 'Description',
        'reference' => 'Reference',
        'currency' => 'Currency',
        'fx_rate' => 'FXRate',
        'fx_contract_amount' => 'FXContractAmount',
        'fx_used_amount' => 'FXUsedAmount',
        'home_contract_amount' => 'HomeContractAmount',
        'home_used_amount' => 'HomeUsedAmount',
        'initiated_date' => 'InitiatedDate',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'status' => 'Status',
        'last_saved_date_time' => 'LastSavedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forward_cover_contract_id' => 'setForwardCoverContractId',
        'contract_no' => 'setContractNo',
        'description' => 'setDescription',
        'reference' => 'setReference',
        'currency' => 'setCurrency',
        'fx_rate' => 'setFxRate',
        'fx_contract_amount' => 'setFxContractAmount',
        'fx_used_amount' => 'setFxUsedAmount',
        'home_contract_amount' => 'setHomeContractAmount',
        'home_used_amount' => 'setHomeUsedAmount',
        'initiated_date' => 'setInitiatedDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'status' => 'setStatus',
        'last_saved_date_time' => 'setLastSavedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forward_cover_contract_id' => 'getForwardCoverContractId',
        'contract_no' => 'getContractNo',
        'description' => 'getDescription',
        'reference' => 'getReference',
        'currency' => 'getCurrency',
        'fx_rate' => 'getFxRate',
        'fx_contract_amount' => 'getFxContractAmount',
        'fx_used_amount' => 'getFxUsedAmount',
        'home_contract_amount' => 'getHomeContractAmount',
        'home_used_amount' => 'getHomeUsedAmount',
        'initiated_date' => 'getInitiatedDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'status' => 'getStatus',
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
        $this->container['forward_cover_contract_id'] = isset($data['forward_cover_contract_id']) ? $data['forward_cover_contract_id'] : null;
        $this->container['contract_no'] = isset($data['contract_no']) ? $data['contract_no'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['fx_rate'] = isset($data['fx_rate']) ? $data['fx_rate'] : null;
        $this->container['fx_contract_amount'] = isset($data['fx_contract_amount']) ? $data['fx_contract_amount'] : null;
        $this->container['fx_used_amount'] = isset($data['fx_used_amount']) ? $data['fx_used_amount'] : null;
        $this->container['home_contract_amount'] = isset($data['home_contract_amount']) ? $data['home_contract_amount'] : null;
        $this->container['home_used_amount'] = isset($data['home_used_amount']) ? $data['home_used_amount'] : null;
        $this->container['initiated_date'] = isset($data['initiated_date']) ? $data['initiated_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets forward_cover_contract_id
     *
     * @return string
     */
    public function getForwardCoverContractId()
    {
        return $this->container['forward_cover_contract_id'];
    }

    /**
     * Sets forward_cover_contract_id
     *
     * @param string $forward_cover_contract_id forward_cover_contract_id
     *
     * @return $this
     */
    public function setForwardCoverContractId($forward_cover_contract_id)
    {
        $this->container['forward_cover_contract_id'] = $forward_cover_contract_id;

        return $this;
    }

    /**
     * Gets contract_no
     *
     * @return string
     */
    public function getContractNo()
    {
        return $this->container['contract_no'];
    }

    /**
     * Sets contract_no
     *
     * @param string $contract_no contract_no
     *
     * @return $this
     */
    public function setContractNo($contract_no)
    {
        $this->container['contract_no'] = $contract_no;

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
     * Gets currency
     *
     * @return \Jiwa\JiwaModel\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Jiwa\JiwaModel\Currency $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets fx_rate
     *
     * @return double
     */
    public function getFxRate()
    {
        return $this->container['fx_rate'];
    }

    /**
     * Sets fx_rate
     *
     * @param double $fx_rate fx_rate
     *
     * @return $this
     */
    public function setFxRate($fx_rate)
    {
        $this->container['fx_rate'] = $fx_rate;

        return $this;
    }

    /**
     * Gets fx_contract_amount
     *
     * @return double
     */
    public function getFxContractAmount()
    {
        return $this->container['fx_contract_amount'];
    }

    /**
     * Sets fx_contract_amount
     *
     * @param double $fx_contract_amount fx_contract_amount
     *
     * @return $this
     */
    public function setFxContractAmount($fx_contract_amount)
    {
        $this->container['fx_contract_amount'] = $fx_contract_amount;

        return $this;
    }

    /**
     * Gets fx_used_amount
     *
     * @return double
     */
    public function getFxUsedAmount()
    {
        return $this->container['fx_used_amount'];
    }

    /**
     * Sets fx_used_amount
     *
     * @param double $fx_used_amount fx_used_amount
     *
     * @return $this
     */
    public function setFxUsedAmount($fx_used_amount)
    {
        $this->container['fx_used_amount'] = $fx_used_amount;

        return $this;
    }

    /**
     * Gets home_contract_amount
     *
     * @return double
     */
    public function getHomeContractAmount()
    {
        return $this->container['home_contract_amount'];
    }

    /**
     * Sets home_contract_amount
     *
     * @param double $home_contract_amount home_contract_amount
     *
     * @return $this
     */
    public function setHomeContractAmount($home_contract_amount)
    {
        $this->container['home_contract_amount'] = $home_contract_amount;

        return $this;
    }

    /**
     * Gets home_used_amount
     *
     * @return double
     */
    public function getHomeUsedAmount()
    {
        return $this->container['home_used_amount'];
    }

    /**
     * Sets home_used_amount
     *
     * @param double $home_used_amount home_used_amount
     *
     * @return $this
     */
    public function setHomeUsedAmount($home_used_amount)
    {
        $this->container['home_used_amount'] = $home_used_amount;

        return $this;
    }

    /**
     * Gets initiated_date
     *
     * @return \DateTime
     */
    public function getInitiatedDate()
    {
        return $this->container['initiated_date'];
    }

    /**
     * Sets initiated_date
     *
     * @param \DateTime $initiated_date initiated_date
     *
     * @return $this
     */
    public function setInitiatedDate($initiated_date)
    {
        $this->container['initiated_date'] = $initiated_date;

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

