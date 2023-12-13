<?php 

    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location: login.php");
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Núcleos de Pesquisa</title>
    <?php include 'bases/head.php' ?>

    <style type="text/css">
        .carousel-item{
            height: 200px;
        } 
    </style>
</head>
<body>
<?php include 'bases/menu.php' ?><br>

<h1>Página de Perfil</h1>
<p>Olá</p>

<?php include 'bases/rodape.php' ?>