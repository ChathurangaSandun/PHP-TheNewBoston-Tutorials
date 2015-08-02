<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$name =  $_FILES['file']['name']; //use super globle array

$temp_name =  $_FILES['file']['tmp_name'];

if (isset($name)){
    if(!empty($name)){
        $location = 'upload/';
        
        if(move_uploaded_file($temp_name, $location.$name)){
            echo 'uploaded!!!!!!!!!!!!!';
        }  else {
            echo 'some error';
        }
        
    }else{
        echo 'not';
    }
}else{
    echo 'fdsfsdf';
}

    




?>

<form action="uploadFiles2.php" method="post" enctype="multipart/form-data"> <!-- must add to enctype attribure -->
    <input type="file" name="file" />
    <br><br>
    <input type="submit" name="submit" value="Submit"/>
    
    
</form>
    