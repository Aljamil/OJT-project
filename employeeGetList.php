
<?php
	require('../ojt/connectDB.php');
?>

<?php

    $sql = "Select * from employee";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="eID" value="'.$row["eID"].'">';
            
            echo '<tr role="row">';
                echo '<td class="sorting_1">'.$row["EmployeeID"].'</td>';
                echo '<td>'.$row["LastName"].'</td>';
                echo '<td>'.$row["FirstName"].'</td>';
                echo '<td>'.$row["EmploymentStatus"].'</td>';
                
                $currentID = $row["EmployeeID"];
                
                $sql2 = "Select employee_department.ID, department.Description, employee_department.DepartmentDate from employee_department left join department on employee_department.DepartmentCode = department.DepartmentCode where employee_department.EmployeeID='$currentID'";
                $result2 = mysqli_query($connection,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
                
                echo '<td>'.$row2["Description"].'</td>';
                
                $sql2 = "Select employee_position.ID, position.Description, employee_position.PositionDate from employee_position left join position on employee_position.PositionCode = position.PositionCode where employee_position.EmployeeID='$currentID'";
                $result2 = mysqli_query($connection,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
                
                echo '<td>'.$row2["Description"].'</td>';
                
                if ($row['ActiveStatus'] == '1') {
                    echo '<td>'.'Yes'.'</td>';
                } else {
                    echo '<td>'.'No'.'</td>';
                }
                
                echo '<td><button class="btn btn-danger btn-xs" id="'.$row['EmployeeID'].'" type="button" onClick="deleteEmployee(this.id);" data-target="#deleteEmployeeModal" data-toggle="modal">
                    Delete
                </button>
                <button class="btn btn-primary btn-xs" id="'.$row['EmployeeID'].'" type="button" onClick="editEmployee(this.id);" data-target="#editEmployeeModal" data-toggle="modal">
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