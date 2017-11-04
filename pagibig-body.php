<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-pagibig">
		<thead>
			<tr>
				<th>Pagibig Code</th>
				<th>Description</th>
				<th>Salary From</th>
				<th>Salary To</th>
				<th>EE Share</th>
				<th>ER Share</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
EOT;
	$query = mysqli_query($connection, "select * from bracket_pagibig");
	
	if ($query->num_rows > 0) {		

		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['PagibigCode'] . "</td>";
			echo "<td>" . $row['Description'] . "</td>";
			echo "<td>" . number_format($row['SalaryRateStart'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SalaryRateEnd'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['PIer'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['PIee'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['PagibigAmount'], 2, '.', ',') . "</td>";
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deletePI" id="deletePI" value='$tmp'>Delete</button>

					<button type="submit" name="editPI" id="editPI" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-pagibig').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>