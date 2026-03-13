<?php
    session_start();

    if(isset($_SESSION['perfil'])){
        echo $_SESSION['usuario'] . "<br>";
        echo $_SESSION['perfil'] . "<br>";

        echo "<a href='aula0402.php?logout=true'> Logout </a>";

    }

    if(isset($_GET['logout']) && $_GET['logout']){
        session_destroy();
        echo "Você foi deslogado";
    }

?>