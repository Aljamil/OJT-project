
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
    
    $sql = "Select * from employee_employment where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_employment set EmploymentCompany='$experienceCompanyInstitution', EmploymentAddress='$experienceAddress', EmploymentPosition='$experiencePosition', EmploymentDates='$experienceInclusiveDate', EmploymentMonthlySalary='$experienceMonthlySalary', EmploymentSalaryGrade='$experienceSalaryGrade', EmploymentAppointment='$experienceAppointment', EmploymentIsGovernment='$experienceIsGovernment' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>