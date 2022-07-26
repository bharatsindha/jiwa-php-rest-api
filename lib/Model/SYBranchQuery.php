<?php
/**
 * SYBranchQuery
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
 * SYBranchQuery Class Doc Comment
 *
 * @category Class
 * @description SY_BranchQuery
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SYBranchQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SY_BranchQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'branch_id' => 'string',
        'branch_id_starts_with' => 'string',
        'branch_id_ends_with' => 'string',
        'branch_id_contains' => 'string',
        'branch_id_like' => 'string',
        'branch_id_between' => 'string[]',
        'branch_id_in' => 'string[]',
        'description' => 'string',
        'description_starts_with' => 'string',
        'description_ends_with' => 'string',
        'description_contains' => 'string',
        'description_like' => 'string',
        'description_between' => 'string[]',
        'description_in' => 'string[]',
        'ledger_mask' => 'string',
        'ledger_mask_starts_with' => 'string',
        'ledger_mask_ends_with' => 'string',
        'ledger_mask_contains' => 'string',
        'ledger_mask_like' => 'string',
        'ledger_mask_between' => 'string[]',
        'ledger_mask_in' => 'string[]',
        'default_branch' => 'int',
        'default_branch_greater_than_or_equal_to' => 'int',
        'default_branch_greater_than' => 'int',
        'default_branch_less_than' => 'int',
        'default_branch_less_than_or_equal_to' => 'int',
        'default_branch_not_equal_to' => 'int',
        'default_branch_between' => 'int[]',
        'default_branch_in' => 'int[]',
        'skip' => 'int',
        'take' => 'int',
        'order_by' => 'string',
        'order_by_desc' => 'string',
        'include' => 'string',
        'fields' => 'string',
        'meta' => '\Jiwa\Model\DictionaryStringString_'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'branch_id' => null,
        'branch_id_starts_with' => null,
        'branch_id_ends_with' => null,
        'branch_id_contains' => null,
        'branch_id_like' => null,
        'branch_id_between' => null,
        'branch_id_in' => null,
        'description' => null,
        'description_starts_with' => null,
        'description_ends_with' => null,
        'description_contains' => null,
        'description_like' => null,
        'description_between' => null,
        'description_in' => null,
        'ledger_mask' => null,
        'ledger_mask_starts_with' => null,
        'ledger_mask_ends_with' => null,
        'ledger_mask_contains' => null,
        'ledger_mask_like' => null,
        'ledger_mask_between' => null,
        'ledger_mask_in' => null,
        'default_branch' => 'int32',
        'default_branch_greater_than_or_equal_to' => 'int32',
        'default_branch_greater_than' => 'int32',
        'default_branch_less_than' => 'int32',
        'default_branch_less_than_or_equal_to' => 'int32',
        'default_branch_not_equal_to' => 'int32',
        'default_branch_between' => 'int32',
        'default_branch_in' => 'int32',
        'skip' => 'int32',
        'take' => 'int32',
        'order_by' => null,
        'order_by_desc' => null,
        'include' => null,
        'fields' => null,
        'meta' => null
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
        'branch_id' => 'BranchID',
        'branch_id_starts_with' => 'BranchIDStartsWith',
        'branch_id_ends_with' => 'BranchIDEndsWith',
        'branch_id_contains' => 'BranchIDContains',
        'branch_id_like' => 'BranchIDLike',
        'branch_id_between' => 'BranchIDBetween',
        'branch_id_in' => 'BranchIDIn',
        'description' => 'Description',
        'description_starts_with' => 'DescriptionStartsWith',
        'description_ends_with' => 'DescriptionEndsWith',
        'description_contains' => 'DescriptionContains',
        'description_like' => 'DescriptionLike',
        'description_between' => 'DescriptionBetween',
        'description_in' => 'DescriptionIn',
        'ledger_mask' => 'LedgerMask',
        'ledger_mask_starts_with' => 'LedgerMaskStartsWith',
        'ledger_mask_ends_with' => 'LedgerMaskEndsWith',
        'ledger_mask_contains' => 'LedgerMaskContains',
        'ledger_mask_like' => 'LedgerMaskLike',
        'ledger_mask_between' => 'LedgerMaskBetween',
        'ledger_mask_in' => 'LedgerMaskIn',
        'default_branch' => 'DefaultBranch',
        'default_branch_greater_than_or_equal_to' => 'DefaultBranchGreaterThanOrEqualTo',
        'default_branch_greater_than' => 'DefaultBranchGreaterThan',
        'default_branch_less_than' => 'DefaultBranchLessThan',
        'default_branch_less_than_or_equal_to' => 'DefaultBranchLessThanOrEqualTo',
        'default_branch_not_equal_to' => 'DefaultBranchNotEqualTo',
        'default_branch_between' => 'DefaultBranchBetween',
        'default_branch_in' => 'DefaultBranchIn',
        'skip' => 'Skip',
        'take' => 'Take',
        'order_by' => 'OrderBy',
        'order_by_desc' => 'OrderByDesc',
        'include' => 'Include',
        'fields' => 'Fields',
        'meta' => 'Meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch_id' => 'setBranchId',
        'branch_id_starts_with' => 'setBranchIdStartsWith',
        'branch_id_ends_with' => 'setBranchIdEndsWith',
        'branch_id_contains' => 'setBranchIdContains',
        'branch_id_like' => 'setBranchIdLike',
        'branch_id_between' => 'setBranchIdBetween',
        'branch_id_in' => 'setBranchIdIn',
        'description' => 'setDescription',
        'description_starts_with' => 'setDescriptionStartsWith',
        'description_ends_with' => 'setDescriptionEndsWith',
        'description_contains' => 'setDescriptionContains',
        'description_like' => 'setDescriptionLike',
        'description_between' => 'setDescriptionBetween',
        'description_in' => 'setDescriptionIn',
        'ledger_mask' => 'setLedgerMask',
        'ledger_mask_starts_with' => 'setLedgerMaskStartsWith',
        'ledger_mask_ends_with' => 'setLedgerMaskEndsWith',
        'ledger_mask_contains' => 'setLedgerMaskContains',
        'ledger_mask_like' => 'setLedgerMaskLike',
        'ledger_mask_between' => 'setLedgerMaskBetween',
        'ledger_mask_in' => 'setLedgerMaskIn',
        'default_branch' => 'setDefaultBranch',
        'default_branch_greater_than_or_equal_to' => 'setDefaultBranchGreaterThanOrEqualTo',
        'default_branch_greater_than' => 'setDefaultBranchGreaterThan',
        'default_branch_less_than' => 'setDefaultBranchLessThan',
        'default_branch_less_than_or_equal_to' => 'setDefaultBranchLessThanOrEqualTo',
        'default_branch_not_equal_to' => 'setDefaultBranchNotEqualTo',
        'default_branch_between' => 'setDefaultBranchBetween',
        'default_branch_in' => 'setDefaultBranchIn',
        'skip' => 'setSkip',
        'take' => 'setTake',
        'order_by' => 'setOrderBy',
        'order_by_desc' => 'setOrderByDesc',
        'include' => 'setInclude',
        'fields' => 'setFields',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch_id' => 'getBranchId',
        'branch_id_starts_with' => 'getBranchIdStartsWith',
        'branch_id_ends_with' => 'getBranchIdEndsWith',
        'branch_id_contains' => 'getBranchIdContains',
        'branch_id_like' => 'getBranchIdLike',
        'branch_id_between' => 'getBranchIdBetween',
        'branch_id_in' => 'getBranchIdIn',
        'description' => 'getDescription',
        'description_starts_with' => 'getDescriptionStartsWith',
        'description_ends_with' => 'getDescriptionEndsWith',
        'description_contains' => 'getDescriptionContains',
        'description_like' => 'getDescriptionLike',
        'description_between' => 'getDescriptionBetween',
        'description_in' => 'getDescriptionIn',
        'ledger_mask' => 'getLedgerMask',
        'ledger_mask_starts_with' => 'getLedgerMaskStartsWith',
        'ledger_mask_ends_with' => 'getLedgerMaskEndsWith',
        'ledger_mask_contains' => 'getLedgerMaskContains',
        'ledger_mask_like' => 'getLedgerMaskLike',
        'ledger_mask_between' => 'getLedgerMaskBetween',
        'ledger_mask_in' => 'getLedgerMaskIn',
        'default_branch' => 'getDefaultBranch',
        'default_branch_greater_than_or_equal_to' => 'getDefaultBranchGreaterThanOrEqualTo',
        'default_branch_greater_than' => 'getDefaultBranchGreaterThan',
        'default_branch_less_than' => 'getDefaultBranchLessThan',
        'default_branch_less_than_or_equal_to' => 'getDefaultBranchLessThanOrEqualTo',
        'default_branch_not_equal_to' => 'getDefaultBranchNotEqualTo',
        'default_branch_between' => 'getDefaultBranchBetween',
        'default_branch_in' => 'getDefaultBranchIn',
        'skip' => 'getSkip',
        'take' => 'getTake',
        'order_by' => 'getOrderBy',
        'order_by_desc' => 'getOrderByDesc',
        'include' => 'getInclude',
        'fields' => 'getFields',
        'meta' => 'getMeta'
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
        $this->container['branch_id'] = isset($data['branch_id']) ? $data['branch_id'] : null;
        $this->container['branch_id_starts_with'] = isset($data['branch_id_starts_with']) ? $data['branch_id_starts_with'] : null;
        $this->container['branch_id_ends_with'] = isset($data['branch_id_ends_with']) ? $data['branch_id_ends_with'] : null;
        $this->container['branch_id_contains'] = isset($data['branch_id_contains']) ? $data['branch_id_contains'] : null;
        $this->container['branch_id_like'] = isset($data['branch_id_like']) ? $data['branch_id_like'] : null;
        $this->container['branch_id_between'] = isset($data['branch_id_between']) ? $data['branch_id_between'] : null;
        $this->container['branch_id_in'] = isset($data['branch_id_in']) ? $data['branch_id_in'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_starts_with'] = isset($data['description_starts_with']) ? $data['description_starts_with'] : null;
        $this->container['description_ends_with'] = isset($data['description_ends_with']) ? $data['description_ends_with'] : null;
        $this->container['description_contains'] = isset($data['description_contains']) ? $data['description_contains'] : null;
        $this->container['description_like'] = isset($data['description_like']) ? $data['description_like'] : null;
        $this->container['description_between'] = isset($data['description_between']) ? $data['description_between'] : null;
        $this->container['description_in'] = isset($data['description_in']) ? $data['description_in'] : null;
        $this->container['ledger_mask'] = isset($data['ledger_mask']) ? $data['ledger_mask'] : null;
        $this->container['ledger_mask_starts_with'] = isset($data['ledger_mask_starts_with']) ? $data['ledger_mask_starts_with'] : null;
        $this->container['ledger_mask_ends_with'] = isset($data['ledger_mask_ends_with']) ? $data['ledger_mask_ends_with'] : null;
        $this->container['ledger_mask_contains'] = isset($data['ledger_mask_contains']) ? $data['ledger_mask_contains'] : null;
        $this->container['ledger_mask_like'] = isset($data['ledger_mask_like']) ? $data['ledger_mask_like'] : null;
        $this->container['ledger_mask_between'] = isset($data['ledger_mask_between']) ? $data['ledger_mask_between'] : null;
        $this->container['ledger_mask_in'] = isset($data['ledger_mask_in']) ? $data['ledger_mask_in'] : null;
        $this->container['default_branch'] = isset($data['default_branch']) ? $data['default_branch'] : null;
        $this->container['default_branch_greater_than_or_equal_to'] = isset($data['default_branch_greater_than_or_equal_to']) ? $data['default_branch_greater_than_or_equal_to'] : null;
        $this->container['default_branch_greater_than'] = isset($data['default_branch_greater_than']) ? $data['default_branch_greater_than'] : null;
        $this->container['default_branch_less_than'] = isset($data['default_branch_less_than']) ? $data['default_branch_less_than'] : null;
        $this->container['default_branch_less_than_or_equal_to'] = isset($data['default_branch_less_than_or_equal_to']) ? $data['default_branch_less_than_or_equal_to'] : null;
        $this->container['default_branch_not_equal_to'] = isset($data['default_branch_not_equal_to']) ? $data['default_branch_not_equal_to'] : null;
        $this->container['default_branch_between'] = isset($data['default_branch_between']) ? $data['default_branch_between'] : null;
        $this->container['default_branch_in'] = isset($data['default_branch_in']) ? $data['default_branch_in'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['take'] = isset($data['take']) ? $data['take'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['order_by_desc'] = isset($data['order_by_desc']) ? $data['order_by_desc'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
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
     * Gets branch_id
     *
     * @return string
     */
    public function getBranchId()
    {
        return $this->container['branch_id'];
    }

    /**
     * Sets branch_id
     *
     * @param string $branch_id branch_id
     *
     * @return $this
     */
    public function setBranchId($branch_id)
    {
        $this->container['branch_id'] = $branch_id;

        return $this;
    }

    /**
     * Gets branch_id_starts_with
     *
     * @return string
     */
    public function getBranchIdStartsWith()
    {
        return $this->container['branch_id_starts_with'];
    }

    /**
     * Sets branch_id_starts_with
     *
     * @param string $branch_id_starts_with branch_id_starts_with
     *
     * @return $this
     */
    public function setBranchIdStartsWith($branch_id_starts_with)
    {
        $this->container['branch_id_starts_with'] = $branch_id_starts_with;

        return $this;
    }

    /**
     * Gets branch_id_ends_with
     *
     * @return string
     */
    public function getBranchIdEndsWith()
    {
        return $this->container['branch_id_ends_with'];
    }

    /**
     * Sets branch_id_ends_with
     *
     * @param string $branch_id_ends_with branch_id_ends_with
     *
     * @return $this
     */
    public function setBranchIdEndsWith($branch_id_ends_with)
    {
        $this->container['branch_id_ends_with'] = $branch_id_ends_with;

        return $this;
    }

    /**
     * Gets branch_id_contains
     *
     * @return string
     */
    public function getBranchIdContains()
    {
        return $this->container['branch_id_contains'];
    }

    /**
     * Sets branch_id_contains
     *
     * @param string $branch_id_contains branch_id_contains
     *
     * @return $this
     */
    public function setBranchIdContains($branch_id_contains)
    {
        $this->container['branch_id_contains'] = $branch_id_contains;

        return $this;
    }

    /**
     * Gets branch_id_like
     *
     * @return string
     */
    public function getBranchIdLike()
    {
        return $this->container['branch_id_like'];
    }

    /**
     * Sets branch_id_like
     *
     * @param string $branch_id_like branch_id_like
     *
     * @return $this
     */
    public function setBranchIdLike($branch_id_like)
    {
        $this->container['branch_id_like'] = $branch_id_like;

        return $this;
    }

    /**
     * Gets branch_id_between
     *
     * @return string[]
     */
    public function getBranchIdBetween()
    {
        return $this->container['branch_id_between'];
    }

    /**
     * Sets branch_id_between
     *
     * @param string[] $branch_id_between branch_id_between
     *
     * @return $this
     */
    public function setBranchIdBetween($branch_id_between)
    {
        $this->container['branch_id_between'] = $branch_id_between;

        return $this;
    }

    /**
     * Gets branch_id_in
     *
     * @return string[]
     */
    public function getBranchIdIn()
    {
        return $this->container['branch_id_in'];
    }

    /**
     * Sets branch_id_in
     *
     * @param string[] $branch_id_in branch_id_in
     *
     * @return $this
     */
    public function setBranchIdIn($branch_id_in)
    {
        $this->container['branch_id_in'] = $branch_id_in;

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
     * Gets description_starts_with
     *
     * @return string
     */
    public function getDescriptionStartsWith()
    {
        return $this->container['description_starts_with'];
    }

    /**
     * Sets description_starts_with
     *
     * @param string $description_starts_with description_starts_with
     *
     * @return $this
     */
    public function setDescriptionStartsWith($description_starts_with)
    {
        $this->container['description_starts_with'] = $description_starts_with;

        return $this;
    }

    /**
     * Gets description_ends_with
     *
     * @return string
     */
    public function getDescriptionEndsWith()
    {
        return $this->container['description_ends_with'];
    }

    /**
     * Sets description_ends_with
     *
     * @param string $description_ends_with description_ends_with
     *
     * @return $this
     */
    public function setDescriptionEndsWith($description_ends_with)
    {
        $this->container['description_ends_with'] = $description_ends_with;

        return $this;
    }

    /**
     * Gets description_contains
     *
     * @return string
     */
    public function getDescriptionContains()
    {
        return $this->container['description_contains'];
    }

    /**
     * Sets description_contains
     *
     * @param string $description_contains description_contains
     *
     * @return $this
     */
    public function setDescriptionContains($description_contains)
    {
        $this->container['description_contains'] = $description_contains;

        return $this;
    }

    /**
     * Gets description_like
     *
     * @return string
     */
    public function getDescriptionLike()
    {
        return $this->container['description_like'];
    }

    /**
     * Sets description_like
     *
     * @param string $description_like description_like
     *
     * @return $this
     */
    public function setDescriptionLike($description_like)
    {
        $this->container['description_like'] = $description_like;

        return $this;
    }

    /**
     * Gets description_between
     *
     * @return string[]
     */
    public function getDescriptionBetween()
    {
        return $this->container['description_between'];
    }

    /**
     * Sets description_between
     *
     * @param string[] $description_between description_between
     *
     * @return $this
     */
    public function setDescriptionBetween($description_between)
    {
        $this->container['description_between'] = $description_between;

        return $this;
    }

    /**
     * Gets description_in
     *
     * @return string[]
     */
    public function getDescriptionIn()
    {
        return $this->container['description_in'];
    }

    /**
     * Sets description_in
     *
     * @param string[] $description_in description_in
     *
     * @return $this
     */
    public function setDescriptionIn($description_in)
    {
        $this->container['description_in'] = $description_in;

        return $this;
    }

    /**
     * Gets ledger_mask
     *
     * @return string
     */
    public function getLedgerMask()
    {
        return $this->container['ledger_mask'];
    }

    /**
     * Sets ledger_mask
     *
     * @param string $ledger_mask ledger_mask
     *
     * @return $this
     */
    public function setLedgerMask($ledger_mask)
    {
        $this->container['ledger_mask'] = $ledger_mask;

        return $this;
    }

    /**
     * Gets ledger_mask_starts_with
     *
     * @return string
     */
    public function getLedgerMaskStartsWith()
    {
        return $this->container['ledger_mask_starts_with'];
    }

    /**
     * Sets ledger_mask_starts_with
     *
     * @param string $ledger_mask_starts_with ledger_mask_starts_with
     *
     * @return $this
     */
    public function setLedgerMaskStartsWith($ledger_mask_starts_with)
    {
        $this->container['ledger_mask_starts_with'] = $ledger_mask_starts_with;

        return $this;
    }

    /**
     * Gets ledger_mask_ends_with
     *
     * @return string
     */
    public function getLedgerMaskEndsWith()
    {
        return $this->container['ledger_mask_ends_with'];
    }

    /**
     * Sets ledger_mask_ends_with
     *
     * @param string $ledger_mask_ends_with ledger_mask_ends_with
     *
     * @return $this
     */
    public function setLedgerMaskEndsWith($ledger_mask_ends_with)
    {
        $this->container['ledger_mask_ends_with'] = $ledger_mask_ends_with;

        return $this;
    }

    /**
     * Gets ledger_mask_contains
     *
     * @return string
     */
    public function getLedgerMaskContains()
    {
        return $this->container['ledger_mask_contains'];
    }

    /**
     * Sets ledger_mask_contains
     *
     * @param string $ledger_mask_contains ledger_mask_contains
     *
     * @return $this
     */
    public function setLedgerMaskContains($ledger_mask_contains)
    {
        $this->container['ledger_mask_contains'] = $ledger_mask_contains;

        return $this;
    }

    /**
     * Gets ledger_mask_like
     *
     * @return string
     */
    public function getLedgerMaskLike()
    {
        return $this->container['ledger_mask_like'];
    }

    /**
     * Sets ledger_mask_like
     *
     * @param string $ledger_mask_like ledger_mask_like
     *
     * @return $this
     */
    public function setLedgerMaskLike($ledger_mask_like)
    {
        $this->container['ledger_mask_like'] = $ledger_mask_like;

        return $this;
    }

    /**
     * Gets ledger_mask_between
     *
     * @return string[]
     */
    public function getLedgerMaskBetween()
    {
        return $this->container['ledger_mask_between'];
    }

    /**
     * Sets ledger_mask_between
     *
     * @param string[] $ledger_mask_between ledger_mask_between
     *
     * @return $this
     */
    public function setLedgerMaskBetween($ledger_mask_between)
    {
        $this->container['ledger_mask_between'] = $ledger_mask_between;

        return $this;
    }

    /**
     * Gets ledger_mask_in
     *
     * @return string[]
     */
    public function getLedgerMaskIn()
    {
        return $this->container['ledger_mask_in'];
    }

    /**
     * Sets ledger_mask_in
     *
     * @param string[] $ledger_mask_in ledger_mask_in
     *
     * @return $this
     */
    public function setLedgerMaskIn($ledger_mask_in)
    {
        $this->container['ledger_mask_in'] = $ledger_mask_in;

        return $this;
    }

    /**
     * Gets default_branch
     *
     * @return int
     */
    public function getDefaultBranch()
    {
        return $this->container['default_branch'];
    }

    /**
     * Sets default_branch
     *
     * @param int $default_branch default_branch
     *
     * @return $this
     */
    public function setDefaultBranch($default_branch)
    {
        $this->container['default_branch'] = $default_branch;

        return $this;
    }

    /**
     * Gets default_branch_greater_than_or_equal_to
     *
     * @return int
     */
    public function getDefaultBranchGreaterThanOrEqualTo()
    {
        return $this->container['default_branch_greater_than_or_equal_to'];
    }

    /**
     * Sets default_branch_greater_than_or_equal_to
     *
     * @param int $default_branch_greater_than_or_equal_to default_branch_greater_than_or_equal_to
     *
     * @return $this
     */
    public function setDefaultBranchGreaterThanOrEqualTo($default_branch_greater_than_or_equal_to)
    {
        $this->container['default_branch_greater_than_or_equal_to'] = $default_branch_greater_than_or_equal_to;

        return $this;
    }

    /**
     * Gets default_branch_greater_than
     *
     * @return int
     */
    public function getDefaultBranchGreaterThan()
    {
        return $this->container['default_branch_greater_than'];
    }

    /**
     * Sets default_branch_greater_than
     *
     * @param int $default_branch_greater_than default_branch_greater_than
     *
     * @return $this
     */
    public function setDefaultBranchGreaterThan($default_branch_greater_than)
    {
        $this->container['default_branch_greater_than'] = $default_branch_greater_than;

        return $this;
    }

    /**
     * Gets default_branch_less_than
     *
     * @return int
     */
    public function getDefaultBranchLessThan()
    {
        return $this->container['default_branch_less_than'];
    }

    /**
     * Sets default_branch_less_than
     *
     * @param int $default_branch_less_than default_branch_less_than
     *
     * @return $this
     */
    public function setDefaultBranchLessThan($default_branch_less_than)
    {
        $this->container['default_branch_less_than'] = $default_branch_less_than;

        return $this;
    }

    /**
     * Gets default_branch_less_than_or_equal_to
     *
     * @return int
     */
    public function getDefaultBranchLessThanOrEqualTo()
    {
        return $this->container['default_branch_less_than_or_equal_to'];
    }

    /**
     * Sets default_branch_less_than_or_equal_to
     *
     * @param int $default_branch_less_than_or_equal_to default_branch_less_than_or_equal_to
     *
     * @return $this
     */
    public function setDefaultBranchLessThanOrEqualTo($default_branch_less_than_or_equal_to)
    {
        $this->container['default_branch_less_than_or_equal_to'] = $default_branch_less_than_or_equal_to;

        return $this;
    }

    /**
     * Gets default_branch_not_equal_to
     *
     * @return int
     */
    public function getDefaultBranchNotEqualTo()
    {
        return $this->container['default_branch_not_equal_to'];
    }

    /**
     * Sets default_branch_not_equal_to
     *
     * @param int $default_branch_not_equal_to default_branch_not_equal_to
     *
     * @return $this
     */
    public function setDefaultBranchNotEqualTo($default_branch_not_equal_to)
    {
        $this->container['default_branch_not_equal_to'] = $default_branch_not_equal_to;

        return $this;
    }

    /**
     * Gets default_branch_between
     *
     * @return int[]
     */
    public function getDefaultBranchBetween()
    {
        return $this->container['default_branch_between'];
    }

    /**
     * Sets default_branch_between
     *
     * @param int[] $default_branch_between default_branch_between
     *
     * @return $this
     */
    public function setDefaultBranchBetween($default_branch_between)
    {
        $this->container['default_branch_between'] = $default_branch_between;

        return $this;
    }

    /**
     * Gets default_branch_in
     *
     * @return int[]
     */
    public function getDefaultBranchIn()
    {
        return $this->container['default_branch_in'];
    }

    /**
     * Sets default_branch_in
     *
     * @param int[] $default_branch_in default_branch_in
     *
     * @return $this
     */
    public function setDefaultBranchIn($default_branch_in)
    {
        $this->container['default_branch_in'] = $default_branch_in;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip skip
     *
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets take
     *
     * @return int
     */
    public function getTake()
    {
        return $this->container['take'];
    }

    /**
     * Sets take
     *
     * @param int $take take
     *
     * @return $this
     */
    public function setTake($take)
    {
        $this->container['take'] = $take;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param string $order_by order_by
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets order_by_desc
     *
     * @return string
     */
    public function getOrderByDesc()
    {
        return $this->container['order_by_desc'];
    }

    /**
     * Sets order_by_desc
     *
     * @param string $order_by_desc order_by_desc
     *
     * @return $this
     */
    public function setOrderByDesc($order_by_desc)
    {
        $this->container['order_by_desc'] = $order_by_desc;

        return $this;
    }

    /**
     * Gets include
     *
     * @return string
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param string $include include
     *
     * @return $this
     */
    public function setInclude($include)
    {
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \Jiwa\Model\DictionaryStringString_
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Jiwa\Model\DictionaryStringString_ $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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


