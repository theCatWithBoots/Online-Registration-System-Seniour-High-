<form action="search.php" method="post">
<?php
$hid="style='visibility:hidden'"; 
$r1="";$r2="";$r3="";
$r4="";
$r5="";
$r6="";
$r7="";
$r8="";
$r9="";
$r10="";
$r11="";
$r12="";
$r13="";
$r14="";
$r15="";
$r16="";
$r17="";
$r18="";
$r19="";
$r20="";
$r21="";
$r22="";
$r23="";
$r24="";
$r25="";
$r26="";
$r27="";
$r28="";
$r29="";
$r30="";
$r31="";
$r32="";
$r33="";
$r34="";
$r35="";
$r36="";
$r37="";
$r38="";
$r39="";
$r40="";
$r41="";
$r42="";
$r43="";
$r44="";
$r45="";
$r46="";
$r47="";
$r48="";
$r49="";
$r50="";
$r51="";
$r52="";
$r53="";
$r54="";
$r55="";
$r56="";
$r57="";
$r58="";
$r59="";
$r60="";
$r61="";
$r62="";
$r63="";
$r64="";
$r65="";
$r66="";
$r67="";
$r68="";
$r69="";
$r70="";
$r71="";
$r72="";
$r73="";
$r74="";

$nt="";
$codeerr="";
$code="";
$flag=0;
if(isset($_POST["submit"]))
{
    if(empty($_POST["t1"]))
	{
		$codeerr="Data Missing";
		$flag=0;
		}
		else if(is_numeric(trim($_POST["t1"]))==false)
		{
			$codeerr="Accept Numeric value only";
			$flag=0;
		}
		else
		{
			$code=$_POST["t1"];
			$flag=1;
			}
}

if($flag!=0)
{
	$server='localhost';
	$username='root';
	$password='';
	$cnt=0;
	try
	{
		$db=new PDO("mysql: host=$server; dbname=registration",$username, $password);
		$result=$db->query('select *from proposed_insured where id='.$code);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row=$result->fetch();
		$cnt=count($row);
		if($cnt>1)
		{										

$r1=$row['surname'];
$r2=$row['fname'];
$r3=$row['mname'];
$r4=$row['age'];
$r5=$row['birthdate'];
$r6=$row['birthplace'];
$r7=$row['citizenship'];
$r8=$row['gender'];
$r9=$row['Cstatus'];
$r10=$row['ResidenceNo'];
$r11=$row['PurokStreet'];
$r12=$row['BarangaySubd'];
$r13=$row['CityTown'];
$r14=$row['province'];
$r15=$row['TnHome'];
$r16=$row['TnHomeZipcode'];
$r17=$row['TnOffice'];
$r18=$row['TnOfficeZipcode'];
$r19=$row['CpNo'];
$r20=$row['EmailAdd'];
$r21=$row['PresentOccupation'];
$r22=$row['Nameofemployer'];
$r23=$row['Addofemployer'];
$r24=$row['NatureofSEB'];
$r25=$row['TINno'];
$r26=$row['SSSno'];
$r27=$row['GSISno'];
$r28=$row['Philhealthno'];


$r29=$row['surname2'];
$r30=$row['fname2'];
$r31=$row['mname2'];
$r32=$row['age2'];
$r33=$row['birthdate2'];
$r34=$row['birthplace2'];
$r35=$row['citizenship2'];
$r36=$row['gender2'];
$r37=$row['Cstatus2'];
$r38=$row['ResidenceNo2'];
$r39=$row['PurokStreet2'];
$r40=$row['BarangaySubd2'];
$r41=$row['CityTown2'];
$r42=$row['province2'];
$r43=$row['TnHome2'];
$r44=$row['TnHomeZipcode2'];
$r45=$row['TnOffice2'];
$r46=$row['TnOfficeZipcode2'];
$r47=$row['CpNo2'];
$r48=$row['EmailAdd2'];
$r49=$row['PresentOccupation2'];
$r50=$row['Nameofemployer2'];
$r51=$row['Addofemployer2'];
$r52=$row['SrcofFund2'];
$r53=$row['TINno2'];
$r54=$row['SSSno2'];
$r55=$row['GSISno2'];
$r56=$row['Philhealthno2'];
$r57=$row['relationship'];

$r58=$row['company'];
$r59=$row['PolicyNo'];
$r60=$row['SumInsured'];
$r61=$row['premium'];


$r62=$row['QA'];
$r63=$row['plan'];
$r64=$row['amount'];
$r65=$row['PolicyDated'];
$r66=$row['QB'];
$r67=$row['APRno'];
$r68=$row['QC'];
$r69=$row['QD'];
$r70=$row['payorsClause'];
$r71=$row['others'];
$r72=$row['QE'];
$r73=$row['dividens'];
$r74=$row['QF'];


			$hid="style='visibility:visible'"; 
		
		}
		
		else
		{
			$hid="style='visibility:visible'"; 
			$nt="<span style='color:red'>Data not found...!</span>";
		}
		}
			 
    
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}
 
