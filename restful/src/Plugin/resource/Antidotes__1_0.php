<?php

/**
 * @file
 * Contains \Drupal\restful\Plugin\resource\Antidotes__1_0.
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
 *   name = "antidotes:1.0",
 *   resource = "antidotes",
 *   label = "Antidotes",
 *   description = "Export the Antidote entity with cookie authentication.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "antidote"
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Antidotes__1_0 extends ResourceEntity implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    $public_fields = parent::publicFields();

    // Language
    $public_fields['language'] = array(
      'property' => 'language',
    );

    // Indications
    $public_fields['indications'] = array(
      'property' => 'field_indications',
    );

    // Posologie
    $public_fields['posologie'] = array(
      'property' => 'field_posologie',
    );

    // Points clés
    $public_fields['points_cles'] = array(
      'property' => 'field_points_cles',
    );

    // Synonymes et autres appellations 
    $public_fields['synonymes_et_autres_appell'] = array(
      'property' => 'field_synonymes_et_autres_appell',
    );

    // Effets indésirables
    $public_fields['effets_indesirables'] = array(
      'property' => 'field_effets_indesirables',
    );

    // Monitoring
    $public_fields['monitoring'] = array(
      'property' => 'field_monitoring',
    );

    // Fin du traitement
    $public_fields['fin_du_traitement'] = array(
      'property' => 'field_fin_du_traitement',
    );

    // Particularités reliées à l’administration
    $public_fields['particularites_reliees'] = array(
      'property' => 'field_particularites_reliees',
    );

    // Produits disponibles
    $public_fields['produits_disponibles'] = array(
      'property' => 'field_produits_disponibles',
    );

    // Stockage recommandé
    $public_fields['stockage_recommande'] = array(
      'property' => 'field_stockage_recommande',
    );

    return $public_fields;
  }

}
