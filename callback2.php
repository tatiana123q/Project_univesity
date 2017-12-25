<?php 
$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "INSERT INTO CallBack(Name, PhoneNumber) 
			VALUES ('".$_REQUEST['name']."', '".$_REQUEST['phone']."')";
		$dbConnector->query($query);
		$query = "SELECT max(ID_Request) as id FROM CallBack;";
		$user_id = $dbConnector->query($query)->fetch_object()->id;

		$redis = new Redis();
	    $redis->connect('127.0.0.1', 8888);

	require_once('/formaisOK.php');
?>