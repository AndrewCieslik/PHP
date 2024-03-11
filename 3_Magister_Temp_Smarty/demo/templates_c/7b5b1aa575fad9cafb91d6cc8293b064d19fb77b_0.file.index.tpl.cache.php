<?php
/* Smarty version 3.1.38, created on 2024-03-11 09:53:01
  from '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eec66df07658_43042292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5b1aa575fad9cafb91d6cc8293b064d19fb77b' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/index.tpl',
      1 => 1710147178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65eec66df07658_43042292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17347320665eec66defd357_70634264';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
echo $_smarty_tpl->tpl_vars['test']->value;?>

<?php echo $_smarty_tpl->tpl_vars['test']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
