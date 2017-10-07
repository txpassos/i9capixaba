<div class="row">

   <div class="col s12 no-padding">

     <div class="col s6 valign">

      <h2>Ensino Especial</h2>
     </div>
     <div class="col s6" style="padding-top: 30px;">
     <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/tag/neta">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
 </a>
     </div>

   </div>


    <?php query_posts('showposts=3&tag=Neta');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>

   <div class="col s12 m4 no-padding ">
     <div class="box-especiais-p especiais-img2 b3" style="background: url('<?php echo $image[0]; ?>');">
       <span class="titulo-especiais white-text"><?php the_title();?></span>
     </div>
   </div>


 </a>
 <?php endwhile;endif;?>
 <div class="clearfix"></div>
 <div class="divider"></div>
 </div>
