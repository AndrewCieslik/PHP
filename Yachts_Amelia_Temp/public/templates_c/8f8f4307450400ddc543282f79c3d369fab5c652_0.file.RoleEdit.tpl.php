<?php
/* Smarty version 3.1.30, created on 2024-05-29 09:04:32
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\RoleEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6656d3801e6c78_72404998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f8f4307450400ddc543282f79c3d369fab5c652' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\RoleEdit.tpl',
      1 => 1716966270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6656d3801e6c78_72404998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20206412656656d3801e6114_38317073', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_20206412656656d3801e6114_38317073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Role:</legend>
		<div class="pure-control-group">
            <label for="role">role</label>
            <input id="role" type="text" placeholder="role" name="role" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->role;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_role" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_role;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
