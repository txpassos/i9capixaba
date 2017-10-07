<?php get_header(); ?>

<div class="container">
  <div class="row">
      <div class="col s12">
        <?php if (have_posts()): while (have_posts()) : the_post();?>

        <h1><?php the_title();?></h1>

        <?php  if (has_excerpt() ) { ?>
        <h2><?php the_excerpt(); ?></h2>
        <?php } ?>

        <p><?php the_content(__('Leia mais'));?></p>

        <?php endwhile; else:?>
        <?php endif;?>
        </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>
