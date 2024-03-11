<?php
/* Smarty version 3.1.38, created on 2024-03-11 10:21:59
  from '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eecd37b5edb2_51622251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bfe6c896efc68f5cea1dca04741e58a220149d0' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/header.tpl',
      1 => 1710148895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eecd37b5edb2_51622251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '37976913065eecd37b59f34_45838249';
?>
<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Magister - Credit Calculator</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/magister.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

</head>

</HEAD>
<BODY>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69210388465eecd37b5d692_36235190', "content");
?>


<?php }
/* {block "content"} */
class Block_69210388465eecd37b5d692_36235190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_69210388465eecd37b5d692_36235190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['headerContent']->value;?>

<?php
}
}
/* {/block "content"} */
}
