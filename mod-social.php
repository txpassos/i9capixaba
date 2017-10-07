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

  <a href="whatsapp://send?text=<?php echo get_post_meta( $post->ID,'txt-facebook', true )?>+<?php the_Permalink(); ?>">
      <i class="fa fa-whatsapp icons-social show" aria-hidden="true"></i>
      </a>

  <a href="http://www.facebook.com/share.php?u=<?php the_Permalink(); ?>">
      <i class="fa fa-facebook-f icons-social" aria-hidden="true"></i>
      </a>

  <a href="https://twitter.com/intent/tweet?text=<?php echo get_post_meta( $post->ID,'tweet', true )?>+<?php the_Permalink(); ?>">
      <i class="fa fa-twitter icons-social" aria-hidden="true"></i>
    </a>
