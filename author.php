
<?php get_header(); ?>

<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
</div>
<div class="container">
<div class="row testesidebar">
  <div class="col s12 m12 l12 no-padding">

<!-- Noticias 1 // Inicio do Loop -->

<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
    <div class="col s12 m4 l4">
      <div class="card painel-noticias">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
            <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
              <span class="chip orange white-text z-depth-1-half nocanto1">
                  <?php $category = get_the_category(); echo $category[0]->cat_name;?>
              </span>
          </div></a>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">
                <?php echo get_post_meta( $post->ID,'chamada', true )?>
              </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                  <?php the_title();?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
              <?php include(TEMPLATEPATH.'/mod-social.php');?>
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
