<block name=Ribbon">
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
{/block}