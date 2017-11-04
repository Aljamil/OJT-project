
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
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                Family Background
                                                            </button>
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
                                            Create and Save Employee Personal Information First! Go to <a class="alert-link" href="../ojt/EmployeeProfile.php">Personal Information</a> page.
                                        </div>
                                        <div id="savedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Employee Family Background Saved!
                                        </div>
                                    </div>
                                </div>
                                <div id="EmployeeBackgroundDiv">
                                    <form id="EmployeeBackground" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" id="hiddenEmployeeID" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <label>Family Background</label>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <table class="table" style="width: 100%;">
                                                                    <label>Father</label>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Surname:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="FatherSurname" placeholder="Surname" value="<?php echo $row['FatherLastname']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Firstname:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="FatherFirstname" placeholder="Firstname" value="<?php echo $row['FatherFirstname']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Middlename:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="FatherMiddlename" placeholder="Middlename" value="<?php echo $row['FatherMiddlename']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <table class="table" style="width: 100%;" border="0">
                                                                    <label>Mother (Maiden Name)</label>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Surname:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="MotherSurname" placeholder="Surname" value="<?php echo $row['MotherLastname']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Firstname:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="MotherFirstname" placeholder="Firstname" value="<?php echo $row['MotherFirstname']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Middlename:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="MotherMiddlename" placeholder="Middlename" value="<?php echo $row['MotherMiddlename']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <fieldset>
                                                            <div class="table-responsive">
                                                                <table class="table" style="width: 100%;" border="0">
                                                                    <label>Spouse</label>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Surname:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseSurname" placeholder="Surname" value="<?php echo $row['SpouseLastname']; ?>" />
                                                                        </td>
                                                                        <td style="width: 15%;">
                                                                            Employer Name:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseEmployerName" placeholder="Employer Name" value="<?php echo $row['SpouseEmployer']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Firstname:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseFirstname" placeholder="Firstname" value="<?php echo $row['SpouseFirstname']; ?>" />
                                                                        </td>
                                                                        <td style="width: 15%;">
                                                                            Address:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseAddress" placeholder="Address" value="<?php echo $row['SpouseAddress']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Middlename:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseMiddlename" placeholder="Middlename" value="<?php echo $row['SpouseMiddlename']; ?>" />
                                                                        </td>
                                                                        <td style="width: 15%;">
                                                                            Telephone No.:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseTelephoneNo" placeholder="Telephone No." value="<?php echo $row['SpouseTelephone']; ?>" />
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width: 15%;">
                                                                            Occupation:
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control input-sm" name="SpouseOccupation" placeholder="Occupation" value="<?php echo $row['SpouseWork']; ?>" />
                                                                        </td>
                                                                        <td>
                                                                            &nbsp;
                                                                        </td>
                                                                        <td>
                                                                            &nbsp;
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </fieldset>
                                                    </div>
                                                </div>
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
                                <!-- /.EmployeeBackgroundDiv -->
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    function profileFormValidator(employeeBackgroundForm){
    if ((employeeBackgroundForm.FatherSurname.value == "") &&
        (employeeBackgroundForm.FatherFirstname.value == "") &&
        (employeeBackgroundForm.FatherMiddlename.value == "") &&
        (employeeBackgroundForm.MotherSurname.value == "") &&
        (employeeBackgroundForm.MotherFirstname.value == "") &&
        (employeeBackgroundForm.MotherMiddlename.value == "") &&
        (employeeBackgroundForm.SpouseSurname.value == "") &&
        (employeeBackgroundForm.SpouseEmployerName.value == "") &&
        (employeeBackgroundForm.SpouseFirstname.value == "") &&
        (employeeBackgroundForm.SpouseAddress.value == "") &&
        (employeeBackgroundForm.SpouseMiddlename.value == "") &&
        (employeeBackgroundForm.SpouseTelephoneNo.value == "") &&
        (employeeBackgroundForm.SpouseOccupation.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    }
    return true;
    }
    
    $(document).ready(function(){
        $(document).on('submit', '#EmployeeBackground', function(){
            if (profileFormValidator(EmployeeBackground)){
                var data = $('#EmployeeBackground').serialize();
                    
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveBackground.php',
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
    </script>
    
    <?php
        //mysqli_close($connection);
    ?>
    
</body>

</html>
