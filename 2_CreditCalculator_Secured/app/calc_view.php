<?php
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo _APP_URL; ?>/css/style.css">
-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

</head>
<body style="background-image: url('<?php echo _BACKGROUND_IMAGE_URL; ?>');" class="body-background">

<div style="width:30%; margin: 2em auto;">
<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button custom-button">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form class="pure-form" action="<?php print(_APP_URL); ?>/app/calc.php" method="post">
        <label for="id_credit">Kwota kredytu: </label>
        <input id="id_credit" type="number" step="any" name="credit" min="1" required value="<?php if (isset($credit))
            print($credit); ?>" /><br />

        <label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="number" step="any" name="percent" min="0" required value="<?php if (isset($percent))
            print($percent); ?>" /><br />

        <label for="id_years">Liczba lat kredytu: </label>
        <input id="id_years" type="number" name="years" min="1" required value="<?php if (isset($years))
            print($years); ?>" /><br />
        <input type="submit" value="Oblicz miesięczną ratę" />
    </form>

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

<?php if (isset($result)){ ?>
<div class = "result-container">
<?php echo 'Wynik miesiecznej raty: '.$result; ?>
</div>
<?php } ?>

</div>

</body>
</html>