<?php

$Team = $_POST['teamname'];
//echo $Team;
$uploaddir = realpath('./project/'). '/';

$uploadfile = $uploaddir . $Team;


if (file_exists($uploadfile)) {
	echo "1";
    // echo "The file $uploadfile exists";
} else {
	echo "0";
    // echo "The file $uploadfile does not exist";
}

?>
