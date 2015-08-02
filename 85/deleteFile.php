<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file = 'file.txt';

if(@unlink($file)){ // use '@' this icon to handle the error
    echo 'file is deleted';
}else{
    echo 'file is not deleted';
}
        

