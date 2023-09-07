<?php

require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Applicants</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
        <a href="index.php"> <IMG Src="img/benlife logo.png" Width="350px" Height="100"></a>
<div style="float: right";>
         <IMG Src="img/address logo.png" Width="350px" Height="100">
</div>

</div>

<div style="width:100%; padding:10px 0px; border-radius:0px 0px 0 0;
			background-color:white; color:black; margin:auto;"> 

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


<h2>Benlife Applicants</h2>




<table width="100%" border="1" style="border-collapse:collapse;">


<thead>


<tr><th><strong>S.No</strong>
</th>

<th><strong>BID</strong>
</th>

<th><strong>Last Name</strong>
</th>

<th><strong>First Name</strong>
</th>

<th><strong>Last name</strong>
</th>

<th><strong>Username</Strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from beneficiary;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>

<td align="center"><?php echo $row["bid"]; ?></td>

<td align="center"><?php echo $row["lastname"]; ?></td>

<td align="center"><?php echo $row["firstname"]; ?></td>

<td align="center"><?php echo $row["middlename"]; ?></td>

<td align="center"><?php echo $row["submittedby"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>

</table>

</div>
<div style="width:100%; font-family: Cooper Black ; padding:5px 0px; background-color:khaki; color:steelblue; margin:auto; font-size:18px; text-align:center;">
			Copyright:  2018
</div>

</body>
</html>
