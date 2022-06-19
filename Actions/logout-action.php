<?php
function logoutActionHandle(){
    session_destroy();
    header("Location:index.php");
}