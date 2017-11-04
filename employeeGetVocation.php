
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='3'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="vocationID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="vocationSchoolName" value="'.$row["SchoolName"].'">';
            echo '<input type="hidden" name="vocationSchoolAddress" value="'.$row["SchoolAddress"].'">';
            echo '<input type="hidden" name="vocationSchoolDegree" value="'.$row["SchoolDegree"].'">';
            echo '<input type="hidden" name="vocationGraduateYear" value="'.$row["GraduateYear"].'">';
            echo '<input type="hidden" name="vocationHighestLevel" value="'.$row["HighestLevel"].'">';
            echo '<input type="hidden" name="vocationInclusiveDate" value="'.$row["InclusiveDate"].'">';
            echo '<input type="hidden" name="vocationHonor" value="'.$row["Honor"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["SchoolName"].'</td>';
            echo '<td>'.$row["SchoolAddress"].'</td>';
            echo '<td>'.$row["SchoolDegree"].'</td>';
            echo '<td>'.$row["GraduateYear"].'</td>';
            echo '<td>'.$row["HighestLevel"].'</td>';
            echo '<td>'.$row["InclusiveDate"].'</td>';
            echo '<td>'.$row["Honor"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteVocation(this.id);" data-target="#deleteVocationalModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editVocation(this.id);" data-target="#editVocationalModal" data-toggle="modal">
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