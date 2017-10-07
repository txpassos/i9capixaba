<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="container">
	<div class="row">
	<div id="content" role="main">

		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php get_search_form(); ?>

		<h3>Arquivos por mês:</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

		<h3>Arquivos por categoria:</h3>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
</div>
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
