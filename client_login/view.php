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
      <a href="apply.php">Apply Now</a>
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


<h2>Benlife Applicants</h2>




<table width="100%" border="1" style="border-collapse:collapse;">


<thead>


<tr><th><strong>S.No</strong>
</th>

<th><strong>ID</strong>
</th>


<th><strong></strong>
</th>

<th><strong>Surname</strong>
</th>

<th><strong>First Name</strong>
</th>

<th><strong>Last name</strong>
</th>



<th><strong>Province</strong></th>

<th><strong></strong>
</th>

<th><strong>Surname</strong></th>

<th><strong>First Name</strong></th>

<th><strong>Middle Name</strong></th>

<th><strong>Province</strong></th>




</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from proposed_insured ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>

<td align="center"><?php echo $row["id"]; ?></td>

<td align="center"><?php echo "PI"; ?></td>

<td align="center"><?php echo $row["surname"]; ?></td>



<td align="center"><?php echo $row["fname"]; ?></td>

<td align="center"><?php echo $row["mname"]; ?></td>

<td align="center"><?php echo $row["province"]; ?></td>

<td align="center"><?php echo " O/P"; ?></td>


<td align="center"><?php echo $row["surname2"]; ?></td>


<td align="center"><?php echo $row["fname2"]; ?></td>

<td align="center"><?php echo $row["mname2"]; ?></td>

<td align="center"><?php echo $row["province2"]; ?></td>



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
