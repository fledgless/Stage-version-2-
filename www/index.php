<?php
session_start(); // global
define("SITE_URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

try {
    if (empty($_GET['page'])) {
        require 'views/accueil.view.php'; 
    } else {
        $url = explode("/", $_GET['page']);
        switch ($url[0]) {
            case 'presentation':
                require 'views/presentation.view.php';
                break;
            case 'nos-metiers':
                require 'views/metiers.view.php';
                break;
            case 'un-projet-professionnel':
                require 'views/projetprofessionnel.view.php';
                break;
            case 'actualites':
                require 'views/actualites.view.php';
                break;
            default:
                throw new Exception("La page n'existe pas."); // page d'erreur
                break;
        }
    }
} catch (Exception $e) {
    echo $e;
}