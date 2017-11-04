<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	$reader = $_POST['reader'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$days = cal_days_in_month(CAL_GREGORIAN, $month, $year); 
	
	echo "<input type='hidden' value='$reader' name='reader'>";
	echo "<input type='hidden' value='$month' name='month'>";
	echo "<input type='hidden' value='$year' name='year'>";
	echo "<input type='hidden' value='$days' name='days'>";
	
	$query = mysqli_query($connection, "SELECT * FROM offset_time WHERE SystemDate = '$year-$month-01'");
	if ($query->num_rows > 0) {	
		// if date exist, just update
		
		for($i = 1; $i <= $days; $i++){
			if($i < 10){
				$i = "0" . $i;
			}
			$queryTmp = mysqli_query($connection, "SELECT * FROM offset_time WHERE SystemDate = '$year-$month-$i'");
			$row = $queryTmp->fetch_assoc();
			$open = $row['StartTime'];
			$close = $row['EndTime'];
			
			echo "<tr><td><input class='form-control' type='date' value='$year-$month-$i' name='date-$i'></td>";
			echo "<td><input class='form-control' placeholder='e.g. 08:10' name='open-$i' value='$open'></td>";
			echo "<td><input class='form-control' placeholder='e.g. 08:10' name='close-$i' value='$close'></td></tr>";
			
		}
	}else{
		// otherwise
		for($i = 1; $i <= $days; $i++){
			if($i < 10){
				$i = "0" . $i;
			}
			echo "<tr><td><input class='form-control' type='date' value='$year-$month-$i' name='date-$i'></td>";
			echo "<td><input class='form-control' placeholder='e.g. 08:10' name='open-$i'></td>";
			echo "<td><input class='form-control' placeholder='e.g. 08:10' name='close-$i'></td></tr>";
		}
	}
?>