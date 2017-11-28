<?php
	include("connection.php");
	$error="";
	
	
	
	
	if(isset($_POST['f_name']) && ($_POST['l_name']) && ($_POST['username']) && ($_POST['email']) && ($_POST['password']) && ($_POST['c_password']) && ($_POST['gender']))
	{
		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$c_password=$_POST['c_password'];
		$gender=$_POST['gender'];		
	
		$insertQuery="INSERT INTO login(f_name, l_name, email, username, password) VALUES ('$f_name', '$l_name', '$email', '$username', '$password')";
		if(mysqli_query($conn, $insertQuery))
		{
			header( "refresh:0; url= login.php" );
			echo '<script language="javascript">';
			echo 'alert("Register successful")';
			echo '</script>';
		}
		
		else
		{
			$error="Error !";
		}
	}
?>