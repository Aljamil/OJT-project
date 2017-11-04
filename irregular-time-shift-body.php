<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	echo <<< EOT
		<table class="table table-striped table-bordered table-hover" id="dataTables-irregular">
			<thead>
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Morning IN</th>
					<th>Morning OUT</th>
					<th>Noon IN</th>
					<th>Noon OUT</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
EOT;
	$query = mysqli_query($connection, "select * from schedule_irregular");

	if ($query->num_rows > 0) {														
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['ID'] . "</td>";
			echo "<td>". $row['Description'] . "</td>";
			if(empty($row['In'])){
				echo "<td>--:--</td>";
			}else{
				$tmp = strtotime($row['In']);
				echo "<td>". date( "h:i A", $tmp) . "</td>";
			}
			
			if(empty($row['Break'])){
				echo "<td>--:--</td>";
			}else{
				$tmp = strtotime($row['Break']);
				echo "<td>". date( "h:i A", $tmp) . "</td>";
			}
			
			if(empty($row['Resume'])){
				echo "<td>--:--</td>";
			}else{
				$tmp = strtotime($row['Resume']);
				echo "<td>". date( "h:i A", $tmp) . "</td>";
			}
			
			if(empty($row['Out'])){
				echo "<td>--:--</td>";
			}else{
				$tmp = strtotime($row['Out']);
				echo "<td>". date( "h:i A", $tmp) . "</td>";
			}
			
			
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deleteI" id='deleteI' value='$tmp'>Delete</button>

					<button type="submit" name="editI" id="editI" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-irregular').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>