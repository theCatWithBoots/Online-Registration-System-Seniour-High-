

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
$surname =$_REQUEST['surname'];
$fname =$_REQUEST['fname'];
$mname =$_REQUEST['mname'];
$age = $_REQUEST['age'];
$birthdate =$_REQUEST['birthdate'];
$birthplace =$_REQUEST['birthplace'];
$citizenship =$_REQUEST['citizenship'];
$gender =$_REQUEST['gender'];
$Cstatus = $_REQUEST['Cstatus'];
$ResidenceNo = $_REQUEST['ResidenceNo'];
$PurokStreet= $_REQUEST['PurokStreet'];
$BarangaySubd = $_REQUEST['BarangaySubd'];
$CityTown = $_REQUEST['CityTown'];
$province = $_REQUEST['province'];
$TnHome = $_REQUEST['TnHome'];
$TnHomeZipcode = $_REQUEST['TnHomeZipcode'];
$TnOffice = $_REQUEST['TnOffice'];
$TnOfficeZipcode = $_REQUEST['TnOfficeZipcode'];
$CpNo = $_REQUEST['CpNo'];
$EmailAdd = $_REQUEST['EmailAdd'];
$PresentOccupation = $_REQUEST['PresentOccupation'];
$Nameofemployer = $_REQUEST['Nameofemployer'];
$Addofemployer = $_REQUEST['Addofemployer'];
$NatureofSEB = $_REQUEST['NatureofSEB'];
$TINno = $_REQUEST['TINno'];
$SSSno = $_REQUEST['SSSno'];
$GSISno = $_REQUEST['GSISno'];
$Philhealthno = $_REQUEST['Philhealthno'];


$surname2 =$_REQUEST['surname2'];
$fname2 =$_REQUEST['fname2'];
$mname2 =$_REQUEST['mname2'];
$age2 = $_REQUEST['age2'];
$birthdate2 =$_REQUEST['birthdate2'];
$birthplace2 =$_REQUEST['birthplace2'];
$citizenship2 =$_REQUEST['citizenship2'];
$gender2 =$_REQUEST['gender2'];
$Cstatus2 = $_REQUEST['Cstatus2'];
$ResidenceNo2 = $_REQUEST['ResidenceNo2'];
$PurokStreet2= $_REQUEST['PurokStreet2'];
$BarangaySubd2 = $_REQUEST['BarangaySubd2'];
$CityTown2 = $_REQUEST['CityTown2'];
$province2 = $_REQUEST['province2'];
$TnHome2 = $_REQUEST['TnHome2'];
$TnHomeZipcode2 = $_REQUEST['TnHomeZipcode2'];
$TnOffice2 = $_REQUEST['TnOffice2'];
$TnOfficeZipcode2 = $_REQUEST['TnOfficeZipcode2'];
$CpNo2 = $_REQUEST['CpNo2'];
$EmailAdd2 = $_REQUEST['EmailAdd2'];
$PresentOccupation2 = $_REQUEST['PresentOccupation2'];
$Nameofemployer2 = $_REQUEST['Nameofemployer2'];
$Addofemployer2 = $_REQUEST['Addofemployer2'];
$SrcofFund2 = $_REQUEST['SrcofFund2'];
$TINno2 = $_REQUEST['TINno2'];
$SSSno2 = $_REQUEST['SSSno2'];
$GSISno2 = $_REQUEST['GSISno2'];
$Philhealthno2 = $_REQUEST['Philhealthno2'];
$relationship = $_REQUEST['relationship'];

$company= $_REQUEST['company'];
$PolicyNo= $_REQUEST['PolicyNo'];
$SumInsured= $_REQUEST['SumInsured'];
$premium= $_REQUEST['premium'];


$QA= $_REQUEST['QA'];
$plan= $_REQUEST['plan'];
$amount= $_REQUEST['amount'];
$PolicyDated= $_REQUEST['PolicyDated'];
$QB= $_REQUEST['QB'];
$APRno= $_REQUEST['APRno'];
$QC= $_REQUEST['QC'];
$QD= $_REQUEST['QD'];
$QD2= $_REQUEST['QD2'];
$QD3= $_REQUEST['QD3'];
$payorsClause= $_REQUEST['payorsClause'];
$others= $_REQUEST['others'];
$QE= $_REQUEST['QE'];
$dividens= $_REQUEST['dividens'];
$QF= $_REQUEST['QF'];

