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

<?php

	include("connection.php");
	?>
<!-- Register -->
	<div class="mymodal" id="modal">
		<div class="content">
			<div class="form">
				<form action="signup.php" form name="register" onsubmit="return validateForm()" method="POST">
					<h1>Sign Up</h1>
					<h4>First Name:</br></h4>
					<input type="text" placeholder="First name" name="f_name" required pattern="[A-Za-z ]+">
					<h4>Last Name:</br></h4>
					<input type="text" placeholder="Last name" name="l_name" required pattern="[A-Za-z ]+">
					<h4>Username:</br></h4>
					<input type="text" placeholder="Username" name="username" required pattern="[A-Za-z0-9_]+">
					<h4>Email:</br></h4>
					<input type="text" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					<h4>Password:</br></h4>
					<input type="password" placeholder="Password" name="password"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
					<h4>Comfirm password:</br></h4>
					<input type="password" placeholder="Comfirm password" name="c_password" required>
					<h4>Gender:</br></h4>
					<label><input type="radio" name="gender" class="radio" value="male" required/>Male</label>
					<label><input type="radio" name="gender" class="radio" value="male" required/>Female</label>
					
					<button type="submit" name="submit">Create Account</button>
					<p class="register">Already registered ? <a href="login.php" id="linked">Sign In</a></p>
				</form>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		var modal=document.getElementById('mymodal');
		
		//Get button open modal
		var opn=document.getElementById('linked');
		
		//Open when click
		opn.onclick=function()
		{
			modal.style.display="block";
		}
		
		//Click outside modal
		window.onclick=function(event)
		{
			if(event.target == modal)
			{
				modal.style.display="none';
			}
		}
		
		function validateName()
		{
			var first=document.forms["register"]["f_name"].value;
			var last=document.forms["resgiter"]["l_name"].value;
			
			if(first == "" && last == "")
			{
				alert("Please enter your first name and last name !");
				return false;
			}
		}
		
		var pass=document.getElementById("password"), c_pass=document.getElementById("c_password");
		
		function validatePassword()
		{
			if(password.value != c_pass.value)
			{
				c_pass.setCustomValidity("Please enter same password !");
			}
			
			else
			{
				c_pass.setCustomValidity('');
			}
		}
		
		password.onchange=validatePassword;
		c_pass.onkeyup=validatePassword;
	</script>
</body>
</html>