<?php
/**
 * @return mixed
 * Config form
 */
function commerce_product_civicrm_admin_form($form, &$form_state) {
  //// Get financial types. ////
  /// TODO: remove this code once synced with commerce_civicrm module
  $result = CiviCRMFinancialTypeEntity::searchFinancialType(
    array('is_active' => 1)
  );
  $types  = array(0 => t('Select a type...'));
  foreach ($result['values'] as $id => $type) {
    $types[$type['id']] = $type['name'];
  }

  ///// End get ////

  $form = array();

  /// TODO: remove finnacial type field.
  $form['commerce_civicrm_product_financial_type_id'] = array(
    '#type'          => 'select',
    '#title'         => t('Financial type'),
    '#default_value' => variable_get(
      'commerce_civicrm_product_financial_type_id',
      1
    ),
    '#options'       => $types,
    '#required'      => TRUE,
    '#description'   => t(
      'Select a financial type for purchases, making a new type with a name like "Drupal purchase" is recommended.'
    ),
  );

  /// end financial type field.
  module_load_include('inc', 'commerce_product_civicrm', 'includes/commerce_product_civicrm.utilities');
  $commerce_product_types = commerce_product_civicrm_get_all_coomerce_product_types(
  );
  $memberships            = CiviCRMMembershipTypeEntity::searchMembershipType(
    array('is_active' => 1)
  );
  $membership_options     = array(0 => 'Select a membership to assign');
  foreach ($memberships['values'] as $id => $membership) {
    $membership_options[$membership['id']] = $membership['name'];
  }

  $saved_membership_json  = variable_get('commerce_product_civicrm_membership');
  $saved_membership_array = json_decode($saved_membership_json, TRUE);

  $form['commerce_product_civicrm_membership']['#tree'] = TRUE;
  foreach ($commerce_product_types as $key => $commerce_product_type) {

    $form['commerce_product_civicrm_membership'][$commerce_product_type['type']] = array(
      '#type'        => 'fieldset',
      '#title'       => t(
        'Settings for commerce product type : @type',
        array('@type' => $commerce_product_type['name'])
      ),
      '#collapsible' => TRUE,
      '#collapsed'   => !$saved_membership_array[$commerce_product_type['type']]['membership_needed'],
    );

    $form['commerce_product_civicrm_membership'][$commerce_product_type['type']]['membership_needed'] = array(
      '#type'          => 'checkbox',
      '#title'         => t('Create membership when purchasing.'),
      '#description'   => t(
        'Select if a membership needs to be created when buying a product.'
      ),
      '#default_value' => $saved_membership_array[$commerce_product_type['type']]['membership_needed'],

    );

    $form['commerce_product_civicrm_membership'][$commerce_product_type['type']]['membership_id'] = array(
      '#type'          => 'select',
      '#title'         => t('Membership to assign when purchasing products'),
      '#options'       => $membership_options,
      '#default_value' => $saved_membership_array[$commerce_product_type['type']]['membership_id'],
      '#states'        => array(
        'visible' => array(
          ':input[name="commerce_product_civicrm_membership[' . $commerce_product_type['type'] . '][membership_needed]"]' => array('checked' => TRUE),
        ),
      ),
    );

  }

  $form['submit'] = array(
    '#type'  => 'submit',
    '#value' => t('Save settings'),
  );

  return $form;

}

/**
 * @param $form
 * @param $form_state
 * Submit callback for config form
 */
function commerce_product_civicrm_admin_form_submit($form, &$form_state) {
  $values = $form_state['values'];
  variable_set(
    'commerce_civicrm_product_financial_type_id',
    $values['commerce_civicrm_product_financial_type_id']
  );
  variable_set(
    'commerce_product_civicrm_membership',
    json_encode($values['commerce_product_civicrm_membership'])
  );

}




