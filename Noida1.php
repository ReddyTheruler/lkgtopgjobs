  <!DOCTYPE html>
<html lang="en">
  <head>

        <title>Walkins in Noida  Interviews Freshers Jobs </title>
        <meta name="publisher" content="www.lkgtopg.in">
        <meta name="distribution" content="global">
        <meta name="Author" content="LkgtoPGJobs">
        <meta name="copyright" content="http://www.lkgtopg.in">
        <meta name="owner" content="contact@lkgtopg.in">
        <meta name="RATING" content="General">
        <meta name="short-description" content="Jobs">
        <meta name="revisit-after" content="1 day">
        <meta name="description" content="freshers jobs,noida walkins
noida walkins freshers,
noida walkin today,
noida walkins for freshers this week,
noida jobs,
noida jobs 2017 ">
<meta property="og:type" content="article">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="walkins in noida,freshers jobs,noida walkins,
noida walkins freshers,
noida walkin today,
noida walkins for freshers this week,
noida jobs,
noida jobs 2017">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg">
<meta name="twitter:title" content="lkgtopg">
<meta name="twitter:description" content="freshers jobs,noida walkins
noida walkins freshers,
noida walkin today,
noida walkins for freshers this week,
noida jobs,
noida jobs 2017 ">
<link rel="publisher" href="https://plus.google.com/113049606204148531483">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91796735-1', 'auto');
  ga('send', 'pageview');

</script>





  </head>
  <body>
      <?php include 'header.php';?>




                <p align="center">
                <!-- Standard gray button with gradient -->

          <form action="" align="center" method="POST" enctype="multipart/form-data">
            
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
             <input type="button" class="btn btn-primary btn-xs " value="Hyderabad" onclick="location.href = 'Hyderabad.php';">
<input type="button" class="btn btn-success btn-xs " value="Bangalore" onclick="location.href = 'Bangalore.php';">
 <input type="button" class="btn btn-info btn-xs " value="Mumbai" onclick="location.href = 'Mumbai.php';">
<input type="button" class="btn btn-warning btn-xs " value="Chennai" onclick="location.href = 'Chennai.php';">
<input type="button" class="btn btn-danger btn-xs " value="Gurugram" onclick="location.href = 'Gurugram.php';">


                <input type="submit" value='Noida' name="Noida" class="btn btn-default btn-xs"/>

               <input type="button" class="btn btn-primary btn-xs " value="Delhi" onclick="location.href = 'Delhi.php';">
<input type="button" class="btn btn-success btn-xs " value="Pune" onclick="location.href = 'Pune.php';">
<input type="button" class="btn btn-info btn-xs " value="kolkata" onclick="location.href = 'Kolkata.php';">
<input type="button" class="btn btn-warning btn-xs " value="Ahemdabad" onclick="location.href = 'Ahemdabad.php';">
<input type="button" class="btn btn-danger btn-xs " value="Bhuvaneshwar" onclick="location.href = 'Bhuvaneshwar.php';">
<input type="button" class="btn btn-success btn-xs " value="freshers" onclick="location.href = 'freshers.php';">

<input type="button" class="btn btn-primary btn-xs " value="others" onclick="location.href = 'allindiajobs.php';">


                </p>


                
               
     
        </form>





</center>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
 <form   method="post" action="">
   
    <div class="form-group">
      
      <input type="email" class="form-control input-sm" id="email" name="email" placeholder="Subscribe Here" required >
<input type="submit"  id="submit" name="submit" class="btn btn-success btn-xs"/>
    </div>
    


    
  </form>
 


</div>
  <div class="col-sm-4"></div>
</div>



<br>



<div class="container">
<div class="col-md-12">
  <form action="todaywalkins.php"  method="POST" enctype="multipart/form-data" >
    <div class="input-group add-on">

      <input id="term"name="term" class="form-control" placeholder="Search Skills or Location or keywords"  type="text" required>
      <div class="input-group-btn">
        <button id="button1id" name="button1id" class="btn btn-danger" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>

</center>
<br>



</body>
</html>


<center>
 <a href="https://www.salemmango.com/" target="_blank"><img src="img/salee.png"  class="img-responsive"> </a> 
<center>
<a href="http://smarturl.it/TorqRider" target="_blank"><img src="img/torq.jpg" width="800" height="40" class="img-responsive"> </a> 
</center>

<a href="https://www.careerjobindia.com" target="_blank" rel="noopener"><img src="https://www.careerjobindia.com/wp-content/uploads/2018/01/CareerJobIndia.gif"  class="img-responsive" width="800" height="60" /></a> 
</center>


<?php
$conn=mysqli_connect("localhost","jangared_indeed","reddycse502","jangared_indeed");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

