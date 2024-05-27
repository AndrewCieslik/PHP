<?php
/* Smarty version 3.1.30, created on 2024-05-27 12:32:46
  from "C:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6654614e68be81_11695627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13b19cd4e5a09a68b2c26205570728245d64c146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\templates\\main.tpl',
      1 => 1716805958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654614e68be81_11695627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Portal charterowy</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gt_favicon.png">
	
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"

	<!--[if lt IE 9]> <?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/2898_Jezioro-Wdzydze-rekreacja-i-relaks.jpg" alt="">
			<span class="title">Wdzydze Czarter Jachtów</span>
			<span class="tagline">Kaszuby zapraszają!<br>
				<a href="">na.kaszuby@example.com</a></span>
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php if (core\RoleUtils::inRole("user")) {?>
						<li color="red">Witaj!</li>
					<?php }?>
					<?php if (core\RoleUtils::inRole("manager")) {?>
						<li color="red">Witaj managerze</li>
					<?php }?>
					<?php if (core\RoleUtils::inRole("admin")) {?>
						<li color="red">Witaj admin</li>
					<?php }?>
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
charterList">Rezerwacje</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtList">Jachty</a></li>
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
						<?php if (core\RoleUtils::inRole("user")) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu-heading pure-menu-link">Edytuj profil</a></li>
						<?php }?>
						<?php if (core\RoleUtils::inRole("manager") || core\RoleUtils::inRole("admin")) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" class="pure-menu-heading pure-menu-link">Edytuj użytkowników</a></li>
						<?php }?>
						<?php if (core\RoleUtils::inRole("admin")) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
config" class="pure-menu-heading pure-menu-link">Konfiguracja systemu</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logs" class="pure-menu-heading pure-menu-link">Logi</a></li>
						<?php }?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
					<?php } else { ?>	
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="pure-menu-heading pure-menu-link">Zarejestruj</a></li>
					<?php }?>
				</ul>
			</div>	
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9080604736654614e67fee2_45299805', 'top');
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2110735386654614e689683_96919969', 'messages');
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19105460366654614e68a8f7_11611332', 'bottom');
?>

		</div>
	</div>
		
<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>Copyright &copy; 2024, Andrzej C</p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div>
	</div>
</footer>

<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/template.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block 'top'} */
class Block_9080604736654614e67fee2_45299805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_2110735386654614e689683_96919969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
	
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
					<div class="messages bottom-margin">
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
						<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</ul>
					</div>
				<?php }?>
				
			<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_19105460366654614e68a8f7_11611332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
