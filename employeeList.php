
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
    
</head>

<body>

    <div id="wrapper">

        <?php
            require('../ojt/navigation.php');
        ?>

        <div id="page-wrapper" style="margin: 0px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <ol class="breadcrumb">
                <li>
                    <a class="btn btn-primary btn-xs" href="../ojt/home.php">Dashboard</a>
                </li>
                <li class="active">
                    Employee List
                </li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <div id="deletedSuccessfully" class="alert alert-success alert-dismissable" style="display: none;">
                        <button class="close" data-dismiss="alert" type="button">x</button>
                        Employee Data Successfully Deleted!
                    </div>
                    <div id="deleteFailed" class="alert alert-danger alert-dismissable" style="display: none;">
                        <button class="close" data-dismiss="alert" type="button">x</button>
                        Employee Data Not Deleted!
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <label>List of Employees:</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-12">
                                <form role="form" action="#" method="POST">
                                <fieldset>
                                    <div class="table-responsive">
                                        <table class="responsive">
                                            <tr>
                                                <td>
                                                    <a class="btn btn-primary btn-md" href="../ojt/employeeProfile.php">Add Employee</a>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button class="btn btn-primary btn-md" type="button" onClick="clearFilter();">
                                                        Clear Filter
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <br/>
                                    <div class="dataTable_wrapper">
                                        <div id="dataTables-employee_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table id="dataTables-employee" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-employee_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 50px; text-align: center;" aria-label="ID: activate to sort column descending" aria-sort="ascending">ID</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 137px; text-align: center;" aria-label="Last Name: activate to sort column ascending">Last Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 150px; text-align: center;" aria-label="First Name: activate to sort column ascending">First Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 155px;" aria-label="Employment Status: activate to sort column ascending">Status</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 110px; text-align: center;" aria-label="Department: activate to sort column ascending">Department</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 110px; text-align: center;" aria-label="Position: activate to sort column ascending">Position</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 110px; text-align: center;" aria-label="Active?: activate to sort column ascending">Active?</th>
                                                                <th class="sorting" tabindex="0" aria-controls="dataTables-employee" rowspan="1" colspan="1" style="width: 90px; text-align: center;" aria-label="Action: activate to sort column ascending">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th style="width: 90px; text-align: center;">ID</th>
                                                                <th style="width: 90px; text-align: center;">Last Name</th>
                                                                <th style="width: 90px; text-align: center;">First Name</th>
                                                                <th style="width: 90px; text-align: center;">Status</th>
                                                                <th style="width: 90px; text-align: center;">Department</th>
                                                                <th style="width: 90px; text-align: center;">Position</th>
                                                                <th style="width: 90px; text-align: center;">Active?</th>
                                                                <th style="width: 90px; text-align: center;">Action</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody id="employeeTable">
                                                            <?php
                                                                require('../ojt/employeeGetList.php');
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.dataTables-employee_wrapper -->
                                    </div>
                                    <!-- /.dataTable_wrapper -->
                                </fieldset>
                                </form>
                            </div>
                            <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        
        <!-- Modal -->
        <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form id="EmployeeDeleteEmployee" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Delete Employee</h4>
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
                                    <input type="hidden" id="deleteIDEmployee" name="deleteID" value="">
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
    function clearFilter(){
        window.location.reload();
    }
    function editEmployee(id) {
        //var ID = document.getElementsByName('eID')[id].value;
        var url = '../ojt/employeeEditProfile.php?HiddenEmployeeID='+id;
        window.location.href = url;
    }
    
    function deleteEmployee(id) {
        //var ID = document.getElementsByName('eID')[id].value;
        document.getElementById('deleteIDEmployee').value = id;
    }
    
    $(document).ready(function() {        
        $('#dataTables-employee').DataTable( {
        initComplete: function () {
            this.api().columns([3,4,5,6]).every( function () {
                var column = this;
                var select = $('<select style="width:100%;"><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
    });
    
    $(document).ready(function() {
        //Delete Employee
        $(document).on('submit', '#EmployeeDeleteEmployee', function(){
                var data = $('#EmployeeDeleteEmployee').serialize();
                
                $.ajax({
                    type: 'POST',
                    url: '../ojt/employeeDeleteEmployee.php',
                    data: data,
                    async: true,
                    cache: false,
                    success: function(data){
                        $(document).ready(function(){
                            $('#deleteEmployeeModal').modal('hide');
                            
                            $(this).scrollTop(0);
                            
                            if ($.trim(data) == "Success"){
                                $('div#deletedSuccessfully').fadeIn(400).delay(2000).slideUp(400);
                            } else {
                                $('div#deleteFailed').fadeIn(400).delay(2000).slideUp(400);
                            }
                            
                            setTimeout(function(){
                                window.location.reload(true);
                            }, 3000);
                        });
                    }
                });
                return false;
        });
        
        //delete employeeFilterEmployee.php
    });
    </script>
    
    <?php
        //mysqli_close($connection);
    ?>
    
</body>

</html>
