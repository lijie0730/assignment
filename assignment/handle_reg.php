<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=uft-8"/>
	<title>First PHP Script</title>
</head>
<body>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


$name = $firstname . '	' .$lastname;


//Check the two passwords for equality:
	if($_POST['password']!=$_POST['confirm']){
	
		$okay= FALSE;
	}


//Print out the results:

print "<div>Successful!</div>";

?>

</body>
</html>