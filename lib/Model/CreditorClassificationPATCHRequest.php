<?php
/**
 * CreditorClassificationPATCHRequest
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
 * CreditorClassificationPATCHRequest Class Doc Comment
 *
 * @category Class
 * @description CreditorClassificationPATCHRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditorClassificationPATCHRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditorClassificationPATCHRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'classification_id' => 'string',
        'description' => 'string',
        'last_saved_date_time' => '\DateTime',
        'is_default' => 'bool',
        'terms_days' => 'int',
        'terms_type' => 'string',
        'po_workflows_rec_id' => 'string',
        'po_workflows_name' => 'string',
        'po_workflows_description' => 'string',
        'creditor_ledgers' => '\Jiwa\JiwaModel\CreditorLedger[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'classification_id' => null,
        'description' => null,
        'last_saved_date_time' => 'date-time',
        'is_default' => null,
        'terms_days' => 'int32',
        'terms_type' => null,
        'po_workflows_rec_id' => null,
        'po_workflows_name' => null,
        'po_workflows_description' => null,
        'creditor_ledgers' => null
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
        'classification_id' => 'ClassificationID',
        'description' => 'Description',
        'last_saved_date_time' => 'LastSavedDateTime',
        'is_default' => 'IsDefault',
        'terms_days' => 'TermsDays',
        'terms_type' => 'TermsType',
        'po_workflows_rec_id' => 'PO_Workflows_RecID',
        'po_workflows_name' => 'PO_Workflows_Name',
        'po_workflows_description' => 'PO_Workflows_Description',
        'creditor_ledgers' => 'CreditorLedgers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification_id' => 'setClassificationId',
        'description' => 'setDescription',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'is_default' => 'setIsDefault',
        'terms_days' => 'setTermsDays',
        'terms_type' => 'setTermsType',
        'po_workflows_rec_id' => 'setPoWorkflowsRecId',
        'po_workflows_name' => 'setPoWorkflowsName',
        'po_workflows_description' => 'setPoWorkflowsDescription',
        'creditor_ledgers' => 'setCreditorLedgers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification_id' => 'getClassificationId',
        'description' => 'getDescription',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'is_default' => 'getIsDefault',
        'terms_days' => 'getTermsDays',
        'terms_type' => 'getTermsType',
        'po_workflows_rec_id' => 'getPoWorkflowsRecId',
        'po_workflows_name' => 'getPoWorkflowsName',
        'po_workflows_description' => 'getPoWorkflowsDescription',
        'creditor_ledgers' => 'getCreditorLedgers'
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
        $this->container['classification_id'] = isset($data['classification_id']) ? $data['classification_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['terms_days'] = isset($data['terms_days']) ? $data['terms_days'] : null;
        $this->container['terms_type'] = isset($data['terms_type']) ? $data['terms_type'] : null;
        $this->container['po_workflows_rec_id'] = isset($data['po_workflows_rec_id']) ? $data['po_workflows_rec_id'] : null;
        $this->container['po_workflows_name'] = isset($data['po_workflows_name']) ? $data['po_workflows_name'] : null;
        $this->container['po_workflows_description'] = isset($data['po_workflows_description']) ? $data['po_workflows_description'] : null;
        $this->container['creditor_ledgers'] = isset($data['creditor_ledgers']) ? $data['creditor_ledgers'] : null;
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
     * Gets classification_id
     *
     * @return string
     */
    public function getClassificationId()
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id
     *
     * @param string $classification_id classification_id
     *
     * @return $this
     */
    public function setClassificationId($classification_id)
    {
        $this->container['classification_id'] = $classification_id;

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
     * Gets terms_days
     *
     * @return int
     */
    public function getTermsDays()
    {
        return $this->container['terms_days'];
    }

    /**
     * Sets terms_days
     *
     * @param int $terms_days terms_days
     *
     * @return $this
     */
    public function setTermsDays($terms_days)
    {
        $this->container['terms_days'] = $terms_days;

        return $this;
    }

    /**
     * Gets terms_type
     *
     * @return string
     */
    public function getTermsType()
    {
        return $this->container['terms_type'];
    }

    /**
     * Sets terms_type
     *
     * @param string $terms_type terms_type
     *
     * @return $this
     */
    public function setTermsType($terms_type)
    {
        $this->container['terms_type'] = $terms_type;

        return $this;
    }

    /**
     * Gets po_workflows_rec_id
     *
     * @return string
     */
    public function getPoWorkflowsRecId()
    {
        return $this->container['po_workflows_rec_id'];
    }

    /**
     * Sets po_workflows_rec_id
     *
     * @param string $po_workflows_rec_id po_workflows_rec_id
     *
     * @return $this
     */
    public function setPoWorkflowsRecId($po_workflows_rec_id)
    {
        $this->container['po_workflows_rec_id'] = $po_workflows_rec_id;

        return $this;
    }

    /**
     * Gets po_workflows_name
     *
     * @return string
     */
    public function getPoWorkflowsName()
    {
        return $this->container['po_workflows_name'];
    }

    /**
     * Sets po_workflows_name
     *
     * @param string $po_workflows_name po_workflows_name
     *
     * @return $this
     */
    public function setPoWorkflowsName($po_workflows_name)
    {
        $this->container['po_workflows_name'] = $po_workflows_name;

        return $this;
    }

    /**
     * Gets po_workflows_description
     *
     * @return string
     */
    public function getPoWorkflowsDescription()
    {
        return $this->container['po_workflows_description'];
    }

    /**
     * Sets po_workflows_description
     *
     * @param string $po_workflows_description po_workflows_description
     *
     * @return $this
     */
    public function setPoWorkflowsDescription($po_workflows_description)
    {
        $this->container['po_workflows_description'] = $po_workflows_description;

        return $this;
    }

    /**
     * Gets creditor_ledgers
     *
     * @return \Jiwa\JiwaModel\CreditorLedger[]
     */
    public function getCreditorLedgers()
    {
        return $this->container['creditor_ledgers'];
    }

    /**
     * Sets creditor_ledgers
     *
     * @param \Jiwa\JiwaModel\CreditorLedger[] $creditor_ledgers creditor_ledgers
     *
     * @return $this
     */
    public function setCreditorLedgers($creditor_ledgers)
    {
        $this->container['creditor_ledgers'] = $creditor_ledgers;

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

