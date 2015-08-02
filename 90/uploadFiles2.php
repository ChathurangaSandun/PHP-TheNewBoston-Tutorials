<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$name = $_FILES['file']['name']; //use super globle array
echo $extension = strtolower(substr($name, strpos($name, '.') + 1));

$type = strtolower($_FILES['file']['type']);

$size = $_FILES['file']['size'];
$maxSize = 100000;


$temp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
    if (!empty($name)) {
        if (($extension == 'jpg' || $extension == 'jpeg' ) && $type == 'image/jpeg' && $size <=$maxSize) {
            $location = 'upload/';

            if (move_uploaded_file($temp_name, $location . $name)) {
                echo 'uploaded!!!!!!!!!!!!!';
            } else {
                echo 'some error';
            }
        } else {
            echo 'file must be jpg/jpeg and less than 100kb';
        }
    } else {
        echo 'not';
    }
} else {
    echo 'fdsfsdf';
}
?>

<form action="uploadFiles2.php" method="post" enctype="multipart/form-data"> <!-- must add to enctype attribure -->
    <input type="file" name="file" />
    <br><br>
    <input type="submit" name="submit" value="Submit"/>


</form>
