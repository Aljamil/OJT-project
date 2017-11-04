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
    
    if(isset($_POST['VoluntaryOrganization'])) {
        $voluntaryOrganization = $_POST['VoluntaryOrganization'];
    } else {
        $voluntaryOrganization = 'null';
    }
    if(isset($_POST['VoluntaryAddress'])) {
        $voluntaryAddress = $_POST['VoluntaryAddress'];
    } else {
        $voluntaryAddress = 'null';
    }
    if(isset($_POST['VoluntaryInclusiveDate'])) {
        $voluntaryInclusiveDate = $_POST['VoluntaryInclusiveDate'];
    } else {
        $voluntaryInclusiveDate = 'null';
    }
    if(isset($_POST['VoluntaryNoOfHours'])) {
        $voluntaryNoOfHours = $_POST['VoluntaryNoOfHours'];
    } else {
        $voluntaryNoOfHours = 'null';
    }
    if(isset($_POST['VoluntaryPosition'])) {
        $voluntaryPosition = $_POST['VoluntaryPosition'];
    } else {
        $voluntaryPosition = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_organization(`EmployeeID`, `OrganizationName`, `OrganizationAddress`, `OrganizationDate`, `OrganizationHour`, `OrganizationPosition`) VALUES ('$employeeID', '$voluntaryOrganization', '$voluntaryAddress', '$voluntaryInclusiveDate', '$voluntaryNoOfHours', '$voluntaryPosition')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>