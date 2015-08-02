<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$directory = 'files/';

if($handle = opendir($directory)){ // open the file
    echo 'inside in files directory<br>';
    
    while ($file = readdir($handle)){ //get the files in folder using readdir()
        if($file !='.'  && $file!= '..'){ // remove forword directory and back directory
            echo '<a href = "'.$directory.''.$file.'">'.$file.'<br>'; 
        }
    }
    
}


