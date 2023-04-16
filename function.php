<?php
require_once __DIR__ . '/classes/connexion-message.php';
function redirect($url){
    header("Location:$url");
    die();
}