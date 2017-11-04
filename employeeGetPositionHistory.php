
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
    $sql = "Select employee_position.ID, position.Description, employee_position.PositionDate from employee_position left join position on employee_position.PositionCode = position.PositionCode where employee_position.EmployeeID='$employeeID'";
    
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="positionID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeePosition" value="'.$row["Description"].'">';
            echo '<input type="hidden" name="employeeEffectiveDatePosition" value="'.$row["PositionDate"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["Description"].'</td>';
            echo '<td>'.$row["PositionDate"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deletePosition(this.id);" data-target="#deletePositionModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editPosition(this.id);" data-target="#editPositionModal" data-toggle="modal">
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