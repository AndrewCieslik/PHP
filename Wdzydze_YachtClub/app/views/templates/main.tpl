<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

{* <head>
	<meta charset="utf-8"/>
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
</head> *}
<head>
<!-- Site Title-->
<title>Home</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Stylesheets-->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Barlow:100,200,300,400,700">
<link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.css">
<link rel="stylesheet" href="{$conf->app_url}/css/fonts.css">
<link rel="stylesheet" href="{$conf->app_url}/css/style.css">

<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>

<body style="margin: 20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_root}userPanel" class="pure-menu-heading pure-menu-link">Panel klienta</a>
	{* <a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Lista klientów</a> *}

	<a href="{$conf->action_root}yachtList_open" class="pure-menu-heading pure-menu-link">Lista jachtów</a>
{if count($conf->roles)>0}
	<a href="{$conf->action_root}controlPanel" class="pure-menu-heading pure-menu-link">Control Panel</a>
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
{else}	
	<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
	<a href="{$conf->action_root}register" class="pure-menu-heading pure-menu-link">Zarejestruj</a>

{/if}
</div>

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

</body>

</html>