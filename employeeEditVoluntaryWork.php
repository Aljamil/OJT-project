
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
    
    $sql = "Select * from employee_organization where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_organization set OrganizationName='$voluntaryOrganization', OrganizationAddress='$voluntaryAddress', OrganizationDate='$voluntaryInclusiveDate', OrganizationHour='$voluntaryNoOfHours', OrganizationPosition='$voluntaryPosition' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>