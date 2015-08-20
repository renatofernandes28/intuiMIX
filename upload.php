<?php

       //ini_set('display_errors',1);
       //error_reporting(E_ALL | E_STRICT);
        
        
       $uploaddir = 'uploads/';
	     $uploadfile1 = $uploaddir . basename($_FILES['file1']['name']);
	     $uploadfile2 = $uploaddir . basename($_FILES['file2']['name']);
	     $uploadfile3 = $uploaddir . basename($_FILES['file3']['name']);

        move_uploaded_file($_FILES['file1']['tmp_name'], $uploadfile1); 
        move_uploaded_file($_FILES['file2']['tmp_name'], $uploadfile2);       
        move_uploaded_file($_FILES['file3']['tmp_name'], $uploadfile3);
       
       
       
       
       
       
       
        
        
        

        header("Location: index.html");
?>