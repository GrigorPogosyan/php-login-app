<?php
if (isset($_SESSION['status-login'])) {
    if ($_SESSION['status-login'] == 'error') {
        echo '<script>const element = document.getElementById("invisible-1");
        element.remove();</script>
        <div class="alert alert-danger fade-in-div" role="alert">Usuario o contrasenya incorrectos!</div>';
        unset($_SESSION['status-login']);
    }
}
