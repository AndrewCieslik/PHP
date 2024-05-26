{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}yachtSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane jachtu</legend>
		<div class="pure-control-group">
            <label for="model">model</label>
            <input id="model" type="text" placeholder="model" name="model" value="{$form->model}">
        </div>
		<div class="pure-control-group">
            <label for="yacht_name">nazwa jachtu</label>
            <input id="yacht_name" type="text" placeholder="nazwa" name="yacht_name" value="{$form->yacht_name}">
        </div>
		<div class="pure-control-group">
			<label for="image">Zdjęcie jachtu</label>
			<input id="image" type="file" name="image">
		</div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}yachtList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_yacht" value="{$form->id_yacht}">
</form>	
</div>

{/block}
