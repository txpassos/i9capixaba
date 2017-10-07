<?php get_header(); ?>

<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
</div>
<div class="container">
<h3><?php $category = get_the_category(); echo $category[0]->cat_name;?> </h3>
<div class="row testesidebar">
  <div class="col s12 m12 l12 no-padding">

<!-- Noticias 1 // Inicio do Loop -->

<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
<div class="col s12 m4 l3">
  <div class="card painel-agenda">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'agenda-cultural' ); ?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>"><div class="bloco-img-agenda especiais-img" style="background: url('<?php echo $image[0]; ?>');">

      </div></a><span>
                <?php echo wpdocs_custom_taxonomies_terms_links(); ?>
           </span>
      <div class="bloco-des-agenda">
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2"><?php title_excerpt(28); ?></a>
          <span class="agenda-data-hora"><i class="fa fa-calendar" aria-hidden="true"></i>
<?php $data = get_post_meta( $post->ID,'data', true ); echo $data;?> · <i class="fa fa-clock-o" aria-hidden="true"></i>
<?php $hora= get_post_meta( $post->ID,'hora', true ); echo $hora;?></span>
          <span class="agenda-cidade"><i class="fa fa-map-marker" aria-hidden="true"></i>
</span> <?php $local = get_post_meta( $post->ID,'local', true ); echo $local;?></span>
      </div>
  </div>
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
