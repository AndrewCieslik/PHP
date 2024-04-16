<?php
/* Smarty version 3.1.30, created on 2024-04-16 20:37:34
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\YachtEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_661ec56e8f0ba1_17842838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '236a8b416cd045f7032064b2e76ab352436deabb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\YachtEdit.tpl',
      1 => 1713292500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_661ec56e8f0ba1_17842838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1093096250661ec56e8f06a4_10058621', 'top_yacht');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top_yacht'} */
class Block_1093096250661ec56e8f06a4_10058621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="model">model</label>
            <input id="model" type="text" placeholder="model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
        </div>
		<div class="pure-control-group">
            <label for="name">nazwisko</label>
            <input id="name" type="text" placeholder="nazwa" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_yacht" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_yacht;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top_yacht'} */
}
