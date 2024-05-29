{extends file="main.tpl"}

{block name=top}
	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}roleList">
			<legend>Przypisane role:</legend>
			<fieldset>
				<input type="text" placeholder="role" name="sf_role" value="{$searchForm->role}" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>
{/block}

{block name=bottom}
	<div class="bottom-margin">
		<a class="pure-button button-success" href="{$conf->action_root}roleNew">+ Nowa rola</a>
	</div>
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>role</th>
				<th>opcje</th>
			</tr>
		</thead>
		<tbody>
			{foreach $people as $p}
				{strip}
					<tr>
						<td>{$p["role"]}</td>
						<td>
							<a class="button-small pure-button button-secondary" href="{$conf->action_url}roleEdit/{$p['id_role']}">Edytuj</a>
							<a class="button-small pure-button button-warning" href="{$conf->action_url}roleDelete/{$p['id_role']}">Usuń</a>
						</td>
					</tr>
				{/strip}
			{/foreach}
		</tbody>
	</table>
{/block}
