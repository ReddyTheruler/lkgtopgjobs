<?php
	define (DB_USER, "root");
	define (DB_PASSWORD, "");
	define (DB_DATABASE, "indeed");
	define (DB_HOST, "localhost");
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

			$sql = "SELECT jobseeker.skilltest FROM jobseeker 
					WHERE skilltest LIKE '%".$_GET['q']."%'
					LIMIT 10"; 
			$result = $mysqli->query($sql);

			$json = [];
		while($row = $result->fetch_assoc()){
		     $json[] = ['text'=>$row['skilltest']];
		}

	echo json_encode($json);
?>