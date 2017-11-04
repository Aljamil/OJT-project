
<?php
    require('../ojt/connectDB.php');
?>

<?php
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }
    
    if(isset($_POST['OtherSkillHobby'])) {
        $otherSkillHobby = $_POST['OtherSkillHobby'];
    } else {
        $otherSkillHobby = 'null';
    }
    if(isset($_POST['OtherRecognition'])) {
        $otherRecognition = $_POST['OtherRecognition'];
    } else {
        $otherRecognition = 'null';
    }
    if(isset($_POST['OtherOrganization'])) {
        $otherOrganization = $_POST['OtherOrganization'];
    } else {
        $otherOrganization = 'null';
    }
    
    $sql = "Select * from employee_other where ID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee_other set OtherSkill='$otherSkillHobby', OtherRecognition='$otherRecognition', OtherOrganization='$otherOrganization' where ID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>