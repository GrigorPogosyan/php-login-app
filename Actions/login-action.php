<?php
include "./Database/connection.php";

function loginActionHandle()
{
    global $DB;
    $nombre = $_REQUEST['userinput'];
    $pass = $_REQUEST['passinput'];

    $sqlSentence = "SELECT * FROM users WHERE nombre = '$nombre' AND password = '$pass'";
    $result = $DB->query($sqlSentence)->fetchAll();

    if (count($result) == 1) {
        $_SESSION['user'] = $nombre;
        session_start();
        header("Location:./me.php");
    } else {
        $_SESSION['status-login'] = 'error';
    }
}

