{extends file="main.tpl"}

{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}charterSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane charteru</legend>
                    <div class="pure-control-group">
                        <label for="date_start">data rozpoczęcia</label>
                        <input id="date_start" type="date" placeholder="data startu" name="date_start" value="{$form->date_start}">
                    </div>
                    <div class="pure-control-group">
                        <label for="date_end">data zakończenia</label>
                        <input id="date_end" type="date" placeholder="data końca" name="date_end" value="{$form->date_end}">
                    </div>
{*                lista*}
                <div class="pure-control-group">
                    <label for="yacht_name">Nazwa wybranego jachtu</label>
                    <select id="yacht_name" name="yacht_name">
                        <option value="" disabled selected>Wybierz jacht</option>
                        {foreach $yachts as $yacht}
                            <option value="{$yacht.id_jacht}" {if $form->yacht_name == $yacht.id_jacht}selected{/if}>{$yacht.yacht_name}</option>
                        {/foreach}
                    </select>
                </div>


{*                {if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}*}
{*                    <div class="pure-control-group">*}
{*                        <label for="id_user">id klienta</label>*}
{*                        <input id="id_user" type="text" placeholder="id klienta" name="id_user" value={$form->id_user}>*}
{*                    </div>*}
                    <div class="pure-control-group">
                        <label for="approved">zatwierdź [0/1]</label>
                        <input id="approved" type="text" placeholder="[0-nie/ 1-tak]" name="approved" value="0">
                    </div>
                    <div class="pure-control-group">
                        <label for="id_user">id klienta</label>
                        <input id="id_user" type="text" placeholder="id klienta" name="id_user" value="{$_SESSION['id']}">
                    </div>
{*                {/if}*}
{*                {if core\RoleUtils::inRole("user")}*}
{*                    <input id="approved" type="text" placeholder="[0-nie/ 1-tak]" name="approved" value="0" hidden>*}
{*                    <div class="pure-control-group">*}
{*                        <label for="id_user">id klienta</label>*}
{*                        <input id="id_user" type="text" placeholder="id klienta" name="id_user" value="{$_SESSION['id']}">*}
{*                    </div>*}
{*                {/if}*}
                    <div class="pure-controls">
                        <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                        <a class="pure-button button-secondary" href="{$conf->action_root}charterList">Powrót</a>
                    </div>
            </fieldset>
            <input type="hidden" name="id_charter" value="{$form->id_charter}">
        </form>
    </div>
{*{/block}*}
