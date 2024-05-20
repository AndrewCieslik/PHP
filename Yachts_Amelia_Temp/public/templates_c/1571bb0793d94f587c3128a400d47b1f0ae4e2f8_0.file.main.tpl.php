<?php
/* Smarty version 3.1.30, created on 2024-05-20 10:20:51
  from "D:\xampp\htdocs\PHP\Yachts_Amelia_Temp\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_664b07e3230eb6_69993019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1571bb0793d94f587c3128a400d47b1f0ae4e2f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PHP\\Yachts_Amelia_Temp\\app\\views\\templates\\main.tpl',
      1 => 1716193244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664b07e3230eb6_69993019 (Smarty_Internal_Template $_smarty_tpl) {
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
	
	<title>Initio - Free, multipurpose html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
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
					<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userPanel">Panel klienta</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
yachtList_open">Lista jachtów</a></li>
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
controlPanel" class="pure-menu-heading pure-menu-link">Control Panel</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
					<?php } else { ?>	
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="pure-menu-heading pure-menu-link">Zarejestruj</a></li>
					<?php }?>
				</ul>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
				<!-- <p class="lead text-center text-muted">Let me tell you something my friend. hope is a dangerous thing. hope can drive a man insane. you <a href="about.html">measure</a> yourself by the people who measure themselves by you. it only took me <a href="sidebar-right.html">six days</a>. </p>
				-->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_348251286664b07e3223506_12142629', 'top');
?>



				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30384788664b07e322fb64_78154902', 'messages');
?>

				
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_712059440664b07e32304c5_07683784', 'bottom');
?>

				</div>
		</div> <!-- / section -->
		
		
<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 widget">
				<div class="widget-body">
					<p>Copyright &copy; 2014</p>
				</div>
			</div>

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						Copyright &copy; 2014, Andrzej C<br> 
						Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
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
class Block_348251286664b07e3223506_12142629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_30384788664b07e322fb64_78154902 extends Smarty_Internal_Block
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
class Block_712059440664b07e32304c5_07683784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
