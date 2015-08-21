<?php

extract ( $_POST );
$con=mysqli_connect("mysql","sqldb","Abiabi@123","store");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Username=mysqli_real_escape_string($con, $_POST['Username']);
$path="./project/".$Username."/";
//echo $path;

// Check if username is already present
$result = mysqli_query($con,"SELECT 1 FROM usertable WHERE Username='$Username'");
if(mysqli_fetch_row($result))
{
mysqli_close($con);
echo "Error - Username already exists!!";
}
else
{
// If new team, create a folder

mkdir($path);
//echo $Username;
//echo $Password;
//echo $Name;

// Insert the credentials of the new user into auth table
mysqli_query($con,"INSERT INTO usertable (ID,Username, Password, Name, email, team, uploaddirectory)
VALUES( ' ', '$Username', '$Password' , '$Name', '$Email', '$Username', '$path' ) ") or die(mysql_error()); 
//echo "Registration successful!!";
mysqli_close($con);
}

header("Location:http://photofire.net/index.html");


?>
