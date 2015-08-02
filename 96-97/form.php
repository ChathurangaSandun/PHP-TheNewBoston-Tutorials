<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$usingPassword = md5("sandun");
echo 'Using password is \'sandun\' => '. $usingPassword.'<br>';

if(isset($_POST['password']) && !empty($_POST['password'])){
    $passwordString = $_POST['password'];
    $hashPassword = md5($passwordString);
    
    if($hashPassword == $usingPassword){
        echo 'passwrd is ok!!';
    }else{
        echo 'password is not correct'; 
    }
    
    
    
    
}else{
    echo 'Please enter password';
}



?>

<form action="form.php" method="post" >
    password : <input type="text" name="password"/>    
    <br><br>
    <input type="submit" name="submit" value="Submit"/>
    
</form>