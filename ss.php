<?php

require('db.php');
include("auth.php");
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Shree Krishna - Details </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
   

<!--skycons-icons-->
<script src="js/skycons.js"></script>


<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href=""> <h1>Sahara </h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
							
									<form action=""  method="POST" enctype="multipart/form-data">
										<input type="text"   id="term" name ="term"  placeholder="Search..." required="">	
										<input type="submit" id="search" name="search" value="">					
									</form>
								
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 

 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
							<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
									<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <a href="15days.php"><i class="fa fa-envelope"></i></a><span class="badge"><?php include 'f.php';?>

</span></a> 
									</li>	
								</ul> 
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
					

							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<!--<span class="prfil-img"><img src="images/.png" alt=""> </span> -->
												<div class="user-name">
													<p>Welcome <?php echo $_SESSION['username']; ?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<!--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> -->
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>

<br>
<br>
<br>
<br>
<div class="chit-chat-layer1">
	<div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Customer Details
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                 <?php


$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sahara';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
if(isset($_POST['search']))
{ 


$searchTerm = $_POST['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM details WHERE accname LIKE '%".$searchTerm."%' OR accnum LIKE '%".$searchTerm."%' OR 

schten LIKE '%".$searchTerm."%' OR
accname LIKE '%".$searchTerm."%' OR 
memacnum LIKE '%".$searchTerm."%' OR 
deno  LIKE '%".$searchTerm."%' OR 
accvill LIKE '%".$searchTerm."%' OR 
agnam LIKE '%".$searchTerm."%' OR 
agcode LIKE '%".$searchTerm."%' OR 
accell LIKE '%".$searchTerm."%' OR 
adhar LIKE '%".$searchTerm."%' 
 

 ");









echo "<div class=\"table-responsive\">";
echo "<table width=\"100%\" align=\"center\"  class=\"table-bordered\" class=\"fariffsTbl\">";
 echo "<tr align=\"center\">";
  echo   "<th align=\"center\"><h5 align=\"center\">S.No</h5></th>";
  echo "<th align=\"center\"><h5 align=\"center\">Acc.Num</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">Acc.HolderName</h5></th>";
   echo " <th align=\"center\"><h5 align=\"center\">SchemeTenture</h5></th>";
    echo "<th align=\"center\"><h5 align=\"center\">Acc.OpenDate</h5></th>";
  echo "<th align=\"center\"><h5 align=\"center\">Months</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Acc.MaturityDate</h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Membership AccNum</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Deno </h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Village</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Agn.Name</h5></th>";
 echo "<th align=\"center\"><h5 align=\"center\">Agn.Code</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">CellNum</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">AdharNo</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Edit</h5></th>";
echo "<th align=\"center\"><h5 align=\"center\">Delete</h5></th>";

#if($row = mysqli_num_rows($result)) { 

while ($row = $query->fetch_assoc()) {
       echo '<div class="col-md-4">';
          echo "<tr align=\"center\">";
          echo "<td >".$row['id']."</td>"; 
          echo "<td>".$row['accnum']."</td>"; 
          echo "<td>".$row['accname']."</td>"; 
          echo "<td>".$row['schten']."</td>";
          echo "<td>".$row['accopn']."</td>";
           echo "<td>".$row['valmon']."</td>";
            echo "<td>".$row['accmat']."</td>";
             echo "<td>".$row['memacnum']."</td>";
              echo "<td>".$row['deno']."</td>";
               echo "<td>".$row['accvill']."</td>";
                echo "<td>".$row['agnam']."</td>";
  echo "<td>".$row['agcode']."</td>";
  echo "<td>".$row['accell']."</td>";  
  echo "<td>".$row['adhar']."</td>";

      
          echo "<td>"."<a href='edit1.php?id=".$row['id'] . "' target='_blank'><h4>Edit</h4></a>"."</td>"; 
        	echo "<td>"."<a href='delete.php?id=".$row['id'] . "' ><h4>Delete</h4></a>"."</td>"; 
        
    
        
        echo "</tr>";


}
//return json data
#echo json_encode($row);









}
          





?>
 
                     
                      </table>
                  </div>
             </div>
      </div>
     
		
</div>

</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="details.php"><i class="fa fa-tachometer"></i><span>Insert Details</span></a></li>
		     
		        <li><a href="view.php"><i class="fa fa-bar-chart"></i><span>View Details</span></a></li>
		       <li><a href="ss.php"><i class="fa fa-map-marker"></i><span>Search Details</span></a></li>
 
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>


<!-- mother grid end here-->
</body>
</html>                     