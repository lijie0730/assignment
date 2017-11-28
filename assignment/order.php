<?php

require "connection.php";	

$product_id = $_GET['product_id'];
$user_id = $_GET['user_id'];

$sql_product = "SELECT * FROM `product` WHERE `id` = $product_id";
$sql_product_result = mysqli_query($conn,$sql_product);

$row = mysqli_fetch_array($sql_product_result,MYSQLI_ASSOC);

$current_unit = $row['quantity'];
$product = $row['product'];
$price = $row['price'];
$current_unit = $current_unit-1;


$sql_product_after_buy = "UPDATE `product` SET `quantity` = $current_unit WHERE `id`=$product_id";

mysqli_query($conn, $sql_product_after_buy);

$sql = "INSERT INTO record (`product_id`, `user_id`, `product`, `price`) VALUES ('$product_id', '$user_id', '$product','$price')";

if (mysqli_query($conn, $sql)) {
	
	echo '<script language="javascript">';
	echo 'console.log("New record created successfully")';
	echo '</script>';
	header( "refresh:0; url= c_order.php" );
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>