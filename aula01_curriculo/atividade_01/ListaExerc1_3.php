<?php 

    $peso = "";
    $altura = "";
    $botao = "";
    $imc = "";
    $resultado = "";

    if(isset($_POST["calcular"])){
        $botao = $_POST["calcular"];

        if(isset($_POST["peso"])){
            $peso = $_POST["peso"];
        }

        if(isset($_POST["altura"])){
            $altura = $_POST["altura"];
        }

        $imc = $peso/($altura * $altura);

        if($imc < 18.5){
            $resultado = "Seu IMC é de ". $imc. ". Você está abaixo do peso :(";
        }else if($imc <= 25){
            $resultado = "Seu IMC é de ". $imc. ". Você está no peso ideal. :D";
        }else if($imc <= 30){
            $resultado = "Seu IMC é de ". $imc. ". Você está acima do peso. ";
        }else{
            $resultado = "Seu IMC é de ". $imc. ". Você está obeso. ;(";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule seu IMC</title>
</head>
<body>
    <form action="ListaExerc1_3.php" method="post">
        <h1>Calcule seu IMC</h1>

        <p><label for="altura">Informe sua altura: <input type="text" name="altura"></label></p>
        <p><label for="peso">Informe seu peso: <input type="text" name="peso"></label></p>
        
        <p><input type="submit" value="Calcule" name="calcular"></p>

        <p>Resultado: <?php echo $resultado?></p>
    </form>

</body>
</html>