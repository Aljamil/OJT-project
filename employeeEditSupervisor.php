
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['SupervisorName'])) {
        $supervisorName = $_POST['SupervisorName'];
    } else {
        $supervisorName = 'null';
    }
    if(isset($_POST['SupervisorReport'])) {
        $supervisorReport = $_POST['SupervisorReport'];
    } else {
        $supervisorReport = 'null';
    }
    
    $sql = "Select * from employee_reportto where ID='$employeeID' and RefNo='1'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_reportto set Name='$supervisorName', Report='$supervisorReport' where ID='$employeeID' and RefNo='1'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>