<?php
/* Smarty version 3.1.30, created on 2024-03-17 07:30:08
  from "D:\xampp\htdocs\PHP\6_Calculator_Smarty_OOP_action\app\calc\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65f68df0b331c6_94348504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ad45df4b5f2aa5a225bcb23b49bec2bfbead70' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\6_Calculator_Smarty_OOP_action\\app\\calc\\CalcView.html',
      1 => 1710656976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f68df0b331c6_94348504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200551158165f68df0755af9_01861440', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169204149365f68df0b32528_58955519', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_200551158165f68df0755af9_01861440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
footer example<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_169204149365f68df0b32528_58955519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Credit calculator - test</h2>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
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
