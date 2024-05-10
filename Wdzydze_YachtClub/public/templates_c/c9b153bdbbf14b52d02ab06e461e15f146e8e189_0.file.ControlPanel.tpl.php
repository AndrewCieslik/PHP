<?php
/* Smarty version 3.1.30, created on 2024-05-10 22:05:29
  from "D:\xampp\htdocs\PHP\Wdzydze_YachtClub\app\views\ControlPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_663e7e09680286_93057394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9b153bdbbf14b52d02ab06e461e15f146e8e189' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Wdzydze_YachtClub\\app\\views\\ControlPanel.tpl',
      1 => 1715199310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_663e7e09680286_93057394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1581217392663e7e0967f3f3_66279936', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1581217392663e7e0967f3f3_66279936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
yachtList">
		<legend>Panel kontrolny zarządzania charterami</legend>
	</form>
	</div>	

	<div class="pure-menu pure-menu-horizontal bottom-margin">
	
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtList" class="pure-menu pure-menu-link">Lista jachtów</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu pure-menu-link">Lista klientów</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterList" class="pure-menu pure-menu-link">Lista charterów</a>

</div>
	
<?php
}
}
/* {/block 'top'} */
}
