<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro - Conta</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form method="GET" action="calculo-conta-luz.php">
        <h1>Cálculo Conta de Luz</h1>

        <div class="input-group">
            <label for="origem"> Nome </label>
            <input type="text" name="origem" id="origem" required />
        </div>

        <div class="input-group">
            <label for="destino"> Rua </label>
            <input type="text" name="destino" id="destino" required />
        </div>

        <div class="input-group">
            <label for="distancia"> Número </label>
            <input type="text" name="distancia" id="distancia" required />
        </div>

        <div class="input-group">
            <label for="pedagios"> Consumo (KWh) </label>
            <input type="number" name="pedagios" id="pedagios" required />
        </div>

        <button>Enviar</button>
    </form>
</body>
</html>