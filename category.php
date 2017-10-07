<?php get_header(); ?>

<div class="container header-post">
</div>
<div class="container">
<h3><?php single_cat_title(); ?><span class="line-text green"></h3>
<div class="row testesidebar">
  <div class="col s12 m12 l12 no-padding">

<!-- Noticias 1 // Inicio do Loop -->

<?php if (have_posts()): while (have_posts()) : the_post();?>
  <div class="col s12 m6 l3">

    <?php $videoid = get_post_meta( $post->ID,'videoid', true ); ?>
    <a class="modal-video" href="<?php the_Permalink()?>" title="<?php the_title();?>">

    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
    <div class="box-videos especiais-img" style="background: url('<?php echo $image[0]; ?>');border-radius: 2px 0 0 2px;">
    <div class="box-videos-overlay"><i class="material-icons white-text">play_circle_outline</i></div>
      <span class="titulo-especiais white-text"> <?php the_title();?> </span>
        <div class="categoria nocanto2">
            <span class="chip-min white-text" style="
    font-size: 12px;
"><?php $DestaqueChamada = get_post_meta( $post->ID,'chamada', true ); echo $DestaqueChamada;?></span>
        </div>
    </div>
    </a>

  </div>

<?php endwhile;endif;?>
<div class="clearfix"></div>

<!-- BoTão de mais notícias -->
    <div class="col s12 center">
      <?php wp_pagination(); ?>
  </div>

</div>

</div>
</div>


<?php get_footer(); ?>
