{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}roleSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Role:</legend>
		<div class="pure-control-group">
            <label for="model">role</label>
            <input id="model" type="text" placeholder="model" name="model" value="{$form->role}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}roleEdit">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_yacht" value="{$form->id_role}">
</form>	
</div>

{/block}
