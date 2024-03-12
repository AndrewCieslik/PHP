<?php
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Domainer - Credit Calculator</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/whhg.css" />
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/grid.css">
	<link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/styles.css">

	<link rel="icon" type="image/png" href="<?php print(_APP_URL); ?>/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php print(_APP_URL); ?>/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php print(_APP_URL); ?>/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php print(_APP_URL); ?>/assets/images/apple-touch-icon-114x114.png">
</head>
<body>
	<div id="Head" class="container">
		<div class="row">
			<div class="col span_16">
				<h1 id="Domain">Credit Calculator<br>
					<span>Free online calculator for your credit</span></h1>
			</div>
		
			<div id="Action" class="col span_8">
				<a href="#Offer" class="btn btn-icon btn-block"><i class="icon icon-envelope"></i> Make your offer</a>
			</div>	
		</div>
	</div>
	
	<div id="Content" class="container">
	
		<div class="row special">
			<div class="col span_24">
				<h3 class="align-center">Before proceeding with your loan application, please be aware that taking a loan involves financial risks and careful consideration of repayment terms.</h3>
			</div>
		</div>

		<div style="width:90%; margin: 2em auto;">

			<form class="pure-form pure-form-stacked" action="<?php print(_APP_URL); ?>/app/calc.php" method="post">
					<label for="id_credit">Kwota kredytu: </label>
					<!-- php out(46min 03lab-->
					<input id="id_credit" type="number" step="any" name="credit" min="1" required value="<?php if (isset($credit))
						print($credit); ?>" /><br />
			
					<label for="id_percent">Oprocentowanie: </label>
					<input id="id_percent" type="number" step="any" name="percent" min="0" required value="<?php if (isset($percent))
						print($percent); ?>" /><br />
			
					<label for="id_years">Liczba lat kredytu: </label>
					<input id="id_years" type="number" name="years" min="1" required value="<?php if (isset($years))
						print($years); ?>" /><br />
					<input class="pure-button pure-button-primary" type="submit" value="Oblicz miesięczną ratę" />
			</form>
			
			<?php
			if (isset($messages)) {
				if (count ( $messages ) > 0) {
					echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
					foreach ($messages as $msg) {
						echo '<li>'.$msg.'</li>';
					}
					echo '</ol>';
				}
			}
			?>
			
			<?php if (isset($result)): ?>
				<div>
					<p>Wartość miesięcznej raty: <span class="result-value"><?php echo $result; ?> zł</span></p>
				</div>
			<?php endif; ?>
		</div>
			
		<h2 class="align-center margin">Reasons to buy MegaDomain.com</h2>
		<div class="row padding">
			<div class="col span_8">
				<div class="circle"><i class="icon icon-support"></i></div>
				<h3 class="align-center">Easy to remember domain</h3>
				<p class="align-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
					euismod tincidunt ut laoreet dolore magna.</p>
			</div>

			<div class="col span_8">
				<div class="circle"><i class="icon icon-stockup"></i></div>
				<h3 class="align-center">Awesome stats</h3>
				<p class="align-center">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
					vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
			</div>

			<div class="col span_8">
				<div class="circle"><i class="icon icon-briefcase"></i></div>
				<h3 class="align-center">Popularity</h3>
				<p class="align-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
					tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
			</div>
		</div> <!-- end of row -->
		
		<hr class="divider">

		<div class="row padding">
			<div class="col span_8">

				<!-- "About seller" text block. Feel free to replace it by any other text or advertisement -->
				<h2>About Seller</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh 
				euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
				<p>AZ Domains has a variety of domain in many niches. So, if you like one of the domaint listed below, 
					feel free to make an offer for that domain too. 
				</p>
				<p><img src="assets/images/sample_signature.png" alt=""></p>

			</div>
			<div class="col span_16">

				<!-- Offer submission form. Please don't change inputs' IDs and names. -->
				<h2>Make an offer</h2>
				<div id="Offer">
					<div class="row">
						<div class="col span_12">
							<input type="text" placeholder="Your Name" id="f_name" name="f_name" >
						</div>
						<div class="col span_12">
							<input type="text" placeholder="Your email address" id="f_email" name="f_email" >
						</div>
					</div>
					<div class="row">
						<div class="col span_24">
							<textarea id="f_offer" name="f_offer" rows="10">I would like to offer $100 000 for megadomain.com</textarea>
						</div>
					</div>
					<div class="row">
						<div class="col span_24 align-right">
							<button class="btn btn-large" type="button">Submit offer</button>
							<div class="subscribe">
								<input type="checkbox" name="f_subscribe" id="f_subscribe" value="yes"><label for="f_subscribe"> <i></i>Subscribe to our newsletter</label>
							</div>
						</div>
					</div>
				</div> <!-- end of offer form -->
				
				<!-- Result Messages -->
				<div class="row" id="error_msg">
					<div class="col span_24">
						<b>Sorry, but there were error(s) found with the form you submitted:
						<i></i></b> 
						<br><a href="javascript:void(0);" id="new_try">Got it, retry.</a>
					</div>
				</div>
				<div class="row" id="msg">
					<div class="col span_24">
						<b>Offer sent!</b> 
						<br><a href="javascript:void(0);" id="new_offer">Make another one?</a>
					</div>
				</div>

			</div> 
		</div> 
	</div>

	<div id="Content-end" class="container"></div>

	<div id="Footer" class="container">
		<div class="row top">
			<div class="col span_16">Copyright &copy; 2014, Domain holder. All rights reserved.</div>
			<div class="col span_8 align-right">Design: <a href="http://www.gettemplate.com/">GetTemplate</a></div>
		</div>
	</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>