<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 17/10/17
 * Time: 2:31 PM
 */

class CiviCRMEntity {

  // Unique instance.
  private static $instance = null;

  /**
   * CiviCRMEntity constructor.
   */
  public function __construct() {
    civicrm_initialize();
  }


  private static function getInstance() {
    // Create the instance if it does not exist.
    if (!isset(self::$instance)) {
      self::$instance = new CiviCRMEntity();
    }

    // Return the unique instance.
    return self::$instance;
  }
  public static function handleException(CiviCRM_API3_Exception $e) {
    $errorMessage = $e->getMessage();
    $errorCode = $e->getErrorCode();
    $errorData = $e->getExtraParams();
    return array(
      'is_error' => 1,
      'error_message' => $errorMessage,
      'error_code' => $errorCode,
      'error_data' => $errorData,
    );
  }


  public static function isError($result) {
    if(isset($result['is_error']) && $result['is_error'] == 1) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public static function createEntity($entityType, $params) {
    self::getInstance();
    try {
      $result = civicrm_api3($entityType, 'create', $params);
      return $result;
    } catch (CiviCRM_API3_Exception $e) {
      // Handle error here.
      self::handleException($e);
    }
  }

  public static function getEntity($entityType, $params) {
    self::getInstance();
    try {
      $result = civicrm_api3($entityType, 'get', $params);
      return $result;
    } catch (CiviCRM_API3_Exception $e) {
      // Handle error here.
      self::handleException($e);
    }
  }




}