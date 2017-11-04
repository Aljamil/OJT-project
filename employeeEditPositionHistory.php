
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['Position'])) {
        $positionName = $_POST['Position'];
    } else {
        $positionName = 'null';
    }
    if(isset($_POST['EffectiveDate'])) {
        $positionDate = $_POST['EffectiveDate'];
    } else {
        $positionDate = 'null';
    }
    
    $sql = "Select * from employee_position where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Select * from position where Description='$positionName'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $positionCode = $row["PositionCode"];
        
        $sql = "Update employee_position set PositionCode='$positionCode', PositionDate='$positionDate' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);

        $sql = "Update employee set PositionCode='$positionCode' where EmployeeID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>