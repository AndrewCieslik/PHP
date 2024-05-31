<?php
/* Smarty version 3.1.30, created on 2024-05-31 21:20:51
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\PersonList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_665a23139fd7f0_65062749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b08009e78321f57f8d1da2896e7897bd80bc07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\PersonList.tpl',
      1 => 1717183092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_665a23139fd7f0_65062749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242640331665a23139cbf67_17385176', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1966022162665a23139fc940_20832522', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_242640331665a23139cbf67_17385176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
		<div class="bottom-margin">
			<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
				<legend>Opcje wyszukiwania</legend>
				<fieldset>
					<input type="text" placeholder="nazwisko" name="sf_surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
" /><br />
					<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
				</fieldset>
			</form>
		</div>
	<?php }
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1966022162665a23139fc940_20832522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
	</div>
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
		<tr>
			<th>imię</th>
			<th>nazwisko</th>
			<th>telefon</th>
			<?php if (core\RoleUtils::inRole("admin")) {?>
				<th>opcje</th>
			<?php }?>
		</tr>
		</thead>
		<tbody>
		<?php if (core\RoleUtils::inRole("user")) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
				<?php ob_start();
echo $_smarty_tpl->tpl_vars['id']->value;
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['p']->value["id_user"] == $_prefixVariable1) {?>
					<tr><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
">Edytuj</a></td></tr>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
		<?php if (core\RoleUtils::inRole("manager")) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
				<tr><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone"];?>
</td></tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
		<?php if (core\RoleUtils::inRole("admin")) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
				<tr><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["phone"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
">Edytuj</a><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_user'];?>
">Usuń</a></td></tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
		</tbody>
	</table>
<?php
}
}
/* {/block 'bottom'} */
}
