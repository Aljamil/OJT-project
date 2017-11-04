
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['SubordinateName'])) {
        $subordinateName = $_POST['SubordinateName'];
    } else {
        $subordinateName = 'null';
    }
    if(isset($_POST['SubordinateReport'])) {
        $subordinateReport = $_POST['SubordinateReport'];
    } else {
        $subordinateReport = 'null';
    }
    
    $sql = "Select * from employee_reportto where ID='$employeeID' and RefNo='2'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_reportto set Name='$subordinateName', Report='$subordinateReport' where ID='$employeeID' and RefNo='2'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>