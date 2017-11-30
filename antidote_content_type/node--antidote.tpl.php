<?php global $language ;
$lang_name = $language->language; ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>
  <div class="content" <?php print $content_attributes; ?>>
    <script>
      jQuery(document).ready(function ($) {
        $('.drowndownContent').hide();
        $('.dropdownToggle').click(function (event) {
          $(this).find('.drowndownContent').slideToggle();
        });

        $(".searchInput").keyup(function () {
          value = $(this).val().toLowerCase();
          if (value.length >= 0) {
            $(".asideLink").each(function () {
              if ($(this).html().toLowerCase().indexOf(value) != -1) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });
          }
        });

        $('#ContentTop').hide();
        $('#block-search-form').hide();
        $('#block-menu-block-3').hide();
        $('#block-menu-block-2').hide();
        $('.link-list').find('tbody').find('tr').find('td').find('img').hide();
        $('.col-first').hide();

        $('#Header').find('.Container').prepend(
          '<div class="block block-menu-block MenuPrincipal contextual-links-region"><div class="content"><div class="menu-block-wrapper menu-block-2 menu-name-main-menu parent-mlid-0 menu-level-1"><ul class="menu"><li class="first leaf has-children menu-mlid-537"><a href="/antidotes" class="activeLink">Antidotes</a></li><li class="leaf has-children menu-mlid-538"><a href="/centres">Centres</a></li><li class="last leaf has-children menu-mlid-539"><a href="liens-et-coordonnees"><?php if($lang_name == '
          fr ') { ?>Liens et coordonnées<?php } else { ?>Links and contact<?php } ?></a></li></ul></div></div></div></div>'
        );

        $('#Header').after(
          '<div class="Container"><div class="image-banner"></div></div>'
        );

        $('.row-1').prepend(
          '<td class="col-1"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www2.ulaval.ca/accueil.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/dpic_circlelogo_2012_small.png" alt="Logo et lien Université Laval"></a></p></div></div></td><td class="col-2"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www2.ulaval.ca/accueil.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/manitoba_gif.png" alt="Logo et lien Université Laval"></a></p></div></div></td><td class="col-3"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www2.ulaval.ca/accueil.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/padis_gif.png" alt="Logo et lien Université Laval"></a></p></div></div></td>'
        );

        $('.row-1').before(
          '<tr class="row-1 row-first row-last"><td class="col-1"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www2.ulaval.ca/accueil.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/iwk_gif.png" alt="Logo et lien Université Laval"></a></p></div></div></td><td class="col-2"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www2.ulaval.ca/accueil.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/ontario_gif.png" alt="Logo et lien Université Laval"></a></p></div></div></td><td class="col-3"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www2.ulaval.ca/accueil.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/capq_logo.gif" alt="Logo et lien Université Laval"></a></p></div></div></td></tr><tr><td>&nbsp;</td></tr>'
        );
      });
    </script>
    <style>
      img {
        max-width: 100%;
        height: auto;
      }

      .MenuPrincipal {
        width: 100%;
      }

      #Head #Header .Container .MenuPrincipal ul li a {
        font-size: 16px!important;
      }

      #Head #Header .Container .MenuPrincipal {
        left: 0;
      }

      .guide-antipoison {
        color: white;
        font-size: 48px;
        text-align: center;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
      }

      .image-banner {
        margin: auto;
        margin-top: 10px;
        height: 143px;
        max-width: 962px;
        background-image: url('https://i.imgur.com/DJOch9x.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
      }

      #Head #Header .Container {
        height: 47px!important;
      }

      .not-front #Footer .footer-bg {
        background-color: #A62126;
      }

      .menu li {
        width: 320px!important;
        text-align: center;
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

      .row-1 .views-field {
        text-align: center!important;
      }

      .content h1 {
        margin-left: 30%!important;
        padding-bottom: 4px;
        border-bottom: 4px solid #333;
      }

      .activeLink {
        background: #333!important;
        color: white!important;
        border-top: 0!important;
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

      .searchInput {
        margin-left: 13px;
        margin-right: 13px;
        font-size: 14px;
        width: calc(100% - 28px);
        margin-bottom: 8px;
        box-sizing: border-box;
        padding: 4px 8px;
        border-radius: 4px;
        border: 1px solid #bbb;
      }
    </style>


    <aside class="asideAntidotes">
      <?php if($lang_name == 'fr') { ?>
      <h3>Liste des antidotes en toxicologie d'urgence</h3>
      <?php } else {  ?>
      <h3>List of antidotes in emergency toxicology</h3>
      <input class="searchInput" placeholder="Rechercher un antidote" type="text" />
      <?php } ?>
      <ul>
        <?php 
          $type = 'antidote';
          $query = db_select('node', 'n');
          $query
            ->fields('n', array('nid'))
            ->condition('type', $type)
            ->condition('language', $lang_name)
            ->orderBy('title', 'ASC');
          $nids = $query->execute()->fetchCol();
          $nodes = node_load_multiple($nids);

          foreach($nodes as $key => $value) {
            ?>
        <li>
          <a class="asideLink <?php if ($node = menu_get_object()) { if($node->nid == $value->nid) { echo 'activeLink'; } } ?>" href="<?php echo url(drupal_get_path_alias('node/' . $value->nid)); ?>">
            <?php print $value->title; ?>
          </a>
        </li>
        <?php } ?>
      </ul>
    </aside>
    <!-- template FR -->
    <?php if($lang_name == 'fr') { ?>
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
    <?php } else { ?>
    <div class="antidoteDetail">
      <?php if($content['field_points_cles'][0] != null) { ?>
      <h2 class="no-margin-top">Key points</h2>
      <?php print render($content['field_points_cles'][0]); ?>
      <?php } ?>

      <?php if($content['field_synonymes_et_autres_appell'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Synonyms and other terms</h2>
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
        <h2>+ Dosage</h2>
        <div class="drowndownContent">
          <?php print render($content['field_posologie'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_effets_indesirables'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Side effects</h2>
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
        <h2>+ End of treatment</h2>
        <div class="drowndownContent">
          <?php print render($content['field_fin_du_traitement'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_particularites_reliees'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Related features</h2>
        <div class="drowndownContent">
          <?php print render($content['field_particularites_reliees'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_produits_disponibles'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Available products</h2>
        <div class="drowndownContent">
          <?php print render($content['field_produits_disponibles'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_stockage_recommande'][0] != null) { ?>
      <div class="dropdownToggle">
        <h2>+ Recommended storage</h2>
        <div class="drowndownContent">
          <?php print render($content['field_stockage_recommande'][0]); ?>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
  </div>

</div>