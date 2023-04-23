<?php 

    $valor = "";
    $botao = "";
    $resultado = "";

    $nota200 = "";
    $nota100 = "";
    $nota50 = "";
    $nota20 = "";
    $nota10 = "";
    $nota5 = "";
    $nota2 = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule sua grana decomposta</title>
</head>
<body>
    
    <form action="ListaExerc1_5.php" method="post">

        <h1>Calcule a sua grana decomposta</h1>

        <p><label for="vl">Digite seu valor em R$:  <input type="text" name="vl"></label></p>
        <p><input type="submit" value="Calcule" name="calculo"></p>

        <p>Notas de 200 R$: <?php echo $nota200?></p>
        <p>Notas de 100 R$: <?php echo $nota100?></p> 
        <p>Notas de 50 R$: <?php echo $nota50?></p>
        <p>Notas de 20 R$: <?php echo $nota20?></p> 
        <p>Notas de 10 R$: <?php echo $nota10?></p>
        <p>Notas de 5 R$: <?php echo $nota5?></p>
        <p>Notas de 2 R$: <?php echo $nota2?></p>

    </form> 

</body>
</html>