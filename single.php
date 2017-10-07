<?php get_header(single);?>

<div class="container" style="padding-top: 50px;">



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
    <div class="container testepin">
    <div class="row">
      <div class="col s12 m8 l8 push-l2 no-padding">
        <h1><?php the_title();?></h1>
      </div>
        <div class="col s12 m6 l6 push-l3 no-padding post">
                   <div class="card-action info-post">
                     <div class="col s6 no-padding">
                       <span class="autor-post">
                         Por
                         <?php

                             $alias = get_post_meta($post->ID,'author_alias',true);
                         if(empty($alias)){
                           echo  $author = get_the_author_link();
                         }else{
                           echo $author = $alias;
                         }
                         ?>

                       </span></br>
                       <span class="data-post"> <?php the_time('d/m/Y');?> </span>
                       <span class="hora-post">- <?php the_time('G:i');?></span>
                     </div>
                         <div class="col s6 no-padding">
                           <div class="right-align flow-text">
                           <?php include(TEMPLATEPATH.'/mods/mod-social.php');?>
                         </div>
                         </div>
                   </div>
            <div id="post" class="card">

                      <div class="card-content no-padding">

                <p><?php the_content(__('Leia mais'));?></p>


  <?php include(TEMPLATEPATH.'/mods/mod-btncurtiu.php');?>

                </div>
            </div>
        </div>
    </div>

  <?php endwhile;?>
</div>





</div>

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mods/mod-noticias-post.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->

<?php get_footer(single);?>
