<div class="row destaques" style="padding-top:20px;">

  <div class="col s12 m12 l4">
    <?php query_posts('showposts=1&tag=destaques');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <div class="img-destaque">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
          <img src="<?php echo $image[0]; ?>">
        </a>
      </div>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <h2><?php the_title();?></h2>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m12 l4">
    <?php query_posts('showposts=1&tag=destaques&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <div class="img-destaque">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
          <img src="<?php echo $image[0]; ?>">
        </a>
      </div>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <h2><?php the_title();?></h2>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m12 l4">
    <?php query_posts('showposts=1&tag=destaques&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <div class="img-destaque">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
          <img src="<?php echo $image[0]; ?>">
        </a>
      </div>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <h2><?php the_title();?></h2>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

</div>
