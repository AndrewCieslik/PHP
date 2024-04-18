<?php
/* Smarty version 3.1.30, created on 2024-04-18 19:07:13
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\charterList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662153410732e9_37262747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0742cd5aafa7d0bd393a215f48786a72445e9b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\charterList.tpl',
      1 => 1713460029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_662153410732e9_37262747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135624229666215341058940_74176982', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181114117566215341072048_78734821', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_135624229666215341058940_74176982 extends Smarty_Internal_Block
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
class Block_181114117566215341072048_78734821 extends Smarty_Internal_Block
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
		<th>edycja</th>


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
