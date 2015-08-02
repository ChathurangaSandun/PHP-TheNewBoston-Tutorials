<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$handle = fopen('names.txt', 'r');

$datain = fread($handle, filesize('names.txt'));

$namesinArray = explode(',', $datain);

foreach ($namesinArray as $name) {
    echo $name.'<br>';
}


