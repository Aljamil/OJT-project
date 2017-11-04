<?php 
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	$query = mysqli_query($connection, "select CompanyLogo1 from setting WHERE ID = '1'");
	$row = $query->fetch_assoc();
	
	if($row['CompanyLogo1'] != NULL){
		echo "<img src='data:image/jpeg;base64," . base64_encode( $row['CompanyLogo1'] ) . "' width='200px' height='200px'/>";
	}
	else{
		echo "<img src='../ojt/images/logo_default.png' width='200px' height='200px'/>";
	}


?>