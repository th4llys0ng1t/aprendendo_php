<?php 

    $conversor = "";
    $mensagem = "";
    $numero = 0;
    $botao = "";

    if(isset($_POST["converter"])){
        $botao = $_POST["converter"];

        if(isset($_POST["numero"])){
            $numero = $_POST["numero"];
        }

        if($numero > 50 || $numero <= 0){
            $mensagem = "Fora da faixa permitida.";
        }

        function conversor($numero){
            
        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão romana</title>
</head>
<body>

    <form action="ExercLista2_3.php" method="post">

        <h1>Converta de arábico para romano.</h1>

        <h3>Mensagens: <?php echo $mensagem ?></h3>

        <h4>Digite o valor para conversão: </h4>

        <p>
            <label for="numero">Número: </label>
            <input type="number" name="numero">
        </p>

        <p>
            <input type="submit" value="Converta" name="converter">
        </p>

        <h3>Em romano é: <?php echo $conversor ?></h3>

    </form>
    
</body>
</html>