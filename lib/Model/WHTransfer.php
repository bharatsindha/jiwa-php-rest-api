<?php
/**
 * WHTransfer
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
 * WHTransfer Class Doc Comment
 *
 * @category Class
 * @description WH_Transfer
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WHTransfer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WH_Transfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'wh_transfer_id' => 'string',
        'last_saved_date_time' => '\DateTime',
        'transfer_date' => '\DateTime',
        'activate_date' => '\DateTime',
        'status' => 'int',
        'transfer_by' => 'string',
        'ref' => 'string',
        'notes' => 'string',
        'source_type' => 'int',
        'source_id' => 'string',
        'src_in_logical_id' => 'string',
        'dst_in_logical_id' => 'string',
        'transfer_no' => 'string',
        'in_transit' => 'bool',
        'transit_notes' => 'string',
        'in_transit_id' => 'string',
        'added_cost1' => 'double',
        'added_cost2' => 'double',
        'added_cost3' => 'double',
        'picked_by' => 'string',
        'received_by' => 'string',
        'type' => 'int',
        'add_cost_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'wh_transfer_id' => null,
        'last_saved_date_time' => 'date-time',
        'transfer_date' => 'date-time',
        'activate_date' => 'date-time',
        'status' => 'int32',
        'transfer_by' => null,
        'ref' => null,
        'notes' => null,
        'source_type' => 'int32',
        'source_id' => null,
        'src_in_logical_id' => null,
        'dst_in_logical_id' => null,
        'transfer_no' => null,
        'in_transit' => null,
        'transit_notes' => null,
        'in_transit_id' => null,
        'added_cost1' => 'double',
        'added_cost2' => 'double',
        'added_cost3' => 'double',
        'picked_by' => null,
        'received_by' => null,
        'type' => 'int32',
        'add_cost_method' => null
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
        'wh_transfer_id' => 'WH_TransferID',
        'last_saved_date_time' => 'LastSavedDateTime',
        'transfer_date' => 'TransferDate',
        'activate_date' => 'ActivateDate',
        'status' => 'Status',
        'transfer_by' => 'TransferBy',
        'ref' => 'Ref',
        'notes' => 'Notes',
        'source_type' => 'SourceType',
        'source_id' => 'SourceID',
        'src_in_logical_id' => 'SrcIN_LogicalID',
        'dst_in_logical_id' => 'DstIN_LogicalID',
        'transfer_no' => 'TransferNo',
        'in_transit' => 'InTransit',
        'transit_notes' => 'TransitNotes',
        'in_transit_id' => 'IN_TransitID',
        'added_cost1' => 'AddedCost1',
        'added_cost2' => 'AddedCost2',
        'added_cost3' => 'AddedCost3',
        'picked_by' => 'PickedBy',
        'received_by' => 'ReceivedBy',
        'type' => 'Type',
        'add_cost_method' => 'AddCostMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wh_transfer_id' => 'setWhTransferId',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'transfer_date' => 'setTransferDate',
        'activate_date' => 'setActivateDate',
        'status' => 'setStatus',
        'transfer_by' => 'setTransferBy',
        'ref' => 'setRef',
        'notes' => 'setNotes',
        'source_type' => 'setSourceType',
        'source_id' => 'setSourceId',
        'src_in_logical_id' => 'setSrcInLogicalId',
        'dst_in_logical_id' => 'setDstInLogicalId',
        'transfer_no' => 'setTransferNo',
        'in_transit' => 'setInTransit',
        'transit_notes' => 'setTransitNotes',
        'in_transit_id' => 'setInTransitId',
        'added_cost1' => 'setAddedCost1',
        'added_cost2' => 'setAddedCost2',
        'added_cost3' => 'setAddedCost3',
        'picked_by' => 'setPickedBy',
        'received_by' => 'setReceivedBy',
        'type' => 'setType',
        'add_cost_method' => 'setAddCostMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wh_transfer_id' => 'getWhTransferId',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'transfer_date' => 'getTransferDate',
        'activate_date' => 'getActivateDate',
        'status' => 'getStatus',
        'transfer_by' => 'getTransferBy',
        'ref' => 'getRef',
        'notes' => 'getNotes',
        'source_type' => 'getSourceType',
        'source_id' => 'getSourceId',
        'src_in_logical_id' => 'getSrcInLogicalId',
        'dst_in_logical_id' => 'getDstInLogicalId',
        'transfer_no' => 'getTransferNo',
        'in_transit' => 'getInTransit',
        'transit_notes' => 'getTransitNotes',
        'in_transit_id' => 'getInTransitId',
        'added_cost1' => 'getAddedCost1',
        'added_cost2' => 'getAddedCost2',
        'added_cost3' => 'getAddedCost3',
        'picked_by' => 'getPickedBy',
        'received_by' => 'getReceivedBy',
        'type' => 'getType',
        'add_cost_method' => 'getAddCostMethod'
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
        $this->container['wh_transfer_id'] = isset($data['wh_transfer_id']) ? $data['wh_transfer_id'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['transfer_date'] = isset($data['transfer_date']) ? $data['transfer_date'] : null;
        $this->container['activate_date'] = isset($data['activate_date']) ? $data['activate_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transfer_by'] = isset($data['transfer_by']) ? $data['transfer_by'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['src_in_logical_id'] = isset($data['src_in_logical_id']) ? $data['src_in_logical_id'] : null;
        $this->container['dst_in_logical_id'] = isset($data['dst_in_logical_id']) ? $data['dst_in_logical_id'] : null;
        $this->container['transfer_no'] = isset($data['transfer_no']) ? $data['transfer_no'] : null;
        $this->container['in_transit'] = isset($data['in_transit']) ? $data['in_transit'] : null;
        $this->container['transit_notes'] = isset($data['transit_notes']) ? $data['transit_notes'] : null;
        $this->container['in_transit_id'] = isset($data['in_transit_id']) ? $data['in_transit_id'] : null;
        $this->container['added_cost1'] = isset($data['added_cost1']) ? $data['added_cost1'] : null;
        $this->container['added_cost2'] = isset($data['added_cost2']) ? $data['added_cost2'] : null;
        $this->container['added_cost3'] = isset($data['added_cost3']) ? $data['added_cost3'] : null;
        $this->container['picked_by'] = isset($data['picked_by']) ? $data['picked_by'] : null;
        $this->container['received_by'] = isset($data['received_by']) ? $data['received_by'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['add_cost_method'] = isset($data['add_cost_method']) ? $data['add_cost_method'] : null;
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
     * Gets wh_transfer_id
     *
     * @return string
     */
    public function getWhTransferId()
    {
        return $this->container['wh_transfer_id'];
    }

    /**
     * Sets wh_transfer_id
     *
     * @param string $wh_transfer_id wh_transfer_id
     *
     * @return $this
     */
    public function setWhTransferId($wh_transfer_id)
    {
        $this->container['wh_transfer_id'] = $wh_transfer_id;

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
     * Gets transfer_date
     *
     * @return \DateTime
     */
    public function getTransferDate()
    {
        return $this->container['transfer_date'];
    }

    /**
     * Sets transfer_date
     *
     * @param \DateTime $transfer_date transfer_date
     *
     * @return $this
     */
    public function setTransferDate($transfer_date)
    {
        $this->container['transfer_date'] = $transfer_date;

        return $this;
    }

    /**
     * Gets activate_date
     *
     * @return \DateTime
     */
    public function getActivateDate()
    {
        return $this->container['activate_date'];
    }

    /**
     * Sets activate_date
     *
     * @param \DateTime $activate_date activate_date
     *
     * @return $this
     */
    public function setActivateDate($activate_date)
    {
        $this->container['activate_date'] = $activate_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transfer_by
     *
     * @return string
     */
    public function getTransferBy()
    {
        return $this->container['transfer_by'];
    }

    /**
     * Sets transfer_by
     *
     * @param string $transfer_by transfer_by
     *
     * @return $this
     */
    public function setTransferBy($transfer_by)
    {
        $this->container['transfer_by'] = $transfer_by;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref ref
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return int
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param int $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string $source_id source_id
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets src_in_logical_id
     *
     * @return string
     */
    public function getSrcInLogicalId()
    {
        return $this->container['src_in_logical_id'];
    }

    /**
     * Sets src_in_logical_id
     *
     * @param string $src_in_logical_id src_in_logical_id
     *
     * @return $this
     */
    public function setSrcInLogicalId($src_in_logical_id)
    {
        $this->container['src_in_logical_id'] = $src_in_logical_id;

        return $this;
    }

    /**
     * Gets dst_in_logical_id
     *
     * @return string
     */
    public function getDstInLogicalId()
    {
        return $this->container['dst_in_logical_id'];
    }

    /**
     * Sets dst_in_logical_id
     *
     * @param string $dst_in_logical_id dst_in_logical_id
     *
     * @return $this
     */
    public function setDstInLogicalId($dst_in_logical_id)
    {
        $this->container['dst_in_logical_id'] = $dst_in_logical_id;

        return $this;
    }

    /**
     * Gets transfer_no
     *
     * @return string
     */
    public function getTransferNo()
    {
        return $this->container['transfer_no'];
    }

    /**
     * Sets transfer_no
     *
     * @param string $transfer_no transfer_no
     *
     * @return $this
     */
    public function setTransferNo($transfer_no)
    {
        $this->container['transfer_no'] = $transfer_no;

        return $this;
    }

    /**
     * Gets in_transit
     *
     * @return bool
     */
    public function getInTransit()
    {
        return $this->container['in_transit'];
    }

    /**
     * Sets in_transit
     *
     * @param bool $in_transit in_transit
     *
     * @return $this
     */
    public function setInTransit($in_transit)
    {
        $this->container['in_transit'] = $in_transit;

        return $this;
    }

    /**
     * Gets transit_notes
     *
     * @return string
     */
    public function getTransitNotes()
    {
        return $this->container['transit_notes'];
    }

    /**
     * Sets transit_notes
     *
     * @param string $transit_notes transit_notes
     *
     * @return $this
     */
    public function setTransitNotes($transit_notes)
    {
        $this->container['transit_notes'] = $transit_notes;

        return $this;
    }

    /**
     * Gets in_transit_id
     *
     * @return string
     */
    public function getInTransitId()
    {
        return $this->container['in_transit_id'];
    }

    /**
     * Sets in_transit_id
     *
     * @param string $in_transit_id in_transit_id
     *
     * @return $this
     */
    public function setInTransitId($in_transit_id)
    {
        $this->container['in_transit_id'] = $in_transit_id;

        return $this;
    }

    /**
     * Gets added_cost1
     *
     * @return double
     */
    public function getAddedCost1()
    {
        return $this->container['added_cost1'];
    }

    /**
     * Sets added_cost1
     *
     * @param double $added_cost1 added_cost1
     *
     * @return $this
     */
    public function setAddedCost1($added_cost1)
    {
        $this->container['added_cost1'] = $added_cost1;

        return $this;
    }

    /**
     * Gets added_cost2
     *
     * @return double
     */
    public function getAddedCost2()
    {
        return $this->container['added_cost2'];
    }

    /**
     * Sets added_cost2
     *
     * @param double $added_cost2 added_cost2
     *
     * @return $this
     */
    public function setAddedCost2($added_cost2)
    {
        $this->container['added_cost2'] = $added_cost2;

        return $this;
    }

    /**
     * Gets added_cost3
     *
     * @return double
     */
    public function getAddedCost3()
    {
        return $this->container['added_cost3'];
    }

    /**
     * Sets added_cost3
     *
     * @param double $added_cost3 added_cost3
     *
     * @return $this
     */
    public function setAddedCost3($added_cost3)
    {
        $this->container['added_cost3'] = $added_cost3;

        return $this;
    }

    /**
     * Gets picked_by
     *
     * @return string
     */
    public function getPickedBy()
    {
        return $this->container['picked_by'];
    }

    /**
     * Sets picked_by
     *
     * @param string $picked_by picked_by
     *
     * @return $this
     */
    public function setPickedBy($picked_by)
    {
        $this->container['picked_by'] = $picked_by;

        return $this;
    }

    /**
     * Gets received_by
     *
     * @return string
     */
    public function getReceivedBy()
    {
        return $this->container['received_by'];
    }

    /**
     * Sets received_by
     *
     * @param string $received_by received_by
     *
     * @return $this
     */
    public function setReceivedBy($received_by)
    {
        $this->container['received_by'] = $received_by;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets add_cost_method
     *
     * @return string
     */
    public function getAddCostMethod()
    {
        return $this->container['add_cost_method'];
    }

    /**
     * Sets add_cost_method
     *
     * @param string $add_cost_method add_cost_method
     *
     * @return $this
     */
    public function setAddCostMethod($add_cost_method)
    {
        $this->container['add_cost_method'] = $add_cost_method;

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


