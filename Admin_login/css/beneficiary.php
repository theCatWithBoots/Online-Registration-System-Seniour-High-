<?php

session_start();
if(!isset($_SESSION["username"])){
header("Location: users");
exit(); }
 
require('db.php');

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$address =$_REQUEST['address'];
$pob =$_REQUEST['pob'];
$dob = $_REQUEST['dob'];
$citizenship= $_REQUEST['citizenship'];
$relationship = $_REQUEST['relationship'];
$submittedby = $_SESSION["username"];
$ins_query="insert into beneficiary (`trn_date`, `name`, `address`, `pob`, `dob`, `citizenship`, `relationship`, `submittedby`) values ('
$trn_date','$name', '$address', '$pob','$dob', '$citizenship', '$relationship','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='insert.php'>View Inserted Record</a>";

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>



<link rel="stylesheet" href="style6.css" />
<script src="css/java.js" /></script>
</head>
<body>

        <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<div style="width:100%; border-radius:0px 0px 0 0;
			background-color:; color:white; margin:auto;"> 

<ul>
  <li><a href="#">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Beneficiaries</a>
    <div class="dropdown-content">
      <a href="#">Apply Now</a>

    </div>	
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About</a>
    <div class="dropdown-content">
      <a href="#">About the Systems</a>
    </div>	
  </li>
  <li><a href="#">Logout</a></li>
</ul>

<hr/>
    <center> <font color="black" > <h1>Beneficiaries </h1> </font></center>

<hr/>

<div class="form">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
  <font face="product sans" color="black">
<table width="100%" border="0" style="border-collapse:collapse;">

<div style="font-family: calibri; font-size: 20px; padding-left: 10px background-color:; color: black; padding-bottom: 10px; width: 100%:";>
To whom is insurance payable after your death?
</div>

<table>

<thead>
<tr>
<td>Name*</td>
<td>Address*</td>
<td>Place of Birth*</td>
<td>Date of Birth*</td>
<td>Citizenship*</td>
<td>Relationship*</td>

</tr>
</thead>
<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name"  /></p></TD>

<TD> <input type="text" name="address" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  /></p></TD>

<TD> <input type="date" name="dob" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"  /></p></TD>


</tr>
</tbody>

<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name"  /></p></TD>

<TD> <input type="text" name="address" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  /></p></TD>

<TD> <input type="date" name="dob" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"  /></p></TD>


</tr>
</tbody>

<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name"  /></p></TD>

<TD> <input type="text" name="address" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  /></p></TD>

<TD> <input type="date" name="dob" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"  /></p></TD>


</tr>
</tbody>

<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name"  /></p></TD>

<TD> <input type="text" name="address" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  /></p></TD>

<TD> <input type="date" name="dob" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"  /></p></TD>


</tr>
</tbody>

<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name"  /></p></TD>

<TD> <input type="text" name="address" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  /></p></TD>

<TD> <input type="date" name="dob" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"  /></p></TD>


</tr>
</tbody>


<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name"  /></p></TD>

<TD> <input type="text" name="address" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  /></p></TD>

<TD> <input type="date" name="dob" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"  /></p></TD>


</tr>
</tbody>

</table>

<p id="demo"></p>​

<script>function myFunction() {  var txt;  var r = confirm("Are you sure you want to continue? Please make sure that all the information you entered are valid and correct otherwise may lead to disqualification of your application.");  

if (r == true) {
 window.location.href="approve.php"

; }


 else {    txt = "If you're not sure, please review your application one more time."; }

  document.getElementById("demo").innerHTML = txt;}</script>​


    <TR>    
	  <TD> <p>      </TD> <TD> <input name="submit" onclick="" type="submit" value="Submit" /></p></TD> 
	</TR>


<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
</div>	

<div style="width:100%; font-family:  arial ; padding:5px 0px; background-color:khaki; color:steelblue; margin:auto; font-size:18px; text-align:center;">
			Copyright:  2018
</div>	

</body>
</html>