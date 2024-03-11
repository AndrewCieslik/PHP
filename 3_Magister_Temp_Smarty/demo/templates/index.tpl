{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=foo}


{block name="content"}
    {$headerContent}
{/block}

{block name="mainmenu"}
    {$menuContent}
{/block}

{include file="menu.tpl"}


{$test}

{include file="footer.tpl"}
