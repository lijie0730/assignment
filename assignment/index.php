
<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	require 'connection.php'
?>

<head>

  <title>Drinks Company</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="slide.css">
  <link rel="stylesheet" type="text/css" href="product.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--Navigate Bar-->
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="#myPage">DRINKS COMPANY</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#wine">WINE</a></li>
			<li><a href="#beer">BEER</a></li>
			<li><a href="#liquor">LIQUOR</a></li>
			<li><a href="#contact">CONTACT</a></li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<?php if(isset($_SESSION['username'])):
					echo $_SESSION['username'];
				?>
				<?php else:
					echo "ACCOUNT";
				?>
				<?php endif; ?>
				<span class="caret"></span></a>
				<ul style="background-color:blue" class="dropdown-menu">
					<?php if(!isset($_SESSION['id'])): ?>
				<li><a href="register.php">REGISTER</a></li>
				<li><a href="login.php">LOG IN</a></li>
					<?php else: ?>
				<li><a href="logout.php">LOG OUT</a></li>
					<?php endif; ?>
				</ul>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>

<!--Slideshow Container-->
	<div id="about" class="slideshow-container-fluid">
		<div class="mySlides">
		  <div class="numbertext">1 / 3</div>
		  <img src="image/bg1.jpg" style="width:100%;height:auto;">
		</div>

		<div class="mySlides">
		  <div class="numbertext">2 / 3</div>
		  <img src="image/bg2.png" style="width:100%;height:auto">
		</div>

		<div class="mySlides">
		  <div class="numbertext">3 / 3</div>
		  <img src="image/bg3.jpg" style="width:100%;height:auto;">
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
<br>
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>

<!-- Container (Wine Section) -->
	<div id="wine" class="container-fluid text-center">
		<h2>WINE</h2>
		<br>
	  
		<section class="products">
			<?php
				$sql="select * from `product` where `category`='wine'";
				$query=mysqli_query($conn, $sql);
			?>
					
			<?php while($row=mysqli_fetch_array($query, MYSQLI_ASSOC)){?>
				<div class="product-card" >
					<div class="product-image hovereffect"  style="height:auto;width:auto">
						<?php 
							$id = $row['id'];
						?>			
						<img class="img-thumbnail" onerror="this.src = 'src/image/No_available_image.jpg'" src="image/<?php echo $row['image']; ?>">	
					</div>
					
					<div class="product-info" style="width: 200px;">
						<h4 class="product-name"><?php echo $row['product'];?></h4>	  
						<h5 style="font-size:18px">
							RM<?php echo $row['price'];?>
						</h5>
						<a href="buy.php?id=<?php echo $id?>" class="btn btn-info" role="button">BUY</a>
					</div>
				</div>		 
			<?php } ?>
		</section>
	</div>

<!-- Container (Beer Section) -->
	<div id="beer" class="container-fluid text-center bg-grey">
		<h2>Beer</h2>
		<br>
	  
		<section class="products">
			<?php
				$sql="select * from `product` where `category`='beer'";
				$query=mysqli_query($conn, $sql);
			?>
					
			<?php while($row=mysqli_fetch_array($query, MYSQLI_ASSOC)){?>
				<div class="product-card" >
					<div class="product-image hovereffect"  style="height:auto;width:auto">
						<?php 
							$id = $row['id'];
						?>			
						<img class="img-thumbnail" onerror="this.src = 'src/image/No_available_image.jpg'" src="image/<?php echo $row['image']; ?>">	
					</div>
					
					<div class="product-info" style="width: 200px;">
						<h4 class="product-name"><?php echo $row['product'];?></h4>	  
						<h5 style="font-size:18px">
							RM<?php echo $row['price'];?>
						</h5>
						<a href="buy.php?id=<?php echo $id?>" class="btn btn-info" role="button">BUY</a>
					</div>
				</div>		 
			<?php } ?>
		</section>
	</div>

<!-- Container (Liquor Section) -->
	<div id="liquor" class="container-fluid text-center">
		<h2>Liquor</h2>
		<br>
	  
		<section class="products">
			<?php
				$sql="select * from `product` where `category`='liquor'";
				$query=mysqli_query($conn, $sql);
			?>
					
			<?php while($row=mysqli_fetch_array($query, MYSQLI_ASSOC)){?>
				<div class="product-card" >
					<div class="product-image hovereffect"  style="height:auto;width:auto">
						<?php 
							$id = $row['id'];
						?>			
						<img class="img-thumbnail" onerror="this.src = 'src/image/No_available_image.jpg'" src="image/<?php echo $row['image']; ?>">	
					</div>
					
					<div class="product-info" style="width: 200px;">
						<h4 class="product-name"><?php echo $row['product'];?></h4>	  
						<h5 style="font-size:18px">
							RM<?php echo $row['price'];?>
						</h5>
						<a href="buy.php?id=<?php echo $id?>" class="btn btn-info" role="button">BUY</a>
					</div>
				</div>		 
			<?php } ?>
		</section>
	</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
	<form action="comment.php" method="POST">
		<h2 class="text-center">CONTACT US</h2>
		<div class="row">
			<div class="col-sm-5">
				<p>Contact us and we'll get back to you within 24 hours.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span>Penang, Malaysia</p>
				<p><span class="glyphicon glyphicon-home"></span> 61, Lebuh Bukit Minyak, Taman Bukit Minyak, 14000 Bukit Mertajam</p>
				<p><span class="glyphicon glyphicon-print"></span> +604 508 2749</p>
				<p><span class="glyphicon glyphicon-phone"></span> +6017 449 5201</p>
				<p><span class="glyphicon glyphicon-envelope"></span> drinscompany@outlook.com</p>
			</div>
			<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<input type="hidden" name="user_id" value="<?php echo $_SESSION['id']?>"/>
						<button class="btn btn-default pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
  </form>
</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
