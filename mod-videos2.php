<div class="row">
  <div class="col s6">
    <h3 class="text-white">ÚLTIMOS VÍDEOS<span class="line-text green"></span></h3>
  </div>
  <div class="col s6" style="padding-top: 30px;">
  <a class="right white-text" href="/categoria/videos">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i></a>
  </div>
</div>
<div class="row">

  <!-- <div id="videos-youtube"></div> -->

<?php query_posts('showposts=4&cat=4');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
  <div class="col s12 m12 l12">

    <?php $videoid = get_post_meta( $post->ID,'videoid', true ); ?>
    <a class="modal-video" href="<?php the_Permalink()?>" title="<?php the_title();?>">

    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
    <div class="box-videos especiais-img" style="background: url('<?php echo $image[0]; ?>');border-radius: 2px 0 0 2px;">
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

</div>

  </div>
