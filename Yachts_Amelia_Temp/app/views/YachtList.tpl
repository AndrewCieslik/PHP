{extends file="main.tpl"}

{block name=bottom}
	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}yachtList">
			<legend>Opcje wyszukiwania jachtów</legend>
			<fieldset>
				<input type="text" placeholder="model" name="sf_model" value="{$searchForm->model}" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>
{/block}

{block name=top}
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>Modele</th>
				<th>Nazwa</th>
				<th>jachty Naszej floty</th>
				{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
					<th>opcje</th>
				{/if}
			</tr>
		</thead>
		<tbody>
			{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
				<div class="bottom-margin">
					<a class="pure-button button-success" href="{$conf->action_root}yachtNew">+ Nowy jacht</a>
				</div>
			{/if}
			{foreach $yachts as $y}
				{strip}
					<tr>
						<td>{$y["model"]}</td>
						<td>{$y["yacht_name"]}</td>
						<td><img src="{$y.image}" alt="Yacht Image" style="max-width: 200px; max-height: 150px;" /></td>
						{if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
							<td>
								<a class="button-small pure-button button-secondary" href="{$conf->action_url}yachtEdit/{$y['id_yacht']}">Edytuj</a>
								<a class="button-small pure-button button-warning" href="{$conf->action_url}yachtDelete/{$y['id_yacht']}">Usuń</a>
							</td>
						{/if}
					</tr>
				{/strip}
			{/foreach}
		</tbody>
	</table>
{/block}
