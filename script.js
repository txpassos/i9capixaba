$(document).ready(function(){
  // Inicia com a previsao por Geo IP, sem passar as coordenadas
  atualizarDados();

});


function atualizarDados() {
  //localizacao = typeof localizacao !== 'undefined' ? localizacao : false;

  //alert(localizacao);

  $.ajax({
        headers: {
        'Accept': 'application/json',
        'Content-Type': 'text/plain'
    },
    url: 'tempo.php',
    dataType: 'json',
    success: function(dados) {

      // Loop inserindo os dados no HTML
      $.each(dados, function(dado, valor){
        $('.'+dado).text(valor);
      });

      // Insere a imagem
      $('.imagem-do-tempo').attr('src', dados.imagem);
    }
  });

}
