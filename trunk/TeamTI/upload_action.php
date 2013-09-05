<?php 


if(isset($_FILES['ufile']['name'])){
       echo "Uploading: ".$_FILES['ufile']['name']."<br>";

       $tmpName = $_FILES['ufile']['tmp_name'];
       $newName = $_FILES['ufile']['name'];

       if(!is_uploaded_file($tmpName) || !move_uploaded_file($tmpName, 'C:/wamp/www/TeamTI/nfe/'.$newName)){
            echo "FAILED TO UPLOAD " . $_FILES['ufile']['name'] .
                 "<br>Temporary Name: $tmpName <br>";
       } else {
            echo "File uploaded.  Thank you!";
       } 

   } else {
     echo "You need to select a file.  Please try again.";
  }
?>