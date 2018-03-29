<?php


include("auth.php"); //include auth.php file on all secure pages ?>



<html>
<?php
include("auth.php"); ?>

<!DOCTYPE html>
<html>
<head>
          <title>Job Seeker</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
          <link rel="icon" type="image/png" href="img/reunion.png"/>
          <script src="js/style.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script>
$('#file').on("change", function(){
 
         var  sel_files  = document.getElementById('file').files;
         var len = sel_files.length;
 
         for (var i = 0; i < len; i++) {

            var file = sel_files[i];
         
            if (!(file.type==='application/pdf')) {
            continue;
            }
          }

      }); 


</script>





<body>
<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="index.php">LKGtoPG Jobs</a> 
    </div>
<div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="padding-left: 0px;">
        <ul class="nav navbar-nav">
            <li><a href="findjobs.php">Find Jobs</a></li>
             <li><a href="jobdashboard.php">DashBoard</a></li>
        </li>
        </ul>
       
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>Welcome <?php echo $_SESSION['email']; ?>!</p>
                    </a> 
                   
            <li class="dropdown">
                 <a href="index.php" >Logout</a>
            <li>
    </div>
  </div>
</nav>

<center><h3> Thank you for uploading profile with LKGtoPG Job Portal <br>Please check your profile Here: <a href="Jobseek.php">profile</a></h3></center>

<?php
include ("db.php");

if(isset($_POST['submit'])) {
            $fname = mysqli_real_escape_string($conn,$_POST['fname']);
            $lname = mysqli_real_escape_string($conn,$_POST['lname']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $headline = mysqli_real_escape_string($conn,$_POST['headline']);
            $cloc = mysqli_real_escape_string($conn,$_POST['cloc']);
            $contnum = mysqli_real_escape_string($conn,$_POST['contnum']);
            $jobqual = mysqli_real_escape_string($conn,$_POST['jobqual']);
            $skilltest  = mysqli_real_escape_string($conn,$_POST['skilltest']);
            $file = rand(1000,100000)."-".$_FILES['file']['name'];
             $file_loc = $_FILES['file']['tmp_name'];
             $file_size = $_FILES['file']['size'];
             $file_type = $_FILES['file']['type'];
             $folder="uploads/";
            move_uploaded_file($file_loc,$folder.$file);

if (!mysqli_query($conn,"INSERT INTO jobseeker (fname, lname, email, headline, cloc, contnum, jobqual, skilltest, file, type, size) 
VALUES ('$fname' , '$lname', '$email', '$headline', '$cloc', '$contnum', '$jobqual', '$skilltest', '$file' , '$file_type' , '$file_size')"))
  {
  echo("Error description: " . mysqli_error($conn));
  }
}
mysqli_close($conn);
?>

<?php 
include ("db.php");
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['update']))
  {
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $headline = mysqli_real_escape_string($conn,$_POST['headline']);
    $cloc = mysqli_real_escape_string($conn,$_POST['cloc']);
    $contnum = mysqli_real_escape_string($conn,$_POST['contnum']);
    $jobqual = mysqli_real_escape_string($conn,$_POST['jobqual']);
    $skilltest  = mysqli_real_escape_string($conn,$_POST['skilltest']);
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
     $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="uploads/";
 
    move_uploaded_file($file_loc,$folder.$file);


    if (!mysqli_query($conn,"UPDATE jobseeker SET 
      fname='$fname', lname='$lname', headline='$headline', cloc='$cloc', contnum='$contnum', jobqual='$jobqual', skilltest='$skilltest', file='$file', type='$file_type', size='$file_size' where email='$email'"))

      {
      echo("Error description: " . mysqli_error($conn));
      }

    }
    }
