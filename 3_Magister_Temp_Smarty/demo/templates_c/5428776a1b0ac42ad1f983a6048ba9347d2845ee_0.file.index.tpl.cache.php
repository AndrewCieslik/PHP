<?php
/* Smarty version 3.1.38, created on 2024-03-11 09:09:54
  from '/var/www/smarty/demo/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eebc5214ec30_22066417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5428776a1b0ac42ad1f983a6048ba9347d2845ee' => 
    array (
      0 => '/var/www/smarty/demo/templates/index.tpl',
      1 => 1710144583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65eebc5214ec30_22066417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '57668744165eebc521400b9_35128534';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
echo $_smarty_tpl->tpl_vars['test']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
