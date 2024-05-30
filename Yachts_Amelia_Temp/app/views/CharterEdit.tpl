{extends file="main.tpl"}

{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}charterSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane charteru</legend>
                    <div class="pure-control-group">
                        <label for="id_user">id klienta</label>
                        <input id="id_user" type="text" placeholder="id klienta" name="id_user" value=>
                    </div>
                    <div class="pure-control-group">
                        <label for="id_yacht">id jachtu</label>
                        <input id="id_yacht" type="text" placeholder="id jachtu" name="id_yacht" value={$form->id_yacht}>
                    </div>
                    <div class="pure-control-group">
                        <label for="date_start">data rozpoczęcia</label>
                        <input id="date_start" type="date" placeholder="data startu" name="date_start" value="{$form->date_start}">
                    </div>
                    <div class="pure-control-group">
                        <label for="date_end">data zakończenia</label>
                        <input id="date_end" type="date" placeholder="data końca" name="date_end" value="{$form->date_end}">
                    </div>
                    <div class="pure-control-group">
                        <label for="approved">zatwierdź [0/1]</label>
                        <input id="approved" type="text" placeholder="[0-nie/ 1-tak]" name="approved" value="0">
                    </div>

                    <div class="pure-controls">
                        <input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
                        <a class="pure-button button-secondary" href="{$conf->action_root}charterList">Powrót</a>
                    </div>
            </fieldset>
            <input type="hidden" name="id_charter" value="{$form->id_charter}">
        </form>
    </div>
{/block}
