<!DOCTYPE html>
<html lang="en">
<head>

	<title>Magister - Free html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="../assets/images/gt_favicon.png">
	
	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles -->
	<link rel="stylesheet" href="../assets/css/magister.css">

	<!-- Fonts -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<?php
    include "../views/view_top.php";
?>

<section class="section" id="head">
    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	
        <?php
        if (isset($messages)) {
            foreach ($messages as $msg) {
                echo '<li>' . $msg . '</li>';
            }
            echo '</ol>';
        }
        ?>

        <?php if (isset($result)) { ?>
            
            <div class="result-container">
                <h3 class="text-center title">
                    <?php echo 'Wartosc miesiecznej raty: ' . $result . '  zl'; ?>
                </h3>
            </div>
        <?php } ?>
    </div> 	
</section>


<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	
    <a href="../index.php" class="btn btn-default btn-lg">Wroc</a>
</div>

<?php
    include "../views/view_footer.php";
?>

