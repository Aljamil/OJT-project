<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['Commission'])) {
        $employeeCommission = $_POST['Commission'];
    } else {
        $employeeCommission = 'null';
    }
    if(isset($_POST['EffectiveDate'])) {
        $commissionDate = $_POST['EffectiveDate'];
    } else {
        $commissionDate = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_commission (`EmployeeID`, `CommissionPercent`, `EffectiveDate`) VALUES ('$employeeID', '$employeeCommission', '$commissionDate')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>