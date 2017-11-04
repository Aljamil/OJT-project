<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	$query = mysqli_query($connection, "select * from setting_schedule Where ID = '1'");
	$row = $query->fetch_assoc();
	$autoUpload = $row['upload_time'];
	$notifyLate = $row['sms_late_time'];
	$notifyBday = $row['sms_bday_time'];
	$lateMessage = $row['sms_late_msg'];
	$bdayMessage = $row['sms_bday_msg'];
										
	echo <<< EOT
	<label class="control-label col-sm-12" style="text-align: left;">
EOT;
		if($row['sched_enable'] == '1'){
			echo "<input type='checkbox' id='enableScheduler' name='enableScheduler' checked> Enable Scheduler";
		}else{
			echo "<input type='checkbox' id='enableScheduler' name='enableScheduler' > Enable Scheduler";
		}
	echo <<< EOT
	</label>
	
	<label class="control-label col-sm-4" style="text-align: left;">Auto-Upload/Format:</label>
	<div class="col-sm-8">
		<input type="time" class='form-control enableScheduler' name='auto-upload' value='$autoUpload'>
EOT;
	echo <<< EOT
	</div>
	
	<label class="control-label col-sm-4" style="text-align: left;">Notify Late at:</label>
	<div class="col-sm-8">
		<input type="time" class='form-control enableScheduler' name='notify-late' id='' value='$notifyLate'>
EOT;
	echo <<< EOT
	</div>
	
	<label class="control-label col-sm-4" style="text-align: left;">Notify Birthday at:</label>
	<div class="col-sm-8">
		<input type="time" class='form-control enableScheduler' name='notify-birthday' id='' value='$notifyBday'>
EOT;
	echo <<< EOT
	</div>
	
	<label class="control-label col-sm-4" style="text-align: left;">Late Message:</label>
	<div class="col-sm-8">
		<textarea class="form-control enableScheduler" rows="5" name='late-message'>
EOT;
	echo $row['sms_late_msg']; 
	echo <<< EOT
		</textarea>
	</div>
	
	<label class="control-label col-sm-4" style="text-align: left;">Birthday Message:</label>
	<div class="col-sm-8">
		<textarea class="form-control enableScheduler" rows="5" name='bday-message'>
EOT;
	
	echo $row['sms_bday_msg'];
	echo <<< EOT
	</textarea>
	</div>
	<script>
		// Enable Scheduler
		$( ".enableScheduler" ).prop('disabled', true);
		$( "#enableScheduler" ).change(function () {
			if($("#enableScheduler").prop('checked') == true){
				$( ".enableScheduler" ).prop('disabled', false);	
			}
			else{
				$( ".enableScheduler" ).prop('disabled', true);
			}
		})
		.change();
	</script>
EOT;
	
?>
									