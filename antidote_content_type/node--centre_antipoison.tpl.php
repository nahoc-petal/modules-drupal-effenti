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

        $('#ContentTop').hide();
        $('#block-search-form').hide();
        $('#block-menu-block-3').hide();
        $('#block-menu-block-2').hide();
        $('#Footer').hide();

        $('#Header').find('.Container').prepend(
          '<div class="block block-menu-block MenuPrincipal contextual-links-region"><div class="content"><div class="menu-block-wrapper menu-block-2 menu-name-main-menu parent-mlid-0 menu-level-1"><ul class="menu"><li class="first leaf has-children menu-mlid-537"><a href="/antidotes?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>">Antidotes</a></li><li class="leaf has-children menu-mlid-538"><a href="/centres?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>" class="activeLink">Centres</a></li><li class="last leaf has-children menu-mlid-539"><a href="liens-et-coordonnees?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>"><?php if($lang_name == 'fr') { ?>Contactez-nous<?php } else { ?>Contact Us<?php } ?></a></li></ul></div></div></div></div>'
        );

        $('#Header').after(
          '<div class="Container"><a href="http://capcc.ca/" target="_blank"><div class="image-banner"></div></a></div>'
        );

        $('#block-views-partenaires-block').hide();

        $('.bann-gouv a').last().hide();
      });
    </script>
    <style>
             #Footer {display:none;}
      img {
        max-width: 100%;
        height: auto;
      }

      .bann-gouv img:first-child {
        height: 111px;
        width: 211px;
        max-width: 211px;
      }

      .activeLink {
        background: #333!important;
        color: white!important;
        border-top: 0!important;
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
        <?php if($lang_name == 'fr') { ?>
        background-image: url('https://i.imgur.com/xvipll6.png');
        <?php } else { ?>
        background-image: url('https://i.imgur.com/D9Kfzbp.png');
        <?php } ?>
      }

      .not-front #Footer .footer-bg {
        background-color: #A62126;
      }

      #Head #Header .Container {
        height: 47px!important;
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
        padding-bottom: 4px;
        border-bottom: 4px solid #333;
      }

      .centreDetail {
        box-sizing: content-box!important;
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

      .image-centre {
        max-width: 30%;
        margin-right: 20px;
        max-height: 100%;
        float: left;
        margin-top: 10px;
        margin-bottom: 30px;
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

      .btn-website,
      .btn-phone {
        display: inline-block;
        color: white!important;
        padding: 10px 20px;
        border-radius: 4px;
      }

      .btn-phone {
        background: #2ecc71;
      }

      .btn-website {
        background: #3498db;
      }

      .list-centres li {
        list-style: none!important;
        margin-left: 0!important;
        clear: both;
        box-sizing: border-box;
        margin-top: 20px;
        height: 140px!important;
        position: relative!important;
      }

      .centre-links {
        max-width: 70%;
        position: relative;
        top: 50%;
        float: left;
        transform: translateY(-50%);
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
        z-index: -1!important;
      }
    </style>

    <!-- template EN -->
    <div class="languageSwitcher"><?php if($lang_name == 'fr') { ?><a href="centres?lang=en">English</a><?php } else { ?><a href="centres?lang=fr">Français</a><?php } ?></div>
    <?php if($lang_name == 'en') { ?>
    <div class="centreDetail">
      <ul class="list-centres">
        <?php 
          $type = 'centre_antipoison';
          $query = db_select('node', 'n');
          $query
            ->fields('n', array('nid'))
            ->condition('type', $type)
            ->orderBy('title', 'ASC');
          $nids = $query->execute()->fetchCol();
          $nodes = node_load_multiple($nids);

          foreach($nodes as $key => $value) {
            if($value->field_image_url["und"][0]['value'] != null) {
            ?>
        <li class="un-centre">
          <h2>
          <?php print($value->field_province["und"][0]['value']); ?> - <?php print $value->title; ?>
          </h2>
          <img class="image-centre" src="<?php print($value->field_image_url["und"][0]['value']); ?>" alt="Centre image" />
          <div class="centre-links">
            <a class="btn-phone" href="tel:<?php print($value->field_telephone["und"][0]['value']); ?>">Call centre (<?php print substr($value->field_telephone["und"][0]['value'], 0, 1).'-'.substr($value->field_telephone["und"][0]['value'], 1, 3).'-'.substr($value->field_telephone["und"][0]['value'], 4, 3).'-'.substr($value->field_telephone["und"][0]['value'],7);?>)</a>&nbsp;&nbsp;
            <a class="btn-website" href="<?php print($value->field_site_web["und"][0]['value']); ?>">Visit website</a>
          </div>
        </li>
        <hr style="clear:both;">
        <?php }} ?>
      </ul>
    </div>
    <?php } ?>

    <!-- template FR -->
    <?php if($lang_name == 'fr') { ?>
    <div class="centreDetail">
      <ul class="list-centres">
        <?php 
          $type = 'centre_antipoison';
          $query = db_select('node', 'n');
          $query
            ->fields('n', array('nid'))
            ->condition('type', $type)
            ->orderBy('title', 'ASC');
          $nids = $query->execute()->fetchCol();
          $nodes = node_load_multiple($nids);

          foreach($nodes as $key => $value) {
            if($value->field_image_url["und"][0]['value'] != null) {
            ?>
        <li class="un-centre">
          <h2>
          <?php print($value->field_province["und"][0]['value']); ?> - <?php print $value->title; ?>
          </h2>
          <img class="image-centre" src="<?php print($value->field_image_url["und"][0]['value']); ?>" alt="Centre image" />
          <div class="centre-links">
            <a class="btn-phone" href="tel:<?php print($value->field_telephone["und"][0]['value']); ?>">Appeler le centre (<?php print substr($value->field_telephone["und"][0]['value'], 0, 1).'-'.substr($value->field_telephone["und"][0]['value'], 1, 3).'-'.substr($value->field_telephone["und"][0]['value'], 4, 3).'-'.substr($value->field_telephone["und"][0]['value'],7);?>)</a>&nbsp;&nbsp;
            <a class="btn-website" href="<?php print($value->field_site_web["und"][0]['value']); ?>">Visiter le site Web</a>
          </div>
        </li>
        <hr style="clear:both;">
        <?php }} ?>
      </ul>
    </div>
    <?php } ?>
  </div>

</div>