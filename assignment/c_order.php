<?php session_start();

require "connection.php";	
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id']; 
}

$sql="SELECT * FROM record WHERE user_id=$id";
$result=mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comfirm Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<?php include "nav.php";?>	
<br/><br/>
<div class="container">
  <h2>Purchase Status</h2>
   <h4><i>Order</i></h4>
  <table class="table">
    <thead>
      <tr>
	   <th>ID</th>
		<th>User ID</th>
        <th>Product Name</th>
		<th>Price(RM)</th>
      </tr>
    </thead>
    <tbody>
	
	<?php while ($row = mysqli_fetch_assoc($result)){   ?>
      <tr>
		<?php 
		$product_id = $row['product_id'];
		$customer_order_id = $row['id'];	
		?>
	   <td><?php echo $row['id']?></td>
	   <td><?php echo $row['user_id']?></td>
		<td><?php echo $row['product']?></td>
        <td><?php echo $row['price']?></td>
		<td><a href="delete.php?id=<?php echo $row['id'] ?> && product_id=<?php echo $product_id ?>" type="button"class="btn btn-warning">Delete</a></td>
		</tr>
	   <?php }?>
    </tbody>
  </table>
  
  <form action="index.php" name="buy_book" method="GET"  onSubmit="return confirm('Your order is processing ! Thanks for your order !')" >
		<button type="submit"class="btn btn-warning">Ok</button>
	</form>	
 
</div>
</body>
</html>
