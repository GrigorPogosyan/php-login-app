<?php
include "./Actions/login-action.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_REQUEST['action']){
        case 'login':
            loginActionHandle();
            break;
    }
}