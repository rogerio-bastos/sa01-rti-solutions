<?php
    $valorReal=$_GET["origem"];
    
    
    if($_GET["destino1"] == "d" ){
        $conversaoDolar = $valorReal * 5.41;
        echo ("<h1> Valor total em dólar(US$): US$ $conversaoDolar</h1>");
    }
    if($_GET["destino2"] == "e" ){
        $conversaoEuro = $valorReal * 6.57;
        echo ("<h1> Valor total em euro(€): € $conversaoEuro</h1>");
    }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>

</body>
</html>