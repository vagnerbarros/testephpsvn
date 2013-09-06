<?php
require_once '../util/Funcoes.php';

recebe_captcha();
?>
<html>
<head></head>
<body>
	<img src='../arquivos/captcha.gif' />
	<form action="../action/conteudoSefazAction.php" method="POST">
      	<div>
	        <label>Captcha:</label>
	        <input type="text" maxlength="4" name="captcha"><br>
        </div>
        <div>
	        <label>Chave: </label>
	        <input type="text" name="chave" >
        </div>
    	<input type="submit">
    </form>
</body>
</html>
