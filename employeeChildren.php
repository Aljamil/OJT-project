
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
    
        <!--input type="hidden" id="HiddenEmployeeID" value="<?php echo $_GET["HiddenEmployeeID"]; ?>"-->
    
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
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                Children
                                                            </button>
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
                                            Child Data Not Saved. Create and Save Employee Personal Information First! Go to <a class="alert-link" href="../ojt/EmployeeProfile.php">Personal Information</a> page.
                                        </div>
                                        <div id="savedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Child Data Saved!
                                        </div>
                                        <div id="deletedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                                            <button class="close" data-dismiss="alert" type="button">x</button>
                                            Child Data Successfully Deleted!
                                        </div>
                                    </div>
                                </div>
                                <div id="EmployeeChildrenDiv">
                                    <!--form id="EmployeeChildren" method="POST" enctype="multipart/form-data" -->
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <label>Children</label>
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <fieldset>
                                                        <table class="table table-striped scroll-table">
                                                            <thead>
                                                                <tr>
                                                                    <td>
                                                                        <button class="btn btn-primary btn-xs" type="button" data-target="#addChildModal" data-toggle="modal">
                                                                            Add Child
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        Child Name
                                                                    </th>
                                                                    <th>
                                                                        Birth Date
                                                                    </th>
                                                                    <th>
                                                                        Action
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="childTable">
                                                                <?php
                                                                    require('../ojt/employeeGetChild.php');
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
                                                        <button class="btn btn-primary btn-sm" type="button" data-target="#addChildModal" data-toggle="modal">
                                                            Add Child
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.panel-footer -->
                                        </div>
                                        <!-- panel panel-primary -->
                                    <!--/form-->
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
        <div class="modal fade" id="editChildModal" tabindex="-1" role="dialog" aria-labelledby="editChildModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeEditChildren" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Child Data</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" id="editEmployeeID" name="HiddenEmployeeID" value="">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editChildNameField">Child Name:</label>
                                    <div class="col-xs-9">
                                        <input id="editChildNameField" class="form-control" type="text" name="ChildName" placeholder="Child Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="editBirthDateField">Birth Date:</label>
                                    <div class="col-xs-9">
                                        <input id="editBirthDateField" class="form-control" type="text" name="ChildBirth" placeholder="YYYY/MM/DD" />
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
        
        <div class="modal fade" id="deleteChildModal" tabindex="-1" role="dialog" aria-labelledby="deleteChildModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteChildren" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Child</h4>
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
        
        <div class="modal fade" id="addChildModal" tabindex="-1" role="dialog" aria-labelledby="addChildModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeAddChildren" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Add Child</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <input type="hidden" name="HiddenEmployeeID" value="<?php echo $_GET['HiddenEmployeeID']; ?>">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="childNameField">Child Name:</label>
                                    <div class="col-xs-9">
                                        <input id="childNameField" class="form-control" type="text" name="ChildName" placeholder="Child Name" />
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-xs-3" for="birthDateField">Birth Date:</label>
                                    <div class="col-xs-9">
                                        <input id="birthDateField" class="form-control" type="text" name="ChildBirth" placeholder="YYYY/MM/DD" />
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
    function profileAddChild(employeeChildForm){
    if (((employeeChildForm.HiddenEmployeeID.value == "") ||
         (employeeChildForm.HiddenEmployeeID.value != "")) &&
        (employeeChildForm.ChildName.value == "") &&
        (employeeChildForm.ChildBirth.value == "")
        ){
        $(this).scrollTop(0);
        alert("You are not allowed to submit an empty form.");
        return (false);
    } else if (employeeChildForm.HiddenEmployeeID.value == "") {
        $('#addChildModal').modal('hide');
        $(this).scrollTop(0);
        $('div#saveFailed').fadeIn(400).delay(4000).slideUp(400);
        return (false);
    }
    return true;
    }
    
    function deleteChild(id) {
        var ID = document.getElementsByName('ID')[id].value;
        document.getElementById('deleteID').value = ID;
    }
    
    function editChild(id) {
        var ID = document.getElementsByName('ID')[id].value;
        var childName = document.getElementsByName('employeeChildName')[id].value;
        var childBirth = document.getElementsByName('employeeChildBirth')[id].value;
        document.getElementById('editEmployeeID').value = ID;
        document.getElementById('editChildNameField').value = childName;
        document.getElementById('editBirthDateField').value = childBirth;
    }
    
    $(document).ready(function() {
        //save child info from modal
        $(document).on('submit', '#EmployeeAddChildren', function(){
            if (profileAddChild(EmployeeAddChildren)){
                
                var data = $('#EmployeeAddChildren').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeSaveChild.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#addChildModal').modal('hide');

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
        
        //delete child info from modal
        $(document).on('submit', '#EmployeeDeleteChildren', function(){
                var data = $('#EmployeeDeleteChildren').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteChild.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteChildModal').modal('hide');
                        
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
        
        //edit child info from modal
        $(document).on('submit', '#EmployeeEditChildren', function(){
                var data = $('#EmployeeEditChildren').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeEditChild.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#editChildModal').modal('hide');
                            
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
    
    $(function() {
        $('#birthDateField').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-150:+0"
        });
        
        $('#editBirthDateField').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: "-150:+0"
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
    
</body>

</html>
