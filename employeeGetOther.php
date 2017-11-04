
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_other where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="otherID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeOtherSkillHobby" value="'.$row["OtherSkill"].'">';
            echo '<input type="hidden" name="employeeOtherRecognition" value="'.$row["OtherRecognition"].'">';
            echo '<input type="hidden" name="employeeOtherOrganization" value="'.$row["OtherOrganization"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["OtherSkill"].'</td>';
            echo '<td>'.$row["OtherRecognition"].'</td>';
            echo '<td>'.$row["OtherOrganization"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteOther(this.id);" data-target="#deleteOtherModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editOther(this.id);" data-target="#editOtherModal" data-toggle="modal">
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