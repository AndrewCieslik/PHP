<?php
/* Smarty version 3.1.38, created on 2024-03-11 09:50:27
  from '/var/www/PHP/smarty/demo/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eec5d3be3643_82026973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73691b78bdd75722a0436bc33cdb04630ed9f339' => 
    array (
      0 => '/var/www/PHP/smarty/demo/templates/index.tpl',
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
function content_65eec5d3be3643_82026973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '213225542365eec5d3bbf9c2_23678764';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
echo $_smarty_tpl->tpl_vars['test']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
