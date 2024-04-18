{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}charterSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane charteru</legend>
		<div class="pure-control-group">
            <label for="name">Numer jachtu*</label>
            <input id="id_yacht" type="text" placeholder="imię" name="id_yacht" value="{$form->id_yacht}">
        </div>
		<div class="pure-control-group">
            <label for="date_start">Data rozpoczęcia</label>
            <input id="date_start" type="text" placeholder="data startu" name="date_start" value="{$form->date_start}">
        </div>
		<div class="pure-control-group">
            <label for="date_end">Data zakończenia</label>
            <input id="date_end" type="text" placeholder="data końca" name="date_end" value="{$form->date_end}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}charterList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="{$form->id_user}">
</form>	
</div>

{/block}
