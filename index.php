<?php
date_default_timezone_set('Europe/Paris');
include "./includes/header.php";


if (isset($_GET['pages'])){
    $pages = $_GET['pages'];
}
else {
    $pages="accueil";
}
$path = "./includes/";
$contenu = glob($path . "*.inc.php");
$pages = $path . $pages . ".inc.php";

if (in_array($pages,$contenu)){
    include $pages;
}
else {
    include "./includes/accueil.inc.php";
}



$pages = "./includes/" . $pages . ".php";
include $pages;

include "./includes/footer.php";

