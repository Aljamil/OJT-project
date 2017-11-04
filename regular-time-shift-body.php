<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
		<table class="table table-striped table-bordered table-hover" id="dataTables-regular">
			<thead>
				<tr>
					<th>Sched Code</th>
					<th>Description</th>
					<th>Total Hrs</th>
					<th>Editable</th>
					<th>Flexitime</th>
					<th>By Hour</th>
					<th>Dayoff</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
EOT;
	$query = mysqli_query($connection, "select * from schedule");
	
	if ($query->num_rows > 0) {														
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['SchedCode'] . "</td>";
			echo "<td>" . $row['Description'] . "</td>";
			echo "<td>" . $row['TotalHrs'] . "</td>";
			if($row['IsEditUndertime'] == '0'){
				echo "<td>False</td>";
			}else{
				echo "<td>True</td>";
			}
			if($row['IsFlexi'] == '0'){
				echo "<td>False</td>";
			}else{
				echo "<td>True</td>";
			}
			if($row['IsTotalHrs'] == '0'){
				echo "<td>False</td>";
			}else{
				echo "<td>True</td>";
			}
			echo "<td>" . $row['TotalOff'] . "</td>";
			
			$tmp = $row['ID'];
			
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deleteR" id='deleteR' value='$tmp'>Delete</button>

					<button type="submit" name="editR" id="editR" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
				
		}
	}
		echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-regular').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>