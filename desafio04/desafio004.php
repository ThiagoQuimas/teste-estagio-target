<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faturamento mensal por estado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Faturamento mensal por estado</h1>
    
    <?php
    $faturamento_estados = [
        "SP" => 67836.43,
        "RJ" => 36678.66,
        "MG" => 29229.88,
        "ES" => 27165.48,
        "Outros" => 19849.53
    ];

    $total_faturamento = array_sum($faturamento_estados);

    foreach ($faturamento_estados as $estado => $valor) {
        $percentual = ($valor / $total_faturamento) * 100;
        echo "$estado: " . number_format($percentual, 2, ',', '.') . "%\n";
    }
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>