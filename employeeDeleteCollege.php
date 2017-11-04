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
    if(isset($_POST['deleteIDCollege'])) {
        $employeeID = $_POST['deleteIDCollege'];
    } else {
        $employeeID = 'null';
    }
    
    $sql = "Select * from employee_education where ID='$employeeID' and RefNo='4'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Delete from employee_education where ID='".$employeeID."' and RefNo='4'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>