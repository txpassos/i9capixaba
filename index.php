<?php get_header(); ?>

<div class="container" style="padding-top: 90px;">

<!-- Inicio - Módulo Slider -->
<?php include(TEMPLATEPATH.'/mods/mod-slider.php'); ?>
<!-- Fim - Módulo Slider -->

<!-- Inicio - Módulo Destaques -->
<?php include(TEMPLATEPATH.'/mods/mod-destaques.php'); ?>
<!-- Fim - Módulo Destaques -->
</div>

<div class="container" style="padding-top: 30px;">
<div class="row no-padding">
<div class="col s12 m12 l8">
  <!-- Inicio - Módulo Destaques -->
  <?php include(TEMPLATEPATH.'/mods/mod-ultimas.php'); ?>
  <!-- Fim - Módulo Destaques -->
</div>

<div class="col s12 m12 l4">
  <h2>sidebar</h2>
</div>
</div>
</div>

<?php get_footer(); ?>
