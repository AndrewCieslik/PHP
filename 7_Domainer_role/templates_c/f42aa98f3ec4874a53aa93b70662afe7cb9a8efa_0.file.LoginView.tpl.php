<?php
/* Smarty version 3.1.30, created on 2024-04-14 21:17:45
  from "D:\xampp\htdocs\PHP\7_Domainer_role\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661c2bd9c19023_88468671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f42aa98f3ec4874a53aa93b70662afe7cb9a8efa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\7_Domainer_role\\app\\views\\LoginView.tpl',
      1 => 1713122229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_661c2bd9c19023_88468671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2008057172661c2bd9c171a8_67506493', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2008057172661c2bd9c171a8_67506493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<div id="Head" class="container">
	<div class="row">
		<div class="col span_16">
			<h1 id="Domain">Login to calculator<br>
				<span>Free online calculator for your credit</span>
			</h1>
		</div>
	</div>
</div>
	<fieldset>
        <div class="col span_6">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="col span_6">
			<label for="id_pass">password: </label>
			<input id="id_pass" type="text" name="pass" /><br />
		</div>
		<div class="col span_6">
			<input type="submit" value="LOGIN" class="btn btn-large"/>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