?>
<!DOCTYPE html>
<html>
<head>
<style >
p {
color: red;
}
</style>
<meta charset="utf-8">
<title>Search Record</title>



<link rel="stylesheet" href="css/style3.css" />
<link rel="stylesheet" href="screen.css" type="text/css" media="screen">
<link rel="stylesheet" href="print.css" type="text/css" media="print">
<script src="css/java.js" /></script>
</head>
<body>

        <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<div style="width:100%; border-radius:0px 0px 0 0;
			background-color:; color:lavander; margin:auto;"> 

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Beneficiaries</a>
    <div class="dropdown-content">
     <a href="insert.php">Insert New Record</a>
 <a href="view.php">View Registered Applicants</a>
   <a href="beneficiaryid.php">View Beneficiary BID</a>
 <a href="search.php">Search Application</a>
 <a href="searchb.php">Search Beneficiaries</a>

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

<br />

<table  style="width:695px; margin:auto; font-family:Tahoma, Geneva, sans-serif; color:#666; background-color:#FF9; text-align:center">
<tr>
<td >Enter Applicant ID</td>
<td width="300px"><input type="text" name="t1" style="width:100%; height:12px" placeholder="<?php echo $codeerr ?>"  /></td>
<td >
<input type="submit" name="submit" value="search" style="padding:3px; width:100px; font-size:18px" />
 </td>
</tr>
</table>

<div style="width:695px; padding:20px 0px; border-radius:0px 0px 20px 20px; background-color:white; color:#FFF; margin:auto; font-size:18px; text-align:center;"></div>

<br />

<div <?php echo $hid; ?>>
<div style="width:500px; padding:13px 0px; border-radius:30px ; background-color:#00A7CA; color:#FFF; margin:auto; font-size:20px;font-family:Tahoma, Geneva, sans-serif; text-align:center;"> Results</div>

<br/>

</div>
<tr>
</div>
 </div>
</div>

<div id="print">
<div style="padding-top: 5px; padding-bottom: 5px; background-color: black; color: white;text-align: center;">
Proposed Insured
</tr>
</table>
</div>
<table border=2 style=border-collapse:collapse bordercolor=silver width=100%> 		

<tr>
<td > 				
<table > 				
<tr>
<td>Full Name</td>
</tr> 	
</table> 			
</td> 			


<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 			
		
<tr>
		
<td>Surname</td> 							<td><p><?php echo $r1; ?></p></td> 							<td>First Name</td> 				
<td><p><?php echo $r2; ?></p></td> 							<td>Middle Name</td> 							<td><p><?php echo $r3; ?></p></td> 
					
</tr> 				
</table> 			
</td> 		
</tr> 		


<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Date of Birth
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r5; ?></p></td>
<td>Age</td>
<td><p><?php echo $r4; ?></p></td>
<td>Citizenship</td>
<td><p><?php echo $r7; ?></p></td>
<td>Gender</td>
<td><p><?php echo $r8; ?></p></td>
</tr> 				
</table> 			




<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Place of Birth
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r6; ?></p></td>
<td>Civil Status</td>
<td><p><?php echo $r9; ?></p></td>
</tr> 				
</table> 			


<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Address
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td>Residence no.</td>
<td><p><?php echo $r10; ?></p></td>
<td>Purok/Street</td>
<td><p><?php echo $r11; ?></p></td>
<td>Barangay/Subd</td>
<td><p><?php echo $r12; ?></p></td>
</tr>
<tr>
<td>City/Town</td>
<td><p><?php echo $r13; ?></p></td>
<td>Province</td>
<td><p><?php echo $r14; ?></p></td>
</tr> 			
</table> 			

