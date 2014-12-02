<?php
/**
 * @file
 * retos.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function retos_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function retos_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function retos_node_info() {
  $items = array(
    'reto' => array(
      'name' => t('Reto'),
      'base' => 'node_content',
      'description' => t('Este tipo de Contenido permite publicar retos relacionados a actividades de emprendimiento.'),
      'has_title' => '1',
      'title_label' => t('Titulo'),
      'help' => '',
    ),
  );
  return $items;
}
