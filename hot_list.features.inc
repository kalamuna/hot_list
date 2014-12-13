<?php
/**
 * @file
 * hot_list.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function hot_list_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
