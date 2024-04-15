<?php
/* Smarty version 3.1.30, created on 2024-04-15 07:57:25
  from "D:\xampp\htdocs\PHP\7_Domainer_role\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661cc1c5015337_02454661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a47dbcbbcd197c02bbadffd22dee72b99c4fe4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\7_Domainer_role\\app\\views\\CalcView.tpl',
      1 => 1713122239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_661cc1c5015337_02454661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1441046375661cc1c500d833_90359336', 'calc');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1765273670661cc1c5012cc1_20323096', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1112076360661cc1c5013398_01139001', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1391854912661cc1c5013b28_85794058', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1777862102661cc1c5014f50_19040895', 'log_status');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'calc'} */
class Block_1441046375661cc1c500d833_90359336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:90%; margin: 3em auto;">
        <form class="" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
            <br />
            <div class="col span_24">
                <label for="id_percent">
                    <h1>Credit:</h1>
                </label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Your credit value" id="id_credit" name="credit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit;?>
"/>
            </div>

            <div class="col span_24">
                <label for="id_percent">
                    <h1>Percent:</h1>
                </label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Percent value" id="id_percent" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
"/>
            </div>

            <div class="col span_24">
                <label for="id_years">
                    <h1>Number of years: </h1>
                </label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Credit lenght in years" id="id_years" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
"/>
            </div>

            <div class="col span_24">
                <input class="btn btn-large" value="Count monthly loan" type="submit"><br />

                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                    <h4>Errors: </h4>
                    <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ol>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
                    <h4>Information: </h4>
                    <ol class="inf">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ol>
                <?php }?>
                
                <?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
                    <p class="res">
                        <h1>Result: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zl</h1>
                    </p>
                <?php }?>
            </div>
            <div class="row">
            </div>
        </form>
    </div>
	
<?php
}
}
/* {/block 'calc'} */
/* {block 'log_status'} */
class Block_246292556661cc1c5010b68_61814889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'log_status'} */
/* {block 'calc'} */
class Block_1991852042661cc1c5012751_75883640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'calc'} */
/* {block 'content'} */
class Block_1765273670661cc1c5012cc1_20323096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="Content" class="container">

        <div class="row special">
            <div class="col span_24">
                <h3 class="align-center">Before proceeding with your loan application, please be aware that taking a loan
                    involves financial risks and careful consideration of repayment terms.</h3>
            </div>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246292556661cc1c5010b68_61814889', 'log_status', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1991852042661cc1c5012751_75883640', 'calc', $this->tplIndex);
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
                            <b>Sorry, but there were errors found with the form you submitted:<i></i></b>
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
/* {block 'header'} */
class Block_1112076360661cc1c5013398_01139001 extends Smarty_Internal_Block
{
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
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1391854912661cc1c5013b28_85794058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="Footer" class="container">
            <div class="row top">
                <div class="col span_16">Copyright &copy; 2014, Domain holder. All rights reserved.</div>
                <div class="col span_8 align-right">Design: <a href="http://www.gettemplate.com/">GetTemplate</a></div>
            </div>
        </div>
<?php
}
}
/* {/block 'footer'} */
/* {block 'log_status'} */
class Block_1777862102661cc1c5014f50_19040895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="btn btn-large">LOGOUT</a>
	<span>user: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, role: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>
<?php
}
}
/* {/block 'log_status'} */
}
