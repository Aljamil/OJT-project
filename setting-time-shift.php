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
			<!-- Time Shift -->
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Time Shift</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">
													<ul class="nav nav-tabs">
														<li class="active"><a href="#regular-tab" data-toggle="tab">Regular Time Shift</a>
														</li>
														<li><a href="#irregular-tab" data-toggle="tab">Irregular Time Shift</a>
														</li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
														<div class="tab-pane fade in active" id="regular-tab">
															<form role='form' method='post'>
																<div class='pull-left' style="padding: 15px 0 20px 0;">
																	<button data-toggle="modal" data-target="#addRegularModal" type="button" class="btn btn-primary">Add Regular Time Shift</button>
																</div>
																<div class="dataTable_wrapper" id="regularBody">
																	<table class="table table-striped table-bordered table-hover" id="dataTables-regular">
																		<thead>
																			<tr>
																				<th>Sched Code</th>
																				<th>Description</th>
																				<th>Total Hrs</th>
																				<th>Editable</th>
																				<th>Flexitime</th>
																				<th>By Hour</th>
																				<th>Dayoff</th>
																				<th>Action</th>
																			</tr>
																		</thead>
																		<tbody>
																				<?php
																				// SQL query to fetch information of registerd users and finds user match.
																				$query = mysqli_query($connection, "select * from schedule");
																				
																				if ($query->num_rows > 0) {														
																					// output data of each row
																					while($row = $query->fetch_assoc()) {
																						echo "<tr><td>" . $row['SchedCode'] . "</td>";
																						echo "<td>" . $row['Description'] . "</td>";
																						echo "<td>" . $row['TotalHrs'] . "</td>";
																						if($row['IsEditUndertime'] == '0'){
																							echo "<td>False</td>";
																						}else{
																							echo "<td>True</td>";
																						}
																						if($row['IsFlexi'] == '0'){
																							echo "<td>False</td>";
																						}else{
																							echo "<td>True</td>";
																						}
																						if($row['IsTotalHrs'] == '0'){
																							echo "<td>False</td>";
																						}else{
																							echo "<td>True</td>";
																						}
																						echo "<td>" . $row['TotalOff'] . "</td>";
																						
																						$tmp = $row['ID'];
																						
																						echo <<< EOT
																							<td>
																								<button type="submit" class="btn-xs btn-danger" name="deleteR" id='deleteR' value='$tmp'>Delete</button>
																
																								<button type="submit" name="editR" id="editR" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
															<!-- Regular Time Shift Delete Feature -->
															<?php
																if(isset($_POST['deleteR'])){
																	$tmp = $_POST['deleteR'];
																	echo <<< EOT
																		<script>
																			$( document ).ready(function() {
																				var tmp = '$tmp';
																				$('#deleteValueR').val(tmp);
																				$('#deleteConfirmationR').modal('show');
																			});
																		</script>
EOT;
																	
																}
															?>
															<!-- End of Regular Time Shift Delete Feature -->
															
															<!-- Regular Time Shift Edit Feature -->
															<?php
																if(isset($_POST['editR'])){
																	
																	echo "<script type='text/javascript'>
																			$(document).ready(function(){
																				$('#editRegularModal').modal('show');
																			});
																		</script>";
																	
																}
															?>
															<!-- End of Regular Time Shift Edit Feature -->
														</div>
														<div class="tab-pane fade" id="irregular-tab">
															<form role='form' method='post'>
																<div class='pull-left' style="padding: 15px 0 20px 0;">
																	<button data-toggle="modal" data-target="#addIrregularModal" type="button" class="btn btn-primary">Add Irregular Time Shift</button>
																</div>
																<div class="dataTable_wrapper" id="irregularBody">
																	<table class="table table-striped table-bordered table-hover" id="dataTables-irregular">
																		<thead>
																			<tr>
																				<th>ID</th>
																				<th>Description</th>
																				<th>Morning IN</th>
																				<th>Morning OUT</th>
																				<th>Noon IN</th>
																				<th>Noon OUT</th>
																				<th>Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
																			// SQL query to fetch information of registerd users and finds user match.
																			$query = mysqli_query($connection, "select * from schedule_irregular");
																			
																			if ($query->num_rows > 0) {														
																				// output data of each row
																				while($row = $query->fetch_assoc()) {
																					echo "<tr><td>" . $row['ID'] . "</td>";
																					echo "<td>". $row['Description'] . "</td>";
																					if(empty($row['In'])){
																						echo "<td>--:--</td>";
																					}else{
																						$tmp = strtotime($row['In']);
																						echo "<td>". date( "h:i A", $tmp) . "</td>";
																					}
																					
																					if(empty($row['Break'])){
																						echo "<td>--:--</td>";
																					}else{
																						$tmp = strtotime($row['Break']);
																						echo "<td>". date( "h:i A", $tmp) . "</td>";
																					}
																					
																					if(empty($row['Resume'])){
																						echo "<td>--:--</td>";
																					}else{
																						$tmp = strtotime($row['Resume']);
																						echo "<td>". date( "h:i A", $tmp) . "</td>";
																					}
																					
																					if(empty($row['Out'])){
																						echo "<td>--:--</td>";
																					}else{
																						$tmp = strtotime($row['Out']);
																						echo "<td>". date( "h:i A", $tmp) . "</td>";
																					}
																					
																					
																					
																					$tmp = $row['ID'];
																					echo <<< EOT
																						<td>
																							<button type="submit" class="btn-xs btn-danger" name="deleteI" id='deleteI' value='$tmp'>Delete</button>
															
																							<button type="submit" name="editI" id="editI" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
															<!-- Irregular Time Shift Delete Feature -->
															<?php
																if(isset($_POST['deleteI'])){
																	$tmp = $_POST['deleteI'];
																	echo <<< EOT
																		<script>
																			$( document ).ready(function() {
																				var tmp = '$tmp';
																				$('#deleteValueI').val(tmp);
																				$('#deleteConfirmationI').modal('show');
																			});
																		</script>
EOT;
																	
																}
															?>
															<!-- End of Irregular Time Shift Delete Feature -->
															
															<!-- Irregular Time Shift Edit Feature -->
															<?php
																if(isset($_POST['editI'])){
																	
																	echo "<script type='text/javascript'>
																			$(document).ready(function(){
																				$('#editIrregularModal').modal('show');
																			});
																		</script>";
																	
																}
															?>
															<!-- End of Irregular Time Shift Edit Feature -->
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
			<!-- End of Time Shift -->
		</div>
        <!-- /#page-wrapper -->
		
		<!-- Modal for Delete Confirmation Message (Regular Time Shift) -->
		<div id="deleteConfirmationR" class="modal fade" role="dialog">
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
					<input name="deleteValueR" id="deleteValueR" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedR" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedR'])){
					$tmp = $_POST['deleteValueR'];
					$query = mysqli_query($connection, "Delete from schedule where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message -->
		
		<!-- Modal for Delete Confirmation Message (Irregular Time Shift) -->
		<div id="deleteConfirmationI" class="modal fade" role="dialog">
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
					<input name="deleteValueI" id="deleteValueI" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedI" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedI'])){
					$tmp = $_POST['deleteValueI'];
					$query = mysqli_query($connection, "Delete from schedule_irregular where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message -->
		
		<!-- Modal for Add Regular Time Shift -->
		<div class="modal fade" id="addRegularModal" tabindex="-1" role="dialog" aria-labelledby="addRegularModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addRegularModalLabel">Regular Time Shift Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Sched Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='schedCode' id='' required>	
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' id=''>
											</div>
											
											<label class="control-label col-sm-4">Total Hours:</label>
											<div class="col-sm-8">
												<input type='number' class='form-control' name='totalHrs' id=''>
											</div>
											
											<label class="control-label col-sm-4">Editable:</label>
											<div class="col-sm-8">
												<select class="form-control" name="editable">
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Flexitime:</label>
											<div class="col-sm-8">
												<select class="form-control" name="flexitime">
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
											<label class="control-label col-sm-4">By Hours:</label>
											<div class="col-sm-8">
												<select class="form-control" name="byHours">
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Dayoff:</label>
											<div class="col-sm-8">
												<input type='number' class='form-control' name='dayoff' id=''>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddR" id='saveAddR' class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddR'])){
								$schedCode = $_POST['schedCode'];
								$description = $_POST['description'];
								$totalHrs = $_POST['totalHrs'];
								$editable = ($_POST['editable'] == 'True' ? '1' : '0');
								$flexi = ($_POST['flexitime'] == 'True' ? '1' : '0');
								$byHrs = ($_POST['byHours'] == 'True' ? '1' : '0');
								$dayoff = $_POST['dayoff'];
								
								$query = mysqli_query($connection, "INSERT INTO schedule (SchedCode, Description, TotalHrs, IsEditUndertime, IsFlexi, IsTotalHrs, TotalOff) VALUES('$schedCode','$description', '$totalHrs', '$editable', '$flexi', '$byHrs', '$dayoff')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Regular Time Shift -->
		<div class="modal fade" id="editRegularModal" tabindex="-1" role="dialog" aria-labelledby="editRegularModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editRegularModalLabel">Regular Time Shift Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
												if(isset($_POST['editR'])){
											
													$query = mysqli_query($connection, "select * from schedule where ID = '" . $_POST['editR'] . "'");
													if ($query->num_rows > 0) {		
														while($row = $query->fetch_assoc()) {
															echo "<input type='hidden' name='id' value='" . $_POST['editR'] . "'>";
															$schedCode = $row['SchedCode'];
															$description = $row['Description'];
															$totalHrs = $row['TotalHrs'];
															$editable = $row['IsEditUndertime'];
															$flexi = $row['IsFlexi'];
															$byHrs = $row['IsTotalHrs'];
															$dayoff = $row['TotalOff'];
												?>
											<label class="control-label col-sm-4">Sched Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='schedCode' value='<?php echo $schedCode; ?>'>	
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' value='<?php echo $description; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Total Hours:</label>
											<div class="col-sm-8">
												<input type='number' class='form-control' name='totalHrs' value='<?php echo $totalHrs; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Editable:</label>
											<div class="col-sm-8">
												<select class="form-control" name="editable">
													<?php
														if($editable == '1'){
															echo "<option value='True' selected>True</option>
																	<option value='False'>False</option>";
														}else{
															echo "<option value='True'>True</option>
																	<option value='False' selected>False</option>";
														}
													?>
													
												</select>
											</div>
											
											<label class="control-label col-sm-4">Flexitime:</label>
											<div class="col-sm-8">
												<select class="form-control" name="flexitime">
													<?php
														if($flexi == '1'){
															echo "<option value='True' selected>True</option>
																	<option value='False'>False</option>";
														}else{
															echo "<option value='True'>True</option>
																	<option value='False' selected>False</option>";
														}
													?>
												</select>
											</div>
											
											<label class="control-label col-sm-4">By Hours:</label>
											<div class="col-sm-8">
												<select class="form-control" name="byHours">
													<?php
														if($byHrs == '1'){
															echo "<option value='True' selected>True</option>
																	<option value='False'>False</option>";
														}else{
															echo "<option value='True'>True</option>
																	<option value='False' selected>False</option>";
														}
													?>
												</select>
											</div>
											
											<label class="control-label col-sm-4">Dayoff:</label>
											<div class="col-sm-8">
												<input type='number' class='form-control' name='dayoff' value='<?php echo $dayoff;?>'>
											</div>
												<?php
														}
													}
												}
												?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditR" id='saveEditR' class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditR'])){
								$id = $_POST['id'];
								$schedCode = $_POST['schedCode'];
								$description = $_POST['description'];
								$totalHrs = $_POST['totalHrs'];
								$editable = ($_POST['editable'] == 'True' ? '1' : '0');
								$flexi = ($_POST['flexitime'] == 'True' ? '1' : '0');
								$byHrs = ($_POST['byHours'] == 'True' ? '1' : '0');
								$dayoff = $_POST['dayoff'];
								
								$query = mysqli_query($connection, "Update schedule Set SchedCode = '$schedCode', Description = '$description', TotalHrs = '$totalHrs', IsEditUnderTime = '$editable', IsFlexi = '$flexi', IsTotalHrs = '$byHrs', TotalOff = '$dayoff' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Add Irregular Time Shift -->
		<div class="modal fade" id="addIrregularModal" tabindex="-1" role="dialog" aria-labelledby="addIrregularModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addIrregularModalLabel">Irregular Time Shift Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												
												<input class='form-control' name='description' id=''>
											</div>
											
											<label class="control-label col-sm-4">Morning IN:</label>
											<div class="col-sm-8">
												<input class='form-control' name='morningIn' id='' placeholder='e.g. 22:10'>
											</div>
											
											<label class="control-label col-sm-4">Morning Out:</label>
											<div class="col-sm-8">
												<input class='form-control' name='morningOut' id='' placeholder='e.g. 22:10'>
											</div>
											
											<label class="control-label col-sm-4">Noon IN:</label>
											<div class="col-sm-8">
												<input class='form-control' name='noonIn' id='' placeholder='e.g. 22:10'>
											</div>
											
											<label class="control-label col-sm-4">Noon OUT:</label>
											<div class="col-sm-8">
												<input class='form-control' name='noonOut' id='' placeholder='e.g. 22:10'>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddI" id='saveAddI' class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddI'])){
								$description = $_POST['description'];
								$morningIn = $_POST['morningIn'];
								$morningOut = $_POST['morningOut'];
								$noonIn = $_POST['noonIn'];
								$noonOut = $_POST['noonOut'];
								
								$query = mysqli_query($connection, "INSERT INTO schedule_irregular (Description, `In`, Break, Resume, `Out`) VALUES('$description','$morningIn', '$morningOut', '$noonIn', '$noonOut')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Irregular Time Shift -->
		<div class="modal fade" id="editIrregularModal" tabindex="-1" role="dialog" aria-labelledby="editIrregularModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editIrregularModalLabel">Irregular Time Shift Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<?php
													if(isset($_POST['editI'])){
												
														$query = mysqli_query($connection, "select * from schedule_irregular where ID = '" . $_POST['editI'] . "'");
														if ($query->num_rows > 0) {		
															while($row = $query->fetch_assoc()) {
																echo "<input type='hidden' name='id' value='" . $_POST['editI'] . "'>";
																$description = $row['Description'];
																$morningIn = $row['In'];
																$morningOut = $row['Break'];
																$noonIn = $row['Resume'];
																$noonOut = $row['Out'];
																
												?>
												<input class='form-control' name='description' value='<?php echo $description; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Morning IN:</label>
											<div class="col-sm-8">
												<input class='form-control' name='morningIn' value='<?php echo $morningIn; ?>' placeholder='e.g. 22:10'>
											</div>
											
											<label class="control-label col-sm-4">Morning Out:</label>
											<div class="col-sm-8">
												<input class='form-control' name='morningOut' value='<?php echo $morningOut; ?>' placeholder='e.g. 22:10'>
											</div>
											
											<label class="control-label col-sm-4">Noon IN:</label>
											<div class="col-sm-8">
												<input class='form-control' name='noonIn' value='<?php echo $noonIn; ?>' placeholder='e.g. 22:10'>
											</div>
											
											<label class="control-label col-sm-4">Noon OUT:</label>
											<div class="col-sm-8">
												<input class='form-control' name='noonOut' value='<?php echo $noonOut; ?>' placeholder='e.g. 22:10'>
											</div>
												<?php
															}
														}
													}
												?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditI" id='saveEditI' class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditI'])){
								$id = $_POST['id'];
								$description = $_POST['description'];
								$morningIn = $_POST['morningIn'];
								$morningOut = $_POST['morningOut'];
								$noonIn = $_POST['noonIn'];
								$noonOut = $_POST['noonOut'];
								
								$query = mysqli_query($connection, "Update schedule_irregular Set Description = '$description', `In` = '$morningIn', Break = '$morningOut', Resume = '$noonIn', `Out` = '$noonOut' Where ID = '$id'");
									
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
			$('#dataTables-regular').DataTable({
				  responsive: true
			});
			$('#dataTables-irregular').DataTable({
				  responsive: true
			});
		});
		
		$( "#deleteR" ).change(function () {
			$.get('regular-time-shift-body.php', function(data) {
				$('#regularBody').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddR" ).change(function () {
			$.get('regular-time-shift-body.php', function(data) {
				$('#regularBody').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditR" ).change(function () {
			$.get('regular-time-shift-body.php', function(data) {
				$('#regularBody').html(data);    
			});
			
		})
		.change();
		
		$( "#deleteI" ).change(function () {
			$.get('irregular-time-shift-body.php', function(data) {
				$('#irregularBody').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddI" ).change(function () {
			$.get('irregular-time-shift-body.php', function(data) {
				$('#irregularBody').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditI" ).change(function () {
			$.get('irregular-time-shift-body.php', function(data) {
				$('#irregularBody').html(data);    
			});
			
		})
		.change();
	</script>
	
</body>
</html>