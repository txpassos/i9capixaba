<footer class="page-footer">
  <!--  <div class="container">
        <div class="row">

            <div class="col l4 m12 s12">
                <?php //dynamic_sidebar( 'rodape1' ); ?>

            </div>
            <div class="col l5 m12 s12">
                <?php// dynamic_sidebar( 'rodape2' ); ?>
            </div>
            <div class="col l3 m12 s12">
                <?php //dynamic_sidebar( 'rodape3' ); ?>
            </div>
        </div>
    </div>-->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
             <div class="col s12 m6 l6">
                2017 © i9 Eventos e Comunicação - Todos os direitos reservados
            </div>
            <div class="col s12 m6 l6">
              <span class="right" style="font-size: 0.8em;">Desenvolvido por <a class="white-text" href="http://www.facebook.com/tntnnerd"><b>TNTNerd</b></a></span>
            </div>
            </div>
        </div>
    </div>
</footer>
<!--  Scripts-->


<script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/slick/slick.min.js"></script>
<script src="<?php bloginfo('template_url');?>/custom.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/search.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/classie.js"></script>


<!-- Definindo o layout da paginação -->
<script type="text/javascript">
$('.wp_pagination').find('ul').addClass('pagination');
$('.pagination').find('li').addClass('waves-effect');
$('.current').addClass('btn-flat orange white-text');
$('.calendar_wrap').addClass('white-text');
$('#wp-calendar').addClass('centered');
$('#wp-calendar').find('a').addClass('chip orange lighten-4 red-text darken-text-3');
$('#post').find('img').addClass('responsive-img aligncenter');
$('#no-responsive').removeClass('responsive-img aligncenter');
$('.wp-caption').width('auto').height('auto');
$('.wp-caption-text').width('auto').height('auto');
$('wp-caption aligncenter').addClass('alignleft');
</script>
<?php wp_footer(); ?>
</body>
</html>
