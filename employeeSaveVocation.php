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
    
    if(isset($_POST['VocationSchoolName'])) {
        $vocationSchoolName = $_POST['VocationSchoolName'];
    } else {
        $vocationSchoolName = 'null';
    }
    
    if(isset($_POST['VocationAddress'])) {
        $vocationAddress = $_POST['VocationAddress'];
    } else {
        $vocationAddress = 'null';
    }
    
    if(isset($_POST['VocationDegree'])) {
        $vocationDegree = $_POST['VocationDegree'];
    } else {
        $vocationDegree = 'null';
    }
    
    if(isset($_POST['VocationYear'])) {
        $vocationYear = $_POST['VocationYear'];
    } else {
        $vocationYear = 'null';
    }
    
    if(isset($_POST['VocationHighestLevel'])) {
        $vocationHighestLevel = $_POST['VocationHighestLevel'];
    } else {
        $vocationHighestLevel = 'null';
    }
    
    if(isset($_POST['VocationInclusiveDates'])) {
        $vocationInclusiveDates = $_POST['VocationInclusiveDates'];
    } else {
        $vocationInclusiveDates = 'null';
    }
    
    if(isset($_POST['VocationHonor'])) {
        $vocationHonor = $_POST['VocationHonor'];
    } else {
        $vocationHonor = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_education(`EmployeeID`, `SchoolName`, `SchoolAddress`, `SchoolDegree`, `GraduateYear`, `HighestLevel`, `InclusiveDate`, `Honor`, `RefNo`) VALUES ('$employeeID', '$vocationSchoolName', '$vocationAddress', '$vocationDegree', '$vocationYear', '$vocationHighestLevel', '$vocationInclusiveDates', '$vocationHonor', '3')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>