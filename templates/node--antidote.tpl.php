<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>
  <div class="content" <?php print $content_attributes; ?>>
    <script>
      jQuery(document).ready(function ($) {
        $('.drowndownContent').hide();
        $('.dropdownToggle').click(function (event) {
          $(this).find('.drowndownContent').slideToggle();
        });
      });
    </script>
    <style>
      img {
        max-width: 100%;
        height: auto;
      }
      .dropdownToggle {
        background: white;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
        border: 1px solid #eee;
        border-radius: 2px;
        margin-bottom: 10px;
        padding: 10px;
        padding-left: 16px;
        padding-right: 16px;
      }

      .no-margin-top {
        margin-top: 0!important;
      }

      .dropdownToggle:hover {
        background: #f5f5f5;
        cursor: pointer;
      }

      .dropdownToggle h2 {
        margin: 0!important;
      }

      .drowndownContent {
        margin-top: 10px;
      }

      .content h1 {
        margin-left: 30%!important;
        padding-bottom: 4px;
        border-bottom: 4px solid #333;
      }

      .asideAntidotes {
        position: relative;
        top: -77px;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
        border: 1px solid #eee;
        border-radius: 2px;
        padding: 8px;
        float: left;
        width: 25%;
        box-sizing: content-box!important;
        margin: 0!important;
        padding: 0!important;
      }

      .antidoteDetail {
        float: right;
        width: 70%;
        box-sizing: content-box!important;
      }

      .asideAntidotes h3 {
        margin: 0!important;
        padding-top: 10px!important;
        padding-bottom: 10px!important;
        padding-left: 14px!important;
        padding-right: 14px!important;
        font-size: 16px!important;
      }

      .asideAntidotes ul {
        margin: 0!important;
        padding-bottom: 8px;
      }

      .asideAntidotes ul li {
        margin: 0!important;
        padding: 0!important;
        list-style: none!important;
        position: relative;
      }

      .activeLink {
        background: #f5f5f5;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
      }

      .asideLink {
        text-decoration: none;
        padding-top: 4px!important;
        padding-bottom: 4px!important;
        padding-left: 14px!important;
        padding-right: 14px!important;
        display: inline-block;
        width: 100%;
        box-sizing: border-box!important;
      }
    </style>

    <aside class="asideAntidotes">
      <h3>Liste des antidotes en toxicologie d'urgence</h3>
      <ul>
        <?php 
          $type = 'antidote';
          $query = db_select('node', 'n');
          $query
            ->fields('n', array('nid'))
            ->condition('type', $type)
            ->orderBy('title', 'ASC');
          $nids = $query->execute()->fetchCol();
          $nodes = node_load_multiple($nids);

          foreach($nodes as $key => $value) {
            ?>
            <li>
              <a class="asideLink <?php if ($node = menu_get_object()) { if($node->nid == $value->nid) { echo 'activeLink'; } } ?>" href="<?php echo url(drupal_get_path_alias('node/' . $value->nid)); ?>"><?php print $value->title; ?></a>
            </li>
          <?php } ?>
      </ul>
    </aside>

    <div class="antidoteDetail">
      <?php if($content['field_points_cles'][0] != null) { ?>
      <h2 class="no-margin-top">Points clés</h2>
      <?php print render($content['field_points_cles'][0]); ?>
      <?php } ?>

      <?php if($content['field_synonymes_et_autres_appell'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Synonymes et autres appellations</h2>
        <div class="drowndownContent">
          <?php print render($content['field_synonymes_et_autres_appell'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_indications'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Indications</h2>
        <div class="drowndownContent">
          <?php print render($content['field_indications'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_posologie'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Posologie</h2>
        <div class="drowndownContent">
          <?php print render($content['field_posologie'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_effets_indesirables'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Effets indésirables</h2>
        <div class="drowndownContent">
          <?php print render($content['field_effets_indesirables'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_monitoring'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Monitoring</h2>
        <div class="drowndownContent">
          <?php print render($content['field_monitoring'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_fin_du_traitement'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Fin du traitement</h2>
        <div class="drowndownContent">
          <?php print render($content['field_fin_du_traitement'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_particularites_reliees'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Particularités reliées à l’administration</h2>
        <div class="drowndownContent">
          <?php print render($content['field_particularites_reliees'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_produits_disponibles'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Produits disponibles</h2>
        <div class="drowndownContent">
          <?php print render($content['field_produits_disponibles'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_stockage_recommande'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Stockage recommandé</h2>
        <div class="drowndownContent">
          <?php print render($content['field_stockage_recommande'][0]); ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

</div>