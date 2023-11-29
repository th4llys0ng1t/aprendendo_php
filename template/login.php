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

    <h2>Login</h2>
    <form action="php/login_bd.php" method="post">
        
        <p>
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </p>

        <p><input type="submit" value="Cadastrar"></p>
    </form>

    <?php include 'bases/rodape.php' ?>
</body>


