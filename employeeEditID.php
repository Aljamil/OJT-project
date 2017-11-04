
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['oldIDNo'])) {
        $oldIDNo = $_POST['oldIDNo'];
    } else {
        $oldIDNo = 'null';
    }
    
    if(isset($_POST['newIDNo'])) {
        $newIDNo = $_POST['newIDNo'];
    } else {
        $newIDNo = $oldIDNo;
    }
    
    $sql = "Select * from employee where EmployeeID='$newIDNo'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Empty";
    } else {
        $sql = "Select * from employee where EmployeeID='$oldIDNo'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $eID = $row["eID"];
        
        $sql = "Update employee set EmployeeID='$newIDNo' where eID='$eID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    }
?>

<?php
    mysqli_close($connection);
?>