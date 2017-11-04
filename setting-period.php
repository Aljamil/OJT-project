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
                    <h1 class="page-header">Payroll Period</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<form role='form' method='post'>
									<div class='pull-left' style="padding: 15px 0 20px 0;">
										<button data-toggle="modal" data-target="#addModal" type="button" class="btn btn-primary">Add Payroll Period</button>
									</div>
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">	
													<div class="dataTable_wrapper" id="payroll-period-body">
														<table class="table table-striped table-bordered table-hover" id="dataTables-period">
															<thead>
																<tr>
																	<th>ID</th>
																	<th>Description</th>
																	<th>Start</th>
																	<th>End</th>
																	<th>Same Month</th>
																	<th>Whole Month</th>
																	<th>Weekly</th>
																	<th>Period</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from payroll_period");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		echo "<tr><td>" . $row['ID'] . "</td>";
																		echo "<td>" . $row['Description'] . "</td>";
																		echo "<td>" . $row['DayStart'] . "</td>";
																		echo "<td>" . $row['DayEnd'] . "</td>";
																		if($row['IsSameMonth'] == '1'){
																			echo "<td>True</td>";
																		}else{
																			echo "<td>False</td>";
																		}
																		if($row['IsWholeMonth'] == '1'){
																			echo "<td>True</td>";
																		}else{
																			echo "<td>False</td>";
																		}
																		if($row['IsWeekly'] == '1'){
																			echo "<td>True</td>";
																		}else{
																			echo "<td>False</td>";
																		}
																		switch($row['PeriodSet']){
																			case '0':
																				echo "<td>Whole</td>";
																				break;
																			case '1':
																				echo "<td>1st Half</td>";
																				break;
																			case '2':
																				echo "<td>2nd Half</td>";
																				break;
																			case '3':
																				echo "<td>Irregular</td>";
																				break;
																		}
																		$tmp = $row['ID'];
																		echo <<< EOT
																				<td>
																					<button type="submit" class="btn-xs btn-danger" id='delete' name="delete" value='$tmp'>Delete</button>
													
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
		
		<!-- Payroll Period Delete Feature -->
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
		<!-- End of Payroll Period Delete Feature -->
		
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
					$query = mysqli_query($connection, "Delete from payroll_period where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message -->
		
		<!-- Payroll Period Edit Feature -->
		<?php
			if(isset($_POST['edit'])){
				
				echo "<script type='text/javascript'>
						$(document).ready(function(){
							$('#editModal').modal('show');
						});
					</script>";
				
			}
		?>
		<!-- End of Payroll Period Edit Feature -->
		
		
		<!-- Modal for Add Payroll Period -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addModalLabel">Payroll Period Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description'>
											</div>
											
											<label class="control-label col-sm-4">Start:</label>
											<div class="col-sm-8">
												<input type='number' class='form-control' name='start'>
											</div>
											
											<label class="control-label col-sm-4">End:</label>
											<div class="col-sm-8">
												<input type='number' class='form-control' name='end'>
											</div>
											
											<label class="control-label col-sm-4">Same Month:</label>
											<div class="col-sm-8">
												<select class='form-control' name='sameMonth'>
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Whole Month:</label>
											<div class="col-sm-8">
												<select class='form-control' name='wholeMonth'>
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Weekly:</label>
											<div class="col-sm-8">
												<select class='form-control' name='weekly'>
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Period:</label>
											<div class="col-sm-8">
												<input type='number' placeholder='0-3 only' min='0' max='3' value="0" class='form-control' name='period'>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="save" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['save'])){
								$description = $_POST['description'];
								$dayStart = $_POST['start'];
								$dayEnd = $_POST['end'];
								$sameMonth = ($_POST['sameMonth'] == 'True' ? '1' : '0');
								$wholeMonth = ($_POST['wholeMonth'] == 'True' ? '1' : '0');
								$weekly = ($_POST['weekly'] == 'True' ? '1' : '0');
								$periodSet = $_POST['period'];
								
								$query = mysqli_query($connection, "INSERT INTO payroll_period (Description, DayStart, DayEnd, IsSameMonth, IsWholeMonth, IsWeekly, PeriodSet) VALUES('$description','$dayStart', '$dayEnd', '$sameMonth', '$wholeMonth', '$weekly', '$periodSet')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Payroll Period -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editModalLabel">Payroll Period Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<?php
													if(isset($_POST['edit'])){
												
														$query = mysqli_query($connection, "select * from payroll_period where ID = '" . $_POST['edit'] . "'");
														if ($query->num_rows > 0) {		
															while($row = $query->fetch_assoc()) {
																echo "<input type='hidden' name='id' value='" . $_POST['edit'] . "'>";
																
																$description = $row['Description'];
																$dayStart = $row['DayStart'];
																$dayEnd = $row['DayEnd'];
																$sameMonth = $row['IsSameMonth'];
																$wholeMonth = $row['IsWholeMonth'];
																$weekly = $row['IsWeekly'];
																$periodSet = $row['PeriodSet'];
																
																echo "<input class='form-control' name='description' value='$description'>";
												?>
												
											</div>
											
											<label class="control-label col-sm-4">Start:</label>
											<div class="col-sm-8">
												<?php
													echo "<input type='number' class='form-control' name='start' value='$dayStart'>";
												?>
											</div>
											
											<label class="control-label col-sm-4">End:</label>
											<div class="col-sm-8">
												<?php
													echo "<input type='number' class='form-control' name='end' value='$dayEnd'>";
												?>
												
											</div>
											
											<label class="control-label col-sm-4">Same Month:</label>
											<div class="col-sm-8">
												<select class='form-control' name='sameMonth'>
													<?php
														if($sameMonth == '1'){
															echo <<< EOT
															<option value='True' selected>True</option>
															<option value='False'>False</option>
EOT;
														}else{
															echo <<< EOT
															<option value='True'>True</option>
															<option value='False' selected>False</option>
EOT;
														}
													?>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Whole Month:</label>
											<div class="col-sm-8">
												<select class='form-control' name='wholeMonth'>
													<?php
														if($wholeMonth == '1'){
															echo <<< EOT
															<option value='True' selected>True</option>
															<option value='False'>False</option>
EOT;
														}else{
															echo <<< EOT
															<option value='True'>True</option>
															<option value='False' selected>False</option>
EOT;
														}
													?>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Weekly:</label>
											<div class="col-sm-8">
												<select class='form-control' name='weekly'>
													<?php
														if($weekly == '1'){
															echo <<< EOT
															<option value='True' selected>True</option>
															<option value='False'>False</option>
EOT;
														}else{
															echo <<< EOT
															<option value='True'>True</option>
															<option value='False' selected>False</option>
EOT;
														}
													?>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Period:</label>
											<div class="col-sm-8">
												<?php
													echo "<input type='number' placeholder='0-3 only' min='0' max='3' class='form-control' name='period' value='$periodSet'>";
															}
														}
													}
												?>
												
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEdit" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEdit'])){
								$id = $_POST['id'];
								$description = $_POST['description'];
								$dayStart = $_POST['start'];
								$dayEnd = $_POST['end'];
								$sameMonth = ($_POST['sameMonth'] == 'True' ? '1' : '0');
								$wholeMonth = ($_POST['wholeMonth'] == 'True' ? '1' : '0');
								$weekly = ($_POST['weekly'] == 'True' ? '1' : '0');
								$periodSet = $_POST['period'];
								
								$query = mysqli_query($connection, "Update payroll_period Set Description = '$description', DayStart = '$dayStart', DayEnd = '$dayEnd', IsSameMonth = '$sameMonth', IsWholeMonth = '$wholeMonth', IsWeekly = '$weekly', PeriodSet = '$periodSet' Where ID = '$id'");
									
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
			$('#dataTables-period').DataTable({
				  responsive: true
			});
			
		});
		$( "#delete" ).change(function () {
			$.get('payroll-period-body.php', function(data) {
				$('#payroll-period-body').html(data);    
			});
			
		})
		.change();
		
		$( "#save" ).change(function () {
			$.get('payroll-period-body.php', function(data) {
				$('#payroll-period-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEdit" ).change(function () {
			$.get('payroll-period-body.php', function(data) {
				$('#payroll-period-body').html(data);    
			});
			
		})
		.change();
	</script>
	
</body>
</html>