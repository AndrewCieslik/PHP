<?php
/* Smarty version 3.1.30, created on 2024-04-19 11:08:36
  from "D:\xampp\htdocs\PHP\Yachts_Amelia\app\views\RegistrationView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6622349472b8b5_40789454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2d2d1f38fdf98b43b7ac8ec89f2740b758c20eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia\\app\\views\\RegistrationView.tpl',
      1 => 1713517553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6622349472b8b5_40789454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20428218106622349472b2f5_88651431', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_20428218106622349472b2f5_88651431 extends Smarty_Internal_Block
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
