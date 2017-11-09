<?php
/**
 * @file
 * antidote_content_type.features.inc
 */

/**
 * Implements hook_node_info().
 */
function antidote_content_type_node_info() {
  $items = array(
    'antidote' => array(
      'name' => t('Antidote'),
      'base' => 'node_content',
      'description' => t('Ajouter un antidote pour le guide antipoison du CIUSSS.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
