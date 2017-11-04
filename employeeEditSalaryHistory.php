
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['Salary'])) {
        $employeeSalary = $_POST['Salary'];
    } else {
        $employeeSalary = 'null';
    }
    if(isset($_POST['Daily'])) {
        $employeeDaily = $_POST['Daily'];
    } else {
        $employeeDaily = 'null';
    }
    if(isset($_POST['EffectiveDate'])) {
        $salaryDate = $_POST['EffectiveDate'];
    } else {
        $salaryDate = 'null';
    }
    
    $sql = "Select * from employee_salary where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_salary set SalaryRate='$employeeSalary', IsDailyRate='$employeeDaily', EffectiveDate='$salaryDate' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>