<?php
/* Smarty version 3.1.30, created on 2024-03-16 08:32:35
  from "/var/www/PHP/6_Calculator_Smarty_OOP_AP/templates/main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_65f54b13cc4b47_27008795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f503328e65ffb63834e02673c8c09c8e940ded88' => 
    array (
      0 => '/var/www/PHP/6_Calculator_Smarty_OOP_AP/templates/main.html',
      1 => 1710574014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f54b13cc4b47_27008795 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45608794365f54b13cc3b57_70821097', 'content');
?>

</div>>

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16759234565f54b13cc4621_67017683', 'footer');
?>

	</p>
	<p>
		Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Przemysław Kudłacik)
	</p>
</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_45608794365f54b13cc3b57_70821097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_16759234565f54b13cc4621_67017683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
