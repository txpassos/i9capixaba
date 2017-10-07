<?php get_header(single);?>

<div class="container" style="padding-top: 85px;">

<div class="row">
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

    <div class="col s12 m5 l5">
      <div class="card">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'agenda-cultural' ); ?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>"><div class="bloco-img-agenda-post especiais-img" style="background: url('<?php echo $image[0]; ?>');">
</a>
          </div>
          <div class="bloco-des-agenda">
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2"><?php title_excerpt(28); ?></a>
              <span class="agenda-data-hora"><i class="fa fa-calendar" aria-hidden="true"></i>
<?php $data = get_post_meta( $post->ID,'data', true ); echo $data;?> · <i class="fa fa-clock-o" aria-hidden="true"></i>
<?php $hora= get_post_meta( $post->ID,'hora', true ); echo $hora;?></span>
              <span class="agenda-cidade"><i class="fa fa-map-marker" aria-hidden="true"></i>
</span> <?php $local = get_post_meta( $post->ID,'local', true ); echo $local;?></span>
          </div>
      </div>
<div class="right tamanho-icones">
<?php include(TEMPLATEPATH.'/mod-social.php');?>
</div>
        </div>

    <div class="col s12 m7 l7">



 <div class="card-content">

   <span>
         <?php echo wpdocs_custom_taxonomies_terms_links(); ?>
    </span>

            <div class="">
                <h1><?php the_title();?></h1>
              </div>


          </div>
          <div class="card-action info-post">
              <span class="data-post"> <?php the_time('d.m.Y');?> </span>
              <span class="hora-post"> <?php the_time('G:i');?></span>

                 <div class="clearfix"></div>
          </div>
          <div class="card-content">

              <?php the_content(__('Leia mais'));?>

       <span class="tag small"><?php the_tags(); ?></span>


<?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>

          </div>

  </div>

      <?php endwhile;?>
</div>
</div>
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-eventos.php');?>
</div>

<?php get_footer(single);?>
