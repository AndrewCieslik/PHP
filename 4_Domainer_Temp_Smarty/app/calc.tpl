{extends file="../templates/main.html"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}


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
            <?php
                if (isset($messages)) {
                    if (count ( $messages ) > 0) {
                    echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
                foreach ($messages as $msg) {
                echo '<li>'.$msg.'</li>';
                }
                echo '</ol>';
                }
                }
            ?>
    
            <?php if (isset($result)): ?>
            <div>
                <h2 class="col span_24">The value of the monthly loan: <span class="result-value"><?php echo $result; ?> zł</span></h2>
            </div>
                <?php endif; ?>
        </div>
    </form>
</div>	
{{/block}}