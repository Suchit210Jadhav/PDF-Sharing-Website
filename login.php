<?php
	session_start();
	if(isset($_SESSION['name'])){
	    echo "<script type='text/javascript'> alert('YOU ARE ALREADY LOGGED IN!');
	    window.location.href = 'insertintodbphp.php';
	    </script>";
	}
 	include 'cdn.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body background="connectwork.png">
    <div class="container login">
    	 	<div class="row">
    	 		<div class="col-lg-4 col-xs-4"></div>
    	    	<div class="col-lg-4 col-xs-4" style="background:rgba(255, 255, 255, 1)";><br>
    	     		<h3 style="font-family: Catamaran";>LOGIN TO UPLOAD:</h3>	
    	     		<form name="login_form" method="post" action="authen.php">
    					<div class="form-group">
    				    	<label for="Mobile">USER ID</label>
    				    	<input type="text" class="form-control" id="Mobile" name="Mobile" aria-describedby="emailHelp" placeholder="Enter user-id">
    					</div>
    					<div class="form-group">
    				    	<label for="Password">Password</label>
    				    	<input type="password" class="form-control" id="Password" name="Password" placeholder="Enter password">
    				    	<small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small><br>
    						
    						<button type="submit" class="btn btn-primary">Submit</button><br><br>
    						<a href="index.php">RETURN</a>
    					</div>
    				</form>
    	    	</div>
    	 	</div>
    	</div>
</body>
</html>