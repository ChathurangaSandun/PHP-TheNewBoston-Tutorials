<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


echo $_FILES['file']['name'].'<br>'; //use super globle array
echo $_FILES['file']['size'].'<br>'; //use super globle array
echo $_FILES['file']['type'].'<br>'; //use super globle array

    




?>

<form action="uploadFiles1.php" method="post" enctype="multipart/form-data"> <!-- must add to enctype attribure -->
    <input type="file" name="file" />
    <br><br>
    <input type="submit" name="submit" value="Submit"/>
    
    
</form>
    