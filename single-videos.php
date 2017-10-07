<?php get_header(single);?>

<div class="row black">
<div class="container">

      <?php while (have_posts()) : the_post();?>

        <?php
global $short_url;
// Checar se ja existe um URL encurtado armazenado no banco de dados
if(get_post_meta($post->ID, "short_url", true) != ""){
  //Short URL already exists, pull from post meta
  $short_url = get_post_meta($post->ID, "short_url", true);
}
else {
  // Caso não tenha, vamos criar uma
  $full_url = get_permalink();
  $short_url = make_bitly_url($full_url);
  // Salvar no port_meta
  add_post_meta($post->ID, 'short_url', $short_url, true);
}
?>

    <div class="header-post"></div>
    <div class="col s12 m10 l8 no-padding">
                <?php
                    $imagepost = get_post_meta( $post->ID,'destaquepost', true );
                    $imageP = wp_get_attachment_image_src( $imagepost, 'slider-post' );
                    $imageD = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-post' );
                    if(empty($imageP)){
                       $image = $imageD;
                    }else{
                      $image = $imageP;
                    }

                    ;?>
    <div class="video-container especiais-img" style="background: url('<?php echo $image[0]; ?>') no-repeat;">
      <?php the_content(__('Leia mais'));?>
    </div>
  </div>
        <!--
        <div class="col m1 l1 push-l1"  >
            <div class="btnsocial hide-on-med-and-down">
                <?php include(TEMPLATEPATH.'/mod-btnsocial.php');?>
            </div>
        </div>
        -->
        <div class="col s12 m10 l4">
            <div id="post" class="card" style="">



       <div class="card-content">
                <div class="row" style="margin-top: 15px; padding: 0px 15px 20px 15px;">
                  <div class="col s12 l6 no-padding">
                    <div class="autor-post">
                      <div class="autor-img">
                        <a href="#">
                          <img src="<?php bloginfo('template_url');?>/logo-tvaldeia.jpg" class="circle">
                        </a>
                      </div>
                      <div class="autor-name">
                          <a href="#">TV Aldeia</a>
                          <span href="#" class="autor-link">Veja mais</span>
                      </div>
                    </div>
                  </div>
                  <div class="col s12 l6 no-padding">
                    <div class="social-post right-align">
                        <?php include(TEMPLATEPATH.'/mod-social.php');?>
                    </div>
                  </div>
                </div>
                
                <div class="info-post">
                    <span class="data-post"> <?php the_time('l, d M Y');?> </span>
                       <div class="clearfix"></div>
                </div>

                <h1><?php the_title();?></h1>

                    <p><?php $descricao= get_post_meta( $post->ID,'descricao', true ); echo $descricao;?></p>

                     <p><span class="tag small"><?php the_tags(); ?></span></p>
                </div>

          </div>
            </div>
        </div>


  <?php endwhile;?>
</div>
<div class="container">

  <!-- INICIO - Módulo - Mais Notícias e Sidebar -->
     <?php include(TEMPLATEPATH.'/mod-videos.php');?>

<!-- FIM - Módulo - Mais Notícias e Sidebar -->
</div>

<?php get_footer(single);?>
