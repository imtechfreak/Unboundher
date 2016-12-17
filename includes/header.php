<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>UnboundHer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!---->
	<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
	<link href="css/animate.min.css" rel="stylesheet">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- //animation-effect -->

</head>
<body>
<div class="lr">
	<ul class="list-inline">
		<li><a href="register.html" style="color:white">LogIn</a></li>
		<li>|</li>
		<li><a href="register.html">Register</a></li>
	</ul>
</div>
<div class="header head">
	<div class="container header01">
		<div class="col-md-3">
			<div class="logo">
				<h1><a href="index.php"><!--<span>Unbo</span>--><img src="images/logo.png" alt=""><!--nd Her<img src="images/her.jpg" style="width:45px;">--></a></h1>
			</div>
		</div>
        <div class="col-md-2 col-md-offset-6 user">
			<?php if(isset($_SESSION['user'])): ?>
         <h5 class="userhead">Welcome <?php echo $_SESSION['name']; ?></h5>
			<?php endif; ?>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
			<div class="toggle">
				<ul class="toggle-menu">
					<li><a  href="index.php">Home</a></li>
					<li><a class="active" href="about.php">About Us</a></li>
					<!--<li><a  href="menu.html">Menu</a></li>-->
					<li><a  href="events.php">Events</a></li>
					<li><a  href="blog.php">Blog</a></li>
					<!--<li><a  href="typo.html">Codes</a></li>-->
					<li><a  href="contact.php">Contact</a></li>
					<?php if(isset($_SESSION['user'])) :?>
						<li><a  href="logout.php">Logout</a></li>
					<?php else : ?>
						<li><a  href="register.php">Register</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<script>
				$('.navicon').on('click', function (e) {
					e.preventDefault();
					$(this).toggleClass('navicon--active');
					$('.toggle').toggleClass('toggle--active');
				});
			</script>
		</div>
		<div class="clearfix"></div>
	</div>

</div>