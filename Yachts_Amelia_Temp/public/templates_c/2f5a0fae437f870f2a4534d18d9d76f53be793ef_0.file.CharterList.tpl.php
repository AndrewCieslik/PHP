<?php
/* Smarty version 3.1.30, created on 2024-06-07 23:15:50
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\CharterList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_666378868ac752_04817170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5a0fae437f870f2a4534d18d9d76f53be793ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\CharterList.tpl',
      1 => 1717794950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_666378868ac752_04817170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1843078969666378868813e6_53036469', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1194122106666378868abb46_01360354', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_1843078969666378868813e6_53036469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="bottom-margin">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterList">
            <legend>Opcje wyszukiwania</legend>
            <fieldset>

                <?php if (!core\RoleUtils::inRole("user")) {?>
                    <select name="sf_yacht_name">
                        <option value="">Wybierz jacht</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yachts']->value, 'yacht');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['yacht']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['yacht']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['searchForm']->value->yacht_name == $_smarty_tpl->tpl_vars['yacht']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['yacht']->value;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select><br />
                    <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
                <?php }?>


            </fieldset>
        </form>
    </div>
    <?php if (core\RoleUtils::inRole("user")) {?>
        <div class="bottom-margin">
            <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterNew">+ Nowy charter</a>
        </div>
    <?php }
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1194122106666378868abb46_01360354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <table id="tab_people" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>nazwa jachtu</th>
            <th>data rozpoczecia</th>
            <th>data zakonczenia</th>
            <?php if (core\RoleUtils::inRole("user") || core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
                <th>imie sternika</th>
                <th>nazwisko</th>
            <?php }?>
            <?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
                <th>status</th>
            <?php }?>
            <?php if (core\RoleUtils::inRole("user") || core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
                <th>opcje</th>
            <?php }?>
        </tr>
        </thead>
        <tbody>
        <?php if (!core\RoleUtils::inRole("user") && !core\RoleUtils::inRole("manager") && !core\RoleUtils::inRole("admin")) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charters']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["yacht_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_start"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_end"];?>
</td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
        <?php if (core\RoleUtils::inRole("user")) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charters']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['_SESSION']->value['id'];
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['p']->value["id_user"] == $_prefixVariable1) {?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["yacht_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_start"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_end"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_charter'];?>
">Edytuj</a><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_charter'];?>
">Usuń</a></td></tr>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
        <?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charters']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["yacht_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_start"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["date_end"];?>
</td><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value["id_user"];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td title="ID: <?php echo $_smarty_tpl->tpl_vars['p']->value["id_user"];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["surname"];?>
</td><td style="color: <?php if ($_smarty_tpl->tpl_vars['p']->value['approved'] == 1) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['approved'] == 2) {?>red<?php } else { ?>black<?php }?>"><?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["approved"];
$_prefixVariable2=ob_get_clean();
if ($_prefixVariable2 == 0) {?>Niezatwierdzony<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["approved"];
$_prefixVariable3=ob_get_clean();
if ($_prefixVariable3 == 1) {?>Zatwierdzony<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["approved"];
$_prefixVariable4=ob_get_clean();
if ($_prefixVariable4 == 2) {?>Odrzucony<?php }}}?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_charter'];?>
">Edytuj</a><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
charterDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_charter'];?>
">Usuń</a></td></tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>
        </tbody>
    </table>
<?php
}
}
/* {/block 'bottom'} */
}
