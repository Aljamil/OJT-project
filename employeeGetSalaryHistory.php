<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_salary where EmployeeID='$employeeID'";
    
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if ($row["IsDailyRate"] == '1') {
                $dailyRate = 'Yes';
            } else {
                $dailyRate = 'No';
            }
        
            echo '<input type="hidden" name="salaryID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeSalaryRate" value="'.$row["SalaryRate"].'">';
            echo '<input type="hidden" name="employeeIsDailyRate" value="'.$row["IsDailyRate"].'">';
            echo '<input type="hidden" name="employeeEffectiveDateSalary" value="'.$row["EffectiveDate"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["SalaryRate"].'</td>';
            echo '<td>'.$dailyRate.'</td>';
            echo '<td>'.$row["EffectiveDate"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteSalary(this.id);" data-target="#deleteSalaryModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editSalary(this.id);" data-target="#editSalaryModal" data-toggle="modal">
                Edit
            </button></td>';
            echo '</tr>';
            
            $count++;
        };
    }
    
?>

<?php
	mysqli_close($connection); // Closing Connection
?>