<?php
session_start();

// Listener om te checken of de AJAX request binnenkomt
if (isset($_GET['width'])) {
    $width = $_GET['width'];
    // Beetje random berekening aantal articles nu nog (kun je naar eigen inzicht aanpassen)
    $_SESSION['articles_per_page'] = floor($width / 100);
    // Teruggeven aan AJAX
    echo $_SESSION['articles_per_page'];
}