{extends file="../templates/main.html"}

{block name = content}
    <div id="Head" class="container">
        <div class="row">
            <div class="col span_16">
                <h1 id="Domain">Credit Calculator<br>
                    <span>Free online calculator for your credit</span>
                </h1>
            </div>
        </div>
    </div>

    <div id="Content" class="container">

        <div class="row special">
            <div class="col span_24">
                <h3 class="align-center">Before proceeding with your loan application, please be aware that taking a loan
                    involves financial risks and careful consideration of repayment terms.</h3>
            </div>
        </div>
        {block name=calc}
        {/block}

        <div class="row padding">
        </div>

        <hr class="divider">

        <div class="row padding">

            <div class="col span_8">
                <div class="circle"><i class="icon icon-support"></i></div>
                <h3 class="align-center">Simple Loan Calculation</h3>
                <p class="align-center">Planning your finances is crucial. CreditCalculator offers a user-friendly loan
                    calculator to help you estimate your monthly payments.</p>
            </div>

            <div class="col span_8">
                <div class="circle"><i class="icon icon-stockup"></i></div>
                <h3 class="align-center">Accurate Results</h3>
                <p class="align-center">Our loan calculator provides precise estimates based on your inputs, ensuring you
                    have a clear understanding of your financial obligations.</p>
            </div>

            <div class="col span_8">
                <div class="circle"><i class="icon icon-briefcase"></i></div>
                <h3 class="align-center">Customizable Options</h3>
                <p class="align-center">Tailor your loan parameters to suit your needs. CreditCalculator empowers you to
                    adjust variables such as loan amount, interest rate, and term.</p>
            </div>

            <div class="row padding">

                <div class="col span_8">
                    <h2>About CreditCalculator</h2>
                    <p>At CreditCalculator, we understand the significance of informed financial decisions. Our platform
                        offers comprehensive information about loans and provides valuable tools like our loan calculator to
                        assist you in managing your finances effectively.</p>
                    <p>Discover the potential of smart financial planning with CreditCalculator.</p>
                </div>
                <div class="col span_16">
                    <h2>Calculate Your Monthly Loan Payment</h2>
                    <div id="Offer">
                        <div class="row">
                            <div class="col span_12">
                                <input type="text" placeholder="Your Name" id="f_name" name="f_name">
                            </div>
                            <div class="col span_12">
                                <input type="text" placeholder="Your email address" id="f_email" name="f_email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span_24">
                                <textarea id="f_offer" name="f_offer"
                                    rows="10">I would like to calculate my monthly loan payment.</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span_24 align-right">
                                <button class="btn btn-large" type="button">Calculate</button>
                                <div class="subscribe">
                                    <input type="checkbox" name="f_subscribe" id="f_subscribe" value="yes"><label
                                        for="f_subscribe"> <i></i>Subscribe to our newsletter</label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of offer form -->

                    <!-- Result Messages -->
                    <div class="row" id="error_msg">
                        <div class="col span_24">
                            <b>Sorry, but there were errors found with the form you submitted:
                                <i></i></b>
                            <br><a href="javascript:void(0);" id="new_try">Try Again</a>
                        </div>
                    </div>
                    <div class="row" id="msg">
                        <div class="col span_24">
                            <b>Calculation Sent!</b>
                            <br><a href="javascript:void(0);" id="new_offer">Calculate Another?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content-end" class="container"></div>
    {/block}}

    {block name=calc}
        <div style="width:90%; margin: 3em auto;">
            <form class="" action="{$app_url}/app/calc.php" method="post">
                <br />
                <div class="col span_24">
                    <label for="id_percent">
                        <h1>Credit:</h1>
                    </label><br />
                </div>

                <div class="col span_12">
                    <input type="text" placeholder="Your credit value" id="id_credit" name="credit" />
                </div>

                <div class="col span_24">
                    <label for="id_percent">
                        <h1>Percent:</h1>
                    </label><br />
                </div>

                <div class="col span_12">
                    <input type="text" placeholder="Percent value" id="id_percent" name="percent" />
                </div>

                <div class="col span_24">
                    <label for="id_years">
                        <h1>Number of years: </h1>
                    </label><br />
                </div>

                <div class="col span_12">
                    <input type="text" placeholder="Credit lenght in years" id="id_years" name="years" />
                </div>

                <div class="col span_24">
                    <input class="btn btn-icon btn-block" value="Count monthly loan" type="submit"><br />

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
    <div id="Footer" class="container">
		<div class="row top">
			<div class="col span_16">Copyright &copy; 2014, Domain holder. All rights reserved.</div>
			<div class="col span_8 align-right">Design: <a href="http://www.gettemplate.com/">GetTemplate</a></div>
		</div>
	</div>
{block name=footer}

{/block}