<?php
/* Smarty version 3.1.30, created on 2024-05-27 23:08:27
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\LogList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6654f64bd99f70_68573914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6bb809d7682e73c3e9774f8b2da3210d05fe728' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\LogList.tpl',
      1 => 1716843983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6654f64bd99f70_68573914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21091233736654f64bd890c8_02209600', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10038722756654f64bd99474_05207879', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_21091233736654f64bd890c8_02209600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logList" method="post">
			<legend>Wybierz plik logów do wyświetlenia</legend>
			<fieldset>
				<input type="text" placeholder="Nazwa pliku logów" name="logFile" value="<?php echo $_smarty_tpl->tpl_vars['logForm']->value->logFile;?>
" /><br />
				<button type="submit" class="pure-button pure-button-primary">Wyświetl logi</button>
			</fieldset>
		</form>
	</div>
<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_10038722756654f64bd99474_05207879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="log-content">
        <pre>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logContent']->value, 'line');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
?>
				<?php echo $_smarty_tpl->tpl_vars['line']->value;?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </pre>
	</div>
<?php
}
}
/* {/block 'bottom'} */
}
