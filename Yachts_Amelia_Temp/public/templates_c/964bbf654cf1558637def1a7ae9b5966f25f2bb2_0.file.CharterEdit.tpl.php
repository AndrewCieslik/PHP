<?php
/* Smarty version 3.1.30, created on 2024-06-01 12:26:01
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\CharterEdit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_665af739d00614_88965198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '964bbf654cf1558637def1a7ae9b5966f25f2bb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\CharterEdit.tpl',
      1 => 1717237533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_665af739d00614_88965198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_546875586665af739cff446_97671187', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_546875586665af739cff446_97671187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane charteru</legend>
                    <div class="pure-control-group">
                        <label for="id_yacht">nazwa jachtu</label>
                        <select id="id_yacht" name="id_yacht">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yachts']->value, 'yacht');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['yacht']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['yacht']->value['id_yacht'];?>
" <?php if ($_smarty_tpl->tpl_vars['yacht']->value['id_yacht'] == $_smarty_tpl->tpl_vars['form']->value->id_yacht) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['yacht']->value['yacht_name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                    <div class="pure-control-group">
                        <label for="date_start">data rozpoczęcia</label>
                        <input id="date_start" type="date" placeholder="data startu" name="date_start" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_start;?>
">
                    </div>
                    <div class="pure-control-group">
                        <label for="date_end">data zakończenia</label>
                        <input id="date_end" type="date" placeholder="data końca" name="date_end" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->date_end;?>
">
                    </div>
                <?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
                    <div class="pure-control-group">
                            <label for="approved"></label>
                            <div id="approved">
                                <label for="not_approved">
                                    <input type="radio" id="not_approved" name="approved" value="0" <?php if ($_smarty_tpl->tpl_vars['form']->value->approved == '0') {?>checked<?php }?>>
                                    Niezatwierdzony
                                </label>
                                <label for="approved">
                                    <input type="radio" id="approved" name="approved" value="1" <?php if ($_smarty_tpl->tpl_vars['form']->value->approved == '1') {?>checked<?php }?>>
                                    Zatwierdzony
                                </label>
                                <label for="rejected">
                                    <input type="radio" id="rejected" name="approved" value="2" <?php if ($_smarty_tpl->tpl_vars['form']->value->approved == '2') {?>checked<?php }?>>
                                    Odrzucony
                                </label>
                            </div>
                        </div>
                <?php }?>
                    <div class="pure-controls">
                        <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                        <a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterList">Powrót</a>
                    </div>
            </fieldset>
            <input type="hidden" name="id_charter" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_charter;?>
">
            <input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id_user;?>
">
            <input type="hidden" name="approved" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->approved;?>
">
        </form>
    </div>
<?php
}
}
/* {/block 'top'} */
}
