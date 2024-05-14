<?php
/* Smarty version 3.1.30, created on 2024-05-14 15:10:56
  from "D:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\YachtList_open.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_664362e0db3486_01398253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4db1b09ea3e577e807c6db53995694d1173e6726' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\YachtList_open.tpl',
      1 => 1715680377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_664362e0db3486_01398253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139003312664362e0d9e374_70530989', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_408590025664362e0db2633_07698122', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_139003312664362e0d9e374_70530989 extends Smarty_Internal_Block
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
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_408590025664362e0db2633_07698122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>model</th>
		<th>nazwa</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["model"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td></tr>
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
