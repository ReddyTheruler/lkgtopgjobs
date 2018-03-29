<?php
include("auth.php");  ?>

<!DOCTYPE html>
<html>
<head>
   <title>Find Jobs -LKGtoPG JobPortal</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
         <script src="//code.jquery.com/jquery-1.10.2.js"></script>
         <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
         <link rel="stylesheet" type="text/css" href="css/jobform.css">
         <link rel="icon" type="image/png" href="img/reunion.png"/>
         <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
      <script>
        $(function() {
          $( "#jobloc" ).autocomplete({
            source: 'searcha.php'
          });
        });

        $(function() {
          $( "#skilltest" ).autocomplete({
            source: 'searchb.php'
          });
        });
        </script>
</head>


<body>
   
        <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                     <a class="navbar-brand" href="index.php">Satish Jobs</a> 
                    </div>
              <div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="padding-left: 0px;">
                    <ul class="nav navbar-nav">
                        <li><a href="findjobs.php">Find Jobs</a></li>
                         <li><a href="findresumes.php">Find Resumes</a></li>
                        <li><a href="employee.php">Employers/Post Job</span></a>       
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


        <div class="jobform">
                   <form action="" class="form-inline center_div" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <div class="input-group">
                           
                           <strong>Enter Skills</strong> <input type="text"  id="skilltest" name="skilltest" class="form-control" placeholder="Eg: php,java,mysql"  required>
                            
                      </div>
                      </div>
                      <div class="form-group">    
                                <div class="input-group">
                                 <strong>Enter location</strong> <input type="text"  id="jobloc" name="jobloc" class="form-control" placeholder="Eg: Hyderabad" required> 
                                   
                                </div>
                      </div>
                      <div class="form-group">
                      <div class="col-sm-offset-2">
                        <strong>Find Here!</strong><input type="submit" id="search" name="search" class="btn btn-success">
                      </div>
                    </div>
                  </form>
          </div>
</body>
</html>


<?php
include ("db.php");
if(isset($_POST['search']))
{    
$skilltest = $_POST['skilltest'];
$jobloc = $_POST['jobloc'];
$sql = mysqli_query($conn, "SELECT *FROM empjobs  WHERE skilltest='$skilltest' AND jobloc='$jobloc'");
if($row = mysqli_num_rows($sql)) { 
 $row = mysqli_fetch_assoc($sql) or die(mysqli_error());
   echo '<div class="col-md-8">';
   echo "<a class=\"myclass\" href='displaycname.php?cname=".$row['cname'] . "' target='_blank'><h3>".$row['cname']."</h3></a>"; 
   echo $row['jobtit']; 
   echo "<br>";
   echo $row['jobloc'];
   echo "<br>";
   echo $row['jobqual'];
   echo "<br>";  
   echo "<br>";
}
}
$conn->close();
?>