$submittedby = $_SESSION["username"];

$ins_query="insert into proposed_insured(`trn_date`, `surname`, `fname`, `mname`, `age`, `birthdate`, `birthplace`, `citizenship`, 
`gender`, `Cstatus`, `ResidenceNo`, `PurokStreet`, `BarangaySubd`, `CityTown`, `province`, `TnHome`, 
`TnHomeZipcode`, `TnOffice`, `TnOfficeZipcode`, `CpNo`, `EmailAdd`, `PresentOccupation`, `Nameofemployer`, 
`Addofemployer`, `NatureofSEB`, `TINno`, `SSSno`, `GSISno`, `Philhealthno`, `surname2`, `fname2`, `mname2`,
 `age2`, `birthdate2`, `birthplace2`, `citizenship2`, `gender2`, `Cstatus2`, `ResidenceNo2`, `PurokStreet2`, 
 `BarangaySubd2`, `CityTown2`, `province2`, `TnHome2`, `TnHomeZipcode2`, `TnOffice2`, `TnOfficeZipcode2`, `CpNo2`,
 `EmailAdd2`, `PresentOccupation2`, `Nameofemployer2`, `Addofemployer2`, `SrcofFund2`, `TINno2`, `SSSno2`, 
 `GSISno2`, `Philhealthno2`, `relationship`, `company`, `PolicyNo`, `SumInsured`, `premium`, `QA`, `plan`, 
 `amount`, `PolicyDated`, `QB`, `APRno`, `QC`, `QD`, `QD2`, `QD3`, `payorsClause`, `others`, `QE`, `dividens`, `QF`,
 
 
 
 `submittedby`)
 

 
 values 
 
 ('
$trn_date','$surname', '$fname', '$mname','$age','$birthdate', '$birthplace', '$citizenship','$gender', '$Cstatus', '$ResidenceNo', 
'$PurokStreet', '$BarangaySubd', '$CityTown', '$province','$TnHome', '$TnHomeZipcode', '$TnOffice','$TnOfficeZipcode', '$CpNo', '$EmailAdd', '$PresentOccupation', 
'$Nameofemployer', '$Addofemployer', '$NatureofSEB', '$TINno', '$SSSno', '$GSISno', '$Philhealthno',   


'$surname2', '$fname2', '$mname2','$age2','$birthdate2', '$birthplace2', '$citizenship2','$gender2', '$Cstatus2', '$ResidenceNo2', 
'$PurokStreet2', '$BarangaySubd2', '$CityTown2', '$province2','$TnHome2', '$TnHomeZipcode2', '$TnOffice2','$TnOfficeZipcode2', '$CpNo2', '$EmailAdd2', '$PresentOccupation2', 
'$Nameofemployer2', '$Addofemployer2', '$SrcofFund2', '$TINno2', '$SSSno2', '$GSISno2', '$Philhealthno2', '$relationship', 


'$company', '$PolicyNo', '$SumInsured', '$premium', 

'$QA', '$plan', '$amount', '$PolicyDated', '$QB', '$APRno', '$QC', '$QD', '$QD2', '$QD3', '$payorsClause', '$others', '$QE', '$dividens', '$QF',  

 '$submittedby')";

mysqli_query($con,$ins_query) or die(mysql_error());
$status = "Part 1 has been completed. </br></br><a href='beneficiary.php'>Go to part 2.</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>



</style>
<meta charset="utf-8">
<title>Insert New Record</title>



<link rel="stylesheet" href="css/style3.css" />
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
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Beneficiaries</a>
    <div class="dropdown-content">
      <a href="Apply.php">Apply Now</a>
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

<hr/>
    <center> <font color="black" > <h1>Part 1. General Information </h1> </font></center>

<hr/>

<div class="form">
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
  <font face="product sans" color="black">
<table width="100%" border="0" style="border-collapse:collapse;">

