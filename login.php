<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		require('../ojt/header.php');
	?>

	<style>
	body {
    	background: url(../ojt/bg/gplus.jpg) no-repeat center center fixed;
    	background-size: cover;
	}
	</style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="text-align: center;">
                    <div class="panel-heading" style="height: 50px;">
                        <h2 class="panel-title" style="margin-top: 4px;">3GXHRMS</h2>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div><a href="#">Forgot password?</a></div><br />
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Sign In</button><br/>
                                <div>COPYRIGHT 3GXSOLUTIONS © 2016</div>
								
								<?php	
									if (isset($_POST['submit']) && !empty($_POST['username']) 
									   && !empty($_POST['password'])) {
											// Define $username and $password
											$username=$_POST['username'];
											$password=$_POST['password'];
											
											// To protect MySQL injection for Security purpose
											$username = stripslashes($username);
											$password = stripslashes($password);
											$username = mysqli_real_escape_string($connection, $username);
											$password = mysqli_real_escape_string($connection, $password);
											
											// SQL query to fetch information of registerd users and finds user match.
											$query = mysqli_query($connection, "select * from user where Password='$password' AND UserName='$username'");
											$rows = mysqli_num_rows($query);
											if ($rows == 1) {
												
												$_SESSION['login_user']=$username; // Initializing Session
												$_SESSION['valid'] = true;
												$_SESSION['timeout'] = time();
												echo<<<EOT
													<br /><div class="alert alert-success">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<strong>Success!</strong> Username and password are accepted!
													</div>
EOT;
												header("Refresh: 1; url = home"); // Redirecting To Other Page
											} else {
												echo<<<EOT
													<br /><div class="alert alert-danger">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<strong>Error!</strong> Wrong username/password
													</div>
EOT;
											}
									}
								?>
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<?php
		require('../ojt/footer.php');
	?>

</body>

</html>
