{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}charterSave_user" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane charteru</legend>
		<div class="pure-control-group">
            <label for="name">Numer jachtu*</label>
            <input id="name" type="text" placeholder="imię" name="name" value="{$form->id_yacht}">
        </div>
		<div class="pure-control-group">
            <label for="surname">Data rozpoczęcia</label>
            <input id="surname" type="text" placeholder="data startu" name="date_start" value="{$form->date_start}">
        </div>
		<div class="pure-control-group">
            <label for="phone">Data zakończenia</label>
            <input id="phone" type="text" placeholder="data końca" name="date_end" value="{$form->date_end}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}charterList_user">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="{$form->id_user}">
</form>	
</div>

{/block}
