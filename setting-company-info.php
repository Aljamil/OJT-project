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
			<!-- Company Information -->
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Company Information</h1>
                </div>
				<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" role='form' method='post'>
								<div class="row">
										<div class="panel panel-default">
											
											<div class="panel-body">
												<!-- Left -->
												<div class="col-md-6" id='company-info'>
													<div class="form-group">
														<label class="control-label col-sm-4">Company Name:</label>
														<div class="col-sm-8">
															<?php
																$query = mysqli_query($connection, "select * from setting Where ID = '1'");
																$row = $query->fetch_assoc();
																
																$companyName = $row['CompanyName'];
																$companyAddress = $row['CompanyAddress'];
																$companyZipCode = $row['CompanyZipCode'];
																$companyContactNo = $row['CompanyContactNo'];
																$companyOwner = $row['CompanyOwner'];
																$companySSS = $row['CompanySSS'];
																$companyTIN = $row['CompanyTIN'];
																$companyPI = $row['CompanyPI'];
																$companyPH = $row['CompanyPH'];
																$reportHead1 = $row['ReportHead1'];
																$reportHead2 = $row['ReportHead2'];
																$reportHead3 = $row['ReportHead3'];
																
																echo "<input class='form-control' name='companyName' value='$companyName'>";
															?>
															
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Address:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyAddress' value='$companyAddress'>";
															?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Zip Code:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyZipCode' value='$companyZipCode'>";	
															?>
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Contact No.:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyContactNo' value='$companyContactNo'>";
															?>
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Owner:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyOwner' value='$companyOwner'>";
															?>
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Tin No.:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyTIN' value='$companyTIN'>";	
															?>
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">SSS. No.:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companySSS' value='$companySSS'>";
															?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Pagibig ID No.:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyPI' value='$companyPI'>";
															?>
															
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Philhealth No.:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='companyPH' value='$companyPH'>";
															?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Report Head1:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='reportHead1' value='$reportHead1'>";
															?>	
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Report Head2:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='reportHead2' value='$reportHead2'>";
															?>	
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-sm-4">Report Head3:</label>
														<div class="col-sm-8">
															<?php
																echo "<input class='form-control' name='reportHead3' value='$reportHead3'>";
															?>	
														</div>
													</div>
												</div>
												<!-- Right -->
												<div class="col-md-6">
													<?php
														$query = mysqli_query($connection, "SELECT CompanyLogo, CompanyLogo1 FROM setting WHERE ID = '1'");
														$row = $query->fetch_assoc();
													?>
													<div class="col-md-6" style="text-align:center;">
														<div class="row" >
															Logo 1
														</div>
														<div class="row">
															<div style="height: 215px;padding: 4px; border: 1px solid #ddd;border-radius: 4px;text-align: center;margin: 0 2px 0 2px;" id="logo1-body">
																
															</div>
															<div class="caption" style="margin-top: 10px;">
																<center>
																	<button type="button" data-target="#addLogo1Modal" data-toggle="modal" class="btn btn-primary" >Browse</button>
																	<button type="button" data-target="#deleteLogo1Modal" data-toggle="modal" class="btn btn-success">Clear</button>
																</center>
															</div>
														</div>
														
													</div>
													<div class="col-md-6">
														<div class="row" style="text-align:center;">
															Logo 2
														</div>
														<div class="row">
															<div style="height: 215px;padding: 4px; border: 1px solid #ddd;border-radius: 4px;text-align: center;margin: 0 2px 0 2px;" id="logo2-body">
																
															</div>
															<div class="caption" style="margin-top: 10px;">
																<center>
																	<button type="button" data-target="#addLogo2Modal" data-toggle="modal" class="btn btn-primary" >Browse</button>
																	<button type="button" data-target="#deleteLogo2Modal" data-toggle="modal" class="btn btn-success">Clear</button>
																</center>
															</div>
														</div>
													</div>
													
													
												</div>
												
											</div>
											<!-- /.panel-body -->
											
											<div style="text-align: center;">
												<button type="submit" name="save" id= "save" class="btn btn-primary">Save</button>
											</div>
											<br />
										</div>
										<!-- /.panel -->
								</div>
							</form>
							<?php
								if(isset($_POST['save'])){
									
									$companyName = $_POST['companyName'];
									$companyAddress = $_POST['companyAddress'];
									$companyZipCode = $_POST['companyZipCode'];
									$companyContactNo = $_POST['companyContactNo'];
									$companyOwner = $_POST['companyOwner'];
									$companySSS = $_POST['companySSS'];
									$companyTIN = $_POST['companyTIN'];
									$companyPI = $_POST['companyPI'];
									$companyPH = $_POST['companyPH'];
									$reportHead1 = $_POST['reportHead1'];
									$reportHead2 = $_POST['reportHead2'];
									$reportHead3 = $_POST['reportHead3'];
									$query = mysqli_query($connection, "UPDATE setting SET CompanyName = '$companyName', CompanyAddress = '$companyAddress', CompanyZipCode = '$companyZipCode', CompanyContactNo = '$companyContactNo', CompanyOwner = '$companyOwner', CompanySSS = '$companySSS', CompanyTIN = '$companyTIN', CompanyPI = '$companyPI', CompanyPH = '$companyPH', ReportHead1 = '$reportHead1', ReportHead2 = '$reportHead2', ReportHead3 = '$reportHead3' Where ID = '1'");
									
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
			<!-- End of Company Information-->
			</div>
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
		
		<!-- Modal for Add Company Logo 1-->
		<div class="modal fade" id="addLogo1Modal" tabindex="-1" role="dialog" aria-labelledby="addLogo1ModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="post" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="addLogo1ModalLabel">Add Logo 1</h4>
						</div>
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-xs-3" for="file">Photo:</label>
									<div class="col-xs-9">
										<input type="file" accept="image/jpeg" name="logo">
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.form-horizontal -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Submit" name="submitLogo1" id="submitLogo1">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<?php
			if(isset($_POST['submitLogo1'])){
				$tmpName = $_FILES['logo']['tmp_name'];
				// Read the file
				$fp = fopen($tmpName, 'r');
				$data = fread($fp, filesize($tmpName));
				$data = addslashes($data);
				fclose($fp);
				
				$query = mysqli_query($connection, "UPDATE setting SET CompanyLogo = '$data' WHERE ID = '1'");
			}
		?>
		
		<!-- Modal for Delete Company Logo 1-->
		<div class="modal fade" id="deleteLogo1Modal" tabindex="-1" role="dialog" aria-labelledby="deleteLogo1ModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="POST" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Delete Picture</h4>
						</div>
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<div class="col-xs-12">
										<p>
											Are you sure you want to delete the company logo?
										</p>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.form-horizontal -->
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="deleteLogo1">Delete</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</form>
					<?php
						if(isset($_POST['deleteLogo1'])){
							$query = mysqli_query($connection, "UPDATE setting SET CompanyLogo = NULL WHERE ID = '1'");
						}
					?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		
		<!-- Modal for Company Logo 2 -->
		<div class="modal fade" id="addLogo2Modal" tabindex="-1" role="dialog" aria-labelledby="addLogo2ModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="post" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="addLogo2ModalLabel">Add Logo 2</h4>
						</div>
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<label class="col-xs-3" for="file">Photo:</label>
									<div class="col-xs-9">
										<input type="file" accept="image/jpeg" name="logo2">
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.form-horizontal -->
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-primary" value="Submit" name="submitLogo2" id="submitLogo2">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<?php
			if(isset($_POST['submitLogo2'])){
				$tmpName = $_FILES['logo2']['tmp_name'];
				// Read the file
				$fp = fopen($tmpName, 'r');
				$data = fread($fp, filesize($tmpName));
				$data = addslashes($data);
				fclose($fp);
				
				$query = mysqli_query($connection, "UPDATE setting SET CompanyLogo1 = '$data' WHERE ID = '1'");
			}
		?>
		
		<!-- Modal for Delete Company Logo 2-->
		<div class="modal fade" id="deleteLogo2Modal" tabindex="-1" role="dialog" aria-labelledby="deleteLogo2ModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="POST" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Delete Picture</h4>
						</div>
						<div class="modal-body">
							<div class="form-horizontal">
								<div class="form-group">
									<div class="col-xs-12">
										<p>
											Are you sure you want to delete the company logo?
										</p>
									</div>
								</div>
								<!-- /.form-group -->
							</div>
							<!-- /.form-horizontal -->
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="deleteLogo2">Delete</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						</div>
					</form>
					<?php
						if(isset($_POST['deleteLogo2'])){
							$query = mysqli_query($connection, "UPDATE setting SET CompanyLogo1 = NULL WHERE ID = '1'");
						}
					?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
    </div>
	
	<?php
		require('../ojt/home-modals.php');
		require('../ojt/footer.php');
	?>
	
	<script>
		$(document).ready(function(){
			$( "#submitLogo1" ).change(function () {
				$.get('setting-logo1.php', function(data) {
					$('#logo1-body').html(data);    
				});
				
			}).change();
			
			$( "#submitLogo2" ).change(function () {
				$.get('setting-logo2.php', function(data) {
					$('#logo2-body').html(data);    
				});
				
			}).change();
		});
		$( "#save" ).change(function () {
			$.get('company-info-body.php', function(data) {
				$('#company-info').html(data); 
			});
			
		}).change();
		
	</script>
	
</body>
</html>