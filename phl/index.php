<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>PHL Fretes</title>
</head>

<body>
    <form method="GET" action="calcula-frete.php">
        <h1>Calculo de Frete</h1>

        <div class="input-group">
            <label for="origem"> Cidade De Origem </label>
            <input type="text" name="origem" id="origem" required />
        </div>

        <div class="input-group">
            <label for="destino"> Cidade De Destino </label>
            <input type="text" name="destino" id="destino" required />
        </div>

        <div class="input-group">
            <label for="distancia"> Distância em KM </label>
            <input type="number" name="distancia" id="distancia" required />
        </div>

        <div class="input-group">
            <label for="pedagios"> Quantidade de Pedágios </label>
            <input type="number" name="pedagios" id="pedagios" required />
        </div>

        <button>Enviar</button>
    </form>
</body>

</html>