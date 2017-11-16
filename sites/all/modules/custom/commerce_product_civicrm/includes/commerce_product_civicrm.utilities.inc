<?php

/**
 * A function to get the user's CiviCRM contact id. In this case the users is
 * the responsible party for creating the order
 *
 * @param $order
 *
 * @return null
 */
function commerce_product_civicrm_get_civicrm_contact_id_of_buyer($order) {
  $params = array(
    'email' => $order->mail,
  );

  $result = CiviCRMContactEntity::searchContact($params);
  return CiviCRMContactEntity::getContactIdFromResult($result);
}

/**
 * A function to get all product types.
 */
function commerce_product_civicrm_get_all_coomerce_product_types() {
  return db_query('SELECT * FROM {commerce_product_type}')->fetchAllAssoc(
    'type',
    PDO::FETCH_ASSOC
  );
}

/**
 * A function to create a CiviCRM membership
 */
function commerce_product_civicrm_create_civicrm_membership(
  $cid,
  $mid,
  $source
) {
  //TODO: Handle the memembership status since the payment is not yet done
  $params = array(
    'contact_id'         => $cid,
    'membership_type_id' => $mid,
    'source'             => $source,
    'join_date'          => date('Y-m-d'),
    'start_date'         => date('Y-m-d'),
  );
  CiviCRMMembershipEntity::createMembership($params);
}

/**
 * A function to search a CiviCRM membership
 */
function commerce_product_civicrm_search_civicrm_membership($cid, $mid) {
  $params = array(
    'contact_id'         => $cid,
    'membership_type_id' => $mid,
  );
  $result = CiviCRMMembershipEntity::searchMembership($params);
  return $result;
}

/**
 * A function to check if a CiviCRM membership exist
 */
function commerce_product_civicrm_is_exist_civicrm_membership($cid, $mid) {
  $result = commerce_product_civicrm_search_civicrm_membership($cid, $mid);
  if ($result['values']) {
    return TRUE;
  }
  else {
    return FALSE;
  }
}

/**
 * A function to create a CiviCRM Contribution
 */
function commerce_product_civicrm_create_civicrmcontribution(
  $cid,
  $fid,
  $source,
  $amt,
  $currency
) {
  //TODO: Make the contribution in-sync with the commerce_civicrm module
  //Creating a contribution with pay later
  $params = array(
    'contact_id'             => $cid,
    'receive_date'           => date('Ymd'),
    'total_amount'           => $amt,
    'currency'               => $currency,
    'financial_type_id'      => $fid,
    'is_pay_later'           => 1,
    'source'                 => $source,
    'contribution_status_id' => 2,
  );
  CiviCRMContributionEntity::createContribution($params);
}
