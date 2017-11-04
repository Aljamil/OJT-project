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
    
    if(isset($_POST['ChildName'])) {
        $childName = $_POST['ChildName'];
    } else {
        $childName = 'null';
    }
    
    if(isset($_POST['ChildBirth'])) {
        $childBirth = $_POST['ChildBirth'];
    } else {
        $childBirth = 'null';
    }
    
    $sql = "Select * from employee_dependent where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_dependent set ChildName='".$childName."', ChildBirth='".$childBirth."' where ID='".$employeeID."'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>