<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=uft-8"/>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<!-- Login -->
	<div class="login">
		<form class="form" action="user_login.php" method="POST">
			<h1>Login</h1>
			<h4>Username:</br></h4>
			<input type="text" placeholder="username" name="username"/>
			<h4>Password:</br></h4>
			<input type="password" placeholder="password" name="password"/>
			
			<button type="submit" name="submit">Login</button>
			<p class="register">Not registered ? <a href="register.php" id="linked">Create account</a></p>
		</form>
	</div>
</body>
</html>