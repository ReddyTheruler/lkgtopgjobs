<?php
require('db.php');


if(isset($_POST["submit"])) {


$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$reemail  = mysqli_real_escape_string($conn,$_POST['reemail']);
$intern = mysqli_real_escape_string($conn,$_POST['intern']);
$state = mysqli_real_escape_string($conn,$_POST['state']);
$city = mysqli_real_escape_string($conn,$_POST['city']);
$degree  = mysqli_real_escape_string($conn,$_POST['degree']);
$passedout = mysqli_real_escape_string($conn,$_POST['passedout']);
$cgpa = mysqli_real_escape_string($conn,$_POST['cgpa']);
$cnum = mysqli_real_escape_string($conn,$_POST['cnum']);
$learn = mysqli_real_escape_string($conn,$_POST['learn']);
$earn = mysqli_real_escape_string($conn,$_POST['earn']);
$news = mysqli_real_escape_string($conn,$_POST['news']);
$decision = mysqli_real_escape_string($conn,$_POST['decision']);
$leader = mysqli_real_escape_string($conn,$_POST['leader']);
$fail = mysqli_real_escape_string($conn,$_POST['fail']);
$three = mysqli_real_escape_string($conn,$_POST['three']);
$plinks = mysqli_real_escape_string($conn,$_POST['plinks']);
$questions = mysqli_real_escape_string($conn,$_POST['questions']);



$query = "INSERT INTO hirein (name, email, reemail, intern, state, city, degree, passedout, cgpa, cnum, learn, earn, news, decision, leader, fail, three, plinks, questions)
   VALUES('$name','$email','$reemail', '$intern','$state','$city','$degree', '$passedout','$cgpa','$cnum','$learn','$earn','$news','$decision','$leader','$fail','$three','$plinks','$questions')"; 
 }





#$query = "INSERT INTO details (accnum, accname, schten, accopn, valmon, accmat, memacnum, deno, accvill, agnam, agcode, accell, adhar)
  # VALUES('$accnum','$accname','$schten', '$accopn','$valmon','$newformat','$memacnum','$deno','$accvill','$agnam','$agcode','$accell','$adhar')"; 
 
           if (!mysqli_query($conn,$query))
      {
      die('Error: ' . mysqli_error($conn));
      }
    else
    {
    	header('Location: Hire.php');
    }
    mysqli_close($conn);


    ?>