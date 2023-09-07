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
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/style5.css">
</head>
<body>

        <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<div style="width:100%; padding:; border-radius:0px 0px 0 0;
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
<center>
<div style="background-color: ; margin-top: 10px; width: 900px; border-radius: 30px;
padding-top: 10px; padding-bottom:10px; font-family: arial black
; font-size: 20px; color: black;" ;>
<hr/>
<p>Welcome to Beneficial Life Insurance</p>
<hr/>
</center>
</div>

<div style="background-color: Lavender">
	<slider>
	            <slide><p>We have what you need!</p></slide>
	  	        <slide><p>Secure your future!</p></slide>
		  	    <slide><p>Absolutely Trustworthy!</p></slide>
			    <slide><p>You can count on us!</p></slide>
	  </slider>
  <center>
    <div id="about-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Contact Us</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
					 
                      If you have any questions, please feel free to contact us, our registrar is working for you Monday to Friday.
					  <br />For more details. See the contact information below.
                         </p>
                 </div>

             </div>
         

<br />
<div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div>
                        <h4>Benlife building, 166 Salcedo St. </h4>
                        <h4>Legazpi City, Philippines</h4>
					
                        
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">
             <div style="padding-bottom: 30px;";>
                    <h2 ><strong>Feedbacks </strong></h2>
        <hr />
                    <div >
                        <h4><strong>Call:</strong>  +052 481 1534</h4>
                        <h4><strong>Email: </strong>costumercare@benlife.com</h4>
						
						<hr/>
					
						<h4>Alagang Tunay, Alagang Benlife </h4>
						 <h4>For more than 55 years...</h4>

                    </div>
                    </div>


                </div>
                 </div>
                 
                 </div>
               </div>
             </div>

			 </center>
<div style="width:100%; font-family: arial ; padding:5px 0px;  background-color:khaki; color:steelblue; margin:auto; font-size:15px; padding-top: 20px; padding-bottom: 20px; text-align:center;">
			Copyright 2018 © Benlife. All Rights Reserved
		
</div>	

</body>
</html>
