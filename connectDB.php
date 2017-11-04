<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "3gxhrms";
	
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect($servername, $username, $password);
	
	// Selecting Database
	$db = mysqli_select_db($connection, $dbname);
?>