
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

        $sql = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='1'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($result);
        
        $sql2 = "Select * from employee where EmployeeID='$employeeID'";
        $result2 = mysqli_query($connection,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
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
                                                        <img id="employeePic" <?php if($_GET['HiddenEmployeeID']==''){echo 'src="../ojt/img/default.png"';} else {echo 'src="../ojt/img/'.$row2['EmpPicture'].'"';} ?> width="80%" height="80%" />
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
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                Education
                                                            </button>
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
                                                            <form action="../ojt/employeeEmployment.php" method="GET">
                                                            <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Employment
                                                            </button>
                                                            </form>
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
                                            Education Data Not Saved. Create and Save Employee Personal Information First! Go to <a class="alert-link" href="../ojt/EmployeeProfile.php">Personal Information</a> page.
                                        </div>
                                        <div id="savedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Education Data Saved!
                                        </div>
                                        <div id="deletedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Education Data Successfully Deleted!
                                        </div>
                                    </div>
                                </div>
                                <div id="EmployeeEducationDiv">
                                    <form id="EmployeeEducation" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <label>Education</label>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <fieldset>
                                                            <label>Elementary</label>
                                                            <table class="table" style="width: 100%;">
                                                                <tr>
                                                                    <td>
                                                                        School Name:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="elementarySchoolName" placeholder="School Name" value="<?php echo $row['SchoolName']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Address:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="elementarySchoolAddress" placeholder="School Address" value="<?php echo $row['SchoolAddress']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Year Graduated:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="elementaryGraduateYear" placeholder="Year Graduated" value="<?php echo $row['GraduateYear']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Highest Level:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="elementaryHighestLevel" placeholder="Highest Level" value="<?php echo $row['HighestLevel']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Honor:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="elementaryHonor" placeholder="Honor" value="<?php echo $row['Honor']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Inclusive Date:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="elementaryInclusiveDate" placeholder="Inclusive Date" value="<?php echo $row['InclusiveDate']; ?>" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
                                                    </div>
                                                    
                                                    <?php
                                                        $sql = "Select * from employee_education where EmployeeID='$employeeID' and RefNo='2'";
                                                        $result = mysqli_query($connection,$sql);
                                                        $row = mysqli_fetch_assoc($result);
                                                    ?>
                                                    
                                                    <div class="col-sm-6">
                                                        <fieldset>
                                                            <label>Secondary</label>
                                                            <table class="table" style="width: 100%;" border="0">
                                                                <tr>
                                                                    <td>
                                                                        School Name:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="secondarySchoolName" placeholder="School Name" value="<?php echo $row['SchoolName']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Address:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="secondarySchoolAddress" placeholder="School Address" value="<?php echo $row['SchoolAddress']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Year Graduated:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="secondaryGraduateYear" placeholder="Year Graduated" value="<?php echo $row['GraduateYear']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Highest Level:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="secondaryHighestLevel" placeholder="Highest Level" value="<?php echo $row['HighestLevel']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Honor:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="secondaryHonor" placeholder="Honor" value="<?php echo $row['Honor']; ?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Inclusive Date:
                                                                    </td>
                                                                    <td>
                                                                        <input type="text" class="form-control input-sm" name="secondaryInclusiveDate" placeholder="Inclusive Date" value="<?php echo $row['InclusiveDate']; ?>" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset style="width: 99%;">
                                                            <label>Vocational/Trade Course</label>
                                                            <table class="table table-striped" style="width: 100%;" border="0">
                                                                <thead>
                                                                    <tr>
                                                                        <td>
                                                                            <button class="btn btn-primary btn-xs" type="button" data-target="#addVocationalModal" data-toggle="modal">
                                                                                Add Vocation/Trade
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            School Name
                                                                        </th>
                                                                        <th>
                                                                            Address
                                                                        </th>
                                                                        <th>
                                                                            Degree/Course
                                                                        </th>
                                                                        <th>
                                                                            Year Graduated
                                                                        </th>
                                                                        <th>
                                                                            Highest Level
                                                                        </th>
                                                                        <th>
                                                                            Inclusive Dates
                                                                        </th>
                                                                        <th>
                                                                            Honor
                                                                        </th>
                                                                        <th>
                                                                            Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="vocationTable">
                                                                    <?php
                                                                        require('../ojt/employeeGetVocation.php');
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset style="width: 99%;">
                                                            <label>College</label>
                                                            <table class="table table-striped" style="width: 100%;" border="0">
                                                                <thead>
                                                                    <tr>
                                                                        <td>
                                                                            <button class="btn btn-primary btn-xs" type="button" data-target="#addCollegeModal" data-toggle="modal">
                                                                                Add Degree/Course
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            School Name
                                                                        </th>
                                                                        <th>
                                                                            Address
                                                                        </th>
                                                                        <th>
                                                                            Degree/Course
                                                                        </th>
                                                                        <th>
                                                                            Year Graduated
                                                                        </th>
                                                                        <th>
                                                                            Highest Level
                                                                        </th>
                                                                        <th>
                                                                            Inclusive Dates
                                                                        </th>
                                                                        <th>
                                                                            Honor
                                                                        </th>
                                                                        <th>
                                                                            Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="collegeTable">
                                                                    <?php
                                                                        require('../ojt/employeeGetCollege.php');
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset style="width: 99%;">
                                                            <label>Graduate Studies</label>
                                                            <table class="table table-striped" style="width: 100%;" border="0">
                                                                <thead>
                                                                    <tr>
                                                                        <td>
                                                                            <button class="btn btn-primary btn-xs" type="button" data-target="#addGraduateModal" data-toggle="modal">
                                                                                Add Degree/Course
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>
                                                                            School Name
                                                                        </th>
                                                                        <th>
                                                                            Address
                                                                        </th>
                                                                        <th>
                                                                            Degree/Course
                                                                        </th>
                                                                        <th>
                                                                            Year Graduated
                                                                        </th>
                                                                        <th>
                                                                            Highest Level
                                                                        </th>
                                                                        <th>
                                                                            Inclusive Dates
                                                                        </th>
                                                                        <th>
                                                                            Honor
                                                                        </th>
                                                                        <th>
                                                                            Action
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="graduateTable">
                                                                    <?php
                                                                        require('../ojt/employeeGetGraduate.php');
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </fieldset>
                                                    </div>
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
                                <!-- /.EmployeeEducationDiv -->
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
		
		<!-- Modal -->
        <div class="modal fade" id="addVocationalModal" tabindex="-1" role="dialog" aria-labelledby="addVocationalModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddVocation" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Vocational/Trade Course</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="schoolNameField">School Name:</label>
                                    <div class="col-xs-9">
                                        <input id="schoolNameField" class="form-control" type="text" name="VocationSchoolName" placeholder="School Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="addressField">Address:</label>
                                    <div class="col-xs-9">
                                        <input id="addressField" class="form-control" type="text" name="VocationAddress" placeholder="Address" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="degreeField">Degree/Course:</label>
                                    <div class="col-xs-9">
                                        <input id="degreeField" class="form-control" type="text" name="VocationDegree" placeholder="Degree/Course" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="yearGraduatedField">Year Graduated:</label>
                                    <div class="col-xs-9">
                                        <input id="yearGraduatedField" class="form-control" type="text" name="VocationYear" placeholder="Year Graduated" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="highestLevelField">Highest Level:</label>
                                    <div class="col-xs-9">
                                        <input id="highestLevelField" class="form-control" type="text" name="VocationHighestLevel" placeholder="Highest Level" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="inclusiveDatesField">Inclusive Dates:</label>
                                    <div class="col-xs-9">
                                        <input id="inclusiveDatesField" class="form-control" type="text" name="VocationInclusiveDates" placeholder="Inclusive Dates" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="honorField">Honor:</label>
                                    <div class="col-xs-9">
                                        <input id="honorField" class="form-control" type="text" name="VocationHonor" placeholder="Honor" />
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
        
        <div class="modal fade" id="deleteVocationalModal" tabindex="-1" role="dialog" aria-labelledby="deleteVocationalModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteVocation" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Vocational/Trade Course</h4>
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
                                    <input type="hidden" id="deleteIDVocation" name="deleteIDVocation" value="">
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
        
        <div class="modal fade" id="editVocationalModal" tabindex="-1" role="dialog" aria-labelledby="editVocationalModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditVocation" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Vocational/Trade Course</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="vocationEmployeeID" name="HiddenEmployeeID" value="">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="schoolNameFieldVocation">School Name:</label>
                                    <div class="col-xs-9">
                                        <input id="schoolNameFieldVocation" class="form-control" type="text" name="VocationSchoolName" placeholder="School Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="addressFieldVocation">Address:</label>
                                    <div class="col-xs-9">
                                        <input id="addressFieldVocation" class="form-control" type="text" name="VocationAddress" placeholder="Address" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="degreeFieldVocation">Degree/Course:</label>
                                    <div class="col-xs-9">
                                        <input id="degreeFieldVocation" class="form-control" type="text" name="VocationDegree" placeholder="Degree/Course" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="yearGraduatedFieldVocation">Year Graduated:</label>
                                    <div class="col-xs-9">
                                        <input id="yearGraduatedFieldVocation" class="form-control" type="text" name="VocationYear" placeholder="Year Graduated" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="highestLevelFieldVocation">Highest Level:</label>
                                    <div class="col-xs-9">
                                        <input id="highestLevelFieldVocation" class="form-control" type="text" name="VocationHighestLevel" placeholder="Highest Level" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="inclusiveDatesFieldVocation">Inclusive Dates:</label>
                                    <div class="col-xs-9">
                                        <input id="inclusiveDatesFieldVocation" class="form-control" type="text" name="VocationInclusiveDates" placeholder="Inclusive Dates" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="honorFieldVocation">Honor:</label>
                                    <div class="col-xs-9">
                                        <input id="honorFieldVocation" class="form-control" type="text" name="VocationHonor" placeholder="Honor" />
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
        
        <div class="modal fade" id="addCollegeModal" tabindex="-1" role="dialog" aria-labelledby="addCollegeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddCollege" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add College Degree/Course</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="schoolNameField">School Name:</label>
                                    <div class="col-xs-9">
                                        <input id="schoolNameField" class="form-control" type="text" name="CollegeSchoolName" placeholder="School Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="addressField">Address:</label>
                                    <div class="col-xs-9">
                                        <input id="addressField" class="form-control" type="text" name="CollegeAddress" placeholder="Address" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="degreeField">Degree/Course:</label>
                                    <div class="col-xs-9">
                                        <input id="degreeField" class="form-control" type="text" name="CollegeDegree" placeholder="Degree/Course" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="yearGraduatedField">Year Graduated:</label>
                                    <div class="col-xs-9">
                                        <input id="yearGraduatedField" class="form-control" type="text" name="CollegeYear" placeholder="Year Graduated" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="highestLevelField">Highest Level:</label>
                                    <div class="col-xs-9">
                                        <input id="highestLevelField" class="form-control" type="text" name="CollegeHighestLevel" placeholder="Highest Level" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="inclusiveDatesField">Inclusive Dates:</label>
                                    <div class="col-xs-9">
                                        <input id="inclusiveDatesField" class="form-control" type="text" name="CollegeInclusiveDates" placeholder="Inclusive Dates" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="honorField">Honor:</label>
                                    <div class="col-xs-9">
                                        <input id="honorField" class="form-control" type="text" name="CollegeHonor" placeholder="Honor" />
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
        
        <div class="modal fade" id="deleteCollegeModal" tabindex="-1" role="dialog" aria-labelledby="deleteCollegeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteCollege" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete College Degree/Course</h4>
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
                                    <input type="hidden" id="deleteIDCollege" name="deleteIDCollege" value="">
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
        
        <div class="modal fade" id="editCollegeModal" tabindex="-1" role="dialog" aria-labelledby="editCollegeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditCollege" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit College Degree/Course</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="collegeEmployeeID" name="HiddenEmployeeID" value="">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="schoolNameFieldCollege">School Name:</label>
                                    <div class="col-xs-9">
                                        <input id="schoolNameFieldCollege" class="form-control" type="text" name="CollegeSchoolName" placeholder="School Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="addressFieldCollege">Address:</label>
                                    <div class="col-xs-9">
                                        <input id="addressFieldCollege" class="form-control" type="text" name="CollegeAddress" placeholder="Address" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="degreeFieldCollege">Degree/Course:</label>
                                    <div class="col-xs-9">
                                        <input id="degreeFieldCollege" class="form-control" type="text" name="CollegeDegree" placeholder="Degree/Course" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="yearGraduatedFieldCollege">Year Graduated:</label>
                                    <div class="col-xs-9">
                                        <input id="yearGraduatedFieldCollege" class="form-control" type="text" name="CollegeYear" placeholder="Year Graduated" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="highestLevelFieldCollege">Highest Level:</label>
                                    <div class="col-xs-9">
                                        <input id="highestLevelFieldCollege" class="form-control" type="text" name="CollegeHighestLevel" placeholder="Highest Level" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="inclusiveDatesFieldCollege">Inclusive Dates:</label>
                                    <div class="col-xs-9">
                                        <input id="inclusiveDatesFieldCollege" class="form-control" type="text" name="CollegeInclusiveDates" placeholder="Inclusive Dates" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="honorFieldCollege">Honor:</label>
                                    <div class="col-xs-9">
                                        <input id="honorFieldCollege" class="form-control" type="text" name="CollegeHonor" placeholder="Honor" />
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
        
        <div class="modal fade" id="addGraduateModal" tabindex="-1" role="dialog" aria-labelledby="addGraduateModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddGraduate" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Graduate Degree/Course</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="schoolNameField">School Name:</label>
                                    <div class="col-xs-9">
                                        <input id="schoolNameField" class="form-control" type="text" name="GraduateSchoolName" placeholder="School Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="addressField">Address:</label>
                                    <div class="col-xs-9">
                                        <input id="addressField" class="form-control" type="text" name="GraduateAddress" placeholder="Address" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="degreeField">Degree/Course:</label>
                                    <div class="col-xs-9">
                                        <input id="degreeField" class="form-control" type="text" name="GraduateDegree" placeholder="Degree/Course" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="yearGraduatedField">Year Graduated:</label>
                                    <div class="col-xs-9">
                                        <input id="yearGraduatedField" class="form-control" type="text" name="GraduateYear" placeholder="Year Graduated" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="highestLevelField">Highest Level:</label>
                                    <div class="col-xs-9">
                                        <input id="highestLevelField" class="form-control" type="text" name="GraduateHighestLevel" placeholder="Highest Level" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="inclusiveDatesField">Inclusive Dates:</label>
                                    <div class="col-xs-9">
                                        <input id="inclusiveDatesField" class="form-control" type="text" name="GraduateInclusiveDates" placeholder="Inclusive Dates" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="honorField">Honor:</label>
                                    <div class="col-xs-9">
                                        <input id="honorField" class="form-control" type="text" name="GraduateHonor" placeholder="Honor" />
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
        
        <div class="modal fade" id="deleteGraduateModal" tabindex="-1" role="dialog" aria-labelledby="deleteGraduateModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteGraduate" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Graduate Degree/Course</h4>
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
                                    <input type="hidden" id="deleteIDGraduate" name="deleteIDGraduate" value="">
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
        
        <div class="modal fade" id="editGraduateModal" tabindex="-1" role="dialog" aria-labelledby="editGraduateModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditGraduate" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Graduate Degree/Course</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="graduateEmployeeID" name="HiddenEmployeeID" value="">
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3" for="schoolNameFieldVocation">School Name:</label>
                                    <div class="col-xs-9">
                                        <input id="schoolNameFieldGraduate" class="form-control" type="text" name="GraduateSchoolName" placeholder="School Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="addressFieldGraduate">Address:</label>
                                    <div class="col-xs-9">
                                        <input id="addressFieldGraduate" class="form-control" type="text" name="GraduateAddress" placeholder="Address" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="degreeFieldGraduate">Degree/Course:</label>
                                    <div class="col-xs-9">
                                        <input id="degreeFieldGraduate" class="form-control" type="text" name="GraduateDegree" placeholder="Degree/Course" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="yearGraduatedFieldGraduate">Year Graduated:</label>
                                    <div class="col-xs-9">
                                        <input id="yearGraduatedFieldGraduate" class="form-control" type="text" name="GraduateYear" placeholder="Year Graduated" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="highestLevelFieldGraduate">Highest Level:</label>
                                    <div class="col-xs-9">
                                        <input id="highestLevelFieldGraduate" class="form-control" type="text" name="GraduateHighestLevel" placeholder="Highest Level" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="inclusiveDatesFieldGraduate">Inclusive Dates:</label>
                                    <div class="col-xs-9">
                                        <input id="inclusiveDatesFieldGraduate" class="form-control" type="text" name="GraduateInclusiveDates" placeholder="Inclusive Dates" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="honorFieldGraduate">Honor:</label>
                                    <div class="col-xs-9">
                                        <input id="honorFieldGraduate" class="form-control" type="text" name="GraduateHonor" placeholder="Honor" />
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
    //Elementary education
    function profileFormElementary(employeeElementary){
    if ((employeeElementary.elementarySchoolName.value == "") &&
        (employeeElementary.elementarySchoolAddress.value == "") &&
        (employeeElementary.elementaryGraduateYear.value == "") &&
        (employeeElementary.elementaryHighestLevel.value == "") &&
        (employeeElementary.elementaryHonor.value == "") &&
        (employeeElementary.elementaryInclusiveDate.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty elementary form.");
        return (false);
    }
    return true;
    }
    
    $(document).ready(function(){
        $(document).on('submit', '#EmployeeEducation', function(){
            if (profileFormElementary(EmployeeEducation)){
                var data = $('#EmployeeEducation').serialize();
                    
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveElementary.php',
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
    
    //Secondary education
    function profileFormSecondary(employeeSecondary){
    if ((employeeSecondary.secondarySchoolName.value == "") &&
        (employeeSecondary.secondarySchoolAddress.value == "") &&
        (employeeSecondary.secondaryGraduateYear.value == "") &&
        (employeeSecondary.secondaryHighestLevel.value == "") &&
        (employeeSecondary.secondaryHonor.value == "") &&
        (employeeSecondary.secondaryInclusiveDate.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty secondary form.");
        return (false);
    }
    return true;
    }
    
    $(document).ready(function(){
        $(document).on('submit', '#EmployeeEducation', function(){
            if (profileFormSecondary(EmployeeEducation)){
                var data = $('#EmployeeEducation').serialize();
                    
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveSecondary.php',
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
    
    //Vocation/Trade Education
    function profileAddVocation(employeeAddVocation){
    if (((employeeAddVocation.HiddenEmployeeID.value == "") ||
         (employeeAddVocation.HiddenEmployeeID.value != "")) &&
        (employeeAddVocation.VocationSchoolName.value == "") &&
        (employeeAddVocation.VocationAddress.value == "") &&
        (employeeAddVocation.VocationDegree.value == "") &&
        (employeeAddVocation.VocationYear.value == "") &&
        (employeeAddVocation.VocationHighestLevel.value == "") &&
        (employeeAddVocation.VocationInclusiveDates.value == "") &&
        (employeeAddVocation.VocationHonor.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeAddVocation.HiddenEmployeeID.value == "") {
        $('#addVocationalModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteVocation(id) {
        var ID = document.getElementsByName('vocationID')[id].value;
        document.getElementById('deleteIDVocation').value = ID;
    }
    
    function editVocation(id) {
        var ID = document.getElementsByName('vocationID')[id].value;
        var schoolName = document.getElementsByName('vocationSchoolName')[id].value;
        var schoolAddress = document.getElementsByName('vocationSchoolAddress')[id].value;
        var schoolDegree = document.getElementsByName('vocationSchoolDegree')[id].value;
        var graduateYear = document.getElementsByName('vocationGraduateYear')[id].value;
        var highestLevel = document.getElementsByName('vocationHighestLevel')[id].value;
        var inclusiveDate = document.getElementsByName('vocationInclusiveDate')[id].value;
        var honor = document.getElementsByName('vocationHonor')[id].value;
        document.getElementById('vocationEmployeeID').value = ID;
        document.getElementById('schoolNameFieldVocation').value = schoolName;
        document.getElementById('addressFieldVocation').value = schoolAddress;
        document.getElementById('degreeFieldVocation').value = schoolDegree;
        document.getElementById('yearGraduatedFieldVocation').value = graduateYear;
        document.getElementById('highestLevelFieldVocation').value = highestLevel;
        document.getElementById('inclusiveDatesFieldVocation').value = inclusiveDate;
        document.getElementById('honorFieldVocation').value = honor;
    }
    
    $(document).ready(function() {
        //save vocation info from modal
        $(document).on('submit', '#EmployeeAddVocation', function(){
            if (profileAddVocation(EmployeeAddVocation)){
                
                var data = $('#EmployeeAddVocation').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveVocation.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addVocationalModal').modal('hide');

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
        
        //delete vocation info from modal
        $(document).on('submit', '#EmployeeDeleteVocation', function(){
                var data = $('#EmployeeDeleteVocation').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteVocation.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteVocationalModal').modal('hide');
                        
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
        
        //edit vocation info from modal
        $(document).on('submit', '#EmployeeEditVocation', function(){
                var data = $('#EmployeeEditVocation').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditVocation.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editVocationalModal').modal('hide');
                            
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
    
    //College Education
    function profileAddCollege(employeeAddCollege){
    if (((employeeAddCollege.HiddenEmployeeID.value == "") ||
         (employeeAddCollege.HiddenEmployeeID.value != "")) &&
        (employeeAddCollege.CollegeSchoolName.value == "") &&
        (employeeAddCollege.CollegeAddress.value == "") &&
        (employeeAddCollege.CollegeDegree.value == "") &&
        (employeeAddCollege.CollegeYear.value == "") &&
        (employeeAddCollege.CollegeHighestLevel.value == "") &&
        (employeeAddCollege.CollegeInclusiveDates.value == "") &&
        (employeeAddCollege.CollegeHonor.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeAddCollege.HiddenEmployeeID.value == "") {
        $('#addCollegeModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteCollege(id) {
        var ID = document.getElementsByName('collegeID')[id].value;
        document.getElementById('deleteIDCollege').value = ID;
    }
    
    function editCollege(id) {
        var ID = document.getElementsByName('collegeID')[id].value;
        var schoolName = document.getElementsByName('collegeSchoolName')[id].value;
        var schoolAddress = document.getElementsByName('collegeSchoolAddress')[id].value;
        var schoolDegree = document.getElementsByName('collegeSchoolDegree')[id].value;
        var graduateYear = document.getElementsByName('collegeGraduateYear')[id].value;
        var highestLevel = document.getElementsByName('collegeHighestLevel')[id].value;
        var inclusiveDate = document.getElementsByName('collegeInclusiveDate')[id].value;
        var honor = document.getElementsByName('collegeHonor')[id].value;
        document.getElementById('collegeEmployeeID').value = ID;
        document.getElementById('schoolNameFieldCollege').value = schoolName;
        document.getElementById('addressFieldCollege').value = schoolAddress;
        document.getElementById('degreeFieldCollege').value = schoolDegree;
        document.getElementById('yearGraduatedFieldCollege').value = graduateYear;
        document.getElementById('highestLevelFieldCollege').value = highestLevel;
        document.getElementById('inclusiveDatesFieldCollege').value = inclusiveDate;
        document.getElementById('honorFieldCollege').value = honor;
    }
    
    $(document).ready(function() {
        //save College info from modal
        $(document).on('submit', '#EmployeeAddCollege', function(){
            if (profileAddCollege(EmployeeAddCollege)){
                
                var data = $('#EmployeeAddCollege').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveCollege.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addCollegeModal').modal('hide');

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
        
        //delete College info from modal
        $(document).on('submit', '#EmployeeDeleteCollege', function(){
                var data = $('#EmployeeDeleteCollege').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteCollege.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteCollegeModal').modal('hide');
                            
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
        
        //edit College info from modal
        $(document).on('submit', '#EmployeeEditCollege', function(){
                var data = $('#EmployeeEditCollege').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditCollege.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editCollegeModal').modal('hide');
                            
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
    
    //Graduate Education
    function profileAddGraduate(employeeAddGraduate){
    if (((employeeAddGraduate.HiddenEmployeeID.value == "") ||
         (employeeAddGraduate.HiddenEmployeeID.value != "")) &&
        (employeeAddGraduate.GraduateSchoolName.value == "") &&
        (employeeAddGraduate.GraduateAddress.value == "") &&
        (employeeAddGraduate.GraduateDegree.value == "") &&
        (employeeAddGraduate.GraduateYear.value == "") &&
        (employeeAddGraduate.GraduateHighestLevel.value == "") &&
        (employeeAddGraduate.GraduateInclusiveDates.value == "") &&
        (employeeAddGraduate.GraduateHonor.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeAddGraduate.HiddenEmployeeID.value == "") {
        $('#addGraduateModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteGraduate(id) {
        var ID = document.getElementsByName('graduateID')[id].value;
        document.getElementById('deleteIDGraduate').value = ID;
    }
    
    function editGraduate(id) {
        var ID = document.getElementsByName('graduateID')[id].value;
        var schoolName = document.getElementsByName('graduateSchoolName')[id].value;
        var schoolAddress = document.getElementsByName('graduateSchoolAddress')[id].value;
        var schoolDegree = document.getElementsByName('graduateSchoolDegree')[id].value;
        var graduateYear = document.getElementsByName('graduateGraduateYear')[id].value;
        var highestLevel = document.getElementsByName('graduateHighestLevel')[id].value;
        var inclusiveDate = document.getElementsByName('graduateInclusiveDate')[id].value;
        var honor = document.getElementsByName('graduateHonor')[id].value;
        document.getElementById('graduateEmployeeID').value = ID;
        document.getElementById('schoolNameFieldGraduate').value = schoolName;
        document.getElementById('addressFieldGraduate').value = schoolAddress;
        document.getElementById('degreeFieldGraduate').value = schoolDegree;
        document.getElementById('yearGraduatedFieldGraduate').value = graduateYear;
        document.getElementById('highestLevelFieldGraduate').value = highestLevel;
        document.getElementById('inclusiveDatesFieldGraduate').value = inclusiveDate;
        document.getElementById('honorFieldGraduate').value = honor;
    }
    
    $(document).ready(function() {
        //save graduate info from modal
        $(document).on('submit', '#EmployeeAddGraduate', function(){
            if (profileAddGraduate(EmployeeAddGraduate)){
                
                var data = $('#EmployeeAddGraduate').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveGraduate.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addGraduateModal').modal('hide');

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
        
        //delete graduate info from modal
        $(document).on('submit', '#EmployeeDeleteGraduate', function(){
                var data = $('#EmployeeDeleteGraduate').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteGraduate.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteGraduateModal').modal('hide');
                        
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
        
        //edit graduate info from modal
        $(document).on('submit', '#EmployeeEditGraduate', function(){
                var data = $('#EmployeeEditGraduate').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditGraduate.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editGraduateModal').modal('hide');
                            
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
    </script>
    
    <?php
        //mysqli_close($connection);
    ?>
    
</body>

</html>
