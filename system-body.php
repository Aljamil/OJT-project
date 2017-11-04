<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
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

	echo <<< EOT
	<!-- Left -->
	<div class="col-md-6">
		<div class="form-group">
			<label class="control-label col-sm-5 pull-left">SSS:</label>
			<div class="col-sm-7">
				<select class='form-control' name='sss'>
EOT;
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
					echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-5 pull-left">Philhealth:</label>
			<div class="col-sm-7">
				<select class='form-control' name='philhealth'>
EOT;
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
					echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-5 pull-left">Pagibig:</label>
			<div class="col-sm-7">
				<select class='form-control' name='pagibig'>
EOT;
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
					echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-5 pull-left">Tax:</label>
			<div class="col-sm-7">
				<select class='form-control' name='tax'>
EOT;
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
					echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-5 pull-left">GSIS:</label>
			<div class="col-sm-7">
				<select class='form-control' name='gsis'>
EOT;
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
					echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name="printLogo" class='pull-left'
EOT;
			if($PrintLogo == '1'){echo " checked";}
			echo <<< EOT
			>&nbsp;Print Logo on Report (DTR....)</label>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name="printComputation" class='pull-left' 
EOT;
			if($PrintComp == '1'){echo " checked";}
			echo <<< EOT
			>&nbsp;Print Computation on DTR (Absent, UT...)</label>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name="printDTRBlack" class='pull-left'
EOT;
			if($PrintMono == '1'){echo " checked";}
			echo <<< EOT
			>&nbsp;Print DTR in All Black</label>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name="printDuplicate" class='pull-left'
EOT;
			if($FormatDTRCopy == '1'){echo " checked";} 
			echo <<< EOT
			>&nbsp;Print DTR in Duplicate Copy</label>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name="isWeekEndRegular" class='pull-left' 
EOT;
			if($RegularWeekEnd == '1'){echo " checked";} 
			echo <<< EOT
			>&nbsp;Is Weekend Regular (SAT/SUN will appear)</label>
			
			<label class="control-label col-sm-5 pull-left">Verify Name (DTR):</label>
			<div class="col-sm-7">
				<input class='form-control' name='verifyName' value='$VerifyName'>
			</div>
			
			<label class="control-label col-sm-5 pull-left">Verify Designation:</label>
			<div class="col-sm-7">
				<input class='form-control' name='verifyDesignation' value='$VerifyDesg'>
			</div>
			
			<label class="control-label col-sm-5 pull-left">Noted Name (DTR):</label>
			<div class="col-sm-7">
				<input class='form-control' name='notedNameDTR' value='$NotedName'>
			</div>
			
			<label class="control-label col-sm-5 pull-left">Noted Name Designation:</label>
			<div class="col-sm-7">
				<input class='form-control' name='notedNameDesignation' value='$NotedDesg'><br />
			</div>
			
			<label class="control-label col-sm-5 pull-left">No Time Code:</label>
			<div class="col-sm-7">
				<select class='form-control' name='timeCode'>
EOT;
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
				echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name="autoOvertime" id="autoOvertime" class='pull-left' 
EOT;
			if($IsAutoOT == '1'){echo " checked";} 
			echo <<< EOT
			>&nbsp;Automatic Overtime</label>
			
			<label class="control-label col-sm-5 pull-left">Base Overtime:</label>
			<div class="col-sm-7">
				<input type='number' step="0.01" class='form-control autoOvertime' name='baseOvertime' value='$AutoOT'>
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
				<input type='number' step='0.01' class='form-control' name='allowance8AM' value='$TimeOffset'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Allowance (Morning)**:</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='allowanceMorning' value='$TimeOffsetAfter'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Allowance (Afternoon)**:</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='allowanceAfternoon' value='$TimeOffsetLater'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Minutes before Half-Day:</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='minutesBeforeHalfDay' value='$TimeHalfDay'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Lunchbreak (Minutes):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='lunchbreakMinutes' value='$TimeLunch'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Lunch Relogin (Minutes):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='lunchRelogin' value='$TimeLunchIn'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Regular Working Days:</label>
			<div class="col-sm-6">
				<input type='number' class='form-control' name='regularWorkingDays' value='$RegularWorkDays'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Day-Off Code:</label>
			<div class="col-sm-6">
				<select class='form-control' name='dayOffCode'>
