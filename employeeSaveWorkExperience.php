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
    
    if(isset($_POST['ExperienceInclusiveDate'])) {
        $experienceInclusiveDate = $_POST['ExperienceInclusiveDate'];
    } else {
        $experienceInclusiveDate = 'null';
    }
    if(isset($_POST['ExperienceCompanyInstitution'])) {
        $experienceCompanyInstitution = $_POST['ExperienceCompanyInstitution'];
    } else {
        $experienceCompanyInstitution = 'null';
    }
    if(isset($_POST['ExperienceAddress'])) {
        $experienceAddress = $_POST['ExperienceAddress'];
    } else {
        $experienceAddress = 'null';
    }
    if(isset($_POST['ExperiencePosition'])) {
        $experiencePosition = $_POST['ExperiencePosition'];
    } else {
        $experiencePosition = 'null';
    }
    if(isset($_POST['ExperienceMonthlySalary'])) {
        $experienceMonthlySalary = $_POST['ExperienceMonthlySalary'];
    } else {
        $experienceMonthlySalary = 'null';
    }
    if(isset($_POST['ExperienceSalaryGrade'])) {
        $experienceSalaryGrade = $_POST['ExperienceSalaryGrade'];
    } else {
        $experienceSalaryGrade = 'null';
    }
    if(isset($_POST['ExperienceAppointment'])) {
        $experienceAppointment = $_POST['ExperienceAppointment'];
    } else {
        $experienceAppointment = 'null';
    }
    if(isset($_POST['ExperienceIsGovernment'])) {
        $experienceIsGovernment = $_POST['ExperienceIsGovernment'];
    } else {
        $experienceIsGovernment = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_employment(`EmployeeID`, `EmploymentCompany`, `EmploymentAddress`, `EmploymentPosition`, `EmploymentDates`, `EmploymentMonthlySalary`, `EmploymentSalaryGrade`, `EmploymentAppointment`, `EmploymentIsGovernment`) VALUES ('$employeeID', '$experienceCompanyInstitution', '$experienceAddress', '$experiencePosition', '$experienceInclusiveDate', '$experienceMonthlySalary', '$experienceSalaryGrade', '$experienceAppointment', '$experienceIsGovernment')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>