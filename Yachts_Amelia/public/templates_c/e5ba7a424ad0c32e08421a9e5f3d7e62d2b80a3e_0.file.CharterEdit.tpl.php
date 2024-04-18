<?php
/* Smarty version 3.1.30, created on 2024-04-18 19:03:55
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\CharterEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6621527bac3788_79301566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5ba7a424ad0c32e08421a9e5f3d7e62d2b80a3e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\CharterEdit.tpl',
      1 => 1713459832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6621527bac3788_79301566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18896895396621527bac2767_23316877', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_18896895396621527bac2767_23316877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane charteru</legend>
		<div class="pure-control-group">
            <label for="name">id jachtu</label>
            <input id="id_yacht" type="text" placeholder="id jachtu" name="id_yacht" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_yacht;?>
">
        </div>
        <div class="pure-control-group">
            <label for="date_end">id klienta</label>
            <input id="id_user" type="text" placeholder="id klienta" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
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
        <div class="pure-control-group">
            <label for="approved">Zatwierdź</label>
            <input id="approved" type="text" placeholder="zatwierdź [0/1]" name="approved" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->approved;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterList">Powrót</a>
		</div>
	</fieldset>
</form>	
</div>

<?php
}
}
/* {/block 'top'} */
}
