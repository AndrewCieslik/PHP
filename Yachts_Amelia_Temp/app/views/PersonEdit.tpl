{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
		<div class="pure-control-group">
            <label for="name">imię</label>
            <input id="name" type="text" placeholder="imię" name="name" value="{$form->name}">
        </div>
		<div class="pure-control-group">
            <label for="surname">nazwisko</label>
            <input id="surname" type="text" placeholder="nazwisko" name="surname" value="{$form->surname}">
        </div>
		<div class="pure-control-group">
            <label for="phone">telefon</label>
            <input id="phone" type="text" placeholder="telefon" name="phone" value="{$form->phone}">
        </div>
        <div class="pure-control-group">
            <label for="password">hasło</label>
            <input id="password" type="password" name="password" value="{$form->password}">
        </div>
        <div class="pure-control-group">
            <label for="password2">powtórz hasło</label>
            <input id="password2" type="password" name="password2" value="{$form->password2}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}personList">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id_user" value="{$form->id_user}">
</form>	
</div>

{/block}
