<?php
/* Smarty version 3.1.38, created on 2024-03-11 10:14:45
  from '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eecb8504ab04_32806551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bfe6c896efc68f5cea1dca04741e58a220149d0' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/header.tpl',
      1 => 1710148382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eecb8504ab04_32806551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '146267930265eecb85045c69_62196171';
?>
<HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94172595265eecb850494a8_27320264', "content");
?>


<?php }
/* {block "content"} */
class Block_94172595265eecb850494a8_27320264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_94172595265eecb850494a8_27320264',
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