<div style="font-family: calibri; font-size: 15px; background-color:; color: black; padding-bottom: 6px; text-align: left; width: 100%:";>

Direction. Fields with<b> *</b> are required. You won't be able to submit until you fill them. After submitting, click <b>"continue to part 2"</b> at the bottom part to go to the next page.

</div>


<div style="font-family: calibri; font-size: 30px; background-color:; color: black; padding-bottom: 6px; text-align: center; width: 100%:";>

Proposed Insured

</div>




<div style="font-family: calibri; font-size: 20px; background-color:; color: black; padding-bottom: 5px; width: 100%:";>
Basic Information

</div>

<thead>
<tr>
<td>Surname*</td>
<td>First Name*</td>
<td>Middle Name*</td>
<td>Age*</td>
</tr>
</thead>

<tbody>
   <TR> 
    <Td> <input type="text" name="surname" placeholder="Enter surname" required /></p></TD> 
   
    <TD> <input type="text" name="fname" placeholder="Enter First name" required /></p></TD> 

    <TD> <input type="text" name="mname" placeholder="Enter Middle name" required /></p></TD> 	
      <TD> <input type="text" name="age" placeholder="Enter Age" required /></p> </TD> 
  </tr>
</tbody>
        
<thead>
<tr>
<td>Birthdate*</td>
<td>Birthplace*</td>
<td>Citizenship*</td>
<td>Gender*</td>
</tr>
</thead>

<tbody>
<tr>
<TD> <input type="date" name="birthdate" placeholder="Enter Birthday" required /></p></TD> 

     <TD> <input type="text" name="birthplace" placeholder="Enter Birth place" required /></p></TD> 
   
      <TD> <input type="text" name="citizenship" placeholder="Enter Citizenship" required/></p></TD> 
   <TD> <select name="gender"> 
			<option value="M" style="width: 100px;  padding:10px;">Male</option>
			<option value="F" style="width: 100px;  padding:10px;">Female</option>
			</select>
			</p></TD> 
</tr>
</tbody>

<thead>
<tr>
<td>Civil Status*</td>
<td>Residence No.*</td>
<td>Purok/Street*</td>
<td>Barangay/Subd*</td>
</tr>
</head>
<tbody>
<tr>
    <TD> <select name="Cstatus"> 
			<option value="Single" style="width: 100px;  padding:10px;">Single</option>
			<option value="Married" style="width: 100px;  padding:10px;">Married</option>
			<option value="Widowed" style="width: 100px;  padding:10px;">Widowed</option>
			<option value="Separated" style="width: 100px;  padding:10px;">Separated</option>
			</select>
			</p></TD> 


<td><input type="text" name="ResidenceNo" placeholder="Enter Residence No." required /></p></TD> 
 
 <TD> <input type="text" name="PurokStreet" placeholder="Enter Purok/street" required /></p></TD> 
  <TD> <input type="text" name="BarangaySubd" placeholder="Enter Barangay/Subd" required /></p> </TD> 
   </TR>
</tbody>

<thead>
<tr>
<td>City/Town*</td>
<td>Province*</td>
</tr>
</thead>

<tbody>
<tr>
<TD> <input type="text" name="CityTown" placeholder="Enter City/Town" required /></p> </TD> 
  <TD> <input type="text" name="province" placeholder="Enter province" required /></p> </TD> 
</tr>
</tbody>
</table>


<div style="font-family: calibri; font-size: 20px; background-color:; padding-top: 15px; padding-bottom: 15px; scolor: black; padding-bottom: 5px; width: 100%:";>

Contact Information

</div>

<table>
<thead>
<tr>
<td>Telephone No. (Home)</td>
<td>Zipcode</td>
</tr>
</thead>
<tbody>
<tr>

<TD> <input type="text" name="TnHome" placeholder="Enter Telephone No. (Home)" /></p></TD> 

<TD> <input type="text" name="TnHomeZipcode" placeholder="Enter Zipcode" /></p></TD> 

</tr>
</tbody>

<thead>
<tr>
<td>Telephone No. (Office)</td>
<td>Zipcode</td>
</tr>
</thead>
<tbody>
<tr>
 
