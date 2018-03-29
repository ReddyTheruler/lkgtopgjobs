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




<div class="container">
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
    

<div class="form-group">
      <label for="usr">Notice_Date</label>
      <input type="date" class="form-control" name="noticedate" id="noticedate">
    </div>

<div class="form-group">
      <label for="usr">Job_title</label>
      <input type="text" class="form-control" name="jobtitle" id="jobtitle">
    </div>

     <div class="form-group">
      <label for="usr">Job_Location</label>
      <input type="text" class="form-control" name="location" id="location">
    </div>
<div class="form-group">
      <label for="usr">Job Education</label>
      <input type="text" class="form-control" name="education" id="education">
    </div>
     <div class="form-group">
      <label for="usr">Last Date</label>
      <input type="text" class="form-control" name="lastdate" id="lastdate">
    </div>
 <div class="form-group">
      <label for="usr">CompanyName</label>
      <input type="text" class="form-control" name="cname" id="cname">
    </div>
<div class="form-group">
      <label for="usr">Experience</label>
      <input type="text" class="form-control" name="cexp" id="cexp">
    </div>
   <div class="form-group">
  <label for="comment">Responsibilites</label>
  <textarea class="form-control" rows="10" cols="10" name="respon" id="respon"></textarea>
</div>
  <div class="form-group">
      <label for="usr">SkillSet</label>
      <input type="text" class="form-control" name="skilltest" id="skilltest">
    </div>  
<div class="form-group">
      <label for="usr">Apply</label>
      <input type="text" class="form-control" name="apply" id="apply">
    </div>  
<div class="form-group">
      <label for="usr">Others</label>
      <input type="text" class="form-control" name="others" id="others">
    </div>  
    <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
        </div>
        
    </div>
    
</form>
 </div>  
</body>
</html>


<?php
$conn=mysqli_connect("localhost","jangared_indeed","reddycse502","jangared_indeed");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }


if(isset($_POST['submit'])) {
          
$noticedate = mysqli_real_escape_string($conn,$_POST['noticedate']);
$jobtitle = mysqli_real_escape_string($conn,$_POST['jobtitle']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$education = mysqli_real_escape_string($conn,$_POST['education']);
$lastdate = mysqli_real_escape_string($conn,$_POST['lastdate']);
$cname = mysqli_real_escape_string($conn,$_POST['cname']);
$cexp = mysqli_real_escape_string($conn,$_POST['cexp']);
$respon = mysqli_real_escape_string($conn,$_POST['respon']);
$skilltest = mysqli_real_escape_string($conn,$_POST['skilltest']);
$apply = mysqli_real_escape_string($conn,$_POST['apply']);
$others = mysqli_real_escape_string($conn,$_POST['others']);

$check = "INSERT INTO jobss ( noticedate,
jobtitle,
location,
education,
lastdate,
cname,
cexp,
respon,
skilltest,
apply, others) VALUES 
  ('$noticedate' , '$jobtitle' , '$location', '$education','$lastdate','$cname', '$cexp', '$respon','$skilltest','$apply','$others')";
 $result = mysqli_query($conn, $check) or trigger_error("Query Failed! SQL: $check - Error: ".mysqli_error(), E_USER_ERROR);
}
mysqli_close($conn);

                                      ?>








