<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="DIST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="DIST/css/style.css">
</head>
<body>
			<div class="login">
  <header class="login-header"><span class="text">LOGIN</span><span class="loader"></span></header>
  <form class="login-form">
    <input class="login-input" type="text" placeholder="Username"/>
    <input class="login-input" type="password" placeholder="Password"/>
    <button class="login-btn" type="submit">login</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>


				<?php
				if (isset($_POST['submit'])){
				$c = oci_connect('hr' , 'hr', '//localhost/XE');
					$username = $_POST['username'];
					$password = $_POST['password'];

     			do_query($conn, "SELECT EMPLOYEE_ID FROM EMPLOYEES WHERE EMPLOYEE_ID='".$username."' and email='".$password."'");
     			

			}
			function do_query($conn, $query){
    			$stid = oci_parse($conn, $query);
    			$r = oci_execute($stid, OCI_DEFAULT);
    			$row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS);
    			$item=oci_num_rows($stid);
    			if($item =1){
    					header("location: anyco.php");
    			}

    			else{
    				
    				echo "Invalid account";
    			}
}
?>



</body>
</html>