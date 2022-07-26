<?php
/**
 * DBPricingGroupsQuery
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
 * DBPricingGroupsQuery Class Doc Comment
 *
 * @category Class
 * @description DB_PricingGroupsQuery
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DBPricingGroupsQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DB_PricingGroupsQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rec_id' => 'string',
        'rec_id_starts_with' => 'string',
        'rec_id_ends_with' => 'string',
        'rec_id_contains' => 'string',
        'rec_id_like' => 'string',
        'rec_id_between' => 'string[]',
        'rec_id_in' => 'string[]',
        'last_saved_date_time' => '\DateTime',
        'last_saved_date_time_greater_than_or_equal_to' => '\DateTime',
        'last_saved_date_time_greater_than' => '\DateTime',
        'last_saved_date_time_less_than' => '\DateTime',
        'last_saved_date_time_less_than_or_equal_to' => '\DateTime',
        'last_saved_date_time_not_equal_to' => '\DateTime',
        'last_saved_date_time_between' => '\DateTime[]',
        'last_saved_date_time_in' => '\DateTime[]',
        'description' => 'string',
        'description_starts_with' => 'string',
        'description_ends_with' => 'string',
        'description_contains' => 'string',
        'description_like' => 'string',
        'description_between' => 'string[]',
        'description_in' => 'string[]',
        'default_price_group' => 'bool',
        'skip' => 'int',
        'take' => 'int',
        'order_by' => 'string',
        'order_by_desc' => 'string',
        'include' => 'string',
        'fields' => 'string',
        'meta' => '\Jiwa\JiwaModel\DictionaryStringString_'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rec_id' => null,
        'rec_id_starts_with' => null,
        'rec_id_ends_with' => null,
        'rec_id_contains' => null,
        'rec_id_like' => null,
        'rec_id_between' => null,
        'rec_id_in' => null,
        'last_saved_date_time' => 'date-time',
        'last_saved_date_time_greater_than_or_equal_to' => 'date-time',
        'last_saved_date_time_greater_than' => 'date-time',
        'last_saved_date_time_less_than' => 'date-time',
        'last_saved_date_time_less_than_or_equal_to' => 'date-time',
        'last_saved_date_time_not_equal_to' => 'date-time',
        'last_saved_date_time_between' => 'date-time',
        'last_saved_date_time_in' => 'date-time',
        'description' => null,
        'description_starts_with' => null,
        'description_ends_with' => null,
        'description_contains' => null,
        'description_like' => null,
        'description_between' => null,
        'description_in' => null,
        'default_price_group' => null,
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
        'rec_id' => 'RecID',
        'rec_id_starts_with' => 'RecIDStartsWith',
        'rec_id_ends_with' => 'RecIDEndsWith',
        'rec_id_contains' => 'RecIDContains',
        'rec_id_like' => 'RecIDLike',
        'rec_id_between' => 'RecIDBetween',
        'rec_id_in' => 'RecIDIn',
        'last_saved_date_time' => 'LastSavedDateTime',
        'last_saved_date_time_greater_than_or_equal_to' => 'LastSavedDateTimeGreaterThanOrEqualTo',
        'last_saved_date_time_greater_than' => 'LastSavedDateTimeGreaterThan',
        'last_saved_date_time_less_than' => 'LastSavedDateTimeLessThan',
        'last_saved_date_time_less_than_or_equal_to' => 'LastSavedDateTimeLessThanOrEqualTo',
        'last_saved_date_time_not_equal_to' => 'LastSavedDateTimeNotEqualTo',
        'last_saved_date_time_between' => 'LastSavedDateTimeBetween',
        'last_saved_date_time_in' => 'LastSavedDateTimeIn',
        'description' => 'Description',
        'description_starts_with' => 'DescriptionStartsWith',
        'description_ends_with' => 'DescriptionEndsWith',
        'description_contains' => 'DescriptionContains',
        'description_like' => 'DescriptionLike',
        'description_between' => 'DescriptionBetween',
        'description_in' => 'DescriptionIn',
        'default_price_group' => 'DefaultPriceGroup',
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
        'rec_id' => 'setRecId',
        'rec_id_starts_with' => 'setRecIdStartsWith',
        'rec_id_ends_with' => 'setRecIdEndsWith',
        'rec_id_contains' => 'setRecIdContains',
        'rec_id_like' => 'setRecIdLike',
        'rec_id_between' => 'setRecIdBetween',
        'rec_id_in' => 'setRecIdIn',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'last_saved_date_time_greater_than_or_equal_to' => 'setLastSavedDateTimeGreaterThanOrEqualTo',
        'last_saved_date_time_greater_than' => 'setLastSavedDateTimeGreaterThan',
        'last_saved_date_time_less_than' => 'setLastSavedDateTimeLessThan',
        'last_saved_date_time_less_than_or_equal_to' => 'setLastSavedDateTimeLessThanOrEqualTo',
        'last_saved_date_time_not_equal_to' => 'setLastSavedDateTimeNotEqualTo',
        'last_saved_date_time_between' => 'setLastSavedDateTimeBetween',
        'last_saved_date_time_in' => 'setLastSavedDateTimeIn',
        'description' => 'setDescription',
        'description_starts_with' => 'setDescriptionStartsWith',
        'description_ends_with' => 'setDescriptionEndsWith',
        'description_contains' => 'setDescriptionContains',
        'description_like' => 'setDescriptionLike',
        'description_between' => 'setDescriptionBetween',
        'description_in' => 'setDescriptionIn',
        'default_price_group' => 'setDefaultPriceGroup',
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
        'rec_id' => 'getRecId',
        'rec_id_starts_with' => 'getRecIdStartsWith',
        'rec_id_ends_with' => 'getRecIdEndsWith',
        'rec_id_contains' => 'getRecIdContains',
        'rec_id_like' => 'getRecIdLike',
        'rec_id_between' => 'getRecIdBetween',
        'rec_id_in' => 'getRecIdIn',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'last_saved_date_time_greater_than_or_equal_to' => 'getLastSavedDateTimeGreaterThanOrEqualTo',
        'last_saved_date_time_greater_than' => 'getLastSavedDateTimeGreaterThan',
        'last_saved_date_time_less_than' => 'getLastSavedDateTimeLessThan',
        'last_saved_date_time_less_than_or_equal_to' => 'getLastSavedDateTimeLessThanOrEqualTo',
        'last_saved_date_time_not_equal_to' => 'getLastSavedDateTimeNotEqualTo',
        'last_saved_date_time_between' => 'getLastSavedDateTimeBetween',
        'last_saved_date_time_in' => 'getLastSavedDateTimeIn',
        'description' => 'getDescription',
        'description_starts_with' => 'getDescriptionStartsWith',
        'description_ends_with' => 'getDescriptionEndsWith',
        'description_contains' => 'getDescriptionContains',
        'description_like' => 'getDescriptionLike',
        'description_between' => 'getDescriptionBetween',
        'description_in' => 'getDescriptionIn',
        'default_price_group' => 'getDefaultPriceGroup',
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
        $this->container['rec_id'] = isset($data['rec_id']) ? $data['rec_id'] : null;
        $this->container['rec_id_starts_with'] = isset($data['rec_id_starts_with']) ? $data['rec_id_starts_with'] : null;
        $this->container['rec_id_ends_with'] = isset($data['rec_id_ends_with']) ? $data['rec_id_ends_with'] : null;
        $this->container['rec_id_contains'] = isset($data['rec_id_contains']) ? $data['rec_id_contains'] : null;
        $this->container['rec_id_like'] = isset($data['rec_id_like']) ? $data['rec_id_like'] : null;
        $this->container['rec_id_between'] = isset($data['rec_id_between']) ? $data['rec_id_between'] : null;
        $this->container['rec_id_in'] = isset($data['rec_id_in']) ? $data['rec_id_in'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['last_saved_date_time_greater_than_or_equal_to'] = isset($data['last_saved_date_time_greater_than_or_equal_to']) ? $data['last_saved_date_time_greater_than_or_equal_to'] : null;
        $this->container['last_saved_date_time_greater_than'] = isset($data['last_saved_date_time_greater_than']) ? $data['last_saved_date_time_greater_than'] : null;
        $this->container['last_saved_date_time_less_than'] = isset($data['last_saved_date_time_less_than']) ? $data['last_saved_date_time_less_than'] : null;
        $this->container['last_saved_date_time_less_than_or_equal_to'] = isset($data['last_saved_date_time_less_than_or_equal_to']) ? $data['last_saved_date_time_less_than_or_equal_to'] : null;
        $this->container['last_saved_date_time_not_equal_to'] = isset($data['last_saved_date_time_not_equal_to']) ? $data['last_saved_date_time_not_equal_to'] : null;
        $this->container['last_saved_date_time_between'] = isset($data['last_saved_date_time_between']) ? $data['last_saved_date_time_between'] : null;
        $this->container['last_saved_date_time_in'] = isset($data['last_saved_date_time_in']) ? $data['last_saved_date_time_in'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_starts_with'] = isset($data['description_starts_with']) ? $data['description_starts_with'] : null;
        $this->container['description_ends_with'] = isset($data['description_ends_with']) ? $data['description_ends_with'] : null;
        $this->container['description_contains'] = isset($data['description_contains']) ? $data['description_contains'] : null;
        $this->container['description_like'] = isset($data['description_like']) ? $data['description_like'] : null;
        $this->container['description_between'] = isset($data['description_between']) ? $data['description_between'] : null;
        $this->container['description_in'] = isset($data['description_in']) ? $data['description_in'] : null;
        $this->container['default_price_group'] = isset($data['default_price_group']) ? $data['default_price_group'] : null;
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
     * Gets rec_id_starts_with
     *
     * @return string
     */
    public function getRecIdStartsWith()
    {
        return $this->container['rec_id_starts_with'];
    }

    /**
     * Sets rec_id_starts_with
     *
     * @param string $rec_id_starts_with rec_id_starts_with
     *
     * @return $this
     */
    public function setRecIdStartsWith($rec_id_starts_with)
    {
        $this->container['rec_id_starts_with'] = $rec_id_starts_with;

        return $this;
    }

    /**
     * Gets rec_id_ends_with
     *
     * @return string
     */
    public function getRecIdEndsWith()
    {
        return $this->container['rec_id_ends_with'];
    }

    /**
     * Sets rec_id_ends_with
     *
     * @param string $rec_id_ends_with rec_id_ends_with
     *
     * @return $this
     */
    public function setRecIdEndsWith($rec_id_ends_with)
    {
        $this->container['rec_id_ends_with'] = $rec_id_ends_with;

        return $this;
    }

    /**
     * Gets rec_id_contains
     *
     * @return string
     */
    public function getRecIdContains()
    {
        return $this->container['rec_id_contains'];
    }

    /**
     * Sets rec_id_contains
     *
     * @param string $rec_id_contains rec_id_contains
     *
     * @return $this
     */
    public function setRecIdContains($rec_id_contains)
    {
        $this->container['rec_id_contains'] = $rec_id_contains;

        return $this;
    }

    /**
     * Gets rec_id_like
     *
     * @return string
     */
    public function getRecIdLike()
    {
        return $this->container['rec_id_like'];
    }

    /**
     * Sets rec_id_like
     *
     * @param string $rec_id_like rec_id_like
     *
     * @return $this
     */
    public function setRecIdLike($rec_id_like)
    {
        $this->container['rec_id_like'] = $rec_id_like;

        return $this;
    }

    /**
     * Gets rec_id_between
     *
     * @return string[]
     */
    public function getRecIdBetween()
    {
        return $this->container['rec_id_between'];
    }

    /**
     * Sets rec_id_between
     *
     * @param string[] $rec_id_between rec_id_between
     *
     * @return $this
     */
    public function setRecIdBetween($rec_id_between)
    {
        $this->container['rec_id_between'] = $rec_id_between;

        return $this;
    }

    /**
     * Gets rec_id_in
     *
     * @return string[]
     */
    public function getRecIdIn()
    {
        return $this->container['rec_id_in'];
    }

    /**
     * Sets rec_id_in
     *
     * @param string[] $rec_id_in rec_id_in
     *
     * @return $this
     */
    public function setRecIdIn($rec_id_in)
    {
        $this->container['rec_id_in'] = $rec_id_in;

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
     * Gets last_saved_date_time_greater_than_or_equal_to
     *
     * @return \DateTime
     */
    public function getLastSavedDateTimeGreaterThanOrEqualTo()
    {
        return $this->container['last_saved_date_time_greater_than_or_equal_to'];
    }

    /**
     * Sets last_saved_date_time_greater_than_or_equal_to
     *
     * @param \DateTime $last_saved_date_time_greater_than_or_equal_to last_saved_date_time_greater_than_or_equal_to
     *
     * @return $this
     */
    public function setLastSavedDateTimeGreaterThanOrEqualTo($last_saved_date_time_greater_than_or_equal_to)
    {
        $this->container['last_saved_date_time_greater_than_or_equal_to'] = $last_saved_date_time_greater_than_or_equal_to;

        return $this;
    }

    /**
     * Gets last_saved_date_time_greater_than
     *
     * @return \DateTime
     */
    public function getLastSavedDateTimeGreaterThan()
    {
        return $this->container['last_saved_date_time_greater_than'];
    }

    /**
     * Sets last_saved_date_time_greater_than
     *
     * @param \DateTime $last_saved_date_time_greater_than last_saved_date_time_greater_than
     *
     * @return $this
     */
    public function setLastSavedDateTimeGreaterThan($last_saved_date_time_greater_than)
    {
        $this->container['last_saved_date_time_greater_than'] = $last_saved_date_time_greater_than;

        return $this;
    }

    /**
     * Gets last_saved_date_time_less_than
     *
     * @return \DateTime
     */
    public function getLastSavedDateTimeLessThan()
    {
        return $this->container['last_saved_date_time_less_than'];
    }

    /**
     * Sets last_saved_date_time_less_than
     *
     * @param \DateTime $last_saved_date_time_less_than last_saved_date_time_less_than
     *
     * @return $this
     */
    public function setLastSavedDateTimeLessThan($last_saved_date_time_less_than)
    {
        $this->container['last_saved_date_time_less_than'] = $last_saved_date_time_less_than;

        return $this;
    }

    /**
     * Gets last_saved_date_time_less_than_or_equal_to
     *
     * @return \DateTime
     */
    public function getLastSavedDateTimeLessThanOrEqualTo()
    {
        return $this->container['last_saved_date_time_less_than_or_equal_to'];
    }

    /**
     * Sets last_saved_date_time_less_than_or_equal_to
     *
     * @param \DateTime $last_saved_date_time_less_than_or_equal_to last_saved_date_time_less_than_or_equal_to
     *
     * @return $this
     */
    public function setLastSavedDateTimeLessThanOrEqualTo($last_saved_date_time_less_than_or_equal_to)
    {
        $this->container['last_saved_date_time_less_than_or_equal_to'] = $last_saved_date_time_less_than_or_equal_to;

        return $this;
    }

    /**
     * Gets last_saved_date_time_not_equal_to
     *
     * @return \DateTime
     */
    public function getLastSavedDateTimeNotEqualTo()
    {
        return $this->container['last_saved_date_time_not_equal_to'];
    }

    /**
     * Sets last_saved_date_time_not_equal_to
     *
     * @param \DateTime $last_saved_date_time_not_equal_to last_saved_date_time_not_equal_to
     *
     * @return $this
     */
    public function setLastSavedDateTimeNotEqualTo($last_saved_date_time_not_equal_to)
    {
        $this->container['last_saved_date_time_not_equal_to'] = $last_saved_date_time_not_equal_to;

        return $this;
    }

    /**
     * Gets last_saved_date_time_between
     *
     * @return \DateTime[]
     */
    public function getLastSavedDateTimeBetween()
    {
        return $this->container['last_saved_date_time_between'];
    }

    /**
     * Sets last_saved_date_time_between
     *
     * @param \DateTime[] $last_saved_date_time_between last_saved_date_time_between
     *
     * @return $this
     */
    public function setLastSavedDateTimeBetween($last_saved_date_time_between)
    {
        $this->container['last_saved_date_time_between'] = $last_saved_date_time_between;

        return $this;
    }

    /**
     * Gets last_saved_date_time_in
     *
     * @return \DateTime[]
     */
    public function getLastSavedDateTimeIn()
    {
        return $this->container['last_saved_date_time_in'];
    }

    /**
     * Sets last_saved_date_time_in
     *
     * @param \DateTime[] $last_saved_date_time_in last_saved_date_time_in
     *
     * @return $this
     */
    public function setLastSavedDateTimeIn($last_saved_date_time_in)
    {
        $this->container['last_saved_date_time_in'] = $last_saved_date_time_in;

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
     * Gets default_price_group
     *
     * @return bool
     */
    public function getDefaultPriceGroup()
    {
        return $this->container['default_price_group'];
    }

    /**
     * Sets default_price_group
     *
     * @param bool $default_price_group default_price_group
     *
     * @return $this
     */
    public function setDefaultPriceGroup($default_price_group)
    {
        $this->container['default_price_group'] = $default_price_group;

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
     * @return \Jiwa\JiwaModel\DictionaryStringString_
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Jiwa\JiwaModel\DictionaryStringString_ $meta meta
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


