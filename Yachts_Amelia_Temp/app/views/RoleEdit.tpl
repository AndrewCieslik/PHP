{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}roleSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Role:</legend>
		<div class="pure-control-group">
            <label for="role">role</label>
            <input id="role" type="text" placeholder="role" name="role" value="{$form->role}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}roleList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_role" value="{$form->id_role}">
</form>	
</div>

{/block}
