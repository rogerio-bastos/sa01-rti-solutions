<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XD Investimentos - Conversão</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form method="GET" action="conversao.php">
        <h1>Conversão em Dólar(US$) ou Euro(€)</h1>

        <div class="input-group">
            <label for="origem"> Valor em real(R$) </label>
            <input type="number" name="origem" id="origem" required />
        </div>

        <div class="input-group">
            <label for="destino"> Escolha a moeda para conversão </label>
            <input type="checkbox" name="destino1" id="destino1" value="d" />
            <label> Dolár(US$) </label>
            <input type="checkbox" name="destino2" id="destino2" value="e" />
            <label> Euro(€) </label>
        </div>
        <button>Calcular</button>
    </form>
</body>
</html>