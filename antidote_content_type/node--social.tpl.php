<?php global $language ;
$lang_name = $language->language; ?>

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
          '<div class="block block-menu-block MenuPrincipal contextual-links-region"><div class="content"><div class="menu-block-wrapper menu-block-2 menu-name-main-menu parent-mlid-0 menu-level-1"><ul class="menu"><li class="first leaf has-children menu-mlid-537"><a href="/antidotes" >Antidotes</a></li><li class="leaf has-children menu-mlid-538"><a href="/centres">Centres</a></li><li class="last leaf has-children menu-mlid-539"><a class="activeLink" href="liens-et-coordonnees"><?php if($lang_name == '
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
            #Footer {display:none;}
      img {
        max-width: 100%;
        height: auto;
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
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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