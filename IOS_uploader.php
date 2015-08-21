<?php

$Username=$_COOKIE["Username"];
$target_path = './project/'.$Username.'/';
echo $target_path;
$randomNumber = rand(0, 99999);


$target_path = $target_path .$randomNumber. basename( $_FILES['file']['name']); 
$target=basename( $_FILES['file']['name']); 

$int=move_uploaded_file($_FILES['file']['tmp_name'], $target_path);
echo "The file  $target has been uploaded";



?>

