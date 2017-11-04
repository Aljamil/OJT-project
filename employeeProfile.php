
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
                                                        <img id="employeePic" src="../ojt/img/default.png" width="80%" height="80%" />
                                                        <div class="caption">
                                                            <center>
                                                                <form id="EmployeeChangePic" method="POST" enctype="multipart/form-data">
                                                                <button type="submit" class="btn btn-primary btn-md">Change
                                                                </button>
                                                                <button class="btn btn-danger btn-md" type="button" data-target="#deletePicModal" data-toggle="modal">
                                                                    Delete
                                                                </button>
                                                                </form>
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
                                                            <button class="btn btn-primary btn-block">
                                                                Personal Information
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeBackground.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Family Background
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeChildren.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Children
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeEducation.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Education
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeReference.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Reference
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeEligibility.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Eligibility
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeWorkExperience.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Work Experience
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeVoluntaryWork.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Voluntary Work
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeTraining.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Training
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeOther.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Other
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeEmployment.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Employment
                                                            </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <form action="../ojt/employeeReportTo.php" method="GET">
                                                            <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="">
                                                            <button type="submit" class="btn btn-primary btn-outline btn-block">
                                                                Report-To
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
                                            Employee ID Is Already In Use!
                                        </div>
                                        <div id="savedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Employee Profile Saved!
                                        </div>
                                        <div id="changePicture" class="alert alert-danger alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Create and Save Employee Personal Information First! Go to <a class="alert-link" href="../ojt/EmployeeProfile.php">Personal Information</a> page.
                                        </div>
                                        <div id="deletedPicture" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Employee Picture Deleted!
                                        </div>
                                        <div id="deletePictureFailed" class="alert alert-danger alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            No Employee Picture Has Been Found!
                                        </div>
                                    </div>
                                </div>
                                <div id="EmployeeProfileDiv">
                                    <form id="EmployeeProfile" method="POST" enctype="multipart/form-data">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <label>Personal Information</label>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <label>Personal Profile</label>
                                                            <br/>
                                                            <p>
                                                                <label>*</label> <span class="label label-danger">Indicates Required Fields</span>
                                                            </p>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td>
                                                                            ID No. *:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" id="inputEmployeeID" class="form-control input-sm" name="EmployeeID" placeholder="Employee ID">
                                                                        </td>
                                                                        <td>
                                                                            Cellphone No. *:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="CellphoneNo" placeholder="Cellphone No.">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Surname *:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="LastName" placeholder="Surname">
                                                                        </td>
                                                                        <td>
                                                                            Email Address:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="EmailAddress" placeholder="Email Address">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Firstname *:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="FirstName" placeholder="Firstname">
                                                                        </td>
                                                                        <td>
                                                                            Citizenship:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="Citizenship" placeholder="Citizenship">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Middlename:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="MiddleName" placeholder="Middlename">
                                                                        </td>
                                                                        <td>
                                                                            Blood Type:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <select name="BloodType" class="form-control input-sm">
                                                                                <option value=""></option>
                                                                                <option value="O">O</option>
                                                                                <option value="A">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="AB">AB</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Ext. Name:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="ExtName" placeholder="Ext. Name">
                                                                        </td>
                                                                        <td>
                                                                            No. of Dependent:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="NoOfDependent" placeholder="No. of Dependent">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Date of Birth *:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input id="DateOfBirth" type="text" class="form-control input-sm" name="BirthDate" placeholder="YYYY/MM/DD">
                                                                        </td>
                                                                        <td>
                                                                            Place of Birth:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="BirthPlace" placeholder="Place of Birth">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Gender:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <select name="Gender" class="form-control input-sm">
                                                                                <option value=""></option>
                                                                                <option value="Male">Male</option>
                                                                                <option value="Female">Female</option>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            Height (m):
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="Height" placeholder="0.00">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Civil Status:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <select name="MaritalStatus" class="form-control input-sm">
                                                                                <option value=""></option>
                                                                                <option value="Single">Single</option>
                                                                                <option value="Married">Married</option>
                                                                                <option value="Widowed">Widowed</option>
                                                                                <option value="Annulled">Annulled</option>
                                                                                <option value="Separated">Separated</option>
                                                                                <option value="Others">Others</option>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            Weight (kg):
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="Weight" placeholder="0.00">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <label>Address</label>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td>
                                                                            Residential Address:
                                                                        </td>
                                                                        <td colspan="5">
                                                                            <input type="text" class="form-control input-sm" name="Address1" placeholder="Residential Address">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Zip Code:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="ZipCode1" placeholder="Zip Code">
                                                                        </td>
                                                                        <td>
                                                                            Telephone No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="ContactNo1" placeholder="Telephone No.">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Permanent Address:
                                                                        </td>
                                                                        <td colspan="5">
                                                                            <input type="text" class="form-control input-sm" name="Address2" placeholder="Permanent Address">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            Zip Code:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="ZipCode2" placeholder="Zip Code">
                                                                        </td>
                                                                        <td>
                                                                            Telephone No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="ContactNo2" placeholder="Telephone No.">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <label>Benefits</label>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td>
                                                                            SSS No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="SSSNo" placeholder="SSS No.">
                                                                        </td>
                                                                        <td>
                                                                            Philhealth No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="PhilhealthNo" placeholder="Philhealth No.">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            GSIS No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="GSISNo" placeholder="GSIS No.">
                                                                        </td>
                                                                        <td>
                                                                            HDMF No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="PagibigNo" placeholder="HDMF No.">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            TIN No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="TINNo" placeholder="TIN No.">
                                                                        </td>
                                                                        <td>
                                                                            Agency No.:
                                                                        </td>
                                                                        <td colspan="2">
                                                                            <input type="text" class="form-control input-sm" name="AgencyNo" placeholder="Agency No.">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <label>In Case of Emergency:</label>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Name:
                                                                        </td>
                                                                        <td style="width: 85%;">
                                                                            <input class="form-control input-sm" type="text" name="EmergencyName" placeholder="Name">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Address:
                                                                        </td>
                                                                        <td style="width: 85%;">
                                                                            <input class="form-control input-sm" type="text" name="EmergencyAddress" placeholder="Address">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Contact No.:
                                                                        </td>
                                                                        <td style="width: 85%;">
                                                                            <input class="form-control input-sm" type="text" name="EmergencyContactNo" placeholder="Contact No.">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Relationship:
                                                                        </td>
                                                                        <td style="width: 85%;">
                                                                            <input class="form-control input-sm" type="text" name="EmergencyRelationship" placeholder="Relationship">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
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
                                        <!-- /.panel panel-primary -->
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
		
		<!-- Modal -->
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

        <!-- Modal -->
        <div class="modal fade" id="deletePicModal" tabindex="-1" role="dialog" aria-labelledby="deletePicModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeletePic" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Picture</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p>
                                            Are you sure you want to delete the employee's picture?
                                        </p>
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="hidden" id="hiddenEmployeeIDDeletePic" name="HiddenEmployeeID" value="">
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
    function deletePicCheck(){
    if(document.getElementById('hiddenEmployeeIDDeletePic').value == "") {
        alert("Default Employee Photo Cannot be Deleted.");
    }
    return true;
    }
    
    function profileFormValidator(employeeProfileForm){
    if (employeeProfileForm.EmployeeID.value == "") {
        alert("Please fill up required fields.");
        employeeProfileForm.EmployeeID.focus();
        return (false);
    }
    if (employeeProfileForm.LastName.value == "") {
        alert("Please fill up required fields.");
        employeeProfileForm.LastName.focus();
        return (false);
    }
    if (employeeProfileForm.FirstName.value == "") {
        alert("Please fill up required fields.");
        employeeProfileForm.FirstName.focus();
        return (false);
    }
    if (employeeProfileForm.BirthDate.value == "") {
        alert("Please fill up required fields.");
        employeeProfileForm.BirthDate.focus();
        return (false);
    }
    if (employeeProfileForm.CellphoneNo.value == "") {
        alert("Please fill up required fields.");
        employeeProfileForm.CellphoneNo.focus();
        return (false);
    }
    
    return true;
    }
    
    $(document).ready(function(){
        $(document).on('submit', '#EmployeeProfile', function(){
            if (profileFormValidator(EmployeeProfile)){
                var hiddenEmployeeList = document.getElementsByName('HiddenEmployeeID');
                var hiddenEmployeeLength = hiddenEmployeeList.length;
                var counter;
                for (counter=0;counter<hiddenEmployeeLength;counter++) {
                    document.getElementsByName('HiddenEmployeeID')[counter].value = document.getElementById('inputEmployeeID').value;
                }
            
                var data = $('#EmployeeProfile').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveProfile.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#savedSuccessfully').fadeIn(400).delay(4000).slideUp(400);
                                
                                setTimeout(function(){
                                    var empID = document.getElementById('inputEmployeeID').value;
                                    var url = '../ojt/employeeEditProfile.php?HiddenEmployeeID='+empID;
                                    window.location.href = url;
                                }, 1000);
                            } else {
                                $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
                            }
                            
                            /*var hiddenEmployeeList = document.getElementsByName('HiddenEmployeeID');
                            var hiddenEmployeeLength = hiddenEmployeeList.length;
                            var counter;
                            for (counter=0;counter<hiddenEmployeeLength;counter++) {
                                document.getElementsByName('HiddenEmployeeID')[counter].value = document.getElementById('inputEmployeeID').value;
                            }*/
                        });
                    }
                });
                return false;
            }
            return false;
        });
        
        //Delete Employee Picture
        $(document).on('submit', '#EmployeeDeletePic', function(){
            if (deletePicCheck()){
                var data = $('#EmployeeDeletePic').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeletePic.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deletePicModal').modal('hide');
                        
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#deletedPicture').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                $('div#deletePictureFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            /*setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);*/
                        });
                    }
                });
                return false;
            }
            return false;
        });
        
        //Add Employee Picture
        $(document).on('submit', '#EmployeeChangePic', function(){
            //if (profileFormValidator(EmployeeChangePic)){
                var data = $('#EmployeeChangePic').serialize();
                    
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSavePic.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $(this).scrollTop(0);
                            $('div#changePicture').fadeIn(400).delay(4000).slideUp(400);
                        });
                    }
                });
                return false;
            //}
            //return false;
        });
    });
    
    $(function() {
        $('#DateOfBirth').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-150:+0"
        });
    });
    </script>
    
    <?php
        mysqli_close($connection);
    ?>
    
</body>

</html>
