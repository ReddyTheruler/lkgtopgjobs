  <!DOCTYPE html>
<html lang="en">
  <head>
        <title>LKGtoPG - Freshers Jobs 2018 (IT, Walkins Jobs)</title>
        <meta name="publisher" content="www.lkgtopg.in">
        <meta name="distribution" content="global">
        <meta name="Author" content="LkgtoPGJobs">
        <meta name="copyright" content="http://www.lkgtopg.in">
        <meta name="owner" content="contact@lkgtopg.in">
        <meta name="RATING" content="General">
        <meta name="short-description" content="Jobs">
        <meta name="revisit-after" content="1 day">
        <meta name="description" content="freshers jobs,pune jobs,bangalore jobs,chennai jobs,noida jobs,mumbai jobs,it jobs,bank jobs, govt. jobs, interviews, walk-ins,hyderabad jobs">
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
<input type="button" class="btn btn-default btn-xs " value="Noida" onclick="location.href = 'Noida.php';">
<input type="button" class="btn btn-primary btn-xs " value="Delhi" onclick="location.href = 'Delhi.php';">
<input type="button" class="btn btn-success btn-xs " value="Pune" onclick="location.href = 'Pune.php';">
<input type="button" class="btn btn-info btn-xs " value="kolkata" onclick="location.href = 'Kolkata.php';">
<input type="button" class="btn btn-warning btn-xs " value="Ahemdabad" onclick="location.href = 'Ahemdabad.php';">
<input type="button" class="btn btn-danger btn-xs " value="Bhuvaneshwar" onclick="location.href = 'Bhuvaneshwar.php';">
<input type="button" class="btn btn-success btn-xs " value="freshers" onclick="location.href = 'freshers.php';">

<input type="button" class="btn btn-primary btn-xs " value="others" onclick="location.href = 'allindiajobs.php';">




                </p>


                
               
 
      </form>


<?php
  // Set timezone
  date_default_timezone_set('UTC');

  // Start date
  $date = date('Y-m-d', strtotime('-6 days'));
  // End date
  $end_date = date('Y-m-d');
  echo "<center>";
echo "<form action = 'Weeklyjobs.php' method='post' >";
  while (strtotime($date) <= strtotime($end_date)) {

#echo "<div class=\"container-fluid\">";
#echo "<div class=\"col-sm-12 text-center\">";

   echo " <div class=\"btn-group\" >";
   echo "<div class=\"col-sm-offset-2  text-center\">";

                 echo "<input type=\"submit\"  class=\"btn btn-default btn-xs \" value='".$date."' name='btn_submit' >";
                  $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
echo "</div>";
echo "</div>";


 }
 echo "</form>";
echo "</center>";
?>




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
</div>
</div>


<br>

</body>
</html>

<?php
include ("db.php");
if(isset($_POST['Hyderabad']))      { 

$sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Hyderabad' ORDER BY id DESC LIMIT 32");


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
{   $sql = mysqli_query($conn, "SELECT *FROM jobss WHERE cexp='freshers'  ORDER BY id DESC LIMIT 32 ");


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




<?php include 'footer.php';?>



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








