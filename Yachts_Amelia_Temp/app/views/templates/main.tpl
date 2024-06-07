<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Portal charterowy</title>
	<link rel="shortcut icon" href="{$conf->app_url}/images/gt_favicon.png">
	
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<link rel="stylesheet" href="{$conf->app_url}/css/styles.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="{$conf->app_url}/images/2898_Jezioro-Wdzydze-rekreacja-i-relaks.jpg" alt="">
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
					{if core\RoleUtils::inRole("user")}
						<li color="red">Witaj!</li>
					{/if}
					{if core\RoleUtils::inRole("manager")}
						<li color="red">Witaj managerze</li>
					{/if}
					{if core\RoleUtils::inRole("admin")}
						<li color="red">Witaj admin</li>
					{/if}
					<li class="active"><a href="{$conf->action_root}charterList">Rezerwacje</a></li>
					<li><a href="{$conf->action_root}yachtList">Jachty</a></li>
					{if count($conf->roles)>0}
						{if core\RoleUtils::inRole("user")}
							<li><a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Edytuj profil</a></li>
						{/if}
						{if core\RoleUtils::inRole("manager")}
							<li><a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a></li>
						{/if}
						{if core\RoleUtils::inRole("admin")}
							<li><a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Edytuj użytkowników</a></li>
						{/if}
						{if core\RoleUtils::inRole("admin")}
							<li><a href="{$conf->action_root}settings" class="pure-menu-heading pure-menu-link">Konfiguracja systemu</a></li>
							<li><a href="{$conf->action_root}logList" class="pure-menu-heading pure-menu-link">Logi</a></li>
						{/if}
							<li><a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
					{else}	
							<li><a href="{$conf->action_root}login" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
							<li><a href="{$conf->action_root}register" class="pure-menu-heading pure-menu-link">Zarejestruj</a></li>
					{/if}
				</ul>
			</div>	
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
		
		<div class="row section topspace">
			<div class="col-md-12">
			{block name=top} {/block}
			{block name=messages}	
				{if $msgs->isMessage()}
					<div class="messages bottom-margin">
						<ul>
						{foreach $msgs->getMessages() as $msg}
						{strip}
							<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
						{/strip}
						{/foreach}
						</ul>
					</div>
				{/if}
				
			{/block}
			{block name=bottom} {/block}
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{$conf->app_url}/js/template.js"></script>
</body>
</html>
