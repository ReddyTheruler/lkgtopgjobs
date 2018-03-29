<?php
require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM jobss WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: cabbookings.php"); 
?>