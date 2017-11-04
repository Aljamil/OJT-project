
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_dependent where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="ID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeChildName" value="'.$row["ChildName"].'">';
            echo '<input type="hidden" name="employeeChildBirth" value="'.$row["ChildBirth"].'">';
            
            echo '<tr>';
            echo '<td>';
            echo $row["ChildName"];
            echo '</td>';
            echo '<td>'.$row["ChildBirth"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteChild(this.id);" data-target="#deleteChildModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editChild(this.id);" data-target="#editChildModal" data-toggle="modal">
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