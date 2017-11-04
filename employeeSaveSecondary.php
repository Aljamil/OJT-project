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
    //required
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }

    //optional fields
    if(isset($_POST['secondarySchoolName'])) {
        $secondarySchoolName = $_POST['secondarySchoolName'];
    } else {
        $secondarySchoolName = 'null';
    }
    if(isset($_POST['secondarySchoolAddress'])) {
        $secondarySchoolAddress = $_POST['secondarySchoolAddress'];
    } else {
        $secondarySchoolAddress = 'null';
    }
    if(isset($_POST['secondaryGraduateYear'])) {
        $secondaryGraduateYear = $_POST['secondaryGraduateYear'];
    } else {
        $secondaryGraduateYear = 'null';
    }
    if(isset($_POST['secondaryHighestLevel'])) {
        $secondaryHighestLevel = $_POST['secondaryHighestLevel'];
    } else {
        $secondaryHighestLevel = 'null';
    }
    if(isset($_POST['secondaryHonor'])) {
        $secondaryHonor = $_POST['secondaryHonor'];
    } else {
        $secondaryHonor = 'null';
    }
    if(isset($_POST['secondaryInclusiveDate'])) {
        $secondaryInclusiveDate = $_POST['secondaryInclusiveDate'];
    } else {
        $secondaryInclusiveDate = 'null';
    }

    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='2'";
        $result = mysqli_query($connection, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $sql = "Update employee_education set SchoolName='$secondarySchoolName', SchoolAddress='$secondarySchoolAddress', SchoolDegree='N/A', GraduateYear='$secondaryGraduateYear', InclusiveDate='$secondaryInclusiveDate', HighestLevel='$secondaryHighestLevel', Honor='$secondaryHonor' where EmployeeID='$employeeID' and RefNo='2'";
        
            $result = mysqli_query($connection, $sql);
        } else {
            $sql = "Insert into employee_education (`EmployeeID`,`SchoolName`, `SchoolAddress`, `SchoolDegree`, `GraduateYear`, `InclusiveDate`, `HighestLevel`, `Honor`, `RefNo`) values ('$employeeID', '$secondarySchoolName', '$secondarySchoolAddress', 'N/A', '$secondaryGraduateYear', '$secondaryInclusiveDate', '$secondaryHighestLevel', '$secondaryHonor', '2')";
        
            $result = mysqli_query($connection, $sql);
        }
        
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>