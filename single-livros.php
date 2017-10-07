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
    <div class="col s12 m6 l3 no-padding">
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
                    <img class="responsive-img" src="<?php echo $image[0]; ?>">
  </div>
        <!--
        <div class="col m1 l1 push-l1"  >
            <div class="btnsocial hide-on-med-and-down">
                <?php include(TEMPLATEPATH.'/mod-btnsocial.php');?>
            </div>
        </div>
        -->
        <div class="col s12 m6 l4">
            <div id="post" class="card" style="">



       <div class="card-content">
       <!--
                <div class="row" style="margin-top: 15px; padding: 0px 15px 20px 15px;">
                  <div class="col s6 no-padding">
                    <div class="autor-post">
                      <div class="autor-img">
                      </div>
                      <div class="autor-name">
                          <a href="#">TV Aldeia</a>
                          <span href="#" class="autor-link">Veja mais</span>
                      </div>
                    </div>
                  </div>
                </div> -->

                <h1 style="padding-bottom: 5px;"><b><?php the_title();?></b></h1>
                    <span style="font-size: 12px;"><?php $autor= get_post_meta( $post->ID,'autor', true ); echo $autor;?></span>
                    <p><?php $descricao= get_post_meta( $post->ID,'descricao', true ); echo $descricao;?></p>

                     <p><span class="tag small"><?php the_tags(); ?></span></p>
                    <div class="col s6 no-padding">
                     <a class="waves-effect waves-light btn green" href="<?php $link= get_post_meta( $post->ID,'link', true ); echo $link;?>">VER AGORA</a>
                    </div>
                    <div class="col s6 no-padding">
                          <div class="social-post right-align">
                              <?php include(TEMPLATEPATH.'/mod-social.php');?>
                          </div>
                    </div>
                </div>

          </div>
            </div>
        </div>


  <?php endwhile;?>
</div>
<div class="container">

  <!-- INICIO - Módulo - Mais Notícias e Sidebar -->
     <?php include(TEMPLATEPATH.'/mod-livros.php');?>

<!-- FIM - Módulo - Mais Notícias e Sidebar -->
</div>

<?php get_footer(single);?>
