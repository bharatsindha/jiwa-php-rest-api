<?php
/**
 * SalesQuoteLinePATCHRequest
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
 * SalesQuoteLinePATCHRequest Class Doc Comment
 *
 * @category Class
 * @description SalesQuoteLinePATCHRequest
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesQuoteLinePATCHRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesQuoteLinePATCHRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quote_id' => 'string',
        'quote_history_id' => 'string',
        'quote_line_id' => 'string',
        'item_no' => 'int',
        'inventory_id' => 'string',
        'part_no' => 'string',
        'description' => 'string',
        'comment_line' => 'bool',
        'comment_text' => 'string',
        'quantity_ordered' => 'double',
        'price_ex_gst' => 'double',
        'price_inc_gst' => 'double',
        'discounted_price' => 'double',
        'tax_to_charge' => 'double',
        'tax_rate' => 'double',
        'unit_cost' => 'double',
        'line_link_id' => 'string',
        'fix_sell_price' => 'bool',
        'user_defined_float1' => 'double',
        'user_defined_float2' => 'double',
        'user_defined_float3' => 'double',
        'line_total' => 'double',
        'weight' => 'double',
        'cubic' => 'double',
        'discounted_percentage' => 'double',
        'discount_given' => 'double',
        'quantity_decimal_places' => 'double',
        'quantity_original_ordered' => 'double',
        'non_inventory' => 'bool',
        'custom_field_values' => '\Jiwa\Model\CustomFieldValue[]',
        'kit_line_type' => 'string',
        'kit_units' => 'double',
        'kit_header_line_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quote_id' => null,
        'quote_history_id' => null,
        'quote_line_id' => null,
        'item_no' => 'int32',
        'inventory_id' => null,
        'part_no' => null,
        'description' => null,
        'comment_line' => null,
        'comment_text' => null,
        'quantity_ordered' => 'double',
        'price_ex_gst' => 'double',
        'price_inc_gst' => 'double',
        'discounted_price' => 'double',
        'tax_to_charge' => 'double',
        'tax_rate' => 'double',
        'unit_cost' => 'double',
        'line_link_id' => null,
        'fix_sell_price' => null,
        'user_defined_float1' => 'double',
        'user_defined_float2' => 'double',
        'user_defined_float3' => 'double',
        'line_total' => 'double',
        'weight' => 'double',
        'cubic' => 'double',
        'discounted_percentage' => 'double',
        'discount_given' => 'double',
        'quantity_decimal_places' => 'double',
        'quantity_original_ordered' => 'double',
        'non_inventory' => null,
        'custom_field_values' => null,
        'kit_line_type' => null,
        'kit_units' => 'double',
        'kit_header_line_id' => null
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
        'quote_history_id' => 'QuoteHistoryID',
        'quote_line_id' => 'QuoteLineID',
        'item_no' => 'ItemNo',
        'inventory_id' => 'InventoryID',
        'part_no' => 'PartNo',
        'description' => 'Description',
        'comment_line' => 'CommentLine',
        'comment_text' => 'CommentText',
        'quantity_ordered' => 'QuantityOrdered',
        'price_ex_gst' => 'PriceExGst',
        'price_inc_gst' => 'PriceIncGst',
        'discounted_price' => 'DiscountedPrice',
        'tax_to_charge' => 'TaxToCharge',
        'tax_rate' => 'TaxRate',
        'unit_cost' => 'UnitCost',
        'line_link_id' => 'LineLinkID',
        'fix_sell_price' => 'FixSellPrice',
        'user_defined_float1' => 'UserDefinedFloat1',
        'user_defined_float2' => 'UserDefinedFloat2',
        'user_defined_float3' => 'UserDefinedFloat3',
        'line_total' => 'LineTotal',
        'weight' => 'Weight',
        'cubic' => 'Cubic',
        'discounted_percentage' => 'DiscountedPercentage',
        'discount_given' => 'DiscountGiven',
        'quantity_decimal_places' => 'QuantityDecimalPlaces',
        'quantity_original_ordered' => 'QuantityOriginalOrdered',
        'non_inventory' => 'NonInventory',
        'custom_field_values' => 'CustomFieldValues',
        'kit_line_type' => 'KitLineType',
        'kit_units' => 'KitUnits',
        'kit_header_line_id' => 'KitHeaderLineID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_id' => 'setQuoteId',
        'quote_history_id' => 'setQuoteHistoryId',
        'quote_line_id' => 'setQuoteLineId',
        'item_no' => 'setItemNo',
        'inventory_id' => 'setInventoryId',
        'part_no' => 'setPartNo',
        'description' => 'setDescription',
        'comment_line' => 'setCommentLine',
        'comment_text' => 'setCommentText',
        'quantity_ordered' => 'setQuantityOrdered',
        'price_ex_gst' => 'setPriceExGst',
        'price_inc_gst' => 'setPriceIncGst',
        'discounted_price' => 'setDiscountedPrice',
        'tax_to_charge' => 'setTaxToCharge',
        'tax_rate' => 'setTaxRate',
        'unit_cost' => 'setUnitCost',
        'line_link_id' => 'setLineLinkId',
        'fix_sell_price' => 'setFixSellPrice',
        'user_defined_float1' => 'setUserDefinedFloat1',
        'user_defined_float2' => 'setUserDefinedFloat2',
        'user_defined_float3' => 'setUserDefinedFloat3',
        'line_total' => 'setLineTotal',
        'weight' => 'setWeight',
        'cubic' => 'setCubic',
        'discounted_percentage' => 'setDiscountedPercentage',
        'discount_given' => 'setDiscountGiven',
        'quantity_decimal_places' => 'setQuantityDecimalPlaces',
        'quantity_original_ordered' => 'setQuantityOriginalOrdered',
        'non_inventory' => 'setNonInventory',
        'custom_field_values' => 'setCustomFieldValues',
        'kit_line_type' => 'setKitLineType',
        'kit_units' => 'setKitUnits',
        'kit_header_line_id' => 'setKitHeaderLineId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_id' => 'getQuoteId',
        'quote_history_id' => 'getQuoteHistoryId',
        'quote_line_id' => 'getQuoteLineId',
        'item_no' => 'getItemNo',
        'inventory_id' => 'getInventoryId',
        'part_no' => 'getPartNo',
        'description' => 'getDescription',
        'comment_line' => 'getCommentLine',
        'comment_text' => 'getCommentText',
        'quantity_ordered' => 'getQuantityOrdered',
        'price_ex_gst' => 'getPriceExGst',
        'price_inc_gst' => 'getPriceIncGst',
        'discounted_price' => 'getDiscountedPrice',
        'tax_to_charge' => 'getTaxToCharge',
        'tax_rate' => 'getTaxRate',
        'unit_cost' => 'getUnitCost',
        'line_link_id' => 'getLineLinkId',
        'fix_sell_price' => 'getFixSellPrice',
        'user_defined_float1' => 'getUserDefinedFloat1',
        'user_defined_float2' => 'getUserDefinedFloat2',
        'user_defined_float3' => 'getUserDefinedFloat3',
        'line_total' => 'getLineTotal',
        'weight' => 'getWeight',
        'cubic' => 'getCubic',
        'discounted_percentage' => 'getDiscountedPercentage',
        'discount_given' => 'getDiscountGiven',
        'quantity_decimal_places' => 'getQuantityDecimalPlaces',
        'quantity_original_ordered' => 'getQuantityOriginalOrdered',
        'non_inventory' => 'getNonInventory',
        'custom_field_values' => 'getCustomFieldValues',
        'kit_line_type' => 'getKitLineType',
        'kit_units' => 'getKitUnits',
        'kit_header_line_id' => 'getKitHeaderLineId'
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
        $this->container['quote_history_id'] = isset($data['quote_history_id']) ? $data['quote_history_id'] : null;
        $this->container['quote_line_id'] = isset($data['quote_line_id']) ? $data['quote_line_id'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['part_no'] = isset($data['part_no']) ? $data['part_no'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['comment_line'] = isset($data['comment_line']) ? $data['comment_line'] : null;
        $this->container['comment_text'] = isset($data['comment_text']) ? $data['comment_text'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['price_ex_gst'] = isset($data['price_ex_gst']) ? $data['price_ex_gst'] : null;
        $this->container['price_inc_gst'] = isset($data['price_inc_gst']) ? $data['price_inc_gst'] : null;
        $this->container['discounted_price'] = isset($data['discounted_price']) ? $data['discounted_price'] : null;
        $this->container['tax_to_charge'] = isset($data['tax_to_charge']) ? $data['tax_to_charge'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['line_link_id'] = isset($data['line_link_id']) ? $data['line_link_id'] : null;
        $this->container['fix_sell_price'] = isset($data['fix_sell_price']) ? $data['fix_sell_price'] : null;
        $this->container['user_defined_float1'] = isset($data['user_defined_float1']) ? $data['user_defined_float1'] : null;
        $this->container['user_defined_float2'] = isset($data['user_defined_float2']) ? $data['user_defined_float2'] : null;
        $this->container['user_defined_float3'] = isset($data['user_defined_float3']) ? $data['user_defined_float3'] : null;
        $this->container['line_total'] = isset($data['line_total']) ? $data['line_total'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['cubic'] = isset($data['cubic']) ? $data['cubic'] : null;
        $this->container['discounted_percentage'] = isset($data['discounted_percentage']) ? $data['discounted_percentage'] : null;
        $this->container['discount_given'] = isset($data['discount_given']) ? $data['discount_given'] : null;
        $this->container['quantity_decimal_places'] = isset($data['quantity_decimal_places']) ? $data['quantity_decimal_places'] : null;
        $this->container['quantity_original_ordered'] = isset($data['quantity_original_ordered']) ? $data['quantity_original_ordered'] : null;
        $this->container['non_inventory'] = isset($data['non_inventory']) ? $data['non_inventory'] : null;
        $this->container['custom_field_values'] = isset($data['custom_field_values']) ? $data['custom_field_values'] : null;
        $this->container['kit_line_type'] = isset($data['kit_line_type']) ? $data['kit_line_type'] : null;
        $this->container['kit_units'] = isset($data['kit_units']) ? $data['kit_units'] : null;
        $this->container['kit_header_line_id'] = isset($data['kit_header_line_id']) ? $data['kit_header_line_id'] : null;
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
     * Gets quote_history_id
     *
     * @return string
     */
    public function getQuoteHistoryId()
    {
        return $this->container['quote_history_id'];
    }

    /**
     * Sets quote_history_id
     *
     * @param string $quote_history_id quote_history_id
     *
     * @return $this
     */
    public function setQuoteHistoryId($quote_history_id)
    {
        $this->container['quote_history_id'] = $quote_history_id;

        return $this;
    }

    /**
     * Gets quote_line_id
     *
     * @return string
     */
    public function getQuoteLineId()
    {
        return $this->container['quote_line_id'];
    }

    /**
     * Sets quote_line_id
     *
     * @param string $quote_line_id quote_line_id
     *
     * @return $this
     */
    public function setQuoteLineId($quote_line_id)
    {
        $this->container['quote_line_id'] = $quote_line_id;

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
     * Gets inventory_id
     *
     * @return string
     */
    public function getInventoryId()
    {
        return $this->container['inventory_id'];
    }

    /**
     * Sets inventory_id
     *
     * @param string $inventory_id inventory_id
     *
     * @return $this
     */
    public function setInventoryId($inventory_id)
    {
        $this->container['inventory_id'] = $inventory_id;

        return $this;
    }

    /**
     * Gets part_no
     *
     * @return string
     */
    public function getPartNo()
    {
        return $this->container['part_no'];
    }

    /**
     * Sets part_no
     *
     * @param string $part_no part_no
     *
     * @return $this
     */
    public function setPartNo($part_no)
    {
        $this->container['part_no'] = $part_no;

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
     * Gets comment_line
     *
     * @return bool
     */
    public function getCommentLine()
    {
        return $this->container['comment_line'];
    }

    /**
     * Sets comment_line
     *
     * @param bool $comment_line comment_line
     *
     * @return $this
     */
    public function setCommentLine($comment_line)
    {
        $this->container['comment_line'] = $comment_line;

        return $this;
    }

    /**
     * Gets comment_text
     *
     * @return string
     */
    public function getCommentText()
    {
        return $this->container['comment_text'];
    }

    /**
     * Sets comment_text
     *
     * @param string $comment_text comment_text
     *
     * @return $this
     */
    public function setCommentText($comment_text)
    {
        $this->container['comment_text'] = $comment_text;

        return $this;
    }

    /**
     * Gets quantity_ordered
     *
     * @return double
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param double $quantity_ordered quantity_ordered
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets price_ex_gst
     *
     * @return double
     */
    public function getPriceExGst()
    {
        return $this->container['price_ex_gst'];
    }

    /**
     * Sets price_ex_gst
     *
     * @param double $price_ex_gst price_ex_gst
     *
     * @return $this
     */
    public function setPriceExGst($price_ex_gst)
    {
        $this->container['price_ex_gst'] = $price_ex_gst;

        return $this;
    }

    /**
     * Gets price_inc_gst
     *
     * @return double
     */
    public function getPriceIncGst()
    {
        return $this->container['price_inc_gst'];
    }

    /**
     * Sets price_inc_gst
     *
     * @param double $price_inc_gst price_inc_gst
     *
     * @return $this
     */
    public function setPriceIncGst($price_inc_gst)
    {
        $this->container['price_inc_gst'] = $price_inc_gst;

        return $this;
    }

    /**
     * Gets discounted_price
     *
     * @return double
     */
    public function getDiscountedPrice()
    {
        return $this->container['discounted_price'];
    }

    /**
     * Sets discounted_price
     *
     * @param double $discounted_price discounted_price
     *
     * @return $this
     */
    public function setDiscountedPrice($discounted_price)
    {
        $this->container['discounted_price'] = $discounted_price;

        return $this;
    }

    /**
     * Gets tax_to_charge
     *
     * @return double
     */
    public function getTaxToCharge()
    {
        return $this->container['tax_to_charge'];
    }

    /**
     * Sets tax_to_charge
     *
     * @param double $tax_to_charge tax_to_charge
     *
     * @return $this
     */
    public function setTaxToCharge($tax_to_charge)
    {
        $this->container['tax_to_charge'] = $tax_to_charge;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return double
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param double $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return double
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param double $unit_cost unit_cost
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets line_link_id
     *
     * @return string
     */
    public function getLineLinkId()
    {
        return $this->container['line_link_id'];
    }

    /**
     * Sets line_link_id
     *
     * @param string $line_link_id line_link_id
     *
     * @return $this
     */
    public function setLineLinkId($line_link_id)
    {
        $this->container['line_link_id'] = $line_link_id;

        return $this;
    }

    /**
     * Gets fix_sell_price
     *
     * @return bool
     */
    public function getFixSellPrice()
    {
        return $this->container['fix_sell_price'];
    }

    /**
     * Sets fix_sell_price
     *
     * @param bool $fix_sell_price fix_sell_price
     *
     * @return $this
     */
    public function setFixSellPrice($fix_sell_price)
    {
        $this->container['fix_sell_price'] = $fix_sell_price;

        return $this;
    }

    /**
     * Gets user_defined_float1
     *
     * @return double
     */
    public function getUserDefinedFloat1()
    {
        return $this->container['user_defined_float1'];
    }

    /**
     * Sets user_defined_float1
     *
     * @param double $user_defined_float1 user_defined_float1
     *
     * @return $this
     */
    public function setUserDefinedFloat1($user_defined_float1)
    {
        $this->container['user_defined_float1'] = $user_defined_float1;

        return $this;
    }

    /**
     * Gets user_defined_float2
     *
     * @return double
     */
    public function getUserDefinedFloat2()
    {
        return $this->container['user_defined_float2'];
    }

    /**
     * Sets user_defined_float2
     *
     * @param double $user_defined_float2 user_defined_float2
     *
     * @return $this
     */
    public function setUserDefinedFloat2($user_defined_float2)
    {
        $this->container['user_defined_float2'] = $user_defined_float2;

        return $this;
    }

    /**
     * Gets user_defined_float3
     *
     * @return double
     */
    public function getUserDefinedFloat3()
    {
        return $this->container['user_defined_float3'];
    }

    /**
     * Sets user_defined_float3
     *
     * @param double $user_defined_float3 user_defined_float3
     *
     * @return $this
     */
    public function setUserDefinedFloat3($user_defined_float3)
    {
        $this->container['user_defined_float3'] = $user_defined_float3;

        return $this;
    }

    /**
     * Gets line_total
     *
     * @return double
     */
    public function getLineTotal()
    {
        return $this->container['line_total'];
    }

    /**
     * Sets line_total
     *
     * @param double $line_total line_total
     *
     * @return $this
     */
    public function setLineTotal($line_total)
    {
        $this->container['line_total'] = $line_total;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets cubic
     *
     * @return double
     */
    public function getCubic()
    {
        return $this->container['cubic'];
    }

    /**
     * Sets cubic
     *
     * @param double $cubic cubic
     *
     * @return $this
     */
    public function setCubic($cubic)
    {
        $this->container['cubic'] = $cubic;

        return $this;
    }

    /**
     * Gets discounted_percentage
     *
     * @return double
     */
    public function getDiscountedPercentage()
    {
        return $this->container['discounted_percentage'];
    }

    /**
     * Sets discounted_percentage
     *
     * @param double $discounted_percentage discounted_percentage
     *
     * @return $this
     */
    public function setDiscountedPercentage($discounted_percentage)
    {
        $this->container['discounted_percentage'] = $discounted_percentage;

        return $this;
    }

    /**
     * Gets discount_given
     *
     * @return double
     */
    public function getDiscountGiven()
    {
        return $this->container['discount_given'];
    }

    /**
     * Sets discount_given
     *
     * @param double $discount_given discount_given
     *
     * @return $this
     */
    public function setDiscountGiven($discount_given)
    {
        $this->container['discount_given'] = $discount_given;

        return $this;
    }

    /**
     * Gets quantity_decimal_places
     *
     * @return double
     */
    public function getQuantityDecimalPlaces()
    {
        return $this->container['quantity_decimal_places'];
    }

    /**
     * Sets quantity_decimal_places
     *
     * @param double $quantity_decimal_places quantity_decimal_places
     *
     * @return $this
     */
    public function setQuantityDecimalPlaces($quantity_decimal_places)
    {
        $this->container['quantity_decimal_places'] = $quantity_decimal_places;

        return $this;
    }

    /**
     * Gets quantity_original_ordered
     *
     * @return double
     */
    public function getQuantityOriginalOrdered()
    {
        return $this->container['quantity_original_ordered'];
    }

    /**
     * Sets quantity_original_ordered
     *
     * @param double $quantity_original_ordered quantity_original_ordered
     *
     * @return $this
     */
    public function setQuantityOriginalOrdered($quantity_original_ordered)
    {
        $this->container['quantity_original_ordered'] = $quantity_original_ordered;

        return $this;
    }

    /**
     * Gets non_inventory
     *
     * @return bool
     */
    public function getNonInventory()
    {
        return $this->container['non_inventory'];
    }

    /**
     * Sets non_inventory
     *
     * @param bool $non_inventory non_inventory
     *
     * @return $this
     */
    public function setNonInventory($non_inventory)
    {
        $this->container['non_inventory'] = $non_inventory;

        return $this;
    }

    /**
     * Gets custom_field_values
     *
     * @return \Jiwa\Model\CustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
        return $this->container['custom_field_values'];
    }

    /**
     * Sets custom_field_values
     *
     * @param \Jiwa\Model\CustomFieldValue[] $custom_field_values custom_field_values
     *
     * @return $this
     */
    public function setCustomFieldValues($custom_field_values)
    {
        $this->container['custom_field_values'] = $custom_field_values;

        return $this;
    }

    /**
     * Gets kit_line_type
     *
     * @return string
     */
    public function getKitLineType()
    {
        return $this->container['kit_line_type'];
    }

    /**
     * Sets kit_line_type
     *
     * @param string $kit_line_type kit_line_type
     *
     * @return $this
     */
    public function setKitLineType($kit_line_type)
    {
        $this->container['kit_line_type'] = $kit_line_type;

        return $this;
    }

    /**
     * Gets kit_units
     *
     * @return double
     */
    public function getKitUnits()
    {
        return $this->container['kit_units'];
    }

    /**
     * Sets kit_units
     *
     * @param double $kit_units kit_units
     *
     * @return $this
     */
    public function setKitUnits($kit_units)
    {
        $this->container['kit_units'] = $kit_units;

        return $this;
    }

    /**
     * Gets kit_header_line_id
     *
     * @return string
     */
    public function getKitHeaderLineId()
    {
        return $this->container['kit_header_line_id'];
    }

    /**
     * Sets kit_header_line_id
     *
     * @param string $kit_header_line_id kit_header_line_id
     *
     * @return $this
     */
    public function setKitHeaderLineId($kit_header_line_id)
    {
        $this->container['kit_header_line_id'] = $kit_header_line_id;

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


