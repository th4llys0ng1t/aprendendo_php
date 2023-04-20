<?php 

    $a = "";
    $b = "";
    $c = "";
    $resultado = "";
    $msg_valid = "";
    $msg_alert = "";


    if(isset ($_POST["calcular"])){

        if(isset ($_POST["vla"])){
            $a = $_POST["vla"];
        }else{
            $msg_alert = "falta o valor a";
        }

        if(isset ($_POST["vlb"])){
            $a = $_POST["vlb"];
        }else{
            $msg_alert = "falta o valor b";
        }

        if(isset ($_POST["vlc"])){
            $a = $_POST["vlc"];
        }else{
            $msg_alert = "falta o valor c";
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
    <form action="">
        <h1>Calcule sua equação de 2° grau</h1>

        <p><label for="nt1">Digite a nota a: </label></p>
        <p><input type="text" name="vla"></p>

        <p><label for="nt2">Digite a nota b:</label></p>
        <p><input type="text" name="vlb"></p>

        <p><label for="nt3">Digite a nota c:</label></p>
        <p><input type="text"  name="vlc"></p>

        <p><input type="submit" names="calcular" value="Calcule"></p>

        <p>Resultado: <?php echo $resultado?></p>


    </form>

    
</body>