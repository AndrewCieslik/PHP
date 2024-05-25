{extends file="main.tpl"}

{block name=top}
	<div class="bottom-margin">
	<form class="pure-form pure-form-stacked" action="{$conf->action_url}yachtList">
		<legend>Wyszukaj model jachtu: </legend>
		<fieldset>
			<input type="text" placeholder="np. Antila" name="sf_model" value="{$searchForm->model}" /><br />
			<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
		</fieldset>
	</form>
	</div>
{/block}

{block name=bottom}
	<table id="tab_people" class="pure-table pure-table-bordered">
		<thead>
			<tr>
				<th>model</th>
				<th>nazwa jachtu</th>
			</tr>
		</thead>
		<tbody>
		{foreach $people as $p}
		{strip}
			<tr>
				<td>{$p["model"]}</td>
				<td>{$p["yacht_name"]}</td>
			</tr>
		{/strip}
		{/foreach}
		</tbody>
		</table>
{/block}
