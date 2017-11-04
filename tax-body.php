<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-withholdingtax">
		<thead>
			<tr>
				<th>Status</th>
				<th>Status (Initial)</th>
				<th>Salary From</th>
				<th>Salary To</th>
				<th>Over (%)</th>
				<th>Bracket Tax</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
EOT;
	$query = mysqli_query($connection, "select * from bracket_tax");
	
	if ($query->num_rows > 0) {		

		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['TaxStatus'] . "</td>";
			echo "<td>" . $row['TaxStatusShort'] . "</td>";
			echo "<td>" . $row['SalaryRateStart'] . "</td>";
			echo "<td>" . $row['SalaryRateEnd'] . "</td>";
			echo "<td>" . $row['TaxOver'] . "</td>";
			echo "<td>" . $row['TaxAmount'] . "</td>";
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" id='deleteTax' name="deleteTax" value='$tmp'>Delete</button>

					<button type="submit" name="editTax" id="editTax" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
		
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-withholdingtax').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>