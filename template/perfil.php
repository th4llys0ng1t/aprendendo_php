<?php 

    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location: login.php");
        die();
    }

?>

<h1>Página de Perfil</h1>
<p>Olá</p>