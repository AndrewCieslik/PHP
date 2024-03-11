<?php
/* Smarty version 3.1.38, created on 2024-03-11 10:46:06
  from '/var/www/PHP/3_Magister_Temp_copy/demo/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eed2dedfca31_82779252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9142765cfbc7ae7e4d2410c03c42706e8cb4005c' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_copy/demo/templates/index.tpl',
      1 => 1710150050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:menu.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65eed2dedfca31_82779252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '15156487465eed2dedd7fe4_67043386';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213864651865eed2dedf9ad7_65794508', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33090708265eed2dedfbf02_46461755', "mainmenu");
?>


<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['test']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_213864651865eed2dedf9ad7_65794508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_213864651865eed2dedf9ad7_65794508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['headerContent']->value;?>

<?php
}
}
/* {/block "content"} */
/* {block "mainmenu"} */
class Block_33090708265eed2dedfbf02_46461755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mainmenu' => 
  array (
    0 => 'Block_33090708265eed2dedfbf02_46461755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['menuContent']->value;?>

<?php
}
}
/* {/block "mainmenu"} */
}
