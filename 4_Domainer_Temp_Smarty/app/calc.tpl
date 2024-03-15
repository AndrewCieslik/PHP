{extends file="../templates/main.html"}

{block name=content}
    <div style="width:90%; margin: 3em auto;">
        <form class=""  action="{$app_url}/app/calc.php" method="post">
            <br />
            <div class="col span_24">
                <label for="id_percent"><h1>Credit:</h1></label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Your credit value" id="id_credit" name="credit"/>
            </div>

            <div class="col span_24">
                <label for="id_percent"><h1>Percent:</h1></label><br />
            </div>

            <div class="col span_12">
                <input type="text" placeholder="Percent value" id="id_percent" name="percent" />
            </div>

            <div class="col span_24">
                <label for="id_years"><h1>Number of years: </h1></label><br />
            </div>
            
            <div class="col span_12">
                <input type="text" placeholder="Credit lenght in years" id="id_years" name="years"/>
            </div>
            
            <div class="col span_24">
                <input class="btn btn-icon btn-block"  value="Count monthly loan" type="submit"><br />

                    {if isset($messages)}
                        {if count($messages) > 0} 
                            <h3>Wystąpiły błędy: </h3>
                            <ol class="err">
                            {foreach  $messages as $msg}
                            {strip}
                                <li>{$msg}</li>
                            {/strip}
                            {/foreach}
                            </ol>
                        {/if}
                    {/if}

                    {if isset($infos)}
                        {if count($infos) > 0} 
                            <h3>Informacje: </h3>
                            <ol class="inf">
                            {foreach  $infos as $msg}
                            {strip}
                                <li>{$msg}</li>
                            {/strip}
                            {/foreach}
                            </ol>
                        {/if}
                    {/if}

                    {if isset($result)}
                        <h2>Wynik</h2>
                        <p class="res">
                        <h1>{$result} zl</h1>
                        </p>
                    {/if}
            </div>
        </form>
    </div>	
{{/block}}

{block name=header}{/block}
{block name=footer}{/block}
