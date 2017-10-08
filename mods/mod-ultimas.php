<?php query_posts('showposts=5');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
<div class="col s12 m12 l12 no-padding ultimas" style="margin-bottom: 20px;">
  <div class="col s12 m12 l6 no-padding">
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <img src="<?php echo $image[0]; ?>">
    </a>
  </div>
  <div class="col s12 m12 l6" style="padding: 10px !important;">
    <span><?php $Chamada= get_post_meta( $post->ID,'chamada', true ); echo $Chamada;?></span>
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <h2><?php the_title();?></h2>
    </a>
    <p><?php $Descricao= get_post_meta( $post->ID,'descricao', true ); echo $Descricao;?></p>
    <span class="data-post"> <?php the_time('d/m/Y');?> </span>
  </div>
</div>
<?php endwhile;endif;?>
