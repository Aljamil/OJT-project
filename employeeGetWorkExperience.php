
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_employment where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if ($row["EmploymentIsGovernment"] == "0") {
                $govt = 'False';
            } else if ($row["EmploymentIsGovernment"] == "1") {
                $govt = 'True';
            }
        
            echo '<input type="hidden" name="experienceID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeExperienceInclusiveDate" value="'.$row["EmploymentDates"].'">';
            echo '<input type="hidden" name="employeeExperienceCompanyInstitution" value="'.$row["EmploymentCompany"].'">';
            echo '<input type="hidden" name="employeeExperienceAddress" value="'.$row["EmploymentAddress"].'">';
            echo '<input type="hidden" name="employeeExperiencePosition" value="'.$row["EmploymentPosition"].'">';
            echo '<input type="hidden" name="employeeExperienceMonthlySalary" value="'.$row["EmploymentMonthlySalary"].'">';
            echo '<input type="hidden" name="employeeExperienceSalaryGrade" value="'.$row["EmploymentSalaryGrade"].'">';
            echo '<input type="hidden" name="employeeExperienceAppointment" value="'.$row["EmploymentAppointment"].'">';
            echo '<input type="hidden" name="employeeExperienceIsGovernment" value="'.$row["EmploymentIsGovernment"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["EmploymentDates"].'</td>';
            echo '<td>'.$row["EmploymentPosition"].'</td>';
            echo '<td>'.$row["EmploymentCompany"].'</td>';
            echo '<td>'.$govt.'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteExperience(this.id);" data-target="#deleteExperienceModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editExperience(this.id);" data-target="#editExperienceModal" data-toggle="modal">
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