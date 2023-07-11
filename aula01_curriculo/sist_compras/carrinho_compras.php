<?php

    $i = 0;
    $merc = array();
    $merc[0] = "";
    $merc[1] = "";
    $merc[2] = "";
    $merc[3] = "";

    if(isset($_POST["compre"])){
        $comprar = $_POST["compre"];

        while($i < 4){

            if(isset($_POST["pd". $i])){
                $merc[$i] = "Mercadoria " . $i . " foi selecionada <br>";
            }

            $i++;
        }
        
        /* 
            if(isset($_POST["pd1"])){
                $chinelo = "Mercadoria 1 verificada";
            }

            if(isset($_POST["qtd1"])){
                $qtd = $_POST["qtd1"];
            }

            if(isset($_POST["pd2"])){
                $chinelo = "Mercadoria 2 verificada";
            }

            if(isset($_POST["qtd2"])){
                $qtd = $_POST["qtd2"];
            }

            if(isset($_POST["pd3"])){
                $chinelo = "Mercadoria 3 verificada";
            }

            if(isset($_POST["qtd3"])){
                $qtd = $_POST["qtd3"];
            }

            if(isset($_POST["pd4"])){
                $chinelo = "Mercadoria 4 verificada";
            }

            if(isset($_POST["qtd4"])){
                $qtd = $_POST["qtd4"];
            }
        */
    
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carrinho de compras</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
        $t = 0;
        
        while($t < 4){
            echo $merc[$t];
            $t++;
        }
    ?>

    <form action="carrinho_compras.php" method="post">
        <table>
            <tr>
                <th colspan="5">Bem vindo ao carrinho de compras!!</th>
            </tr>
            <tr>
                <th>Indice</th>
                <th>#</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="checkbox" id="mercadoria0" value="mercadoria0" name="pd0"></td>
                <td>Chinelo Havaianas</td>
                <td><input type="number" name="qtd0" min="0"></td>
                <td>R$ 7,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" id="mercadoria1" value="mercadoria1" name="pd1"></td>
                <td>Coca-cola</td>
                <td><input type="number" name="qtd1" min="0"></td>
                <td>R$ 10,00</td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" id="mercadoria2" value="mercadoria2" name="pd2"></td>
                <td>Maionese</td>
                <td><input type="number" name="qtd2" min="0"></td>
                <td>R$ 5,00</td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" id="mercadoria3" value="mercadoria3" name="pd3"></td>
                <td>Bola de futebol</td>
                <td><input type="number" name="qtd3" min="0"></td>
                <td>R$ 50,00</td>
            </tr>
        </table><br>

        <input type="submit" value="Comprar" name="compre">
    </form>
</body>
</html>