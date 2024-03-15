<?php
/* Smarty version 3.1.38, created on 2024-03-15 08:08:54
  from '/var/www/PHP/4_Domainer_Temp_Smarty/templates/main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f3f4067de6c3_64596709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9becfc3d6b240ad10f02bef819969a1abca77d7a' => 
    array (
      0 => '/var/www/PHP/4_Domainer_Temp_Smarty/templates/main.html',
      1 => 1710486524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f3f4067de6c3_64596709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/whhg.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/grid.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/styles.css">

	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/apple-touch-icon-114x114.png">
</head>
<body>
	<div id="Head" class="container">
		<div class="row">
			<div class="col span_16">
				<h1 id="Domain">Credit Calculator<br>
					<span>Free online calculator for your credit</span></h1>
			</div>
		</div>
	</div>
	
	<div id="Content" class="container">
	
		<div class="row special">
			<div class="col span_24">
				<h3 class="align-center">Before proceeding with your loan application, please be aware that taking a loan involves financial risks and careful consideration of repayment terms.</h3>
			</div>
		</div>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135998437565f3f4067de1a2_49287555', 'content');
?>


	<!--content-->	
	<div class="row padding">
</div> 

<hr class="divider">

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

<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_135998437565f3f4067de1a2_49287555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135998437565f3f4067de1a2_49287555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
		<?php
}
}
/* {/block 'content'} */
}
