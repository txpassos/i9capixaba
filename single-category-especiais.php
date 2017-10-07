<?php get_header();?>

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

    <div class="row no-padding">
		<div class="header-post"></div>

    </div>
    <div class="container">
    <div class="row">
        <div class="col s12 m12 l8 offset-l2 no-padding post ">
            <div id="post" class="card-content flow-text" style="">

              <h1><?php the_title();?></h1>
              <?php  if (has_excerpt() ) { ?>
              <h2><?php the_excerpt(); ?></h2>
              <?php } ?>
                    <p><?php the_content(__('Leia mais'));?></p>

                 
  <?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>


            </div>
        </div>
    </div>

  <?php endwhile;?>
</div>





</div>


<?php get_footer(single);?>
