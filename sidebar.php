  <div class="col s12 m4 l4">
    <div class="sidebar">
    <div class="card painel-noticias" style="margin-bottom: 23px;">
      <?php query_posts('showposts=1&cat=5');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
          <div class="bloco-img-noticias3 especiais-img linha-video" style="background: url('<?php echo $image[0]; ?>');">
            <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip darken-3 left  red" style="position: absolute;  left: 0px; "><i class="fa fa-video-camera white-text" aria-hidden="true"></i></span>Vídeos</span>
        </div></a>
        <div class="bloco-des-video">
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="red-text center-align">
                <?php the_title();?>
            </a>
        </div>
        <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social.php');?>
        </div>
      <?php endwhile;endif;?>
      <div class="clearfix"></div>
    </div> <!-- Fim do Vídeo Giro de Notícias -->

    <div class="card painel-noticias2" style="margin-bottom: 23px;">
      <?php query_posts('showposts=1&cat=61');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
          <div class="bloco-img-noticias3 especiais-img linha-nogabinete" style="background: url('<?php echo $image[0]; ?>');">
            <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip green darken-4 left " style=" position: absolute;  left: 0px; "><i class="fa fa-camera-retro white-text" aria-hidden="true"></i></span>No Gabinete</span>
        </div></a>
        <div class="bloco-des-nogabinete">

        </div>
        <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
        </div>
      <?php endwhile;endif;?>
      <div class="clearfix"></div>
    </div> <!-- Fim do No Gabinete -->

<!--  chamando widget publicidade lateral -->
<div >
  <?php dynamic_sidebar( 'publicidade-lateral' ); ?>

</div>

<!-- Artigo -->
<div class="nogabinetes">
  <?php query_posts('showposts=1&cat=69');?>
  <?php if (have_posts()): while (have_posts()) : the_post();?>
    <div>
      <div class="card painel-artigo orange">
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'artigo' ); ?>
      <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
          <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip left  orange" style=" position: absolute;  left: 0px; "><i class="fa white-text fa-file-text" aria-hidden="true"></i></span>Artigo</span>
      </div></a>

      <div class="bloco-des-artigo">
          <a class="white-text" href="<?php the_Permalink()?>" title="<?php the_title();?>"><?php the_title();?></a>
      </div>
      <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>
<!-- Fim div Artigo -->
</div>
  </div> <!-- Fim div Sidebar -->
  </div>
</div>

<!--<div class="col s12 m4 l4">
  <div class="sidebar">
    <div class="card painel-noticias" style="margin-bottom: 23px;">
        <div class="bloco-img-noticias3 especiais-img linha-nogabinete" style="background: url('assets/img/slider1.jpg');">
            <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip green darken-4 left " style=" position: absolute;  left: 0px; "><i class="fa fa-camera-retro white-text" aria-hidden="true"></i></span>No Gabinete</span>
        </div>
        <div class="bloco-des-nogabinete">
            <span class="destaque-chamada">24/09/2016</span>
            <a class="green-text darken-4" href="#">I am a very simple card. I am good at containing</a>
        </div>
    </div>
    <div class="card painel-noticias orange">
        <img src="15780859_1375229162513371_5393227776356346289_n.jpg" width="200" style="margin: auto; position: absolute; top: 40px; left: 0; bottom: 0; right: 0; height: 80px; width: 80px;" class="circle z-depth-1" />
        <div class="bloco-img-noticias3 especiais-img" style="background: url('assets/img/slider1.jpg');">
            <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip left  orange" style=" position: absolute;  left: 0px; "><i class="fa white-text fa-file-text" aria-hidden="true"></i></span>Artigo</span>
        </div>
        <div class="bloco-des-artigo">
            <a class="white-text" href="#">I am a very simple card. I am good at containing</a>
        </div>
        <div class="nocanto4 tamanho-icones">
            <i class="fa fa-whatsapp icons-social white-text" aria-hidden="true"></i>
            <a href="#"><i class="fa fa-facebook-official icons-social white-text" aria-hidden="true"></i></a>
            <i class="fa fa-twitter-square white-text" aria-hidden="true"></i>
        </div>
    </div>
  </div>
</div> -->
