<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-time-code">
		<thead>
			<tr>
				<th>DTR Code</th>
				<th>Description</th>
				<th>Payable</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
EOT;
	$query = mysqli_query($connection, "select * from leave_type");
	
	if ($query->num_rows > 0) {		
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['LeaveCode'] . "</td>";
			echo "<td>". $row['Description'] . "</td>";
			if($row['WithPay'] == '1'){
				echo "<td>True</td>";
			}
			else{
				echo "<td>False</td>";
			}
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type='submit' class="btn-xs btn-danger" id='delete' name="delete" value='$tmp'>Delete</button>

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
			$('#dataTables-time-code').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>
																
																