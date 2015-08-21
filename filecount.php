<?php
$Username=$_COOKIE["Username"];
 // $Username='Mavericks';
 $target_path = '/project/'.$Username.'/';

$counter['video']=0;
$counter['songs']=0;
$counter['png']=0;
$counter['jpg']=0;


 if (is_dir($target_path)) {
        $files1 = scandir($target_path);
        chdir($target_path);
        
        
        foreach (glob("*.mp4") as $filename) {
        // echo "$filename" . filesize($filename) . "\n";
    	 $play=$filename;
        $counter['video']=$counter['video']+1;
    	
	}



     foreach (glob("*.mp3") as $filename1) {
        // echo "$filename" . filesize($filename) . "\n";
         $play1=$filename1;
        $counter['songs']=$counter['songs']+1;
        
    }

     foreach (glob("*.png") as $filename2) {
        // echo "$filename" . filesize($filename) . "\n";
         $play2=$filename2;
        $counter['png']=$counter['png']+1;
        
    }
	

     foreach (glob("*.jpg") as $filename3) {
        // echo "$filename" . filesize($filename) . "\n";
         $play3=$filename3;
        $counter['jpg']=$counter['jpg']+1;
        
    }
 $counter['video'];
 $counter['songs'];
 $counter['png'];
 $counter['jpg'];

}

                   
return $counter;
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

