<?php
/* Smarty version 3.1.30, created on 2024-06-07 23:10:27
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\YachtList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66637743d1bd51_75109204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613e981c8548d165dc9c0f08a75229929c58d24b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\YachtList.tpl',
      1 => 1717794627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_66637743d1bd51_75109204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109094181366637743cff8b3_05900326', 'bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36441371466637743d1b377_10957268', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'bottom'} */
class Block_109094181366637743cff8b3_05900326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
yachtList">
			<legend>Opcje wyszukiwania jachtów</legend>
			<fieldset>
				<input type="text" placeholder="model" name="sf_model" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->model;?>
" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>
<?php
}
}
/* {/block 'bottom'} */
/* {block 'top'} */
class Block_36441371466637743d1b377_10957268 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>Modele</th>
				<th>Nazwa</th>
				<th>Jachty Naszej floty</th>
				<?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
					<th>opcje</th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
			<?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
				<div class="bottom-margin">
					<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtNew">+ Nowy jacht</a>
				</div>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yachts']->value, 'y');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['y']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['y']->value["yacht_name"];?>
</td><td><img src="<?php echo $_smarty_tpl->tpl_vars['y']->value['image'];?>
" alt="Yacht Image" style="max-width: 200px; max-height: 150px;" /></td><?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
yachtEdit/<?php echo $_smarty_tpl->tpl_vars['y']->value['id_yacht'];?>
">Edytuj</a><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
yachtDelete/<?php echo $_smarty_tpl->tpl_vars['y']->value['id_yacht'];?>
">Usuń</a></td><?php }?></tr>
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
/* {/block 'top'} */
}
