

<head>

  <title>Navigate bar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="slide.css">
  <link rel="stylesheet" type="text/css" href="product.css">
</head>

<body>

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
			<li><a href="index.php">ABOUT</a></li>
			<li><a href="index.php">WINE</a></li>
			<li><a href="index.php">BEER</a></li>
			<li><a href="index.php">LIQUOR</a></li>
			<li><a href="index.php">CONTACT</a></li>
			
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
	
	</body>