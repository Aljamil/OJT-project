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
			<!-- User Management -->
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Management</h1>
                </div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<form role='form' method='post' id="user-management">
								<div class="row">
										<div class="panel panel-default">
											<div class="panel-body">	
												<div class="dataTable_wrapper" id="userManagementBody">
													<table class="table table-striped table-bordered table-hover" id="dataTables-userManagement">
														<thead>
															<tr>
																<th></th>
																<th>Username</th>
																<th>User Role</th>
																<th>Realname</th>
																<th>Employee ID</th>
															</tr>
														</thead>
														<tbody>
															<?php
																// SQL query to fetch information of registerd users and finds user match.
																$query = mysqli_query($connection, "select UserLevel from user where UserName = '" . $_SESSION['login_user'] . "'");
																
																$result = $query->fetch_assoc();
																if ($query->num_rows > 0) {														
																	// output data of each row
																	if($result['UserLevel'] == 'admin'){
																		$query = mysqli_query($connection, "select * from user");
																		while($row = $query->fetch_assoc()) {
																			if($row["UserLevel"] == "admin"){
																				if($row["UserName"] == 'admin'){
																					echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' checked ></td>";
																					echo "<td>" . $row["UserName"]. "</td><td>admin</td><td>Master Admin</td><td></td></tr>";
																				}
																				else{
																					echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
																					echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
																					
																					$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
																					
																					if ($queryTmp->num_rows == 1) {
																						while($rowTmp = $queryTmp->fetch_assoc()) {
																							echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

																							echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
																						}
																					}
																				}
		
																			}
																			else{
																				echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
																				echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
																				
																				$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
																				
																				if ($queryTmp->num_rows == 1) {
																					while($rowTmp = $queryTmp->fetch_assoc()) {
																						echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

																						echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
																					}
																				}
																			}
																		}		
																	}
																	else if($result['UserLevel'] == 'manager'){
																	$query = mysqli_query($connection, "select * from user");

																		while($row = $query->fetch_assoc()) {
																			if($row["UserLevel"] != "admin"){
																				echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
																				echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
																				
																				$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
																				
																				if ($queryTmp->num_rows == 1) {
																					while($rowTmp = $queryTmp->fetch_assoc()) {
																						echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

																						echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
																					}
																				}
																			}
																		}		
																	}
																	else{
																		$query = mysqli_query($connection, "select * from user where UserName = '" . $_SESSION['login_user'] . "'");
																		$row = $query->fetch_assoc();
																		echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
																		echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
																		
																		$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
																		
																		$rowTmp = $queryTmp->fetch_assoc();
																		echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

																		echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
																			
																		
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
										<div class="pull-left">
											<?php
											
												if($result['UserLevel'] == 'admin'){
													echo <<<EOT
													<button data-toggle="modal" data-target="#addUser" type="button" class="btn btn-primary">Add</button>
													<button type="submit" class="btn btn-danger" id="remove" name="remove">Remove</button>
													
													<button type="submit" data-toggle="modal" name="properties" id="properties" type="button" class="btn btn-success">Properties</button>
EOT;
												}
												else{
													echo <<<EOT
													
													<button type="submit" data-toggle="modal" name="properties" id="properties" type="button" class="btn btn-primary">Properties</button>
EOT;
												}

											?>
										</div>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
			<!-- End of User Management -->
			
			<!-- User Management's Remove Feature -->
			<?php
				if(isset($_POST['remove'])){
					$userName = $_POST['radioList'];
					echo <<< EOT
					<script>
						$( document ).ready(function() {
							var userName = '$userName';
							$('#deleteValue').val(userName);
							$('#deleteConfirmation').modal('show');
						});
					</script>
EOT;
				}
			?>
			
			<!-- End of User Management's Properties Feature -->
			
			<!-- User Management's Properties Feature -->
			<?php
				if(isset($_POST['properties'])){
					$query = mysqli_query($connection, "select UserLevel from user where UserName = '" . $_SESSION['login_user'] . "'");
					$result = $query->fetch_assoc();
					if($result['UserLevel'] != 'admin'){
						echo "<script type='text/javascript'>
								$(document).ready(function(){
								$( '#hideAccess').hide();
								});
							</script>";
					}
					echo "<script type='text/javascript'>
							$(document).ready(function(){
								$('#propertiesModal').modal('show');
							});
						</script>";
					
				}
			?>
			<!-- End of User Management's Properties Feature -->
        </div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->

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
				$userName = $_POST['deleteValue'];
				if($userName == "admin"){
					echo "<script>
							$(document).ready(function() {
								alert('You can\'t delete master admin account');
							});
						</script>";
				}
				else{
					$query = mysqli_query($connection, "DELETE FROM user WHERE UserName='$userName'");
					$query = mysqli_query($connection, "DELETE FROM user_access WHERE UserName='$userName'");
				}
			}
		?>
	  </div>
	</div>
	<!-- End for Delete Confirmation Message -->
	
	<!-- Modal for Add Button -->
	<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="addUserLabel">User Account Properties</h4>
				</div>
				<div class="modal-body">
					<div class="panel panel-default">
						<!-- /.panel-heading -->
						<div class="panel-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#general-tab" data-toggle="tab">General</a>
								</li>
								<li><a href="#access-tab" data-toggle="tab">Access</a>
								</li>
							</ul>
							<form class="form-horizontal" role="form" method="post">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="general-tab">
									
										<br />
										<div class="form-group">
											<label class="control-label col-sm-2">Realname:</label>
											<div class="col-sm-10">
												<select class="form-control" name="realName" id="realName">												
													<?php
														// SQL query to fetch information of registerd users and finds user match.
														$query = mysqli_query($connection, "select * from employee");
														if ($query->num_rows > 0) {
															// output data of each row
															while($row = $query->fetch_assoc()) {
																echo "<option value = '". $row["EmployeeID"] . "'>" . strtoupper($row["LastName"]) . ", " . $row["FirstName"] . " " . $row["MiddleName"] . "</option>";
															}															
														}
													?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Username:</label>
											<div class="col-sm-10">
												<input class="form-control" id="userName" name="userName" required>
												<br />
												<div class="alert alert-danger .hidden" id="userNameError" >
													<strong>Error!</strong> Username is not available!
												</div>
												
												<div class="alert alert-success .hidden" id="userNameSuccess">
													
													<strong>Success!</strong> Username is available!
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Position:</label>
											<div class="col-sm-10">
												<input class='form-control' name='position' id='position' disabled>	
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Branch:</label>
											<div class="col-sm-10">
												<input class='form-control' id='branch' name='branch' value='' disabled>
																	
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Password:</label>
											<div class="col-sm-10">
												<input class="form-control" id="password" type="password" name="password" required>
												<input type="checkbox" id="showPassword"> Show password
											</div>
										</div>
										<?php
											$query = mysqli_query($connection, "select UserLevel from user where UserName = '" . $_SESSION['login_user'] . "'");
											$result = $query->fetch_assoc();
											if($result['UserLevel'] == 'employee'){
												echo <<<EOT
												<input class='form-control' type="hidden" name='userRole'>	
EOT;
											}
											else{
												echo <<<EOT
												<div class="form-group">
													<label class="control-label col-sm-2">User Role:</label>
													<div class="col-sm-10">
														<select class="form-control" name="userRole">
															<option value='admin'>Admin</option>
															<option value='manager'>Manager</option>
															<option value='employee'>Employee</option>
														</select>
													</div>
												</div>
EOT;
											}
										?>
									
								</div>
								<div class="tab-pane fade" id="access-tab">
									<div class="col-lg-12">
												<div class="row">
												<!-- Left -->
												<div class="col-md-6">
													<div class="form-group">
														<div class="checkbox">
															<label><input type="checkbox" id="checkAll">Check all</label>
														</div>
														<!-- Employee -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcEmployee" id="employee" name="dataList[]">Employee
															</label>
														</div>
														<div class="checkbox col-md-offset-1" >
															<label>
																<input type="checkbox" value="AcEmployeeSalary" class="employee" name="dataList[]">Employee Salary
															</label>
														</div>
														
														<!-- Time Record -->
														<div class="checkbox">
															<label>
																<input type="checkbox" id="timeRecord" value="AcTimeRecord" name="dataList[]">Time Record
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" class="timeRecord" value="AcTimeRecordEdit" name="dataList[]" >Time Record Edit
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" class="timeRecord" value="AcTimeRecordShowEdit" name="dataList[]">Time Record Show Edit
															</label>
														</div>
														
														<!-- Payroll -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcPayroll" id="payroll" name="dataList[]">Payroll
															</label>
														</div>
														
														
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="" name="" class="payroll">Payroll Edit
															</label>
														</div>
														
														<!-- Setting -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcSetting" id="setting" name="dataList[]">Setting
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingUser" class="setting" name="dataList[]">Setting User
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingPeriod" class="setting" name="dataList[]">Setting Period
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingSystem" class="setting" name="dataList[]">Setting System
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingHoliday" class="setting" name="dataList[]">Setting Holiday
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingViolation" class="setting" name="dataList[]">Setting Violation
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingTimeCode" class="setting" name="dataList[]">Setting Time Code
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingTimeShift" class="setting" name="dataList[]">Setting Time Shift
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingDTRFormat" class="setting" name="dataList[]">Setting DTR Format
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingDeduction" class="setting" name="dataList[]">Setting Deduction
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingTimeBranch" class="setting" name="dataList[]">Setting Branch Time
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingDeptPosition" class="setting" name="dataList[]">Setting Dept/Position
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingBranch" class="setting" name="dataList[]">Setting Branch/Reader
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingCompany" class="setting" name="dataList[]">Setting Company Info
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingMachine" class="setting" name="dataList[]">Setting Machine Mngmt
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingLeaveCredit" class="setting" name="dataList[]">Setting Leave Credit
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcSettingSchedule" class="setting" name="dataList[]">Setting Scheduler
															</label>
														</div>
													</div>
												</div>
												<!-- Right -->
												<div class="col-md-6">
													<div class="form-group">
														<div class="checkbox">
														
														</div>
														<!-- Upload -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcUpload" name="dataList[]" id="upload">Upload
															</label>
														</div>
														
														<!-- Manager access -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcManager" name="dataList[]" id="managerAccess">Manager Access
															</label>
														</div>
														
														<!-- Violation -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcViolation" name="dataList[]" id="violation">Violation
															</label>
														</div>
														
														<!-- Loan -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcLoan" name="dataList[]" id="loan">Loan
															</label>
														</div>
														
														<!-- Leave -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcLeave" name="dataList[]" id="leave">Leave
															</label>
														</div>
														
														<!-- Logbook Entry -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcLogbook" name="dataList[]" id="logbookEntry">Logbook Entry
															</label>
														</div>
														
														<!-- Time -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="" name="" id="time">Time
															</label>
														</div>
														
														<!-- Backup Database -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcBackup" name="dataList[]" id="backupDatabase">Backup Database
															</label>
														</div>
														
														<!-- SSS Loan -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcLoanSSS" name="dataList[]" id="sssLoan">SSS Loan
															</label>
														</div>
														
														<!-- GSIS Loan -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcLoanGSIS" name="dataList[]" id="gsisLoan">GSIS Loan
															</label>
														</div>
														
														<!-- Pagibig Loan -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcLoanHDMF" name="dataList[]" id="pagibigLoan">Pagibig Loan
															</label>
														</div>
														
														<!-- Report -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="AcReport" name="dataList[]" id="report">Report
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcReportEmployee" class="report" name="dataList[]">Employee Masterlist
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcReportRemittance" class="report" name="dataList[]">Remittance
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcReportPayroll" class="report" name="dataList[]">Payroll Form
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcReportDTRSummary" class="report" name="dataList[]">DTR Summary
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcReportDeficiency" class="report" name="dataList[]">DTR Deficiency
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="AcLoan" class="report" name="">Loan/Cash Advance
															</label>
														</div>
														
													</div>
												</div>
												</div>											
									</div>			
								</div>
							</div>
							<div style="text-align: center;">
								<button type="submit" name="saveAdd" id= "saveAdd" class="btn btn-primary" disabled>Save</button>
								<button class="btn btn-success" data-dismiss="modal">Cancel</button>
							</div>
							</form>
							
							<?php
								if(isset($_POST['saveAdd'])){
									$employee_id = $_POST['realName'];
									$user_name = $_POST['userName'];
									$password = $_POST['password'];
									$user_level = $_POST['userRole'];;
									
									$query = mysqli_query($connection, "INSERT INTO user (UserName, Password, UserLevel, EmployeeID) VALUES('" . $user_name . "', '" . $password."', '" . $user_level ."', '" . $employee_id . "')");
									
									
									if(!empty($_POST['dataList'])){
										$sql = "INSERT INTO user_access(UserName,";
										$ctr = sizeof($_POST['dataList']);
										
										foreach($_POST['dataList'] as $selected){
											$sql .= $selected . ',';
										}
										$sql = trim($sql, ",");
										$sql .= ") VALUES('" . $user_name . "',";
										for ($x = 1; $x <= $ctr; $x++) {
											$sql .= "1,";
										}
										$sql = trim($sql, ",");
										$sql .= ")";
										
										$query = mysqli_query($connection, $sql);
									}
									else{
										$sql = "INSERT INTO user_access(UserName) VALUES('$user_name')";
										$query = mysqli_query($connection, $sql);
									}
								}
							?>
							
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
					
				</div>
				
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- Modal for Properties Button -->
	<div class="modal fade" id="propertiesModal" tabindex="-1" role="dialog" aria-labelledby="propertiesLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="propertiesLabel">User Account Properties</h4>
				</div>
				<div class="modal-body">
					<div class="panel panel-default">
						<!-- /.panel-heading -->
						<div class="panel-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#general-tab-properties" data-toggle="tab">General</a>
								</li>
								<li><a id="hideAccess" href="#access-tab-properties" data-toggle="tab">Access</a>
								</li>
							</ul>
							<form class="form-horizontal" role="form" method="post">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="general-tab-properties">
									
										<br />
										<div class="form-group">
											<label class="control-label col-sm-2">Realname:</label>
											<div class="col-sm-10">
												<?php
													if(isset($_POST['radioList'])){
														$queryMain = mysqli_query($connection, "select * from user where UserName='" . $_POST['radioList'] . "'");
														$rowMain = $queryMain->fetch_assoc(); 
															
														if($rowMain['UserLevel'] == 'admin'){
															echo "<input class='form-control' id='realName-properties' name='realName' value='Administrative account' disabled></input>";
															
															
														}
														else{
															echo "<input class='form-control' id='realName-properties' name='realName' value='";
															$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID='" . $rowMain['EmployeeID'] . "'");
															$rowTmp = $queryTmp->fetch_assoc(); 
															echo strtoupper($rowTmp["LastName"]) . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "' disabled></input>";
														}
													
												?>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Username:</label>
											<div class="col-sm-10">
												<?php
													echo "<input type='hidden' class='form-control' id='userName-properties' name='userName-properties' value='" . $_POST['radioList'] . "' >";
													echo "<input class='form-control' value='" . $_POST['radioList'] . "' disabled>";
													
												?>
												
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Position:</label>
											<div class="col-sm-10">
												<?php
													if($_POST['radioList'] == 'admin'){
														echo "<input class='form-control' name='position' id='position-properties' value='' disabled>";
													}
													else{
														echo "<input class='form-control' name='position' id='position-properties' value='";

															
														$query = mysqli_query($connection, "select PositionCode from employee where EmployeeID = '". $rowMain['EmployeeID'] . "'");
														if ($query->num_rows == 1) {
															$row = $query->fetch_assoc();
															$queryTmp = mysqli_query($connection, "select Description from position where PositionCode = '". $row['PositionCode'] . "'");
															if ($queryTmp->num_rows == 1) {
																$rowTmp = $queryTmp->fetch_assoc();
																echo $rowTmp['Description'] . "' disabled>";
															}
														
														}
													}
													
												?>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Branch:</label>
											<div class="col-sm-10">
												
												<?php
													if($_POST['radioList'] == 'admin'){
														echo "<input class='form-control' id='branch-properties' name='branch' value='' disabled>";
													}
													else{
														echo "<input class='form-control' id='branch-properties' name='branch' value='";
														
														
														$query = mysqli_query($connection, "select BranchCode from employee where EmployeeID = '". $rowMain['EmployeeID'] . "'");
														if ($query->num_rows == 1) {
															$row = $query->fetch_assoc();
															$queryTmp = mysqli_query($connection, "select BranchName from branch where BranchCode = '". $row['BranchCode'] . "'");
															if ($queryTmp->num_rows == 1) {
																$rowTmp = $queryTmp->fetch_assoc();
																echo $rowTmp['BranchName'] . "' disabled>";
															}
														
														}
													
													}
													
												?>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-2">Password:</label>
											<div class="col-sm-10">
												<?php
													echo "<input class='form-control' type='password' name='password-properties' id='password-properties' value='" . $rowMain['Password'] . "'>";
												?>
												<input type="checkbox" id="showPassword-properties"> Show password
											</div>
										</div>
										<?php
											$query = mysqli_query($connection, "select UserLevel from user where UserName = '" . $_SESSION['login_user'] . "'");
											$result = $query->fetch_assoc();
											if($result['UserLevel'] == 'employee'){
												echo <<<EOT
												<input class='form-control' type="hidden" name='userRole-properties' value='employee'>	
EOT;
											}
											else{
												$query = mysqli_query($connection, "select UserLevel from user where UserName = '" . $_POST['radioList'] . "'");
												$result = $query->fetch_assoc();
												if($result['UserLevel'] == 'admin'){
													echo <<<EOT
													<div class="form-group">
														<label class="control-label col-sm-2">User Role:</label>
														<div class="col-sm-10">
															<select class="form-control" name="userRole-properties">
																<option value='admin' selected>Admin</option>
																<option value='manager'>Manager</option>
																<option value='employee'>Employee</option>
															</select>
														</div>
													</div>
EOT;
												}
												else if($result['UserLevel'] == 'manager'){
													echo <<<EOT
													<div class="form-group">
														<label class="control-label col-sm-2">User Role:</label>
														<div class="col-sm-10">
															<select class="form-control" name="userRole-properties">
																<option value='admin'>Admin</option>
																<option value='manager' selected>Manager</option>
																<option value='employee'>Employee</option>
															</select>
														</div>
													</div>
EOT;
												}
												else{
													echo <<<EOT
													<div class="form-group">
														<label class="control-label col-sm-2">User Role:</label>
														<div class="col-sm-10">
															<select class="form-control" name="userRole-properties">
																<option value='admin'>Admin</option>
																<option value='manager'>Manager</option>
																<option value='employee' selected>Employee</option>
															</select>
														</div>
													</div>
EOT;
												}
												
											}
										?>
									
								</div>
								<div class="tab-pane fade" id="access-tab-properties">
									<div class="col-lg-12">
												<div class="row">
												<!-- Left -->
												<div class="col-md-6">
													<div class="form-group">
														<div class="checkbox">
															<label><input type="checkbox" id="checkAll-properties">Check all</label>
														</div>
														<!-- Employee -->
														<div class="checkbox">
															<label>
																<?php
																	
																	$query = mysqli_query($connection, "select * from user_access where UserName='" . $_POST['radioList'] . "'");
																	$row = $query->fetch_assoc();
																	
																	
																	
																	if($row['AcEmployee'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcEmployee" id="employee-properties" name="dataList[]" checked>Employee
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcEmployee" id="employee-properties" name="dataList[]" >Employee
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1" >
															<label>
																<?php
																	if($row['AcEmployeeSalary'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcEmployeeSalary" class="employee-properties" name="dataList[]" checked>Employee Salary
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcEmployeeSalary" class="employee-properties" name="dataList[]" >Employee Salary
EOT;
																	}
																?>
																
															</label>
														</div>
														
														<!-- Time Record -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcTimeRecord'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" id="timeRecord-properties" value="AcTimeRecord" name="dataList[]" checked>Time Record
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" id="timeRecord-properties" value="AcTimeRecord" name="dataList[]" >Time Record
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcTimeRecordEdit'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" class="timeRecord-properties" value="AcTimeRecordEdit" name="dataList[]" checked>Time Record Edit
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" class="timeRecord-properties" value="AcTimeRecordEdit" name="dataList[]" >Time Record Edit
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcTimeRecordShowEdit'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" class="timeRecord-properties" value="AcTimeRecordShowEdit" name="dataList[]" checked>Time Record Show Edit
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" class="timeRecord-properties" value="AcTimeRecordShowEdit" name="dataList[]" >Time Record Show Edit
EOT;
																	}
																?>
																
															</label>
														</div>
														
														<!-- Payroll -->
														<div class="checkbox" >
															<label>
																<?php
																	if($row['AcPayroll'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcPayroll" id="payroll-properties" name="dataList[]" checked>Payroll
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcPayroll" id="payroll-properties" name="dataList[]" >Payroll
EOT;
																	}
																?>
																
															</label>
														</div>
														
														
														<div class="checkbox col-md-offset-1">
															<label>
																<input type="checkbox" value="" name="" class="payroll-properties">Payroll Edit
															</label>
														</div>
														
														<!-- Setting -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcSetting'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSetting" id="setting-properties" name="dataList[]" checked>Setting
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSetting" id="setting-properties" name="dataList[]" >Setting
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingUser'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingUser" class="setting-properties" name="dataList[]" checked>Setting User
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingUser" class="setting-properties" name="dataList[]" >Setting User
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingPeriod'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingPeriod" class="setting-properties" name="dataList[]" checked>Setting Period
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingPeriod" class="setting-properties" name="dataList[]" >Setting Period
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingSystem'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingSystem" class="setting-properties" name="dataList[]" checked>Setting System
EOT;
																	}

																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingSystem" class="setting-properties" name="dataList[]" >Setting System
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingHoliday'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingHoliday" class="setting-properties" name="dataList[]" checked>Setting Holiday
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingHoliday" class="setting-properties" name="dataList[]" >Setting Holiday
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingViolation'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingViolation" class="setting-properties" name="dataList[]" checked>Setting Violation
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingViolation" class="setting-properties" name="dataList[]" >Setting Violation
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingTimeCode'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingTimeCode" class="setting-properties" name="dataList[]" checked>Setting Time Code
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingTimeCode" class="setting-properties" name="dataList[]" >Setting Time Code
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingTimeShift'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingTimeShift" class="setting-properties" name="dataList[]" checked>Setting Time Shift
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingTimeShift" class="setting-properties" name="dataList[]" >Setting Time Shift
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingDTRFormat'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingDTRFormat" class="setting-properties" name="dataList[]" checked>Setting DTR Format
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingDTRFormat" class="setting-properties" name="dataList[]" >Setting DTR Format
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingDeduction'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingDeduction" class="setting-properties" name="dataList[]" checked>Setting Deduction
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingDeduction" class="setting-properties" name="dataList[]" >Setting Deduction
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingTimeBranch'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingTimeBranch" class="setting-properties" name="dataList[]" checked>Setting Branch Time
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingTimeBranch" class="setting-properties" name="dataList[]" >Setting Branch Time
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingDeptPosition'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingDeptPosition" class="setting-properties" name="dataList[]" checked>Setting Dept/Position
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingDeptPosition" class="setting-properties" name="dataList[]" >Setting Dept/Position
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingBranch'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingBranch" class="setting-properties" name="dataList[]" checked>Setting Branch/Reader
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingBranch" class="setting-properties" name="dataList[]" >Setting Branch/Reader
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingCompany'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingCompany" class="setting-properties" name="dataList[]" checked>Setting Company Info
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingCompany" class="setting-properties" name="dataList[]" >Setting Company Info
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingMachine'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingMachine" class="setting-properties" name="dataList[]" checked>Setting Machine Mngmt
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingMachine" class="setting-properties" name="dataList[]" >Setting Machine Mngmt
EOT;
																	}
																?>
																
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingLeaveCredit'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingLeaveCredit" class="setting-properties" name="dataList[]" checked>Setting Leave Credit
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingLeaveCredit" class="setting-properties" name="dataList[]" >Setting Leave Credit
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcSettingSchedule'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingSchedule" class="setting-properties" name="dataList[]" checked>Setting Scheduler
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcSettingSchedule" class="setting-properties" name="dataList[]" >Setting Scheduler
EOT;
																	}
																?>
															</label>
														</div>
													</div>
												</div>
												<!-- Right -->
												<div class="col-md-6">
													<div class="form-group">
														<div class="checkbox">
														
														</div>
														<!-- Upload -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcUpload'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcUpload" id="upload-properties" name="dataList[]" checked>Upload
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcUpload" id="upload-properties" name="dataList[]" >Upload
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Manager access -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcManager'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcManager" id="managerAccess-properties" name="dataList[]" checked>Manager Access
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcManager" id="managerAccess-properties" name="dataList[]" >Manager Access
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Violation -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcViolation'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcViolation" id="violation-properties" name="dataList[]" checked>Violation
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcViolation" id="violation-properties" name="dataList[]" >Violation
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Loan -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcLoan'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLoan" id="loan-properties" name="dataList[]" checked>Loan
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLoan" id="loan-properties" name="dataList[]" >Loan
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Leave -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcLeave'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLeave" id="leave-properties" name="dataList[]" checked>Leave
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLeave" id="leave-properties" name="dataList[]" >Leave
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Logbook Entry -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcLogbook'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLogbook" id="logbookEntry-properties" name="dataList[]" checked>Logbook Entry
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLogbook" id="logbookEntry-properties" name="dataList[]" >Logbook Entry
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Time -->
														<div class="checkbox">
															<label>
																<input type="checkbox" value="" id="time-properties" name="">Time
															</label>
														</div>
														
														<!-- Backup Database -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcBackup'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcBackup" id="backupDatabase-properties" name="dataList[]" checked>Backup Database
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcBackup" id="backupDatabase-properties" name="dataList[]" >Backup Database
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- SSS Loan -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcLoanSSS'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLoanSSS" id="sssLoan-properties" name="dataList[]" checked>SSS Loan
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLoanSSS" id="sssLoan-properties" name="dataList[]" >SSS Loan
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- GSIS Loan -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcLoanGSIS'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLoanGSIS" id="gsisLoan-properties" name="dataList[]" checked>GSIS Loan
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLoanGSIS" id="gsisLoan-properties" name="dataList[]" >GSIS Loan
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Pagibig Loan -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcLoanHDMF'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLoanHDMF" id="pagibigLoan-properties" name="dataList[]" checked>Pagibig Loan
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLoanHDMF" id="pagibigLoan-properties" name="dataList[]" >Pagibig Loan
EOT;
																	}
																?>
															</label>
														</div>
														
														<!-- Report -->
														<div class="checkbox">
															<label>
																<?php
																	if($row['AcReport'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcReport" name="dataList[]" id="report-properties" checked>Report
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcReport" name="dataList[]" id="report-properties" >Report
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcReportEmployee'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcReportEmployee" class="report-properties" name="dataList[]" checked>Employee Masterlist
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcReportEmployee" class="report-properties" name="dataList[]" >Employee Masterlist
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcReportRemittance'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcReportRemittance" class="report-properties" name="dataList[]" checked>Remittance
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcReportRemittance" class="report-properties" name="dataList[]" >Remittance
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcReportPayroll'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcReportPayroll" class="report-properties" name="dataList[]" checked>Payroll Form
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcReportPayroll" class="report-properties" name="dataList[]" >Payroll Form
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcReportDTRSummary'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcReportDTRSummary" class="report-properties" name="dataList[]" checked>DTR Summary
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcReportDTRSummary" class="report-properties" name="dataList[]" >DTR Summary
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcReportDeficiency'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcReportDeficiency" class="report-properties" name="dataList[]" checked>DTR Deficiency
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcReportDeficiency" class="report-properties" name="dataList[]" >DTR Deficiency
EOT;
																	}
																?>
															</label>
														</div>
														<div class="checkbox col-md-offset-1">
															<label>
																<?php
																	if($row['AcLoan'] == '1'){
																		echo <<< EOT
																		<input type="checkbox" value="AcLoan" class="report-properties" name="dataList[]" checked>Loan/Cash Advance
EOT;
																	}
																	else{
																		echo <<< EOT
																		<input type="checkbox" value="AcLoan" class="report-properties" name="dataList[]" >Loan/Cash Advance
EOT;
																	}
																}
																// end of isset($_POST['radioList'])
																?>
															</label>
														</div>
														
													</div>
												</div>
												</div>											
									</div>			
								</div>
							</div>
							<div style="text-align: center;">
								<button type="submit" name="saveProperties" id= "saveProperties" class="btn btn-primary">Save</button>
								<button class="btn btn-success" data-dismiss="modal">Cancel</button>
							</div>
							</form>
							
							<?php
								if(isset($_POST['saveProperties'])){
									$user_name = $_POST['userName-properties'];
									$password = $_POST['password-properties'];
									$user_level = $_POST['userRole-properties'];
																		
									$query = mysqli_query($connection, "UPDATE user SET Password='" . $password . "', UserLevel='". $user_level ."' WHERE UserName = '" . $user_name . "'");
									
									$query = mysqli_query($connection, "UPDATE user_access SET AcEmployee='0', AcEmployeeSalary='0', AcTimeRecord='0', AcTimeRecordEdit='0', AcPayroll='0', AcPayrollImport='0', AcLoan='0', AcLeave='0', AcViolation='0', AcSetting='0', AcSettingUser='0', AcSettingHoliday='0', AcSettingBranch='0', AcSettingDepartment='0', AcSettingTimeBranch='0', AcSettingTimeCode='0', AcSettingTimeShift='0', AcSettingDeduction='0', AcSettingDeptPosition='0', AcSettingViolation='0', AcSettingPeriod='0', AcSettingSystem='0', AcSettingCompany='0', AcSettingMachine='0', AcSettingMachineAdmin='0', AcSettingLeaveCredit='0', AcUpload='0', AcManager='0', AcLogbook='0', AcBackup='0', AcReport='0', AcReportEmployee='0', AcReportRemittance='0', AcReportPayroll='0', AcReportDTRSummary='0', AcReportDeficiency='0', AcReportLoan='0', AcSettingDTRFormat='0', AcTimeRecordShowEdit='0', AcSettingSchedule='0', AcLoanSSS='0', AcLoanGSIS='0', AcLoanHDMF='0', AcTravelOrder='0' WHERE UserName = '" . $user_name . "'");
									
									if(!empty($_POST['dataList'])){
										$sql = "UPDATE user_access SET ";
										
										$ctr = sizeof($_POST['dataList']);
										
										foreach($_POST['dataList'] as $selected){
											$sql .= $selected . "='1',";
										}
										$sql = trim($sql, ",");
										$sql .= " WHERE UserName = '$user_name'";
										
										$query = mysqli_query($connection, $sql);
									}
									
									
									
								}
								
							?>
							
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
					
				</div>
				
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<script type="text/javascript">
		// Auto-populate branch & position based on employee name
		$( "#realName" ).change(function () {
		var str = "";
		$( "#realName option:selected" ).each(function() {
		  str = $( this ).val();
		  
		  $.ajax({
			type: "POST",
			url: "../ojt/setting-position-branch.php",
			data:{ employee_id: str }, 
			success: function(data){
				var obj = $.parseJSON(data);
				
				$( "#branch" ).val( obj.branchName )
				$( "#position" ).val( obj.description )
			}
			});


		});
		}).change();
		
		// Show Password
		$( "#showPassword" ).change(function () {
			if($("#showPassword").prop('checked') == true){
				$( "#password" ).prop('type', "text");	
			}
			else{
				$( "#password" ).prop('type', "password");
			}
		});
		
		$( "#showPassword-properties" ).change(function () {
			if($("#showPassword-properties").prop('checked') == true){
				$( "#password-properties" ).prop('type', "text");	
			}
			else{
				$( "#password-properties" ).prop('type', "password");
			}
		});
		
		// Check All - Add Button 
		
		$( "#checkAll" ).change(function () {
			if($("#checkAll").prop('checked') == true){
				$( "#employee" ).prop('checked', true);
				$( ".employee" ).prop('checked', true);
				$( ".employee" ).prop('disabled', false);
				
				$( "#timeRecord" ).prop('checked', true);
				$( ".timeRecord" ).prop('checked', true);
				$( ".timeRecord" ).prop('disabled', false);
				
				$( "#payroll" ).prop('checked', true);
				$( ".payroll" ).prop('checked', true);
				$( ".payroll" ).prop('disabled', false);
				
				$( "#setting" ).prop('checked', true);
				$( ".setting" ).prop('checked', true);
				$( ".setting" ).prop('disabled', false);
				
				$( "#report" ).prop('checked', true);
				$( ".report" ).prop('checked', true);
				$( ".report" ).prop('disabled', false);
				
				$( "#upload" ).prop('checked', true);
				$( "#managerAccess" ).prop('checked', true);
				$( "#violation" ).prop('checked', true);
				$( "#loan" ).prop('checked', true);
				$( "#leave" ).prop('checked', true);
				$( "#logbookEntry" ).prop('checked', true);
				$( "#time" ).prop('checked', true);
				$( "#backupDatabase" ).prop('checked', true);
				$( "#sssLoan" ).prop('checked', true);
				$( "#gsisLoan" ).prop('checked', true);
				$( "#pagibigLoan" ).prop('checked', true);
				
				
			}
			else{
				$( "#employee" ).prop('checked', false);
				$( ".employee" ).prop('checked', false);
				$( ".employee" ).prop('disabled', true);
				
				$( "#timeRecord" ).prop('checked', false);
				$( ".timeRecord" ).prop('checked', false);
				$( ".timeRecord" ).prop('disabled', true);
				
				$( "#payroll" ).prop('checked', false);
				$( ".payroll" ).prop('checked', false);
				$( ".payroll" ).prop('disabled', true);
				
				$( "#setting" ).prop('checked', false);
				$( ".setting" ).prop('checked', false);
				$( ".setting" ).prop('disabled', true);
				
				$( "#report" ).prop('checked', false);
				$( ".report" ).prop('checked', false);
				$( ".report" ).prop('disabled', true);
				
				$( "#upload" ).prop('checked', false);
				$( "#managerAccess" ).prop('checked', false);
				$( "#violation" ).prop('checked', false);
				$( "#loan" ).prop('checked', false);
				$( "#leave" ).prop('checked', false);
				$( "#logbookEntry" ).prop('checked', false);
				$( "#time" ).prop('checked', false);
				$( "#backupDatabase" ).prop('checked', false);
				$( "#sssLoan" ).prop('checked', false);
				$( "#gsisLoan" ).prop('checked', false);
				$( "#pagibigLoan" ).prop('checked', false);
			}
		});
		
		// Check All - Properties Button
		$( "#checkAll-properties" ).change(function () {
			if($("#checkAll-properties").prop('checked') == true){
				$( "#employee-properties" ).prop('checked', true);
				$( ".employee-properties" ).prop('checked', true);
				$( ".employee-properties" ).prop('disabled', false);
				
				$( "#timeRecord-properties" ).prop('checked', true);
				$( ".timeRecord-properties" ).prop('checked', true);
				$( ".timeRecord-properties" ).prop('disabled', false);
				
				$( "#payroll-properties" ).prop('checked', true);
				$( ".payroll-properties" ).prop('checked', true);
				$( ".payroll-properties" ).prop('disabled', false);
				
				$( "#setting-properties" ).prop('checked', true);
				$( ".setting-properties" ).prop('checked', true);
				$( ".setting-properties" ).prop('disabled', false);
				
				$( "#report-properties" ).prop('checked', true);
				$( ".report-properties" ).prop('checked', true);
				$( ".report-properties" ).prop('disabled', false);
				
				$( "#upload-properties" ).prop('checked', true);
				$( "#managerAccess-properties" ).prop('checked', true);
				$( "#violation-properties" ).prop('checked', true);
				$( "#loan-properties" ).prop('checked', true);
				$( "#leave-properties" ).prop('checked', true);
				$( "#logbookEntry-properties" ).prop('checked', true);
				$( "#time-properties" ).prop('checked', true);
				$( "#backupDatabase-properties" ).prop('checked', true);
				$( "#sssLoan-properties" ).prop('checked', true);
				$( "#gsisLoan-properties" ).prop('checked', true);
				$( "#pagibigLoan-properties" ).prop('checked', true);
				
			}
			else{
				$( "#employee-properties" ).prop('checked', false);
				$( ".employee-properties" ).prop('checked', false);
				$( ".employee-properties" ).prop('disabled', true);
				
				$( "#timeRecord-properties" ).prop('checked', false);
				$( ".timeRecord-properties" ).prop('checked', false);
				$( ".timeRecord-properties" ).prop('disabled', true);
				
				$( "#payroll-properties" ).prop('checked', false);
				$( ".payroll-properties" ).prop('checked', false);
				$( ".payroll-properties" ).prop('disabled', true);
				
				$( "#setting-properties" ).prop('checked', false);
				$( ".setting-properties" ).prop('checked', false);
				$( ".setting-properties" ).prop('disabled', true);
				
				$( "#report-properties" ).prop('checked', false);
				$( ".report-properties" ).prop('checked', false);
				$( ".report-properties" ).prop('disabled', true);
				
				$( "#upload-properties" ).prop('checked', false);
				$( "#managerAccess-properties" ).prop('checked', false);
				$( "#violation-properties" ).prop('checked', false);
				$( "#loan-properties" ).prop('checked', false);
				$( "#leave-properties" ).prop('checked', false);
				$( "#logbookEntry-properties" ).prop('checked', false);
				$( "#time-properties" ).prop('checked', false);
				$( "#backupDatabase-properties" ).prop('checked', false);
				$( "#sssLoan-properties" ).prop('checked', false);
				$( "#gsisLoan-properties" ).prop('checked', false);
				$( "#pagibigLoan-properties" ).prop('checked', false);
			}
		});
		
		// Employee User Access
		$( ".employee" ).prop('disabled', true);	
		$( "#employee" ).change(function () {
			if($("#employee").prop('checked') == true){
				$( ".employee" ).prop('disabled', false);
				$( ".employee" ).prop('checked', true);
			}
			else{
				$( ".employee" ).prop('disabled', true);
				$( ".employee" ).prop('checked', false);
			}
		});
		
		// Employee User Access - Properties
		$( "#employee-properties" ).change(function () {
			if($("#employee-properties").prop('checked') == true){
				$( ".employee-properties" ).prop('disabled', false);
				$( ".employee-properties" ).prop('checked', true);
			}
			else{
				$( ".employee-properties" ).prop('disabled', true);
				$( ".employee-properties" ).prop('checked', false);
			}
		});
		
		if($("#employee-properties").prop('checked') == true){
			$( ".employee-properties" ).prop('disabled', false);	
		}
		else{
			$( ".employee-properties" ).prop('disabled', true);
			$( ".employee-properties" ).prop('checked', false);
		}
		
		// Time Record User Access
		$( ".timeRecord" ).prop('disabled', true);
		$( "#timeRecord" ).change(function () {
			if($("#timeRecord").prop('checked') == true){
				$( ".timeRecord" ).prop('disabled', false);
				$( ".timeRecord" ).prop('checked', true);
			}
			else{
				$( ".timeRecord" ).prop('disabled', true);
				$( ".timeRecord" ).prop('checked', false);
			}
		});
		
		// Time Record User Access - Properties
		$( ".timeRecord-properties" ).prop('disabled', true);
		$( "#timeRecord-properties" ).change(function () {
			if($("#timeRecord-properties").prop('checked') == true){
				$( ".timeRecord-properties" ).prop('disabled', false);
				$( ".timeRecord-properties" ).prop('checked', true);
			}
			else{
				$( ".timeRecord-properties" ).prop('disabled', true);
				$( ".timeRecord-properties" ).prop('checked', false);
			}
		});
		
		if($("#timeRecord-properties").prop('checked') == true){
			$( ".timeRecord-properties" ).prop('disabled', false);
		}
		else{
			$( ".timeRecord-properties" ).prop('disabled', true);
			$( ".timeRecord-properties" ).prop('checked', false);
		}
		
		// Payroll User Access
		$( ".payroll" ).prop('disabled', true);
		$( "#payroll" ).change(function () {
			if($("#payroll").prop('checked') == true){
				$( ".payroll" ).prop('disabled', false);
				$( ".payroll" ).prop('checked', true);
			}
			else{
				$( ".payroll" ).prop('disabled', true);
				$( ".payroll" ).prop('checked', false);
			}
		});
		
		// Payroll User Access - Properties
		$( ".payroll-properties" ).prop('disabled', true);
		$( "#payroll-properties" ).change(function () {
			if($("#payroll-properties").prop('checked') == true){
				$( ".payroll-properties" ).prop('disabled', false);
				$( ".payroll-properties" ).prop('checked', true);
			}
			else{
				$( ".payroll-properties" ).prop('disabled', true);
				$( ".payroll-properties" ).prop('checked', false);
			}
		});
		
		if($("#payroll-properties").prop('checked') == true){
			$( ".payroll-properties" ).prop('disabled', false);	
		}
		else{
			$( ".payroll-properties" ).prop('disabled', true);
			$( ".payroll-properties" ).prop('checked', false);
		}
		
		// Setting User Access
		$( ".setting" ).prop('disabled', true);
		$( "#setting" ).change(function () {
			if($("#setting").prop('checked') == true){
				$( ".setting" ).prop('disabled', false);
				$( ".setting" ).prop('checked', true);
			}
			else{
				$( ".setting" ).prop('disabled', true);
				$( ".setting" ).prop('checked', false);
			}
		});
		
		// Setting User Access - Properties
		$( ".setting-properties" ).prop('disabled', true);
		$( "#setting-properties" ).change(function () {
			if($("#setting-properties").prop('checked') == true){
				$( ".setting-properties" ).prop('disabled', false);
				$( ".setting-properties" ).prop('checked', true);
			}
			else{
				$( ".setting-properties" ).prop('disabled', true);
				$( ".setting-properties" ).prop('checked', false);
			}
		});
		
		if($("#setting-properties").prop('checked') == true){
			$( ".setting-properties" ).prop('disabled', false);	
		}
		else{
			$( ".setting-properties" ).prop('disabled', true);
			$( ".setting-properties" ).prop('checked', false);
		}
		
		// Report User Access
		$( ".report" ).prop('disabled', true);
		$( "#report" ).change(function () {
			if($("#report").prop('checked') == true){
				$( ".report" ).prop('disabled', false);
				$( ".report" ).prop('checked', true);
			}
			else{
				$( ".report" ).prop('disabled', true);
				$( ".report" ).prop('checked', false);
			}
		});
		
		// Report User Access - Properties
		$( ".report-properties" ).prop('disabled', true);
		$( "#report-properties" ).change(function () {
			if($("#report-properties").prop('checked') == true){
				$( ".report-properties" ).prop('disabled', false);
				$( ".report-properties" ).prop('checked', true);
			}
			else{
				$( ".report-properties" ).prop('disabled', true);
				$( ".report-properties" ).prop('checked', false);
			}
		});
		
		if($("#report-properties").prop('checked') == true){
			$( ".report-properties" ).prop('disabled', false);	
		}
		else{
			$( ".report-properties" ).prop('disabled', true);
			$( ".report-properties" ).prop('checked', false);
		}
		
		// Username validation
		$( "#userName" ).keyup(function () {
			var str = "";
			str = $( this ).val();
			 
			 $.ajax({
				type: "POST",
				url: "/ojt/setting-check-username.php",
				data:{ userName: str }, 
				success: function(data){
					if(data == '1'){	
						$( "#userNameSuccess" ).hide();
						$( "#userNameError" ).show();
						$( "#saveAdd" ).prop('disabled', true);	
					}
					else{
						$( "#userNameSuccess" ).show();
						$( "#userNameError" ).hide();
						$( "#saveAdd" ).prop('disabled', false);
					}
				}
			});
		})
		.keyup();
		
		// Update the value of user management table after clicking "Save" button
		$( "#saveAdd" ).change(function () {
			
			$.get('user-management.php', function(data) {
				$('#userManagementBody').html(data);    
			});
			
		})
		.change();
		
		// Update the value of user management table after clicking "Remove" button
		$( "#deleteConfirmed" ).change(function () {
			$.get('user-management.php', function(data) {
				$('#userManagementBody').html(data);    
			});
			
		})
		.change();
		
		// Make data table responsive
		$(document).ready(function() {
			$('#dataTables-userManagement').DataTable({
				  responsive: true
			});
			
		});

	</script>

	<?php
		require('../ojt/home-modals.php');
		require('../ojt/footer.php');
	?>
</body>
</html>


