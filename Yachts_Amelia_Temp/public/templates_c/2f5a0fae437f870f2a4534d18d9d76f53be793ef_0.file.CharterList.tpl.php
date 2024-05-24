<?php
/* Smarty version 3.1.30, created on 2024-05-23 22:01:55
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\CharterList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_664fa0b3a76e58_29753717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5a0fae437f870f2a4534d18d9d76f53be793ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\CharterList.tpl',
      1 => 1716377785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_664fa0b3a76e58_29753717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_572204854664fa0b3a5cac2_91196869', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1418557947664fa0b3a728b1_14170678', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_572204854664fa0b3a5cac2_91196869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="numer charteru" name="sf_charter" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->id_charter;?>
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
class Block_1418557947664fa0b3a728b1_14170678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterNew">+ Nowy charter</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id charteru</th>
		<th>id jachtu</th>
		<th>id klienta</th>
		<th>data rozpoczęcia</th>
		<th>data zakończenia</th>
		<th>zatwierdź</th>
		<th>opcje</th>


	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id_charter"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id_yacht"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["id_user"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_start"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_end"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["approved"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_charter'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_charter'];?>
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
