<?php
/**
 * DebtorGroupMembershipDELETERequest
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
 * DebtorGroupMembershipDELETERequest Class Doc Comment
 *
 * @category Class
 * @description DebtorGroupMembershipDELETERequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebtorGroupMembershipDELETERequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DebtorGroupMembershipDELETERequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debtor_id' => 'string',
        'group_membership_id' => 'string',
        'is_default' => 'bool',
        'group_rec_id' => 'string',
        'group_description' => 'string',
        'staff_id' => 'string',
        'staff_username' => 'string',
        'staff_title' => 'string',
        'staff_first_name' => 'string',
        'staff_surname' => 'string',
        'last_saved_date_time' => '\DateTime',
        'item_no' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'debtor_id' => null,
        'group_membership_id' => null,
        'is_default' => null,
        'group_rec_id' => null,
        'group_description' => null,
        'staff_id' => null,
        'staff_username' => null,
        'staff_title' => null,
        'staff_first_name' => null,
        'staff_surname' => null,
        'last_saved_date_time' => 'date-time',
        'item_no' => 'int32'
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
        'debtor_id' => 'DebtorID',
        'group_membership_id' => 'GroupMembershipID',
        'is_default' => 'IsDefault',
        'group_rec_id' => 'GroupRecID',
        'group_description' => 'GroupDescription',
        'staff_id' => 'StaffID',
        'staff_username' => 'StaffUsername',
        'staff_title' => 'StaffTitle',
        'staff_first_name' => 'StaffFirstName',
        'staff_surname' => 'StaffSurname',
        'last_saved_date_time' => 'LastSavedDateTime',
        'item_no' => 'ItemNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debtor_id' => 'setDebtorId',
        'group_membership_id' => 'setGroupMembershipId',
        'is_default' => 'setIsDefault',
        'group_rec_id' => 'setGroupRecId',
        'group_description' => 'setGroupDescription',
        'staff_id' => 'setStaffId',
        'staff_username' => 'setStaffUsername',
        'staff_title' => 'setStaffTitle',
        'staff_first_name' => 'setStaffFirstName',
        'staff_surname' => 'setStaffSurname',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'item_no' => 'setItemNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debtor_id' => 'getDebtorId',
        'group_membership_id' => 'getGroupMembershipId',
        'is_default' => 'getIsDefault',
        'group_rec_id' => 'getGroupRecId',
        'group_description' => 'getGroupDescription',
        'staff_id' => 'getStaffId',
        'staff_username' => 'getStaffUsername',
        'staff_title' => 'getStaffTitle',
        'staff_first_name' => 'getStaffFirstName',
        'staff_surname' => 'getStaffSurname',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'item_no' => 'getItemNo'
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
        $this->container['debtor_id'] = isset($data['debtor_id']) ? $data['debtor_id'] : null;
        $this->container['group_membership_id'] = isset($data['group_membership_id']) ? $data['group_membership_id'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['group_rec_id'] = isset($data['group_rec_id']) ? $data['group_rec_id'] : null;
        $this->container['group_description'] = isset($data['group_description']) ? $data['group_description'] : null;
        $this->container['staff_id'] = isset($data['staff_id']) ? $data['staff_id'] : null;
        $this->container['staff_username'] = isset($data['staff_username']) ? $data['staff_username'] : null;
        $this->container['staff_title'] = isset($data['staff_title']) ? $data['staff_title'] : null;
        $this->container['staff_first_name'] = isset($data['staff_first_name']) ? $data['staff_first_name'] : null;
        $this->container['staff_surname'] = isset($data['staff_surname']) ? $data['staff_surname'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
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
     * Gets debtor_id
     *
     * @return string
     */
    public function getDebtorId()
    {
        return $this->container['debtor_id'];
    }

    /**
     * Sets debtor_id
     *
     * @param string $debtor_id debtor_id
     *
     * @return $this
     */
    public function setDebtorId($debtor_id)
    {
        $this->container['debtor_id'] = $debtor_id;

        return $this;
    }

    /**
     * Gets group_membership_id
     *
     * @return string
     */
    public function getGroupMembershipId()
    {
        return $this->container['group_membership_id'];
    }

    /**
     * Sets group_membership_id
     *
     * @param string $group_membership_id group_membership_id
     *
     * @return $this
     */
    public function setGroupMembershipId($group_membership_id)
    {
        $this->container['group_membership_id'] = $group_membership_id;

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
     * Gets group_rec_id
     *
     * @return string
     */
    public function getGroupRecId()
    {
        return $this->container['group_rec_id'];
    }

    /**
     * Sets group_rec_id
     *
     * @param string $group_rec_id group_rec_id
     *
     * @return $this
     */
    public function setGroupRecId($group_rec_id)
    {
        $this->container['group_rec_id'] = $group_rec_id;

        return $this;
    }

    /**
     * Gets group_description
     *
     * @return string
     */
    public function getGroupDescription()
    {
        return $this->container['group_description'];
    }

    /**
     * Sets group_description
     *
     * @param string $group_description group_description
     *
     * @return $this
     */
    public function setGroupDescription($group_description)
    {
        $this->container['group_description'] = $group_description;

        return $this;
    }

    /**
     * Gets staff_id
     *
     * @return string
     */
    public function getStaffId()
    {
        return $this->container['staff_id'];
    }

    /**
     * Sets staff_id
     *
     * @param string $staff_id staff_id
     *
     * @return $this
     */
    public function setStaffId($staff_id)
    {
        $this->container['staff_id'] = $staff_id;

        return $this;
    }

    /**
     * Gets staff_username
     *
     * @return string
     */
    public function getStaffUsername()
    {
        return $this->container['staff_username'];
    }

    /**
     * Sets staff_username
     *
     * @param string $staff_username staff_username
     *
     * @return $this
     */
    public function setStaffUsername($staff_username)
    {
        $this->container['staff_username'] = $staff_username;

        return $this;
    }

    /**
     * Gets staff_title
     *
     * @return string
     */
    public function getStaffTitle()
    {
        return $this->container['staff_title'];
    }

    /**
     * Sets staff_title
     *
     * @param string $staff_title staff_title
     *
     * @return $this
     */
    public function setStaffTitle($staff_title)
    {
        $this->container['staff_title'] = $staff_title;

        return $this;
    }

    /**
     * Gets staff_first_name
     *
     * @return string
     */
    public function getStaffFirstName()
    {
        return $this->container['staff_first_name'];
    }

    /**
     * Sets staff_first_name
     *
     * @param string $staff_first_name staff_first_name
     *
     * @return $this
     */
    public function setStaffFirstName($staff_first_name)
    {
        $this->container['staff_first_name'] = $staff_first_name;

        return $this;
    }

    /**
     * Gets staff_surname
     *
     * @return string
     */
    public function getStaffSurname()
    {
        return $this->container['staff_surname'];
    }

    /**
     * Sets staff_surname
     *
     * @param string $staff_surname staff_surname
     *
     * @return $this
     */
    public function setStaffSurname($staff_surname)
    {
        $this->container['staff_surname'] = $staff_surname;

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


