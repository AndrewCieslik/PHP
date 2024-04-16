<?php
/* Smarty version 3.1.30, created on 2024-04-16 20:43:40
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\YachtList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661ec6dc90bd18_73379464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1219568294350aca2ec82389bd0eff6625801ea4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\YachtList.tpl',
      1 => 1713293005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_661ec6dc90bd18_73379464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_456337079661ec6dc901fa7_33239053', 'top_yacht');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_738668745661ec6dc90b620_65229725', 'bottom_yacht');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top_yacht'} */
class Block_456337079661ec6dc901fa7_33239053 extends Smarty_Internal_Block
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
/* {/block 'top_yacht'} */
/* {block 'bottom_yacht'} */
class Block_738668745661ec6dc90b620_65229725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtNew">+ Nowy jacht</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>model</th>
		<th>nazwa</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yachts']->value, 'y');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['y']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
yachtEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_yacht'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
yachtDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_yacht'];?>
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
/* {/block 'bottom_yacht'} */
}
