<?php
/**
 * BookInShipmentLine
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
 * BookInShipmentLine Class Doc Comment
 *
 * @category Class
 * @description BookInShipmentLine
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookInShipmentLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BookInShipmentLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_line_id' => 'string',
        'item_no' => 'int',
        'sh_invoices_rec_id' => 'string',
        'quantity_ordered' => 'double',
        'quantity_this_shipment' => 'double',
        'ordered_cost' => 'double',
        'fx_ordered_cost' => 'double',
        'unit_cost_ex_tax' => 'double',
        'fx_rate' => '\Jiwa\JiwaModel\CurrencyRate',
        'fx_unit_cost_ex_tax' => 'double',
        'tax_rate' => '\Jiwa\JiwaModel\TaxRate',
        'tax_amount' => 'double',
        'unit_cost_inc_tax' => 'double',
        'line_total_ex_tax' => 'double',
        'line_total_inc_tax' => 'double',
        'fx_line_total_ex_tax' => 'double',
        'landed_cost_line_total' => 'double',
        'landed_cost' => 'double',
        'inventory_id' => 'string',
        'part_no' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_line_id' => null,
        'item_no' => 'int32',
        'sh_invoices_rec_id' => null,
        'quantity_ordered' => 'double',
        'quantity_this_shipment' => 'double',
        'ordered_cost' => 'double',
        'fx_ordered_cost' => 'double',
        'unit_cost_ex_tax' => 'double',
        'fx_rate' => null,
        'fx_unit_cost_ex_tax' => 'double',
        'tax_rate' => null,
        'tax_amount' => 'double',
        'unit_cost_inc_tax' => 'double',
        'line_total_ex_tax' => 'double',
        'line_total_inc_tax' => 'double',
        'fx_line_total_ex_tax' => 'double',
        'landed_cost_line_total' => 'double',
        'landed_cost' => 'double',
        'inventory_id' => null,
        'part_no' => null
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
        'shipment_line_id' => 'ShipmentLineID',
        'item_no' => 'ItemNo',
        'sh_invoices_rec_id' => 'SHInvoicesRecID',
        'quantity_ordered' => 'QuantityOrdered',
        'quantity_this_shipment' => 'QuantityThisShipment',
        'ordered_cost' => 'OrderedCost',
        'fx_ordered_cost' => 'FXOrderedCost',
        'unit_cost_ex_tax' => 'UnitCostExTax',
        'fx_rate' => 'FXRate',
        'fx_unit_cost_ex_tax' => 'FXUnitCostExTax',
        'tax_rate' => 'TaxRate',
        'tax_amount' => 'TaxAmount',
        'unit_cost_inc_tax' => 'UnitCostIncTax',
        'line_total_ex_tax' => 'LineTotalExTax',
        'line_total_inc_tax' => 'LineTotalIncTax',
        'fx_line_total_ex_tax' => 'FXLineTotalExTax',
        'landed_cost_line_total' => 'LandedCostLineTotal',
        'landed_cost' => 'LandedCost',
        'inventory_id' => 'InventoryID',
        'part_no' => 'PartNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_line_id' => 'setShipmentLineId',
        'item_no' => 'setItemNo',
        'sh_invoices_rec_id' => 'setShInvoicesRecId',
        'quantity_ordered' => 'setQuantityOrdered',
        'quantity_this_shipment' => 'setQuantityThisShipment',
        'ordered_cost' => 'setOrderedCost',
        'fx_ordered_cost' => 'setFxOrderedCost',
        'unit_cost_ex_tax' => 'setUnitCostExTax',
        'fx_rate' => 'setFxRate',
        'fx_unit_cost_ex_tax' => 'setFxUnitCostExTax',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'unit_cost_inc_tax' => 'setUnitCostIncTax',
        'line_total_ex_tax' => 'setLineTotalExTax',
        'line_total_inc_tax' => 'setLineTotalIncTax',
        'fx_line_total_ex_tax' => 'setFxLineTotalExTax',
        'landed_cost_line_total' => 'setLandedCostLineTotal',
        'landed_cost' => 'setLandedCost',
        'inventory_id' => 'setInventoryId',
        'part_no' => 'setPartNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_line_id' => 'getShipmentLineId',
        'item_no' => 'getItemNo',
        'sh_invoices_rec_id' => 'getShInvoicesRecId',
        'quantity_ordered' => 'getQuantityOrdered',
        'quantity_this_shipment' => 'getQuantityThisShipment',
        'ordered_cost' => 'getOrderedCost',
        'fx_ordered_cost' => 'getFxOrderedCost',
        'unit_cost_ex_tax' => 'getUnitCostExTax',
        'fx_rate' => 'getFxRate',
        'fx_unit_cost_ex_tax' => 'getFxUnitCostExTax',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'unit_cost_inc_tax' => 'getUnitCostIncTax',
        'line_total_ex_tax' => 'getLineTotalExTax',
        'line_total_inc_tax' => 'getLineTotalIncTax',
        'fx_line_total_ex_tax' => 'getFxLineTotalExTax',
        'landed_cost_line_total' => 'getLandedCostLineTotal',
        'landed_cost' => 'getLandedCost',
        'inventory_id' => 'getInventoryId',
        'part_no' => 'getPartNo'
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
        $this->container['shipment_line_id'] = isset($data['shipment_line_id']) ? $data['shipment_line_id'] : null;
        $this->container['item_no'] = isset($data['item_no']) ? $data['item_no'] : null;
        $this->container['sh_invoices_rec_id'] = isset($data['sh_invoices_rec_id']) ? $data['sh_invoices_rec_id'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['quantity_this_shipment'] = isset($data['quantity_this_shipment']) ? $data['quantity_this_shipment'] : null;
        $this->container['ordered_cost'] = isset($data['ordered_cost']) ? $data['ordered_cost'] : null;
        $this->container['fx_ordered_cost'] = isset($data['fx_ordered_cost']) ? $data['fx_ordered_cost'] : null;
        $this->container['unit_cost_ex_tax'] = isset($data['unit_cost_ex_tax']) ? $data['unit_cost_ex_tax'] : null;
        $this->container['fx_rate'] = isset($data['fx_rate']) ? $data['fx_rate'] : null;
        $this->container['fx_unit_cost_ex_tax'] = isset($data['fx_unit_cost_ex_tax']) ? $data['fx_unit_cost_ex_tax'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['unit_cost_inc_tax'] = isset($data['unit_cost_inc_tax']) ? $data['unit_cost_inc_tax'] : null;
        $this->container['line_total_ex_tax'] = isset($data['line_total_ex_tax']) ? $data['line_total_ex_tax'] : null;
        $this->container['line_total_inc_tax'] = isset($data['line_total_inc_tax']) ? $data['line_total_inc_tax'] : null;
        $this->container['fx_line_total_ex_tax'] = isset($data['fx_line_total_ex_tax']) ? $data['fx_line_total_ex_tax'] : null;
        $this->container['landed_cost_line_total'] = isset($data['landed_cost_line_total']) ? $data['landed_cost_line_total'] : null;
        $this->container['landed_cost'] = isset($data['landed_cost']) ? $data['landed_cost'] : null;
        $this->container['inventory_id'] = isset($data['inventory_id']) ? $data['inventory_id'] : null;
        $this->container['part_no'] = isset($data['part_no']) ? $data['part_no'] : null;
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
     * Gets shipment_line_id
     *
     * @return string
     */
    public function getShipmentLineId()
    {
        return $this->container['shipment_line_id'];
    }

    /**
     * Sets shipment_line_id
     *
     * @param string $shipment_line_id shipment_line_id
     *
     * @return $this
     */
    public function setShipmentLineId($shipment_line_id)
    {
        $this->container['shipment_line_id'] = $shipment_line_id;

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
     * Gets sh_invoices_rec_id
     *
     * @return string
     */
    public function getShInvoicesRecId()
    {
        return $this->container['sh_invoices_rec_id'];
    }

    /**
     * Sets sh_invoices_rec_id
     *
     * @param string $sh_invoices_rec_id sh_invoices_rec_id
     *
     * @return $this
     */
    public function setShInvoicesRecId($sh_invoices_rec_id)
    {
        $this->container['sh_invoices_rec_id'] = $sh_invoices_rec_id;

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
     * Gets quantity_this_shipment
     *
     * @return double
     */
    public function getQuantityThisShipment()
    {
        return $this->container['quantity_this_shipment'];
    }

    /**
     * Sets quantity_this_shipment
     *
     * @param double $quantity_this_shipment quantity_this_shipment
     *
     * @return $this
     */
    public function setQuantityThisShipment($quantity_this_shipment)
    {
        $this->container['quantity_this_shipment'] = $quantity_this_shipment;

        return $this;
    }

    /**
     * Gets ordered_cost
     *
     * @return double
     */
    public function getOrderedCost()
    {
        return $this->container['ordered_cost'];
    }

    /**
     * Sets ordered_cost
     *
     * @param double $ordered_cost ordered_cost
     *
     * @return $this
     */
    public function setOrderedCost($ordered_cost)
    {
        $this->container['ordered_cost'] = $ordered_cost;

        return $this;
    }

    /**
     * Gets fx_ordered_cost
     *
     * @return double
     */
    public function getFxOrderedCost()
    {
        return $this->container['fx_ordered_cost'];
    }

    /**
     * Sets fx_ordered_cost
     *
     * @param double $fx_ordered_cost fx_ordered_cost
     *
     * @return $this
     */
    public function setFxOrderedCost($fx_ordered_cost)
    {
        $this->container['fx_ordered_cost'] = $fx_ordered_cost;

        return $this;
    }

    /**
     * Gets unit_cost_ex_tax
     *
     * @return double
     */
    public function getUnitCostExTax()
    {
        return $this->container['unit_cost_ex_tax'];
    }

    /**
     * Sets unit_cost_ex_tax
     *
     * @param double $unit_cost_ex_tax unit_cost_ex_tax
     *
     * @return $this
     */
    public function setUnitCostExTax($unit_cost_ex_tax)
    {
        $this->container['unit_cost_ex_tax'] = $unit_cost_ex_tax;

        return $this;
    }

    /**
     * Gets fx_rate
     *
     * @return \Jiwa\JiwaModel\CurrencyRate
     */
    public function getFxRate()
    {
        return $this->container['fx_rate'];
    }

    /**
     * Sets fx_rate
     *
     * @param \Jiwa\JiwaModel\CurrencyRate $fx_rate fx_rate
     *
     * @return $this
     */
    public function setFxRate($fx_rate)
    {
        $this->container['fx_rate'] = $fx_rate;

        return $this;
    }

    /**
     * Gets fx_unit_cost_ex_tax
     *
     * @return double
     */
    public function getFxUnitCostExTax()
    {
        return $this->container['fx_unit_cost_ex_tax'];
    }

    /**
     * Sets fx_unit_cost_ex_tax
     *
     * @param double $fx_unit_cost_ex_tax fx_unit_cost_ex_tax
     *
     * @return $this
     */
    public function setFxUnitCostExTax($fx_unit_cost_ex_tax)
    {
        $this->container['fx_unit_cost_ex_tax'] = $fx_unit_cost_ex_tax;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return \Jiwa\JiwaModel\TaxRate
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param \Jiwa\JiwaModel\TaxRate $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

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
     * Gets unit_cost_inc_tax
     *
     * @return double
     */
    public function getUnitCostIncTax()
    {
        return $this->container['unit_cost_inc_tax'];
    }

    /**
     * Sets unit_cost_inc_tax
     *
     * @param double $unit_cost_inc_tax unit_cost_inc_tax
     *
     * @return $this
     */
    public function setUnitCostIncTax($unit_cost_inc_tax)
    {
        $this->container['unit_cost_inc_tax'] = $unit_cost_inc_tax;

        return $this;
    }

    /**
     * Gets line_total_ex_tax
     *
     * @return double
     */
    public function getLineTotalExTax()
    {
        return $this->container['line_total_ex_tax'];
    }

    /**
     * Sets line_total_ex_tax
     *
     * @param double $line_total_ex_tax line_total_ex_tax
     *
     * @return $this
     */
    public function setLineTotalExTax($line_total_ex_tax)
    {
        $this->container['line_total_ex_tax'] = $line_total_ex_tax;

        return $this;
    }

    /**
     * Gets line_total_inc_tax
     *
     * @return double
     */
    public function getLineTotalIncTax()
    {
        return $this->container['line_total_inc_tax'];
    }

    /**
     * Sets line_total_inc_tax
     *
     * @param double $line_total_inc_tax line_total_inc_tax
     *
     * @return $this
     */
    public function setLineTotalIncTax($line_total_inc_tax)
    {
        $this->container['line_total_inc_tax'] = $line_total_inc_tax;

        return $this;
    }

    /**
     * Gets fx_line_total_ex_tax
     *
     * @return double
     */
    public function getFxLineTotalExTax()
    {
        return $this->container['fx_line_total_ex_tax'];
    }

    /**
     * Sets fx_line_total_ex_tax
     *
     * @param double $fx_line_total_ex_tax fx_line_total_ex_tax
     *
     * @return $this
     */
    public function setFxLineTotalExTax($fx_line_total_ex_tax)
    {
        $this->container['fx_line_total_ex_tax'] = $fx_line_total_ex_tax;

        return $this;
    }

    /**
     * Gets landed_cost_line_total
     *
     * @return double
     */
    public function getLandedCostLineTotal()
    {
        return $this->container['landed_cost_line_total'];
    }

    /**
     * Sets landed_cost_line_total
     *
     * @param double $landed_cost_line_total landed_cost_line_total
     *
     * @return $this
     */
    public function setLandedCostLineTotal($landed_cost_line_total)
    {
        $this->container['landed_cost_line_total'] = $landed_cost_line_total;

        return $this;
    }

    /**
     * Gets landed_cost
     *
     * @return double
     */
    public function getLandedCost()
    {
        return $this->container['landed_cost'];
    }

    /**
     * Sets landed_cost
     *
     * @param double $landed_cost landed_cost
     *
     * @return $this
     */
    public function setLandedCost($landed_cost)
    {
        $this->container['landed_cost'] = $landed_cost;

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


