<?php
/* Smarty version 3.1.30, created on 2024-05-28 20:49:27
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66562737e967a0_13300533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cd26b24c92f5f9ac7afa380a292009f4316b014' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\Home.tpl',
      1 => 1716922166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_66562737e967a0_13300533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116222928566562737e95701_59535489', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'bottom'} */
class Block_116222928566562737e95701_59535489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="home" class="home">
		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/port.jpg" alt="Port Image">
	</div>
<?php
}
}
/* {/block 'bottom'} */
}
