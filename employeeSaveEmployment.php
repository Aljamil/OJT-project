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
    if(isset($_POST['EmploymentStatus'])) {
        $employmentStatus = $_POST['EmploymentStatus'];
    } else {
        $employmentStatus = 'null';
    }
    if(isset($_POST['EmploymentBranch'])) {
        $employmentBranch = $_POST['EmploymentBranch'];
    } else {
        $employmentBranch = 'null';
    }
    if(isset($_POST['EmploymentTimeShift'])) {
        $employmentTimeShift = $_POST['EmploymentTimeShift'];
    } else {
        $employmentTimeShift = 'null';
    }
    if(isset($_POST['EmploymentDateHired'])) {
        $employmentDateHired = $_POST['EmploymentDateHired'];
    } else {
        $employmentDateHired = 'null';
    }
    if(isset($_POST['EmploymentBasicSalary'])) {
        $employmentBasicSalary = $_POST['EmploymentBasicSalary'];
    } else {
        $employmentBasicSalary = 'null';
    }

    //optional fields
    if(isset($_POST['EmploymentAllowanceTime'])) {
        $employmentAllowanceTime = $_POST['EmploymentAllowanceTime'];
    } else {
        $employmentAllowanceTime = 'null';
    }
    if(isset($_POST['EmploymentReaderID'])) {
        $employmentReaderID = $_POST['EmploymentReaderID'];
    } else {
        $employmentReaderID = 'null';
    }
    if(isset($_POST['EmploymentCheckSeparated'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckSeparated'] == 'Separated') {
            $employmentCheckSeparated = '0';
            if(isset($_POST['EmploymentSeparatedType'])) {
                $employmentSeparatedType = $_POST['EmploymentSeparatedType'];
            } else {
                $employmentSeparatedType = 'null';
            }
            if(isset($_POST['EmploymentDateSeparated'])) {
                $employmentDateSeparated = $_POST['EmploymentDateSeparated'];
            } else {
                $employmentDateSeparated = 'null';
            }
        }
    } else {
        $employmentCheckSeparated = '1';
            $employmentSeparatedType = 'null';
            $employmentDateSeparated = 'null';
    }
    if(isset($_POST['EmploymentDaily'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentDaily'] == 'Daily') {
            $employmentDaily = '1';
        }
    } else {
        $employmentDaily = '0';
    }
    if(isset($_POST['EmploymentAcaPeraCola'])) {
        $employmentAcaPeraCola = $_POST['EmploymentAcaPeraCola'];
    } else {
        $employmentAcaPeraCola = 'null';
    }
    if(isset($_POST['EmploymentExemptFromDTR'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentExemptFromDTR'] == 'ExemptFromDTR') {
            $employmentExemptFromDTR = '1';
        }
    } else {
        $employmentExemptFromDTR = '0';
    }
    if(isset($_POST['EmploymentCheckDeductHDMF'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckDeductHDMF'] == 'DeductHDMF') {
            $employmentCheckDeductHDMF = '1';
            if(isset($_POST['EmploymentDeductHDMFValue'])) {
                $employmentDeductHDMFValue = $_POST['EmploymentDeductHDMFValue'];
            } else {
                $employmentDeductHDMFValue = 'null';
            }
            if(isset($_POST['EmploymentHDMFEmployerNo'])) {
                $employmentHDMFEmployerNo = $_POST['EmploymentHDMFEmployerNo'];
            } else {
                $employmentHDMFEmployerNo = 'null';
            }
            if(isset($_POST['EmploymentMemberProgram'])) {
                $employmentMemberProgram = $_POST['EmploymentMemberProgram'];
            } else {
                $employmentMemberProgram = 'null';
            }
        }
    } else {
        $employmentCheckDeductHDMF = '0';
            $employmentDeductHDMFValue = 'null';
            $employmentHDMFEmployerNo = 'null';
            $employmentMemberProgram = 'null';
    }
    if(isset($_POST['EmploymentCheckDeductTaxWithheld'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckDeductTaxWithheld'] == 'DeductTaxWithheld') {
            $employmentCheckDeductTaxWithheld = '1';
            if(isset($_POST['EmploymentDeductTaxWithheld'])) {
                $employmentDeductTaxWithheld = $_POST['EmploymentDeductTaxWithheld'];
            } else {
                $employmentDeductTaxWithheld = 'null';
            }
        }
    } else {
        $employmentCheckDeductTaxWithheld = '0';
            $employmentDeductTaxWithheld = 'null';
    }
    if(isset($_POST['EmploymentCheckDeductPhilhealth'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckDeductPhilhealth'] == 'DeductPhilhealth') {
            $employmentCheckDeductPhilhealth = '1';
            if(isset($_POST['EmploymentDeductPhilhealth'])) {
                $employmentDeductPhilhealth = $_POST['EmploymentDeductPhilhealth'];
            } else {
                $employmentDeductPhilhealth = 'null';
            }
        }
    } else {
        $employmentCheckDeductPhilhealth = '0';
            $employmentDeductPhilhealth = 'null';
    }
    if(isset($_POST['EmploymentCheckDeductGSIS'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckDeductGSIS'] == 'DeductGSIS') {
            $employmentCheckDeductGSIS = '1';
            if(isset($_POST['EmploymentDeductGSIS'])) {
                $employmentDeductGSIS = $_POST['EmploymentDeductGSIS'];
            } else {
                $employmentDeductGSIS = 'null';
            }
        }
    } else {
        $employmentCheckDeductGSIS = '0';
            $employmentDeductGSIS = 'null';
    }
    if(isset($_POST['EmploymentCheckDeductSSS'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckDeductSSS'] == 'DeductSSS') {
            $employmentCheckDeductSSS = '1';
            if(isset($_POST['EmploymentDeductSSS'])) {
                $employmentDeductSSS = $_POST['EmploymentDeductSSS'];
            } else {
                $employmentDeductSSS = 'null';
            }
            if(isset($_POST['EmploymentSSSEmployerNo'])) {
                $employmentSSSEmployerNo = $_POST['EmploymentSSSEmployerNo'];
            } else {
                $employmentSSSEmployerNo = 'null';
            }
        }
    } else {
        $employmentCheckDeductSSS = '0';
            $employmentDeductSSS = 'null';
            $employmentSSSEmployerNo = 'null';
    }
    if(isset($_POST['EmploymentCheckCommissionSalary'])) {
        //$ = $_POST[''];
        if ($_POST['EmploymentCheckCommissionSalary'] == 'CommissionSalary') {
            $employmentCheckCommissionSalary = '1';
            if(isset($_POST['EmploymentCommissionSalary'])) {
                $employmentCommissionSalary = $_POST['EmploymentCommissionSalary'];
            } else {
                $employmentCommissionSalary = 'null';
            }
        }
    } else {
        $employmentCheckCommissionSalary = '0';
            $employmentCommissionSalary = 'null';
    }
    
    $sql = "Select * from employee where EmployeeID='$employeeID'";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $sql = "Update employee set EmploymentStatus='$employmentStatus', TimeOffset='$employmentAllowanceTime', BranchCode='$employmentBranch', SchedCode='$employmentTimeShift', DateHired='$employmentDateHired', SalaryRate='$employmentBasicSalary', ReaderID='$employmentReaderID', ActiveStatus='$employmentCheckSeparated', SeparationMode='$employmentSeparatedType', SeparationDate='$employmentDateSeparated', IsDailySalary='$employmentDaily', Allowance='$employmentAcaPeraCola', IsExemptDTR='$employmentExemptFromDTR', IsDeductPagibig='$employmentCheckDeductHDMF', PagibigCode='$employmentDeductHDMFValue', IsDeductTax='$employmentCheckDeductTaxWithheld', TaxCode='$employmentDeductTaxWithheld', PagibigNo='$employmentHDMFEmployerNo', IsDeductPhilhealth='$employmentCheckDeductPhilhealth', PhilHealthCode='$employmentDeductPhilhealth', PagibigProgram='$employmentMemberProgram', IsDeductGSIS='$employmentCheckDeductGSIS', GSISCode='$employmentDeductGSIS', IsDeductSSS='$employmentCheckDeductSSS', SSSCode='$employmentDeductSSS', IsCommission='$employmentCheckCommissionSalary', CommissionPercent='$employmentCommissionSalary', SSSNo='$employmentSSSEmployerNo' where EmployeeID='$employeeID'";
        
        $result = mysqli_query($connection, $sql);
        echo "Success";
    } else {
        echo "Empty";
    }
?>

<?php
    //mysqli_close($connection);
?>