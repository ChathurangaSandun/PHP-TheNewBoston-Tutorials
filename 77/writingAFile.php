<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo 'start'.'<br>';

$handle = fopen("chathuranga.txt", 'w'); // open file

fwrite($handle, 'chathurangasandunkumra'."\n"); //wirte line
fwrite($handle, 'withthamperuma'); //wirte line

fclose($handle);


echo 'done!!';
