<?php require('functions.php');?>
<!DOCTYPE html>
<html lang="el">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
	<meta property="og:image" content="img/logo.png">
 	<meta property="og:url" content="http://giorgosiakovou.epizy.com/">	
	<title><?php echo title; ?></title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-targert="#navbarResponsive">

<!--Start Home Section-->
<div id="home">
<!--Navigation-->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
	<a class="navbar-brand" href="https://giorgosiakovou.000webhostapp.com/"><img src="img/logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a href="?language=en">English|</a>
	<a href="?language=gr">Ελληνικά</a>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">				
			<li class="nav-item">
				<a class="nav-link" href="#home"><?php echo central; ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#biography"><?php echo biography; ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#discography"><?php echo discography; ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#images"><?php echo images; ?></a>
			</li>			
			<li class="nav-item">
				<a class="nav-link" href="#contact"><?php echo contact2; ?></a>
			</li>
		</ul>
	</div>
</nav>

<!---Start Image Slider-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-inerval="7000">
	<ol class="carousel-indicators">
		<li data-targert="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-targert="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-targert="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-caption text-center">
			<h1><?php echo header; ?></h1>
			<h3><?php echo header2; ?></h3>
			<a class="btn btn-outline-light btn-lg" href="https://www.facebook.com/Giorgos-Iakovou-music-page-2252517671446649"><?php echo facebook; ?></a>
		</div>
		<!---Slide 1-->
		<div class="carousel-item active" style="background-image: url(img/YOUTUBE.jpg);"></div>
		<!---Slide 2 -->
		<div class="carousel-item" style="background-image: url(img/portfolio/gio2.jpg);"></div>
		<!---Slide 3 -->
		<div class="carousel-item" style="background-image: url(img/portfolio/gio1.jpg);"></div>
	</div> <!--- End of Carousel Inner -->
	<!---Previous and Next Buttons-->
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="
	button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	</a>	
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="
		button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
	</a>
</div>
<!---End of Image Slider-->
<center>
  <iframe width="360" height="315" src="https://www.youtube-nocookie.com/embed/6tb1QbGx0KY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center>
</div>
<!--End Home Section-->


<!--Start Biography Section-->
<div id="biography" class="offset">
	<div class="col-12 text-center">
		<h3 class="heading"><?php echo biography; ?></h3>
		<div class="heading-underline"></div>
	</div> 	
<div class="row justify-content-center">
	<div class="col-xl-4">
		<div class="portfolio">		
			<img class="card-img-top" src="img/g1.jpg">			
				<h3><?php echo title; ?></h3>
				<p><?php echo bio;?></p>
			</div>					
	</div>
</div>
<!--End of Start Biography Section-->



<!--- Start Discography Section -->
<div id="discography" class="offset">
<div class="col-12 narrow text-center">
	<h3 class="heading"><?php echo discography; ?></h3>
	<div class="heading-underline"></div>
	<img class="card-img-top" src="img/YOUTUBE.jpg">
	<img class="card-img-top" src="img/album.jpg">
</div>
</div>
<!--- End Discography Section -->

<!--Start images Section-->
<div id="images" class="offset">

	<div class="jumbotron container-fluid">
		<div class="col-12 text-center">		
		<h3 class="heading"><?php echo images; ?></h3>
		<div class="heading-underline"></div>
		</div>
	</div>	
		<div class="row no-padding">
			<div class="col-sm-4">
				<div class="portfolio">					
						<img src="img/portfolio/gio1.jpg" >					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="portfolio">					
						<img src="img/portfolio/gio3.jpg" >					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="portfolio">					
						<img src="img/portfolio/gio4.jpg" >					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="portfolio">					
						<img src="img/portfolio/gio2.jpg">					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="portfolio">					
						<img src="img/52013948_2281861662138614_4269154740119535616_o.jpg" >					
				</div>
			</div>
			<div class="col-sm-4">
				<div class="portfolio">					
						<img src="img/night2.jpg" >					
				</div>
			</div>

			<div class="narrow text-center">
				<div class="col-12">					
					<a class="btn btn-secondary btn-md" href="https://www.youtube.com/user/vitaliwths" target="_blank"><?php echo youtube; ?></a>
				</div>
			</div>

		</div> <!---End Row-->
	</div> <!---End of Jumbotron-->

</div>
<!--End images Section-->
	
<!--Start Contact Section-->
<div id="contact" class="offset">
	<footer>
		<div class="row justify-content-center">
		<div class="col-md-5 text-center">
		<h3 class="heading"><?php echo contact2; ?></h3>
		<div class="heading-underline"></div>
			<img src="img/logo.png">	<hr>		
				 <strong><?php echo contactinfo; ?>:</strong><hr>
				 <i class="fas fa-at"></i></i>giorgosiakovoumusic@yahoo.com</p>
				 <a href="https://open.spotify.com/artist/4F9GKXXOcEFQ99zDvuV62n?fbclid=IwAR2mWdvDQtcp8KyJo_bKY52Hslc9VFWTHyYdWYvz3TuPAmpknHkmKTu0lsw" target="_blank"><i class="fab fa-spotify"></i></a>
				 <a href="https://www.facebook.com/Giorgos-Iakovou-music-page-2252517671446649" target="_blank"><i class="fab fa-facebook-square"></i></a>
				 <a href="https://www.youtube.com/user/vitaliwths" target="_blank"><i class="fab fa-youtube"></i></a>
				 <a href="https://www.instagram.com/yiorgosjacob" target="_blank"><i class="fab fa-instagram"></i></a>
				 <div class="form">
			<form method="post" action="send-email.php">
				<label for="firstName">First Name:</label>
				<input class="firstName" type="text" id="firstName" name="firstName" required>
				<br>
			
				<label for="email">Email Address:</label>
				<input class="email" type="email" id="email" name="email" required>
				<br>
			
				<label for="message">Message:</label>
				<textarea class="message" id="message" name="message" required></textarea>
				<br>
			
				<input class="send" type="submit" value="Send">
			</form>
			</div>
		</div>	      

			<hr class="socket text">
		&copy; <a href="https://www.instagram.com/konstantinosiakovou/"><?php echo webdesign; ?></a>
	</div>
	
	</footer>
</div>
<!--End Contact Section-->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>