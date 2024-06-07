{extends file="main.tpl"}

{block name=top}
    <div class="bottom-margin">
        <form class="pure-form pure-form-stacked" action="{$conf->action_url}charterList">
            <legend>Opcje wyszukiwania</legend>
            <fieldset>
{*                <input type="text" placeholder="numer charteru" name="sf_charter" value="{$searchForm->id_charter}" /><br />*}
                {if !core\RoleUtils::inRole("user")}
                    <select name="sf_yacht_name">
                        <option value="">Wybierz jacht</option>
                        {foreach $yachts as $yacht}
                            <option value="{$yacht}" {if $searchForm->yacht_name == $yacht}selected{/if}>{$yacht}</option>
                        {/foreach}
                    </select><br />
                    <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
                {/if}


            </fieldset>
        </form>
    </div>
    {if core\RoleUtils::inRole("user")}
        <div class="bottom-margin">
            <a class="pure-button button-success" href="{$conf->action_root}charterNew">+ Nowy charter</a>
        </div>
    {/if}
{/block}

{block name=bottom}

    <table id="tab_people" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>nazwa jachtu</th>
            <th>data rozpoczecia</th>
            <th>data zakonczenia</th>
            {if core\RoleUtils::inRole("user") or core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
                <th>imie sternika</th>
                <th>nazwisko</th>
            {/if}
            {if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
                <th>status</th>
            {/if}
            {if core\RoleUtils::inRole("user") or core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
                <th>opcje</th>
            {/if}
        </tr>
        </thead>
        <tbody>
        {if !core\RoleUtils::inRole("user") and !core\RoleUtils::inRole("manager") and !core\RoleUtils::inRole("admin")}
            {foreach $charters as $p}
                {strip}
                    <tr>
                        <td>{$p["yacht_name"]}</td>
                        <td>{$p["date_start"]}</td>
                        <td>{$p["date_end"]}</td>
                    </tr>
                {/strip}
            {/foreach}
        {/if}
        {if core\RoleUtils::inRole("user")}
            {foreach $charters as $p}
                {if $p["id_user"] == {$_SESSION['id']}}
                    {strip}
                        <tr>
                            <td>{$p["yacht_name"]}</td>
                            <td>{$p["date_start"]}</td>
                            <td>{$p["date_end"]}</td>
                            <td>{$p["name"]}</td>
                            <td>{$p["surname"]}</td>
                            <td>
                                <a class="button-small pure-button button-secondary" href="{$conf->action_url}charterEdit/{$p['id_charter']}">Edytuj</a>
                                <a class="button-small pure-button button-warning" href="{$conf->action_url}charterDelete/{$p['id_charter']}">Usuń</a>
                            </td>
                        </tr>
                    {/strip}
                {/if}
            {/foreach}
        {/if}
        {if core\RoleUtils::inRole("manager") or core\RoleUtils::inRole("admin")}
            {foreach $charters as $p}
                {strip}
                    <tr>
                        <td>{$p["yacht_name"]}</td>
                        <td>{$p["date_start"]}</td>
                        <td>{$p["date_end"]}</td>
                        <td title="ID: {$p["id_user"]}">{$p["name"]}</td>
                        <td title="ID: {$p["id_user"]}">{$p["surname"]}</td>
                        <td style="color: {if $p['approved'] == 1}green{elseif $p['approved'] == 2}red{else}black{/if}">
                            {if {$p["approved"]} == 0}
                                Niezatwierdzony
                            {elseif {$p["approved"]} == 1}
                                Zatwierdzony
                            {elseif {$p["approved"]} == 2}
                                Odrzucony
                            {/if}
                        <td>
                            <a class="button-small pure-button button-secondary" href="{$conf->action_url}charterEdit/{$p['id_charter']}">Edytuj</a>
                            <a class="button-small pure-button button-warning" href="{$conf->action_url}charterDelete/{$p['id_charter']}">Usuń</a>
                        </td>
                    </tr>
                {/strip}
            {/foreach}
        {/if}
        </tbody>
    </table>
{/block}