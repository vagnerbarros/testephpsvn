<?php

function recebe_captcha() {
	
  $url = 'http://www.nfe.fazenda.gov.br/scripts/srf/intercepta/captcha.aspx?opt=image';
  $arquivo = 'C:/wamp/www/TeamTI/arquivos/captcha.gif';
  $cookie = 'C:/wamp/www/TeamTI/arquivos/cookie.txt'; 

  $ch = curl_init ();

  curl_setopt_array($ch, array(
    CURLOPT_URL => $url, //url que produz a imagem do captcha.
    CURLOPT_COOKIEFILE => $cookie, //esse mais o debaixo fazem a mágica do captcha
    CURLOPT_COOKIEJAR => $cookie,  //esse mais o de cima fazem a mágica do.. ah já falei isso;
    CURLOPT_FOLLOWLOCATION => 1, //não sei, mas funciona :D
    CURLOPT_RETURNTRANSFER => 1, //retorna o conteúdo.
    CURLOPT_BINARYTRANSFER => 1, //essa tranferencia é binária.
    CURLOPT_HEADER => 0, //não imprime o header.
  ));

  $data = curl_exec($ch);

  curl_close ($ch);

  //salva a imagem
  $fp = fopen($arquivo,'w');
  fwrite($fp, $data);
  fclose($fp);

}

?>