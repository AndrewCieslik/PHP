<?php
/* Smarty version 3.1.30, created on 2024-03-17 08:29:15
  from "D:\xampp\htdocs\PHP\5_Calculator_Smarty_OOP\app\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65f69bcbaaf1e9_97147346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaeb9fb29f219074ee2db094b8921813c9ad3043' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\5_Calculator_Smarty_OOP\\app\\CalcView.html',
      1 => 1710656976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/main.html' => 1,
  ),
),false)) {
function content_65f69bcbaaf1e9_97147346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97335677565f69bcb8955d3_01577051', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41757673265f69bcbaae8c3_67675015', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../templates/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_97335677565f69bcb8955d3_01577051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
footer example<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_41757673265f69bcbaae8c3_67675015 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Credit calculator - test</h2>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="credit">Credit value</label>
		<input id="credit" type="text" placeholder="credit val" name="credit" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->credit;?>
">

		<label for="percent">Percent value</label>
		<input id="percent" type="text" placeholder="percent val" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
">

		<label for="years">Years</label>
		<input id="years" type="text" placeholder="years" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Count</button>
</form>

<div class="messages">

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
	<h4>Result: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
