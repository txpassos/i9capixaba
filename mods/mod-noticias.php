<div class="row testesidebar">
  <div class="col s12 m8 l8 no-padding">

<!-- Noticias 1 // Inicio do Loop -->


<?php $args = array(
    'showposts' => 12,
    'cat' => array (-15968,-15966,-167,-61,-38,-9,-178,-5,-1,-35,-18910,-18911,-18912,-18913,-18918,-18907),
    'tag__not_in'  => array( 18910,18911,18912,18913,18918,18907,19572),
);
query_posts($args);
?>


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

    <div class="col s12 m6 l6">
      <div class="card painel-noticias">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
            <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">
                  <?php echo get_post_meta( $post->ID,'chamada', true )?>
              </span>
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
    </div>



<?php endwhile;endif;?>
<div class="clearfix"></div>

<!-- BoTão de mais notícias -->
    <div class="col s12">
    <a href="http://www.agencia.ac.gov.br/categoria/noticias/" class="btn orange btn-mais">Mais notícias</a>
  </div>

</div>

<?php get_sidebar(); ?>

</div>
