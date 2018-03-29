
<?php

require('db.php');
include("auth.php");
?>


<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sahara';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM details WHERE accname LIKE '%".$searchTerm."%' ");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['accname'];
}
//return json data
echo json_encode($data);
?>