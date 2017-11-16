<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 17/10/17
 * Time: 10:03 PM
 */

class CiviCRMContributionEntity extends CiviCRMEntity {

  /**
   * CiviCRMContributionEntity constructor.
   */
  public function __construct() {
    parent::__construct();
  }


  public static function createContribution($params) {
    parent::createEntity('Contribution', $params);
  }

  public static function searchContribution($params) {
    $result = parent::getEntity('Contribution', $params);
    return $result;
  }
}