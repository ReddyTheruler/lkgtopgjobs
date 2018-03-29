<!DOCTYPE html>
<html lang="en">
<head>
  <title>LKGtoPG - Job Assistance</title>
  <meta charset="utf-8">
 <link rel="icon" type="image/png" href="img/reunion.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7169451509594912",
    enable_page_level_ads: true
  });
</script>

</head>
<body>
 <?php include 'header.php';?>
<center>Reach us at<span class="blin"> </span><strong> contact@lkgtopg.in</strong> <span class="blin">Call/whatsApp</span><strong>7997085322</strong>
<center>
<input type="button" class="btn btn-primary btn-xs " value="Hyderabad" onclick="location.href = 'Hyderabad.php';">
<input type="button" class="btn btn-success btn-xs " value="Bangalore" onclick="location.href = 'Bangalore.php';">
 <input type="button" class="btn btn-info btn-xs " value="Mumbai" onclick="location.href = 'Mumbai.php';">
<input type="button" class="btn btn-warning btn-xs " value="Chennai" onclick="location.href = 'Chennai.php';">
<input type="button" class="btn btn-danger btn-xs " value="Gurugram" onclick="location.href = 'Gurugram.php';">
<input type="button" class="btn btn-default btn-xs " value="Noida" onclick="location.href = 'Noida.php';">
<input type="button" class="btn btn-primary btn-xs " value="Delhi" onclick="location.href = 'Delhi.php';">
<input type="button" class="btn btn-success btn-xs " value="Pune" onclick="location.href = 'Pune.php';">
<input type="button" class="btn btn-info btn-xs " value="kolkata" onclick="location.href = 'Kolkata.php';">
<input type="button" class="btn btn-warning btn-xs " value="Ahemdabad" onclick="location.href = 'Ahemdabad.php';">
<input type="button" class="btn btn-danger btn-xs " value="Bhuvaneshwar" onclick="location.href = 'Bhuvaneshwar.php';">
<input type="button" class="btn btn-success btn-xs " value="freshers" onclick="location.href = 'freshers.php';">
<input type="button" class="btn btn-primary btn-xs " value="others" onclick="location.href = 'allindiajobs.php';">

 







</center>

<script>
  (function() {
    var cx = '014625510168440654824:rwmbfxeotig';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
   
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">



  <form   method="post" action="">
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
    </div>
    <div class="form-group">
      <label for="pwd">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email"  >
    </div>
    <div class="form-group">
      <label for="pwd">Mobile Number</label>
      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" >
    </div>
    <div class="form-group">
  <label for="comment">FeedBack /Let us know what you're looking for:</label>
  <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
</div>


    <input type="submit" id="submit" name="submit" class="btn btn-success"/>
  </form>

</div>
  <div class="col-sm-3"></div>
</div>


</body>
</html>
<script>
var blink_speed = 500; var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);

</script>
<br>

 <?php
$conn=mysqli_connect("localhost","jangared_indeed","reddycse502","jangared_indeed");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

if(isset($_POST['submit'])) {
              $name = mysqli_real_escape_string($conn,$_POST['name']);
              $email = mysqli_real_escape_string($conn,$_POST['email']);
              $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
              $comment = mysqli_real_escape_string($conn,$_POST['comment']);
             
if (!mysqli_query($conn,"INSERT INTO contact (name, email, mobile, comment) 
VALUES ('$name', '$email','$mobile','$comment')"))
  {
  echo("Error description: " . mysqli_error($conn));
  }
}

 mysqli_close($conn);
?>




<br>
<?php include 'footer.php';?>