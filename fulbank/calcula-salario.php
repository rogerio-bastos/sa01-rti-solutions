<?php
    $nomeFuncionario = $_GET["origem"];
    $salarioFuncionario = $_GET["destino"];

    
    if($salarioFuncionario <= 5000){
        $salarioFuncionario = $salarioFuncionario +     ($salarioFuncionario * (20/100));
    }
    else{
        $salarioFuncionario = $salarioFuncionario + ($salarioFuncionario * (10/100));
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <h1> "O <?= $nomeFuncionario ?> passará a receber R$ <?= number_format($salarioFuncionario, 2, ",", ".") ?>" </h1>
</body>     
</html>