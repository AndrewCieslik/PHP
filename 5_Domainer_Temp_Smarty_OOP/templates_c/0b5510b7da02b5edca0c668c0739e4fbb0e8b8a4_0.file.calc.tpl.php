<?php
/* Smarty version 3.1.38, created on 2024-03-15 08:15:44
  from '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f3f5a03d4a77_45062238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5510b7da02b5edca0c668c0739e4fbb0e8b8a4' => 
    array (
      0 => '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl',
      1 => 1710486938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f3f5a03d4a77_45062238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70115541665f3f5a0395b41_17041689', 'footer');
?>



<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34631049765f3f5a0396940_86602861', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_70115541665f3f5a0395b41_17041689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_70115541665f3f5a0395b41_17041689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_34631049765f3f5a0396940_86602861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34631049765f3f5a0396940_86602861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:90%; margin: 3em auto;">

    <form class=""  action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
        <br />
        <div class="col span_24">
            <label for="id_percent"><h1>Credit:</h1></label><br />
        </div>

        <div class="col span_12">
               <input type="text" placeholder="Your credit value" id="id_credit" name="credit"/>
        </div>

        <div class="col span_24">
            <label for="id_percent"><h1>Percent:</h1></label><br />
        </div>

        <div class="col span_12">
               <input type="text" placeholder="Percent value" id="id_percent" name="percent" />
        </div>

        <div class="col span_24">
            <label for="id_years"><h1>Number of years: </h1></label><br />
        </div>
        
        <div class="col span_12">
            <input type="text" placeholder="Credit lenght in years" id="id_years" name="years"/>
        </div>
        
        <div class="col span_24">
            <input class="btn btn-icon btn-block"  value="Count monthly loan" type="submit"><br />
            <div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
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
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
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
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
        </div>
    </form>
</div>	
<?php
}
}
/* {/block 'content'} */
}