if(isset($_POST['submit'])) {
              
              $email = mysqli_real_escape_string($conn,$_POST['email']);
             
             
if (!mysqli_query($conn,"INSERT INTO subscribe ( email) 
VALUES ('$email')"))
  {
  echo("Error description: " . mysqli_error($conn));
  }
}

 mysqli_close($conn);
?>




<?php
include ("db.php");
if(isset($_POST['Bangalore']))      { 

$sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Bangalore' ORDER BY id DESC ");


echo "<div class=\"table-responsive\">";
echo "<table width=\"100%\" align=\"center\"  class=\"table-bordered\" class=\"fariffsTbl\">";
 echo "<tr align=\"center\">";
  echo   "<th align=\"center\"><h5 align=\"center\">Notice Date</h5></th>";
  echo "<th align=\"center\"><h5 align=\"center\">Job Title</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">Location</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">Education</h5></th>";
    echo "<th align=\"center\"><h5 align=\"center\">Last Date</h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Apply</h5></th>";

if($row = mysqli_num_rows($sql)) { 

while ($row = mysqli_fetch_assoc($sql)){

          echo '<div class="col-md-4">';
          echo "<tr align=\"center\">";
          echo "<td >".$row['noticedate']."</td>"; 
          echo "<td>".$row['jobtitle']."</td>"; 
          echo "<td>".$row['location']."</td>"; 
          echo "<td>".$row['education']."</td>";
          echo "<td>".$row['lastdate']."</td>";
          echo "<td>"."<a href='jobdetail.php?id=".$row['id'] . "' target='_blank'><h4>Apply</h4></a>"."</td>"; 
        echo "</tr>";

}
          
}

}

else
{ 

  $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Noida' ORDER BY id DESC LIMIT 32 ");


echo "<div class=\"container\">";
echo "<div class=\"row\">";
  echo "<div id=\"no-more-tables\">";
            echo "<table class=\"col-md-12 table-bordered table-striped table-condensed cf\">";
        		echo "<thead class=\"cf\">";	
	echo "<tr>";
 #echo "<tr align=\"center\">";
  echo   "<th class=\"numeric\" align=\"center\" ><h5 align=\"center\"><strong>Notice Date</strong></h5></th>";
  echo "<th align=\"center\" class=\"numeric\" ><h5 align=\"center\"><strong>Job Title</strong></h5></th>";
   echo " <th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Location</strong></h5></th>";
   echo " <th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Education</strong></h5></th>";
    echo "<th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Last Date</strong></h5></th>";
 echo "<th align=\"center\" class=\"numeric\"><h5 align=\"center\"><strong>Apply</strong></h5></th>";


echo "</tr>";
echo "</thead>";
echo "<tbody>";


echo "</tr>";
 if($row = mysqli_num_rows($sql)) { 

while ($row = mysqli_fetch_assoc($sql)){

          echo '<div class=\"col-md-4\">';
          echo "<tr align=\"center\">";
          echo "<td data-title=\"NoticeDate\" class=\"numeric\">".$row['noticedate']."</td>"; 
          echo "<td data-title=\"JobTitle\" class=\"numeric\">".$row['jobtitle']."</td>"; 
          echo "<td data-title=\"Location\" class=\"numeric\">".$row['location']."</td>"; 
          echo "<td data-title=\"Education\" class=\"numeric\">".$row['education']."</td>";
          echo "<td data-title=\"LastDate\"class=\"numeric\">".$row['lastdate']."</td>";
          echo "<td data-title=\"Apply\" class=\"numeric\">"."<a href='jobdetail.php?id=".$row['id'] . "' target='_blank'><h4>Apply</h4></a>"."</td>"; 
        echo "</tr>";
}
          
}
	
	
        		echo "</tbody>";
        	echo "</table>";
       echo " </div>";
    echo "</div>";
}



  




$conn->close();
?>



<br>








<br>





<center> <a href="http://lkgtopg.in/aboutus.php" target="_blank">About Us</a>  | <a href="http://lkgtopg.in/privacy.php" target="_blank">Privacy Policy</a> | <a href="http://lkgtopg.in/contact.php" target="_blank">Contact Us </center>
<center><strong>&copy; 2017 LKGtoPG. All Rights Reserved | Design by <a href="http://lkgtopg.in/">LKGtoPG</a></strong></center>



<Style>

@media only screen and (max-width: 800px) {
    
    /* Force table to not be like tables anymore */
	#no-more-tables table, 
	#no-more-tables thead, 
	#no-more-tables tbody, 
	#no-more-tables th, 
	#no-more-tables td, 
	#no-more-tables tr { 
		display: block; 
	}
 
	/* Hide table headers (but not display: none;, for accessibility) */
	#no-more-tables thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
 
	#no-more-tables tr { border: 1px solid #ccc; }
 
	#no-more-tables td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
		white-space: normal;
		text-align:left;
	}
 
	#no-more-tables td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		text-align:left;
		font-weight: bold;
	}
 
	/*
	Label the data
	*/
	#no-more-tables td:before { content: attr(data-title); }
}

</style>






