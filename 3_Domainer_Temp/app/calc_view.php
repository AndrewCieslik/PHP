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
					<label for="id_credit"><h1>Credit: </h1></label>
					
					<div class="col span_12">
                   		 <input type="text" placeholder="Your Name" id="f_name" name="f_name">
						 
                	</div>
					<!-- php out(46min 03lab-->
					<input class="align-center margin" id="id_credit" type="number" step="any" name="credit" min="1" required value="<?php out($credit); ?>" /><br />
			
					<label for="id_percent"><h1>Percent: </h1></label>
					<input class="align-center margin" id="id_percent" type="number" step="any" name="percent" min="0" required value="<?php out($percent); ?>" /><br />
			
					<label for="id_years"><h1>Number of years: </h1></label>
					<input class="align-center margin" id="id_years" type="number" name="years" min="1" required value="<?php out($years); ?>" /><br /></br>
					<div class="col span_8">
						<input class="btn btn-icon btn-block"  value="Count monthly loan" type="submit"><i class="icon icon-envelope"></i>
					</div>
			</form>
			
			</br></br></br>

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
					<h2 class ="box">The value of the monthly loan: <span class="result-value"><?php echo $result; ?> zł</span></h2>
				</div>
			<?php endif; ?>
		</div>
			
		<h2 class="align-center margin">Reasons to Use CreditCalculator</h2>
<div class="row padding">
    <div class="col span_8">
        <div class="circle"><i class="icon icon-support"></i></div>
        <h3 class="align-center">Simple Loan Calculation</h3>
        <p class="align-center">Planning your finances is crucial. CreditCalculator offers a user-friendly loan calculator to help you estimate your monthly payments.</p>
    </div>

    <div class="col span_8">
        <div class="circle"><i class="icon icon-stockup"></i></div>
        <h3 class="align-center">Accurate Results</h3>
        <p class="align-center">Our loan calculator provides precise estimates based on your inputs, ensuring you have a clear understanding of your financial obligations.</p>
    </div>

    <div class="col span_8">
        <div class="circle"><i class="icon icon-briefcase"></i></div>
        <h3 class="align-center">Customizable Options</h3>
        <p class="align-center">Tailor your loan parameters to suit your needs. CreditCalculator empowers you to adjust variables such as loan amount, interest rate, and term.</p>
    </div>
</div> <!-- end of row -->

<hr class="divider">

<div class="row padding">
    <div class="col span_8">
        <h2>About CreditCalculator</h2>
        <p>At CreditCalculator, we understand the significance of informed financial decisions. Our platform offers comprehensive information about loans and provides valuable tools like our loan calculator to assist you in managing your finances effectively.</p>
        <p>Discover the potential of smart financial planning with CreditCalculator.</p>
    </div>
    <div class="col span_16">
        <h2>Calculate Your Monthly Loan Payment</h2>
        <div id="Offer">
            <div class="row">
                <div class="col span_12">
                    <input type="text" placeholder="Your Name" id="f_name" name="f_name">
                </div>
                <div class="col span_12">
                    <input type="text" placeholder="Your email address" id="f_email" name="f_email">
                </div>
            </div>
            <div class="row">
                <div class="col span_24">
                    <textarea id="f_offer" name="f_offer" rows="10">I would like to calculate my monthly loan payment.</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col span_24 align-right">
                    <button class="btn btn-large" type="button">Calculate</button>
                    <div class="subscribe">
                        <input type="checkbox" name="f_subscribe" id="f_subscribe" value="yes"><label for="f_subscribe"> <i></i>Subscribe to our newsletter</label>
                    </div>
                </div>
            </div>
        </div> <!-- end of offer form -->

        <!-- Result Messages -->
        <div class="row" id="error_msg">
            <div class="col span_24">
                <b>Sorry, but there were errors found with the form you submitted:
                    <i></i></b>
                <br><a href="javascript:void(0);" id="new_try">Try Again</a>
            </div>
        </div>
        <div class="row" id="msg">
            <div class="col span_24">
                <b>Calculation Sent!</b>
                <br><a href="javascript:void(0);" id="new_offer">Calculate Another?</a>
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