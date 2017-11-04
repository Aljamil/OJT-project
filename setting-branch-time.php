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
                    <h1 class="page-header">Reader Time</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<form role='form' method='post'>
									<div class='pull-left' style="padding: 15px 0 20px 0;">
										<button data-toggle="modal" data-target="#setModal" type="button" class="btn btn-primary">Set Reader Time</button>
									</div>
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body">	
													<div class="dataTable_wrapper">
														<table class="table table-striped table-bordered table-hover" id="dataTables-holiday">
															<thead>
																<th>Date</th>
																<th>Opening</th>
																<th>Closing</th>
															</thead>
															<tbody id='branch-time-body'>
																
															</tbody>
															
														</table>
														<div style="text-align: center;'">
															<button type="submit" name="save" id='save' class="btn btn-primary">Save</button>
														</div>
													</div>
												</div>
												<!-- /.panel-body -->
											</div>
											<!-- /.panel -->
									</div>
								</form>
								<?php
								
								if(isset($_POST['save']) && isset($_POST['year'])){
									
									$year = $_POST['year'];
									$month = $_POST['month'];
									$days = $_POST['days'];
									$reader = $_POST['reader'];
									
									$query = mysqli_query($connection, "SELECT * FROM offset_time WHERE SystemDate = '$year-$month-01'");
									if ($query->num_rows > 0) {	
										// if date exist, just update
										for($i = 1; $i <= $days; $i++){
											if($i < 10){
												$i = "0" . $i;
											}
											$tmp1 = "open-" . $i;
											$open = $_POST['open-' . $i];
											$close = $_POST['close-' . $i];
											
											$query = mysqli_query($connection, "Update offset_time Set StartTime = '$open', EndTime = '$close', ReaderNumber = '$reader' Where SystemDate = '$year-$month-$i'");
										}
									}
									else{
										// otherwise, insert
										
										for($i = 1; $i <= $days; $i++){
											if($i < 10){
												$i = "0" . $i;
											}
											$open = $_POST['open-' . $i];
											$close = $_POST['close-' . $i];
											
											$query = mysqli_query($connection, "INSERT INTO offset_time (SystemDate, StartTime, EndTime, ReaderNumber) VALUES('$year-$month-$i','$open', '$close', '$reader')");
										}
									}
									echo <<< EOT
										<script>
											$( document ).ready(function() {
												$('#savedNotification').modal('show');
											});
										</script>
EOT;
								}
							?>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- End of Holiday -->
		</div>
        <!-- /#page-wrapper -->
		
		<!-- Modal for Saved Notification -->
		<div id="savedNotification" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content" >
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Saved Notification</h4>
			  </div>
			  <div class="modal-body" style="text-align: center;">
				<p>Saved successfully.</p>
			  </div>
			  <div class="modal-footer" style="text-align: center;">
				<button type="button" data-dismiss="modal" class="btn btn-primary">OK</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End for Saved Notification -->
		
		<!-- Modal for Set Reader Time -->
		<div class="modal fade" id="setModal" tabindex="-1" role="dialog" aria-labelledby="setModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="setModalLabel">Set Reader Time</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="post" id="formSet">
								
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="form-group">
											<label class="control-label col-sm-3">Reader:</label>
											<div class="col-sm-9">
												<select class='form-control' name='reader'>
													<?php
														$query = mysqli_query($connection, "select BranchName, ReaderNumber from branch");
														
														if ($query->num_rows > 0) {		
															// output data of each row
															while($row = $query->fetch_assoc()) {
																echo "<option value='" . $row['ReaderNumber'] . "' name='reader'>" . $row['BranchName'] . "</option>";
															}
														}
													?>
												</select>
											</div>
											<label class="control-label col-sm-3">Month:</label>
											<div class="col-sm-9">
												<select class='form-control' name='month'>
													<option value="01">January</option>
													<option value="02">February</option>
													<option value="03">March</option>
													<option value="04">April</option>
													<option value="05">May</option>
													<option value="06">June</option>
													<option value="07">July</option>
													<option value="08">August</option>
													<option value="09">September</option>
													<option value="010">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
											</div>
											<label class="control-label col-sm-3">Year:</label>
											<div class="col-sm-9">
												<input type="number" value='<?php echo date("Y"); ?>' class='form-control' name='year'>	
											</div>
										</div>
										
										<div style="text-align: center;'">
											<button type="submit" name="set" id='set' class="btn btn-primary" data-dismiss="modal">Set</button>
											<button class="btn btn-success" data-dismiss="modal">Cancel</button>
										</div>
										
									</div>
								</div>
							</div>
						</form>
						
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
		$( "#set" ).click(function () {
			event.preventDefault();
			$.ajax({
				type: "POST",
				url: "/ojt/branch-time-body.php",
				data: $('#formSet').serialize(), 
				success: function(data){
					$('#branch-time-body').html(data); 
				}
			});
			
		});
	</script>
	
</body>
</html>