<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-period">
		<thead>
			<tr>
				<th>ID</th>
				<th>Description</th>
				<th>Start</th>
				<th>End</th>
				<th>Same Month</th>
				<th>Whole Month</th>
				<th>Weekly</th>
				<th>Period</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
EOT;
	$query = mysqli_query($connection, "select * from payroll_period");
	
	if ($query->num_rows > 0) {										
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['ID'] . "</td>";
			echo "<td>" . $row['Description'] . "</td>";
			echo "<td>" . $row['DayStart'] . "</td>";
			echo "<td>" . $row['DayEnd'] . "</td>";
			if($row['IsSameMonth'] == '1'){
				echo "<td>True</td>";
			}else{
				echo "<td>False</td>";
			}
			if($row['IsWholeMonth'] == '1'){
				echo "<td>True</td>";
			}else{
				echo "<td>False</td>";
			}
			if($row['IsWeekly'] == '1'){
				echo "<td>True</td>";
			}else{
				echo "<td>False</td>";
			}
			
			switch($row['PeriodSet']){
				case '0':
					echo "<td>Whole</td>";
					break;
				case '1':
					echo "<td>1st Half</td>";
					break;
				case '2':
					echo "<td>2nd Half</td>";
					break;
				case '3':
					echo "<td>Irregular</td>";
					break;
			}
			$tmp = $row['ID'];
			echo <<< EOT
					<td>
						<button type="submit" class="btn-xs btn-danger" id='delete' name="delete" value='$tmp'>Delete</button>

						<button type="submit" name="edit" id="edit" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
					</td>
					</tr>
EOT;
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-period').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>
															