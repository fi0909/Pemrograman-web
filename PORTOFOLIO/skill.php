<?php include 'connector.php' ?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fi_portofolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<?php include 'navbar.php'?>
		<?php include 'logo.php'?>
		
		<div id="colorlib-page">
			<div id="colorlib-services">
				<?php include 'navbar.php'?>
				<div class="container">
			<div class="row text-center">
				<h2 class="bold">Skills</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="services-flex">
						<div class="one-third">
							<div class="row">
								<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
									<span>My Skills</span>
									<h2>Here Are Some of My Skills</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="rotate">
										<h2 class="heading">Skills</h2>
									</div>
								</div>
								
								<?php
									$sql = "SELECT * FROM skills";
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()) {
											$category = $row["category"];
											$subskills = explode(", ", $row["subskills"]);
											$percentage = $row["percentage"];
								?>
								
								<div class="col-md-6">
									<div class="services animate-box">
										<h3><?php echo $category; ?></h3>
										<ul>
											<?php foreach($subskills as $subskill) { ?>
												<li><?php echo $subskill; ?></li>
											<?php } ?>
										</ul>
									</div>
								</div>
								
								<?php
										}
									}
								?>

							</div>
						</div>
						<div class="one-forth services-img" style="background-image: url(images/skill.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-progress" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
		<div class="container" style="display: flex; flex-direction: column; align-items: center;">
			<div class="row text-center" style="text-align: center; width: 100%;">
				<h2 class="bold" style="text-align: center; width: 100%;">Skills</h2>
			</div>
			<div class="row" style="display: flex; justify-content: center; width: 100%;">
				<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading" style="text-align: center;">
					<span>Skills</span>
					<h2>My Skills</h2>
				</div>
			</div>
			<div class="row" style="display: flex; justify-content: center; width: 100%;">
				
				<?php
					// Reset hasil query untuk menampilkan progress bar
					$result->data_seek(0);
					
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$category = $row["category"];
							$percentage = $row["percentage"];
				?>
				
				<div class="col-md-3 col-sm-6 text-center" style="display: flex; flex-direction: column; align-items: center;">
					<h2 class="progress-head"><?php echo $category; ?></h2>
					<div class="progress blue">
						<span class="progress-left">
							<span class="progress-bar"></span>
						</span>
						<span class="progress-right">
							<span class="progress-bar"></span>
						</span>
						<div class="progress-value"><?php echo $percentage; ?>%</div>
					</div>
				</div>
				
				<?php
						}
					}
					$conn->close();
				?>
				
			</div>
		</div>
	</div>

	<?php include 'quotes.php'; ?>
	<?php include 'footer.php'; ?>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/main.js"></script>

</body>
</html>

