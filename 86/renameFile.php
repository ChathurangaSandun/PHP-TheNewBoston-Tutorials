<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file = 'file.txt';

if(@rename($file, 'chathurnaga.txt')){ 
    echo 'file is renamed';
}else{
    echo 'file is not renamed...';
}
        

