<?php
    $nome=$_GET["origem"];
    $rua=$_GET["destino"];
    $numero=$_GET["distancia"];
    $consumo=$_GET["pedagios"];

    if ($consumo > 120 ){
        $valorPagar = $consumo * 0.42;
    }
    else{
        $valorPagar = $consumo * 0.32;
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Conta de Luz</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <h1>Conta de luz de <?= $nome ?>.</h1>
    <h1>Rua <?= $rua ?> , 500.</h1>
    <?php 
        if($consumo > 120){
            echo("<h1 style='color:red'> Consumo: $consumo KWh </h1>");
        }
        else{
            echo("<h1 style='color:blue'> Consumo: $consumo KWh - Obrigado por Economizar! </h1>");
        }
    
    ?>
    <h1>Valor a pagar: R$ <?= $valorPagar ?></h1>
</body>
</html>