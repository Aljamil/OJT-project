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
    if(isset($_POST['elementarySchoolName'])) {
        $elementarySchoolName = $_POST['elementarySchoolName'];
    } else {
        $elementarySchoolName = 'null';
    }
    if(isset($_POST['elementarySchoolAddress'])) {
        $elementarySchoolAddress = $_POST['elementarySchoolAddress'];
    } else {
        $elementarySchoolAddress = 'null';
    }
    if(isset($_POST['elementaryGraduateYear'])) {
        $elementaryGraduateYear = $_POST['elementaryGraduateYear'];
    } else {
        $elementaryGraduateYear = 'null';
    }
    if(isset($_POST['elementaryHighestLevel'])) {
        $elementaryHighestLevel = $_POST['elementaryHighestLevel'];
    } else {
        $elementaryHighestLevel = 'null';
    }
    if(isset($_POST['elementaryHonor'])) {
        $elementaryHonor = $_POST['elementaryHonor'];
    } else {
        $elementaryHonor = 'null';
    }
    if(isset($_POST['elementaryInclusiveDate'])) {
        $elementaryInclusiveDate = $_POST['elementaryInclusiveDate'];
    } else {
        $elementaryInclusiveDate = 'null';
    }

    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='1'";
        $result = mysqli_query($connection, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $sql = "Update employee_education set SchoolName='$elementarySchoolName', SchoolAddress='$elementarySchoolAddress', SchoolDegree='N/A', GraduateYear='$elementaryGraduateYear', InclusiveDate='$elementaryInclusiveDate', HighestLevel='$elementaryHighestLevel', Honor='$elementaryHonor' where EmployeeID='$employeeID' and RefNo='1'";
        
            $result = mysqli_query($connection, $sql);
        } else {
            $sql = "Insert into employee_education (`EmployeeID`,`SchoolName`, `SchoolAddress`, `SchoolDegree`, `GraduateYear`, `InclusiveDate`, `HighestLevel`, `Honor`, `RefNo`) values ('$employeeID', '$elementarySchoolName', '$elementarySchoolAddress', 'N/A', '$elementaryGraduateYear', '$elementaryInclusiveDate', '$elementaryHighestLevel', '$elementaryHonor', '1')";
        
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