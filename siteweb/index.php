<?php
        session_start();
        include_once("connect.php");
?>


<!doctype html>
<html lang="en">

<head>

	<!--====== Required meta tags ======-->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--====== Title ======-->
	<title>Blog</title>

	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!--====== Line Icons css ======-->
	<link rel="stylesheet" href="assets/css/LineIcons.css">

	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">

	<!--====== Default css ======-->
	<link rel="stylesheet" href="assets/css/default.css">

	<!--====== Style css ======-->
	<link rel="stylesheet" href="assets/css/style.css">


</head>

<body>


	<!--====== PRELOADER PART START ======-->

	<div class="preloader">
		<div class="loader_34">
			<div class="ytp-spinner">
				<div class="ytp-spinner-container">
					<div class="ytp-spinner-rotator">
						<div class="ytp-spinner-left">
							<div class="ytp-spinner-circle"></div>
						</div>
						<div class="ytp-spinner-right">
							<div class="ytp-spinner-circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== PRELOADER ENDS START ======-->

	<!--====== HEADER PART START ======-->

	<header id="home" class="header-area">
		<div class="navigation fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="index.html">
								<H4>BLOG</H4>
							</a> <!-- Logo -->
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
								<span class="toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
									<li class="nav-item"><a class="page-scroll" href="login.php">Login</a></li>
									<li class="nav-item"><a class="page-scroll" href="admin/post.php">Add Post</a></li>

								</ul>
							</div> <!-- navbar collapse -->
						</nav> <!-- navbar -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- navigation -->



		</div> <!-- container -->
		<div class="header-social">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="header-social-icon">
							<ul>
								<li><a href="#"><i class="lni-facebook-filled"></i></a></li>
								<li><a href="#"><i class="lni-twitter-original"></i></a></li>
								<li><a href="#"><i class="lni-behance-original"></i></a></li>
								<li><a href="#"><i class="lni-linkedin-original"></i></a></li>
							</ul>
						</div> <!-- header social -->
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</div> <!-- header social -->
		</div> <!-- header content -->
	</header>

	<!--====== HEADER PART ENDS ======-->

	<!--====== ABOUT PART START ======-->

	<section id="about" class="about-area pt-125 pb-130">
		<div class="container">
			<div class="row">
				<?php
        $sql = "SELECT * FROM `articles`";
        $res = $conn->query($sql);
        while($row=mysqli_fetch_array($res))
        $post[]=$row;
		foreach ($res as $post): ?>


				<section id="about" class="about-area pt-125 pb-130">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="about-content mt-50">
									<h1 class="about-title"><?php echo $post['title'] ?></h1>
									<p><?php echo $post['content'] ?></p>
									<ul class="clearfix">
										<li>
											<div class="single-info d-flex align-items-center">
												<div class="info-text">
													<p><span>Create at :</span> <?php echo $post["date"]; ?></p>
												</div>

											</div> <!-- single info -->
										</li>

								</div> <!-- skill item -->
							</div> <!-- about skills -->
						</div>
					</div> <!-- row -->
			</div> <!-- container -->
	</section>
	<?php endforeach ?>
	<!--====== ABOUT PART ENDS ======-->



	<!--====== FOOTER PART START ======-->

	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->


	<!--====== BACK TOP TOP PART ENDS ======-->







	<!--====== jquery js ======-->
	<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

	<!--====== Bootstrap js ======-->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>

	<!--====== Magnific Popup js ======-->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<!--====== Parallax js ======-->
	<script src="assets/js/parallax.min.js"></script>

	<!--====== Counter Up js ======-->
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.counterup.min.js"></script>


	<!--====== Appear js ======-->
	<script src="assets/js/jquery.appear.min.js"></script>

	<!--====== Scrolling js ======-->
	<script src="assets/js/scrolling-nav.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>


	<!--====== Main js ======-->
	<script src="assets/js/main.js"></script>

</body>

</html>