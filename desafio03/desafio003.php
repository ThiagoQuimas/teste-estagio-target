<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Faturamento</h1>
        <?php

    $json = file_get_contents('dados.json');
    $data = json_decode($json, true);

    $faturamentos = $data['faturamento'];

    $menor = PHP_FLOAT_MAX;
    $maior = PHP_FLOAT_MIN;
    $soma = 0;
    $diasComFaturamento = 0;
    $diasAcimaDaMedia = 0;

    
    foreach ($faturamentos as $dia) {
        $valor = $dia['valor'];
        
        if ($valor > 0) {
            if ($valor < $menor) {
                $menor = $valor;
            }
            if ($valor > $maior) {
                $maior = $valor;
            }
            $soma += $valor;
            $diasComFaturamento++;
        }
    }

    
    $media = $soma / $diasComFaturamento;

    
    foreach ($faturamentos as $dia) {
        if ($dia['valor'] > $media) {
            $diasAcimaDaMedia++;
        }
    }

  
    echo "Menor valor de faturamento: R$ " . number_format($menor, 2, ',', '.') . "\n";
    echo "Maior valor de faturamento: R$ " . number_format($maior, 2, ',', '.') . "\n";
    echo "Número de dias com faturamento acima da média: $diasAcimaDaMedia\n";
?>
   <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
