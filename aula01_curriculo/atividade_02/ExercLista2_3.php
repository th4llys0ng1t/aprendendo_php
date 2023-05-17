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

        function conversor($numero){

            $manip = "";

            if($numero <= 50 && $numero > 0){

                while($numero/50 == 1){
                    $manip = "L";
                    $numero -= 50;
                }
                while($numero/40 >= 1){
                    $manip = "XL";
                    $numero -= 40;
                }
                while($numero/10 >= 1){
                    $manip .= "X";
                    $numero -= 10;
                }
                while($numero/9 >= 1){
                    $manip .= "IX";
                    $numero -= 9;
                }
                while($numero/5 >= 1){
                    $manip .= "V";
                    $numero -= 5;
                }
                while($numero/4 >= 1){
                    $manip .= "IV";
                    $numero -= 4;
                }
                while($numero/3 >= 1){
                    $manip .= "III";
                    $numero -= 3;
                }
                while($numero/2 >= 1){
                    $manip .= "II";
                    $numero -= 2;
                }
                while($numero/1 == 1){
                    $manip .= "I";
                    $numero -= 1;
                }

            }else if($numero > 50){
                $manip = "Número maior que 50.";
            }else if($numero < 0){
                $manip = "Número menor 0.";
            }else if($numero == 0){
                $manip = "Número igual 0.";
            }

            return $manip;

        }

        if($numero <= 50 && $numero > 0){
            $conversor = conversor($numero);
        }else{
            $mensagem = conversor($numero);
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