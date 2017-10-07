<div class="row">

   <div class="col s12 no-padding">
     <h2>Especiais</h2>
   </div>

   <?php query_posts('showposts=2&cat=141');?>
   <?php if (have_posts()): while (have_posts()) : the_post();?>
     <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
       <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
        <div class="col s12 m6 no-padding">
          <div class="box-especiais-g especiais-img b1" style="background: url('<?php echo $image[0]; ?>');">
            <span class="titulo-especiais white-text"><?php the_title();?></span>
          </div>
        </div>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>

    <?php query_posts('showposts=3&cat=141&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
   <div class="col s12 m4 no-padding">
     <div class="box-especiais-p especiais-img b3" style="background: url('<?php echo $image[0]; ?>');">
       <span class="titulo-especiais white-text"><?php the_title();?></span>
     </div>
   </div>
 </a>
 <?php endwhile;endif;?>
 <div class="clearfix"></div>

 </div>
