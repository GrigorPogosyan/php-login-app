<?php
include "./Database/connection.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function loginActionHandle()
{
    global $DB;
    $nombre = $_REQUEST['userinput'];
    $pass = password_hash($_REQUEST['passinput'], PASSWORD_BCRYPT);
    $sqlSentence = "SELECT * FROM users WHERE usuario = '$nombre'";
    $user = $DB->query($sqlSentence)->fetchObject();
    if ($user and password_verify($user->password, $pass)) {
        $_SESSION['user'] = $nombre;
        $response = array(
            'status' => 'success',
            'message' => 'Login correcto'
        );
        echo json_encode($response);
        
    }
    else {
        $response = array(
            'status' => 'error',
            'message' => 'Login incorrecto'
        );
        echo json_encode($response);
    } 
}
    
