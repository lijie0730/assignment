<?php
	require 'connection.php';
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	$user_id=$_POST['user_id'];
	
	if(isset($_POST['name']) && (isset($_POST['email'])) && (isset($_POST['comment'])))
	{
		$sql="INSERT INTO contact (`name`, `email`, `comment`, `user_id`) VALUES ('$name', '$email', '$comment', '$user_id')";
		mysqli_query($conn, $sql);
		
		header( "refresh:0; url= index.php" );
		echo "<script language='javascript'>";
		echo "alert('Thanks for feedback !')";
		echo"</script>";
	}
?>