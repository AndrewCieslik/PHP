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



$smarty->assign('headerContent', $headerContent);
$smarty->display('index.tpl');
