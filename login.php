<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('dbconfig.php');
session_start();
if (isset($_POST['username'])){
       $username = stripslashes($_REQUEST['username']);
     $username = mysqli_real_escape_string($con,$username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `user`  WHERE username='$username' and password='".md5($password)."'";
        $result = mysqli_query($con,$query)or die(mysql_error());
		$_SESSION['username']=$usernme;
		$rows = mysqli_num_rows($result);
		header("location:home.php");
		if($rows==1){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Login Page</h1>
<form action="" method="post" name="login"> 
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input type="submit" name="submit" value="login" />
</form>
<p>Not registered yet? <a href='inde.php'>register here</a></p>
</div>
<?php } ?>
</body>
</html>
