<?php 

$url = $_POST['url'];
$arquivo = 'C:/wamp/www/TeamTI/arquivos/pagina.txt';

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_BINARYTRANSFER => 1,
    CURLOPT_HEADER => 0,
  ));    
  
  $data = curl_exec($ch);
  curl_close ($ch);

  $fp = fopen($arquivo,'w');
  fwrite($fp, $data);
  fclose($fp);

  $ponteiro = fopen($arquivo, 'r');
  while(!feof($ponteiro)){
  	echo fgetss($ponteiro);
  }
?>