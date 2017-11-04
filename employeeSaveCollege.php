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
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_education(`EmployeeID`, `SchoolName`, `SchoolAddress`, `SchoolDegree`, `GraduateYear`, `HighestLevel`, `InclusiveDate`, `Honor`, `RefNo`) VALUES ('$employeeID', '$collegeSchoolName', '$collegeAddress', '$collegeDegree', '$collegeYear', '$collegeHighestLevel', '$collegeInclusiveDates', '$collegeHonor', '4')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>