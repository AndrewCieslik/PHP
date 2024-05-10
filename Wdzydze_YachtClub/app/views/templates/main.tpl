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


	<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="page bg-image novi-background">
      <div class="preloader">
        <div class="preloader-body">
          <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
          </div>
          <p>Loading...</p>
        </div>
      </div><a class="section section-banner d-none d-xl-flex" href="https://www.templatemonster.com/website-templates/monstroid2.html" style="background-image: url(images/banner/background-04-1920x60.jpg); background-image: -webkit-image-set( url(images/banner/background-04-1920x60.jpg) 1x, url(images/banner/background-04-3840x120.jpg) 2x )" target="_blank"><img src="images/banner/foreground-04-1600x60.png" srcset="images/banner/foreground-04-1600x60.png 1x, images/banner/foreground-04-3200x120.png 2x" alt="" width="1600" height="310"></a>
      <!-- Page Header-->
      <header class="section page-header">
        <div class="container">
          <div class="row justify-content-between align-items-end row-30">
            <div class="col-12 col-md-6"><a class="brand-logo" href="./"><img src="images/logo-default-346x62.png" alt="" width="346" height="62"/></a></div>
            <div class="col-12 col-md-6 col-xl-4">
              <div class="head-title">
                <p>I am a professional specializing <br class="d-none d-md-inline-block">in lifestyle photography.</p>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="section section-xs">
        <div class="container">
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs">
              <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab"><span class="nav-link-main">gallery</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab"><span class="nav-link-main">about me</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab"><span class="nav-link-main">services</span></a></li>
              <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab"><span class="nav-link-main">contacts</span></a></li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tabs-1-1">
                <div class="tabs-custom tabs-horizontal tabs-gallery hide-on-modal" id="tabs-galery">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-gallery-1" data-toggle="tab"><img src="images/gallery-01-180x180.jpg" alt="" width="180" height="180"/><span>Lifestyle</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-gallery-2" data-toggle="tab"><img src="images/gallery-02-180x180.jpg" alt="" width="180" height="180"/><span>Portrait</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-gallery-3" data-toggle="tab"><img src="images/gallery-03-180x180.jpg" alt="" width="180" height="180"/><span>Fashion</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-gallery-4" data-toggle="tab"><img src="images/gallery-04-180x180.jpg" alt="" width="180" height="180"/><span>Nature</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-gallery-5" data-toggle="tab"><img src="images/gallery-05-180x180.jpg" alt="" width="180" height="180"/><span>City Life</span></a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade" id="tabs-gallery-1">
                      <div class="gallery-wrap">
                        <div class="gallery-wrap-inner">
                          <h4>Lifestyle</h4>
                          <div class="dots-custom-lifestyle"></div><a class="back-to-gallery button-link button-link-icon" href="#"><span class="novi-icon icon icon-primary fa fa-angle-left"></span><span>back to gallery</span></a>
                        </div>
                        <div class="gallery-wrap-inner">
                          <!-- Owl Carousel-->
                          <div class="owl-carousel owl-gallery" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-lightgallery="group" data-pagination-class=".dots-custom-lifestyle"><a class="gallery-item" href="images/gallery-lifestyle-07-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-07-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-01-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-01-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-02-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-02-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-03-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-03-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-04-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-04-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-05-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-05-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-06-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-06-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-lifestyle-08-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-lifestyle-08-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Portrait-->
                    <div class="tab-pane fade" id="tabs-gallery-2">
                      <div class="gallery-wrap">
                        <div class="gallery-wrap-inner">
                          <h4>Portrait</h4>
                          <div class="dots-custom-portrait"></div><a class="back-to-gallery button-link button-link-icon" href="#"><span class="novi-icon icon icon-primary fa fa-angle-left"></span><span>back to gallery</span></a>
                        </div>
                        <div class="gallery-wrap-inner">
                          <!-- Owl Carousel-->
                          <div class="owl-carousel owl-gallery" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-lightgallery="group" data-pagination-class=".dots-custom-portrait"><a class="gallery-item" href="images/gallery-portrait-02-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-02-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-01-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-01-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-03-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-03-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-04-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-04-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-05-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-05-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-06-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-06-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-07-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-07-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-portrait-08-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-portrait-08-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Fashion-->
                    <div class="tab-pane fade" id="tabs-gallery-3">
                      <div class="gallery-wrap">
                        <div class="gallery-wrap-inner">
                          <h4>Fashion</h4>
                          <div class="dots-custom-fashion"></div><a class="back-to-gallery button-link button-link-icon" href="#"><span class="novi-icon icon icon-primary fa fa-angle-left"></span><span>back to gallery</span></a>
                        </div>
                        <div class="gallery-wrap-inner">
                          <!-- Owl Carousel-->
                          <div class="owl-carousel owl-gallery" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-lightgallery="group" data-pagination-class=".dots-custom-fashion"><a class="gallery-item" href="images/gallery-fashion-03-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-03-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-01-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-01-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-02-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-02-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-04-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-04-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-05-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-05-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-06-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-06-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-07-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-07-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-fashion-08-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-fashion-08-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--nature-->
                    <div class="tab-pane fade" id="tabs-gallery-4">
                      <div class="gallery-wrap">
                        <div class="gallery-wrap-inner">
                          <h4>Nature</h4>
                          <div class="dots-custom-nature"></div><a class="back-to-gallery button-link button-link-icon" href="#"><span class="novi-icon icon icon-primary fa fa-angle-left"></span><span>back to gallery</span></a>
                        </div>
                        <div class="gallery-wrap-inner">
                          <!-- Owl Carousel-->
                          <div class="owl-carousel owl-gallery" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-lightgallery="group" data-pagination-class=".dots-custom-nature"><a class="gallery-item" href="images/gallery-nature-07-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-07-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-01-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-01-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-02-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-02-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-03-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-03-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-04-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-04-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-05-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-05-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-06-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-06-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-nature-08-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-nature-08-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--city-->
                    <div class="tab-pane fade" id="tabs-gallery-5">
                      <div class="gallery-wrap">
                        <div class="gallery-wrap-inner">
                          <h4>Citylife</h4>
                          <div class="dots-custom-city"></div><a class="back-to-gallery button-link button-link-icon" href="#"><span class="novi-icon icon icon-primary fa fa-angle-left"></span><span>back to gallery</span></a>
                        </div>
                        <div class="gallery-wrap-inner">
                          <!-- Owl Carousel-->
                          <div class="owl-carousel owl-gallery" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-lightgallery="group" data-pagination-class=".dots-custom-city"><a class="gallery-item" href="images/gallery-city-02-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-02-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-city-01-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-01-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-city-03-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-03-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-city-04-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-04-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-city-05-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-05-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-city-06-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-06-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a><a class="gallery-item" href="images/gallery-city-07-970x524.jpg" data-lightgallery="item">
                              <figure><img src="images/gallery-city-07-970x524.jpg" alt="" width="970" height="524"/>
                              </figure>
                              <div class="caption"><span class="icon novi-icon fa-expand"></span></div></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-1-2">
                <div class="content-box hide-on-modal">
                  <div class="content-box-inner">
                    <div class="row align-items-center row-30 row-md-30">
                      <div class="col-12 col-md-6 col-lg-7">
                        <figure><img src="images/about-01-504x369.jpg" alt="" width="504" height="369"/>
                        </figure>
                      </div>
                      <div class="col-12 col-md-6 col-lg-5">
                        <h3>Who I Am</h3>
                        <p class="subtitle">bermodi tempora incidunt ut labore et dolore magna maliquam</p>
                        <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incidunt ut labore et dolore magnam. Naliquam quaerat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur.</p><a class="button button-primary button-icon button-icon-left" href="#" data-toggle="modal" data-target="#modal-about-us"><span>More</span><span class="novi-icon icon fa-angle-right"></span></a>
                      </div>
                    </div>
                  </div><a class="close-content-box" href="#">x</a>
                </div>
                <div class="modal slideUp" id="modal-about-us" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="content-box">
                        <div class="content-box-inner">
                          <div class="row">
                            <div class="col-12">
                              <h3>A Few Words About Me</h3>
                              <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae.</p>
                              <p>Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempo. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea</p>
                            </div>
                          </div>
                        </div><a class="close-modal-content-box" href="#" data-dismiss="modal">x</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-1-3">
                <div class="content-box hide-on-modal">
                  <div class="content-box-inner row-30">
                    <h3>Services Overview</h3>
                    <div class="row align-items-center row-30">
                      <div class="col-12 col-md-6">
                        <div class="unit service-box">
                          <div class="unit-left"><span class="novi-icon icon icon-lg fa-clock-o"></span></div>
                          <div class="unit-body"><a class="subtitle" href="#" data-toggle="modal" data-target="#modal-service-1">bermodi tempora incidunt ut labore et dolore magna maliquam</a>
                            <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore et dolore magnam. Naliquam quae.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="unit service-box">
                          <div class="unit-left"><span class="novi-icon icon icon-lg fa-cloud"></span></div>
                          <div class="unit-body"><a class="subtitle" href="#" data-toggle="modal" data-target="#modal-service-2">cidunt ut labore t dolore magna maliqua mquaerat voleneni.</a>
                            <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore et dolore magnam. Naliquam quae.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="unit service-box">
                          <div class="unit-left"><span class="novi-icon icon icon-lg fa-bell"></span></div>
                          <div class="unit-body"><a class="subtitle" href="#" data-toggle="modal" data-target="#modal-service-3">empora incidunt ut labore et dolore magna maliquam lroep oirta.</a>
                            <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore et dolore magnam. Naliquam quae.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="unit service-box">
                          <div class="unit-left"><span class="novi-icon icon icon-lg fa-image"></span></div>
                          <div class="unit-body"><a class="subtitle" href="#" data-toggle="modal" data-target="#modal-service-4">dunt ut labore et dolore magna aliquam lroep oirta lreo prota.</a>
                            <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore et dolore magnam. Naliquam quae.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><a class="close-content-box" href="#">x</a>
                </div>
                <div class="modal slideUp" id="modal-service-1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="content-box">
                        <div class="content-box-inner">
                          <div class="row">
                            <div class="col-12">
                              <h3>bermodi tempora incidunt ut labore et dolore magna maliquam</h3>
                              <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae.</p>
                              <p>Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempo. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea</p>
                            </div>
                          </div>
                        </div><a class="close-modal-content-box" href="#" data-dismiss="modal">x</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal slideUp" id="modal-service-2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="content-box">
                        <div class="content-box-inner">
                          <div class="row">
                            <div class="col-12">
                              <h3>cidunt ut labore t dolore magna maliqua mquaerat voleneni.</h3>
                              <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae.</p>
                              <p>Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempo. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea</p>
                            </div>
                          </div>
                        </div><a class="close-modal-content-box" href="#" data-dismiss="modal">x</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal slideUp" id="modal-service-3" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="content-box">
                        <div class="content-box-inner">
                          <div class="row">
                            <div class="col-12">
                              <h3>empora incidunt ut labore et dolore magna maliquam lroep oirta.</h3>
                              <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae.</p>
                              <p>Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempo. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea</p>
                            </div>
                          </div>
                        </div><a class="close-modal-content-box" href="#" data-dismiss="modal">x</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal slideUp" id="modal-service-4" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="content-box">
                        <div class="content-box-inner">
                          <div class="row">
                            <div class="col-12">
                              <h3>dunt ut labore et dolore magna aliquam lroep oirta lreo prota.</h3>
                              <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae.</p>
                              <p>Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempo. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea</p>
                            </div>
                          </div>
                        </div><a class="close-modal-content-box" href="#" data-dismiss="modal">x</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-1-4">
                <div class="content-box hide-on-modal">
                  <div class="row row-30 justify-content-center align-items-center">
                    <div class="col-12 col-md-7">
                      <!--RD Mailform-->
                      <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-14 gutters-14">
                          <div class="col-sm-6">
                            <div class="form-wrap">
                              <label class="form-label" for="contact-name">Name</label>
                              <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-wrap">
                              <label class="form-label" for="contact-phone">Phone</label>
                              <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-wrap">
                              <label class="form-label" for="contact-message">Message</label>
                              <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-wrap">
                              <label class="form-label" for="contact-email">E-Mail</label>
                              <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                            </div>
                          </div>
                          <div class="col-sm-6 align-self-end">
                            <div class="form-button">
                              <button class="button button-lg button-block button-primary" type="submit">Send</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-12 col-md-4">
                      <h3>Contact Info</h3>
                      <address class="subtitle">8901 Marmora Road,<br> Glasgow, D04 89GR.</address>
                      <ul class="contact-info">
                        <li><span>Freephone:</span><a href="tel:#">+1 800 559 6580</a></li>
                        <li><span>Telephone:</span><a href="tel:#">+1 800 603 6035</a></li>
                        <li><span>FAX:</span><a href="tel:#">+1 800 889 9898</a></li>
                        <li><span>E-mail:</span><a href="mailto:#">mail@demolink.org</a></li>
                      </ul>
                    </div>
                  </div><a class="close-content-box" href="#">x</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><a class="section section-banner d-xl-none" href="https://www.templatemonster.com/website-templates/monstroid2.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )" target="_blank"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="1600" height="310"></a>
      <!-- Page Footer-->
      <footer class="section footer-classic context-dark novi-background">
        <div class="container">
          <div class="footer-group">
            <ul class="list-inline list-inline-xs">
              <li><a class="novi-icon icon-xxs fa-facebook icon" href="#"></a></li>
              <li><a class="novi-icon icon-xxs fa-twitter icon" href="#"></a></li>
              <li><a class="novi-icon icon-xxs fa-google-plus icon" href="#"></a></li>
              <li><a class="novi-icon icon-xxs fa-vimeo icon" href="#"></a></li>
              <li><a class="novi-icon icon-xxs fa-youtube icon" href="#"></a></li>
              <li><a class="novi-icon icon-xxs fa-pinterest-p icon" href="#"></a></li>
            </ul>
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>.&nbsp;</span><a href="#" data-toggle="modal" data-target="#privacy">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com/">Templatemonster</a></p>
          </div>
        </div>
        <!-- Coded by JeremyLuis-->
      </footer>

      <div class="modal modal-centered slideUp" id="privacy" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="content-box">
              <div class="content-box-inner">
                <div class="row">
                  <div class="col-12">
                    <h3>Privacy Policy</h3>
                    <p>Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae.</p>
                    <p>Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea commodi consequatur. Aquis autem vel eum iure reprehenderit, muytasas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempo. Asas dresasaser. Esse, quam nihil molestiae consequatur, vel illum. Dastqui dolorem ipsumquia dolsitmet conse tequam eius. Asmodi tempora incid. Dent ut labore t dolore magnam. Naliquam quae. Rat voleneni ullam corporis suscipit labasic ut aliquidea</p>
                  </div>
                </div>
              </div><a class="close-modal-content-box" href="#" data-dismiss="modal">x</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by ragnar-->
</body>

</html>