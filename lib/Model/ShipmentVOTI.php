<?php
/**
 * ShipmentVOTI
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
 * ShipmentVOTI Class Doc Comment
 *
 * @category Class
 * @description ShipmentVOTI
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentVOTI implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentVOTI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'votiid' => 'string',
        'item_no' => 'int',
        'creditor_id' => 'string',
        'creditor_account_no' => 'string',
        'creditor_name' => 'string',
        'tax_rate' => '\Jiwa\Model\TaxRate',
        'description' => 'string',
        'invoice_no' => 'string',
        'reference' => 'string',
        'amount' => 'double',
        'tax_amount' => 'double',
        'invoice_date' => '\DateTime',
        'due_date' => '\DateTime',
        'cr_trans_id' => 'string',
        'user_field1' => 'string',
        'user_field2' => 'string',
        'user_field3' => 'string',
        'user_field4' => 'string',
        'user_field5' => 'string',
        'user_field6' => 'string',
        'user_field7' => 'string',
        'user_field8' => 'string',
        'user_field9' => 'string',
        'user_field10' => 'string',
        'invoiced' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'votiid' => null,
        'item_no' => 'int32',
        'creditor_id' => null,
        'creditor_account_no' => null,
        'creditor_name' => null,
        'tax_rate' => null,
        'description' => null,
        'invoice_no' => null,
        'reference' => null,
        'amount' => 'double',
        'tax_amount' => 'double',
        'invoice_date' => 'date-time',
        'due_date' => 'date-time',
        'cr_trans_id' => null,
        'user_field1' => null,
        'user_field2' => null,
        'user_field3' => null,
        'user_field4' => null,
        'user_field5' => null,
        'user_field6' => null,
        'user_field7' => null,
        'user_field8' => null,
        'user_field9' => null,
        'user_field10' => null,
        'invoiced' => null
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
        'votiid' => 'VOTIID',
        'item_no' => 'ItemNo',
        'creditor_id' => 'CreditorID',
        'creditor_account_no' => 'CreditorAccountNo',
        'creditor_name' => 'CreditorName',
        'tax_rate' => 'TaxRate',
        'description' => 'Description',
        'invoice_no' => 'InvoiceNo',
        'reference' => 'Reference',
        'amount' => 'Amount',
        'tax_amount' => 'TaxAmount',
        'invoice_date' => 'InvoiceDate',
        'due_date' => 'DueDate',
        'cr_trans_id' => 'CR_TransID',
        'user_field1' => 'UserField1',
        'user_field2' => 'UserField2',
        'user_field3' => 'UserField3',
        'user_field4' => 'UserField4',
        'user_field5' => 'UserField5',
        'user_field6' => 'UserField6',
        'user_field7' => 'UserField7',
        'user_field8' => 'UserField8',
        'user_field9' => 'UserField9',
        'user_field10' => 'UserField10',
        'invoiced' => 'Invoiced'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'votiid' => 'setVotiid',
        'item_no' => 'setItemNo',
        'creditor_id' => 'setCreditorId',
        'creditor_account_no' => 'setCreditorAccountNo',
        'creditor_name' => 'setCreditorName',
        'tax_rate' => 'setTaxRate',
        'description' => 'setDescription',
        'invoice_no' => 'setInvoiceNo',
        'reference' => 'setReference',
        'amount' => 'setAmount',
        'tax_amount' => 'setTaxAmount',
        'invoice_date' => 'setInvoiceDate',
        'due_date' => 'setDueDate',
        'cr_trans_id' => 'setCrTransId',
        'user_field1' => 'setUserField1',
        'user_field2' => 'setUserField2',
        'user_field3' => 'setUserField3',
        'user_field4' => 'setUserField4',
        'user_field5' => 'setUserField5',
        'user_field6' => 'setUserField6',
        'user_field7' => 'setUserField7',
        'user_field8' => 'setUserField8',
        'user_field9' => 'setUserField9',
        'user_field10' => 'setUserField10',
        'invoiced' => 'setInvoiced'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'votiid' => 'getVotiid',
        'item_no' => 'getItemNo',
        'creditor_id' => 'getCreditorId',
        'creditor_account_no' => 'getCreditorAccountNo',
        'creditor_name' => 'getCreditorName',
        'tax_rate' => 'getTaxRate',
        'description' => 'getDescription',
        'invoice_no' => 'getInvoiceNo',
        'reference' => 'getReference',
        'amount' => 'getAmount',
        'tax_amount' => 'getTaxAmount',
        'invoice_date' => 'getInvoiceDate',
        'due_date' => 'getDueDate',
        'cr_trans_id' => 'getCrTransId',
        'user_field1' => 'getUserField1',
        'user_field2' => 'getUserField2',
        'user_field3' => 'getUserField3',
        'user_field4' => 'getUserField4',
        'user_field5' => 'getUserField5',
        'user_field6' => 'getUserField6',
        'user_field7' => 'getUserField7',
        'user_field8' => 'getUserField8',
        'user_field9' => 'getUserField9',
        'user_field10' => 'getUserField10',
        'invoiced' => 'getInvoiced'
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
        $this->container['votiid'] = isset($data['votiid']) ? $data['votiid'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['creditor_id'] = isset($data['creditor_id']) ? $data['creditor_id'] : null;
        $this->container['creditor_account_no'] = isset($data['creditor_account_no']) ? $data['creditor_account_no'] : null;
        $this->container['creditor_name'] = isset($data['creditor_name']) ? $data['creditor_name'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['invoice_no'] = isset($data['invoice_no']) ? $data['invoice_no'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['cr_trans_id'] = isset($data['cr_trans_id']) ? $data['cr_trans_id'] : null;
        $this->container['user_field1'] = isset($data['user_field1']) ? $data['user_field1'] : null;
        $this->container['user_field2'] = isset($data['user_field2']) ? $data['user_field2'] : null;
        $this->container['user_field3'] = isset($data['user_field3']) ? $data['user_field3'] : null;
        $this->container['user_field4'] = isset($data['user_field4']) ? $data['user_field4'] : null;
        $this->container['user_field5'] = isset($data['user_field5']) ? $data['user_field5'] : null;
        $this->container['user_field6'] = isset($data['user_field6']) ? $data['user_field6'] : null;
        $this->container['user_field7'] = isset($data['user_field7']) ? $data['user_field7'] : null;
        $this->container['user_field8'] = isset($data['user_field8']) ? $data['user_field8'] : null;
        $this->container['user_field9'] = isset($data['user_field9']) ? $data['user_field9'] : null;
        $this->container['user_field10'] = isset($data['user_field10']) ? $data['user_field10'] : null;
        $this->container['invoiced'] = isset($data['invoiced']) ? $data['invoiced'] : null;
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
     * Gets votiid
     *
     * @return string
     */
    public function getVotiid()
    {
        return $this->container['votiid'];
    }

    /**
     * Sets votiid
     *
     * @param string $votiid votiid
     *
     * @return $this
     */
    public function setVotiid($votiid)
    {
        $this->container['votiid'] = $votiid;

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
     * Gets creditor_id
     *
     * @return string
     */
    public function getCreditorId()
    {
        return $this->container['creditor_id'];
    }

    /**
     * Sets creditor_id
     *
     * @param string $creditor_id creditor_id
     *
     * @return $this
     */
    public function setCreditorId($creditor_id)
    {
        $this->container['creditor_id'] = $creditor_id;

        return $this;
    }

    /**
     * Gets creditor_account_no
     *
     * @return string
     */
    public function getCreditorAccountNo()
    {
        return $this->container['creditor_account_no'];
    }

    /**
     * Sets creditor_account_no
     *
     * @param string $creditor_account_no creditor_account_no
     *
     * @return $this
     */
    public function setCreditorAccountNo($creditor_account_no)
    {
        $this->container['creditor_account_no'] = $creditor_account_no;

        return $this;
    }

    /**
     * Gets creditor_name
     *
     * @return string
     */
    public function getCreditorName()
    {
        return $this->container['creditor_name'];
    }

    /**
     * Sets creditor_name
     *
     * @param string $creditor_name creditor_name
     *
     * @return $this
     */
    public function setCreditorName($creditor_name)
    {
        $this->container['creditor_name'] = $creditor_name;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return \Jiwa\Model\TaxRate
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param \Jiwa\Model\TaxRate $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

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
     * Gets invoice_no
     *
     * @return string
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param string $invoice_no invoice_no
     *
     * @return $this
     */
    public function setInvoiceNo($invoice_no)
    {
        $this->container['invoice_no'] = $invoice_no;

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
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets cr_trans_id
     *
     * @return string
     */
    public function getCrTransId()
    {
        return $this->container['cr_trans_id'];
    }

    /**
     * Sets cr_trans_id
     *
     * @param string $cr_trans_id cr_trans_id
     *
     * @return $this
     */
    public function setCrTransId($cr_trans_id)
    {
        $this->container['cr_trans_id'] = $cr_trans_id;

        return $this;
    }

    /**
     * Gets user_field1
     *
     * @return string
     */
    public function getUserField1()
    {
        return $this->container['user_field1'];
    }

    /**
     * Sets user_field1
     *
     * @param string $user_field1 user_field1
     *
     * @return $this
     */
    public function setUserField1($user_field1)
    {
        $this->container['user_field1'] = $user_field1;

        return $this;
    }

    /**
     * Gets user_field2
     *
     * @return string
     */
    public function getUserField2()
    {
        return $this->container['user_field2'];
    }

    /**
     * Sets user_field2
     *
     * @param string $user_field2 user_field2
     *
     * @return $this
     */
    public function setUserField2($user_field2)
    {
        $this->container['user_field2'] = $user_field2;

        return $this;
    }

    /**
     * Gets user_field3
     *
     * @return string
     */
    public function getUserField3()
    {
        return $this->container['user_field3'];
    }

    /**
     * Sets user_field3
     *
     * @param string $user_field3 user_field3
     *
     * @return $this
     */
    public function setUserField3($user_field3)
    {
        $this->container['user_field3'] = $user_field3;

        return $this;
    }

    /**
     * Gets user_field4
     *
     * @return string
     */
    public function getUserField4()
    {
        return $this->container['user_field4'];
    }

    /**
     * Sets user_field4
     *
     * @param string $user_field4 user_field4
     *
     * @return $this
     */
    public function setUserField4($user_field4)
    {
        $this->container['user_field4'] = $user_field4;

        return $this;
    }

    /**
     * Gets user_field5
     *
     * @return string
     */
    public function getUserField5()
    {
        return $this->container['user_field5'];
    }

    /**
     * Sets user_field5
     *
     * @param string $user_field5 user_field5
     *
     * @return $this
     */
    public function setUserField5($user_field5)
    {
        $this->container['user_field5'] = $user_field5;

        return $this;
    }

    /**
     * Gets user_field6
     *
     * @return string
     */
    public function getUserField6()
    {
        return $this->container['user_field6'];
    }

    /**
     * Sets user_field6
     *
     * @param string $user_field6 user_field6
     *
     * @return $this
     */
    public function setUserField6($user_field6)
    {
        $this->container['user_field6'] = $user_field6;

        return $this;
    }

    /**
     * Gets user_field7
     *
     * @return string
     */
    public function getUserField7()
    {
        return $this->container['user_field7'];
    }

    /**
     * Sets user_field7
     *
     * @param string $user_field7 user_field7
     *
     * @return $this
     */
    public function setUserField7($user_field7)
    {
        $this->container['user_field7'] = $user_field7;

        return $this;
    }

    /**
     * Gets user_field8
     *
     * @return string
     */
    public function getUserField8()
    {
        return $this->container['user_field8'];
    }

    /**
     * Sets user_field8
     *
     * @param string $user_field8 user_field8
     *
     * @return $this
     */
    public function setUserField8($user_field8)
    {
        $this->container['user_field8'] = $user_field8;

        return $this;
    }

    /**
     * Gets user_field9
     *
     * @return string
     */
    public function getUserField9()
    {
        return $this->container['user_field9'];
    }

    /**
     * Sets user_field9
     *
     * @param string $user_field9 user_field9
     *
     * @return $this
     */
    public function setUserField9($user_field9)
    {
        $this->container['user_field9'] = $user_field9;

        return $this;
    }

    /**
     * Gets user_field10
     *
     * @return string
     */
    public function getUserField10()
    {
        return $this->container['user_field10'];
    }

    /**
     * Sets user_field10
     *
     * @param string $user_field10 user_field10
     *
     * @return $this
     */
    public function setUserField10($user_field10)
    {
        $this->container['user_field10'] = $user_field10;

        return $this;
    }

    /**
     * Gets invoiced
     *
     * @return bool
     */
    public function getInvoiced()
    {
        return $this->container['invoiced'];
    }

    /**
     * Sets invoiced
     *
     * @param bool $invoiced invoiced
     *
     * @return $this
     */
    public function setInvoiced($invoiced)
    {
        $this->container['invoiced'] = $invoiced;

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


