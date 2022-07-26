<?php
/**
 * INClassification
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
 * INClassification Class Doc Comment
 *
 * @category Class
 * @description IN_Classification
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class INClassification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IN_Classification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_classification_id' => 'string',
        'description' => 'string',
        'last_saved_date_time' => '\DateTime',
        'ledger_inv_value' => 'string',
        'ledger_movement_cog' => 'string',
        'ledger_exp_asset' => 'string',
        'ledger_exp_liab' => 'string',
        'ledger_del_asset' => 'string',
        'ledger_del_liab' => 'string',
        'ledger_assigned_value' => 'string',
        'ledger_cog_variance' => 'string',
        'ledger_inv_sales' => 'string',
        'ledger_accumulator' => 'string',
        'ledger_purchases' => 'string',
        'ledger_ship_complete' => 'string',
        'ledger_write_on' => 'string',
        'ledger_write_off' => 'string',
        'ledger_cost_price_adj' => 'string',
        'gst_inwards_id' => 'string',
        'gst_outwards_id' => 'string',
        'gst_adjustments_inid' => 'string',
        'gst_adjustments_outid' => 'string',
        'web_enabled' => 'bool',
        'default_classification' => 'bool',
        'pricing_group_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_classification_id' => null,
        'description' => null,
        'last_saved_date_time' => 'date-time',
        'ledger_inv_value' => null,
        'ledger_movement_cog' => null,
        'ledger_exp_asset' => null,
        'ledger_exp_liab' => null,
        'ledger_del_asset' => null,
        'ledger_del_liab' => null,
        'ledger_assigned_value' => null,
        'ledger_cog_variance' => null,
        'ledger_inv_sales' => null,
        'ledger_accumulator' => null,
        'ledger_purchases' => null,
        'ledger_ship_complete' => null,
        'ledger_write_on' => null,
        'ledger_write_off' => null,
        'ledger_cost_price_adj' => null,
        'gst_inwards_id' => null,
        'gst_outwards_id' => null,
        'gst_adjustments_inid' => null,
        'gst_adjustments_outid' => null,
        'web_enabled' => null,
        'default_classification' => null,
        'pricing_group_id' => null
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
        'inventory_classification_id' => 'InventoryClassificationID',
        'description' => 'Description',
        'last_saved_date_time' => 'LastSavedDateTime',
        'ledger_inv_value' => 'LedgerInvValue',
        'ledger_movement_cog' => 'LedgerMovement_COG',
        'ledger_exp_asset' => 'LedgerExpAsset',
        'ledger_exp_liab' => 'LedgerExpLiab',
        'ledger_del_asset' => 'LedgerDelAsset',
        'ledger_del_liab' => 'LedgerDelLiab',
        'ledger_assigned_value' => 'LedgerAssignedValue',
        'ledger_cog_variance' => 'LedgerCogVariance',
        'ledger_inv_sales' => 'LedgerInvSales',
        'ledger_accumulator' => 'LedgerAccumulator',
        'ledger_purchases' => 'LedgerPurchases',
        'ledger_ship_complete' => 'LedgerShipComplete',
        'ledger_write_on' => 'LedgerWriteOn',
        'ledger_write_off' => 'LedgerWriteOff',
        'ledger_cost_price_adj' => 'LedgerCostPriceAdj',
        'gst_inwards_id' => 'GSTInwardsID',
        'gst_outwards_id' => 'GSTOutwardsID',
        'gst_adjustments_inid' => 'GSTAdjustmentsINID',
        'gst_adjustments_outid' => 'GSTAdjustmentsOUTID',
        'web_enabled' => 'WebEnabled',
        'default_classification' => 'DefaultClassification',
        'pricing_group_id' => 'PricingGroupID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_classification_id' => 'setInventoryClassificationId',
        'description' => 'setDescription',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'ledger_inv_value' => 'setLedgerInvValue',
        'ledger_movement_cog' => 'setLedgerMovementCog',
        'ledger_exp_asset' => 'setLedgerExpAsset',
        'ledger_exp_liab' => 'setLedgerExpLiab',
        'ledger_del_asset' => 'setLedgerDelAsset',
        'ledger_del_liab' => 'setLedgerDelLiab',
        'ledger_assigned_value' => 'setLedgerAssignedValue',
        'ledger_cog_variance' => 'setLedgerCogVariance',
        'ledger_inv_sales' => 'setLedgerInvSales',
        'ledger_accumulator' => 'setLedgerAccumulator',
        'ledger_purchases' => 'setLedgerPurchases',
        'ledger_ship_complete' => 'setLedgerShipComplete',
        'ledger_write_on' => 'setLedgerWriteOn',
        'ledger_write_off' => 'setLedgerWriteOff',
        'ledger_cost_price_adj' => 'setLedgerCostPriceAdj',
        'gst_inwards_id' => 'setGstInwardsId',
        'gst_outwards_id' => 'setGstOutwardsId',
        'gst_adjustments_inid' => 'setGstAdjustmentsInid',
        'gst_adjustments_outid' => 'setGstAdjustmentsOutid',
        'web_enabled' => 'setWebEnabled',
        'default_classification' => 'setDefaultClassification',
        'pricing_group_id' => 'setPricingGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_classification_id' => 'getInventoryClassificationId',
        'description' => 'getDescription',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'ledger_inv_value' => 'getLedgerInvValue',
        'ledger_movement_cog' => 'getLedgerMovementCog',
        'ledger_exp_asset' => 'getLedgerExpAsset',
        'ledger_exp_liab' => 'getLedgerExpLiab',
        'ledger_del_asset' => 'getLedgerDelAsset',
        'ledger_del_liab' => 'getLedgerDelLiab',
        'ledger_assigned_value' => 'getLedgerAssignedValue',
        'ledger_cog_variance' => 'getLedgerCogVariance',
        'ledger_inv_sales' => 'getLedgerInvSales',
        'ledger_accumulator' => 'getLedgerAccumulator',
        'ledger_purchases' => 'getLedgerPurchases',
        'ledger_ship_complete' => 'getLedgerShipComplete',
        'ledger_write_on' => 'getLedgerWriteOn',
        'ledger_write_off' => 'getLedgerWriteOff',
        'ledger_cost_price_adj' => 'getLedgerCostPriceAdj',
        'gst_inwards_id' => 'getGstInwardsId',
        'gst_outwards_id' => 'getGstOutwardsId',
        'gst_adjustments_inid' => 'getGstAdjustmentsInid',
        'gst_adjustments_outid' => 'getGstAdjustmentsOutid',
        'web_enabled' => 'getWebEnabled',
        'default_classification' => 'getDefaultClassification',
        'pricing_group_id' => 'getPricingGroupId'
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
        $this->container['inventory_classification_id'] = isset($data['inventory_classification_id']) ? $data['inventory_classification_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['ledger_inv_value'] = isset($data['ledger_inv_value']) ? $data['ledger_inv_value'] : null;
        $this->container['ledger_movement_cog'] = isset($data['ledger_movement_cog']) ? $data['ledger_movement_cog'] : null;
        $this->container['ledger_exp_asset'] = isset($data['ledger_exp_asset']) ? $data['ledger_exp_asset'] : null;
        $this->container['ledger_exp_liab'] = isset($data['ledger_exp_liab']) ? $data['ledger_exp_liab'] : null;
        $this->container['ledger_del_asset'] = isset($data['ledger_del_asset']) ? $data['ledger_del_asset'] : null;
        $this->container['ledger_del_liab'] = isset($data['ledger_del_liab']) ? $data['ledger_del_liab'] : null;
        $this->container['ledger_assigned_value'] = isset($data['ledger_assigned_value']) ? $data['ledger_assigned_value'] : null;
        $this->container['ledger_cog_variance'] = isset($data['ledger_cog_variance']) ? $data['ledger_cog_variance'] : null;
        $this->container['ledger_inv_sales'] = isset($data['ledger_inv_sales']) ? $data['ledger_inv_sales'] : null;
        $this->container['ledger_accumulator'] = isset($data['ledger_accumulator']) ? $data['ledger_accumulator'] : null;
        $this->container['ledger_purchases'] = isset($data['ledger_purchases']) ? $data['ledger_purchases'] : null;
        $this->container['ledger_ship_complete'] = isset($data['ledger_ship_complete']) ? $data['ledger_ship_complete'] : null;
        $this->container['ledger_write_on'] = isset($data['ledger_write_on']) ? $data['ledger_write_on'] : null;
        $this->container['ledger_write_off'] = isset($data['ledger_write_off']) ? $data['ledger_write_off'] : null;
        $this->container['ledger_cost_price_adj'] = isset($data['ledger_cost_price_adj']) ? $data['ledger_cost_price_adj'] : null;
        $this->container['gst_inwards_id'] = isset($data['gst_inwards_id']) ? $data['gst_inwards_id'] : null;
        $this->container['gst_outwards_id'] = isset($data['gst_outwards_id']) ? $data['gst_outwards_id'] : null;
        $this->container['gst_adjustments_inid'] = isset($data['gst_adjustments_inid']) ? $data['gst_adjustments_inid'] : null;
        $this->container['gst_adjustments_outid'] = isset($data['gst_adjustments_outid']) ? $data['gst_adjustments_outid'] : null;
        $this->container['web_enabled'] = isset($data['web_enabled']) ? $data['web_enabled'] : null;
        $this->container['default_classification'] = isset($data['default_classification']) ? $data['default_classification'] : null;
        $this->container['pricing_group_id'] = isset($data['pricing_group_id']) ? $data['pricing_group_id'] : null;
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
     * Gets inventory_classification_id
     *
     * @return string
     */
    public function getInventoryClassificationId()
    {
        return $this->container['inventory_classification_id'];
    }

    /**
     * Sets inventory_classification_id
     *
     * @param string $inventory_classification_id inventory_classification_id
     *
     * @return $this
     */
    public function setInventoryClassificationId($inventory_classification_id)
    {
        $this->container['inventory_classification_id'] = $inventory_classification_id;

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
     * Gets ledger_inv_value
     *
     * @return string
     */
    public function getLedgerInvValue()
    {
        return $this->container['ledger_inv_value'];
    }

    /**
     * Sets ledger_inv_value
     *
     * @param string $ledger_inv_value ledger_inv_value
     *
     * @return $this
     */
    public function setLedgerInvValue($ledger_inv_value)
    {
        $this->container['ledger_inv_value'] = $ledger_inv_value;

        return $this;
    }

    /**
     * Gets ledger_movement_cog
     *
     * @return string
     */
    public function getLedgerMovementCog()
    {
        return $this->container['ledger_movement_cog'];
    }

    /**
     * Sets ledger_movement_cog
     *
     * @param string $ledger_movement_cog ledger_movement_cog
     *
     * @return $this
     */
    public function setLedgerMovementCog($ledger_movement_cog)
    {
        $this->container['ledger_movement_cog'] = $ledger_movement_cog;

        return $this;
    }

    /**
     * Gets ledger_exp_asset
     *
     * @return string
     */
    public function getLedgerExpAsset()
    {
        return $this->container['ledger_exp_asset'];
    }

    /**
     * Sets ledger_exp_asset
     *
     * @param string $ledger_exp_asset ledger_exp_asset
     *
     * @return $this
     */
    public function setLedgerExpAsset($ledger_exp_asset)
    {
        $this->container['ledger_exp_asset'] = $ledger_exp_asset;

        return $this;
    }

    /**
     * Gets ledger_exp_liab
     *
     * @return string
     */
    public function getLedgerExpLiab()
    {
        return $this->container['ledger_exp_liab'];
    }

    /**
     * Sets ledger_exp_liab
     *
     * @param string $ledger_exp_liab ledger_exp_liab
     *
     * @return $this
     */
    public function setLedgerExpLiab($ledger_exp_liab)
    {
        $this->container['ledger_exp_liab'] = $ledger_exp_liab;

        return $this;
    }

    /**
     * Gets ledger_del_asset
     *
     * @return string
     */
    public function getLedgerDelAsset()
    {
        return $this->container['ledger_del_asset'];
    }

    /**
     * Sets ledger_del_asset
     *
     * @param string $ledger_del_asset ledger_del_asset
     *
     * @return $this
     */
    public function setLedgerDelAsset($ledger_del_asset)
    {
        $this->container['ledger_del_asset'] = $ledger_del_asset;

        return $this;
    }

    /**
     * Gets ledger_del_liab
     *
     * @return string
     */
    public function getLedgerDelLiab()
    {
        return $this->container['ledger_del_liab'];
    }

    /**
     * Sets ledger_del_liab
     *
     * @param string $ledger_del_liab ledger_del_liab
     *
     * @return $this
     */
    public function setLedgerDelLiab($ledger_del_liab)
    {
        $this->container['ledger_del_liab'] = $ledger_del_liab;

        return $this;
    }

    /**
     * Gets ledger_assigned_value
     *
     * @return string
     */
    public function getLedgerAssignedValue()
    {
        return $this->container['ledger_assigned_value'];
    }

    /**
     * Sets ledger_assigned_value
     *
     * @param string $ledger_assigned_value ledger_assigned_value
     *
     * @return $this
     */
    public function setLedgerAssignedValue($ledger_assigned_value)
    {
        $this->container['ledger_assigned_value'] = $ledger_assigned_value;

        return $this;
    }

    /**
     * Gets ledger_cog_variance
     *
     * @return string
     */
    public function getLedgerCogVariance()
    {
        return $this->container['ledger_cog_variance'];
    }

    /**
     * Sets ledger_cog_variance
     *
     * @param string $ledger_cog_variance ledger_cog_variance
     *
     * @return $this
     */
    public function setLedgerCogVariance($ledger_cog_variance)
    {
        $this->container['ledger_cog_variance'] = $ledger_cog_variance;

        return $this;
    }

    /**
     * Gets ledger_inv_sales
     *
     * @return string
     */
    public function getLedgerInvSales()
    {
        return $this->container['ledger_inv_sales'];
    }

    /**
     * Sets ledger_inv_sales
     *
     * @param string $ledger_inv_sales ledger_inv_sales
     *
     * @return $this
     */
    public function setLedgerInvSales($ledger_inv_sales)
    {
        $this->container['ledger_inv_sales'] = $ledger_inv_sales;

        return $this;
    }

    /**
     * Gets ledger_accumulator
     *
     * @return string
     */
    public function getLedgerAccumulator()
    {
        return $this->container['ledger_accumulator'];
    }

    /**
     * Sets ledger_accumulator
     *
     * @param string $ledger_accumulator ledger_accumulator
     *
     * @return $this
     */
    public function setLedgerAccumulator($ledger_accumulator)
    {
        $this->container['ledger_accumulator'] = $ledger_accumulator;

        return $this;
    }

    /**
     * Gets ledger_purchases
     *
     * @return string
     */
    public function getLedgerPurchases()
    {
        return $this->container['ledger_purchases'];
    }

    /**
     * Sets ledger_purchases
     *
     * @param string $ledger_purchases ledger_purchases
     *
     * @return $this
     */
    public function setLedgerPurchases($ledger_purchases)
    {
        $this->container['ledger_purchases'] = $ledger_purchases;

        return $this;
    }

    /**
     * Gets ledger_ship_complete
     *
     * @return string
     */
    public function getLedgerShipComplete()
    {
        return $this->container['ledger_ship_complete'];
    }

    /**
     * Sets ledger_ship_complete
     *
     * @param string $ledger_ship_complete ledger_ship_complete
     *
     * @return $this
     */
    public function setLedgerShipComplete($ledger_ship_complete)
    {
        $this->container['ledger_ship_complete'] = $ledger_ship_complete;

        return $this;
    }

    /**
     * Gets ledger_write_on
     *
     * @return string
     */
    public function getLedgerWriteOn()
    {
        return $this->container['ledger_write_on'];
    }

    /**
     * Sets ledger_write_on
     *
     * @param string $ledger_write_on ledger_write_on
     *
     * @return $this
     */
    public function setLedgerWriteOn($ledger_write_on)
    {
        $this->container['ledger_write_on'] = $ledger_write_on;

        return $this;
    }

    /**
     * Gets ledger_write_off
     *
     * @return string
     */
    public function getLedgerWriteOff()
    {
        return $this->container['ledger_write_off'];
    }

    /**
     * Sets ledger_write_off
     *
     * @param string $ledger_write_off ledger_write_off
     *
     * @return $this
     */
    public function setLedgerWriteOff($ledger_write_off)
    {
        $this->container['ledger_write_off'] = $ledger_write_off;

        return $this;
    }

    /**
     * Gets ledger_cost_price_adj
     *
     * @return string
     */
    public function getLedgerCostPriceAdj()
    {
        return $this->container['ledger_cost_price_adj'];
    }

    /**
     * Sets ledger_cost_price_adj
     *
     * @param string $ledger_cost_price_adj ledger_cost_price_adj
     *
     * @return $this
     */
    public function setLedgerCostPriceAdj($ledger_cost_price_adj)
    {
        $this->container['ledger_cost_price_adj'] = $ledger_cost_price_adj;

        return $this;
    }

    /**
     * Gets gst_inwards_id
     *
     * @return string
     */
    public function getGstInwardsId()
    {
        return $this->container['gst_inwards_id'];
    }

    /**
     * Sets gst_inwards_id
     *
     * @param string $gst_inwards_id gst_inwards_id
     *
     * @return $this
     */
    public function setGstInwardsId($gst_inwards_id)
    {
        $this->container['gst_inwards_id'] = $gst_inwards_id;

        return $this;
    }

    /**
     * Gets gst_outwards_id
     *
     * @return string
     */
    public function getGstOutwardsId()
    {
        return $this->container['gst_outwards_id'];
    }

    /**
     * Sets gst_outwards_id
     *
     * @param string $gst_outwards_id gst_outwards_id
     *
     * @return $this
     */
    public function setGstOutwardsId($gst_outwards_id)
    {
        $this->container['gst_outwards_id'] = $gst_outwards_id;

        return $this;
    }

    /**
     * Gets gst_adjustments_inid
     *
     * @return string
     */
    public function getGstAdjustmentsInid()
    {
        return $this->container['gst_adjustments_inid'];
    }

    /**
     * Sets gst_adjustments_inid
     *
     * @param string $gst_adjustments_inid gst_adjustments_inid
     *
     * @return $this
     */
    public function setGstAdjustmentsInid($gst_adjustments_inid)
    {
        $this->container['gst_adjustments_inid'] = $gst_adjustments_inid;

        return $this;
    }

    /**
     * Gets gst_adjustments_outid
     *
     * @return string
     */
    public function getGstAdjustmentsOutid()
    {
        return $this->container['gst_adjustments_outid'];
    }

    /**
     * Sets gst_adjustments_outid
     *
     * @param string $gst_adjustments_outid gst_adjustments_outid
     *
     * @return $this
     */
    public function setGstAdjustmentsOutid($gst_adjustments_outid)
    {
        $this->container['gst_adjustments_outid'] = $gst_adjustments_outid;

        return $this;
    }

    /**
     * Gets web_enabled
     *
     * @return bool
     */
    public function getWebEnabled()
    {
        return $this->container['web_enabled'];
    }

    /**
     * Sets web_enabled
     *
     * @param bool $web_enabled web_enabled
     *
     * @return $this
     */
    public function setWebEnabled($web_enabled)
    {
        $this->container['web_enabled'] = $web_enabled;

        return $this;
    }

    /**
     * Gets default_classification
     *
     * @return bool
     */
    public function getDefaultClassification()
    {
        return $this->container['default_classification'];
    }

    /**
     * Sets default_classification
     *
     * @param bool $default_classification default_classification
     *
     * @return $this
     */
    public function setDefaultClassification($default_classification)
    {
        $this->container['default_classification'] = $default_classification;

        return $this;
    }

    /**
     * Gets pricing_group_id
     *
     * @return string
     */
    public function getPricingGroupId()
    {
        return $this->container['pricing_group_id'];
    }

    /**
     * Sets pricing_group_id
     *
     * @param string $pricing_group_id pricing_group_id
     *
     * @return $this
     */
    public function setPricingGroupId($pricing_group_id)
    {
        $this->container['pricing_group_id'] = $pricing_group_id;

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

