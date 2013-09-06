<?php 

$url = 'www.globo.com';
$arquivo = 'C:/wamp/www/requisicao/teste.txt';

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url, //url que produz a imagem do captcha.
    CURLOPT_FOLLOWLOCATION => 1, //não sei, mas funciona :D
    CURLOPT_RETURNTRANSFER => 1, //retorna o conteúdo.
    CURLOPT_BINARYTRANSFER => 1, //essa tranferencia é binária.
    CURLOPT_HEADER => 0, //não imprime o header.
  ));    
  
  $data = curl_exec($ch);
  echo $data;
  curl_close ($ch);

  $fp = fopen($arquivo,'w');
  fwrite($fp, $data);
  fclose($fp);

  //retorna a imagem
  return $arquivo;
?>