<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Telephone no. (Home)
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r15; ?></p></td>
<td>Zipcode</td>
<td><p><?php echo $r16; ?></p></td>
</tr> 				
</table> 			


<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Telephone no. (Office)
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r17; ?></p></td>
<td>Zipcode</td>
<td><p><?php echo $r18; ?></p></td>
</tr> 				
</table> 			

<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Cellphone no.
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r19; ?></p></td>
<td>Email Address</td>
<td><p><?php echo $r20; ?></p></td>
</tr> 				
</table> 	


<tr>
<td>
<table > 					

<tr>
<td> 					
Present Occupation
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r21; ?></p></td>
</tr> 				
</table> 			


<tr>
<td>
<table > 					

<tr>
<td> 					
Name of Empployer
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r22; ?></p></td>
</tr> 				
</table> 			


<tr>
<td>
<table > 					

<tr>
<td> 					
Address of Employer
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r23; ?></p></td>
</tr> 				
</table> 			

		


<tr>
<td>
<table > 					

<tr>
<td> 					
Nature of Self-employment/ Business</td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r24; ?></p></td>
</tr> 				
</table> 		

<tr>
<td>
<table > 					

<tr>
<td> 					
TIN no.
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r25; ?></p></td>
<td>SSS no.</td>
<td><p><?php echo $r26; ?></p></td>
</tr> 				
</table> 			


<tr>
<td>
<table > 					

<tr>
<td> 					
GSIS no.
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r27; ?></p></td>
<td>Philhealth no.</td>
<td><p><?php echo $r28; ?></p></td>
</tr> 				
</table> 			


<table border=2 style=border-collapse:collapse bordercolor=silver width=100%> 		
	
</td> 		
</tr> 	
</table> 


</td> 		
</tr> 	
</table> 
<br>

<tr>
<div style="padding-top: 5px; padding-bottom: 5px; background-color: black; color: white;text-align: center;">
Owner/Payor
</tr>
</table>
</div>
<table border=2 style=border-collapse:collapse bordercolor=silver width=100%> 		

<tr>
<td > 				
<table > 				
<tr>
<td>Full Name</td>
</tr> 	
</table> 			
</td> 			


<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 			
		
<tr>
		
<td>Surname</td> 							<td><p><?php echo $r29; ?></p></td> 							<td>First Name</td> 				
<td><p><?php echo $r30; ?></p></td> 							<td>Middle Name</td> 							<td><p><?php echo $r31; ?></p></td> 
					
</tr> 				
</table> 			
</td> 		
</tr> 		


<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Date of Birth
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r33; ?></p></td>
<td>Age</td>
<td><p><?php echo $r32; ?></p></td>
<td>Citizenship</td>
<td><p><?php echo $r35; ?></p></td>
<td>Gender</td>
<td><p><?php echo $r36; ?></p></td>
</tr> 				
</table> 			
</td> 		
</tr> 



<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Place of Birth
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r34; ?></p></td>
<td>Civil Status</td>
<td><p><?php echo $r37; ?></p></td>
</tr> 				
</table> 			



<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Address
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td>Residence no.</td>
<td><p><?php echo $r38; ?></p></td>
<td>Purok/Street</td>
<td><p><?php echo $r39; ?></p></td>
<td>Barangay/Subd</td>
<td><p><?php echo $r40; ?></p></td>
</tr>
<tr>
<td>City/Town</td>
<td><p><?php echo $r41; ?></p></td>
<td>Province</td>
<td><p><?php echo $r42; ?></p></td>
</tr> 				
</table> 			

<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Telephone no. (Home)
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r43; ?></p></td>
<td>Zipcode</td>
<td><p><?php echo $r44; ?></p></td>
</tr> 				
</table> 			


<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Telephone no. (Office)
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r45; ?></p></td>
<td>Zipcode</td>
<td><p><?php echo $r46; ?></p></td>
</tr> 				
</table> 			

<tr> 		
<td > 				

<table > 					

<tr>
<td> 					
Cellphone no.
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r47; ?></p></td>
<td>Email Address</td>
<td><p><?php echo $r48; ?></p></td>
</tr> 				
</table> 	


