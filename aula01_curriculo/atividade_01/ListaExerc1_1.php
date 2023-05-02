<?php 

    $a = "";
    $b = "";
    $c = "";
    $x1 = "";
    $x2 = "";
    $delta = "";
    $boton = "";
    $erro = "";

    if(isset ($_POST["calcular"])){
        $boton = $_POST["calcular"];

        if(isset ($_POST["valora"])){
            $a = $_POST["valora"];
        }

        if(isset ($_POST["valorb"])){
            $b = $_POST["valorb"];
        }

        if(isset ($_POST["valorc"])){
            $c = $_POST["valorc"];
        }

        if(is_numeric($a) && is_numeric($b) && is_numeric($c)){

            $delta = pow($b, 2)-4*$a*$c;
            $x1 = round((-$b + sqrt($delta))/2*$a, 2) ;
            $x2 = round((-$b - sqrt($delta))/2*$a, 2) ;

        }else if($a == null || $b == null || $c == null){
            $erro = "Coloque todos os valores corretamente!";
        }else{
            $erro = "Somente valores!";
        }

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

        <p>Mensagens: <?php echo $erro ?></p>

        <p><label for="nt1">Digite a nota a: <input type="text" name="valora"></label></p>

        <p><label for="nt2">Digite a nota b: <input type="text" name="valorb"></label></p>

        <p><label for="nt3">Digite a nota c: <input type="text"  name="valorc"></label></p>

        <p><input type="submit" name="calcular" value="Calcule"></p>

        <p>O valor de X1: <?php echo $x1 ?></p>
        <p>O valor de X2: <?php echo $x2 ?></p>

    </form>

</body>