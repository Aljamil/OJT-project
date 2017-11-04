

<!-- Time Picker -->
<script src="../ojt/bower_components/bootstrap/dist/js/bootstrap-timepicker.js"> </script>
<!-- DatePicker -->
 <link href="../ojt/bower_components/bootstrap/dist/css/datepicker.css" rel="stylesheet" type="text/css" />

<!-- Modal for About -->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="aboutModalLabel">About</h4>
			</div>
			<div class="modal-body">
				3GX Human Resource Management System<br />Version 1.0<br />Release Date: 12.25.2015
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal for Send Feedback -->
<div class="modal fade" id="sendFeebackModal" tabindex="-1" role="dialog" aria-labelledby="sendFeebackModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="sendFeebackModalLabel">Send Feedback</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label>First Name</label>
						<input class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Subject</label>
						<input class="form-control">
					</div>
					
					<div class="form-group">
						<label>Comment</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div style="text-align: center;">
					<button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
					<button type="reset" class="btn btn-default">Reset</button>
					</div>
				</form>
				
			</div>
			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- EmployeeTimeModal -->
                <div class="modal fade" id="employeeTimeSheet" tabindex="-1" role="dialog" aria-labelledby="employeeTimeSheetLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Employee Timesheet</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal"  action="dtrtable.php" role='form_edit' method="post">
                            <div class="form-group">
                                <label for="employeeName" class="col-sm-3 control-label" >Employee Name*</label>
                            <div class="col-sm-9">
                                <select input class="form-control" id="employeeName" name='employeeName'>
                               <?php
                                $query = mysqli_query($connection,  "SELECT EmployeeID, LastName, FirstName, MiddleName, Description FROM employee, schedule WHERE employee.SchedCode = schedule.SchedCode order by LastName ");
                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                  echo "<option>" . $row['EmployeeID'] . " " . $row['LastName'] . ", " . $row['FirstName'] . " " . $row['MiddleName'] . "</option>";
                                }

                                }
                                ?>
                                </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="period" class="col-sm-3 control-label">Period*</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="period" name="period">
                                <?php
                                $query = mysqli_query($connection, "SELECT Description FROM payroll_period order by DayStart DESC ");
                                if($query->num_rows > 0){
                                while($row = $query->fetch_assoc()){
                                echo "<option>" . $row['Description'] . "</option>"; 
                                }
                                }
                                ?>
                                </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label" >Month*</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" required="true" id="month" name="month"> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="yearl" class="col-sm-3 control-label" >Year*</label>
                            <div div class="col-sm-9">
                                <input type="text" class="form-control" required="true" id="year" name="year"> </input>
                                </div>
                            </div>
                                     
                                <?php   
                                
                                  for($i = 1; $i < 32; $i++){
                                        echo "<input type='hidden' name='petsa" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='inam" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='outam" . $i . "'" . " />" ;         
                                        echo "<input type='hidden' name='inpm" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='inot" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='outpm" . $i . "'" . " />" ;
                                        echo "<input type='hidden'  name='outot" . $i . "'" . " />" ;                
                                        echo "<input type='hidden'  name='opening" . $i . "'" . "  />";  
                                        echo "<input type='hidden'  name='closing" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='abs" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='lt" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='ut" . $i . "'" . " /> ";
                                        echo "<input type='hidden'  name='ot" . $i . "'" . " /> ";
                                        echo "<input type='hidden' name='shift" . $i . "'" . " />" ;                                     
                                    }

                                                                             
                            ?>


                             <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Continue</button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

 
     