<td><input type="text" name="TnOffice" placeholder="Enter Telephone No.(Office)" /></p></TD> 

<TD> <input type="text" name="TnOfficeZipcode" placeholder="Enter Zipcode)"  /></p> </TD> 
</tr>
</tbody>

<thead>
<tr>
<td>Cellphone No.*</td>
<td>Email Address*</td>
</tr>
</thead>
<tbody>
<tr>

<TD> <input type="text" name="CpNo" placeholder="Enter Cellphone No." required /></p></TD> 
   <TD> <input type="email" name="EmailAdd" placeholder="Enter  Email Address" required /></p></TD> 
</tr>
</tbody>
</table>
<table>

<div style="font-family: calibri; font-size: 20px;  background-color:; color: black; padding-top: 15px;padding-bottom: 15px; width: 100%:";>

Livelihood

</div>

<thead>
<tr>
<td>Present Occupation*</td>
<td>Name of Employer*</td>
<td>Address of Employer*</td>
<td>Nature of Self-employment/Business*</td>
</tr>
</thead>

<tbody>
<tr>

<TD> <input type="text" name="PresentOccupation" placeholder="Enter Occupation" required /></p></TD> 

<TD> <input type="text" name="Nameofemployer" placeholder="Name of Emplpyer" required /></p></TD>

<TD> <input type="text" name="Addofemployer" placeholder="Address of Employer" required /></p></TD>

<TD> <input type="text" name="NatureofSEB" placeholder="Self-employment/Business" required /></p></TD>


</tr>
</tbody>


