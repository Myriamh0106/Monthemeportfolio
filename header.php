<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
 <link rel="stylesheet" href="<?php
bloginfo('stylesheet_url'); ?>" type="text/css">
 <?php wp_head(); ?>

 </head>

 <body>
   <div class="wrap">
    <header>
    <div class="nav-toggle"><div class="nav-toggle-bar"></div></div>
  <div class="toutlemenu">
      <div class="signature"><a href="#adebut"><h1>myriam hueber</h1></a></div>
    <div class="nav_menu">
          <nav class="menu1">
            <?php
              wp_nav_menu ( array (
              'theme_location' => 'header-menu'
              ) ); 
            ?>
          </nav> 
          <div class="linkedinlogo">
            <a href="https://www.linkedin.com/in/myriam-hueber-71b5401b0/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" rx:6px width="30" height="30" viewBox="0 0 504.4 504">
                <g id="linkedin" transform="translate(0 -0.2)">
                <g id="Groupe_1" data-name="Groupe 1">
                <path id="Tracé_1" data-name="Tracé 1" d="M377.6.2H126.4C56.8.2,0,57,0,126.6V378.2c0,69.2,56.8,126,126.4,126H378c69.6,0,126.4-56.8,126.4-126.4V126.6C504,57,447.2.2,377.6.2ZM168,408.2H96v-208h72Zm-36.4-240a36.8,36.8,0,1,1,36.8-36.8C168,151.8,151.6,168.2,131.6,168.2Zm276.8,240H348V307.4c0-24.4-3.2-55.6-36.4-55.6-34,0-39.6,26.4-39.6,54V408.2H212v-208h56v28h1.6c8.8-16,29.2-28.4,61.2-28.4,66,0,77.6,38,77.6,94.4v114Z"/>
                </g>
                </g>
              </svg>
            </a>
          </div>
    </div>
  </div>

    <div class="background" id="adebut"> <!-- INTRO + CV -->
            <h2>Développeuse web et web mobile junior</h2><br />
        <div class="slogan">
            <p>J'aime entreprendre et relever de nouveaux défis.<br />
            Organisée | Pragmatique | Calme | Curieuse | Polyvalente</p><br />
        </div>
          <a class="moncv" href="<?php echo get_bloginfo('url') ?>/wp-content/uploads/2020/11/cvmh.pdf" target="_blank">Télécharger mon CV</a>
    </div>
    </header>
