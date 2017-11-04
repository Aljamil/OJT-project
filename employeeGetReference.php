
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_reference where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="referenceID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeReferenceName" value="'.$row["ReferenceName"].'">';
            echo '<input type="hidden" name="employeeReferencePosition" value="'.$row["ReferencePosition"].'">';
            echo '<input type="hidden" name="employeeReferenceAddress" value="'.$row["ReferenceAddress"].'">';
            echo '<input type="hidden" name="employeeReferenceContactNo" value="'.$row["ReferenceContactNo"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["ReferenceName"].'</td>';
            echo '<td>'.$row["ReferencePosition"].'</td>';
            echo '<td>'.$row["ReferenceAddress"].'</td>';
            echo '<td>'.$row["ReferenceContactNo"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteReference(this.id);" data-target="#deleteReferenceModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editReference(this.id);" data-target="#editReferenceModal" data-toggle="modal">
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