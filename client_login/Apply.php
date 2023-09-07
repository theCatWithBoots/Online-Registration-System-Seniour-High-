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
	   <meta charset="viewport" content="width=device-width, initial-scale=1.0">
	   <meta http-equiv="X-UA-compatible" content="ie=edge">
<title>Main Page</title>
<link rel="stylesheet" href="css/style4.css" />
</head>
<body>

        <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<div style="width:100%;  border-radius:0px 0px 0 0;
			background-color: lavender; color:white; margin:auto;"> 

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Beneficiaries</a>
    <div class="dropdown-content">
      <a href="Apply.php">Apply now</a>
<a href="view.php">View Applicants</a>

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

<div style="font-family: arial black; padding-top: 70px; text-align: center; ont-size: 15px; color:black;">
PRODUCTS & SERVICES
</div>

<div style="font-family: comic sans ms; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
 BenLife offers a guaranteed wealth creation system that will benefit individuals, families, institutions, and its members.
</div>

<center>

<img src="img/corporate.png" width="700px" height="600px" >

</center>


<div style="font-family: arial black;margin-top: 30px; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
 For Individuals: 
</div>


<div style="font-family: comic sans ms; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
<p>Life Insurance Funds for Life Cycle Needs Life Insurance Products for parents and children, businessmen,</p>
 <p>professionals, and employed persons who wish to create guaranteed funds for clean-up and moving on expenses.,</p>
</div>

<div style="font-family: arial black;margin-top: 30px; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
 For Regular Employees & Their Dependents 
</div>


<div style="font-family: comic sans ms; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
Insurance Packages for regular employees and their dependents payable through monthly payroll deduction.
</div>



<div style="font-family: arial black;margin-top: 30px; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
Group Insurance Products for Employees/Members of Institutions 
</div>


<div style="font-family: comic sans ms; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
Life Insurance products paid for by institutions for its own protection and for the benefit of its members.
</div>

<div style="font-family: arial black; margin-top: 30px;  padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
 For Individual & Group Health Care
</div>


<div style="font-family: comic sans ms; padding-top: 15px; text-align: center; ont-size: 15px; color:black;">
Taking preventative or necessary medical procedures to improve your well-being.
</div>





<div style="background-color:green; color:white; margin-left: 80px; margin-top: 50px; margin-bottom: 50px;  width:180px; padding:25px;";><a href="captcha.html"> Online Application Form</a>
</div>



<div style="width:100%; font-family: arial ; padding:5px 0px;  background-color:khaki; color:steelblue; margin:auto; font-size:15px; padding-top: 20px; padding-bottom: 20px; text-align:center;">
			Copyright 2018 © Benlife. All Rights Reserved
		
</div>	

</body>
</html>
