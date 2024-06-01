<?php
/* Smarty version 3.1.30, created on 2024-05-29 11:26:47
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\roleList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6656f4d77739e5_29041506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8c7bed154ae1ac5da105576df9a425b7a19efe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\roleList.tpl',
      1 => 1716969543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6656f4d77739e5_29041506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5443858236656f4d7751b24_29005416', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6795817566656f4d7772b63_01694990', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_5443858236656f4d7751b24_29005416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roleList">
			<legend>Przypisane role:</legend>
			<fieldset>
				<input type="text" placeholder="role" name="sf_role" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->role;?>
" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_6795817566656f4d7772b63_01694990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleNew">+ Nowa rola</a>
	</div>
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>role</th>
				<th>opcje</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["role"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roleEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_role'];?>
">Edytuj</a><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roleDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_role'];?>
">Usuń</a></td></tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>
<?php
}
}
/* {/block 'bottom'} */
}
