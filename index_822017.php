<?php get_header(); ?>

<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
<!-- FIM - Módulo - Chips -->
<!-- INICIO - Módulo - Slider -->
  <div class="row">
   <div class="slider-noticias-container">
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider&offset=3');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
  </div>
  </div>
  <!-- FIM - Módulo - Slider -->
</div>


<!-- INICIO - Módulo - Notícias -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-destaque-noticias.php');?>
</div>
<!-- FIM - Módulo - Notícias -->

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-noticias.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->
<!-- INICIO - Módulo - Especiais -->
<div id="especiais" class="container" style="padding: 0px 10px;">
 	<?php include(TEMPLATEPATH.'/mod-especiais.php');?>
</div>
<!-- FIM - Módulo - Especiais -->
<!-- INICIO - Módulo - Vídeos -->
<div id="videos" class="container" style="padding: 0px 10px;">
  	<?php include(TEMPLATEPATH.'/mod-videos.php');?>
</div>
<!-- FIM - Módulo - Vídeos -->

<!-- INICIO - Módulo - Agenda Cultural -->

<div id="agenda-cultural" class="container">
  <div class="row">
    <h2 style="padding: 0px 10px;">Agenda Cultural</h2>
      <div class="col s6 m4 l3">
        <div class="card painel-noticias">
            <a href="#"><div class="bloco-img-noticias3 especiais-img" style="background: url('assets/img/agenda/cartaz1.jpg');">
                <span class="chip orange white-text z-depth-1-half nocanto1 fa-file-text fa"></span>
            </div></a>
            <div class="bloco-des-noticias3">
                <span class="destaque-chamada">Monitoramento</span>
                <a href="#" class="destaque-fonte orange-text darken-2">Nazareth Araújo vistoria áreas alagadas e abrigos no interior do estado</a>
            </div>
        </div>
      </div>
      <div class="col s6 m4 l3">
        <div class="card painel-noticias">
            <a href="#"><div class="bloco-img-noticias3 especiais-img" style="background: url('assets/img/noticia11.jpg');">
                <span class="chip orange white-text z-depth-1-half nocanto1">Serviços</span>
            </div></a>
            <div class="bloco-des-noticias3">
                <span class="destaque-chamada">Acessibilidade</span>
                <a href="#" class="destaque-fonte orange-text darken-2">Detran e pessoas com deficiência discutem facilitação para obter CNH</a>
            </div>
        </div>
      </div>
      </div>
</div>
<!-- FIM - Módulo - Agenda Cultural -->

<?php get_footer(); ?>
