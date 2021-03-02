<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fulbank - Salários</title>
    <link rel="stylesheet" href="../styles-global.css">
</head>
<body>
    <form method="GET" action="calcula-salario.php">
            <h1>Cálculo de Salários</h1>

            <div class="input-group">
                <label for="origem"> Nome do Funcionário </label>
                <input type="text" name="origem" id="origem" required />
            </div>
            <div class="input-group">
                <label for="destino"> Salário do funcionário </label>
                <input type="text" name="destino" id="destino" required />
            </div>
            <button>Calcular</button>
    </form>
</body>
</html>