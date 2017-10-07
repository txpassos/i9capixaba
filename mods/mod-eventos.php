
  <div class="row">
    <div class="col s6">
    <h3>Últimos livros</h3>
    </div>
    <div class="col s6" style="padding-top: 30px;">
    <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/eventos/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
</a>
    </div>
</div>

  <div class="row">
    <div class="eventos">
    <?php
    $args = array( 'post_type' => 'eventos', 'posts_per_page' => 8 );
    $loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="col s12 l3">
        <div class="card painel-agenda">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'agenda-cultural' ); ?>
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>"><div class="bloco-img-agenda especiais-img" style="background: url('<?php echo $image[0]; ?>');">

            </div></a><span>
                      <?php echo wpdocs_custom_taxonomies_terms_links(); ?>
                 </span>
            <div class="bloco-des-agenda">
                <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2"><?php title_excerpt(28); ?></a>
                <span class="agenda-data-hora"><i class="fa fa-calendar" aria-hidden="true"></i>
<?php $data = get_post_meta( $post->ID,'data', true ); echo $data;?> · <i class="fa fa-clock-o" aria-hidden="true"></i>
<?php $hora= get_post_meta( $post->ID,'hora', true ); echo $hora;?></span>
                <span class="agenda-cidade"><i class="fa fa-map-marker" aria-hidden="true"></i>
</span> <?php $local = get_post_meta( $post->ID,'local', true ); echo $local;?></span>
            </div>
        </div>
      </div>

    <?php endwhile;?>
        </div>
    <div class="clearfix"></div>

      <div class="col s12 center">
    <!--  <a class="btn red" href="#">Enviar evento</a> -->
    </div>

    </div>
