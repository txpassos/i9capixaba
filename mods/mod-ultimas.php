<?php
$args = array(
    'showposts' => 5,
    'tag__not_in'  => array(2),
);
query_posts($args);

?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
<div class="col s12 m12 l12 no-padding ultimas" style="margin-bottom: 20px;">
  <div class="col s12 m6 l6 no-padding">
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <img class="responsive-img" src="<?php echo $image[0]; ?>">
    </a>
  </div>
  <div class="col s12 m6 l6" style="padding: 10px !important;">
    <h3><?php $Chamada= get_post_meta( $post->ID,'chamada', true ); echo $Chamada;?></h3>
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <h2><?php the_title();?></h2>
    </a>
    <span>
      <?php $alias = get_post_meta($post->ID,'author_alias',true);
        if(empty($alias)){
          echo  $author = get_the_author_link();
        }else{
          echo $author = $alias;
        }
      ?></span>
    <span>· <?php the_time('d/m/Y');?></span>
    <p><?php $Descricao= get_post_meta( $post->ID,'descricao', true ); echo $Descricao;?></p>
  </div>
</div>
<?php endwhile;endif;?>
