
<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
	<table class="table table-striped table-bordered table-hover" id="dataTables-userManagement">
		<thead>
			<tr>
				<th></th>
				<th>Username</th>
				<th>User Role</th>
				<th>Realname</th>
				<th>Employee ID</th>
			</tr>
		</thead>
		<tbody>
EOT;
	
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysqli_query($connection, "select UserLevel from user where UserName = '" . $_SESSION['login_user'] . "'");
	$result = $query->fetch_assoc();
	
	if ($query->num_rows > 0) {														
		// output data of each row
		if($result['UserLevel'] == 'admin'){
			$query = mysqli_query($connection, "select * from user");

			while($row = $query->fetch_assoc()) {
				if($row["UserLevel"] == "admin"){
					if($row["UserName"] == 'admin'){
						echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' checked ></td>";
						echo "<td>" . $row["UserName"]. "</td><td>admin</td><td>Master Admin</td><td></td></tr>";
					}
					else{
						echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
						echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
						
						$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
						
						if ($queryTmp->num_rows == 1) {
							while($rowTmp = $queryTmp->fetch_assoc()) {
								echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

								echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
							}
						}
					}
				}
				else{
					echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
					echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
					
					$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
					
					if ($queryTmp->num_rows == 1) {
						while($rowTmp = $queryTmp->fetch_assoc()) {
							echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

							echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
						}
					}
				}
			}		
		}
		else if($result['UserLevel'] == 'manager'){
			$ctr = 1;
			$query = mysqli_query($connection, "select * from user");

			while($row = $query->fetch_assoc()) {
				if($row["UserLevel"] != "admin"){
					if($ctr == 1){
						echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' checked></td>";
					}
					else{
						echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' ></td>";
					}
					$ctr++;
					echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
					
					$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
					
					if ($queryTmp->num_rows == 1) {
						while($rowTmp = $queryTmp->fetch_assoc()) {
							echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

							echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
						}
					}
				}
			}		
		}
		else{
			$query = mysqli_query($connection, "select * from user where UserName = '" . $_SESSION['login_user'] . "'");
			$row = $query->fetch_assoc();
			echo "<tr><td style='text-align: center;'><input type='radio' value='". $row["UserName"] . "' name='radioList' checked></td>";
			echo "<td>" . $row["UserName"]. "</td><td>" . $row["UserLevel"] . "</td>";
			
			$queryTmp = mysqli_query($connection, "select * from employee where EmployeeID = '". $row["EmployeeID"] . "'");
			
			$rowTmp = $queryTmp->fetch_assoc();
			echo "<td>" . $rowTmp["LastName"] . ", " . $rowTmp["FirstName"] . " " . $rowTmp["MiddleName"] . "</td>";

			echo "<td>" . $rowTmp["EmployeeID"] . "</td></tr>";
				
			
		}
	}
	
	echo <<< EOT
	</tbody></table>
	<script>
		$(document).ready(function() {
			$('#dataTables-userManagement').DataTable({
				  responsive: true
			});
			
		});
	</script>
EOT;
?>