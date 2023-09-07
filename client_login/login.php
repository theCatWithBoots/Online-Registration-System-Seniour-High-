
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<center>
  <a href="home.php" ><IMG Src="img/benlife logo.png" width="300px" height="100px"></a>
</center>


<div style="width:500px; padding:13px 0px; border-radius:30px 30px 30px 30px;
			background-color:khaki; color: steelblue; margin:auto; 
			font-size:16px;font-family: cooper black; text-align:center;">
			Login
</div>

<div style="width:500px; padding:13px 0px; border-radius:0px 0px 0 0;
			background-color:white; color:black; margin:auto;"> 
			
<div class="form">
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />

<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

</div>

</div>

<div style="width:500px; padding: 10px 0px; border-radius:30px 30px 30px 30px; background-color:khaki; color:steelblue; 
margin:auto; font-size:18px; font-family:cooper black; text-align:center;"> Copyright: 2019
</div>

<?php } ?>


</body>
</html>
