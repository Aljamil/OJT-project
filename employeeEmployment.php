
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        require('../ojt/header.php');
    ?>

    <style>
        td {
            padding: 5px;
        }
        
        fieldset {
            width: 98%;
            padding: 5px;
            margin: 5px;
            border: 2px solid blue;
            border-radius: 5px;
        }
    </style>
    
    <?php
		require('../ojt/connectDB.php');			
	?>
    
</head>

<body>

    <div id="wrapper">
    
        <?php
            require('../ojt/navigation.php');
        ?>
    
    <?php
        if (isset($_GET["HiddenEmployeeID"])) {
            $employeeID = $_GET["HiddenEmployeeID"];
        } else {
            $employeeID = 'null';
        }

        $sql = "Select * from employee where EmployeeID='$employeeID'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($result);
    ?>

        <div id="page-wrapper" style="margin: 0px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <ol class="breadcrumb">
                <li>
                    <a class="btn btn-primary btn-xs" href="../ojt/employeeList.php">Employee List</a>
                </li>
                <li class="active">
                    Employee Profile
                </li>
            </ol>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <label>Profile Photo:</label>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div id="profilePicDiv">
                                                <div class="col-sm-12">
                                                    <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                    <div class="thumbnail" style="border: 2px solid blue;">
                                                        <img id="employeePic" <?php if($_GET['HiddenEmployeeID']==''){echo 'src="../ojt/img/default.png"';} else {echo 'src="../ojt/img/'.$row['EmpPicture'].'"';} ?> width="80%" height="80%" />
                                                        <div class="caption">
                                                            <center>
                                                                <button type="button" class="btn btn-primary btn-md" data-target="#addPicModal" data-toggle="modal" disabled>Change
                                                                </button>
                                                                <button class="btn btn-danger btn-md" type="button" data-target="#deletePicModal" data-toggle="modal" disabled>
                                                                    Delete
                                                                </button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                    <!-- /.thumbnail -->
                                                </div>
                                            </div>
                                            <!-- /.profilePicDiv -->
                                        </div>
                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <fieldset>
                                                    <ul class="nav nav-tabs nav-stacked">
                                                        <li>
                                                            <form action="../ojt/employeeEditProfile.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Personal Information
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeBackground.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Family Background
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeChildren.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Children
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeEducation.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Education
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeReference.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Reference
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeEligibility.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Eligibility
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeWorkExperience.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Work Experience
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeVoluntaryWork.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Voluntary Work
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeTraining.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Training
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeOther.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Other
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                Employment
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeReportTo.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Report-To
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employee_pds.php" method="POST" target="_blank">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-danger btn-block">
                                                                Print
                                                               </button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                    <!-- /.list-group -->
                                                </fieldset>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <div class="panel-footer">
                                    </div>
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-md-3 -->
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="saveFailed" class="alert alert-danger alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Employment Data Not Saved. Create and Save Employee Personal Information First! Go to <a class="alert-link" href="../ojt/EmployeeProfile.php">Personal Information</a> page.
                                        </div>
                                        <div id="savedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Employment Data Saved!
                                        </div>
                                        <div id="deletedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Employment Data Successfully Deleted!
                                        </div>
                                    </div>
                                </div>
                                <div id="EmployeeEmploymentDiv">
                                    <form id="EmployeeEmployment" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <label>Employment</label>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <label>Employment Information</label>
                                                            <p>
                                                                <label>*</label> <span class="label label-danger">Indicates Required Fields</span>
                                                            </p>
                                                            <div class="table-responsive">
                                                                <table class="table" style="width: 100%;" border="0">
                                                                    <tr>
                                                                        <td>
                                                                            Status *:
                                                                        </td>
                                                                        <td>
                                                                            <select name="EmploymentStatus" class="form-control input-sm">
                                                                                <option value="" <?php if($row['EmploymentStatus'] == '') {echo "selected";} ?>></option>
                                                                                <option value="Trainee" <?php if($row['EmploymentStatus'] == 'Trainee') {echo "selected";} ?> >Trainee</option>
                                                                                <option value="Regular" <?php if($row['EmploymentStatus'] == 'Regular') {echo "selected";} ?>>Regular</option>
                                                                                <option value="Permanent" <?php if($row['EmploymentStatus'] == 'Permanent') {echo "selected";} ?> >Permanent</option>
                                                                                <option value="Contractual" <?php if($row['EmploymentStatus'] == 'Contractual') {echo "selected";} ?> >Contractual</option>
                                                                                <option value="Casual" <?php if($row['EmploymentStatus'] == 'Casual') {echo "selected";} ?> >Casual</option>
                                                                                <option value="Job Order" <?php if($row['EmploymentStatus'] == 'Job Order') {echo "selected";} ?> >Job Order</option>
                                                                                <option value="Elective" <?php if($row['EmploymentStatus'] == 'Elective') {echo "selected";} ?> >Elective</option>
                                                                                <option value="Co-Terminos" <?php if($row['EmploymentStatus'] == 'Co-Terminos') {echo "selected";} ?> >Co-Terminos</option>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            Allowance Time (min):
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="EmploymentAllowanceTime" placeholder="0" value="<?php echo $row['TimeOffset']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Branch *:
                                                                        </td>
                                                                        <td>
                                                                            <select name="EmploymentBranch" class="form-control input-sm">
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select BranchName, BranchCode from branch";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['BranchCode'].'" ';
                                                                                            if($row2['BranchCode'] == $row['BranchCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["BranchName"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            Reader ID:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="EmploymentReaderID" placeholder="0" value="<?php echo $row['ReaderID']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Time Shift *:
                                                                        </td>
                                                                        <td>
                                                                            <select name="EmploymentTimeShift" class="form-control input-sm">
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select Description, SchedCode from schedule order by Description ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['SchedCode'].'" ';
                                                                                            if($row2['SchedCode'] == $row['SchedCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Description"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            Date Hired *:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" id="employmentDateHired" class="form-control input-sm" name="EmploymentDateHired" placeholder="" value="<?php echo $row['DateHired']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input id ="employmentCheckSeparation" type="checkbox" name="EmploymentCheckSeparated" value="Separated" onClick="javascript:toggleEmploymentSeparation();" <?php if($row['ActiveStatus']=='0'){echo "checked";} ?> >
                                                                            Separated
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentSeparated" name="EmploymentSeparatedType" class="form-control input-sm" <?php if($row['ActiveStatus']=='1'){echo "disabled";} ?>>
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select * from separation order by Separation ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['ID'].'" ';
                                                                                            if($row2['ID'] == $row['SeparationMode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Separation"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            Date Separated:
                                                                        </td>
                                                                        <td>
                                                                            <input id="employmentDateSeparated" type="text" class="form-control input-sm" name="EmploymentDateSeparated" placeholder="" <?php if($row['ActiveStatus']=='1'){echo "disabled";} else {$date = $row["SeparationDate"];
                                                                            echo "value='$date'";} ?>>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Basic Salary *:
                                                                        </td>
                                                                        <td>
                                                                            <input id="employmentBasicSalary" type="text" class="form-control input-sm" name="EmploymentBasicSalary" placeholder="0.00" value="<?php echo $row['SalaryRate']; ?>" />
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="checkbox" name="EmploymentDaily" value="Daily" <?php if($row['IsDailySalary']=='1'){echo "checked";} ?> >
                                                                            Daily
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            ACA/PERA/COLA:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="EmploymentAcaPeraCola" placeholder="0.00" value="<?php echo $row['Allowance']; ?>"/ >
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="checkbox" name="EmploymentExemptFromDTR" value="ExemptFromDTR" <?php if($row['IsExemptDTR']=='1'){echo "checked";} ?>>
                                                                            Exempt From DTR
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <label>Miscellaneous</label>
                                                            <div class="table-responsive">
                                                                <table class="table" style="width: 100%;">
                                                                    <tr>
                                                                        <td style="width: 5%;">
                                                                            <input id="employmentCheckDeductHDMF" type="checkbox" name="EmploymentCheckDeductHDMF" value="DeductHDMF" onClick="javascript:toggleEmploymentDeductHDMF();" <?php if($row['IsDeductPagibig']=='1'){echo "checked";} ?> >
                                                                        </td>
                                                                        <td>
                                                                            Deduct HDMF:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentDeductHDMF" name="EmploymentDeductHDMFValue" class="form-control input-sm" <?php if($row['IsDeductPagibig']=='0'){echo "disabled";} ?> >
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select Description, PagibigCode from bracket_pagibig order by Description ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['PagibigCode'].'" ';
                                                                                            if($row2['PagibigCode'] == $row['PagibigCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Description"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width: 5%;">
                                                                            <input id="employmentCheckDeductTaxWithheld" type="checkbox" name="EmploymentCheckDeductTaxWithheld" value="DeductTaxWithheld" onClick="javascript:toggleDeductTaxWithheld();" <?php if($row['IsDeductTax']=='1'){echo "checked";} ?>>
                                                                        </td>
                                                                        <td>
                                                                            Deduct Tax Withheld:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentDeductTaxWithheld" name="EmploymentDeductTaxWithheld" class="form-control input-sm" <?php if($row['IsDeductTax']=='0'){echo "disabled";} ?>>
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select Description, TaxCode from bracket_tax order by Description ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['TaxCode'].'" ';
                                                                                            if($row2['TaxCode'] == $row['TaxCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Description"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 5%;">
                                                                            &nbsp;
                                                                        </td>
                                                                        <td>
                                                                            Employer No.:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentHDMFEmployerNo" name="EmploymentHDMFEmployerNo" class="form-control input-sm" <?php if($row['IsDeductPagibig']=='0'){echo "disabled";} ?> >
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select HDMFNo from employer_hdmf order by HDMFNo ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['HDMFNo'].'" ';
                                                                                            if($row2['HDMFNo'] == $row['PagibigNo']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["HDMFNo"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width: 5%;">
                                                                            <input id="employmentCheckDeductPhilhealth" type="checkbox" name="EmploymentCheckDeductPhilhealth" value="DeductPhilhealth" onClick="javascript:toggleDeductPhilhealth();" <?php if($row['IsDeductPhilhealth']=='1'){echo "checked";} ?>>
                                                                        </td>
                                                                        <td>
                                                                            Deduct Philhealth:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentDeductPhilhealth" name="EmploymentDeductPhilhealth" class="form-control input-sm" <?php if($row['IsDeductPhilhealth']=='0'){echo "disabled";} ?>>
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select Description, PhilHealthCode from bracket_philhealth order by Description ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['PhilHealthCode'].'" ';
                                                                                            if($row2['PhilHealthCode'] == $row['PhilHealthCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Description"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 5%;">
                                                                            &nbsp;
                                                                        </td>
                                                                        <td>
                                                                            Member Program:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentMemberProgram" name="EmploymentMemberProgram" class="form-control input-sm" <?php if($row['IsDeductPagibig']=='0'){echo "disabled";} ?> >
                                                                                <option value="" <?php if($row['PagibigProgram'] == '') {echo "selected";} ?> ></option>
                                                                                <option value="Pag-IBIG I" <?php if($row['PagibigProgram'] == 'Pag-IBIG I') {echo "selected";} ?> >Pag-IBIG I</option>
                                                                                <option value="Pag-IBIG II" <?php if($row['PagibigProgram'] == 'Pag-IBIG II') {echo "selected";} ?> >Pag-IBIG II</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width: 5%;">
                                                                            <input id="employmentCheckDeductGSIS" type="checkbox" name="EmploymentCheckDeductGSIS" value="DeductGSIS" onClick="javascript:toggleDeductGSIS();" <?php if($row['IsDeductGSIS']=='1'){echo "checked";} ?>>
                                                                        </td>
                                                                        <td>
                                                                            Deduct GSIS:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentDeductGSIS" name="EmploymentDeductGSIS" class="form-control input-sm" <?php if($row['IsDeductGSIS']=='0'){echo "disabled";} ?>>
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select Description, GSISCode from bracket_gsis order by Description ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['GSISCode'].'" ';
                                                                                            if($row2['GSISCode'] == $row['GSISCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Description"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 5%;">
                                                                            <input id="employmentCheckDeductSSS" type="checkbox" name="EmploymentCheckDeductSSS" value="DeductSSS" onClick="javascript:toggleDeductSSS();" <?php if($row['IsDeductSSS']=='1'){echo "checked";} ?>>
                                                                        </td>
                                                                        <td>
                                                                            Deduct SSS:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentDeductSSS" name="EmploymentDeductSSS" class="form-control input-sm" <?php if($row['IsDeductSSS']=='0'){echo "disabled";} ?>>
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select Description, SSSCode from bracket_sss order by Description ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['SSSCode'].'" ';
                                                                                            if($row2['SSSCode'] == $row['SSSCode']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["Description"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td style="width: 5%;">
                                                                            <input id="employmentCheckCommissionSalary" type="checkbox" name="EmploymentCheckCommissionSalary" value="CommissionSalary" onClick="javascript:toggleCommissionSalary();" <?php if($row['IsCommission']=='1'){echo "checked";} ?>>
                                                                        </td>
                                                                        <td>
                                                                            Commission Salary:
                                                                        </td>
                                                                        <td>
                                                                            <input id="employmentCommissionSalary" type="text" class="form-control input-sm" name="EmploymentCommissionSalary" placeholder="0.00" value="<?php echo $row['CommissionPercent']; ?>" <?php if($row['IsCommission']=='0'){echo "disabled";} ?>>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 5%;">
                                                                            &nbsp;
                                                                        </td>
                                                                        <td>
                                                                            Employer No.:
                                                                        </td>
                                                                        <td>
                                                                            <select id="employmentSSSEmployerNo" name="EmploymentSSSEmployerNo" class="form-control input-sm" <?php if($row['IsDeductSSS']=='0'){echo "disabled";} ?>>
                                                                                <option value=""></option>
                                                                                <?php
                                                                                    $sql2 = "select SSSNo from employer_sss order by SSSNo ASC";
                                                                                    $result2 = mysqli_query($connection,$sql2);
                                                                                    if (mysqli_num_rows($result2) > 0) {
                                                                                        while($row2 = mysqli_fetch_assoc($result2)) {
                                                                                            echo '<option value="'.$row2['SSSNo'].'" ';
                                                                                            if($row2['SSSNo'] == $row['SSSNo']) {
                                                                                                echo "selected >";
                                                                                            } else {
                                                                                                echo ">";
                                                                                            }
                                                                                            echo $row2["SSSNo"].'</option>';
                                                                                        };
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                        <td colspan="3">
                                                                            &nbsp;
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <label>Department History</label>
                                                                <table class="table table-striped" style="width: 100%;" border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>
                                                                                <button class="btn btn-primary btn-xs" type="button" data-target="#addDepartmentModal" data-toggle="modal">
                                                                                    Add Department
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Department
                                                                            </th>
                                                                            <th>
                                                                                Effective Date
                                                                            </th>
                                                                            <th>
                                                                                Action
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="departmentHistoryTable">
                                                                        <?php
                                                                            require('../ojt/employeeGetDepartmentHistory.php');
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <label>Position History</label>
                                                                <table class="table table-striped" style="width: 100%;" border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>
                                                                                <button class="btn btn-primary btn-xs" type="button" data-target="#addPositionModal" data-toggle="modal">
                                                                                    Add Position
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Position
                                                                            </th>
                                                                            <th>
                                                                                Effective Date
                                                                            </th>
                                                                            <th>
                                                                                Action
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="positionHistoryTable">
                                                                        <?php
                                                                            require('../ojt/employeeGetPositionHistory.php');
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <label>Commission History</label>
                                                                <table class="table table-striped" style="width: 100%;" border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>
                                                                                <button class="btn btn-primary btn-xs" type="button" data-target="#addCommissionModal" data-toggle="modal">
                                                                                    Add Commission
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Commission
                                                                            </th>
                                                                            <th>
                                                                                Effective Date
                                                                            </th>
                                                                            <th>
                                                                                Action
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="commissionHistoryTable">
                                                                        <?php
                                                                            require('../ojt/employeeGetCommissionHistory.php');
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <label>Salary History</label>
                                                                <table class="table table-striped" style="width: 100%;" border="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td>
                                                                                <button class="btn btn-primary btn-xs" type="button" data-target="#addSalaryModal" data-toggle="modal">
                                                                                    Add Salary
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Salary
                                                                            </th>
                                                                            <th>
                                                                                Daily
                                                                            </th>
                                                                            <th>
                                                                                Effective Date
                                                                            </th>
                                                                            <th>
                                                                                Action
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="salaryHistoryTable">
                                                                        <?php
                                                                            require('../ojt/employeeGetSalaryHistory.php');
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <!-- /.col-sm-12 -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.panel-body -->
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <a class="btn btn-danger btn-outline btn-sm" href="../ojt/employeeList.php">
                                                            Cancel
                                                        </a>
                                                        <a class="btn btn-primary btn-outline btn-sm" href="../ojt/employeeProfile.php">
                                                            New
                                                        </a>
                                                        <button class="btn btn-primary btn-sm" type="submit">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.panel-footer -->
                                        </div>
                                        <!-- panel panel-primary -->
                                    </form>
                                </div>
                            </div>
                            <!-- /.col-md-9 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		
        <?php
            require('../ojt/connectDB.php');			
        ?>
        
		<!-- Modal -->
        <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddDepartment" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Department</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="departmentNameField">Department*:</label>
                                    <div class="col-xs-9">
                                        <select id="departmentNameField" class="form-control" name="DepartmentName">
                                            <?php
                                                $sql = "select Description from department order by Description ASC";
                                                $result = mysqli_query($connection,$sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="'.$row["Description"].'">'.$row["Description"].'</option>';
                                                    };
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="effectiveDateFieldDepartment">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="effectiveDateFieldDepartment" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="deleteDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="deleteDepartmentModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteDepartment" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Department</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p>
                                            Are you sure you want to delete this entry?
                                        </p>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="hidden" id="deleteIDDepartment" name="deleteID" value="">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="editDepartmentModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditDepartment" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Department</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="editEmployeeIDDepartment" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editDepartmentNameField">Department*:</label>
                                    <div class="col-xs-9">
                                        <select id="editDepartmentNameField" class="form-control" name="DepartmentName">
                                            <?php
                                                $sql = "select Description from department order by Description ASC";
                                                $result = mysqli_query($connection,$sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="'.$row["Description"].'">'.$row["Description"].'</option>';
                                                    };
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editEffectiveDateFieldDepartment">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="editEffectiveDateFieldDepartment" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="addPositionModal" tabindex="-1" role="dialog" aria-labelledby="addPositionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddPosition" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Position</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="positionField">Position*:</label>
                                    <div class="col-xs-9">
                                        <select id="positionField" class="form-control" name="Position">
                                            <?php
                                                $sql = "select Description from position order by Description ASC";
                                                $result = mysqli_query($connection,$sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="'.$row["Description"].'">'.$row["Description"].'</option>';
                                                    };
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="effectiveDateFieldPosition">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="effectiveDateFieldPosition" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="deletePositionModal" tabindex="-1" role="dialog" aria-labelledby="deletePositionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeletePosition" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Position</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p>
                                            Are you sure you want to delete this entry?
                                        </p>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="hidden" id="deleteIDPosition" name="deleteID" value="">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="editPositionModal" tabindex="-1" role="dialog" aria-labelledby="editPositionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditPosition" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Position</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="editEmployeeIDPosition" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="editPositionField">Position*:</label>
                                    <div class="col-xs-9">
                                        <select id="editPositionField" class="form-control" name="Position">
                                            <?php
                                                $sql = "select Description from position order by Description ASC";
                                                $result = mysqli_query($connection,$sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while($row = mysqli_fetch_assoc($result)) {
                                                        echo '<option value="'.$row["Description"].'">'.$row["Description"].'</option>';
                                                    };
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editEffectiveDateFieldPosition">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="editEffectiveDateFieldPosition" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="addCommissionModal" tabindex="-1" role="dialog" aria-labelledby="addCommissionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddCommission" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Commission</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="commissionField">Commission*:</label>
                                    <div class="col-xs-9">
                                        <input id="commissionField" class="form-control" type="text" name="Commission" placeholder="Commission" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="effectiveDateFieldCommission">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="effectiveDateFieldCommission" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="deleteCommissionModal" tabindex="-1" role="dialog" aria-labelledby="deleteCommissionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteCommission" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Commission</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p>
                                            Are you sure you want to delete this entry?
                                        </p>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="hidden" id="deleteIDCommission" name="deleteID" value="">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="editCommissionModal" tabindex="-1" role="dialog" aria-labelledby="editCommissionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditCommission" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Commission</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="editEmployeeIDCommission" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editCommissionField">Commission*:</label>
                                    <div class="col-xs-9">
                                        <input id="editCommissionField" class="form-control" type="text" name="Commission" placeholder="Commission" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editEffectiveDateFieldCommission">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="editEffectiveDateFieldCommission" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="addSalaryModal" tabindex="-1" role="dialog" aria-labelledby="addSalaryModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddSalary" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Salary</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="salaryField">Salary*:</label>
                                    <div class="col-xs-9">
                                        <input id="salaryField" class="form-control" type="text" name="Salary" placeholder="Salary" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="dailyField">Daily*:</label>
                                    <div class="col-xs-9">
                                        <select id="dailyField" class="form-control" name="Daily">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="effectiveDateFieldSalary">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="effectiveDateFieldSalary" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="deleteSalaryModal" tabindex="-1" role="dialog" aria-labelledby="deleteSalaryModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteSalary" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Salary</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p>
                                            Are you sure you want to delete this entry?
                                        </p>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="hidden" id="deleteIDSalary" name="deleteID" value="">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Delete</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
        <div class="modal fade" id="editSalaryModal" tabindex="-1" role="dialog" aria-labelledby="editSalaryModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditSalary" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Salary</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="editEmployeeIDSalary" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editSalaryField">Salary*:</label>
                                    <div class="col-xs-9">
                                        <input id="editSalaryField" class="form-control" type="text" name="Salary" placeholder="Salary" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editDailyField">Daily*:</label>
                                    <div class="col-xs-9">
                                        <select id="editDailyField" class="form-control" name="Daily">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editEffectiveDateFieldSalary">Effective Date*:</label>
                                    <div class="col-xs-9">
                                        <input id="editEffectiveDateFieldSalary" class="form-control" type="text" name="EffectiveDate" placeholder="Effective Date" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.form-horizontal -->
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
        
		<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">About</h4>
					</div>
					<div class="modal-body">
						3GX Human Resource Management System<br />Version 1.0<br />Release Date: 12.25.2015
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		
		<div class="modal fade" id="sendFeebackModal" tabindex="-1" role="dialog" aria-labelledby="sendFeebackModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Send Feedback</h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<label>First Name</label>
								<input class="form-control">
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input class="form-control">
							</div>
							
							<div class="form-group">
								<label>Comment</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>
							<div style="text-align: center;">
							<button type="submit" class="btn btn-default" data-dismiss="modal">Submit Button</button>
							<button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
						
					</div>
					
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../ojt/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../ojt/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../ojt/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../ojt/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../ojt/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../ojt/dist/js/sb-admin-2.js"></script>
    <script src="../ojt/dist/js/jquery-ui.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    //Validate Employment Information and Miscellaneous
    function profileFormValidator(employeeEmploymentForm){
    if (employeeEmploymentForm.EmploymentStatus.value == "") {
        alert("Please fill up required fields.");
        employeeEmploymentForm.EmploymentStatus.focus();
        return (false);
    }
    if (employeeEmploymentForm.EmploymentBranch.value == "") {
        alert("Please fill up required fields.");
        employeeEmploymentForm.EmploymentBranch.focus();
        return (false);
    }
    if (employeeEmploymentForm.EmploymentTimeShift.value == "") {
        alert("Please fill up required fields.");
        employeeEmploymentForm.EmploymentTimeShift.focus();
        return (false);
    }
    if (employeeEmploymentForm.EmploymentDateHired.value == "") {
        alert("Please fill up required fields.");
        employeeEmploymentForm.EmploymentDateHired.focus();
        return (false);
    }
    if (employeeEmploymentForm.EmploymentBasicSalary.value == "") {
        alert("Please fill up required fields.");
        employeeEmploymentForm.EmploymentBasicSalary.focus();
        return (false);
    }
    return true;
    }
    
    $(document).ready(function(){
        $(document).on('submit', '#EmployeeEmployment', function(){
            if (profileFormValidator(EmployeeEmployment)){
                var data = $('#EmployeeEmployment').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveEmployment.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#savedSuccessfully').fadeIn(400).delay(4000).slideUp(400);
                            } else {
                                $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
                            }
                        });
                    }
                });
                return false;
            }
            return false;
        });
    });
    
    //Department History
    function profileAddDepartment(employeeDepartmentForm){
    if (((employeeDepartmentForm.HiddenEmployeeID.value == "") ||
         (employeeDepartmentForm.HiddenEmployeeID.value != "")) &&
        (employeeDepartmentForm.DepartmentName.value == "") &&
        (employeeDepartmentForm.EffectiveDate.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeDepartmentForm.HiddenEmployeeID.value == "") {
        $('#addDepartmentModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteDepartment(id) {
        var ID = document.getElementsByName('departmentID')[id].value;
        document.getElementById('deleteIDDepartment').value = ID;
    }
    
    function editDepartment(id) {
        var ID = document.getElementsByName('departmentID')[id].value;
        var departmentName = document.getElementsByName('employeeDepartmentName')[id].value;
        var departmentDate = document.getElementsByName('employeeEffectiveDateDepartment')[id].value;
        document.getElementById('editEmployeeIDDepartment').value = ID;
        document.getElementById('editDepartmentNameField').value = departmentName;
        document.getElementById('editEffectiveDateFieldDepartment').value = departmentDate;
    }
    
    $(document).ready(function() {
        //save Department info from modal
        $(document).on('submit', '#EmployeeAddDepartment', function(){
            if (profileAddDepartment(EmployeeAddDepartment)){
                
                var data = $('#EmployeeAddDepartment').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveDepartmentHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addDepartmentModal').modal('hide');

                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
            }
            return false;
        });
        
        //delete Department info from modal
        $(document).on('submit', '#EmployeeDeleteDepartment', function(){
                var data = $('#EmployeeDeleteDepartment').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteDepartmentHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteDepartmentModal').modal('hide');
                        
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#deletedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
        
        //edit Department info from modal
        $(document).on('submit', '#EmployeeEditDepartment', function(){
                var data = $('#EmployeeEditDepartment').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditDepartmentHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editDepartmentModal').modal('hide');
                            
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
    });
    
    //Position History
    function profileAddPosition(employeePositionForm){
    if (((employeePositionForm.HiddenEmployeeID.value == "") ||
         (employeePositionForm.HiddenEmployeeID.value != "")) &&
        (employeePositionForm.Position.value == "") &&
        (employeePositionForm.EffectiveDate.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeePositionForm.HiddenEmployeeID.value == "") {
        $('#addPositionModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deletePosition(id) {
        var ID = document.getElementsByName('positionID')[id].value;
        document.getElementById('deleteIDPosition').value = ID;
    }
    
    function editPosition(id) {
        var ID = document.getElementsByName('positionID')[id].value;
        var positionName = document.getElementsByName('employeePosition')[id].value;
        var positionDate = document.getElementsByName('employeeEffectiveDatePosition')[id].value;
        document.getElementById('editEmployeeIDPosition').value = ID;
        document.getElementById('editPositionField').value = positionName;
        document.getElementById('editEffectiveDateFieldPosition').value = positionDate;
    }
    
    $(document).ready(function() {
        //save Position info from modal
        $(document).on('submit', '#EmployeeAddPosition', function(){
            if (profileAddPosition(EmployeeAddPosition)){
                
                var data = $('#EmployeeAddPosition').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSavePositionHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addPositionModal').modal('hide');

                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
            }
            return false;
        });
        
        //delete Position info from modal
        $(document).on('submit', '#EmployeeDeletePosition', function(){
                var data = $('#EmployeeDeletePosition').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeletePositionHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deletePositionModal').modal('hide');
                        
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#deletedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
        
        //edit Position info from modal
        $(document).on('submit', '#EmployeeEditPosition', function(){
                var data = $('#EmployeeEditPosition').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditPositionHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editPositionModal').modal('hide');
                            
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
    });
    
    //Commission History
    function profileAddCommission(employeeCommissionForm){
    if (((employeeCommissionForm.HiddenEmployeeID.value == "") ||
         (employeeCommissionForm.HiddenEmployeeID.value != "")) &&
        (employeeCommissionForm.Commission.value == "") &&
        (employeeCommissionForm.EffectiveDate.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeCommissionForm.HiddenEmployeeID.value == "") {
        $('#addCommissionModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteCommission(id) {
        var ID = document.getElementsByName('commissionID')[id].value;
        document.getElementById('deleteIDCommission').value = ID;
    }
    
    function editCommission(id) {
        var ID = document.getElementsByName('commissionID')[id].value;
        var commissionName = document.getElementsByName('employeeCommission')[id].value;
        var commissionDate = document.getElementsByName('employeeEffectiveDateCommission')[id].value;
        document.getElementById('editEmployeeIDCommission').value = ID;
        document.getElementById('editCommissionField').value = commissionName;
        document.getElementById('editEffectiveDateFieldCommission').value = commissionDate;
    }
    
    $(document).ready(function() {
        //save Commission info from modal
        $(document).on('submit', '#EmployeeAddCommission', function(){
            if (profileAddCommission(EmployeeAddCommission)){
                
                var data = $('#EmployeeAddCommission').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveCommissionHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addCommissionModal').modal('hide');

                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
            }
            return false;
        });
        
        //delete Commission info from modal
        $(document).on('submit', '#EmployeeDeleteCommission', function(){
                var data = $('#EmployeeDeleteCommission').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteCommissionHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteCommissionModal').modal('hide');
                        
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#deletedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
        
        //edit Commission info from modal
        $(document).on('submit', '#EmployeeEditCommission', function(){
                var data = $('#EmployeeEditCommission').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditCommissionHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editCommissionModal').modal('hide');
                            
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
    });
    
    //Salary History
    function profileAddSalary(employeeSalaryForm){
    if (((employeeSalaryForm.HiddenEmployeeID.value == "") ||
         (employeeSalaryForm.HiddenEmployeeID.value != "")) &&
        (employeeSalaryForm.Salary.value == "") &&
        (employeeSalaryForm.Daily.value == "") &&
        (employeeSalaryForm.EffectiveDate.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeSalaryForm.HiddenEmployeeID.value == "") {
        $('#addSalaryModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteSalary(id) {
        var ID = document.getElementsByName('salaryID')[id].value;
        document.getElementById('deleteIDSalary').value = ID;
    }
    
    function editSalary(id) {
        var ID = document.getElementsByName('salaryID')[id].value;
        var salaryName = document.getElementsByName('employeeSalaryRate')[id].value;
        var salaryDailyRate = document.getElementsByName('employeeIsDailyRate')[id].value;
        var salaryDate = document.getElementsByName('employeeEffectiveDateSalary')[id].value;
        document.getElementById('editEmployeeIDSalary').value = ID;
        document.getElementById('editSalaryField').value = salaryName;
        document.getElementById('editDailyField').value = salaryDailyRate;
        document.getElementById('editEffectiveDateFieldSalary').value = salaryDate;
    }
    
    $(document).ready(function() {
        //save Salary info from modal
        $(document).on('submit', '#EmployeeAddSalary', function(){
            if (profileAddSalary(EmployeeAddSalary)){
                
                var data = $('#EmployeeAddSalary').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveSalaryHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addSalaryModal').modal('hide');

                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
            }
            return false;
        });
        
        //delete Salary info from modal
        $(document).on('submit', '#EmployeeDeleteSalary', function(){
                var data = $('#EmployeeDeleteSalary').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteSalaryHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteSalaryModal').modal('hide');
                        
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#deletedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
        
        //edit Salary info from modal
        $(document).on('submit', '#EmployeeEditSalary', function(){
                var data = $('#EmployeeEditSalary').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditSalaryHistory.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editSalaryModal').modal('hide');
                            
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                    $('div#savedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                    $('div#saveFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
    });
    
    //Employment Information and Miscellaneous
    function toggleEmploymentSeparation() {
        if (document.getElementById('employmentCheckSeparation').checked == true) {
            document.getElementById('employmentDateSeparated').disabled = false;
            document.getElementById('employmentSeparated').disabled = false;
        } else {
            document.getElementById('employmentDateSeparated').disabled = true;
            document.getElementById('employmentSeparated').disabled = true;
        }
    }
    
    function toggleEmploymentDeductHDMF() {
        if (document.getElementById('employmentCheckDeductHDMF').checked == true) {
            document.getElementById('employmentDeductHDMF').disabled = false;
            document.getElementById('employmentHDMFEmployerNo').disabled = false;
            document.getElementById('employmentMemberProgram').disabled = false;
        } else {
            document.getElementById('employmentDeductHDMF').disabled = true;
            document.getElementById('employmentHDMFEmployerNo').disabled = true;
            document.getElementById('employmentMemberProgram').disabled = true;
        }
    }
    
    function toggleDeductTaxWithheld() {
        if (document.getElementById('employmentCheckDeductTaxWithheld').checked == true) {
            document.getElementById('employmentDeductTaxWithheld').disabled = false;
        } else {
            document.getElementById('employmentDeductTaxWithheld').disabled = true;
        }
    }
    
    function toggleDeductSSS() {
        if (document.getElementById('employmentCheckDeductSSS').checked == true) {
            document.getElementById('employmentDeductSSS').disabled = false;
            document.getElementById('employmentSSSEmployerNo').disabled = false;
        } else {
            document.getElementById('employmentDeductSSS').disabled = true;
            document.getElementById('employmentSSSEmployerNo').disabled = true;
        }
    }
    
    function toggleDeductPhilhealth() {
        if (document.getElementById('employmentCheckDeductPhilhealth').checked == true) {
            document.getElementById('employmentDeductPhilhealth').disabled = false;
        } else {
            document.getElementById('employmentDeductPhilhealth').disabled = true;
        }
    }
    
    function toggleDeductGSIS() {
        if (document.getElementById('employmentCheckDeductGSIS').checked == true) {
            document.getElementById('employmentDeductGSIS').disabled = false;
        } else {
            document.getElementById('employmentDeductGSIS').disabled = true;
        }
    }
    
    function toggleCommissionSalary() {
        if (document.getElementById('employmentCheckCommissionSalary').checked == true) {
            document.getElementById('employmentCommissionSalary').disabled = false;
        } else {
            document.getElementById('employmentCommissionSalary').disabled = true;
        }
    }
    
    //Function used for datepicker
    $(function() {
        $('#employmentDateHired').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#employmentDateSeparated').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#effectiveDateFieldDepartment').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#editEffectiveDateFieldDepartment').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#effectiveDateFieldPosition').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#editEffectiveDateFieldPosition').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#effectiveDateFieldCommission').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#editEffectiveDateFieldCommission').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#effectiveDateFieldSalary').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
        
        $('#editEffectiveDateFieldSalary').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-50:+10"
        });
    });
    
    // Since confModal is essentially a nested modal it's enforceFocus method
    // must be no-op'd or the following error results 
    // "Uncaught RangeError: Maximum call stack size exceeded"
    // But then when the nested modal is hidden we reset modal.enforceFocus
    var enforceModalFocusFn = $.fn.modal.Constructor.prototype.enforceFocus;
    $.fn.modal.Constructor.prototype.enforceFocus = function() {};
    $confModal.on('hidden', function() {
        $.fn.modal.Constructor.prototype.enforceFocus = enforceModalFocusFn;
    });
    $confModal.modal({ backdrop : false });
    </script>
    
    <?php
        mysqli_close($connection);
    ?>
    
</body>

</html>
