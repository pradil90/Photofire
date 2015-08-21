<?php



//Team name to be replicated//
$Username=$_COOKIE["Username"];


 $result=replicateFile($Username);
	// return $finalresult;
print_r(array_values($result));


// // replicate.php takes $path -> Complete path in the server after saving in server
// // 						$team->username which would be the file to be copied


function replicateFile($team)
{


				// $target_url = 'http://photo-drop.com/curlfile.php';
	$target_url = 'http://photo-drop.com/curlfilecheck.php';
				$file_name_with_full_path = realpath($path);
				$post = array('teamname'=>$team);
				        $ch = curl_init();
				
							curl_setopt($ch, CURLOPT_URL,$target_url);
							curl_setopt($ch, CURLOPT_POST,true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
						        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							 $resultalice=curl_exec ($ch);
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
						// return $resultalice;



							$target_url = 'http://christinajuliet.com//curlfilecheck.php';
				$file_name_with_full_path = realpath($path);
				$post = array('teamname'=>$team);
				        $ch = curl_init();
				
							curl_setopt($ch, CURLOPT_URL,$target_url);
							curl_setopt($ch, CURLOPT_POST,true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
						        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							 $result1=curl_exec ($ch);
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
						// return $result1;

							$target_url = 'http://radsnm.com/curlTrial/curlfilecheck.php';
				$file_name_with_full_path = realpath($path);
				$post = array('teamname'=>$team);
				        $ch = curl_init();
				
							curl_setopt($ch, CURLOPT_URL,$target_url);
							curl_setopt($ch, CURLOPT_POST,true);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
						        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							 $result2=curl_exec ($ch);
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
						// return $result1;





						return $array = array(
										    "Alice" => $resultalice,
										    "Christ" => $result1,
										    "rad" => $result2,
										);

}





?>

