<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Magister - Free html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/magister.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">
<?php
    include "views/view_top.php";
?>
<?php
    require_once 'config.php';
?>

<nav class="mainmenu">
	<div class="container">
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="#head" class="active">Wstep</a></li>
				<li><a href="#about">O aplikacji</a></li>
				<li><a href="#themes">Oblicz rate kredytu</a></li>
				<li><a href="#contact">Kontakt</a></li>
			</ul>
		</div>
	</div>
</nav>


<!-- Main (Home) section -->
<section class="section" id="head">
	<div class="container">

		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	

				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="title">Kalkulator Kredytowy</h1>
				<h2 class="subtitle">darmowy kalkulator rat kredytu</h2>

				<!-- Short introductory (optional) -->
				<h3 class="tagline">
					Przestrzegamy przed roznymi instrumentami finansowymi
				</h3>

			</div> <!-- /col -->
		</div> <!-- /row -->
	
	</div>
</section>

<!-- Second (About) section -->
<section class="section" id="about">
	<div class="container">
	
		<h2 class="text-center title">O aplikacji</h2>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">    
				<h5><strong>O Aplikacji<br></strong></h5>
				<p>Aplikacja ma na celu trening w ramach zajec z tematyki aplikacji webowych</p>    
			</div>
			<div class="col-sm-4">
				<h5><strong>Aplikacja rat kredytu<br></strong></h5>    
				<p>Aplikacja przedstawia prosty kalkulator obliczania rat kredytu bankowego</p>    
				<h5><strong>Autor: Andrzej<br></strong></h5>    
				<p>Wiecej o mnie: <a href="https://github.com/andrewcieslik">Github</a></p>
			</div>
		</div>
	</div>
</section>

<!-- Third (Works) section -->
<section class="section" id="themes">
	<div class="container">
		<h2 class="text-center title">Oblicz rate</h2>
            <?php include "app/calc_view.php";
            ?>
	</div>
</section>

<!-- Fourth (Contact) section -->
<section class="section" id="contact">
	<div class="container">
	
		<h2 class="text-center title">Get in touch</h2>

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 text-center">
				<p class="lead">Have a question about this template, or want to suggest a new feature?</p>
				<p>Feel free to email me, or drop me a line in Twitter!</p>
				<p><b>gt@gettemplate.com</b><br><br></p>
				<ul class="list-inline list-social">
					<li><a href="https://twitter.com/serggg" class="btn btn-link"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
					<li><a href="https://github.com/pozhilov" class="btn btn-link"><i class="fa fa-github fa-fw"></i> Github</a></li>
					<li><a href="http://linkedin/in/pozhilov" class="btn btn-link"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a></li>
				</ul>
			</div>
		</div>

	</div>
</section>

<?php
include "views/view_footer.php";
?>

<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<script src="assets/js/magister.js"></script>
</body>
</html>