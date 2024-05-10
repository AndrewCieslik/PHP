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
		{block name=Ribbon}
		{block name=messages}
	</body>
</html>