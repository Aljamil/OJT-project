<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_training where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="trainingID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeTrainingTitle" value="'.$row["TrainingName"].'">';
            echo '<input type="hidden" name="employeeTrainingInclusiveDate" value="'.$row["TrainingDate"].'">';
            echo '<input type="hidden" name="employeeTrainingNoOfHours" value="'.$row["TrainingHour"].'">';
            echo '<input type="hidden" name="employeeTrainingSponsor" value="'.$row["TrainingSponsor"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["TrainingName"].'</td>';
            echo '<td>'.$row["TrainingDate"].'</td>';
            echo '<td>'.$row["TrainingHour"].'</td>';
            echo '<td>'.$row["TrainingSponsor"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteTraining(this.id);" data-target="#deleteTrainingModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editTraining(this.id);" data-target="#editTrainingModal" data-toggle="modal">
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