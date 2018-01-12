<?php 
$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "INSERT INTO Medical_Card(ID_User, Date_of_visitation, State_of_Teeth, Recommendations) 
		VALUES ('".$_REQUEST['id_user']."', '".$_REQUEST['date']."', '".$_REQUEST['State_of_Teeth']."','".$_REQUEST['Recommendations']."')";
		$dbConnector->query($query);
		$query = "SELECT max(ID_Card) as id FROM Medical_Card;";
		$user_id = $dbConnector->query($query)->fetch_object()->id;

	require_once('/admin_formaisOK.php');
?>
<!--проблема с внешним ключом!-->