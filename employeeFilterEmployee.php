
<?php
	require('../ojt/connectDB.php');
?>

<?php

    $inActiveEmployee = 0;
    if (isset($_POST["InActiveEmployeeCheck"])) {
        if ($_POST["InActiveEmployeeCheck"] == 'IncludeInActvieEmployees') {
            $inActiveEmployee = 1;
        }
    }
    
    if (!empty($_POST["DepartmentName"]) && !empty($_POST["Position"]) && !empty($_POST["Status"])) {
        //department and position and status
        $departmentCode = $_POST["DepartmentName"];
        $positionCode = $_POST["Position"];
        $employmentStatus = $_POST["Status"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and PositionCode='$positionCode' and EmploymentStatus='$employmentStatus'";
        } else {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and PositionCode='$positionCode' and EmploymentStatus='$employmentStatus' and ActiveStatus='1'";
        }
    } else if (!empty($_POST["DepartmentName"]) && !empty($_POST["Position"])) {
        //department and position
        $departmentCode = $_POST["DepartmentName"];
        $positionCode = $_POST["Position"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and PositionCode='$positionCode'";
        } else {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and PositionCode='$positionCode' and ActiveStatus='1'";
        }
    } else if (!empty($_POST["DepartmentName"]) && !empty($_POST["Status"])) {
        //department and status
        $departmentCode = $_POST["DepartmentName"];
        $employmentStatus = $_POST["Status"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and EmploymentStatus='$employmentStatus'";
        } else {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and EmploymentStatus='$employmentStatus' and ActiveStatus='1'";
        }
    } else if (!empty($_POST["Position"]) && !empty($_POST["Status"])) {
        //position and status
        $positionCode = $_POST["Position"];
        $employmentStatus = $_POST["Status"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where PositionCode='$positionCode' and EmploymentStatus='$employmentStatus'";
        } else {
            $sql = "Select * from employee where PositionCode='$positionCode' and EmploymentStatus='$employmentStatus' and ActiveStatus='1'";
        }
    } else if (!empty($_POST["DepartmentName"])) {
        //department
        $departmentCode = $_POST["DepartmentName"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where DepartmentCode='$departmentCode'";
        } else {
            $sql = "Select * from employee where DepartmentCode='$departmentCode' and ActiveStatus='1'";
        }
    } else if (!empty($_POST["Position"])) {
        //position
        $positionCode = $_POST["Position"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where PositionCode='$positionCode'";
        } else {
            $sql = "Select * from employee where PositionCode='$positionCode' and ActiveStatus='1'";
        }
    } else if (!empty($_POST["Status"])) {
        //status
        $employmentStatus = $_POST["Status"];
        if ($inActiveEmployee) {
            $sql = "Select * from employee where EmploymentStatus='$employmentStatus'";
        } else {
            $sql = "Select * from employee where EmploymentStatus='$employmentStatus' and ActiveStatus='1'";
        }
    } else {
        //default
        if ($inActiveEmployee) {
            $sql = "Select * from employee";
        } else {
            $sql = "Select * from employee where ActiveStatus='1'";
        }
    }
    
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while($row = mysqli_fetch_assoc($result)) {
            echo '<input type="hidden" name="eID" value="'.$row["eID"].'">';
            
            echo '<tr role="row">';
                echo '<td class="sorting_1">'.$row["EmployeeID"].'</td>';
                echo '<td>'.$row["LastName"].'</td>';
                echo '<td>'.$row["FirstName"].'</td>';
                echo '<td>'.$row["EmploymentStatus"].'</td>';
                
                $currentID = $row["EmployeeID"];
                
                $sql2 = "Select employee_department.ID, department.Description, employee_department.DepartmentDate from employee_department left join department on employee_department.DepartmentCode = department.DepartmentCode where employee_department.EmployeeID='$currentID'";
                $result2 = mysqli_query($connection,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
                
                echo '<td>'.$row2["Description"].'</td>';
                
                $sql2 = "Select employee_position.ID, position.Description, employee_position.PositionDate from employee_position left join position on employee_position.PositionCode = position.PositionCode where employee_position.EmployeeID='$currentID'";
                $result2 = mysqli_query($connection,$sql2);
                $row2 = mysqli_fetch_assoc($result2);
                
                echo '<td>'.$row2["Description"].'</td>';
                
                echo '<td><button class="btn btn-danger btn-xs" id="'.$row['EmployeeID'].'" type="button" onClick="deleteEmployee(this.id);" data-target="#deleteEmployeeModal" data-toggle="modal">
                    Delete
                </button>
                <button class="btn btn-primary btn-xs" id="'.$row['EmployeeID'].'" type="button" onClick="editEmployee(this.id);" data-target="#editEmployeeModal" data-toggle="modal">
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