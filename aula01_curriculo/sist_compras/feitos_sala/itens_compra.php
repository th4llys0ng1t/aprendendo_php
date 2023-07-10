<?php 
    session_start();

    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = $_SESSION['contador'] + 1;
        $_SESSION['itens'] = "";
    }

    $item1 = (isset($_POST['item1']) ? $_POST['item1']: "");
    $item2 = (isset($_POST['item2']) ? $_POST['item2']: "");
    $item3 = (isset($_POST['item3']) ? $_POST['item3']: "");

    if($item1 != ""){
        if($_SESSION['contador'] == 0){
            $_SESSION['itens'] = array($_SESSION['contador'] => $item1);
            $_SESSION['contador'] = $_SESSION['contador'] + 1;
        }else{
            $_SESSION['itens'] = 
                array_merge($_SESSION['itens'],
                    array($_SESSION['contador'] => $item1)); 
            $_SESSION['contador'] = $_SESSION['contador'] + 1;
        }
    }

    if($item2 != ""){
        if($_SESSION['contador'] == 0){
            $_SESSION['itens'] = array($_SESSION['contador'] => $item2);
            $_SESSION['contador'] = $_SESSION['contador'] + 1;
        }else{
            $_SESSION['itens'] = 
                array_merge($_SESSION['itens'],
                    array($_SESSION['contador'] => $item2)); 
            $_SESSION['contador'] = $_SESSION['contador'] + 1;
        }
    }

    if($item3 != ""){
        if($_SESSION['contador'] == 0){
            $_SESSION['itens'] = array($_SESSION['contador'] => $item3);
            $_SESSION['contador'] = $_SESSION['contador'] + 1;
        }else{
            $_SESSION['itens'] = 
                array_merge($_SESSION['itens'],
                    array($_SESSION['contador'] => $item3)); 
            $_SESSION['contador'] = $_SESSION['contador'] + 1;
        }
    }

    if($item1 != ""){
        $_SESSION['itens'] = array($_SESSION['contador'] => $item1);
    }

    if($item2 != ""){
        $_SESSION['itens'] = array($_SESSION['contador'] => $item2);
    }

    if($item3 != ""){
        $_SESSION['itens'] = array($_SESSION['contador'] => $item3);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Site de Compras</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="itens_compra.php" method="post">
        <table>
            <tr>
                <th colspan="4">Itens da Compra</th>
            </tr>
            <tr>
                <td>Nike Jordan</td>
                <td>Tamanho: 42</td>
                <td>Cor: Preto</td>
                <td>Valor: R$ 1000,00</td>
                <td><input type="submit" value="Item 1" name="item1"/></td>
            </tr>

            <tr>
                <td>Adidas Sport</td>
                <td>Tamanho: 40</td>
                <td>Cor: Branco</td>
                <td>Valor: R$ 500,00</td>
                <td><input type="submit" value="Item 2" name="item2"/></td>
            </tr>

            <tr>
                <td>All Star I'll rock you</td>
                <td>Tamanho: 37</td>
                <td>Cor: Verde</td>
                <td>Valor: R$ 700,00</td>
                <td><input type="submit" value="Item 3" name="item3"/></td>
            </tr>
        </table>
    </form>

    <ul>
        <li>Lista - Contador <?php echo $_SESSION['contador'] ?></li>
        <?php 
            if(isset($_SESSION['itens'])){
                for($i = 0; $i < $_SESSION['contador']; $i++){
                    echo "<li> session: " . $_SESSION['itens'][0] . "</li>";
                }  
            }
        ?>
    </ul>
</body>
</html>