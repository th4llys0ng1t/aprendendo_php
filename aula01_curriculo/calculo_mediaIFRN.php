<?php 

    $botao = "";
    $msg = "";
    $nota1 = "";
    $nota2 = "";
    $nota3 = "";
    $nota4 = "";
    $media = "";
    
    if(isset ($_POST["calcular"])){
        $botao = $_POST["calcular"];

        if(isset ($_POST["nota1"])){
            $nota1 = $_POST["nota1"];
    
        }
        if(isset ($_POST["nota2"])){
            $nota2 = $_POST["nota2"];
    
        }
        if(isset ($_POST["nota3"])){
            $nota3 = $_POST["nota3"];
    
        }
        if(isset ($_POST["nota4"])){
            $nota4 = $_POST["nota4"];
    
        }

        $media = ($nota1*2 + $nota2*2 + $nota3*3 + $nota4*3)/10;

        $msg = "O valor da nota é: ". $media;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Cálculo da média mediante</title>
</head>
<body>
    <div class ="principal">
        <form action="calculo_mediaIFRN.php" method="post">

            <div class="titulo" class="text-success">
                <h1>Calculo da média IFRN</h1>
            </div>

            <div class="mensage">
                <p>Mensagem: <?php echo $msg ?></p>
            </div>
    
            <div class="nomes">
                <p><label for="lb1">Nota 1:</label></p> 
            </div> 
            <div class="campos">
                <p><input type="text" name="nota1"></p>
            </div>

            <div class="nomes">
                <p><label for="lb2">Nota 2:</label></p>
            </div>
            <div class="campos">
                <p><input type="text" name="nota2"></p>
            </div> 
            
            <div class="nomes">
                <p><label for="lb3">Nota 3:</label></p>
            </div>
            <div class="campos">
                <p><input type="text" name="nota3"></p>
            </div>
    
            <div class="nomes">
                <p><label for="lb4">Nota 4:</label></p>
            </div>
            <div class="campos">
                <p><input type="text" name="nota4"></p>
            </div>

            <div class="botao">
                <p><input style="width: 350px; height:40px; background-color: aqua; font-size: 20px" type="submit" name="calcular" value="Média"></p>
            </div>

        </form>
    </div>
    
</body>
</html>