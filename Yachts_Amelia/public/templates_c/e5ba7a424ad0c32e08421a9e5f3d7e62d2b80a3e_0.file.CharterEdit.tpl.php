<?php
/* Smarty version 3.1.30, created on 2024-04-18 17:06:25
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\CharterEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_662136f1c98561_30789970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5ba7a424ad0c32e08421a9e5f3d7e62d2b80a3e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\CharterEdit.tpl',
      1 => 1713452753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_662136f1c98561_30789970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2142723847662136f1c93b64_24949118', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_2142723847662136f1c93b64_24949118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane charteru</legend>
		<div class="pure-control-group">
            <label for="name">Numer jachtu*</label>
            <input id="id_yacht" type="text" placeholder="imię" name="id_yacht" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_yacht;?>
">
        </div>
		<div class="pure-control-group">
            <label for="date_start">Data rozpoczęcia</label>
            <input id="date_start" type="text" placeholder="data startu" name="date_start" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_start;?>
">
        </div>
		<div class="pure-control-group">
            <label for="date_end">Data zakończenia</label>
            <input id="date_end" type="text" placeholder="data końca" name="date_end" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_end;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
