<?php
    require('../ojt/connectDB.php');
?>

<?php
    //required fields
    if(isset($_POST['EmployeeID'])) {
        $employeeID = $_POST['EmployeeID'];
    } else {
        $employeeID = 'null';
    }
    if(isset($_POST['LastName'])) {
        $lastName = $_POST['LastName'];
    } else {
        $lastName = 'null';
    }
    if(isset($_POST['FirstName'])) {
        $firstName = $_POST['FirstName'];
    } else {
        $firstName = 'null';
    }
    if(isset($_POST['MiddleName'])) {
        $middleName = $_POST['MiddleName'];
    } else {
        $middleName = 'null';
    }
    if(isset($_POST['CellphoneNo'])) {
        $cellphoneNo = $_POST['CellphoneNo'];
    } else {
        $cellphoneNo = 'null';
    }
    if(isset($_POST['Address1'])) {
        $address1 = $_POST['Address1'];
    } else {
        $address1 = 'null';
    }
    if(isset($_POST['EmergencyName'])) {
        $emergencyName = $_POST['EmergencyName'];
    } else {
        $emergencyName = 'null';
    }
    if(isset($_POST['EmergencyAddress'])) {
        $emergencyAddress = $_POST['EmergencyAddress'];
    } else {
        $emergencyAddress = 'null';
    }
    if(isset($_POST['EmergencyContactNo'])) {
        $emergencyContactNo = $_POST['EmergencyContactNo'];
    } else {
        $emergencyContactNo = 'null';
    }
    if(isset($_POST['EmergencyRelationship'])) {
        $emergencyRelationship = $_POST['EmergencyRelationship'];
    } else {
        $emergencyRelationship = 'null';
    }
    
    //optional fields
    if(isset($_POST['ExtName'])) {
        $extName = $_POST['ExtName'];
    } else {
        $extName = 'null';
    }
    if(isset($_POST['NoOfDependent'])) {
        $noOfDependent = $_POST['NoOfDependent'];
    } else {
        $noOfDependent = 'null';
    }
    if(isset($_POST['BirthDate'])) {
        $birthDate = $_POST['BirthDate'];
    } else {
        $birthDate = '0000-00-00';
    }
    if(isset($_POST['BirthPlace'])) {
        $birthPlace = $_POST['BirthPlace'];
    } else {
        $birthPlace = 'null';
    }
    if(isset($_POST['Gender'])) {
        $gender = $_POST['Gender'];
    } else {
        $gender = 'null';
    }
    if(isset($_POST['Height'])) {
        $height = $_POST['Height'];
    } else {
        $height = 0.00;
    }
    if(isset($_POST['Weight'])) {
        $weight = $_POST['Weight'];
    } else {
        $weight = 0.00;
    }
    if(isset($_POST['MaritalStatus'])) {
        $maritalStatus = $_POST['MaritalStatus'];
    } else {
        $maritalStatus = 'null';
    }
    if(isset($_POST['EmailAddress'])) {
        $emailAddress = $_POST['EmailAddress'];
    } else {
        $emailAddress = 'null';
    }
    if(isset($_POST['Citizenship'])) {
        $citizenship = $_POST['Citizenship'];
    } else {
        $citizenship = 'null';
    }
    if(isset($_POST['BloodType'])) {
        $bloodType = $_POST['BloodType'];
    } else {
        $bloodType = 'null';
    }
    if(isset($_POST['ZipCode1'])) {
        $zipCode1 = $_POST['ZipCode1'];
    } else {
        $zipCode1 = 'null';
    }
    if(isset($_POST['ContactNo1'])) {
        $contactNo1 = $_POST['ContactNo1'];
    } else {
        $contactNo1 = 'null';
    }
    if(isset($_POST['Address2'])) {
        $address2 = $_POST['Address2'];
    } else {
        $address2 = 'null';
    }
    if(isset($_POST['ZipCode2'])) {
        $zipCode2 = $_POST['ZipCode2'];
    } else {
        $zipCode2 = 'null';
    }
    if(isset($_POST['ContactNo2'])) {
        $contactNo2 = $_POST['ContactNo2'];
    } else {
        $contactNo2 = 'null';
    }
    if(isset($_POST['SSSNo'])) {
        $sSSNo = $_POST['SSSNo'];
    } else {
        $sSSNo = 'null';
    }
    if(isset($_POST['PhilhealthNo'])) {
        $philhealthNo = $_POST['PhilhealthNo'];
    } else {
        $philhealthNo = 'null';
    }
    if(isset($_POST['GSISNo'])) {
        $gSISNo = $_POST['GSISNo'];
    } else {
        $gSISNo = 'null';
    }
    if(isset($_POST['PagibigNo'])) {
        $pagibigNo = $_POST['PagibigNo'];
    } else {
        $pagibigNo = 'null';
    }
    if(isset($_POST['TINNo'])) {
        $tINNo = $_POST['TINNo'];
    } else {
        $tINNo = 'null';
    }
    if(isset($_POST['AgencyNo'])) {
        $agencyNo = $_POST['AgencyNo'];
    } else {
        $agencyNo = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee set LastName='$lastName', FirstName='$firstName', MiddleName='$middleName', CellphoneNo='$cellphoneNo', Address1='$address1', EmergencyName='$emergencyName', EmergencyAddress='$emergencyAddress', EmergencyContactNo='$emergencyContactNo', EmergencyRelationship='$emergencyRelationship', ExtName='$extName', NoOfDependent='$noOfDependent', BirthDate='$birthDate', BirthPlace='$birthPlace', Gender='$gender', Height='$height', Weight='$weight', MaritalStatus='$maritalStatus', EmailAddress='$emailAddress', Citizenship='$citizenship', BloodType='$bloodType', ZipCode1='$zipCode1', ContactNo1='$contactNo1', Address2='$address2', ZipCode2='$zipCode2', ContactNo2='$contactNo2', SSSNo='$sSSNo', PhilhealthNo='$philhealthNo', GSISNo='$gSISNo', PagibigNo='$pagibigNo', TINNo='$tINNo', AgencyNo='$agencyNo', ActiveStatus='1', IsDeductPagibig='0', IsDeductPhilhealth='0', IsDeductSSS='0', IsDeductTax='0', IsDeductGSIS='0', IsCommission='0', IsExemptDTR='0' where EmployeeID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Duplicate";
    }
?>

<?php
    mysqli_close($connection);
?>