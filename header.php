<!DOCTYPE html>
<html lang="pt-br">
    <head data-collapsible class="collapsible">
	      <meta name="theme-color" content="#00A250">
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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="<?php bloginfo('template_url');?>/materialize/css/materialize.min.css" rel="stylesheet" type="text/css">

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107789034-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-107789034-1');
        </script>

    </head>
    <body>
      <!-- INICIO - Módulo - Navegação -->
        <div class="navbar-fixed">
        <nav class="" style="" role="navigation">
            <div class="nav-wrapper container">
                <div class="brand-logo">
                    <a id="logo-container" href="<?php bloginfo('home')?>" title="<?php bloginfo('name');?>">
                    <img src="<?php bloginfo('template_url');?>/assets/img/logo-i9capixabacom.png" style="padding-top: 7px;"></a>
                    <!--
                    <span class="icon-logo-agencia2017-02 logo-icone"></span><span class="hide-on-small-only logo-nome">Notícias do Acre</span>-->
                </div>
                <ul id="nav-mobile" class="left hide-on-med-and-down" style="    margin-left: 165px;">
                        <li><a href="#">Notícias</a></li>
                        <li><a href="#">Política</a></li>
                        <li><a href="#">Esporte</a></li>
                        <li><a href="#">Segurança</a></li>
                        <li><a href="#">Cultura</a></li>
                        <li><a href="#">Contato</a></li>
                      </ul>
                      <ul class="right">
                              <li><a href="#"><i class="material-icons">search</i></a></li>
                <a href="#" data-activates="mobile-demo" class="button-collapse hide-on-large-only"><i class="material-icons" style="font-size:30px;">menu</i></a>
            </div>
        </nav>
      </div>
        <!-- FIM - Módulo - Navegação -->

       <ul id="mobile-demo" class="left side-nav collapsible" data-collapsible="accordion" style="border:none;">
         <li class="no-padding">
           <ul class="collapsible collapsible-accordion">
             <li class="bold"><a href="#" class="waves-effect waves-teal">Vídeos</a></li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Documentários</a></li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Séries</a></li>
             <li class="bold"><a href="#" class="waves-effect waves-teal">Sobre Aldeia Play</a></li>
             <li class="bold"><a href="<?php bloginfo('template_url');?>/cadastro" class="waves-effect waves-teal">Cadastre-se</a></li>

           </ul>
         </li>
       </ul>
