<?php 
    $a = array("Enmili", "Thallyson", "Paulo Cesada", "Victoncio");
    $b = array("Josefa", "Valter", "Thalya", "Jeferson");

    $produto = array("Uva", "Pão", "Maçuin");
    $mercado = array("Supercop", "Nordestão", "Pai e Filho");
    $preco = array(
        array(10, 6, 10),
        array(20, 10, 12),
        array( 5, 2, 3)       
    );
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Arrays 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Teste arrays</h1>

    <?php 
        for($i=0; $i < count($a); $i++){
            echo $a[$i]."</br>";
        }

        echo "</br>";

        foreach($b as $x => $x_value){
            echo $x . "-" . $x_value . "</br>";
        }
    ?>

    <table>
        <tr>
            <th></th>
            <?php 
                for($i=0; $i < count($produto); $i++){
                    echo "<th>" . $produto[$i] . "</th>";
                }
            ?>
        </tr>
        <?php 
            for($i=0; $i<count($mercado); $i++){
                echo "<tr>";
                    echo "<td>" . $mercado[$i] . "</td>";
                echo "</tr>";

                for($j=0; $j<3; $j++){
                    echo "<td>" . $preco[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
