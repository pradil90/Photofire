<?php

 $Username='Mavericks';
 $target_path = '/project/'.$Username.'/';


// if (is_dir($target_path)) {
//     $files1 = scandir($target_path);

// $target_path='/';
// }
echo getcwd() . "\n";
 if (is_dir($target_path)) {
    $files1 = scandir($target_path);
    chdir($target_path);
    echo getcwd() . "\n";
    echo '<input type="text" id="default" list="languages" placeholder="e.g. JavaScript">';
    echo '<datalist id="languages">';
    foreach (glob("*.mp4") as $filename) {
    // echo "$filename" . filesize($filename) . "\n";
    	// echo $play=$filename;
    	echo '<option value='.$filename.'>';
	}
	echo '</datalist>';


}

echo '<center><video width="600" height="300" controls="controls">
                                        <source src="http://photofire.net/'.$play.'"type="video/mp4">
                                        
                                        Your browser doesnt support HTML5 Video
                                      </video>
                                  </center>';

// for ($i=0; $i<sizeof($files1); $i++){

// 	if(($files1[$i]!='.') && ($files1[$i]!='..')){
// 	echo "<strong>Image".$i."</strong><br>";
// 	echo $files1[$i];
// 	echo "<br>";
// 	$target_path_feed=$target_path.$files1[$i];
// 	echo "<br>";
	
// 	}
// }






?>

