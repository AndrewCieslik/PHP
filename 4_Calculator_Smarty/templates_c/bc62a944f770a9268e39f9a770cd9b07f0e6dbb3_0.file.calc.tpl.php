<?php
/* Smarty version 3.1.38, created on 2024-03-11 14:03:06
  from '/var/www/PHP/4_Calculator_Smarty/app/calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65ef010aa1b8d0_95756457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc62a944f770a9268e39f9a770cd9b07f0e6dbb3' => 
    array (
      0 => '/var/www/PHP/4_Calculator_Smarty/app/calc.tpl',
      1 => 1710162017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef010aa1b8d0_95756457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132680333065ef010aa0f6e2_51776088', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91457595065ef010aa0fd46_99311251', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_132680333065ef010aa0f6e2_51776088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_132680333065ef010aa0f6e2_51776088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_91457595065ef010aa0fd46_99311251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_91457595065ef010aa0fd46_99311251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator</h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<legend style="color: white">Zalogowano jako: <?php echo '<?php ';?>
echo $role <?php echo '?>';?>
 </legend>
<label for="id_credit">Kwota kredytu: </label>
<input id="id_credit" type="number" step="any" name="credit" min="1" required value="<?php echo '<?php ';?>
if (isset($credit))
	print($credit); <?php echo '?>';?>
" /><br />

<label for="id_percent">Oprocentowanie: </label>
<input id="id_percent" type="number" step="any" name="percent" min="0" required value="<?php echo '<?php ';?>
if (isset($percent))
	print($percent); <?php echo '?>';?>
" /><br />

<label for="id_years">Liczba lat kredytu: </label>
<input id="id_years" type="number" name="years" min="1" required value="<?php echo '<?php ';?>
if (isset($years))
	print($years); <?php echo '?>';?>
" /><br />
<input class="pure-button pure-button-primary" type="submit" value="Oblicz miesięczną ratę" />
</form>


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

<?php
}
}
/* {/block 'content'} */
}
