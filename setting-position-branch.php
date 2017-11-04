<?php
	require('../ojt/connectDB.php');
	$branchName;
	$description;
	
	if(isset($_POST['employee_id'])){
		
		$query = mysqli_query($connection, "select BranchCode from employee where EmployeeID = '". $_POST['employee_id'] . "'");
		if ($query->num_rows == 1) {
			$row = $query->fetch_assoc();
			$queryTmp = mysqli_query($connection, "select BranchName from branch where BranchCode = '". $row['BranchCode'] . "'");
			if ($queryTmp->num_rows == 1) {
				$rowTmp = $queryTmp->fetch_assoc();
				$branchName = $rowTmp['BranchName'];
			}
		
		}
		
		$query = mysqli_query($connection, "select PositionCode from employee where EmployeeID = '". $_POST['employee_id'] . "'");
		if ($query->num_rows == 1) {
			$row = $query->fetch_assoc();
			$queryTmp = mysqli_query($connection, "select Description from position where PositionCode = '". $row['PositionCode'] . "'");
			if ($queryTmp->num_rows == 1) {
				$rowTmp = $queryTmp->fetch_assoc();
				$description = $rowTmp['Description'];
			}
		
		}
		$data = array( "branchName" => $branchName, "description" => $description); 
		echo json_encode($data);
	}
	mysqli_close($connection); // Closing Connection
?>