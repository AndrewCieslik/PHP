{extends file="main.tpl"}

{block name=top}
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}charterList">
		<legend>Opcje wyszukiwania</legend>
		<fieldset>
			<input type="text" placeholder="numer charteru" name="sf_charter" value="{$searchForm->id_charter}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
	</form>
	</div>
{/block}

{block name=bottom}
	<div class="bottom-margin">
	<a class="pure-button button-success" href="{$conf->action_root}charterNew">+ Nowy charter</a>
	</div>

	<table id="tab_people" class="pure-table pure-table-bordered">
	<thead>
		<tr>
			<th>id charteru</th>
			<th>id klienta</th>
			<th>numer jachtu (id)</th>
			<th>data rozpoczecia</th>
			<th>data zakonczenia</th>
			<th>imie sternika</th>
			<th>nazwisko</th>
			<th>zatwierdz [0/1]</th>
			{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
				<th>opcje</th>

			{/if}
		</tr>
	</thead>
	<tbody>
	{if core\RoleUtils::inRole("user")}
		{foreach $charters as $p}
			{if $p["id_user"] == {$id}}
				{strip}
					<tr>
						<td>{$p["id_charter"]}</td>
						<td>{$p["id_user"]}</td>
						<td>{$p["id_yacht"]}</td>
						<td>{$p["date_start"]}</td>
						<td>{$p["date_end"]}</td>
						<td>{$p["name"]}</td>
						<td>{$p["surname"]}</td>
						<td>{$p["approved"]}</td>
						<td>
							<a class="button-small pure-button button-secondary" href="{$conf->action_url}charterEdit/{$p['id_charter']}">Edytuj</a>
						</td>
					</tr>
				{/strip}
			{/if}
		{/foreach}
	{/if}
	{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
		{foreach $charters as $p}
			{strip}
				<tr>
					<td>{$p["id_charter"]}</td>
					<td>{$p["id_user"]}</td>
					<td>{$p["id_yacht"]}</td>
					<td>{$p["date_start"]}</td>
					<td>{$p["date_end"]}</td>
					<td>{$p["name"]}</td>
					<td>{$p["surname"]}</td>
					<td>{$p["approved"]}</td>
					<td>
						<a class="button-small pure-button button-secondary" href="{$conf->action_url}charterEdit/{$p['id_charter']}">Edytuj</a>
						<a class="button-small pure-button button-warning" href="{$conf->action_url}charterDelete/{$p['id_charter']}">Usuń</a>
					</td>
				</tr>
			{/strip}
		{/foreach}
	{/if}
	</tbody>
	</table>
{/block}
