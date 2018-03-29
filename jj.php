<!DOCTYPE html>
<html>
        <head>



                  <title>Latest Jobs -LKGtoPG</title>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="lkgtopg1">
<meta name="twitter:title" content="LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins">
<meta name="twitter:description" content="LKGtoPG - JobPortal |recruitment |hiring |latest jobs| walkins | Govt Jobs | IT Jobs | Walkins | BPO Jobs | Fresher's walkins | Job alert">
<meta property="og:type" content="website">
<meta property="og:title" content="lkgtopg">
<meta property="og:description" content="ovt  jobs, It jobs, Bank jobs, BPO Jobs, MBA jobs, Fresher's Walkins, Job Alert, Free job alert, Latest Govt jobs, Railway jobs , Government jobs, Govt jobs, .Net jobs, Java jobs, Sap Jobs, Oracle jobs, Testing jobs">
<meta property="og:url" content="https://www.facebook.com/lkgtopg/">
<meta property="fb:app_id" content="lkgtopg">

                  <link rel="stylesheet" type="text/css" href="css/bootstrapmin.css">
                  <link rel="icon" type="image/png" href="img/reunion.png"/>
                   <link rel="stylesheet" type="text/css" href="css/jobform.css">
                  <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91796735-1', 'auto');
  ga('send', 'pageview');

</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7169451509594912",
    enable_page_level_ads: true
  });
</script>


        </head>


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




               

<?php
        include ("db.php");
       
        if(isset($_GET['id'])) {
        $id= $_GET['id'];
        $sql = mysqli_query($conn, "SELECT *FROM jobss WHERE id='$id'");
    
        if($row = mysqli_num_rows($sql)) { 
   
          $row = mysqli_fetch_assoc($sql) or die(mysqli_error());
          
          echo "<form action='' method='POST'>";
          echo '<div class="col-md-8">';
          #echo " <p style='color:red;font-weight:bold;padding-top:30px;'>Company Name: <br/>".$row['cname']."</p>";
          echo " <p style='color:black;font-weight:bold;padding-top:30px;'>Job Date: <br/>".$row['noticedate']."</p>";
          
          echo   "<p style='color:green;font-weight:bold;font-size:18px;'> Job Title: <br/>".$row['jobtitle']."</p>";
          echo "<p style='color:red;font-weight:bold;'> Company Name: <br/>".$row['cname'] ."</p>";
          echo "<p style='color:black;font-weight:bold;'>Education:<br/>".$row['education']."</p>";
          echo "<p style='color:#9900CC;font-weight:bold;'>Experience Level:<br/>".$row['cexp']."</p>";
          echo "<p style='color:#337ab7;font-weight:bold;'>Job Location: <br/>".$row['location']."</p>";
         
          echo "<p style='color:blue;font-weight:bold;'>Skills Required:<br/>".$row['skilltest']."</p>";
          #echo "<p style='color:black;font-weight:bold;'>Jobs responsibilites:<br/>".$row['respon']."</p>";
          echo "<p style='color:#CC9900;font-weight:bold;'>Last Date:<br/>".$row['lastdate']."</p>";
echo "<p style='color:black;font-weight:bold;font-size:16px;'><a href=".$row['apply']." target=\"_blank\"><strong>Apply Here</strong></a></p>";
          echo "<p style='color:black;font-weight:bold;'><a href=".$row['apply']." target=\"_blank\"><strong>Apply Here</strong></a></p>";

echo "<p style='color:black;font-weight:bold;font-size:20px;'><a href=".$row['apply']." target=\"_blank\"><strong>Apply Here</strong></a></p>";
         # echo "<p style='color:black;font-weight:bold;'><a href="index.php" target=\"_blank\"><strong>Apply!!</strong></a></p>";
 echo "</form>";
          echo "<br>";
          
          
}
}
        
          
mysqli_close($conn);
?>

<a id="fb_link" href="#fb_link" onclick="fbs_click('$id');">Share it on FB</a>


<script>
var blink_speed = 500; var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);

</script>

<script>
function fbs_click(id) {


//var abc = document.write(<?php echo $id; ?>);


var url = 'http://www.facebook.com/sharer.php?u=' +
    encodeURIComponent('http://lkgtopg.in/jj.php?id=3941') + id;
window.open(url, 'Share on FaceBook', 'left=20,top=20,width=550,height=400,toolbar=0,menubar=0,scrollbars=0,location=0,resizable=1');
return false;
}
</script>


</body>
</html>
