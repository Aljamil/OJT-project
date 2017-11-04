
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_reportto where EmployeeID='$employeeID' and RefNo='2'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="subordinateID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeSubordinateName" value="'.$row["Name"].'">';
            echo '<input type="hidden" name="employeeSubordinateReport" value="'.$row["Report"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["Name"].'</td>';
            echo '<td>'.$row["Report"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteSubordinate(this.id);" data-target="#deleteSubordinateModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editSubordinate(this.id);" data-target="#editSubordinateModal" data-toggle="modal">
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