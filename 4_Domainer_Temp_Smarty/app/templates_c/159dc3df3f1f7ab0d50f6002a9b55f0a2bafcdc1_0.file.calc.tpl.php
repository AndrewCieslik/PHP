<?php
/* Smarty version 3.1.38, created on 2024-03-15 08:30:59
  from '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f3f933118283_19270024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159dc3df3f1f7ab0d50f6002a9b55f0a2bafcdc1' => 
    array (
      0 => '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl',
      1 => 1710487856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f3f933118283_19270024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146638755865f3f93310b343_51909160', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210266025765f3f933117031_11148260', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48003941565f3f933117a20_57462198', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_146638755865f3f93310b343_51909160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_146638755865f3f93310b343_51909160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:90%; margin: 3em auto;">
        <form class=""  action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
            <br />
            <div class="col span_24">
                <label for="id_percent"><h1>Credit:</h1></label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Your credit value" id="id_credit" name="credit"/>
            </div>

            <div class="col span_24">
                <label for="id_percent"><h1>Percent:</h1></label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Percent value" id="id_percent" name="percent" />
            </div>

            <div class="col span_24">
                <label for="id_years"><h1>Number of years: </h1></label><br />
            </div>
            
            <div class="col span_12">
                <input type="text" placeholder="Credit lenght in years" id="id_years" name="years"/>
            </div>
            
            <div class="col span_24">
                <input class="btn btn-icon btn-block"  value="Count monthly loan" type="submit"><br />

                    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                            <h3>Wystąpiły błędy: </h3>
                            <ol class="err">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        <?php }?>
                    <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
                            <h3>Informacje: </h3>
                            <ol class="inf">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        <?php }?>
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                        <h2>Wynik</h2>
                        <p class="res">
                        <h1><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zl</h1>
                        </p>
                    <?php }?>
            </div>
        </form>
    </div>	
<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_210266025765f3f933117031_11148260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_210266025765f3f933117031_11148260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_48003941565f3f933117a20_57462198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_48003941565f3f933117a20_57462198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
