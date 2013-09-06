<?php
// Pega os valores dos campos que foram enviados pelo formulбrio
// *sem validaзгo mesmo, й sу pra exemplo tб?
$chave = $_POST['chave'];
$letras = $_POST['captcha'];

echo $chave;
echo $letras;

$cookie = $_SERVER['DOCUMENT_ROOT'].'/rand/receita.txt'; 
$reffer = "http://google.com"; 
$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/20030624 Netscape/7.1 (ax)"; 
$url ="http://www.nfe.fazenda.gov.br/portal/consulta.aspx?tipoConsulta=completa&tipoConteudo=XbSeqxE8pl8="; 

$post_fields = "txtChaveAcessoCompleta={$chave}&txtCaptcha={$letras}"; 

 
$ch = curl_init();

curl_setopt_array($ch, array(
  CURLOPT_URL => $url,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => $post_fields,
  CURLOPT_USERAGENT => $agent,
  CURLOPT_REFERER => $reffer,
  CURLOPT_COOKIEFILE => $cookie, 
  CURLOPT_COOKIEJAR => $cookie,
  CURLOPT_FOLLOWLOCATION => 1,
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_HEADER => 0,
));

$result = curl_exec($ch);

curl_close($ch);


?>