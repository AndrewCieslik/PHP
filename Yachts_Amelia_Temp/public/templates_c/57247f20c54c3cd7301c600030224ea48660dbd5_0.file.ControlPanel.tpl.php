<?php
/* Smarty version 3.1.30, created on 2024-05-14 15:10:55
  from "D:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\ControlPanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_664362df99f0c8_10389438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57247f20c54c3cd7301c600030224ea48660dbd5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\ControlPanel.tpl',
      1 => 1715680377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_664362df99f0c8_10389438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646259304664362df99e303_72602448', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1646259304664362df99e303_72602448 extends Smarty_Internal_Block
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
