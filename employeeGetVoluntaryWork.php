
<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_organization where EmployeeID='$employeeID'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="workID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeVoluntaryOrganization" value="'.$row["OrganizationName"].'">';
            echo '<input type="hidden" name="employeeVoluntaryAddress" value="'.$row["OrganizationAddress"].'">';
            echo '<input type="hidden" name="employeeVoluntaryInclusiveDate" value="'.$row["OrganizationDate"].'">';
            echo '<input type="hidden" name="employeeVoluntaryNoOfHours" value="'.$row["OrganizationHour"].'">';
            echo '<input type="hidden" name="employeeVoluntaryPosition" value="'.$row["OrganizationPosition"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["OrganizationName"].'</td>';
            echo '<td>'.$row["OrganizationAddress"].'</td>';
            echo '<td>'.$row["OrganizationDate"].'</td>';
            echo '<td>'.$row["OrganizationPosition"].'</td>';
            echo '<td>'.$row["OrganizationHour"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteWork(this.id);" data-target="#deleteWorkModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editWork(this.id);" data-target="#editWorkModal" data-toggle="modal">
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