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
    
    if(isset($_POST['SubordinateName'])) {
        $subordinateName = $_POST['SubordinateName'];
    } else {
        $subordinateName = 'null';
    }
    if(isset($_POST['SubordinateReport'])) {
        $subordinateReport = $_POST['SubordinateReport'];
    } else {
        $subordinateReport = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_reportto (`EmployeeID`, `Name`, `Report`, `RefNo`) VALUES ('$employeeID', '$subordinateName', '$subordinateReport', '2')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>