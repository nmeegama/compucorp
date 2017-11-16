<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 17/10/17
 * Time: 10:03 PM
 */

class CiviCRMMembershipEntity extends CiviCRMEntity {

  /**
   * CiviCRMMembershipEntity constructor.
   */
  public function __construct() {
    parent::__construct();
  }


  public static function createMembership($params) {
    parent::createEntity('Membership', $params);
  }


  public static function searchMembership($params) {
    $result = parent::getEntity('Membership', $params);
    return $result;
  }
}