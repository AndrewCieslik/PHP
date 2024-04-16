{extends file="main.tpl"}

{block name=top_yacht}

{* <div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}personList">
	<legend>Opcje wyszukiwania jachtów</legend>
	<fieldset>
		<input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	 *}

{/block}

{block name=bottom_yacht}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowy jacht</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>model</th>
		<th>nazwa</th>
	</tr>
</thead>
<tbody>
{foreach $yachts as $y}
{strip}
	<tr>
		<td>{$p["model"]}</td>
		<td>{$p["name"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit/{$p['id_yacht']}">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}personDelete/{$p['id_yacht']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
