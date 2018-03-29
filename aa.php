  <!DOCTYPE html>
  <html>
  <head>
        <title>LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins  </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Robots" content="index, follow">
<meta name="description" content="list all Govt jobs, it jobs, fresher's walkins, BPO jobs, MBA jobs, Experience jobs  software jobs, Govt and other jobs." />
<meta name="keywords" 	 content="Govt  jobs, It jobs, Bank jobs, BPO Jobs, MBA jobs, Fresher's Walkins, Job Alert, Free job alert, Latest Govt jobs, Railway jobs , Government jobs, Govt jobs, .Net jobs, Java jobs, Sap Jobs, Oracle jobs, Testing jobs" />
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg1">
<meta name="twitter:title" content="LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins">
<meta name="twitter:description" content="LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins | Govt Jobs | IT Jobs | Walkins | BPO Jobs | Fresher's walkins | Job alert">
<meta property="og:type" content="website">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="ovt  jobs, It jobs, Bank jobs, BPO Jobs, MBA jobs, Fresher's Walkins, Job Alert, Free job alert, Latest Govt jobs, Railway jobs , Government jobs, Govt jobs, .Net jobs, Java jobs, Sap Jobs, Oracle jobs, Testing jobs">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">
<link rel="publisher" href="https://plus.google.com/u/0/113049606204148531483">
        <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
        <link rel="icon" type="image/png" href="img/reunion.png"/>
        <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
      <?php include 'header.php';?>
                <p align="center">
                <!-- Standard gray button with gradient -->

          <form action="" align="center" method="POST" enctype="multipart/form-data">
               <span id="blinker"><center><strong><span style="color:blue">Click for Jobs</span></strong></center></span> 
 <span id="blinker"><center><strong><span style="color:blue"><a href="" target="_blank">Share any openings : contact@lkgtopg.in</a></span></strong></center></span>        

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <input type="submit" value='Hyderabad' name ="Hyderabad" class="btn btn-primary btn-xs" />

                <!-- Indicates a successful or positive action -->
                <input type="submit" value='Bangalore' name="Bangalore" class="btn btn-success btn-xs"/>

                <!-- Contextual button for informational alert messages -->
                <input type="submit" value='Mumbai' name="Mumbai" class="btn btn-info btn-xs"/>

                <!-- Indicates caution should be taken with this action -->
                <input type="submit" value='Chennai' name="Chennai"  class="btn btn-warning btn-xs"/>

                <!-- Indicates a dangerous or potentially negative action -->
                <input type="submit" value='Guragoan' name="Guragoan"  class="btn btn-danger btn-xs"/>

                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->

                <input type="submit" value='Noida' name="Noida" class="btn btn-default btn-xs"/>

                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <input type="submit" value='Delhi' name="Delhi" class="btn btn-primary btn-xs"/>

                <!-- Indicates a successful or positive action -->
                <input type="submit" value='Pune' name="Pune" class="btn btn-success btn-xs"/>

                <!-- Contextual button for informational alert messages -->
                <input type="submit" value='kolkata'  name="kolkata" class="btn btn-info btn-xs"/>

                <!-- Indicates caution should be taken with this action -->
                <input type="submit" value='Ahemdabad' name="Ahemdabad" class="btn btn-warning btn-xs"/>

                <!-- Indicates a dangerous or potentially negative action -->
                <input type="submit" value='Bhuvaneshwar' name="Bhuvaneshwar" class="btn btn-danger btn-xs"/>

                <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->

                </p>


                
                <!-- end:BUTTON TYPES -->
        </form>
</body>
</html>



<?php
include ("db.php");
if(isset($_POST['Hyderabad']))      { 

$sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Hyderabad' ORDER BY id DESC ");



$row = mysqli_fetch_row($sql);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 10;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql = "SELECT * FROM jobss WHERE location='Hyderabad' ORDER BY id DESC $limit";
$query = mysqli_query($conn, $sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';
























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
else if($_POST['Bangalore']) {  $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Bangalore' ORDER BY id DESC ");


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
else if($_POST['Mumbai']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Mumbai' ORDER BY id DESC ");


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
  else if($_POST['Chennai']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Chennai' ORDER BY id DESC");


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

else if($_POST['Guragoan']) {  $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Guragoan' ORDER BY id DESC ");


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
  else if($_POST['Noida']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Noida' ORDER BY id DESC");


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
else if($_POST['Delhi']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Delhi' ORDER BY id DESC");


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
  else if($_POST['Pune']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Pune' ORDER BY id DESC");


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
else if($_POST['kolkata']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='kolkata' ORDER BY id DESC");


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
else if($_POST['Guragoan']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Guragoan' ORDER BY id DESC");


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

  else if($_POST['Ahemdabad']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Ahemdabad' ORDER BY id DESC");


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
else if($_POST['Bhuvaneshwar']) { $sql = mysqli_query($conn, "SELECT *FROM jobss  WHERE  location='Bhuvaneshwar' ORDER BY id DESC");


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

  $sql = mysqli_query($conn, "SELECT *FROM jobss ORDER BY id DESC ");


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


  




$conn->close();
?>


<script>
var blink_speed = 500; var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);

</script>











