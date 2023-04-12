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
    <style type="text/css">
        
        form{
            background-color: green;
        }
        table{
            text-align: center;
        }
        .alinhamento{
            font-family

        }
        
        
        

    </style>
    <title>Cálculo da média mediante</title>
</head>
<body>
    <form action="calculo_mediaIFRN.php" method="post">
        <table>
            <div class="alinhamento">
                <tr>
                    <td>Mensagens: <?php echo $msg ?></td>
                </tr>
            </div>
            <tr>
                <td>Cálculo da Média do IFRN</td>
            </tr>
            <tr>
                <td><label for="lb1">Nota 1:</label></td>
                <td><input type="text" name="nota1"></td>
            </tr>
            <tr>
                <td><label for="lb2">Nota 2:</label></td>
                <td><input type="text" name="nota2"></td>
            </tr>
            <tr>
                <td><label for="lb3">Nota 3:</label></td>
                <td><input type="text" name="nota3"></td>
            </tr>
            <tr>
                <td><label for="lb4">Nota 4:</label></td>
                <td><input type="text" name="nota4"></td>
            </tr>
            <tr>
                <td><input type="submit" name="calcular"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>