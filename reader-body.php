<?php

	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-reader">
		<thead>
			<tr>
				<th>Device ID</th>
				<th>IP Address</th>
				<th>Port</th>
				<th>Com PWD</th>
				<th>Model</th>
				<th>Used</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
EOT;
	$query = mysqli_query($connection, "select * from reader");
	
	if ($query->num_rows > 0) {														
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['ReaderNumber'] . "</td>";
			echo "<td>". $row['ReaderIP'] . "</td>";
			echo "<td>". $row['ReaderPort'] . "</td>";
			echo "<td>". $row['ReaderPassword'] . "</td>";
			echo "<td>". "" . "</td>";
			if($row['IsActive'] == '1'){
				echo "<td>True</td>";
			}else{
				echo "<td>False</td>";
			}
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" id="deleteReader" name="deleteReader" value='$tmp'>Delete</button>

					<button type="submit" name="editReader" id="editReader" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
			
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-reader').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>