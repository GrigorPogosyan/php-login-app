<?php
session_start();

if (!isset($_SESSION['user']) || is_null($_SESSION['user'])) {
    if (getLastSlug() != 'index.php') {
        header("Location:index.php");
    }
} else {
    if (getLastSlug() != 'me.php') {
        header("Location:me.php");
    }
}

function getLastSlug()
{
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/', $url);
    return $url[count($url) - 1];
}