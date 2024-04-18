{extends file="main.tpl"}

{block name=top}

	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}yachtList">
		<legend>Panel kontrolny zarządzania charterami</legend>
	</form>
	</div>	

	<div class="pure-menu pure-menu-horizontal bottom-margin">
	
	<a href="{$conf->action_root}yachtList" class="pure-menu pure-menu-link">Lista jachtów</a>
	<a href="{$conf->action_root}personList" class="pure-menu pure-menu-link">Lista klientów</a>
	<a href="{$conf->action_root}charterList" class="pure-menu pure-menu-link">Lista charterów</a>

</div>
	
{/block}
