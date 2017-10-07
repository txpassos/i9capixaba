<?php
$randomPost = $wpdb->get_var(“SELECT guid FROM $wpdb->posts WHERE post_type = ‘post’ AND post_status = ‘publish’ ORDER BY rand() LIMIT 1″);
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
‘category__in’ => $category_ids,
‘post__not_in’ => array($post->ID),
‘showposts’=>3,
‘caller_get_posts’=>1
);
$my_query = new wp_query($args);

?>
<div class="row">
<div class="col s12 m8 l8">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1');?>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
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

          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
		<div class="bloco-img-noticias especiais-img" style="background: url('<?php echo $image[0]; ?>');">
              <span class="chip orange white-text z-depth-1-half nocanto1">
                    <?php $category = get_the_category(); echo $category[0]->cat_name;?>
              </span>
          </div></a>
          <div class="bloco-des-noticias">
              <span class="destaque-chamada">
                    <?php echo get_post_meta( $post->ID,'chamada', true )?>
                </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-titulo orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
              <span class="destaque-resumo hide-on-med-and-down"><?php $DestaqueChamada = get_post_meta( $post->ID,'chamada-destaque1', true ); echo $DestaqueChamada;?></span>
          </div>
          <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
        <?php endwhile;endif;?>
        <div class="clearfix"></div>
      </div>
</div>


  <div class="col s12 m4 l4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&offset=1');?>

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

        <?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
          <div class="bloco-img-noticias2 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

          </div>  </a>
		 <span class="chip orange white-text z-depth-1-half nocanto1">
			 <?php $category = get_the_category(); echo $category[0]->cat_name;?>
			</span>
          <div class="bloco-des-noticias2">
              <div class="card-content">
                  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text destaque-fonte">
                    <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>
                  </a>
              </div>
          </div>
          <div class="nocanto4 tamanho-icones">
              <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

</div>

<div class="row">

<div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&offset=2');?>

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

        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
          </div></a>
          <span class="chip orange white-text z-depth-1-half nocanto1">
              <?php $category = get_the_category(); echo $category[0]->cat_name;?>
          </span>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">   <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&offset=3');?>
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


        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <div class="bloco-img-noticias2 especiais-img orange darken-2">
              <span class="chip orange white-text z-depth-1-half nocanto1">
                  <?php $category = get_the_category(); echo $category[0]->cat_name;?>
              </span>
          </div>
          <div class="bloco-des-noticias4">
              <div class="card-content">
                  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text">
                    <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>
                  </a>
              </div>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&offset=4');?>

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

        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
          </div></a>
          <span class="chip orange white-text z-depth-1-half nocanto1">
              <?php $category = get_the_category(); echo $category[0]->cat_name;?>
          </span>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">    <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

</div>
