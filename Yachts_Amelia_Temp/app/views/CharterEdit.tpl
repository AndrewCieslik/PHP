{extends file="main.tpl"}

{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}charterSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane charteru</legend>
                    <div class="pure-control-group">
                        <label for="id_yacht">nazwa jachtu</label>
                        <select id="id_yacht" name="id_yacht">
                            {foreach from=$yachts item=yacht}
                                <option value="{$yacht.id_yacht}" {if $yacht.id_yacht == $form->id_yacht}selected{/if}>{$yacht.yacht_name}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="pure-control-group">
                        <label for="date_start">data rozpoczęcia</label>
                        <input id="date_start" type="date" placeholder="data startu" name="date_start" value="{$form->date_start}">
                    </div>
                    <div class="pure-control-group">
                        <label for="date_end">data zakończenia</label>
                        <input id="date_end" type="date" placeholder="data końca" name="date_end" value="{$form->date_end}">
                    </div>
                {if core\RoleUtils::inRole("user")}
                    <input type="hidden" name="approved" value="0">
                {/if}
                {if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
                    <div class="pure-control-group">
                        <div id="approved">
                            <label for="not_approved">
                                <input type="radio" id="not_approved" name="approved" value="0" {if $form->approved == '0'}checked{/if}>
                                Niezatwierdzony
                            </label>
                            <label for="approved">
                                <input type="radio" id="approved" name="approved" value="1" {if $form->approved == '1'}checked{/if}>
                                Zatwierdzony
                            </label>
                            <label for="rejected">
                                <input type="radio" id="rejected" name="approved" value="2" {if $form->approved == '2'}checked{/if}>
                                Odrzucony
                            </label>
                        </div>
                    </div>
                {/if}
                    <div class="pure-controls">
                        <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                        <a class="pure-button button-secondary" href="{$conf->action_root}charterList">Powrót</a>
                    </div>
            </fieldset>
            <input type="hidden" name="id_charter" value="{$form->id_charter}">
            <input type="hidden" name="id_user" value="{$form->id_user}">
        </form>
    </div>
{/block}
