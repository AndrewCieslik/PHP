<?php
/* Smarty version 3.1.38, created on 2024-03-11 10:46:06
  from '/var/www/PHP/3_Magister_Temp_copy/demo/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eed2dee0c9e4_02464327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cce958e3a0b6ad76f83382ea650870a59b5642d' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_copy/demo/templates/footer.tpl',
      1 => 1710148254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eed2dee0c9e4_02464327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '6341078065eed2dee0c152_03863941';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16934947065eed2dee0c585_75831657', "content");
?>

</BODY>
</HTML>
<?php }
/* {block "content"} */
class Block_16934947065eed2dee0c585_75831657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16934947065eed2dee0c585_75831657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['footerContent']->value;?>

<?php
}
}
/* {/block "content"} */
}
