<?php
/**
 * Created by PhpStorm.
 * User: nmeegama
 * Date: 10/11/17
 * Time: 10:06 AM
 */

function craft_preprocess_user_profile(&$variables) {
  //kpr($variables);
  $temp = $variables['user_profile'];
  unset($variables['user_profile']);
  if(isset($temp['Designer_Profile_18'])) {
    $variables['user_profile'] = $temp['Designer_Profile_18'];
  }






}