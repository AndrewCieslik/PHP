<?php
/* Smarty version 3.1.30, created on 2024-06-01 12:22:07
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\YachtEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_665af64f06a4f4_95580771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a08346fde59e6c5f8ca556d07a733df9768b06de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\YachtEdit.tpl',
      1 => 1716969543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_665af64f06a4f4_95580771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73581286665af64f0689e0_83984317', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_73581286665af64f0689e0_83984317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtSave" method="post" class="pure-form pure-form-aligned">
			<fieldset>
				<legend>Dane jachtu</legend>
				<div class="pure-control-group">
					<label for="model">model</label>
					<input id="model" type="text" placeholder="model" name="model" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
				</div>
				<div class="pure-control-group">
					<label for="yacht_name">nazwa jachtu</label>
					<input id="yacht_name" type="text" placeholder="nazwa" name="yacht_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->yacht_name;?>
">
				</div>
				<div class="pure-control-group">
					<label for="image">Zdjęcie jachtu</label>
					<input id="image" type="file" name="image">
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
/* {/block 'top'} */
}
