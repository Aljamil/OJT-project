
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['ReferenceName'])) {
        $referenceName = $_POST['ReferenceName'];
    } else {
        $referenceName = 'null';
    }
    
    if(isset($_POST['ReferencePosition'])) {
        $referencePosition = $_POST['ReferencePosition'];
    } else {
        $referencePosition = 'null';
    }
    
    if(isset($_POST['ReferenceAddress'])) {
        $referenceAddress = $_POST['ReferenceAddress'];
    } else {
        $referenceAddress = 'null';
    }
    
    if(isset($_POST['ReferenceContactNo'])) {
        $referenceContactNo = $_POST['ReferenceContactNo'];
    } else {
        $referenceContactNo = 'null';
    }
    
    $sql = "Select * from employee_reference where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_reference set ReferenceName='$referenceName', ReferencePosition='$referencePosition', ReferenceAddress='$referenceAddress', ReferenceContactNo='$referenceContactNo' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>