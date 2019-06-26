<?php 
	include 'core/core.inc.php';
	if (!isset($_SESSION['user_id'])) { header("Location: login.php"); }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="keyword" content="tata sponge, carpool, car, car application"/>
	<meta name="description" property="og:description" content="Book yor car instantly with TATA steel carpool network."/>
	<meta name="abstract" content="Car pool network of TATA sponge limited"/>
	<meta name="copyright"content="TATA Sponge Ltd.">
	<meta name="language" content="en">
	<meta name="robots" content="index, follow">

	<meta name="og:url" property="og:url" content="<?php echo $_SERVER['HTTP_HOST']; ?>"/>
	<meta name="og:title" property="og:title" content="TATA Sponge Limited :: Dashboard"/>
	<meta property="og:site_name" content="Car pool network">

	<link rel="shortcut icon" href="favicon.ico" />

	<meta name="og:image" property="og:image" content="[poster-url]">
	<meta property="og:image:type" content="image/jpg">
	<meta property="og:image:width" content="128">
	<meta property="og:image:height" content="128">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/dashboard.css">

</head>
<body>
	<?php
		require "core/top_nav.php";
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-3 side_nev">
				<?php
					$active = "none";
					require "core/side_nav.php";
				?>
			</div>
			<div class="col-md-9">
				<br><br><br><br>
				<div class="row justify-content-center">
					<div class="col-lg-3">
						<div class="card poolcard">
							<img class="card-img-top" src="images/car.png" alt="Card image cap">
							<div class="card-body">
								<center><h5 class="card-title">50 car pools</h5></center>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card poolcard">
							<img class="card-img-top" src="images/distance.png" alt="Card image cap">
							<div class="card-body">
								<center><h5 class="card-title">5000 Km </h5></center>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card poolcard">
							<img class="card-img-top" src="images/pin.png" alt="Card image cap">
							<div class="card-body">
								<center><h5 class="card-title">5 location</h5></center>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<div>
					<center><?php include "calender.php" ?></center>
				</div>
			</div>
		</div>
	</div>

</body>
</html>