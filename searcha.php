<?php
$dbHost = 'localhost';
$dbUsername = 'jangared_indeed';
$dbPassword = 'reddycse502';
$dbName = 'jangared_indeed';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM empjobs WHERE jobloc LIKE '%".$searchTerm."%' ");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['jobloc'];
}
//return json data
echo json_encode($data);
?>