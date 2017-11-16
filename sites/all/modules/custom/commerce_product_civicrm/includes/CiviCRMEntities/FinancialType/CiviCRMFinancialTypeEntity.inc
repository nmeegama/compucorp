<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 17/10/17
 * Time: 8:48 PM
 */

class CiviCRMFinancialTypeEntity extends CiviCRMEntity {

  /**
   * CiviCRMFinancialTypeEntity constructor.
   */
  public function __construct() {
    parent::__construct();
  }



  public static function searchFinancialType($params) {
    $result = parent::getEntity('FinancialType', $params);
    return $result;
  }

  public static function createNewFinancialType($params) {
    $result = parent::createEntity('FinancialType', $params);
    return $result;
  }

  public static function getFinancialTypeIdFromResult($result) {
    if(isset($result['id'])) {
      return $result['id'];
    } else {
      return NULL;
    }

  }




}