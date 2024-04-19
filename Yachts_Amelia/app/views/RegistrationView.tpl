{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}register" method="post" class="pure-form pure-form-aligned bottom-margin">
    <legend>Rejestracja nowego użytkownika</legend>
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Imię: </label>
            <input id="name" type="text" name="name" value="{$form->name}"/>
        </div>
        <div class="pure-control-group">
            <label for="surname">Nazwisko: </label>
            <input id="surname" type="text" name="surname" value="{$form->surname}"/>
        </div>
        <div class="pure-control-group">
            <label for="login">Login: </label>
            <input id="login" type="text" name="login" value="{$form->login}"/>
        </div>
        <div class="pure-control-group">
            <label for="password">Hasło: </label>
            <input id="password" type="TEXT" name="password" />
        </div>
		<div class="pure-control-group">
            <label for="password2">Powtórz hasło: </label>
            <input id="password2" type="TEXT" name="password2" />
        </div>
	
        <div class="pure-control-group">
            <label for="phone">Telefon: </label>
            <input id="phone" type="text" name="phone" value="{$form->phone}"/>
        </div>
        <div class="pure-controls">
            <input type="submit" value="Zarejestruj" class="pure-button pure-button-primary"/>
        </div>
    </fieldset>
</form>
{/block}
