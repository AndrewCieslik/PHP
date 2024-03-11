<?php
/* Smarty version 3.1.38, created on 2024-03-11 10:11:03
  from '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65eecaa7d8fe34_18725697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a08e30d4059e60b45b2d2d197d5b27c06cc342' => 
    array (
      0 => '/var/www/PHP/3_Magister_Temp_Smarty/demo/templates/footer.tpl',
      1 => 1710148254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eecaa7d8fe34_18725697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '171073221065eecaa7d8c405_59337428';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72863095565eecaa7d8e726_83131132', "content");
?>

</BODY>
</HTML>
<?php }
/* {block "content"} */
class Block_72863095565eecaa7d8e726_83131132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72863095565eecaa7d8e726_83131132',
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
