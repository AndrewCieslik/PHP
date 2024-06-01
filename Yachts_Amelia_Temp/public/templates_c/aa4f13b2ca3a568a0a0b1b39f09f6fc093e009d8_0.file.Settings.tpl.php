<?php
/* Smarty version 3.1.30, created on 2024-05-29 09:06:55
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\Settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6656d40f9ffcc4_22822988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa4f13b2ca3a568a0a0b1b39f09f6fc093e009d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\Settings.tpl',
      1 => 1716966414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6656d40f9ffcc4_22822988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9307868226656d40f9ff588_52011588', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_9307868226656d40f9ff588_52011588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
roleList" class="pure-menu-heading pure-menu-link">Edycja ról w systemie</a>
	</div>
<?php
}
}
/* {/block 'top'} */
}
