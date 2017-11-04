<?php

	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
		<table class="table table-striped table-bordered table-hover" id="dataTables-branch">
			<thead>
				<tr>
					<th>Branch Code</th>
					<th>Branch Name</th>
					<th>Address</th>
					<th>Start Based</th>
					<th>Reader Number</th>
					<th>Reader IP</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
EOT;
	$query = mysqli_query($connection, "select * from branch");
	
	if ($query->num_rows > 0) {														
		// output data of each row
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['BranchCode'] . "</td>";
			echo "<td>". $row['BranchName'] . "</td>";
			echo "<td>". $row['Address'] . "</td>";
			echo "<td>". $row['BranchCodeStart'] . "</td>";
			$queryTmp = mysqli_query($connection, "select ReaderIP from reader where ReaderNumber = '" . $row['ReaderNumber'] ."'");
			$rowTmp = $queryTmp->fetch_assoc();
			echo "<td>". $row['ReaderNumber'] . "</td>";
			echo "<td>". $rowTmp['ReaderIP'] . "</td>";
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" name="deleteBranch" id="deleteBranch" value='$tmp'>Delete</button>

					<button type="submit" name="editBranch" id="editBranch" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
	}
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-branch').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>