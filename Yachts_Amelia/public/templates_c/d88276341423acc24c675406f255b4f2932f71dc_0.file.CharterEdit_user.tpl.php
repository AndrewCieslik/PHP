<?php
/* Smarty version 3.1.30, created on 2024-04-17 22:05:47
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\CharterEdit_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66202b9bb72c95_16760092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88276341423acc24c675406f255b4f2932f71dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\CharterEdit_user.tpl',
      1 => 1713384320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_66202b9bb72c95_16760092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73744098866202b9bb71f35_56980700', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_73744098866202b9bb71f35_56980700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterSave_user" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane charteru</legend>
		<div class="pure-control-group">
            <label for="name">Numer jachtu*</label>
            <input id="name" type="text" placeholder="imię" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_yacht;?>
">
        </div>
		<div class="pure-control-group">
            <label for="surname">Data rozpoczęcia</label>
            <input id="surname" type="text" placeholder="data startu" name="date_start" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_start;?>
">
        </div>
		<div class="pure-control-group">
            <label for="phone">Data zakończenia</label>
            <input id="phone" type="text" placeholder="data końca" name="date_end" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_end;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterList_user">Powrót</a>
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
