
<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	

<form action="<?php print(_APP_URL); ?>/app/calc.php" method="post">
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
</div> 