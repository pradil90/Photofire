<!DOCTYPE html>

<?php
extract ( $_GET );


?>


<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        HTML Document Structure
    </title>
    <link rel="stylesheet" type="text/css" href="../photoui/style.css" />


  
</head>
<body>

<div id="wrapper">

	<form name="login-form" class="login-form" action="clientlogin.php" method="post">
	
		<div class="header">
		<h1>Login Form</h1>
		<span>Welcome to Photofire.net,Login to start sharing!!!</span>
		  <h6><i>Username:Admin &  Password:root</i></h6>
		</div>
	
		<div class="content">
		<input name="Username" type="text" class="input username" placeholder="Username" />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" />
		

		<input type="button" formaction="registeruserform.html"  id="register"  onclick="redirect()"name="submit" value="Register" class="register" />

<font color="red"><?php echo $status ?></font>

		</div>
	
	</form>
<script>
function redirect(){
location.href = "http://photofire.net/registeruserform.html";

}

</script>
</div>
<div class="gradient"></div>


</body>
</html>
