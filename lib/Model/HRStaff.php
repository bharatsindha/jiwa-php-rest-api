<?php
/**
 * HRStaff
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
 * HRStaff Class Doc Comment
 *
 * @category Class
 * @description HR_Staff
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HRStaff implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HR_Staff';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'staff_id' => 'string',
        'last_saved_date_time' => '\DateTime',
        'title' => 'string',
        'f_name' => 'string',
        's_name' => 'string',
        'position1' => 'string',
        'position2' => 'string',
        'password' => 'string',
        'is_active' => 'bool',
        'email_address' => 'string',
        'email_display_name' => 'string',
        'smtp_username' => 'string',
        'smtp_password' => 'string',
        'username' => 'string',
        'must_change_password_next_login' => 'bool',
        'password_last_changed_date_time' => '\DateTime',
        'sql_login' => 'string',
        'sql_password' => 'string',
        'report_sql_login' => 'string',
        'report_sql_password' => 'string',
        'picture' => 'string',
        'hr_departments_rec_id' => 'string',
        'extension' => 'string',
        'mobile' => 'string',
        'use_prepaid_labour_packs' => 'bool',
        'authentication_modes' => 'int',
        'windows_domain_account' => 'string',
        'smtp_password_last_changed_date_time' => '\DateTime',
        'sy_menu_rec_id' => 'string',
        'sy_print_group_rec_id' => 'string',
        'sql_login_last_saved_date_time' => '\DateTime',
        'reports_login_last_saved_date_time' => '\DateTime',
        'is_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'staff_id' => null,
        'last_saved_date_time' => 'date-time',
        'title' => null,
        'f_name' => null,
        's_name' => null,
        'position1' => null,
        'position2' => null,
        'password' => null,
        'is_active' => null,
        'email_address' => null,
        'email_display_name' => null,
        'smtp_username' => null,
        'smtp_password' => null,
        'username' => null,
        'must_change_password_next_login' => null,
        'password_last_changed_date_time' => 'date-time',
        'sql_login' => null,
        'sql_password' => null,
        'report_sql_login' => null,
        'report_sql_password' => null,
        'picture' => 'binary',
        'hr_departments_rec_id' => null,
        'extension' => null,
        'mobile' => null,
        'use_prepaid_labour_packs' => null,
        'authentication_modes' => 'int32',
        'windows_domain_account' => null,
        'smtp_password_last_changed_date_time' => 'date-time',
        'sy_menu_rec_id' => null,
        'sy_print_group_rec_id' => null,
        'sql_login_last_saved_date_time' => 'date-time',
        'reports_login_last_saved_date_time' => 'date-time',
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
        'staff_id' => 'StaffID',
        'last_saved_date_time' => 'LastSavedDateTime',
        'title' => 'Title',
        'f_name' => 'FName',
        's_name' => 'SName',
        'position1' => 'Position1',
        'position2' => 'Position2',
        'password' => 'Password',
        'is_active' => 'IsActive',
        'email_address' => 'EmailAddress',
        'email_display_name' => 'EmailDisplayName',
        'smtp_username' => 'SMTPUsername',
        'smtp_password' => 'SMTPPassword',
        'username' => 'Username',
        'must_change_password_next_login' => 'MustChangePasswordNextLogin',
        'password_last_changed_date_time' => 'PasswordLastChangedDateTime',
        'sql_login' => 'SQLLogin',
        'sql_password' => 'SQLPassword',
        'report_sql_login' => 'ReportSQLLogin',
        'report_sql_password' => 'ReportSQLPassword',
        'picture' => 'Picture',
        'hr_departments_rec_id' => 'HR_Departments_RecID',
        'extension' => 'Extension',
        'mobile' => 'Mobile',
        'use_prepaid_labour_packs' => 'UsePrepaidLabourPacks',
        'authentication_modes' => 'AuthenticationModes',
        'windows_domain_account' => 'WindowsDomainAccount',
        'smtp_password_last_changed_date_time' => 'SMTPPasswordLastChangedDateTime',
        'sy_menu_rec_id' => 'SY_Menu_RecID',
        'sy_print_group_rec_id' => 'SY_PrintGroup_RecID',
        'sql_login_last_saved_date_time' => 'SQLLoginLastSavedDateTime',
        'reports_login_last_saved_date_time' => 'ReportsLoginLastSavedDateTime',
        'is_enabled' => 'IsEnabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'staff_id' => 'setStaffId',
        'last_saved_date_time' => 'setLastSavedDateTime',
        'title' => 'setTitle',
        'f_name' => 'setFName',
        's_name' => 'setSName',
        'position1' => 'setPosition1',
        'position2' => 'setPosition2',
        'password' => 'setPassword',
        'is_active' => 'setIsActive',
        'email_address' => 'setEmailAddress',
        'email_display_name' => 'setEmailDisplayName',
        'smtp_username' => 'setSmtpUsername',
        'smtp_password' => 'setSmtpPassword',
        'username' => 'setUsername',
        'must_change_password_next_login' => 'setMustChangePasswordNextLogin',
        'password_last_changed_date_time' => 'setPasswordLastChangedDateTime',
        'sql_login' => 'setSqlLogin',
        'sql_password' => 'setSqlPassword',
        'report_sql_login' => 'setReportSqlLogin',
        'report_sql_password' => 'setReportSqlPassword',
        'picture' => 'setPicture',
        'hr_departments_rec_id' => 'setHrDepartmentsRecId',
        'extension' => 'setExtension',
        'mobile' => 'setMobile',
        'use_prepaid_labour_packs' => 'setUsePrepaidLabourPacks',
        'authentication_modes' => 'setAuthenticationModes',
        'windows_domain_account' => 'setWindowsDomainAccount',
        'smtp_password_last_changed_date_time' => 'setSmtpPasswordLastChangedDateTime',
        'sy_menu_rec_id' => 'setSyMenuRecId',
        'sy_print_group_rec_id' => 'setSyPrintGroupRecId',
        'sql_login_last_saved_date_time' => 'setSqlLoginLastSavedDateTime',
        'reports_login_last_saved_date_time' => 'setReportsLoginLastSavedDateTime',
        'is_enabled' => 'setIsEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'staff_id' => 'getStaffId',
        'last_saved_date_time' => 'getLastSavedDateTime',
        'title' => 'getTitle',
        'f_name' => 'getFName',
        's_name' => 'getSName',
        'position1' => 'getPosition1',
        'position2' => 'getPosition2',
        'password' => 'getPassword',
        'is_active' => 'getIsActive',
        'email_address' => 'getEmailAddress',
        'email_display_name' => 'getEmailDisplayName',
        'smtp_username' => 'getSmtpUsername',
        'smtp_password' => 'getSmtpPassword',
        'username' => 'getUsername',
        'must_change_password_next_login' => 'getMustChangePasswordNextLogin',
        'password_last_changed_date_time' => 'getPasswordLastChangedDateTime',
        'sql_login' => 'getSqlLogin',
        'sql_password' => 'getSqlPassword',
        'report_sql_login' => 'getReportSqlLogin',
        'report_sql_password' => 'getReportSqlPassword',
        'picture' => 'getPicture',
        'hr_departments_rec_id' => 'getHrDepartmentsRecId',
        'extension' => 'getExtension',
        'mobile' => 'getMobile',
        'use_prepaid_labour_packs' => 'getUsePrepaidLabourPacks',
        'authentication_modes' => 'getAuthenticationModes',
        'windows_domain_account' => 'getWindowsDomainAccount',
        'smtp_password_last_changed_date_time' => 'getSmtpPasswordLastChangedDateTime',
        'sy_menu_rec_id' => 'getSyMenuRecId',
        'sy_print_group_rec_id' => 'getSyPrintGroupRecId',
        'sql_login_last_saved_date_time' => 'getSqlLoginLastSavedDateTime',
        'reports_login_last_saved_date_time' => 'getReportsLoginLastSavedDateTime',
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
        $this->container['staff_id'] = isset($data['staff_id']) ? $data['staff_id'] : null;
        $this->container['last_saved_date_time'] = isset($data['last_saved_date_time']) ? $data['last_saved_date_time'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['f_name'] = isset($data['f_name']) ? $data['f_name'] : null;
        $this->container['s_name'] = isset($data['s_name']) ? $data['s_name'] : null;
        $this->container['position1'] = isset($data['position1']) ? $data['position1'] : null;
        $this->container['position2'] = isset($data['position2']) ? $data['position2'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['email_display_name'] = isset($data['email_display_name']) ? $data['email_display_name'] : null;
        $this->container['smtp_username'] = isset($data['smtp_username']) ? $data['smtp_username'] : null;
        $this->container['smtp_password'] = isset($data['smtp_password']) ? $data['smtp_password'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['must_change_password_next_login'] = isset($data['must_change_password_next_login']) ? $data['must_change_password_next_login'] : null;
        $this->container['password_last_changed_date_time'] = isset($data['password_last_changed_date_time']) ? $data['password_last_changed_date_time'] : null;
        $this->container['sql_login'] = isset($data['sql_login']) ? $data['sql_login'] : null;
        $this->container['sql_password'] = isset($data['sql_password']) ? $data['sql_password'] : null;
        $this->container['report_sql_login'] = isset($data['report_sql_login']) ? $data['report_sql_login'] : null;
        $this->container['report_sql_password'] = isset($data['report_sql_password']) ? $data['report_sql_password'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['hr_departments_rec_id'] = isset($data['hr_departments_rec_id']) ? $data['hr_departments_rec_id'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['use_prepaid_labour_packs'] = isset($data['use_prepaid_labour_packs']) ? $data['use_prepaid_labour_packs'] : null;
        $this->container['authentication_modes'] = isset($data['authentication_modes']) ? $data['authentication_modes'] : null;
        $this->container['windows_domain_account'] = isset($data['windows_domain_account']) ? $data['windows_domain_account'] : null;
        $this->container['smtp_password_last_changed_date_time'] = isset($data['smtp_password_last_changed_date_time']) ? $data['smtp_password_last_changed_date_time'] : null;
        $this->container['sy_menu_rec_id'] = isset($data['sy_menu_rec_id']) ? $data['sy_menu_rec_id'] : null;
        $this->container['sy_print_group_rec_id'] = isset($data['sy_print_group_rec_id']) ? $data['sy_print_group_rec_id'] : null;
        $this->container['sql_login_last_saved_date_time'] = isset($data['sql_login_last_saved_date_time']) ? $data['sql_login_last_saved_date_time'] : null;
        $this->container['reports_login_last_saved_date_time'] = isset($data['reports_login_last_saved_date_time']) ? $data['reports_login_last_saved_date_time'] : null;
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets f_name
     *
     * @return string
     */
    public function getFName()
    {
        return $this->container['f_name'];
    }

    /**
     * Sets f_name
     *
     * @param string $f_name f_name
     *
     * @return $this
     */
    public function setFName($f_name)
    {
        $this->container['f_name'] = $f_name;

        return $this;
    }

    /**
     * Gets s_name
     *
     * @return string
     */
    public function getSName()
    {
        return $this->container['s_name'];
    }

    /**
     * Sets s_name
     *
     * @param string $s_name s_name
     *
     * @return $this
     */
    public function setSName($s_name)
    {
        $this->container['s_name'] = $s_name;

        return $this;
    }

    /**
     * Gets position1
     *
     * @return string
     */
    public function getPosition1()
    {
        return $this->container['position1'];
    }

    /**
     * Sets position1
     *
     * @param string $position1 position1
     *
     * @return $this
     */
    public function setPosition1($position1)
    {
        $this->container['position1'] = $position1;

        return $this;
    }

    /**
     * Gets position2
     *
     * @return string
     */
    public function getPosition2()
    {
        return $this->container['position2'];
    }

    /**
     * Sets position2
     *
     * @param string $position2 position2
     *
     * @return $this
     */
    public function setPosition2($position2)
    {
        $this->container['position2'] = $position2;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
     * Gets email_display_name
     *
     * @return string
     */
    public function getEmailDisplayName()
    {
        return $this->container['email_display_name'];
    }

    /**
     * Sets email_display_name
     *
     * @param string $email_display_name email_display_name
     *
     * @return $this
     */
    public function setEmailDisplayName($email_display_name)
    {
        $this->container['email_display_name'] = $email_display_name;

        return $this;
    }

    /**
     * Gets smtp_username
     *
     * @return string
     */
    public function getSmtpUsername()
    {
        return $this->container['smtp_username'];
    }

    /**
     * Sets smtp_username
     *
     * @param string $smtp_username smtp_username
     *
     * @return $this
     */
    public function setSmtpUsername($smtp_username)
    {
        $this->container['smtp_username'] = $smtp_username;

        return $this;
    }

    /**
     * Gets smtp_password
     *
     * @return string
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string $smtp_password smtp_password
     *
     * @return $this
     */
    public function setSmtpPassword($smtp_password)
    {
        $this->container['smtp_password'] = $smtp_password;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets must_change_password_next_login
     *
     * @return bool
     */
    public function getMustChangePasswordNextLogin()
    {
        return $this->container['must_change_password_next_login'];
    }

    /**
     * Sets must_change_password_next_login
     *
     * @param bool $must_change_password_next_login must_change_password_next_login
     *
     * @return $this
     */
    public function setMustChangePasswordNextLogin($must_change_password_next_login)
    {
        $this->container['must_change_password_next_login'] = $must_change_password_next_login;

        return $this;
    }

    /**
     * Gets password_last_changed_date_time
     *
     * @return \DateTime
     */
    public function getPasswordLastChangedDateTime()
    {
        return $this->container['password_last_changed_date_time'];
    }

    /**
     * Sets password_last_changed_date_time
     *
     * @param \DateTime $password_last_changed_date_time password_last_changed_date_time
     *
     * @return $this
     */
    public function setPasswordLastChangedDateTime($password_last_changed_date_time)
    {
        $this->container['password_last_changed_date_time'] = $password_last_changed_date_time;

        return $this;
    }

    /**
     * Gets sql_login
     *
     * @return string
     */
    public function getSqlLogin()
    {
        return $this->container['sql_login'];
    }

    /**
     * Sets sql_login
     *
     * @param string $sql_login sql_login
     *
     * @return $this
     */
    public function setSqlLogin($sql_login)
    {
        $this->container['sql_login'] = $sql_login;

        return $this;
    }

    /**
     * Gets sql_password
     *
     * @return string
     */
    public function getSqlPassword()
    {
        return $this->container['sql_password'];
    }

    /**
     * Sets sql_password
     *
     * @param string $sql_password sql_password
     *
     * @return $this
     */
    public function setSqlPassword($sql_password)
    {
        $this->container['sql_password'] = $sql_password;

        return $this;
    }

    /**
     * Gets report_sql_login
     *
     * @return string
     */
    public function getReportSqlLogin()
    {
        return $this->container['report_sql_login'];
    }

    /**
     * Sets report_sql_login
     *
     * @param string $report_sql_login report_sql_login
     *
     * @return $this
     */
    public function setReportSqlLogin($report_sql_login)
    {
        $this->container['report_sql_login'] = $report_sql_login;

        return $this;
    }

    /**
     * Gets report_sql_password
     *
     * @return string
     */
    public function getReportSqlPassword()
    {
        return $this->container['report_sql_password'];
    }

    /**
     * Sets report_sql_password
     *
     * @param string $report_sql_password report_sql_password
     *
     * @return $this
     */
    public function setReportSqlPassword($report_sql_password)
    {
        $this->container['report_sql_password'] = $report_sql_password;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string $picture picture
     *
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets hr_departments_rec_id
     *
     * @return string
     */
    public function getHrDepartmentsRecId()
    {
        return $this->container['hr_departments_rec_id'];
    }

    /**
     * Sets hr_departments_rec_id
     *
     * @param string $hr_departments_rec_id hr_departments_rec_id
     *
     * @return $this
     */
    public function setHrDepartmentsRecId($hr_departments_rec_id)
    {
        $this->container['hr_departments_rec_id'] = $hr_departments_rec_id;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string $extension extension
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string $mobile mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets use_prepaid_labour_packs
     *
     * @return bool
     */
    public function getUsePrepaidLabourPacks()
    {
        return $this->container['use_prepaid_labour_packs'];
    }

    /**
     * Sets use_prepaid_labour_packs
     *
     * @param bool $use_prepaid_labour_packs use_prepaid_labour_packs
     *
     * @return $this
     */
    public function setUsePrepaidLabourPacks($use_prepaid_labour_packs)
    {
        $this->container['use_prepaid_labour_packs'] = $use_prepaid_labour_packs;

        return $this;
    }

    /**
     * Gets authentication_modes
     *
     * @return int
     */
    public function getAuthenticationModes()
    {
        return $this->container['authentication_modes'];
    }

    /**
     * Sets authentication_modes
     *
     * @param int $authentication_modes authentication_modes
     *
     * @return $this
     */
    public function setAuthenticationModes($authentication_modes)
    {
        $this->container['authentication_modes'] = $authentication_modes;

        return $this;
    }

    /**
     * Gets windows_domain_account
     *
     * @return string
     */
    public function getWindowsDomainAccount()
    {
        return $this->container['windows_domain_account'];
    }

    /**
     * Sets windows_domain_account
     *
     * @param string $windows_domain_account windows_domain_account
     *
     * @return $this
     */
    public function setWindowsDomainAccount($windows_domain_account)
    {
        $this->container['windows_domain_account'] = $windows_domain_account;

        return $this;
    }

    /**
     * Gets smtp_password_last_changed_date_time
     *
     * @return \DateTime
     */
    public function getSmtpPasswordLastChangedDateTime()
    {
        return $this->container['smtp_password_last_changed_date_time'];
    }

    /**
     * Sets smtp_password_last_changed_date_time
     *
     * @param \DateTime $smtp_password_last_changed_date_time smtp_password_last_changed_date_time
     *
     * @return $this
     */
    public function setSmtpPasswordLastChangedDateTime($smtp_password_last_changed_date_time)
    {
        $this->container['smtp_password_last_changed_date_time'] = $smtp_password_last_changed_date_time;

        return $this;
    }

    /**
     * Gets sy_menu_rec_id
     *
     * @return string
     */
    public function getSyMenuRecId()
    {
        return $this->container['sy_menu_rec_id'];
    }

    /**
     * Sets sy_menu_rec_id
     *
     * @param string $sy_menu_rec_id sy_menu_rec_id
     *
     * @return $this
     */
    public function setSyMenuRecId($sy_menu_rec_id)
    {
        $this->container['sy_menu_rec_id'] = $sy_menu_rec_id;

        return $this;
    }

    /**
     * Gets sy_print_group_rec_id
     *
     * @return string
     */
    public function getSyPrintGroupRecId()
    {
        return $this->container['sy_print_group_rec_id'];
    }

    /**
     * Sets sy_print_group_rec_id
     *
     * @param string $sy_print_group_rec_id sy_print_group_rec_id
     *
     * @return $this
     */
    public function setSyPrintGroupRecId($sy_print_group_rec_id)
    {
        $this->container['sy_print_group_rec_id'] = $sy_print_group_rec_id;

        return $this;
    }

    /**
     * Gets sql_login_last_saved_date_time
     *
     * @return \DateTime
     */
    public function getSqlLoginLastSavedDateTime()
    {
        return $this->container['sql_login_last_saved_date_time'];
    }

    /**
     * Sets sql_login_last_saved_date_time
     *
     * @param \DateTime $sql_login_last_saved_date_time sql_login_last_saved_date_time
     *
     * @return $this
     */
    public function setSqlLoginLastSavedDateTime($sql_login_last_saved_date_time)
    {
        $this->container['sql_login_last_saved_date_time'] = $sql_login_last_saved_date_time;

        return $this;
    }

    /**
     * Gets reports_login_last_saved_date_time
     *
     * @return \DateTime
     */
    public function getReportsLoginLastSavedDateTime()
    {
        return $this->container['reports_login_last_saved_date_time'];
    }

    /**
     * Sets reports_login_last_saved_date_time
     *
     * @param \DateTime $reports_login_last_saved_date_time reports_login_last_saved_date_time
     *
     * @return $this
     */
    public function setReportsLoginLastSavedDateTime($reports_login_last_saved_date_time)
    {
        $this->container['reports_login_last_saved_date_time'] = $reports_login_last_saved_date_time;

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

