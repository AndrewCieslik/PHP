{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<div id="Head" class="container">
	<div class="row">
		<div class="col span_16">
			<h1 id="Domain">Login to calculator<br>
				<span>Free online calculator for your credit</span>
			</h1>
		</div>
	</div>
</div>
	<fieldset>
        <div class="col span_6">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="col span_6">
			<label for="id_pass">password: </label>
			<input id="id_pass" type="text" name="pass" /><br />
		</div>
		<div class="col span_6">
			<input type="submit" value="LOGIN" class="btn btn-large"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
