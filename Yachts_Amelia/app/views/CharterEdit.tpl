{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}charterSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane charteru</legend>
		<div class="pure-control-group">
            <label for="name">id jachtu</label>
            <input id="id_yacht" type="text" placeholder="id jachtu" name="id_yacht" value="{$form->id_yacht}">
        </div>
        <div class="pure-control-group">
            <label for="date_end">id klienta</label>
            <input id="id_user" type="text" placeholder="id klienta" name="id_user" value="{$form->id_user}">
        </div>
		<div class="pure-control-group">
            <label for="date_start">Data rozpoczęcia</label>
            <input id="date_start" type="text" placeholder="data startu" name="date_start" value="{$form->date_start}">
        </div>
		<div class="pure-control-group">
            <label for="date_end">Data zakończenia</label>
            <input id="date_end" type="text" placeholder="data końca" name="date_end" value="{$form->date_end}">
        </div>
        <div class="pure-control-group">
            <label for="approved">Zatwierdź</label>
            <input id="approved" type="text" placeholder="zatwierdź [0/1]" name="approved" value="{$form->approved}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}charterList">Powrót</a>
		</div>
	</fieldset>
</form>	
</div>

{/block}
