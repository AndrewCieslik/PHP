{extends file="main.tpl"}

{block name=top}

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

{block name=bottom}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}yachtNew">+ Nowy jacht</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>id jachtu</th>
		<th>model</th>
		<th>nazwa</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["id_yacht"]}</td>
		<td>{$p["model"]}</td>
		<td>{$p["name"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}yachtEdit/{$p['id_yacht']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}yachtDelete/{$p['id_yacht']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
