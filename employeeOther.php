
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
		//require('../ojt/connectDB.php');			
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
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                Other
                                                            </button>
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
                                            Miscellaneous Data Not Saved. Create and Save Employee Personal Information First! Go to <a class="alert-link" href="../ojt/EmployeeProfile.php">Personal Information</a> page.
                                        </div>
                                        <div id="savedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Miscellaneous Data Saved!
                                        </div>
                                        <div id="deletedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Miscellaneous Data Successfully Deleted!
                                        </div>
                                    </div>
                                </div>
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <label>Other</label>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <fieldset>
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <td colspan="4">
                                                                        <button class="btn btn-primary btn-xs" type="button" data-target="#addOtherModal" data-toggle="modal">
                                                                            Add Data
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Special Skills/Hobbies
                                                                    </th>
                                                                    <th>
                                                                        Recognition
                                                                    </th>
                                                                    <th>
                                                                        Organization
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="otherTable">
                                                                <?php
                                                                    require('../ojt/employeeGetOther.php');
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </fieldset>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.panel-body -->
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <a class="btn btn-danger btn-outline btn-sm" href="../ojt/employeeList.php">
                                                            Cancel
                                                        </a>
                                                        <button class="btn btn-primary btn-sm" type="button" data-target="#addOtherModal" data-toggle="modal">
                                                            Add Data
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.panel-footer -->
                                        </div>
                                        <!-- panel panel-primary -->
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
        <div class="modal fade" id="addOtherModal" tabindex="-1" role="dialog" aria-labelledby="addOtherModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddOther" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Data</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="otherSkillHobbyField">Skill/Hobby:</label>
                                    <div class="col-xs-9">
                                        <input id="otherSkillHobbyField" class="form-control" type="text" name="OtherSkillHobby" placeholder="Skill/Hobby" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="otherRecognitionField">Recognition:</label>
                                    <div class="col-xs-9">
                                        <input id="otherRecognitionField" class="form-control" type="text" name="OtherRecognition" placeholder="Recognition" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="otherOrganizationField">Organization:</label>
                                    <div class="col-xs-9">
                                        <input id="otherOrganizationField" class="form-control" type="text" name="OtherOrganization" placeholder="Organization" />
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
        
        <div class="modal fade" id="deleteOtherModal" tabindex="-1" role="dialog" aria-labelledby="deleteOtherModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteOther" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
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
                                    <input type="hidden" id="deleteID" name="deleteID" value="">
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
        
        <div class="modal fade" id="editOtherModal" tabindex="-1" role="dialog" aria-labelledby="editOtherModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditOther" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="editEmployeeID" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editOtherSkillHobbyField">Skill/Hobby:</label>
                                    <div class="col-xs-9">
                                        <input id="editOtherSkillHobbyField" class="form-control" type="text" name="OtherSkillHobby" placeholder="Skill/Hobby" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editOtherRecognitionField">Recognition:</label>
                                    <div class="col-xs-9">
                                        <input id="editOtherRecognitionField" class="form-control" type="text" name="OtherRecognition" placeholder="Recognition" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editOtherOrganizationField">Organization:</label>
                                    <div class="col-xs-9">
                                        <input id="editOtherOrganizationField" class="form-control" type="text" name="OtherOrganization" placeholder="Organization" />
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    function profileAddOther(employeeOtherForm){
    if (((employeeOtherForm.HiddenEmployeeID.value == "") ||
         (employeeOtherForm.HiddenEmployeeID.value != "")) &&
        (employeeOtherForm.OtherSkillHobby.value == "") &&
        (employeeOtherForm.OtherRecognition.value == "") &&
        (employeeOtherForm.OtherOrganization.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeOtherForm.HiddenEmployeeID.value == "") {
        $('#addOtherModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteOther(id) {
        var ID = document.getElementsByName('otherID')[id].value;
        document.getElementById('deleteID').value = ID;
    }
    
    function editOther(id) {
        var ID = document.getElementsByName('otherID')[id].value;
        var otherSkilHobby = document.getElementsByName('employeeOtherSkillHobby')[id].value;
        var otherRecognition = document.getElementsByName('employeeOtherRecognition')[id].value;
        var otherOrganization = document.getElementsByName('employeeOtherOrganization')[id].value;
        document.getElementById('editEmployeeID').value = ID;
        document.getElementById('editOtherSkillHobbyField').value = otherSkilHobby;
        document.getElementById('editOtherRecognitionField').value = otherRecognition;
        document.getElementById('editOtherOrganizationField').value = otherOrganization;
    }
    
    $(document).ready(function() {
        //save Other info from modal
        $(document).on('submit', '#EmployeeAddOther', function(){
            if (profileAddOther(EmployeeAddOther)){
                
                var data = $('#EmployeeAddOther').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveOther.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addOtherModal').modal('hide');

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
        
        //delete Other info from modal
        $(document).on('submit', '#EmployeeDeleteOther', function(){
                var data = $('#EmployeeDeleteOther').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteOther.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteOtherModal').modal('hide');
                        
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
        
        //edit Other info from modal
        $(document).on('submit', '#EmployeeEditOther', function(){
                var data = $('#EmployeeEditOther').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditOther.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editOtherModal').modal('hide');
                            
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
