<?php 

    $a = "";
    $b = "";
    $c = "";
    $x1 = "";
    $x2 = "";
    $delta = "";
    $boton = "";

    if(isset ($_POST["calcular"])){
        $boton = $_POST["calcular"];

        if(isset ($_POST["valora"])){
            $a = $_POST["valora"];
        }else if(empty("valora")){
            echo "<script>alert('Falta o valor de a')</script>";
        }

        if(isset ($_POST["valorb"])){
            $b = $_POST["valorb"];
        }else if(empty("valorb")){
            echo "<script>alert('Falta o valor de b')</script>";
        }

        if(isset ($_POST["valorc"])){
            $c = $_POST["valorc"];
        }else if(empty("valorc")){
            echo "<script>alert('Falta o valor de c')</script>";
        }

        $delta = pow($b, 2)-4*$a*$c;

        $x1 = (-$b + sqrt($delta))/2*$a ;
        $x2 = (-$b - sqrt($delta))/2*$a ;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtenha sua equação de 2° grau</title>
</head>
<body>

    <form action="ListaExerc1_1.php" method="post">
        <h1>Calcule sua equação de 2° grau</h1>

        <p><label for="nt1">Digite a nota a: <input type="text" name="valora"></label></p>

        <p><label for="nt2">Digite a nota b: <input type="text" name="valorb"></label></p>

        <p><label for="nt3">Digite a nota c: <input type="text"  name="valorc"></label></p>

        <p><input type="submit" name="calcular" value="Calcule"></p>

        <p>O valor de X1: <?php echo $x1 ?></p>
        <p>O valor de X2: <?php echo $x2 ?></p>

    </form>

</body>