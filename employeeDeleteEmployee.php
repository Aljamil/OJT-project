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
    if(isset($_POST['deleteID'])) {
        $employeeID = $_POST['deleteID'];
    } else {
        $employeeID = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Delete from employee where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_commission where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_department where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_dependent where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_education where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_eligibility where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_employment where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_organization where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_other where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_position where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_reference where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_reportto where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_salary where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        
        $sql = "Delete from employee_training where EmployeeID='$employeeID'";
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>