<?php
	session_start();
	require 'connection.php';
	
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
	
		$sql="SELECT * FROM `login` WHERE `username`='$username' && `password`='$password'";
	
		$query=mysqli_query($conn, $sql);
		$row= mysqli_fetch_assoc($query);
		$id= $row['id'];
		$username= $row['username'];
		
		
		if(($row['username'] == $username) && ($row['password'] == $password))
		{
			
			$_SESSION['id'] = $id;
			$_SESSION['username'] = $username;
			
			header( "refresh:0; url= index.php" );
			echo '<script language="javascript">';
			echo 'alert("Log In successful")';
			echo '</script>';
		}
		
		else
		{
			header( "refresh:0; url= login.php" );
			echo '<script language="javascript">';
			echo 'alert("Wrong password or usernsme")';
			echo '</script>';
		}
	}
	
	else
	{
		header( "refresh:0; url= login.php" );
			echo '<script language="javascript">';
			echo 'alert("No log in data")';
			echo '</script>';
	}
?>