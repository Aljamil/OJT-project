<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-dept">
		<thead>
			<tr>
				<th>Department Code</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody >
EOT;
	$query = mysqli_query($connection, "select * from department");
	
	if ($query->num_rows > 0) {														
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['DepartmentCode'] . "</td>";
			echo "<td>". $row['Description'] . "</td>";
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" id="deleteD" name="deleteD" value='$tmp'>Delete</button>

					<button type="submit" name="editD" id="editD" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
			
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-dept').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>