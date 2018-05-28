<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Niphon's Farm</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Oen+Sans:400,600" rel="stylesheet" type="text/css">
	<link href="../css/style.css" rel="stylesheet">
	<script type="text/javascript" src="../js/script"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato|Pacifico|Playfair+Display:400,700,900|Roboto+Condensed:300,700" rel="stylesheet">
</head>
<body>
	<?php 
		require("products_price.php");
	?>
	<header>
		<div id="tab">
			<div class="text-center">
				<h6>Welcome to Niphon Farm</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<img src="..\img\niphonfarmlogo.jpg" style="width: 140px; height: 140px" class="img-responsive center-block">
				<div class="col-md-4">
			</div> 
		</div>
	</header>
	<div class="jumbotron" id="first">
		<div class="container">
			<div class="row text-center">
				<h1>Fresh From Farm</h1>
	  			<h4>100% organic goods from our farm serve right to your door<br>We use a very special fertilizer, researched and developed by a professor from a famous University in Thailand.<br>Typical fertizliers give plant only 3 nutrients.<br>Our fertilizer gives <b>16 nutrients!</b></h4>
	  			<h6><a class="btn btn-success btn-lg" href="https://9gag.com/" target="_blank" role="button">Learn more</a></h6>
			</div>
		</div>
	</div>
	<section class="container text-center">
		<h2>Featured Products</h2>
		<hr>
		<div class="firstRow">
			<div class="row">
				<div class="col-sm-4  center-block">
					<div class="jumbotron" id="products">
						<h4>Coconut</h4>
						<img src="../img/coconuts-with-leaves.jpg">
						<h6><a class="btn btn-success btn-lg" id="p_btn" href="coconut_page.html" target="_blank" role="button">40 baht/coconut</a></h6>
					</div>
				</div>
				<div class="col-sm-4  center-block ">
					<div class="jumbotron" id="products">
						<h4>Banana</h4>
						<img src="../img/banana-3.jpg">
						<h6><a class="btn btn-success btn-lg" id="p_btn" href="banana_page.php" target="_blank" role="button"><?php echo $banana;?> baht/kg</a></h6>		
					</div>
				</div>
				<div class="col-sm-4  center-block">
					<div class="jumbotron" id="products">
						<h4>Thai pumpkin</h4>
						<img src="../img/pumpkin.jpg" id="pumpkin" style="padding-top: 55px">
						<h6><a class="btn btn-success btn-lg" id="p_btn" href="pumpkin_page.html" target="_blank" role="button">30 baht/kg</a></h6>
					</div>
				</div>
			</div>
		</div>
		<div class="secondRow">
			<div class="row">
				<div class="col-sm-4  center-block">
					<div class="jumbotron" id="products">
						<h4>Lemongrass</h4>
						<img src="../img/lemon grass.jpg" style="padding-top: 40px">
						<h6><a class="btn btn-success btn-lg" id="p_btn" href="lemongrass_page.html" target="_blank" role="button">50 baht/kg</a></h6>
					</div>
				</div>
				<div class="col-sm-4  center-block">
					<div class="jumbotron" id="products">
						<h4>Eggs</h4>
						<img src="../img/silo-brown-egg.jpg">
						<h6><a class="btn btn-success btn-lg" id="p_btn" href="egg_page.html" target="_blank" role="button">130 baht/pack</a></h6>
					</div>
				</div>
				<div class="col-sm-4 center-block">
					<div class="jumbotron" id="products">
						<h4>Sugar apple</h4>
						<img src="../img/Sugar apple.jpg">
						<h6><a class="btn btn-success btn-lg" id="p_btn" href="sugarapple_page.html" target="_blank" role="button">50 baht/kg</a></h6>
					</div>
				</div>
			</div>				
		</div>
	</section>
	<!--map-->
	<section class="text-center">
		<h2>Location</h2>
		<h6>Tambon Ang Thong, Amphoe Mueang Kamphaeng Phet, Chang Wat Kamphaeng Phet 62000, Thailand</h6>
		<div id="map"></div>
		<script>
			function initMap() {
	        var uluru = {lat: 16.251664, lng: 99.447155};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 5,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
	      }
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT3-I5rl3Yftkir1a6OAlrXjzOCctvkKg&callback=initMap">
	    </script>
	</section>

	<footer>
		<h3 class="text-center">About Us</h3>
		<div id="dad">
			<div class="col-sm-6">
				<img src="../img/businessman.png">
					<div class="text">
						<p>Name: Niphon Chaemchoy</p>
						<p>Position: Farm owner</p>
						<p>Contact: +60 95-204-2563</p>
						<p>Email address: niphon.c@gmail.com</p>
				</div>
			</div>
		</div>
		<div id="mom">
			<div class="col-sm-6">
				<img src="../img/businesswoman2.png">
				<div class="text">
					<p>Name: Wasana Chaemchoy</p>
					<p>Position: Farm owner's wife</p>
					<p>Contact: +60 89-597-9049</p>
					<p>Email address: wasana.c@gmail.com</p>
				</div>				
			</div>
		</div>				
	</footerhtml>