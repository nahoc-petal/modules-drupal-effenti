<?php 

global $language;
$lang_name = $language->language; 

if(isset($_GET['lang'])) {
  if($_GET["lang"] == "en") {
    $lang_name = "en";
  } else {
    $lang_name = "fr";
  }
}
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>
  <div class="content" <?php print $content_attributes; ?>>
    <script>
      jQuery(document).ready(function ($) {
        $('.drowndownContent').hide();
        $('.dropdownToggle').click(function (event) {
          $(this).next('.drowndownContent').slideToggle();
        });

        var allOpened = false;

        $('.toggleAll').click(function(event) {
          if(allOpened) {
            $('.toggleAll').html('<?php if($lang_name == 'fr') { ?>Ouvrir tout<?php } else { ?>Open all<?php } ?>');
            $('.drowndownContent').slideUp();
            allOpened = false
          } else {
            $('.toggleAll').html('<?php if($lang_name == 'fr') { ?>Fermer tout<?php } else { ?>Close all<?php } ?>');
            $('.drowndownContent').slideDown();
            allOpened = true;
          }
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
        $('#Footer').hide();

        $('#Header').find('.Container').prepend(
          '<div class="block block-menu-block MenuPrincipal contextual-links-region"><div class="content"><div class="menu-block-wrapper menu-block-2 menu-name-main-menu parent-mlid-0 menu-level-1"><ul class="menu"><li class="first leaf has-children menu-mlid-537"><a href="/antidotes?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>" class="activeLink">Antidotes</a></li><li class="leaf has-children menu-mlid-538"><a href="/centres?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>">Centres</a></li><li class="last leaf has-children menu-mlid-539"><a href="liens-et-coordonnees?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>"><?php if($lang_name == 'fr') { ?>Contactez-nous<?php } else { ?>Contact Us<?php } ?></a></li></ul></div></div></div></div>'
        );

        $('#Header').after(
          '<div class="Container"><a href="http://capcc.ca/" target="_blank"><div class="image-banner"></div></a></div>'
        );

        $('.row-1').html(
          '<td class="col-1"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www.dpic.org/" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/dpic_circlelogo_2012_small.png"></a></p></div></div></td><td class="col-2"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www.hsc.mb.ca/emergencyPoison.html" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/manitoba_gif.png"></a></p></div></div></td><td class="col-3"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www.albertahealthservices.ca/topics/Page11975.aspx" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/padis_gif.png"></a></p></div></div></td>'
        );

        $('.row-1').before(
          '<tr class="row-1 row-first row-last"><td class="col-1"><div class="views-field views-field-body"><div class="field-content"><p><a href="https://iwkpoisoncentre.ca/" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/iwk_gif.png"></a></p></div></div></td><td class="col-2"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www.ontariopoisoncentre.ca/" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/ontario_gif.png"></a></p></div></div></td><td class="col-3"><div class="views-field views-field-body"><div class="field-content"><p><a href="http://www.ciusss-capitalenationale.gouv.qc.ca/nos-services/en-cas-durgence/centre-antipoison-du-quebec" target="_blank" style="text-decoration: none;"><img src="http://www.ciusss-capitalenationale.gouv.qc.ca/sites/default/files/images/guideantidoreCAPQ/capq_logo.gif"></a></p></div></div></td></tr><tr><td>&nbsp;</td></tr>'
        );

        $('.bann-gouv a').last().hide();
      });
    </script>
    <style>
      img {
        max-width: 100%;
        height: auto;
      }

      .bann-gouv img:first-child {
        height: 111px;
        width: 211px;
        max-width: 211px;
      }

      .MenuPrincipal {
        width: 100%;
      }

      #Head #Header .Container .MenuPrincipal ul li a {
        font-size: 16px!important;
        padding: 16px 11px 15px;
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
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        <?php if($lang_name=='fr') {
          ?>background-image: url('https://i.imgur.com/sJJJ0rn.png');
          <?php
        }
        else {
          ?>background-image: url('https://i.imgur.com/HUSILqh.png');
          <?php
        }
        ?>
      }

      #Head #Header .Container {
        height: 49px!important;
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
        padding: 10px;
        padding-left: 16px;
        padding-right: 16px;
      }

      .dropdownToggleWrapper {
        background: white;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
        border: 1px solid #eee;
        border-radius: 2px;
        margin-bottom: 10px;
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
        padding-left: 16px;
        padding-right: 16px;
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

      .toggleAll {
        float: right;
        font-size: 14px;
        padding: 4px 8px;
      }

      .toggleAll:hover {
        cursor: pointer!important;
      }

      #Footer {
        display: none;
      }

      .languageSwitcher {
        position: absolute;
        top: -44px;
        right: 0;
      }

      #search-api-page-search-form-search {
        position: absolute;
        top: 196px;
        right: 80px;
      }

      #Wrapper {
        z-index: 0!important;
      }
    </style>

    <div class="languageSwitcher">
      <?php if($lang_name == 'fr') { ?>
      <a href="/antidotes?lang=en">English</a>
      <?php } else { ?>
      <a href="/antidotes?lang=fr">Français</a>
      <?php } ?>
    </div>
    <aside class="asideAntidotes">
      <?php if($lang_name == 'fr') { ?>
      <h3>Liste des antidotes en toxicologie d'urgence</h3>
      <input class="searchInput" placeholder="Rechercher un antidote" type="text" />
      <?php } else {  ?>
      <h3>List of antidotes in emergency toxicology</h3>
      <input class="searchInput" placeholder="Search antidote" type="text" />
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
            if($value->nid != 4743 || $value->nid != 4986) {
            ?>
        <li>
          <a class="asideLink <?php if ($node = menu_get_object()) { if($node->nid == $value->nid) { $changedDate = $value->changed; echo 'activeLink'; } } ?>"
            href="<?php echo url(drupal_get_path_alias('node/' . $value->nid)); ?>?lang=<?php if($lang_name == 'fr') { echo "fr"; } else { echo "en"; } ?>">
            <?php print $value->title; ?>
          </a>
        </li>
        <?php } } ?>
        <?php if($node->nid != 4743) {$showLastUpdated = "block";} else { $showLastUpdated = "none";} ?>
      </ul>
    </aside>
    <!-- template FR -->
    <?php if($lang_name == 'fr') { ?>
    <div class="antidoteDetail">
      <?php if($content['field_avis_au_lecteur'][0] != null) { ?>
      <h2 class="no-margin-top">Avis au lecteur</h2>
      <?php print render($content['field_avis_au_lecteur'][0]); ?>
      <?php } ?>

      <?php if($content['field_about_us'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ À propos de nous</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_about_us'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_abreviations_et_acronymes'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Abréviations et acronymes</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_abreviations_et_acronymes'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_points_cles'][0] != null) { ?>
      <h2 class="no-margin-top">Points clés <button class="activeLink toggleAll">Ouvrir tout</button></h2>

      <?php print render($content['field_points_cles'][0]); ?>
      <?php } ?>

      <?php if($content['field_synonymes_et_autres_appell'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Synonymes et autres appellations</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_synonymes_et_autres_appell'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_indications'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Indications</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_indications'][0]); ?>
        </div>
      </div>
      <?php } ?>


      <?php if($content['field_posologie'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Posologie</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_posologie'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_effets_indesirables'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Effets indésirables</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_effets_indesirables'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_monitoring'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Surveillance clinique</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_monitoring'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_fin_du_traitement'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Fin du traitement</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_fin_du_traitement'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_particularites_reliees'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Particularités reliées à l’administration</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_particularites_reliees'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_produits_disponibles'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Produits disponibles</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_produits_disponibles'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_stockage_recommande'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Stockage recommandé</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_stockage_recommande'][0]); ?>
        </div>
      </div>
      <?php } ?>
      <?php if($content['field_references'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Références</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_references'][0]); ?>
        </div>
      </div>
      <?php } ?>
      <br/>
      <?php if($content['field_copyright'][0] != null) { ?>
      <div>
        <?php print render($content['field_copyright'][0]); ?>
      </div>
      <?php } ?>
      <div style="display: <?php echo $showLastUpdated;?>;">
        <small>Dernière mise à jour:
          <?php echo gmdate("d-m-Y", $changedDate); ?>
        </small>
      </div>
    </div>
    <?php } else { ?>
    <div class="antidoteDetail">
      <?php if($content['field_avis_au_lecteur'][0] != null) { ?>
      <h2 class="no-margin-top">Advice to the reader</h2>
      <?php print render($content['field_avis_au_lecteur'][0]); ?>
      <?php } ?>

      <?php if($content['field_about_us'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ About us</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_about_us'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_abreviations_et_acronymes'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Abbreviations and acronyms</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_abreviations_et_acronymes'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_points_cles'][0] != null) { ?>
      <h2 class="no-margin-top">Key points <button class="activeLink toggleAll">Open all</button></h2>
      <?php print render($content['field_points_cles'][0]); ?>
      <?php } ?>

      <?php if($content['field_synonymes_et_autres_appell'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Synonyms and other terms</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_synonymes_et_autres_appell'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_indications'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Indications</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_indications'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_posologie'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Dosage</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_posologie'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_effets_indesirables'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Adverse effects</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_effets_indesirables'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_monitoring'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Monitoring</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_monitoring'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_fin_du_traitement'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ End of treatment</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_fin_du_traitement'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_particularites_reliees'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Special Notes on Administration</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_particularites_reliees'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_produits_disponibles'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Available products</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_produits_disponibles'][0]); ?>
        </div>
      </div>
      <?php } ?>

      <?php if($content['field_stockage_recommande'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ Amount required to treat a person weighting 70kg during 24 hours</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_stockage_recommande'][0]); ?>
        </div>
      </div>
      <?php } ?>
      <?php if($content['field_references'][0] != null) { ?>
      <div class="dropdownToggleWrapper">
        <div class="dropdownToggle">
          <h2>+ References</h2>
        </div>
        <div class="drowndownContent">
          <?php print render($content['field_references'][0]); ?>
        </div>
      </div>
      <?php } ?>
      <br/>
      <?php if($content['field_copyright'][0] != null) { ?>
      <div>
        <?php print render($content['field_copyright'][0]); ?>
      </div>
      <?php } ?>
      <div style="display: <?php echo $showLastUpdated;?>;">
        <small>Last updated:
          <?php echo gmdate("d-m-Y", $changedDate); ?>
        </small>
      </div>
    </div>
    <?php } ?>
  </div>

</div>