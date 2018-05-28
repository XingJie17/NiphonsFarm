<!DOCTYPE html>
<html>
<head>
	<title>Banana</title>
	<meta charset="utf-8">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Oen+Sans:400,600" rel="stylesheet" type="text/css">
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Pacifico|Playfair+Display:400,700,900|Roboto+Condensed:300,700" rel="stylesheet">
</head>
<body>
	
	<?php
	require_once("customer.php");
	require_once("products_price.php");
	$name = $email = $contact_number = $address = $country = $locality = ""; 
	$amount_order = $total_price = 0;
	$nameErr = $emailErr = $contact_numberErr = $addressErr = $countryErr = $localityErr = "";	
	$amount_orderErr = "";
	$banana_price = $banana;

	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["name"])){
			$nameErr = "*Name is required<br>";
		} else{
			$name = (test_input($_POST["name"]));
		}
		if(empty($_POST["email"])){
			$emailErr = "*Email is required<br>";
		} else{
			$email = $_POST["email"];
		}
		if(empty($_POST["contact_number"])){
			$contac_numbertErr = "*Contact number is required.<br>";
		} else{
			$contact_number = (test_input($_POST["contact_number"]));
		}
		if(empty($_POST["amount_order"])){
			$amount_orderErr = "*Amount is required.<br>";
		} else{
			$amount_order = (test_input($_POST["amount_order"]));
		}
		if(empty($_POST["address"])){
			$addressErr = "Address is required.<br>";
		} else{
			$address = (test_input($_POST["address"]));
		}
		if(empty($_POST["country"]) && strcmp($locality,"international")==0){
			$countryErr = "Country is required.<br>";
		} else{
				$country = $_POST["country"];
		}
	}						
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

	<div class="text-center">
		<h1>Banana</h1>
		<img src="../img/banana image/banana-collage.jpg" width="100%">
		<div id="local">
			<div class="col-md-6" >
				<div class="jumbotron" id="pad">
					<h2>Local</h2>
					<form action= "<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
						<div id="detail">
							<ul>
								<li>Name: <input type="text" name="name" size ="25" value=""></li>
								<span class="error"><?php echo $nameErr;?></span>
								<li>E-mail: <input type="text" name="email" size="30" placeholder="abc@gmail.com"></li>
								<span class="error"><?php echo $emailErr;?></span>
								<li>Contact Number: <input type="text" name="contact_number" size ="20" placeholder="+111111111111"></li>
								<span class="error"><?php echo $contact_numberErr;?></span>
								<li>Minimum order: 50 kg (<?php echo $banana_price*50;?> baht)</li>
								<li>Amount: <input type="text" name="amount_order" size="15" value=""> kilogram</li>
								<span class="error"><?php echo $amount_orderErr;?></span>
								<li>Address: <textarea name = "address" rows="4" cols="30" value="Multimedia University Jalan Multimedia, 63000 Cyberjaya, Selangor, Malaysia"></textarea></li>
								<span class="error"><?php echo $addressErr;?></span>
							</ul>
						</div>
					<input type="submit" id="p_btn" name="Purchase_local" value="Purchase"><br>
					<?php
						if(array_key_exists("Purchase_local", $_POST)){
							$total_price = $banana_price * $amount_order;
							$banana_customer = new customer();
							$banana_customer->name = $name;
							$banana_customer->email = $email;
							$banana_customer->contact_number = $contact_number;
							$banana_customer->product = "banana";
							$banana_customer->amount_order = $amount_order;
							$banana_customer->address = $address;
							$banana_customer->total_price = $total_price;
							$banana_customer->country = "Thailand";
							$banana_customer->locality = "Local";
							$banana_customer->display_info();
						}
					?>
					</form>	
				</div>				
				
			</div>
		</div>
		<div id="international">
			<div class="col-md-6" >
				<div class="jumbotron" id="pad">
					<h2>International</h2>
					<form action= "<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
						<div id="detail">
							<ul>
								<li>Name: <input type="text" name="name" size ="25" value=""></li>
								<span class="error"><?php echo $nameErr?></span>
								<li>E-mail: <input type="text" name="email" size="30" placeholder="abc@gmail.com"></li>
								<span class="error"><?php echo $emailErr?></span>
								<li>Contact Number: <input type="text" name="contact_number" size ="20" placeholder="+111111111111"></li>
								<span class="error"><?php echo $contact_numberErr?></span>
								<li>Minimum order: 1 ton (<?php echo $banana_price*1000;?> baht)</li>
								<li>Amount: <input type="text" name="amount_order" size="15" value=""> ton</li>
								<span class="error"><?php echo $amount_orderErr?></span>
								<li>Country: <input type="text" name="country" size ="25" value=""></li>
								<span class="error"><?php echo $countryErr?></span>
								<li>Address: <textarea name = "address" rows="4" cols="30" value="Multimedia University Jalan Multimedia, 63000 Cyberjaya, Selangor, Malaysia"></textarea></li>
								<span class="error"><?php echo $addressErr?></span>
							</ul>
						</div>
					<input type="submit" id="p_btn" name="Purchase_internationl" value="Purchase"><br>
					<?php 
						$locality = "international";
						if(array_key_exists("Purchase_internationl", $_POST)){
							$total_price = $banana_price * $amount_order * 1000;
							$banana_customer = new customer();
							$banana_customer->name = $name;
							$banana_customer->email = $email;
							$banana_customer->contact_number = $contact_number;
							$banana_customer->product = "banana";
							$banana_customer->amount_order = $amount_order;
							$banana_customer->address = $address;
							$banana_customer->total_price = $total_price;
							$banana_customer->country = $country;
							$banana_customer->locality = $locality;
							$banana_customer->display_info();
						}
					?>
					</form>
					<?php
						
					?>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>