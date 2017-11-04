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
			<!-- Holiday -->
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daily Time Code</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form role='form' method='post'>
									<div class='pull-left' style="padding: 15px 0 20px 0;">
										<button data-toggle="modal" data-target="#addModal" type="button" class="btn btn-primary">Add Time Code</button>
									</div>
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">	
													<div class="dataTable_wrapper" id="timeCodeBody">
														<table class="table table-striped table-bordered table-hover" id="dataTables-time-code">
															<thead>
																<tr>
																	<th>DTR Code</th>
																	<th>Description</th>
																	<th>Payable</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from leave_type");
																
																if ($query->num_rows > 0) {														
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		echo "<tr><td>" . $row['LeaveCode'] . "</td>";
																		echo "<td>". $row['Description'] . "</td>";
																		if($row['WithPay'] == '1'){
																			echo "<td>True</td>";
																		}
																		else{
																			echo "<td>False</td>";
																		}
																		$tmp = $row['ID'];
																		echo <<< EOT
																			<td>
																				<button type='submit' class="btn-xs btn-danger" id='delete' name="delete" value='$tmp'>Delete</button>
												
																				<button type="submit" name="edit" id="edit" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
																			</td>
																			</tr>
EOT;
																		
																	}
																}
																?>
															</tbody>
															
														</table>
														
													</div>
												</div>
												<!-- /.panel-body -->
											</div>
											<!-- /.panel -->
									</div>
								</form>
								
								
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- End of Holiday -->
		</div>
        <!-- /#page-wrapper -->
		
		<!-- Time Code Delete Feature -->
		<?php
			if(isset($_POST['delete'])){
				$tmp = $_POST['delete'];
				echo <<< EOT
					<script>
						$( document ).ready(function() {
							var tmp = '$tmp';
							$('#deleteValue').val(tmp);
							$('#deleteConfirmation').modal('show');
						});
					</script>
EOT;
			}
		?>
		<!-- End of Time Code Delete Feature -->
		
		<!-- Modal for Delete Confirmation Message -->
		<div id="deleteConfirmation" class="modal fade" role="dialog">
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
					<input name="deleteValue" id="deleteValue" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmed" id="deleteConfirmed" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmed'])){
					$tmp = $_POST['deleteValue'];
					$query = mysqli_query($connection, "Delete from leave_type where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message -->
		
		<!-- Time Code Edit Feature -->
		<?php
			if(isset($_POST['edit'])){
				
				echo "<script type='text/javascript'>
						$(document).ready(function(){
							$('#editModal').modal('show');
						});
					</script>";
				
			}
		?>
		<!-- End of Time Code Edit Feature -->
		
		<!-- Modal for Add -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addModalLabel">Time Code Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-3">Time Code*:</label>
											<div class="col-sm-9">
												<input class='form-control' name='code'>	
											</div>
											<label class="control-label col-sm-3">Description:</label>
											<div class="col-sm-9">
												<input class='form-control' name='description'>
											</div>
											<label class="control-label col-sm-3"></label>
											<div class="col-sm-9">
												<div class="checkbox">
													<label>
														<input type="checkbox" name='payable'>Payable Time Code **
													</label>
												</div>
											</div>
											
										</div>
										<div style="text-align: center;'">
											<button type="submit" id='save' name="save" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
										<br />
										<div>
											* - Time Code in the format of "XX:XX", where X is alphanumeric.
											<br />
											** - When used in DTR, Time Code has an equivalent payment.
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['save'])){
								$code = $_POST['code'];
								$description = $_POST['description'];
								$payable = (isset($_POST['payable']) ? '1' : '0');
								
								$query = mysqli_query($connection, "INSERT INTO leave_type (LeaveCode, Description, WithPay) VALUES('$code','$description', '$payable')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editModalLabel">Time Code Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-3">Time Code*:</label>
											<div class="col-sm-9">
												<?php
													if(isset($_POST['edit'])){
												
														$query = mysqli_query($connection, "select * from leave_type where ID = '" . $_POST['edit'] . "'");
														if ($query->num_rows > 0) {		
															while($row = $query->fetch_assoc()) {
																$code = $row['LeaveCode'];
																$description = $row['Description'];
																$withpay = $row['WithPay'];
																echo "<input type='hidden' name='id' value='" . $_POST['edit'] . "'>";
																echo "<input class='form-control' name='code' value='$code'>";
												?>
													
											</div>
											<label class="control-label col-sm-3">Description:</label>
											<div class="col-sm-9">
												<?php
													echo "<input class='form-control' name='description' value='$description'>";
												?>
											</div>
											<label class="control-label col-sm-3"></label>
											<div class="col-sm-9">
												<div class="checkbox">
													<label>
														<?php
															if($withpay == '1'){
																echo "<input type='checkbox' name='payable' checked>";
															}else{
																echo "<input type='checkbox' name='payable'>";
															}
															}
														}
													}
														?>
														Payable Time Code **
														
													</label>
												</div>
											</div>
											
										</div>
										<div style="text-align: center;'">
											<button type="submit" id='saveEdit' name="saveEdit" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
										<br />
										<div>
											* - Time Code in the format of "XX:XX", where X is alphanumeric.
											<br />
											** - When used in DTR, Time Code has an equivalent payment.
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEdit'])){
								$id = $_POST['id'];
								$code = $_POST['code'];
								$description = $_POST['description'];
								$withpay = (isset($_POST['payable']) ? '1' : '0');
								
								$query = mysqli_query($connection, "Update leave_type Set LeaveCode = '$code', Description = '$description', WithPay = '$withpay' Where ID = '$id'");
									
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
			$('#dataTables-time-code').DataTable({
				  responsive: true
			});
			
		});
		
		$( "#delete" ).change(function () {
			
			$.get('time-code-body.php', function(data) {
				$('#timeCodeBody').html(data);    
			});
			
		})
		.change();
		
		$( "#save" ).change(function () {
			
			$.get('time-code-body.php', function(data) {
				$('#timeCodeBody').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEdit" ).change(function () {
			
			$.get('time-code-body.php', function(data) {
				$('#timeCodeBody').html(data);    
			});
			
		})
		.change();
	</script>
	
</body>
</html>