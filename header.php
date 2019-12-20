<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
  <div id="header">
    <div class="text-center my-3">
      <a href="<?php echo home_url( '' ); ?>">
        <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.png"; ?>"/>
      </a>
    </div>
    <div class="nav-container">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav social-media mr-auto">
              <li class="nav-item">
                <a target="_blank" href="https://www.facebook.com/falacomerciario/"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/falacomerciario9/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCdTUk87XZhEjaWGWWToWteg"><i class="fas fa-play"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=5511945952106&text=Oi!"><i class="fab fa-whatsapp"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav main-nav">
              <li class="nav-item <?php echo (get_query_var('pagename') == 'quem-somos')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/quem-somos' ); ?>">Quem Somos</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'sindicalize')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/sindicalize' ); ?>">Sindicalize</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'fale-conosco-2')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/fale-conosco-2' ); ?>">Fale Conosco</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'acordo-e-convencoes')? 'active' : ''; ?>">
                <a class="nav-link last" href="<?php echo home_url( '/acordo-e-convencoes' ); ?>">Acordo e Convenções</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'noticias')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/noticias' ); ?>">Notícias</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'videos')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/videos' ); ?>">Fala Comerciário TV</a>
              </li>
              <li class="nav-item <?php echo (get_query_var('pagename') == 'podcasts')? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo home_url( '/podcasts' ); ?>">Podcasts</a>
              </li>
            </ul>
            <div class="navbar-nav search ml-auto">
              <?php get_search_form() ?>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

