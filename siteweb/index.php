<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="DIST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="DIST/css/new.css">
</head>
<body background = "123.png">
			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="padding:150px 0">
	<div class="logo">login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left" action="#" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" name="username" class="form-control" id="lg_username" name="lg_username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" name="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
    
    	<button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
				<?php
				if (isset($_POST['submit'])){
					$username = $_POST['username'];
					$password = $_POST['password'];
				$c = oci_connect($username,$password, "localhost/XE");
     			if (!$c){
         			$e=oci_error();
            		trigger_error('Could not connect database:'.$e['message'],E_USER_ERROR);
            	}
            	else {
            		header("Location: inventory.php");
            	}
			}
?>
<script type="text/javascript" src="DIST/js/new.js"></script>
<script type="text/javascript" src="DIST/bootstrap.js"></script>

</body>
</html>