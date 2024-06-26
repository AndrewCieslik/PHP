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
		<th>id jachtu</th>
		<th>id klienta</th>
		<th>data rozpoczęcia</th>
		<th>data zakończenia</th>
		<th>zatwierdź</th>
		<th>opcje</th>


	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["id_charter"]}</td>
		<td>{$p["id_yacht"]}</td>
		<td>{$p["id_user"]}</td>
		<td>{$p["date_start"]}</td>
		<td>{$p["date_end"]}</td>
		<td>{$p["approved"]}</td>

		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}charterEdit/{$p['id_charter']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}charterDelete/{$p['id_charter']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
