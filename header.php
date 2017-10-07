<!DOCTYPE html>
<html lang="en">
    <head data-collapsible class="collapsible">
	      <meta name="theme-color" content="#000000 ">
	<meta property="fb:pages" content="127618923973927" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="google-site-verification" content="dwIxvgYnMoodRsCmpVlgHexcPJO7Xf8iIIApX-J8klQ" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/materialize/css/materialize.min.css"  media="screen,projection"/>
        <link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet" type="text/css">
        <link href="<?php bloginfo('template_url');?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/assets/slick/slick-theme.css">
	
    </head>
    <body class="white-text">

      <!-- INICIO - Módulo - Navegação -->
        <div class="navbar-fixed">
        <nav class="" style="" role="navigation">
            <div class="nav-wrapper container">
                <div class="brand-logo">
                    <a id="logo-container" href="<?php bloginfo('home')?>" title="<?php bloginfo('name');?>">
                    <img src="<?php bloginfo('template_url');?>/aldeiaplay-logo-branca.png" style="width: 160px;
padding-top: 10px;"></a>
                    <!--
                    <span class="icon-logo-agencia2017-02 logo-icone"></span><span class="hide-on-small-only logo-nome">Notícias do Acre</span>-->
                </div>
                <ul class="right">
                  <form id="search" action="/" method="get">
                                  <div class="" id="label">
                                    <label for="search" id="search-label">search</label></div>
                                  <div class="" id="input">
                                    <input name="s" id="search-terms" placeholder="Digite sua busca" type="text"></div>
                              </form>
                              <a href="<?php bloginfo('template_url');?>/entrar" class="hide-on-small-only">ENTRAR</a>
                </ul>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="font-size:30px;">menu</i></a>
            </div>
        </nav>
      </div>
        <!-- FIM - Módulo - Navegação -->

       <ul id="mobile-demo" class="side-nav collapsible" data-collapsible="accordion" style="border:none;">
         <li class="no-padding">
           <ul class="collapsible collapsible-accordion">
             <li class="bold"><a href="<?php bloginfo('template_url');?>/entrar" class="green collapsible-header waves-effect waves-orange">
               ENTRAR
               <!--<span class="badge">
                 <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 16px;"></i>
               </span>-->
             </a>
               <!--<div class="collapsible-body" style="">
                 <?php // wp_nav_menu( array( 'menu' => 'menu-noticias','theme-location'=>'menu-noticias', 'container'=>'div', 'container-class'=>'menu-noticias', 'menu_class'=>'ul-menu-noticias' )); ?>
               </div>-->
             </li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Vídeos</a></li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Documentários</a></li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Séries</a></li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Sobre Aldeia Play</a></li>
             <li class="bold"><a href="<?php bloginfo('template_url');?>/cadastro" class="waves-effect waves-teal">Cadastre-se</a></li>
   	   
           </ul>
         </li>
       </ul>
