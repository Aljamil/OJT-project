
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_eligibility where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="eligibilityID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeEligibilityName" value="'.$row["EligibilityName"].'">';
            echo '<input type="hidden" name="employeeEligibilityRating" value="'.$row["EligibilityRating"].'">';
            echo '<input type="hidden" name="employeeEligibilityDate" value="'.$row["EligibilityDate"].'">';
            echo '<input type="hidden" name="employeeEligibilityPlace" value="'.$row["EligiblityPlace"].'">';
            echo '<input type="hidden" name="employeeEligibilityLicenseNum" value="'.$row["EligibilityLicenseNum"].'">';
            echo '<input type="hidden" name="employeeEligibilityLicenseDate" value="'.$row["EligibilityLicenseDate"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["EligibilityName"].'</td>';
            echo '<td>'.$row["EligibilityRating"].'</td>';
            echo '<td>'.$row["EligibilityDate"].'</td>';
            echo '<td>'.$row["EligibilityLicenseDate"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteEligibility(this.id);" data-target="#deleteEligibilityModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editEligibility(this.id);" data-target="#editEligibilityModal" data-toggle="modal">
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