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
