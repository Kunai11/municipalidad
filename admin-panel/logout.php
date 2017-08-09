<?php
    session_start();
    include('../cn/bdconexion.php');
    if (isset($_SESSION['username'])&&($_SESSION['rank'])) {
        session_destroy();
        header('Location: page-login.php');
    }else {
        echo '<h3>Operaci&oacute;n incorrecta.</h3>';
    }
?>