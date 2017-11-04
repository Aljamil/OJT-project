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
			<!-- DTR Format -->
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DTR Format</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-8 col-md-offset-2">
								<form role='form' method='post' >
									<div class="row">
											<div class='col-lg-12'>
												<div class="panel panel-default">
													<div class="panel-body" id = 'dtr-format-body'>	
														<div class='row'>
															<div class="col-md-6">
																<img src="../ojt/images/dtr-format-1.png" class="img-responsive center-block" alt="DTR Format 1" />
															</div>
															
															<div class="col-md-6">
																<div class="radio">
																	<?php
																		$query = mysqli_query($connection, "select FormatDTR from setting");
	
																		if ($query->num_rows > 0) {		
																			$row = $query->fetch_assoc();
																			
																			if($row['FormatDTR'] == '1'){
																				echo "<label><input type='radio' value='1' name='dtr-format' checked>Format 1, with Verify and Noted person</label>";
																			}else{
																				echo "<label><input type='radio' value='1' name='dtr-format'>Format 1, with Verify and Noted person</label>";
																			}
																	?>
																  
																</div>
															</div>
														</div>
														<div class='row'>
															<div class="col-md-6">
																<img src="../ojt/images/dtr-format-2.png" class="img-responsive center-block" alt="DTR Format 2" >
															</div>
															
															<div class="col-md-6">
																<div class="radio">
																	<?php
																		if($row['FormatDTR'] == '2'){
																			echo "<label><input type='radio' value='2' name='dtr-format' checked>Format 2, with Verify and Noted person interchange</label>";
																		}else{
																			echo "<label><input type='radio' value='2' name='dtr-format'>Format 2, with Verify and Noted person interchange</label>";
																		}
																	?>
																  
																</div>
															</div>
														</div>
														<div class='row'>
															<div class="col-md-6">
																<img src="../ojt/images/dtr-format-3.png" class="img-responsive center-block" alt="DTR Format 3" >
															</div>
															
															<div class="col-md-6">
																<div class="radio">
																  <?php
																	if($row['FormatDTR'] == '3'){
																		echo "<label><input type='radio' value='3' name='dtr-format' checked>Format 3, with Verify person only</label>";
																	}else{
																		echo "<label><input type='radio' value='3' name='dtr-format'>Format 3, with Verify person only</label>";
																	}
																	}
																  ?>
																  
																</div>
															</div>
														</div>
														
													</div>
													<!-- /.panel-body -->
													<div style="text-align: center;">
														<button type="submit" id='save' name="save" class="btn btn-primary">Save</button>
													</div>
													<br />
												</div>
												<!-- /.panel -->
											</div>
									</div>
								</form>
								<?php
									if(isset($_POST['save'])){
										$dtr = $_POST['dtr-format'];
										$query = mysqli_query($connection, "UPDATE setting SET FormatDTR = '$dtr'");
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
			<!-- End of DTR Format -->
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
    </div>
	
	<?php
		require('../ojt/home-modals.php');
		require('../ojt/footer.php');
	?>
	<script>
		$( "#save" ).change(function () {
			
			$.get('dtr-format-body.php', function(data) {
				$('#dtr-format-body').html(data);    
			});
			
		})
		.change();
	</script>
		
</body>
</html>