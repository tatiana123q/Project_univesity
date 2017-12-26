<?php 
	$dbConnector = new mysqli('localhost', 'root', '', 'HealthyTeeth');
	$query = "SELECT ID_User as `id`, Name as `name` FROM Users WHERE Email = '".$_REQUEST['email']."' AND PhoneNumber = ".$_REQUEST['phone'];
	$ID_User = $dbConnector->query($query)->fetch_object()->id;
	if($ID_User==54) {
		session_start();
		$_SESSION['ID_User'] = $ID_User;
		$_SESSION['email'] = $_REQUEST['email'];
		$_SESSION['phone'] = $_REQUEST['phone'];
		$_SESSION['name'] = $dbConnector->query($query)->fetch_object()->name;
		require_once('/page_for_admin.php');
	}
	elseif($ID_User && !$_SESSION['ID_User']) {
		session_start();
		$_SESSION['ID_User'] = $ID_User;
		$_SESSION['email'] = $_REQUEST['email'];
		$_SESSION['phone'] = $_REQUEST['phone'];
		$_SESSION['name'] = $dbConnector->query($query)->fetch_object()->name;
		require_once('/personal_area.php');
	} 
	elseif(!$ID_User) {
		require_once('/loginIsNotOK.php');
	}
?>