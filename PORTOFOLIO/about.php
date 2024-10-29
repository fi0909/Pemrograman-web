<?php include "connector.php"?>
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
	<?php
		$sql = "SELECT * FROM about";
		$result = $conn->query($sql);
		
		// Memeriksa apakah ada data yang ditemukan
		if ($result->num_rows > 0) {
			// Menampilkan data dari tabel
			while ($row = $result->fetch_assoc()) {
				echo '<div id="colorlib-page">';
				include "logo.php";
				echo '
				<div id="colorlib-about">
					<div class="container">
						<div class="row text-center">
							<h2 class="bold">About</h2>
						</div>
						<div class="row row-padded-bottom">
							<div class="col-md-5 animate-box">
								<img class="img-responsive about-img" src= "'. $row["gambar"] .'" alt="Gambar Profil">
							</div>
							<div class="col-md-6 col-md-push-1 animate-box">
								<div class="about-desc">
									<h2><span>' . $row["nama_depan"] . '</span> <span>' . $row["nama_belakang"] . '</span></h2>
									<div class="desc">
										<div class="rotate">
											<h2 class="heading">About</h2>
										</div>
										<p>' . $row["deskripsi"] . '</p>
										<p class="colorlib-social-icons">
											<a href="' . $row["github_link"] . '"><i class="icon-github2"></i></a>
											<a href="' . $row["instagram_link"] . '"><i class="icon-instagram2"></i></a>
											<a href="' . $row["youtube_link"] . '"><i class="icon-youtube"></i></a>
										</p>
										<p><a href="work.php" class="btn btn-primary btn-outline">View My Works</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';
			}
		}
	?>
		<?php include 'quotes.php'?>

		<?php include 'footer.php'?>
	
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

