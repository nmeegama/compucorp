<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 17/10/17
 * Time: 8:48 PM
 */

class CiviCRMContactEntity extends CiviCRMEntity {

  /**
   * CiviCRMContactEntity constructor.
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * @return int|NULL
   * Current logged in users contact id
   */
  public static function getCurrentUsersContactID() {
    $civi_contact_id = CRM_Core_Session::singleton()->getLoggedInContactID();
    return $civi_contact_id;
  }

  public static function searchContact($params) {
    $result = parent::getEntity('Contact', $params);
    return $result;
  }

  public static function createNewContact($params) {
    $result = parent::createEntity('Contact', $params);
    return $result;
  }

  public static function getContactIdFromResult($result) {
    if(isset($result['id'])) {
      return $result['id'];
    } else {
      return NULL;
    }

  }




}