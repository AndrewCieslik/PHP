{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}personList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id</th>
		<th>imię</th>
		<th>nazwisko</th>
		<th>telefon</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>

{if core\RoleUtils::inRole("user")}
	{foreach $people as $p}
		{if $p["id_user"] == {$id}}
			{strip}
				<tr>
					<td>{$p["id_user"]}</td>
					<td>{$p["name"]}</td>
					<td>{$p["surname"]}</td>
					<td>{$p["phone"]}</td>
					<td>
						<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id_user']}">Edytuj</a>
						&nbsp;
						{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
							<a class="button-small pure-button button-warning" href="{$conf->action_url}personDelete/{$p['id_user']}">Usuń</a>
						{/if}
					</td>
				</tr>
			{/strip}
		{/if}
	{/foreach}
{/if}

{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
		{foreach $people as $p}
			{strip}
				<tr>
					<td>{$p["id_user"]}</td>
					<td>{$p["name"]}</td>
					<td>{$p["surname"]}</td>
					<td>{$p["phone"]}</td>
					<td>
						<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id_user']}">Edytuj</a>
						&nbsp;
						<a class="button-small pure-button button-warning" href="{$conf->action_url}personDelete/{$p['id_user']}">Usuń</a>
					</td>
				</tr>
			{/strip}
		{/foreach}
	{/if}

</tbody>
</table>

{/block}
