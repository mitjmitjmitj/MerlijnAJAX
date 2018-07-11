<?php
session_start();

// Eerste keer dat de pagina geladen wordt moet er direct een default waarde zijn (in dit geval 0)
// Deze wordt overschreven zodra de pagina volledig geladen is
$_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 0;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Voorbeeld voor Merlijn</h1>
<div>Huidige breedte van window: <span id="count"></span></div>
<!--<div>Huidige waarde van de variabele $articles_per_page:-->
    <?php
    echo '<span id="articles">' . $_SESSION['articles_per_page'] . '</span>';
    ?>

</div>
<script src="script.js"></script>
</body>
</html>