<?php



$cookie_value = "Username";
   setcookie($cookie_value, "", time()-3600, "/","", 0);
   


header("Location:http://photofire.net/index.html");


?>





