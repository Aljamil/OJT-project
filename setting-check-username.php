<?php
	require('../ojt/connectDB.php');
	
	if(isset($_POST['userName'])){
		$username = strtolower($_POST['userName']);
		if(empty($username)){
			echo "1";
		}
		else{
			
			$query = mysqli_query($connection, "select UserName from user where UserName = '". $username . "'");
			if ($query->num_rows == 1) {
				echo "1";
			}
			else{
				echo "0";
			}
		}
	}
	mysqli_close($connection); // Closing Connection
	
?>