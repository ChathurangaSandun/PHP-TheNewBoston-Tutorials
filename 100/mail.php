<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$to = 'chathurangasandunkumara@gmail.com';
$subject = 'this is first mail';
$body = 'this is a test message from sandun';
$header = 'From : mine';

if(mail($to, $subject, $body,$header)){
    echo 'email successfully send';
}else{
    echo 'email not send';
}

        
