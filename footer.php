<footer class="page-footer black lighten-3">
    <div class="container">
        <div class="row">

            <div class="col l4 m12 s12">
                <?php dynamic_sidebar( 'rodape1' ); ?>
                <!-- Chamando formulario do Odin -->

            </div>
            <div class="col l5 m12 s12">
                <?php dynamic_sidebar( 'rodape2' ); ?>
            </div>
            <div class="col l3 m12 s12">
                <?php dynamic_sidebar( 'rodape3' ); ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
             <div class="col s12 m6 l6">
                Aldeia Play © 2017 Secom / Governo do Estado do Acre - Todos os direitos reservados
            </div>
            <div class="col s12 m6 l6">
                <a href="#" class="white-text"><span class="icon-aldeia-04 right" style="font-size:25px;height:60px;"></span></a>
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
