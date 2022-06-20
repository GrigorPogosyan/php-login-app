<?php
include "./Database/connection.php";

function loginActionHandle()
{
    global $DB;
    $nombre = $_REQUEST['userinput'];
    $pass = password_hash($_REQUEST['passinput'], PASSWORD_BCRYPT);
    $sqlSentence = "SELECT * FROM users WHERE nombre = '$nombre'";
    $user = $DB->query($sqlSentence)->fetchObject();
    if ($user and password_verify($user->password, $pass)) {
        $_SESSION['user'] = $nombre;
        session_start();
        header("Location:./me.php");
    }
    else {
        $_SESSION['status-login'] = "error";
    } 
}
    
