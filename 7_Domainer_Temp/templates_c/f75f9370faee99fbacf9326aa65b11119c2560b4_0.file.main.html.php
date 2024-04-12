<?php
/* Smarty version 3.1.38, created on 2024-03-17 07:32:04
  from 'D:\xampp\htdocs\PHP\6_Domainer_Temp_Smarty_OOP_action\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f68e64b49c69_14881571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f75f9370faee99fbacf9326aa65b11119c2560b4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\6_Domainer_Temp_Smarty_OOP_action\\templates\\main.html',
      1 => 1710656976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f68e64b49c69_14881571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta charset=utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Domainer - Credit Calculator</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/whhg.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/grid.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/styles.css">

	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/apple-touch-icon-114x114.png">
</head>
<body>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143303346065f68e64b47565_72056721', 'header');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135792809265f68e64b48176_74430672', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115859584765f68e64b48a21_04620071', 'footer');
?>


<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_143303346065f68e64b47565_72056721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_143303346065f68e64b47565_72056721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_135792809265f68e64b48176_74430672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_135792809265f68e64b48176_74430672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_115859584765f68e64b48a21_04620071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_115859584765f68e64b48a21_04620071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
