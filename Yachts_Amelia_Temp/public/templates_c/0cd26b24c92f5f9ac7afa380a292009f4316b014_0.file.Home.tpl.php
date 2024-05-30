<?php
/* Smarty version 3.1.30, created on 2024-05-30 09:28:38
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66582aa6bc3136_30375779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cd26b24c92f5f9ac7afa380a292009f4316b014' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\Home.tpl',
      1 => 1717054082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_66582aa6bc3136_30375779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30990843766582aa6bc2902_25744746', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'bottom'} */
class Block_30990843766582aa6bc2902_25744746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/port.jpg" alt="Port Image">
<?php
}
}
/* {/block 'bottom'} */
}
