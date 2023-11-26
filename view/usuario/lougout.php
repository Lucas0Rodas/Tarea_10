<?php
    session_start();
    unset($_SESSION["idUsuario"]);
    unset($_SESSION["usuario"]);
    session_destroy();
    header("location: ./tallerphp18/view/usuario/login.php")
?>