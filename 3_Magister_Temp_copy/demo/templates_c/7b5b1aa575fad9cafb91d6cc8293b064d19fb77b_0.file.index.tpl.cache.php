<?php
/* Smarty version 3.1.38, created on 2024-03-11 10:40:51
  from '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eed1a36a3113_43151919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5b1aa575fad9cafb91d6cc8293b064d19fb77b' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/index.tpl',
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
function content_65eed1a36a3113_43151919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '138212348565eed1a369aaa8_93190880';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106335457165eed1a36a08a3_84674080', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205239439365eed1a36a1b18_69743318', "mainmenu");
?>


<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo $_smarty_tpl->tpl_vars['test']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_106335457165eed1a36a08a3_84674080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106335457165eed1a36a08a3_84674080',
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
class Block_205239439365eed1a36a1b18_69743318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mainmenu' => 
  array (
    0 => 'Block_205239439365eed1a36a1b18_69743318',
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
