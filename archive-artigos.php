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
  <div class="col s12 m4 l4">
<div class="card painel-artigo orange">

<?php
        $imagepost = get_post_meta( $post->ID,'fotoartigo', true );
        $imageP = wp_get_attachment_image_src( $imagepost, 'artigo' );

?>
      <img src="<?php echo $imageP[0]; ?>" width="200" style="margin: auto; position: absolute; top: 30px; left: 0; bottom: 0; right: 0; height: 80px; width: 80px;" class="circle z-depth-1" />

    <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
      <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
          <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip left  orange" style=" position: absolute;  left: 0px; "><i class="fa white-text fa-file-text" aria-hidden="true"></i></span>Artigo</span>
      </div></a>

      <div class="bloco-des-artigo">
          <a class="white-text" href="<?php the_Permalink()?>" title="<?php the_title();?>"><?php the_title();?></a>
      </div>
      <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
      </div>

    <div class="clearfix"></div>
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
