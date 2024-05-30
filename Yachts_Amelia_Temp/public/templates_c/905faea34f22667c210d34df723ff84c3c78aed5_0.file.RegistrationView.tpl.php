<?php
/* Smarty version 3.1.30, created on 2024-05-29 11:26:17
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\RegistrationView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6656f4b9b63da4_32169909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '905faea34f22667c210d34df723ff84c3c78aed5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\RegistrationView.tpl',
      1 => 1716969543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6656f4b9b63da4_32169909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5995168166656f4b9b60767_44473870', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_5995168166656f4b9b60767_44473870 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Rejestracja nowego użytkownika</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Imię: </label>
                <input id="name" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
"/>
            </div>
            <div class="pure-control-group">
                <label for="surname">Nazwisko: </label>
                <input id="surname" type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
"/>
            </div>
            <div class="pure-control-group">
                <label for="login">Login: </label>
                <input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
            </div>
            <div class="pure-control-group">
                <label for="password">Hasło: </label>
                <input id="password" type="password" name="password" />
            </div>
            <div class="pure-control-group">
                <label for="password2">Powtórz hasło: </label>
                <input id="password2" type="password" name="password2" />
            </div>

            <div class="pure-control-group">
                <label for="phone">Telefon: </label>
                <input id="phone" type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->phone;?>
"/>
            </div>
            <div class="pure-controls">
                <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary"/>
            </div>
        </fieldset>
    </form>
<?php
}
}
/* {/block 'top'} */
}
