<div class="fixed-action-btn vertical">
  <a  onclick="Materialize.showStaggeredList('#staggered-test')" class="btn-floating btn-large red">
    <i class="large material-icons">thumb_up</i>
  </a>
  <ul id="staggered-test">

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

    <li>
      <a href="whatsapp://send?text=<?php the_title();?>+<?php the_Permalink(); ?>" class="waves-effect waves-circle waves-light btn-floating green">
        <i class="fa fa-whatsapp white-text fa-lg icons-menu" aria-hidden="true"></i>
      </a></li>

    <li>
      <a href="http://www.facebook.com/share.php?u=<?php the_Permalink(); ?>" class="waves-effect waves-circle waves-light btn-floating blue">
        <i class="fa fa-facebook-official white-text fa-lg " aria-hidden="true"></i>
      </a></li>

    <li>
      <a href="https://twitter.com/intent/tweet?text=<?php the_title();?>+<?php the_Permalink(); ?>" class="waves-effect waves-circle waves-light btn-floating blue lighten-1">
        <i class="fa fa-twitter-square white-text fa-lg " aria-hidden="true"></i>
      </a></li>

    <li>
      <a href="mailto:?subject=<?php the_title();?>&amp;body=<?php echo get_post_meta( $post->ID,'txt-facebook', true )?> <?php the_Permalink(); ?>" title=”Envie este artigo a um amigo!” class="waves-effect waves-circle waves-light btn-floating orange">
        <i class="fa text-darken-1 fa-lg fa-envelope-o white-text" aria-hidden="true"></i>
      </a></li>

    <li>
      <a href="#" onclick="window.print();return false;" class="waves-effect waves-circle waves-light btn-floating grey">
        <i class=" fa green-darken-4 fa-lg fa-print white-text" aria-hidden="true"></i>
      </a></li>

    <li><a href="#" onclick="goBack()" class="waves-effect waves-circle waves-light btn-floating grey darken-3">
      <i class=" fa text-darken-1 fa-lg fa-mail-reply white-text" aria-hidden="true"></i>
    </a></li>

  </ul>

</div>
