<?php 

require "connection.php";

$id = $_GET['id'];
$product_id = $_GET['product_id'];

$sql = "DELETE FROM record WHERE `id`='$id'";

if (mysqli_query($conn,$sql)) 
{
	$sql2 = "SELECT quantity FROM product WHERE id=$product_id";
	$query = mysqli_query($conn, $sql2);
	
	$row = mysqli_fetch_assoc($query);
	$quantity = $row['quantity'];
	$quantity = $quantity + 1;
	
	$sql3 = "UPDATE product SET quantity = $quantity WHERE id = $product_id";
	mysqli_query($conn, $sql3);
		header( "refresh:0; url= c_order.php" );	
		echo '<script language="javascript">';
		echo 'alert("Delete Successful")';
		echo '</script>';
			
}
else
{
		header( "refresh:0; url= c_order.php" );
		echo '<script language="javascript">';
		echo 'alert("Delete Failed,please try again")';			
		echo '</script>';
}

?>