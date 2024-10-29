<?php include 'connector.php'?>
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
		<div id="colorlib-work">
			<div class="container">
				<div class="row text-center">
					<h2 class="bold">Project</h2>
				</div>
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
						<span>Project</span>
						<h2>Done Projects</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="rotate">
							<h2 class="heading">Project</h2>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				$sql = "SELECT title, description, image_url FROM projects";
				$result = $conn->query($sql);

				// Menampilkan setiap proyek dalam bentuk div work-entry
				if ($result->num_rows > 0) {
				    while ($row = $result->fetch_assoc()) {
				        echo '<div class="col-md-12">';
				        echo '    <div class="work-entry animate- box">';
				        echo '        <a class="work-img" style="background-image: url(' . htmlspecialchars($row["image_url"]) . ');">';
				        echo '            <div class="display-t">';
				        echo '                <div class="work-name">';
				        echo '                    <h2>' . htmlspecialchars($row["title"]) . '</h2>';
				        echo '                </div>';
				        echo '            </div>';
				        echo '        </a>';
				        echo '        <div class="col-md-4 col-md-offset-4">';
				        echo '            <div class="desc">';
				        echo '                <p>' . htmlspecialchars($row["description"]) . '</p>';
				        echo '            </div>';
				        echo '        </div>';
				        echo '    </div>';
				        echo '</div>';
				    }
				} else {
				    echo "<p>No projects found</p>";
				}

				$conn->close();
				?>
				</div>
			</div>
		</div>

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

