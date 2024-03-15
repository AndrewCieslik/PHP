<?php
/* Smarty version 3.1.38, created on 2024-03-15 08:09:16
  from '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_65f3f41c7ffa21_48552790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5510b7da02b5edca0c668c0739e4fbb0e8b8a4' => 
    array (
      0 => '/var/www/PHP/4_Domainer_Temp_Smarty/app/calc.tpl',
      1 => 1710486555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f3f41c7ffa21_48552790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92251393165f3f41c7fbcc6_33961364', 'footer');
?>



<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48868621165f3f41c7fd1e6_17290732', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_92251393165f3f41c7fbcc6_33961364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_92251393165f3f41c7fbcc6_33961364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_48868621165f3f41c7fd1e6_17290732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_48868621165f3f41c7fd1e6_17290732',
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
            <?php echo '<?php
                ';?>
if (isset($messages)) {
                    if (count ( $messages ) > 0) {
                    echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
                foreach ($messages as $msg) {
                echo '<li>'.$msg.'</li>';
                }
                echo '</ol>';
                }
                }
            <?php echo '?>';?>

    
            <?php echo '<?php ';?>
if (isset($result)): <?php echo '?>';?>

            <div>
            </div>
                <?php echo '<?php ';?>
endif; <?php echo '?>';?>

        </div>
    </form>
</div>	
<?php
}
}
/* {/block 'content'} */
}
