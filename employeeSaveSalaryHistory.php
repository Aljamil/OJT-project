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
    
    if(isset($_POST['Salary'])) {
        $employeeSalary = $_POST['Salary'];
    } else {
        $employeeSalary = 'null';
    }
    if(isset($_POST['Daily'])) {
        $employeeDaily = $_POST['Daily'];
    } else {
        $employeeDaily = 'null';
    }
    if(isset($_POST['EffectiveDate'])) {
        $salaryDate = $_POST['EffectiveDate'];
    } else {
        $salaryDate = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_salary (`EmployeeID`, `SalaryRate`, `IsDailyRate`, `EffectiveDate`) VALUES ('$employeeID', '$employeeSalary', '$employeeDaily', '$salaryDate')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>