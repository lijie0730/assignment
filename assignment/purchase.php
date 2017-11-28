<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	require 'connection.php';
	require 'nav.php';
	$id=$_GET['id'];
	$sql="SELECT image, price, quantity, description FROM `product` WHERE id=$id";
	$query=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($query, MYSQLI_ASSOC);
?>

<head>

  <title>Purchase</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<div class="container=fluid">
		<div class="row">
			<div class="col-sm-3" style="background-color:white; ">	
				<img src="image/<?php echo $row['image']; ?>" width="300" height="300" id="product_image" style="width:150px;height:300px;">
			</div>
			
			<div class="col-sm-9">
				<h2><label>Price : </label><span>RM<?php echo $row['price'];?></span></h2>
				<h2><label>Stock Available : <?php echo $row['quantity'];?></label></h2>
				<h2><label>Description : <?php echo $row['description'];?></label></h2>
				
				<form action="purchase.php" name="buy_book" method="GET"  onSubmit="return confirm('are you sure you want to purchase this item?')" >
					<input type="hidden" name="product_id" value="" >
					<input type="hidden" name="user_id" value="" >
					<button type="submit"class="btn btn-warning">Buy Now</button>
			</div>
		</div>
	</div>
</body>
</html>