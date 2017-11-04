<?php
    require('../ojt/connectDB.php');
?>

<?php
    //required
    if(isset($_POST['HiddenEmployeeID'])) {
        $employeeID = $_POST['HiddenEmployeeID'];
    } else {
        $employeeID = 'null';
    }

    //optional fields
    if(isset($_POST['FatherSurname'])) {
        $fatherSurname = $_POST['FatherSurname'];
    } else {
        $fatherSurname = 'null';
    }
    if(isset($_POST['FatherFirstname'])) {
        $fatherFirstname = $_POST['FatherFirstname'];
    } else {
        $fatherFirstname = 'null';
    }
    if(isset($_POST['FatherMiddlename'])) {
        $fatherMiddlename = $_POST['FatherMiddlename'];
    } else {
        $fatherMiddlename = 'null';
    }
    if(isset($_POST['MotherSurname'])) {
        $motherSurname = $_POST['MotherSurname'];
    } else {
        $motherSurname = 'null';
    }
    if(isset($_POST['MotherFirstname'])) {
        $motherFirstname = $_POST['MotherFirstname'];
    } else {
        $motherFirstname = 'null';
    }
    if(isset($_POST['MotherMiddlename'])) {
        $motherMiddlename = $_POST['MotherMiddlename'];
    } else {
        $motherMiddlename = 'null';
    }
    if(isset($_POST['SpouseSurname'])) {
        $spouseSurname = $_POST['SpouseSurname'];
    } else {
        $spouseSurname = 'null';
    }
    if(isset($_POST['SpouseEmployerName'])) {
        $spouseEmployerName = $_POST['SpouseEmployerName'];
    } else {
        $spouseEmployerName = 'null';
    }
    if(isset($_POST['SpouseFirstname'])) {
        $spouseFirstname = $_POST['SpouseFirstname'];
    } else {
        $spouseFirstname = 'null';
    }
    if(isset($_POST['SpouseAddress'])) {
        $spouseAddress = $_POST['SpouseAddress'];
    } else {
        $spouseAddress = 'null';
    }
    if(isset($_POST['SpouseMiddlename'])) {
        $spouseMiddlename = $_POST['SpouseMiddlename'];
    } else {
        $spouseMiddlename = 'null';
    }
    if(isset($_POST['SpouseTelephoneNo'])) {
        $spouseTelephoneNo = $_POST['SpouseTelephoneNo'];
    } else {
        $spouseTelephoneNo = 'null';
    }
    if(isset($_POST['SpouseOccupation'])) {
        $spouseOccupation = $_POST['SpouseOccupation'];
    } else {
        $spouseOccupation = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee set FatherLastname='$fatherSurname', FatherFirstname='$fatherFirstname', FatherMiddlename='$fatherMiddlename', MotherLastname='$motherSurname', MotherFirstname='$motherFirstname', MotherMiddlename='$motherMiddlename', SpouseLastname='$spouseSurname', SpouseEmployer='$spouseEmployerName', SpouseFirstname='$spouseFirstname', SpouseAddress='$spouseAddress', SpouseMiddlename='$spouseMiddlename', SpouseTelephone='$spouseTelephoneNo', SpouseWork='$spouseOccupation' where EmployeeID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    mysqli_close($connection);
?>