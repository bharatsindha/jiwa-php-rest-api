<?php
/**
 * SalesQuoteDocumentPATCHRequest
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
 * SalesQuoteDocumentPATCHRequest Class Doc Comment
 *
 * @category Class
 * @description SalesQuoteDocumentPATCHRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesQuoteDocumentPATCHRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesQuoteDocumentPATCHRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quote_id' => 'string',
        'document_id' => 'string',
        'document_type' => '\Jiwa\JiwaModel\DocumentType',
        'file_id' => 'string',
        'physical_file_name' => 'string',
        'full_physical_file_name' => 'string',
        'description' => 'string',
        'last_saved_date_time' => '\DateTime',
        'last_modified_by_staff_id' => 'string',
        'last_modified_by_staff_username' => 'string',
        'last_modified_by_staff_title' => 'string',
        'last_modified_by_staff_first_name' => 'string',
        'last_modified_by_staff_surname' => 'string',
        'file_binary' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quote_id' => null,
        'document_id' => null,
        'document_type' => null,
        'file_id' => null,
        'physical_file_name' => null,
        'full_physical_file_name' => null,
        'description' => null,
        'last_saved_date_time' => 'date-time',
        'last_modified_by_staff_id' => null,
        'last_modified_by_staff_username' => null,
        'last_modified_by_staff_title' => null,
        'last_modified_by_staff_first_name' => null,
        'last_modified_by_staff_surname' => null,
        'file_binary' => 'byte'
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
        'quote_id' => 'QuoteID',
        'document_id' => 'DocumentID',
        'document_type' => 'DocumentType',
        'file_id' => 'FileID',
        'physical_file_name' => 'PhysicalFileName',
        'full_physical_file_name' => 'FullPhysicalFileName',
        'description' => 'Description',
        'last_saved_date_time' => 'LastSavedDateTime',
        'last_modified_by_staff_id' => 'LastModifiedByStaffID',
        'last_modified_by_staff_username' => 'LastModifiedByStaffUsername',
        'last_modified_by_staff_title' => 'LastModifiedByStaffTitle',
        'last_modified_by_staff_first_name' => 'LastModifiedByStaffFirstName',
        'last_modified_by_staff_surname' => 'LastModifiedByStaffSurname',
        'file_binary' => 'FileBinary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_id' => 'setQuoteId',
        'document_id' => 'setDocumentId',
        'document_type' => 'setDocumentType',
        'file_id' => 'setFileId',
        'physical_file_name' => 'setPhysicalFileName',
        'full_physical_file_name' => 'setFullPhysicalFileName',
        'description' => 'setDescription',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'last_modified_by_staff_id' => 'setLastModifiedByStaffId',
        'last_modified_by_staff_username' => 'setLastModifiedByStaffUsername',
        'last_modified_by_staff_title' => 'setLastModifiedByStaffTitle',
        'last_modified_by_staff_first_name' => 'setLastModifiedByStaffFirstName',
        'last_modified_by_staff_surname' => 'setLastModifiedByStaffSurname',
        'file_binary' => 'setFileBinary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_id' => 'getQuoteId',
        'document_id' => 'getDocumentId',
        'document_type' => 'getDocumentType',
        'file_id' => 'getFileId',
        'physical_file_name' => 'getPhysicalFileName',
        'full_physical_file_name' => 'getFullPhysicalFileName',
        'description' => 'getDescription',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'last_modified_by_staff_id' => 'getLastModifiedByStaffId',
        'last_modified_by_staff_username' => 'getLastModifiedByStaffUsername',
        'last_modified_by_staff_title' => 'getLastModifiedByStaffTitle',
        'last_modified_by_staff_first_name' => 'getLastModifiedByStaffFirstName',
        'last_modified_by_staff_surname' => 'getLastModifiedByStaffSurname',
        'file_binary' => 'getFileBinary'
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
        $this->container['quote_id'] = isset($data['quote_id']) ? $data['quote_id'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['file_id'] = isset($data['file_id']) ? $data['file_id'] : null;
        $this->container['physical_file_name'] = isset($data['physical_file_name']) ? $data['physical_file_name'] : null;
        $this->container['full_physical_file_name'] = isset($data['full_physical_file_name']) ? $data['full_physical_file_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['last_modified_by_staff_id'] = isset($data['last_modified_by_staff_id']) ? $data['last_modified_by_staff_id'] : null;
        $this->container['last_modified_by_staff_username'] = isset($data['last_modified_by_staff_username']) ? $data['last_modified_by_staff_username'] : null;
        $this->container['last_modified_by_staff_title'] = isset($data['last_modified_by_staff_title']) ? $data['last_modified_by_staff_title'] : null;
        $this->container['last_modified_by_staff_first_name'] = isset($data['last_modified_by_staff_first_name']) ? $data['last_modified_by_staff_first_name'] : null;
        $this->container['last_modified_by_staff_surname'] = isset($data['last_modified_by_staff_surname']) ? $data['last_modified_by_staff_surname'] : null;
        $this->container['file_binary'] = isset($data['file_binary']) ? $data['file_binary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['file_binary']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['file_binary'])) {
            $invalidProperties[] = "invalid value for 'file_binary', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

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
     * Gets quote_id
     *
     * @return string
     */
    public function getQuoteId()
    {
        return $this->container['quote_id'];
    }

    /**
     * Sets quote_id
     *
     * @param string $quote_id quote_id
     *
     * @return $this
     */
    public function setQuoteId($quote_id)
    {
        $this->container['quote_id'] = $quote_id;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param string $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \Jiwa\JiwaModel\DocumentType
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \Jiwa\JiwaModel\DocumentType $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets file_id
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param string $file_id file_id
     *
     * @return $this
     */
    public function setFileId($file_id)
    {
        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets physical_file_name
     *
     * @return string
     */
    public function getPhysicalFileName()
    {
        return $this->container['physical_file_name'];
    }

    /**
     * Sets physical_file_name
     *
     * @param string $physical_file_name physical_file_name
     *
     * @return $this
     */
    public function setPhysicalFileName($physical_file_name)
    {
        $this->container['physical_file_name'] = $physical_file_name;

        return $this;
    }

    /**
     * Gets full_physical_file_name
     *
     * @return string
     */
    public function getFullPhysicalFileName()
    {
        return $this->container['full_physical_file_name'];
    }

    /**
     * Sets full_physical_file_name
     *
     * @param string $full_physical_file_name full_physical_file_name
     *
     * @return $this
     */
    public function setFullPhysicalFileName($full_physical_file_name)
    {
        $this->container['full_physical_file_name'] = $full_physical_file_name;

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
     * Gets last_modified_by_staff_id
     *
     * @return string
     */
    public function getLastModifiedByStaffId()
    {
        return $this->container['last_modified_by_staff_id'];
    }

    /**
     * Sets last_modified_by_staff_id
     *
     * @param string $last_modified_by_staff_id last_modified_by_staff_id
     *
     * @return $this
     */
    public function setLastModifiedByStaffId($last_modified_by_staff_id)
    {
        $this->container['last_modified_by_staff_id'] = $last_modified_by_staff_id;

        return $this;
    }

    /**
     * Gets last_modified_by_staff_username
     *
     * @return string
     */
    public function getLastModifiedByStaffUsername()
    {
        return $this->container['last_modified_by_staff_username'];
    }

    /**
     * Sets last_modified_by_staff_username
     *
     * @param string $last_modified_by_staff_username last_modified_by_staff_username
     *
     * @return $this
     */
    public function setLastModifiedByStaffUsername($last_modified_by_staff_username)
    {
        $this->container['last_modified_by_staff_username'] = $last_modified_by_staff_username;

        return $this;
    }

    /**
     * Gets last_modified_by_staff_title
     *
     * @return string
     */
    public function getLastModifiedByStaffTitle()
    {
        return $this->container['last_modified_by_staff_title'];
    }

    /**
     * Sets last_modified_by_staff_title
     *
     * @param string $last_modified_by_staff_title last_modified_by_staff_title
     *
     * @return $this
     */
    public function setLastModifiedByStaffTitle($last_modified_by_staff_title)
    {
        $this->container['last_modified_by_staff_title'] = $last_modified_by_staff_title;

        return $this;
    }

    /**
     * Gets last_modified_by_staff_first_name
     *
     * @return string
     */
    public function getLastModifiedByStaffFirstName()
    {
        return $this->container['last_modified_by_staff_first_name'];
    }

    /**
     * Sets last_modified_by_staff_first_name
     *
     * @param string $last_modified_by_staff_first_name last_modified_by_staff_first_name
     *
     * @return $this
     */
    public function setLastModifiedByStaffFirstName($last_modified_by_staff_first_name)
    {
        $this->container['last_modified_by_staff_first_name'] = $last_modified_by_staff_first_name;

        return $this;
    }

    /**
     * Gets last_modified_by_staff_surname
     *
     * @return string
     */
    public function getLastModifiedByStaffSurname()
    {
        return $this->container['last_modified_by_staff_surname'];
    }

    /**
     * Sets last_modified_by_staff_surname
     *
     * @param string $last_modified_by_staff_surname last_modified_by_staff_surname
     *
     * @return $this
     */
    public function setLastModifiedByStaffSurname($last_modified_by_staff_surname)
    {
        $this->container['last_modified_by_staff_surname'] = $last_modified_by_staff_surname;

        return $this;
    }

    /**
     * Gets file_binary
     *
     * @return string
     */
    public function getFileBinary()
    {
        return $this->container['file_binary'];
    }

    /**
     * Sets file_binary
     *
     * @param string $file_binary file_binary
     *
     * @return $this
     */
    public function setFileBinary($file_binary)
    {

        if (!is_null($file_binary) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $file_binary))) {
            throw new \InvalidArgumentException("invalid value for $file_binary when calling SalesQuoteDocumentPATCHRequest., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['file_binary'] = $file_binary;

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


