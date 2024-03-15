<?php
/* Smarty version 3.1.38, created on 2024-03-15 11:57:16
  from '/var/www/PHP/5_Domainer_Temp_Smarty_OOP/templates/main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f4298caa16c1_01400649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3a41902aa52b28eff7ebac54c30048811942a5' => 
    array (
      0 => '/var/www/PHP/5_Domainer_Temp_Smarty_OOP/templates/main.html',
      1 => 1710500077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f4298caa16c1_01400649 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/whhg.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/grid.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/styles.css">

	<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/apple-touch-icon-114x114.png">
</head>
<body>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132663361865f4298caa0061_05524936', 'header');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19045381765f4298caa0998_27562530', 'content');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136644948465f4298caa0fe3_21942101', 'footer');
?>


<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_132663361865f4298caa0061_05524936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_132663361865f4298caa0061_05524936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_19045381765f4298caa0998_27562530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19045381765f4298caa0998_27562530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_136644948465f4298caa0fe3_21942101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_136644948465f4298caa0fe3_21942101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
