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
    
    if(isset($_POST['CollegeSchoolName'])) {
        $collegeSchoolName = $_POST['CollegeSchoolName'];
    } else {
        $collegeSchoolName = 'null';
    }
    
    if(isset($_POST['CollegeAddress'])) {
        $collegeAddress = $_POST['CollegeAddress'];
    } else {
        $collegeAddress = 'null';
    }
    
    if(isset($_POST['CollegeDegree'])) {
        $collegeDegree = $_POST['CollegeDegree'];
    } else {
        $collegeDegree = 'null';
    }
    
    if(isset($_POST['CollegeYear'])) {
        $collegeYear = $_POST['CollegeYear'];
    } else {
        $collegeYear = 'null';
    }
    
    if(isset($_POST['CollegeHighestLevel'])) {
        $collegeHighestLevel = $_POST['CollegeHighestLevel'];
    } else {
        $collegeHighestLevel = 'null';
    }
    
    if(isset($_POST['CollegeInclusiveDates'])) {
        $collegeInclusiveDates = $_POST['CollegeInclusiveDates'];
    } else {
        $collegeInclusiveDates = 'null';
    }
    
    if(isset($_POST['CollegeHonor'])) {
        $collegeHonor = $_POST['CollegeHonor'];
    } else {
        $collegeHonor = 'null';
    }
    
    $sql = "Select * from employee_education where ID='$employeeID' and RefNo='4'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_education set SchoolName='$collegeSchoolName', SchoolAddress='$collegeAddress', SchoolDegree='$collegeDegree', GraduateYear='$collegeYear', InclusiveDate='$collegeInclusiveDates', HighestLevel='$collegeHighestLevel', Honor='$collegeHonor' where ID='".$employeeID."' and RefNo='4'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>