<thead>
<tr>
<td>TIN no. (leave blank if none)</td>
<td>SSS no. (leave blank if none)</td>
<td>GSIS no. (leave blank if none</td>
<td>Philhealth no. (leave blank if none)</td>
</tr>
</thead>

<tbody>
<tr>
<TD> <input type="text" name="TINno" placeholder="Enter TIN no."  /></p></TD>

<TD> <input type="text" name="SSSno" placeholder="Enter SSS no."  /></p></TD>

<TD> <input type="text" name="GSISno" placeholder="Enter GSIS no."  /></p></TD>

<TD> <input type="text" name="Philhealthno" placeholder="Enter Philhealth no."  /></p></TD>

</tr>
</tbody>
</table>

<div style="font-family: calibri; font-size: 30px; text-align: center; background-color:; color: black; padding-bottom: 5px; width: 100%:";>
Owner/ Payor
</div>

<div style="font-family: calibri; font-size: 20px; padding-top: 15px; padding-bottom: 15px;  background-color:; color: black; padding-bottom: 5px; width: 100%:";>

Basic Information

</div>

<table>
<thead>
<tr>
<td>Surname*</td>
<td>First Name*</td>
<td>Middle Name*</td>
<td>Age*</td>
</tr>
</thead>

<tbody>
   <TR> 
    <Td> <input type="text" name="surname2" placeholder="Enter surname" required /></p></TD> 
   
    <TD> <input type="text" name="fname2" placeholder="Enter First name" required /></p></TD> 

    <TD> <input type="text" name="mname2" placeholder="Enter Middle name" required /></p></TD> 	
      <TD> <input type="text" name="age2" placeholder="Enter Age" required /></p> </TD> 
  </tr>
</tbody>
        
<thead>
<tr>
<td>Birthdate*</td>
<td>Birthplace*</td>
<td>Citizenship*</td>
<td>Gender*</td>
</tr>
</thead>

<tbody>
<tr>
<TD> <input type="date" name="birthdate2" placeholder="Enter Birthday" required /></p></TD> 

     <TD> <input type="text" name="birthplace2" placeholder="Enter Birth place" required /></p></TD> 
   
      <TD> <input type="text" name="citizenship2" placeholder="Enter Citizenship" required/></p></TD> 
   <TD> <select name="gender2"> 
			<option value="M" style="width: 100px;  padding:10px;">Male</option>
			<option value="F" style="width: 100px;  padding:10px;">Female</option>
			</select>
			</p></TD> 
</tr>
</tbody>

<thead>
<tr>
<td>Civil Status*</td>
<td>Residence No.*</td>
<td>Purok/Street*</td>
<td>Barangay/Subd*</td>
</tr>
</head>
<tbody>
<tr>
    <TD> <select name="Cstatus2"> 
			<option value="Single" style="width: 100px;  padding:10px;">Single</option>
			<option value="Married" style="width: 100px;  padding:10px;">Married</option>
			<option value="Widowed" style="width: 100px;  padding:10px;">Widowed</option>
			<option value="Separated" style="width: 100px;  padding:10px;">Separated</option>
			</select>
			</p></TD> 


<td><input type="text" name="ResidenceNo2" placeholder="Enter Residence No." required /></p></TD> 
 
 <TD> <input type="text" name="PurokStreet2" placeholder="Enter Purok/street" required /></p></TD> 
  <TD> <input type="text" name="BarangaySubd2" placeholder="Enter Barangay/Subd" required /></p> </TD> 
   </TR>
</tbody>

<thead>
<tr>
<td>City/Town*</td>
<td>Province*</td>
</tr>
</thead>

<tbody>
<tr>
<TD> <input type="text" name="CityTown2" placeholder="Enter City/Town" required /></p> </TD> 
  <TD> <input type="text" name="province2" placeholder="Enter province" required /></p> </TD> 
</tr>
</tbody>
</table>
<div style="font-family: calibri; font-size: 20px; padding-top: 15px; padding-bottom: 15px; background-color:; color: black; padding-bottom: 5px; width: 100%:";>

Contact Information
</div>

<table>
<thead>
<tr>
<td>Telephone No. (Home)</td>
<td>Zipcode</td>
</tr>
</thead>
<tbody>
<tr>

<TD> <input type="text" name="TnHome2" placeholder="Enter Telephone No. (Home)" /></p></TD> 

<TD> <input type="text" name="TnHomeZipcode2" placeholder="Enter Zipcode" /></p></TD> 

</tr>
</tbody>

<thead>
<tr>
<td>Telephone No. (Office)</td>
<td>Zipcode</td>
</tr>
</thead>
<tbody>
<tr>
 
<td><input type="text" name="TnOffice2" placeholder="Enter Telephone No.(Office)" /></p></TD> 

<TD> <input type="text" name="TnOfficeZipcode2" placeholder="Enter Zipcode)"  /></p> </TD> 
</tr>
</tbody>

<thead>
<tr>
<td>Cellphone No.*</td>
<td>Email Address*</td>
</tr>
</thead>
<tbody>
<tr>

<TD> <input type="text" name="CpNo2" placeholder="Enter Cellphone No." required /></p></TD> 
   <TD> <input type="email" name="EmailAdd2" placeholder="Enter  Email Address" required /></p></TD> 
</tr>
</tbody>
</table>
<table>

<div style="font-family: calibri; font-size: 20px; padding-top: 15px; padding-bottom: 15px;  background-color:; color: black; padding-bottom: 5px; width: 100%:";>
Livelihood
</div>
<thead>
<tr>
<td>Present Occupation*</td>
<td>Name of Employer*</td>
<td>Address of Employer*</td>
<td>Source of Fund*</td>
</tr>
</thead>

<tbody>
<tr>

<TD> <input type="text" name="PresentOccupation2" placeholder="Enter Occupation" required /></p></TD> 

<TD> <input type="text" name="Nameofemployer2" placeholder="Name of Emplpyer" required /></p></TD>

<TD> <input type="text" name="Addofemployer2" placeholder="Address of Employer" required /></p></TD>

<TD> <input type="text" name="SrcofFund2" placeholder="Self-employment/Business" required /></p></TD>


</tr>
</tbody>


<thead>
<tr>
<td>TIN no. (leave blank if none)</td>
<td>SSS no. (leave blank if none)</td>
<td>GSIS no. (leave blank if none</td>
<td>Philhealth no. (leave blank if none)</td>
</tr>
</thead>

<tbody>
<tr>
<TD> <input type="text" name="TINno2" placeholder="Enter TIN no."  /></p></TD>

<TD> <input type="text" name="SSSno2" placeholder="Enter SSS no."  /></p></TD>

<TD> <input type="text" name="GSISno2" placeholder="Enter GSIS no."  /></p></TD>

<TD> <input type="text" name="Philhealthno2" placeholder="Enter Philhealth no."  /></p></TD>

</tr>
</tbody>

<thead>
<tr>
<td>Relationship to the proposed insured</td>
</tr>
<thead>

<tbody>
<tr>

<TD> <input type="text" name="relationship" placeholder=""  /></p></TD>

</tr>
</tbody>
</table>
</div>
<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>
*What Insurance policy/cies do you now have in this company? With other company/nies? (Give policy no,.  Name of Company/nies)
</div>

<div class="form">



<table width="100%" border="0" style="border-collapse:collapse;">


<thead>
<tr>
<td>Company*</td>
<td>Policy Number*</td>
<td>Sum Insured*</td>
<td>Premium*</td>
</tr>
</thead>
<tbody>
<tr>
<TD> <input type="text" name="company" placeholder="Company" required /></p></TD>

<TD> <input type="text" name="PolicyNo" placeholder="Policy No." required /></p></TD>

<TD> <input type="text" name="SumInsured" placeholder="Sum Insured" required /></p></TD>

<TD> <input type="text" name="premium" placeholder="Premium" required /></p></TD>


</tr>
</tbody>
</table>
</div>


<br/>


<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>
A. Do you reserve the right to change the beneficiaries according to the terms of the policy? (It is understood that beneficiary/ies share equally, unless, otherwise stated by the applicant)*
</div>
</div>

<select name="QA">
<option value="YES" style="width: 100px;  padding:10px;"> Yes</option>
<option value="NO" style="width: 100px;  padding:10px;"> No</option>
</select>

<br/>

<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>

Plan*
</div>
</div>

<select name="plan">
<option value="PARTICIPATING" style="width: 100px;  padding:10px;"> Participating </option>
<option value="NON-PARTICIPATING" style="width: 100px;  padding:10px;"> Non-participating</option>
</select>


<br>
<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>

Amount of Insurance applied for:*
</div>
</div>

<select name="amount">
<option value="Php" style="width: 100px;  padding:10px;"> Php </option>
<option value="USD" style="width: 100px;  padding:10px;"> USD</option>
</select>


<div style="font-family: calibri; font-size: 18px; padding-top: 15px; padding-bottom: 15px;  background-color:; color: black; padding-bottom: 5px; width: 100%:";>
<thead>
<tr>
<td>Policy to be dated</td>
<TD> <input type="text" name="PolicyDated" placeholder="" /></p></TD>
</tr>
</thead>
</div>


<br/>

<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>

B. Have you made a deposit for this application?*

</div>
</div>

<select name="QB" >
<option value="Yes" style="width: 100px;  padding:10px;"> Yes </option>
<option value="No" style="width: 100px;  padding:10px;"> No</option>
</select>

<div style="font-family: calibri; font-size: 18px; padding-top: 15px; padding-bottom: 15px;  background-color:; color: black; padding-bottom: 5px; width: 100%:";>
<thead>
<tr>
<td>How much, under APR no.</td>
<TD> <input type="text" name="APRno" placeholder="" /></p></TD>
</tr>
</thead>
</div>

<br/>

<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>
C.Mode of Payment*

</div>
</div>

<select name="QC" > 
<option value="spotcash"style="width: 100px; padding:10px;" > Spot Cash </option>

<option value="annual" style="width: 100px;  padding:10px;"> Annual </option>

<option value="semiannual" style="width: 100px;  padding:10px;"> Semi-annual </option>

<option value="quarterly" style="width: 100px;  padding:10px;"> Quarterly </option>
</select>

<br/>

<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>
D. Additional benefits desired* 

</div>
</div>



<select name="QD">
<option value="HC" style="width:600px; padding:10px;"> Health Care </option>

<option value="PW"style="width:600px; padding:10px;"> Premium waiver due to Disability </option>

<option value="ADB"style="width:600px; padding:10px;"> Accidental Death Benefit </option>

<option value="SARwDI"style="width:600px; padding:10px;"> Special Accident Rider with Disability Indenty </option>

<option value="SAR"style="width:600px; padding:10px;"> Special Accident Rider </option>

<option value="payorsClause"style="width:600px; padding:10px;"> Payor's clause:</option>

<option value="others"style="width:600px; padding:10px;"> Other Riders: </option>
</select>


<br>

<select name="QD2">
<option value="HC" style="width:600px; padding:10px;"> Health Care </option>

<option value="PW"style="width:600px; padding:10px;"> Premium waiver due to Disability </option>

<option value="ADB"style="width:600px; padding:10px;"> Accidental Death Benefit </option>

<option value="SARwDI"style="width:600px; padding:10px;"> Special Accident Rider with Disability Indenty </option>

<option value="SAR"style="width:600px; padding:10px;"> Special Accident Rider </option>

<option value="payorsClause"style="width:600px; padding:10px;"> Payor's clause:</option>

<option value="others"style="width:600px; padding:10px;"> Other Riders: </option>
</select>


<br>

<select name="QD3">
<option value="HC" style="width:600px; padding:10px;"> Health Care </option>

<option value="PW"style="width:600px; padding:10px;"> Premium waiver due to Disability </option>

<option value="ADB"style="width:600px; padding:10px;"> Accidental Death Benefit </option>

<option value="SARwDI"style="width:600px; padding:10px;"> Special Accident Rider with Disability Indenty </option>

<option value="SAR"style="width:600px; padding:10px;"> Special Accident Rider </option>

<option value="payorsClause"style="width:600px; padding:10px;"> Payor's clause:</option>

<option value="others"style="width:600px; padding:10px;"> Other Riders: </option>
</select>


<br>
<tr>
 </td>
<td><input type="text" name="payorsClause" placeholder="If Payor's Clause" /></p></TD>
</tr>

<tr>
<td></td>
<td><input type="text" name="others" placeholder="If other riders" /></p></TD>
</tr>

</div>


<br/>

<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>
E. (For Peso participation plan)*

</div>
</div>

<select name="QE"  >
<option value="LTEI"  style="width:700px; padding:10px;"> Left to earn Interest </option>

<option value="UTRP"  style="width:700px; padding:10px;"> Use to reduce premiums </option>

<option value="UTBPUI"  style="width:700px; padding:10px;">  Use to buy paid-up insurance</option>

<option value="PIC"  style="width:700px; padding:10px;"> Paid in cash, if dividend or accumulated dividens is at least Php 200.00, if not left on deposit to earn interest. </option>
</select>
<br>
<tr>
<td>Dividens if any, to be:</td>
<td><input type="text" name="dividens" placeholder="" /></p></TD>
</tr>

</div>



<br/>

<div style="font-family: calibri; font-size: 18px; background-color:; color: black; padding-bottom: 10px; width: 100%:";>
F. In case of premium, default  as stated in the policy (Check one box only)*

</div>
</div>

<select name="QF">
<option value="ETIO"  style="width:500px; padding:10px;"> Extended term insurance option</option>

<option value="APOPO"  style="width:500px; padding:10px;">Automatic payment of Premium option</option>

<option value="PUO"  style="width:500px; padding:10px;"> Paid-up option </option>

<option value="CSV"  style="width:500px; padding:10px;"> Cash surrender value</option>
</select>
<br>

<script>function myFunction() {  var txt;  var r = confirm("Are you sure you want to continue? Please make sure that all the information you entered are valid and correct otherwise may lead to disqualification of your application.");  

if (r == true) {
 window.location.href="index.php"

; }


 else {    txt = "If you're not sure, please review your application one more time."; }

  document.getElementById("demo").innerHTML = txt;}
 </script>​
<form onSubmit=" myFunction() ">
    <TR>    
	  <TD> <p>      </TD> <TD> <input name="submit" onclick="" type="submit" value="Submit" /></p></TD> 
	</TR>
</form>
	
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
</div>	

<div style="width:100%; font-family:  arial ; padding:5px 0px; background-color:khaki; color:steelblue; margin:auto; font-size:18px; text-align:center;">
			Copyright:  2018
</div>	

</body>
</html>
