<?php 
$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "INSERT INTO Reviews(Name, Review, ID_Doctor) 
			VALUES ('".$_REQUEST['name']."', '".$_REQUEST['comment']."', '".$_REQUEST['type_of_doctor']."')";
		$dbConnector->query($query);
		$query = "SELECT max(ID_Revies) as id FROM Reviews;";
		

	require_once('/formaisOK.php');
?>