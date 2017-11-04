<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
		<table class="table table-striped table-bordered table-hover" id="dataTables-position">
			<thead>
				<tr>
					<th>Position Code</th>
					<th>Description</th>
					<th>Manager Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
EOT;
	
	$query = mysqli_query($connection, "select * from position");
	
	if ($query->num_rows > 0) {														
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['PositionCode'] . "</td>";
			echo "<td>". $row['Description'] . "</td>";
			if($row['IsManager'] == '1'){
				echo "<td>True</td>";
			}
			else{
				echo "<td>False</td>";
			}
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deleteP" id="deleteP" value='$tmp'>Delete</button>
															
					<button type="submit" name="editP" id="editP" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
			
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-position').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>