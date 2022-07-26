<?php
/**
 * QOMain
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
 * QOMain Class Doc Comment
 *
 * @category Class
 * @description QO_Main
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QOMain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QO_Main';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'invoice_id' => 'string',
        'last_saved_date_time' => '\DateTime',
        'debtor_id' => 'string',
        'staff_id' => 'string',
        'invoice_no' => 'string',
        'invoice_init_date' => '\DateTime',
        'invoice_last_date' => '\DateTime',
        'order_no' => 'string',
        'tax_exempt_no' => 'string',
        'whole_sale_invoice' => 'bool',
        'invoice_total' => 'double',
        'invoice_printed' => 'bool',
        'current_history_no' => 'int',
        'status' => 'int',
        'bill_when_complete' => 'int',
        'invoice_type' => 'int',
        'group_supplier_id' => 'string',
        'group_ordered' => 'bool',
        'in_logical_id' => 'string',
        'branch_id' => 'string',
        'qo_reference' => 'string',
        'job_cost_id' => 'string',
        'doc_type' => 'int',
        'back_order_mode' => 'int',
        'expected_delivery_date' => '\DateTime',
        'debtor_contact_name' => 'string',
        'parent_debtor_id' => 'string',
        'price_scheme_id' => 'string',
        'invoice_emailed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'invoice_id' => null,
        'last_saved_date_time' => 'date-time',
        'debtor_id' => null,
        'staff_id' => null,
        'invoice_no' => null,
        'invoice_init_date' => 'date-time',
        'invoice_last_date' => 'date-time',
        'order_no' => null,
        'tax_exempt_no' => null,
        'whole_sale_invoice' => null,
        'invoice_total' => 'double',
        'invoice_printed' => null,
        'current_history_no' => 'int32',
        'status' => 'int32',
        'bill_when_complete' => 'int32',
        'invoice_type' => 'int32',
        'group_supplier_id' => null,
        'group_ordered' => null,
        'in_logical_id' => null,
        'branch_id' => null,
        'qo_reference' => null,
        'job_cost_id' => null,
        'doc_type' => 'int32',
        'back_order_mode' => 'int32',
        'expected_delivery_date' => 'date-time',
        'debtor_contact_name' => null,
        'parent_debtor_id' => null,
        'price_scheme_id' => null,
        'invoice_emailed' => null
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
        'invoice_id' => 'InvoiceID',
        'last_saved_date_time' => 'LastSavedDateTime',
        'debtor_id' => 'DebtorID',
        'staff_id' => 'StaffID',
        'invoice_no' => 'InvoiceNo',
        'invoice_init_date' => 'InvoiceInitDate',
        'invoice_last_date' => 'InvoiceLastDate',
        'order_no' => 'OrderNo',
        'tax_exempt_no' => 'TaxExemptNo',
        'whole_sale_invoice' => 'WholeSaleInvoice',
        'invoice_total' => 'InvoiceTotal',
        'invoice_printed' => 'InvoicePrinted',
        'current_history_no' => 'CurrentHistoryNo',
        'status' => 'Status',
        'bill_when_complete' => 'BillWhenComplete',
        'invoice_type' => 'InvoiceType',
        'group_supplier_id' => 'GroupSupplierID',
        'group_ordered' => 'GroupOrdered',
        'in_logical_id' => 'IN_LogicalID',
        'branch_id' => 'BranchID',
        'qo_reference' => 'QOReference',
        'job_cost_id' => 'JobCostID',
        'doc_type' => 'DocType',
        'back_order_mode' => 'BackOrderMode',
        'expected_delivery_date' => 'ExpectedDeliveryDate',
        'debtor_contact_name' => 'DebtorContactName',
        'parent_debtor_id' => 'ParentDebtorID',
        'price_scheme_id' => 'PriceSchemeID',
        'invoice_emailed' => 'InvoiceEmailed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_id' => 'setInvoiceId',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'debtor_id' => 'setDebtorId',
        'staff_id' => 'setStaffId',
        'invoice_no' => 'setInvoiceNo',
        'invoice_init_date' => 'setInvoiceInitDate',
        'invoice_last_date' => 'setInvoiceLastDate',
        'order_no' => 'setOrderNo',
        'tax_exempt_no' => 'setTaxExemptNo',
        'whole_sale_invoice' => 'setWholeSaleInvoice',
        'invoice_total' => 'setInvoiceTotal',
        'invoice_printed' => 'setInvoicePrinted',
        'current_history_no' => 'setCurrentHistoryNo',
        'status' => 'setStatus',
        'bill_when_complete' => 'setBillWhenComplete',
        'invoice_type' => 'setInvoiceType',
        'group_supplier_id' => 'setGroupSupplierId',
        'group_ordered' => 'setGroupOrdered',
        'in_logical_id' => 'setInLogicalId',
        'branch_id' => 'setBranchId',
        'qo_reference' => 'setQoReference',
        'job_cost_id' => 'setJobCostId',
        'doc_type' => 'setDocType',
        'back_order_mode' => 'setBackOrderMode',
        'expected_delivery_date' => 'setExpectedDeliveryDate',
        'debtor_contact_name' => 'setDebtorContactName',
        'parent_debtor_id' => 'setParentDebtorId',
        'price_scheme_id' => 'setPriceSchemeId',
        'invoice_emailed' => 'setInvoiceEmailed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_id' => 'getInvoiceId',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'debtor_id' => 'getDebtorId',
        'staff_id' => 'getStaffId',
        'invoice_no' => 'getInvoiceNo',
        'invoice_init_date' => 'getInvoiceInitDate',
        'invoice_last_date' => 'getInvoiceLastDate',
        'order_no' => 'getOrderNo',
        'tax_exempt_no' => 'getTaxExemptNo',
        'whole_sale_invoice' => 'getWholeSaleInvoice',
        'invoice_total' => 'getInvoiceTotal',
        'invoice_printed' => 'getInvoicePrinted',
        'current_history_no' => 'getCurrentHistoryNo',
        'status' => 'getStatus',
        'bill_when_complete' => 'getBillWhenComplete',
        'invoice_type' => 'getInvoiceType',
        'group_supplier_id' => 'getGroupSupplierId',
        'group_ordered' => 'getGroupOrdered',
        'in_logical_id' => 'getInLogicalId',
        'branch_id' => 'getBranchId',
        'qo_reference' => 'getQoReference',
        'job_cost_id' => 'getJobCostId',
        'doc_type' => 'getDocType',
        'back_order_mode' => 'getBackOrderMode',
        'expected_delivery_date' => 'getExpectedDeliveryDate',
        'debtor_contact_name' => 'getDebtorContactName',
        'parent_debtor_id' => 'getParentDebtorId',
        'price_scheme_id' => 'getPriceSchemeId',
        'invoice_emailed' => 'getInvoiceEmailed'
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
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['debtor_id'] = isset($data['debtor_id']) ? $data['debtor_id'] : null;
        $this->container['staff_id'] = isset($data['staff_id']) ? $data['staff_id'] : null;
        $this->container['invoice_no'] = isset($data['invoice_no']) ? $data['invoice_no'] : null;
        $this->container['invoice_init_date'] = isset($data['invoice_init_date']) ? $data['invoice_init_date'] : null;
        $this->container['invoice_last_date'] = isset($data['invoice_last_date']) ? $data['invoice_last_date'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['tax_exempt_no'] = isset($data['tax_exempt_no']) ? $data['tax_exempt_no'] : null;
        $this->container['whole_sale_invoice'] = isset($data['whole_sale_invoice']) ? $data['whole_sale_invoice'] : null;
        $this->container['invoice_total'] = isset($data['invoice_total']) ? $data['invoice_total'] : null;
        $this->container['invoice_printed'] = isset($data['invoice_printed']) ? $data['invoice_printed'] : null;
        $this->container['current_history_no'] = isset($data['current_history_no']) ? $data['current_history_no'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bill_when_complete'] = isset($data['bill_when_complete']) ? $data['bill_when_complete'] : null;
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['group_supplier_id'] = isset($data['group_supplier_id']) ? $data['group_supplier_id'] : null;
        $this->container['group_ordered'] = isset($data['group_ordered']) ? $data['group_ordered'] : null;
        $this->container['in_logical_id'] = isset($data['in_logical_id']) ? $data['in_logical_id'] : null;
        $this->container['branch_id'] = isset($data['branch_id']) ? $data['branch_id'] : null;
        $this->container['qo_reference'] = isset($data['qo_reference']) ? $data['qo_reference'] : null;
        $this->container['job_cost_id'] = isset($data['job_cost_id']) ? $data['job_cost_id'] : null;
        $this->container['doc_type'] = isset($data['doc_type']) ? $data['doc_type'] : null;
        $this->container['back_order_mode'] = isset($data['back_order_mode']) ? $data['back_order_mode'] : null;
        $this->container['expected_delivery_date'] = isset($data['expected_delivery_date']) ? $data['expected_delivery_date'] : null;
        $this->container['debtor_contact_name'] = isset($data['debtor_contact_name']) ? $data['debtor_contact_name'] : null;
        $this->container['parent_debtor_id'] = isset($data['parent_debtor_id']) ? $data['parent_debtor_id'] : null;
        $this->container['price_scheme_id'] = isset($data['price_scheme_id']) ? $data['price_scheme_id'] : null;
        $this->container['invoice_emailed'] = isset($data['invoice_emailed']) ? $data['invoice_emailed'] : null;
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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

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
     * Gets invoice_init_date
     *
     * @return \DateTime
     */
    public function getInvoiceInitDate()
    {
        return $this->container['invoice_init_date'];
    }

    /**
     * Sets invoice_init_date
     *
     * @param \DateTime $invoice_init_date invoice_init_date
     *
     * @return $this
     */
    public function setInvoiceInitDate($invoice_init_date)
    {
        $this->container['invoice_init_date'] = $invoice_init_date;

        return $this;
    }

    /**
     * Gets invoice_last_date
     *
     * @return \DateTime
     */
    public function getInvoiceLastDate()
    {
        return $this->container['invoice_last_date'];
    }

    /**
     * Sets invoice_last_date
     *
     * @param \DateTime $invoice_last_date invoice_last_date
     *
     * @return $this
     */
    public function setInvoiceLastDate($invoice_last_date)
    {
        $this->container['invoice_last_date'] = $invoice_last_date;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string $order_no order_no
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets tax_exempt_no
     *
     * @return string
     */
    public function getTaxExemptNo()
    {
        return $this->container['tax_exempt_no'];
    }

    /**
     * Sets tax_exempt_no
     *
     * @param string $tax_exempt_no tax_exempt_no
     *
     * @return $this
     */
    public function setTaxExemptNo($tax_exempt_no)
    {
        $this->container['tax_exempt_no'] = $tax_exempt_no;

        return $this;
    }

    /**
     * Gets whole_sale_invoice
     *
     * @return bool
     */
    public function getWholeSaleInvoice()
    {
        return $this->container['whole_sale_invoice'];
    }

    /**
     * Sets whole_sale_invoice
     *
     * @param bool $whole_sale_invoice whole_sale_invoice
     *
     * @return $this
     */
    public function setWholeSaleInvoice($whole_sale_invoice)
    {
        $this->container['whole_sale_invoice'] = $whole_sale_invoice;

        return $this;
    }

    /**
     * Gets invoice_total
     *
     * @return double
     */
    public function getInvoiceTotal()
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total
     *
     * @param double $invoice_total invoice_total
     *
     * @return $this
     */
    public function setInvoiceTotal($invoice_total)
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets invoice_printed
     *
     * @return bool
     */
    public function getInvoicePrinted()
    {
        return $this->container['invoice_printed'];
    }

    /**
     * Sets invoice_printed
     *
     * @param bool $invoice_printed invoice_printed
     *
     * @return $this
     */
    public function setInvoicePrinted($invoice_printed)
    {
        $this->container['invoice_printed'] = $invoice_printed;

        return $this;
    }

    /**
     * Gets current_history_no
     *
     * @return int
     */
    public function getCurrentHistoryNo()
    {
        return $this->container['current_history_no'];
    }

    /**
     * Sets current_history_no
     *
     * @param int $current_history_no current_history_no
     *
     * @return $this
     */
    public function setCurrentHistoryNo($current_history_no)
    {
        $this->container['current_history_no'] = $current_history_no;

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
     * Gets bill_when_complete
     *
     * @return int
     */
    public function getBillWhenComplete()
    {
        return $this->container['bill_when_complete'];
    }

    /**
     * Sets bill_when_complete
     *
     * @param int $bill_when_complete bill_when_complete
     *
     * @return $this
     */
    public function setBillWhenComplete($bill_when_complete)
    {
        $this->container['bill_when_complete'] = $bill_when_complete;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return int
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param int $invoice_type invoice_type
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets group_supplier_id
     *
     * @return string
     */
    public function getGroupSupplierId()
    {
        return $this->container['group_supplier_id'];
    }

    /**
     * Sets group_supplier_id
     *
     * @param string $group_supplier_id group_supplier_id
     *
     * @return $this
     */
    public function setGroupSupplierId($group_supplier_id)
    {
        $this->container['group_supplier_id'] = $group_supplier_id;

        return $this;
    }

    /**
     * Gets group_ordered
     *
     * @return bool
     */
    public function getGroupOrdered()
    {
        return $this->container['group_ordered'];
    }

    /**
     * Sets group_ordered
     *
     * @param bool $group_ordered group_ordered
     *
     * @return $this
     */
    public function setGroupOrdered($group_ordered)
    {
        $this->container['group_ordered'] = $group_ordered;

        return $this;
    }

    /**
     * Gets in_logical_id
     *
     * @return string
     */
    public function getInLogicalId()
    {
        return $this->container['in_logical_id'];
    }

    /**
     * Sets in_logical_id
     *
     * @param string $in_logical_id in_logical_id
     *
     * @return $this
     */
    public function setInLogicalId($in_logical_id)
    {
        $this->container['in_logical_id'] = $in_logical_id;

        return $this;
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
     * Gets qo_reference
     *
     * @return string
     */
    public function getQoReference()
    {
        return $this->container['qo_reference'];
    }

    /**
     * Sets qo_reference
     *
     * @param string $qo_reference qo_reference
     *
     * @return $this
     */
    public function setQoReference($qo_reference)
    {
        $this->container['qo_reference'] = $qo_reference;

        return $this;
    }

    /**
     * Gets job_cost_id
     *
     * @return string
     */
    public function getJobCostId()
    {
        return $this->container['job_cost_id'];
    }

    /**
     * Sets job_cost_id
     *
     * @param string $job_cost_id job_cost_id
     *
     * @return $this
     */
    public function setJobCostId($job_cost_id)
    {
        $this->container['job_cost_id'] = $job_cost_id;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return int
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param int $doc_type doc_type
     *
     * @return $this
     */
    public function setDocType($doc_type)
    {
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets back_order_mode
     *
     * @return int
     */
    public function getBackOrderMode()
    {
        return $this->container['back_order_mode'];
    }

    /**
     * Sets back_order_mode
     *
     * @param int $back_order_mode back_order_mode
     *
     * @return $this
     */
    public function setBackOrderMode($back_order_mode)
    {
        $this->container['back_order_mode'] = $back_order_mode;

        return $this;
    }

    /**
     * Gets expected_delivery_date
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param \DateTime $expected_delivery_date expected_delivery_date
     *
     * @return $this
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

        return $this;
    }

    /**
     * Gets debtor_contact_name
     *
     * @return string
     */
    public function getDebtorContactName()
    {
        return $this->container['debtor_contact_name'];
    }

    /**
     * Sets debtor_contact_name
     *
     * @param string $debtor_contact_name debtor_contact_name
     *
     * @return $this
     */
    public function setDebtorContactName($debtor_contact_name)
    {
        $this->container['debtor_contact_name'] = $debtor_contact_name;

        return $this;
    }

    /**
     * Gets parent_debtor_id
     *
     * @return string
     */
    public function getParentDebtorId()
    {
        return $this->container['parent_debtor_id'];
    }

    /**
     * Sets parent_debtor_id
     *
     * @param string $parent_debtor_id parent_debtor_id
     *
     * @return $this
     */
    public function setParentDebtorId($parent_debtor_id)
    {
        $this->container['parent_debtor_id'] = $parent_debtor_id;

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
     * Gets invoice_emailed
     *
     * @return bool
     */
    public function getInvoiceEmailed()
    {
        return $this->container['invoice_emailed'];
    }

    /**
     * Sets invoice_emailed
     *
     * @param bool $invoice_emailed invoice_emailed
     *
     * @return $this
     */
    public function setInvoiceEmailed($invoice_emailed)
    {
        $this->container['invoice_emailed'] = $invoice_emailed;

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


