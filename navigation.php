<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<a class="navbar-brand" href="../ojt/home" style="padding: 5px 30px 0 15px;">
		<?php
			$query = mysqli_query($connection, "select CompanyLogo from setting WHERE ID = '1'");
			$row = $query->fetch_assoc();
			if($row['CompanyLogo'] != NULL){
				
				echo "<img src='data:image/jpeg;base64," . base64_encode( $row['CompanyLogo'] ) . "' width='40px' height='40px'/>";
			}
			else{
				echo "<img src='../ojt/images/logo_default.png' width='40px' height='40px'/>";
			}
		?>
		</a>
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right">
		<li>Welcome <?php echo $_SESSION['login_user'] ?>!</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
				</li>
				<li class="divider"></li>
				<li><a href="../ojt/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
		
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-alerts">
				<li>
					<a href="#">
						<div>
							<i class="fa fa-comment fa-fw"></i> New Comment
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-twitter fa-fw"></i> 3 New Followers
							<span class="pull-right text-muted small">12 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-envelope fa-fw"></i> Message Sent
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-tasks fa-fw"></i> New Task
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-upload fa-fw"></i> Server Rebooted
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a class="text-center" href="#">
						<strong>See All Alerts</strong>
						<i class="fa fa-angle-right"></i>
					</a>
				</li>
			</ul>
			<!-- /.dropdown-alerts -->
		</li>
		<!-- /.dropdown -->
		
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-question-circle fa-fw"></i>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a data-toggle="modal" data-target="#aboutModal"><i class="fa fa-info fa-fw"></i> About</a>
				</li>
				<li><a data-toggle="modal" data-target="#sendFeebackModal"><i class="fa fa-envelope-o fa-fw"></i> Send Feedback</a>
				</li>
			</ul>
			<!-- /.dropdown-help -->
		</li>
		
	</ul>
	<!-- /.navbar-top-links -->
	
	<!-- user_access not used attribute 
	
		AcEmployeeSalary
		AcTimeRecord
		AcTimeRecordEdit
		AcTimeRecordShowEdit
		AcPayrollImport
		AcLoan
		AcViolation
		AcSettingDepartment
		AcUpload
		AcManager
		AcBackup
		AcReportDeficiency

	-->
	
	<ul class="nav navbar-top-links navbar-left">
		
		<li class="dropdown">
			<?php
				$user = $_SESSION['login_user'];
				$query = mysqli_query($connection, "SELECT AcEmployee, AcEmployeeSalary, AcTimeRecord, AcTimeRecordEdit, AcPayroll, AcPayrollImport, AcLoan, AcLeave, AcViolation, AcSetting, AcSettingUser, AcSettingHoliday, AcSettingBranch, AcSettingDepartment, AcSettingTimeBranch, AcSettingTimeCode, AcSettingTimeShift, AcSettingDeduction, AcSettingDeptPosition, AcSettingViolation, AcSettingPeriod, AcSettingSystem, AcSettingCompany, AcSettingMachine, AcSettingMachineAdmin, AcSettingLeaveCredit, AcUpload, AcManager, AcLogbook, AcBackup, AcReport, AcReportEmployee, AcReportRemittance, AcReportPayroll, AcReportDTRSummary, AcReportDeficiency, AcReportLoan, AcSettingDTRFormat, AcTimeRecordShowEdit, AcSettingSchedule, AcLoanSSS, AcLoanGSIS, AcLoanHDMF, AcTravelOrder FROM user_access WHERE UserName='$user'" );
				
				if ($query->num_rows > 0) {
					// output data of each row
					while($row = $query->fetch_assoc()) {
						if($row['AcEmployee'] == '1'){
							echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
						}
						else{
							echo "<a style='cursor:not-allowed;'>";
						}
			?>
			
				Employee <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li><a href="../ojt/employeeList.php">Employee List</a>
				</li>
				<li><a href="../ojt/employeProfile.php">Add Employee</a>
				</li>
				
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				Time <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li><a data-toggle="modal" data-target="#employeeTimeSheet"> Employee Timesheet</a>
				</li>
				<li>
				<?php
					if($row['AcLogbook'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Logbook Entry</a>
				</li>
			</ul>
		</li>
		<!-- /.dropdown -->
		
		<li>
			<?php
				if($row['AcPayroll'] == '1'){
					echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
				}
				else {
					echo "<a style='cursor:not-allowed;'>";
				}
			?>
				Payroll
			</a>
		</li>
		<!-- /.dropdown -->
		
		<li class="dropdown">
			
			<?php
				if($row['AcLeave'] == '1'){
					echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
				}
				else {
					echo "<a style='cursor:not-allowed;'>";
				}
			?>
				Leave  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Leave List</a>
				</li>
				<li><a href="#">Leave Period</a>
				</li>
				<li><a href="#">Assign Leave</a>
				</li>
				<li><a class="trigger right-caret">Entitlements</a>
					<ul class="dropdown-menu sub-menu">
						<li><a href="#">Add entitlements</a>
						</li>
						<li><a href="#">Employee Entitlements</a>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		
		<!-- /.dropdown -->
		
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				201 Files  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Other Deduction</a>
				</li>
				<li><a href="#">Cash Advance</a>
				</li>
				<div class="divider"></div>
				<li>
				<?php
					if($row['AcTravelOrder'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Travel Order</a>
				</li>
				<li>
				<?php
					if($row['AcLoanSSS'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				SSS Loan</a>
				</li>
				<li>
				<?php
					if($row['AcLoanGSIS'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				GSIS Loan</a>
				</li>
				<li>
				<?php
					if($row['AcLoanHDMF'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				HDMF Loan</a>
				</li>
				<li><a href="#">Postal Loan</a>
				</li>
				<li><a href="#">CEN Loan</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
		
		<li class="dropdown">
			<?php
				if($row['AcReport'] == '1'){
					echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
				}
				else {
					echo "<a style='cursor:not-allowed;'>";
				}
			?>
			
				Report  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li>
				<?php
					if($row['AcReportEmployee'] == '1'){
						echo "<a class='trigger right-caret'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Masterlist</a>
                    <ul class="dropdown-menu sub-menu">
                        <li><a href="../ojt/masterlist_active.php" target="_blank">Active Masterlist</a>
                        </li>
                        <li><a href="../ojt/masterlist_inactive.php" target="_blank">In-Active Masterlist</a>
                        </li>
                    </ul>
				</li>
				<li>
				<?php
					if($row['AcReportRemittance'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Remittance</a>
				</li>
				<li>
				<?php
					if($row['AcReportPayroll'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Payroll Form</a>
				</li>
				<li>
				<?php
					if($row['AcReportDTRSummary'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				DTR</a>
				</li>
				<li>
				<?php
					if($row['AcReportLoan'] == '1'){
						echo "<a href='#'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Loan/Cash Advance</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
		
		<li class="dropdown">
			<?php
				if($row['AcSetting'] == '1'){
					echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>";
				}
				else {
					echo "<a style='cursor:not-allowed;'>";
				}
			?>
				Settings <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li>
				<?php
					if($row['AcSettingUser'] == '1'){
						echo "<a href='../ojt/setting-user'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				User</a>
				</li>
				<li>
				<?php
					if($row['AcSettingSystem'] == '1'){
						echo "<a href='../ojt/setting-system'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				System</a>
				</li>
				<li>
				<?php
					if($row['AcSettingHoliday'] == '1'){
						echo "<a href='../ojt/setting-holiday'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Holiday</a>
				</li>
				<li>
				<?php
					if($row['AcSettingViolation'] == '1'){
						echo "<a href='../ojt/setting-violation'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Violation</a>
				</li>
				<li>
				<?php
					if($row['AcSettingTimeCode'] == '1'){
						echo "<a href='../ojt/setting-time-code'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Time Code</a>
				</li>
				<li>
				<?php
					if($row['AcSettingTimeShift'] == '1'){
						echo "<a href='../ojt/setting-time-shift'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Time Shift</a>
				</li>
				<li>
				<?php
					if($row['AcSettingDeduction'] == '1'){
						echo "<a href='../ojt/setting-deduction'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Deduction</a>
				</li>
				
				<li>
				<?php
					if($row['AcSettingDTRFormat'] == '1'){
						echo "<a href='../ojt/setting-dtr-format'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				DTR Format</a>
				</li>
				<li>
				<?php
					if($row['AcSettingTimeBranch'] == '1'){
						echo "<a href='../ojt/setting-branch-time'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Branch Time</a>
				</li>
				<li>
				<?php
					if($row['AcSettingDeptPosition'] == '1'){
						echo "<a href='../ojt/setting-dept-position'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Dept/Position</a>
				</li>
				<li>
				<?php
					if($row['AcSettingPeriod'] == '1'){
						echo "<a href='../ojt/setting-period'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Payroll Period</a>
				</li>
				<li>
				<?php
					if($row['AcSettingBranch'] == '1'){
						echo "<a href='../ojt/setting-branch'>";
					}
					else {
						echo "<a style='cursor:not-allowed;'>";
					}
				?>
				Branch/Reader</a>
				</li>
				<li>
				<?php
					if($row['AcSettingCompany'] == '1'){
						echo "<a href='../ojt/setting-company-info'>";
					}
					else {
							echo "<a style='cursor:not-allowed;'>";
					}
				}
				}
				?>
				Company Information</a>
				</li>
			</ul>
		</li>
		<!-- /.dropdown -->
	</ul>
</nav>