EOT;
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
				echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Holiday Code:</label>
			<div class="col-sm-6">
				<select class='form-control' name='holidayCode'>
EOT;
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
				echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" id="automaticHalfDay" name='automaticHalfDay' 
EOT;
			if($IsHalfDay == '1'){echo " checked";}
			echo <<< EOT
			>&nbsp;Automatic Half-Day ***</label>
			
			<label class="control-label col-sm-6 pull-left">Half-Day Code:</label>
			<div class="col-sm-6">
				<select class='form-control automaticHalfDay' name='halfDayCode'>
EOT;
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
				echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" name='automatic3TimesLate' id='automatic3TimesLate' 
EOT;
			if($IsLateThree == '1'){echo " checked";}
			echo <<< EOT
			>&nbsp;Automatic 3Times Late ****</label>
			
			<label class="control-label col-sm-6 pull-left">Violation</label>
			<div class="col-sm-6">
				<select class='form-control automatic3TimesLate' name='violation'>
				
EOT;
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
				echo <<< EOT
				
				</select>
			</div>
			
			<label class="control-label col-sm-12 pull-left">
			<input type="checkbox" id="reflectTO" name='reflectTO'
EOT;
			if($IsTravelOrderToDTR == '1'){echo " checked";}
			echo <<< EOT
			>&nbsp;Reflect TO No. to DTR</label>
			
			<label class="control-label col-sm-6 pull-left">Travel Order Code:</label>
			<div class="col-sm-6">
				<select class='form-control reflectTO' name='travelOrderCode'>
EOT;
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
				echo <<< EOT
				</select>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Trainee Period (Month):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='traineePeriod' value='$PeriodTrainee'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Probation Period (Month):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='probationPeriod' value='$PeriodProbi'>
			</div>
			
			<label class="control-label col-sm-12 pull-left">Multiplier</label>
			
			<div class='col-sm-12 divider'></div>
			
			<label class="control-label col-sm-6 pull-left">Regular Holiday (Permanent):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='regularHolidayPermanent' value='$MultiplyRegular'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Special Holiday (Permanent):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='specialHolidayPermanent' value='$MultiplySpecial'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Overtime (Permanent):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='overtimePermanent' value='$MultiplyOvertime'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Regular Holiday (Contract):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='regularHolidayContract' value='$MultiplyRegularC'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Special Holiday (Contract):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='specialHolidayContract' value='$MultiplySpecialC'>
			</div>
			
			<label class="control-label col-sm-6 pull-left">Overtime (Contract):</label>
			<div class="col-sm-6">
				<input type='number' step='0.01' class='form-control' name='overtimeContract' value='$MultiplyOvertimeC'>
			</div>
		</div>
	</div>
	<script>
		// 
		$( ".reflectTO" ).prop('disabled', true);
		$( "#reflectTO" ).change(function () {
			if($("#reflectTO").prop('checked') == true){
				$( ".reflectTO" ).prop('disabled', false);	
			}
			else{
				$( ".reflectTO" ).prop('disabled', true);
				$( ".reflectTO" ).prop('checked', false);
			}
		})
		.change();
	
		// 
		$( ".automaticHalfDay" ).prop('disabled', true);
		$( "#automaticHalfDay" ).change(function () {
			if($("#automaticHalfDay").prop('checked') == true){
				$( ".automaticHalfDay" ).prop('disabled', false);	
			}
			else{
				$( ".automaticHalfDay" ).prop('disabled', true);
				$( ".automaticHalfDay" ).prop('checked', false);
			}
		})
		.change();
		
		// 
		$( ".automatic3TimesLate" ).prop('disabled', true);
		$( "#automatic3TimesLate" ).change(function () {
			if($("#automatic3TimesLate").prop('checked') == true){
				$( ".automatic3TimesLate" ).prop('disabled', false);	
			}
			else{
				$( ".automatic3TimesLate" ).prop('disabled', true);
				$( ".automatic3TimesLate" ).prop('checked', false);
			}
		})
		.change();
		
		// 
		$( ".autoOvertime" ).prop('disabled', true);
		$( "#autoOvertime" ).change(function () {
			if($("#autoOvertime").prop('checked') == true){
				$( ".autoOvertime" ).prop('disabled', false);	
			}
			else{
				$( ".autoOvertime" ).prop('disabled', true);
				$( ".autoOvertime" ).prop('checked', false);
			}
		})
		.change();
	</script>
EOT;
?>