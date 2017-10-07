<div class="right">
<ul class="">
  <li><a href="whatsapp://send?text=<?php the_title();?>+<?php the_Permalink(); ?>" class="waves-effect waves-light btn green"><i class="fa fa-whatsapp fa-lg " aria-hidden="true"></i></a></li>
  <li><a href="http://www.facebook.com/share.php?u=<?php the_Permalink(); ?>" class="waves-effect waves-light btn blue"><i class="fa fa-facebook-official fa-lg " aria-hidden="true"></i></a></li>
  <li><a href="https://twitter.com/intent/tweet?text=<?php the_title();?>+<?php the_Permalink(); ?>" class="waves-effect waves-light btn blue lighten-1"><i class="fa fa-twitter-square fa-lg " aria-hidden="true"></i></a></li>
  <li><a href="mailto:?subject=<?php the_title();?>&amp;body=<?php echo get_post_meta( $post->ID,'txt-facebook', true )?> <?php the_Permalink(); ?>" title=”Envie este artigo a um amigo!” class="waves-effect waves-light btn orange"><i class="fa text-darken-1 fa-lg fa-envelope-o " aria-hidden="true"></i></a></li>
  <li><a href="#" onclick="window.print();return false;" class="waves-effect waves-light btn grey"><i class=" fa green-darken-4 fa-lg fa-print" aria-hidden="true"></i></a></li>
  <li><a href="#" onclick="goBack()" class="waves-effect waves-light btn grey darken-3"><i class=" fa text-darken-1 fa-lg fa-mail-reply" aria-hidden="true"></i></a></li>
</ul>
</div>
