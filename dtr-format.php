<html>
<head></head>
<body>
<div class="panel-body" id='dtr-format-body'>	
	<div class='row'>
		<div class="col-md-6">
			<img src="../ojt/images/dtr-format-1.png" class="img-responsive center-block" alt="DTR Format 1" />
		</div>
		
		<div class="col-md-6">
			<div class="radio">
				<?php
					$query = mysqli_query($connection, "select FormatDTR from setting");

					if ($query->num_rows > 0) {		
						$row = $query->fetch_assoc();
						
						if($row['FormatDTR'] == '1'){
							echo "<label><input type='radio' value='1' name='dtr-format' checked>Format 1, with Verify and Noted person</label>";
						}else{
							echo "<label><input type='radio' value='1' name='dtr-format'>Format 1, with Verify and Noted person</label>";
						}
				?>
			  
			</div>
		</div>
	</div>
	<div class='row'>
		<div class="col-md-6">
			<img src="../ojt/images/dtr-format-2.png" class="img-responsive center-block" alt="DTR Format 2" >
		</div>
		
		<div class="col-md-6">
			<div class="radio">
				<?php
					if($row['FormatDTR'] == '2'){
						echo "<label><input type='radio' value='2' name='dtr-format' checked>Format 2, with Verify and Noted person interchange</label>";
					}else{
						echo "<label><input type='radio' value='2' name='dtr-format'>Format 2, with Verify and Noted person interchange</label>";
					}
				?>
			  
			</div>
		</div>
	</div>
	<div class='row'>
		<div class="col-md-6">
			<img src="../ojt/images/dtr-format-3.png" class="img-responsive center-block" alt="DTR Format 3" >
		</div>
		
		<div class="col-md-6">
			<div class="radio">
			  <?php
				if($row['FormatDTR'] == '3'){
					echo "<label><input type='radio' value='3' name='dtr-format' checked>Format 3, with Verify person only</label>";
				}else{
					echo "<label><input type='radio' value='3' name='dtr-format'>Format 3, with Verify person only</label>";
				}
			  ?>
			  
			</div>
		</div>
	</div>
	
</div>
<!-- /.panel-body -->
<div style="text-align: center;">
	<button type="submit" id='save' name="save" class="btn btn-primary">Save</button>
</div>
<br />
</div>
												
</body>
</html>