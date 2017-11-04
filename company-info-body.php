<?php
	session_start();
	if(!isset($_SESSION['login_user']) && $_SERVER['PHP_SELF'] != "/ojt/login.php"){
		header('location: login');
	}
	require('../ojt/connectDB.php');
	
	echo <<< EOT
	<div class="form-group">
		<label class="control-label col-sm-4">Company Name:</label>
		<div class="col-sm-8">
EOT;
				$query = mysqli_query($connection, "select * from setting");
				$row = $query->fetch_assoc();
				
				$companyName = $row['CompanyName'];
				$companyAddress = $row['CompanyAddress'];
				$companyZipCode = $row['CompanyZipCode'];
				$companyContactNo = $row['CompanyContactNo'];
				$companyOwner = $row['CompanyOwner'];
				$companySSS = $row['CompanySSS'];
				$companyTIN = $row['CompanyTIN'];
				$companyPI = $row['CompanyPI'];
				$companyPH = $row['CompanyPH'];
				$reportHead1 = $row['ReportHead1'];
				$reportHead2 = $row['ReportHead2'];
				$reportHead3 = $row['ReportHead3'];
				
				echo "<input class='form-control' name='companyName' value='$companyName'>";
			
		echo <<< EOT
			
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Address:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='companyAddress' value='$companyAddress'>";
			
		echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Zip Code:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='companyZipCode' value='$companyZipCode'>";	
			
			echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Contact No.:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='companyContactNo' value='$companyContactNo'>";
			
			echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Owner:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='companyOwner' value='$companyOwner'>";
			
			echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Tin No.:</label>
		<div class="col-sm-8">
EOT;
			
			echo "<input class='form-control' name='companyTIN' value='$companyTIN'>";	
			
			echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">SSS. No.:</label>
		<div class="col-sm-8">
EOT;
			
		echo "<input class='form-control' name='companySSS' value='$companySSS'>";
			
		echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Pagibig ID No.:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='companyPI' value='$companyPI'>";
			
		echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Philhealth No.:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='companyPH' value='$companyPH'>";
			
		echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Report Head1:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='reportHead1' value='$reportHead1'>";
			
		echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Report Head2:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='reportHead2' value='$reportHead2'>";
			
		echo <<< EOT
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-4">Report Head3:</label>
		<div class="col-sm-8">
EOT;
			
				echo "<input class='form-control' name='reportHead3' value='$reportHead3'>";
			
		echo <<< EOT
		</div>
	</div>
EOT;
?>