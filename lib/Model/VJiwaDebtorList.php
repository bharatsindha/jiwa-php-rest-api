<?php
/**
 * VJiwaDebtorList
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
 * VJiwaDebtorList Class Doc Comment
 *
 * @category Class
 * @description v_Jiwa_Debtor_List
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VJiwaDebtorList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v_Jiwa_Debtor_List';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'debtor_id' => 'string',
        'account_no' => 'string',
        'name' => 'string',
        'alt_account_no' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'address4' => 'string',
        'post_code' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'account_on_hold' => 'bool',
        'email_address' => 'string',
        'current_balance' => 'double',
        'web_access' => 'bool',
        'last_saved_date_time' => '\DateTime',
        'trading_status' => 'int',
        'debtor_classification_id' => 'string',
        'classification_description' => 'string',
        'category1_id' => 'string',
        'category1_description' => 'string',
        'category2_id' => 'string',
        'category2_description' => 'string',
        'category3_id' => 'string',
        'category3_description' => 'string',
        'category4_id' => 'string',
        'category4_description' => 'string',
        'category5_id' => 'string',
        'category5_description' => 'string',
        'price_scheme_id' => 'string',
        'price_scheme_description' => 'string',
        'pricing_group_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'debtor_id' => null,
        'account_no' => null,
        'name' => null,
        'alt_account_no' => null,
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'address4' => null,
        'post_code' => null,
        'country' => null,
        'phone' => null,
        'account_on_hold' => null,
        'email_address' => null,
        'current_balance' => 'double',
        'web_access' => null,
        'last_saved_date_time' => 'date-time',
        'trading_status' => 'int32',
        'debtor_classification_id' => null,
        'classification_description' => null,
        'category1_id' => null,
        'category1_description' => null,
        'category2_id' => null,
        'category2_description' => null,
        'category3_id' => null,
        'category3_description' => null,
        'category4_id' => null,
        'category4_description' => null,
        'category5_id' => null,
        'category5_description' => null,
        'price_scheme_id' => null,
        'price_scheme_description' => null,
        'pricing_group_description' => null
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
        'account_no' => 'AccountNo',
        'name' => 'Name',
        'alt_account_no' => 'AltAccountNo',
        'address1' => 'Address1',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address4' => 'Address4',
        'post_code' => 'PostCode',
        'country' => 'Country',
        'phone' => 'Phone',
        'account_on_hold' => 'AccountOnHold',
        'email_address' => 'EmailAddress',
        'current_balance' => 'CurrentBalance',
        'web_access' => 'WebAccess',
        'last_saved_date_time' => 'LastSavedDateTime',
        'trading_status' => 'TradingStatus',
        'debtor_classification_id' => 'DebtorClassificationID',
        'classification_description' => 'ClassificationDescription',
        'category1_id' => 'Category1ID',
        'category1_description' => 'Category1Description',
        'category2_id' => 'Category2ID',
        'category2_description' => 'Category2Description',
        'category3_id' => 'Category3ID',
        'category3_description' => 'Category3Description',
        'category4_id' => 'Category4ID',
        'category4_description' => 'Category4Description',
        'category5_id' => 'Category5ID',
        'category5_description' => 'Category5Description',
        'price_scheme_id' => 'PriceSchemeID',
        'price_scheme_description' => 'PriceSchemeDescription',
        'pricing_group_description' => 'PricingGroupDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'debtor_id' => 'setDebtorId',
        'account_no' => 'setAccountNo',
        'name' => 'setName',
        'alt_account_no' => 'setAltAccountNo',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address4' => 'setAddress4',
        'post_code' => 'setPostCode',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'account_on_hold' => 'setAccountOnHold',
        'email_address' => 'setEmailAddress',
        'current_balance' => 'setCurrentBalance',
        'web_access' => 'setWebAccess',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'trading_status' => 'setTradingStatus',
        'debtor_classification_id' => 'setDebtorClassificationId',
        'classification_description' => 'setClassificationDescription',
        'category1_id' => 'setCategory1Id',
        'category1_description' => 'setCategory1Description',
        'category2_id' => 'setCategory2Id',
        'category2_description' => 'setCategory2Description',
        'category3_id' => 'setCategory3Id',
        'category3_description' => 'setCategory3Description',
        'category4_id' => 'setCategory4Id',
        'category4_description' => 'setCategory4Description',
        'category5_id' => 'setCategory5Id',
        'category5_description' => 'setCategory5Description',
        'price_scheme_id' => 'setPriceSchemeId',
        'price_scheme_description' => 'setPriceSchemeDescription',
        'pricing_group_description' => 'setPricingGroupDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'debtor_id' => 'getDebtorId',
        'account_no' => 'getAccountNo',
        'name' => 'getName',
        'alt_account_no' => 'getAltAccountNo',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address4' => 'getAddress4',
        'post_code' => 'getPostCode',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'account_on_hold' => 'getAccountOnHold',
        'email_address' => 'getEmailAddress',
        'current_balance' => 'getCurrentBalance',
        'web_access' => 'getWebAccess',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'trading_status' => 'getTradingStatus',
        'debtor_classification_id' => 'getDebtorClassificationId',
        'classification_description' => 'getClassificationDescription',
        'category1_id' => 'getCategory1Id',
        'category1_description' => 'getCategory1Description',
        'category2_id' => 'getCategory2Id',
        'category2_description' => 'getCategory2Description',
        'category3_id' => 'getCategory3Id',
        'category3_description' => 'getCategory3Description',
        'category4_id' => 'getCategory4Id',
        'category4_description' => 'getCategory4Description',
        'category5_id' => 'getCategory5Id',
        'category5_description' => 'getCategory5Description',
        'price_scheme_id' => 'getPriceSchemeId',
        'price_scheme_description' => 'getPriceSchemeDescription',
        'pricing_group_description' => 'getPricingGroupDescription'
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
        $this->container['account_no'] = isset($data['account_no']) ? $data['account_no'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alt_account_no'] = isset($data['alt_account_no']) ? $data['alt_account_no'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['address3'] = isset($data['address3']) ? $data['address3'] : null;
        $this->container['address4'] = isset($data['address4']) ? $data['address4'] : null;
        $this->container['post_code'] = isset($data['post_code']) ? $data['post_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['account_on_hold'] = isset($data['account_on_hold']) ? $data['account_on_hold'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['current_balance'] = isset($data['current_balance']) ? $data['current_balance'] : null;
        $this->container['web_access'] = isset($data['web_access']) ? $data['web_access'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['trading_status'] = isset($data['trading_status']) ? $data['trading_status'] : null;
        $this->container['debtor_classification_id'] = isset($data['debtor_classification_id']) ? $data['debtor_classification_id'] : null;
        $this->container['classification_description'] = isset($data['classification_description']) ? $data['classification_description'] : null;
        $this->container['category1_id'] = isset($data['category1_id']) ? $data['category1_id'] : null;
        $this->container['category1_description'] = isset($data['category1_description']) ? $data['category1_description'] : null;
        $this->container['category2_id'] = isset($data['category2_id']) ? $data['category2_id'] : null;
        $this->container['category2_description'] = isset($data['category2_description']) ? $data['category2_description'] : null;
        $this->container['category3_id'] = isset($data['category3_id']) ? $data['category3_id'] : null;
        $this->container['category3_description'] = isset($data['category3_description']) ? $data['category3_description'] : null;
        $this->container['category4_id'] = isset($data['category4_id']) ? $data['category4_id'] : null;
        $this->container['category4_description'] = isset($data['category4_description']) ? $data['category4_description'] : null;
        $this->container['category5_id'] = isset($data['category5_id']) ? $data['category5_id'] : null;
        $this->container['category5_description'] = isset($data['category5_description']) ? $data['category5_description'] : null;
        $this->container['price_scheme_id'] = isset($data['price_scheme_id']) ? $data['price_scheme_id'] : null;
        $this->container['price_scheme_description'] = isset($data['price_scheme_description']) ? $data['price_scheme_description'] : null;
        $this->container['pricing_group_description'] = isset($data['pricing_group_description']) ? $data['pricing_group_description'] : null;
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
     * Gets alt_account_no
     *
     * @return string
     */
    public function getAltAccountNo()
    {
        return $this->container['alt_account_no'];
    }

    /**
     * Sets alt_account_no
     *
     * @param string $alt_account_no alt_account_no
     *
     * @return $this
     */
    public function setAltAccountNo($alt_account_no)
    {
        $this->container['alt_account_no'] = $alt_account_no;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     *
     * @return string
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     *
     * @param string $address3 address3
     *
     * @return $this
     */
    public function setAddress3($address3)
    {
        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets address4
     *
     * @return string
     */
    public function getAddress4()
    {
        return $this->container['address4'];
    }

    /**
     * Sets address4
     *
     * @param string $address4 address4
     *
     * @return $this
     */
    public function setAddress4($address4)
    {
        $this->container['address4'] = $address4;

        return $this;
    }

    /**
     * Gets post_code
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->container['post_code'];
    }

    /**
     * Sets post_code
     *
     * @param string $post_code post_code
     *
     * @return $this
     */
    public function setPostCode($post_code)
    {
        $this->container['post_code'] = $post_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets account_on_hold
     *
     * @return bool
     */
    public function getAccountOnHold()
    {
        return $this->container['account_on_hold'];
    }

    /**
     * Sets account_on_hold
     *
     * @param bool $account_on_hold account_on_hold
     *
     * @return $this
     */
    public function setAccountOnHold($account_on_hold)
    {
        $this->container['account_on_hold'] = $account_on_hold;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address email_address
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets current_balance
     *
     * @return double
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param double $current_balance current_balance
     *
     * @return $this
     */
    public function setCurrentBalance($current_balance)
    {
        $this->container['current_balance'] = $current_balance;

        return $this;
    }

    /**
     * Gets web_access
     *
     * @return bool
     */
    public function getWebAccess()
    {
        return $this->container['web_access'];
    }

    /**
     * Sets web_access
     *
     * @param bool $web_access web_access
     *
     * @return $this
     */
    public function setWebAccess($web_access)
    {
        $this->container['web_access'] = $web_access;

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
     * Gets trading_status
     *
     * @return int
     */
    public function getTradingStatus()
    {
        return $this->container['trading_status'];
    }

    /**
     * Sets trading_status
     *
     * @param int $trading_status trading_status
     *
     * @return $this
     */
    public function setTradingStatus($trading_status)
    {
        $this->container['trading_status'] = $trading_status;

        return $this;
    }

    /**
     * Gets debtor_classification_id
     *
     * @return string
     */
    public function getDebtorClassificationId()
    {
        return $this->container['debtor_classification_id'];
    }

    /**
     * Sets debtor_classification_id
     *
     * @param string $debtor_classification_id debtor_classification_id
     *
     * @return $this
     */
    public function setDebtorClassificationId($debtor_classification_id)
    {
        $this->container['debtor_classification_id'] = $debtor_classification_id;

        return $this;
    }

    /**
     * Gets classification_description
     *
     * @return string
     */
    public function getClassificationDescription()
    {
        return $this->container['classification_description'];
    }

    /**
     * Sets classification_description
     *
     * @param string $classification_description classification_description
     *
     * @return $this
     */
    public function setClassificationDescription($classification_description)
    {
        $this->container['classification_description'] = $classification_description;

        return $this;
    }

    /**
     * Gets category1_id
     *
     * @return string
     */
    public function getCategory1Id()
    {
        return $this->container['category1_id'];
    }

    /**
     * Sets category1_id
     *
     * @param string $category1_id category1_id
     *
     * @return $this
     */
    public function setCategory1Id($category1_id)
    {
        $this->container['category1_id'] = $category1_id;

        return $this;
    }

    /**
     * Gets category1_description
     *
     * @return string
     */
    public function getCategory1Description()
    {
        return $this->container['category1_description'];
    }

    /**
     * Sets category1_description
     *
     * @param string $category1_description category1_description
     *
     * @return $this
     */
    public function setCategory1Description($category1_description)
    {
        $this->container['category1_description'] = $category1_description;

        return $this;
    }

    /**
     * Gets category2_id
     *
     * @return string
     */
    public function getCategory2Id()
    {
        return $this->container['category2_id'];
    }

    /**
     * Sets category2_id
     *
     * @param string $category2_id category2_id
     *
     * @return $this
     */
    public function setCategory2Id($category2_id)
    {
        $this->container['category2_id'] = $category2_id;

        return $this;
    }

    /**
     * Gets category2_description
     *
     * @return string
     */
    public function getCategory2Description()
    {
        return $this->container['category2_description'];
    }

    /**
     * Sets category2_description
     *
     * @param string $category2_description category2_description
     *
     * @return $this
     */
    public function setCategory2Description($category2_description)
    {
        $this->container['category2_description'] = $category2_description;

        return $this;
    }

    /**
     * Gets category3_id
     *
     * @return string
     */
    public function getCategory3Id()
    {
        return $this->container['category3_id'];
    }

    /**
     * Sets category3_id
     *
     * @param string $category3_id category3_id
     *
     * @return $this
     */
    public function setCategory3Id($category3_id)
    {
        $this->container['category3_id'] = $category3_id;

        return $this;
    }

    /**
     * Gets category3_description
     *
     * @return string
     */
    public function getCategory3Description()
    {
        return $this->container['category3_description'];
    }

    /**
     * Sets category3_description
     *
     * @param string $category3_description category3_description
     *
     * @return $this
     */
    public function setCategory3Description($category3_description)
    {
        $this->container['category3_description'] = $category3_description;

        return $this;
    }

    /**
     * Gets category4_id
     *
     * @return string
     */
    public function getCategory4Id()
    {
        return $this->container['category4_id'];
    }

    /**
     * Sets category4_id
     *
     * @param string $category4_id category4_id
     *
     * @return $this
     */
    public function setCategory4Id($category4_id)
    {
        $this->container['category4_id'] = $category4_id;

        return $this;
    }

    /**
     * Gets category4_description
     *
     * @return string
     */
    public function getCategory4Description()
    {
        return $this->container['category4_description'];
    }

    /**
     * Sets category4_description
     *
     * @param string $category4_description category4_description
     *
     * @return $this
     */
    public function setCategory4Description($category4_description)
    {
        $this->container['category4_description'] = $category4_description;

        return $this;
    }

    /**
     * Gets category5_id
     *
     * @return string
     */
    public function getCategory5Id()
    {
        return $this->container['category5_id'];
    }

    /**
     * Sets category5_id
     *
     * @param string $category5_id category5_id
     *
     * @return $this
     */
    public function setCategory5Id($category5_id)
    {
        $this->container['category5_id'] = $category5_id;

        return $this;
    }

    /**
     * Gets category5_description
     *
     * @return string
     */
    public function getCategory5Description()
    {
        return $this->container['category5_description'];
    }

    /**
     * Sets category5_description
     *
     * @param string $category5_description category5_description
     *
     * @return $this
     */
    public function setCategory5Description($category5_description)
    {
        $this->container['category5_description'] = $category5_description;

        return $this;
    }

    /**
     * Gets price_scheme_id
     *
     * @return string
     */
    public function getPriceSchemeId()
    {
        return $this->container['price_scheme_id'];
    }

    /**
     * Sets price_scheme_id
     *
     * @param string $price_scheme_id price_scheme_id
     *
     * @return $this
     */
    public function setPriceSchemeId($price_scheme_id)
    {
        $this->container['price_scheme_id'] = $price_scheme_id;

        return $this;
    }

    /**
     * Gets price_scheme_description
     *
     * @return string
     */
    public function getPriceSchemeDescription()
    {
        return $this->container['price_scheme_description'];
    }

    /**
     * Sets price_scheme_description
     *
     * @param string $price_scheme_description price_scheme_description
     *
     * @return $this
     */
    public function setPriceSchemeDescription($price_scheme_description)
    {
        $this->container['price_scheme_description'] = $price_scheme_description;

        return $this;
    }

    /**
     * Gets pricing_group_description
     *
     * @return string
     */
    public function getPricingGroupDescription()
    {
        return $this->container['pricing_group_description'];
    }

    /**
     * Sets pricing_group_description
     *
     * @param string $pricing_group_description pricing_group_description
     *
     * @return $this
     */
    public function setPricingGroupDescription($pricing_group_description)
    {
        $this->container['pricing_group_description'] = $pricing_group_description;

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


