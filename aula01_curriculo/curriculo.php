<?php
#Espaço para a declaração de variáveis

$foto = "joia_gato.png";
$endereco_lattes = "000111222333444";
$ultima_atualizacao = "04/04/2023";

$nome = "Thallyson Kauã dos Santos Vidal";
$endereco = "Rua Gérson Beniz de Oliveira";
$logradouro = "Rua Bromélias flamejantes";
$bairro = "Planalto I";
$cidade = "Mataraca";
$estado = "Paraíba";
$cep = "58292-000";
$telefone = "40028922";

$titulo = "Apresentador de slides";
$instituicao = "IFRN";
$per = "6 horas";

$veiculo = "Hilux do Serviço";
$periodo = "Manhã";
$cargo = "Apresentador de slides";
$carga = "190 h";

$peri = "10 h";
$tit = "Como apresentar slides com maestria";
$resumo = "Aprenda a apresentar slides de forma simples e extremamente didática";

$english = "100%";
$espanish = "50%";
$francish = "95%";

?>

<!DOCTYPE html>
<html>
<head>
<title>Currículo Vitae</title>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='curriculo.css'>
    <script src='main.js'></script>
</head>
<body>
<table align="center">
    <tr>
        <td colspan="3"><h1>Curriculo Vitae</h1></td>
    </tr>
    <tr>
        <td style="width: 250px">
            <img src="<?php echo "$foto"?>" alt="Foto Curriculo" width="250" height="300">
        </td>
        <td colspan="2" style="text-align: left;">
            <p>Endereço Lattes: <?php echo "$endereco_lattes"?></p>
            <p>Última Atualização: <?php echo "$ultima_atualizacao"?></p>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Identificação</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Nome: </p>
            <p>Endereço Profissional: </p>
            <p>Logradouro: </p>
            <p>Bairro: </p>
            <p>Cidade: </p>
            <p>Estado: </p>
            <p>CEP: </p>
            <p>Telefone: </p>
        </td>
        <td>
            <?php echo "$nome". "</br>". "</br>"?>
            <?php echo "$endereco" . "</br>". "</br>"?>
            <?php echo "$logradouro". "</br>". "</br>"?>
            <?php echo "$bairro". "</br>". "</br>"?>
            <?php echo "$cidade". "</br>". "</br>"?>
            <?php echo "$estado". "</br>". "</br>"?>
            <?php echo "$cep". "</br>". "</br>"?>
            <?php echo "$telefone"?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Formação Acadêmica</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Título: </p>
            <p>Instituição: </p>
            <p>Príodo de duração: </p>
        </td>
        <td>
            <?php echo "$titulo". "</br>". "</br>"?>
            <?php echo "$instituicao". "</br>". "</br>"?>
            <?php echo "$per"?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Atuação Profissional</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Vínculo Institucional: </p>
            <p>Período: </p>
            <p>Cargo: </p>
            <p>Carga-horária: </p>
        </td>
        <td>
            <?php echo "$veiculo". "</br>". "</br>"?>
            <?php echo "$periodo". "</br>". "</br>"?>
            <?php echo "$cargo". "</br>". "</br>"?>
            <?php echo "$carga"?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Projetos</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Período: </p>
            <p>Título: </p>
            <p>Resumo:</p>
        </td>
        <td>
            <?php echo "$peri". "</br>". "</br>"?>
            <?php echo "$tit". "</br>". "</br>"?>
            <?php echo "$resumo"?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><h2>Idiomas</h2></td>
    </tr>
    <tr>
        <td colspan="2">
            <p>Inglês - Nível: </p>
            <p>Espanhol - Nível: </p>
            <p>Francês - Nível: </p>
        </td>
        <td>
            <?php echo "$english". "</br>". "</br>"?>
            <?php echo "$espanish". "</br>". "</br>"?>
            <?php echo "$francish"?>
        </td>
    </tr>
    
</table>
</body>
</html>