<tr>
<td>
<table > 					

<tr>
<td> 					
Present Occupation
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r49; ?></p></td>
</tr> 				
</table> 			


<tr>
<td>
<table > 					

<tr>
<td> 					
Name of Empployer
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r50; ?></p></td>
</tr> 				
</table> 			


<tr>
<td>
<table > 					

<tr>
<td> 					
Address of Employer
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r51; ?></p></td>
</tr> 				
</table> 			




		 			


<tr>
<td>
<table > 					

<tr>
<td> 					
Source of Fund
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r52; ?></p></td>
</tr> 				
</table> 		


<tr>
<td>
<table > 					

<tr>
<td> 					
TIN no.
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r53; ?></p></td>
<td>SSS no.</td>
<td><p><?php echo $r54; ?></p></td>
<td>GSIS no</td>
<td><p><?php echo $r55; ?></p></td>
</tr> 				
</table> 			


<tr>
<td>
<table > 					

<tr>
<td> 					
Philhealth no.
 </td>
</tr> 				
</table> 			
</td> 	

		
<td> 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 					
<tr>
<td><p><?php echo $r56; ?></p></td>
<td>Relationship to the Proposed Insured</td>
<td><p><?php echo $r57; ?></p></td>
</tr> 				
</table> 					
	
</td> 		
</tr> 	
</table> 


<br>
<tr>
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 		

<tr>
<td > 				
<table > 				
<tr>
<td>1. What Insurance policy/cies do you now have in this company? With other company/nies? (Give policy no., Name of Company/nies)</td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 			



<tr>
<td > 				
<table border=1  style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>Company</td>
<td><p><?php echo $r58; ?></p></td>
<td>Policy no.</td>
<td><p><?php echo $r59; ?></p></td>
<td>Sum Insured</td>
<td><p><?php echo $r60; ?></p></td>
<td>Premium</td>
<td><p><?php echo $r61; ?></p></td>
</tr> 	
</table> 			
</td> 					
</tr> 	
</table> 
	




<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>2.Do you reserve the right to change the beneficiaries according to the terms of the policy? (It is understood that beneficiary/ies share equally, unless, otherwise stated by the applicant)</td>
<td><p><?php echo $r62; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>A. Plan</td>
<td><p><?php echo $r63; ?></p></td>
<td>Amount of Insurance Applied for:</td>
<td><p><?php echo $r64; ?></p></td>
<td>Policy to be dated</td>
<td><p><?php echo $r65; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>3. Have you made a deposit for this application?</td>
<td><p><?php echo $r66; ?></p></td>
<td>How much, Under APR no</td>
<td><p><?php echo $r67; ?></p></td>
<td>Mode of Payment</td>
<td><p><?php echo $r68; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

	 	
<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>4. Additional benefits desired</td>
<td><p><?php echo $r69; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>(If) Payor's Clause</td>
<td><p><?php echo $r70; ?></p></td>
<td>(If) Other Riders</td>
<td><p><?php echo $r71; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>5. (For Peso participation plan) </td>
<td><p><?php echo $r72; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>Dividends if any, to be:</td>
<td><p><?php echo $r73; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	

<tr>
<td > 				
<table border=1 style=border-collapse:collapse bordercolor=silver width=100%> 				
<tr>
<td>6. In case of premium, default as stated in the policy </td>
<td><p><?php echo $r74; ?></p></td>
</tr> 	
</table> 			
</td> 			
</tr>
</table> 	
</table>
</div>


</div>

<script>
function myFunction() {
var prtContent = document.getElementById("print");
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
 WinPrint.document.write(prtContent.innerHTML); 
 WinPrint.document.close();
 WinPrint.focus();
 WinPrint.print();
 WinPrint.close();
 }
</script>

<button onclick="myFunction()">Print</button>
<tr>	<td colspan="3"><?php echo $nt; ?></td></tr>

<div style="width:100%; padding:20px 0px; border-radius:0px 0px 20px 20px; background-color:white; color:#FFF; margin:auto; font-size:18px; text-align:center;"></div>
</div>
</form>

<div style="width:100%; font-family:  arial ; padding:5px 0px; background-color:khaki; color:steelblue; margin:auto; font-size:18px; text-align:center;">
			Copyright:  2018
</div>
</div>	
</body>
</html>