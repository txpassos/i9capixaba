<?php query_posts('showposts=5&cat=4');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
<div class="col s12 m12 l12 no-padding ultimas">
  <div class="col s12 m12 l6 no-padding">
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <img src="<?php echo $image[0]; ?>">
    </a>
  </div>
  <div class="col s12 m12 l6 no-padding">
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <h2><?php the_title();?></h2>
    </a>
  </div>
</div>
<?php endwhile;endif;?>
<div class="clearfix"></div>
