<?php get_header(); ?>
<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
</div>
<div class="container">
<div class="row">
  <div class="col s12 m10 l8 offset-l1">
    <div class="card" style="padding: 30px;">
    <h1>Página não encontrada</h1>
    <p>Pedimos desculpa, mas a página que acessou não está mais disponível! Poderá ter sido removida ou alterada.</p>
    <p>Já verificou na barra de endereço do seu browser de internet se o URL está correto?.</p>
    <p>Se estiver tudo OK, por que não tentar fazer uma pesquisa em nosso site pelo conteúdo que está procurando?</p>
    <?php get_search_form(); ?>

    <p>Se desejar, poderá também saltar para a nossa <a href="http://www.agencia.ac.gov.br">home page</a> ou <a href="http://www.agencia.ac.gov.br/arquivo/">navegar em nossos arquivos</a></p>
    <p>Se desejar reportar esse erro, <a href="mailto:adaildo.neto@gmail.com">contate-nos</a>, para que o possamos resolver. Obrigado!</p>
</div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
