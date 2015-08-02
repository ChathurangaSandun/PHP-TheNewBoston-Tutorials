<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if($password == "sandun"){
        echo 'password is correct';
    }else{
        echo 'password is not correct';
    }
}


?>

<form action="post.php" method="post">
    password: <br> <input type="password" name="password"><br>
    <br>
    <input type="submit" name="submit" value="Submit">
    
    
</form>

