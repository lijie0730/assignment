<?php session_start();

	$id = $_GET['id'];
	require "connection.php";	
	$sql = "SELECT * FROM `product` WHERE `id`='$id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$image = $row['image'];
	$price = $row['price'];
	$product = $row['product'];
	$quantity = $row['quantity'];
	$description = $row['description'];
	if(isset($_SESSION['id']))
	{
		$user_id = $_SESSION['id'];
	}
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Buy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="">
</head>

<body>
	<?php include "nav.php";?>
	
	<br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3" style="background-color:white;">	
	<img onerror="this.src = 'src/image/No_available_image.jpg'" src="image/<?php echo $image; ?>" width="300" height="300" id="product_image" style="width:150px;height:300px;">
	</div>
    <div class="col-sm-9">	
	<h1><?php echo $product; ?></h1>
	
	<h2><label>Price : </label><span>RM <?php echo $price; ?></span></h2>
	<h2><label>Stock Available : </label><span><?php echo $quantity; ?></span></h2>
	<h2><label>Description : </label><span><?php echo $description; ?></span></h2>
	
	<form action="order.php" name="buy_book" method="GET"  onSubmit="return confirm('are you sure you want to purchase this item?')" >
	
	<input type="hidden" name="product_id" value="<?php echo $id ?>" >
	<input type="hidden" name="user_id" value="<?php echo $user_id ?>" >
	<?php if (isset($user_id)):?>
				<button type="submit"class="btn btn-warning">Buy Now</button>
				<?php else:?>
	Please login to purchase the item
	<?php endif; ?>	
	</form>	
	</div>
  </div>
</div>


</body>
</html>