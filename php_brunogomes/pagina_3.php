<?php
    session_start();
    $_SESSION["nome"];
    $_SESSION["cpf"];

    if(isset($_POST["cad"])){
        if(isset($_POST["nome"])){
            $_SESSION["nome"] = $_POST["nome"]; 
        }
        if(isset($_POST["cpf"])){
            $_SESSION["cpf"] = $_POST["cpf"]; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvamento</title>
</head>
<body>
    <a href="pagina_1.html">Voltar</a>
</body>
</html>