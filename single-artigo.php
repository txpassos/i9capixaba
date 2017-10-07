<?php get_header(single);?>

<div class="container">


<?php global $more;?>
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

    <div class="row no-padding">
            <?php
                    $imagepost = get_post_meta( $post->ID,'destaquepost', true );
                    $imageP = wp_get_attachment_image_src( $imagepost, 'slider-post' );
                    $imageD = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' );
                    if(empty($imageP)){
                       $image = $imageD;
                    }else{
                      $image = $imageP;
                    }

                    ;?>
		<div class="header-post"></div>
        <div class="especiais-img img-post autoH-top" style="background: url('<?php echo $image[0]; ?>') no-repeat;">
        </div>
    </div>
    <div class="container testepin">
    <div class="row">
        <div class="col m1 l1 push-l1"  >
            <div class="btnsocial hide-on-med-and-down">
                <?php include(TEMPLATEPATH.'/mod-btnsocial.php');?>
            </div>
        </div>
        <div class="col s12 m10 l8 offset-l1 no-padding post ">
            <div id="post" class="card" style="">



	     <div class="card-content flow-text">

		          <a class="chip" href="#">categoria</a>

                  <div class="">
                      <h1><?php the_title();?></h1>
                    </div>

                    <div class="right-align flow-text hide-on-med-and-up">
                      <?php include(TEMPLATEPATH.'/mod-social.php');?>
                    </div>

                </div>
                <div class="card-action info-post">
                    <span class="autor-post">
                      <?php
                                $author = get_the_author();
                                $alias = get_post_meta($post->ID,'author_alias',true);
                      if(empty($alias)){
                        echo $author;
                      }else{
                        echo $alias;
                      }
                      ?>

                    </span></br>
                    <span class="data-post"> <?php the_time('d.m.Y');?> </span>
                    <span class="hora-post"> <?php the_time('G:i');?></span>

                    	 <div class="clearfix"></div>
                </div>
                <div class="card-content">
                    <?php global $more = 0;?>
                    <p><?php the_content('Leia mais...');?></p>
                    </br><span class="tag small"><?php the_tags(); ?></span>

  <div class="right tamanho-icones">
      <?php include(TEMPLATEPATH.'/mod-social.php');?>
    </div>
  <?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>

                </div>
            </div>
        </div>
    </div>

  <?php endwhile;?>
</div>





</div>

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-noticias-post.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->

<?php get_footer(single);?>
