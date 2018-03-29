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


</head>
<body>
 <?php include 'header.php';?>

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



   
 <center><span style="color:#32CD32"><strong>Mail us 

contact@lkgtopg.in</strong></span></center>

<div class="container">

  <form   method="post" action="">
   
    <div class="form-group">
  <label for="comment">Brief about location & technology you're looking for:</label>
  <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
</div>


    <input type="submit" id="submit" name="submit" class="btn btn-success"/>
  </form>
</div>
</body>
</html>
<script>


 <?php
$conn=mysqli_connect("localhost","jangared_indeed","reddycse502","jangared_indeed");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

if(isset($_POST['submit'])) {
             


$result = array();
$keyword_tokens = explode(',', $keywords);
$where = '';
$i=0;
foreach($keyword_tokens as $keyword) {
  $where.= " address LIKE'%".mysqli_real_escape_string(trim($keyword))."%' OR ";
}
  // trim last OR with substr_replace
  substr_replace($where, "OR", -1, 1);
  $sql = "SELECT * FROM jobss WHERE $where";

return $result;
}

 mysqli_close($conn);
?>




<center><strong>&copy; 2017 LKGtoPG. All Rights Reserved | Design by <a href="http://lkgtopg.in/">LKGtoPG</a></strong></center>