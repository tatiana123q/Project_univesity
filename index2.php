<?php 
$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "INSERT INTO Users(Name, Surname, PhoneNumber, Email) 
			VALUES ('".$_REQUEST['name']."', '".$_REQUEST['second_name']."', '".$_REQUEST['phone']."', '".$_REQUEST['mail']."')";
		$dbConnector->query($query);
		$query = "SELECT max(ID_User) as id FROM Users;";
		$user_id = $dbConnector->query($query)->fetch_object()->id;

		$redis = new Redis();
	    $redis->connect('127.0.0.1', 8888);

	require_once('/formaisOK.php');
?>