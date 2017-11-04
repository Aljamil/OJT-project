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
                    <h1 class="page-header">Holiday</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form role='form' method='post'>
									<div class='pull-left' style="padding: 15px 0 20px 0;">
										<button data-toggle="modal" data-target="#addModal" type="button" class="btn btn-primary">Add Holiday</button>
									</div>
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">	
													<div class="dataTable_wrapper" id="holidayBody">
														<table class="table table-striped table-bordered table-hover" id="dataTables-holiday">
															<thead>
																<tr>
																	<th>ID</th>
																	<th>Description</th>
																	<th>Date</th>
																	<th>Legal</th>
																	<th>Special</th>
																	<th>Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select * from holiday_date");
																	
																	if ($query->num_rows > 0) {		
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			echo "<tr><td>" . $row['ID'] . "</td>";
																			echo "<td>" . $row['Description'] . "</td>";
																			echo "<td>" . $row['SystemDate'] . "</td>";
																			if($row['IsRegular'] == '1'){
																				echo "<td>True</td>";
																			}else{
																				echo "<td>True</td>";
																			}
																			if($row['IsSpecial'] == '1'){
																				echo "<td>True</td>";
																			}else{
																				echo "<td>True</td>";
																			}
																			$tmp = $row['ID'];
																			echo <<< EOT
																				<td>
																					<button type="submit" class="btn-xs btn-danger" id="delete" name="delete" value='$tmp'>Delete</button>
													
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
		
		<!-- Holiday Delete Feature -->
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
		<!-- End of Holiday Delete Feature -->
		
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
					$query = mysqli_query($connection, "Delete from holiday_date where ID = '$tmp'");
				}
			?>
		  </div>
		</div>
		<!-- End for Delete Confirmation Message -->
		
		<!-- Holiday Edit Feature -->
		<?php
			if(isset($_POST['edit'])){
				
				echo "<script type='text/javascript'>
						$(document).ready(function(){
							$('#editModal').modal('show');
						});
					</script>";
				
			}
		?>
		<!-- End of Holiday Edit Feature -->
		
		<!-- Modal for Add -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addModalLabel">Holiday Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-2">Description:</label>
											<div class="col-sm-10">
												<input class='form-control' name='description' id=''>	
											</div>
											
											<label class="control-label col-sm-2 ">Date:</label>
											<div class="col-sm-10">
												<input class='form-control' type="date" name='date'>	
											</div>
											
											
										</div>
										<div class='form-group'>
											<div class='col-sm-2'></div>
											<div class="col-sm-10">
												<div class="radio">
												  <label><input type="radio" name="holiday" value="regular" checked>Regular Holiday</label>
												</div>
												<div class="radio">
												  <label><input type="radio" name="holiday" value="special">Special Holiday</label>
												</div>
											</div>
										</div>
										<div style="text-align: center;'">
											<button type="submit" id="save" name="save" class="btn btn-primary">Save</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						
						<?php
							if(isset($_POST['save'])){
								$description = $_POST['description'];
								$date = $_POST['date'];
								$regular = ($_POST['holiday'] == "regular" ? '1' : '0');
								$special = ($_POST['holiday'] == "special" ? '1' : '0');
								
								$query = mysqli_query($connection, "INSERT INTO holiday_date (Description, SystemDate, IsRegular, IsSpecial) VALUES('" . $description . "', '" . $date."', '" . $regular ."', '" . $special . "')");
									
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
						<h4 class="modal-title" id="editModalLabel">Holiday Property</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-2">Description:</label>
											<div class="col-sm-10">
												<?php
													if(isset($_POST['edit'])){
												
														$query = mysqli_query($connection, "select * from holiday_date where ID = '" . $_POST['edit'] . "'");
														if ($query->num_rows > 0) {		
															while($row = $query->fetch_assoc()) {
																echo "<input type='hidden' name='id' value='" . $_POST['edit'] . "'>";
																echo "<input class='form-control' name='description' value='" . $row['Description'] . "'>";
												?>
													
											</div>
											
											<label class="control-label col-sm-2 ">Date:</label>
											<div class="col-sm-10">
												<?php
													echo "<input class='form-control' type='date' name='date' value='" . $row['SystemDate'] . "'>";
												?>
												
											</div>
											
											
										</div>
										<div class='form-group'>
											<div class='col-sm-2'></div>
											<div class="col-sm-10">
												<div class="radio">
													<?php
														echo "<label><input type='radio' name='holiday' value='regular' ";
														if($row['IsRegular'] == '1'){
															echo "checked";
														}
														echo ">Regular Holiday</label>"
													?>
												  
												</div>
												<div class="radio">
													<?php
														echo "<label><input type='radio' name='holiday' value='special' ";
														if($row['IsSpecial'] == '1'){
															echo "checked";
														}
														echo ">Special Holiday</label>";
														}
														}
													}
													?>
												</div>
											</div>
										</div>
										<div style="text-align: center;'">
											<button type="submit" id="saveEdit" name="saveEdit" class="btn btn-primary">Save</button>
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
								$date = $_POST['date'];
								$regular = ($_POST['holiday'] == "regular" ? '1' : '0');
								$special = ($_POST['holiday'] == "special" ? '1' : '0');
								
								$query = mysqli_query($connection, "Update holiday_date Set Description = '$description', SystemDate = '$date', IsRegular = '$regular', IsSpecial = '$special' Where ID = '$id'");
									
							}
						?>
					
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
    </div>
	
	<script>
		// Make data table responsive
		$(document).ready(function() {
			$('#dataTables-holiday').DataTable({
				  responsive: true
			});
			
		});
		
		$( "#delete" ).change(function () {
			$.get('holiday-body.php', function(data) {
				$('#holidayBody').html(data);    
			});
			
		})
		.change();
		
		$( "#save" ).change(function () {
			$.get('holiday-body.php', function(data) {
				$('#holidayBody').html(data);    
			});
			
		})
		.change();
		
		$( "#saveEdit" ).change(function () {
			$.get('holiday-body.php', function(data) {
				$('#holidayBody').html(data);    
			});
			
		})
		.change();
		
		
		
	</script>
	
	<?php
		require('../ojt/home-modals.php');
		require('../ojt/footer.php');
	?>
	
</body>
</html>