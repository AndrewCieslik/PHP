{extends file="main.tpl"}

{block name=top_yacht}

<div class="bottom-margin">
<form action="{$conf->action_root}yachtSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane jachtu</legend>
		<div class="pure-control-group">
            <label for="model">model</label>
            <input id="model" type="text" placeholder="model" name="model" value="{$form->model}">
        </div>
		<div class="pure-control-group">
            <label for="name">nazwa</label>
            <input id="name" type="text" placeholder="nazwa" name="name" value="{$form->name}">
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
