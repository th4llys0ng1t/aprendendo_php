<?php
    
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
                <td><input type="checkbox" id="mercadoria1" value="mercadoria1" name="mercadoria[]"></td>
                <td>Chinelo Havaianas</td>
                <td><input type="number" name="qtd1" min="0"></td>
                <td>R$ 7,00</td>
            </tr>
            <tr>
                <td>2</td>
                <td><input type="checkbox" id="mercadoria2" value="mercadoria2" name="mercadoria[]"></td>
                <td>Coca-cola</td>
                <td><input type="number" name="qtd2" min="0"></td>
                <td>R$ 10,00</td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="checkbox" id="mercadoria3" value="mercadoria3" name="mercadoria[]"></td>
                <td>Maionese</td>
                <td><input type="number" name="qtd3" min="0"></td>
                <td>R$ 5,00</td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="checkbox" id="mercadoria4" value="mercadoria4" name="mercadoria[]"></td>
                <td>Bola de futebol</td>
                <td><input type="number" name="qtd4" min="0"></td>
                <td>R$ 50,00</td>
            </tr>
        </table><br>

        <input type="submit" value="Comprar">
    </form>
</body>
</html>