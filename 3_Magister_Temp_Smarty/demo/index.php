<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require '../libs/Smarty.class.php';
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;


$smarty->assign("test", "This is the test");

$headerContent = '<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">    
    <p class="tagline">
        <i>Aplikacja testowa na potrzeby laboratorium - Naglowek</i>
    </p>    
</div>';

$footerContent = '<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">    
    <p class="tagline">
        <i>Aplikacja testowa na potrzeby laboratorium - Stopka</i></br>
        <b>template designed by Sergey Pozhilov (GetTemplate.com)</b>
    </p>	
</div>';

$menuContent = '<nav class="mainmenu">
    <div class="container">
        <div class="dropdown">
            <button type="button" class="navbar-toggle" data-toggle="dropdown">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="#head" class="active">Wstep</a></li>
                <li><a href="#about">O aplikacji</a></li>
                <li><a href="#themes">Oblicz rate kredytu</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>';


$smarty->assign('headerContent', $headerContent);
$smarty->assign('footerContent', $footerContent);
$smarty->assign('menuContent', $menuContent);

$smarty->display('index.tpl');
