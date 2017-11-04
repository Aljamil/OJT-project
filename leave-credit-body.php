<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	$query = mysqli_query($connection, "select * from leave_credit");

	if ($query->num_rows > 0) {		
		while($row = $query->fetch_assoc()) {
			echo "<tr><td>" . $row['Minutes'] . "</td>";
			echo "<td>" . $row['Fractions'] . "</td>";
			
			$tmp = $row['ID'];
			echo <<< EOT
				<td>
					<button type="submit" class="btn-xs btn-danger" id='delete' name="delete" value='$tmp'>Delete</button>

					<button type="submit" name="edit" id="edit" type="button" class="btn-xs btn-primary" value='$tmp'>Edit</button>
				</td>
				</tr>
EOT;
		}
	}
?>