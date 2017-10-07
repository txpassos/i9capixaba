<div class="row testesidebar" style="padding-top: 20px;">
  <div class="col s12 m10 l8 offset-l2 offset-m1 no-padding">
  </div>
  <div class="col s12 m10 l8 offset-l2 offset-m1 no-padding">
    <h3>Mais vídeos</h3>
<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=4&cat=-15968, -15966, -167,-61, -38, -9, -178, -5, -1, -35');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
    <div class="col s6 m6 l3">
      <div class="card painel-noticias">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
            <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

          </div>
        </a>
      </div>

    <div class="bloco-des-noticias3 grey-text text-darken-3">
      <span class="destaque-chamada">
        <?php echo get_post_meta( $post->ID,'chamada', true )?>
      </span>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte grey-text text-darken-2">
        <?php the_title();?>
      </a>
    </div>

    </div>


<?php endwhile;endif;?>
<div class="clearfix"></div>
</div>

</div>
