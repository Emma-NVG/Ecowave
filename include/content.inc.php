<?php
// Redirection if direct access <=> session not active
if (session_status() !== PHP_SESSION_ACTIVE) {
    header('Location:../?page=error404');
    exit();
}


/** @var $page */
switch ($page) {
    case EnumPages::Home:
        include_once('pages/home.inc.php');
        break;
    case EnumPages::Error404:
        include_once ('pages/error404.inc.php');
        break;
    default :
        // The page is reloaded by adding the page variable in GET method to the value EnumPages::Error404.
        header('Location:?page=' . EnumPages::Error404);
        exit();
}