<?php 

    $nota1 = "";
    $nota2 = "";
    $nota3 = "";
    $nota4 = "";
    $media = "";
    $resultado = "";
    $boton = "";

    if(isset ($_POST["calcular"])){
        $boton = $_POST["calcular"];

        if(isset($_POST["vl1"])){
            $nota1 = $_POST["vl1"];
        }
        if(isset($_POST["vl2"])){
            $nota2 = $_POST["vl2"];
        }
        if(isset($_POST["vl3"])){
            $nota3 = $_POST["vl3"];
        }
        if(isset($_POST["vl4"])){
            $nota4 = $_POST["vl4"];
        }

        $media = ($nota1*2 + $nota2*3 + $nota3*4 + $nota4*5)/14;
        
        $resultado = "A média é: ". $media;
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média ponderada de 4 números</title>
</head>
<body>
    <h1>Calcule sua média ponderada</h1>
    <form action="ListaExerc1_2.php" method="post">

        <p><label for="1v">Digite o 1° valor: <input type="text" name="vl1"></label></p>

        <p><label for="2v">Digite o 2° valor: <input type="text" name="vl2"></label></p>

        <p><label for="3v">Digite o 3° valor: <input type="text"  name="vl3"></label></p>

        <p><label for="4v">Digite o 4° valor: <input type="text" name="vl4"></label></p>
    
        <p><input type="submit" name="calcular" value="Calcule"></p>

        <p>Resultado: <?php echo $resultado ?></p>
    </form>
    
</body>
</html>