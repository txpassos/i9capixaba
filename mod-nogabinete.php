<div class="row testesidebar">
  <div class="col s12 m12 l12 no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=9&cat=61');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
    <div class="col s12 m4 l4">
      <div class="card painel-noticias2" style="margin-bottom: 23px;">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
            <div class="bloco-img-noticias3 especiais-img linha-nogabinete" style="background: url('<?php echo $image[0]; ?>');">
              <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip green darken-4 left " style=" position: absolute;  left: 0px; "><i class="fa fa-camera-retro white-text" aria-hidden="true"></i></span><?php the_time('d.m.Y');?></span>
          </div></a>
          <div class="bloco-des-nogabinete">

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
    <div class="col s12">
    <a href="http://www.agencia.ac.gov.br/categoria/no-gabinete/" class="btn green darken-4 btn-mais"><i class="fa fa-camera-retro white-text" aria-hidden="true"></i> Mais No Gabinete</a>
  </div>

</div>

</div>
