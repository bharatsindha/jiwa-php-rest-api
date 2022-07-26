<?php
/**
 * Bill
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
 * Bill Class Doc Comment
 *
 * @category Class
 * @description Bill
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Bill implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bill_id' => 'string',
        'bill_no' => 'string',
        'description' => 'string',
        'is_enabled' => 'bool',
        'maximum_production_capability' => 'double',
        'last_saved_date_time' => '\DateTime',
        'row_hash' => 'string',
        'stages' => '\Jiwa\JiwaModel\Stage[]',
        'outputs' => '\Jiwa\JiwaModel\Output[]',
        'documents' => '\Jiwa\JiwaModel\Document[]',
        'custom_field_values' => '\Jiwa\JiwaModel\CustomFieldValue[]',
        'notes' => '\Jiwa\JiwaModel\Note[]',
        'production_line' => '\Jiwa\JiwaModel\ProductionLine',
        'bill_parents' => '\Jiwa\JiwaModel\BillParent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bill_id' => null,
        'bill_no' => null,
        'description' => null,
        'is_enabled' => null,
        'maximum_production_capability' => 'double',
        'last_saved_date_time' => 'date-time',
        'row_hash' => 'binary',
        'stages' => null,
        'outputs' => null,
        'documents' => null,
        'custom_field_values' => null,
        'notes' => null,
        'production_line' => null,
        'bill_parents' => null
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
        'bill_id' => 'BillID',
        'bill_no' => 'BillNo',
        'description' => 'Description',
        'is_enabled' => 'IsEnabled',
        'maximum_production_capability' => 'MaximumProductionCapability',
        'last_saved_date_time' => 'LastSavedDateTime',
        'row_hash' => 'RowHash',
        'stages' => 'Stages',
        'outputs' => 'Outputs',
        'documents' => 'Documents',
        'custom_field_values' => 'CustomFieldValues',
        'notes' => 'Notes',
        'production_line' => 'ProductionLine',
        'bill_parents' => 'BillParents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bill_id' => 'setBillId',
        'bill_no' => 'setBillNo',
        'description' => 'setDescription',
        'is_enabled' => 'setIsEnabled',
        'maximum_production_capability' => 'setMaximumProductionCapability',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'row_hash' => 'setRowHash',
        'stages' => 'setStages',
        'outputs' => 'setOutputs',
        'documents' => 'setDocuments',
        'custom_field_values' => 'setCustomFieldValues',
        'notes' => 'setNotes',
        'production_line' => 'setProductionLine',
        'bill_parents' => 'setBillParents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bill_id' => 'getBillId',
        'bill_no' => 'getBillNo',
        'description' => 'getDescription',
        'is_enabled' => 'getIsEnabled',
        'maximum_production_capability' => 'getMaximumProductionCapability',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'row_hash' => 'getRowHash',
        'stages' => 'getStages',
        'outputs' => 'getOutputs',
        'documents' => 'getDocuments',
        'custom_field_values' => 'getCustomFieldValues',
        'notes' => 'getNotes',
        'production_line' => 'getProductionLine',
        'bill_parents' => 'getBillParents'
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
        $this->container['bill_id'] = isset($data['bill_id']) ? $data['bill_id'] : null;
        $this->container['bill_no'] = isset($data['bill_no']) ? $data['bill_no'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['maximum_production_capability'] = isset($data['maximum_production_capability']) ? $data['maximum_production_capability'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['row_hash'] = isset($data['row_hash']) ? $data['row_hash'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['custom_field_values'] = isset($data['custom_field_values']) ? $data['custom_field_values'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['production_line'] = isset($data['production_line']) ? $data['production_line'] : null;
        $this->container['bill_parents'] = isset($data['bill_parents']) ? $data['bill_parents'] : null;
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
     * Gets bill_id
     *
     * @return string
     */
    public function getBillId()
    {
        return $this->container['bill_id'];
    }

    /**
     * Sets bill_id
     *
     * @param string $bill_id bill_id
     *
     * @return $this
     */
    public function setBillId($bill_id)
    {
        $this->container['bill_id'] = $bill_id;

        return $this;
    }

    /**
     * Gets bill_no
     *
     * @return string
     */
    public function getBillNo()
    {
        return $this->container['bill_no'];
    }

    /**
     * Sets bill_no
     *
     * @param string $bill_no bill_no
     *
     * @return $this
     */
    public function setBillNo($bill_no)
    {
        $this->container['bill_no'] = $bill_no;

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
     * Gets maximum_production_capability
     *
     * @return double
     */
    public function getMaximumProductionCapability()
    {
        return $this->container['maximum_production_capability'];
    }

    /**
     * Sets maximum_production_capability
     *
     * @param double $maximum_production_capability maximum_production_capability
     *
     * @return $this
     */
    public function setMaximumProductionCapability($maximum_production_capability)
    {
        $this->container['maximum_production_capability'] = $maximum_production_capability;

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
     * Gets row_hash
     *
     * @return string
     */
    public function getRowHash()
    {
        return $this->container['row_hash'];
    }

    /**
     * Sets row_hash
     *
     * @param string $row_hash row_hash
     *
     * @return $this
     */
    public function setRowHash($row_hash)
    {
        $this->container['row_hash'] = $row_hash;

        return $this;
    }

    /**
     * Gets stages
     *
     * @return \Jiwa\JiwaModel\Stage[]
     */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
     * Sets stages
     *
     * @param \Jiwa\JiwaModel\Stage[] $stages stages
     *
     * @return $this
     */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return \Jiwa\JiwaModel\Output[]
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \Jiwa\JiwaModel\Output[] $outputs outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \Jiwa\JiwaModel\Document[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Jiwa\JiwaModel\Document[] $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets custom_field_values
     *
     * @return \Jiwa\JiwaModel\CustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
        return $this->container['custom_field_values'];
    }

    /**
     * Sets custom_field_values
     *
     * @param \Jiwa\JiwaModel\CustomFieldValue[] $custom_field_values custom_field_values
     *
     * @return $this
     */
    public function setCustomFieldValues($custom_field_values)
    {
        $this->container['custom_field_values'] = $custom_field_values;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \Jiwa\JiwaModel\Note[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \Jiwa\JiwaModel\Note[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets production_line
     *
     * @return \Jiwa\JiwaModel\ProductionLine
     */
    public function getProductionLine()
    {
        return $this->container['production_line'];
    }

    /**
     * Sets production_line
     *
     * @param \Jiwa\JiwaModel\ProductionLine $production_line production_line
     *
     * @return $this
     */
    public function setProductionLine($production_line)
    {
        $this->container['production_line'] = $production_line;

        return $this;
    }

    /**
     * Gets bill_parents
     *
     * @return \Jiwa\JiwaModel\BillParent[]
     */
    public function getBillParents()
    {
        return $this->container['bill_parents'];
    }

    /**
     * Sets bill_parents
     *
     * @param \Jiwa\JiwaModel\BillParent[] $bill_parents bill_parents
     *
     * @return $this
     */
    public function setBillParents($bill_parents)
    {
        $this->container['bill_parents'] = $bill_parents;

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

