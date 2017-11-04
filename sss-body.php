<?php

	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-sss">
		<thead>
			<tr>
				<th>SSS Code</th>
				<th>Description</th>
				<th>Salary From</th>
				<th>Salary To</th>
				<th>Credit</th>
				<th>SS-ER</th>
				<th>SS-EE</th>
				<th>SS-Total</th>
				<th>EC-ER</th>
				<th>TC-ER</th>
				<th>TC-EE</th>
				<th>TC-Total</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
EOT;
	$query = mysqli_query($connection, "select * from bracket_sss");
	
	if ($query->num_rows > 0) {		

		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['SSSCode'] . "</td>";
			echo "<td>" . $row['Description'] . "</td>";
			echo "<td>" . number_format($row['SalaryRateStart'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SalaryRateEnd'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SalaryCredit'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SSer'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SSee'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SStotal'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['ECer'], 2, '.', ',') . "</td>";
			echo "<td>" .number_format($row['TCer'], 2, '.', ',')  . "</td>";
			echo "<td>" . number_format($row['TCee'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['TCtotal'], 2, '.', ',') . "</td>";
			echo "<td>" . number_format($row['SSSAmount'], 2, '.', ',') . "</td>";
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deleteSSS" id="deleteSSS" value='$tmp'>Delete</button>

					<button type="submit" name="editSSS" id="editSSS" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-sss').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>