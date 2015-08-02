<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if (isset($_POST['nameInput'])) {
    $name = $_POST['nameInput'];

    $handle = fopen('name.txt', 'a'); //appending to file

    if (!empty($name)) {
        fwrite($handle, $name . "\n");
    } else {
        echo 'plase enter name';
    }

    fclose($handle);



    //read the file

    $file = file('name.txt');
    
    echo 'your names are : ';

    foreach ($file as $name) {
        echo trim($name).',  ';
    }
}
?>

<form action="readingAndAppendingFile.php" method="post" >
    Name : <br>
    <input type="text" name="nameInput"/>

    <br>

    <input type="submit" name="submit" value="submit"/>

</form>