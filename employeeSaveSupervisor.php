<?php
session_start();
if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
?>

<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['SupervisorName'])) {
        $supervisorName = $_POST['SupervisorName'];
    } else {
        $supervisorName = 'null';
    }
    if(isset($_POST['SupervisorReport'])) {
        $supervisorReport = $_POST['SupervisorReport'];
    } else {
        $supervisorReport = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_reportto (`EmployeeID`, `Name`, `Report`, `RefNo`) VALUES ('$employeeID', '$supervisorName', '$supervisorReport', '1')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>