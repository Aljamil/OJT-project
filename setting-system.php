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
                    <h1 class="page-header">System Setting</h1>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<form role='form' method='post'>
									<div class="row">
											<div class="panel panel-default">
												<div class="panel-body" id="system-body">
												<?php
													$main_query = mysqli_query($connection, "select * from setting");
													$main_row = $main_query->fetch_assoc();
													
													
													$TimeOffset = $main_row['TimeOffset'];
													$TimeOffsetAfter = $main_row['TimeOffsetAfter'];
													$TimeOffsetLater = $main_row['TimeOffsetLater'];
													$TimeHalfDay = $main_row['TimeHalfDay'];
													$TimeLunch = $main_row['TimeLunch'];
													$TimeLunchIn = $main_row['TimeLunchIn'];
													$IsHalfDay = $main_row['IsHalfDay'];
													$CodeLate = $main_row['CodeLate'];
													
													$PrintMono = $main_row['PrintMono'];
													$FormatDTRCopy = $main_row['FormatDTRCopy'];
													$PeriodSSS = $main_row['PeriodSSS'];
													$PeriodGSIS = $main_row['PeriodGSIS'];
													$PeriodPagibig = $main_row['PeriodPagibig'];
													$PeriodPhilhealth = $main_row['PeriodPhilhealth'];
													$PeriodTax = $main_row['PeriodTax'];
													$CodeHalfDay = $main_row['CodeHalfDay'];
													$RegularWorkDays = $main_row['RegularWorkDays'];
													$TravelOrderCode = $main_row['TravelOrderCode'];
													$AutoOT = $main_row['AutoOT'];
													$PrintComp = $main_row['PrintComp'];
													$PrintLogo = $main_row['PrintLogo'];
													$IsTravelOrderToDTR = $main_row['IsTravelOrderToDTR'];
													$IsLateThree = $main_row['IsLateThree'];
													$CodeHoliday = $main_row['CodeHoliday'];
													$CodeDayOff = $main_row['CodeDayOff'];
													$RegularWeekEnd = $main_row['RegularWeekEnd'];
													$PeriodProbi = $main_row['PeriodProbi'];
													$PeriodTrainee = $main_row['PeriodTrainee'];
													$IsAutoOT = $main_row['IsAutoOT'];
													$VerifyName = $main_row['VerifyName'];
													$VerifyDesg = $main_row['VerifyDesg'];
													$NotedName = $main_row['NotedName'];
													$NotedDesg = $main_row['NotedDesg'];
													$NoTimeCode = $main_row['NoTimeCode'];
													$MultiplyRegular = $main_row['MultiplyRegular'];
													$MultiplySpecial = $main_row['MultiplySpecial'];
													$MultiplyOvertime = $main_row['MultiplyOvertime'];
													$MultiplyRegularC = $main_row['MultiplyRegularC'];
													$MultiplySpecialC = $main_row['MultiplySpecialC'];
													$MultiplyOvertimeC = $main_row['MultiplyOvertimeC'];
												?>
												<!-- Left -->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-sm-5 pull-left">SSS:</label>
														<div class="col-sm-7">
															<select class='form-control' name='sss'>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select ID, Description from payroll_period");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			if($PeriodSSS == $row['ID']){
																				echo "<option value='" . $row['ID'] . "' selected>" . $row['Description'] . "</option>";
																			}
																			else{
																				echo "<option value='" . $row['ID'] . "'>" . $row['Description'] . "</option>";
																			}
																			
																		}
																	}
																?>
															</select>
														</div>
														
														<label class="control-label col-sm-5 pull-left">Philhealth:</label>
														<div class="col-sm-7">
															<select class='form-control' name='philhealth'>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select ID, Description from payroll_period");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			if($PeriodPhilhealth == $row['ID']){
																				echo "<option value='" . $row['ID'] . "' selected>" . $row['Description'] . "</option>";
																			}else{
																				echo "<option value='" . $row['ID'] . "'>" . $row['Description'] . "</option>";
																			}
																			
																		}
																	}
																?>
															</select>
														</div>
														
														<label class="control-label col-sm-5 pull-left">Pagibig:</label>
														<div class="col-sm-7">
															<select class='form-control' name='pagibig'>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select ID, Description from payroll_period");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			if($PeriodPagibig == $row['ID']){
																				echo "<option value='" . $row['ID'] . "' selected>" . $row['Description'] . "</option>";
																			}else{
																				echo "<option value='" . $row['ID'] . "'>" . $row['Description'] . "</option>";
																			}
																		}
																	}
																?>
															</select>
														</div>
														
														<label class="control-label col-sm-5 pull-left">Tax:</label>
														<div class="col-sm-7">
															<select class='form-control' name='tax'>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select ID, Description from payroll_period");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			if($PeriodTax == $row['ID']){
																				echo "<option value='" . $row['ID'] . "' selected>" . $row['Description'] . "</option>";
																			}else{
																				echo "<option value='" . $row['ID'] . "'>" . $row['Description'] . "</option>";
																			}
																			
																		}
																	}
																?>
															</select>
														</div>
														
														<label class="control-label col-sm-5 pull-left">GSIS:</label>
														<div class="col-sm-7">
															<select class='form-control' name='gsis'>
																<?php
																	// SQL query to fetch information of registerd users and finds user match.
																	$query = mysqli_query($connection, "select ID, Description from payroll_period");
																	
																	if ($query->num_rows > 0) {		
												
																		// output data of each row
																		while($row = $query->fetch_assoc()) {
																			if($PeriodGSIS == $row['ID']){
																				echo "<option value='" . $row['ID'] . "' selected>" . $row['Description'] . "</option>";
																			}else{
																				echo "<option value='" . $row['ID'] . "'>" . $row['Description'] . "</option>";
																			}
																			
																		}
																	}
																?>
															</select>
														</div>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name="printLogo" class='pull-left' <?php if($PrintLogo == '1'){echo " checked";}?>>&nbsp;Print Logo on Report (DTR....)</label>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name="printComputation" class='pull-left' <?php if($PrintComp == '1'){echo " checked";}?>>&nbsp;Print Computation on DTR (Absent, UT...)</label>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name="printDTRBlack" class='pull-left' <?php if($PrintMono == '1'){echo " checked";}?>>&nbsp;Print DTR in All Black</label>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name="printDuplicate" class='pull-left' <?php if($FormatDTRCopy == '1'){echo " checked";} ?>>&nbsp;Print DTR in Duplicate Copy</label>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name="isWeekEndRegular" class='pull-left' <?php if($RegularWeekEnd == '1'){echo " checked";} ?>>&nbsp;Is Weekend Regular (SAT/SUN will appear)</label>
														
														<label class="control-label col-sm-5 pull-left">Verify Name (DTR):</label>
														<div class="col-sm-7">
															<input class='form-control' name='verifyName' value='<?php echo $VerifyName;?>'>
														</div>
														
														<label class="control-label col-sm-5 pull-left">Verify Designation:</label>
														<div class="col-sm-7">
															<input class='form-control' name='verifyDesignation' value='<?php echo $VerifyDesg;?>'>
														</div>
														
														<label class="control-label col-sm-5 pull-left">Noted Name (DTR):</label>
														<div class="col-sm-7">
															<input class='form-control' name='notedNameDTR' value='<?php echo $NotedName;?>'>
															
															
														</div>
														
														<label class="control-label col-sm-5 pull-left">Noted Name Designation:</label>
														<div class="col-sm-7">
															<input class='form-control' name='notedNameDesignation' value='<?php echo $NotedDesg;?>'><br />
														</div>
														
														<label class="control-label col-sm-5 pull-left">No Time Code:</label>
														<div class="col-sm-7">
															<select class='form-control' name='timeCode'>
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from leave_type");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		
																		if($row['LeaveCode'] == $NoTimeCode){
																			echo "<option value='" . $row['LeaveCode'] . "' selected>" . $row['LeaveCode'] . "</option>";
																		}else{
																			echo "<option value='" . $row['LeaveCode'] . "'>" . $row['LeaveCode'] . "</option>";
																		}
																		
																	}
																}
															?>
															</select>
														</div>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name="autoOvertime" id="autoOvertime" class='pull-left' <?php if($IsAutoOT == '1'){echo " checked";} ?>>&nbsp;Automatic Overtime</label>
														
														<label class="control-label col-sm-5 pull-left">Base Overtime:</label>
														<div class="col-sm-7">
															<input type='number' step="0.01" class='form-control autoOvertime' name='baseOvertime' value='<?php echo $AutoOT;?>'>
														</div>
														
														<div class='col-sm-12'>
														<br /><br />
														*&nbsp;&nbsp;&nbsp; - Time extend from 08:00AM. Late entry will be based from Allowance (8AM) +  allowance (Morning).<br /><br />
														**&nbsp;&nbsp; - The time extended before getting late.<br /><br />
														***&nbsp; - To set automatic appearance of Half-Day to Daily Time record.<br /><br />
														**** - To set automatic deduction of 3Times late to payroll.
														
														
														</div>
													</div>
													
														
												</div>
												<!-- Right -->
												<div class="col-md-6">
													<div class='form-group'>
														<label class="control-label col-sm-6 pull-left">Allowance (8AM)*:</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='allowance8AM' value='<?php echo $TimeOffset;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Allowance (Morning)**:</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='allowanceMorning' value='<?php echo $TimeOffsetAfter;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Allowance (Afternoon)**:</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='allowanceAfternoon' value='<?php echo $TimeOffsetLater;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Minutes before Half-Day:</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='minutesBeforeHalfDay' value='<?php echo $TimeHalfDay;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Lunchbreak (Minutes):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='lunchbreakMinutes' value='<?php echo $TimeLunch;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Lunch Relogin (Minutes):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='lunchRelogin' value='<?php echo $TimeLunchIn;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Regular Working Days:</label>
														<div class="col-sm-6">
															<input type='number' class='form-control' name='regularWorkingDays' value='<?php echo $RegularWorkDays;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Day-Off Code:</label>
														<div class="col-sm-6">
															<select class='form-control' name='dayOffCode'>
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from leave_type");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		if($CodeDayOff == $row['LeaveCode']){
																			echo "<option value='" . $row['LeaveCode'] . "' selected>" . $row['LeaveCode'] . "</option>";
																		}else{
																			echo "<option value='" . $row['LeaveCode'] . "'>" . $row['LeaveCode'] . "</option>";
																		}
																		
																	}
																}
															?>
															</select>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Holiday Code:</label>
														<div class="col-sm-6">
															<select class='form-control' name='holidayCode'>
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from leave_type");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		if($CodeHoliday == $row['LeaveCode']){
																			echo "<option value='" . $row['LeaveCode'] . "' selected>" . $row['LeaveCode'] . "</option>";
																		}
																		else{
																			echo "<option value='" . $row['LeaveCode'] . "'>" . $row['LeaveCode'] . "</option>";
																		}
																		
																	}
																}
															?>
															</select>
														</div>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" id="automaticHalfDay" name='automaticHalfDay' <?php if($IsHalfDay == '1'){echo " checked";}?>>&nbsp;Automatic Half-Day ***</label>
														
														<label class="control-label col-sm-6 pull-left">Half-Day Code:</label>
														<div class="col-sm-6">
															<select class='form-control automaticHalfDay' name='halfDayCode'>
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from leave_type");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		if($CodeHalfDay == $row['LeaveCode']){
																			echo "<option value='" . $row['LeaveCode'] . "' selected>" . $row['LeaveCode'] . "</option>";
																		}
																		else{
																			echo "<option value='" . $row['LeaveCode'] . "'>" . $row['LeaveCode'] . "</option>";
																		}
																		
																	}
																}
															?>
															</select>
														</div>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" name='automatic3TimesLate' id='automatic3TimesLate' <?php if($IsLateThree == '1'){echo " checked";}?>>&nbsp;Automatic 3Times Late ****</label>
														
														<label class="control-label col-sm-6 pull-left">Violation</label>
														<div class="col-sm-6">
															<select class='form-control automatic3TimesLate' name='violation'>
															
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select ViolationCode from leave_type");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		if($CodeLate == $row['ViolationCode']){
																			echo "<option value='" . $row['ViolationCode'] . "' selected>" . $row['ViolationCode'] . "</option>";
																		}else{
																			echo "<option value='" . $row['ViolationCode'] . "'>" . $row['ViolationCode'] . "</option>";
																		}
																		
																	}
																}
															?>
															
															</select>
														</div>
														
														<label class="control-label col-sm-12 pull-left">
														<input type="checkbox" id="reflectTO" name='reflectTO' <?php if($IsTravelOrderToDTR == '1'){echo " checked";}?>>&nbsp;Reflect TO No. to DTR</label>
														
														<label class="control-label col-sm-6 pull-left">Travel Order Code:</label>
														<div class="col-sm-6">
															<select class='form-control reflectTO' name='travelOrderCode'>
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select * from leave_type");
																
																if ($query->num_rows > 0) {										
																	// output data of each row
																	while($row = $query->fetch_assoc()) {
																		if($TravelOrderCode == $row['LeaveCode']){
																			echo "<option value='" . $row['LeaveCode'] . "' selected>" . $row['LeaveCode'] . "</option>";
																		}else{
																			echo "<option value='" . $row['LeaveCode'] . "'>" . $row['LeaveCode'] . "</option>";
																		}
																		
																	}
																}
															?>
															</select>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Trainee Period (Month):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='traineePeriod' value='<?php echo $PeriodTrainee;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Probation Period (Month):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='probationPeriod' value='<?php echo $PeriodProbi;?>'>
														</div>
														
														<label class="control-label col-sm-12 pull-left">Multiplier</label>
														
														<div class='col-sm-12 divider'></div>
														
														<label class="control-label col-sm-6 pull-left">Regular Holiday (Permanent):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='regularHolidayPermanent' value='<?php echo $MultiplyRegular;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Special Holiday (Permanent):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='specialHolidayPermanent' value='<?php echo $MultiplySpecial;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Overtime (Permanent):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='overtimePermanent' value='<?php echo $MultiplyOvertime;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Regular Holiday (Contract):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='regularHolidayContract' value='<?php echo $MultiplyRegularC;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Special Holiday (Contract):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='specialHolidayContract' value='<?php echo $MultiplySpecialC;?>'>
														</div>
														
														<label class="control-label col-sm-6 pull-left">Overtime (Contract):</label>
														<div class="col-sm-6">
															<input type='number' step='0.01' class='form-control' name='overtimeContract' value='<?php echo $MultiplyOvertimeC;?>'>
														</div>
													</div>
												</div>
												
											</div>
											<!-- /.panel-body -->
											
											<div style="text-align: center;">
												<button type="submit" name="apply" id="apply" class="btn btn-primary">Apply</button>
											</div>
											<br />
											
											</div>
											<!-- /.panel -->
									</div>
								</form>
								<?php
									if(isset($_POST['apply'])){
										
										$sss = $_POST['sss'];
										$philhealth = $_POST['philhealth'];
										$pagibig = $_POST['pagibig'];
										$tax = $_POST['tax'];
										$gsis = $_POST['gsis'];
										$printLogo = (isset($_POST['printLogo']) ? '1' : '0');
										$printComputation = (isset($_POST['printComputation']) ? '1' : '0');
										$printDTRBlack = (isset($_POST['printDTRBlack']) ? '1' : '0');
										$printDuplicate = (isset($_POST['printDuplicate']) ? '1' : '0');
										$isWeekEndRegular = (isset($_POST['isWeekEndRegular']) ? '1' : '0');
										$verifyName = $_POST['verifyName'];
										$verifyDesignation = $_POST['verifyDesignation'];
										$notedNameDTR = $_POST['notedNameDTR'];
										$notedNameDesignation = $_POST['notedNameDesignation'];
										$timeCode = $_POST['timeCode'];
										$autoOvertime = (isset($_POST['autoOvertime']) ? '1' : '0');
										$baseOvertime = (isset($_POST['baseOvertime']) ?  $_POST['baseOvertime'] : '0');
										$allowance8AM = $_POST['allowance8AM'];
										$allowanceMorning = $_POST['allowanceMorning'];
										$allowanceAfternoon = $_POST['allowanceAfternoon'];
										$minutesBeforeHalfDay = $_POST['minutesBeforeHalfDay'];
										$lunchbreakMinutes = $_POST['lunchbreakMinutes'];
										$lunchRelogin = $_POST['lunchRelogin'];
										$regularWorkingDays = $_POST['regularWorkingDays'];
										$dayOffCode = $_POST['dayOffCode'];
										$holidayCode = $_POST['holidayCode'];
										$automaticHalfDay = (isset($_POST['automaticHalfDay']) ? '1' : '0');
										$halfDayCode = (isset($_POST['halfDayCode']) ? $_POST['halfDayCode'] : NULL);
										$automatic3TimesLate = (isset($_POST['automatic3TimesLate']) ? '1' : '0');
										$violation = (isset($_POST['violation']) ? $_POST['violation'] : NULL);
										$reflectTO = (isset($_POST['reflectTO']) ? '1' : '0');
										$travelOrderCode = (isset($_POST['travelOrderCode']) ? $_POST['travelOrderCode'] : NULL);
										$traineePeriod = $_POST['traineePeriod'];
										$probationPeriod = $_POST['probationPeriod'];
										$regularHolidayPermanent = $_POST['regularHolidayPermanent'];
										$specialHolidayPermanent = $_POST['specialHolidayPermanent'];
										$overtimePermanent = $_POST['overtimePermanent'];
										$regularHolidayContract = $_POST['regularHolidayContract'];
										$specialHolidayContract = $_POST['specialHolidayContract'];
										$overtimeContract = $_POST['overtimeContract'];
										
										$query = mysqli_query($connection, "UPDATE setting SET TimeOffset = '$allowance8AM', TimeOffsetAfter = '$allowanceMorning', TimeOffsetLater = '$allowanceAfternoon', TimeHalfDay = '$minutesBeforeHalfDay', TimeLunch = '$lunchbreakMinutes', TimeLunchIn = '$lunchRelogin', IsHalfDay = '$automaticHalfDay', CodeLate = '$violation', PrintMono = '$printDTRBlack', FormatDTRCopy = '$printDuplicate', PeriodSSS = '$sss', PeriodPhilhealth = '$philhealth', PeriodPagibig = '$pagibig', PeriodTax = '$tax', PeriodGSIS = '$gsis', CodeHalfDay = '$halfDayCode', RegularWorkDays = '$regularWorkingDays', TravelOrderCode = '$travelOrderCode', AutoOT = '$baseOvertime', PrintComp = '$printComputation', PrintLogo = '$printLogo', IsTravelOrderToDTR = '$reflectTO', IsLateThree = '$automatic3TimesLate', CodeHoliday = '$holidayCode', CodeDayOff = '$dayOffCode', RegularWeekEnd = '$isWeekEndRegular', PeriodProbi = '$probationPeriod', PeriodTrainee = '$traineePeriod', IsAutoOT = '$autoOvertime', VerifyName = '$verifyName', VerifyDesg = '$verifyDesignation', NotedName = '$notedNameDTR', NotedDesg = '$notedNameDesignation', NoTimeCode = '$timeCode', MultiplyRegular = '$regularHolidayPermanent', MultiplySpecial = '$specialHolidayPermanent', MultiplyOvertime = '$overtimePermanent', MultiplyRegularC = '$regularHolidayContract', MultiplySpecialC = '$specialHolidayContract', MultiplyOvertimeC = '$overtimeContract' Where ID = '1'");
										
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
    </div>
	
	<?php
		require('../ojt/home-modals.php');
		require('../ojt/footer.php');
	?>
	
	<script>
		
		
		$( "#apply" ).change(function () {
			$.get('system-body.php', function(data) {
				$('#system-body').html(data);    
			});
			
		}).change();
		
	</script>
	
</body>
</html>