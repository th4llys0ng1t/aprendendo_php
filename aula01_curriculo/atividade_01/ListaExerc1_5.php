<?php 

    $valor = "";
    $botao = "";
    $resultado = "";
    $resto = "";

    $nota100 = "";
    $nota50 = "";
    $nota20 = "";
    $nota10 = "";
    $nota5 = "";
    $moeda1 = "";

    if(isset($_POST["calculo"])){
        $botao = $_POST["calculo"];

        if(isset($_POST["vl"])){
            $valor = $_POST["vl"];
        }

        
    }

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

        <p>O valor digitado foi: <?php echo $valor ?>, decomposto em...</p>

        <p>Notas de 100 R$: <?php echo $nota100?></p> 
        <p>Notas de 50 R$: <?php echo $nota50?></p>
        <p>Notas de 20 R$: <?php echo $nota20?></p> 
        <p>Notas de 10 R$: <?php echo $nota10?></p>
        <p>Notas de 5 R$: <?php echo $nota5?></p>
        <p>Moedas de 1 R$: <?php echo $moeda1?></p>

    </form> 

</body>
</html>