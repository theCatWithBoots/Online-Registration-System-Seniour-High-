<form action="searchb.php" method="post">
<?php
$hid="style='visibility:hidden'"; 
$r1="";
$r2="";
$r3="";
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
		else if(is_numeric($_POST["t1"])==false)
		{
			$codeerr="Accpet numeric value only ";
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
		$result=$db->query('select *from beneficiary where bid='.$code);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row=$result->fetch();
		$cnt=count($row);
		if($cnt>1)
		{						
			$r1=$row["name"]; 				
			$r2=$row["address"]; 			
			$r3=$row["pob"];
			$r4=$row["dob"];
			$r5=$row["citizenship"];
     $r6=$row["relationship"];
	
		
$r7=$row["name2"]; 				
			$r8=$row["address2"]; 			
			$r9=$row["pob2"];
			$r10=$row["dob2"];
$r11=$row["citizenship2"];
     $r12=$row["relationship2"];


$r13=$row["name3"]; 				
			$r14=$row["address3"]; 			
			$r15=$row["pob3"];
			$r16=$row["dob3"];
			$r17=$row["citizenship3"];
     $r18=$row["relationship3"];


 $r19=$row["lastname"];
 $r20=$row["firstname"];
 $r21=$row["middlename"];
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
<style>

p {

color: red;
}

</style>

<Title>Select...</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

        <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<div style="width:100%; padding:10px 0px; border-radius:0px 0px 0 0;
			background-color:white; color:white; margin:auto;"> 

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">File</a>
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
<td >Enter Applicant Username</td>
<td width="300px"><input type="text" name="t1" style="width:100%; height:12px" placeholder="<?php echo $codeerr ?>"  /></td>
<td >
<input type="submit" name="submit" value="search" style="padding:3px; width:100px; font-size:18px" />
 </td>
</tr>
</table>

<div style="width:695px; padding:20px 0px; border-radius:0px 0px 20px 20px; background-color:white; color:#FFF; margin:auto; font-size:18px; text-align:center;"></div>

<br />

<div <?php echo $hid; ?>>
<div style="width:500px; padding:9px 0px; border-radius:30px 30px 30px 30px; background-color:#00A7CA; color:#FFF; margin:auto; font-size:20px;font-family:Tahoma, Geneva, sans-serif; text-align:center;">Result</div>


<div id="print">
<table  border="0" style="width:500px; margin:auto; font-family:Tahoma, Geneva, sans-serif; color:#666; background-color:#FF9; text-align:center">




<table width="100%" border="1" style="border-collapse:collapse;">
<table>
<tr>
<td>Beneficiary of</td>
<td>
<p><?php echo $r19; ?></p>
</td>

<td>
<p><?php echo $r20; ?></p>
</td>

<td>
<p><?php echo $r21; ?></p>
</td>
</tr>
</table>

<table width="100%" border="1" style="border-collapse:collapse;">


<thead>


<th><strong>Name</strong>
</th>

<th><strong>Address</strong>
</th>

<th><strong>Place of Birth</strong>
</th>



<th><strong>Date of Birth</strong></th>

<th><strong>Citizenship</strong>
</th>

<th><strong>Relationship</strong></th>

</tr>
</thead>

<tbody>
<tr>
	<td><?php echo $r1; ?></td>
<td><?php echo $r2; ?></td>
<td><?php echo $r3; ?></td>
<td><?php echo $r4; ?></td>
<td><?php echo $r5; ?></td>
<td><?php echo $r6; ?></td>
</tr>

<tbody>
<tr>
	<td><?php echo $r7; ?></td>
<td><?php echo $r8; ?></td>
<td><?php echo $r9; ?></td>
<td><?php echo $r10; ?></td>
<td><?php echo $r11; ?></td>
<td><?php echo $r12; ?></td>
</tr>

<tbody>
<tr>
	<td><?php echo $r13; ?></td>
<td><?php echo $r14; ?></td>
<td><?php echo $r15; ?></td>
<td><?php echo $r16; ?></td>
<td><?php echo $r17; ?></td>
<td><?php echo $r18; ?></td>
</tr>
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
<div style="width:500px; padding:20px 0px; border-radius:0px 0px 20px 20px; background-color:white; color:#FFF; margin:auto; font-size:18px; text-align:center;"></div>
</div>
</form>


<div style="width:100%; font-family: arial ; padding:5px 0px;  background-color:khaki; color:steelblue; margin:auto; font-size:15px; padding-top: 20px; padding-bottom: 20px; text-align:center;">
			Copyright 2018 © Benlife. All Rights Reserved
		
</div>	
</body>
</html>