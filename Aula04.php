<?php
    session_start();

    $_SESSION['usuario'] = "murillo@gmail.com";
    $_SESSION['is_logged'] = true;
    $_SESSION['perfil'] = "admin";

    setcookie("usuario", "Sergio", time() + (86400 * 2)); // 

