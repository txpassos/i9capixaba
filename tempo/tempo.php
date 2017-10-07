<?php

// Sua chave de API HG Braisl
//$chave = '327aef04'; // Crie sua chave em http://hgbrasil.com/weather

//$ip = $_SERVER["REMOTE_ADDR"];
//$lat = $_GET['lat'];
//$lon = $_GET['lon'];
//$city = 'Rio Branco';

// Obtem os dados da API passando os parametros
//$dados = hg_request(array('lat' => $lat, 'lon' => $lon, 'user_ip' => $ip), $chave);
//$dados = hg_request(array('city_name' => $city), $chave);
//$dados = hg_request(array('user_ip' => $ip), $chave);

// Formata dos dados recebidos
/*$imprima = json_encode(array(
  'temperatura' => $dados->results->temp.' º',
  'umidade' => $dados->results->humidity.' %',
  'descricao' => $dados->results->description,
  'cidade' => $dados->results->city,
  'nascer_do_sol' => $dados->results->sunrise,
  'por_do_sol' => $dados->results->sunset,
  'vento' => $dados->results->wind_speedy,
  'imagem' => 'tempo/imagens/'.$dados->results->img_id.'.png',
));*/

$myJSON = '{ "name":"John", "age":30, "city":"New York" }';

echo "myFunc(".$myJSON.");";

/* ================================================
 * Função para resgatar os dados da API HG Brasil
 *
 * Parametros:
 *
 * parametros: array, informe os dados que quer enviar para a API
 * chave: string, informe sua chave de acesso
 * endpoint: string, informe qual API deseja acessar, padrao weather (previsao do tempo)
 */

/*function hg_request($parametros, $chave = null, $endpoint = 'weather'){
  $url = 'http://api.hgbrasil.com/'.$endpoint.'/?format=json&';

  if(is_array($parametros)){
    // Insere a chave nos parametros
    if(!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));

    // Transforma os parametros em URL
    foreach($parametros as $key => $value){
      if(empty($value)) continue;
      $url .= $key.'='.urlencode($value).'&';
    }

    // Obtem os dados da API
    $resposta = file_get_contents(substr($url, 0, -1));
    return json_decode($resposta);
  } else {
    return false;
  }
}*/

  /*$url = 'https://api.hgbrasil.com/weather/?format=json&city_name=Feij%C3%B3&key=327aef04';
  $resposta = file_get_contents(substr($url, 0, -1));

  echo $resposta;*/

?>


