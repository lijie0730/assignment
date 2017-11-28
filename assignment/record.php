<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=uft-8"/>
	<title>First PHP Script</title>
</head>
<body>
	<?php
		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		
		$name=$f_name . ' ' . $l_name;
		
		//Check password
		if($_POST['password'] != $_POST['c_password'])
		{
			$okay=false;
		}
		
		
		//Print result
		print "<div>Login successful !</div>";
	?>
</body>
</html>