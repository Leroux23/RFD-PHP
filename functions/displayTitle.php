<?php
function displayTitle() : string
{
    $titre = "Comment faire du PHP - ";
    $pages = isset($_GET) ? $_GET['pages'] : "accueil";
    $titre .= ucfirst($pages);
    return $titre;
}