<?php 
$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "INSERT INTO Users(Name, Surname, PhoneNumber, Email) 
			VALUES ('".$_REQUEST['name']."', '".$_REQUEST['second_name']."', '".$_REQUEST['phone']."', '".$_REQUEST['mail']."')";
		$dbConnector->query($query);
		$query = "SELECT max(ID_User) as id FROM Users;";
		$user_id = $dbConnector->query($query)->fetch_object()->id;

	$query = "INSERT INTO Request_for_visitation(ID_User, ID_Type_of_visitation, ID_Doctor, Date_of_visitation) 
			VALUES ('69', '".$_REQUEST['type_of_visitation']."', '".$_REQUEST['type_of_doctor']."', '".$_REQUEST['date']."')";
		$dbConnector->query($query);
		$query = "SELECT max(ID_Request_for_visitation) as id2 FROM Request_for_visitation;";
		$request_id = $dbConnector->query($query)->fetch_object()->id2;

	require_once('/formaisOK.php');
?>