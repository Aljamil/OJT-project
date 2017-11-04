
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['TrainingTitle'])) {
        $trainingTitle = $_POST['TrainingTitle'];
    } else {
        $trainingTitle = 'null';
    }
    if(isset($_POST['TrainingInclusiveDate'])) {
        $trainingInclusiveDate = $_POST['TrainingInclusiveDate'];
    } else {
        $trainingInclusiveDate = 'null';
    }
    if(isset($_POST['TrainingNoOfHours'])) {
        $trainingNoOfHours = $_POST['TrainingNoOfHours'];
    } else {
        $trainingNoOfHours = 'null';
    }
    if(isset($_POST['TrainingSponsor'])) {
        $trainingSponsor = $_POST['TrainingSponsor'];
    } else {
        $trainingSponsor = 'null';
    }
    
    $sql = "Select * from employee_training where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_training set TrainingName='$trainingTitle', TrainingDate='$trainingInclusiveDate', TrainingHour='$trainingNoOfHours', TrainingSponsor='$trainingSponsor' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>