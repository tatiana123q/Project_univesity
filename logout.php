<?php
	session_start();
	session_destroy();
	header('Location: http://healthyteeth:8888/');
?>