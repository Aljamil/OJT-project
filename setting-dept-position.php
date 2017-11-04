<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		require('../ojt/header.php');			
	?>
	
</head>

<body style="background-color: #fff;">

    <div id="wrapper">

        <!-- Navigation -->
        <?php
			require('../ojt/navigation.php');			
		?>
        <div id="page-wrapper" style="margin: 0px;">
			<!-- Department/Position -->
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Department/Position</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">
													<ul class="nav nav-tabs">
														<li class="active"><a href="#department-tab" data-toggle="tab">Department</a>
														</li>
														<li><a href="#position-tab" data-toggle="tab">Position</a>
														</li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
														<div class="tab-pane fade in active" id="department-tab">
															<form role='form' method='post'>
																<div class='pull-left' style="padding: 15px 0 20px 0;">
																	<button data-toggle="modal" data-target="#addDeptModal" type="button" class="btn btn-primary">Add Department</button>
																</div>
																<div class="dataTable_wrapper" id="dept-body">
																	<table class="table table-striped table-bordered table-hover" id="dataTables-dept">
																		<thead>
																			<tr>
																				<th>Department Code</th>
																				<th>Description</th>
																				<th>Action</th>
																			</tr>
																		</thead>
																		<tbody >
																			<?php
																			$query = mysqli_query($connection, "select * from department");
																			
																			if ($query->num_rows > 0) {														
																				while($row = $query->fetch_assoc()) {
																					echo "<tr><td>" . $row['DepartmentCode'] . "</td>";
																					echo "<td>". $row['Description'] . "</td>";
																					
																					$tmp = $row['ID'];
																					echo <<< EOT
																						<td>
																							<button type="submit" class="btn-xs btn-danger" id="deleteD" name="deleteD" value='$tmp'>Delete</button>
															
																							<button type="submit" name="editD" id="editD" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
																						</td>
																						</tr>
EOT;
																					
																				}
																			}
																			?>
																		</tbody>
																		
																	</table>
																</div>
															</form>
															<!-- Department Delete Feature -->
															<?php
																if(isset($_POST['deleteD'])){
																	$tmp = $_POST['deleteD'];
																	echo <<< EOT
																		<script>
																			$( document ).ready(function() {
																				var tmp = '$tmp';
																				$('#deleteValueD').val(tmp);
																				$('#deleteConfirmationD').modal('show');
																			});
																		</script>
EOT;
																	
																}
															?>
															<!-- End of Department Delete Feature -->
															
															
															
															<!-- Department Edit Feature -->
															<?php
																if(isset($_POST['editD'])){
																	
																	echo "<script type='text/javascript'>
																			$(document).ready(function(){
																				$('#editDeptModal').modal('show');
																			});
																		</script>";
																	
																}
															?>
															<!-- End of Department Edit Feature -->
															
														</div>
														<div class="tab-pane fade" id="position-tab">
															<form role='form' method='post'>
																<div class='pull-left' style="padding: 15px 0 20px 0;">
																	<button data-toggle="modal" data-target="#addPositionModal" type="button" class="btn btn-primary">Add Position</button>
																</div>
																<div class="dataTable_wrapper" id="position-body">
																	<table class="table table-striped table-bordered table-hover" id="dataTables-position">
																		<thead>
																			<tr>
																				<th>Position Code</th>
																				<th>Description</th>
																				<th>Manager Level</th>
																				<th>Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
																			// SQL query to fetch information of registerd users and finds user match.
																			$query = mysqli_query($connection, "select * from position");
																			
																			if ($query->num_rows > 0) {														
																				// output data of each row
																				while($row = $query->fetch_assoc()) {
																					echo "<tr><td>" . $row['PositionCode'] . "</td>";
																					echo "<td>". $row['Description'] . "</td>";
																					if($row['IsManager'] == '1'){
																						echo "<td>True</td>";
																					}
																					else{
																						echo "<td>False</td>";
																					}
																					$tmp = $row['ID'];
																					echo <<< EOT
																						<td>
																							<button type="submit" class="btn-xs btn-danger" name="deleteP" id="deleteP" value='$tmp'>Delete</button>
															
																							<button type="submit" name="editP" id="editP" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
																						</td>
																						</tr>
EOT;
																				}
																			}
																			?>
																		</tbody>
																		
																	</table>
																</div>
															</form>
															<!-- Position Delete Feature -->
															<?php
																if(isset($_POST['deleteP'])){
																	$tmp = $_POST['deleteP'];
																	echo <<< EOT
																		<script>
																			$( document ).ready(function() {
																				var tmp = '$tmp';
																				$('#deleteValueP').val(tmp);
																				$('#deleteConfirmationP').modal('show');
																			});
																		</script>
EOT;
																	
																}
															?>
															<!-- End of Position Delete Feature -->
															
															<!-- Position Edit Feature -->
															<?php
																if(isset($_POST['editP'])){
																	
																	echo "<script type='text/javascript'>
																			$(document).ready(function(){
																				$('#editPositionModal').modal('show');
																			});
																		</script>";
																	
																}
															?>
															<!-- End of Position Edit Feature -->
														</div>
													</div>
												</div>
												<!-- /.panel-body -->
											</div>
											<!-- /.panel -->
									</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- End of Department/Position -->
		</div>
        <!-- /#page-wrapper -->
		
		<!-- Modal for Delete Confirmation Message (Department) -->
		<div id="deleteConfirmationD" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">
			<form method="post">
				<!-- Modal content-->
				<div class="modal-content" >
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Confirmation</h4>
				  </div>
				  <div class="modal-body" style="text-align: center;">
					<p>Are you sure?</p>
					<input name="deleteValueD" id="deleteValueD" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedD" id="deleteConfirmedD" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedD'])){
					$tmp = $_POST['deleteValueD'];
					$query = mysqli_query($connection, "Delete from department where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Department) -->
		
		<!-- Modal for Delete Confirmation Message (Position) -->
		<div id="deleteConfirmationP" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">
			<form method="post">
				<!-- Modal content-->
				<div class="modal-content" >
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Delete Confirmation</h4>
				  </div>
				  <div class="modal-body" style="text-align: center;">
					<p>Are you sure?</p>
					<input name="deleteValueP" id="deleteValueP" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedP" id="deleteConfirmedP" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedP'])){
					$tmp = $_POST['deleteValueP'];
					$query = mysqli_query($connection, "Delete from position where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Position) -->
		
		<!-- Modal for Add Department -->
		<div class="modal fade" id="addDeptModal" tabindex="-1" role="dialog" aria-labelledby="addDeptModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addDeptModalLabel">Department Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Department Code:</label>
											<div class="col-sm-8">
												<div class="col-sm-4" style='padding: 0;'>
												<input class='form-control' name='deptCode' id=''>	
												</div>
											</div>
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												
												<input class='form-control' name='deptDescription' id=''>
												
											</div>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddD" id="saveAddD" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
										
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddD'])){
								$code = $_POST['deptCode'];
								$description = $_POST['deptDescription'];
								
								$query = mysqli_query($connection, "INSERT INTO department (DepartmentCode, Description) VALUES('$code','$description')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Department -->
		<div class="modal fade" id="editDeptModal" tabindex="-1" role="dialog" aria-labelledby="editDeptModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editDeptModalLabel">Department Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
											if(isset($_POST['editD'])){
										
												$query = mysqli_query($connection, "select * from department where ID = '" . $_POST['editD'] . "'");
												$row = $query->fetch_assoc();
												echo "<input type='hidden' name='id' value='" . $_POST['editD'] . "'>";
											
											?>
											<label class="control-label col-sm-4">Department Code:</label>
											<div class="col-sm-8">
												<div class="col-sm-4" style='padding: 0;'>
													
													<input class='form-control' name='deptCode' value='<?php echo $row['DepartmentCode']; ?>'>
													
												</div>
												
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='deptDescription' value='<?php echo $row['Description']; ?>'>
												
											</div>
											<?php
											}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditD" id="saveEditD" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
													
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditD'])){
								$id = $_POST['id'];
								$code = $_POST['deptCode'];
								$description = $_POST['deptDescription'];
								
								$query = mysqli_query($connection, "Update department Set DepartmentCode = '$code', Description = '$description' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Add Position -->
		<div class="modal fade" id="addPositionModal" tabindex="-1" role="dialog" aria-labelledby="addPositionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addPositionModalLabel">Position Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Position Code:</label>
											<div class="col-sm-8">
												<div class="col-sm-4" style='padding: 0;'>
													<input class='form-control' name='positionCode' id=''>	
												</div>
											</div>
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='positionDescription' id=''>
											</div>
											<label class="control-label col-sm-4">Manager Level:</label>
											<div class="col-sm-8">
												<div class="col-sm-4" style='padding: 0;'>
													<select class="form-control" name="managerLevel">
														<option value='True'>True</option>
														<option value='False'>False</option>
													</select>
												</div>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddP" id="saveAddP" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddP'])){
								$code = $_POST['positionCode'];
								$description = $_POST['positionDescription'];
								$manager = ($_POST['managerLevel'] == 'True' ? '1' : '0');
								
								$query = mysqli_query($connection, "INSERT INTO position (PositionCode, Description, IsManager) VALUES('$code','$description', '$manager')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Position -->
		<div class="modal fade" id="editPositionModal" tabindex="-1" role="dialog" aria-labelledby="editPositionModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editPositionModalLabel">Position Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Position Code:</label>
											<div class="col-sm-8">
												<div class="col-sm-4" style='padding: 0;'>
													<?php
													if(isset($_POST['editP'])){
												
														$query = mysqli_query($connection, "select * from position where ID = '" . $_POST['editP'] . "'");
														$row = $query->fetch_assoc();
														echo "<input type='hidden' name='id' value='" . $_POST['editP'] . "'>";
													?>
													<input class='form-control' name='positionCode' value='<?php echo $row['PositionCode']; ?>'>	
												</div>
											</div>
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='positionDescription' value='<?php echo $row['Description']; ?>'>
											</div>
											<label class="control-label col-sm-4">Manager Level:</label>
											<div class="col-sm-8">
												<div class="col-sm-4" style='padding: 0;'>
													<select class="form-control" name="managerLevel">
														<?php
															if($row['IsManager'] == '1'){
																echo "<option value='True' selected>True</option>
																		<option value='False'>False</option>";
															}
															else{
																echo "<option value='True'>True</option>
																		<option value='False' selected>False</option>";
															}
														?>
														
													</select>
												</div>
											</div>
											<?php
													}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditP" id="saveEditP" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditP'])){
								$id = $_POST['id'];
								$code = $_POST['positionCode'];
								$description = $_POST['positionDescription'];
								$manager = ($_POST['managerLevel'] == 'True' ? '1' : '0');
								
								$query = mysqli_query($connection, "Update position Set PositionCode = '$code', Description = '$description', IsManager = '$manager' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
    </div>
	
	<?php
		require('../ojt/home-modals.php');
		require('../ojt/footer.php');
	?>
	
	<script>
		// Make data table responsive
		$(document).ready(function() {
			$('#dataTables-dept').DataTable({
				  responsive: true
			});
			$('#dataTables-position').DataTable({
				  responsive: true
			});
		});
		$( "#deleteD" ).change(function () {
			$.get('dept-body.php', function(data) {
				$('#dept-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddD" ).change(function () {
			$.get('dept-body.php', function(data) {
				$('#dept-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditD" ).change(function () {
			$.get('dept-body.php', function(data) {
				$('#dept-body').html(data);    
			});
			
		})
		.change();
		
		$( "#deleteP" ).change(function () {
			$.get('position-body.php', function(data) {
				$('#position-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddP" ).change(function () {
			$.get('position-body.php', function(data) {
				$('#position-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditP" ).change(function () {
			$.get('position-body.php', function(data) {
				$('#position-body').html(data);    
			});
			
		})
		.change();
	</script>
	
</body>
</html>