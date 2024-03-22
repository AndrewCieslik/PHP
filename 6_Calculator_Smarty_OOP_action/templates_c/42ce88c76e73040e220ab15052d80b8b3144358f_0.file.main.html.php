<?php
/* Smarty version 3.1.30, created on 2024-03-22 08:10:01
  from "D:\xampp\htdocs\PHP\6_Calculator_Smarty_OOP_action\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65fd3cd90edc20_84456182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ce88c76e73040e220ab15052d80b8b3144358f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\6_Calculator_Smarty_OOP_action\\templates\\main.html',
      1 => 1711094985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fd3cd90edc20_84456182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Credit calculator' : $tmp);?>
">
	<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">	
</head>
<body>
	<div class="header">
		<h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Credit calculator" : $tmp);?>
</h1>
		<h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Credit calculator" : $tmp);?>
</h2>
		<p>
			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Credit calculator" : $tmp);?>

		</p>
	</div>

	<div class="content">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196729956265fd3cd90ec2f8_98596799', 'content');
?>

	</div>>

	<div class="footer">
		<p>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155638747465fd3cd90ed474_92166064', 'footer');
?>

		</p>
	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_196729956265fd3cd90ec2f8_98596799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_155638747465fd3cd90ed474_92166064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
