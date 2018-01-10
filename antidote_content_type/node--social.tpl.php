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
          '<div class="block block-menu-block MenuPrincipal contextual-links-region"><div class="content"><div class="menu-block-wrapper menu-block-2 menu-name-main-menu parent-mlid-0 menu-level-1"><ul class="menu"><li class="first leaf has-children menu-mlid-537"><a href="/antidotes?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>">Antidotes</a></li><li class="leaf has-children menu-mlid-538"><a href="/centres?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>">Centres</a></li><li class="last leaf has-children menu-mlid-539"><a class="activeLink" href="liens-et-coordonnees?lang=<?php if($lang_name == 'fr') { ?>fr<?php } else { ?>en<?php } ?>"><?php if($lang_name == 'fr') { ?>Contactez-nous<?php } else { ?>Contact Us<?php } ?></a></li></ul></div></div></div></div>'
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
        padding-bottom: 4px;
        border-bottom: 4px solid #333;
      }

      .activeLink {
        background: #333!important;
        color: white!important;
        border-top: 0!important;
      }

      .socialDetail {
        box-sizing: content-box!important;
      }

      .activeLink {
        background: #f5f5f5;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
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

      .fa {
        padding: 14px!important;
        font-size: 16px!important;
        width: 23.98%!important;
        text-align: center!important;
        text-decoration: none!important;
        box-sizing: border-box!important;
        border-radius: 4px;
      }

      .fa span {
        margin-left: 10px;
        font-family: 'Open Sans', Arial, Sans-serif!important;
      }

      .fa:hover {
        opacity: 0.7!important;
      }

      .fa-facebook {
        background: #3B5998!important;
        color: white!important;
        margin-right: 8px!important;
      }

      .fa-twitter {
        background: #55ACEE!important;
        color: white!important;
        margin-right: 8px!important;
      }

      .fa-envelope {
        background: #e67e22!important;
        color: white!important;
        margin-right: 8px!important;
      }

      .fa-external-link {
        background: #A62126!important;
        color: white!important;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="languageSwitcher"><?php if($lang_name == 'fr') { ?><a href="liens-et-coordonnees?lang=en">English</a><?php } else { ?><a href="liens-et-coordonnees?lang=fr">Français</a><?php } ?></div>
    <!-- template FR -->
    <?php if($lang_name == 'fr') { ?>
    <div class="socialDetail">
      <a href="https://www.facebook.com/Canadian-Association-of-Poison-Control-Centres-1509041879165657/" class="fa fa-facebook"><span>Visiter notre page Facebook</span></a>
      <a href="https://www.twitter.com/CAPCC_ACCA" class="fa fa-twitter"><span>Visiter notre page Twitter</span></a>
      <a href="mailto:antidotes.toxicologie.ciussscn@ssss.gouv.qc.ca" class="fa fa-envelope"><span>Nous rejoindre par courriel</span></a>
      <a href="http://capcc.ca/en" class="fa fa-external-link"><span>Visiter le site Web de la CAPCC</span></a>
    </div>
    <?php } ?>
    <!-- template EN -->
    <?php if($lang_name == 'en') { ?>
    <div class="socialDetail">
      <a href="https://www.facebook.com/Canadian-Association-of-Poison-Control-Centres-1509041879165657/" class="fa fa-facebook"><span>Visit our Facebook page</span></a>
      <a href="https://www.twitter.com/CAPCC_ACCA" class="fa fa-twitter"><span>Follow us on Twitter</span></a>
      <a href="mailto:antidotes.toxicologie.ciussscn@ssss.gouv.qc.ca" class="fa fa-envelope"><span>Contact us by email</span></a>
      <a href="http://capcc.ca/en" class="fa fa-external-link"><span>Visit the CAPCC website</span></a>
    </div>
    <?php } ?>
  </div>

</div>