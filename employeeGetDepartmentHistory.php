<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    //$sql = "Select * from employee_department where EmployeeID='$employeeID'";
    $sql = "Select employee_department.ID, department.Description, employee_department.DepartmentDate from employee_department left join department on employee_department.DepartmentCode = department.DepartmentCode where employee_department.EmployeeID='$employeeID'";
    
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="departmentID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeDepartmentName" value="'.$row["Description"].'">';
            echo '<input type="hidden" name="employeeEffectiveDateDepartment" value="'.$row["DepartmentDate"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["Description"].'</td>';
            echo '<td>'.$row["DepartmentDate"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteDepartment(this.id);" data-target="#deleteDepartmentModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editDepartment(this.id);" data-target="#editDepartmentModal" data-toggle="modal">
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