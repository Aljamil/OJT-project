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
                    <h1 class="page-header">Branch / Reader</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">
													<ul class="nav nav-tabs">
														<li class="active"><a href="#branch-tab" data-toggle="tab">Branch</a>
														</li>
														<li><a href="#reader-tab" data-toggle="tab">Reader</a>
														</li>
													</ul>
													<!-- Tab panes -->
													<div class="tab-content">
														<div class="tab-pane fade in active" id="branch-tab">
															<form role='form' method='post'>
																<div class='pull-left' style="padding: 15px 0 20px 0;">
																	<button data-toggle="modal" data-target="#addBranchModal" type="button" class="btn btn-primary">Add Branch</button>
																</div>
																<div class="dataTable_wrapper" id="branch-body">
																	<table class="table table-striped table-bordered table-hover" id="dataTables-branch">
																		<thead>
																			<tr>
																				<th>Branch Code</th>
																				<th>Branch Name</th>
																				<th>Address</th>
																				<th>Start Based</th>
																				<th>Reader Number</th>
																				<th>Reader IP</th>
																				<th>Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
																			// SQL query to fetch information of registerd users and finds user match.
																			$query = mysqli_query($connection, "select * from branch");
																			
																			if ($query->num_rows > 0) {														
																				// output data of each row
																				while($row = $query->fetch_assoc()) {
																					echo "<tr><td>" . $row['BranchCode'] . "</td>";
																					echo "<td>". $row['BranchName'] . "</td>";
																					echo "<td>". $row['Address'] . "</td>";
																					echo "<td>". $row['BranchCodeStart'] . "</td>";
																					$queryTmp = mysqli_query($connection, "select ReaderIP from reader where ReaderNumber = '" . $row['ReaderNumber'] ."'");
																					$rowTmp = $queryTmp->fetch_assoc();
																					echo "<td>". $row['ReaderNumber'] . "</td>";
																					echo "<td>". $rowTmp['ReaderIP'] . "</td>";
																					
																					$tmp = $row['ID'];
																					echo <<< EOT
																						<td>
																							<button type="submit" class="btn-xs btn-danger" name="deleteBranch" id="deleteBranch" value='$tmp'>Delete</button>
															
																							<button type="submit" name="editBranch" id="editBranch" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
															<!-- Branch Delete Feature -->
															<?php
																if(isset($_POST['deleteBranch'])){
																	$tmp = $_POST['deleteBranch'];
																	echo <<< EOT
																		<script>
																			$( document ).ready(function() {
																				var tmp = '$tmp';
																				$('#deleteValueB').val(tmp);
																				$('#deleteConfirmationB').modal('show');
																			});
																		</script>
EOT;
																	
																}
															?>
															<!-- End of Branch Delete Feature -->
															
															<!-- Branch Edit Feature -->
															<?php
																if(isset($_POST['editBranch'])){
																	
																	echo "<script type='text/javascript'>
																			$(document).ready(function(){
																				$('#editBranchModal').modal('show');
																			});
																		</script>";
																	
																}
															?>
															<!-- End of Branch Edit Feature -->
														</div>
														<div class="tab-pane fade" id="reader-tab">
															<form role='form' method='post'>
																<div class='pull-left' style="padding: 15px 0 20px 0;">
																	<button data-toggle="modal" data-target="#addReaderModal" type="button" class="btn btn-primary">Add Reader</button>
																</div>
																<div class="dataTable_wrapper" id="reader-body">
																	<table class="table table-striped table-bordered table-hover" id="dataTables-reader">
																		<thead>
																			<tr>
																				<th>Device ID</th>
																				<th>IP Address</th>
																				<th>Port</th>
																				<th>Com PWD</th>
																				<th>Model</th>
																				<th>Used</th>
																				<th>Action</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php
																			// SQL query to fetch information of registerd users and finds user match.
																			$query = mysqli_query($connection, "select * from reader");
																			
																			if ($query->num_rows > 0) {														
																				// output data of each row
																				while($row = $query->fetch_assoc()) {
																					echo "<tr><td>" . $row['ReaderNumber'] . "</td>";
																					echo "<td>". $row['ReaderIP'] . "</td>";
																					echo "<td>". $row['ReaderPort'] . "</td>";
																					echo "<td>". $row['ReaderPassword'] . "</td>";
																					echo "<td>". "" . "</td>";
																					if($row['IsActive'] == '1'){
																						echo "<td>True</td>";
																					}else{
																						echo "<td>False</td>";
																					}
																					
																					$tmp = $row['ID'];
																					echo <<< EOT
																						<td>
																							<button type="submit" class="btn-xs btn-danger" id="deleteReader" name="deleteReader" value='$tmp'>Delete</button>
															
																							<button type="submit" name="editReader" id="editReader" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
															<!-- Reader Delete Feature -->
															<?php
																if(isset($_POST['deleteReader'])){
																	$tmp = $_POST['deleteReader'];
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
															<!-- End of Reader Delete Feature -->
															
															<!-- Reader Edit Feature -->
															<?php
																if(isset($_POST['editReader'])){
																	
																	echo "<script type='text/javascript'>
																			$(document).ready(function(){
																				$('#editReaderModal').modal('show');
																			});
																		</script>";
																	
																}
															?>
															<!-- End of Reader Edit Feature -->																		

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
			<!-- End of Branch -->
		</div>
        <!-- /#page-wrapper -->
		
		<!-- Modal for Delete Confirmation Message (Branch) -->
		<div id="deleteConfirmationB" class="modal fade" role="dialog">
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
					<input name="deleteValueB" id="deleteValueB" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedB" id="deleteConfirmedB" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedB'])){
					$tmp = $_POST['deleteValueB'];
					$query = mysqli_query($connection, "Delete from branch where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Branch) -->
		
		<!-- Modal for Delete Confirmation Message (Reader)-->
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
					<button type="submit" name="deleteConfirmedR" id="deleteConfirmedR" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedR'])){
					$tmp = $_POST['deleteValueR'];
					$query = mysqli_query($connection, "Delete from reader where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Reader) -->
		
		<!-- Modal for Add Branch -->
		<div class="modal fade" id="addBranchModal" tabindex="-1" role="dialog" aria-labelledby="addBranchModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addBranchModalLabel">Branch Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-3">Branch Code:</label>
											<div class="col-sm-9">
												<input class='form-control' name='branchCode' id=''>	
											</div>
											
											<label class="control-label col-sm-3">Branch Name:</label>
											<div class="col-sm-9">
												<input class='form-control' name='branchName' id=''>
											</div>
											
											<label class="control-label col-sm-3">Address:</label>
											<div class="col-sm-9">
												<input class='form-control' name='address' id=''>
											</div>
											
											<label class="control-label col-sm-3">Start Based:</label>
											<div class="col-sm-9">
												<input class='form-control' name='startBased' id=''>
											</div>
											
											<label class="control-label col-sm-3">Reader No.:</label>
											<div class="col-sm-9">
												<input class='form-control' type='number' name='readerNo' id=''>
											</div>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddBranch" id="saveAddBranch" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
										
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddBranch'])){
								$branchCode = $_POST['branchCode'];
								$branchName = $_POST['branchName'];
								$address = $_POST['address'];
								$startBased = $_POST['startBased'];
								$readerNo = $_POST['readerNo'];
								
								$query = mysqli_query($connection, "INSERT INTO branch (BranchCode, BranchName, Address, BranchCodeStart, ReaderNumber) VALUES('$branchCode','$branchName', '$address', '$startBased', '$readerNo')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Branch -->
		<div class="modal fade" id="editBranchModal" tabindex="-1" role="dialog" aria-labelledby="editBranchModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editBranchModal">Branch Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
												if(isset($_POST['editBranch'])){
											
													$query = mysqli_query($connection, "select * from branch where ID = '" . $_POST['editBranch'] . "'");
													$row = $query->fetch_assoc();
													
													echo "<input type='hidden' name='id' value='" . $_POST['editBranch'] . "'>";
											?>
											<label class="control-label col-sm-3">Branch Code:</label>
											<div class="col-sm-9">
												<input class='form-control' name='branchCode' value='<?php echo $row['BranchCode']; ?>'>	
											</div>
											
											<label class="control-label col-sm-3">Branch Name:</label>
											<div class="col-sm-9">
												<input class='form-control' name='branchName' value='<?php echo $row['BranchName']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">Address:</label>
											<div class="col-sm-9">
												<input class='form-control' name='address' value='<?php echo $row['Address']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">Start Based:</label>
											<div class="col-sm-9">
												<input class='form-control' name='startBased' value='<?php echo $row['BranchCodeStart']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">Reader No.:</label>
											<div class="col-sm-9">
												<input class='form-control' name='readerNo' type='number' value='<?php echo $row['ReaderNumber']; ?>'>
											</div>
											<?php
												}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditBranch" id="saveEditBranch" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
										
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditBranch'])){
								$id = $_POST['id'];
								$branchCode = $_POST['branchCode'];
								$branchName = $_POST['branchName'];
								$address = $_POST['address'];
								$startBased = $_POST['startBased'];
								$readerNo = $_POST['readerNo'];
								
								$query = mysqli_query($connection, "Update branch Set BranchCode = '$branchCode', BranchName = '$branchName', Address = '$address', BranchCodeStart = '$startBased', ReaderNumber = '$readerNo' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Add Reader -->
		<div class="modal fade" id="addReaderModal" tabindex="-1" role="dialog" aria-labelledby="addReaderModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addReaderModalLabel">Reader Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-3">Reader Number:</label>
											<div class="col-sm-9">
												<input class='form-control' type='number' name='readerNo'>
											</div>
										
											<label class="control-label col-sm-3">IP Address:</label>
											<div class="col-sm-9">
												<input class='form-control' name='IPAddress' id=''>
											</div>
											
											<label class="control-label col-sm-3">Port:</label>
											<div class="col-sm-9">
												<input class='form-control' name='port' id=''>
											</div>
											
											<label class="control-label col-sm-3">Com PWD:</label>
											<div class="col-sm-9">
												<input class='form-control' name='comPWD' id=''>
											</div>
											
											<label class="control-label col-sm-3">Model:</label>
											<div class="col-sm-9">
												<input class='form-control' name='model' id=''>
											</div>
											
											<label class="control-label col-sm-3">Used:</label>
											<div class="col-sm-9">
												<select class='form-control' name='used' id=''>
													<option value='True'>True</option>
													<option value='False'>False</option>
												</select>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddReader" id="saveAddReader" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddReader'])){
								$readerNo = $_POST['readerNo'];
								$IPAddress = $_POST['IPAddress'];
								$port = $_POST['port'];
								$comPWD = $_POST['comPWD'];
								$model = $_POST['model'];
								$used = ($_POST['used'] == 'True' ? '1' : '0');
								
								$query = mysqli_query($connection, "INSERT INTO reader (ReaderNumber, ReaderIP, ReaderPort, ReaderPassword, IsActive) VALUES('$readerNo', '$IPAddress','$port', '$comPWD', '$used')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Reader -->
		<div class="modal fade" id="editReaderModal" tabindex="-1" role="dialog" aria-labelledby="editReaderModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editReaderModalLabel">Reader Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
												if(isset($_POST['editReader'])){
											
													$query = mysqli_query($connection, "select * from reader where ID = '" . $_POST['editReader'] . "'");
													$row = $query->fetch_assoc();
													echo "<input type='hidden' name='id' value='" . $_POST['editReader'] . "'>";
											?>
											<label class="control-label col-sm-3">Reader Number:</label>
											<div class="col-sm-9">
												<input class='form-control' type='number' name='readerNo' value='<?php echo $row['ReaderNumber']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">IP Address:</label>
											<div class="col-sm-9">
												<input class='form-control' name='IPAddress' value='<?php echo $row['ReaderIP']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">Port:</label>
											<div class="col-sm-9">
												<input class='form-control' name='port' value='<?php echo $row['ReaderPort']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">Com PWD:</label>
											<div class="col-sm-9">
												<input class='form-control' name='comPWD' value='<?php echo $row['ReaderPassword']; ?>'>
											</div>
											
											<label class="control-label col-sm-3">Model:</label>
											<div class="col-sm-9">
												<input class='form-control' name='model' id=''>
											</div>
											
											<label class="control-label col-sm-3">Used:</label>
											<div class="col-sm-9">
												<select class='form-control' name='used' id=''>
													<?php
														if($row['IsActive'] == '1'){
															echo "<option value='True' selected>True</option>
													<option value='False'>False</option>";
														}else{
															echo "<option value='True'>True</option>
													<option value='False' selected>False</option>";
														}
													?>
													
												</select>
											</div>
											<?php
												}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditReader" id="saveEditReader" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditReader'])){
								$id = $_POST['id'];
								$readerNo = $_POST['readerNo'];
								$IPAddress = $_POST['IPAddress'];
								$port = $_POST['port'];
								$comPWD = $_POST['comPWD'];
								$model = $_POST['model'];
								$used = ($_POST['used'] == 'True' ? '1' : '0');
								
								$query = mysqli_query($connection, "Update reader Set ReaderNumber = '$readerNo', ReaderIP = '$IPAddress', ReaderPort = '$port', ReaderPassword = '$comPWD', IsActive = '$used' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Supported Devices -->
		<div class="modal fade" id="supportedDevicesModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addModalLabel">Supported devices</h4>
					</div>
					<div class="modal-body">
						<img src='../ojt/images/supported-devices.png' width="100%" />
					</div>
					<!-- /.modal-content -->
				</div>
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
			$('#supportedDevicesModal').modal('show');
			$('#dataTables-branch').DataTable({
				  responsive: true
			});
			$('#dataTables-reader').DataTable({
				  responsive: true
			});
		});
		$( "#deleteBranch" ).change(function () {
			$.get('branch-body.php', function(data) {
				$('#branch-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddBranch" ).change(function () {
			$.get('branch-body.php', function(data) {
				$('#branch-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditBranch" ).change(function () {
			$.get('branch-body.php', function(data) {
				$('#branch-body').html(data);    
			});
			
		})
		.change();
		
		$( "#deleteReader" ).change(function () {
			$.get('reader-body.php', function(data) {
				$('#reader-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddReader" ).change(function () {
			$.get('reader-body.php', function(data) {
				$('#reader-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditReader" ).change(function () {
			$.get('reader-body.php', function(data) {
				$('#reader-body').html(data);    
			});
			
		})
		.change();
		
	</script>
	
</body>
</html>