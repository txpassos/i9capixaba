<div class="row">
    <div class="col s12 no-padding">
      <h2>Vídeos</h2>
    </div>
    <div class="col s12 m4 no-padding">
      <?php query_posts('showposts=1&cat=99');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a class="modal-trigger" href="#modal1">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'videos' ); ?>
      <div class="box-videos especiais-img b3" style="background: url('<?php echo $image[0]; ?>');border-radius: 2px 0 0 2px;">
        <i class="material-icons white-text">play_circle_outline</i>
        <span class="titulo-especiais white-text"><?php the_title();?></span>
      </div>
      </a>
      <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="video-container">
              <iframe width="560" height="315" src="<?php $key="Video";echo get_post_meta($post->ID,$key,true)?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
      </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
    </div>

    <div class="col s12 m4 no-padding">
      <?php query_posts('showposts=1&cat=99&offset=1');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a class="modal-trigger" href="#modal2">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'videos' ); ?>
      <div class="box-videos especiais-img b3" style="background: url('<?php echo $image[0]; ?>');border-radius: 2px 0 0 2px;">
        <i class="material-icons white-text">play_circle_outline</i>
        <span class="titulo-especiais white-text"><?php the_title();?></span>
      </div>
      </a>
      <div id="modal2" class="modal">
        <div class="modal-content">
            <div class="video-container">
              <iframe width="560" height="315" src="<?php $key="Video";echo get_post_meta($post->ID,$key,true)?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
      </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
    </div>

    <div class="col s12 m4 no-padding">
      <?php query_posts('showposts=1&cat=99&offset=2');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a class="modal-trigger" href="#modal3">
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'videos' ); ?>
      <div class="box-videos especiais-img b3" style="background: url('<?php echo $image[0]; ?>');border-radius: 2px 0 0 2px;">
        <i class="material-icons white-text">play_circle_outline</i>
        <span class="titulo-especiais white-text"><?php the_title();?></span>
      </div>
      </a>
      <div id="modal3" class="modal">
        <div class="modal-content">
            <div class="video-container">
              <iframe width="560" height="315" src="<?php $key="Video";echo get_post_meta($post->ID,$key,true)?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
      </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
    </div>
  </div>
