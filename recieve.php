<?php
$Team = $_POST['teamname'];
//echo $Team;
$uploaddir = realpath('./project/'.$Team). '/';
$uploadFlag= 0;
$uploadfile = $uploaddir . basename($_FILES['file_contents']['name']);


echo '<pre>';
	if (move_uploaded_file($_FILES['file_contents']['tmp_name'], $uploadfile)) {
	    echo "File is valid, and was successfully uploaded.\n";
            $uploadFlag=1;
	} else {
	    echo "File upload failed!\n";
	}


	/*echo 'Here is some more debugging info:\n';
echo basename($_FILES['file_contents']['name']);
	echo "\n<hr />\n";
	print_r($_FILES);
	echo "\n<hr />\n";
	print_r($_POST);
print "</pr" . "e>\n";
*/
?>