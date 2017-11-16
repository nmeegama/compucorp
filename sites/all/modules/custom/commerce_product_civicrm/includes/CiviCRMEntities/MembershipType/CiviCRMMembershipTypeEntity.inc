<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 17/10/17
 * Time: 10:03 PM
 */

class CiviCRMMembershipTypeEntity extends CiviCRMEntity {

  /**
   * CiviCRMMembershipTypeEntity constructor.
   */
  public function __construct() {
    parent::__construct();
  }


  public static function createMembershipType($params) {
    parent::createEntity('MembershipType', $params);
  }


  public static function searchMembershipType($params) {
    $result = parent::getEntity('MembershipType', $params);
    return $result;
  }
}