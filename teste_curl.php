<?php
define('CURL_WEBSITE', 'algumSite');
header('Content-type: text/html; charset=iso-8859-1');
if(!extension_loaded('curl')){
	$ext = preg_match('/win/i', PHP_OS)? '.dll' : '.so';
	$prefix = ($ext == '.dll')? 'php_' : '';
	if(!dl($prefix.'curl'.$ext)){
		echo 'A extensão curl é necessária para a execução correta desse script';
		exit(0);
	}
}

ob_start();
$curl = @curl_init(CURL_WEBSITE);
if(!$curl){
	echo 'Não iniciou a sessão curl';
	ob_end_flush();
	exit(0);
}
ob_end_clean();
ob_end_flush();
curl_close($curl);
echo 'Sessão curl iniciada com sucesso!';
?>
