<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Financial/FinancialTrxn.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:21185c4929ef1a8d126c72733cc7ad1d)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Financial_DAO_FinancialTrxn constructor.
 */
class CRM_Financial_DAO_FinancialTrxn extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_financial_trxn';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to financial_account table.
   *
   * @var int unsigned
   */
  public $from_financial_account_id;
  /**
   * FK to financial_financial_account table.
   *
   * @var int unsigned
   */
  public $to_financial_account_id;
  /**
   * date transaction occurred
   *
   * @var datetime
   */
  public $trxn_date;
  /**
   * amount of transaction
   *
   * @var float
   */
  public $total_amount;
  /**
   * actual processor fee if known - may be 0.
   *
   * @var float
   */
  public $fee_amount;
  /**
   * actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.
   *
   * @var float
   */
  public $net_amount;
  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;
  /**
   * Is this entry either a payment or a reversal of a payment?
   *
   * @var boolean
   */
  public $is_payment;
  /**
   * Transaction id supplied by external processor. This may not be unique.
   *
   * @var string
   */
  public $trxn_id;
  /**
   * processor result code
   *
   * @var string
   */
  public $trxn_result_code;
  /**
   * pseudo FK to civicrm_option_value of contribution_status_id option_group
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * Payment Processor for this financial transaction
   *
   * @var int unsigned
   */
  public $payment_processor_id;
  /**
   * FK to payment_instrument option group values
   *
   * @var int unsigned
   */
  public $payment_instrument_id;
  /**
   * FK to accept_creditcard option group values
   *
   * @var int unsigned
   */
  public $card_type_id;
  /**
   * Check number
   *
   * @var string
   */
  public $check_number;
  /**
   * Last 4 digits of credit card
   *
   * @var string
   */
  public $pan_truncation;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_financial_trxn';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'from_financial_account_id', 'civicrm_financial_account', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'to_financial_account_id', 'civicrm_financial_account', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'payment_processor_id', 'civicrm_payment_processor', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Transaction ID') ,
          'required' => true,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
        ) ,
        'from_financial_account_id' => array(
          'name' => 'from_financial_account_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Transaction From Account') ,
          'description' => 'FK to financial_account table.',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialAccount',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_account',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'to_financial_account_id' => array(
          'name' => 'to_financial_account_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Transaction To Account') ,
          'description' => 'FK to financial_financial_account table.',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialAccount',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_account',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
        'trxn_date' => array(
          'name' => 'trxn_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Financial Transaction Date') ,
          'description' => 'date transaction occurred',
          'default' => 'NULL',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ) ,
        ) ,
        'total_amount' => array(
          'name' => 'total_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Financial Total Amount') ,
          'description' => 'amount of transaction',
          'required' => true,
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
        ) ,
        'fee_amount' => array(
          'name' => 'fee_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Financial Fee Amount') ,
          'description' => 'actual processor fee if known - may be 0.',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
        ) ,
        'net_amount' => array(
          'name' => 'net_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Financial Net Amount') ,
          'description' => 'actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.',
          'precision' => array(
            20,
            2
          ) ,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
        ) ,
        'currency' => array(
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Financial Currency') ,
          'description' => '3 character string, value from config setting or input via user.',
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'import' => true,
          'where' => 'civicrm_financial_trxn.currency',
          'headerPattern' => '/cur(rency)?/i',
          'dataPattern' => '/^[A-Z]{3}$/',
          'export' => true,
          'default' => 'NULL',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
          )
        ) ,
        'is_payment' => array(
          'name' => 'is_payment',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Payment?') ,
          'description' => 'Is this entry either a payment or a reversal of a payment?',
          'import' => true,
          'where' => 'civicrm_financial_trxn.is_payment',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
        ) ,
        'trxn_id' => array(
          'name' => 'trxn_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Transaction ID') ,
          'description' => 'Transaction id supplied by external processor. This may not be unique.',
          'maxlength' => 255,
          'size' => 10,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'trxn_result_code' => array(
          'name' => 'trxn_result_code',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Transaction Result Code') ,
          'description' => 'processor result code',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Transaction Status Id') ,
          'description' => 'pseudo FK to civicrm_option_value of contribution_status_id option_group',
          'import' => true,
          'where' => 'civicrm_financial_trxn.status_id',
          'headerPattern' => '/status/i',
          'dataPattern' => '',
          'export' => true,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'pseudoconstant' => array(
            'optionGroupName' => 'contribution_status',
            'optionEditPath' => 'civicrm/admin/options/contribution_status',
          )
        ) ,
        'payment_processor_id' => array(
          'name' => 'payment_processor_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Payment Processor') ,
          'description' => 'Payment Processor for this financial transaction',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_PaymentProcessor',
        ) ,
        'financial_trxn_payment_instrument_id' => array(
          'name' => 'payment_instrument_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Payment Method') ,
          'description' => 'FK to payment_instrument option group values',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'payment_instrument',
            'optionEditPath' => 'civicrm/admin/options/payment_instrument',
          )
        ) ,
        'financial_trxn_card_type_id' => array(
          'name' => 'card_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Card Type ID') ,
          'description' => 'FK to accept_creditcard option group values',
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'accept_creditcard',
            'optionEditPath' => 'civicrm/admin/options/accept_creditcard',
          )
        ) ,
        'financial_trxn_check_number' => array(
          'name' => 'check_number',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Check Number') ,
          'description' => 'Check number',
          'maxlength' => 255,
          'size' => 6,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'financial_trxn_pan_truncation' => array(
          'name' => 'pan_truncation',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Pan Truncation') ,
          'description' => 'Last 4 digits of credit card',
          'maxlength' => 4,
          'size' => 4,
          'table_name' => 'civicrm_financial_trxn',
          'entity' => 'FinancialTrxn',
          'bao' => 'CRM_Financial_DAO_FinancialTrxn',
          'localizable' => 0,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'financial_trxn', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'financial_trxn', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array(
      'UI_ftrxn_trxn_id' => array(
        'name' => 'UI_ftrxn_trxn_id',
        'field' => array(
          0 => 'trxn_id',
        ) ,
        'localizable' => false,
        'sig' => 'civicrm_financial_trxn::0::trxn_id',
      ) ,
      'UI_ftrxn_payment_instrument_id' => array(
        'name' => 'UI_ftrxn_payment_instrument_id',
        'field' => array(
          0 => 'payment_instrument_id',
        ) ,
        'localizable' => false,
        'sig' => 'civicrm_financial_trxn::0::payment_instrument_id',
      ) ,
      'UI_ftrxn_check_number' => array(
        'name' => 'UI_ftrxn_check_number',
        'field' => array(
          0 => 'check_number',
        ) ,
        'localizable' => false,
        'sig' => 'civicrm_financial_trxn::0::check_number',
      ) ,
    );
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
