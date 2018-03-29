<!DOCTYPE html>
<html>
<head>
          <title>Employee - Login</title>


        <meta name="publisher" content="www.lkgtopg.in">
        <meta name="distribution" content="global">
        <meta name="Author" content="LkgtoPGJobs">
        <meta name="copyright" content="http://www.lkgtopg.in">
        <meta name="owner" content="contact@lkgtopg.in">
        <meta name="RATING" content="General">
        <meta name="short-description" content="Jobs">
        <meta name="revisit-after" content="1 day">
        <meta name="description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs,post a job, interviews, walk-ins,hyderabad jobs">
<meta property="og:type" content="article">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs,post a job, interviews, walk-ins,hyderabad jobs.">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg">
<meta name="twitter:title" content="lkgtopg">
<meta name="twitter:description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs,post a job, interviews, walk-ins,hyderabad jobs.">
<link rel="publisher" href="https://plus.google.com/113049606204148531483">








          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
          <link rel="stylesheet" type="text/css" href="css/style1.css">
          <link rel="icon" type="image/png" href="img/reunion.png"/>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php include 'header.php';?>
<span id="blinker"><center><strong><span style="color:blue"><a href="" target="_blank">Share any openings : contact@lkgtopg.in</a></span></strong></center></span>   


<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab" href="#sectionA">Log In</a></li>
        <li><a data-toggle="tab" href="Signin.php#sectionB">Register us!</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" action="redirect.php" method="post">
            <label>Email Address</label>
            <input type="text" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit">Log In</button>
            <a data-toggle="tab" href="Signin.php#sectionC">Forgot Password?</a>
            </form>
            </div>
            <div class="social-login">
            <p>- - - - - - - - - - - - - Follow us - - - - - - - - - - - - - </p>
    		<ul>
          <li><a href="https://www.facebook.com/lkgtopg/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href="https://plus.google.com/113049606204148531483" target="_blank"><i class="fa fa-google-plus"></i> Google+</a></li>
            <li><a href="https://twitter.com/lkgtopg1" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
            </div>
            <div class="clearfix"></div>
        </div>
      <div id="sectionB" class="tab-pane fade">
            <div class="innter-form">
            <form class="sa-innate-form" method="post" action=""  enctype="multipart/form-data">
            <label>Name</label>
            <input type="text" name="username" id="username" required>
            <label>Email Address</label>
            <input type="text" name="email" id="email" required>
            <label>Password</label>
            <input type="password" name="password" id="password" required>
             <input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
            <p>By clicking Join now, you agree to LKGtoPG Jobs User Agreement, Privacy Policy, and Cookie Policy.</p>
            </form>
            </div>
            <div class="social-login">
            <p>- - - - - - - - - - - - - Follow us - - - - - - - - - - - - - </p>
            <ul>
            <li><a href="https://www.facebook.com/lkgtopg/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href="https://plus.google.com/113049606204148531483" target="_blank"><i class="fa fa-google-plus"></i> Google+</a></li>
            <li><a href="https://twitter.com/lkgtopg1" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
            </div>
        </div>
   <div id="sectionC" class="tab-pane fade">
			<div class="innter-form">
            <form class="sa-innate-form" method="post">
            
            <label>Enter Email registered</label>
            <input type="text" name="username">
            
            <button type="submit">Send</button>
            <p>Enter your registered Email -Address to get login details</p>
            </form>
            </div>
            <div class="social-login">
            <p>- - - - - - - - - - - - - Follow us - - - - - - - - - - - - - </p>
			<ul>
           <li><a href="https://www.facebook.com/lkgtopg/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href="https://plus.google.com/113049606204148531483" target="_blank"><i class="fa fa-google-plus"></i> Google+</a></li>
            <li><a href="https://twitter.com/lkgtopg1" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</body>
<?php include 'footer.php';?>
</html>

 <?php
  include ("db.php");

   
 if(isset($_POST['submit'])) {
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

if (!mysqli_query($conn,"INSERT INTO register (username, email, password) 
VALUES ('$username', '$email','$password')"))
  {
  echo("Error description: " . mysqli_error($conn));
  }
}
mysqli_close($conn);
?>