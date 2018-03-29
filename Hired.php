<?php

 
require('db.php');
include("auth1.php");
?>




<html>
 <title>Manoj-Admin</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
          <link rel="icon" type="image/png" href="img/reunion.png"/>
          <script src="js/style.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<div class="form">
<center>
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="cabbookings.php">View Cab Bookings</a></p>
<p><a href="contactinfo.php">Contact Info</a></p>
<p><a href="Hired.php">candidates</a></p>
<a href="logout.php">Logout</a>
</center>
</div>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
  <th><strong>name</strong></th>
  <th><strong>email</strong></th>
  <th><strong>intern</strong>
  </th><th><strong>state</strong>
</th><th><strong>ldegree</strong></th> 
<th><strong>plinks</strong>
  <th><strong>cnum</strong></th></th>
<th><strong>questions</strong></th>
<th><strong>skilltest</strong></th>
<th><strong>three</strong></th>


  <th><strong>Delete</strong></th>


</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from hirein ORDER BY id desc";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["name"]; ?>

<td align="center"><?php echo $row["email"]; ?></td></td>
<td align="center"><?php echo $row["intern"]; ?></td></td>
<td align="center"><?php echo $row["state"]; ?></td></td>
<td align="center"><?php echo $row["ldegree"]; ?></td></td>
<td align="center"><?php echo $row["plinks"]; ?></td></td>
<td align="center"><?php echo $row["cnum"]; ?></td></td>
<td align="center"><?php echo $row["questions"]; ?></td></td>
<td align="center"><?php echo $row["skilltest"]; ?></td></td>
<td align="center"><?php echo $row["three"]; ?></td></td>

<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>

</tr>




<?php $count++; } ?>
</tbody>
</table>