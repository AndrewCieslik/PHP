{extends file="main.tpl"}

{block name=top}
	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}logList" method="post">
			<legend>Wybierz plik logów do wyświetlenia</legend>
			<fieldset>
				<input type="text" placeholder="Nazwa pliku logów" name="logFile" value="{$logForm->logFile}" /><br />
				<button type="submit" class="pure-button pure-button-primary">Wyświetl logi</button>
			</fieldset>
		</form>
	</div>
{/block}

{block name=bottom}
	<div class="log-content">
        <pre>
            {foreach $logContent as $line}
				{$line}
			{/foreach}
        </pre>
	</div>
{/block}
