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
    
    if(isset($_POST['Commission'])) {
        $employeeCommission = $_POST['Commission'];
    } else {
        $employeeCommission = 'null';
    }
    if(isset($_POST['EffectiveDate'])) {
        $commissionDate = $_POST['EffectiveDate'];
    } else {
        $commissionDate = 'null';
    }
    
    $sql = "Select * from employee_commission where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_commission set CommissionPercent='$employeeCommission', EffectiveDate='$commissionDate' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>