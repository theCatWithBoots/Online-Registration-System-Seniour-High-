<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

require('db.php');

?>

<html>
<head>
<meta charset="utf-8">
<title>Main Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">File</a>
    <div class="dropdown-content">
      <a href="insert selection.php">Insert New Record</a>
    
    </div>	
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="About.php">About the Systems</a>
    </div>	
  </li>
  <li><a href="logout.php">Logout</a></li>
</ul>
	<Center>
	    <H2> About the Systems </H2>
<div style="padding-bottom: 10px";>		
		<IMG Src="CSI_Back.jpg" Width="100%" Height="100%">
	</Center>	
</div>	

<div style="width:100%; font-family: Cooper Black ; padding:5px 0px; background-color:khaki; color:steelblue; margin:auto; font-size:18px; text-align:center;">
			Copyright:  2018
</div>	

</body>
</html>
