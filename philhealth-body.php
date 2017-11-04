<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-philhealth">
		<thead>
			<tr>
				<th>Philhealth Code</th>
				<th>Description</th>
				<th>Salary From</th>
				<th>Salary To</th>
				<th>Salary Credit</th>
				<th>Employee Share</th>
				<th>Employer Share</th>
				<th>Total Contribution</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody >
EOT;
	$query = mysqli_query($connection, "select * from bracket_philhealth");
	
	if ($query->num_rows > 0) {		

		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['PhilHealthCode'] . "</td>";
			echo "<td>" . $row['Description'] . "</td>";
			echo "<td>" . number_format($row['SalaryRateStart'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SalaryRateEnd'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SalaryCredit'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['PHee'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['PHer'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['PhilhealthAmount'], 2, '.', ',') . "</td>";
			
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deletePH" id="deletePH" value='$tmp'>Delete</button>

					<button type="submit" name="editPH" id="editPH" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-philhealth').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>