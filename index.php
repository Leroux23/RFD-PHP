<?php
/**
 * Created by PhpStorm.
 * User: Salomé
 * Date: 12/02/2019
 * Time: 09:57
 */
$message = "<h1>Je fais du PHP - boucle <em>for</em></h1> ";
$message .= "<ul>";
for($i = 0; $i < 11; $i++){
$message .= "<li>" . $i . "</li>";
}
$message .= "</ul>";
echo $message;
