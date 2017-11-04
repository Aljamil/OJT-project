<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['EligibilityCareerService'])) {
        $eligibilityName = $_POST['EligibilityCareerService'];
    } else {
        $eligibilityName = 'null';
    }
    if(isset($_POST['EligibilityRating'])) {
        $eligibilityRating = $_POST['EligibilityRating'];
    } else {
        $eligibilityRating = 'null';
    }
    if(isset($_POST['EligibilityDateExam'])) {
        $eligibilityDate = $_POST['EligibilityDateExam'];
    } else {
        $eligibilityDate = 'null';
    }
    if(isset($_POST['EligibilityPlaceExam'])) {
        $eligibilityPlace = $_POST['EligibilityPlaceExam'];
    } else {
        $eligibilityPlace = 'null';
    }
    if(isset($_POST['EligibilityLicenseNo'])) {
        $eligibilityLicenseNum = $_POST['EligibilityLicenseNo'];
    } else {
        $eligibilityLicenseNum = 'null';
    }
    if(isset($_POST['EligibilityReleaseDate'])) {
        $eligibilityLicenseDate = $_POST['EligibilityReleaseDate'];
    } else {
        $eligibilityLicenseDate = 'null';
    }

    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_eligibility(`EmployeeID`, `EligibilityName`, `EligibilityRating`, `EligibilityDate`, `EligiblityPlace`, `EligibilityLicenseNum`, `EligibilityLicenseDate`) VALUES ('$employeeID', '$eligibilityName', '$eligibilityRating', '$eligibilityDate', '$eligibilityPlace', '$eligibilityLicenseNum', '$eligibilityLicenseDate')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>