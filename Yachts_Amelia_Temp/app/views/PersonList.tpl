{extends file="main.tpl"}

{block name=top}
	{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
		<div class="bottom-margin">
			<form class="pure-form pure-form-stacked" action="{$conf->action_url}personList">
				<legend>Opcje wyszukiwania</legend>
				<fieldset>
					<input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
					<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
				</fieldset>
			</form>
		</div>
	{/if}
{/block}

{block name=bottom}
	{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
		<div class="bottom-margin">
			<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowa osoba</a>
		</div>
	{/if}
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
		<tr>
			<th>imię</th>
			<th>nazwisko</th>
			<th>telefon</th>
			{if core\RoleUtils::inRole("admin") or core\RoleUtils::inRole("user")}
				<th>opcje</th>
			{/if}
		</tr>
		</thead>
		<tbody>
		{if core\RoleUtils::inRole("user")}
			{foreach $people as $p}
				{if $p["id_user"] == {$id}}
					{strip}
						<tr>
							<td>{$p["name"]}</td>
							<td>{$p["surname"]}</td>
							<td>{$p["phone"]}</td>
							<td>
								<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id_user']}">Edytuj</a>
							</td>
						</tr>
					{/strip}
				{/if}
			{/foreach}
		{/if}
		{if core\RoleUtils::inRole("manager")}
			{foreach $people as $p}
				{strip}
					<tr>
						<td title="ID: {$p['id_user']}">{$p["name"]}</td>
						<td title="ID: {$p['id_user']}">{$p["surname"]}</td>
						<td>{$p["phone"]}</td>
					</tr>
				{/strip}
			{/foreach}
		{/if}
		{if core\RoleUtils::inRole("admin")}
			{foreach $people as $p}
				{strip}
					<tr>
						<td title="ID: {$p['id_user']} login: {$p['login']}">{$p["name"]}</td>
						<td title="ID: {$p['id_user']} login: {$p['login']}">{$p["surname"]}</td>
						<td>{$p["phone"]}</td>
						<td>
							<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id_user']}">Edytuj</a>
							<a class="button-small pure-button button-warning" href="{$conf->action_url}personDelete/{$p['id_user']}">Usuń</a>
						</td>
					</tr>
				{/strip}
			{/foreach}
		{/if}
		</tbody>
	</table>
{/block}