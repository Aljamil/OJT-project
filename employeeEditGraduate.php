
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['GraduateSchoolName'])) {
        $graduateSchoolName = $_POST['GraduateSchoolName'];
    } else {
        $graduateSchoolName = 'null';
    }
    
    if(isset($_POST['GraduateAddress'])) {
        $graduateAddress = $_POST['GraduateAddress'];
    } else {
        $graduateAddress = 'null';
    }
    
    if(isset($_POST['GraduateDegree'])) {
        $graduateDegree = $_POST['GraduateDegree'];
    } else {
        $graduateDegree = 'null';
    }
    
    if(isset($_POST['GraduateYear'])) {
        $graduateYear = $_POST['GraduateYear'];
    } else {
        $graduateYear = 'null';
    }
    
    if(isset($_POST['GraduateHighestLevel'])) {
        $graduateHighestLevel = $_POST['GraduateHighestLevel'];
    } else {
        $graduateHighestLevel = 'null';
    }
    
    if(isset($_POST['GraduateInclusiveDates'])) {
        $graduateInclusiveDates = $_POST['GraduateInclusiveDates'];
    } else {
        $graduateInclusiveDates = 'null';
    }
    
    if(isset($_POST['GraduateHonor'])) {
        $graduateHonor = $_POST['GraduateHonor'];
    } else {
        $graduateHonor = 'null';
    }
    
    $sql = "Select * from employee_education where ID='$employeeID' and RefNo='5'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_education set SchoolName='$graduateSchoolName', SchoolAddress='$graduateAddress', SchoolDegree='$graduateDegree', GraduateYear='$graduateYear', InclusiveDate='$graduateInclusiveDates', HighestLevel='$graduateHighestLevel', Honor='$graduateHonor' where ID='".$employeeID."' and RefNo='5'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>