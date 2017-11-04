<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['ChildName'])) {
        $childName = $_POST['ChildName'];
    } else {
        $childName = 'null';
    }
    
    if(isset($_POST['ChildBirth'])) {
        $childBirth = $_POST['ChildBirth'];
    } else {
        $childBirth = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Insert into employee_dependent(`EmployeeID`, `ChildName`, `ChildBirth`) VALUES ('$employeeID', '$childName', '$childBirth')";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>