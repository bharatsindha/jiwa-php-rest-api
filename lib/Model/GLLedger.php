<?php
/**
 * GLLedger
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
 * GLLedger Class Doc Comment
 *
 * @category Class
 * @description GL_Ledger
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GLLedger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GL_Ledger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gl_ledger_id' => 'string',
        'last_saved_date_time' => '\DateTime',
        'gl_category_id' => 'string',
        'account_no' => 'string',
        'seg1' => 'string',
        'seg2' => 'string',
        'seg3' => 'string',
        'seg4' => 'string',
        'seg5' => 'string',
        'seg6' => 'string',
        'description' => 'string',
        'last_year_open' => 'double',
        'curr_year_open' => 'double',
        'curr_bal' => 'double',
        'exp_sign' => 'int',
        'acc_class' => 'int',
        'distribution_acc' => 'bool',
        'short_cut' => 'string',
        'posting_acc' => 'int',
        'parent_acc_no' => 'string',
        'use_trans_code1' => 'bool',
        'use_trans_code2' => 'bool',
        'use_trans_code3' => 'bool',
        'use_staff_code' => 'bool',
        'clearing_account_id' => 'string',
        'details' => 'string',
        'is_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gl_ledger_id' => null,
        'last_saved_date_time' => 'date-time',
        'gl_category_id' => null,
        'account_no' => null,
        'seg1' => null,
        'seg2' => null,
        'seg3' => null,
        'seg4' => null,
        'seg5' => null,
        'seg6' => null,
        'description' => null,
        'last_year_open' => 'double',
        'curr_year_open' => 'double',
        'curr_bal' => 'double',
        'exp_sign' => 'int32',
        'acc_class' => 'int32',
        'distribution_acc' => null,
        'short_cut' => null,
        'posting_acc' => 'int32',
        'parent_acc_no' => null,
        'use_trans_code1' => null,
        'use_trans_code2' => null,
        'use_trans_code3' => null,
        'use_staff_code' => null,
        'clearing_account_id' => null,
        'details' => null,
        'is_enabled' => null
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
        'gl_ledger_id' => 'GLLedgerID',
        'last_saved_date_time' => 'LastSavedDateTime',
        'gl_category_id' => 'GLCategoryID',
        'account_no' => 'AccountNo',
        'seg1' => 'Seg1',
        'seg2' => 'Seg2',
        'seg3' => 'Seg3',
        'seg4' => 'Seg4',
        'seg5' => 'Seg5',
        'seg6' => 'Seg6',
        'description' => 'Description',
        'last_year_open' => 'LastYearOpen',
        'curr_year_open' => 'CurrYearOpen',
        'curr_bal' => 'CurrBal',
        'exp_sign' => 'ExpSign',
        'acc_class' => 'AccClass',
        'distribution_acc' => 'DistributionAcc',
        'short_cut' => 'ShortCut',
        'posting_acc' => 'PostingAcc',
        'parent_acc_no' => 'ParentAccNo',
        'use_trans_code1' => 'UseTransCode1',
        'use_trans_code2' => 'UseTransCode2',
        'use_trans_code3' => 'UseTransCode3',
        'use_staff_code' => 'UseStaffCode',
        'clearing_account_id' => 'ClearingAccountID',
        'details' => 'Details',
        'is_enabled' => 'IsEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gl_ledger_id' => 'setGlLedgerId',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'gl_category_id' => 'setGlCategoryId',
        'account_no' => 'setAccountNo',
        'seg1' => 'setSeg1',
        'seg2' => 'setSeg2',
        'seg3' => 'setSeg3',
        'seg4' => 'setSeg4',
        'seg5' => 'setSeg5',
        'seg6' => 'setSeg6',
        'description' => 'setDescription',
        'last_year_open' => 'setLastYearOpen',
        'curr_year_open' => 'setCurrYearOpen',
        'curr_bal' => 'setCurrBal',
        'exp_sign' => 'setExpSign',
        'acc_class' => 'setAccClass',
        'distribution_acc' => 'setDistributionAcc',
        'short_cut' => 'setShortCut',
        'posting_acc' => 'setPostingAcc',
        'parent_acc_no' => 'setParentAccNo',
        'use_trans_code1' => 'setUseTransCode1',
        'use_trans_code2' => 'setUseTransCode2',
        'use_trans_code3' => 'setUseTransCode3',
        'use_staff_code' => 'setUseStaffCode',
        'clearing_account_id' => 'setClearingAccountId',
        'details' => 'setDetails',
        'is_enabled' => 'setIsEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gl_ledger_id' => 'getGlLedgerId',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'gl_category_id' => 'getGlCategoryId',
        'account_no' => 'getAccountNo',
        'seg1' => 'getSeg1',
        'seg2' => 'getSeg2',
        'seg3' => 'getSeg3',
        'seg4' => 'getSeg4',
        'seg5' => 'getSeg5',
        'seg6' => 'getSeg6',
        'description' => 'getDescription',
        'last_year_open' => 'getLastYearOpen',
        'curr_year_open' => 'getCurrYearOpen',
        'curr_bal' => 'getCurrBal',
        'exp_sign' => 'getExpSign',
        'acc_class' => 'getAccClass',
        'distribution_acc' => 'getDistributionAcc',
        'short_cut' => 'getShortCut',
        'posting_acc' => 'getPostingAcc',
        'parent_acc_no' => 'getParentAccNo',
        'use_trans_code1' => 'getUseTransCode1',
        'use_trans_code2' => 'getUseTransCode2',
        'use_trans_code3' => 'getUseTransCode3',
        'use_staff_code' => 'getUseStaffCode',
        'clearing_account_id' => 'getClearingAccountId',
        'details' => 'getDetails',
        'is_enabled' => 'getIsEnabled'
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
        $this->container['gl_ledger_id'] = isset($data['gl_ledger_id']) ? $data['gl_ledger_id'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['gl_category_id'] = isset($data['gl_category_id']) ? $data['gl_category_id'] : null;
        $this->container['account_no'] = isset($data['account_no']) ? $data['account_no'] : null;
        $this->container['seg1'] = isset($data['seg1']) ? $data['seg1'] : null;
        $this->container['seg2'] = isset($data['seg2']) ? $data['seg2'] : null;
        $this->container['seg3'] = isset($data['seg3']) ? $data['seg3'] : null;
        $this->container['seg4'] = isset($data['seg4']) ? $data['seg4'] : null;
        $this->container['seg5'] = isset($data['seg5']) ? $data['seg5'] : null;
        $this->container['seg6'] = isset($data['seg6']) ? $data['seg6'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['last_year_open'] = isset($data['last_year_open']) ? $data['last_year_open'] : null;
        $this->container['curr_year_open'] = isset($data['curr_year_open']) ? $data['curr_year_open'] : null;
        $this->container['curr_bal'] = isset($data['curr_bal']) ? $data['curr_bal'] : null;
        $this->container['exp_sign'] = isset($data['exp_sign']) ? $data['exp_sign'] : null;
        $this->container['acc_class'] = isset($data['acc_class']) ? $data['acc_class'] : null;
        $this->container['distribution_acc'] = isset($data['distribution_acc']) ? $data['distribution_acc'] : null;
        $this->container['short_cut'] = isset($data['short_cut']) ? $data['short_cut'] : null;
        $this->container['posting_acc'] = isset($data['posting_acc']) ? $data['posting_acc'] : null;
        $this->container['parent_acc_no'] = isset($data['parent_acc_no']) ? $data['parent_acc_no'] : null;
        $this->container['use_trans_code1'] = isset($data['use_trans_code1']) ? $data['use_trans_code1'] : null;
        $this->container['use_trans_code2'] = isset($data['use_trans_code2']) ? $data['use_trans_code2'] : null;
        $this->container['use_trans_code3'] = isset($data['use_trans_code3']) ? $data['use_trans_code3'] : null;
        $this->container['use_staff_code'] = isset($data['use_staff_code']) ? $data['use_staff_code'] : null;
        $this->container['clearing_account_id'] = isset($data['clearing_account_id']) ? $data['clearing_account_id'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
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
     * Gets gl_ledger_id
     *
     * @return string
     */
    public function getGlLedgerId()
    {
        return $this->container['gl_ledger_id'];
    }

    /**
     * Sets gl_ledger_id
     *
     * @param string $gl_ledger_id gl_ledger_id
     *
     * @return $this
     */
    public function setGlLedgerId($gl_ledger_id)
    {
        $this->container['gl_ledger_id'] = $gl_ledger_id;

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
     * Gets gl_category_id
     *
     * @return string
     */
    public function getGlCategoryId()
    {
        return $this->container['gl_category_id'];
    }

    /**
     * Sets gl_category_id
     *
     * @param string $gl_category_id gl_category_id
     *
     * @return $this
     */
    public function setGlCategoryId($gl_category_id)
    {
        $this->container['gl_category_id'] = $gl_category_id;

        return $this;
    }

    /**
     * Gets account_no
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->container['account_no'];
    }

    /**
     * Sets account_no
     *
     * @param string $account_no account_no
     *
     * @return $this
     */
    public function setAccountNo($account_no)
    {
        $this->container['account_no'] = $account_no;

        return $this;
    }

    /**
     * Gets seg1
     *
     * @return string
     */
    public function getSeg1()
    {
        return $this->container['seg1'];
    }

    /**
     * Sets seg1
     *
     * @param string $seg1 seg1
     *
     * @return $this
     */
    public function setSeg1($seg1)
    {
        $this->container['seg1'] = $seg1;

        return $this;
    }

    /**
     * Gets seg2
     *
     * @return string
     */
    public function getSeg2()
    {
        return $this->container['seg2'];
    }

    /**
     * Sets seg2
     *
     * @param string $seg2 seg2
     *
     * @return $this
     */
    public function setSeg2($seg2)
    {
        $this->container['seg2'] = $seg2;

        return $this;
    }

    /**
     * Gets seg3
     *
     * @return string
     */
    public function getSeg3()
    {
        return $this->container['seg3'];
    }

    /**
     * Sets seg3
     *
     * @param string $seg3 seg3
     *
     * @return $this
     */
    public function setSeg3($seg3)
    {
        $this->container['seg3'] = $seg3;

        return $this;
    }

    /**
     * Gets seg4
     *
     * @return string
     */
    public function getSeg4()
    {
        return $this->container['seg4'];
    }

    /**
     * Sets seg4
     *
     * @param string $seg4 seg4
     *
     * @return $this
     */
    public function setSeg4($seg4)
    {
        $this->container['seg4'] = $seg4;

        return $this;
    }

    /**
     * Gets seg5
     *
     * @return string
     */
    public function getSeg5()
    {
        return $this->container['seg5'];
    }

    /**
     * Sets seg5
     *
     * @param string $seg5 seg5
     *
     * @return $this
     */
    public function setSeg5($seg5)
    {
        $this->container['seg5'] = $seg5;

        return $this;
    }

    /**
     * Gets seg6
     *
     * @return string
     */
    public function getSeg6()
    {
        return $this->container['seg6'];
    }

    /**
     * Sets seg6
     *
     * @param string $seg6 seg6
     *
     * @return $this
     */
    public function setSeg6($seg6)
    {
        $this->container['seg6'] = $seg6;

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
     * Gets last_year_open
     *
     * @return double
     */
    public function getLastYearOpen()
    {
        return $this->container['last_year_open'];
    }

    /**
     * Sets last_year_open
     *
     * @param double $last_year_open last_year_open
     *
     * @return $this
     */
    public function setLastYearOpen($last_year_open)
    {
        $this->container['last_year_open'] = $last_year_open;

        return $this;
    }

    /**
     * Gets curr_year_open
     *
     * @return double
     */
    public function getCurrYearOpen()
    {
        return $this->container['curr_year_open'];
    }

    /**
     * Sets curr_year_open
     *
     * @param double $curr_year_open curr_year_open
     *
     * @return $this
     */
    public function setCurrYearOpen($curr_year_open)
    {
        $this->container['curr_year_open'] = $curr_year_open;

        return $this;
    }

    /**
     * Gets curr_bal
     *
     * @return double
     */
    public function getCurrBal()
    {
        return $this->container['curr_bal'];
    }

    /**
     * Sets curr_bal
     *
     * @param double $curr_bal curr_bal
     *
     * @return $this
     */
    public function setCurrBal($curr_bal)
    {
        $this->container['curr_bal'] = $curr_bal;

        return $this;
    }

    /**
     * Gets exp_sign
     *
     * @return int
     */
    public function getExpSign()
    {
        return $this->container['exp_sign'];
    }

    /**
     * Sets exp_sign
     *
     * @param int $exp_sign exp_sign
     *
     * @return $this
     */
    public function setExpSign($exp_sign)
    {
        $this->container['exp_sign'] = $exp_sign;

        return $this;
    }

    /**
     * Gets acc_class
     *
     * @return int
     */
    public function getAccClass()
    {
        return $this->container['acc_class'];
    }

    /**
     * Sets acc_class
     *
     * @param int $acc_class acc_class
     *
     * @return $this
     */
    public function setAccClass($acc_class)
    {
        $this->container['acc_class'] = $acc_class;

        return $this;
    }

    /**
     * Gets distribution_acc
     *
     * @return bool
     */
    public function getDistributionAcc()
    {
        return $this->container['distribution_acc'];
    }

    /**
     * Sets distribution_acc
     *
     * @param bool $distribution_acc distribution_acc
     *
     * @return $this
     */
    public function setDistributionAcc($distribution_acc)
    {
        $this->container['distribution_acc'] = $distribution_acc;

        return $this;
    }

    /**
     * Gets short_cut
     *
     * @return string
     */
    public function getShortCut()
    {
        return $this->container['short_cut'];
    }

    /**
     * Sets short_cut
     *
     * @param string $short_cut short_cut
     *
     * @return $this
     */
    public function setShortCut($short_cut)
    {
        $this->container['short_cut'] = $short_cut;

        return $this;
    }

    /**
     * Gets posting_acc
     *
     * @return int
     */
    public function getPostingAcc()
    {
        return $this->container['posting_acc'];
    }

    /**
     * Sets posting_acc
     *
     * @param int $posting_acc posting_acc
     *
     * @return $this
     */
    public function setPostingAcc($posting_acc)
    {
        $this->container['posting_acc'] = $posting_acc;

        return $this;
    }

    /**
     * Gets parent_acc_no
     *
     * @return string
     */
    public function getParentAccNo()
    {
        return $this->container['parent_acc_no'];
    }

    /**
     * Sets parent_acc_no
     *
     * @param string $parent_acc_no parent_acc_no
     *
     * @return $this
     */
    public function setParentAccNo($parent_acc_no)
    {
        $this->container['parent_acc_no'] = $parent_acc_no;

        return $this;
    }

    /**
     * Gets use_trans_code1
     *
     * @return bool
     */
    public function getUseTransCode1()
    {
        return $this->container['use_trans_code1'];
    }

    /**
     * Sets use_trans_code1
     *
     * @param bool $use_trans_code1 use_trans_code1
     *
     * @return $this
     */
    public function setUseTransCode1($use_trans_code1)
    {
        $this->container['use_trans_code1'] = $use_trans_code1;

        return $this;
    }

    /**
     * Gets use_trans_code2
     *
     * @return bool
     */
    public function getUseTransCode2()
    {
        return $this->container['use_trans_code2'];
    }

    /**
     * Sets use_trans_code2
     *
     * @param bool $use_trans_code2 use_trans_code2
     *
     * @return $this
     */
    public function setUseTransCode2($use_trans_code2)
    {
        $this->container['use_trans_code2'] = $use_trans_code2;

        return $this;
    }

    /**
     * Gets use_trans_code3
     *
     * @return bool
     */
    public function getUseTransCode3()
    {
        return $this->container['use_trans_code3'];
    }

    /**
     * Sets use_trans_code3
     *
     * @param bool $use_trans_code3 use_trans_code3
     *
     * @return $this
     */
    public function setUseTransCode3($use_trans_code3)
    {
        $this->container['use_trans_code3'] = $use_trans_code3;

        return $this;
    }

    /**
     * Gets use_staff_code
     *
     * @return bool
     */
    public function getUseStaffCode()
    {
        return $this->container['use_staff_code'];
    }

    /**
     * Sets use_staff_code
     *
     * @param bool $use_staff_code use_staff_code
     *
     * @return $this
     */
    public function setUseStaffCode($use_staff_code)
    {
        $this->container['use_staff_code'] = $use_staff_code;

        return $this;
    }

    /**
     * Gets clearing_account_id
     *
     * @return string
     */
    public function getClearingAccountId()
    {
        return $this->container['clearing_account_id'];
    }

    /**
     * Sets clearing_account_id
     *
     * @param string $clearing_account_id clearing_account_id
     *
     * @return $this
     */
    public function setClearingAccountId($clearing_account_id)
    {
        $this->container['clearing_account_id'] = $clearing_account_id;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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

