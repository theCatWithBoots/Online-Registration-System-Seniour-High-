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

$lname =$_REQUEST['lastname'];
$fname =$_REQUEST['firstname'];
$mname =$_REQUEST['middlename'];

$name =$_REQUEST['name'];
$address =$_REQUEST['address'];
$pob =$_REQUEST['pob'];
$dob = $_REQUEST['dob'];
$citizenship= $_REQUEST['citizenship'];
$relationship = $_REQUEST['relationship'];



$name2 =$_REQUEST['name2'];
$address2 =$_REQUEST['address2'];
$pob2 =$_REQUEST['pob2'];
$dob2 = $_REQUEST['dob2'];
$citizenship2= $_REQUEST['citizenship2'];
$relationship2 = $_REQUEST['relationship2'];


$name3 =$_REQUEST['name3'];
$address3 =$_REQUEST['address3'];
$pob3 =$_REQUEST['pob3'];
$dob3 = $_REQUEST['dob3'];
$citizenship3= $_REQUEST['citizenship3'];
$relationship3 = $_REQUEST['relationship3'];



$submittedby = $_SESSION["username"];
$ins_query="insert into beneficiary (`trn_date`, 

`lastname`, `firstname`, `middlename`,

`name`, `address`, `pob`, `dob`, `citizenship`, `relationship`,



`name2`, `address2`, `pob2`, `dob2`, `citizenship2`, `relationship2`,



`name3`, `address3`, `pob3`, `dob3`, `citizenship3`, `relationship3`,


 `submittedby`) values
 ('
$trn_date',

'$lastname', '$firstname', '$middlename', 
'$name', '$address', '$pob','$dob', '$citizenship', '$relationship',

'$name2', '$address2', '$pob2','$dob2', '$citizenship2', '$relationship2',

'$name3', '$address3', '$pob3','$dob3', '$citizenship3', '$relationship3',



'$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "Beneficiaries Added successfully.</br></br><a href='approve.php'>Click here to continue</a>";

}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>



<link rel="stylesheet" href="css/style6.css" />
</head>
<body>

        <a href="#"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
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
To whom is insurance payable after your death? (Please include at least one)
</div>

Enter Payor's Full Name
<table>
<td><input type="text" name="lname" placeholder="Last Name" required /></td>

<td><input type="text" name="fname" placeholder="First Name" required /></td>
<td><input type="text" name="mname" placeholder="Middle Name" required /></td>

</tr>
</table>

<div style="font-family: calibri; font-size: 20px; padding-left: 10px background-color:; color: black; padding-bottom: 10px; width: 100%:";>
A.
</div>

<table>

<thead>
<tr>
<td>Name*</td>
<td>Address*</td>
<td>Place of Birth*</td>

</tr>
</thead>
<tbody>
<tr>
<TD> <input type="text" name="name" placeholder="Name" required /></p></TD>

<TD> <input type="text" name="address" placeholder="Address" required /></p></TD>

<TD> <input type="text" name="pob" placeholder="Birthplace"  required/></p></TD>



</tr>
</tbody>
<thead>
<tr>
<td>Date of Birth*</td>
<td>Citizenship*</td>
<td>Relationship*</td>
</tr>
<tbody>
<tr>

<TD> <input type="date" name="dob" placeholder="Birth date" required /></p></TD>

<TD> <input type="text" name="citizenship" placeholder="Citizenship" required /></p></TD>

<TD> <input type="text" name="relationship" placeholder="Relationship"required  /></p></TD>

 </tr>
</tbody>
</table>


<div style="font-family: calibri; font-size: 20px; padding-left: 10px background-color:; color: black; padding-bottom: 10px; width: 100%:";>
B.
</div>

<table>

<thead>
<tr>
<td>Name*</td>
<td>Address*</td>
<td>Place of Birth*</td>

</tr>
</thead>
<tbody>
<tr>
<TD> <input type="text" name="name2" placeholder="Name" /></p></TD>

<TD> <input type="text" name="address2" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob2" placeholder="Birthplace" /></p></TD>



</tr>
</tbody>
<thead>
<tr>
<td>Date of Birth*</td>
<td>Citizenship*</td>
<td>Relationship*</td>
</tr>
<tbody>
<tr>

<TD> <input type="date" name="dob2" placeholder="Birth date" /></p></TD>

<TD> <input type="text" name="citizenship2" placeholder="Citizenship" /></p></TD>

<TD> <input type="text" name="relationship2" placeholder="Relationship" /></p></TD>

 </tr>
</tbody>
</table>



<div style="font-family: calibri; font-size: 20px; padding-left: 10px background-color:; color: black; padding-bottom: 10px; width: 100%:";>
C.
</div>

<table>

<thead>
<tr>
<td>Name*</td>
<td>Address*</td>
<td>Place of Birth*</td>

</tr>
</thead>
<tbody>
<tr>
<TD> <input type="text" name="name3" placeholder="Name"/></p></TD>

<TD> <input type="text" name="address3" placeholder="Address"  /></p></TD>

<TD> <input type="text" name="pob3" placeholder="Birthplace"  /></p></TD>



</tr>
</tbody>
<thead>
<tr>
<td>Date of Birth*</td>
<td>Citizenship*</td>
<td>Relationship*</td>
</tr>
<tbody>
<tr>

<TD> <input type="date" name="dob3" placeholder="Birth date"  /></p></TD>

<TD> <input type="text" name="citizenship3" placeholder="Citizenship"  /></p></TD>

<TD> <input type="text" name="relationship3" placeholder="Relationship" /></p></TD>

 </tr>
</tbody>
</table>

    <TR>    
	  <TD> <p>      </TD> <TD><input name="submit"   type="submit" value="Submit" /></a></p></TD> 
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