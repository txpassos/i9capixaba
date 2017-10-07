<?php get_header(); ?>

<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
</div>

<div class="container">


                       <div>
                            <h2><?php printf( __( 'Resultados da busca por: <strong style="color:#333;">%s</strong>', '' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                        </div>

                        <div class="row no-padding">

                        <!-- Noticias 1 // Inicio do Loop -->

                        <?php if (have_posts()): while (have_posts()) : the_post();?>

                          <div class="col s12 m4 l4">
                            <div class="card painel-noticias">
                              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="">
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
                                  <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

                                </div></a>
                                <div class="bloco-des-noticias3">
                                    <span class="destaque-chamada">
                                      <?php echo get_post_meta( $post->ID,'chamada', true )?>
                                    </span>
                                    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                                        <?php the_title();?>
                                    </a>
                                </div>
                                <div class="nocanto4 tamanho-icones">
                                    <?php include(TEMPLATEPATH.'/mod-social.php');?>
                                </div>
                            </div>
                          </div>


                        <?php endwhile;endif;?>
                        <div class="clearfix"></div>



                        </div>



                   <!-- BoTão de mais notícias -->
                      <div class="col s12 center">
                       <?php wp_pagination(); ?>
                   </div>

                </div>



<?php get_footer();?>
