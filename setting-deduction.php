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
                    <h1 class="page-header">Deduction</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
								<div class="panel panel-default">
									<div class="panel-body">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#withholdingtax-tab" data-toggle="tab">Withholding Tax Bracket</a>
											</li>
											<li><a href="#sss-tab" data-toggle="tab">Social Security System Bracket</a>
											</li>
											<li><a href="#philhealth-tab" data-toggle="tab">Philhealth Bracket</a>
											</li>
											<li><a href="#pagibig-tab" data-toggle="tab">Pagibig (HDMF) Bracket</a>
											</li>
										</ul>
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane fade in active" id="withholdingtax-tab">
												<form role='form' method='post'>
													<div class='pull-left' style="padding: 15px 0 20px 0;">
														<button data-toggle="modal" data-target="#addTaxModal" type="button" class="btn btn-primary">Add Withholding Tax</button>
													</div>
													<div class="dataTable_wrapper" id="tax-body">
														<table class="table table-striped table-bordered table-hover" id="dataTables-withholdingtax">
															<thead>
																<tr>
																	<th>Status</th>
																	<th>Status (Initial)</th>
																	<th>Salary From</th>
																	<th>Salary To</th>
																	<th>Over (%)</th>
																	<th>Bracket Tax</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select * from bracket_tax");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			echo "<tr><td>" . $row['TaxStatus'] . "</td>";
																			echo "<td>" . $row['TaxStatusShort'] . "</td>";
																			echo "<td>" . $row['SalaryRateStart'] . "</td>";
																			echo "<td>" . $row['SalaryRateEnd'] . "</td>";
																			echo "<td>" . $row['TaxOver'] . "</td>";
																			echo "<td>" . $row['TaxAmount'] . "</td>";
																			
																			$tmp = $row['ID'];
																			echo <<< EOT
																				<td>
																					<button type="submit" class="btn-xs btn-danger" id='deleteTax' name="deleteTax" value='$tmp'>Delete</button>

																					<button type="submit" name="editTax" id="editTax" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
												<!-- Tax Delete Feature -->
												<?php
													if(isset($_POST['deleteTax'])){
														$tmp = $_POST['deleteTax'];
														echo <<< EOT
															<script>
																$( document ).ready(function() {
																	var tmp = '$tmp';
																	$('#deleteValueTax').val(tmp);
																	$('#deleteConfirmationTax').modal('show');
																});
															</script>
EOT;
														
													}
												?>
												<!-- End of Tax Delete Feature -->
												
												<!-- Tax Edit Feature -->
												<?php
													if(isset($_POST['editTax'])){
														
														echo "<script type='text/javascript'>
																$(document).ready(function(){
																	$('#editTaxModal').modal('show');
																});
															</script>";
														
													}
												?>
												<!-- End of Tax Edit Feature -->
											</div>
											<div class="tab-pane fade" id="sss-tab">
												<form role='form' method='post'>
													<div class='pull-left' style="padding: 15px 0 20px 0;">
														<button data-toggle="modal" data-target="#addSSSModal" type="button" class="btn btn-primary">Add SSS</button>
													</div>
													<div class="dataTable_wrapper" id="sss-body">
														<table class="table table-striped table-bordered table-hover" id="dataTables-sss">
															<thead>
																<tr>
																	<th>SSS Code</th>
																	<th>Description</th>
																	<th>Salary From</th>
																	<th>Salary To</th>
																	<th>Credit</th>
																	<th>SS-ER</th>
																	<th>SS-EE</th>
																	<th>SS-Total</th>
																	<th>EC-ER</th>
																	<th>TC-ER</th>
																	<th>TC-EE</th>
																	<th>TC-Total</th>
																	<th>Total</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select * from bracket_sss");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			echo "<tr><td>" . $row['SSSCode'] . "</td>";
																			echo "<td>" . $row['Description'] . "</td>";
																			echo "<td>" . number_format($row['SalaryRateStart'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SalaryRateEnd'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SalaryCredit'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SSer'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SSee'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SStotal'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['ECer'], 2, '.', ',') . "</td>";
																			echo "<td>" .number_format($row['TCer'], 2, '.', ',')  . "</td>";
																			echo "<td>" . number_format($row['TCee'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['TCtotal'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SSSAmount'], 2, '.', ',') . "</td>";
																			$tmp = $row['ID'];
																			echo <<< EOT
																				<td>
																					<button type="submit" class="btn-xs btn-danger" name="deleteSSS" id="deleteSSS" value='$tmp'>Delete</button>
													
																					<button type="submit" name="editSSS" id="editSSS" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
												<!-- SSS Delete Feature -->
												<?php
													if(isset($_POST['deleteSSS'])){
														$tmp = $_POST['deleteSSS'];
														echo <<< EOT
															<script>
																$( document ).ready(function() {
																	var tmp = '$tmp';
																	$('#deleteValueSSS').val(tmp);
																	$('#deleteConfirmationSSS').modal('show');
																});
															</script>
EOT;
													}
												?>
												<!-- End of SSS Delete Feature -->
												
												<!-- SSS Edit Feature -->
												<?php
													if(isset($_POST['editSSS'])){
														
														echo "<script type='text/javascript'>
																$(document).ready(function(){
																	$('#editSSSModal').modal('show');
																});
															</script>";
														
													}
												?>
												<!-- End of SSS Edit Feature -->
												
											</div>
											<div class="tab-pane fade" id="philhealth-tab">
												<form role='form' method='post'>
													<div class='pull-left' style="padding: 15px 0 20px 0;">
														<button data-toggle="modal" data-target="#addPhilhealthModal" type="button" class="btn btn-primary">Add Philhealth</button>
													</div>
													<div class="dataTable_wrapper" id="philhealth-body">
														<table class="table table-striped table-bordered table-hover" id="dataTables-philhealth">
															<thead>
																<tr>
																	<th>Philhealth Code</th>
																	<th>Description</th>
																	<th>Salary From</th>
																	<th>Salary To</th>
																	<th>Salary Credit</th>
																	<th>Employee Share</th>
																	<th>Employer Share</th>
																	<th>Total Contribution</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody >
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select * from bracket_philhealth");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			echo "<tr><td>" . $row['PhilHealthCode'] . "</td>";
																			echo "<td>" . $row['Description'] . "</td>";
																			echo "<td>" . number_format($row['SalaryRateStart'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SalaryRateEnd'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SalaryCredit'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['PHee'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['PHer'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['PhilhealthAmount'], 2, '.', ',') . "</td>";
																			
																			
																			$tmp = $row['ID'];
																			echo <<< EOT
																				<td>
																					<button type="submit" class="btn-xs btn-danger" name="deletePH" id="deletePH" value='$tmp'>Delete</button>
													
																					<button type="submit" name="editPH" id="editPH" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
												<!-- Philhealth Delete Feature -->
												<?php
													if(isset($_POST['deletePH'])){
														$tmp = $_POST['deletePH'];
														echo <<< EOT
															<script>
																$( document ).ready(function() {
																	var tmp = '$tmp';
																	$('#deleteValuePhilhealth').val(tmp);
																	$('#deleteConfirmationPhilhealth').modal('show');
																});
															</script>
EOT;
													}
												?>
												<!-- End of Philhealth Delete Feature -->
												
												<!-- Philhealth Edit Feature -->
												<?php
													if(isset($_POST['editPH'])){
														
														echo "<script type='text/javascript'>
																$(document).ready(function(){
																	$('#editPhilhealthModal').modal('show');
																});
															</script>";
														
													}
												?>
												<!-- End of Philhealth Edit Feature -->
											</div>
											<div class="tab-pane fade" id="pagibig-tab">
												<form role='form' method='post'>
													<div class='pull-left' style="padding: 15px 0 20px 0;">
														<button data-toggle="modal" data-target="#addPagibigModal" type="button" class="btn btn-primary">Add Pagibig</button>
													</div>
													<div class="dataTable_wrapper" id="pagibig-body">
														<table class="table table-striped table-bordered table-hover" id="dataTables-pagibig">
															<thead>
																<tr>
																	<th>Pagibig Code</th>
																	<th>Description</th>
																	<th>Salary From</th>
																	<th>Salary To</th>
																	<th>EE Share</th>
																	<th>ER Share</th>
																	<th>Total</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select * from bracket_pagibig");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			echo "<tr><td>" . $row['PagibigCode'] . "</td>";
																			echo "<td>" . $row['Description'] . "</td>";
																			echo "<td>" . number_format($row['SalaryRateStart'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['SalaryRateEnd'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['PIer'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['PIee'], 2, '.', ',') . "</td>";
																			echo "<td>" . number_format($row['PagibigAmount'], 2, '.', ',') . "</td>";
																			
																			$tmp = $row['ID'];
																			echo <<< EOT
																				<td>
																					<button type="submit" class="btn-xs btn-danger" name="deletePI" id="deletePI" value='$tmp'>Delete</button>
													
																					<button type="submit" name="editPI" id="editPI" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
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
												<!-- Pagibig Delete Feature -->
												<?php
													if(isset($_POST['deletePI'])){
														$tmp = $_POST['deletePI'];
														echo <<< EOT
															<script>
																$( document ).ready(function() {
																	var tmp = '$tmp';
																	$('#deleteValuePagibig').val(tmp);
																	$('#deleteConfirmationPagibig').modal('show');
																});
															</script>
EOT;
														
													}
												?>
												<!-- End of Pagibig Delete Feature -->
												
												<!-- Pagibig Edit Feature -->
												<?php
													if(isset($_POST['editPI'])){
														
														echo "<script type='text/javascript'>
																$(document).ready(function(){
																	$('#editPagibigModal').modal('show');
																});
															</script>";
														
													}
												?>
												<!-- End of Pagibig Edit Feature -->
												
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
			<!-- End of Holiday -->
		</div>
        <!-- /#page-wrapper -->
		
		<!-- Modal for Delete Confirmation Message (Tax) -->
		<div id="deleteConfirmationTax" class="modal fade" role="dialog">
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
					<input name="deleteValueTax" id="deleteValueTax" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedTax" id="deleteConfirmedTax" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedTax'])){
					$tmp = $_POST['deleteValueTax'];
					$query = mysqli_query($connection, "Delete from bracket_tax where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Tax) -->
		
		<!-- Modal for Delete Confirmation Message (SSS) -->
		<div id="deleteConfirmationSSS" class="modal fade" role="dialog">
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
					<input name="deleteValueSSS" id="deleteValueSSS" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedSSS" id="deleteConfirmedSSS" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedSSS'])){
					$tmp = $_POST['deleteValueSSS'];
					$query = mysqli_query($connection, "Delete from bracket_sss where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (SSS) -->
		
		<!-- Modal for Delete Confirmation Message (Philhealth) -->
		<div id="deleteConfirmationPhilhealth" class="modal fade" role="dialog">
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
					<input name="deleteValuePhilhealth" id="deleteValuePhilhealth" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedPhilhealth" id="deleteConfirmedPhilhealth" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedPhilhealth'])){
					$tmp = $_POST['deleteValuePhilhealth'];
					$query = mysqli_query($connection, "Delete from bracket_philhealth where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Philhealth) -->
		
		<!-- Modal for Delete Confirmation Message (Pagibig) -->
		<div id="deleteConfirmationPagibig" class="modal fade" role="dialog">
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
					<input name="deleteValuePagibig" id="deleteValuePagibig" type="hidden" value="">
				  </div>
				  <div class="modal-footer" style="text-align: center;">
					<button type="submit" name="deleteConfirmedPagibig" id="deleteConfirmedPagibig" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				  </div>
				</div>
			</form>
			<?php
				if(isset($_POST['deleteConfirmedPagibig'])){
					$tmp = $_POST['deleteValuePagibig'];
					$query = mysqli_query($connection, "Delete from bracket_pagibig where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message (Pagibig) -->
		
		<!-- Modal for Add Withholding tax -->
		<div class="modal fade" id="addTaxModal" tabindex="-1" role="dialog" aria-labelledby="addTaxModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addTaxModalLabel">Withholding Tax Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-4">Status:</label>
											<div class="col-sm-8">
												<input class='form-control' name='status' id=''>	
											</div>
											
											<label class="control-label col-sm-4">Status (Initial):</label>
											<div class="col-sm-8">
												<input class='form-control' name='statusInitial' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='bracketFrom' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='bracketTo' id=''>
											</div>
											
											<label class="control-label col-sm-4">Over (%):</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='over' id=''>
											</div>
											
											<label class="control-label col-sm-4">Bracket Tax:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='bracketTax' id=''>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddTax" id="saveAddTax" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						
						<?php
							if(isset($_POST['saveAddTax'])){
								$status = $_POST['status'];
								$statusInitial = $_POST['statusInitial'];
								$bracketFrom = $_POST['bracketFrom'];
								$bracketTo = $_POST['bracketTo'];
								$over = $_POST['over'];
								$bracketTax = $_POST['bracketTax'];
								
								$query = mysqli_query($connection, "INSERT INTO bracket_tax (TaxStatus, TaxStatusShort, SalaryRateStart, SalaryRateEnd, TaxOver, TaxAmount) VALUES('$status','$statusInitial', '$bracketFrom', '$bracketTo', '$over', '$bracketTax')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Withholding tax -->
		<div class="modal fade" id="editTaxModal" tabindex="-1" role="dialog" aria-labelledby="editTaxModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editTaxModalLabel">Withholding Tax Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
												if(isset($_POST['editTax'])){
											
													$query = mysqli_query($connection, "select * from bracket_tax where ID = '" . $_POST['editTax'] . "'");
													$row = $query->fetch_assoc();
													echo "<input type='hidden' name='id' value='" . $_POST['editTax'] . "'>";
														
											?>
											<label class="control-label col-sm-4">Status:</label>
											<div class="col-sm-8">
												<input class='form-control' name='status' value='<?php echo $row['TaxStatus']; ?>'>	
											</div>
											
											<label class="control-label col-sm-4">Status (Initial):</label>
											<div class="col-sm-8">
												<input class='form-control' name='statusInitial' value='<?php echo $row['TaxStatusShort']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='bracketFrom' value='<?php echo $row['SalaryRateStart']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='bracketTo' value='<?php echo $row['SalaryRateEnd']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Over (%):</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='over' value='<?php echo $row['TaxOver']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Bracket Tax:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='bracketTax' value='<?php echo $row['TaxAmount']; ?>'>
											</div>
											<?php
												}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditTax" id="saveEditTax" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						
						<?php
							if(isset($_POST['saveEditTax'])){
								$id = $_POST['id'];
								$status = $_POST['status'];
								$statusInitial = $_POST['statusInitial'];
								$bracketFrom = $_POST['bracketFrom'];
								$bracketTo = $_POST['bracketTo'];
								$over = $_POST['over'];
								$bracketTax = $_POST['bracketTax'];
								
								$query = mysqli_query($connection, "UPDATE bracket_tax SET TaxStatus = '$status', TaxStatusShort = '$statusInitial', SalaryRateStart = '$bracketFrom', SalaryRateEnd = '$bracketTo', TaxOver = '$over', TaxAmount = '$bracketTax' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Add SSS -->
		<div class="modal fade" id="addSSSModal" tabindex="-1" role="dialog" aria-labelledby="addSSSModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addSSSModalLabel">SSS Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											
											<label class="control-label col-sm-4">SSS Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='SSSCode' id=''>	
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryFrom' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryTo' id=''>
											</div>
											
											<label class="control-label col-sm-4">Credit:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='credit'>
											</div>
											
											<label class="control-label col-sm-4">SS-ER:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='ss-er'>
											</div>
											
											<label class="control-label col-sm-4">SS-EE:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='ss-ee'>
											</div>
											
											<label class="control-label col-sm-4">SS-Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='ss-total'>
											</div>
											
											<label class="control-label col-sm-4">EC-ER:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='ec-er' id=''>
											</div>
											
											<label class="control-label col-sm-4">TC-ER:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='tc-er'>
											</div>
											
											<label class="control-label col-sm-4">TC-EE:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='tc-ee'>
											</div>
											
											<label class="control-label col-sm-4">TC-Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='tc-total'>
											</div>
											
											<label class="control-label col-sm-4">Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='total'>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddSSS" id="saveAddSSS" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddSSS'])){
								$code = $_POST['SSSCode'];
								$description = $_POST['description'];
								$salaryFrom = $_POST['salaryFrom'];
								$salaryTo = $_POST['salaryTo'];
								$credit = $_POST['credit'];
								$ssER = $_POST['ss-er'];
								$ssEE = $_POST['ss-ee'];
								$ssTotal = $_POST['ss-total'];
								$ecER = $_POST['ec-er'];
								$tcER = $_POST['tc-er'];
								$tcEE = $_POST['tc-ee'];
								$tcTotal = $_POST['tc-total'];
								$total = $_POST['total'];
								
								$query = mysqli_query($connection, "INSERT INTO bracket_sss (SSSCode, Description, SalaryRateStart, SalaryRateEnd, SalaryCredit, SSer, SSee, SStotal, ECer, TCer, TCee, TCtotal, SSSAmount) VALUES('$code','$description', '$salaryFrom', '$salaryTo', '$credit', '$ssER', '$ssEE', '$ssTotal', '$ecER', '$tcER', '$tcEE', '$tcTotal', '$total')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit SSS -->
		<div class="modal fade" id="editSSSModal" tabindex="-1" role="dialog" aria-labelledby="editSSSModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editSSSModalLabel">SSS Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
											if(isset($_POST['editSSS'])){
										
												$query = mysqli_query($connection, "select * from bracket_sss where ID = '" . $_POST['editSSS'] . "'");
												$row = $query->fetch_assoc();
												echo "<input type='hidden' name='id' value='" . $_POST['editSSS'] . "'>";
											
											?>
											<label class="control-label col-sm-4">SSS Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='SSSCode' value='<?php echo $row['SSSCode']; ?>'>	
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' value='<?php echo $row['Description']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryFrom' value='<?php echo $row['SalaryRateStart']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryTo' value='<?php echo $row['SalaryRateEnd']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Credit:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='credit' value='<?php echo $row['SalaryCredit']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">SS-ER:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='ss-er' value='<?php echo $row['SSer']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">SS-EE:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='ss-ee' value='<?php echo $row['SSee']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">SS-Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='ss-total' value='<?php echo $row['SStotal']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">EC-ER:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='ec-er' value='<?php echo $row['ECer']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">TC-ER:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='tc-er' value='<?php echo $row['TCer']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">TC-EE:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='tc-ee' value='<?php echo $row['TCee']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">TC-Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='tc-total' value='<?php echo $row['TCtotal']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='total' value='<?php echo $row['SSSAmount']; ?>'>
											</div>
											<?php 
												}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditSSS" id="saveEditSSS" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditSSS'])){
								$id = $_POST['id'];
								$code = $_POST['SSSCode'];
								$description = $_POST['description'];
								$salaryFrom = $_POST['salaryFrom'];
								$salaryTo = $_POST['salaryTo'];
								$credit = $_POST['credit'];
								$ssER = $_POST['ss-er'];
								$ssEE = $_POST['ss-ee'];
								$ssTotal = $_POST['ss-total'];
								$ecER = $_POST['ec-er'];
								$tcER = $_POST['tc-er'];
								$tcEE = $_POST['tc-ee'];
								$tcTotal = $_POST['tc-total'];
								$total = $_POST['total'];
								
								$query = mysqli_query($connection, "Update bracket_sss Set SSSCode = '$code', Description = '$description', SalaryRateStart = '$salaryFrom', SalaryRateEnd = '$salaryTo', SalaryCredit = '$credit', SSer = '$ssER', SSee = '$ssEE', SStotal = '$ssTotal', ECer = '$ecER', TCer = '$tcER', TCee = '$tcEE', TCtotal = '$tcTotal', SSSAmount = '$total' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Add Philhealth -->
		<div class="modal fade" id="addPhilhealthModal" tabindex="-1" role="dialog" aria-labelledby="addPhilhealthModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addPhilhealthModalLabel">Philhealth Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											
											<label class="control-label col-sm-4">Philhealth Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='philhealthCode' id=''>
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryFrom' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryTo' id=''>
											</div>
											
											<label class="control-label col-sm-4">Salary Credit:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryCredit' id=''>
											</div>
											
											<label class="control-label col-sm-4">Employee Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='employeeShare'>
											</div>
											
											<label class="control-label col-sm-4">Employer Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='employerShare'>
											</div>
											
											<label class="control-label col-sm-4">Total Contribution:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='totalContribution'>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddPH" id="saveAddPH" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddPH'])){
								$philhealthCode = $_POST['philhealthCode'];
								$description = $_POST['description'];
								$salaryFrom = $_POST['salaryFrom'];
								$salaryTo = $_POST['salaryTo'];
								$salaryCredit = $_POST['salaryCredit'];
								$employeeShare = $_POST['employeeShare'];
								$employerShare = $_POST['employerShare'];
								$totalContribution = $_POST['totalContribution'];
								
								$query = mysqli_query($connection, "INSERT INTO bracket_philhealth (PhilHealthCode, Description, SalaryRateStart, SalaryRateEnd, SalaryCredit, PHee, PHer, PhilhealthAmount) VALUES('$philhealthCode','$description', '$salaryFrom', '$salaryTo', '$salaryCredit', '$employeeShare', '$employerShare', '$totalContribution')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Philhealth -->
		<div class="modal fade" id="editPhilhealthModal" tabindex="-1" role="dialog" aria-labelledby="editPhilhealthModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editPhilhealthModalLabel">Philhealth Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
												if(isset($_POST['editPH'])){
											
													$query = mysqli_query($connection, "select * from bracket_philhealth where ID = '" . $_POST['editPH'] . "'");
													$row = $query->fetch_assoc();
													echo "<input type='hidden' name='id' value='" . $_POST['editPH'] . "'>";
											?>
											<label class="control-label col-sm-4">Philhealth Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='philhealthCode' value='<?php echo $row['PhilHealthCode']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' value='<?php echo $row['Description']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryFrom' value='<?php echo $row['SalaryRateStart']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryTo' value='<?php echo $row['SalaryRateEnd']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary Credit:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryCredit' value='<?php echo $row['SalaryCredit']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Employee Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='employeeShare' value='<?php echo $row['PHee']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Employer Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='employerShare' value='<?php echo $row['PHer']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Total Contribution:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='totalContribution' value='<?php echo $row['PhilhealthAmount']; ?>'>
											</div>
											<?php
												}
											?>
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddPH" id="saveAddPH" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditPH'])){
								$id = $_POST['id'];
								$philhealthCode = $_POST['philhealthCode'];
								$description = $_POST['description'];
								$salaryFrom = $_POST['salaryFrom'];
								$salaryTo = $_POST['salaryTo'];
								$salaryCredit = $_POST['salaryCredit'];
								$employeeShare = $_POST['employeeShare'];
								$employerShare = $_POST['employerShare'];
								$totalContribution = $_POST['totalContribution'];
								
								$query = mysqli_query($connection, "UPDATE bracket_philhealth SET PhilHealthCode = '$philhealthCode', Description = '$description', SalaryRateStart = '$salaryFrom', SalaryRateEnd = '$salaryTo', SalaryCredit = $salaryCredit', PHee = '$employeeShare', PHer = '$employerShare', PhilhealthAmount = '$totalContribution' Where ID = '$id'");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Add Pagibig -->
		<div class="modal fade" id="addPagibigModal" tabindex="-1" role="dialog" aria-labelledby="addPagibigModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addPagibigModalLabel">Pagibig Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											
											<label class="control-label col-sm-4">Pagibig Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='pagibigCode'>
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description'>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryFrom'>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='salaryTo' >
											</div>
											
											<label class="control-label col-sm-4">EE Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='eeShare'>
											</div>
											
											<label class="control-label col-sm-4">ER Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='erShare'>
											</div>
											
											<label class="control-label col-sm-4">Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" value='0.00' class='form-control' name='total'>
											</div>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveAddPI" id="saveAddPI" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveAddPI'])){
								$pagibigCode = $_POST['pagibigCode'];
								$description = $_POST['description'];
								$salaryFrom = $_POST['salaryFrom'];
								$salaryTo = $_POST['salaryTo'];
								$eeShare = $_POST['eeShare'];
								$erShare = $_POST['erShare'];
								$total = $_POST['total'];
								
								$query = mysqli_query($connection, "INSERT INTO bracket_pagibig (PagibigCode, Description, SalaryRateStart, SalaryRateEnd, PIee, PIer, PagibigAmount) VALUES('$pagibigCode','$description', '$salaryFrom', '$salaryTo', '$eeShare', '$erShare', '$total')");
									
							}
						?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<!-- Modal for Edit Pagibig -->
		<div class="modal fade" id="editPagibigModal" tabindex="-1" role="dialog" aria-labelledby="editPagibigModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editPagibigModalLabel">Pagibig Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<?php
												if(isset($_POST['editPI'])){
											
													$query = mysqli_query($connection, "select * from bracket_pagibig where ID = '" . $_POST['editPI'] . "'");
													$row = $query->fetch_assoc();
													echo "<input type='hidden' name='id' value='" . $_POST['editPI'] . "'>";
											?>
											<label class="control-label col-sm-4">Pagibig Code:</label>
											<div class="col-sm-8">
												<input class='form-control' name='pagibigCode' value='<?php echo $row['PagibigCode']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Description:</label>
											<div class="col-sm-8">
												<input class='form-control' name='description' value='<?php echo $row['Description']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary From:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryFrom' value='<?php echo $row['SalaryRateStart']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">Salary To:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='salaryTo' value='<?php echo $row['SalaryRateEnd']; ?>'>
											</div>
											
											<label class="control-label col-sm-4">EE Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='eeShare' value="<?php echo $row['PIee']; ?>">
											</div>
											
											<label class="control-label col-sm-4">ER Share:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='erShare' value="<?php echo $row['PIer']; ?>">
											</div>
											
											<label class="control-label col-sm-4">Total:</label>
											<div class="col-sm-8">
												<input type='number' step="0.01" class='form-control' name='total' value="<?php echo $row['PagibigAmount']; ?>">
											</div>
											<?php
												}
											?>
											
										</div>
										<br />
										<div style="text-align: center;'">
											<button type="submit" name="saveEditPI" id="saveEditPI" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php
							if(isset($_POST['saveEditPI'])){
								$id = $_POST['id'];
								$pagibigCode = $_POST['pagibigCode'];
								$description = $_POST['description'];
								$salaryFrom = $_POST['salaryFrom'];
								$salaryTo = $_POST['salaryTo'];
								$eeShare = $_POST['eeShare'];
								$erShare = $_POST['erShare'];
								$total = $_POST['total'];
								
								$query = mysqli_query($connection, "UPDATE bracket_pagibig SET PagibigCode = '$pagibigCode', Description = '$description', SalaryRateStart = '$salaryFrom', SalaryRateEnd = '$salaryTo', PIee = '$eeShare', PIer = '$erShare', PagibigAmount = '$total' Where ID = '$id'");
									
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
			$('#dataTables-withholdingtax').DataTable({
				  responsive: true
			});
			$('#dataTables-sss').DataTable({
				  responsive: true
			});
			$('#dataTables-philhealth').DataTable({
				  responsive: true
			});
			$('#dataTables-pagibig').DataTable({
				  responsive: true
			});
		});
		
		// Update Tax table
		$( "#deleteTax" ).change(function () {
			$.get('tax-body.php', function(data) {
				$('#tax-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddTax" ).change(function () {
			$.get('tax-body.php', function(data) {
				$('#tax-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditTax" ).change(function () {
			$.get('tax-body.php', function(data) {
				$('#tax-body').html(data);    
			});
		})
		.change();
		
		// Update SSS Table
		$( "#deleteSSS" ).change(function () {
			$.get('sss-body.php', function(data) {
				$('#sss-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddSSS" ).change(function () {
			$.get('sss-body.php', function(data) {
				$('#sss-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditSSS" ).change(function () {
			$.get('sss-body.php', function(data) {
				$('#sss-body').html(data);    
			});
			
		})
		.change();
		
		// Update Philhealth table
		$( "#deletePH" ).change(function () {
			$.get('philhealth-body.php', function(data) {
				$('#philhealth-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddPH" ).change(function () {
			$.get('philhealth-body.php', function(data) {
				$('#philhealth-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditPH" ).change(function () {
			$.get('philhealth-body.php', function(data) {
				$('#philhealth-body').html(data);    
			});
			
		})
		.change();
		
		// Update Pagibig table
		$( "#deletePI" ).change(function () {
			$.get('pagibig-body.php', function(data) {
				$('#pagibig-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveAddPI" ).change(function () {
			$.get('pagibig-body.php', function(data) {
				$('#pagibig-body').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEditPI" ).change(function () {
			$.get('pagibig-body.php', function(data) {
				$('#pagibig-body').html(data);    
			});
		})
		.change();
		
		
	</script>
	
</body>
</html>