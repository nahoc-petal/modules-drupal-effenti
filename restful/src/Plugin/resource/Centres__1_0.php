<?php

/**
 * @file
 * Contains \Drupal\restful\Plugin\resource\Centres__1_0.
 */

namespace Drupal\restful\Plugin\resource;

use Drupal\restful\Http\RequestInterface;
use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceInterface;
use Drupal\restful\Plugin\resource\ResourceNode;

/**
 * Class Articles
 * @package Drupal\restful\Plugin\resource
 *
 * @Resource(
 *   name = "centres:1.0",
 *   resource = "centres",
 *   label = "Centres",
 *   description = "Export the Centre entity with cookie authentication.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "centre_antipoison"
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Centres__1_0 extends ResourceEntity implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    // Téléphone
    $public_fields['telephone'] = array(
      'property' => 'field_telephone',
    );

    // Site web
    $public_fields['site_web'] = array(
      'property' => 'field_site_web',
    );

    // Image URL
    $public_fields['image_url'] = array(
      'property' => 'field_image_url',
    );

    return $public_fields;
  }

}
