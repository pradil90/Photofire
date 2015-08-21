<?php
extract ( $_POST );
$con=mysqli_connect("mysql","sqldb","Abiabi@123","store");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$cookie_value = "Username";
   setcookie($cookie_value, $Username, time()+3600, "/","", 0);
   

//echo $Password;
//echo $Username;

//echo "Success";

// Check if username is already present
$result = mysqli_query($con,"SELECT 1 FROM usertable WHERE Username='$Username' AND Password='$password'");
if(mysqli_fetch_row($result))
{
mysqli_close($con);
flush();

header("Location:http://photofire.net/clientpage.php?Username=$Username");
//header("Location:http://christinajuliet.com/profile.php?team=$Team");
}
else
{
mysqli_close($con);
// echo "Invalid login!!!";
header("Location:http://photofire.net/index.php?status=Invalid Login!!");
}
//mysqli_close($con);

?>





