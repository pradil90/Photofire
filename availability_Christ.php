<?php



//Team name to be replicated//
$Username=$_COOKIE["Username"];
// $Username='ivan';
$target_path = './project/';
// echo $target_path;
// echo "<br>";

	$finalresult1=replicateFile($target_path,$Username);
	return $finalresult1;



// // replicate.php takes $path -> Complete path in the server after saving in server
// // 						$team->username which would be the file to be copied


function replicateFile($path,$team)
{


				// $target_url = 'http://photo-drop.com/curlfile.php';
	$target_url = 'http://christinajuliet.com//curlfilecheck.php';
				$file_name_with_full_path = realpath($path);
				$post = array('teamname'=>$team);
				        $ch = curl_init();
				
							curl_setopt($ch, CURLOPT_URL,$target_url);
							curl_setopt($ch, CURLOPT_POST,true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
						        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							echo $result1=curl_exec ($ch);
						 curl_getinfo($ch);
						 echo "<br>";
						 curl_errno($ch);
					
						echo curl_error($ch);
					
							curl_close ($ch);
							// echo $result;
							
						// if($result)
						// {
						// echo "File sent";
						// }
						// else
						// {
						// echo "File not sent";
						// }
						return $result1;

}





?>


	<!-- $target_url = 'http://photofire.net/curlfilecheck.php'; -->
	

