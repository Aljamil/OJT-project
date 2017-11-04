<?php
	require('../ojt/connectDB.php');
?>

<?php

    if (isset($_GET["HiddenEmployeeID"])) {
        $employeeID = $_GET["HiddenEmployeeID"];
    } else {
        $employeeID = 'null';
    }

    $sql = "Select * from employee_commission where EmployeeID='$employeeID'";
    
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="commissionID" value="'.$row["ID"].'">';
            echo '<input type="hidden" name="employeeCommission" value="'.$row["CommissionPercent"].'">';
            echo '<input type="hidden" name="employeeEffectiveDateCommission" value="'.$row["EffectiveDate"].'">';
            
            echo '<tr>';
            echo '<td>'.$row["CommissionPercent"].'</td>';
            echo '<td>'.$row["EffectiveDate"].'</td>';
            echo '<td><button class="btn btn-danger btn-xs" id="'.$count.'" type="button" onClick="deleteCommission(this.id);" data-target="#deleteCommissionModal" data-toggle="modal">
                Delete
            </button>
            <button class="btn btn-primary btn-xs" id="'.$count.'" type="button" onClick="editCommission(this.id);" data-target="#editCommissionModal" data-toggle="modal">
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