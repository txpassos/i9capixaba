<div class="row">
   <div class="slider-noticias-container2">

    <div class="col s6 m6 l6 no-padding">

    <div class="slide-principal">
    <?php query_posts('showposts=1&tag=slider');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider-principal" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <span class="white-text"><?php $Chamada= get_post_meta( $post->ID,'chamada', true ); echo $Chamada;?></span>
          <h2><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    <div class="slide-secundario">
    <?php query_posts('showposts=1&tag=slider&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider-secundario" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <span class="white-text"><?php $Chamada= get_post_meta( $post->ID,'chamada', true ); echo $Chamada;?></span>
          <h2><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    </div>
    <div class="col s6 m6 l6 no-padding">

    <div class="slide-principal">
    <?php query_posts('showposts=1&tag=slider&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider-secundario" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <span class="white-text"><?php $Chamada= get_post_meta( $post->ID,'chamada', true ); echo $Chamada;?></span>
          <h2><?php the_title();?></h2>
        </div>
      </div>
  </a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    <div class="slide-secundario">
    <?php query_posts('showposts=1&tag=slider&offset=3');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider-principal" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <span class="white-text"><?php $Chamada= get_post_meta( $post->ID,'chamada', true ); echo $Chamada;?></span>
          <h2><?php the_title();?></h2>
        </div>
      </div>
  </a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>

    </div>

  </div>
  </div>
