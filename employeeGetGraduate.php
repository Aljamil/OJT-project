
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='5'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="graduateID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="graduateSchoolName" value="'.$row["SchoolName"].'">';
            echo '<input type="hidden" name="graduateSchoolAddress" value="'.$row["SchoolAddress"].'">';
            echo '<input type="hidden" name="graduateSchoolDegree" value="'.$row["SchoolDegree"].'">';
            echo '<input type="hidden" name="graduateGraduateYear" value="'.$row["GraduateYear"].'">';
            echo '<input type="hidden" name="graduateHighestLevel" value="'.$row["HighestLevel"].'">';
            echo '<input type="hidden" name="graduateInclusiveDate" value="'.$row["InclusiveDate"].'">';
            echo '<input type="hidden" name="graduateHonor" value="'.$row["Honor"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["SchoolName"].'</td>';
            echo '<td>'.$row["SchoolAddress"].'</td>';
            echo '<td>'.$row["SchoolDegree"].'</td>';
            echo '<td>'.$row["GraduateYear"].'</td>';
            echo '<td>'.$row["HighestLevel"].'</td>';
            echo '<td>'.$row["InclusiveDate"].'</td>';
            echo '<td>'.$row["Honor"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteGraduate(this.id);" data-target="#deleteGraduateModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editGraduate(this.id);" data-target="#editGraduateModal" data-toggle="modal">
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