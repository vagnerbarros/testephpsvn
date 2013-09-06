<?php 
require_once '../util/Constantes.php';

if(isset($_FILES['ufile']['name'])){
       echo "Uploading: ".$_FILES['ufile']['name']."<br>";
	   
       $dir = Constantes::$_DIRETORIO_XML;
       $tmpName = $_FILES['ufile']['tmp_name'];
       $newName = $_FILES['ufile']['name'];

       if(!is_uploaded_file($tmpName) || !move_uploaded_file($tmpName, $dir.$newName)){
            echo "FALHA DE UPLOAD".$_FILES['ufile']['name']."<br>Arquivo: $tmpName <br>";
       } else {
            echo "Upload realizado com sucesso!!"; ?>
            <a href="http://localhost/nfephp/exemplos/testaNFeDANFE.php?dir=<?php echo $dir?>&xml=<?php echo $newName?>">Gerar DANFE</a><?php 
       } 
   } else {
     echo "Você precisa selecionar um arquivo. Por favor tente novamente.";
  }
?>