<?php get_header(); ?>

<div class="container">
<!-- INICIO - Módulo - Chips -->
<!--
  <div class="row"  style="padding: 0 10px;">
     <?php //include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div> -->
<!-- FIM - Módulo - Chips -->
<!-- INICIO - Módulo - Slider -->
  <div class="row">
   <div class="slider-noticias-container">

    <div class="col s12 m12 l6 no-padding">
    <?php query_posts('showposts=1&tag=slider');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    <div class="col s12 m12 l6 no-padding">
    <?php query_posts('showposts=1&tag=slider&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    <div class="col s12 m12 l6 no-padding">
    <?php query_posts('showposts=1&tag=slider&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    <div class="col s12 m12 l6 no-padding">
    <?php query_posts('showposts=1&tag=slider&offset=3');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

  </div>
  </div>
  </div>
  <!-- FIM - Módulo - Slider -->

<div id="especiais" class="container">
<!-- INICIO - Módulo - Rádios -->
  <?php include(TEMPLATEPATH.'/mod-radios.php');?>
<!-- FIM - Módulo - Rádios -->

<!-- INICIO - Módulo - Programas -->
  <?php include(TEMPLATEPATH.'/mod-programas.php');?>
<!-- FIM - Módulo - Rádios -->

<!-- INICIO - Módulo - Últimos vídeos -->
  <?php include(TEMPLATEPATH.'/mod-videos.php');?>
<!-- FIM - Módulo - Últimos vídeos -->

<!-- INICIO - Módulo - Documentários -->
  <?php include(TEMPLATEPATH.'/mod-videos-docs.php');?>
<!-- FIM - Módulo - Documentários -->

<!-- INICIO - Módulo - Livros -->
  <?php include(TEMPLATEPATH.'/mod-livros2.php');?>
<!-- FIM - Módulo - Livros -->

<!-- INICIO - Módulo - Livros -->
  <?php include(TEMPLATEPATH.'/mod-youtube.php');?>
<!-- FIM - Módulo - Livros -->
</div>
<?php get_footer(); ?>
