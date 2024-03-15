<?php
/* Smarty version 3.1.38, created on 2024-03-15 08:51:51
  from '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f3fe1704e035_53044345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159dc3df3f1f7ab0d50f6002a9b55f0a2bafcdc1' => 
    array (
      0 => '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl',
      1 => 1710489076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f3fe1704e035_53044345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36770849565f3fe170410c9_10578814', 'content');
?>
}

    <?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53549970965f3fe17043a53_82831393', 'calc');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144135203665f3fe1704d2f2_10929034', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18796106665f3fe1704da89_37744117', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'calc'} */
class Block_207391902765f3fe17041c31_61212900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'calc'} */
/* {block 'content'} */
class Block_36770849565f3fe170410c9_10578814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_36770849565f3fe170410c9_10578814',
  ),
  'calc' => 
  array (
    0 => 'Block_207391902765f3fe17041c31_61212900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="Head" class="container">
        <div class="row">
            <div class="col span_16">
                <h1 id="Domain">Credit Calculator<br>
                    <span>Free online calculator for your credit</span>
                </h1>
            </div>
        </div>
    </div>

    <div id="Content" class="container">

        <div class="row special">
            <div class="col span_24">
                <h3 class="align-center">Before proceeding with your loan application, please be aware that taking a loan
                    involves financial risks and careful consideration of repayment terms.</h3>
            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207391902765f3fe17041c31_61212900', 'calc', $this->tplIndex);
?>


        <div class="row padding">
        </div>

        <hr class="divider">

        <div class="row padding">

            <div class="col span_8">
                <div class="circle"><i class="icon icon-support"></i></div>
                <h3 class="align-center">Simple Loan Calculation</h3>
                <p class="align-center">Planning your finances is crucial. CreditCalculator offers a user-friendly loan
                    calculator to help you estimate your monthly payments.</p>
            </div>

            <div class="col span_8">
                <div class="circle"><i class="icon icon-stockup"></i></div>
                <h3 class="align-center">Accurate Results</h3>
                <p class="align-center">Our loan calculator provides precise estimates based on your inputs, ensuring you
                    have a clear understanding of your financial obligations.</p>
            </div>

            <div class="col span_8">
                <div class="circle"><i class="icon icon-briefcase"></i></div>
                <h3 class="align-center">Customizable Options</h3>
                <p class="align-center">Tailor your loan parameters to suit your needs. CreditCalculator empowers you to
                    adjust variables such as loan amount, interest rate, and term.</p>
            </div>

            <div class="row padding">

                <div class="col span_8">
                    <h2>About CreditCalculator</h2>
                    <p>At CreditCalculator, we understand the significance of informed financial decisions. Our platform
                        offers comprehensive information about loans and provides valuable tools like our loan calculator to
                        assist you in managing your finances effectively.</p>
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
                                <textarea id="f_offer" name="f_offer"
                                    rows="10">I would like to calculate my monthly loan payment.</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span_24 align-right">
                                <button class="btn btn-large" type="button">Calculate</button>
                                <div class="subscribe">
                                    <input type="checkbox" name="f_subscribe" id="f_subscribe" value="yes"><label
                                        for="f_subscribe"> <i></i>Subscribe to our newsletter</label>
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
    <?php
}
}
/* {/block 'content'} */
/* {block 'calc'} */
class Block_53549970965f3fe17043a53_82831393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'calc' => 
  array (
    0 => 'Block_53549970965f3fe17043a53_82831393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div style="width:90%; margin: 3em auto;">
            <form class="" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
                <br />
                <div class="col span_24">
                    <label for="id_percent">
                        <h1>Credit:</h1>
                    </label><br />
                </div>

                <div class="col span_12">
                    <input type="text" placeholder="Your credit value" id="id_credit" name="credit" />
                </div>

                <div class="col span_24">
                    <label for="id_percent">
                        <h1>Percent:</h1>
                    </label><br />
                </div>

                <div class="col span_12">
                    <input type="text" placeholder="Percent value" id="id_percent" name="percent" />
                </div>

                <div class="col span_24">
                    <label for="id_years">
                        <h1>Number of years: </h1>
                    </label><br />
                </div>

                <div class="col span_12">
                    <input type="text" placeholder="Credit lenght in years" id="id_years" name="years" />
                </div>

                <div class="col span_24">
                    <input class="btn btn-icon btn-block" value="Count monthly loan" type="submit"><br />

                    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                            <h3>Wystąpiły błędy: </h3>
                            <ol class="err">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        <?php }?>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
                            <h3>Informacje: </h3>
                            <ol class="inf">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        <?php }?>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                        <h2>Wynik</h2>
                        <p class="res">
                        <h1><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zl</h1>
                        </p>
                    <?php }?>
                </div>
            </form>
        </div>
    <?php
}
}
/* {/block 'calc'} */
/* {block 'header'} */
class Block_144135203665f3fe1704d2f2_10929034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_144135203665f3fe1704d2f2_10929034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_18796106665f3fe1704da89_37744117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18796106665f3fe1704da89_37744117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
