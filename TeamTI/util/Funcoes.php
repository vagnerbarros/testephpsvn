<?php

function recebe_captcha() {
	
  $url = 'http://www.nfe.fazenda.gov.br/scripts/srf/intercepta/captcha.aspx?opt=image';
  $arquivo = 'C:/wamp/www/TeamTI/arquivos/captcha.gif';
  $cookie = 'C:/wamp/www/TeamTI/arquivos/cookie.txt'; 

  $ch = curl_init ();

  curl_setopt_array($ch, array(
    CURLOPT_URL => $url, //url que produz a imagem do captcha.
    CURLOPT_COOKIEFILE => $cookie, //esse mais o debaixo fazem a m�gica do captcha
    CURLOPT_COOKIEJAR => $cookie,  //esse mais o de cima fazem a m�gica do.. ah j� falei isso;
    CURLOPT_FOLLOWLOCATION => 1, //n�o sei, mas funciona :D
    CURLOPT_RETURNTRANSFER => 1, //retorna o conte�do.
    CURLOPT_BINARYTRANSFER => 1, //essa tranferencia � bin�ria.
    CURLOPT_HEADER => 0, //n�o imprime o header.
  ));

  $data = curl_exec($ch);

  curl_close ($ch);

  //salva a imagem
  $fp = fopen($arquivo,'w');
  fwrite($fp, $data);
  fclose($fp);

}

?>