<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição</title>
</head>
<body>
    <?php 
        echo "<p>Olá ". $_SESSION["nome"] .", seu cpf é ".
        $_SESSION["cpf"] ."</p>" ;
    ?>
</body>
</html>