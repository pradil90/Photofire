<?php


//Team name to be replicated//
$Username=$_COOKIE["Username"];
 $target_path = '../project/'.$Username.'/';
// echo $target_path;
// echo "<br>";

if (is_dir($target_path)) {
    $files1 = scandir($target_path);
	// print_r($files1);

}

for ($i=0; $i<sizeof($files1); $i++){

	if(($files1[$i]!='.') && ($files1[$i]!='..')){
	// echo "<strong>Image".$i."</strong><br>";
	// echo $files1[$i];
	// echo "<br>";
	$target_path_feed=$target_path.$files1[$i];
	// echo "<br>";
	replicateFile($target_path_feed,$Username);
	}
}


if($flag==1)
{
	
echo "Replication Success";
}
else
{
	
echo "Replication Failure";
}

// // replicate.php takes $path -> Complete path in the server after saving in server
// // 						$team->username which would be the file to be copied


function replicateFile($path,$team)
{





$target_url = 'http://christinajuliet.com/receiveFile.php';
$file_name_with_full_path = realpath($path);
$post = array('teamname'=>$team,'file_contents'=>'@'.$file_name_with_full_path);
        $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$target_url);
	curl_setopt($ch, CURLOPT_POST,true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$result=curl_exec ($ch);
curl_getinfo($ch);
curl_errno($ch);
 curl_error($ch);
	curl_close ($ch);
	 $result;
if($result)
{
	$flag=1;
// echo "File sent";
}
else
{
	$flag=0;
// echo "File not sent";
}







}




?>